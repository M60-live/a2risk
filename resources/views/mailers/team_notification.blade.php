<html>
<head>
    <style>

    </style>
</head>
<body>
<table cellpadding="0" cellspacing="7" width="600">
    <tr>
        <td>
            <h3>Hi A2Risk Team</h3>
        </td>
    </tr>
    <tr style="padding-top: 20px;">
        <td>
            @if($form_type=='form')
                <p>You have relieved a mail from the website and they'd like for you to contact them on: <br>
                    <b>Name: </b>{{ $contact_name }}<br>
                    <b>Email: </b>{{ $email_address }}<br>
                    <b>Message: </b><br>{{ $contact_message }}<br>
                </p>
            @else
                <p>Someone of email address of: <b>{{ $email_address }}</b>, would like for you to contact them.</p>
            @endif
        </td>
    </tr>
    <tr style="padding-top: 20px;">
        <td>
            <p>Kind regards</p>
        </td>
    </tr>
    <tr style="padding-top: 20px;">
        <td>
            <img src="https://a2risk.co.za/images/logo-long2.png" style="width: 180px; height: auto;" />
        </td>
    </tr>
</table>
</body>
</html>
