<?php

echo "<br> ---------------------------------------------------------------------------------------- <br>";
echo "Q1 <br> ";
$arr_len = 10;
for ($i = 1; $i <= $arr_len; $i++) {
    echo $i;
    if ($i < 1 || $i < $arr_len) {
        echo "-";
    }
}

echo "<br> ---------------------------------------------------------------------------------------- <br>";
echo "Q2 <br> ";
$last = 30;
$sum = 0;
for ($i = 0; $i <= $last; $i++) {
    $sum += $i;
}
echo $sum;


echo "<br> ---------------------------------------------------------------------------------------- <br>";
echo "Q3c <br> ";
for ($i = ord("E"); $i > ord("A") - 1; $i--) {
    for ($x = $i - 1; $x >= ord("A"); $x--) {
        echo "A" . " ";
    }
    for ($x = ord("E") - $i; $x >= 0; --$x) {
        echo chr(ord("E") - $i + ord("A")) . " ";
    }

    echo "<br>";
}


echo "<br> ---------------------------------------------------------------------------------------- <br>";
echo "Q3b <br> ";
for ($i = 5; $i > 0; $i--) {
    for ($x = $i - 1; $x >= 1; $x--) {
        echo 1 . " ";
    }
    for ($x = 5 - $i; $x >= 0; --$x) {
        echo 5 - $i + 1 . " ";
    }

    echo "<br>";
}

echo "<br> ---------------------------------------------------------------------------------------- <br>";
echo "Q4 <br> ";
for ($i = 1; $i <= 5; $i++) {
    for ($x = 1; $x <= 5; $x++) {
        if ($i === $x) {
            echo $i . " ";
        } else {
            echo 0 . " ";
        }
    }
    echo "<br>";
}

echo "<br> ---------------------------------------------------------------------------------------- <br>";
echo "Q5 <br> ";
$num = 5;
$sum = 1;
for ($i = 1; $i <= $num; $i++) {
    $sum *= $i;
}
echo $sum;

echo "<br> ---------------------------------------------------------------------------------------- <br>";
echo "Q6 <br> ";
$fl = 10;
$n1 = 1;
$n2 = 0;
$n3 = 0;
for ($i = 1; $i <= $fl; $i++) {
    echo $n3 . " ... ";
    $n2 = $n1;
    $n1 = $n3;
    $n3 = $n1 + $n2;
}

echo "<br> ---------------------------------------------------------------------------------------- <br>";
echo "Q7 <br> ";
$fl = "OrangeAcademy";
$con = 0;
for ($i = 0; $i <= strlen($fl) - 1; $i++) {
    if ($fl[$i] === 'c') {
        $con++;
    }
}
echo $con;

echo "<br> ---------------------------------------------------------------------------------------- <br>";
echo "Q8 <br> ";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<style>
    table,
    td,
    tr {
        align-items: center;
        border: 1px solid #333;
    }

    .white {
        height: 30px;
        width: 30px;
        background-color: #fff;
    }

    .black {
        height: 30px;
        width: 30px;
        background-color: #000;

    }
</style>

<body>

    <table cellpadding="3" cellspacing="0">
        <?php
        for ($i = 1; $i <= 6; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 5; $j++) {
                echo "<td>$i * $j = " . $i * $j . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <?php
    echo "<br> ---------------------------------------------------------------------------------------- <br>";
    echo "Q9 <br> ";
    ?>
    <table width="270px" cellspacing="0px" cellpadding="0px">
        <?php
        for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= 8; $col++) {
                $total = $row + $col;
                if ($total % 2 == 0) {
                    echo "<td class='white' ></td>";
                } else {
                    echo "<td class ='black' ></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
    <?php
    echo "<br> ---------------------------------------------------------------------------------------- <br>";
    echo "Q10 <br> ";
    echo "<table border =\"1\" style='border-collapse: collapse'>";
    for ($row = 1; $row <= 10; $row++) {
        echo "<tr> \n";
        for ($col = 1; $col <= 10; $col++) {
            $p = $col * $row;
            echo "<td>$p</td> \n";
        }
        echo "</tr>";
    }
    echo "</table>";


    echo "<br> ---------------------------------------------------------------------------------------- <br>";
    echo "Q11 <br> ";
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo " FizzBuzz" . " ... ";
        } else if ($i % 3 == 0) {
            echo " Fizz" . " ... ";
        } else if ($i % 5 == 0) {
            echo " Buzz" . " ... ";
        } else {
            echo $i . " ... ";
        }
    }

    echo "<br> ---------------------------------------------------------------------------------------- <br>";
    echo "Q12 <br> ";
    function Floyd($n)
    {
        $c = 1;
        for ($i = 0; $i < $n; $i++) {
            for ($x = $i; $x >= 0; $x--) {
                echo $c . " ";
                $c++;
            }
            echo "<br>";
        }
    }
    Floyd(5);

    echo "<br> ---------------------------------------------------------------------------------------- <br>";
    echo "Q13 <br> ";

    for ($i = 8; $i > 0; $i--) {
        for ($x = $i; $x >= 1; $x--) {
            echo '&nbsp;';
        }
        echo "*";
        for ($x = $i; $x <= 8; $x++) {
            if ($i !== 4 && $i !== 8) {

                echo '&nbsp;' . '&nbsp;';
            } else {
                echo "*";
            }
        }
        echo "*";
        for ($x = $i; $x >= 1; $x--) {
            echo '&nbsp;';
        }
        echo "<br>";
    }

    echo "<br> ---------------------------------------------------------------------------------------- <br>";
    echo "Q14 <br> ";

    for ($i = 9; $i > 0; $i--) {
        if ($i === 1 || $i === 9 || $i === 5) {
            echo "&nbsp;";
        }
        echo "*";
        for ($x = 5; $x > 0; $x--) {
            if ($i !== 5 && $i !== 9 &&  $i !== 1) {

                echo '&nbsp;' . " " . '&nbsp;';
            } else {
                echo "*";
            }
        }
        echo "*";
        echo "<br>";
    }

    echo "<br> ---------------------------------------------------------------------------------------- <br>";
    echo "Q15 <br> ";

    for ($i = 6; $i > 0; $i--) {

        if ($i <= 2 || $i >= 5) {
            echo "&nbsp;";
        }
        echo "*";
        for ($x = 3; $x > 0; $x--) {
            if ($i !== 6 &&  $i !== 1) {

                echo '&nbsp;' . " " . '&nbsp;';
            } else {
                echo "*";
            }
        }
        if ($i >= 5 || $i <= 2) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<br> ---------------------------------------------------------------------------------------- <br>";
    echo "Q16 <br> ";

    for ($i = ord("E") - 65; $i > (ord("A") - 1 - 65); $i--) {
        for ($x = $i; $x >= ord("A") - 65; $x--) {
            echo "&nbsp; &nbsp;";
        }
        for ($x = (ord("A") - 65); $x <= (ord("E") - $i - 65); $x++) {
            echo chr($x + ord("A")) . "&nbsp; &nbsp;";
        }
        echo "<br>";
    }
    for ($i = (ord("A") - 1 -  65); $i < ord("E") - 65; $i++) {
        for ($x = ord("A") - 2 - 65; $x <= $i; $x++) {
            echo "&nbsp; &nbsp;";
        }
        for ($x = (ord("A") - 65); $x <= (ord("C") - $i - 65); $x++) {
            echo chr($x + ord("A")) . "&nbsp; &nbsp;";
        }
        echo "<br>";
    }


    ?>
</body>

</html>