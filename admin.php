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
        <?php
         include "./database/dbconnect.php";
        ?>

    <div class="navbar-fixed orange z-depth-1 valign-wrapper">
        <div class="container">
            <a href="./index.php" class="btn-flat white-text">HOME</a>
        </div>
    </div>

<div class="tit flow-text container orange-text">Admin's Dashboard:</div>
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
        <input type="submit" value="upload" class="btn" name="upload">
    </form>
</div>    



<!-- php section to send the data to database -->
<?php
    if(isset($_POST['upload']))
    {
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
        <br><hr>
        <!-- all posts button -->
        <div class="container center">
                <button class="allbtn btn orange">All Posts/User Submitted</button>
        </div>


    <!-- showing all posts     -->
    <div class="allposts-tbl">
        <div class="titall flow-text orange-text">All Posts:</div>
        <table class="highlight orange">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Author</th>
                    <th>Title</th>
                    <th>Quote</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php
                $con = openCon();
                $sql = "SELECT * FROM quotes";
                $res = $con->query($sql);
                while($data = $res->fetch_assoc())
                {
                    echo "
                        <tbody>
                            <tr>
                                <td>".$data['id']."</td>
                                <td>".$data['author']."</td>
                                <td>".$data['title']."</td>
                                <td>".$data['quote']."</td>
                                <td><form method=\"post\">
                                <button type=\"submit\" name=\"deletep\" value=\"".$data['id']."\">Delete</button></form></td>
                            </tr>
                        </tbody>
                    ";
                }
                closeCon($con);
            ?>
        </table>
    </div>
    <hr>

        <div class="tit flow-text orange-text">User submitted data:</div>
    <!-- For displaying the user submitted data -->   
    <table class="user-tbl highlight orange">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Author</th>
                    <th>Title</th>
                    <th>Quote</th>
                    <th>Action</th>
                </tr>
            </thead>
    <?php
        $con = openCon();
        $sql = "SELECT * FROM users";
        $res = $con->query($sql);
        while($data = $res->fetch_assoc())
        {
            echo "
                <tbody>
                    <tr>
                        <td>".$data['id']."</td>
                        <td>".$data['author']."</td>
                        <td>".$data['title']."</td>
                        <td>".$data['quote']."</td>
                        <td><form method=\"post\"><button type=\"submit\" name=\"postq\" value=\"".$data['id']."\">Post</button>
                        <button type=\"submit\" name=\"deleteq\" value=\"".$data['id']."\">Delete</button></form></td>
                    </tr>
                </tbody>
            ";
        }
        closeCon($con);
    ?>
    </table>



        <!-- Compiled and minified JavaScript and jquery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>      
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

         
      <?php
        // Post the quote from user submitted table to the website
        if(isset($_POST['postq']))
        {
            $id = $_POST['postq'];
            $con = openCon();
            $sqlget = "SELECT * FROM users WHERE id = $id";
            $res = $con->query($sqlget);
            $data = $res->fetch_assoc();
            $author = $data['author'];
            $title = $data['title'];
            $quote = $data['quote'];
            $sqlpost = "INSERT INTO quotes (author, title, quote) 
                        VALUES ('$author', '$title', '$quote')";           
            if($con->query($sqlpost))
            {
                echo "<script>M.toast({html: \"Posted.\"})</script>";
                closeCon($con);
            }
                   
            
        }

        // Delete the quote from users submitted table
        if(isset($_POST['deleteq']))
        {
            $id = $_POST['deleteq'];
            $con = openCon();
            $sql = "DELETE FROM users WHERE id = $id";
            if($con->query($sql))
            {
                echo "<script>M.toast({html: \"Deleted.\"})</script>";
                closeCon($con);
            }
        }

        //Delete post from the website
        if(isset($_POST['deletep']))
        {
            $id = $_POST['deletep'];
            $con = openCon();
            $sql = "DELETE FROM quotes WHERE id = $id";
            if($con->query($sql))
            {
                echo "<script>M.toast({html: \"Deleted.\"})</script>";
                closeCon($con);
            }
        }
      ?>


          <script>
            $(document).ready(function() {
                //for character counter input
                $("#author, #title").characterCounter();

                //hide all posts table initially
                $('.allposts-tbl').hide();
            });

            //hiding the users table while viewing all posts
            $('.allbtn').click(function(){
                $('.user-tbl,.tit').toggle();
                $('.allposts-tbl').toggle();
            });
          </script>


    <style>
        p{
            color:red;
            text-align:center;
        }
        .form-con{
            margin-top:5vh;
        }
        .tit,.titall{
            font-weight:bold;
            margin-top:5vh;
            margin-bottom:10px;
            text-align:center;
        }
    </style>

      </body>
  </html>
