<?php
$con= mysqli_connect("localhost","root","","hunt");
if(mysqli_connect_errno()){
	echo "Failed to connect the database:" .mysqli_connect_error();
}

function homePost(){
   global $con;
    $get_blog="SELECT * from blog order by RAND() LIMIT 0,4";
    $run_blog=mysqli_query($con,$get_blog);
    while($row_blog=mysqli_fetch_array($run_blog)){
        $blog_id=$row_blog['blog_id']; 
        $blog_cat=$row_blog['blog_cat'];
        $blog_title=$row_blog['blog_title'];
        $blog_date=$row_blog['blog_date'];
        $blog_author=$row_blog['blog_author'];
        $blog_image=$row_blog['blog_image'];
        $blog_body=$row_blog['blog_body'];
        $date=strtotime($blog_date);
        $date1=date("j F",$date);
        echo "
        <div class='col-sm-6'>
                            <a href='blog-single.php?blog_id=$blog_id'><img src='images/$blog_image' alt='' class='img-responsive img-rounded'></a>
                            <div class='post-info'>
                                <div class='date text-edit'>
                                    <span class='day'>
                                    $date1</span>
                                </div>
                                <a href=''>
                                    <h5>$blog_title.</h5>
                                </a>
                                <h6 class='p-opacity'>Posted by $blog_author <strong>$blog_cat</strong></h6>
                            </div>
                            <p class='p-opacity'>$blog_body.</p>
                            <a href='blog-single.php?blog_id=$blog_id' class='more-link edit'>Continue Reading ...</a>
                        </div>

        ";
    }
        
}

function getCat(){
    global $con;
    $get_cat= "SELECT * from category";
    $run_cat= mysqli_query($con, $get_cat);
    while ($row_cat=mysqli_fetch_array($run_cat)) {
        $cat_id=$row_cat['cat_id'];
        $cat_title=$row_cat['cat_title'];

        echo "<p><strong>$cat_title</strong></p>

        ";

    }
}
function about(){
    $myfile=fopen("about.txt", "r") or die("unable to open file");
    $show= fread($myfile, filesize("about.txt"));
    echo "
<p class='m-t'>$show</p>    ";
}
    



?>