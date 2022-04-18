<!-- <a href="<?php //echo base_url('Cart');?>" class="cart-link" title="View Cart">
<i class="glyphicon glyphicon-shopping-cart"></i>
<span>
    (<?php //$this->cart->total_items();?>)
</span>
</a> -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <?php foreach ($data->result() as $row) : ?>
                <div class="col-md-2 mr-auto">
                    <div class="thumbnail">
                        <img width="100" src="<?php echo base_url().'assets/images/'.$row->product_img;?>">
                        <div class="caption">
                            <h6>name : <?php echo $row->product_name;?></h6>
                            <h6>price : <?php echo number_format($row->product_price);?></h6>
                            <input type="number" name="quantity" id="<?php echo $row->id;?>" value="1" class="quantity form-control">
                            <div class="row">
                                <div class="col-md-5">
                                </div>
                            </div>
                            <button class="add_cart btn btn-success btn-block" data-proimg="<?php echo $row->product_img;?>" data-productid="<?php echo $row->id;?>" data-productname="<?php echo $row->product_name;?>" data-productprice="<?php echo $row->product_price;?>">Add To Cart</button>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>

            </div>
        </div>
    </section>
    <div class="row">
        <?php $this->session->userdata();
             $this->session->userdata('Email');
             $this->session->userdata('UserType'); ?>
    </div>


    <!-- <div class="col-md-4">
            <h4>Shopping Cart</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Pro-img</th>
                        <th>Items</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="detail_cart">
 
                </tbody>
                 
            </table>
        </div> -->
</div>



</div>
</section>



<script type="text/javascript">
    $(document).ready(function(){
        $('.add_cart').click(function(){
            var pro_img  =$(this).data("proimg"); 
            var product_id    = $(this).data("productid");
            var product_name  = $(this).data("productname");
            var product_price = $(this).data("productprice");
            var quantity  = $('#' + product_id).val();
            $.ajax({
                url : "<?php echo site_url('User/add_to_cart');?>",
                method : "POST",
                data : {product_id: product_id, product_name: product_name, product_price: product_price, quantity: quantity,pro_img:pro_img},
                success: function(data){
                           alert('add product');
                    // $('#detail_cart').html(data);
                }
            });
        });
    });
</script>

<!-- this is a cart tips topi do the work........................................................................ -->


    <!-- <link rel="stylesheet" type="text/css" href="<?php //echo base_url().'assets/css/bootstrap.css'?>"> -->
    
<!-- </head>
<body>
<div class="container"><br/>
    <h2>Shopping Cart Using Ajax and Codeigniter</h2>
    <hr/>
    <div class="row">
        <div class="col-md-8">
            <h4>Product</h4>
            <div class="row">
           
                 
            </div>
 
        </div>
       
    </div>
</div> -->