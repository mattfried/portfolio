<?php
// PHP variables and include header.php
$current = 'contact';
$title = 'Contact | Matt Fried';
include('includes/header.php');
?>

<!--====================================
      NAV/COVER SECTION
======================================-->
<div class="navContainer">
  <?php
  // include nav.php
  include('includes/nav.php');
  ?>

  <h3 class="sectionTitle">Contact Me</h3>
</div>

<!--====================================
      CONTACT SECTION
======================================-->
<div class="contactSection">
  <p>Email Me:</p>
  <div class="contactButtonContainer">
    <a href="mailto:fried1@live.com"><button class="contactButton"><img src="img/email.svg" id="emailIcon" alt="email icon" /></button></a>
  </div>
  <!-- <p>Download Resume:</p>
  <div class="contactButtonContainer">
    <a href="../img/coding.jpeg" download><button class="contactButton"><img src="img/download.svg" id="downloadIcon" alt="download icon" /></button></a>
  </div> -->

</div>

<div class="divLine"></div>


<!--====================================
      FOOTER
======================================-->
<?php include('includes/footer.php');?>
