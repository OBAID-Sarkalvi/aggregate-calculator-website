<?php include 'header.php'; ?>
<html>
    <head>
        <title>Query Form</title>
        <link rel="stylesheet" href="mystyles.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    </head>

    <body>
        <div class="main-wrapper">
<div class="right-epigraph">
    <img src="PIC.jpg" alt="My Photo" class="round-photo">
    
    <h2 class="epigraph-heading">Epigraph</h2>


    <p class="epigraph-quote">
        <strong>"It wasn't raining when Nuh (علیہ السلام) built the Ark"</strong>
    </p>
    <div class="vertical-line"></div>

    <p class="epigraph-paragraph">
        True success begins with preparation long before the storm comes. 
        Great individuals act when others are waiting — they believe, plan, and work with patience. 
        When the world doubts, they keep building their ark.
    </p>
     
            
     <p class="epigraph-paragraph">
       This website is specifically built for students who are in the transition phase between intermediate-level and higher education. 

Being a veteran of that critical and uncertain period myself, I understand that many students at this stage lack the discerning ability to choose a career path that aligns with their aptitude and academic performance.

Indeed, aptitude is subjective and cannot be defined by a generic principle. However, when it comes to academic progress, helpful suggestions and guidance can be provided.

This website offers aggregate calculators for some of the top-ranked universities in Pakistan, along with brief yet essential information about them.

Beginners are highly encouraged to use this platform and follow us on YouTube to stay connected and informed.

    </p>
</div>

        <div class="form-wrapper">
        <center>
        <h1 class = "fancy-heading">Welcome Abroad</h1>
	<form action="http://localhost/WebApp/response.php" method="POST">
        <input type="hidden" name="moodValue" id="moodValue" value="1">
            <b class="label-bold">Enter Your Name</b><input class=
            "input-design" type="text" name="name"><br><br><br>
            <b class="label-bold">Enter your Age</b><input class=
            "input-design" type="text" name="age"><br>
            

    <br><br>

     <input class="submit-design" type="submit" Value ="Calculate Aggregate">
     <br><br><br>
 <div class="mood-container">
    <h2>Please Select your mood from here</h2>

    <!-- Range input that updates emoji and hidden moodValue -->
    <input class="center-range" type="range" min="0" max="4" value="0"
        oninput="
            document.getElementById('emoji').innerText = ['😡','😐','🙂','😄','😂'][this.value];
            document.getElementById('moodValue').value = parseInt(this.value) + 1;
        ">

    <p id="emoji">😡</p>

    <!-- Hidden field to store mood value -->
    <input type="hidden" name="moodValue" id="moodValue" value="1">
</div>



    </center>
    </div>
  </div>


<style>
    .main-wrapper {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: flex-start;
     margin-top: 0px;
}
    .form-wrapper {
    width: 75%;
    padding: 20px;
    box-sizing: border-box;
}
    .right-epigraph {
    width: 25%;
    background-color: #1c7674f3;
    color: white;
    padding: 20px;
    box-sizing: border-box;
    text-align: center;
}

.round-photo {
    width: 80%;
    height: 10%;
    border-radius: 50%;
    border: 6px solid yellow ;

    object-fit: cover;
    margin-bottom: 20px;
}

.epigraph-heading {
    font-size: 24px;
    margin-bottom: 15px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.vertical-line {
    width: 180px;
    height: 2px;
    background-color: white;
    margin: 0 auto 20px auto;
}

.epigraph-quote {
    font-size: 16px;
    margin-bottom: 15px;
}

.epigraph-paragraph {
    font-size: 15px;
    line-height: 1.6;
}
</style>



    </body>
            <?php include("footer.php"); ?>

</html>


    

