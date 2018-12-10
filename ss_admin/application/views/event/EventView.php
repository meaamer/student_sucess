 <!-- text area html editor -->

    



        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">New Event</h4>
                            </div>
                            <div class="content">
                                <form id="new_post">
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Event Title</label>
                            <input type="text" class="form-control" name="event_title" placeholder="Event Title" value="<?php if( isset($rows) ){echo $rows['event_title'];} ?>">
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Event Content</label>
                            <textarea name="content" id="editor1" class="form-control sites"><?php if( isset($rows) ){echo $rows['event_content'];} ?></textarea>
                        </div>
                    </div>
                    
                </div>


                <div class="row">
                    <div class="col-md-6">
                            <div class="form-group">
                                <label>Media File</label>
                      <input type="file" class="form-control changes" name="post_file">
                           <span style="color: red">images must be width 870 and height 300 size should be less then 500 kb</span>
                            </div>
                    </div>

                    <div class="col-md-6">
                            <div class="form-group">
                                <label>Event Date</label>
                                 <input type="date" class="form-control" name="event_date" value="<?php if( isset($rows) ){echo $rows['event_date'];} ?>">
                      
                            </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                            <div class="form-group">
                                <label>Event Time</label>
                                 <input type="text" class="form-control" name="event_time" value="<?php if( isset($rows) ){echo $rows['event_time'];} ?>">
                            </div>
                    </div>

                    <div class="col-md-6">
                            <div class="form-group">
                                <label>Contact Number</label>
                                 <input type="text" class="form-control" name="call_to_hlep" value="<?php if( isset($rows) ){echo $rows['call_to_hlep'];} ?>">
                      
                            </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-12">
                            <div class="form-group">
                                <label>Event Location</label>
                                 <input type="text" class="form-control" name="event_location" value="<?php if( isset($rows) ){echo $rows['event_location'];} ?>">
                      
                            </div>
                    </div>
                </div>
                                  <?php if (isset($rows)): ?>
                                      
                                    <button type="button" onclick="updateEvent(<?php echo $rows['event_id']; ?>);" class="btn btn-info btn-fill pull-right">Update Post</button>
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

   var editor_data = CKEDITOR.instances.editor1.getData();
    if (typeof FormData !== 'undefined'){
    var formData = new FormData( $("#new_post")[0] );
    formData.append('editor_data', editor_data);
   
    if (editor_data=="")
     {
      alertify.error("Please fill all the fields");
     }else{
$.ajax({
        url :'<?php echo base_url();?>Events/AddEvent',  // Controller URL
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







function updateEvent(id){

   var editor_data = CKEDITOR.instances.editor1.getData();
    if (typeof FormData !== 'undefined'){
    var formData = new FormData( $("#new_post")[0] );
    formData.append('editor_data', editor_data);
   
    if (editor_data=="")
     {
      alertify.error("Please fill all the fields");
     }else{
$.ajax({
        url :'<?php echo base_url();?>Events/UpdateEvent/'+id,  // Controller URL
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

