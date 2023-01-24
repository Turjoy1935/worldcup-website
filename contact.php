<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <header id="header">
        <div class="bar">
            <ul class="navbar">
                <li><a href="project.php" >Home</a></li>
                <li><a href="stadium.html">Stadium</a></li>
                <li><a href="schedule.html">Schedule</a></li>
                <li><a href="group.html">Group</a></li>
                <li><a href="contact.php">Contact</a></li>
            </div>
            <!-- <div>  -->
                <!-- <h2>Love for Football??</h2> -->
                <!-- <h1>Welcome to Qatar </h1> <br> -->
                <!-- <a href="#" class="btn">Explore</a> -->
            <!-- </div> -->
         
            </header>
        
    <section id="registration">
        <h2> Contact us </h2> <br>
        <div class="error"> <?php echo $error ?> </div>
       <form method="POST" class="contact">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="email" name="email" placeholder="Enter your email">
        <input type="number" name="phone" placeholder="Enter your number">
        <input type="submit" name="signUp" value="Send">

       </form>
    </section>
    
</body>
</html>