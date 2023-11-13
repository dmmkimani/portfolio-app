@extends('layouts.app')

@section('content')
    <h3 class="gold">UX Design Work</h3>

    <p class="violet">Personas and Storyboards</p>

    <div style="margin-top: 35px;">
        <p style="color: Gold">Techniques Used:</p>
    </div>

    <div style="display: inline-block; margin-top: 10px; text-align: center;">
        <h5 class="gold" style="margin-bottom: 5px;">Personas</h5>
        <h5 class="gold" style="margin-bottom: 5px;">Storyboarding</h5>
    </div>

    <div class="projectDesc">
        <p class="body">
            As an undergraduate, my coursework for a UX module was to ideate a
            product or service to solve a UX problem.
        </p>
        
        <p class="body">
            My teammates and I came up with a mobile application that Swansea 
            University students can use to meet and interact with other students who
            share the same interests as them. Students would benefit from increased friends, 
            shared experiences as well as feelings of belonging and inclusivity within 
            the Swansea University community.
        </p>

        <p class="body">
            With the help of one of my teammates, I created 3 personas, whom I then storyboarded journeys for.
        </p>

        @include('slideshows.ux', ['showNum' => '1', 'code' => 'yadav', 'name' => 'Aditya Yadav', 'numSlides' => 4])
        <div class="empty"></div>
        @include('slideshows.ux', ['showNum' => '2', 'code' => 'femi', 'name' => 'Femi Okafor', 'numSlides' => 4])
        <div class="empty"></div>
        @include('slideshows.ux', ['showNum' => '3', 'code' => 'fields', 'name' => 'Jacqueline Fields', 'numSlides' => 4])
    </div>

    <div style="margin-top: 75px;">
        <p style="color: DarkViolet">.</p>
    </div>
@endsection