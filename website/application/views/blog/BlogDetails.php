
        <!-- Title Section -->
        <div class="title-section module">
            <div class="row">
        
                <div class="small-12 columns">
                    <h1>Latest News From Our Blog</h1>
                </div><!-- Top Row /-->
        
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Blog Details</a></li>
                       
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->
                
            </div><!-- Row /-->
        </div>
        <!-- Title Section Ends /-->
        
        <!-- Content section -->
        <div class="content-section module blog-page">
        	
            <div class="row">
            	
                <div class="medium-9 small-12 columns posts-wrap">

                    <div class="single-post">
                        <div class="featured-image">
                            <a href="#">
                                <img alt="" src="http://localhost/Studentsuccess/ss_admin/uploads/<?php echo $post['post_media']; ?>" class="thumbnail" />
                            </a>
                        	<div class="post-meta"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $post['post_date']; ?>| <i class="fa fa-user" aria-hidden="true"></i> <a href=""><?php echo $post['admin_id']; ?></a> | </div>
                         </div>
                        
                        <h3><a href="#"><?php echo $post['post_title']; ?></a></h3>
                        
                        <div class="post-excerpt">
                            <?php echo $post['post_content']; ?>
                        </div><!-- post excerpt /-->
                        
                        
                        
                         <!-- sharing row ends /-->
                            
                    </div><!-- post ends here /-->
                   
                   
                    
                     
                    
                </div><!-- Posts wrap ends /-->
                
                <div class="medium-3 small-12 columns sidebar">
                   
                    
                   
                    
                    <div class="widget">
                        <h2>Popular Tags</h2>
                        
                        <ul class="tags">
                            <li><a href="#">Building</a></li>
                            <li><a href="#">Computer science</a></li>
                            <li><a href="#">Engineering</a></li>
                            <li><a href="#">Electrical</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Project</a></li>
                            
                        </ul>
                    <div class="clearfix"></div>
                    </div><!-- widget ends /-->
                    
                    <div class="widget">
                        <h2>Popular Posts</h2>

                         <?php if (!empty($related)): $i=0;?>
                         <?php foreach ($related as $post): $i++ ?>
                        
                         <div class="popular-post">
                            <a href="<?php echo base_url('Blogs/BlogDetails/').$post['post_id'] ?>"><strong><?php echo substr($post['post_title'],0,30); ?></strong></a>
                            <p>
                            <a href="<?php echo base_url('Blogs/BlogDetails/').$post['post_id'] ?>">

                                <img alt="" src="http://localhost/Studentsuccess/ss_admin/uploads/<?php echo $post['post_media']; ?>" class="float-left" /> 
                            </a></p>
                         </div>
                         
                         
                         <?php if($i==6){break;} ?>
                         <?php endforeach ?>
                         <?php endif ?>   
                        
                    
                    </div><!-- widget ends /-->
                    
                </div><!-- right bar ends here /-->
                
            </div><!-- Row Ends /-->
            
        </div>
        <!-- Content Section Ends /-->
       