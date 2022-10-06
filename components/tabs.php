<?php
    include "dtabs.php";
?>
<div class="row tabs-con">
    <div class="col s12 z-depth-1">
      <ul class="tabs">
        <li class="tab col s3"><a href="#tab1" class="tooltipped" data-position="bottom" data-tooltip="<?php echo tabTitle1(); ?>"><?php echo tabTitle1(); ?></a></li>
        <li class="tab col s3"><a href="#tab2" class="tooltipped" data-position="bottom" data-tooltip="<?php echo tabTitle2(); ?>"><?php echo tabTitle2(); ?></a></li>
        <li class="tab col s3"><a href="#tab3" class="tooltipped" data-position="bottom" data-tooltip="<?php echo tabTitle3(); ?>"><?php echo tabTitle3(); ?></a></li>
        <li class="tab col s3"><a href="#tab4" class="tooltipped" data-position="bottom" data-tooltip="<?php echo tabTitle4(); ?>"><?php echo tabTitle4(); ?></a></li>
      </ul>
    </div>

    <!-- first tab -->
    <div id="tab1" class="col s12 center white-text">
        <h3><?php echo tabHeading1(); ?></h3>
        <div class="flow-text"><?php echo tabContent1(); ?></div class="flow-text">
    </div>

    <!-- Second Tab -->
    <div id="tab2" class="col s12 center white-text">
        <h3><?php echo tabHeading2(); ?></h3>
        <div class="flow-text"><?php echo tabContent2(); ?></div class="flow-text">
    </div>

    <!-- Third Tab -->
    <div id="tab3" class="col s12 center white-text">
        <h3><?php echo tabHeading3(); ?></h3>
        <div class="flow-text"><?php echo tabContent3(); ?></div class="flow-text">
    </div>

    <!-- Fourth Tab -->
    <div id="tab4" class="col s12 center white-text">
        <h3><?php echo tabHeading4(); ?></h3>
        <div class="flow-text"><?php echo tabContent4(); ?></div class="flow-text">
    </div>
    

</div>



  <style>
    
    .tabs{
        background-color:transparent;
    }
    .tabs .tab a{
        color:white;
        font-weight:bold;
    }
    .tabs .tab a:hover{
        color:#bdbdbd;
    }
  </style>

  <script>

    $(document).ready(function(){

        // for tabs inititalization
        $('.tabs').tabs(
           {
            swipeable:true
           }
        );
        $(document).ready(function(){
            $('.tooltipped').tooltip(
                {
                    enterDelay:500
                }
            );
        });
    });
  </script>