<?php
// PHP variables and include header.php
$current = 'about';
$title = 'About | Matt Fried';
include('includes/header.php');
?>

<!--====================================
      NAV/COVER SECTION
======================================-->
<div class="coverContainer">
  <?php
  // include nav.php
  include('includes/nav.php');
  ?>

  <div class="mainTitle">
    <h1 class="mattFried">Matt Fried</h1>
    <div class="titleLine"></div>
    <p class="titleTagLine">Hi! &#x270C; I'm a Web Developer</p>
  </div>
  <div class="aboutSectionTitleDiv">
    <h2 class="aboutSectionTitle">About Me</h2>
    <img src="img/projectArrow.svg" class="aboutArrow" alt="down arrow" />
  </div>

</div>

<!--====================================
      ABOUT SECTION
======================================-->
<div class="aboutContainer">
  <div class="aboutMeImageContainer"></div>

  <div class="aboutMeSection">

    <p class="aboutMeP">From the moment I first logged <i>“Hello World”</i> to the browser, I’ve been captivated in the world of programming.</p>
    <p class="aboutMeP">Web development has given me the power to build and share apps with the world around me, to use and enjoy at their disposal.
      This is what feeds my passion to continually learn and improve my skills through engaging challenges, in-order to deliver detailed, elegant applications.</p>
      <p>I'm currently looking for full-time employment in a front-end developer position.
        Stick around a while, and browse my projects.</p>
    <!--
    <p class="aboutMeP">I am a motivated web developer specializing in front-end, seeking a full-time position with a company that I can help thrive, and make a positive impact in.</p>
    <p class="aboutMeP">As a developer, I am passionate about creating websites and web-apps that give the world around me access to use and enjoy.
      Although the process of daily problem solving and continual learning is challenging, the outcome of visually seeing my work come to fruition is what makes me thirst to continue creating, learning, and progressing.</p>
 -->

    <div class="buttonContainer">
      <a href="projects.php" class="myProjectsButton">Go to My Projects</a>
    </div>

  </div>

  <div class="divlineWrapper">
    <div class="divLine"></div>
  </div>

</div>


<!--====================================
      FOOTER
======================================-->
<?php include('includes/footer.php');?>
