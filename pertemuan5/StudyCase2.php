<?php
#############################
# Study Case
# File name : StudyCase2.php
#############################

    function addition($num1, $num2){
        return $num1+$num2;
    }

    function subtraction($num1, $num2){
        return $num1-$num2;
    }

    function multiplication($num1, $num2){
        return $num1*$num2;
    }

    function division($num1, $num2){
        return $num1/$num2;
    }

    //Number Operations//
    echo "Number Operations \n";
    echo "what operations do you want to calculate? (select number): \n";
    echo "1 = Addition \n";
    echo "2 = Subtraction \n";
    echo "3 = Multiplication \n";
    echo "4 = Division \n";

    $options = fgets(STDIN);
    switch($options){
    case 1:
        echo "Addition results\n";
        echo "Enter your first number= ";
        $num1 = fgets(STDIN);
        echo "Enter your second number = ";
        $num2 = fgets(STDIN);
        echo "Addition result = ";
        echo addition ($num1, $num2);
        break;
    case 2:
        echo "Subtraction results\n";
        echo "Enter your first number= ";
        $num1 = fgets(STDIN);
        echo "Enter your second number = ";
        $num2 = fgets(STDIN);
        echo "Subtraction result = ";
        echo subtraction ($num1, $num2);
        break;
    case 3:
        echo "Multiplication results\n";
        echo "Enter your first number= ";
        $num1 = fgets(STDIN);
        echo "Enter your second number = ";
        $num2 = fgets(STDIN);
        echo "Multiplication result = ";
        echo multiplication ($num1, $num2);
        break;
    case 4:
        echo "Division results\n";
        echo "Enter your first number= ";
        $num1 = fgets(STDIN);
        echo "Enter your second number = ";
        $num2 = fgets(STDIN);
        echo "Division result = ";
        echo division ($num1, $num2);
        break;
    default:
        echo "No options" . $pilihan;
    }


    // case 11:
    //     echo "Temperature conversion from Reamur to Fahrenheit\n";
    //     echo "Enter Reamur temperature = ";
    //     $tmpC = fgets(STDIN);
    //     echo "Reamur = ", $tmpR;
    //     echo "R to F conversion results = ";
    //     echo r_f ($tmpR);
    //     break;
    // echo "Hasil pertambahan dari 5 dan 4 adalah = ";
    // echo addition (5,4);
    // echo "<br>";
    // echo "Hasil pengurangan dari 15 dan 3 adalah = ";
    // echo subtraction (15,3);
    // echo "<br>";
    // echo "Hasil perkalian dari 8 dan 4 adalah = ";
    // echo multiply (8,4);
    // echo "<br>";
    // echo "Hasil pembagian dari 150 dan 5  adalah = ";
    // echo division (150,5);
    // echo "<br>";
?>