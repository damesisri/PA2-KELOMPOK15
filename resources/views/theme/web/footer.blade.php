 <!--Start Footer-->
 <footer class="footer" id="footer">
     <div class="container">

         <div class="row">
             <div class="col-md-12">
                 <div class="main-title">
                     <span>Short Info</span>
                     <h1>Get in touch</h1>
                 </div>
             </div>
         </div>

         <div class="get-touch">
             <div class="row">

                 <div class="col-md-4">
                     <div class="contact-us">
                         <h4>Contact Us</h4>
                         <div class="detail">
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Aenean ac.</p>
                             <ul>
                                 <li class="phone"><i class="icon-telephone"></i> <span>+123 55 33 444 888</span></li>
                                 <li class="email"><i class="icon-email-1"></i> <span>Help@pearl.com</span></li>
                                 <li class="location"><i class="icon-home"></i> <span>329 Queensberry Street, North Me
                                         bourne, Australia.</span></li>
                             </ul>
                         </div>
                     </div>
                 </div>

                 <div class="col-md-4">
                     <div class="open-hours">
                         <h4>Opening Hour</h4>
                         <div class="detail">
                             <ul>
                                 <li><span class="day">Monday</span> <span class="time">09 am - 10 pm</span></li>
                                 <li><span class="day">Tuesday</span> <span class="time">09 am - 10 pm</span></li>
                                 <li><span class="day">Wednesday</span> <span class="time">09 am - 10 pm</span>
                                 </li>
                                 <li><span class="day">Thursday</span> <span class="time">09 am - 10 pm</span></li>
                                 <li><span class="day">Friday</span> <span class="time">11 am - 08 pm</span></li>
                                 <li><span class="day">Saturday</span> <span class="time">10 am - 11 pm</span></li>
                                 <li><span class="day">Sunday</span> <span class="time">Closed</span></li>
                             </ul>
                         </div>
                     </div>
                 </div>

                 <div class="col-md-4">
                     <div class="instagram">
                         <h4>Instagram</h4>
                         <div class="detail">
                             <div class="col-md-4"><a href="#."><img
                                         src="{{ asset('assets-user/images/instagram-img1.jpg') }}" alt=""></a>
                             </div>
                             <div class="col-md-4"><a href="#."><img
                                         src="{{ asset('assets-user/images/instagram-img2.jpg') }}" alt=""></a>
                             </div>
                             <div class="col-md-4"><a href="#."><img
                                         src="{{ asset('assets-user/images/instagram-img3.jpg') }}" alt=""></a>
                             </div>
                             <div class="col-md-4"><a href="#."><img
                                         src="{{ asset('assets-user/images/instagram-img4.jpg') }}" alt=""></a>
                             </div>
                             <div class="col-md-4"><a href="#."><img
                                         src="{{ asset('assets-user/images/instagram-img5.jpg') }}" alt=""></a>
                             </div>
                             <div class="col-md-4"><a href="#."><img
                                         src="{{ asset('assets-user/images/instagram-img6.jpg') }}" alt=""></a>
                             </div>
                         </div>
                     </div>
                 </div>


             </div>
         </div>



         <div class="about-pearl">

             <div class="row">

                 <div class="col-md-12">
                     <div class="about-detail">
                         <h5>About Pearl</h5>
                         <p>PEARL is an Lorem ipsum porta placerat rutrum aliquet platea accumsan, molestie eros aliquet
                             adipiscing egestas ultrices, leo convallis dolor nisl integer potenti fringilla aenean
                             condimentum ipsum maecenas aliquet consectetur.</p>
                     </div>
                 </div>

                 <div class="col-md-6">
                     <div class="follow-us">
                         <h5>Follow Along</h5>
                         <ul>
                             <li><a href="#."><i class="icon-facebook-1"></i></a></li>
                             <li><a href="#."><i class="icon-twitter-1"></i></a></li>
                             <li><a href="#."><i class="icon-google"></i></a></li>
                             <li><a href="#."><i class="icon-pinterest-p"></i></a></li>
                             <li><a href="#."><i class="icon-instagram"></i></a></li>
                         </ul>
                     </div>
                 </div>


                 <div class="col-md-6">
                     <div class="newsletter">
                         <h5>Newsletter</h5>

                         <div class="field">
                             <p id="nws_success_msg" class="success_msg" style="display:none">Thank You for subscribing.
                             </p>
                             <form name="newsletter_form" id="newsletter_form" method="post" onSubmit="return false">
                                 <input name="nws_email_address" id="nws_email_address" type="text"
                                     onKeyPress="remove_newsletter_errors();"
                                     onblur="if(this.value == '') { this.value='Enter your e-mail address'}"
                                     onfocus="if (this.value == 'Enter your e-mail address') {this.value=''}"
                                     value="Enter your e-mail address">
                                 <a href="#." onClick="validateNewsletter();"><i class="icon-icons208"></i></a>
                             </form>
                         </div>

                     </div>
                 </div>


             </div>

         </div>

     </div>



     <div class="copyrights">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <span>Copyright © 2016 Pearl Hotel. All rights reserved. by <a
                             href="#.">Brighthemes</a></span>
                     <ul>
                         <li><a href="#.">Permissions and Copyrights</a></li>
                         <li><span class="divid">-</span></li>
                         <li><a href="#.">Contact Us</a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>


 </footer>
 <!--End Footer-->
