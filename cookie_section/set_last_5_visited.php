<?php


echo $product_name."\n";
if($_COOKIE[$product_name]== null){
	setcookie($product_name,1,time()+3600);
  // echo "set cooki\n";
}else{
	setcookie($product_name,$_COOKIE[$product_name]+1,time()+3600);
  // echo "refresh cooki\n";
}
if ($_COOKIE["viewed1"] != $product_name ){
setcookie("viewed5", $_COOKIE["viewed4"], time()+3600);
setcookie("viewed4", $_COOKIE["viewed3"], time()+3600);
setcookie("viewed3", $_COOKIE["viewed2"], time()+3600);
setcookie("viewed2", $_COOKIE["viewed1"], time()+3600);
setcookie("viewed1", $product_name, time()+3600);

// echo "displaying cookie name:".$_COOKIE["viewed1"]."\n";

}

// echo "???";
?>
