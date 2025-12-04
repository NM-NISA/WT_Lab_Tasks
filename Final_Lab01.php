<html>
    <body>
    <?php

    $length = 5;
    $width = 10;
    echo "Length: $length, Width: $width <br>";
    $area = $length*$width;
    $perimeter = 2*($length+$width);
    echo "The area of rectangle is: $area <br>";
    echo "The perimeter of rectangle is: $perimeter <br><br>";

    $amount = 500;
    echo "Amount: $amount <br>";
    $vat = $amount*0.15;
    echo "The VAT over the amount is: $vat <br><br>";

    $num = 7;
    if ($num %2 == 0) { 
    echo "$num is an even number <br><br>";  
    }
    else {
    echo "$num is an odd number <br><br>";  
    }

    $num1 = 20;
    $num2 = 15;
    $num3 = 25;
    echo "The numbers are: $num1, $num2, $num3 <br>";
    if ($num1 > $num2 && $num1 > $num3) {
    echo "$num1 is the largest number <br>";
    }
    else if ($num2 > $num3 && $num2 > $num1) {
    echo "$num2 is the largest number <br>";
    }
    else {
    echo "$num3 is the largest number <br>";
    }
    if ($num1 < $num2 && $num1 < $num3) {
    echo "$num1 is the smallest number <br><br>";
    }
    else if ($num2 < $num3 && $num2 < $num1) {
    echo "$num2 is the smallest number <br><br>";
    }
    else {
    echo "$num3 is the smallest number <br><br>";
    }

    echo "The odd numbers between 10 to 100: <br>";
    for ($i=10; $i<100; $i++) {
        if ($i %2 != 0) {
        echo "$i, ";  
        }
    }
    ?>
    </body>
</html>   