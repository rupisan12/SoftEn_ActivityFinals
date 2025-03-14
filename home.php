<?php
include "user_signed.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIGN UP</title>
    <link rel="stylesheet" href="sign.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    />
    <script
      src="https://kit.fontawesome.com/04b3229b62.js"
      crossorigin="anonymous"
    ></script>
  </head>
 
  <body>
    <div class="user-chat">
      <div class="header-user wrapper-lay">
     
        <header>
          <div class="content">
            <div class="details">
              <span>Welcome! <?php echo $user["first_name"] . " " . $user["last_name"]?></span>
            </div>
          </div>

          <a href="log_out.php?user_id=<?php echo $user['user_id']?>" class="logout">Logout</a>
        </header>
    
      </div>

   
    </div>
  </body>
</html>
