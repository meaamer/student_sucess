 <!-- text area html editor -->

    



        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">New Category</h4>
                            </div>
                            <div class="content">
                                <form id="new_post">
                                    <div class="row">
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Category Name</label>
                                                <input type="text" class="form-control" name="category" placeholder="Category Name" value="<?php if( isset($rows) ){echo $rows['category_name'];} ?>">
                                            </div>
                                        </div>
                                        
                                    </div>

                                    

                                   

                                    


                                  <?php if (isset($rows)): ?>
                                      
<button type="button"  class="btn btn-info btn-fill pull-right" onclick="updateCategory(<?php echo $rows['category_id']; ?>);">Update</button>
                                <?php else: ?>

    <button type="button"  class="btn btn-info btn-fill pull-right" onclick="AddCategory();" >Save</button>

                                  <?php endif ?>


                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                

                </div>
            </div>
        </div>


       




<script>

   function AddCategory(){
    
    var form =$("#new_post");
      $.ajax({
      type:"POST",
      url:"<?php echo base_url()?>Posts/InsertCategory",
      data:form.serialize(),
      success: function(response){
       alertify.success(response);
         $('#new_post')[0].reset();
      }
    });
  }




  function updateCategory(id){
    
    var form =$("#new_post");
      $.ajax({
      type:"POST",
      url:"<?php echo base_url()?>Posts/UpdateCategory/"+id,
      data:form.serialize(),
      success: function(response){
       alertify.success(response);
       window.history.back();
      }
    });
  }


  
</script>