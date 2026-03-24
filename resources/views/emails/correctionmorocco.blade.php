{{-- <h2>Update Required</h2>

<p>{{ $messageText }}</p>

<h4>Fields to Update:</h4>
<ul>
    @foreach($fields as $field)
        <li>{{ ucfirst(str_replace('_',' ', $field)) }}</li>
    @endforeach
</ul>

<a href="{{ url('/morocco/application/edit/'.$application->id) }}" 
   style="padding:10px 20px;background:black;color:white;text-decoration:none;">
   Edit Application
</a> --}}



<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="x-apple-disable-message-reformatting"/>
<title>Update Required — SAM Visa Services</title>
<style>
  /* CLIENT-SAFE RESETS */
  body,table,td,a{-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;}
  table,td{mso-table-lspace:0pt;mso-table-rspace:0pt;}
  img{-ms-interpolation-mode:bicubic;border:0;outline:none;text-decoration:none;}
  body{margin:0!important;padding:0!important;width:100%!important;background-color:#f0f5ff;}
  table{border-collapse:collapse!important;}
  a{color:inherit;}
</style>
</head>
<body style="margin:0;padding:0;background-color:#f0f5ff;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;">

<!-- PREHEADER (hidden preview text) -->
<div style="display:none;font-size:1px;color:#f0f5ff;line-height:1px;max-height:0;max-width:0;opacity:0;overflow:hidden;">
  Action required on your visa application — please review and update the following information.
</div>

<table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="background-color:#f0f5ff;">
<tr>
<td align="center" style="padding:40px 16px 48px;">

  <!-- OUTER WRAPPER — max 600px -->
  <table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">

    <!-- ═══════════════ LOGO HEADER ═══════════════ -->
    <tr>
      <td align="center" style="padding:0 0 28px;">
        <img src="https://samvisauk.com/wp-content/uploads/2023/11/fulllogo_transparent_nobuffer-removebg-preview_200x100px.png"
             alt="SAM Visa Services"
             width="160"
             style="display:block;width:160px;max-width:160px;height:auto;"/>
      </td>
    </tr>

    <!-- ═══════════════ MAIN CARD ═══════════════ -->
    <tr>
      <td style="background-color:#ffffff;border-radius:20px;overflow:hidden;box-shadow:0 4px 24px rgba(26,74,171,0.12);">

        <!-- TOP GRADIENT BAR -->
        <table role="presentation" cellpadding="0" cellspacing="0" width="100%">
          <tr>
            <td style="height:5px;background:linear-gradient(90deg,#0f2f7a,#1e5bc6,#4a7fd4,#1e5bc6,#0f2f7a);font-size:0;line-height:0;">&nbsp;</td>
          </tr>
        </table>

        <!-- CARD BODY -->
        <table role="presentation" cellpadding="0" cellspacing="0" width="100%">
          <tr>
            <td style="padding:44px 48px 48px;">

              <!-- ALERT ICON -->
              <table role="presentation" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td align="center" style="padding:0 0 28px;">
                    <table role="presentation" cellpadding="0" cellspacing="0">
                      <tr>
                        <td align="center"
                            style="width:72px;height:72px;background-color:#fff8e7;border-radius:50%;border:2px solid #fbbf24;">
                          <span style="font-size:32px;line-height:68px;display:block;text-align:center;">⚠️</span>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- BADGE -->
              <table role="presentation" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td align="center" style="padding:0 0 16px;">
                    <span style="display:inline-block;background-color:#fff8e7;border:1px solid #fbbf24;border-radius:40px;padding:5px 18px;font-size:10px;font-weight:700;letter-spacing:2.5px;color:#d97706;text-transform:uppercase;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;">
                      Action Required
                    </span>
                  </td>
                </tr>
              </table>

              <!-- HEADING -->
              <table role="presentation" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td align="center" style="padding:0 0 14px;">
                    <h2 style="margin:0;font-family:Georgia,'Times New Roman',serif;font-size:34px;font-weight:700;color:#0f2f7a;line-height:1.1;text-align:center;">
                      Update Required
                    </h2>
                  </td>
                </tr>
              </table>

              <!-- THIN DIVIDER LINE -->
              <table role="presentation" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td align="center" style="padding:0 0 24px;">
                    <table role="presentation" cellpadding="0" cellspacing="0">
                      <tr>
                        <td style="width:48px;height:3px;background-color:#1e5bc6;border-radius:3px;font-size:0;line-height:0;">&nbsp;</td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- MESSAGE TEXT -->
              <table role="presentation" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td style="padding:0 0 32px;">
                    <p style="margin:0;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:15px;font-weight:400;color:#5a6a7a;line-height:1.8;text-align:center;">
                      {{ $messageText }}
                    </p>
                  </td>
                </tr>
              </table>

              <!-- FIELDS TO UPDATE BOX -->
              <table role="presentation" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td style="padding:0 0 32px;">

                    <!-- BOX HEADER -->
                    <table role="presentation" cellpadding="0" cellspacing="0" width="100%"
                           style="background-color:#0f2f7a;border-radius:12px 12px 0 0;overflow:hidden;">
                      <tr>
                        <td style="padding:14px 24px;">
                          <p style="margin:0;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:11px;font-weight:700;letter-spacing:2px;color:rgba(255,255,255,0.75);text-transform:uppercase;">
                            Fields to Update
                          </p>
                        </td>
                      </tr>
                    </table>

                    <!-- FIELDS LIST -->
                    <table role="presentation" cellpadding="0" cellspacing="0" width="100%"
                           style="background-color:#f0f5ff;border:1.5px solid #d4dce6;border-top:none;border-radius:0 0 12px 12px;overflow:hidden;">
                      <tr>
                        <td style="padding:8px 0;">

                          @foreach($fields as $index => $field)
                          <table role="presentation" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                              <td style="padding:10px 24px;border-bottom:{{ !$loop->last ? '1px solid #d4dce6' : 'none' }};">
                                <table role="presentation" cellpadding="0" cellspacing="0" width="100%">
                                  <tr>
                                    <!-- BULLET DOT -->
                                    <td width="28" valign="middle">
                                      <table role="presentation" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td style="width:8px;height:8px;background-color:#1e5bc6;border-radius:50%;font-size:0;line-height:0;">&nbsp;</td>
                                        </tr>
                                      </table>
                                    </td>
                                    <!-- FIELD NAME -->
                                    <td valign="middle">
                                      <p style="margin:0;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:13px;font-weight:600;color:#2c3a4a;line-height:1.4;">
                                        {{ ucfirst(str_replace('_',' ', $field)) }}
                                      </p>
                                    </td>
                                    <!-- ARROW INDICATOR -->
                                    <td width="20" valign="middle" align="right">
                                      <span style="font-size:13px;color:#8a9aaa;">›</span>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                          @endforeach

                        </td>
                      </tr>
                    </table>

                  </td>
                </tr>
              </table>

              <!-- CTA BUTTON -->
              <table role="presentation" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td align="center" style="padding:0 0 28px;">
                    <!-- Bulletproof button method -->
                    <table role="presentation" cellpadding="0" cellspacing="0">
                      <tr>
                        <td align="center"
                            style="background:linear-gradient(135deg,#1e5bc6,#0f2f7a);border-radius:12px;mso-padding-alt:0;">
                          <!--[if mso]>
                          <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word"
                            href="{{ url('/morocco/application/edit/'.$application->id) }}"
                            style="height:52px;v-text-anchor:middle;width:220px;"
                            arcsize="15%"
                            fillcolor="#1e5bc6">
                            <w:anchorlock/>
                            <center style="color:#ffffff;font-family:sans-serif;font-size:13px;font-weight:bold;letter-spacing:1px;">
                              Edit Application →
                            </center>
                          </v:roundrect>
                          <![endif]-->
                          <!--[if !mso]><!-->
                          <a href="{{ url('/morocco/application/edit/'.$application->id) }}"
                             style="display:inline-block;background:linear-gradient(135deg,#1e5bc6,#0f2f7a);color:#ffffff;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:13px;font-weight:700;letter-spacing:1px;text-decoration:none;padding:15px 40px;border-radius:12px;text-transform:uppercase;mso-hide:all;">
                            Edit Application &rarr;
                          </a>
                          <!--<![endif]-->
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- FALLBACK LINK TEXT -->
              {{-- <table role="presentation" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td align="center" style="padding:0 0 8px;">
                    <p style="margin:0;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:11px;color:#8a9aaa;line-height:1.6;">
                      If the button doesn't work, copy and paste this link into your browser:
                    </p>
                  </td>
                </tr>
                <tr>
                  <td align="center" style="padding:0 0 0;">
                    <p style="margin:0;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:11px;line-height:1.6;">
                      <a href="{{ url('/dubai/application/edit/'.$application->id) }}"
                         style="color:#1e5bc6;text-decoration:underline;word-break:break-all;">
                        {{ url('/dubai/application/edit/'.$application->id) }}
                      </a>
                    </p>
                  </td>
                </tr>
              </table> --}}

            </td>
          </tr>
        </table>

        <!-- BOTTOM SECURITY STRIP -->
        <table role="presentation" cellpadding="0" cellspacing="0" width="100%"
               style="background-color:#f0f5ff;border-top:1px solid #d4dce6;">
          <tr>
            <td style="padding:16px 48px;">
              <table role="presentation" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td align="center">
                    <p style="margin:0;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:11px;color:#8a9aaa;line-height:1.6;">
                      🔒 &nbsp;Your information is fully secure · ICO Registered · GDPR Compliant
                    </p>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>

      </td>
    </tr>
    <!-- /MAIN CARD -->

    <!-- ═══════════════ CONTACT ROW ═══════════════ -->
    <tr>
      <td style="padding:28px 0 0;">
        <table role="presentation" cellpadding="0" cellspacing="0" width="100%"
               style="background-color:#ffffff;border-radius:14px;border:1.5px solid #d4dce6;">
          <tr>
            <td style="padding:20px 32px;">
              <table role="presentation" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <!-- PHONE -->
                  <td align="center" width="50%" style="padding:0 12px 0 0;border-right:1px solid #d4dce6;">
                    <p style="margin:0 0 4px;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:10px;font-weight:700;letter-spacing:2px;color:#8a9aaa;text-transform:uppercase;">Call Us</p>
                    <a href="tel:+447879175585"
                       style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:14px;font-weight:700;color:#1a4aab;text-decoration:none;">
                      +44 7879 175585
                    </a>
                  </td>
                  <!-- WHATSAPP -->
                  <td align="center" width="50%" style="padding:0 0 0 12px;">
                    <p style="margin:0 0 4px;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:10px;font-weight:700;letter-spacing:2px;color:#8a9aaa;text-transform:uppercase;">WhatsApp</p>
                    <a href="https://wa.me/447879175585"
                       style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:14px;font-weight:700;color:#16a34a;text-decoration:none;">
                      Message Us
                    </a>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>

    <!-- ═══════════════ FOOTER ═══════════════ -->
    <tr>
      <td style="padding:28px 0 0;">
        <table role="presentation" cellpadding="0" cellspacing="0" width="100%">
          <tr>
            <td align="center" style="padding:0 0 12px;">
              <img src="https://samvisauk.com/wp-content/uploads/2023/11/fulllogo_transparent_nobuffer-removebg-preview_200x100px.png"
                   alt="SAM Visa Services"
                   width="100"
                   style="display:block;width:100px;height:auto;opacity:0.5;"/>
            </td>
          </tr>
          <tr>
            <td align="center">
              <p style="margin:0 0 6px;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:11px;color:#8a9aaa;line-height:1.7;">
                SAM Visa Services · London, United Kingdom
              </p>
              <p style="margin:0;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:11px;color:#8a9aaa;line-height:1.7;">
                You received this email because you submitted a visa application with us.
                <br/>
                This is an automated notification — please do not reply to this email directly.
                <br/>
                &copy; 2025 SAM Visa Services. All rights reserved.
              </p>
            </td>
          </tr>
        </table>
      </td>
    </tr>

  </table>
  <!-- /OUTER WRAPPER -->

</td>
</tr>
</table>

</body>
</html>