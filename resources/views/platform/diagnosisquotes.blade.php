@extends('platform.layout')
@section('content')
<div style="background-color:#f1f1f1;" class="responsive-container-block bigContainer">
    <div class="responsive-container-block Container bottomContainer">
        <section style="padding-top: 30px" class="most-popular course-categories-four">
            <div class="container">
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

<style>
    /**************************\
Basic Modal Styles
\**************************/

.modal {
font-family: -apple-system,BlinkMacSystemFont,avenir next,avenir,helvetica neue,helvetica,ubuntu,roboto,noto,segoe ui,arial,sans-serif;
}

.modal__overlay {
position: fixed;
top: 0;
left: 0;
right: 0;
bottom: 0;
background: rgba(0,0,0,0.6);
display: flex;
justify-content: center;
align-items: center;
}

.modal__container {
background-color: #fff;
padding: 30px;
width: 60%;
height: 90%;
margin-bottom: 20px; */
border-radius: 4px;
overflow-y: auto;
box-sizing: border-box;
}

@media(max-width:465px)
{
    .modal__container {
background-color: #fff;
padding: 30px;
width: 90%;
height: 90%;
margin-bottom: 20px; */
border-radius: 4px;
overflow-y: auto;
box-sizing: border-box;
}
}

.modal__container::-webkit-scrollbar {
                  display: none;
        }


.modal__header {
display: flex;
justify-content: space-between;
align-items: center;
}

.modal__title {
margin-top: 0;
margin-bottom: 0;
font-weight: 600;
font-size: 1.25rem;
line-height: 1.25;
color: var(--dark-color);
box-sizing: border-box;
}

.modal__close {
background: transparent;
border: 0;
}

.modal__header .modal__close:before { content: "\2715"; }

.modal__content {
margin-top: 2rem;
margin-bottom: 2rem;
line-height: 1.5;
color: rgba(0,0,0,.8);
}

.modal__btn {
font-size: .875rem;
padding-left: 1rem;
padding-right: 1rem;
padding-top: .5rem;
padding-bottom: .5rem;
background-color: #e6e6e6;
color: rgba(0,0,0,.8);
border-radius: .25rem;
border-style: none;
border-width: 0;
cursor: pointer;
-webkit-appearance: button;
text-transform: none;
overflow: visible;
line-height: 1.15;
margin: 0;
will-change: transform;
-moz-osx-font-smoothing: grayscale;
-webkit-backface-visibility: hidden;
backface-visibility: hidden;
-webkit-transform: translateZ(0);
transform: translateZ(0);
transition: -webkit-transform .25s ease-out;
transition: transform .25s ease-out;
transition: transform .25s ease-out,-webkit-transform .25s ease-out;
}

.modal__btn:focus, .modal__btn:hover {
-webkit-transform: scale(1.05);
transform: scale(1.05);
}

.modal__btn-primary {
background-color: #00449e;
color: #fff;
}



/**************************\
Demo Animation Style
\**************************/
@keyframes mmfadeIn {
from { opacity: 0; }
  to { opacity: 1; }
}

@keyframes mmfadeOut {
from { opacity: 1; }
  to { opacity: 0; }
}

@keyframes mmslideIn {
from { transform: translateY(15%); }
to { transform: translateY(0); }
}

@keyframes mmslideOut {
from { transform: translateY(0); }
to { transform: translateY(-10%); }
}

.micromodal-slide {
display: none;
}

.micromodal-slide.is-open {
display: block;
}

.micromodal-slide[aria-hidden="false"] .modal__overlay {
animation: mmfadeIn .3s cubic-bezier(0.0, 0.0, 0.2, 1);
}

.micromodal-slide[aria-hidden="false"] .modal__container {
animation: mmslideIn .3s cubic-bezier(0, 0, .2, 1);
}

.micromodal-slide[aria-hidden="true"] .modal__overlay {
animation: mmfadeOut .3s cubic-bezier(0.0, 0.0, 0.2, 1);
}

.micromodal-slide[aria-hidden="true"] .modal__container {
animation: mmslideOut .3s cubic-bezier(0, 0, .2, 1);
}

