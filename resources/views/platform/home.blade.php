@extends('platform.layout')
@section('content')
<style>
    /* .section-search {
position: relative !important;
overflow: hidden !important;
} */

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
    <style>
        .search-results {
    position: absolute;
    top: 100%;
    border-radius: 10px;
    left: 0;
    width: 100%;
    max-height: 300px;
    overflow-y: auto;
    border: 0px solid #ccc;
    border-top: none;
    background-color: #fefefee8;
    box-shadow: 0 0 55px 22px #f1e4f6a8;
    z-index: 1000;
}

.search-results-item {
    border-left: 2px solid #41205a;
    font-family: 'monospace';
    text-align: left !important;
    font-size: 0.8rem;
    padding: 6px;
    padding-left: 10px;
    border-bottom: 1px solid #ccc;
    cursor: pointer;
    color: #3a043f;
}

.search-results-item:hover {
    border-left: 3px solid rgb(191, 157, 191);
    font-weight: bold;
    color: white;
    background-color: #41205a;
}

.search-results-item.selected {
    border-left: 2px solid rgb(191, 157, 191);
    font-weight: bold;
    color: white;
    background-color: #41205a;
}

.search-results::-webkit-scrollbar {
            width: 3px;
        }
        
        .search-results::-webkit-scrollbar-track {
            border-radius: 8px;
            background-color: #41205a;
            border: 1px solid #41205a;
            box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
            margin-top: 3px
        }
        
        .search-results::-webkit-scrollbar-thumb {
            border-radius: 8px;
            border: 1px solid #41205a;
            background-color: white;
        }


    </style>
    <div class="search-box">
    <form action="{{ route('manualsearch') }}" method="POST">
        @csrf
    <div class="form-group search-info">
        <input type="text" class="form-control" name="manualsearchterm" placeholder="Search your desired diagnosis test name" 
        pattern=".{3,}" title="Please enter at least 3 characters" required>
 
    @if ($errors->any())
    <div id="errorDiv" class="alert alert-danger" style="opacity: 1; transition: opacity 0.5s ease-out;margin-top:10px;">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
    </div>
    @endif
    <div style="margin-top: 10px;display:none;" class="search-results"></div>

    </div>
    <button type="submit" class="btn btn-primary search-btn"><i><img src="assets/img/search-submit.png" alt></i> <span>Search</span></button>
    </form>
    </div>
    
    </div>
    </div>
    </section>
    <script>
        // Wait for 3 seconds then hide the error message
        setTimeout(function() {
            let currentelement = document.getElementById('errorDiv'); 
            currentelement.style.opacity = '0';
        }, 3000);

        setTimeout(function() {
            let currentelement = document.getElementById('errorDiv'); 
            currentelement.style.display = 'none';
        }, 3500);

    const searchInput = document.querySelector('.form-control');
    const searchResults = document.querySelector('.search-results');
// Function to close the search results
function closeSearchResults() {
    searchResults.innerHTML = '';
    searchResults.style.display ="none";
}
    searchInput.addEventListener('input', function() {
            const query = this.value.trim();
            if (query.length >= 0) {
                fetch(`/search?query=${query}`)
                    .then(response => response.json())
                    .then(data => {

                        searchResults.innerHTML = '';
                        if (data.length > 0) {
                            console.log("data available")
                            searchResults.style.display ="block";
                            data.forEach(result => {
                                const item = document.createElement('div');
                                item.textContent = result.name;
                                item.classList.add('search-results-item');
                                item.dataset.testId = result.id;
                                searchResults.appendChild(item);
                            });
                        } else {
                        console.log("data not available")
                        searchResults.style.display ="block";
                            const message = document.createElement('div');
                            message.textContent = 'No results found';
                            message.style.textAlign ='center';
                            searchResults.appendChild(message);
                        }
                    })
                    .catch(error => console.error('Error:', error));
                    }
                });

// Event listener for clicking outside the search box
document.addEventListener('click', function(event) {
    if (!event.target.closest('.form-control')) {
        
        closeSearchResults();
    }
});

// Event listener for pressing the escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeSearchResults();
    }
});

        let selectedIndex = -1;

