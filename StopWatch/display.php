<?php
include_once('StopWatch.php');
$stopwatch = new StopStopWatch();
echo "thời gian bắt đầu :" . $stopwatch->getStart() . "<br>";
for ($i = 0; $i < 300000; $i++) {
    print_r($i);
}
$stopwatch->setStop();
echo "thời gian kết thúc:" . $stopwatch->getStop() . "<br>";
echo "thời gian trôi qua = " . $stopwatch->getElapsedTime() . " mili giây";
?>
