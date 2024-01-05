<?php
// exception handling
//  throw keyword -> it is used a throw a exception.

    function division($num , $div){
        if($div == 0){
            throw new Exception("can,t divide by zero");
        }
        return $num / $div;
    }

    try{
        echo division(5 , 0);
    }
    catch(Exception $ex){
        $code = $ex->getCode();
        $msg = $ex -> getMessage();
        $file = $ex -> getFile();
        $line = $ex -> getLine();
        echo $code . "<br>";
        echo $msg . "<br>";
        echo $file . "<br>";
        echo $line . "<br>";
    }
    finally{
        echo "<br>process complete";
    }

?>


