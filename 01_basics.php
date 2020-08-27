<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Doc</title>
</head>
<body>
    <div class="container">
        <h1>This is my first php file</h1>
    </div>
    <?php
        echo "Hurray! My first php file";
        //variables
        echo "<br>";
        $var1 = 45;
        $var2 = 24;
        $var3 = $var1+$var2;
        echo $var1;
        echo "<br>";
        echo $var2;
        echo "<br>";
        echo $var3;
        echo "<br>";
        //operators
        // arithmetic operators   +,-,*,/
        echo "The value of var1 + var2 is";
        echo "&nbsp;";
        echo $var1+$var2;

        //assignment operators    =
        $newVar = $var1;
        echo "<br>";
        echo "newVar = ";
        echo $newVar;
        echo "<br>";
        //comparison operators      return boolean
        echo "The value of 1==4 is ";
        echo var_dump(1==4);
        echo "<br>";
        echo "The value of 1>=4 is ";
        echo var_dump(1>=4);
        echo "<br>";
        echo "The value of 1<=4 is ";
        echo var_dump(1<=4);
        echo "<br>";
        echo "The value of 1!=4 is ";
        echo var_dump(1!=4);
        echo "<br>";
        //increment decrement oper
        echo $var1++;
        echo "<br>";    
        echo $var1--;
        echo "<br>"; 
        echo ++$var1;
        echo "<br>"; 
        echo --$var1; echo "<br>"; 

        //logical operator 
        $myVar = (true and true);
        echo var_dump($myVar);
        $myVar1 = (true or false);
        echo var_dump($myVar);
        $myVar2 = (true xor false);
        echo var_dump($myVar2);
    ?>
    <?php
        define ('PI', 3.14);
        //Datatypes in php
        // String , float, int, bool, Array, Object
        echo "Datatypes <br>";
        $var = "This is a string ";
        echo var_dump($var);
        $var = 12;
        echo var_dump($var);
        $var = 12.1;
        echo var_dump($var);
        $var = true;
        echo var_dump($var);
        $var = 'a';
        echo var_dump($var);
        echo "<br>";
        echo PI;
    ?>
</body>
</html>









