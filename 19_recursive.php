<?php
// recursive function

    function abc($a){
        if($a == 0){
            return ;
        }
        echo $a;
        abc($a - 1);
    }
    abc(10);
?>