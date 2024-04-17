@extends('platform.layout')
@section('content')
<style>
    .section-search {
position: relative !important;
overflow: hidden !important;
}

#bg-video {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
object-fit: cover;
z-index: 999;
}
</style>
<section style="z-index: 9;
display: flex;
justify-content: center;
align-items: center;" class="section section-search">
    <div style="position:absolute;z-index:999;" class="container">
    <div class="banner-wrapper m-auto text-center aos" data-aos="fade-up">
    <div class="banner-header">
    <h1>Search diagnosis tests at <span style="text-shadow:3px 2px 3px white;">Intest Bazar</span></h1>
    <p>Discover the best diagnostic labs & centers, nearest to you.</p>
    </div>
    
    <div class="search-box">
    <form action="">
    <div class="form-group search-info">
    <input type="text" class="form-control" placeholder="Enter here your desired diagnosis test name">
    </div>
    <button type="submit" class="btn btn-primary search-btn"><i><img src="assets/img/search-submit.png" alt></i> <span>Search</span></button>
    </form>
    </div>
    
    </div>
    </div>
    </section>


<section class="section how-it-works">
<div class="container">
<div class="section-header text-center aos" data-aos="fade-up">
<span>Intest bazar Flow</span>
<h2>How it works ?</h2>
<p class="sub-title">Are you looking to buy online diagnosis test as per your choice ? Now it's very simple, Sign up with Intest bazar</p>
</div>
<div class="row">
<div class="col-12 col-md-6 col-lg-4">
<div class="feature-box text-center aos" data-aos="fade-up">
<div class="feature-header">
<div class="feature-icon">
<span class="circle"></span>
<i><img src="assets/img/icon-1.png" alt></i>
</div>
<div class="feature-cont">
<div class="feature-text">Sign up and buy</div>
</div>
</div>
<p class="mb-0">Singup with us, and book test from available option or search from above search bar and do payment, now your test is booked</p>
</div>
</div>
<div class="col-12 col-md-6 col-lg-4">
<div class="feature-box text-center aos" data-aos="fade-up">
<div class="feature-header">
<div class="feature-icon">
<span class="circle"></span>
<i><img src="assets/img/icon-2.png" alt></i>
</div>
<div class="feature-cont">
<div class="feature-text">Sample collection</div>
</div>
</div>
<p class="mb-0">We collect the samples and feed the customer details and send it to diagnostic labs with the for proceeding the medical test process</p>
</div>
</div>
<div class="col-12 col-md-6 col-lg-4">
<div class="feature-box text-center aos" data-aos="fade-up">
<div class="feature-header">
<div class="feature-icon">
<span class="circle"></span>
<i><img src="assets/img/icon-3.png" alt></i>
</div>
<div class="feature-cont">
<div class="feature-text">Report</div>
</div>
</div>
<p class="mb-0">Get the report and updates automatically on the email id you registered or download it from your dashboard</p>
</div>
</div>
</div>
</div>
</section>


