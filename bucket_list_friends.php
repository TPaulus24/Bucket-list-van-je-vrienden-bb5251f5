 <?php
 echo "Hoeveel vrienden zal ik vragen om hun droom?" . PHP_EOL;
 $act = readline();
 if (is_numeric($act));
 else if (!is_numeric($act)){
     echo "$act" . 'is geen geldig getal, probeer het opnieuw.';
     exit; 
 }
 echo "Je gaat $act vrienden vragen om hun droom." .PHP_EOL;
 $actie = array(
     ["Naam"]
     ["Droom"]
 );
 for ($i = 1; $i <=$act; $i++){
     array_push($actie["Naam"] = readline("Wat is jouw naam?" . PHP_EOL));
     array_push($actie["Droom"] = readline("Wat is jouw droom?" . PHP_EOL));
    
 }
 echo $actie["Naam"] . "Heeft als droom: " . $actie["Droom"] . PHP_EOL;