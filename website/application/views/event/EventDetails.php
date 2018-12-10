
        
        <!-- Title Section -->
        <div class="title-section module">
            <div class="row">
        
                <div class="small-12 columns">
                    <h1><?php echo $event['event_title']; ?></h1>
                </div><!-- Top Row /-->
        
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Features</a></li>
                     
                       
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->
                
            </div><!-- Row /-->
        </div>
        <!-- Title Section Ends /-->
        
        <!-- Content section -->
        <div class="content-section">
        	
            <!-- Seminar/Events -->
            <div class="module">
                <div class="row">
                    
                    <div class="medium-9 small-12 columns">
                     	<div class="event-thumb">
                        	<img src="<?php echo $this->config->item('image_path').$event['event_image']; ?>" alt="Something0" class="thumbnail" />
                        </div><!-- Event Thumb /-->
						<div class="event-content">
                        	<?php echo $event['event_content']; ?>

</p>
                        </div><!-- Events content /-->
                    </div><!-- Events Wrapper Ends /-->
                    
                    <div class="medium-3 small-12 columns sidebar">
                    	
                        <div class="widget">
                        	<h2>Event Details</h2>
                            
                            <div class="teacher">
                                
                                <div class="teacher-meta">
                                   
                                    <p>Will be presenting the Seminar on</p>
                                </div><!-- teacher meta /-->    
                            </div><!-- Teacher Ends /-->
                           	<ul class="no-bullet special-icon-margin">
                            	<li><i class="fa fa-clock-o"></i> <strong>Timinings:</strong> <?php echo $event['event_time']; ?></li>
                            	<li><i class="fa fa-calendar"></i> <strong>Date:</strong> <?php echo $event['event_date']; ?></li>
                            	<li><i class="fa fa-location-arrow"></i> <strong>Location:</strong><?php echo $event['event_location']; ?></li>
                                <li><i class="fa fa-phone"></i> <strong>Call:</strong> <?php echo $event['call_to_hlep']; ?></li>
                            </ul> 
                            <iframe width="100%" height="" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=20A%20Droop%20st%2CFootscary%20VIC%203011%20austrelia+(Student%20Success)&ie=UTF8&t=&z=18&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                </iframe>   
                        </div><!-- Widget Ends /-->
                        
                    </div><!-- Sidebar Ends /-->
                    
                </div><!-- Row Ends /-->
            </div>
            <!-- Seminar Events Ends /-->
            
            <!-- Our Teachers -->
	        <!-- This sections is deleted -->
    	    <!-- Our Teachers /-->
            
        </div>
        <!-- Content Section Ends /-->
        
        
