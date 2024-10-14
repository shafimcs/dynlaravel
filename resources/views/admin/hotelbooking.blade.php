
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-			transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Gotripz Booking Mail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
<table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
    <tr>
        <td bgcolor="#FFE200" style="padding: 25px 30px 25px 30px;">
            <h1 style="color:#ffffff;">Gotripz Booking Mail</h1>
        </td>
    </tr>
    <tr border="1">
        <td bgcolor="#f1f1f1" style="padding: 40px 30px 40px 30px;">
            <label><b style="font-size: 14px;">Hotel Name</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $hotel_name }}<br>
            <label><b style="font-size: 14px;">Name</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $name }}<br>
            <label><b style="font-size: 14px;">Email ID</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $email }}<br>
            <label><b style="font-size: 14px;">Contact Number</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $number }}<br>
            <label><b style="font-size: 14px;">Check in</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $check_in }}<br>
            <label><b style="font-size: 14px;">Check out</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $check_out }}<br>
          <label><b style="font-size: 14px;">Number of Adults</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $num_of_passenger }}<br>
 <label><b style="font-size: 14px;">Number of Childrens</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $num_of_room }}<br>

                    </td>
    </tr>
</table>
</body>
</html>