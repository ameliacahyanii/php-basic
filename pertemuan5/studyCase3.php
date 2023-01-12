<?php
#############################
# Study Case
# File name : StudyCase3.php
#############################

    function pressure($F,$A){
        return $F/$A;
    }

    function hydrostaticpressure($rho,$g,$h){
        return $rho * $g * $h;
    }

    //Pressure Formula and Hydrostatic Pressure Formula//
    echo "Pressure formula and hydrostatic pressure Formula \n";
    echo "Want to find pressure formula or hydrostatic pressure formula (select number): \n";
    echo "1 = Pressure formula \n";
    echo "2 = hydrostatic pressure Formula \n";

    $options = fgets(STDIN);
    switch($options){
    case 1:
        echo "Pressure formula results\n";
        echo "Enter style value = ";
        $F = fgets(STDIN);
        echo "Enter the surface area value = ";
        $A = fgets(STDIN);
        echo "The result of pressure = ";
        echo pressure($F,$A);
        break;
    case 2:
        echo "Hydrostatic pressure formula results \n";
        echo "Enter the density of water substances = ";
        $rho = fgets(STDIN);
        echo "Enter the acceleration of gravity = ";
        $g = fgets(STDIN);
        echo "Enter depth = ";
        $h = fgets(STDIN);
        echo "The result of hydrostatic pressure = ";
        echo hydrostaticpressure($rho,$g,$h);
        break;
    default:
        echo "No options";
    }
?>