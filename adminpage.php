<!doctype>
<html>
<head>

<link rel="stylesheet" type="text/css" href="admin.css">

</head>
<body>

<div class="container"> 
<div id="logo"> <img id="img" src="logo2.png"> </div>
<br>
</div>

<div class="topnav">
  <a href="homepage.html">Home</a>
  <a href="accountpage.php">Account</a>
  <a href="contactpage.html">Contact Us</a>
  <a href="feedbackpage.php">Feedback</a>
  <a href="adminpage.php">Admin Panel</a>

</div>

<div class="header">
<form name="h" method="POST">
  <br>
  <br>
  <br>
<label>Product Id</label>
<input type="number" name="a" required>
<br>
<br>
<label>Product Name</label>
<input type="text" name="b" required>
<br>
<br>
<label>Product Price</label>
<input type="number" name="c" required>
<br>
<br>
<label>Product Rating</label>
<input type="text" name="d" required>
<br>
<br>
<input type="submit" name="e" value="Insert">
<input type="submit" name="f" value="Delete">
<input type="submit" name="g" value="Update">
</form>
<br>

<?php
if(isset($_POST['e'])){
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];

$con=new mysqli("localhost","root","","bakery");
if($con==true){
$cmd="Insert into products values($a,'$b',$c,'$d')";
if($con->query($cmd)==true){
  echo"one product record inserted";
}
else{
  echo"query rob in insert";

}
}
}
?>

<?php
if(isset($_POST['f'])){
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];

$con=new mysqli("localhost","root","","bakery");
if($con==true){
$cmd="delete from products where product_id=$a";
if($con->query($cmd)==true){
  echo"one product record deleted";
}
else{
  echo"query rob in delete";

}
}
}
?>

<?php
if(isset($_POST['g'])){
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];

$con=new mysqli("localhost","root","","bakery");
if($con==true){
$cmd="update products set product_name='$b',product_price='$c',product_rating='$d' where product_id='$a'";
if($con->query($cmd)==true){
  echo"one product record updated";
}
else{
  echo"query rob in update";

}
}
}
?>



</div>



<div class="content"> 
	<br>
  <br>
  <br>

 <h1>Cherish the Taste of Quality Sweets street bakery Online</h1> 
 <h3>Online sweets are becoming the new trend when it comes to gifting and celebrations.
 Internet era has enabled people to immerse themselves in occasions and celebrations. 
Without much to worry about sourcing best quality sweets Needless to say Indian sweets have a huge fan-following worldwide. 
SJS establishes itself as a link between the States of India when it comes to gifting sweets. 
We facilitate online sweets delivery and gifting service across India. SJS helps customers to buy your favorite sweets online easily. 
Bright colors, different flavors, immense varieties, aromatic spices and forbidden tastes, all put together ensure out-of-the-world experience. 
There is no age bar when it comes to enjoying sweets and to receive a gift box of tasty sweets is a dream come true for all. Be it, the North Indian sweets or south Indian sweets
, the choice is endless thanks to the wide range of online sweets given by SJS.</h3> 

<h3> Sweets street bakery is one of the largest online sweets shop in India which aims to give out some of the best quality sweets to customers and
 making online sweets delivery across India. 
SJS pioneers the concept of online sweet delivery for those customers who want a wider array of quality sweets online to be gifted to their dear ones located in distant locations across India or for their personal use. 
We undertake online sweets delivery anytime throughout this Indian Subcontinent. For centuries, sweets have remained an integral part of our lives. 
Now instead of traveling to store, we provide our customers the convenience to buy sweets online. We carry out online sweets delivery services anywhere in India. 
Anything and everything starts with enjoying and sharing these delicious online sweets. Whether it is an announcement of a newly born, engagement or promotion
, they are most memorable occasions which can't be left out without celebrating. On such occasions, our online sweets delivery service will be much useful.
 No wonder elders share sweets with their family members and friends. Sharing the joy and Happiness.     </h3>




<h1>  Online Sweets Delivery in Few Easy Steps </h1>
<h3>Customers can place the order anytime at OYC to buy sweets online as per their convenience. Sweets, in particular, are distributed when a new business is started or a new assignment is obtained. At OYC we do online sweet delivery anytime whatever be the occasion. When this is the case with normal occasions, think of the number of online sweets you would order or buy online during big functions like weddings and festivals like Diwali, Holi and Raksha Bandhan. We provide all kinds of online sweets in peculiar boxes which can be clubbed along with other gifts or greeting cards can mean a lot to Neighbors, Colleagues, Friends, Family and all you are associated with anytime as we undertake online sweets delivery. OYC complements such occasions by undertaking online sweet delivery. And the most amazing thing is that these online sweet boxes at OYC comes in various shapes, sizes, contents and colors to suit all budgets and preferences. On top of that we also undertake delivery of bulk quantity sweets anywhere in India. We not just do online sweet delivery but also delivery you happiness and enhance and bloom your occasions with our rich variety of online sweets range. </h3>

<h3> Online sweets delivery is possible only because of continued demand from our customers. With the help of Internet connectivity you can order our quality sweets online it can be any variants choose specialty sweets of fame from different states of the India we provide assurance that same will be delivered on time thanks to the online sweet delivery service of SJS. We guarantee timely with the help of our network of logistics team who are working with us across India to ensure our customers get timely delivery of our sweets as per stipulated by them even across even remotest parts of India. Swift and prompt delivery is one of the positives of SJS. Online sweets delivery is a new phenomenon all made possible because of SJS. We work hard to see that you get your sweet gifts delivered on time to meet up with your Special Occasions, Events, Parties, Festivals, Weddings and more. Online sweets delivery is one of our top priorities at SJS which also includes top-notch quality, Freshness, Timely Delivery, Uniqueness, etc. SJS undertakes online sweets delivery anywhere in India to secure utmost customer satisfaction our customers are regular customers because of such services. Order for Online sweets delivery can also be made anytime we are doing even midnight, early morning online sweets delivery </h3>

<h1> Quick Reasons on Why to Buy Sweets Online from Sweets street bakery  </h1>
<h3>
<ul>
  <li>Customers have the option to choose and enjoy the specialized sweets of all regions, without moving from home. You can’t even get these plentiful options in nearby sweet shops.</li>  
  <li>One can save plenty of time by ordering sweets online from SJS.</li>
  <li>  Even if you live outside India and need to send sweets to your dear ones here in India, we will help you share the joy with our prompt sweet delivery across India.  </li>
  <li>  We deliver the sweets from best sweet shops in the respective cities. Top notch quality and freshness of the sweets is assured.  </li>
  <li> Prompt delivery is what everyone expects, and we make sure of it. Timely delivery of the sweets is guaranteed.  </li>

</ul>
</h3>

</div>

<div class="feedback"> 


</div>





<div class="footer"> 

<h5>Copyright © 2022 sweet street online. all rights reserved</h5>
</div>


</body>
</html>