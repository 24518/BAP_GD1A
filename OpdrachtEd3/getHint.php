<?php
// Array with names
$a[] = "Nasi Goreng";
$a[] = "Diepvries pizza";
$a[] = "Ceasar salade met pittige garnalen";
$a[] = "Risotto met witte asperges en zalm";
$a[] = "Pita pizza met chorizo en geitenkaas";
$a[] = "loempia's uit de oven";
$a[] = "Pompoen rijstsalade";
$a[] = "Spaghetti met pesto en gehaktballetjes";
$a[] = "Romige rijstschotel met kip";
$a[] = "Sla wraps met vega balletjes en satésaus";
$a[] = "Couscous met gegrilde zalm en groenten";
$a[] = "Pita met linzenkoekjes en muntsaus";
$a[] = "Ovenschotel met aardappel en falafel";
$a[] = "Hartige taart met groentenrolletjes";
$a[] = "Portobello met couscous";
$a[] = "Jachtschotel met stoofvlees";
$a[] = "Zoete aardappel met taco vulling";
$a[] = "Ravioli lasagne bolognese";
$a[] = "Kip fajita's";
$a[] = "Cannelloni met gehakt";
$a[] = "Schnitzel caprese met courgetti";
$a[] = "Mexicaanse huaraches met salsa";
$a[] = "Toad in the hole";
$a[] = "Grieks pannetje met pitabrood, feta en tzatziki";
$a[] = "Pasteitjes met stoofvlees";
$a[] = "Gehaktballetjes in roomsaus met champignons";
$a[] = "Kipsalon met zoete aardappel";
$a[] = "Salade met gerookte kip en spekjes";
$a[] = "Taco's met zoete aardappel";
$a[] = "Pasta boerenkoolpesto met rookworst";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= "<br> $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
