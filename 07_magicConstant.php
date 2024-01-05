<!-- Magic constants are the predefined constants in PHP which get changed on the basis of their use. They start with double underscore (__) and ends with double underscore.

They are similar to other predefined constants but as they change their values with the context, they are called magic constants.

There are nine magic constants in PHP. In which eight magic constants start and end with double underscores (__).

__LINE__
__FILE__
__DIR__
__FUNCTION__
__CLASS__
__TRAIT__
__METHOD__
__NAMESPACE__
ClassName::class -->

<!-- __LINE__ -->
<?php

   $msg = "this msg by anoop <br>";
   echo $msg;
   echo "Hello everyone <br>";
   echo "we are at line no." . __LINE__;


//    It returns the current line number of the file, where this constant is used.


?>


<!-- __FILE__ -->

<?php

    echo "example of __FILE__ <br>";
    echo "file path is" . __FILE__  . "<br>";
    
    // This magic constant returns the full path of the executed file, where the file is stored. 
    // If it is used inside the include, the name of the included file is returned.

?>

<!-- __DIR__ -->

<?php

// It returns the full directory path of the executed file. 
// The path returned by this magic constant is equivalent to dirname(__FILE__).
// This magic constant does not have a trailing slash unless it is a root directory.

    echo "eample for __DIR__ <br>";
    echo "full path is " . __DIR__ . "<br>";

    echo dirname(__FILE__) ."<br>";
?>



<!-- __FUNCTION__ -->

<?php
// This magic constant returns the function name, 
// where this constant is used.
//  It will return blank if it is used outside of any function.


   function abc(){
        echo __FUNCTION__ . "<br>";
   }

   function xyz(){
        echo __FUNCTION__ . "<br>";
   }

   abc();
   xyz();

?>


<!-- __CLASS__ -->

<?php

// It returns the class name, where this magic constant is used. __CLASS__ constant also works in traits.

   class abc {
    public function first(){
    echo __CLASS__ . "<br>";
   }
}
   class xyz {
    public function first(){
    echo __CLASS__ . "<br>" ; 
   }
   }
   $t = new abc;
   $t->first();
   $z = new xyz;
   $z->first();
?>