<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 02</title>
</head>
<style>
*{
    margin: 0;
    padding-top: 10px;
    padding-bottom:50px;
    padding-left: 20px;
    padding-right: 20px;
    box-sizing: border-box;
}
    .container{
        max-width: 80%;
        max-height: 80%;
        background-color: lightgrey;
        margin: 50px auto;
        
    }
</style>
<body>
    <div class = "container">
        <h1>Welcome to this Page</h1>
    </div>
    <div>
        Hello ! Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
        Odit ratione doloremque officia eaque nostrum saepe cumque consequuntur dignissimos earum modi.
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis nesciunt libero inventore dolores?
        Magni doloribus deserunt ipsum qui necessitatibus accusantium!
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum vel minus aliquam modi temporibus consequuntur. Rerum aliquam numquam non autem a quaerat, ut, ipsam est dolores odit fuga saepe, sunt id! Enim nisi facilis iure quod pariatur, eos, nostrum eveniet aperiam impedit earum itaque. Tempore mollitia repellendus fuga vero facilis.

    </div>
    <?php
        $age = 20;
        if($age>20){
            echo "You can go to the party!";
        }
        else if($age==7){
            echo "You are 7 years old";
        }
        else{
            echo "You cannot go to the party:";
        }

        //array
        echo "<br> Array: ";
        $lang = array("Python", "Java", "C++", "NodeJs", "Php");
        echo $lang[0];
        echo "<br>Count ";
        echo count($lang);

        //Loops
        $a = 0;
        while ($a <= 10){
            echo "<br>The value of a is: ";
            echo $a;
            $a++;
        }
        echo "<br>";
        echo "Languages are:  ";
        $i = count($lang)-1;
        while ($i>=0){                  //while loop
            echo $lang[$i];
            echo " ";
            $i--;
        }
        $i = count($lang)-1;
        echo "<br>";
        echo "Languages are:  ";
        do {                            //do while loop
            
            echo $lang[$i];
            echo " ";
            $i--;
            
        }while ($i>=0);
        $a = 10;
        echo "<br> While Loop ";
        for ($a=10; $a>0; $a--){
            echo $a;
            echo " ";
        }
        echo "<br> For Loop ";
        foreach ($lang as $value){
            echo "<br> The value is ";
            echo $value;
        }
        echo "<br> from function";
        function print5(){
            echo "FIVE";
        }
        print5();

        echo "<br> from func using param ";
        function printnumber($number){
            echo $number;
            
        }
        printnumber(6);
        printnumber(100);
    ?>
</body>
</html>