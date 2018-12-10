<?php  //die(print_r($categories)); ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Jmaate e Islami Hind | Aurangabad</title>

<!-- Stylesheets -->
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">

<!--Color Themes-->
<link id="theme-color-file" href="<?php echo base_url();?>assets/css/color-themes/default-theme.css" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="<?php echo base_url();?>assets/images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="<?php echo base_url();?>assests/images/https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="<?php echo base_url();?>assests/images/js/respond.js"></script><![endif]-->



</head>

<body>
<div class="page-wrapper">
    
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    
    <!-- Main Header -->
    <header class="main-header">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="clearfix">
                    <!--Top Left-->
                    <div class="top-left col-md-7 col-sm-12 col-xs-12">
                        <div class="trend">Latest: </div>
                        <div class="single-item-carousel owl-carousel owl-theme">
                            <div class="slide">
                                <div class="text"><?php ?></div>
                            </div>
                            <div class="slide">
                                <div class="text">Jamaat condemns American decision to recognize Jerusalem as Israel’s capital</div>
                            </div>
                            <div class="slide">
                                <div class="text">‘Taking of interest is a sin in all religions’’ – Prof Zubair Hasan</div>
                            </div>
                        </div>
                    </div>
                    <!--Top Right-->
                    <div class="top-right pull-right col-md-5 col-sm-12 col-xs-12">
                        <ul class="top-nav">
                            <li><a href="<?php echo base_url();?>">About</a></li>
                            <li><a href="<?php echo base_url();?>">Contacts</a></li>
                        </ul>
                        
                        <ul class="social-nav">
                            <li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">
                    
                    <div class="pull-left logo-outer">
                        <div class="logo"><a href="#"></a></div>
                    </div>
                    
                    <div class="pull-right upper-right clearfix">
                        <div class="add-image">
                            <a href="#"><img src="<?php echo base_url();?>assets/images/resource/header-add.jpg" alt="" /></a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
        <!--Header Lower-->
        <div class="header-lower">
            <div class="auto-container">
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix" id="bs-example-navbar-collapse-1">
                            <ul class="navigation clearfix">
                                <li class=""><a href="<?php echo base_url('Home');?>">Home</a></li>
                                <li class="dropdown" ><a href="#">About</a>
                                    <ul>
                                        <li><a href="<?php echo base_url('Home/AboutHistory'); ?>">History</a></li>
                                        <li><a href="<?php echo base_url('Home/AboutConstitution'); ?>">Constitution</a></li>
                                        <li><a href="<?php echo base_url('Home/AboutIdeology'); ?>">Ideology</a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="<?php echo base_url('Home/BlogList/12/57'); ?>">News</a></li>
                                <li class="dropdown" ><a href="jammats.html">Jamaats</a>
                                    <ul>
                                        <li class="dropdown"><a href="#">Central Jammat</a>
                                            <ul>
                                                
                                                <?php foreach ($categories as $category): ?>
                                                <?php if ($category['page_id']==4): ?>
                                                        
                                <li><a href="<?php echo base_url('Home/BlogList/').$category['page_id'].'/'.$category['category_id']; ?>"><?php echo $category['category_name']; ?></a></li>
                                                    
                                                <?php endif ?>
                                                <?php endforeach ?>
                                            </ul>
                                               

                                        </li>
                                        <li class="dropdown"><a href="#">South Jammat</a>
                                             <ul>
                                                
                                                <?php foreach ($categories as $category): ?>
                                                <?php if ($category['page_id']==4): ?>
                                                        
                                <li><a href="<?php echo base_url('Home/BlogList/5/').$category['category_id']; ?>"><?php echo $category['category_name']; ?></a></li>
                                                    
                                                <?php endif ?>
                                                <?php endforeach ?>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">North Jammat</a>
                                            <ul>
                                                
                                                <?php foreach ($categories as $category): ?>
                                                <?php if ($category['page_id']==4): ?>
                                                        
                                <li><a href="<?php echo base_url('Home/BlogList/6/').$category['category_id']; ?>"><?php echo $category['category_name']; ?></a></li>
                                                    
                                                <?php endif ?>
                                                <?php endforeach ?>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">West Jammat</a>
                                            <ul>
                                                
                                                <?php foreach ($categories as $category): ?>
                                                <?php if ($category['page_id']==4): ?>
                                                        
                                <li><a href="<?php echo base_url('Home/BlogList/7/').$category['category_id']; ?>"><?php echo $category['category_name']; ?></a></li>
                                                    
                                                <?php endif ?>
                                                <?php endforeach ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                   
                                <li class="" ><a href="<?php echo base_url('Home/BlogList/13/56'); ?>">Women's Wing/gio</a>
                                    <!--<ul>
                                        <li><a href="central.html">Central Jammat</a></li>
                                        <li><a href="south.html">South Jammat</a></li>
                                        <li><a href="north.html">North Jammat</a></li>
                                        <li><a href="header-west.html">West Jammat</a></li>
                                    </ul>-->
                                </li>

                                <li class="dropdown" ><a href="blog.html">Youth wing</a>
                                    <ul>
                                        <?php foreach ($categories as $category): ?>
                                                <?php if ($category['page_id']==15): ?>
                                                        
                                <li><a href="<?php echo base_url('Home/BlogList/').$category['page_id'].'/'.$category['category_id']; ?>"><?php echo $category['category_name']; ?></a></li>
                                                    
                                                <?php endif ?>
                                                <?php endforeach ?>
                                        
                                    </ul>
                                </li>   
                                
