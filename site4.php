<!DOCTYPE html>
<!-------------------------------------------------------------------------------->
<!--3.5 INCLUDE HTML-->
<?php
    echo "<h1>3.5 INCLUDE HTML</h1>";
    echo "<hr>";
?>
<html>
    <head>    
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

            <!-- Let's say you want to have different pages with the same header and footer
            but you don't want do the same thing over and over again -->
        <?php 
            echo "Following is done like<br>";
            echo "include \"header.html\"";
            include "header.html";
        ?>
        <p>Hello, World!</p>
        <?php 
            include "footer.html";
        ?> 
    </body>
</html>

<!-------------------------------------------------------------------------------->
<!--3.6 INCLUDE PHP-->
<?php
    echo "<h1>3.6 INCLUDE PHP</h1>";
    echo "<hr>";
?>
<?php 

    echo "<h2>including article-header.php</h2>";
    echo "You can pass values to article-header.php so that tags don't end up empty<br>";
    $title = "My First Post";
    $author = "Garen";
    $wordCount = 400;
    //Notice how you're not passing to a function/constructor-like parameter. 
    //In fact, think of include as copy-paste of source code (just like in C)
    //You can view the page source with Ctrl+U
    include "article-header.php";

    /////////////////////////////////////////

    echo "<h2>including useful-tools.php</h2>";
    include "useful-tools.php";
    echo "sayHello() => ";
    sayHello();
    echo "<br>";
    echo "feetInMiles(10) will not work<br>";
    echo "kmToM(10) => ";
    kmToM(10); //this doesn't work
    echo "feet in miles: $feetInMile";

?>


<!-------------------------------------------------------------------------------->
<!--3.7 CLASSES AND OBJECTS-->
<?php
    echo "<h1>3.7 CLASSES AND OBJECTS</h1>";
    echo "<hr>";
?>
<?php

    echo "It's as simple as creating <br>";
    echo "class ClassName {} <br>";
    class Book {

    }

?>