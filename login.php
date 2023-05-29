<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylecontact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">NKOCET, near Hipparga</div>
          <div class="text-two">Solapur</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+0098 9893 5647</div>
          <div class="text-two">+0096 3434 5678</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">nkocet@gmail.com</div>
          <div class="text-two">mubashirin@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Share your Experience/Review/Tips and Tricks</div>
        <form action="insert.php" method="post">
        <div class="input-box">
          <input type="text" placeholder="Enter your name" name="username" id="user_name">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your topic" name="topic" id="topic" >
        </div>
        <div class="input-box message-box">
          <input type="text" placeholder="Enter your message" name="content" id="content">
        </div>
        <div class="button">
          <input type="Submit" value="Share" >
        </div>
      </form>
    </div>
    </div>
  </div>
</body>
</html>