<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/686d25a6bd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="project.css">
    <link rel="stylesheet" href="stadium.html">
    <link rel="stylesheet" href="schedule.html">
    <link rel="stylesheet" href="group.html">
    <link rel="stylesheet" href="slider.css">
    
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
            </ul>
            </div>
            <!-- <div>  -->
                <!-- <h2>Love for Football??</h2> -->
                <!-- <h1>Welcome to Qatar </h1> <br> -->
                <!-- <a href="#" class="btn">Explore</a> -->
            <!-- </div> -->
         
            </header>
        

    <main>
        <!-- 2nd part  -->
        <section id="service">
            <h2> Your journey of a Lifetime </h2> <br><br>

            <div class="container">

            <div class="images-slideshow  half-div">
                
                <img class="imageSlides" src="image/fan.webp" >
                <img class="imageSlides" src="image/maskat.jpg" >
                <img class="imageSlides" src="image/haya.jpg" >
                <img class="imageSlides" src="image/jersy.jpg" >

                <a class="slider-btn previous" onclick="setSlides(-1)">❮</a>
            <a class="slider-btn next" onclick="setSlides(1)">❯</a>
            
                    
                </div>
             <div class="half-div">
                <div class="container">
                    <div class="half-div">
                        <i class="fa-solid fa-face-smile"></i>
                        <h3>Your tickets</h3> <br>
                        <p>Your FIFA World Cup  journey includes 3 steps: <br>

                            1.Buy your tickets.  <br>
                            2.Arrange your accommodation <br>
                            3.Apply for your digital Hayya Card</p>

                    </div>
                    <div class="half-div">
          
                        <i class="fa-solid fa-face-smile"></i>
                        <h3>Your accommodation</h3> <br>
                        <p>After buying tickets, You can: <br>

                            1)    Book your dream stay <br>
                            2)    Stay with family or friends Qatar. <br>
                            3)    Register to Visit on Matchday <br>
                         
                            Local fans can apply for Hayya straight away.</p>
                            
                    </div>

                </div>
                <div class="container">
                    <div class="half-div">
                        <i class="fa-solid fa-face-smile"></i>
                        <h3>Your Hayya Card</h3> <br>
               <p>You need this card to enter the State of Qatar, 
                access the stadiums, travel for free on public transport
                 and enjoy a host of other benefit.
                </p>

                    </div>
                    <div class="half-div">
          
                        <i class="fa-solid fa-face-smile"></i>
                        <h3>Feel the energy</h3> <br>
                        <p>The last step is to enjoy the big show</p>
                    </div>
         <!-- thrid part -->
        </section>
        <section id="design">
            <h2> Fullfill your dream</h2> <br>
            <div class="p-cards">
                <div class="card">
                    <h3>DISCOVER THE EIGHT WORLD CUP STADIUMS</h3>
                    <img src="./image/staduim.jpg" alt="">
                     <p> There are eight world class staduim, Which arec ready to host the whole worldcup 2022</p>
                   <a href="stadium.html" class="btn">DISCOVER</a>
                </div>
                <div class="card">
                    <h3>WORLD CUP QATAR 2022 <br> GROUPS</h3>
                    <img src="./image/group.jpg" alt="">
                    <p>The 2022 World Cup will begin with 32 teams in eight groups of four</p>
                   <a href="group.html" class="btn">Explore</a>
                   </div> 
                     <div class="card">
                    <h3>WORLD CUP QATAR 2022 <br> MATCH SCHEDULE</h3>
                    <img src="./image/FWC-2022-Match-Schedule.webp" alt="">
                    <p>A total of 64 games will be played to decide the winners of the 
                        FIFA World Cup Qatar 2022™.</p>
                   <a href="schedule.html" class="btn">Schedule</a>
                   </div> 
                   </div>
        <!--  <section id="registration">
                <h2> Contact us</h2> <br>
               <form class="contact">
                <input type="text" placeholder="Enter your name">
                <input type="email" placeholder="Enter your email">
                <input type="number" placeholder="Enter your number">
                <a href="#" class="btn">Send</a>

               </form>
            </section> -->

        </section>
    </main>
    <footer>
        <p>@ Copyright 2022 ।। All right reserved by Turjoy</p>
    </footer>
    <script src="slider.js"></script>
    
</body>
</html>