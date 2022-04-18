<!-- Footer Section Begin -->
<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="./index.html"><img src="<?php echo base_url('custmerthem'); ?>/img/logo.png"
                                alt=""></a>
                    </div>
                    <ul>
                        <li>Address: 60-49 Road 11378 New York</li>
                        <li>Phone: +65 11.188.888</li>
                        <li>Email: hello@colorlib.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>Useful Links</h6>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">About Our Shop</a></li>
                        <li><a href="#">Secure Shopping</a></li>
                        <li><a href="#">Delivery infomation</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Our Sitemap</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Who We Are</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Innovation</a></li>
                        <li><a href="#">Testimonials</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Join Our Newsletter Now</h6>
                    <p>Get E-mail updates about our latest shop and special offers.</p>
                    <form action="#">
                        <input type="text" placeholder="Enter your mail">
                        <button type="submit" class="site-btn">Subscribe</button>
                    </form>
                    <div class="footer__widget__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart"
                                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="footer__copyright__payment"><img
                            src="<?php echo base_url('custmerthem'); ?>/img/payment-item.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->




<script src="<?php echo base_url('custmerthem/js/'); ?>jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url('custmerthem/js/'); ?>bootstrap.min.js"></script>
<script src="<?php echo base_url('custmerthem/js/'); ?>jquery.nice-select.min.js"></script>
<script src="<?php echo base_url('custmerthem/js/'); ?>jquery-ui.min.js"></script>
<script src="<?php echo base_url('custmerthem/js/'); ?>jquery.slicknav.js"></script>
<script src="<?php echo base_url('custmerthem/js/'); ?>mixitup.min.js"></script>
<script src="<?php echo base_url('custmerthem/js/'); ?>owl.carousel.min.js"></script>
<script src="<?php echo base_url('custmerthem/js/'); ?>main.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>




<script>
$(document).on('click', '.catproserch', function() {

    //    $("#sel2").html('');
    var user_id = $(this).attr("data-id");
    // alert(user_id);
    $.ajax({
        url: "<?php echo base_url();?>User/fetch_catvice_product",
        type: "post",
        data: {
            'user_id': user_id
        },
        dataType: "json",
        success: function(data) {
            // console.log(data);
            $('#avilablepro').html('');

            $.each(data, function(key, val) {

                for (let i = 0; i < val.length; i++) {
                    let pro_id = val[i].id;
                    let pro_cat = val[i].product_category_id;
                    let pro_main = val[i].product_id;
                    let pro_img = val[i].product_img;
                    let pro_name = val[i].product_name;
                    let pro_price = val[i].product_price;
                    let pro_qty = val[i].product_qty;
                    let pro_status = val[i].statusp;

                   
                    // console.log(pro_id);
                    $('#avilablepro').append('<div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat"><div class="featured__item"><div class="featured__item__pic " style=" background-repeat: no-repeat; background-image: url(http://localhost/collegeproject/site/CodeIgniter-3.1.13/assets/images/'+pro_img+')" ><ul class="featured__item__pic__hover"> <li><a href="#"><i class="fa fa-heart"></i></a></li> <li><a href="#"><i class="fa fa-retweet"></i></a></li> <li> <a> <i data-id="'+pro_id+'" class="fa fa-shopping-cart addcart"></i> </a> </li> </ul> </div><div class="featured__item__text"><h6><a href="#">Crab Pool Security</a></h6> <h5>$30.00</h5></div> </div> </div>');
                }
            })






        }
    })
});



$(document).on('click', '.addcart', function() {

    var user_id = $(this).attr("data-id");
alert(user_id);
$.ajax({
        url: "<?php echo base_url();?>User/cart",
        type: "post",
        data: {
            'user_id': user_id
        },
        dataType: "",
        success: function(data) {
            console.log(data);
            alert(data);
            // $('#avilablepro').html('');

        }


});


});




</script>

</body>

</html>