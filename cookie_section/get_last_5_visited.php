<?php $title = 'Visited'; ?>
<!-- <?php include('header.php');?> -->

<div>
<h1>Last 5 Visited Product</h1>
<table border ="5" cellspacing = "0" cellpadding="10" class="review">
	<tr><th>Order</th><th>Product Name</th></tr>

  <?php

    if(array_key_exists('viewed1', $_COOKIE)&&$_COOKIE['viewed1'])
        print( "<tr><td>Last viewed 1</td><td> $_COOKIE[viewed1]</td>");
    if(array_key_exists('viewed2', $_COOKIE)&&$_COOKIE['viewed2'])
        print( "<tr><td>Last viewed 2</td><td> $_COOKIE[viewed2]</td>");
    if(array_key_exists('viewed3', $_COOKIE)&&$_COOKIE['viewed3'])
        print( "<tr><td>Last viewed 3</td><td> $_COOKIE[viewed3]</td>");
    if(array_key_exists('viewed4', $_COOKIE)&&$_COOKIE['viewed4'])
        print( "<tr><td>Last viewed 4</td><td> $_COOKIE[viewed4]</td>");
    if(array_key_exists('viewed5', $_COOKIE)&&$_COOKIE['viewed5'])
        print( "<tr><td>Last viewed 5</td><td> $_COOKIE[viewed5]</td>");
  ?>
</table>


<a href = "cookie_section/clear_last_5_visited.php">Clear History</a>
</div>
