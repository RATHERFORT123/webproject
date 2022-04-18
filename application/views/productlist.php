<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>User, world!</title>
    <style>
    .mys {
        margin-bottom: 40px;
    }
    </style>

</head>

<body>
    <!-- Button trigger modal -->
    <div class="mys">
        <!-- <button type="button" class="btn btn-primary float-right mys" data-toggle="modal" data-target="#exampleModalCenter">
  Add Category
</button> -->
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenterd" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form class="mt-3" method="POST" id="editforms" action="<?php echo base_url("User/editProduct"); ?>"
                        enctype="multipart/form-data">
                        <div class="col-md-8 m-auto ">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Id</label>
                                <input type="hidden" name="mid" id="mainid">
                                <input type="text" name="pid" class="form-control" id="productid"
                                    aria-describedby="emailHelp" placeholder="Enter Youer Name">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Name</label>
                                <input type="text" name="pname" class="form-control" id="productname"
                                    aria-describedby="emailHelp" placeholder="Enter Youer Name">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">

                                <!-- <input type="hidden" name="image" class="form-control"
                            value="">
                            <img id="blah1" src="" alt="your image" width="100" height="100"/> -->


                            <label for="exampleInputPassword1">Product Images</label>
                                <input type="file" name="image" class="form-control" placeholder="Image"
                                    onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                <img id="blah" class="imgset" alt="your image" width="100" height="100" />
                            </div>

                            <!-- Is ko ham to dinamic banayai gai...... -->
                            <div class="form-group">
                                <label for="sel1">Select Product Category:</label>
                               <select class="form-control" name="pcategory" id="sel2">
                                        
                               </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Price</label>
                                <input type="text" name="pprice" class="form-control" id="productprice"
                                    aria-describedby="emailHelp" placeholder="Enter Youer Name">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Qty</label>
                                <input type="text" name="pqty" class="form-control" id="productqty"
                                    aria-describedby="emailHelp" placeholder="Enter Youer Name">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>

                            <button type="submit" class="btn btn-primary">Add Product</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </form>
                    <!-- <button type="submit" id="editcat" class="btn btn-primary float-left">Edit Product</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>



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
                    <h1 class="m-0">Product</h1>
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
                            <th>Product-Id</th>
                            <th>Product-Name</th>
                            <th>Product-Img</th>
                            <th>Product-Category</th>
                            <th>Product-Price</th>
                            <th>Product-Qty</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>


                        </thead>
                        <tbody>

                            <?php
			//print_r($row);
			$i = 1;
			foreach($row as $val){ 
			?>
                            <tr id="row_<?php echo $val->id;?>">
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $val->product_id; ?></td>
                                <td><?php echo $val->product_name; ?></td>
                                <td><img src="<?php echo base_url();?>/assets/images/<?php echo $val->product_img;?>"
                                        alt="AdminLTE Logo" style="border-radius:20px;" width="40" height="40" class="brand-image" style="opacity: .8"></td>
                                <td><?php echo $val->categrory_name; ?></td>
                                <td><?php echo $val->product_price; ?></td>
                                <td><?php echo $val->product_qty; ?></td>
                                <td><?php echo $val->statusp; ?></td>
                                <!-- edit product with the ajax valu fetch functionality -->
                                <td><button id="proupdates" class="proupdate"
                                        data-id="<?php echo $val->id?>">Edit</button></td>
                                <td>
                                    <button class="deleteRecord" data-id="<?php echo $val->id; ?>"><a
                                            href="<?php echo base_url('User/deleteproduct/'.$val->id);?>">Delete</a></button>
                                </td>
                            </tr>
                            <?php 
			}
			?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php //include("footer.php"); ?>




<script>
$(document).on('click', '.proupdate', function() {
   
    $("#sel2").html('');

    var user_id = $(this).attr("data-id");

    $.ajax({
        url: "<?php echo base_url();?>User/fetch_singal_product",
        type: "post",
        data: {
            'user_id': user_id
        },
        dataType: "json",
        success: function(data) {
            //  alert(data);
            console.log(data);
            // console.log(data.mid);
            // console.log(data.pid);
            // console.log(data.pname);
            // console.log(data.pimg);
            // console.log(data.pprice);
            // console.log(data.pstatus);
            $("#mainid").val(data.mid);
            $("#productid").val(data.pid);
            $("#productname").val(data.pname);
            // <?php //$cat ?> = data.pcat;


            $.ajax({
            url: "<?php echo base_url();?>User/setcatinpro",
            type: "POST",
            dataType: "json",
            success: function(datas){
                console.log(datas);
                for (let i = 0; i < datas.length; i++){
                    chetan = datas[i].categrory_id;
                    rathore = datas[i].categrory_name;  
                console.log(data.pcat);
                if(data.pcat == chetan){
                $('#sel2').append('<option selected value='+chetan+'>' + rathore + '</option>');
                    
                }else{
                $('#sel2').append('<option value='+chetan+'>' + rathore + '</option>');
                 } // console.log(rathore);
                    
                }
            }
        });
           
            $('.imgset').attr('src', "<?php echo base_url();?>assets/images/"+data.pimg+"");
            $("#sel1").val(data.pcat);
            $("#productprice").val(data.pprice);
            $("#productqty").val(data.pqty);
            $('#exampleModalCenterd').modal('show');

         
        }
    })
});
</script>