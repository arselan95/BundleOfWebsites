<?php
// setcookie("viewed5", "", time()-3600);
// setcookie("viewed4", "", time()-3600);
// setcookie("viewed3", "", time()-3600);
// setcookie("viewed2", "", time()-3600);
// setcookie("viewed1", "", time()-3600);
unset($_COOKIE['viewed1']);
setcookie('viewed1', null, -1, '/');
unset($_COOKIE['viewed2']);
setcookie('viewed2', null, -1, '/');
unset($_COOKIE['viewed3']);
setcookie('viewed3', null, -1, '/');
unset($_COOKIE['viewed4']);
setcookie('viewed4', null, -1, '/');
unset($_COOKIE['viewed5']);
setcookie('viewed5', null, -1, '/');
// alert("??");
?>

<!-- <script type="text/javascript">
alert("Visited history Cookies are Cleared")
</script> -->

<?php
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
