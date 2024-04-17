@extends('platform.layout')
@section('content')
<style>
  #privacy_heading {
  font-family: bebas neue;
  font-size: 46px;
  text-align: center;
  color: var(--dark-color);
  margin: 0;
  padding: 0 0 6px 0;
  border-bottom: 1px solid var(--lighter-color);
}


.privacy_h2 {
  font-family: bebas neue;
  font-size: 26px;
  line-height: 20px;
  text-align: left;
  width: auto;
  color: var(--dark-color);
  margin: 0;
  padding: 20px 0 0 0;
    position: relative;
}

.privacy_h2:after {
    content: "";
    position: absolute;
    bottom: -7px;
    left: 0;
    width: 5%; /* Adjust this value as needed */
    height: 3px;
    background-color:var(--lighter-color); /* Change the color as needed */
}


.privacy_p {
  font-family: open sans;
  font-size: 13px;
  letter-spacing: 1px;
  color: rgb(44,48,52);
  margin: 0;
  padding: 10px 0 0 0;
}


.subheadings{
  font-weight: bold;
}
103188220
</style>
<div style="padding: 30px;background-color:#f5f3f8;box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;">
  <h1 id="privacy_heading">Cancellation and refund policies</h1>
  <h2 class="privacy_h2">Cancellation Window</h2>
  <p class="privacy_p">
    Refunds and cancellations are generally eligible within a specified window, but this timeframe can vary depending on the diagnostic lab and the specific test booked. Most cancellations are accepted up to 24 hours before your scheduled appointment. However, some labs may offer shorter windows (e.g., 12 hours) or longer windows (e.g., 48 hours) depending on the test's complexity or preparation requirements, the timeframes will be clearly shown at the time of booking.
  </p>
  
  <h2 class="privacy_h2">Non-Refundable Services</h2>
  <p class="privacy_p">
  Some services or tests may be non-refundable, as determined by the policies of the diagnostic lab. Before booking and making payment, users will be alerted if a test is non-refundable.
  </p>
  
  <h2 class="privacy_h2">Refund Conditions</h2>
  <p class="privacy_p">
  Refunds may be issued under the following conditions:
  <ul>
  <li>The refund is made within the specified cancellation window.</li>
  <li>The cancellation is eligible for a refund based on the cancellation and refund policies of the diagnostic lab.</li>
  </ul>
  </p>
  
  <h2 class="privacy_h2">Cancellation Timing</h2>
  <p class="privacy_p">
  Cancellations can be made up until the point where the customer provides their sample for the booked test. Once the sample has been provided, cancellations cannot be processed.
  </p>
  
  <h2 class="privacy_h2">Non-Cancellable Tests</h2>
  <p class="privacy_p">
  Certain tests or services may be labeled as non-cancellable due to their nature or the diagnostic lab's policies. Users will be notified at the time of booking if a test is non-cancellable.
  </p>
  
  <h2 class="privacy_h2">Alert on Non-Cancellable test</h2>
  <p class="privacy_p">
  Prior to booking and payment, users will shown a clear alert if a selected test is non-cancellable. This alert will include information about the non-refundable nature of the test and any applicable terms and conditions.
  </p>
  
  <h2 class="privacy_h2">Exceptions</h2>
  <p class="privacy_p">
  In rare circumstances, exceptions to the cancellation policy may be considered. Users can contact our customer support team to discuss their situation and explore possible solutions.
  </p>
  
  <h2 class="privacy_h2">Communication</h2>
  <p class="privacy_p">
  We strive to communicate our cancellation policy clearly and transparently to our users. If you have any questions or concerns regarding our cancellation policy, please contact our customer support team for assistance.
  </p>
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