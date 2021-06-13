<?php


class Triangle extends Shape
{
    private  $side1;
    private  $side2;
    private $side3;
    private $color;
    private $p;

    public function __construct($name, $array)
    {
        parent::__construct($name);
        $this->side1 = $array["side1"];
        $this->side2 = $array["side2"];
        $this->side3 = $array["side3"];
        $this->color = $array["color"];

        // $p la nua chu vi cua tam giac
        $this->p = ($this->side1 + $this->side2 + $this->side3) / 2;
    }

    public function checkTriangle()
    {
        if ($this->p > $this->side1
            && $this->p > $this->side2
            && $this->p > $this->side3){
            return true;
        } else{
            return false;
        }
    }

    public function defaultTriangle()
    {
        $this->side1 = 1.0;
        $this->side2 = 1.0;
        $this->side3 = 1.0;

        return "canh 1: " . $this->side1 .
            "<br>" . "canh 2: " . $this->side2 .
            "<br>" . "canh 3: " . $this->side3;
    }

    /**
     * @return float|int
     */
    public function getP()
    {
        return $this->p;
    }

    public function getSide1()
    {
        return $this->side1;
    }

    public function setSide1($side1)
    {
        $this->side1 = $side1;
    }

    /**
     * @return float|int|mixed
     */
    public function getSide2()
    {
        return $this->side2;
    }

    /**
     * @param float|int|mixed $side2
     */
    public function setSide2( $side2)
    {
        $this->side2 = $side2;
    }

    /**
     * @return float|int|mixed
     */
    public function getSide3()
    {
        return $this->side3;
    }

    /**
     * @param float|int|mixed $side3
     */
    public function setSide3( $side3)
    {
        $this->side3 = $side3;
    }

    /**
     * @return mixed|string
     */
    public function getColor()
    {
        return $this->color;
    }

    public function setColor( $color)
    {
        $this->color = $color;
    }

     public function getArea()
    {
        if ($this->checkTriangle()){
            return sqrt($this->p *
                ($this->p - $this->side1) *
                ($this->p - $this->side2) *
                ($this->p - $this->side3)) ;
        }else {
            return -1;
        }
    }

    public function perimeter()
    {
        return $this->p * 2;
    }

     public function __toString()
    {
        return "canh 1: ". $this->side1.
            "<br>"."canh 2: ". $this->side2.
            "<br>"."canh 3: ".$this->side3.
            "<br>". $this->color.
            "<br>"."perimeter: ".
            "<br>"."Area :". $this->getArea();
    }
}