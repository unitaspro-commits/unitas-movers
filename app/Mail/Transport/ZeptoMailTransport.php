<?php

namespace App\Mail\Transport;

use Illuminate\Support\Facades\Http;
use Symfony\Component\Mailer\SentMessage;
use Symfony\Component\Mailer\Transport\AbstractTransport;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\MessageConverter;

class ZeptoMailTransport extends AbstractTransport
{
    public function __construct(
        private string $apiKey,
    ) {
        parent::__construct();
    }

    protected function doSend(SentMessage $message): void
    {
        $email = MessageConverter::toEmail($message->getOriginalMessage());

        $toAddresses = array_map(fn (Address $addr) => [
            'email_address' => [
                'address' => $addr->getAddress(),
                'name' => $addr->getName(),
            ],
        ], $email->getTo());

        $from = $email->getFrom()[0] ?? null;

        $payload = [
            'from' => [
                'address' => $from?->getAddress() ?? config('mail.from.address'),
                'name' => $from?->getName() ?? config('mail.from.name'),
            ],
            'to' => $toAddresses,
            'subject' => $email->getSubject(),
        ];

        if ($html = $email->getHtmlBody()) {
            $payload['htmlbody'] = $html;
        } elseif ($text = $email->getTextBody()) {
            $payload['textbody'] = $text;
        }

        $response = Http::withHeaders([
            'Authorization' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->timeout(15)->post('https://api.zeptomail.com/v1.1/email', $payload);

        if ($response->failed()) {
            throw new \RuntimeException(
                'ZeptoMail API error: ' . $response->body()
            );
        }
    }

    public function __toString(): string
    {
        return 'zeptomail';
    }
}
