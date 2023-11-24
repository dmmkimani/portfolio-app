@extends('layouts.app')

@section('content')
    <h3 class="gold">Simulated Driving System</h3>

    <p class="violet">Three-Wheeled Vehicle</p>

    <div style="margin-top: 5px;">
        <a class="git" href="https://www.github.com/dmmkimani/simulated-driving-system/" target="_blank" style="display: inline-block;">
            <div>
                <i class="fa fa-github" style="font-size:32px;"></i>
            </div>
        </a>
    </div>

    <div class="projectDesc">
        <p class="body">
            This project entailed the construction of a stationary, three-wheeled automobile, 'driven' via a smartphone and a set of pedals. 
            It was intended for young adults to acquire and practise driving abilities. Every effort was taken to provide a UX identical to 
            that of driving, mainly through the imitation of real car functionalities.
        </p>

        <div style="margin: auto;">
            @include('slideshows.sds')
        </div>

        <iframe class="video" width="575" height="325" src="https://www.youtube.com/embed/GF5PHqHbHw8?si=5gqg3MCxMWbs9Wz9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div style="margin-top: 75px;">
        <p style="color: DarkViolet">.</p>
    </div>
@endsection