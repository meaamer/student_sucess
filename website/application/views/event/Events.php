
        
        <!-- Title Section -->
        <div class="title-section module">
            <div class="row">
        
                <div class="small-12 columns">
                    <h1>Join Our Events</h1>
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
        <div class="content-section module">
        	
            <!-- Seminar/Events -->
            <div class="space-section module">
                <div class="row">
                    
                    <div class="events-wrapper">

                        <?php if (!empty($new_event)): ?>
                        <?php foreach ($new_event as $event): ?>

                            <div class="medium-4 small-12 columns">
                        <div class="event">
                            <div class="medium-8 small-12 columns event-data">
                                <h4><a href="#"><?php echo substr($event['event_title'], 0,30); ?></a></h4>
                                <p>
                                   <?php echo substr($event['event_content'], 0,50); ?>...
                                </p>


                                <p><strong>Timinings:</strong> 17:00 - 18:00
                                <br><strong>Date:</strong> 24, December 2016</p>
                                <a href="<?php echo base_url('Events/EventDetails/').$event['event_id'] ?>" class="button primary bordered-dark">More</a>
                            </div><!-- Event DAta /-->
                            <div class="medium-4 small-12 columns event-thumb">
                                <!-- <img src="<?php //echo base_url(); ?>assets/images/help/text2.jpg"> -->
                                <!-- <img  src="http://localhost/Studentsuccess/ss_admin/uploads/<?php //echo $event['event_image']; ?>" alt="PHP Course" /> -->
                            </div><!-- Event thumb /-->     
                            <div class="clearfix"></div>
                        </div><!-- Event div ends /-->
                    </div><!-- Event Column Ends /-->

                            
                        <?php endforeach ?>
                        <?php endif ?>
                        
                        
                    
                    	
                        
                        
                    
                    	
                    
                    	
                    
                    	
                    
                    </div><!-- Events Wrapper Ends /-->
                    
                </div><!-- Row Ends /-->
            </div>
            <!-- Seminar Events Ends /-->
            
            <!-- Our Teachers -->
	        <!-- our teacher section deleted -->
    	    <!-- Our Teachers /-->
            
        </div>
        <!-- Content Section Ends /-->
        
