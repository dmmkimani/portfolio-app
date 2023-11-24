@extends('layouts.app')

@section('content')
    <h3 class="gold">YourSpace</h3>

    <p class="violet">Meeting Room Booking Application</p>

    <div style="margin-top: 5px;">
        <a class="git" href="https://www.github.com/dmmkimani/your-space-ui/" target="_blank" style="display: inline-block;">
            <div>
                <i class="fa fa-github" style="font-size:32px;"></i>
            </div>
        </a>
        <a class="git" href="https://www.github.com/dmmkimani/your-space-server" target="_blank" style="display: inline-block;">
            <div>
                <i class="fa fa-github" style="font-size:32px;"></i>
            </div>
        </a>
    </div>

    <div style="margin-top: 25px;">
        <p style="color: Gold">Technologies Used:</p>
    </div>

    <div style="margin-top: 25px;">
        <div style="display: inline-block; text-align: center;">
            <img class="tech" src="{{route('img.show', ['filename'=>'flutter.png'])}}">
            <h5 class="gold">Flutter</h5>
        </div>

        <div style="display: inline-block; text-align: center;">
            <img class="tech" src="{{route('img.show', ['filename'=>'dart.png'])}}">
            <h5 class="gold">Dart</h5>
        </div>

        <div style="display: inline-block; text-align: center;">
            <img class="tech" src="{{route('img.show', ['filename'=>'firebase.png'])}}">
            <h5 class="gold">Cloud Firestore</h5>
        </div>
    </div>

    <div class="projectDesc">
        <p class="body">
            Swansea University has a number of meeting rooms available for booking. YourSpace is a mobile application that assists users 
            in the making and managing of these bookings.
            Its main goal was to improve on the system used to book meeting rooms at Swansea University.
        </p>

        <p class="body">
            YourSpace was implemented using a three-tier system architecture comprising of a user interface implemented using Flutter, 
            an application server implemented using Dart and a database hosted on Cloud Firestore.
        </p>

        <p class="body">
            It was developed using an incremental development model and unit tests were performed by using Mockito.
        </p>

        <div style="margin: auto;">
            @include('slideshows.yourspace')
        </div>
    </div>

    <div style="margin-top: 75px;">
        <p style="color: DarkViolet">.</p>
    </div>
@endsection