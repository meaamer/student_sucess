
        <!-- Title Section -->
        <div class="title-section module">
            <div class="row">
        
                <div class="small-12 columns">
                    <h1>Contact Us</h1>
                </div><!-- Top Row /-->
        
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Contact</a></li>
                        
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->
                
            </div><!-- Row /-->
        </div>
        <!-- Title Section Ends /-->
        
        <!-- Content section -->
        <div class="content-section module">
        	<div class="row">
            	
                
                <!-- Contact content area -->
                <div class="content-wrapper">
                
                	<div class="medium-3 small-12 columns">
                    	
                        <div class="contact-info">
                        	<h4>Meet our Institute</h4>
                            <p>20A Droop st,Footscary VIC 3011</p>
                        </div>
                        <div class="contact-info">
                        	<h4>Get in Touch</h4>
                            <p><strong>Office: </strong>0450484343<br>
                            <p><strong>Email: </strong>footscray.studentssuccess@gmail.com<br>
                            	
                            </p>
                        </div>
                        <div class="contact-info">
                        	<h4>Follow Us</h4>
	                         <div class="socialicons">
                                <a href="https://www.facebook.com/Footscray.StudentSuccess/"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.instagram.com/studentssuccessfootscray/"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-google"></i></a>
	                        </div><!-- Social Icons /-->
                        </div>
                    </div><!-- Left column Ends /-->
                	
                    <div class="medium-9 small-12 columns" id="contactus">
                    	<h2>Please fill the form below to contact us</h2>
                        <div class="contact-form">
                            <form id="contact">
                        	<div class="row">
                            	<div class="medium-6 small-12 columns">
                                	<label>
                                    	Your Full Name*
                                        <input type="text" placeholder="Your Full name here..."  name="full_name">
                                    </label>    
                                </div>
                                <div class="medium-6 small-12 columns">
                                	<label>
                                    	Mobile Number*
                                        <input type="text"  placeholder="Your Mobile Number here..." name="mobile_no">
                                    </label>
                                </div>
                            </div><!-- Row Ends /-->
                            
                            <div class="row">
                            	<div class="medium-6 small-12 columns">
                                	<label>
                                    	Course Name
                                        <input type="text" value="" placeholder="Course Name ..." name="course_name">
                                    </label>    
                                </div>
                                <div class="medium-6 small-12 columns">
                                	<label>
                                    	Email ID
                                        <input type="text" value="" placeholder="Email Id" name="email_id">
                                    </label>
                                </div>
                            </div><!-- Row Ends /-->
                            
                           
                            <div class="row">
                            	<div class="medium-12 small-12 columns">
                                	<label>
                                    	Your Comments 
                                        <textarea rows="10" name="message" placeholder="Your message ..."></textarea>
                                    </label>    
                                	<input type="button" class="button primary" value="Send your message" onclick="contact()" />
                                </div>
                            </div><!-- Row Ends /-->
                        </form>
                        </div><!-- Contact form /-->
                    </div><!-- Right Column Ends /-->
                    <div class="clearfix"></div>
                </div><br><br>
                <!-- Contact Content Area /-->
                
                <!-- Map Area -->
                <div class="map-wrapper module">
                    <iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=20A%20Droop%20st%2CFootscary%20VIC%203011%20austrelia+(Student%20Success)&ie=UTF8&t=&z=18&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                </iframe>
                </div>
                <!-- Map Ends /-->
            </div><!-- Row /-->
        </div>
        <!-- Content Section Ends /-->
        
     

    <script type="text/javascript">
        function contact()
  {

    $.ajax({
      type:'POST',
      url:'<?php echo base_url('')?>Home/UserContact',
      data:$("#contact").serialize(),
      success:function(response)
      {
        alertify.success(response);
      }
    });
  }
    </script>

    <!-- alertify css -->
<link href="<?php echo base_url('assets/alertify/css/alertify.css');?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('assets/alertify/css/alertify.min.css');?>" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php echo base_url('assets/alertify/css/themes/default.min.css');?>">

    <!-- alertify js -->
    <script src="<?php echo base_url('assets/alertify/alertify.js'); ?>"></script>
    <script src="<?php echo base_url('assets/alertify/alertify.min.js'); ?>"></script>