<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stock market analysis</title>
    <link rel="icon" href="images/icon.jpg">
    <link rel="stylesheet" href="Home.css" class="rel">
      <link rel="stylesheet" media="screen and (max-height:700px )" href="Home_mob.css"> <!--Including this because we want to make responsive website -->
      <!-- just below link is for icon use in login page  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Styling for login page  -->
      <link rel="stylesheet" href="loginpage.css"> 
      <link rel="stylesheet" href="reliance.css" class="rel"> 
<body>
      <!-- for head section -->
    <nav id="navbar" > 
        <div id="logo">
        <!-- <img src="images/img3.jpg" alt="pintukrgupta.com"> -->
        <i>Your Money </i>
         </div> 
    <ul>
         <li class="item"><a href="#home">Home</a></li>
         <li class="item"><a href="#about">About</a></li>
         <li class="item"><a href="#markets">Markets</a></li>
         <li class="item"><a href="#news">News</a></li>
         <li class="item"><a href="#index fund">Index fund</a></li>
         <li class="item"><a href="#contact">contact us</a></li>
         <li class="item"><a href="#know More">Know More</a></li>
         <!-- <div class="search" >
             <input type="text" name="search" id="myInput" onkeyup="searchFun()"class="searchbar"  placeholder="Search here">
             <button type="submit"><i class="fa fa-search"></i></button>
         </div> -->
         <form class="example">
            <!-- <input type="text" id="myStock" onkeyup="stockSearch()" placeholder="Search any stock.." name="search" title="Type in a name"> -->
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search any stock..">
            <!-- <button type="submit"><i class="fa fa-search"></i></button> -->
          </form>
         
         <button class="open-button" onclick="openForm()"> Login </button>
         <a href="register.html" class="signup" id="signbutton">Sign up</a>
         
         <!-- For login popup  -->
         <div class="form-popup" id="myForm">
            <form action="/action_page.php" class="form-container">
                <h2 style="color:rgb(6, 134, 134);">Login</h2>

              <div class="input-container">
           <i class="fa fa-envelope icon"></i>
           <input class="input-field" type="text" placeholder="Email or Phone" name="email" required>
          </div>
          
          <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" placeholder="Password" name="psw" required>
           </div>

           <div class="forgot-pass">
            <a href="#">Forgot Password?</a>
          </div>
          
              <button type="submit" class="btn">Login</button>
              <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
              <!-- <a href="#" class="btn2" >Login</a>  -->
              <div class="signup-link">
                  Dont't have an account?<a href="register.html"> Signup now</a>
              </div>
            </form>
          </div> 
         <!---  login end-..................  -->
    </ul>
