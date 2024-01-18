<?php

// Multiple recipients separated by comma

$to = 'name1@example.com, name2@example.com';

// Subject

$subject = 'Office supplies - Reminder';

// Message

$message = '

<html>

<head>

<title>Office supplies for March</title>

</head>

<body>

<p>We need the following office supplies</p>

<table>

<tr>

<th>Item</th><th>Quantity</th><th>Month</th><th>Department</th>

</tr>

<tr>

<td>Notebook</td><td>10</td><td>March</td><td>Operations</td>

</tr>

<tr>

<td>Chair</td><td>5</td><td>March</td><td>Marketing</td>

</tr>

</table>

</body>

</html>

';
echo $message;
// To send HTML emails, remember to set the Content-type header

$headers = "MIME-Version: 1.0" . "\r\n";

$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Other additional headers

$headers= 'To: John <john@example.com>, Mary <mary@example.com>';

$headers = 'From: Supply Reminders <reminders@example.com>';

$headers = 'Cc: name@example.com';

$headers= 'Bcc: name@example.com';

// Mail it

mail($to, $subject, $message, implode("\r\n", $headers));
?>