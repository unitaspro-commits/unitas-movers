<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quote Request Received</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f5f7; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color: #f4f5f7; padding: 24px 0;">
        <tr>
            <td align="center">
                <table role="presentation" width="600" cellpadding="0" cellspacing="0" style="max-width: 600px; width: 100%; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                    {{-- Header --}}
                    <tr>
                        <td style="background-color: #1e3a5f; padding: 32px; text-align: center;">
                            <h1 style="margin: 0; color: #ffffff; font-size: 24px; font-weight: 700;">Unitas Movers</h1>
                            <p style="margin: 8px 0 0; color: #a3bfdb; font-size: 14px;">Calgary's Trusted Moving Company</p>
                        </td>
                    </tr>

                    {{-- Thank You Message --}}
                    <tr>
                        <td style="padding: 32px 32px 0;">
                            <h2 style="margin: 0 0 16px; font-size: 20px; color: #1e3a5f;">Thank you, {{ $quote->full_name }}!</h2>
                            <p style="margin: 0 0 16px; color: #374151; font-size: 15px; line-height: 1.6;">We've received your quote request and our team is reviewing the details. We'll get back to you with a personalized quote as soon as possible.</p>
                            <p style="margin: 0; padding: 16px; background-color: #eff6ff; border-left: 4px solid #2563eb; border-radius: 0 4px 4px 0; color: #1e40af; font-size: 14px; font-weight: 600; line-height: 1.5;">We'll contact you within 2 hours during business hours (Mon–Sat, 8 AM – 8 PM).</p>
                        </td>
                    </tr>

                    {{-- Move Summary --}}
                    <tr>
                        <td style="padding: 32px 32px 0;">
                            <h3 style="margin: 0 0 16px; font-size: 16px; color: #1e3a5f; border-bottom: 2px solid #e5e7eb; padding-bottom: 8px;">Your Move Summary</h3>
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="padding: 8px 0; color: #6b7280; font-size: 14px; width: 120px; vertical-align: top;">From</td>
                                    <td style="padding: 8px 0; color: #111827; font-size: 14px;">{{ $quote->moving_from }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px 0; color: #6b7280; font-size: 14px; vertical-align: top;">To</td>
                                    <td style="padding: 8px 0; color: #111827; font-size: 14px;">{{ $quote->moving_to }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px 0; color: #6b7280; font-size: 14px; vertical-align: top;">Date</td>
                                    <td style="padding: 8px 0; color: #111827; font-size: 14px; font-weight: 600;">{{ $quote->move_date->format('l, F j, Y') }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px 0; color: #6b7280; font-size: 14px; vertical-align: top;">Size</td>
                                    <td style="padding: 8px 0; color: #111827; font-size: 14px;">{{ $quote->move_size?->label() ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px 0; color: #6b7280; font-size: 14px; vertical-align: top;">Services</td>
                                    <td style="padding: 8px 0; color: #111827; font-size: 14px;">{{ $quote->services_list }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    {{-- Contact Info --}}
                    <tr>
                        <td style="padding: 32px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color: #f9fafb; border-radius: 8px; padding: 24px;">
                                <tr>
                                    <td style="padding: 0 24px;">
                                        <h3 style="margin: 0 0 12px; font-size: 15px; color: #1e3a5f;">Need to reach us sooner?</h3>
                                        <p style="margin: 0 0 8px; color: #374151; font-size: 14px; line-height: 1.6;">
                                            Call us: <a href="tel:+15874354233" style="color: #2563eb; text-decoration: none; font-weight: 600;">(587) 435-4233</a>
                                        </p>
                                        <p style="margin: 0; color: #374151; font-size: 14px; line-height: 1.6;">
                                            Visit: <a href="https://unitasmovers.ca" style="color: #2563eb; text-decoration: none;">unitasmovers.ca</a>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    {{-- Footer --}}
                    <tr>
                        <td style="background-color: #1e3a5f; padding: 24px 32px; text-align: center;">
                            <p style="margin: 0 0 8px; color: #ffffff; font-size: 14px; font-weight: 600;">Unitas Movers</p>
                            <p style="margin: 0 0 4px; color: #a3bfdb; font-size: 12px;">Licensed & Insured | Calgary, Alberta</p>
                            <p style="margin: 0; color: #a3bfdb; font-size: 12px;">&copy; {{ date('Y') }} Unitas Movers. All rights reserved.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
