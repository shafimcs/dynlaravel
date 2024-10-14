<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-			transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Gotripz Triprequest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
<table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
    <tr>
        <td bgcolor="#FFE200" style="padding: 25px 30px 25px 30px;">
            <h1 style="color:#ffffff;">Gotripz Triprequest</h1>
        </td>
    </tr>
    <tr border="1">
        <td bgcolor="#f1f1f1" style="padding: 40px 30px 40px 30px;">
            <label><b style="font-size: 14px;">Name</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $name }}<br>
            <label><b style="font-size: 14px;">Contact Number</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $number }}<br>
            <label><b style="font-size: 14px;">Email ID</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $email }}<br>
            <label><b style="font-size: 14px;">Leave From</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $leave_from }}<br>
            <label><b style="font-size: 14px;">Going To</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $going_to }}<br>
            <label><b style="font-size: 14px;">Departure Date</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $departure_date }}<br>
            <label><b style="font-size: 14px;">Nights</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $nights }}<br>
            <label><b style="font-size: 14px;">Adults</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $adults }}<br>
            <label><b style="font-size: 14px;">Minors</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $minors }}<br>
            <label><b style="font-size: 14px;">Trip Type</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $trip_type }}<br>
            <label><b style="font-size: 14px;">Budget</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $budget }}<br>
            <label><b style="font-size: 14px;">Services</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;@foreach($services as $service){{ $service }} @endforeach<br>
            <label><b style="font-size: 14px;">Additional Details</b></label>&nbsp;&nbsp;:&nbsp;&nbsp;{{ $additional_details }}<br>
        </td>
    </tr>
</table>
</body>
</html>