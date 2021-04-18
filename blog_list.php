<div class="main-wrapper">
	    <section class="cta-section py-5" style="background-color: #c9cade">
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
		    <?php
          include "dbcon.php";
          $data="select *from blog_list order by id desc ";
          $query=mysqli_query($con,$data);
          while($result=mysqli_fetch_array($query))
            {
        ?>
	    </section>
	    <section class="blog-list px-3 py-5 p-md-5" style="background-color: #c9cade">
		    <div class="container">
			    <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="admin/<?php echo $result['image']?>" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="blog-post.html"><?php echo $result['title']?></a></h3>
						    <div class="meta mb-1"><span class="date"><?php echo $result['date_time']?><span><span class="time"></span><span class="comment"><a href="#"></a></span></div>
						    <div class="intro"><?php echo substr($result['description'],0,100);
						    ?></div>
						    <a class="more-link" href="blog_details.php?id=<?php echo $result['id']?>">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
			    <?php
			}
			?>