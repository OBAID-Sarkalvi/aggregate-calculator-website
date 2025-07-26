<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #c6f9fd;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .main-footer {
      width: 100%;
    }

    .footer-top {
      background-color: #0c4e52;
      text-align: center;
      padding: 10px 0;
      font-size: 22px;
      color: white;
      font-weight: bold;
    }

    .footer-middle {
      background-color: #0e676eff;
      color: white;
      padding: 30px 20px;
    }

    .footer-row {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      gap: 30px;
    }

    .footer-pic {
      flex: 0 0 25%;
      text-align: center;
    }

    .footer-image {
      width: 250px;
      height: 250px;
      border-radius: 15px;
      border: 4px solid white;
      object-fit: cover;
    }

    .footer-text {
      flex: 0 0 65%;
      font-size: 15px;
      line-height: 1.6;
    }

    .footer-icons {
      margin-top: 15px;
    }

    .footer-icon {
      color: white;
      font-size: 22px;
      margin-right: 15px;
      text-decoration: none;
      transition: color 0.3s ease, transform 0.2s;
    }

    .footer-icon:hover {
      color: #ffc107;
      transform: scale(1.2);
    }

    @media (max-width: 768px) {
      .footer-row {
        flex-direction: column;
        text-align: center;
      }

      .footer-pic,
      .footer-text {
        flex: 0 0 100%;
      }

      .footer-icons {
        justify-content: center;
      }
    }
  </style>
</head>

<body>

  <!-- ==== FOOTER START ==== -->
  <footer class="main-footer">

    <!-- Row 1: Thank You -->
    <div class="footer-top">
      <p>Thanks For Visiting</p>
    </div>

    <!-- Row 2: Picture + Description + Icons -->
    <div class="footer-middle">
      <div class="footer-row">

        <!-- Picture -->
        <div class="footer-pic">
          <img src="my-pic.jpg" alt="Your Picture" class="footer-image">
        </div>

        <!-- Text + Icons -->
        <div class="footer-text">
          <p><strong>Developed by</strong><br>
            Obaid Ur Rehman Waiz Sarkalvi<br>
            Student of Computer and Information Sciences<br>
            at Pakistan Institute of Engineering and Applied Sciences (PIEAS), Nilore, Islamabad
          </p>

          <p><strong>Stay connected with us</strong></p>

          <div class="footer-icons">
            <a href="https://github.com/OBAID-Sarkalvi" target="_blank" class="footer-icon">
              <i class="fab fa-github"></i>
            </a>
            <a href="https:linkedin.com/in/obaid-ur-rehman-37a490328" target="_blank" class="footer-icon">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="https:https://www.youtube.com/@GalaxyOfIntellectuals" target="_blank" class="footer-icon">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>

      </div>
    </div>

  </footer>
  <!-- ==== FOOTER END ==== -->

</body>
</html>
