<?php
$root = 'http://localhost:8888/blueline-new';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>BlueLine Labs</title>

  <!-- Meta content populates below. See individual pages for meta info. -->
  <title><?php if(isset($tpTitle)) { echo $tpTitle; }
  else { echo 'Mobile App Development | BlueLine Labs'; } ?></title>
  <meta name="description" content="<?php if(isset($pgDesc)) { echo $pgDesc; }
  else { echo ''; } ?>"></meta>
  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather:400,400italic,300italic,300,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="libs/assets/animate.css/animate.css" type="text/css" />
  <link rel="stylesheet" href="libs/assets/font-awesome/css/font-awesome.css" type="text/css" />
  <link rel="stylesheet" href="libs/jquery/bootstrap/dist/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="libs/jquery/waves/dist/waves.css" type="text/css" />

  <link rel="stylesheet" href="styles/material-design-icons.css" type="text/css" />
  <link rel="stylesheet" href="styles/font.css" type="text/css" />
  <link rel="stylesheet" href="styles/app.css" type="text/css" />
  <link rel="stylesheet" href="styles/extra.css" type="text/css" />

</head>
<body>
<div class="app">
  <!-- aside -->
  <aside id="aside" class="app-aside modal fade" role="menu">
    <div class="left">
      <div class="box bg-gray aside-box">
        <div class="navbar no-radius bg-gray">
            <!-- brand -->
            <a class="navbar-brand" href="/">
              <img src="images/logo-stacked.svg" alt="Blueline Labs" style="width: 140px; margin-left: 10px;">
            </a>
            <!-- / brand -->
        </div>
        <div class="box-row">
          <div class="box-cell scrollable hover">
            <div class="box-inner">              
              <div id="nav">
                <nav ui-nav>
                  <ul class="nav">
                    <li ui-sref-active="active">
                      <a md-ink-ripple href="<?php echo $root;?>/">
                        <i class="icon mdi-action-home i-20"></i>
                        <span>Home</span>
                      </a>
                    </li>
                    <li ui-sref-active="active">
                      <a md-ink-ripple href="<?php echo $root;?>/about">
                        <i class="icon mdi-social-people i-20"></i>
                        <span>About</span>
                      </a>
                    </li>
                    <li ui-sref-active="active">
                      <a md-ink-ripple href="<?php echo $root;?>/work">
                        <i class="icon mdi-hardware-phone-iphone i-20"></i>
                        <span>Work</span>
                      </a>
                    </li>
                    <li ui-sref-active="active">
                      <a md-ink-ripple href="<?php echo $root;?>/process">
                        <i class="icon mdi-image-rotate-right i-20"></i>
                        <span>Process</span>
                      </a>
                    </li>
                    <li ui-sref-active="active">
                      <!--<a md-ink-ripple ui-sref="page.process">-->
                      <a md-ink-ripple href="<?php echo $root;?>/contact">
                        <i class="icon mdi-content-mail i-20"></i>
                        <span>Contact</span>
                      </a>
                    </li>    
                  </ul>
                  <div class="nav aside-contact">
                    <a class="aside-email" href="mailto:hello@bluelinelabs.com">hello@bluelinelabs.com</a>
                    <a class="aside-phone tel" href="tel:312.757.2024">312.757.2024</a>      
                  </div>
                </nav>
              </div>              
            </div>
          </div>
        </div>
      </div>
    </div>
  </aside>
  <!-- / aside -->
  
  <!-- content -->
  <div id="content" class="app-content" role="main">
    <div class="box">
      <!-- Content Navbar -->
      <div class="navbar md-whiteframe-z1 no-radius bg-gray">
        <!-- Open side - Naviation on mobile -->
        <a md-ink-ripple  data-toggle="modal" data-target="#aside" class="navbar-item pull-left visible-xs visible-sm"><i class="mdi-navigation-menu i-24"></i></a>
        <!-- / -->
        <a md-ink-ripple class="navbar-item pull-left" href="/">
          <img src="images/logo-long.svg" alt="Blueline Labs" style="width: 160px;">
        </a>
        <div class="pull-right" ui-view="navbar@"></div>
        <!-- / -->
        
        <!-- / -->
      </div>
      <!-- Content -->
      <div class="box-row">
        <div class="box-cell">
          <div class="box-inner padding">
           <a name="top"></a>