<li class="dropdown" ><a href="#">Institutions</a>
                                    <ul>
                                          <?php foreach ($categories as $category): ?>
                                                <?php if ($category['page_id']==18): ?>
                                                        
                                <li><a href="<?php echo base_url('Home/BlogList/').$category['page_id'].'/'.$category['category_id']; ?>"><?php echo $category['category_name']; ?></a></li>
                                                    
                                                <?php endif ?>
                                                <?php endforeach ?>
                                            

                                    </ul>
                                </li>
                                <li class="" ><a href="<?php echo base_url('Home/BlogList/14/58'); ?>">Legal-Aid/Advocacy</a>
                                    <!--<ul>
                                        <li><a href="central.html">Central Jammat</a></li>
                                        <li><a href="south.html">South Jammat</a></li>
                                        <li><a href="north.html">North Jammat</a></li>
                                        <li><a href="header-west.html">West Jammat</a></li>
                                    </ul>-->
                                </li>
                                

                                <li><a href="<?php echo base_url('Home/BlogList/16/59'); ?>">HRD</a></li>
                               <li class="dropdown" ><a href="publication.html">Publications</a>
                                    <ul>
                                        <?php foreach ($categories as $category): ?>
                                                <?php if ($category['page_id']==17): ?>
                                                        
                                                <li><a href="<?php echo base_url('Home/BlogList/').$category['page_id'].'/'.$category['category_id']; ?>"><?php echo $category['category_name']; ?></a></li>
                                                    
                                                <?php endif ?>
                                                <?php endforeach ?>
                                    </ul>
                                </li>
                                <li class="dropdown" ><a href="#">Media</a>
                                    <ul>
                                         <li><a href="<?php echo base_url('Home/VideoGallery'); ?>">Short films</a></li>
                                       
                                        <li><a href="<?php echo base_url('Home/VideoGallery'); ?>">Videos Gallery </a></li>
                                        <li><a href="<?php echo base_url('Home/ImageGallery'); ?>">Images Gallery</a></li>
                                         <li><a href="press_release.html">Social media</a></li>
                                    </ul>
                                </li>

                                  


                                 
                               
                                
                                
                                
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                    
                    
                    <!-- Hidden Nav Toggler -->
                     <div class="nav-toggler">
                         <button class="hidden-bar-opener"><span class="icon qb-menu1"></span></button>
                     </div>
                    
                </div>
            </div>
        </div>
        <!--End Header Lower-->
    
        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" class="img-responsive" title=""></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                         <ul class="navigation clearfix">
                                <li class=""><a href="<?php echo base_url('Home');?>">Home</a></li>
                                <li class=""><a href="<?php echo base_url('Home/BlogList/12/57'); ?>">News</a></li>
                                <li class="dropdown" ><a href="jammats.html">Jamaats</a>
                                    <ul>
                                        <li class="dropdown"><a href="#">Central Jammat</a>
                                            <ul>
                                                
                                                <?php foreach ($categories as $category): ?>
                                                <?php if ($category['page_id']==4): ?>
                                                        
                                <li><a href="<?php echo base_url('Home/BlogList/').$category['page_id'].'/'.$category['category_id']; ?>"><?php echo $category['category_name']; ?></a></li>
                                                    
                                                <?php endif ?>
                                                <?php endforeach ?>
                                            </ul>
                                               

                                        </li>
                                        <li class="dropdown"><a href="#">South Jammat</a>
                                             <ul>
                                                
                                                <?php foreach ($categories as $category): ?>
                                                <?php if ($category['page_id']==4): ?>
                                                        
                                <li><a href="<?php echo base_url('Home/BlogList/5/').$category['category_id']; ?>"><?php echo $category['category_name']; ?></a></li>
                                                    
                                                <?php endif ?>
                                                <?php endforeach ?>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">North Jammat</a>
                                            <ul>
                                                
                                                <?php foreach ($categories as $category): ?>
                                                <?php if ($category['page_id']==4): ?>
                                                        
                                <li><a href="<?php echo base_url('Home/BlogList/6/').$category['category_id']; ?>"><?php echo $category['category_name']; ?></a></li>
                                                    
                                                <?php endif ?>
                                                <?php endforeach ?>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">West Jammat</a>
                                            <ul>
                                                
                                                <?php foreach ($categories as $category): ?>
                                                <?php if ($category['page_id']==4): ?>
                                                        
                                <li><a href="<?php echo base_url('Home/BlogList/7/').$category['category_id']; ?>"><?php echo $category['category_name']; ?></a></li>
                                                    
                                                <?php endif ?>
                                                <?php endforeach ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                 
  
                                <li class="" ><a href="<?php echo base_url('Home/BlogList/13/56'); ?>">Women's Wing/gio</a>
                                    <!--<ul>
                                        <li><a href="central.html">Central Jammat</a></li>
                                        <li><a href="south.html">South Jammat</a></li>
                                        <li><a href="north.html">North Jammat</a></li>
                                        <li><a href="header-west.html">West Jammat</a></li>
                                    </ul>-->
                                </li>
