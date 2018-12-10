 <!-- text area html editor -->

    



        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">New Course</h4>
                            </div>
                            <div class="content">
                                <form id="new_post">
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Course Name</label>
                            <input type="text" class="form-control" name="course_name" placeholder="Course Name" value="<?php if( isset($rows) ){echo $rows['course_name'];} ?>">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Course Price</label>
                            <input type="text" class="form-control" name="course_price" placeholder="Course Name" value="<?php if( isset($rows) ){echo $rows['course_price'];} ?>">
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Course Description</label>
                            <textarea name="course_desc"  class="form-control sites"><?php if( isset($rows) ){echo $rows['course_desc'];} ?></textarea>
                        </div>
                    </div>
                    
                </div>


                <div class="row">

                                        <!-- <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Course Category</label>
                                               <select class="form-control" name="category">
                                                    <?php if (isset($rows)): ?>
                                                       <option selected="" value="<?php echo $rows['category_id']; ?>"><?php echo $rows['category_name']; ?>
                                                           
                                                       </option>
                                                   <?php endif ?>
                                                   
                                                   <?php foreach ($categories as $category): ?>
                                                        <option value="<?php echo $category['category_id']; ?>">
                                                            <?php echo $category['category_name']; ?>
                                                            
                                                        </option>
                                                   <?php endforeach ?>
                                                   
                                               </select>
                                            </div>
                                        </div> -->



                    <div class="col-md-6">
                            <div class="form-group">
                                <label>Course Image</label>
                      <input type="file" class="form-control changes" name="course_image">
                           <span style="color: red">images must be width 270 and height 202 and size should be less then 500kb</span>
                            </div>
                    </div>

                    
                </div>

                
                
                                  <?php if (isset($rows)): ?>
                                      
                                    <button type="button" onclick="updateEvent(<?php echo $rows['course_id']; ?>);" class="btn btn-info btn-fill pull-right">Update Post</button>
                                <?php else: ?>

                                    <button type="button" onclick="addEvent();" class="btn btn-info btn-fill pull-right">Save</button>

                                  <?php endif ?>


                                    <div class="clearfix"></div>
                                </form>
                                <div id="msg_succ"></div>
                            </div>
                        </div>
                    </div>
                

                </div>
            </div>
        </div>

 
       


<script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>


 

 




<script>
 
 



  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    
  });


   

function addEvent(){

  
    if (typeof FormData !== 'undefined'){
    var formData = new FormData( $("#new_post")[0] );
   $.ajax({
        url :'<?php echo base_url();?>Courses/AddCourses',  // Controller URL
        type : 'POST',
        data : formData,
        async : false,
        cache : false,
        contentType : false,
        processData : false, 
        success: function(data){
       //$("#msg_succ").html(data);
        alertify.error(data);
        // $('#new_post')[0].reset();
    },
});

} 
}







function updateEvent(id){

  
    if (typeof FormData !== 'undefined'){
    var formData = new FormData( $("#new_post")[0] );
    
   
   
$.ajax({
        url :'<?php echo base_url();?>Courses/UpdateCourse/'+id,  // Controller URL
        type : 'POST',
        data : formData,
        async : false,
        cache : false,
        contentType : false,
        processData : false, 
        success: function(data){
        alertify.error(data);
        window.history.back();
    },
});

} 
}





</script>

