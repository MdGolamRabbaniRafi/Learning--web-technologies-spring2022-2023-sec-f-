<?php
    $date = $_POST['date'];
    $time= $_POST['time'];
    if($date!="")
    {
        $dayOfWeek = date('l', strtotime($date));
        $formattedDate = date('d F, Y', strtotime($date));
        echo "Date :".$dayOfWeek.", ".$formattedDate."  ";
    }
    if($time!="")
    {
        $timeFormat = date("h:i:s A", strtotime($time));
        echo " Time :".$timeFormat;

    }


?>