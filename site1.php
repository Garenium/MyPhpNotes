<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>

    <!--
    Type:
        php -S localhost:4000 
    to make the web server available
    -->

    <!--1. ECHO-->
    <?php 
        //echo(""); or echo "";
        echo("<h1>1.1 ECHO</h1>");
        echo("<hr>");
        echo "<p>echo \"\"; or echo(\"\");<br>";
        echo "Hint: type ctrl+u to see the source code";
        echo "<hr>";
    ?>

    <!----------------------------->
    <!--VARIABLES-->
    <?php
       //variables 
       //dollar signs will mean (I'm going to make a variable)
       echo "<h1>1.2 VARIABLES</h1>";
       echo "<hr>";
        echo "<p>Hello! my name is John<br>";
        echo "I am 69 years old</p>";
        //change name and age
        $characterName = "Mark";
        $age = 72;
        echo "<p>Hello! my name is $characterName <br>";
        echo "I am $age years old</p>";
       echo "<hr>";
    ?>


    <!----------------------------->
    <!--DATA TYPES-->
    <?php
        //data types
        echo "<h1>1.3 DATA TYPES</h1>";
        echo "<hr>";
            $phrase = "To be or not to be"; //string
            $age = 9;                       //int
            $width = 1.75;                  //decimal/floating
            $isMale = true;                 //boolean
            //$data = null                          //no value

            echo "There is string, int, decimal, boolean, and null";
        echo "<hr>";
    ?>


    <!----------------------------->
    <!--STRINGS MANIPULATION-->
    <?php
        echo "<h1>1.4 STRINGS MANIPULATION</h1>";
        echo "<hr>";

        echo "<h2>Concatenation</h2>";
        $phrase = "Hello. I'm inside \$phrase";
        echo "$phrase<br>";
        echo $phrase." again but concatenated with \".\" ";

        echo "<h2>strtolower() and strtoupper()</h2>";
        echo strtolower($phrase)." <b>(\$phrase is all lowercase with strtolower())</b><br>";
        echo strtoupper($phrase)." <b>(\$phrase is all uppercase with strtoupper())</b> <br><br>";

        echo "<h2>strlen()</h2>";
        echo strlen($phrase)." <b>(\$phrase's length is calculated with strlen())</b>  <br><br>";

        echo "<h2>string indexing with []</h2>";
        echo $phrase[4]." (From \$phrase's \"Hell<b>o</b>. I'm inside \$phrase\"</b>)<br>";
        echo "Mike"[0]." (From Mike's <b>M</b>ike</b>)<br>";

        echo "<h2>Change character at a specified index with [ ] (just like C)</h2>";
        $word = "moss";
        echo "Before: ".$word."<br>";
        $word[0] = 'l'; //can be single-qutoes
        $word[strlen($word)-1] = "t";
        echo "After: ".$word."<br>";

        echo "<h2>str_replace(substring, newsubstring, ogstring)<br>Replace a word from an original string</h2>";
        echo str_replace("Hello.", "Hi!", $phrase)." <b>(\"Hello.\" is change to \"Hi!\")</b>";

        echo "<h2>Get a substring with substr(original str, start inc, end excl)</h2>";
        echo substr($phrase, 0, 7)." <b>(get substring of \$phrase with substr(ogstring, startindex, exclusive number of index after))</b>";

        echo "<hr>";
    ?>


    <!----------------------------->
    <!--WORKING WITH NUMBERS-->
    <?php
        echo "<h1>1.5 WORKING WITH NUMBERS</h1>";
        echo "<hr>";
            //echo "Works with every binary operator with order of operations: -50.3 + 9 = ".-50.3 + 9." <br>";
            //^^Doesn't work 
            echo "<h2> Works with every binary operator with order of operations</h2>";
            echo "-50.3 + 9 = ".-50.3 + 9.;
            echo "<br><br>";

            $num = 10;
            echo "\$num = ".$num."<br>";
            echo "Now adding 10<br>";
            echo "\$num = ".$num + 10;

            echo "<h2>supports +=, -=, *=, and /=: </h2>";
            echo "\$num += 10 becomes: ".$num += 10;

            echo "<h2>Also support ++ and -- </h2>";
            echo "++\$num becomes: ".++$num;

            echo "<h2>Supports built-in math functions like abs()</h2>";
            echo "abs(-100): ".abs(-100)."<br>";
            echo "power(2,4): : ".pow(2,4)."<br>";
            echo "sqrt(144): ".sqrt(144)."<br>";
            echo "max(2,10): ".max(2,10)."<br>";
            echo "min(2,10): ".min(2,10)."<br>";
            echo "round(3.2): ".round(3.2)."<br>";
            echo "ceil(5.2): ".ceil(5.2)."<br>";
            echo "floor(5.2): ".floor(5.2)."<br>";
            echo "And there's also sin cos tan and log (More info here: <a href=\"https://www.w3schools.com/php/php_ref_math.asp\">link</a>)";

            echo "<hr>";
    ?>
</body>

</html>