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
                                    	<th>Image</th>
                                    	<th>Category</th>
                                    	<th>Course Name</th>
                                        <th>Course Price</th>
                                    	<th>Description</th>
                                        <th>ACTIONS</th>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($courses)): ?>
                                            
                                        
                                        <?php foreach ($courses as $post): ?>
                                            <tr id="reload<?php echo $post['course_id']; ?>">
                                            <td><?php echo $post['course_id']; ?></td>
                                            <td>
                                               
                                                     <img width="100"  src="<?php echo  base_url('uploads/').$post['course_image']; ?>">
                                               
                                               
                                            </td>
                                            <td><?php echo substr($post['category_name'], 0,50) ; ?></td>
                                            <td><?php echo substr($post['course_name'], 0,50) ; ?></td>
                                             <td><?php echo substr($post['course_price'], 0,50) ; ?></td>
                                            
                                            <td><?php echo $post['course_desc']; ?></td>
                                            <th>
                                              

                                                <a href="<?php echo base_url('Courses/NewCourse/').$post['course_id']; ?>" class="btn btn-info btn-fill">
                                                    <i class="pe-7s-pen"></i></a>

                                                <button type="button" class="btn btn-info btn-fill"
                                                 onclick="deletePost(<?php echo $post['course_id']; ?>);">
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
    url:"<?php echo base_url()?>Courses/DeleteCourse/"+id,
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