    <!-- for admin login -->
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
           if(($_POST['username'] == 'lol') && $_POST['password'] == "lol")
            {
                 header("location: admin.php");
            }
            else{ 
                echo "<script>alert('Only admin can login.');document.location='index.php'</script>";
            }           
        }
      ?>
