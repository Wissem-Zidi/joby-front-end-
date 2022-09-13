<?php
  require 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./Main page/style.css" />
    <link rel="stylesheet" href="./Main page/media.css" />
    <title>Joby</title>
  </head>
  <body>
    <!-- 
      scroll to top
    -->
    <button id="toTop">
      <img height="25" src="./project assets/svg/top.svg" alt="" />
    </button>
    <!-- 
      
      
      side bar -->
    <aside class="close" id="side-bar">
      <div id="side-bar__inner">
        <div id="side-bar__header">
          <h3 id="title">
            <a href="<?php echo ($logged_in)? "./accountPage/" : "./signin/";  ?>" id="login">
              <img
                title="Account"
                src="./project assets/svg/accont.svg"
                height="30"
                alt=""
              />
              <h6 style="font-size: 0.8rem">
              <?php
                  echo ($logged_in)? $user->username : "Login";
              ?>
              </h6>
            </a>
          </h3>
          <button id="hideSideBar">
            <img height="25" src="./project assets/svg/exit.svg" alt="x" />
          </button>
        </div>
        <div id="side-bar__content">
          <ul>
            <li><a href="#">Be a Freelancer</a></li>
            <li><a href="#">Find a Job</a></li>
            <li><a href="#">Hire someone</a></li>
            <li><a href="#">Popular</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
    </aside>

    <!-- 






    main-->
    <main id="content">
      <section id="hero">
        <header id="header">
          <button id="showSideBar">
            <img
              title="side Bar"
              id="showAsideImg"
              src="./project assets/svg/burger.svg"
              height="25"
              alt=">"
            />
          </button>
          <h2 id="title">Joby</h2>
          <a href="<?php echo ($logged_in)? "./accountPage/" : "./signin/";  ?>" id="login">
            <img
              title="Account"
              src="./project assets/svg/accont.svg"
              height="30"
              alt=""
            />
            <h6>
            <?php
                  echo ($logged_in)? $user->username : "Login";
            ?>
            </h6>
          </a>
          <div id="searchBar">
            <input
              title="minimum 3 characters"
              id="searchInput"
              placeholder="search"
              type="search"
              autocomplete="off"
            />
            <button id="searchBtn" onclick="window.location.href = './searchPage/index.html'">
              <img
                title="search"
                height="15"
                src="./project assets/svg/search.svg"
                alt="Submit"
              />
            </button>
            <div id="search__drop-down">
              <ul id="search__Menu__content"></ul>
            </div>
          </div>
          <div id="navigation">
            <ul id="navigation__ul">
              <li><a href="#">Info</a></li>
              <li><a href="#">About-us</a></li>
              <li><a href="#">Contact</a></li>
              <li>
                <a id="login-wide-screen" href="<?php echo ($logged_in)? "./accountPage/" : "./signin/";  ?>">
                  <?php
                    echo ($logged_in)? $user->username : "Login";
                  ?>
                </a>
              </li>
            </ul>
          </div>
        </header>
        <section id="hero-content">
          <div>
            <p id="hero__p">
              <span id="hero__p__title">Joby</span> Your Way to find a Job
              <br />
              <br />
              <a id="hero__join" href="#">Join Now</a>
            </p>
            <div id="hero__suggestions">
              <ul>
                <li><a href="#">Freelance</a></li>
                <li><a href="#">Developer</a></li>
                <li><a href="#">Designer</a></li>
                <li><a href="#">Companies</a></li>
              </ul>
            </div>
          </div>
          <div>
            <div id="hero__img">
              <img src="./project assets/img/hero-illustration.svg" alt="" />
            </div>
          </div>
        </section>
      </section>

      <!-- 
        



      page2-->
      <section id="page2">
        <h2>Find Your interest</h2>
        <div id="page2__cards">
          <a href="#" class="card">
            <h5>Editing</h5>
          </a>
          <a href="#" class="card">
            <h5>Architecture</h5>
          </a>
          <a href="#" class="card">
            <h5>Designer</h5>
          </a>
          <a href="#" class="card">
            <h5>Developer</h5>
          </a>
          <a href="#" class="card">
            <h5>healthcare</h5>
          </a>
          <a href="#" class="card">
            <h5>Cyber security</h5>
          </a>
        </div>
      </section>
      <!-- 





      Page3-->
      <section id="page3">
        <div>
          <h4>Clients Opinion</h4>
        </div>
        <div>
          <ul>
            <li>
              <div id="img__wrapper">
                <img src="#" alt="" />
              </div>
              <h4>Mohammed</h4>
              <h6>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo,
                commodi.
              </h6>
            </li>
            <li>
              <div id="img__wrapper">
                <img src="#" alt="" />
              </div>
              <h4>Jack</h4>
              <h6>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem
                unde cupiditate ut sit officia placeat ad eos dolor minima
                ducimus!
              </h6>
            </li>
            <li>
              <div id="img__wrapper">
                <img src="#" alt="" />
              </div>
              <h4>Jackson</h4>
              <h6>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum
                vero beatae, aspernatur eligendi necessitatibus quaerat!
              </h6>
            </li>
          </ul>
        </div>
      </section>
      <!-- 







      -->
      <section id="page4" class="full-bleed">
        <div id="p4__content">
          <h2>About-Us</h2>
          <div id="p4__text">
            <p>
              <span>Hello</span>, I'm
              <a href="https://wissem-zidi-ofc.netlify.app">Wissem Zidi</a>, I'm
              a junior <span>Front-end</span> developer.
            </p>
            <p>
              <span>Hello</span>, I'm <a href="">Hdr Ayoub</a>, I'm a senior
              <span>Back-end</span> developer.
            </p>
            <p>
              We are the team that build this website. Because we know that
              finding a job is not an easy thing those days so we build this
              website to help you find a job.
            </p>
          </div>
        </div>
      </section>
      <!-- 







      -->
      <footer>
        <div class="footer-dark full-bleed">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-3 item">
                <h3>Team</h3>
                <ul>
                  <li><a href="#">Front-end developer</a></li>
                  <li><a href="#">Back-end developer</a></li>
                  <li><a href="#">Github</a></li>
                </ul>
              </div>
              <div class="col-sm-6 col-md-3 item">
                <h3>About</h3>
                <ul>
                  <li><a href="#">Project</a></li>
                  <li><a href="#">Team</a></li>
                  <li><a href="#">Resources</a></li>
                </ul>
              </div>
              <div class="col-md-6 item text">
                <h3 style="font-family: var(--ff-netron)">Joby</h3>
                <p>
                  Joby is an open-source project for finding jobs. It can
                  automate some aspects of your job hunt by providing you with a
                  list of jobs from over 8,000 sources and filtering those jobs
                  based on location, employer, and pay.
                </p>
              </div>
              <div class="col item social">
                <a href="#"
                  ><img
                    height="30"
                    src="./project assets/svg/facebook.svg"
                    alt=""
                /></a>
                <a href="#">
                  <img
                    height="30"
                    src="./project assets/svg/instagram.svg"
                    alt=""
                  />
                </a>
                <a href="#">
                  <img
                    height="30"
                    src="./project assets/svg/email.svg"
                    alt=""
                  />
                </a>
                <a href="https://github.com/Wissem-Zidi/Joby">
                  <img
                    height="30"
                    src="./project assets/svg/github.svg"
                    alt=""
                  />
                </a>
              </div>
            </div>
            <p class="copyright">Joby © 2022</p>
          </div>
        </div>
      </footer>
    </main>
  </body>
  <script src="./Main page/main.js"></script>
</html>
