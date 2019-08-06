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
        <div class="project"> <!-- Sports Standings App -->
          <div class="projectImageiPadLandscape">
            <img src="img/sports-standings-thumbnail.png" alt="Sports Standings App displayed on smartphone" />
          </div>
          <div class="projectInfoContainer">
            <div class="projectTitleDiv">
              <h4 class="projectTitle">Sports Standings</h4>
              <p class="websiteInfo">Development &nbsp; | &nbsp; Partial Design</p>
              <p class="websiteCoding"><span>Sass/SCSS</span>&centerdot;<span>JavaScript</span>&centerdot;<span>Socket.io</span></p>
              <p class="websiteCoding"><span>Keystone.js CMS</span>&centerdot;<span>Node.js</span>&centerdot;<span>Express.js</span>&centerdot;<span>MongoDB</span></p>
            </div>
            <div class="projectNavs">
              <a href="http://www.sportstandings.ca/" target="_blank"><button class="visitWebsiteButton">VISIT WEB APP</button></a>
              <button id="aboutProject2Link" class="aboutProjectLink">LEARN MORE &nbsp; &#8675;</button>
            </div>
            <div id="aboutProject2" class="aboutProjectDiv">
              <span>About</span>
              <p class="marginTop">Sports standings website with live, real-time data for the most popular leagues.</p>
              <br />
              <span>Approach</span>
              <p class="marginTop">
                This website is powered by Keystone.js (Node.js CMS) platform, built on Express and MongoDB.
                I've utilized <a href="https://www.mysportsfeeds.com/" target="_blank">MySportsFeeds</a> data API, and incorporated my self-modified version of their <a href="https://github.com/mattfried/mysportsfeeds-node" target="_blank">NodeJS wrapper</a>.
                Socket.io is used to seamlessly communicate between the client and server.
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
              <p class="websiteCoding"><span>HTML</span>&centerdot;<span>CSS</span>&centerdot;<span>Sass&sol;SCSS</span>&centerdot;<span>JavaScript</span>&centerdot;<span>PHP</span></p>
            </div>
            <div class="projectNavs">
              <a href="https://prairieoakphotography.com/" target="_blank" class="visitWebsiteButton">VISIT WEBSITE</a>
              <button id="aboutProject1Link" class="aboutProjectLink">LEARN MORE &nbsp; &#8675;</button>
            </div>
            <div id="aboutProject1" class="aboutProjectDiv">
              <span>About</span>
              <p class="marginTop">Website for local photography business, Prairie Oak Photography.</p>
              <br />
              <span>Approach</span>
              <p class="marginTop">PHP is used alongside the front-end in-order to add logical programming to the static pages.
                A couple examples used here are includes for implementing reusable sections to each page such as the header and footer, as well as storing and executing code chunks based on given variables assigned to each page.</p>
                <p>Sass/SCSS preprocessor is used as an extension for CSS.</p>
                <p>All effects and user interactiveness is programmed with raw JavaScript (no libraries).</p>
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
              <p class="websiteCoding"><span>HTML</span>&centerdot;<span>CSS</span>&centerdot;<span>Sass/SCSS</span>&centerdot;<span>JavaScript</span>&centerdot;<span>ReactJS</span></p>
            </div>
            <div class="projectNavs">
              <a href="https://mattfried.github.io/to-do-list/" target="_blank"><button class="visitWebsiteButton">VISIT WEB APP</button></a>
              <button id="aboutProject3Link" class="aboutProjectLink">LEARN MORE &nbsp; &#8675;</button>
            </div>
            <div id="aboutProject3" class="aboutProjectDiv">
              <span>About</span>
              <p class="marginTop">To Do List web app built with <a href="https://github.com/facebook/create-react-app" target="_blank">Create React App.</a></p>
              <br />
              <span>Approach</span>
              <p class="marginTop">I used ReactJS to create an interactive UI for this app, which gives the user the ability to add and delete tasks at will.
                A number counter is provided in the header to display the current total number of tasks in the list at any given time.</p>
                <p>The bulk of this ReactJS app uses function and class components to store data, handle state changes, and then pass this data up and down the component chain via props.</p>
            </div>
            <div class="repoDiv">
              <a href="https://github.com/mattfried/to-do-list" target="_blank" class="projectRepo">View Project Source Code</a>
            </div>
          </div>
        </div>  <!-- / To Do List Web App -->
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
              <button id="aboutProject4Link" class="aboutProjectLink">LEARN MORE &nbsp; &#8675;</button>
            </div>
            <div id="aboutProject4" class="aboutProjectDiv">
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
              <p class="websiteCoding"><span>HTML</span>&centerdot;<span>CSS</span>&centerdot;<span>JavaScript</span>&centerdot;<span>jQuery</span>&centerdot;<span>PHP</span></p>
            </div>
            <div class="projectNavs">
              <a href="https://mattfried.ca/"><button class="visitWebsiteButton">GO TO HOME PAGE</button></a>
              <button id="aboutProject5Link" class="aboutProjectLink">LEARN MORE &nbsp; &#8675;</button>
            </div>
            <div id="aboutProject5" class="aboutProjectDiv">
              <span>About</span>
              <p class="marginTop">My portfolio website showcasing my progress as a web developer.</p>
              <br />
              <span>Approach</span>
              <p class="marginTop">PHP is used alongside the front-end in-order to add logical programming to the static pages.
                A couple examples used here are includes for implementing reusable sections to each page such as the header and footer,
                as well as storing and executing code chunks based on given variables assigned to each page.</p>
                <p>jQuery was incorporated for ease and versatility with adding visual effects and an interactive UX.</p>
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
              <button id="aboutProject6Link" class="aboutProjectLink">LEARN MORE &nbsp; &#8675;</button>
            </div>
            <div id="aboutProject6" class="aboutProjectDiv">
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
              <button id="aboutProject7Link" class="aboutProjectLink">LEARN MORE &nbsp; &#8675;</button>
            </div>
            <div id="aboutProject7" class="aboutProjectDiv">
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
