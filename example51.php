<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Example 5.1</title>
</head>

<body>

<?php

$contents = file_get_contents("http://www.holytrinityorthodox.com/calendar/calendar.php?lives=1&trp=1&scripture=1");

echo strip_tags($contents,'<p></p><br>');
?>


</body>

</html>
