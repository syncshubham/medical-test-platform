@extends('platform.layout')
@section('content')
<style>
  #terms-and-conditions {
    background-color:#f5f3f8;box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0 auto;
    padding: 30px;
}

#terms-and-conditions h2 {
  font-family: bebas neue;
  font-size: 46px;
  text-align: center;
  color: var(--dark-color);
  margin: 0;
  padding: 0 0 6px 0;
  border-bottom: 1px solid var(--lighter-color);
}
li{
  font-family: open sans;
  font-size: 13px;
  letter-spacing: 1px;
  color: rgb(44,48,52);
  margin: 0;
  padding: 10px 0 0 0;
}
li span{
  font-family: bebas neue;
  font-size: 26px;
  line-height: 20px;
  text-align: left;
  width: auto;
  color: var(--dark-color);;
  margin: 0;
  padding: 20px 0 0 0;
    position: relative;
}

li span:after {
    content: "";
    position: absolute;
    bottom: -3px;
    left: 0;
    width: 20%; /* Adjust this value as needed */
    height: 4px;
    background-color:var(--lighter-color); /* Change the color as needed */
}

#terms-and-conditions ol {
    list-style-type: decimal;
    padding-left: 20px;
}

ul{
  padding-left:0 !important; 
}

#terms-and-conditions li {
    margin-bottom: 15px;
}

</style>
<div id="terms-and-conditions">
  <h2>Terms and Conditions</h2>
<br>
  <ul style="list-style-type: none;">
      <li><span class="tempspan">Acceptance of Terms:</span> By using the INTEST BAZAR Platform, you agree to be bound by these Terms and Conditions, our Privacy Policy, and any additional terms and conditions that may apply to specific services offered on the Platform.</li>

      <li><span class="tempspan">User Registration:</span> To access certain features of the Platform, you may be required to register and create an account. You agree to provide accurate and complete information during the registration process and to keep your account information updated.</li>

      <li><span class="tempspan">Medical Test Bookings:</span> The Platform facilitates the booking of medical tests with various diagnostic labs. You agree to provide accurate information when booking tests and to follow the instructions provided by the diagnostic labs.</li>

      <li><span class="tempspan">Payment Terms:</span> Payment for medical test bookings must be made at the time of booking. We accept various payment methods, including credit cards and online payment gateways. All payments are subject to the terms and conditions of our payment processing partners.</li>

      <li>
        <span class="tempspan">Cancellation and Refunds:</span> 
        By registering on the platform, you agree to review and accept the cancellation and refund policies applicable to your bookings, Please ensure you review the policies before making a payment.
    </li>
    

      <li><span class="tempspan">User Conduct:</span> You agree to use the Platform responsibly and not to engage in any unlawful, abusive, or fraudulent activities. You also agree not to interfere with the proper functioning of the Platform or to access the Platform using automated means.</li>

      <li><span class="tempspan">Intellectual Property:</span> All content and materials on the Platform, including logos, trademarks, and copyrighted materials, are the property of INTEST BAZAR PRIVATE LIMITED or its licensors and may not be used without permission.</li>

      <li><span class="tempspan">Limitation of Liability:</span> To the fullest extent permitted by law, INTEST BAZAR PRIVATE LIMITED shall not be liable for any indirect, incidental, special, or consequential damages arising out of or in connection with your use of the Platform or the services provided therein.</li>

      <li><span class="tempspan">Indemnification:</span> You agree to indemnify and hold harmless INTEST BAZAR PRIVATE LIMITED, its affiliates, and their respective officers, directors, employees, and agents from any claims, damages, or losses arising out of your use of the Platform or your violation of these Terms and Conditions.</li>

      <li><span class="tempspan">Governing Law:</span> These Terms and Conditions shall be governed by and construed in accordance with the laws of Government of india. Any disputes arising under these Terms and Conditions shall be subject to the exclusive jurisdiction of the courts of Government of india.</li>

      <li><span class="tempspan">Contact Us:</span> If you have any questions or concerns about these Terms and Conditions, please contact us at Admin@intestbazar.com.</li>
  </ul>
</div>
<section style="box-shadow: 0 20px 10px -20px var(--lighter-color) inset;background-color:#f1ecf8;"  class="new-course new-course-join">
  <div class="container">
  <div class="new-course-background">
  <div style="background-color: rebeccapurple;" class="row">
  <div class="col-lg-7 col-md-6 d-flex align-items-center">
  <div class="every-new-course aos " data-aos="fade-up">
  <div class="new-course-text">
      <h1>Want to get updates <br>from Intest Bazar ?</h1>
  <p class="page-sub-text ">Stay informed and connected with our latest updates and advancements in healthcare by subscribing to Intest Bazar.</p>
  </div>
  <div class="course-mail">
      <form action="#">
      <div class="input-group mb-3 subscribe-form">
      <input type="text" class="form-control course-text-bg" placeholder="Enter your mail">
      <a style="background-color:var(--lighter-color);color:white;font-weight:bold;"  class="btn bg-course-subscribe">
      Subscribe
      </a>
      </div>
      </form>
      </div>
  </div>
  </div>
  <div class="col-lg-5 col-md-6 d-flex align-items-end">
  <div class="new-course-img aos " data-aos="fade-up">
  <img src="assets/img/join-2.png" alt="new course">
  </div>
  </div>
  </div>
  </div>
  </div>
  </section>
@endsection