  <body>
    <nav class="navbar">
      <div class="rowNavbarFlexContainer">
        <div class="navbarFlexContainer">
          <a href="index.php" class="homeLink"><img src="../img/mattfriedLogo.png" id="mattfriedLogo" alt="Matt Fried's Logo" /></a>
          <button href="#" class="navbarButton"><img id="navbarButtonImage" src="img/navbarImage.svg" alt="navigation drop down" /></button>
        </div>
        <div class="rowNavbarMenu">
          <ul>
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
        </div>
      </div>
      <div class="buttonNavbarMenu" id="buttonNavbarMenu">
        <ul>
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
      </div>
    </nav>
