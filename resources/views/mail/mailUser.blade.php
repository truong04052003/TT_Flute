<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    <style>
        table,
        td,
        div,
        h1,
        p {
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body style="margin:0;padding:0;">
    <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
        <tr>
            <td align="center" style="padding:0;">
                <table role="presentation"
                    style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                    <tr>
                        <td style="padding:36px 30px 42px 30px;">
                            <table role="presentation"
                                style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                <tr>
                                    <td style="padding:0 0 36px 0;color:#153643;">
                                        @if (isset($data['name']))
                                            <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">
                                                <h2 style="text-align:center;">Xin Chào: <i>{{ $data['name'] }}</i></h2>
                                            </h1>
                                        @endif
                                        <p
                                            style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:0;">
                                        <table role="presentation"
                                            style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                            <tr>
                                                <td style="width:260px;padding:0;vertical-align:top;color:#153643;">
                                                    <p
                                                        style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
                                                        <h3>Hãy Dùng Mật Khẩu Này Để Truy Cập Tài Khoản Của
                                                                    Bạn</h3>
                                                                    <br>
                                                        <h3>Không chia sẽ mật khẩu này với bất kì ai! </h3>
                                                                    <br>
                                                        <h3>Chúc Bạn Một Ngày Làm Việc Vui Vẻ!</h3>
                                                                    <br>
                                                        
                                                    <h4>
                                                        @if (isset($data['pass']))
                                                            <p
                                                                style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
                                                                <a href="#"
                                                                    style="color:#000000;text-decoration:underline;"><b
                                                                        style="color: rgb(0, 0, 0)"><i>Mật khẩu:
                                                                        </i></b>{{ $data['pass'] }}<br></a>
                                                            </p>
                                                        @endif
                                                    </h4>
                                                    </p>
                                                </td>
                                                <td style="width:20px;padding:0;font-size:0;line-height:0;">&nbsp;</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                        </td>
                    </tr>
                </table>
</body>

</html>
