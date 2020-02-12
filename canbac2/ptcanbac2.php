
<?php
class QuadraticEquation
{
    private  float $a;
    private float $b;
    private float $c;
    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function gettter()
    {
        return $this->a . $this->b . $this->c;
    }
    public function getgetDiscriminant()
    {
        return pow($this->b, 2) - 4 * $this->a * $this->c;
    }
    public function getRoot1()
    {
        return (-$this->b + sqrt(pow($this->b, 2) - 4 * $this->a * $this->c) / 2 * $this->a);
    }
    public function getRoot2()
    {
        return (-$this->b - sqrt(pow($this->b, 2) - 4 * $this->a * $this->c) / 2 * $this->a);
    }
    public function Msg()
    {
        echo "The equation has no roots";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = (int) (float) $_POST["a"];
    $b = (int) (float) $_POST["b"];
    $c = (int) (float) $_POST["c"];
    if ($a != 0) {
        $quadraticEquation = new QuadraticEquation($a, $b, $c);
        $denta = $quadraticEquation->getgetDiscriminant();
        var_dump($denta);
        $x1 = round($quadraticEquation->getRoot1(), 2);
        $x2 = round($quadraticEquation->getRoot2(), 2);
        if ($denta > 0) {
            echo "phương trình có 2 nghiệm" . "<br>" . "x1 = " . $x1 . "<br>" . "x2 = " . $x2;
        } elseif ($denta == 0) {
            echo "phương trình có nghiệm kép" . "<br>" . "x1 = x2 = " . $x1;
        } else {
            echo $quadraticEquation->Msg();
        }
    } else {
        echo "a không hợp lệ vui lòng nhập lại a";
    }
}

?>
    

