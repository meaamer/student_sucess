<?php //die(print_r($detail)); ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Post Details</h4>
                                
                            </div>
                            <div class="content">

                                <div class="typo-line">
                                  <p class="category">  <h1><?php echo $detail['post_title']; ?></h1></p>
                                </div>

                                    <div class="typo-line">
                                        <p class="category"><small>Date : <?php echo $detail['post_date']; ?></small>
                                       </p><br>

                                       
                                             <img width="100%" height="400px" src="<?php echo base_url('uploads/').$detail['post_media']; ?>">
                                       
                                   
                                    </div>
                                <hr>
                                <div class="typo-line">
                                    <p><?php echo $detail['post_content']; ?></p>
                                </div>
                                

                               
                                

                               


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
