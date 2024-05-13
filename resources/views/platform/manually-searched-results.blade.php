@extends('platform.layout')
@section('content')
<div style="background-image: linear-gradient(to bottom right, #FDFCFB, #E2D1C3);
" class="responsive-container-block bigContainer">
    <div class="responsive-container-block Container bottomContainer">
        <section style="padding-top: 30px;" class="most-popular course-categories-four">
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
                    @if ($temptotal > 0)
                    <div class="section-header h-four aos " data-aos="fade-up">
                        <p style="font-size: 1.3rem;" class="sub-title">Showing <strong>"{{$temptotal}}"</strong> type of diagnosis test results for the searched query <strong>"{{$tempsearchQuery}}"</strong></p>
                        </div>
                        <div class="popular-categories aos " data-aos="fade-up">
                        <div class="row">
                        @foreach ($tempresults as $searchedResults)
                            <div class="col-lg-3 col-md-4">
                            <a>
                            <div class="sub-categories sub-categories-temp bg-design d-flex align-items-center justify-content-center">
                            <div class="sub-categories-group">
                            <div class="categories-img ">
                                <a href="{{url('get/quotes', ['id' => $searchedResults->id])}}">          
                                    <img style="width:12rem;height:8rem;border-radius:6px;" src="{{asset($searchedResults->test_image)}}" alt></a>
                            </div>
                            <div class="categories-text text-center">
                            <h4 style="font-size: 1.2rem;height:3rem;"><a href="{{url('get/quotes', ['id' => $searchedResults->id])}}">{{$searchedResults->manually_searched_tests_name}}</a></h4>
                            @if ($searchedResults->parameters > 0)
                            <p class="course-count">{{$searchedResults->parameters}} Parameters Covered</p>                
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
                        @else
                        <br>
                        <br>
                        <h3 class="text-danger">Currently no test available for searched query <strong>"{{$tempsearchQuery}}"</strong></h3>
                    @endif
            
            </div>
            </section>
    </div>
</div>
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