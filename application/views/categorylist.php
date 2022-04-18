<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>User, world!</title>
<style>
  .mys{
  margin-bottom: 40px;
  }
</style>

  </head>
  <body>
<!-- Button trigger modal -->
<!-- <div class="mys">

</div> -->

<!-- Modal -->
   <!-- THIS IS A EDIT PRODUCT IN THE EDI CATEGORY AND CALL WITH AJAX -->
<div class="modal fade" id="exampleModalCenterd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
  <form class="mt-3" method="POST" action="<?php echo base_url("User/Addcategory"); ?>">
      <div class="col-md-8 m-auto ">
  <div class="form-group" id="myform" >
    <input type="text" id="id" class="setid" hidden>
    <label for='exampleInputEmail1'>Edit Youer Category</label>
    <input  type='text' name='cats' class='form-control' id='catname' aria-describedby='emailHelp' placeholder='Enter Youer Name'>
   
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
 
</div>

</div>
</form>
<button type="submit" id="editcat" class="btn btn-primary float-left">Edit Category</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
<div class="modal-footer">
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
 
 
  </body>
</html>
 
 
 
 <?php //include("header.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
			<div class="col-md-12">
			
			<table class="table">
			<thead>
			<th>No.</th>
			<th>Category-Name</th>
			<th>Edit</th>
			<th>Delete</th>

			
			</thead>
			<tbody>
			
			<?php
			//print_r($row);
			$i = 1;
			foreach($row as $val){ 
			?>
			<tr id="row_<?php echo $val->categrory_id;?>">
			<td><?php echo $i++; ?></td>
			<td id="nat<?php echo $val->categrory_id; ?>"><?php echo $val->categrory_name; ?></td>
			<td><button id="updates" class="update" data-id="<?php echo $val->categrory_id;?>" >Edit</button></td>
			<!-- <td><button data-toggle="modal" data-target="#exampleModalCenterd"><a href="#<?php //echo base_url('User/editcategory/'.$val->categrory_id);?>">Edit</a></button></td> -->
			<td>
			<button class="deleteRecord" data-id="<?php echo $val->categrory_id; ?>"><a href="<?php echo base_url('User/deletecategory/'.$val->categrory_id);?>">Delete</a></button>
			</td>
			</tr>				
			<?php 
			}
			?>
			
		
			</tbody>
			
			</table></div>
      
      <!-- //  var user_id = $(this).closest("tr").find("td").text(); -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
  <div id="myforms">
    
    </div>
    <!-- /.content-wrapper -->
    
    

  <script>
    // var base_url= 'http://localhost/SHOP/';
    // this is a updata method using the write stratgiy ..........................................
$(document).on('click', '.update', function(){  
      
          var user_id = $(this).attr("data-id");
            // alert(user_id);  
           $.ajax({  
                url:"<?php echo base_url();?>User/editCategory",    
                type: "post",
                dataType:"json",
                data:{'user_id':user_id},
                success:function(data)
                {  
                  // console,log(data);
                  $("#catname").val(data.name);
                  $("#id").val(data.id);
          $('#exampleModalCenterd').modal('show'); 

                  // console.log(data.name);
                    // alert(data.id,data.name,data.big);
                }  
           })  
      }); 


      $(document).on('click','#editcat', function(){  
      
      var user_id = $("#id").val();
      var catigory = $("#catname").val();
        // alert(user_id);  
       $.ajax({  
            url:"<?php echo base_url();?>User/editUpdate",    
            type: "post",
            // dataType:"json",
            data:{'user_id':user_id,'catigory':catigory},
            success:function(data)
            { 
              // console.log(data); 
              if(data == 1){
                alert("data not insert....");
              }else{
                alert("data successfull....");
                $("#nat"+user_id).text('');               
 $("#nat"+user_id).append(catigory);             
              }
              // $("#catname").val(data.name);
      $('#exampleModalCenterd').modal('hide'); 
               
              // console.log(data.name);
                // alert(data.id,data.name,data.big);
            }  
       })  
  });

  </script>