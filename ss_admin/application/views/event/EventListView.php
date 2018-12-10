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
                                    	<th>IMAGE</th>
                                    	<th>TITLE</th>
                                    	
                                    	<th>DATE</th>
                                        <th>ACTIONS</th>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($events)): ?>
                                            
                                        
                                        <?php foreach ($events as $post): ?>
                                            <tr id="reload<?php echo $post['event_id']; ?>">
                                            <td><?php echo $post['event_id']; ?></td>
                                            <td>
                                               
                                                     <img width="150" src="<?php echo  base_url('uploads/').$post['event_image']; ?>">
                                               
                                               
                                            </td>
                                            <td><?php echo substr($post['event_title'], 0,50) ; ?>...</td>
                                            
                                            <td><?php echo $post['event_date']; ?></td>
                                            <th>
                                                <a href="<?php echo base_url('Events/EventDetails/').$post['event_id']; ?>" class="btn btn-info btn-fill">
                                                 <i class="pe-7s-look"></i></a>

                                                <a href="<?php echo base_url('Events/NewEvent/').$post['event_id']; ?>" class="btn btn-info btn-fill">
                                                    <i class="pe-7s-pen"></i></a>

                                                <button type="button" class="btn btn-info btn-fill"
                                                 onclick="deletePost(<?php echo $post['event_id']; ?>);">
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
    url:"<?php echo base_url()?>Events/DeleteEvent/"+id,
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