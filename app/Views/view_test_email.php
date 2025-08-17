<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="x-apple-disable-message-reformatting">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <meta name="supported-color-schemes" content="light dark">
    <title>Your App – Notification</title>
    <!--[if mso]>
  <style type="text/css">
    body, table, td, a { font-family: Arial, sans-serif !important; }
  </style>
  <![endif]-->
    <style>
        /* Defaults (many clients ignore <head> CSS, so critical styles are inlined below) */
        :root {
            color-scheme: light dark;
            supported-color-schemes: light dark;
        }

        body {
            margin: 0;
            padding: 0;
            background: #f5f7fb;
        }

        @media (prefers-color-scheme: dark) {
            .bg-body {
                background: #ffffffff !important;
            }

            .card {
                background-color: #fdfdfdff !important;
                border-radius: 14px;
                overflow: hidden;
                box-shadow:  2px 6px rgba(18, 38, 63, 0.06);
            }

            .text {
                color: #242528ff !important;
            }

            .muted {
                color: #9aa3b2 !important;
            }

            .btn {
                background: #4c8cff !important;
                color: #ffffff !important;
            }

            .divider {
                border-color: #2a2f3a !important;
            }
        }

        @media screen and (max-width: 600px) {
            .container {
                width: 100% !important;
            }

            .px-24 {
                padding-left: 16px !important;
                padding-right: 16px !important;
            }

            .py-24 {
                padding-top: 16px !important;
                padding-bottom: 16px !important;
            }

            .stack {
                display: block !important;
                width: 100% !important;
            }

            .center {
                text-align: center !important;
            }
        }

        .brand {
            display: flex;
            align-items: center;
            gap: .6rem
        }

        .brand .brand-mark {
            width: 28px;
            height: 28px
        }

        .brand-name {
            font-family: Montserrat, Inter, sans-serif;
            font-weight: 900;
            letter-spacing: .08em;
            background: linear-gradient(90deg, var(--text), #4b5563);
            -webkit-background-clip: text;
            color: black;
            text-transform: uppercase;
        }
    </style>
</head>

<body class="bg-body" style="margin:0; padding:0; background:#f5f7fb;">
    <!-- Preheader (hidden preview text) -->
    <div style="display:none; overflow:hidden; line-height:1px; opacity:0; max-height:0; max-width:0; color:transparent;">
        Your action was successful — here are the details. ▸
    </div>

    <!-- Full width background -->
    <table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="background:#f5f7fb;" class="bg-body">
        <tr>
            <td align="center" style="padding:24px;">
                <!-- Container -->
                <table role="presentation" cellpadding="0" cellspacing="0" width="600" class="container" style="width:600px; max-width:100%;">
                    <!-- Header -->
                    <tr>
                        <td class="px-24" style="padding:24px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td class="stack center" style="font-family:Inter, Arial, sans-serif; font-size:14px; color:#7a8699;">
                                        <!-- Replace with your logo image if you have one -->
                                        <div style="display:inline-block; padding:8px 12px; border:1px solid #dde3ee; border-radius:8px; font-weight:700; color:#2b3340;">
                                            <div class="brand">
                                                <svg class="brand-mark" viewBox="0 0 64 64" aria-hidden="true">
                                                    <defs>
                                                        <linearGradient id="g1" x1="0" y1="0" x2="1" y2="1">
                                                            <stop offset="0%" stop-color="#7dd3fc" />
                                                            <stop offset="100%" stop-color="#a78bfa" />
                                                        </linearGradient>
                                                    </defs>
                                                    <path d="M8 40 L24 8 H40 L24 56 H12 Z" fill="url(#g1)" />
                                                    <circle cx="44" cy="44" r="8" fill="url(#g1)" />
                                                </svg>
                                                <span class="brand-name">AGLET</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="stack" style="text-align:right; font-family:Inter, Arial, sans-serif; font-size:12px; color:#7a8699;">
                                        <a href="<?php echo base_url(); ?>" style="color:#7a8699; text-decoration:none;">View in browser</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Card -->
                    <tr>
                        <td style="padding:0 24px 24px 24px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" class="card" style="background:#ffffff; border-radius:14px; overflow:hidden; box-shadow:0 2px 6px rgba(18, 38, 63, 0.06);">
                                <!-- Hero / Title -->
                                <tr>
                                    <td class="py-24 px-24" style="padding:28px 28px 0 28px;">
                                        <h1 class="text" style="margin:0; font-family:Inter, Arial, sans-serif; font-size:22px; line-height:28px; color:#1b2430;">
                                            Hello {{name}},
                                        </h1>
                                        <p class="text" style="margin:10px 0 0; font-family:Inter, Arial, sans-serif; font-size:15px; line-height:22px; color:#404b5a;">
                                            Your action was successful. Below are the details and next steps.
                                        </p>
                                    </td>
                                </tr>

                                <!-- Divider -->
                                <tr>
                                    <td style="padding:20px 28px 0 28px;">
                                        <hr class="divider" style="border:0; border-top:1px solid #eef1f6; height:1px; margin:0;">
                                    </td>
                                </tr>

                                <!-- Body Content -->
                                <tr>
                                    <td class="py-24 px-24" style="padding:20px 28px 0 28px;">
                                        <p class="text" style="margin:0 0 14px; font-family:Inter, Arial, sans-serif; font-size:14px; line-height:22px; color:#2b3340;">
                                            • <strong style="font-weight:600;">Reference:</strong> {{reference_id}}<br>
                                            • <strong style="font-weight:600;">Date:</strong> {{date}}<br>
                                            • <strong style="font-weight:600;">Status:</strong> {{status}}
                                        </p>

                                        <!-- Button (bulletproof) -->
                                        <table role="presentation" cellpadding="0" cellspacing="0" align="left" style="margin:8px 0 0;">
                                            <tr>
                                                <td>
                                                    <![if !mso]>
                                                    <a class="btn" href="{{cta_url}}"
                                                        style="display:inline-block; background:#2b6fff; color:#ffffff; text-decoration:none; font-family:Inter, Arial, sans-serif; font-size:14px; font-weight:700; line-height:42px; height:42px; padding:0 20px; border-radius:8px; border:1px solid #2b6fff;">
                                                        {{cta_text}}
                                                    </a>
                                                    <![endif]>
                                                </td>
                                            </tr>
                                        </table>

                                        <p class="muted" style="clear:both; margin:16px 0 0; font-family:Inter, Arial, sans-serif; font-size:12px; line-height:18px; color:#7a8699;">
                                            If you didn’t request this, you can safely ignore this email.
                                        </p>
                                    </td>
                                </tr>

                                <!-- Spacing -->
                                <tr>
                                    <td style="height:10px; line-height:10px; font-size:0;">&nbsp;</td>
                                </tr>

                                <!-- Details Table -->
                                <tr>
                                    <td class="px-24" style="padding:0 28px 28px 28px;">
                                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">
                                            <thead>
                                                <tr>
                                                    <th align="left" style="padding:10px 12px; font-family:Inter, Arial, sans-serif; font-size:12px; color:#7a8699; border-bottom:1px solid #eef1f6;">Item</th>
                                                    <th align="right" style="padding:10px 12px; font-family:Inter, Arial, sans-serif; font-size:12px; color:#7a8699; border-bottom:1px solid #eef1f6;">Qty</th>
                                                    <th align="right" style="padding:10px 12px; font-family:Inter, Arial, sans-serif; font-size:12px; color:#7a8699; border-bottom:1px solid #eef1f6;">Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text" style="padding:10px 12px; font-family:Inter, Arial, sans-serif; font-size:13px; color:#2b3340; border-bottom:1px solid #f1f3f8;">{{item_1}}</td>
                                                    <td class="text" align="right" style="padding:10px 12px; font-family:Inter, Arial, sans-serif; font-size:13px; color:#2b3340; border-bottom:1px solid #f1f3f8;">1</td>
                                                    <td class="text" align="right" style="padding:10px 12px; font-family:Inter, Arial, sans-serif; font-size:13px; color:#2b3340; border-bottom:1px solid #f1f3f8;">₹999</td>
                                                </tr>
                                                <tr>
                                                    <td class="text" style="padding:10px 12px; font-family:Inter, Arial, sans-serif; font-size:13px; color:#2b3340; border-bottom:1px solid #f1f3f8;">{{item_2}}</td>
                                                    <td class="text" align="right" style="padding:10px 12px; font-family:Inter, Arial, sans-serif; font-size:13px; color:#2b3340; border-bottom:1px solid #f1f3f8;">2</td>
                                                    <td class="text" align="right" style="padding:10px 12px; font-family:Inter, Arial, sans-serif; font-size:13px; color:#2b3340; border-bottom:1px solid #f1f3f8;">₹1,498</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" class="text" align="right" style="padding:12px; font-family:Inter, Arial, sans-serif; font-size:13px; color:#2b3340; font-weight:700;">Total</td>
                                                    <td class="text" align="right" style="padding:12px; font-family:Inter, Arial, sans-serif; font-size:13px; color:#2b3340; font-weight:700;">₹2,497</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>

                                <!-- Footer note inside card -->
                                <tr>
                                    <td class="px-24" style="padding:0 28px 28px 28px;">
                                        <p class="muted" style="margin:0; font-family:Inter, Arial, sans-serif; font-size:12px; line-height:18px; color:#7a8699;">
                                            Need help? <a href="mailto:support@yourdomain.com" style="color:#7a8699; text-decoration:underline;">Contact support</a>.
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td class="px-24" style="padding:18px 24px 40px 24px; text-align:center;">
                            <p class="muted" style="margin:0; font-family:Inter, Arial, sans-serif; font-size:12px; line-height:18px; color:#7a8699;">
                                © {{year}} Anglet Shoes, Jaipur, IN
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>

</html>