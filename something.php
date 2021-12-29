<?php
    $message_sent = false; 

    if(isset($_POST['firstname']) && $_POST['firstname'] != '' &&
    isset($_POST['lastname']) && $_POST['lastname'] != '' &&
    isset($_POST['submit']) && $_POST['submit'] != '' &&
    isset($_POST['email']) && $_POST['email'] != '') {
        if (filter_var($POST['email'], FILTER_VALIDATE_EMAIL)) {
            $firstName = $_POST['firstname'];
            $lastName = $_POST['lastname'];
            $email = $_POST['email'];
            $message = $_POST['submit'];
        
            $to = "cchan7@student.gn.k12.ny.us";
            $subject = "Message from Website";
        
            $body = "";
            $body .= "From: " .$firstName. " " .$lastName. "\r\n";
            $body .= "Email: " .$email."\r\n";
            $body .= "Message: " .$message."\r\n";
        
            mail($to, $subject, $body);

            $message_sent = true; 
        }

    }
?>

<!-- to begin a website: ! + enter  -->
<!-- indicates document is html and language is english  -->
<!DOCTYPE html>
<html lang="en">

<!-- head: chrome needs this stuff for it to work  -->
<!-- latin keyboard, viewbility for interactive component, compatibility with microscoft edge -->
<!-- stuff not seen to the viewer  -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- search result + description  -->
    <title>Chloe Chan Personal Website</title>
    <!-- <meta name="description" content="100-120 chars of description"> -->

    <!-- css -->
    <link rel="stylesheet" href="style.css">
</head>
<!-- body: everything on the page that viewer sees -->
<body>
    <header>
        <!-- height: 108 px width: 621 px --> 
        <img src="/unnamed.jpg"
        height= "21.6" 
        width= "124.4">
        Chloe Abadi Chan 
        <nav> 
            <!-- a * number + return -->
            <a href="index.html">Home</a>
            <a href="about.html">About Me</a>
            <a href="bujo.html">Bullet Journalling</a>
            <a href="gd.html">Graphic Design</a>
            <a href="connect.html">Connectograms</a>
            <a href="misc.html">Misc</a>
            <a href="contact.html">Contact</a>
        </nav>
        
    </header>  

<div class=d2>
    <h1 class=head> Contact </h1>
    <img src="/flower.jpg"
    height= "100.6" 
    width= "103.2" style="vertical-align:middle;margin:0px -17px">
</div>

<div class=d3>
    <img src="/chloe2.jpg"
    height= "386" 
    width= "289.5">
    <p class=text> Feel free to email me at cchan7[at]student.gn.k12.ny.us or fill out the form below! </p>
    <!-- change email profile pic -->
    <!-- Feel free to email me at cchan7[at]student.gn.k12.ny.us (school) or chloeabadichan[at]gmail.com! (personal) or fill out the form below! -->
</div>
<div class="container">
    <?php
    if ($message_sent):
    ?>
    <h1 class=text> Thanks, I will contact you shortly</h1>
    <?php
    else:
    ?>
    <form method="POST" action="something.php">
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname">
      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname">
      <label for="email">Email</label>
      <input type="text" id="email" name="email">
      <label for="message">Message</label>
      <textarea id="submit" name="submit"  style="height:200px"></textarea>
      <input type="submit" value="Submit">
    </form>
  </div>
  <?php
  endif;
  ?>      
  <div class="footer">
    <p>Copyright © Chloe Chan 2021</p>
</div>

</body>
</html>