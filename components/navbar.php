<div class="navbar-fixed nav-bar">
    <nav class="nav-con z-depth-0">
        <div class="nav-wrapper">
            <ul id="nav" class="right hide-on-med-and-down">
                <li><a href="#posts" class="btn-flat "><b>Posts</b></a></li>
                <li><a href="#people" class="btn-flat "><b>People</b></a></li>
                <li><a class='dropdown-trigger1 btn-flat' data-target='dropdown1'><b>More</b><i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
    <!-- sidenav-trigger -->
    <a href="#" data-target="slide-out" class="sidenav-trigger right hide-on-large-and-up"><i class="material-icons">menu</i></a>
        </div>
</nav>
</div>
           <!-- sidenav -->
        <ul id="slide-out" class="sidenav">
            <li><a href="#posts" class="btn-flat white-text"><b>Posts</b></a></li>
            <li><a href="#people" class="btn-flat white-text"><b>People</b></a></li>
            <li><a class='dropdown-trigger2 btn-flat white-text' data-target='dropdown2'><b>More</b><i class="material-icons right white-text">arrow_drop_down</i></a></li>
        </ul>
    
<!-- Dropdown Structure for bigscreen -->
<ul id='dropdown1' class='dropdown-content'>
  <li class="transparent"><a class="btn-flat ddlol" href="#footer">bottom</a></li>
  <li class="divider" tabindex="-1"></li>
  <li class="transparent"><a class="btn-flat ddlol" href="#footer">login</a></li>
</ul>  

  <!-- Dropdown Structure for sidenav -->
<ul id='dropdown2' class='dropdown-content'>
  <li style="background-color:orange"><a class="btn-flat white-text" href="#footer">bottom</a></li>
  <li class="divider" tabindex="-1"></li>
  <li style="background-color:orange"><a class="btn-flat white-text" href="#footer">login</a></li>
</ul>


<style>
    .nav-bar{
        position:absolute;
    }
    .nav-con{
        background-color:transparent;
        position:absolute;
        display:none;
        transition-duration:1s;
    }
    .nav-con-opaque{
        background:orange;
    }
    ul li .ddlol{
        color:white;
    }
    .btn-flat{
        color:white;
        background-color:transparent;
    }
    .btn-flat:hover{
        background-color:transparent;
        color:#bdbdbd;
    }
    #dropdown1{
        background-color:orange;
    }
    #dropdown2{
        background-color:orange;
    }
    .sidenav{
        background-color:orange;
    }
    
</style>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>  

    <script>
    $(document).ready(function(){

        //for navbar transparency and opaqueness
        $(window).scroll(function() {
        var height = $(window).scrollTop();

        if(height  > 310) {
            $(".nav-con").slideDown(0).addClass('nav-con-opaque');
        }
        else{
            $(".nav-con").removeClass('nav-con-opaque');
        }
        });

        // for Dropdown
        $('.dropdown-trigger1').dropdown(
            {
                hover:true,
                coverTrigger:false
            }
        );
        $('.dropdown-trigger2').dropdown(
            {
                hover:false,
            }
        );

        // for sidenav
         $('.sidenav').sidenav();

         //for login modal
         $('.modal').modal();

    });

    
   </script>
 
   





