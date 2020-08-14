<?php
$p=isset($_GET['p']) ? $_GET['p'] : 'home';
if($p=='data_diri') include('data_diri.php');
if($p=='data_keluarga') include('data_keluarga.php');
?>