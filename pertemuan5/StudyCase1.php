<?php
#############################
# Study Case
# File name : StudyCase1.php
#############################

    function c_f ($tmpC){
        return  ($tmpC * 9/5) + 32;
    }
    function c_k ($tmpC){
        return  $tmpC + 273.15;
    }
    function c_r ($tmpC){
        return  (4/5) * $tmpC;
    }
    function f_c ($tmpF){
        return ($tmpF - 32) * 5/9;
    }
    function f_r ($tmpF){
        return  4/9 * ($tmpF - 32);
    }
    function f_k ($tmpF){
        return ($tmpF + 459.67) * 5/9;
    }
    function k_c ($tmpK){
        return $tmpK - 273.15;
    }
    function k_f ($tmpK){
        return ($tmpK * 9/5) - 459.67;
    }
    function k_r ($tmpK){
        return 4/5 * ($tmpK - 273);
    }
    function r_c ($tmpR){
        return $tmpR / 0.8;
    }
    function r_f ($tmpR){
        return ($tmpR * 2.25) + 32;
    }
    function r_k ($tmpR){
        return ($tmpR / 0.8) + 273.15;
    }

    //Temperature Conversion//
    echo "Temperature Conversion";
    echo "Want temperature conn version where (select number): \n";
    echo "1 = Celcius to Fahrenheit \n";
    echo "2 = Celcius to Kelvin \n";
    echo "3 = Celcius to Reamur \n";
    echo "4 = Fahrenheit to Celcius \n";
    echo "5 = Fahrenheit to Kelvin \n";
    echo "6 = Fahrenheit to Reamur \n";
    echo "7 = Kelvin to Celcius \n";
    echo "8 = Kelvin to Fahrenheit \n";
    echo "9 = Kelvin to Reamur \n";
    echo "10 = Reamur to Celcius \n";
    echo "11 = Reamur to Fahrenheit \n";
    echo "12 = Reamur to Kelvin \n";

    $options = fgets(STDIN);
    switch($options){
        case 1:
            echo "Temperature conversion from Celsius to Fahrenheit \n";
            echo "Enter Celsius temperature = ";
            $tmpC = fgets(STDIN);
            echo "Celcius = ", $tmpC;
            echo "C to F conversion results = ";
            echo c_f ($tmpC);
            break;
        case 2:
            echo "Temperature conversion from Celsius to Kelvin\n";
            echo "Enter Celsius temperature = ";
            $tmpC = fgets(STDIN);
            echo "Celcius = ", $tmpC;
            echo "C to K conversion results = ";
            echo c_k ($tmpC);
            break;
        case 3:
            echo "Temperature conversion from Celsius to Reamur\n";
            echo "Enter Celsius temperature = ";
            $tmpC = fgets(STDIN);
            echo "Celcius = ", $tmpC;
            echo "C to R conversion results = ";
            echo c_r ($tmpC);
            break;
        case 4:
            echo "Temperature conversion from Fahrenheit to Celsius\n";
            echo "Enter fahrenheit temperature = ";
            $tmpC = fgets(STDIN);
            echo "Fahrenheit = ", $tmpF;
            echo "F to C conversion results = ";
            echo f_c ($tmpF);
            break;
        case 5:
            echo "Temperature conversion from Fahrenheit to Kelvin\n";
            echo "Enter fahrenheit temperature = ";
            $tmpC = fgets(STDIN);
            echo "Fahrenheit = ", $tmpF;
            echo "F to K conversion results = ";
            echo f_k ($tmpF);
            break;
        case 6:
            echo "Temperature conversion from Fahrenheit to Reamur\n";
            echo "Enter fahrenheit temperature = ";
            $tmpC = fgets(STDIN);
            echo "Fahrenheit = ", $tmpF;
            echo "F to R conversion results = ";
            echo f_r ($tmpF);
            break;
        case 7:
            echo "Temperature conversion from Kelvin to Celsius\n";
            echo "Enter kelvin temperature = ";
            $tmpC = fgets(STDIN);
            echo "Kelvin = ", $tmpK;
            echo "The result of converting K to C = ";
            echo k_c ($tmpK);
            break;
        case 8:
            echo "Temperature conversion from Kelvin to Fahrenheit\n";
            echo "Enter fahrenheit temperature = ";
            $tmpC = fgets(STDIN);
            echo "Fahrenheit = ", $tmpF;
            echo "The result of converting K to F = ";
            echo k_f ($tmpK);
            break;
        case 9:
            echo "Temperature conversion from Kelvin to Reamur\n";
            echo "Enter fahrenheit temperature = ";
            $tmpC = fgets(STDIN);
            echo "Fahrenheit = ", $tmpF;
            echo "K to R conversion results = ";
            echo k_r ($tmpK);
            break;
        case 10:
            echo "Temperature conversion from Reamur to Celsius\n";
            echo "Enter Reamur temperature = ";
            $tmpC = fgets(STDIN);
            echo "Reamur = ", $tmpR;
            echo "R to C conversion results = ";
            echo r_c ($tmpR);
            break;
        case 11:
            echo "Temperature conversion from Reamur to Fahrenheit\n";
            echo "Enter Reamur temperature = ";
            $tmpC = fgets(STDIN);
            echo "Reamur = ", $tmpR;
            echo "R to F conversion results = ";
            echo r_f ($tmpR);
            break;
        case 12:
            echo "Temperature conversion from Reamur to Kelvin\n";
            echo "Enter Reamur temperature = ";
            $tmpC = fgets(STDIN);
            echo "Reamur = ", $tmpR;
            echo "R to K conversion results = ";
            echo r_k ($tmpR);
            break;
        default:
            echo "No options" . $pilihan;
    }
?>