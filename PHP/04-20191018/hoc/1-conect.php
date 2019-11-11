<?php
  $serverName = "localhost";
  $userName = "root";
  $password = "";
  $connect = mysqli_connect($serverName, $userName, $password);
  if (!$connect) {
    die('thanhcong' . mysqli_connect_error());
  }
  echo  '<br>Ket noi thanh Cong';
  ?>