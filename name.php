<?php
if (isset($_POST['ruth'])) {
    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $country = $_POST['country'];

    $Ctu = "Rwanda";
    $Brt = "Kenya";
    $Rdf = "Malawi";
    $Pdf = "Congo";
    if ($Age >= 18 && $country == $Ctu ) {
        echo "$Name is allowed to enter";
    } 
    else if($Age >= 18 && $country == $Brt){
        echo "$Name is  not allowed to enter";    
    }
    else if($Age >= 18 && $country == $Rdf){
        echo "$Name is not allowed to enter";    
    }
    else if($Age >= 18 && $country == $Pdf){
        echo "$Name is not allowed to enter";    
    }
    else {
        echo "$Name is not allowed to enter";
    }
}
?>
