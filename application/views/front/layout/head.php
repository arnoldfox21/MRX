<?php 
    $site = $this->mConfig->list_config();
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url('assets/upload/image/'.$site['icon']) ?>" rel="shortcut icon">
    <title><?php echo $title;?></title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,800" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/front/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/front/js/dropdown-menu/dropdown-menu.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/front/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/front/js/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/front/js/audioplayer/audioplayer.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/front/style.css" rel="stylesheet" type="text/css">
 
  </head>