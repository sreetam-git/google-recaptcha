<?php include 'includes/header.php'; ?>
<style>
/*  .captcha-box{*/
/*    position: relative;*/
/*    overflow: hidden;*/
/*    margin-bottom: 0px;*/
/*    width:300px;*/
/*    margin-top: 0px;*/
    
/*}*/

/*.captcha-box #captcha{*/
/*    position: relative;*/
/*    padding: 0px 0px 0px 9px;*/
/*    background:#fff;*/
    
/*}*/

/*.cls_refresh{*/
/*    position: absolute;*/
/*    right: 0px;*/
/*    top: -10px;*/
/*    margin-right: -16px;*/
/*    color: #5f5f5f;*/
/*    text-align: center;*/
/*    line-height: 70px;*/
/*    font-size: 20px;*/
/*    width: 60px;*/
/*    height: 70px;*/
    /* background: #000; */
/*    cursor: pointer;*/
/*}*/

  .captcha-box{
    position: relative;
    overflow: hidden;
    margin-bottom: 0px;
    width:300px;
    margin-top: 0px;
}
</style>


<!--Breadcrumb Start -->
<section class="breadcrumb" style="background: #00162B url(<?=site_url()?>assets/images/contact-us.jpg) center right;">
	<div class="container">
		<h1>Contact Us</h1>
	</div>
</section>
<!--Breadcrumb End -->
<section class="section-padding appic-forms">
	<div class="container">
		<h5>Fill out the form below and a team member will contact you shortly.</h5>
		<div class="row justify-content-center">
			<div class="col-lg-5">
			<form id="contact_form" name="contact_form" enctype="multipart/form-data" method="post" action="<?=site_url('contactuscontroller/insert')?>">
			<?= csrf_field(); ?> 
					<div class="form-floating">
					  <input type="text" class="form-control" id="name" name="name" placeholder="First Name" required>
					  <label for="floatingInput">First Name</label>
					</div>

					<div class="form-floating">
					  <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
					  <label for="floatingInput">Last Name</label>
					</div>

					<div class="form-floating">
					  <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
					  <label for="floatingInput">Email Address</label>
					</div>
                    <div class="input-group mb-3">
                          <span class="input-group-text">+1</span>
					<div class="form-floating">
					  <input type="tel" class="form-control" id="phone" name="phone" onkeypress="javascript: return isNumber(event)" placeholder="" required>
					   <label for="floatingInput">Phone Number</label>
					</div>
					</div>
					<!--<input type="hidden" name="country_code" value="+91">-->
					<div class="form-floating">
					  <select class="form-select" id="subject" name="subject" required>
					    <option value="" disabled>Please Select Which Technology You Are Inquiring About</option>
					    <option value="Talent Acquisition">Talent Acquisition</option>
					    <option value="Elvis Educational ERP">Elvis Educational ERP</option>
					    <option value="DCube Data Sciences">DCube Data Sciences</option>
					    <option value="KonaAI Fraud Detection">KonaAI Fraud Detection</option>
					    <option value="IT Managed Services">IT Managed Services</option>
					    <option value="Web Design">Web Design</option>
					    <option value="Mobile App">Mobile App</option>
					    <option value="Digital Marketing">Digital Marketing</option>
					  </select>
					  <label for="floatingSelect"></label>
					</div>

					<div class="form-floating">
					  <textarea class="form-control" placeholder="Message" id="message" name="message" style="height: 100px" required></textarea>
					  <label for="floatingTextarea2">Message</label>

					</div>
				

                    <div class="g-recaptcha" data-sitekey="6LewMW8qAAAAAGlvuhw3Nn-qfcB5o3NdTYgxZeKW"></div>
					<span id="captcha-error" style="color:red;font-size:14px;"></span>
					 

					<div class="text-center mt-3">
						<button type="submit" value="submit" id="validate_contactus" class="btn btn-light-blue pe-5 ps-5">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script type="text/javascript">
    function isNumber(evt) {
       var iKeyCode = (evt.which) ? evt.which : evt.keyCode
       if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
           return false;

       return true;
   }
   
   $('#contact_form').submit(function (e) {
    e.preventDefault();
    //do something
    $('.error').remove();
    var errr = 0;
    if (grecaptcha.getResponse() === "") 
    {
            $('#captcha-error').text("Please complete the reCAPTCHA.");
            return false;
    }

        // Submit the form if reCAPTCHA is completed
        this.submit();
    				
    });


        </script>
<?php include 'includes/footer.php'; ?>
