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

    $fan1 = new Fan();
    // var_dump($fan1->getSpeed());
    // var_dump($fan1->getOn());
    // var_dump($fan1->getRadius());
    // var_dump($fan1->getColor());
    // var_dump($fan1->toString());
    $fan1->setSpeed($fan1->getFAST())->setRadius(10)->setColor("yellow")->setOn(true);
    echo "<h3>Fan1</h3>";
    echo "FAST " . $fan1->getSpeed() . "<br>";
    echo "Radius " . $fan1->getRadius() . "<br>";
    echo "Color " . $fan1->getColor() . "<br>";
    echo "Statu " . $fan1->getOn() . "<br>";
    echo  $fan1->toString() . "<hr>";

    $fan2 = new Fan();
    $fan2->setSpeed($fan2->getMEDIUM())->setRadius(5)->setColor("blue")->setOn(false);
    echo "<h3>Fan2</h3>";
    echo "FAST " . $fan2->getSpeed() . "<br>";
    echo "Radius " . $fan2->getRadius() . "<br>";
    echo "Color " . $fan2->getColor() . "<br>";
    echo "Statu " . $fan2->getOn() . "<br>";
    echo  $fan2->toString();



    ?>
</body>

</html>