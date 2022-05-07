<?php 
    include_once("./includes/header.php");
?>
     <div class="container">
         <div class="wrapper">
             <h1>Send Us amessage</h1>
             <form class="form">
                 <div class="fields">
                    <div class="form-control">
                 
                        <input type="text" name="username" id="username" placeholder="Enter your name ..">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="form-control">
                       
                        <input type="text" name="phone" id="phone" placeholder="Enter your phone..">
                        
                        <i class="fas fa-phone"></i>
                    </div>
                 </div>
                <div class="fields">
                    <div class="form-control">
                   
                        <input type="text" name="email" id="email" placeholder="Enter your email..">
                        <i class="fas fa-envelope-open"></i>
                    </div>
                    <div class="form-control">
                       
                        <input type="text" name="website" id="website" placeholder="Enter your website..">
                        <i class="fas fa-globe"></i>
                    </div>
                </div>
              
                <div class="form-control message-area">
                    
                    <textarea name="message" id="message" placeholder="Enter your message here..."></textarea>
                    <i class="fas fa-message"></i>
                </div>
                <div class="fields button-area">
                    <input type="submit" value="Send message" class="submit">
                    <span class="status">
                        sending your message...👍
                    </span>
                </div>
              
             </form>
         </div>
     </div>

<?php
    include_once("./includes/footer.php");
?> 