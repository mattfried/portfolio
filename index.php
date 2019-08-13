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

    <p>
      From the moment I first logged <i>“Hello World”</i> to the browser, I’ve been captivated in the world of programming...
    </p>
    <p>
      By day I am currently a Structural Engineering Technician at Wolfrom Engineering Ltd, a structural consulting engineering firm in Winnipeg, MB, but by night I am a Web Developer.
      A few years ago, I realized that my heart wasn't invested in the engineering field any longer, and so I started looking for a career change.
      My passion for technology led me into web development, and I grew to love it more than I could have expected!
    </p>
    <p>
      My passion for coding is fed my continually learning and improving through each engaging challenge I face, in order to deliver detailed, high-quality web-apps.
      I am currently looking for a full-time Front-End Developer position in the Edmonton, AB area, as this is where my family is planning on, and ready to relocate to.
     </p>

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
