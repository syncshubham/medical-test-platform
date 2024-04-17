@extends('platform.layout')
@section('content')
<style>
.explore {
  font-size: 16px;
  line-height: 28px;
  color: rgb(102, 102, 102);
  border-top-width: 2px;
  border-right-width: 2px;
  border-bottom-width: 2px;
  border-left-width: 2px;
  border-top-style: solid;
  border-right-style: solid;
  border-bottom-style: solid;
  border-left-style: solid;
  border-top-color: rgb(102, 102, 102);
  border-right-color: rgb(102, 102, 102);
  border-bottom-color: rgb(102, 102, 102);
  border-left-color: rgb(102, 102, 102);
  border-image-source: initial;
  border-image-slice: initial;
  border-image-width: initial;
  border-image-outset: initial;
  border-image-repeat: initial;
  cursor: pointer;
  background-color: white;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
  padding-top: 8px;
  padding-right: 40px;
  padding-bottom: 8px;
  padding-left: 40px;
}

.explore:hover {
  background-color: rgb(82, 21, 91);
  color: white;
}

@media (max-width: 1024px) {
  .explore {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

}


@media (max-width: 500px) {
  .explore {
    padding: 6px 35px 6px 35px;
    font-size: 15px;
  }
}


  /* Google Font CDN Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

.tempcontainer{
  width: 100%;
  background: #fff;
  border-radius: 6px;
  padding: 20px 60px 30px 40px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  background-color: #f1f1f1;
}
.tempcontainer .content{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.tempcontainer .content .left-side{
  width: 25%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
  position: relative;
}
.content .left-side::before{
  content: '';
  position: absolute;
  height: 70%;
  width: 2px;
  right: -15px;
  top: 50%;
  transform: translateY(-50%);
  background: #afafb6;
}
.content .left-side .details{
  margin: 14px;
  text-align: center;
}
.content .left-side .details i{
  font-size: 30px;
  color: rgb(82, 21, 91);
  margin-bottom: 10px;
}
.content .left-side .details .topic{
  font-size: 18px;
  font-weight: 500;
}
.content .left-side .details .text-one,
.content .left-side .details .text-two{
  font-size: 14px;
  color: #727278;
}
.tempcontainer .content .right-side{
  width: 75%;
  margin-left: 75px;
}
.content .right-side .topic-text{
  font-size: 23px;
  font-weight: 600;
  color: rgb(82, 21, 91);
}
.right-side .input-box{
  height: 50px;
  width: 100%;
  margin: 12px 0;
}
.right-side .input-box input,
.right-side .input-box textarea{
  height: 100%;
  box-shadow: 0px 10px 1px rgba(221, 221, 221, 1), 0 10px 20px rgba(204, 204, 204, 1);
  width: 100%;
  border: none;
  outline: none;
  font-size: 16px;
  background: #F0F1F8;
  border-radius: 6px;
  padding: 0 15px;
  resize: none;
}
.right-side .message-box{
  min-height: 110px;
}
.right-side .input-box textarea{
  padding-top: 6px;
}
.right-side .button{
  display: inline-block;
  margin-top: 12px;
}
.right-side .button input[type="button"]{
  color: #fff;
  font-size: 18px;
  outline: none;
  border: none;
  padding: 8px 16px;
  border-radius: 6px;
  background: rgb(82, 21, 91);
  cursor: pointer;
  transition: all 0.3s ease;
}
.button input[type="button"]:hover{
  background: rgb(82, 21, 91);
}

@media (max-width: 950px) {
  .tempcontainer{
    width: 100%;
    padding: 30px 40px 40px 35px ;
  }
  .tempcontainer .content .right-side{
   width: 75%;
   margin-left: 55px;
}
}
@media (max-width: 820px) {
  .tempcontainer{
    margin: 40px 0;
    height: 100%;
  }
  .tempcontainer .content{
    flex-direction: column-reverse;
  }
 .tempcontainer .content .left-side{
   width: 100%;
   flex-direction: row;
   margin-top: 40px;
   justify-content: center;
   flex-wrap: wrap;
 }
 .tempcontainer .content .left-side::before{
   display: none;
 }
 .tempcontainer .content .right-side{
   width: 100%;
   margin-left: 0;
 }
}
</style>
  <div class="tempcontainer">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Muzzafarnagar
            </div>
          <div class="text-two">Uttar pradesh, 251001</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+91 96275 19101</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">Vikas@intestbazar.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>Have questions or need assistance ? Reach out to our dedicated support team</p>
      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
          <textarea name="" id="" cols="30" rows="10" placeholder="Enter your message here"></textarea>
        </div>
        <div class="button">
          <input type="submit" class="explore">
        </div>
      </form>
    </div>
    </div>
  </div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55574.5819843034!2d77.66765773409584!3d29.47519407864267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390c1ba00983523d%3A0xc6a75ba008574871!2sMuzaffarnagar%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1708757666401!5m2!1sen!2sin&maptype=satellite&theme=dark" style="height:25rem;width:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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