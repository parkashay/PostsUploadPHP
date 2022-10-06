
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>project</title>

      <style>.preloader-con{
            height:100vh;
          }
          .load-info{
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            font-size:1.5rem;
            font-weight:bold;
          }
       </style>
      
    </head>

    <body style="background-color:orange">

    <!-- import database -->
    <?php
      include "./database/dbconnect.php";
    ?>
        
    <!-- heading section -->
        <header class="page-header">
            <?php
                @include("./components/navbar.php");
            ?>
        </header>

         <!-- Preloader item -->
         <div class="preloader-con">
            <div class="load-info white-text">Please Wait . . .</div>
         </div>

        <!-- main page contents -->
        <main class="page-main">

        <!-- slider -->
        <div class="herosection">
            <?php
                @include("./components/slider.php");
              ?>
        </div>

        <!-- the main card section -->
          <div class="cardhero" id="posts">
            <?php
                include("./components/cardhero.php");
              ?>
          </div>

          <!--  Get started button -->
          <div class="get-started fixed-action-btn">
            <a class="btn-flat orange">
              <b>Get Started</b><i class="material-icons right">chevron_right</i>
            </a>
          </div>

          <!-- scroll to top button -->
          <div class=" scroll-to-top fixed-action-btn">
            <a class="btn-floating red">
              <i class="material-icons">arrow_upward</i>
            </a>
          </div>

            <!-- Tabs -->
          <div id="people" class="tab-container">
              <?php
                  @include("./components/tabs.php");
              ?>
          </div>

           <!-- All Posts button -->
      <div class="allposts-con center z-depth-1"><a href="./components/allposts.php" class="btn-flat"><b>All Posts</b></a></div>

          
        </main>
            
        <!-- footer -->
        <footer id="footer">
            <?php
              include("./components/footer.php");  
            ?>
        </footer>

          <!-- Compiled and minified JavaScript and jquery -->
          <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>      
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

            
          <!-- User Submission -->
          <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $author = htmlspecialchars($_POST['user']);
                $title = htmlspecialchars($_POST['title']);
                $quote = htmlspecialchars($_POST['quote']);
                $con = openCon();
                $sql = "INSERT INTO users (author, title, quote)
                        VALUES ('$author', '$title', '$quote')";
                if($con->query($sql))
                {
                  echo "<script>M.toast({html: \"Submitted Successfully. Waiting for admin review.\"})</script>";
                }
                else{
                  echo "<script>M.toast({html: \"Unknown Error\"})</script>";
                }
            }
          ?>




        <style>
          html
          {
            scroll-behavior:smooth;
          }
          .preloader-con-hide{
            display:none;
          }
          .get-started{
            width:fit-content;
            position:absolute;
            left:50%;
            transform:translate(-50%,0%);
            text-align:center;
          }
          .scroll-to-top{
           margin-right:50%;
           transform: translate(50%,0%);
          }
          .herosection{
            display:none;
          }
          .cardhero{
            display:none;
          }
        </style>


        <script>
          $(document).ready(function(){
            // preloading screen hide
            $('.preloader-con').addClass('preloader-con-hide');

            // hero section animation
            $('.herosection').slideDown(1000);

            // initialization for mayerial box
              $('.materialboxed').materialbox();

            // for tooltips
              $('.btn-tooltipped').tooltip();

              // for floating button to scroll to top
              $(".scroll-to-top").hide();  //hide initially
              $(window).scroll(function()
              {
                  var lol = $(window).scrollTop();
                if(lol > 20)
                {
                  $(".get-started").fadeOut();  // hide get started button on scroll
                }
                if(lol < 400)
                {
                    $(".scroll-to-top").fadeOut();
                }
                else{
                  $(".scroll-to-top").fadeIn();
                }
                //page animation
                if(lol > 300)
                {
                  $('.cardhero').slideDown(1000);
                }
              });
          });

              //scroll top top
          $(".scroll-to-top").click(
            function()
            {
              window.scrollTo({top:0, behavior:'smooth'});
            }
          );

          //get started button effect
          $(".get-started").click(
            function()
            {
              window.scrollTo({top:310, behavior:'smooth'});
            }
          );
        </script>
    </body>
  </html>