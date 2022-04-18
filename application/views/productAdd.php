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
        <button type="button" class="btn btn-primary float-right mys" data-toggle="modal"
            data-target="#exampleModalCenter">
            ADD PRODUCTS
        </button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class=" modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLongTitle">ADD PRODUCTS</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form class="mt-3" method="POST" action="<?php echo base_url("User/Addproduct"); ?>"
                        enctype="multipart/form-data">
                        <div class="col-md-8 m-auto ">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Id</label>
                                <input type="text" name="pid" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Youer Name">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Name</label>
                                <input type="text" name="pname" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Youer Name">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">

                                <!-- <input type="hidden" name="image" class="form-control"
            value="<?php //echo $_SESSION['profile_img']; ?>"> -->
                                <label for="exampleInputPassword1">Product Images</label>
                                <input type="file" name="image" class="form-control" placeholder="Image"
                                    onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                <img id="blah" alt="your image" width="100" height="100" />
                            </div>

                            <!-- Dinamic render the  catigory and catigory_id  -->


                            <div class="form-group">
                                <label for="sel1">Select Product Category:</label>
                                <select class="form-control" name="pcategory" id="sel1">
                                    <option>select category</option>

                                </select>
                            </div>




                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Price</label>
                                <input type="text" name="pprice" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Youer Name">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Qty</label>
                                <input type="text" name="pqty" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Youer Name">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>

                            <button type="submit" class="btn btn-primary">Add Product</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <!-- <button type="submit" class="btn btn-primary float-left">Add Category</button> -->
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
<script>
$(document).ready(function() {

    selectboxset();

    function selectboxset() {
        $.ajax({
            url: "<?php echo base_url();?>User/setcatinpro",
            type: "POST",
            dataType: "json",
            success: function(data) {
                // console.log(data);
                for (let i = 0; i < data.length; i++) {
                    chetan = data[i].categrory_id;
                    rathore = data[i].categrory_name;
                    $('#sel1').append('<option value='+chetan+'>' + rathore + '</option>');
                    // console.log(chetan);

                    // console.log(rathore);
                }

            }
        });
    }

});
</script>