<section class="most-popular most-popular-five">
    <div class="container">
    <div class="section-header section-head-left aos " data-aos="fade-up">
    <h2>Most buyed tests</h2>
    <p class="sub-title">They are mostly buyed tests at Intest Bazar</p>
    </div>
    <div class="popular-categories aos " data-aos="fade-up">
    <div class="row">
    <div class="col-lg-4 col-md-6">
    <a  >
    <div class="sub-categories d-flex align-items-center">
    <div class="categories-img">
    <img style="width:90%;height:90%;" src="assets/img/home/CBC.jpg" alt>
    </div>
    <div class="categories-text ">
    <h4>CBC</h4>
    <span>Over <b>5 options</b> Available</span>
    </div>
    </div>
    </a>
    </div>
    <div class="col-lg-4 col-md-6">
    <a  >
    <div class="sub-categories d-flex align-items-center">
    <div class="categories-img">
    <img style="width:90%;height:90%;" src="assets/img/home/CT.jpg" alt>
    </div>
    <div class="categories-text ">
    <h4>CT scan</h4>
        <span>Over <b>8 options</b> Available</span>
    </div>
    </div>
    </a>
    </div>
    <div class="col-lg-4 col-md-6">
    <a  >
    <div class="sub-categories d-flex align-items-center">
    <div class="categories-img">
    <img style="width:90%;height:90%;" src="assets/img/home/ultrasound.jpg" alt>
    </div>
    <div class="categories-text ">
    <h4>Ultrasound</h4>
        <span>Over <b>4 options</b> Available</span>
    </div>
    </div>
    </a>
    </div>
    <div class="col-lg-4 col-md-6">
    <a  >
    <div class="sub-categories d-flex align-items-center">
    <div class="categories-img">
    <img style="width:90%;height:90%;" src="assets/img/home/urinalysis.jpg" alt>
    </div>
    <div class="categories-text ">
    <h4>Urinalysis</h4>
        <span>Over <b>5 options</b> Available</span>
    </div>
    </div>
    </a>
    </div>
    <div class="col-lg-4 col-md-6">
    <a  >
    <div class="sub-categories d-flex align-items-center">
    <div class="categories-img">
    <img style="width:90%;height:90%;" src="assets/img/home/ECG.jpg" alt>
    </div>
    <div class="categories-text ">
    <h4>ECG</h4>
        <span>Over <b>2 options</b> Available</span>
    </div>
    </div>
    </a>
    </div>
    <div class="col-lg-4 col-md-6">
    <a  >
    <div class="sub-categories d-flex align-items-center">
    <div class="categories-img">
    <img style="width:90%;height:90%;" src="assets/img/home/MRI.jpg" alt>
    </div>
    <div class="categories-text ">
    <h4>MRI</h4>
        <span>Over <b>6 options</b> Available</span>
    </div>
    </div>
    </a>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="most-popular course-categories-four">
        <div class="container">
        {{-- <div class="side-four">
        <img src="assets/img/img-2.png" alt>
        </div> --}}
        <div class="section-header h-four text-center aos " data-aos="fade-up">
        <span>More tests</span>
        <h2>Buy here as per your requirement</h2>
        <p class="sub-title">Empowering Healthcare, One Test at a Time. Discover Convenience, Confidence, and Care with Intest Bazar.</p>
        </div>
        <div class="popular-categories aos " data-aos="fade-up">
        <div class="row">
        <div class="col-lg-3 col-md-4">
        <a  >
        <div class="sub-categories bg-design d-flex align-items-center justify-content-center">
        <div class="sub-categories-group">
        <div class="categories-img ">
        <img style="width:12rem;height:8rem;border-radius:6px;" src="assets/img/home/other/bonedensity.jpg" alt>
        </div>
        <div class="categories-text text-center">
        <h4>Bone Density Test</h4>
        <p class="course-count">1 option Available</p>
        </div>
        </div>
        </div>
        </a>
        </div>
        <div class="col-lg-3 col-md-4">
        <a  >
        <div class="sub-categories bg-development d-flex align-items-center justify-content-center">
        <div class="sub-categories-group">
        <div class="categories-img ">
        <img style="width:12rem;height:8rem;border-radius:6px;" src="assets/img/home/other/lipidprofile.webp" alt>
        </div>
        <div class="categories-text text-center">
        <h4>Lipid Profile</h4>
        <p class="course-count">Over 4 options Available</p>
        </div>
        </div>
        </div>
        </a>
        </div>
        <div class="col-lg-3 col-md-4">
        <a  >
        <div class="sub-categories bg-software d-flex align-items-center justify-content-center">
        <div class="sub-categories-group">
        <div class="categories-img ">
        <img style="width:12rem;height:8rem;border-radius:6px;" src="assets/img/home/other/mammography.png" alt>
        </div>
        <div class="categories-text text-center">
        <h4>Mammography</h4>
        <p class="course-count">Over 2 options Available</p>
        </div>
        </div>
        </div>
        </a>
        </div>
        <div class="col-lg-3 col-md-4">
        <a  >
        <div class="sub-categories bg-business d-flex align-items-center justify-content-center">
        <div class="sub-categories-group">
        <div class="categories-img ">
        <img style="width:12rem;height:8rem;border-radius:6px;" src="assets/img/home/other/thyroid.jpg" alt>
        </div>
        <div class="categories-text text-center">
        <h4>Thyroid Function Test</h4>
        <p class="course-count">Over 3 options Available</p>
        </div>
        </div>
        </div>
        </a>
        </div>
       
        </div>
        </div>
        {{-- <div class="explore-more text-center aos " data-aos="fade-up">
        <a   class="btn bg-explore">Show All Categories</a>
        </div> --}}
        </div>
        </section>

        <section class="section featured-course-four">
            <div class="container">
            <div class="side-four-right">
            <img src="assets/img/img-3.png" alt>
            </div>
            <div class="featured-course-new aos " data-aos="fade-up">
            <div class="row">
            
                
                <div class="col-lg-4 col-md-6">
                    <div class="featured-course-face">
                    <div class="featured-course-design">
                    <div class="course-info d-flex align-items-center">
                    <div class="course-bg-left">
                    <img src="assets/img/course-bg-1.png" alt>
                    </div>
                    <div class="course-bg-right">
                    <img src="assets/img/course-bg-2.png" alt>
                    </div>
                    <div class="rating rating-star">
                    <span class="d-inline-block average-rating rate-point ">New<span class="rate-star-point"></span></span>
                    </div>
                    </div>
                    <div class="featured-course-four-head text-center">
                    <h2>
                    <a  >Unlocking Insights <br> for Optimal Health  </a>
                    </h2>
                    </div>
                    <div class="view-student">
                    <ul class="view-student-four justify-content-center">
                    <li>Discovering Answers, Inspiring Confidence: Your Journey to Wellness Begins Now</li>
                    </ul>
                    </div>
                    </div>
                    
                    </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="featured-course-face">
                        <div class="featured-course-design">
                        <div class="course-info d-flex align-items-center">
                        <div class="course-bg-left">
                        <img src="assets/img/course-bg-1.png" alt>
                        </div>
                        <div style="opacity: 1%" class="rating rating-star">
                            <span class="d-inline-block average-rating rate-point">New<span class="rate-star-point"></span></span>
                            </div>
                        <div class="course-bg-right">
                        <img src="assets/img/course-bg-2.png" alt>
                        </div>
                        </div>
                        <div class="featured-course-four-head text-center">
                        <h2>
                        <a  >Revolutionizing <br> Healthcare</a>
                        </h2>
                        </div>
                        <div class="view-student">
                        <ul class="view-student-four justify-content-center">
                        <li>Empowering Patients with Knowledge, Efficiency, and Peace of Mind</li>
                        </ul>
                        </div>
                        </div>
                        
                        </div>
                        </div>

            <div class="col-lg-4 col-md-6">
            <div class="featured-course-face">
            <div class="featured-course-design">
            <div class="course-info d-flex align-items-center">
            <div class="course-bg-left">
            <img src="assets/img/course-bg-1.png" alt>
            </div>
            <div class="course-bg-right">
            <img src="assets/img/course-bg-2.png" alt>
            </div>
            <div class="rating rating-star">
            <span class="d-inline-block average-rating rate-point ">New<span class="rate-star-point"></span></span>
            </div>
            </div>
            <div class="featured-course-four-head text-center">
            <h2>
            <a  >Enhancing <br> Health Outcomes  </a>
            </h2>
            </div>
            <div class="view-student">
            <ul class="view-student-four justify-content-center">
            <li>Where technology Meets Compassion: Transforming Healthcare, One Test at a Time</li>
            </ul>
            </div>
            </div>
            
            </div>
            </div>

            </div>
            </section>
            </div>

            <section class="student-say-about testimonial-section">
                <div class="container">
                <div class="section-header section-head-one text-center about-space aos " data-aos="fade-up">
                <h2>Why Intest ?</h2>
                <p class="sub-title">Choose Intest Bazar for Comprehensive diagnostic tests solutions.</p>
                </div>
                <div class="col-lg-12 col-md-12 text-center d-flex justify-content-center">
                <div id="myCarousel" class="carousel slide student-slide-testimoni aos " data-aos="fade-up" data-bs-interval="5000" data-bs-ride="carousel">
                <div class="student-bg-fix">
                <img style="height:26rem" src="assets/img/testi-bg-3.png" alt>
                </div>
                <div class="carousel-inner">

                <div class="carousel-item testi-item say-us active" data-color="#fb9c9a" data-img="img/testimonial/1.html">
                <div class="student-group">
                <div class="student-about-img">
                <img src="assets/img/home/whytochoose/compare.png" alt>
                </div>
                <h3 style="color: var(--dark-color);">Compare</h3>
                <span style="color: var(--light-color);">Different quotes</span>
                <p class="say-text">Compare different diagnostic tests quotes on-the-go through the website. Choose the best suitable quote for your needs. Get your test booked instantly</p>
                </div>
                </div>

                <div class="carousel-item testi-item say-us" data-color="#fb9c9a" data-img="img/testimonial/1.html">
                    <div class="student-group">
                    <div class="student-about-img">
                    <img src="assets/img/home/whytochoose/claim.png" alt>
                    </div>
                    <h3 style="color: var(--dark-color);">Claim</h3>
                    <span style="color: var(--light-color);">Assistance</span>
                    <p class="say-text">We believe in standing by your side when you need us. And so, you are backed by the highly motivated claims support team to help you at every step in filing claims.</p>
                    </div>
                    </div>

                    <div class="carousel-item testi-item say-us" data-color="#fb9c9a" data-img="img/testimonial/1.html">
                        <div class="student-group">
                        <div class="student-about-img">
                        <img src="assets/img/home/whytochoose/transparency.png" alt>
                        </div>
                        <h3 style="color: var(--dark-color);">Complete</h3>
                        <span style="color: var(--light-color);">Transparency</span>
                        <p class="say-text">Oops, but no more oops! No hidden cost. We ensure that you don’t pay anything extra. Plus, at Intest bazar.</p>
                        </div>
                        </div>


                        <div class="carousel-item testi-item say-us" data-color="#fb9c9a" data-img="img/testimonial/1.html">
                            <div class="student-group">
                            <div class="student-about-img">
                            <img src="assets/img/home/whytochoose/expert.png" alt>
                            </div>
                            <h3 style="color: var(--dark-color);">Expert's</h3>
                            <span style="color: var(--light-color);">Advice</span>
                            <p class="say-text">Have doubts? Got queries? Don’t worry. Ask our experts’ team for any diagnostic test related query and get unbiased advice on-the-go. We’re always here to help you. </p>
                            </div>
                            </div>

                            <div class="carousel-item testi-item say-us" data-color="#fb9c9a" data-img="img/testimonial/1.html">
                                <div class="student-group">
                                <div class="student-about-img">
                                <img src="assets/img/home/whytochoose/data.png" alt>
                                </div>
                                <h3 style="color: var(--dark-color);">Data</h3>
                                <span style="color: var(--light-color);">Security</span>
                                <p class="say-text">Is your information safe and secure? Yes, from your personal information to payment, everything is secure. We value your privacy. And, we don’t share or sell your information. </p>
                                </div>
                                </div>

                </div>
                <button class="carousel-control-prev student-testimonial-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next student-testimonial-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <span class="visually-hidden">Next</span>
                </button>
                </div>
                </div>
                </div>
                </section>


                <section style="box-shadow: 0 20px 10px -20px var(--lighter-color) inset;background-color:#ffffff;" class="section statistics-section-eight">
                    <div class="container">
                    <div class="row">
                    <div class="col-12 col-md-4 aos" data-aos="fade-up">
                    <div class="statistics-list-eight">
                    <div class="statistics-icon-eight">
                    <i class="fas fa-street-view"></i>
                    </div>
                    <div class="statistics-content-eight">
                    <span>5000+</span>
                    <h3>Happy Clients</h3>
                    </div>
                    </div>
                    </div>
                    <div class="col-12 col-md-4 aos" data-aos="fade-up">
                    <div class="statistics-list-eight">
                    <div class="statistics-icon-eight">
                        <i class="fa-solid fa-vials"></i>
                    </div>
                    <div class="statistics-content-eight">
                    <span>30+</span>
                    <h3>Diagnostic labs</h3>
                    </div>
                    </div>
                    </div>
                    <div class="col-12 col-md-4 aos" data-aos="fade-up">
                    <div class="statistics-list-eight">
                    <div class="statistics-icon-eight">
                    <i class="fas fa-user-check"></i>
                    </div>
                    <div class="statistics-content-eight">
                    <span>98%</span>
                    <h3>Work Satisfaction</h3>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </section>

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