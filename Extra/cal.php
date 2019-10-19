<!DOCTYPE html PUBLIC "-//w3c//dtd xhtml 1.0 tRANSITIONAL//en"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<h1>This is a calculator<br></h1>

</head>
<body>
<form method="GET">
    <input type="number" placeholder='only int' name="num1">Put the first number here<br>
    <input type="number" placeholder='only int' name="num2">Put the second number here<br>
    <select name="operator">
            <option>None</option>
            <option>Add</option>
            <option>SUbstract</option>
            <option>Multiply</option>
            <option>Divide</option></select>
    <button type="submit" name="submit" value="submit">Submit</button> 
    
</form>
<p><br>Answer is  :</p>
<?php
    if (isset($_GET['submit'])){
        $val1 = $_GET['num1'];
        $val2 = $_GET['num2']; 
        $val3 = $_GET['operator'];
    
    switch($val3){
    case "None":
        echo "Please select an operator";
        break;
    case "Add":
        echo $val1+$val2;
        break;
    case "Substract":
        echo $val1-$val2;
        break;
    case "Multiply":
        echo $val1*$val2;
        break;
    case "Divide":
        echo $val1/$val2;
        break;
    }}


    $list = array("a","b","c");
    echo $list[1];
?>
</body>
</html>
 