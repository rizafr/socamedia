<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.6.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url().'assets-socamedia/images/s-white-122x122.png" type="image/x-icon'?>">
  <meta name="description" content="">
  <title>SOCAMEDIA</title>
  <link rel="stylesheet" href="<?php echo base_url().'assets-socamedia/web/assets/mobirise-icons/mobirise-icons.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets-socamedia/tether/tether.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets-socamedia/bootstrap/css/bootstrap.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets-socamedia/bootstrap/css/bootstrap-grid.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets-socamedia/bootstrap/css/bootstrap-reboot.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets-socamedia/socicon/css/styles.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets-socamedia/dropdown/css/style.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets-socamedia/theme/css/style.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets-socamedia/mobirise/css/mbr-additional.css'?>" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato|Raleway" rel="stylesheet"> 
</head>
<body>

    
 <?php
    function limit_words($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }
?>