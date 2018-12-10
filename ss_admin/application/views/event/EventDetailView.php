<?php //die(print_r($detail)); ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Event Details</h4>
                                
                            </div>
                            <div class="content">

                                <div class="typo-line">
                                  <p class="category">  <h1><?php echo $detail['event_title']; ?></h1></p>
                                </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="category"><small>Date : <?php echo $detail['event_date']; ?></small>
                                       </p><br>
                                       <p class="category"><small>Time : <?php echo $detail['event_time']; ?></small>
                                       </p><br>
                                        </div>

                                        <div class="col-md-6">
                                            <p class="category"><small>Event venue : <?php echo $detail['event_location']; ?></small>
                                       </p><br>
                                       <p class="category"><small>Contact No : <?php echo $detail['call_to_hlep']; ?></small>
                                       </p><br>
                                        </div>
                                    </div>
                                    <div class="typo-line">
                                        

                                       
                                             <img width="100%" height="400px" src="<?php echo base_url('uploads/').$detail['event_image']; ?>">
                                       
                                   
                                    </div>
                                <hr>
                                <div class="typo-line">
                                    <p><?php echo $detail['event_content']; ?></p>
                                </div>
                                

                               
                                

                               


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
