<?php
// PHP variables and include header.php
$current = 'projects';
$title = 'Projects | Matt Fried';
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

  <!--====================================
        PROJECT SECTION
  ======================================-->

  <h3 class="sectionTitle">My Projects</h3>

</div>
    <div class="projectSection">  <!-- Project Section -->

      <div class="projectContainer">  <!-- Project Container -->
        <div class="project"> <!-- Architect Inc Website -->
          <div class="projectImageMacbook">
            <img src="img/architectinc-wp.png" alt="Architect Inc website displayed on laptop and smartphone" />
          </div>
          <div class="projectInfoContainer">
            <div class="projectTitleDiv">
              <h4 class="projectTitle">Architect Inc</h4>
              <p class="websiteInfo">Partial Design &nbsp; | &nbsp; Partial Development</p>
              <p class="websiteCoding"><span>HTML</span>&centerdot;<span>CSS</span>&centerdot;<span>Bootstrap</span>&centerdot;<span>JavaScript</span></p>
              <p class="websiteCoding"><span>PHP</span>&centerdot;<span>WordPress</span>
            </div>
            <div class="projectNavs">
              <a href="https://www.architectinc.ca/" target="_blank"><button class="visitWebsiteButton">VISIT WEBSITE</button></a>
              <button id="aboutProject1Link" class="aboutProjectLink">LEARN MORE &nbsp; &#8675;</button>
            </div>
            <div id="aboutProject1" class="aboutProjectDiv">
              <span>About</span>
              <p class="marginTop">Architect Inc is a business website for a mock architecture firm.</p>
              <br />
              <span>Approach</span>
              <p class="marginTop">
                Coming Soon...
              </p>
            </div>
            <div class="repoDiv">
              <a href="https://github.com/mattfried/architect-inc" target="_blank" class="projectRepo">View Project Source Code</a>
            </div>
          </div>
        </div>  <!-- / Architect Inc Website -->
      </div>  <!-- / Project Container -->

      <div class="divLine"></div>

      <div class="projectContainer">  <!-- Project Container -->
        <div class="project"> <!-- Sports Standings App -->
          <div class="projectImageiPadLandscape">
            <img src="img/sports-standings-thumbnail.png" alt="Sports Standings App displayed on smartphone" />
          </div>
          <div class="projectInfoContainer">
            <div class="projectTitleDiv">
              <h4 class="projectTitle">Sports Standings</h4>
              <p class="websiteInfo">Design &nbsp; | &nbsp; Development</p>
              <p class="websiteCoding"><span>Sass&sol;SCSS</span>&centerdot;<span>Bootstrap</span>&centerdot;<span>JavaScript</span>&centerdot;<span>jQuery</span></p>
              <p class="websiteCoding"><span>Keystone CMS</span>&centerdot;<span>Node.js</span>&centerdot;<span>Express.js</span>&centerdot;<span>MongoDB</span></p>
              <p class="websiteCoding"><span>Handlebars</span>&centerdot;<span>Socket.io</span></p>
            </div>
            <div class="projectNavs">
              <!-- <a href="https://www.sportstandings.ca/" target="_blank"><button class="visitWebsiteButton">VISIT WEB APP</button></a> -->
              <button id="aboutProject3Link" class="aboutProjectLink">LEARN MORE &nbsp; &#8675;</button>
            </div>
            <div id="aboutProject3" class="aboutProjectDiv">
              <span>About</span>
              <p class="marginTop">Sports Standings is as it states, a website that provides live stats and standings for the most popular leagues: NHL, NBA, NFL, and MLB.</p>
              <br />
              <span>Approach</span>
              <p class="marginTop">
                I initially built this as a demo web-app with API requests done on the front-end, but later I taught myself Node.js and re-programmed with back-end API requests in order to generate a more secure infrastructure. Furthermore, I then integrated the project with Keystone (Node.js CMS) to allow for future scalability.
              </p>
            </div>
            <div class="repoDiv">
              <a href="https://github.com/mattfried/sports-standings" target="_blank" class="projectRepo">View Project Source Code</a>
            </div>
          </div>
        </div>  <!-- / Sports Standings App -->
      </div>  <!-- / Project Container -->

      <div class="divLine"></div>

      <div class="projectContainer">  <!-- Project Container -->
        <div class="project"> <!-- Prairie Oak Photography -->
          <div class="projectImageMacbook">
            <img src="img/pop-thumbnail.png" alt="Prairie Oak Photography website displayed on laptop and smartphone" />
          </div>
          <div class="projectInfoContainer">
            <div class="projectTitleDiv">
              <h4 class="projectTitle">Prairie Oak Photography</h4>
              <p class="websiteInfo">Design &nbsp; | &nbsp; Development</p>
              <p class="websiteCoding"><span>HTML</span>&centerdot;<span>PHP</span>&centerdot;<span>Sass&sol;SCSS</span>&centerdot;<span>JavaScript</span></p>
            </div>
            <div class="projectNavs">
              <a href="https://prairieoakphotography.com/" target="_blank" class="visitWebsiteButton">VISIT WEBSITE</a>
              <button id="aboutProject2Link" class="aboutProjectLink">LEARN MORE &nbsp; &#8675;</button>
            </div>
            <div id="aboutProject2" class="aboutProjectDiv">
              <span>About</span>
              <p class="marginTop">
                Prairie Oak Photography is a local photography business, and this client wanted a simple, clean, yet elegant website to showcase her work.
                I designed and developed this custom website from the ground up according to those needs.
              </p>
              <br />
              <span>Approach</span>
              <p class="marginTop">
                The main features include auto/manual portfolio slideshows, an about section to get an inside scoop on the business and the person behind the lens, and pricing/contact information for new and returning customers.
                I optimized the client’s high-quality photos in Photoshop in order to enhance the website performance and loading speeds.
              </p>
            </div>
            <div class="repoDiv">
              <a href="https://github.com/mattfried/prairie-oak-photography" target="_blank" class="projectRepo">View Project Source Code</a>
            </div>
          </div>
        </div>  <!-- / Prairie Oak Photography -->
      </div>  <!-- / Project Container -->

      <div class="divLine"></div>

      <div class="projectContainer">  <!-- Project Container -->
        <div class="project"> <!-- To Do List Web App -->
          <div class="projectImageiPadPortrait">
            <img src="img/to-do-list-thumbnail.png" alt="To Do List web app displayed on smartphone" />
          </div>
          <div class="projectInfoContainer">
            <div class="projectTitleDiv">
              <h4 class="projectTitle">To Do List App</h4>
              <p class="websiteInfo">Design &nbsp; | &nbsp; Development</p>
              <p class="websiteCoding"><span>HTML</span>&centerdot;<span>Sass&sol;SCSS</span>&centerdot;<span>JavaScript</span>&centerdot;<span>ReactJS</span></p>
            </div>
            <div class="projectNavs">
              <a href="https://mattfried.github.io/to-do-list/" target="_blank"><button class="visitWebsiteButton">VISIT WEB APP</button></a>
              <button id="aboutProject4Link" class="aboutProjectLink">LEARN MORE &nbsp; &#8675;</button>
            </div>
            <div id="aboutProject4" class="aboutProjectDiv">
              <span>About</span>
              <p class="marginTop">This is a fun task list web-app built with React.</p>
              <br />
              <span>Approach</span>
              <p class="marginTop">Features include an interactive add-and-delete function, a total task counter, and responsive cross-platform, cross-browser compatibility.</p>
            </div>
            <div class="repoDiv">
              <a href="https://github.com/mattfried/to-do-list" target="_blank" class="projectRepo">View Project Source Code</a>
            </div>
          </div>
        </div>  <!-- / To Do List Web App -->
      </div>  <!-- / Project Container -->

      <div class="divLine"></div>

      <div class="projectSection">  <!-- Project Section -->

        <div class="projectContainer">  <!-- Project Container -->
          <div class="project"> <!-- Concrete Skateboard Shop Website -->
            <div class="projectImageMacbook">
              <img src="img/concreteskateshop-wp.png" alt="Concrete Skateboard Shop website displayed on laptop and smartphone" />
            </div>
            <div class="projectInfoContainer">
              <div class="projectTitleDiv">
                <h4 class="projectTitle">Concrete Skateboard Shop</h4>
                <p class="websiteInfo">Design &nbsp; | &nbsp; Development</p>
                <p class="websiteCoding"><span>HTML</span>&centerdot;<span>CSS</span>&centerdot;<span>Bootstrap</span>&centerdot;<span>JavaScript</span>&centerdot;<span>jQuery</span></p>
                <p class="websiteCoding"><span>jQuery plugins</span>&centerdot;<span>PHP</span>&centerdot;<span>WordPress</span></p>
              </div>
              <div class="projectNavs">
                <a href="https://concreteskateshop.ca/" target="_blank"><button class="visitWebsiteButton">VISIT WEBSITE</button></a>
                <button id="aboutProject5Link" class="aboutProjectLink">LEARN MORE &nbsp; &#8675;</button>
              </div>
              <div id="aboutProject5" class="aboutProjectDiv">
                <span>About</span>
                <p class="marginTop">This is a custom WordPress theme website for a concept skate shop company called Concrete Skateboard Shop.</p>
                <br />
                <span>Approach</span>
                <p class="marginTop">
                  I used the <a href="https://www.advancedcustomfields.com/" target="_blank">Advanced Custom Fields</a> plugin to create user-entry points in the back-end of the PHP-based CMS, allowing the content manager to edit everything from the relative content blocks on the front-end interface. This includes product/brand images, product prices, external links, and text blocks for each section.
                </p>
                <p>
                  Bootstrap is incorporated for responsive page styling and layout, and jQuery plugin libraries <a href="https://owlcarousel2.github.io/OwlCarousel2/" target="_blank">Owl Carousel</a> and <a href="https://dimsemenov.com/plugins/magnific-popup/" target="_blank">Magnific Popup</a> for added interactive UI and UX.
                </p>
              </div>
              <div class="repoDiv">
                <a href="https://github.com/mattfried/concreteskateshop-wordpress" target="_blank" class="projectRepo">View Project Source Code</a>
              </div>
            </div>
          </div>  <!-- / Concrete Skateboard Shop Website -->
        </div>  <!-- / Project Container -->

        <div class="divLine"></div>

      <div class="projectContainer">  <!-- Project Container -->
        <div class="project"> <!-- Calculator Web App -->
          <div class="projectImageiPadPortrait">
            <img src="img/calculator-thumbnail.png" alt="Calculator web app displayed on smartphone" />
          </div>
          <div class="projectInfoContainer">
            <div class="projectTitleDiv">
              <h4 class="projectTitle">Calculator App</h4>
              <p class="websiteInfo">Design &nbsp; | &nbsp; Development</p>
              <p class="websiteCoding"><span>HTML</span>&centerdot;<span>CSS</span>&centerdot;<span>JavaScript</span></p>
            </div>
            <div class="projectNavs">
              <a href="https://mattfried.github.io/calculator" target="_blank"><button class="visitWebsiteButton">VISIT WEB APP</button></a>
              <button id="aboutProject6Link" class="aboutProjectLink">LEARN MORE &nbsp; &#8675;</button>
            </div>
            <div id="aboutProject6" class="aboutProjectDiv">
              <span>About</span>
              <p class="marginTop">My creation of a responsive calculator app.</p>
              <br />
              <span>Approach</span>
              <p class="marginTop">I used JavaScript to set the values of each number and operator, and then evaluate the user's inputs in order to output the mathematical solution no matter what combination of valid inputs are provided.
                Additional functions and 'if' statements were added to change the font size of the output depending on the length of its displayed number.</p>
              <p>The output screen is coded so that it only displays the current input number or operator rather than displaying the entire input chain.</p>
              <p>In order to achieve a responsive web app, media queries were used to accommodate various screen and device sizes, for both portrait and landscape orientations.</p>
            </div>
            <div class="repoDiv">
              <a href="https://github.com/mattfried/calculator" target="_blank" class="projectRepo">View Project Source Code</a>
            </div>
          </div>
        </div>  <!-- / Calculator Web App -->
      </div>  <!-- / Project Container -->

      <div class="divLine"></div>

      <div class="projectContainer">  <!-- Project Container -->
        <div class="project"> <!-- My Portfolio -->
          <div class="projectImageMacbook">
            <img src="img/portfolio-thumbnail.png" alt="My Portfolio website displayed on laptop" />
          </div>
          <div class="projectInfoContainer">
            <div class="projectTitleDiv">
              <h4 class="projectTitle">My Portfolio <span>(This Website)</span></h4>
              <p class="websiteInfo">Design &nbsp; | &nbsp; Development</p>
              <p class="websiteCoding"><span>HTML</span>&centerdot;<span>PHP</span>&centerdot;<span>CSS</span>&centerdot;<span>JavaScript</span>&centerdot;<span>jQuery</span></p>
            </div>
            <div class="projectNavs">
              <a href="https://mattfried.ca/"><button class="visitWebsiteButton">GO TO HOME PAGE</button></a>
              <button id="aboutProject7Link" class="aboutProjectLink">LEARN MORE &nbsp; &#8675;</button>
            </div>
            <div id="aboutProject7" class="aboutProjectDiv">
              <span>About</span>
              <p class="marginTop">My portfolio website showcasing my progress as a web developer.</p>
              <br />
              <span>Approach</span>
              <p class="marginTop">My journey as a web developer is unique, and I felt that it was only fitting to design and develop my portfolio website from scratch - no CMS, no templates - in order to best represent myself. I did however implement jQuery to enhance the interactive UX design which includes animations, navigation bar/button manipulation, and drop-down content.</p>
            </div>
            <div class="repoDiv">
              <a href="#" target="_blank" class="projectRepo">View Project Source Code</a>
            </div>
          </div>
        </div>  <!-- / My Portfolio -->
      </div>  <!-- / Project Container -->

      <div class="divLine"></div>

      <div class="projectContainer">  <!-- Project Container -->
        <div class="project"> <!-- Full Stack Conference -->
          <div class="projectImageMacbook">
            <img src="img/full-stack-conf-thumbnail.png" alt="Full Stack Conference website displayed on laptop" />
          </div>
          <div class="projectInfoContainer">
            <div class="projectTitleDiv">
              <h4 class="projectTitle">Full Stack Conference</h4>
              <p class="websiteInfo">Development</p>
              <p class="websiteCoding"><span>HTML</span>&centerdot;<span>CSS</span>&centerdot;<span>Bootstrap</span>&centerdot;<span>JavaScript</span></p>
            </div>
            <div class="projectNavs">
              <a href="https://mattfried.github.io/full-stack-conf/" target="_blank"><button class="visitWebsiteButton">VISIT WEBSITE</button></a>
              <button id="aboutProject8Link" class="aboutProjectLink">LEARN MORE &nbsp; &#8675;</button>
            </div>
            <div id="aboutProject8" class="aboutProjectDiv">
              <span>About</span>
              <p class="marginTop">Full Stack Conference is a single page mock website that serves as the info and registration hub for an upcoming conference.</p>
              <br />
              <span>Approach</span>
              <p class="marginTop">This website was developed using Bootstrap as the main framework to get familiar with using this popular open source toolkit.
                A pop-up registration form with form field validation is incorporated to imitate a real-life situation where a form needs to be completed prior to being submitted to a back-end server.
                The schedule section is adaptive, as in the current agenda item will be highlighted based on the current time zone.</p>
              <p>The design elements and general format of this page were provided in an online web development course.</p>
            </div>
            <div class="repoDiv">
              <a href="https://github.com/mattfried/full-stack-conf" target="_blank" class="projectRepo">View Project Source Code</a>
            </div>
          </div>
        </div>  <!-- / Full Stack Conference -->
      </div>  <!-- / Project Container -->

      <div class="divLine"></div>

      <div class="projectContainer">  <!-- Project Container -->
        <div class="project"> <!-- City of Winnipeg Guide -->
          <div class="projectImageiPadLandscape">
            <img src="img/city-of-winnipeg-guide-thumbnail.png" alt="City of Winnipeg Guide website displayed on smartphone" />
          </div>
          <div class="projectInfoContainer">
            <div class="projectTitleDiv">
              <h4 class="projectTitle">City of Winnipeg Guide</h4>
              <p class="websiteInfo">Development &nbsp; | &nbsp; Partial Design</p>
              <p class="websiteCoding"><span>HTML</span>&centerdot;<span>CSS</span>&centerdot;<span>Javascript</span></p>
            </div>
            <div class="projectNavs">
              <a href="https://mattfried.github.io/winnipeg-guide/" target="_blank"><button class="visitWebsiteButton">VISIT WEBSITE</button></a>
              <button id="aboutProject9Link" class="aboutProjectLink">LEARN MORE &nbsp; &#8675;</button>
            </div>
            <div id="aboutProject9" class="aboutProjectDiv">
              <span>About</span>
              <p class="marginTop">The City of Winnipeg Guide is a single page website showcasing some of the city’s best food, drinks, and sporting events. This is a practice project for an online web development course.</p>
              <br />
              <span>Approach</span>
              <p class="marginTop">I originally structured the webpage by using floats for the header navigation and main content columns, but later changed to using flexbox upon learning the concepts.
                From here on out I've been using flexbox in all of my projects because of its efficiency and ease of future editing where necessary.</p>
              <p>I incorporated Google Maps via JavaScript through Google's API.</p>
              <p>Portions of the design elements were provided in an online web development course.</p>
            </div>
            <div class="repoDiv">
              <a href="https://github.com/mattfried/winnipeg-guide" target="_blank" class="projectRepo">View Project Source Code</a>
            </div>
          </div>
        </div>  <!-- / City of Winnipeg Guide -->
      </div>  <!-- / Project Container -->


      <div class="divLine"></div>

  </div>  <!-- /Project Section -->
</div>  <!-- /Project Section Container -->

<!--====================================
      FOOTER
======================================-->
<?php include('includes/footer.php');?>
