<?php require('includes/config.php'); 


//define page title
$title = 'Homepage Page';

//include header template
require('layout/header.php'); 
?>
      <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="lihomepage.php">CodeHub</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                     <li>
                        <a href="memberpage.php">Profile</a>
                    </li>
                    <li>
                      <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1> Welcome to CodeHub!</h1>            
            <p><a class="btn btn-primary btn-large">Call to action!</a>
            </p>
        </header>
       <div class="card" style="width: 10rem; float:left;">
      <div class="card-block">
        
        
        <a href="getPHP.class.php" class="btn btn-primary">PHP</a>
      </div>
    </div>
    <div class="card" style="width: 10rem; float:left;">
      <div class="card-block">
       
       
        <a href="getJava.class.php" class="btn btn-primary">Java</a>
      </div>
    </div>
    <div class="card" style="width: 10rem; float:left;">
      <div class="card-block">
       
       
        <a href="getJavaScript.class.php" class="btn btn-primary">JavaScript</a>
      </div>
    </div>
     
     <div class="card" style="width: 10rem; float:left;">
      <div class="card-block">
        
       
        <a href="getPython.class.php" class="btn btn-primary">Python</a>
      </div>
    </div>
   <div class="card" style="width: 10rem; float:left;">
      <div class="card-block">
       
       
        <a href="getWebDev.class.php" class="btn btn-primary">HTML/CSS</a>
      </div>
    </div>
    <div class="card" style="width: 10rem; float:left;">
      <div class="card-block">
       
       
        <a href="getC.class.php" class="btn btn-primary">C</a>
      </div>
    </div>
    <br>
    <br>
    <hr>
       
       <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 portfolio-item">
                 <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=ipp4WPDwwvk&list=PLfdtiltiRHWF0RicJb20da8nECQ1jFvla">PHP Object                       Oriented Programming (OOP): Introduction (1/13)</a></h4><p>Want more? Explore the library at https://www.codecourse.com/lessons Official site                      https://www.codecourse.com Twitter https://twitter.com/teamcodecourse</p></blockquote>
                  <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>        
            </div>
            
            <div class="col-md-3 portfolio-item">
            
              <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=Yg31v6XB81o&index=2&list=PLfdtiltiRHWF0RicJb20da8nECQ1jFvla">PHP Object               Oriented Programming (OOP): Classes (2/13)</a></h4><p>Want more? Explore the library at https://www.codecourse.com/lessons Official site https://www              .codecourse.com Twitter https://twitter.com/teamcodecourse</p></blockquote>
              <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>                
            </div>
            
            <div class="col-md-3 portfolio-item">
                <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=rR3TyVIV7QQ&index=3&list=PLfdtiltiRHWF0RicJb20da8nECQ1jFvla">PHP                     Object Oriented Programming (OOP): Constructors (3/13)</a></h4><p>Want more? Explore the library at https://www.codecourse.com/lessons Official                     site https://www.codecourse.com Twitter https://twitter.com/teamcodecourse</p></blockquote>
                <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>              
            
            </div>
            
            <div class="col-md-3 portfolio-item">
               <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=S3ZMtAFfyTM&list=PLfdtiltiRHWF0RicJb20da8nECQ1jFvla&index=4">PHP                     Object Oriented Programming (OOP): Inheritance (4/13)</a></h4><p>Want more? Explore the library at https://www.codecourse.com/lessons Official site                 https://www.codecourse.com Twitter https://twitter.com/teamcodecourse</p></blockquote>
                <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>
                             
            </div>
        </div>
        <!-- /.row -->

        <hr>

<?php 
//include header template
require('layout/footer.php'); 
?>
y
