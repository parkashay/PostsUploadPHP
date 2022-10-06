<div class="row">
<?php
 $con = openCon();
 $sql = "SELECT * FROM quotes WHERE author = 'admin' ORDER BY ID DESC LIMIT 1";
 $res = $con->query($sql);
 $data = $res->fetch_assoc();
  echo "
    <div class=\"col s12 m12 l6\">
      <div class=\"card card0 z-depth-1 transparent\" style=\"padding:5px\">
        <div class=\"card-image\">
          <img class=\"materialboxed\" data-caption=\"".$data['quote']."\" src=\"./assets/images/magic.jpg\">
          <span class=\"card-title\"><b>Admin's message</b></span>
          <a class=\"btn-floating btn-tooltipped halfway-fab waves-effect orange\" data-position=\"left\" data-tooltip=\"hide this card\" id=\"close-card\"><i class=\"material-icons\">close</i></a>
        </div>
        <div class=\"card-content\">
          <p class=\"white-text flow-text\">
            
              ". $data['quote']."
            
          </p>
        </div>
      </div>

      <div class=\"btn-floating show-btn btn-tooltipped pulse white\" data-position=\"right\" data-tooltip=\"show hidden card\"><i class=\"material-icons orange-text\">refresh</i></div>
    </div>
    ";
    closeCon($con);
  ?>
    
<!-- Recent Post cards -->
   <?php
      $con = openCon();
      $sql = "SELECT * FROM quotes WHERE author != 'admin' ORDER BY id DESC LIMIT 4";
      $res = $con->query($sql);
      while($data = $res->fetch_assoc())
        {
            echo "
            <div class=\"section col s12 m6\">
              <div class=\"card-panel transparent z-depth-1\">
                <span class=\"white-text flow-text\"> 
                      ".$data['quote']."
                </span>
                <p class=\"right-align white-text\">-
                    ".$data['author']."
                </p>
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

         

  <script>
    $(document).ready(function(){
        $('.show-btn').hide();
        // hide the card on close
        $("#close-card").click(
            function()
            {
                $(".card0").hide("fast");
                $('.show-btn').show("fast");
            }
        );
        //restore hidden card
        $('.show-btn').click(
            function()
            {
                $(this).hide("fast");
                $('.card0').show("fast");
            }
        );
        
    });
  </script>