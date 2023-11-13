<div class="slideshow" style="height: 950px;">
    <div id="slide1_{{ $showNum }}" class="slide">
        <div>
            <img class="persona" src="{{route('img.show', ['filename'=>'persona_'. $code . '.PNG'])}}">
        </div>

        <p class="title">
            {{ $name }}
        </p>
        
        <div class="slideText">
            <p class="body">
                My contribution towards the creation of this persona: 50%.
            </p>
        </div>
    </div>

    <div id="slide2_{{ $showNum }}" class="slide">
        <div>
            <img class="storyboard" src="{{route('img.show', ['filename'=>'storyboard_'. $code . '1.png'])}}">
        </div>
    </div>

    <div id="slide3_{{ $showNum }}" class="slide">
        <div>
            <img class="storyboard" src="{{route('img.show', ['filename'=>'storyboard_'. $code . '2.png'])}}">
        </div>
    </div>
    
    <div id="slide4_{{ $showNum }}" class="slide">
        <div>
            <img class="storyboard" src="{{route('img.show', ['filename'=>'storyboard_'. $code . '3.png'])}}">
        </div>
    </div>
</div>

<div class="slideCtrl">
    <button id="prev_{{ $showNum }}" class="slideBtn" onclick="parent.prevSlide('{{ $showNum }}')">
        <p class="violet">&#8592;</p>
    </button>

    <div style="display: inline-block;">
        <h5 id="page_{{ $showNum }}" class="gold">1</h5>
    </div>

    <button id="next_{{ $showNum }}" class="slideBtn" onclick="parent.nextSlide('{{ $showNum }}')">
        <p class="violet">&#8594;</p>
    </button>
</div>

<script>
    eval('var prev{{ $showNum }} = document.getElementById("prev_{{ $showNum }}");');
    eval('var pageNum{{ $showNum }} = document.getElementById("page_{{ $showNum }}");');
    eval('var next{{ $showNum }} = document.getElementById("next_{{ $showNum }}");');

    eval('prev{{ $showNum }}.style.visibility = "hidden";')

    eval('slides{{ $showNum }} = [];');

    var code = '{{ $code }}';
    var numSlides = {{ $numSlides }};

    for (let i = 0; i < numSlides; i++) {
        var j = i + 1;
        eval('slides{{ $showNum }}[i] = document.getElementById("slide' + j.toString() + '_{{ $showNum }}");');
        if (i > 0) {
            eval('slides{{ $showNum }}[i].style.display = "none";');
        }
    }

    function prevSlide(show) {
        eval('var page = parseInt(pageNum' + show + '.innerHTML) - 1;');
        if (page == 1) {
            eval('prev' + show + '.style.visibility = "hidden";');
        }

        if (page > 0) {
            eval('slides' + show + '[page].style.display = "none";');
            page--;
            eval('slides' + show + '[page].style.display = "block";');
            page++;
            eval('pageNum' + show + '.innerHTML = page.toString();');

            eval('next' + show + '.style.visibility = "visible";');
        }
    }

    function nextSlide(show) {
        eval('var page = parseInt(pageNum' + show + '.innerHTML) - 1;');

        if (page < numSlides - 1) {
            eval('slides' + show + '[page].style.display = "none";');
            page++;
            eval('slides' + show + '[page].style.display = "block";');
            page++;
            eval('pageNum' + show + '.innerHTML = page.toString();');

            eval('prev' + show + '.style.visibility = "visible";');
        }

        if (show == 3) {
            if (page == (numSlides - 1)) {
                eval('next' + show + '.style.visibility = "hidden";');
            }
        } else {
            if (page == numSlides) {
                eval('next' + show + '.style.visibility = "hidden";');
            }
        }
    }
</script>