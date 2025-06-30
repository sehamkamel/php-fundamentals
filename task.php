<?php
echo"--------Variables--------";
echo "<br>";
$var="seham";
$var=123;
$var=true;
$var=12.3;
echo $var ; 
echo "<br>";
define("name","seham");
echo name;
echo "<br>";

echo "--------Arithmetic opertors--------";
echo "<br>";
$num1=5;$num2=20;
echo"sum:", $num1+$num2;
echo"<br>";
echo "sub:",$num1-$num2;
echo"<br>";
echo "mul:",$num1*$num2;
echo"<br>";
echo "div:",$num1/$num2;
echo "<br>";
echo"mod:",$num2%$num1;
echo "<br>";

echo"--------Assignment operators--------";
echo"<br>";
$x=5;
$x+=1;
echo $x;
echo "<br>"; 

echo "--------if else statement--------";
echo "<br>";
$grade=85;
if($grade>=90){
    echo"A+ grade";
}
elseif($grade>=80){
    echo "B+ grade";
}
elseif($grade>=70){
    echo"C+ grade";
}
elseif($grade>=60){
    echo"D+ grade";
}
else{
    echo"F grade";
}
echo"<br>";

echo"--------Switch statement--------";
echo"<br>";
$menuitem="pizza";
switch($menuitem){
    case "burger":
        echo"burger cost 50 pounds";
        break;
        case "pizza":
            echo "pizza cost 75 pounds ";
            break;
            case"pasta":
                echo "pasta cost 60 pounnds";
                break;
                default:
                echo "item not on the menu";

}
echo "<br>";

echo "--------Logical operators--------";
echo "<br>";
$x=3;$y="3";
if($x==$y){
    echo"is equal";
}
echo "<br>";
$x=3;$y="3";
if($x===$y){
    echo"is equal";
}
echo "<br>";
$x=3;$y="4";
if($x!=$y){
    echo"is not equal";
}
echo "<br>";
$x=3;$y="3";
if($x!==$y){
    echo"is not equal";
}
echo "<br>";
$x=4;$y=4;
if($x>=$y){
    echo"is equal";
}
echo "<br>";
$username="admin";
$password="123";
if($username== "admin"&& $password== "123"){
    echo "login successful!";
}
echo "<br>";

echo"--------While loop--------";
echo "<br>";
$counter=1;
while($counter < 10){
    echo $counter;
    $counter ++;
}
echo "<br>";

echo "--------do while loop--------";
echo "<br>";
$counter=1;
do{
       echo $counter;
    $counter ++; 
}
while($counter < 10);
echo "<br>"; 

echo"--------For loop--------";
echo "<br>";
for($counter= 0;$counter< 10;$counter++){
    echo $counter;}
    echo "<br>";
    echo "--------Functions--------";
    echo "<br>";
    function sumTwoNumbers($num1,$num2){
        return $num1 + $num2;
    }
    $result=sumTwoNumbers(5,3);
    echo $result;

?>

