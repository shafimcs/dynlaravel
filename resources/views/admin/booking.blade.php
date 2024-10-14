
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-			transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Gotripz Package Booking Mail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
<table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
    <tr>
        <td bgcolor="#FFE200" style="padding: 25px 30px 25px 30px;">
            <h1 style="color:#ffffff;">Gotripz Package Booking Mail</h1>
        </td>
    </tr>
    <tr border="1">
        <td bgcolor="#f1f1f1" style="padding: 40px 30px 40px 30px;">
            @if(!empty($package_id))
            <label><b style="font-size: 14px;">Package ID</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;GTZ{{ $package_id }}<br>
            @endif
            <label><b style="font-size: 14px;">Name</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $name }}<br>
            <label><b style="font-size: 14px;">Email ID</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $email }}<br>
            <label><b style="font-size: 14px;">Contact Number</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $phone_number }}<br>
            <label><b style="font-size: 14px;">Leave From</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $leave_from }}<br>
            <label><b style="font-size: 14px;">Departure Date</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $departure_date }}<br>
            <label><b style="font-size: 14px;">Package Type</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $package_type }}<br>
            <label><b style="font-size: 14px;">Adults</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $number_of_adult }}<br>
            <label><b style="font-size: 14px;">Childrens</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $number_of_children }}<br>
            <label><b style="font-size: 14px;">Special Note</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $notes }}<br>
        </td>
    </tr>
</table>
</body>
</html>