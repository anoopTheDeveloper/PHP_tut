<!-- for  echo -->

<!-- echo is a statement, which is used to display the output.
echo can be used with or without parentheses: echo(), and echo.
echo does not return any value.
We can pass multiple strings separated by a comma (,) in echo.
echo is faster than the print statement. -->

<?php
echo "hello world";
echo("Hyyyyy!!!!!!!!!");
echo "hehhheeee" , "hahahahaha";

// for multiple lines
echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis odio voluptatem eos 
tempora laudantium odit voluptatibus 
quibusdam quos fugit praesentium,
 ad cum nesciunt aperiam earum, rem repellat quas libero ratione.";
?>



<!-- print is a statement, used as an alternative to echo at many times to display the output.
print can be used with or without parentheses.
print always returns an integer value, which is 1.
Using print, we cannot pass multiple arguments.
print is slower than the echo statement. -->


<?php 
    print "Hello world";
    print("hmmmmmm thik hain????");
    $num = print("ok");
    echo($num);
    
?>