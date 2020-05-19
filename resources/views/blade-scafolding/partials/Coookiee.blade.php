<?php
$visitor_name="getUserIP";
$visitor_value="getUserID";

setcookie($visitor_name,$visitor_value,time() + (86400 * 30),"/");
?>