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
    echo "class ClassName {} <br><br>";
    //class are global here. So all these have to be 
    //commented
    // class Book {
    //    var $title;
    //    var $author;
    //    var $pages;
    // }

    // $book1 = new Book;
    // $book1->title = "Harry Potter";
    // $book1->author="JK Rowling";
    // $book1->pages = 300;

    // $book2 = new Book;
    // $book2->title = "The Alchemist";
    // $book2->author="Paulo Coelho";
    // $book2->pages = 300;
    
    // echo $book1->author;
    // echo $book2->title;

?>

<!-------------------------------------------------------------------------------->
<!--3.8 CONSTRUCTORS-->
<?php
    echo "<h1>3.8 CONSTRUCTORS </h1>";
    echo "<hr>";
?>

<?php 
     class Book {
       var $title;
       var $author;
       var $pages;

       function __construct($name, $writer, $page){ 
            echo "$name: Book Created<br>";
            
            //This is valid
            // $this->title = $name;
            // $this->author = $author;
            // $this->pages = $pages;

            //Otherwise, parameters must have different names
            $this->title = $name;
            $this->author = $writer;
            $this->pages = $page;
       }
    }

    echo "Unlike Java or C/C++, constructors signature are writte like so...<br>";
    echo "function __construct(\$param, \$params) {}<br>";
    $book1 = new Book("The Alchemist", "Paulo Coelho", 300);
    $book2  = new Book("1984", "George Orwell", 200);

    echo "Calling the author of \$book1->author: $book1->author";

?>

<!--3.9 Object Functions -->
<?php
    echo "<h1>3.9 Object Functions</h1>";
    echo "<hr>";
    echo "<h2> You can have attributes inside a class, but you can also have functions too</h2>";

    class Student {
        var $name;
        var $major;
        var $gpa;

        function __construct($name, $major, $gpa){
            $this->name = $name;
            $this->major = $major;
            $this->gpa = $gpa;
        }

        function hasHonours(){
            if($this->gpa >= 3.5){
                return "true<br>";
            }
            return "false<br>";

        }

    }

    $student1 = new Student("Jim", "Art", 3.0);
    $student2 = new Student("Amy", "Psychology", 3.5);

    //It's like student1.hasHonours();
    echo "Note that functions inside double quote strings like this 
    will not work (so you may to create a separate variable)<br>";
    echo "<br>";
    echo '"\$student1->hasHonours: $student1->hasHonours()"<br><br>';
    // echo '"\$student2->hasHonours: $student2->hasHonours()"<br>';
    echo "OR<br>";
    echo "It can be done with concatination (s like perl)<br>";
    echo "\$student1->hasHonours(): ".$student1->hasHonours();

?>

<!--4.0 GETTERS AND SETTERS -->
<?php
    echo "<h1>4.0 GETTERS AND SETTERS </h1>";
    echo "<hr>";

    class Movie{
        // private $title;
        // private $rating;
        //new code must be written with public
        //var is only used for compatibility purposes
        public $title;
        private $rating;

        function __construct($title, $rating){
            $this->title = $title;
            $this->setRating($rating);
        }

        function getRating(){
            return $this->rating;
        }

        function setRating($newRating){
            if($newRating == "G" ||
               $newRating == "PG" ||
               $newRating == "PG-13" ||
               $newRating == "R" ||
               $newRating == "NR")
            $this->rating = $newRating;
            else
            $this->rating = "NR";
        }
    }

    $movie = new Movie("Avengers", "PG-13");

    //If the visibility of the attributes are 
    //set to private, they cannot be accessed
    //and/or changed. 
    $movie->title = "Ted";
    echo "\$movie->title where title is public: ".$movie->title."<br><br>";

    echo "This will will result in error if rating is private<br>";
    echo '$movie->rating<br>';

    //For private attributes, this is where getters and setters come in
    echo "Old Rating: ".$movie->getRating().'<br>';
    $movie->setRating("R");
    echo "New Rating: ".$movie->getRating().'<br>';

?>

<!--4.1 INHERITENCE-->
<?php
    echo "<h1>4.1 INHERITENCE</h1>";
    echo "<hr>";

    class Chef{
        function makeChicken(){
            echo "The chef makes chicken <br>";
        }

        function makeSalad(){
            echo "The chef makes salad <br>";
        }

        function makeSpecialDish(){
            echo "The chef makes BBQ <br>";
        }
    }

    class ItalianChef extends Chef {

        function makePasta(){
            echo "The Italian chef is making pasta <br>";
        }

        function makePizza(){
            echo "The Italian chef is making pizza <br>";
        }

        function makeSpecialDish(){
            echo "The Italian chef is making lasagna <br>";
        }
    }


    $chef = new Chef();
    // $chef->makeChicken(); 
    $chef->makeSpecialDish();
    
    $italianChef = new ItalianChef();
    // $italianChef->makeChicken(); 

    //this is polymorphism through OVERRIDING
    $italianChef->makeSpecialDish();
?>

