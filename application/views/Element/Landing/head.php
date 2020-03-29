<!DOCTYPE html>
<html lang="en">
  <head>
     <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/landing/images/APSI.png">
    <title>PORTAL KERJA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/aos.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/jquery.timepicker.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/style.css">    
     <link href="<?php echo base_url(); ?>assets/fontawesome/css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/sweetalert/sweetalert2.min.css"/>
    
     <script src="<?php echo base_url(); ?>assets/material-pro/assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/sweetalert/sweetalert2.min.js"></script>
    <style>
    .tab {
      overflow: hidden;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
    }

    .tab button {
      background-color: inherit;
      padding: 14px 16px;
      transition: 0.3s;
    }
    .tab button:hover {
      background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
      background-color: #ccc;
    }

    .tabcontent {
      display: none;
    }
.tengah {
  text-align: center;
}
.paginat {
  display: inline-block;
}

.paginat a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
  margin: 0 4px;
}

.paginat a.active {
  background-color: #007bff;
  color: white;
}

.paginat a:hover:not(.active) {background-color: #ddd;}    

/*ribbon*/
  .ribbon-wrapper {
    width: 85px;
    height: 88px;
    overflow: hidden;
    position: absolute;
    top: -3px;
    right: -3px
}
.ribbon {
    font-size: 12px;
    color: #FFF;
    text-transform: uppercase;
    font-family: 'Montserrat Bold', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    letter-spacing: .05em;
    line-height: 15px;
    text-align: center;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, .4);
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
    position: relative;
    padding: 7px 0;
    right: -11px;
    top: 10px;
    width: 100px;
    height: 28px;
    -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, .3);
    box-shadow: 0 0 3px rgba(0, 0, 0, .3);
    background-color: #dedede;
    background-image: -webkit-linear-gradient(top, #ffffff 45%, #dedede 100%);
    background-image: -o-linear-gradient(top, #ffffff 45%, #dedede 100%);
    background-image: linear-gradient(to bottom, #ffffff 45%, #dedede 100%);
    background-repeat: repeat-x;
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffdedede', GradientType=0)
}

.ribbon:before,
.ribbon:after {
    content: "";
    border-top: 3px solid #9e9e9e;
    border-left: 3px solid transparent;
    border-right: 3px solid transparent;
    position: absolute;
    bottom: -3px
}

.ribbon:before {
    left: 0
}

.ribbon:after {
    right: 0
}

.ribbon.blue {
    background-color: #1a8bbc;
    background-image: -webkit-linear-gradient(top, #177aa6 45%, #1a8bbc 100%);
    background-image: -o-linear-gradient(top, #177aa6 45%, #1a8bbc 100%);
    background-image: linear-gradient(to bottom, #177aa6 45%, #1a8bbc 100%);
    background-repeat: repeat-x;
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#177aa6', endColorstr='#ff1a8bbc', GradientType=0)
}

.ribbon.blue:before,
.ribbon.blue:after {
    border-top: 3px solid #115979
}

.darkenx {
  background:
        /* top, transparent black, faked with gradient */ 
        linear-gradient(
          rgba(0, 0, 0, 0.1), 
          rgba(0, 0, 0, 0.1)
        ),
        /* bottom, image */
        url(<?php echo base_url(); ?>assets/landing/images/bandara3.jpg) no-repeat center center fixed !important; 
}
    </style>
  <?php
    $notif = $this->session->flashdata('notif');
    $type = $this->session->flashdata('type');

  ?>

  </head>