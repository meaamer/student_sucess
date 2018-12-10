
<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


      <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" >
                    <h3 style="max-width: 40%; margin-left: 56px;color: #ffffff;font-family: bold;">STUDENT SUCCESS</h3>
                 <!-- <img class="img-responsive" style="max-width: 40%; margin-left: 70px;" 
                 src="<?php //echo base_url('assets/') ?>"> -->
                </a>
            </div>

            <ul class="nav">

                <li>
                    <a href="<?php echo base_url('Courses/NewCourse'); ?>">
                        <i class="pe-7s-news-paper"></i>
                        <p>Add Course</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('Courses'); ?>">
                        <i class="pe-7s-note2"></i>
                        <p>Course</p>
                    </a>
                </li>
               
                <li>
                    <a href="<?php echo base_url('Posts/NewPost'); ?>">
                        <i class="pe-7s-news-paper"></i>
                        <p>New Posts</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('Posts'); ?>">
                        <i class="pe-7s-note2"></i>
                        <p>Posts</p>
                    </a>
                </li>
                
                <!-- <li>
                    <a href="<?php echo base_url('Posts/NewCategory'); ?>">
                        <i class="pe-7s-menu"></i>
                        <p>Add Category</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('Posts/CategoryList'); ?>">
                        <i class="pe-7s-albums"></i>
                        <p>Categories</p>
                    </a>
                </li> -->
                
                <li>
                    <a href="<?php echo base_url('Events/NewEvent'); ?>">
                        <i class="pe-7s-diskette"></i>
                        <p>New Event</p>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url('Events'); ?>">
                        <i class="pe-7s-photo-gallery"></i>
                        <p>Events</p>
                    </a>
                </li>


                 <li>
                    <a href="<?php echo base_url('Posts/Messages'); ?>">
                        <i class="pe-7s-photo-gallery"></i>
                        <p>Messages</p>
                    </a>
                </li>
                
        
            </ul>
      </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">User</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        
                        
                        
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                       
                        
                        <li>
                            <a href="<?php echo base_url('Users/Logout'); ?>">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

