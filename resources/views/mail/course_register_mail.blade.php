<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="Kicc0lvC9D2U58MVrSrxiyRlxKK5CQwg4apuB3Tc" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link href="https://i.ibb.co/52jNg3v/favicon.png" rel="apple-touch-icon-precomposed" />
    <link href="https://i.ibb.co/52jNg3v/favicon.png" rel="shortcut icon" type="image/png" />
    <meta name="author" content="" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <title>NGenIt Training</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="https://preview.keenthemes.com/metronic8/demo1/assets/plugins/global/plugins.bundle.css"
        rel="stylesheet" type="text/css" />
    <link href="https://preview.keenthemes.com/metronic8/demo1/assets/css/style.bundle.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <style>
        html,
        body {
            padding: 0;
            margin: 0;
            font-family: Inter, Helvetica, "sans-serif";
            height: 100%;
            width: 100%;
        }

        .center-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            /* Full viewport height */
            width: 100%;
            max-width: 600px;
            margin: auto;
        }

        .center-content {
            background-color: #ffffff;
            max-width: 600px;
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        a:hover {
            color: #009ef7;
        }
    </style>
</head>

<body id="kt_body" class="app-blank">
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display: none; visibility: hidden"></iframe>
    </noscript>
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="center-wrapper">
            <div class="center-content">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" height="auto"
                    style="border-collapse: collapse; margin: 0 auto">
                    <tbody>
                        <tr>
                            <td align="center" valign="top" style="text-align: center; padding-bottom: 10px">
                                <div style="text-align: center; margin: 0 15px 34px 15px">
                                    <div
                                        style="
                        font-size: 14px;
                        font-weight: 500;
                        margin-bottom: 27px;
                        font-family: Arial, Helvetica, sans-serif;
                      ">
                                        <p
                                            style="
                          margin-bottom: 9px;
                          color: #181c32;
                          font-size: 22px;
                          font-weight: 700;
                        ">
                                            Hey <span class="text-primary">{{ $mailData['name'] }}</span>, thanks for
                                            signing up!
                                        </p>
                                        <p style="margin-bottom: 2px; color: #7e8299">
                                            Congratulations! You have registered for this course successfully. Please
                                            log <br> in to your dashboard for further details and make the payment as
                                            soon as possible
                                        </p>
                                    </div>
                                    <a href="https://training.ngengroup.org/login" target="_blank"
                                        style="
                        background-color: #50cd89;
                        border-radius: 6px;
                        display: inline-block;
                        padding: 11px 19px;
                        color: #ffffff;
                        font-size: 14px;
                        font-weight: 500;
                        margin-top: 10px;
                        text-decoration: none;
                      ">
                                        Activate Account
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top" style="padding-bottom: 10px">
                                <div
                                    style="background: #f9f9f9;border-radius: 12px;padding: 35px 30px;text-align: left;margin: 0 auto;width: 65%;">

                                    {{-- New Box --}}
                                    <div style="display: flex;align-items: center;margin-bottom: 15px;">
                                        <div
                                            style="display: flex;justify-content: center;align-items: center;width: 40px;height: 40px;margin-right: 13px;position: relative;">
                                            <img alt="Logo"
                                                src="https://preview.keenthemes.com/metronic8/demo1/assets/media/email/icon-polygon.svg" />
                                            <span
                                                style="position: absolute;color: #50cd89;font-size: 16px;font-weight: 600;">
                                                <i class="fa-solid fa-envelope"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <div style="display: flex;align-items: center;margin-bottom: 5px;">
                                                <a href="#" target="_blank"
                                                    style="text-decoration: none;color: #181c32;font-size: 16px;font-weight: 600;">
                                                    Register Course:
                                                </a>
                                            </div>
                                            <span style="color: #7e8299">
                                                {{-- {{ $mailData->courseName->name }} --}}
                                            </span>
                                        </div>
                                    </div>
                                    {{-- New Box End --}}

                                    {{-- Email Box Start --}}
                                    <div style="display: flex;align-items: center;margin-bottom: 15px;">
                                        <div
                                            style="display: flex;justify-content: center;align-items: center;width: 40px;height: 40px;margin-right: 13px;position: relative;">
                                            <img alt="Logo"
                                                src="https://preview.keenthemes.com/metronic8/demo1/assets/media/email/icon-polygon.svg" />
                                            <span
                                                style="position: absolute;color: #50cd89;font-size: 16px;font-weight: 600;">
                                                <i class="fa-solid fa-envelope"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <div style="display: flex;align-items: center;margin-bottom: 5px;">
                                                <a href="#" target="_blank"
                                                    style="text-decoration: none;color: #181c32;font-size: 16px;font-weight: 600;">
                                                    Your Email:
                                                </a>
                                            </div>
                                            <span style="color: #7e8299">
                                                {{ $mailData['email'] }}
                                            </span>
                                        </div>
                                    </div>
                                    <div style="display: flex; align-items: center">
                                        <div
                                            style="display: flex;justify-content: center;align-items: center;width: 40px;height: 40px;margin-right: 13px;position: relative;">
                                            <img alt="Logo"
                                                src="https://preview.keenthemes.com/metronic8/demo1/assets/media/email/icon-polygon.svg" />
                                            <span
                                                style="position: absolute;color: #50cd89;font-size: 16px;font-weight: 600;
                          ">
                                                <i class="fa-solid fa-lock"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <div
                                                style="
                            display: flex;
                            align-items: center;
                            margin-bottom: 5px;
                          ">
                                                <a href="#" target="_blank"
                                                    style="
                              text-decoration: none;
                              color: #181c32;
                              font-size: 16px;
                              font-weight: 600;
                            ">
                                                    Your Password
                                                </a>
                                            </div>
                                            <span style="color: #7e8299">
                                                {{ $mailData['phone'] }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top"
                                style="padding-bottom: 10px; padding-top: 30px; text-align: center">
                                <div style="font-size: 13px">
                                    <p style="color: #7e8299; margin-bottom: 8px">
                                        If you have any questions, feel free to reach out us <a
                                            href="mailto:support@ngenitltd.com"
                                            style="color: #009ef7; text-decoration: none">support@ngenitltd.com</a>
                                    </p>
                                    <p style="color: #7e8299; margin-bottom: 10px">
                                        &copy; 2024 NGenit Training. All rights reserved.
                                    </p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>


{{-- <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h4 class="fw-bold">Dear {{ $mailData['name'] }}</h4>

        <p>Congratulations! You have registered for this course successfully. Please log in to your dashboard for
            further details and make the payment as soon as possible.</p>

        <p class="mb-0">Email: {{ $mailData['email'] }}</p>
        <p class="mb-0">password: <span class="text-primary fw-bolder">{{ $mailData['phone'] }}</span></p>
        <p>Visit URL: <a href="https://training.ngengroup.org/login">https://training.ngengroup.org/login</a></p>

        <p class="mb-0">Regards and Thanks,</p>
        <span class="fw-bolder">NgenIt Training Team</span>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>

</html> --}}