<li class="dropdown" ><a href="#">Institution</a>
                                    <ul>
                                          <?php foreach ($categories as $category): ?>
                                                <?php if ($category['page_id']==18): ?>
                                                        
                                <li><a href="<?php echo base_url('Home/BlogList/').$category['page_id'].'/'.$category['category_id']; ?>"><?php echo $category['category_name']; ?></a></li>
                                                    
                                                <?php endif ?>
                                                <?php endforeach ?>
                                            

                                    </ul>
                                </li>
                                <li class="dropdown" ><a href="publication.html">Publications</a>
                                    <ul>
                                        <?php foreach ($categories as $category): ?>
                                                <?php if ($category['page_id']==17): ?>
                                                        
                                <li><a href="<?php echo base_url('Home/BlogList/').$category['page_id'].'/'.$category['category_id']; ?>"><?php echo $category['category_name']; ?></a></li>
                                                    
                                                <?php endif ?>
                                                <?php endforeach ?>
                                    </ul>
                                </li>
                                <li class="" ><a href="<?php echo base_url('Home/BlogList/14/58'); ?>">Jamiat-Us-Suffa</a>
                                    <!--<ul>
                                        <li><a href="central.html">Central Jammat</a></li>
                                        <li><a href="south.html">South Jammat</a></li>
                                        <li><a href="north.html">North Jammat</a></li>
                                        <li><a href="header-west.html">West Jammat</a></li>
                                    </ul>-->
                                </li>
                                <li class="dropdown" ><a href="blog.html">Youth wing</a>
                                    <ul>
                                        <?php foreach ($categories as $category): ?>
                                                <?php if ($category['page_id']==15): ?>
                                                        
                                <li><a href="<?php echo base_url('Home/BlogList/').$category['page_id'].'/'.$category['category_id']; ?>"><?php echo $category['category_name']; ?></a></li>
                                                    
                                                <?php endif ?>
                                                <?php endforeach ?>
                                        
                                    </ul>
                                </li>
                                <li class="dropdown" ><a href="#">Media</a>
                                    <ul>
                                         <li><a href="<?php echo base_url('Home/VideoGallery'); ?>">Short films</a></li>
                                       
                                        <li><a href="<?php echo base_url('Home/VideoGallery'); ?>">Videos Gallery </a></li>
                                        <li><a href="<?php echo base_url('Home/ImageGallery'); ?>">Images Gallery</a></li>
                                         <li><a href="press_release.html">Social media</a></li>
                                    </ul>
                                </li>

                                  


                                 <li class="dropdown" ><a href="#">About</a>
                                    <ul>
                                        <li><a href="<?php echo base_url('Home/AboutHistory'); ?>">History</a></li>
                                        <li><a href="<?php echo base_url('Home/AboutConstitution'); ?>">Constitution</a></li>
                                        <li><a href="<?php echo base_url('Home/AboutIdeology'); ?>">Ideology</a></li>
                                    </ul>
                                </li>
                               <li><a href="<?php echo base_url('Home/BlogList/16/59'); ?>">HRD</a></li>
                                
                                
                                
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
    
    </header>
    <!--End Header Style Two -->
    
    <!-- Hidden Navigation Bar -->
    <section class="hidden-bar left-align">
        
        <div class="hidden-bar-closer">
            <button><span class="qb-close-button"></span></button>
        </div>
        
        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">
            <div class="logo">
                <a href="index.html"></a>
            </div>
            <!-- .Side-menu -->
            <div class="side-menu">
                <!--navigation-->
                <ul class="navigation clearfix">
                                <li class=""><a href="<?php echo base_url('Home');?>">Home</a></li>
                                <li class=""><a href="<?php echo base_url('Home/BlogList/12/57'); ?>">News</a></li>
                                <li class="dropdown" ><a href="jammats.html">Jamaats</a>
                                    <ul>
                                        <li class="dropdown"><a href="#">Central Jammat</a>
                                            <ul>
                                                
                                                <?php foreach ($categories as $category): ?>
                                                <?php if ($category['page_id']==4): ?>
                                                        
                                <li><a href="<?php echo base_url('Home/BlogList/').$category['page_id'].'/'.$category['category_id']; ?>"><?php echo $category['category_name']; ?></a></li>
                                                    
                                                <?php endif ?>
                                                <?php endforeach ?>
                                            </ul>
                                               

                                        </li>
                                        <li class="dropdown"><a href="#">South Jammat</a>
                                             <ul>
                                                
                                                <?php foreach ($categories as $category): ?>
                                                <?php if ($category['page_id']==4): ?>
                                                        
                                <li><a href="<?php echo base_url('Home/BlogList/5/').$category['category_id']; ?>"><?php echo $category['category_name']; ?></a></li>
                                                    
                                                <?php endif ?>
                                                <?php endforeach ?>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">North Jammat</a>
                                            <ul>
                                                
                                                <?php foreach ($categories as $category): ?>
                                                <?php if ($category['page_id']==4): ?>
                                                        
                                <li><a href="<?php echo base_url('Home/BlogList/6/').$category['category_id']; ?>"><?php echo $category['category_name']; ?></a></li>
                                                    
                                                <?php endif ?>
                                                <?php endforeach ?>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">West Jammat</a>
                                            <ul>
                                                
                                                <?php foreach ($categories as $category): ?>
                                                <?php if ($category['page_id']==4): ?>
                                                        
                                <li><a href="<?php echo base_url('Home/BlogList/7/').$category['category_id']; ?>"><?php echo $category['category_name']; ?></a></li>
                                                    
                                                <?php endif ?>
                                                <?php endforeach ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                   
                                <li class="" ><a href="<?php echo base_url('Home/BlogList/13/56'); ?>">Women's Wing/gio</a>
                                    <!--<ul>
                                        <li><a href="central.html">Central Jammat</a></li>
                                        <li><a href="south.html">South Jammat</a></li>
                                        <li><a href="north.html">North Jammat</a></li>
                                        <li><a href="header-west.html">West Jammat</a></li>
                                    </ul>-->
                                </li>
                                <li class="dropdown" ><a href="publication.html">Publications</a>
                                    <ul>
                                        <?php foreach ($categories as $category): ?>
                                                <?php if ($category['page_id']==17): ?>
                                                        
                                <li><a href="<?php echo base_url('Home/BlogList/').$category['page_id'].'/'.$category['category_id']; ?>"><?php echo $category['category_name']; ?></a></li>
                                                    
                                                <?php endif ?>
                                                <?php endforeach ?>
                                    </ul>
                                </li>
                                <li class="" ><a href="<?php echo base_url('Home/BlogList/14/58'); ?>">Jamiat-Us-Suffa</a>
                                    <!--<ul>
                                        <li><a href="central.html">Central Jammat</a></li>
                                        <li><a href="south.html">South Jammat</a></li>
                                        <li><a href="north.html">North Jammat</a></li>
                                        <li><a href="header-west.html">West Jammat</a></li>
                                    </ul>-->
                                </li>
                                <li class="dropdown" ><a href="blog.html">Youth wing</a>
                                    <ul>
                                        <?php foreach ($categories as $category): ?>
                                                <?php if ($category['page_id']==15): ?>
                                                        
                                <li><a href="<?php echo base_url('Home/BlogList/').$category['page_id'].'/'.$category['category_id']; ?>"><?php echo $category['category_name']; ?></a></li>
                                                    
                                                <?php endif ?>
                                                <?php endforeach ?>
                                        
                                    </ul>
                                </li>
                                <li class="dropdown" ><a href="#">Media</a>
                                    <ul>
                                         <li><a href="<?php echo base_url('Home/VideoGallery'); ?>">Short films</a></li>
                                       
                                        <li><a href="<?php echo base_url('Home/VideoGallery'); ?>">Videos Gallery </a></li>
                                        <li><a href="<?php echo base_url('Home/ImageGallery'); ?>">Images Gallery</a></li>
                                         <li><a href="press_release.html">Social media</a></li>
                                    </ul>
                                </li>

                                  <li class="dropdown" ><a href="#">Institution</a>
                                    <ul>
                                          <?php foreach ($categories as $category): ?>
                                                <?php if ($category['page_id']==18): ?>
                                                        
                                <li><a href="<?php echo base_url('Home/BlogList/').$category['page_id'].'/'.$category['category_id']; ?>"><?php echo $category['category_name']; ?></a></li>
                                                    
                                                <?php endif ?>
                                                <?php endforeach ?>
                                            

                                    </ul>
                                </li>


                                 <li class="dropdown" ><a href="#">About</a>
                                    <ul>
                                        <li><a href="<?php echo base_url('Home/AboutHistory'); ?>">History</a></li>
                                        <li><a href="<?php echo base_url('Home/AboutConstitution'); ?>">Constitution</a></li>
                                        <li><a href="<?php echo base_url('Home/AboutIdeology'); ?>">Ideology</a></li>
                                    </ul>
                                </li>
                               <li><a href="<?php echo base_url('Home/BlogList/16/59'); ?>">HRD</a></li>
                                
                                
                                
                            </ul>
            </div>
            <!-- /.Side-menu -->
            
            <!--Options Box-->
            <div class="options-box">
                <!--Social Links-->
                <ul class="social-links clearfix">
                    <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                    <li><a href="#"><span class="fa fa-youtube"></span></a></li>                    
                </ul>
                
            </div>
            
        </div><!-- / Hidden Bar Wrapper -->
        
    </section>
    <!-- End / Hidden Bar -->
    