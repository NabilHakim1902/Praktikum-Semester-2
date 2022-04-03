<?php
    $tims = ["Yeji", "Lia", "Ryujin", "Chaeryeong"];
    array_shift($tims);
    foreach($tims as $person){
        echo $person. '<br/>';
    }
?>