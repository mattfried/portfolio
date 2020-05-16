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
  <p class="contactP">Need help with your new or current website? Send me an email, I'd love to chat!</p>
  <p class="emailmeP">Email Me:</p>
  <div class="contactButtonContainer">
    <a href="mailto:matt_fried@outlook.com"><button class="contactButton"><img src="img/email.svg" id="emailIcon" alt="email icon" /></button></a>
  </div>
  <!-- <p class="downloadP">Download Resume:</p>
  <div class="contactButtonContainer">
    <a href="docs/mattfried_resume.pdf" download><button class="contactButton"><img src="img/download.svg" id="downloadIcon" alt="download icon" /></button></a>
  </div> -->

</div>

<div class="divLine"></div>


<!--====================================
      FOOTER
======================================-->
<?php include('includes/footer.php');?>
