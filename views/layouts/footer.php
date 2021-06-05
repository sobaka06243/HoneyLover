<!-- Footer -->
<section id="footer">
    <div class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                <ul class="list-unstyled list-inline social text-center">

                    <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-vk"></i></a></li>
                </ul>
            </div>
            <hr>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                <p>Любитель мёда, эко-лавка</p>
                <p> Социалистический проспект, 128</p>
                <p>+7‒913‒098‒50‒00</p>
            </div>
            <hr>
        </div>
    </div>
</section>
<!-- ./Footer -->
<!-- JS here -->
<script src="/template/js/jquery.js"></script>
<script src="/template/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="/template/js/vendor/jquery-1.12.4.min.js"></script>
<script src="/template/js/popper.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/owl.carousel.min.js"></script>
<script src="/template/js/isotope.pkgd.min.js"></script>
<script src="/template/js/ajax-form.js"></script>
<script src="/template/js/waypoints.min.js"></script>
<script src="/template/js/jquery.counterup.min.js"></script>
<script src="/template/js/imagesloaded.pkgd.min.js"></script>
<script src="/template/js/scrollIt.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/wow.min.js"></script>
<script src="/template/js/nice-select.min.js"></script>
<script src="/template/js/jquery.slicknav.min.js"></script>
<script src="/template/js/jquery.magnific-popup.min.js"></script>
<script src="/template/js/plugins.js"></script>

<!--contact js-->
<script src="/template/js/contact.js"></script>
<script src="/template/js/jquery.ajaxchimp.min.js"></script>
<script src="/template/js/jquery.form.js"></script>
<script src="/template/js/jquery.validate.min.js"></script>
<script src="/template/js/mail-script.js"></script>

<script src="/template/js/main.js"></script>



<!-- slider -->
<script src='/template/js/anime.min.js'></script>
<script src='/template/js/pieces.min.js'></script>
<script src='/template/js/demo.js'></script>



<!-- Categories -->
    <!-- <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script> -->

<!-- <script>
    $(document).ready(function() {
        $(document).on('click', 'delete-product', function ()  {
            var id = $(this).attr("data-id");
            $.post("/cart/deleteAjax/" + id, {}, function(data) {
                $("#cart-products").html(data);
            });
            return false;
        });
    });
</script> -->
<!-- <script>
    $(document).ready(function() {
        $(".delete-product").click(function() {
            var id = $(this).attr("data-id");
            $.post("/cart/deleteAjax/" + id, {"param": "0"}, function(data) {
                $("#cart-count").html(data);
/*                 $("#cart-count").html(data);
 */
            });       
            return false;
        });
    });
</script>  -->


<script>
    $(document).ready(function() {
        $(".add-to-cart").click(function() {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/" + id, {}, function(data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>


</body>

</html>