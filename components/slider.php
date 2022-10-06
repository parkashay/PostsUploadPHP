<div class="slider">
    <ul class="slides orange">
      <li>
        <img src="./assets/images/dante.png">
        <div class="caption right-align">
          <h3>Welcome</h3>
          <h5 class="light grey-text text-lighten-3">Free dynamic website. Github link in the footer.</h5>
        </div>
      </li>
      <li>
        <img src="./assets/images/dl.png">
        <div class="caption right-align">
          <h3>This is hero section</h3>
          <h5 class="light grey-text text-lighten-3">This is some text better than lorem ipsum lol.</h5>
        </div>
      </li>
      <li>
        <img src="./assets/images/jungle.jpg">
        <div class="caption center-align">
          <h3>No title</h3>
          <h5 class="light grey-text text-lighten-3">Don't know what to write here.</h5>
        </div>
      </li>
      <li>
        <img src="./assets/images/noob.jpg">
        <div class="caption left-align">
          <h3>Ok this is the last one</h3>
          <h5 class="light grey-text text-lighten-3">I'm out of ideas.</h5>
        </div>
      </li>
      <li>
        <img src="./assets/images/val.jpg">
        <div class="caption center-align">
          <h3>Literally come on !</h3>
          <h5 class="light grey-text text-lighten-3">Just Scroll below, jesus !</h5>
        </div>
      </li>
    </ul>
  </div>


  <script>
        $(document).ready(function(){
                $('.slider').slider(
                    {
                        indicators:false,
                        duration:1000,
                        interval:4000,
                        height:720
                    }
                );
        });
  </script>