<?php

    class Triangle
    {
       private $length_one;
       private $length_two;
       private $length_three;

       function __construct ($length_one, $length_two, $length_three){
            $this->length_one = $length_one;
            $this->length_two = $length_two;
            $this->length_three = $length_three;
       }

       function getLengthOne () {
            return $this->length_one;
       }

       function getLengthTwo () {
            return $this->length_two;
       }

       function getLengthThree () {
            return $this->length_three;
       }

       function isATriangle() {
          if ($this->length_one + $this->length_two < $this->length_three) {
              return false;
          }elseif ($this->length_one + $this->length_three < $this->length_two) {
              return false;
          }elseif ($this->length_two + $this->length_three < $this->length_one) {
              return false;
          }else {
              return true;
          }
       }

       function triangleType() {

            if( $this->isAtriangle()){
                if ($this->length_one == $this->length_two && $this->length_one == $this->length_three) {
                    return "equilateral";
                }elseif ($this->length_one == $this->length_two || $this->length_one == $this->length_three || $this->length_two == $this->length_three ){
                    return "isosceles";
                } else {
                  return "scalene";
                }
            }else {
                return "Not Triangle";
            }

       }




    }
 ?>
