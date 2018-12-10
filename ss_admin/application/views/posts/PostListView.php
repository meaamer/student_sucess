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
                                        <?php if (!empty($posts)): ?>
                                            
                                        
                                        <?php foreach ($posts as $post): ?>
                                            <tr id="reload<?php echo $post['post_id']; ?>">
                                            <td><?php echo $post['post_id']; ?></td>
                                            <td>
                                               
                                                     <img width="150" src="<?php echo  base_url('uploads/').$post['post_media']; ?>">
                                               
                                               
                                            </td>
                                            <td><?php echo substr($post['post_title'], 0,50) ; ?>...</td>
                                            
                                            <td><?php echo $post['post_date']; ?></td>
                                            <th>
                                                <a href="<?php echo base_url('Posts/PostDetails/').$post['post_id']; ?>" class="btn btn-info btn-fill">
                                                 <i class="pe-7s-look"></i></a>

                                                <a href="<?php echo base_url('Posts/NewPost/').$post['post_id']; ?>" class="btn btn-info btn-fill">
                                                    <i class="pe-7s-pen"></i></a>

                                                <button type="button" class="btn btn-info btn-fill"
                                                 onclick="deletePost(<?php echo $post['post_id']; ?>);">
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
    url:"<?php echo base_url()?>Posts/DeletePost/"+id,
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