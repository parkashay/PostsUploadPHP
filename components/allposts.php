<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>All Posts</title>
    </head>
    <body class="orange">

    <!-- navbar -->
    <div class="navbar-fixed">
      <nav class="orange">
        <div class="nav-wrapper orange">
          <a class="brand-logo left" href="../index.php">Home</a>
          <ul class="right">
            <li>
              <form method="post" action="search.php">
                <div class="input-field">
                  <input id="search" type="search" required name="searchkey" placeholder="author name">
                  <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                  <i class="material-icons">close</i>
                </div>
              </form>
            </li>
          </ul>
        </div>
      </nav>
  </div>
  <div class="white-text container"><h4>All Posts:</h4></div>
    <div class="row">
      <!-- get all posts -->
      <?php
            include "../database/dbconnect.php";
            $con = openCon();
            $sql = "SELECT * FROM quotes WHERE author != 'admin'";
            $res = $con->query($sql);
            while($data = $res->fetch_assoc())
            {
              echo "
                <div class=\"posts col s12 m6\">
                  <div class=\"card-panel transparent z-depth-1\">
                    <span class=\"white-text flow-text\"> 
                          ".$data['quote']."
                    </span>
                    <p class=\"right-align white-text\"><b>-
                        ".$data['author']."
                    </b></p>
                    <p class=\"right-align white-text\">
                            ".$data['title']."
                    </p>
                  </div>
                </div>
              ";
            }
            closeCon($con);
        ?>
    </div>
    <div class="footer z-depth-1">
      <div class="row">
        <div class="center">
          <a href="../index.php" class="btn-flat white-text"><h4>Home<h4></a>
        </div>
        <div class="white-text right">
           &copy Free
        </div>
      </div>
    </div> 

    <style>
      .footer{
        padding:10px;
      }
      .input-field{
        width:50vw;
      }
      .posts {
        display:none;
      }
    </style>

          <!-- Compiled and minified JavaScript and jquery -->
          <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>      
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

          <script>
             $(document).ready(function(){
                $(".posts").slideDown(1500);
             });
          </script>
    </body>
   </html>