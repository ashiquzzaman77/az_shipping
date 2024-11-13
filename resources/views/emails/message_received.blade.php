<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Message Received</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fa;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }

        table {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            overflow: hidden;
        }

        .header {
            background-color: #0044cc;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            font-size: 24px;
        }

        .content {
            padding: 20px;
            font-size: 16px;
        }

        .content p {
            margin-bottom: 15px;
        }

        .content strong {
            color: #333;
        }

        .footer {
            background-color: #f4f7fa;
            padding: 15px;
            text-align: center;
            font-size: 12px;
            color: #999;
        }

        .footer a {
            color: #0044cc;
            text-decoration: none;
        }

        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0044cc;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        /* Mobile Responsive */
        @media (max-width: 600px) {
            .content {
                padding: 15px;
            }

            .cta-button {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <table>
        {{-- <tr>
            <td class="header">
                New Message Received
            </td>
        </tr> --}}
        <tr>
            <td class="content">
                <p>Dear <strong>{{ $teamName }}</strong>,</p>

                <p><strong>Subject:</strong> {{ $item->subject }}</p>

                <p>{!! $item->message !!}</p>

                {{-- <p><strong>Time:</strong> {{ \Carbon\Carbon::parse($item->time)->format('d-m-Y H:i') }}</p> --}}

                <!-- Optional CTA Button -->
                {{-- <a href="{{ route('some.route') }}" class="cta-button">View Message</a> --}}
            </td>
        </tr>
        <tr>
            <td class="footer">
                <p>If you have any questions, feel free to <a href="mailto:operation.azss@gmail.com">contact us</a>.</p>
                <p>&copy; {{ date('Y') }} AZ Shipping Services. All rights reserved.</p>
            </td>
        </tr>
    </table>
</body>

</html>
