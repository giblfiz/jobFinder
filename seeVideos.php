<?php

//echo "<pre>";
//print_r(scandir("uploads/"));

$vids = scandir("uploads/");
foreach ($vids as $v ){
    if(strstr($v, "...")){
      $vparts = explode("...", $v);
      
      echo "<div>";
      echo "<video src='uploads/$v' width=20% controls></video>";
      echo "<a href='uploads/$v'>$vparts[0] </a> Phone: $vparts[1]<br/>";
      echo "</div>";

        //echo "$v \n";
    }    
}