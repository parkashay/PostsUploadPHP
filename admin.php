<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>admin panel</title>
    </head>

    <body>

    <div class="navbar-fixed orange z-depth-1 valign-wrapper">
        <div class="container">
            <a href="./index.php" class="btn-flat">HOME</a>
        </div>
    </div>


<!-- form section     -->
<div class="container form-con center">
    <form method="post">
        <div class="row">
            <div class="input-field col s6 m4">
                <input type="text" id="author" name="author" data-length="20">
                <label for="author">Author</label>
            </div>
        </div>    
        <div class="row">
            <div class="input-field col s6 m4">
                <input type="text" id="title" name="title" data-length="30">
                <label for="title">Title(optional)</label>
            </div>
            <div class="input-field col s12 m12 l8">
                <textarea id="quote" class="materialize-textarea" name="quote"></textarea>
                <label for="quote">Quote</label>
            </div>
        </div>    
        <input type="submit" value="upload" class="btn">
    </form>
</div>    



<!-- php section to send the data to database -->
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        include "./database/dbconnect.php";
        $author = htmlspecialchars($_POST["author"]);
        $title = htmlspecialchars($_POST["title"]);
        $quote = htmlspecialchars($_POST["quote"]);
        if(!empty($author) && !empty($quote))
        {
            $con = openCon();
            $sql = "INSERT INTO quotes (author, title, quote)
                    VALUES ('$author', '$title', '$quote')";

            if($con->query($sql))
            {
                echo " <br> Uploaded.";
                closeCon($con);
            }
            else{
                echo "some error";
                closeCon($con);
            }
        }
        else{
            echo "<br> <p>one or more filed(s) empty.</p>";
        }
    }
?>
        
        <!-- Compiled and minified JavaScript and jquery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>      
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

          <script>
            $(document).ready(function() {
                $("#author, #title").characterCounter();
            });
          </script>


    <style>
        p{
            color:red;
            text-align:center;
        }
        .form-con{
            margin-top:20vh;
        }
    </style>

      </body>
  </html>