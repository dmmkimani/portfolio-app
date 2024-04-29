<div class="skills" style="margin-right: 50px">
    <div class="rounded skill" onmouseover="changeText('The first language I learned. Naturally, I am most confident in Java.')" onmouseout="changeback()">
        <h4>Java</h4>
    </div>
    <div class="rounded skill" onmouseover="changeText('I\'ve honed my Python skills through the development of machine learning models.')" onmouseout="changeback()">
        <h4>Python</h4>
    </div>
    <div class="rounded skill" onmouseover="changeText('JavaScript is my strongest language for server-side tasks.')" onmouseout="changeback()">
        <h4>JavaScript</h4>
    </div>
    <div class="rounded skill" onmouseover="changeText('I really enjoy diving into mobile app development. Actually, I am currently working on an Android app.')" onmouseout="changeback()">
        <h4>Kotlin</h4>
    </div>
    <div class="rounded skill" onmouseover="changeText('While Dart is conventionally used in Flutter, I\'ve also applied it for server-side development.')" onmouseout="changeback()">
        <h4>Dart</h4>
    </div>
    <div class="rounded skill" onmouseover="changeText('I have completed numerous projects encompassing both client and server-side development.')" onmouseout="changeback()">
        <h4>Node.js</h4>
    </div>
    <div class="rounded skill" onmouseover="changeText('Check out YourSpace below for an insight into a mobile app I developed using Flutter.')" onmouseout="changeback()">
        <h4>Flutter</h4>
    </div>
    <div class="rounded skill" onmouseover="changeText('Used to implement dmmkimani.com.')" onmouseout="changeback()">
        <h4>Laravel</h4>
    </div>
    <div class="rounded skill" onmouseover="changeText('I recognise the importance of a database design that is both efficient and scalable.')" onmouseout="changeback()">
        <h4>SQL</h4>
    </div>
    <div class="rounded skill" onmouseover="changeText('Document databases such as Cloud Firestore in particular.')" onmouseout="changeback()">
        <h4>NoSQL</h4>
    </div>
    <div class="rounded skill" onmouseover="changeText('Currently leveraging PHP to build a repair maintenance system.')" onmouseout="changeback()">
        <h4>PHP</h4>
    </div>
    <div class="rounded skill" onmouseover="changeText('I have a passion for UX that stems from a want to understand the user.')" onmouseout="changeback()">
        <h4>UX</h4>
    </div>
    <div class="rounded skill" onmouseover="changeText('Go to my GitHub to see the HTML for this website!')" onmouseout="changeback()">
        <h4>HTML</h4>
    </div>
    <div class="rounded skill" onmouseover="changeText('Go to my GitHub to see the CSS for this website!')" onmouseout="changeback()">
        <h4>CSS</h4>
    </div>
    <div class="rounded skill" onmouseover="changeText('The Incremental Development Model in particular.')" onmouseout="changeback()">
        <h4>Agile Methodologies</h4>
    </div>
    <div class="rounded skill" onmouseover="changeText('JavaScript Object Notation... what can I say?')" onmouseout="changeback()">
        <h4>JSON</h4>
    </div>
    <div class="rounded skill" onmouseover="changeText('I am able to propose, design and implement functionality that provides a solution to a problem.')" onmouseout="changeback()">
        <h4>Problem Solving</h4>
    </div>
    <div class="rounded skill" onmouseover="changeText('Developing projects in groups has enhanced my teamwork and interpersonal communication skills.')" onmouseout="changeback()">
        <h4>Teamwork & Communication</h4>
    </div>
    <!--
    <div class="rounded skill" onmouseover="changeText('Used to unit test the YourSpace UI.')" onmouseout="changeback()">
        <h4>Mockito</h4>
    </div>
    -->
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