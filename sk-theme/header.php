<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset ="UTF-8">
<meta content="width=device-width,initial-scale=1" name="viewport">
<title>Sampo Kuokkanen</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />    
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <?php wp_head();?>
</head>
<body>
<nav class="navbar navbar-dark bg-primary navbar-fixed-top">
    <div class="container-fluid">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_navbar" aria-expanded="false">Open!
        </button>
        <a class="navbar-brand" href="index.html">Sampo Kuokkanen</a>
    </div>
    <div class="collapse navbar-collapse" id="main_navbar">
    <ul class="nav navbar-nav">
    <li class="active"><a href="index.html">
	Home</a></li>
	<li>
    <a href="about.html">
	About</a></li>
	<li>
    <a href="contact.html">
	Contact</a></li>
    <li>
    <a href="photoalbums.html">Photo albums</a>
    </li>
   </ul>
        <div class="navbar-form navbar-right">
    <input id="namebox" type="text" class="form-control" placeholder="Name, please...">
    </div>
    </div>
</nav>  