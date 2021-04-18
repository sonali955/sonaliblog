<?php include "header.php"; ?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Bootstrap 4 Blog Template For Developers</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css"> 
 
</head> 
<body>
    <?php
     include "dbcon.php";
     $data="select *from admin ";
     $query=mysqli_query($con,$data);
     $result=mysqli_fetch_array($query)
    ?>
    
    <header class="header text-center bg-dark">     
        <h1 class="blog-name pt-lg-4 mb-0"><a href="index.html"><?php echo $result['title']?></a></h1>
        
        <nav class="navbar navbar-expand-lg navbar-dark" >
           
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navigation" class="collapse navbar-collapse flex-column" >
                <div class="profile-section pt-3 pt-lg-0">
                    <img class="profile-image mb-3 rounded-circle mx-auto" src="admin/<?php echo $result['image']?>" alt="image" >            
                    
                    <div class="bio mb-3"><?php echo $result['description']?><br><a href="about.html">Find out more about me</a></div><!--//bio-->
                    <ul class="social-list list-inline py-3 mx-auto">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
                    </ul><!--//social-list-->
                     <hr> 
                </div><!--//profile-section-->
                
                <ul class="navbar-nav flex-column text-left">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php"><i class="fas fa-home fa-fw mr-2"></i>Blog Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fas fa-bookmark fa-fw mr-2"></i>Blog Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php"><i class="fas fa-user fa-fw mr-2"></i>About Me</a>
                    </li>
                </ul>
                
                <div class="my-2 my-md-3">
                    <a class="btn btn-primary" href="https://themes.3rdwavemedia.com/" target="_blank">Get in Touch</a>
                </div>
            </div>
        </nav>
    </header>
    
    <div class="main-wrapper">
	    	    
	    <article class="about-section py-5">
		    <div class="container">
			    <h2 class="title mb-3">About Me</h2>
			    
			    <p>Hi! I am Sonali, a web designer/developer focused on crafting great web experiences. Designing and Coding have been my passion since the days I started working with computers but I found myself into web design/development since 2020. I enjoy creating beautifully designed, intuitive and functional websites.
                For over past 8 years, I have worked for some of the best digital agencies and wonderful clients to create some award winning works. And, I can make this happen for your business as well. </p>

			    <figure><img class="profile-image mb-3 mx-auto" width="100%" height="800px" src="admin/<?php echo $result['image']?>" alt="image"></figure>

			    <h5 class="mt-5">About The Blog</h5>
			    <p>This recent article did a great job clarifying the different types of web development, but for now, I want to focus on front end developers. To sum it up, front end developers code websites using the building blocks of HTML, CSS, and JavaScript (more on this shortly). They’re the ones who take a design and develop it into a website that works.

              If you’re looking to break into tech, front end development is both a straight ahead and versatile way of getting there. You’ll have a specific base of skills that’ll make you attractive to employers, but one that’s broad enough to let you find an employment opportunity that works for you. Trust me, there’s no shortage of demand for front end development in a variety of jobs and environments.

              For some of you, this thumbnail might be enough to get started on your own coding odyssey. But if you’re like me and have an easier time moving forward with specifics you can visualize, an overview of the skills you’ll need for front end development might be helpful.

             A quick scan of current job listings for front end developers shows that there’s a clear and common pool of skills employers are looking for. As I’m writing this, the first three front end developer job listings I pulled up on Glassdoor.com have a lot in common.

             All three (One North Interactive, En Masse Entertainment, and Aha! Labs) share the previously mentioned HTML, CSS, and Javascript in their list of qualifications. You might have already figured that part out. But there are some less familiar terms floating around in the listings as well. Version control? Preprocessing platforms? Frameworks?

               These are all terms that will become super familiar to you as you start learning tech skills, but to ease you in, here’s a digestible list (and description!) of 10 essential skills every front end developer needs.</p>

			    <h5 class="mt-5">Must-Have Front End Developer Skills</h5>
			    <p>I know, these two terms keep coming up. There’s a good reason, though. You won’t find a single front end developer job listing that doesn’t call for (or assume) proficiency in these two languages.

             But let’s take a step back and look at what HTML and CSS are.

            HyperText Markup Language (HTML) is the standard markup language used to create web pages. A markup language is your way of making notes in a digital document that can be distinguished from regular text. It’s the most basic building block you’ll need for developing websites.

            CSS (Cascading Style Sheets) is the language used to present the document you create with HTML. Where HTML comes first and creates the foundation for your page, CSS comes along next and is used to create the page’s layout, color, fonts, and…well, the style!

            Both of these languages are absolutely essential to being a front end developer. Simply put, no HTML/CSS, no web development.</p>

			    <h5 class="mt-5">JAVASCRIPT/JQUERY</h5>
			    <p>Another MAJOR tool in your front end developer toolbox is going to be JavaScript (JS). Where HTML is a markup language and CSS is a style sheet language, JS is the first language I’ve mentioned that’s a bonafide programming language. What’s the difference? Where HTML and CSS determine the presentation of a page, JS determines the function.

               In some instances a very simple website or web page is fine, but for situations where you need interactive features—audio and video, games, scrolling abilities, page animations—JS is the tool you’ll use to implement them (though as CSS evolves, it’s starting to handle a lot of these duties as well).

              One cool thing to keep in mind about JS is the existence of libraries like jQuery, a collection of plugins and extensions that make it faster and easier to use JS on your website. jQuery takes common tasks that require multiple lines of JS code and compresses them into a format that can be executed with a single line. This will be a big help when you’re coding with JS. Unless, of course, you don’t like saving time. ;)</p>
			    
			    
		    </div>
	    </article><!--//about-section-->
	    
	    <section class="cta-section theme-bg-light py-5">
		    <div class="container text-center">
			    <h2 class="heading">WEB DEVELOPMENT</h2>
			    <div class="intro">Welcome to my blog. Subscribe and get my latest blog post in your inbox.</div>
			    <form class="signup-form form-inline justify-content-center pt-3">
                    <div class="form-group">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-dark">Subscribe</button>
                </form>
		    </div><!--//container-->
	    </section>
	    
	   
    
    </div><!--//main-wrapper-->
    

    <!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->  
    <div id="config-panel" class="config-panel d-none d-lg-block">
        <div class="panel-inner">
            <a id="config-trigger" class="config-trigger config-panel-hide text-center" href="#"><i class="fas fa-cog fa-spin mx-auto" data-fa-transform="down-6" ></i></a>
            <h5 class="panel-title">Choose Colour</h5>
            <ul id="color-options" class="list-inline mb-0">
                <li class="theme-1 active list-inline-item"><a data-style="assets/css/theme-1.css" href="#"></a></li>
                <li class="theme-2  list-inline-item"><a data-style="assets/css/theme-2.css" href="#"></a></li>
                <li class="theme-3  list-inline-item"><a data-style="assets/css/theme-3.css" href="#"></a></li>
                <li class="theme-4  list-inline-item"><a data-style="assets/css/theme-4.css" href="#"></a></li>
                <li class="theme-5  list-inline-item"><a data-style="assets/css/theme-5.css" href="#"></a></li>
                <li class="theme-6  list-inline-item"><a data-style="assets/css/theme-6.css" href="#"></a></li>
                <li class="theme-7  list-inline-item"><a data-style="assets/css/theme-7.css" href="#"></a></li>
                <li class="theme-8  list-inline-item"><a data-style="assets/css/theme-8.css" href="#"></a></li>
            </ul>
            <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
        </div><!--//panel-inner-->
    </div><!--//configure-panel-->

    
       
    <!-- Javascript -->          
    <script src="assets/plugins/jquery-3.3.1.min.js"></script>
    <script src="assets/plugins/popper.min.js"></script> 
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    
    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="assets/js/demo/style-switcher.js"></script>     
    

</body>
</html> 
<?php include "footer.php"; ?>