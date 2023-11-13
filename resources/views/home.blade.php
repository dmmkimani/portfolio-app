@extends('layouts.app')

@section('content')
    <div class="logo">
        <h2 class="gold">dmmkimani</h2>
        <h2 class="violet">.com</h2>
        <img class="arrow" src="{{route('img.show', ['filename'=>'arrow.gif'])}}">
    </div>

    <div style="margin-top: 115px;">
        <p style="color: DarkViolet">...</p>
    </div>

    <div style="margin-top: 75px;">
        <h3>Hello!</h3>
    </div>

    <div style="margin-top: 75px;">
        <p class="violet">I'm </p><p class="gold">David </p><p class="violet">but you can call me </p><p class="gold">Mike </p><p class="violet">(everyone does).</p><br>
        <p class="violet">Right now, I'm a </p><p class="gold">MSc Advanced Computer Science </p><p class="violet">student looking for <br> work as a </p><p class="gold">graduate or junior software developer</p><p class="violet">.</p><br>
    </div>

    <div style="margin-top: 75px;">
        <p style="color: DarkViolet">...</p>
    </div>

    <div style="margin-top: 75px;">
        <h3>I possess the following skills:</h3>
    </div>
    
    <div style="margin-top: 75px;">
        <div class="skills" style="margin-right: 50px">
            <div class="rounded skill" onmouseover="changeText('The first language I ever learned. Naturally, I am most confident in Java.')" onmouseout="changeback()">
                <h4>Java</h4>
            </div>
            <div class="rounded skill" onmouseover="changeText('Currently developing an Android application.')" onmouseout="changeback()">
                <h4>Kotlin</h4>
            </div>
            <div class="rounded skill" onmouseover="changeText('Learned from practise.')" onmouseout="changeback()">
                <h4>Python</h4>
            </div>
            <div class="rounded skill" onmouseover="changeText('The framework I used to implement YourSpace.')" onmouseout="changeback()">
                <h4>Flutter</h4>
            </div>
            <div class="rounded skill" onmouseover="changeText('My strongest language when working on the server-side.')" onmouseout="changeback()">
                <h4>Dart</h4>
            </div>
            <div class="rounded skill" onmouseover="changeText('I have a particular passion for UX that stems from a want to understand the user.')" onmouseout="changeback()">
                <h4>UX</h4>
            </div>
            <div class="rounded skill" onmouseover="changeText('Go to my GitHub to see the HTML for this website!')" onmouseout="changeback()">
                <h4>HTML</h4>
            </div>
            <div class="rounded skill" onmouseover="changeText('Go to my GitHub to see the CSS for this website!')" onmouseout="changeback()">
                <h4>CSS</h4>
            </div>
            <div class="rounded skill" onmouseover="changeText('Currently learning Node.js for server-side development.')" onmouseout="changeback()">
                <h4>JavaScript</h4>
            </div>
            <div class="rounded skill" onmouseover="changeText('Used to implement Foodies and dmmkimani.com.')" onmouseout="changeback()">
                <h4>Laravel</h4>
            </div>
            <div class="rounded skill" onmouseover="changeText('Used to implement the slideshows for this website. Check my GitHub to see how!')" onmouseout="changeback()">
                <h4>Blade</h4>
            </div>
            <div class="rounded skill" onmouseover="changeText('Used to unit test the YourSpace UI.')" onmouseout="changeback()">
                <h4>Mockito</h4>
            </div>
            <div class="rounded skill" onmouseover="changeText('JavaScript Object Notation... what can I say?')" onmouseout="changeback()">
                <h4>JSON</h4>
            </div>
            <div class="rounded skill" onmouseover="changeText('The Incremental Development Model in particular.')" onmouseout="changeback()">
                <h4>Agile Methodologies</h4>
            </div>
            <div class="rounded skill" onmouseover="changeText('I am able to propose, design and implement functionality that provides a solution to a problem.')" onmouseout="changeback()">
                <h4>Problem Solving</h4>
            </div>
            <div class="rounded skill" onmouseover="changeText('Developing coursework in groups has enhanced my teamwork and interpersonal communication skills.')" onmouseout="changeback()">
                <h4>Teamwork & Communication</h4>
            </div>
        </div>

        <div class="comment">
            <p id="comment" class="gold"></p>
        </div>

        <script>
            var comment = document.getElementById('comment');

            function changeText(text) {
                comment.innerHTML = text;
            }
            
            function changeback() {
                comment.innerHTML = "";
            }
        </script>

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
        <a href="{{route('dmmkimani')}}">
            <div class="rounded project">
                <h4>dmmkimani.com</h4>
            </div>
        </a>
        <a href="{{route('ux')}}">
            <div class="rounded project">
                <h4>UX Design Work</h4>
            </div>
        </a>
        <a href="{{route('yourspace')}}">
            <div class="rounded project">
                <h4>YourSpace</h4>
            </div>
        </a>
    </div>

    <div style="margin-top: 75px;">
        <p style="color: DarkViolet">.</p>
    </div>
@endsection