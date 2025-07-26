<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Galaxy of Intellectuals</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      margin: 0;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
        background-color: #189ca5ff;

      /*background-color: #065785;*/
    }

    .top-header {
      background: linear-gradient(to right, #0e676eff, #0e676eff );
      color: white;
      padding: 20px 10px;
    }

    .profile-pic {
      width: 180px;
      height: 180px;
      border-radius: 20%;
      border: 4px #03474cff;
      object-fit: cover;
      display: block;
      margin: 0 auto;
    }

    .name-text {
      text-align: center;
      margin-top: 10px;
      font-weight: bold;
      font-size: 1rem;
    }

    .heading-title {
      font-size: 2.5rem;
      font-weight: bold;
    }

    .urdu-quote {
      font-size: 1.5rem;
      font-family: 'Noto Nastaliq Urdu', serif;
      margin-top: 5px;
    }

    .nav-bar {
       background-color : #023537ff
      /*background-color: #04719c;*/
    }

    .nav-link {
      color: white !important;
      font-weight: 500;
    }

    .nav-link:hover {
      background-color: #02597a;
      border-radius: 5px;
    }
  </style>
</head>
<body>

<!-- Top Header Row -->
<div class="container-fluid top-header">
  <div class="row align-items-center">
    <!-- Left: Profile Picture and Name -->
    <div class="col-md-4 text-center">
      <img src="Channel LOGO.png" alt="Profile" class="profile-pic">
    </div>

    <!-- Right: Heading and Urdu Text -->
    <div class="col-md-8 text-center">
      <div class="heading-title">GALAXY OF INTELLECTUALS</div>
      <div class="urdu-quote">اُطْلُبُوا الْعِلْمَ مِنَ الْمَهْدِ إِلَى اللَّحْدِ</div>
    </div>
  </div>
</div>

<!-- Navigation Bar Row -->
<nav class="navbar navbar-expand-md nav-bar">
  <div class="container">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Main-Page  | </a>
         
      </li>
      <li class="nav-item">
        <a class="nav-link" href="response.php">  Aggregate-Calculator |</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="impUni.php"> Top-Rank-Universities  | </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="faq.php">  FAQs   </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">  </a>
      </li>
    </ul>
  </div>
</nav>
