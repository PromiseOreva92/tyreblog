<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
#A{
	width:200px;
	height:200px;
	border:1px solid #000;
	padding:20px;
	overflow:hidden;

	
	
}
#1{
	text-align:justify;
}
</style>
</head>

<body>
<div id="A">
<p id=1>
This book is designed to serve not only as an introduction to web scraping, but as a
comprehensive guide to scraping almost every type ofdata from the modern Web.
Although it uses the Python programming language, and covers many Python basics,
it should not be used as an introduction to the language.
Ifyou are not an expert programmer and don’t know any Python at all, this book
might be a bit ofa challenge. If, however, you are an experienced programmer, you
should find the material easy to pick up. Appendix A covers installing and working
with Python 3.x, which is used throughout this book. Ifyou have only used Python
2.x, or do not have 3.x installed, you might want to review Appendix A.
Ifyou’re looking for a more comprehensive Python resource, the book Introducing
Python by Bill Lubanovic is a very good, iflengthy, guide. For those with shorter
attention spans, the video series Introduction to Python by Jessika McKeller is an
excellent resource.
Appendix C includes case studies, as well as a breakdown ofkey issues that might
affect how you can legally run scrapers in the United States and use the data that
they produce.
Technical books are often able to focus on a single language or technology, but web
scraping is a relatively disparate subject, with practices that require the use of
databases, web servers, HTTP, HTML, Internet security, image processing, data
science, and other tools. This book attempts to cover all ofthese to an extent for the
purpose ofgathering data from remote sources across the Internet.
Part I covers the subject ofweb scraping and web crawling in depth, with a strong
focus on a small handful oflibraries used throughout the book. Part I can easily be
used as a comprehensive reference for these libraries and techniques (with certain
exceptions, where additional references will be provided).
Part II covers additional subjects that the reader might find useful when writing
web scrapers. These subjects are, unfortunately, too broad to be neatly wrapped up
in a single chapter. Because ofthis, frequent references will be made to other
resources for additional information.
The structure ofthis book is arranged to be easy to jump around among chapters to
find only the web-scraping technique or information that you are looking for. When
a concept or piece ofcode builds on another mentioned in a previous chapter, I will
explicitly reference the section that it was addressed in.

</p>

</div>
<script>
///window.addEventListener('load',display);
/*function display(){
	p =document.getElementById('1');
	
	if(p.innerHTML.length>40){
		//alert(p.innerHTML.length);
			newE = document.createElement("a");
			newE.setAttribute('href','#');
			newE.innerHTML='...Read More';
			str = p.innerHTML.substring(0,155);
			//p.appendChild(newE);
			p.innerHTML=str;
			p.appendChild(newE);

	}
}*/
</script>
<form method="post">
<input type="submit" value="b1" name="b1" /><input type="submit" name="b2" value="b2" />
</form>
<?php
if(isset($_POST['b1'])){echo "<script> alert('b1')</script>";}
if(isset($_POST['b2'])){echo "<script> alert('b2')</script>";}
?>
 <?php

        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;
		echo " offset :  $offset ";
        $conn=mysqli_connect("localhost","root","","dictionary");
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }

        $total_pages_sql = "SELECT words FROM data";
		
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_num_rows($result);
		echo "total_rows : $total_rows";
        $total_pages =ceil($total_rows / $no_of_records_per_page);
		echo "total_pages : $total_pages<br>";
        $sql = "SELECT * FROM data LIMIT $no_of_records_per_page  offset  $offset";
        $res_data = mysqli_query($conn,$sql);

        while($row = mysqli_fetch_array($res_data)){
            echo $row[1];
			echo "<br>";
        }
        mysqli_close($conn);
    ?>
    <ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>

</body>
</html>

