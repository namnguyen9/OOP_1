<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    class Fan
    {
        const  SLOW = 1;
        const MEDIUM = 2;
        const FAST = 3;
        private int $speed = self::SLOW;
        private $on = false;
        private float $radius = 5;
        private string $color = "blue";
        public function __construct($speed = 1)
        {
            $this->speed = $speed;
        }
        //các hàm đặt trả về mặc định
        public function getSpeed()
        {
            return $this->speed;
        }
        public function getOn()
        {
            return $this->on;
        }
        public function getRadius()
        {
            return $this->radius;
        }
        public function getColor()
        {
            return $this->color;
        }
        public function getSLOW()
        {
            return self::SLOW;
        }
        public function getMEDIUM()
        {
            return self::MEDIUM;
        }
        public function getFAST()
        {

            return self::FAST;
        }
        //các hàm đặt lại
        public function setSpeed($speed)
        {
            $this->speed = $speed;
            return $this;
        }
        public function setOn($on)
        {
            $this->on = $on;
            return $this;
        }
        public function setRadius($radius)
        {
            $this->radius = $radius;
            return $this;
        }
        public function setColor($color)
        {
            $this->color = $color;
            return $this;
        }
        public function toString()
        {
            if ($this->on == true) {
                return "<br>" . "Số:" . $this->speed . "<br>" . "bán kính :" . $this->radius . "<br>" . "Màu:" . $this->color . "<br>" . "trạng thái: " . "  fan is on";
            } else {
                return "<br>" . "Số " . $this->speed . "<br>" .  "bán kính :" . $this->radius . "<br>" . "Màu:" . $this->color . "<br>" . "trạng thái: " . " fan is off";
            }
        }
    }

    ?>
</body>

</html>