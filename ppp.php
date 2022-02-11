<?php header("Content-Type:text/html; charset=windows-1251");

$month = $_GET['month'];
$year = $_GET['year'];
$today = $_GET['today'];
$trp = $_GET['trp'];
$header = $_GET['header'];
$lives = $_GET['lives'];
$scripture = $_GET['scripture'];
$dt = $_GET['dt'];

$contents = file_get_contents("http://www.holytrinityorthodox.com/calendar/calendar.php?month=$month&today=$today&year=$year&dt=$dt&header=$header&lives=$lives&trp=$trp&scripture=$scripture");

echo $contents;
?>