.micromodal-slide .modal__container,
.micromodal-slide .modal__overlay {
will-change: transform;
}
</style>
                <div style="margin-bottom: 40px" class="search-box">
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
                    <button type="submit" class="btn btn-primary search-btn"><i><img src="{{asset("assets/img/search-submit.png")}}" alt></i> <span>Search</span></button>
                    </form>
                    </div>
                @if ($total > 0)
                <h3>Showing all available diagnosis quotes for <span style="color: #41205a;border-bottom:2px solid #41205a;">"{{$temp_search_query->name}}"</span></h3>
                <h4>Total quotes available <span style="color: #41205a;border-bottom:2px solid #41205a;">"{{$total}}"</span></h4>

                <section style="background-color: #ffffff70;padding:15px 20px 15px 20px;" class="section trending-courses">
                    <div class="container">
                    <div class="owl-carousel mentoring-course trending-course owl-theme aos " data-aos="fade-up">
                     @foreach ($results as $result)
                    <div class="course-box">
                    <div class="product">
                    <div class="product-content">                      
                    <div style="border-radius: 5px;
                    padding: 5px;
                    background-color: rgb(238 238 238);
                    display: flex;
                    justify-content: space-between;
                    gap: 20px;
                    height: 4rem;">
                        <img style="height: 2rem;width:6rem;" src="{{asset($result->user->profile_photo_path)}}" alt="">
                        <p style="font-weight: bold;font-size:12px;display:flex;justify-content:center;align-items:center">{{$result->user->name}}</p>
                    </div>
                    <div style="display: flex;justify-content:space-between;gap:20px;height:4rem;box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;padding:5px;">
                    <div class="course-price">
                    Rs. {{$result->final_rate}}
                    </div>
                    <div class="course-view">
                    <strong>{{$temp_search_query->parameters}} &nbsp;</strong> parameters <br> covered
                    </div>
                    </div>
                    <div style="margin-top: 5px;" class="author-join">
                    <button class="btn join-now open-modal">Buy Now</button>
                    </div>
                    </div>
                    </div>
                    </div>
                   @endforeach
                    </div>
                    </div>
                    </section>  
                    <div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
                        <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                          <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
                            <header class="modal__header">
                              <h2 class="modal__title" id="modal-1-title">
                                TRF (Test Requisition Form)
                              </h2>
                              <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                            </header>
                            <main class="modal__content" id="modal-1-content">
                                <div class="form-group">
                                    <label style="font-weight:bold" for="patient-name">Patient Name:</label>
                                    <input type="text" id="patient-name" name="patient_name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label style="font-weight:bold" for="doctor-name">Doctor Name:</label>
                                    <input type="text" id="doctor-name" name="doctor_name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label style="font-weight:bold" for="patient-name">Email ID:</label>
                                    <input type="email" id="patient-name" name="patient_name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label style="font-weight:bold" for="patient-name">Mobile Number:</label>
                                    <input type="number" id="patient-name" name="patient_name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label style="font-weight:bold">Gender:</label><br>
                                    <div style="display: flex;gap:5px;">
                                    <label><input type="radio" name="priority" value="male"> Male</label><br>
                                    <label><input type="radio" name="priority" value="female"> Female</label><br>
                                </div>
                                </div>
                                <div class="form-group">
                                    <label style="font-weight:bold" for="patient-name">Date of birth:</label>
                                    <input type="date" id="patient-name" name="patient_name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label style="font-weight:bold" for="doctor-name">Weight (KG):</label>
                                    <input type="number" id="doctor-name" name="doctor_name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label style="font-weight:bold" for="doctor-name">Height (CM):</label>
                                    <input type="number" id="doctor-name" name="doctor_name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label style="font-weight:bold" for="doctor-name">Prescription:</label>
                                    <input type="file" id="doctor-name" name="doctor_name" class="form-control" required>
                                </div>
                            </main>
                            <footer class="modal__footer">
                              <button style="width: 100%;height:50px;" class="modal__btn modal__btn-primary">Checkout and Pay</button>
                            </footer>
                          </div>
                        </div>
                      </div>          
                @else
                <h3 class="text-danger">😔 Sorry, currently no quotations available to show for "{{$temp_search_query->name}}" </h3>
                @endif
                <br>
            </div>
        </section>
    </div>
</div>


    <!-- Include Micromodal JS -->
    <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
    <script>
     // Initialize Micromodal
MicroModal.init();

// Trigger the modal when any element with the class 'open-modal' is clicked
document.querySelectorAll('.open-modal').forEach(function(element) {
    element.addEventListener('click', function() {
        MicroModal.show('modal-1');
    });
});
</script>

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
@endsection