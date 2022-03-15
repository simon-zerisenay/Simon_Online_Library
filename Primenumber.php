<?php

    if(is_numeric($_GET['number']) && $_GET['number'] > 0 && $_GET['number'] == round($_GET['number'], 0)){
        
        $i = 2;
        
        $isPrime = true;
        
        while ($i < $_GET['number']) {
            
            if ($_GET['number'] % $i == 0) {
                
                // Number is not prime!
                
                $isPrime = false;
                
            }

            $i++;
            
        }
        
        if ($isPrime) {
            
            echo "<p>".$i." is a prime number!</p>";
            
        } else {
            
            echo "<p>".$i." is not prime.</p>";
            
        }  
        
    } else if ($_GET) {
        
        // User has submitted something which is not a positive whole number
        
        echo "<p>Please enter a positive whole number.</p>";
        
    }

?>




<!DOCTYPE html>
<html>

<head>
    <title> Simon Zerisenay Online Library</title>
    <link rel="stylesheet" href="home-style.css">
    <!-- Bootstrap JS, jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <!-- Bootstrap  CSS CDN  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

    <!-- Font-Awesome cdn -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    


</head>

<body>
    <!-- Navigation -->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="Sizerlogo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="Home.html">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Blogs.html">BLOGS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Contacts.html">CONTACTS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="AboutUs.html">ABOUT US</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      MORE
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="Books.html">BOOKS</a>
                      <a class="dropdown-item" href="Megazine.html">MEGAZINE</a>
                      <a class="dropdown-item" href="Article.html">ARTICLE</a>
                      <a class="dropdown-item" href="Newspaper.html">NEWSAPAPER</a>
                      <a class="dropdown-item" href="Hireme.html">HIRE ME</a>
                      <a class="dropdown-item" href="Games.html">GAMES</a>
                      <a class="dropdown-item" href="http://sizer-com.stackstaging.com/Simon/SWE.245/">WEATHER FORECAST</a>
                      <a class="dropdown-item" href="Reactiontester.html">REACTION TESTER</a>
                      <a class="dropdown-item" href="Vocabulary.html">ENRICH YOUR VOCABULARY</a>

                      <a class="dropdown-item" href="Videos.html">VIDEOS</a>
                      <a class="dropdown-item" href="Entertainment.html">ENTERTAINMENT</a>
                      <a class="dropdown-item" href="Shopping.html">SHOPPING</a>
                      <a class="dropdown-item" href="Help.html">HELP</a>
                      <li class="nav-item">
                        <div class= "signin">
                          <a href="Signin.html">
                           
                              Sign in
                      
                          </a>
                      </div>
                      </li>
                    </div>
                  </li>
                </ul>
        
              </div>
        </nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="Home.html">Home</a></li>
          <li class="breadcrumb-item active" >Vocabulary</li>
        </ol>
    </section>
    <section>
    <div class="container">
<p>Please enter a whole number.</p>

<form>

    <input name="number" type="text">
    
    <input type="submit" value="Go!">
    
</form>
</div>
    </section>
</body>
</html>
