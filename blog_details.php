<?php
include "header.php";
?>
<?php
 include "dbcon.php";
 $id=$_GET['id'];
$data="select * from blog_list where id=$id";
$query=mysqli_query($con,$data);
$result=mysqli_fetch_array($query);
//echo $result['title'];
?>
 <div class="main-wrapper">
	    
	    <article class="blog-post px-3 py-5 p-md-5">
		    <div class="container">
			    <header class="blog-post-header">
				    <h2 class="title mb-2"><?php echo $result['title']?></h2>
				    <div class="meta mb-3"><span class="date"><?php echo $result['date_time']?></span></div>
			    </header>
			    
			    <div class="blog-post-body">
				    <figure class="blog-banner">
				        <a href="https://made4dev.com"><img class="img-fluid" src="admin/<?php echo $result['image']?>" alt="image"></a>
				    </figure>
				    <p><?php echo $result['description']?></p>
				</div>
				</div>
			</article>
		</div>
<?php
include "footer.php";

?>
