<!-- Footer -->
<footer class="footer ">
    <div class="container">
        <div class="footer-head">
            <figure> <img class="img-fluid" src="img/realestate.PNG" alt=""></figure>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                <div class="footer-icons">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 widgets1 ">
                <div class="nav-footer">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="team.php">Our team</a></li>
                        <li><a href="services.php">Services</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 widgets2">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Subscribe to our Newsletter</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary footer-btn">Submit</button>
                </form>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 widgets2 widgets22 ">
                <div class="nav-footer">
                    <ul>
                        <li><a href="media.php">Media</a></li>
                        <!--<li><a href="investment.php">Investments</a></li>-->
                        <li><a href="contact.php">Contact US</a></li>
                    </ul>
                </div>
            </div>
            <div class="copy-right">
                <p class="copyright text-center">Copyright © 2021 GSN Immigration. All rights reserved
                <p>
            </div>
        </div>
    </div>
    </div>
</footer>

<script language="JavaScript" src="js/jquery.min.js"></script>
<script language="JavaScript" src="js/popper.js"></script>
<script language="JavaScript" src="js/bootstrap.min.js"></script>
<script language="JavaScript" src="js/main.js"></script>
<script language="JavaScript" src="js/scripts.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>
<!-- Footer -->
<!-- <script>
$(document.body).on('click', '.dropdown-menu li', function(event) {

    var $target = $(event.currentTarget);

    $target.closest('.btn-group')
        .find('[data-bind="label"]').text($target.text())
        .end()
        .children('.dropdown-toggle').dropdown('toggle');

    return false;

});
</script> -->
<script>
$(document).ready(function() {
    $(".dropdown").hover(function() {
        var dropdownMenu = $(this).children(".dropdown-menu");
        if (dropdownMenu.is(":visible")) {
            dropdownMenu.parent().toggleClass("open");
        }
    });
});

$(window).on("scroll", function() {
    if ($(window).scrollTop() > 70) {
        $(".header-blue").addClass("active");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
        $(".header-blue").removeClass("active");
    }
});
// <!-- Over Scroll Header color change -->
$(window).on('load', function() {
    $("#preloader").fadeOut(1000);
});
</script>
<script>
$(document).ready(function() {

    $(".slider-sec").slick({
        arrow: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        responsive: [{
            breakpoint: 1024,
            settings: {

                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        }]

    });

});
// const CurrentLocation = location.href;
// const menuItem = document.querySelectorAll('.nav li a');
// const menuLength = menuItem.length
// for (let i = 0; i < menuLength; i++) {
//     if (menuItem[i].href === CurrentLocation) {
//         menuItem[i].className = "active";
//     }
// }
</script>
</body>

</html>