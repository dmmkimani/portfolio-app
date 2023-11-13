@extends('layouts.app')

@section('content')
    <h3 class="gold">dmmkimani.com</h3>

    <p class="violet">Portfolio Website</p>

    <div style="margin-top: 50px;">
        <p style="color: Gold">Github Link:</p>
    </div>

    <a class="git" href="https://www.github.com/dmmkimani/portfolio-app" target="_blank" style="display: inline-block;">
        <div>
            <i class="fa fa-github" style="font-size:32px;"></i>
        </div>
    </a>

    <div style="margin-top: 35px;">
        <p style="color: Gold">Technology Used:</p>
    </div>

    <div style="margin-top: 25px;">
        <div style="display: inline-block; text-align: center;">
            <img class="tech" src="{{route('img.show', ['filename'=>'laravel.png'])}}">
            <h5 class="gold">Laravel</h5>
        </div>
    </div>

    <div class="projectDesc">
        <p class="body">
            dmmkimani.com is a portfolio-style website that showcases my professional achievements. 
        </p>
        <p class="body">
            You are using it right now.
        </p>
    </div>

    <div style="margin-top: 75px;">
        <p style="color: DarkViolet">.</p>
    </div>
@endsection