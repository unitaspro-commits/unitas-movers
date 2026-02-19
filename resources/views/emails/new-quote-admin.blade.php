<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Quote Request</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f5f7; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color: #f4f5f7; padding: 24px 0;">
        <tr>
            <td align="center">
                <table role="presentation" width="600" cellpadding="0" cellspacing="0" style="max-width: 600px; width: 100%; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                    {{-- Header --}}
                    <tr>
                        <td style="background-color: #1e3a5f; padding: 24px 32px;">
                            <h1 style="margin: 0; color: #ffffff; font-size: 20px; font-weight: 600;">New Quote Request</h1>
                            <p style="margin: 4px 0 0; color: #a3bfdb; font-size: 14px;">Received {{ $quote->created_at->format('M j, Y \a\t g:i A') }}</p>
                        </td>
                    </tr>

                    {{-- Customer Info --}}
                    <tr>
                        <td style="padding: 24px 32px 0;">
                            <h2 style="margin: 0 0 12px; font-size: 16px; color: #1e3a5f; border-bottom: 2px solid #e5e7eb; padding-bottom: 8px;">Customer Details</h2>
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="padding: 6px 0; color: #6b7280; font-size: 14px; width: 140px;">Name</td>
                                    <td style="padding: 6px 0; color: #111827; font-size: 14px; font-weight: 600;">{{ $quote->full_name }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 6px 0; color: #6b7280; font-size: 14px;">Phone</td>
                                    <td style="padding: 6px 0; color: #111827; font-size: 14px;"><a href="tel:{{ $quote->phone }}" style="color: #2563eb; text-decoration: none;">{{ $quote->phone }}</a></td>
                                </tr>
                                <tr>
                                    <td style="padding: 6px 0; color: #6b7280; font-size: 14px;">Email</td>
                                    <td style="padding: 6px 0; color: #111827; font-size: 14px;"><a href="mailto:{{ $quote->email }}" style="color: #2563eb; text-decoration: none;">{{ $quote->email }}</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    {{-- Move Details --}}
                    <tr>
                        <td style="padding: 24px 32px 0;">
                            <h2 style="margin: 0 0 12px; font-size: 16px; color: #1e3a5f; border-bottom: 2px solid #e5e7eb; padding-bottom: 8px;">Move Details</h2>
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="padding: 6px 0; color: #6b7280; font-size: 14px; width: 140px;">Moving From</td>
                                    <td style="padding: 6px 0; color: #111827; font-size: 14px;">{{ $quote->moving_from }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 6px 0; color: #6b7280; font-size: 14px;">Moving To</td>
                                    <td style="padding: 6px 0; color: #111827; font-size: 14px;">{{ $quote->moving_to }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 6px 0; color: #6b7280; font-size: 14px;">Move Date</td>
                                    <td style="padding: 6px 0; color: #111827; font-size: 14px; font-weight: 600;">{{ $quote->move_date->format('l, F j, Y') }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 6px 0; color: #6b7280; font-size: 14px;">Move Size</td>
                                    <td style="padding: 6px 0; color: #111827; font-size: 14px;">{{ $quote->move_size?->label() ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 6px 0; color: #6b7280; font-size: 14px;">Days Until Move</td>
                                    <td style="padding: 6px 0; color: {{ $quote->days_until_move !== null && $quote->days_until_move <= 3 ? '#dc2626' : '#111827' }}; font-size: 14px; font-weight: 600;">
                                        {{ $quote->days_until_move !== null ? $quote->days_until_move . ' days' : 'N/A' }}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    {{-- Services --}}
                    <tr>
                        <td style="padding: 24px 32px 0;">
                            <h2 style="margin: 0 0 12px; font-size: 16px; color: #1e3a5f; border-bottom: 2px solid #e5e7eb; padding-bottom: 8px;">Services Requested</h2>
                            <p style="margin: 0; color: #111827; font-size: 14px; line-height: 1.6;">{{ $quote->services_list }}</p>
                        </td>
                    </tr>

                    {{-- Notes --}}
                    @if($quote->additional_notes)
                    <tr>
                        <td style="padding: 24px 32px 0;">
                            <h2 style="margin: 0 0 12px; font-size: 16px; color: #1e3a5f; border-bottom: 2px solid #e5e7eb; padding-bottom: 8px;">Additional Notes</h2>
                            <p style="margin: 0; color: #111827; font-size: 14px; line-height: 1.6; background-color: #f9fafb; padding: 12px; border-radius: 4px;">{{ $quote->additional_notes }}</p>
                        </td>
                    </tr>
                    @endif

                    {{-- CTA Button --}}
                    <tr>
                        <td style="padding: 32px; text-align: center;">
                            <a href="{{ $adminUrl }}" style="display: inline-block; background-color: #1e3a5f; color: #ffffff; padding: 12px 32px; text-decoration: none; border-radius: 6px; font-size: 14px; font-weight: 600;">View in Admin Panel</a>
                        </td>
                    </tr>

                    {{-- Footer --}}
                    <tr>
                        <td style="background-color: #f9fafb; padding: 16px 32px; border-top: 1px solid #e5e7eb;">
                            <p style="margin: 0; color: #9ca3af; font-size: 12px; text-align: center;">This is an automated notification from Unitas Movers CMS.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
