<?php //die(print_r($posts)); ?>
   
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Category Table</h4>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Category Name</th>
                                        <th>ACTIONS</th>
                                        
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($categories)): ?>
                                            
                                        
                                        <?php foreach ($categories as $category): ?>

                                            <tr id="reload<?php echo $category['category_id']; ?>">

                                            <td><?php echo $category['category_id']; ?></td>
                                            <td><?php echo $category['category_name']; ?></td>
                                            
                                            
                                            
                                            <td>
                                                

                                                <a href="<?php echo base_url('Posts/NewCategory/').$category['category_id']; ?>" class="btn btn-info btn-fill">
                                                    <i class="pe-7s-pen"></i></a>

                                                <button type="button" class="btn btn-info btn-fill"
                                                 onclick="deleteCategory(<?php echo $category['category_id']; ?>);">
                                                    <i class="pe-7s-close-circle"></i></button>
                                            </td>
                                           
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
    function deleteCategory(id)
{

    alertify.confirm("confirm","Sure You Want To Delete This.",function(){
    $.ajax({
    type:"POST",
    url:"<?php echo base_url()?>Posts/DeleteCategory/"+id,
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