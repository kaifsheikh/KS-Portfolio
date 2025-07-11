<?php
session_start();

if (!isset($_SESSION['name'])) {
    // Agar session nahi hai to wapas login page pe bhej do
    $_SESSION['alerts'][] = [
        'type' => 'error',
        'message' => 'Please login to access this page.'
    ];

    header('Location: index.php'); // ✅ Correct destination
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kaif Sheikh Porfolio</title>

    <!-- CSS Link -->
    <link rel="stylesheet" href="./CSS/style.css" />

    <!-- Box-Icon CND -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Header Section Design -->
    <header class="header">
      <a href="#" class="logo"
        >Kaif. <span class="animate" style="--i: 1"></span
      ></a>

      <div class="bx bx-menu" id="menu-icon">
        <span class="animate" style="--i: 2"></span>
      </div>

      <nav class="navbar">
        <a href="#home" class="active">Home</a>
        <a href="#about">About</a>
        <a href="#education">Education</a>
        <a href="#skills">Skills</a>
        <a href="#contact">Contact</a>
        <a href="portfolio.html">Portfolio</a>
        <a href="logout.php">Logout</a>

        <span class="active-nav"></span>
        <span class="animate" style="--i: 2"></span>
      </nav>
    </header>

    <!-- Home Section Design -->
    <section class="home show-animate" id="home">
      <div class="home-content">
        <h1>
          Hi, I'M <span>Kaif Sheikh</span>
          <span class="animate" style="--i: 2"></span>
        </h1>
        <div class="text-animate">
          <h3>Frontend Developer</h3>
          <span class="animate" style="--i: 3"></span>
        </div>

        <p>
          My objective is simple to be the best web developer that can be and to
          contribute to the technology industry all that I know and can do.
          <span class="animate" style="--i: 4"></span>
        </p>

        <div class="btn-box">
          <a href="./CV/CV.pdf" class="btn">CV</a>
          <!-- <a href="#" class="btn">Let's Talk</a> -->
          <span class="animate" style="--i: 5"></span>
        </div>
      </div>

      <div class="home-sci">
        <a href="https://www.facebook.com/kaif.skaikh.3/"
          ><i class="bx bxl-facebook"></i
        ></a>
        <a href="https://github.com/kaifsheikh"
          ><i class="bx bxl-github"></i
        ></a>
        <a href="https://www.instagram.com/kaif_sheikh125/"
          ><i class="bx bxl-instagram"></i
        ></a>
        <span class="animate" style="--i: 6"></span>
      </div>

      <div class="home-imgHover"></div>
      <span class="animate home-img" style="--i: 7"></span>
    </section>

    <!-- About Setion Design -->
    <section class="about" id="about">
      <h2 class="heading">
        About <span>Me</span><span class="animate scroll" style="--i: 1"></span>
      </h2>

      <div class="about-img">
        <img src="./Images/img.jpeg" alt="" />
        <span class="circle-spin"></span>
        <span class="animate scroll" style="--i: 2"></span>
      </div>

      <div class="about-content">
        <h3>
          Frontend Developer!
          <span class="animate scroll" style="--i: 3"></span>
        </h3>
        <p>
          My objective is simply to be the best web developer that can be and to
          contribute to the technology industry all that I know and can do.
          <span class="animate scroll" style="--i: 4"></span>
        </p>

        <div class="btn-box btns">
          <a href="#" class="btn">Read More</a>
          <span class="animate scroll" style="--i: 5"></span>
        </div>
      </div>
    </section>

    <!-- Education section design -->
    <section class="education" id="education">
      <h2 class="heading">
        My <span>Journey</span
        ><span class="animate scroll" style="--i: 1"></span>
      </h2>

      <div class="education-row">
        <div class="education-column">
          <h3 class="title">
            Education <span class="animate scroll" style="--i: 2"></span>
          </h3>

          <div class="education-box">

             <div class="education-content">
              <div class="content">
                <div class="year">
                  <i class="bx bxs-calendar"></i> 2025 - 2029
                </div>
                <h3>VIRTUAL UNIVERSITY HEC - PAKISTAN</h3>
                <p>Current Entrolled - 2025</p>
                <p>Expected Graduation - 2029</p>
                <p>Specialization - Software Engineer</p>
              </div>
            </div>

            <div class="education-content">
              <div class="content">
                <div class="year">
                  <i class="bx bxs-calendar"></i> 2022 - 2023
                </div>
                <h3>Intermediate BISE-HYD</h3>
                <p>Grade 'A'</p>
                <p>Percentage 83%</p>
              </div>
            </div>


            <div class="education-content">
              <div class="content">
                <div class="year">
                  <i class="bx bxs-calendar"></i> 2019 - 2020
                </div>
                <h3>Matriculation BISE-HYD</h3>
                <p>Grade 'A'</p>
                <p>Percentage 70%</p>
              </div>
            </div>

            <span class="animate scroll" style="--i: 3"></span>
          </div>
        </div>

        <div class="education-column" id="experiecne">
          <h3 class="title">
            Experience <span class="animate scroll" style="--i: 5"></span>
          </h3>

          <div class="education-box">
            <div class="education-content">
              <div class="content">
                <div class="year">
                  <i class="bx bxs-calendar"></i> 2024 - 2025
                </div>
                <h3>APTECH Learning Instructor</h3>
                <p>
                  Frontend & Backend
                </p>

                <p>
                 Currently Teaching in Web Development
                </p>
              </div>
            </div>

            <span class="animate scroll" style="--i: 6"></span>

          </div>

          <!-- ______________________________________ -->
           <h3 class="title">
            Experience <span class="animate scroll" style="--i: 5"></span>
          </h3>

          <div class="education-box">
            <div class="education-content">
              <div class="content">
                <div class="year">
                  <i class="bx bxs-calendar"></i> 2023 - 2024
                </div>
                <h3>Delight Confectionary</h3>
                <p>
                  Accountings - Costing - Statements
                </p>

                <p>
                  I worked in an Organization as a Accountant
                </p>
              </div>
            </div>

            <span class="animate scroll" style="--i: 6"></span>

          </div>
        </div>
      </div>
    </section>

    <!-- Skills Section Design -->
    <section class="skills" id="skills">
      <h2 class="heading">
        My <span>Skills</span
        ><span class="animate scroll" style="--i: 1"></span>
      </h2>

      <div class="skills-row">
        <div class="skills-column">
          <h3 class="title">
            Coding Skills <span class="animate scroll" style="--i: 2"></span>
          </h3>

          <div class="skills-box">
            <div class="skills-content">
              <div class="progress">
                <h3>HTML <span>90%</span></h3>
                <div class="bar"><span></span></div>
              </div>

              <div class="progress">
                <h3>CSS <span>90%</span></h3>
                <div class="bar"><span></span></div>
              </div>

              <div class="progress">
                <h3>JS <span>70%</span></h3>
                <div class="bar"><span></span></div>
              </div>

              <div class="progress">
                <h3>PHP <span>60%</span></h3>
                <div class="bar"><span></span></div>
              </div>

              
              <div class="progress">
                <h3>ReactJS <span>30%</span></h3>
                <div class="bar"><span></span></div>
              </div>

                <div class="progress">
                <h3>MYSQL <span>70%</span></h3>
                <div class="bar"><span></span></div>
              </div>

            <span class="animate scroll" style="--i: 3"></span>
          </div>

        </div>
      </div>
    </section>

    <!-- Contact Section Design -->
    <section class="contact" id="contact">
      <h2 class="heading">
        Contact <span>Me!</span>
        <span class="animate scroll" style="--i: 1"></span>
      </h2>

      <form action="#">
        <div class="input-box">
          <div class="input-field">
            <input type="text" placeholder="Full Name" required />
            <span class="focus"></span>
          </div>

          <span class="animate scroll" style="--i: 3"></span>

          <div class="input-field">
            <input type="text" placeholder="Email Address" required />
            <span class="focus"></span>
          </div>
        </div>

        <div class="input-box">
          <div class="input-field">
            <input type="number" placeholder="Mobile Number" required />
            <span class="focus"></span>
          </div>

          <div class="input-field">
            <input type="text" placeholder="Email Subject" required />
            <span class="focus"></span>
          </div>

          <span class="animate scroll" style="--i: 5"></span>
        </div>

        <div class="textarea-field">
          <textarea
            name=""
            id=""
            cols="30"
            rows="10"
            placeholder="Your Message"
            required
          ></textarea>
          <span class="focus"></span>

          <span class="animate scroll" style="--i: 7"></span>
        </div>

        <div class="btn-box btns">
          <button type="submit" class="btn">Submit</button>

          <span class="animate scroll" style="--i: 9"></span>
        </div>
      </form>
    </section>

    <!-- Footer Section Design -->
    <footer class="footer">
      <div class="footer-text">
        <p>Copyright &copy; 2023 By kaif / All Rights Reserved</p>

        <span class="animate scroll" style="--i: 1"></span>
      </div>

      <div class="footer-iconTop">
        <a href="#"><i class="bx bx-up-arrow-alt"></i></a>

        <span class="animate scroll" style="--i: 3"></span>
      </div>
    </footer>

    <!-- JS Link -->
    <script src="./JS/script.js"></script>
  </body>
</html>

<!-- video timeline number -->
<!-- 1:41:32 -->
