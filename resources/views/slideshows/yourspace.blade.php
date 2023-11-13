<div class="slideshow" style="height: 825px;">
    <div id="slide1" class="slide">
        <div>
            <img class="ys" src="{{route('img.show', ['filename'=>'ys_home.png'])}}">
            <img class="ys" src="{{route('img.show', ['filename'=>'ys_bay.png'])}}">
        </div>

        <p class="title">
            The Home Tab
        </p>

        <div class="slideText">
            <p class="body">
                The home tab is the tab users are presented with when YourSpace is launched. 
                It features all the rooms available for booking around both campuses and it holds all the functionality users need to make bookings in any given room.
            </p>
        </div>
    </div>

    <div id="slide2" class="slide">
        <div style="text-align: center;">
            <img class="ys" src="{{route('img.show', ['filename'=>'ys_gh.png'])}}">
            <img class="ys" src="{{route('img.show', ['filename'=>'ys_gh_drawer.png'])}}">
        </div>

        <p class="title">
            The Building Page
        </p>

        <div class="slideText">
            <p class="body">
                The building page displays a description of a single building from either campus with an image of the building above it. 
                The building page also contains a drawer, which allows the user to select a room from all the rooms in the building.
                This page is constructed at runtime by injecting data fetched from the database into a template.
            </p>
        </div>
    </div>

    <div id="slide3" class="slide">
        <div style="text-align: center;">
            <img class="ys" src="{{route('img.show', ['filename'=>'ys_gh001.png'])}}">
            <img class="ys" src="{{route('img.show', ['filename'=>'ys_key.png'])}}">
        </div>

        <p class="title">
            The Room Page
        </p>

        <div class="slideText">
            <p class="body">
                The room page displays the name, capacity, amenities and schedule of bookings for a single room on campus.
                This page is also constructed at runtime.
            </p>
        </div>
    </div>

    <div id="slide4" class="slide">
        <div style="margin-bottom: 30px;">
            <div style="display: inline-block; text-align: center;">
                <img class="ys" src="{{route('img.show', ['filename'=>'ys_make_1.png'])}}">
                <h5 class="gold">(a)</h5>
            </div>
                    
            <div style="display: inline-block; text-align: center;">
                <img class="ys" src="{{route('img.show', ['filename'=>'ys_make_2.png'])}}">
                <h5 class="gold">(b)</h5>
            </div>

            <div style="display: inline-block; text-align: center;">
                <img class="ys" src="{{route('img.show', ['filename'=>'ys_make_3.png'])}}">
                <h5 class="gold">(c)</h5>
            </div>
        </div>

        <p class="title">
            Making a Booking
        </p>
    </div>

    <div id="slide5" class="slide">
        <div style="text-align: center;">
            <img class="ys" src="{{route('img.show', ['filename'=>'ys_no_bookings.png'])}}">
            <img class="ys" src="{{route('img.show', ['filename'=>'ys_bookings.png'])}}">
        </div>

        <p class="title">
            The Account Tab
        </p>

        <div class="slideText">
            <p class="body">
                The account tab helps the user manage their bookings and their account.
                Depending on the status of the booking, the user can amend the booking, cancel the booking, 
                or delete the booking from their booking history. If the booking is active, the user loses the ability to amend or cancel the booking, and will 
                have to wait until the booking has elapsed to delete it from their booking history.
            </p>
        </div>
    </div>
</div>

<div class="slideCtrl">
    <button id="prev" class="slideBtn" onclick="parent.prevSlide()">
        <p class="violet">&#8592;</p>
    </button>

    <div style="display: inline-block;">
        <h5 id="pagenum" class="gold">1</h5>
    </div>

    <button id="next" class="slideBtn" onclick="parent.nextSlide()">
        <p class="violet">&#8594;</p>
    </button>
</div>

<script>
    var prevBtn = document.getElementById('prev');
    var pageNum = document.getElementById('pagenum');
    var nextBtn = document.getElementById('next');

    prevBtn.style.visibility = "hidden";

    numSlides = 5;
    const slides = [];

    for (let i = 0; i < numSlides; i++) {
        var j = i + 1;
        slides[i] = document.getElementById('slide' + j.toString());
        if (i > 0) {
            slides[i].style.display = "none";
        }
    }

    function prevSlide() {
        var page = parseInt(pageNum.innerHTML) - 1;
        if (page == 1) {
            prev.style.visibility = "hidden";
        }

        if (page > 0) {
            slides[page].style.display = "none";
            page--;
            slides[page].style.display = "block";
            page++;
            pageNum.innerHTML = page.toString();

            next.style.visibility = "visible";
        }
    }

    function nextSlide() {
        var page = parseInt(pageNum.innerHTML) - 1;

        if (page < numSlides - 1) {
            slides[page].style.display = "none";
            page++;
            slides[page].style.display = "block";
            page++;
            pageNum.innerHTML = page.toString();

            prev.style.visibility = "visible";
        }

        if (page == numSlides) {
            next.style.visibility = "hidden";
        }
    }
</script>