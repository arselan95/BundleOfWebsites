<?php $title = 'Visited'; ?>
<!-- <?php include('header.php');?> -->

<div style="padding:20px;margin-top:30px;height:1500px;">
<h1>Last 5 Visited Product</h1>
<table border ="5" cellspacing = "0" cellpadding="10">
	<tr><th>Order</th><th>Product Name</th></tr>

  <?php

    if($_COOKIE[viewed1])print( "<tr><td>Last viewed 1</td><td> $_COOKIE[viewed1]</td>");
    if($_COOKIE[viewed2])print( "<tr><td>Last viewed 2</td><td> $_COOKIE[viewed2]</td>");
    if($_COOKIE[viewed3])print( "<tr><td>Last viewed 3</td><td> $_COOKIE[viewed3]</td>");
    if($_COOKIE[viewed4])print( "<tr><td>Last viewed 4</td><td> $_COOKIE[viewed4]</td>");
    if($_COOKIE[viewed5])print( "<tr><td>Last viewed 5</td><td> $_COOKIE[viewed5]</td>");
  ?>
</table>


<a href = "clear_last_5_visited.php">Clear History</a>
</div>
