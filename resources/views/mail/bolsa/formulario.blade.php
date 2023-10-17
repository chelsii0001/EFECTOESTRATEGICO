<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-GB">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Notificación</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style type="text/css">
        a[x-apple-data-detectors] {
            color: inherit !important;
        }

        body,
        p,
        div,
        small,
        span,
        li,
        ul ol,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: 'Open Sans', sans-serif;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">
</head>

<body style="margin: 0; padding: 0;">
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td style="padding: 20px 0 30px 0;">

                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600"
                    style="border-collapse: collapse; border: 1px solid #cccccc;">
                    <tr>
                        <td align="center" style="padding: 40px 0 30px 0;">
                            <img src="" alt=""  width="350"
                                height="190" style="display: block;" />
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                style="border-collapse: collapse;">
                                <tr>
                                    <td style="color: #211e29; ">
                                        <h1 style="font-size: 24px; margin: 0;">NOTIFICACIÓN</h1>
                                    </td>
                                </tr>
                                <tr>

                                    <body>
                                        <p>UN NUEVO USUARIO ENVÍO SU CV</p>
                                        <ul>

                                            <li>
                                               Nombre: {{ $items['name'] }}
                                            </li>
                                            <li>
                                                Apellido: {{ $items['lastname'] }}
                                            </li>
                                            <li>
                                                Correo: {{ $items['email'] }}
                                            </li>
                                            <li>
                                                Teléfono: {{ $items['phone'] }}
                                            </li>
                                            <li>
                                                Mensaje: {{ $items['msg'] }}
                                            </li>
                                        </ul>
                                    </body>
                                </tr>

                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#007aff" style="padding: 30px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                style="border-collapse: collapse;">
                                <tr>
                                    <td style="color: #fff;  font-size: 14px;">
                                        <a href="" style="color:rgb(255, 255, 255);"><b>
                                                <p style="margin: 0;">{{ $config->name }}{{ now()->year }}</p>
                                            </b>
                                        </a>
                                        <br>
                                        <p style="margin: 0;">EL CONTENIDO DE ESTE CORREO ES MERAMENTE INFORMATIVO,
                                            FAVOR DE NO RESPONDER</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>
</body>

</html>
