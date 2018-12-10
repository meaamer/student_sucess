
        <!-- Title Section -->
        <div class="title-section module">
            <div class="row">
        
                <div class="small-12 columns">
                    <h1>Select A Course For you!</h1>
                </div><!-- Top Row /-->
        
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Features</a></li>
                        <li class="disabled">Gene Splicing</li>
                        <li><span class="show-for-sr">Current: </span> Cloning</li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->
                
            </div><!-- Row /-->
        </div>
        <!-- Title Section Ends /-->
        
        <!-- Content section -->
        <div class="content-section course-page">
            
            <!-- Seminar/Events -->
            <div class="module">
                <div class="row">
                    
                    <div class="courses-wrapper">
                        
                        <div class="course-section">
                            
                            <div class="section-title">
                                <h2><span>Our Courses</span></h2>
                            </div><!-- Section Title Ends /-->
                            
                            
                            
                            <?php if (!empty($courses)): ?>
                            <?php foreach ($courses as $course): ?>
                                
                                <div class="medium-3 small-12 columns">
                                <div class="course">
                                    <div class="course-thumb">
                                        <img src="<?php echo $this->config->item('image_path').$course['course_image']; ?>" alt="Graphic Design" />
                                       
                                       
                                        <div class="price-tag">$<?php echo $course['course_price']; ?></div>
                                    </div>
                                    <h3><?php echo $course['course_name']; ?></h3>
                                    <p><?php echo $course['course_desc']; ?></p>
                                    
                                    <a href="<?php echo base_url('Home/Contact'); ?>" class="secondary button">Register Yourself!</a>
                                </div>    
                            </div><!-- Third Course /--> 
                            <?php endforeach ?>
                            <?php endif ?>
                            
                            


                            
                            <div class="clearfix"></div>
                        </div><!-- Courses Section Ends /-->            
                        
                           
                        
                    </div><!-- Events Wrapper Ends /-->
                    
                </div><!-- Row Ends /-->
            </div>
            <!-- Seminar Events Ends /-->
            
            
            
            
        </div>
        <!-- Content Section Ends /-->
        
       