</nav>


 <!-- For home section  -->
 <div id="home">
 <!-- for upper gain and lowest down -->
 <section id="client-section">
   <div id="clients">
   <div class="client-item">
      <h2>Top losser </h2>
      <ol>
        <li><a href="https://www.nseindia.com/get-quotes/equity?symbol=AXISBANK" style= "text-decoration: none";> AXISBANK</a></li>
        <li><a href="https://www.nseindia.com/get-quotes/equity?symbol=CIPLA" style= "text-decoration: none";> CIPLA</a></li>
        <li><a href="https://www.nseindia.com/get-quotes/equity?symbol=ULTRACEMCO" style= "text-decoration: none";> ULTRACEMCO</a></li>
        <li><a href="https://www.nseindia.com/get-quotes/equity?symbol=TATACONSUM" style= "text-decoration: none";> TATACONSUM</a></li>
      </ol>
     </div>
     <div class="client-item">
      <h2>Top gainer </h2>
      <ol>
        <li><a href="https://www.nseindia.com/get-quotes/equity?symbol=ADANIPORTS" style= "text-decoration: none";> ADANIPORTS</a></li>
        <li><a href="https://www.nseindia.com/get-quotes/equity?symbol=HDFC" style= "text-decoration: none";> HDFC</a></li>
        <li><a href="https://www.nseindia.com/get-quotes/equity?symbol=ULTRACEMCO" style= "text-decoration: none";> TECHM</a></li>
        <li><a href="https://www.nseindia.com/get-quotes/equity?symbol=ADANIPORTS" style= "text-decoration: none";> POWERGRID</a></li>
      </ol>
     </div>
     <div class="client-item">
      <h2> Trending </h2>
      <ol>
        <li><a href="https://www.nseindia.com/get-quotes/equity?symbol=AXISBANK" style= "text-decoration: none";> TATAMOTERS</a></li>
        <li><a href="https://www.nseindia.com/get-quotes/equity?symbol=CIPLA" style= "text-decoration: none";> HDFC BANK</a></li>
        <li><a href="https://www.nseindia.com/get-quotes/equity?symbol=ULTRACEMCO" style= "text-decoration: none";> SBIN</a></li>
        <li><a href="https://www.nseindia.com/get-quotes/equity?symbol=TATACONSUM" style= "text-decoration: none";> Reliance</a></li>
      </ol>
     </div>
     <div class="client-item" style="background-color: white; width: 164px; height: 110px;" >
      <h2><center>Latest News</center> </h2>
      <iframe width="180" height="100" margin-right:0px; src="https://www.youtube.com/embed/8f1cm6WLbE0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border-radius: 20px;"></iframe>
     </div>
   </div>
 </section>
 </div>




    <?php
    $key="demo";
    $url="https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol=IBM&apikey=".$key;
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $result=curl_exec($ch);
    curl_close($ch);
    $result=json_decode($result,true);
    if(isset($result['Time Series (Daily)'])){
        echo "<table  id='customers' border='1'><tr><th>Date</th><th>Open</th><th>High</th><th>Low</th></tr>";
        foreach($result['Time Series (Daily)'] as $key=>$val){
            echo "<tr><td>$key</td><td>".$val['1. open']."</td><td>".$val['2. high']."</td><td>".$val['3. low']."</td></tr>";
        }
        echo "</table>";
    }else{
        echo "Something went wrong";
    }
    ?>


   
 <!-- for services section -->
 <section class="services-container">
   <h1 class="h-primary center">Your invested stock performance</h1>
   <!-- Center class automaticaly center the text -->
   <div id="services">
     <div class="box">
       <img src="..." alt="" />
       <h2 class="h-secondry center">Tata Motors</h2>
       <p>You wanted it for long term investment</p>
     </div>
     <div class="box">
       <img src="4.jpg" alt="" />
       <h2 class="h-secondry center">IRCTC</h2>
       <p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias,
         cumque.
       </p>
     </div>
     <div class="box">
       <img src="3.jpg" alt="" />
       <h2 class="h-secondry center">Your favorite</h2>
       <p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias,
         cumque.
       </p>
     </div>

     <div class="box">
       <img src="3.jpg" alt="" />
       <h2 class="h-secondry center">Your favorite</h2>
       <p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias,
         cumque.
       </p>
     </div>

     <div class="box">
       <img src="3.jpg" alt="" />
       <h2 class="h-secondry center">Your favorite</h2>
       <p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias,
         cumque.
       </p>
     </div>

     <div class="box">
       <img src="3.jpg" alt="" />
       <h2 class="h-secondry center">Your favorite</h2>
       <p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias,
         cumque.
       </p>
     </div>
   </div>
 </section>

 <!-- contact section -->
 <section id="contact">
   <h1 class="h-primary center">Contact us</h1>
   <div id="contact-box">
     <form action="">
       <div class="form-group">
         <label for="name">Name</label>
         <input
           type="text"
           name="name"
           id="name"
           placeholder="Enter your Name"
         />
       </div>
       <div class="form-group">
         <label for="email">email</label>
         <input
           type="email"
           name="name"
           id="email"
           placeholder="Enter your email"
         />
       </div>
       <div class="form-group">
         <label for="phone">phone </label>
         <input
           type="phone"
           name="name"
           id="phone"
           placeholder="Enter your phone no"
         />
       </div>
       <div class="form-group">
         <label for="name">Comment anything</label>
         <textarea name="message" id="message" cols="10" rows="4"></textarea>
         <input type="submit" />
       </div>
     </form>
   </div>
 </section>
 <!-- footer area  -->
 <footer>
   <div class="center">
     copyright &copy; www.StockAnalysis.com All right reserved. Website is
     design by Pintu Kr Gupta
   </div>
 <script src="Home.js"></script>

</body>
</html>