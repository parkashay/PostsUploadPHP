<div class="footer white-text z-depth-1">

            <div class="row">

                <!-- about section -->
                <div class="col s12 m6 l6">
                    <h4 class="center">About</h4>
                    <p class="center flow-text">Used Materialize for Frontend, php for backend and MySQL for database.</p>
                    <div class="divider hide-on-med-and-up"></div>
                </div>
                <!-- site links -->
                <div class="col s12 m6 l6">
                    <div class="center">
                        <ul>
                            <li><a class="btn-flat modal-trigger" href="#login">Login</a></li>
                            <li><a href="#!" class="btn-flat">Github</a></li>
                            <li><a class="btn-flat modal-trigger" href="#user-form">Contribute</a></li>
                        </ul>
                    </div>     
                </div>
                

                    <div class="col s12 m12">
                        <div class="divider hide-on-small"></div>
                                <a class="right btn-flat modal-trigger" href="#modal1">&copy Free lol</a>

                                
                            <!-- Modal Structure -->
                            <div id="modal1" class="modal orange">
                                 <div class="modal-content container">
                                        <h4><b>Bravo !! You found a treasure.</b></h4>
                                        <p><b>Here's a little surprise for you.Play this video for redemption.</b></p>
                                        <div class="video-container">
                                                <iframe src="https://www.youtube.com/embed/xfr64zoBTAQ" title="News Alert - Breaking News" frameborder="0"></iframe>  
                                        </div>  
                                        <div class="modal-footer orange">
                                            <a href="#!" class="modal-close btn-flat">Close</a>
                                        </div>
                                 </div>
                            </div>
            </div>
</div>


                    <!-- Login Modal -->
    <div class="modal orange" id="login">
        <div class="modal-content">
            <div class="right transparent">
                <a href="#!" class="modal-close btn-flat"><i class="material-icons">close</i></a>
            </div>
            <div class="center red-text flow-text"><b>*Only for admin*</b></div>
            
            <form method="post" action="verifyadmin.php">
                <div class="input-field">
                    <input id="username" name="username" type="text" required>
                    <label for="username" class="white-text">Username</label>
                </div>

                <div class="input-field">
                    <input id="password" name="password" type="password" class="validate" required>
                    <label for="password" class="white-text">Password</label>
                </div>
                <button type="submit" class="btn-flat">Login</button>
            </form>    
        </div>
    </div>


    <!-- user-form submission modal -->
    <div class="modal orange" id="user-form">
        <div class="modal-content">
            <div class="transparent right">
                <a href="#!" class="modal-close btn-flat"><i class="material-icons">close</i></a>
            </div>
            <div class="center flow-text">Submit your own creation and contribute to the website:</div>
            <p></p>
           <form method="post"> 
                <div class="input-field">
                    <input type="text" id="user" name="user" required>
                    <label for="user" class="white-text">Your Name:</label>
                </div>
                <div class="input-field">
                    <input type="text" id="title" name="title">
                    <label for="title" class="white-text">Title for your quote(optional)</label>
                </div>
                <div class="input-field">
                    <textarea type="text" id="quote" name="quote" class="materialize-textarea" required></textarea>
                    <label for="quote" class="white-text">Enter Your quote here:</label>
                </div>
                <input class="btn-flat white-text" type="submit" value="Submit">
            </form>    
        </div>
    </div>

<style>
    .footer{
        padding:10px;
    }
</style>

<script>
    $(document).ready(function(){

        //for modals
        $('.modal').modal(
            {
                endingTop:10%
            }
        );
    });

</script>