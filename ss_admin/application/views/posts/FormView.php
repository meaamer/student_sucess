 <!-- text area html editor -->

    



        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">New Post</h4>
                            </div>
                            <div class="content">
                                <form id="new_post">
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Post Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Post Title" value="<?php if( isset($rows) ){echo $rows['post_title'];} ?>">
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Post Content</label>
                            <textarea name="content" id="editor1" class="form-control sites"><?php if( isset($rows) ){echo $rows['post_content'];} ?></textarea>
                        </div>
                    </div>
                    
                </div>


                <div class="row">
                    <div class="col-md-6">
                            <div class="form-group">
                                <label>Media File</label>
                      <input type="file" class="form-control changes" name="post_file">
                           <span style="color: red">images must be width 870 and height 300  size should be less then 500kb</span>
                            </div>
                        </div>
                </div>

                                  <?php if (isset($rows)): ?>
                                      
                                    <button type="button" onclick="updatePost(<?php echo $rows['post_id']; ?>);" class="btn btn-info btn-fill pull-right">Update Post</button>
                                <?php else: ?>

                                    <button type="button" onclick="addPost();" class="btn btn-info btn-fill pull-right">Post</button>

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


   

function addPost(){

   var editor_data = CKEDITOR.instances.editor1.getData();
    if (typeof FormData !== 'undefined'){
    var formData = new FormData( $("#new_post")[0] );
    formData.append('editor_data', editor_data);
   
    if (editor_data=="")
     {
      alertify.error("Please fill all the fields");
     }else{
$.ajax({
        url :'<?php echo base_url();?>Posts/AddPost',  // Controller URL
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
}







function updatePost(id){

   var editor_data = CKEDITOR.instances.editor1.getData();
    if (typeof FormData !== 'undefined'){
    var formData = new FormData( $("#new_post")[0] );
    formData.append('editor_data', editor_data);
   
    if (editor_data=="")
     {
      alertify.error("Please fill all the fields");
     }else{
$.ajax({
        url :'<?php echo base_url();?>Posts/UpdatePost/'+id,  // Controller URL
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
}





</script>

