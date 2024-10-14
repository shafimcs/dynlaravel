<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-			transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Gotripz Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
<table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
    <tr>
        <td bgcolor="#FFE200" style="padding: 25px 30px 25px 30px;">
            <h1 style="color:#ffffff;">Gotripz Contact</h1>
        </td>
    </tr>
    <tr border="1">
        <td bgcolor="#f1f1f1" style="padding: 40px 30px 40px 30px;">
            @if(!empty($name))
            <label><b style="font-size: 14px;">Name</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $name }}<br>
            @endif
            @if(!empty($email))
            <label><b style="font-size: 14px;">Email ID</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $email }}<br>
            @endif
            @if(!empty($number))
            <label><b style="font-size: 14px;">Contact Number</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $number }}<br>
            @endif
            @if(!empty($subjct))
            <label><b style="font-size: 14px;">Subject</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $subjct }}<br>
            @endif
           @if(!empty($messege))
            <label><b style="font-size: 14px;">Messege</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $messege }}<br>
            @endif
        </td>
    </tr>
</table>
</body>
</html>