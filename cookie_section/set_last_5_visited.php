<?php

if(!array_key_exists($product_name, $_COOKIE)||$_COOKIE[$product_name]== null){
	setcookie($product_name,1,time()+3600);
}else{
	setcookie($product_name,$_COOKIE[$product_name]+1,time()+3600);
}
if (!array_key_exists('viewed1', $_COOKIE)||$_COOKIE["viewed1"] != $product_name ){
    if (array_key_exists('viewed4', $_COOKIE))
        setcookie("viewed5", $_COOKIE["viewed4"], time()+3600);
    if (array_key_exists('viewed3', $_COOKIE))
        setcookie("viewed4", $_COOKIE["viewed3"], time()+3600);
    if (array_key_exists('viewed2', $_COOKIE))
        setcookie("viewed3", $_COOKIE["viewed2"], time()+3600);
    if (array_key_exists('viewed1', $_COOKIE))
        setcookie("viewed2", $_COOKIE["viewed1"], time()+3600);
    setcookie("viewed1", $product_name, time()+3600);


}

?>