<?php
//viet function giai pt bac hai: ax^2 + bx + c = 0//

function gptb2($a, $b, $c) {
    if ($a == 0) {
        if ($b == 0) {
            echo ($c == 0) ? "Phương trình vô số nghiệm<br>" : "Phương trình vô nghiệm<br>";
        } else {
            echo "Phương trình bậc 1 có nghiệm x = " . (-$c / $b) . "<br>";
        }
    } else {
        $delta = $b*$b - 4*$a*$c;
        if ($delta < 0) {
            echo "Phương trình vô nghiệm<br>";
        } elseif ($delta == 0) {
            echo "Phương trình có nghiệm kép x = " . (-$b / (2*$a)) . "<br>";
        } else {
            $x1 = (-$b + sqrt($delta)) / (2*$a);
            $x2 = (-$b - sqrt($delta)) / (2*$a);
            echo "Phương trình có 2 nghiệm: x1 = $x1 , x2 = $x2<br>";
        }
    }
}
gptb2(1, -6, 16);   
gptb2(2, 3, 1);   



