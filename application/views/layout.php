<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html class="no-js" lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

  <title><?= $title; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">





  <!-- MAIN CSS -->
  <link rel="stylesheet" href="<?php echo  base_url(); ?>assets/frontend/assets/css/style.css">

</head>




  

    <!-- Header-->

    <?php
    
    $this->load->view($layout);
  