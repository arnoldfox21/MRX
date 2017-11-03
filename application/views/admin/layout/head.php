<?php
$this->admin_login->cek_login();


$site = $this->mConfig->list_config();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo $title;?></title>
<link href="<?php echo base_url('assets/upload/image/'.$site['icon']) ?>" rel="shortcut icon">
<link href="<?php echo base_url() ?>assets/admin/assets/css/bootstrap.css" rel="stylesheet" />

<link href="<?php echo base_url() ?>assets/admin/assets/css/font-awesome.css" rel="stylesheet" />

<link href="<?php echo base_url() ?>assets/admin/assets/css/custom.css" rel="stylesheet" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

<link href="<?php echo base_url() ?>assets/admin/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
<script src="<?php echo base_url() ?>assets/admin/assets/js/jquery-1.10.2.js"></script>
</head>

<body>
<div id="wrapper">