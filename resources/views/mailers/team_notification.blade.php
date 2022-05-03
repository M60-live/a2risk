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
                    <b>{{ $contact_name }}</b><br>
                    <b>{{ $email_address }}</b><br>
                    <b>Message: </b>{{ $contact_message }}<br>
                </p>
            @else
                <p>Someone of email address of: <b>{{ $email_address }}</b>, would like for you to contact them.</p>
            @endif
        </td>
    </tr>
    <tr style="padding-top: 20px;">
        <td>
            <p>Kind regards <br>Alpha to Beta Systems</p>
        </td>
    </tr>
</table>
</body>
</html>