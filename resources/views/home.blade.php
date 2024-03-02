@extends('layouts.app')

@section('content')
    <div id="hero-section">
        @include('hero')
    </div>

    <p style="color: DarkViolet">...</p>

    <div style="margin-top: 75px;">
        <h3>Hello!</h3>
    </div>

    <div style="margin-top: 75px;">
        <p class="violet">I'm </p><p class="gold">David Mike Mwaura Kimani </p><p class="violet">but you can call me </p><p class="gold">Mike </p><p class="violet">(everyone does).</p><br>
        <p class="violet">I've recently completed my </p><p class="gold">MSc in Advanced Computer Science with Distinction </p><p class="violet">and</p><br>
        <p class="violet">am now eager to </p><p class="gold">apply my skills </p><p class="violet">and </p><p class="gold">continuously learn </p><p class="violet">in a </p><p class="gold">professional environment</p><p class="violet">.</p>
    </div>

    <div style="margin-top: 75px;">
        <p style="color: DarkViolet">...</p>
    </div>

    <div style="margin-top: 75px;">
        <h3>I possess the following skills:</h3>
    </div>
    
    <div style="margin-top: 75px;">
        @include('skills')
    </div>

    <div style="margin:auto; width: fit-content">
        <a href="https://drive.google.com/file/d/14Ugg9bGTwIU2a1D_qXVFXu9o_o3N0p1P/view?usp=embed_googleplus" target="_blank">
            <div id="cv" class="rounded cv">
                <i class="fa fa-file" style="padding: 10px; font-size:42px;"></i>
                <br>
                <p class="gold"><u>CV.pdf</u></p>
            </div>
        </a>
    </div>

    <div style="margin-top: 75px;">
        <p style="color: DarkViolet">...</p>
    </div>

    <div style="margin-top: 75px;">
        <h3 class="gold">Which I have demonstrated in the following projects:</h3>
    </div>

    <div style="margin-top: 75px;">
        @include('projects')
    </div>

    <script>
        document.getElementById("hero-section").style.height = `${window.innerHeight - 50}px`;
        window.onresize = function () {
            document.getElementById("hero-section").style.height = `${window.innerHeight - 50}px`;
        }
    </script>
@endsection