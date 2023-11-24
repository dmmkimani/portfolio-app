<div class="slideshow" style="height: 625px;">
    <div id="slide1" class="slide">
        <div>
            <img class="sds" src="{{route('img.show', ['filename'=>'sds_car.png'])}}">
        </div>

        <p class="title">
            The Vehicle
        </p>

        <div class="slideText">
            <p class="body">
                The vehicle is equipped with a servo motor for steering, two continuous rotation motors 
                that power the rear wheels, two LEDs serving as turn signals, and a speaker housed in 
                the hood for interactive honking. 
            </p>
        </div>
    </div>

    <div id="slide2" class="slide">
        <div>
            <img class="sds" src="{{route('img.show', ['filename'=>'sds_pedals.png'])}}">
        </div>

        <p class="title">
            The Pedals
        </p>

        <div class="slideText">
            <p class="body">
                The pedal system uses force sensors placed beneath cardboard pieces. As the user presses on a pedal, 
                the embedded force sensor detects and records the applied pressure.
            </p>
        </div>
    </div>

    <div id="slide3" class="slide">
        <div>
            <img class="sds" src="{{route('img.show', ['filename'=>'sds_app.png'])}}">
        </div>

        <p class="title">
            The Mobile App
        </p>

        <div class="slideText">
            <p class="body">
                Data from both physical sensors and built-in smartphone sensors is processed to produce a user-friendly, intuitive system 
                that mimics the real-life driving experience. Significantly, the design was enhanced through event-driven programming, which actively 
                monitors changes in sensor data. This triggers the initiation of background threads within the app to seamlessly deliver outputs to the physical car.
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

    numSlides = 3;
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