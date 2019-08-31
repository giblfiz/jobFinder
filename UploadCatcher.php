<?php
function devlog($value){
    file_put_contents("developer_log.txt",
        $value . "\n",
        FILE_APPEND);
    }


//echo "<pre>";
devlog(print_r($_REQUEST, true));
devlog(print_r($_FILES, true));

devlog("the time is foo ");

$safe_user_name = preg_replace('/\s+/', '_', $_REQUEST["user_name"]);


$target_dir = "uploads/";
$target_file = $target_dir . $safe_user_name . "..." . $_REQUEST["user_phone"] . ".webm";


if (move_uploaded_file($_FILES['myblob']['tmp_name'], $target_file)) {
    devlog( "File is valid, and was successfully uploaded.\n");
} else {
    devlog( "FAILURE");
devlog($_FILES['myblob']['tmp_name'] . " ||| " . $target_file);

}