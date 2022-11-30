<!-------------------------------------------------------------------------------->
<!--2.8 FUNCTIONS-->
<?php
    echo "<h1>2.8 FUNCTIONS</h1>";
    echo "<hr>";

    function sayHi($name, $age){
        echo "hi $name!, you are $age";
    }

    function sayNice2u(){
        echo "Nice to meet you!";
    }

    // sayHi("Jave"); //functions that do not match will not process further 
    sayHi("Jave", 29);

    //Notice that newlines (breaking) aren't done for you.
    //You put <br> 
    sayNice2U();

    //Two functions can't have the same name and 
    //the same params like this
    // function reply(){
    //     echo "Nice to meet you too!";
    // }

    // function reply(){
    //     echo "Please to meet you!";
    // }

    // reply();

?>
<!-------------------------------------------------------------------------------->
<!--2.9 RETURN STATEMENTS-->
<?php 
    echo "<h1>2.9 RETURN STATEMENTS</h1>";
    echo "<hr>";

    //Also note that functions do not have to return anything (like a void function)
    //just
    //return;

    function cube($num){
        return $num * $num * $num; //function scope stops here (doesn't process after this)
        echo "cube() function is calculated";
    }

    echo "cube(3) = ".cube(3)."<br>";

    $cube2 = cube(2);
    echo "$cube2 <br>";
?>

<!-------------------------------------------------------------------------------->
<!--3.0 IF STATEMENTS-->
<?php 
    echo "<h1>3.0 IF STATEMENTS</h1>";
    echo "<hr>";

    $available = true;
    if($available){
        echo "Yes, you are available";
    }
    else #{ optional (like C)
        echo "No, you are absent";
    #} 

    echo "<br>";

    $age = 94;
    if($age < 4)
        echo "you are a baby";
    else if($age < 18){
        echo "you are a child";
    }
    elseif($age < 84){ #or else if (with space)
        echo "You are an adult";
    }
    else{
        echo "You are an elder";
    }

    echo "<br>";

    # & || ! == != operators are allowed

    function getMax($num1, $num2){
        if($num1 > $num2)
            return $num1;
        else
            return $num2;
    }

    echo "4>7 which one is greater?: ".getMax(4,7)." <br>";
?>

<!-------------------------------------------------------------------------------->
<!--3.1 ADVANCED CALCULATOR-->

    <?php
    echo "<h1>3.1 ADVANCED CALCUALTOR</h1>";
    echo "<hr>";
    ?>

    <form action="site3.php" method="post">
        <!--step allows decimals. in this case, it is 0.00-->
        First Num: <input type="number" step="0.1" name="num1"><br>
        OP : <input type="text" name="op"><br>
        Second Num:<input type="number" step="0.1" name="num2"><br>
        <button>Calculate!</button>
    </form>

<?php
    $num1 = $_POST["num1"];
    $op = $_POST["op"];
    $num2 = $_POST["num2"];

    if($op == "+")
        echo $num1 + $num2;
    else if($op == '-')
        echo $num1 - $num2;
    else if($op == '*') 
        echo $num1 / $num2;
    else
        echo "Invalid operator";
 ?>

<!-------------------------------------------------------------------------------->
<!--3.2 SWITCH STATEMENTS-->
<?php 
    echo "<h1>3.2 SWITCH STATEMENTS</h1>";
    echo "<hr>";
?>

<form action="site3.php" method="post">
    grade: <input type="text" name="grade">
    <button>submit</button>
</form>

<?php
    $grade = $_POST["grade"];
    switch(strtoupper($grade)){
        case 'A':
            echo "Student got an A in an exam";
        break;
        case 'B':
            echo "Student got a B in an exam";
        default:
            echo "Invalid grade";
        break;
    }
?>

<!-------------------------------------------------------------------------------->
<!--3.3 WHILE LOOPS-->
<?php
    echo "<h1>3.3 WHILE LOOPS</h1>";
    echo "<hr>";
?>

<?php 
    echo "It's like other C-based programming languages.<br>";
    echo "A while loop with the conditional \$index <= 5<br>";
    $index = 1;
    while($index <= 5){
        echo "$index <br>";
        $index++;
    }

    echo "<br>A do-while loop with the conditional \$index >= 1<br>";
    do{
        echo "$index <br>";
        $index--;
    }while($index >= 1);

?>

<!-------------------------------------------------------------------------------->
<!--3.4 FOR LOOPS-->
<?php
    echo "<h1>3.4 FOR LOOPS</h1>";
    echo "<hr>";
?>

<?php
    echo "Done with for(\$i = 0; \$i < 5; \$i++)<br>";
    for($i = 0; $i < 5; $i++){
        echo "\$i = $i<br>";
    }

    echo "You can iterate over arrays. Nothing surprising<br>";
    $array = array(2, 5, 6, 2, 61, 1);
    for($i = 0; $i < count($array); $i++){
        echo "\$array[$i] = $array[$i]<br>";
    }
?>

