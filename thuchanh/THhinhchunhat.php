<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Rectangle
    {
        public $width;
        public $height;
        public function __construct($width, $height)
        {
            $this->width = $width;
            $this->height = $height;
        }
        public function getArea()
        {
            return $this->width * $this->height;
        }
        public function getPerimeter()
        {
            return (($this->width + $this->height) * 2);
        }
        public function display()
        {
            return "Rectangle{" . "width =" . $this->width . "height =" . $this->height . "}";
        }
    }
    $width  = 10;
    $height  = 20;
    $rectangle = new Rectangle($width, $height);
    echo "Width = " . $rectangle->width . "<br>";
    echo "Height = " . $rectangle->height;
    $rectangle->height = 30;
    $rectangle->width = 20;
    echo "<br>";
    echo "Height = " . $rectangle->height . "<br>";
    echo "Wight = " . $rectangle->width . "<br>";
    echo "Chu vi =" . $rectangle->getPerimeter() . "<br>";
    echo "Diện tích =" . $rectangle->getArea() . "<br>";
    echo $rectangle->display();
    ?>
</body>

</html>