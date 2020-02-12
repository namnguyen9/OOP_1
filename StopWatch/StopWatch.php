<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class StopStopWatch
    {
        private $startTime;
        private $endTime;
        public function __construct()
        {
            $this->startTime = time();
        }
        public function getStart()
        {
            return $this->startTime;
        }
        public function getStop()
        {
            return $this->endTime;
        }
        public function setStart()
        {
            $this->startTime = time();
        }
        public function setStop()
        {
            $this->endTime = time();
        }
        public function getElapsedTime()
        {
            return (($this->endTime - $this->startTime) *1000);
        }
    }
    $stopwatch = new StopStopWatch();
    echo "thời gian bắt đầu :" . $stopwatch->getStart() . "<br>";
    for ($i = 0; $i < 300000; $i++) {
        print_r($i);
    }
    $stopwatch->setStop();
    echo "thời gian kết thúc:" . $stopwatch->getStop() . "<br>";
    echo "thời gian trôi qua = " . $stopwatch->getElapsedTime() . " mili giây";
    ?>
</body>

</html>