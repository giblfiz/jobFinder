<?php

//echo "<pre>";
//print_r(scandir("uploads/"));

if($_REQUEST["target"]){
    unlink("../uploads/" . $_REQUEST["target"]);
}

echo '    <link rel="stylesheet" href="/css/main.css">';

$vids = scandir("../uploads/");
foreach ($vids as $v ){
    if(strstr($v, "...")){
      $vparts = explode("...", $v);
      
      echo "<div class='person'>";
      echo "<video src='uploads/$v' width=20% controls></video>";
      echo "<a href='uploads/$v'>$vparts[0] </a> <br/><p>Phone: ".substr($vparts[1],0,-5) . "</p><br/>";
      echo "<a href='admin/delete.php?target=$v'>[DELETE THIS]</a><br/>";
      echo "</div>";

        //echo "$v \n";
    }    
}