<?php
$tpTitle="Contact Our App Development Team | BlueLine Labs";
$pgDesc="Need to build a mobile app? Want a quote for your next project? Get in touch, and we'd love to talk further - 312.757.2024 // hello@bluelinelabs.com";
// $pgKeywords="";
?>

<?php include('header.php'); ?>

  <img class="bg-contact hide-below-md" src="images/bg-train-close-blue.jpg" alt="BlueLine Train">
  <img class="bg-contact-sm hide-above-md" src="images/bg-train-close-blue-sm.jpg" alt="BlueLine Train">

  <div class="padding-out">  

    <div class="row no-margin no-padding">  
      <div class="col-lg-12 no-margin no-padding">        
        <h1 class="m-b-lg text-center text-white" style="padding-top: 40px;">Get in Touch</h1>          
        <p class="w-70 text-white text-center m-t-md m-b-sm"><strong class="text-md-alt-2">We'd love to talk about your project, or answer any questions you might have. Drop us a line, send us an email, or fill out our form below.</p>
      </div>
      <div class="spacer-lg"></div>
      <div class="contact-info-block">
        <div class="col-md-6 text-white text-center">
          <i class="icon mdi-hardware-phone-iphone icon-phone-contact"></i>
          <a class="tel font-x-bold text-xl hover-fade" href="tel:312.757.2024"><span class="light-italic">312.757.2024</span></a> 
        </div>   
        <div class="col-md-6 text-white text-center">
          <i class="icon mdi-content-mail icon-mail-contact"></i>
          <a class="font-x-bold text-xl hover-fade" href="mailto:hello@bluelinelabs.com"><span class="light-italic">hello@bluelinelabs.com</span></a>
        </div>
      </div><!-- .contact-info-block -->
    </div><!-- .row --> 

    <div class="row no-padding no-margin">
      <div class="col-lg-12 no-padding no-margin">
        <div class="contact-form-wrap">          
          <div class="contact-form-header">Contact Our Team</div>
          <form class="jotform-form contact-form" action="//submit.jotform.us/submit/52161009261141/" method="post" name="form_52161009261141" id="52161009261141" accept-charset="utf-8">
            <input type="hidden" name="formID" value="52161009261141" />
            <div class="form-all">
              <ul class="form-section page-section">
                <li class="form-line" data-type="control_textbox" id="id_3">
                  <!--<label class="form-label form-label-top" id="label_3" for="input_3"> Your Name </label>-->
                  <div id="cid_3" class="form-input-wide jf-required">
                    <input type="text" class=" form-textbox" data-type="input-textbox" id="input_3" name="q3_yourName" size="20" value="" placeholder="Name"/>
                  </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_4">
                  <!--<label class="form-label form-label-top" id="label_4" for="input_4"> Your Email </label>-->
                  <div id="cid_4" class="form-input-wide jf-required">
                    <input type="text" class=" form-textbox" data-type="input-textbox" id="input_4" name="q4_yourEmail" size="20" value="" placeholder="Email"/>
                  </div>
                </li>
                <li class="form-line" data-type="control_dropdown" id="id_5">
                  <!--<label class="form-label form-label-top" id="label_5" for="input_5"> Reason for Contacting Us </label>-->
                  <div id="cid_5" class="form-input-wide jf-required">
                    <select class="form-dropdown" style="width:150px" id="input_5" name="q5_reasonFor" onchange="this.className=this.options[this.selectedIndex].className" class="darkText">
                      <option selected="selected" value="Reason for contacting us">Reason for Contacting Us</option>
                      <option class="darkText" value="Discuss a project"> Discuss a project </option>
                      <option class="darkText" value="Request information"> Request information </option>
                      <option class="darkText" value="Apply for a job"> Apply for a job </option>
                      <option class="darkText" value="Other"> Other </option>
                    </select>
                  </div>
                </li>
                <li class="form-line" data-type="control_textarea" id="id_6">
                  <!--<label class="form-label form-label-top" id="label_6" for="input_6"> Your Message </label>-->
                  <div id="cid_6" class="form-input-wide jf-required">
                    <textarea id="input_6" class="form-textarea" name="q6_yourMessage" cols="40" rows="6" placeholder="Your Message"></textarea>
                  </div>
                </li>
                <li class="form-line" data-type="control_button" id="id_2">
                  <div id="cid_2" class="form-input-wide">
                    <div style="text-align:center" class="form-buttons-wrapper">
                      <button id="input_2" type="submit" class="form-submit-button">
                        Contact Us
                      </button>
                    </div>
                  </div>
                </li>
                <li style="display:none">
                  Should be Empty:
                  <input type="text" name="website" value="" />
                </li>
              </ul>
            </div>
            <input type="hidden" id="simple_spc" name="simple_spc" value="52161009261141" />
            <script type="text/javascript">
            document.getElementById("si" + "mple" + "_spc").value = "52161009261141-52161009261141";
            </script>
          </form>
        </div><!-- .contact-form-wrap -->
        <!-- End Contact Form -->
      </div>
    </div>     
  
  </div><!-- .padding-out -->

<!-- Footer -->
<?php include('footer.php'); ?>