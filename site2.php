<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>

<!-------------------------------------------------------------------------------->
<!--USER INPUT-->
<?php 
    echo "<h1>2.1 USER INPUT</h1>";
    echo "<hr>";
    print("<b>Note</b>: First time loaders (or without cache stored) will find undefined array key warnings.<br> 
          It's nothing scary for these purposes until you reach the 2.6 ARRAYS part.<br><br>");

    print("We use forms to make user input<br>
          Forms are where PHP and HTML meet.<br>
          Forms are a container for different types of user input. 
          In this case, the &lt;input&gt; element is a form element.");

    echo "<br><br>";
?>

<!--Forms is a container for different types of user input. 
In this case, the <input> element is a form element-->
<form action="site2.php" method="get">
    Name:
     <br>
    <input type="text" name="username">
     <br>
    Age:
     <br>
    <input type="text" name="userage">
     <br>
     <!--<input type="submit"> OR -->
    <button>Submit</button>
</form>

<!--The name attribute of <input> must be identical to the parameter
of the $_GET variable-->
Your name is <?php echo $_GET["username"]; ?>.
<br>
Your are <?php echo $_GET["userage"]?> years old.

<!-------------------------------------------------------------------------------->
<!--BUILDING A CALCULATOR-->
<?php
    echo "<h1>2.2 BUILDING A CALCULATOR</h1>";
    echo "<hr>";

    print("Every input you pass to the form will appear in the url. See your url above for the inputs 
    you passed to this web server.<br><br>");
    print("Skeleton: http://localhost:4000/www/<b>site2.php?num1=<i>num1</i>&num2=<i>num2</i></b><br><br>");
    print("What's passed to the URL (num1 and num2) are called URL variables");

?>

<form action="site2.php" method="get">
    NUM1: <input type="number" name="num1">
        <br>
    NUM2: <input type="number" name="num2">
        <br>
    <input type="submit">
</form>

Answer: <?php echo $_GET["num1"] + $_GET["num2"] ?>

<!-------------------------------------------------------------------------------->
<!--BUILDING A MAD LIBS GAME-->
<?php 
    echo "<h1>2.3 BUILDING A MAD LIBS GAME</h1>";
    echo "<hr>";
?>

<form action="site2.php" method="get">
    Colour: <input type="text" name="colour"> <br>
    Plural Noun: <input type="text" name="pluralNoun"> <br>
    Celebrity: <input type="text" name="celebrity"> <br>
    <input type="submit">
</form>

<?php
    //Create 3 variables
    $colour = $_GET["colour"];
    $pluralNoun = $_GET["pluralNoun"];
    $celebrity = $_GET["celebrity"];

    echo "Roses are $colour <br>";
    echo "$pluralNoun are blue <br>";
    echo "I love $celebrity <br>";
?>

<!-------------------------------------------------------------------------------->
<!--URL PARAMETERS-->
<?php 
    echo "<h1>2.4 URL PARAMETERS</h1>";
    echo "<hr>";
?>

<form action="site2.php" method="get">
    Name: <input type="text" name="name"> <br>
    <input type="submit">
</form>

<?php 
    echo $_GET["age"];
?>

<!-------------------------------------------------------------------------------->
<!--POST AND GET-->
<?php 
    echo "<h1>2.5 POST AND GET</h1>";
    echo "<hr>";

    print("GET allows php variables to access your input but it will also be available in the URL parameter<br>");
    print("Therefore, password information or any confidential info sent with GET is highly insecure.<br>");
    print("POST prevents that. It will prevent showing user inputs in a URL parameter<br>");
    print("<b>GET is used to retrieve data while POST is meant to insert or update remote data.</b>");
?>

<form action="site2.php" method="post">
    Name: <input type="password" name="password"> <br>
    <input type="submit">
</form>

<?php 
    //both $_POST and $_GET accept the name attribute inside <form>
    echo $_POST["password"];
?>

<!-------------------------------------------------------------------------------->
<!--ARRAYS-->
<?php
    echo "<h1>2.6 ARRAYS</h1>";
    echo "<hr>";

    echo "Arrays in PHP do not have to be homogenous. They are dynamic.<br>";

    $friends = array("John", "Jeremy", "Sarah", "Monica");
    $friends[0] = "Dwight"; //index can be modified
    //echo $friends; will get Array to string conversion error and prints the type of the variable "Array"
    echo $friends[0]."<br>"; //Allows indexing

    $friends[9] = "Jordan";
    echo $friends[9]."<br>";

    echo count($friends); //Count how many elements are in the array 
?>

<!-------------------------------------------------------------------------------->
<!--USING CHECKBOXES-->
<?php
    echo "<h1>2.7 USING CHECKBOXES</h1>";
    echo "<hr>";
?>

<form action="site2.php" method="post">
    Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
    Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
    Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
    <input type="submit">
</form>

<?php 
    //This is the array (note the name attribute. Beside fruits there is enclosed square brackets)
    $fruits =  $_POST["fruits"]; 
    // echo $fruits[0];
    // echo $fruits[1];
    echo $fruits[2];
    //index 0 corresponds to the first checkbox (print apples if available)
    //index 1 corresponds to the second check (prints oranges if available)
    //etc.
    //echo $fruits[0] will print whatever is the CLOSEST TO INDEX 0
    //echo $fruits[1]  //   //     //     // //   //     //   //  1 
            //(WILL NEED TWO CHECKPOINTS OTHERWISE WARNING UNDEFINED ARRAY KEY)
    //Same as above but needs three checkpoints (always prints pears)
?>

<!-------------------------------------------------------------------------------->
<!--ASSOCIATIVE ARRAY-->
<?php
    echo "<h1>2.8 ASSOCIATIVE ARRAY</h1>";
    echo "<hr>";
    echo "Assoc. arrays have key-value pairs. They have to be unique<br>";
?>

<!--Type a user FROM the assoc array to get their grade-->
<form action="site2.php" method="post">
    <input type="text" name="student">
    <input type="submit">
</form>

<?php
    //Store student name (key) and grade (value)
    $grades = array("Jimmy"=>"C", "Chuck"=>"A+", "Kim"=>"A+");
    // $grades["Jimmy"] = "F"; //value can be modified
    // echo "Jimmy's grade: ".$grades["Jimmy"]."<br>"; //prints value (grade in this case)
    // echo "Number of students: ".count($grades);

    echo $grades[$_POST["student"]];
?>


</body>
