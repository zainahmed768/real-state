<?php include('inc/header.php'); ?>
<link rel="stylesheet" href="css/contact.css"> 
<section class="inner-banner">
    <div class="container">
        <div class="inner-heading">
            <h2>CONTACT US</h2>
        </div>
    </div>
</section>
<!-- pic and text section  -->
<section class="high-sec  contact-work">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                    <div class="high-img">
                        <figure><img class="img-fluid" src="img/support.png" alt=""></figure>
                    </div>

                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                    <div class="high-para invest-head contacts-head">
                        <h2 class="inner-ser-head  team-inner-head"><span>Let's get in touch</span></h2>
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>-->
                        <div class="contact-form-house">
                        <form action="form.php" method="POST">
                                <div class="form-group">
   
    <input type="text" name="name" class="form-control" id="inlineFormInputName2" aria-describedby="emailHelp" placeholder="Julia William" required>
    <p><?php if(isset($name_error)) echo $name_error; ?></p>
</div>
  <div class="form-group">
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="you@example.com" required >
    <p><?php if(isset($email_error)) echo $email_error; ?></p>
  </div>
  <div class="form-group">
    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" placeholder="Type Your Message" rows="3" required></textarea >
    <p><?php if(isset($message_error)) echo $message_error; ?></p>
  </div>

  <p>By submitting this form you agree to our terms and conditions and our Privacy Policy which explains how we may collect, use and disclose your</p>
  <button type="submit" name="submit" class="btn btn-primary submits">Submit</button>
</form>
                        </div>

                        <!-- <a href="#" class="btn btn-primary lp ">CONTACT US</a><br> -->
                    </div>

                </div>
            </div>
        </div>
    </section>

<!-- end of pic and text section  -->

<!-- need section  -->
<section class="need-sec text-center">
    <div class="container">
    <div class="property-head need-head">
                    <h2>need Help? <br>
                     Contact us </h2>
                        <span class="hr-r"></span>
                </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                  <div class="need-stuff">
                      <img class="img-fluid" src="img/message.png" alt="">
                      <h3>Email us</h3>
                      <p>Email us for general queries, including marketing and <br> partnership opportunities.</p>
                      <a href="mailto:info@Therealestate.co.uk">info@Therealestate.co.uk</a>
                  </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                  <div class="need-stuff">
                      <img class="img-fluid" src="img/phone.png" alt="">
                      <h3>Call us</h3>
                      <p>Call us to speak to a member of our team. We are always <br> happy to help.</p>
                      <a href="tel:012-3456-7890">012-3456-7890</a>
                  </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                  <div class="need-stuff">
                      <img class="img-fluid" src="img/map.png" alt="">
                      <h3>Find Us</h3>
                      <p>79 College Road,Harrow, <br> HA1 1BD</p>
                      <a href="#">Support Center</a>
                  </div>
            </div>
        </div>
    </div>
</section>
<?php include('inc/footer.php'); ?>