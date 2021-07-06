<?php
    for($num=0; $num<=200; $num++){
        for($x=2; $x<=$num; $x++){
            if(($num % $x) == 0){
                break;
            }else {
                echo $num;
                echo " ";
                break;
            }
        }
    }
?>