searchInput.addEventListener('keydown', function(event) {
    const items = searchResults.querySelectorAll('.search-results-item');
    const itemCount = items.length;

    if (event.key === 'ArrowDown') {
        event.preventDefault();
        selectedIndex = (selectedIndex + 1) % itemCount;
        updateSelection(items);
        scrollToSelected(items);
        updateInputValue(items);
    } else if (event.key === 'ArrowUp') {
        event.preventDefault();
        selectedIndex = (selectedIndex - 1 + itemCount) % itemCount;
        updateSelection(items);
        scrollToSelected(items);
        updateInputValue(items);
    }
});

function updateSelection(items) {
    items.forEach((item, index) => {
        if (index === selectedIndex) {
            item.classList.add('selected');
        } else {
            item.classList.remove('selected');
        }
    });
}

function scrollToSelected(items) {
    const selected = items[selectedIndex];
    if (selected) {
        const topOffset = selected.offsetTop;
        const bottomOffset = selected.offsetTop + selected.offsetHeight;
        if (bottomOffset > searchResults.scrollTop + searchResults.offsetHeight) {
            searchResults.scrollTop = bottomOffset - searchResults.offsetHeight;
        } else if (topOffset < searchResults.scrollTop) {
            searchResults.scrollTop = topOffset;
        }
    }
}

function updateInputValue(items) {
    const selected = items[selectedIndex];
    if (selected) {
        searchInput.value = selected.textContent.trim();
    }
}

searchResults.addEventListener('click', function(event) {
    const target = event.target.closest('.search-results-item');
    if (target) {
        const testId = target.dataset.testId;
        const url = '{{ route("get.quotes", ":testId") }}'; 
        window.location.href = url.replace(':testId', testId);
    }
});

</script>
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
        @foreach ($mostbuyedresults as $mostbuyed)
        <div class="col-lg-4 col-md-6">
            <a  >
            <div class="sub-categories d-flex align-items-center">
            <div class="categories-img">
            <a href="{{url('get/quotes', ['id' => $mostbuyed->id])}}">
            <img style="width:110px;height:80px;" src="{{asset($mostbuyed->test_image)}}" alt>
            </a>
            </div>
            <div class="categories-text ">
            <a href="{{url('get/quotes', ['id' => $mostbuyed->id])}}">
            <h4 style="font-size: 1rem">{{$mostbuyed->most_buyed_test_name_short}}</h4>
             </a>
            @if ($mostbuyed->parameters > 0)
            <span>            <a href="{{url('get/quotes', ['id' => $mostbuyed->id])}}"><b>{{$mostbuyed->parameters}} Parameters Covered</b>            </a></span>                
            @else
            <span><b>1 Parameters</b> Covered</span>                
            @endif
            </div>
            </div>
            </a>
            </div>
        @endforeach
    </div>
    </div>
    </div>
    </section>


    <section class="most-popular course-categories-four">
        <div class="container">
        <div class="section-header h-four text-center aos " data-aos="fade-up">
        <span>More tests</span>
        <h2>Buy here as per your requirement</h2>
        <p class="sub-title">Empowering Healthcare, One Test at a Time. Discover Convenience, Confidence, and Care with Intest Bazar.</p>
        </div>
        <div class="popular-categories aos " data-aos="fade-up">
        <div class="row">
        @foreach ($requirementbasistestresults as $requirementbasistests)
            <div class="col-lg-3 col-md-4">
            <a  >
            <div class="sub-categories sub-categories-temp bg-design d-flex align-items-center justify-content-center">
            <div class="sub-categories-group">
            <div class="categories-img ">
                <a href="{{url('get/quotes', ['id' => $requirementbasistests->id])}}">            <img style="width:12rem;height:8rem;border-radius:6px;" src="{{asset($requirementbasistests->test_image)}}" alt></a>
            </div>
            <div class="categories-text text-center">
            <h4><a href="{{url('get/quotes', ['id' => $requirementbasistests->id])}}">{{$requirementbasistests->requirement_basis_test_name_short}}</a></h4>
            @if ($requirementbasistests->parameters > 0)
            <p class="course-count">{{$requirementbasistests->parameters}} Parameters Covered</p>                
            @else
            <p class="course-count">1 Parameters Covered</p>
            @endif
            </div>
            </div>
            </div>
            </a>
            </div>
        @endforeach
        
        </div>
        </div>
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