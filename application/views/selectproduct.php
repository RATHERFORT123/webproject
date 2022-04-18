<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">MY ADD PRODUCT</h1>
                </div>

            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
    </div>
        </div>
    </section>

    <div class="col-md-12">
        <h4>Shopping Cart</h4>
        <table class="table table-stripeds">
            <thead>
                <tr>
                    <th>Items</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th>Actions</th>

                </tr>


            </thead>
            <tbody id="detail_cart">
            <?php 
            $uri = "http://localhost/site/CodeIgniter-3.1.13/assets/images/";

	$no = 0;
	foreach ($this->cart->contents() as $items) {
        ?>
			<tr>
			    <td><img height="50px" src='<?php echo base_url()."assets/images/".$items['img'];?>'></td>
				<td><?php echo $items['name']; ?></td>
				<td><?php echo number_format($items['price']); ?></td>
				<td><?php echo $items['qty']; ?></td>
				<td><?php echo number_format($items['subtotal']); ?></td>
				<td><button type="button" id="<?php echo $items['rowid']; ?>" class="romove_cart btn btn-danger btn-sm">Cancel</button></td>
			</tr>
	
<?php	} ?>
		<tr>
			<th colspan="3">Total</th>
			<th colspan="2"><?php echo number_format($this->cart->total()); ?></th>
		</tr>
            </tbody>
        </table>
        <div >
                <button id="Order_product" class="btn btn-success">ORDER-NOW</button> 
        </div>
    </div>
</div>
</section>
</div>

<script>
     
    //  var chetan = $('#detail_cart').load("<?php //echo site_url('User/load_cart');?>");
    //   console.log(chetan);

        $(document).on('click','.romove_cart',function(){
            alert("remove button");
            var row_id=$(this).attr("id"); 
            $.ajax({
                url : "<?php echo site_url('User/delete_cart');?>",
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                    $('#detail_cart').html(data);
                    console.log(data);
                }
            });
        });
        $(document).on('click','#Order_product',function(){
            alert("remove button");
            var row_id=$(this).attr("id"); 
            $.ajax({
                url : "<?php echo site_url('User/delete_cart');?>",
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                    $('#detail_cart').html(data);
                    console.log(data);
                }
            });
        });

</script>
