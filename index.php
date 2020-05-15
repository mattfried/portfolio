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
    <h1 class="mattFried" id="mattFried">

    </h1>
    <div class="titleLine"></div>
    <p class="titleTagLine" id="titleTagLine">

    </p>
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
      By day I am a Structural Engineering Technician who specializes in CAD/BIM, but one of my passions outside of my daily 9-5 is web development.
      My passion for technology led me into web development, and I've grown to love it more than I could have expected!
    </p>
    <p>
      I enjoy problem solving, and coding constantly requires this to complete each unique project I take on. Ultimately, I get satifaction when I deliver high-quality websites for myself and for my clients.
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
