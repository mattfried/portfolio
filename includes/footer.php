    <footer>
      <ul class="footerLinkList">
        <li><a href="index.php"
          <?php if ($current == 'about') {
            echo "class='activePageLink'";
          } else {
            echo "class='inactivePageLink'";
          }?>
          >About</a></li>
        <li><a href="projects.php"
          <?php if ($current == 'projects') {
            echo "class='activePageLink'";
          } else {
            echo "class='inactivePageLink'";
          }?>
          >Projects</a></li>
        <li><a href="contact.php"
          <?php if ($current == 'contact') {
            echo "class='activePageLink'";
          } else {
            echo "class='inactivePageLink'";
          }?>
          >Contact</a></li>
        </ul>
      <div class="copyright">
        <span>
          <!-- <a href="https://www.instagram.com/mattfrieder/" target="_blank" class="logoLink">
            <img src="../img/instagramLogo.svg" class="logo" alt="instagram logo" />
          </a> -->
          <a href="https://www.linkedin.com/in/matt-fried-50b984b1/" target="_blank" class="logoLink">
            <img src="../img/linkedinLogo.svg" class="logo" alt="linkedin logo" />
          </a>
          <a href="https://codepen.io/mattfried/" target="_blank" class="logoLink">
            <img src="../img/codepenLogo.svg" class="logo" alt="codepen logo" />
          </a>
          <a href="https://github.com/mattfried" target="_blank" class="logoLink">
            <img src="../img/githubLogo.svg" class="logo" alt="github logo" />
          </a>
        </span>
        <span>Designed &amp; Developed by Matt Fried &copy;
          <script>document.write(new Date().getFullYear())</script>
        </span>
      </div>
    </footer>

    <!-- jQuery CDN used during development -->
    <!-- <script
      src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous">
    </script> -->

    <!-- compressed jQuery 3.4.0 for production -->
    <script src="../javascript/jquery-3.4.0.min.js"></script>
    <script src="../javascript/app.js"></script>
    <?php
    // if on About page, include cover.js
    if ($current == 'about') {
      echo "<script src='../javascript/cover.js'></script>";
    }
    ?>

  </body>
</html>
