<?php //die(print_r($posts)); ?>
   
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <div class="pull-right">
                                <div class="row">
                                
                            
                                </div>
                                </div>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Full Name</th>
                                    	<th>Mobile No</th>
                                    	<th>Email ID</th>
                                        <th>Course Name</th>
                                    	<th>Message</th>
                                       
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($messages)): ?>
                                            
                                        
                                        <?php foreach ($messages as $post): ?>
                                            <tr id="reload<?php echo $post['id']; ?>">
                                            <td><?php echo $post['id']; ?></td>
                                             <td><?php echo $post['full_name']; ?></td>
                                           
                                            <td><?php echo substr($post['mobile_no'],0) ; ?></td>
                                            <td><?php echo substr($post['email_id'],0) ; ?></td>
                                             <td><?php echo substr($post['course_name'], 0) ; ?></td>
                                            
                                            <td><?php echo $post['message']; ?></td>
                                            <th>
                                              

                                              
                                                <button type="button" class="btn btn-info btn-fill"
                                                 onclick="deletePost(<?php echo $post['id']; ?>);">
                                                    <i class="pe-7s-close-circle"></i></button>
                                            </th>
                                           
                                        </tr>
                                        <?php endforeach ?>
                                        <?php endif ?>
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                    


                </div>
            </div>
        </div>

        
<script>
    function deletePost(id)
{

    alertify.confirm("confirm","Sure You Want To Delete This.",function(){
    $.ajax({
    type:"POST",
    url:"<?php echo base_url()?>Posts/DeleteMessage/"+id,
    success: function(response)
    {
      alertify.success(response);
      $('#reload'+id).remove();
    }
  });
  },
  function(){
    alertify.error('Cancel');
  })
}
</script>