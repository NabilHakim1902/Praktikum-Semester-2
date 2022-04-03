<?php
    $tims = ["Yeji", "Lia", "Ryujin", "Chaeryeong"];
    array_unshift($tims, "Yuna", "Somi");
    foreach($tims as $person){
        echo $person. '<br/>';
    }
?>