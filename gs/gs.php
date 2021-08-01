<?php  
$connect = mysqli_connect("localhost", "root", "", "gsdb");
if(isset($_POST["submit"]))
{
 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
                $item1 = mysqli_real_escape_string($connect, $data[0]);  
                $item2 = mysqli_real_escape_string($connect, $data[1]);
                $item3 = mysqli_real_escape_string($connect, $data[2]);  
                $item4 = mysqli_real_escape_string($connect, $data[3]);
                $item5 = mysqli_real_escape_string($connect, $data[4]);  
                $item6 = mysqli_real_escape_string($connect, $data[5]);
                $item7 = mysqli_real_escape_string($connect, $data[6]);  
                $item8 = mysqli_real_escape_string($connect, $data[7]);
                $query = "INSERT into gs_data(gender,race,parental level of education,lunch,test preparation course,math score,reading score,writing score) values('$item1','$item2','$item3','$item4','$item5','$item6','$item7','$item8')";
                mysqli_query($connect, $query);
   }
   fclose($handle);
   echo "<script>alert('Import done');</script>";
  }
 }
}
?>  
<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background: #f1f1f1;
}

.header {
  padding: 30px;
  text-align: center;
  background: white;
}

.header h1 {
  font-size: 50px;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: #f1f1f1;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>Welcome Grootans</h1>
  <p>I'm Groot</p>
</div>

<div class="topnav">
  <a href="#">Industries</a>
  <a href="#">Solution</a>
  <a href="#">Resources</a>
  <a href="#" style="float:right">Login</a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>New Grootan Details</h2>
      <h5>Upload The Files</h5>
				<form method="post" enctype="multipart/form-data">
   <div align="left">  
    <input type="file" name="file" />
    <br />
    <right><input type="submit" name="submit" value="Import" class="btn btn-danger" /></right>
   </div>
  </form>
					<ul id="errorOutPut"  class="outPut hidden">						
						
      <div class="fakeimg" style="height:200px;"></div>
      <p>Some text..</p>
      <p>Grootan name is coined from the famous Marvel movie Guardians of the galaxy vol 2  
·  Founded in 2017 and headquarter is at Chennai and Our Area of Business Includes Cloud, Mobile, Web, BOT, etc.
·  Currently we have 50+ Groots who are working with us.</p>
    </div>
    <div class="card">
      <h2>Highly Secured Native and Hybrid Mobile Applications
</h2>
      
      <div class="fakeimg" style="height:200px;">Highly Secured Native and Hybrid Mobile Applications
We offer robust, high-performing, feature-packed and built mobile applications to be both scalable and secure, able to handle any business and it needs.
Empowering Businesses with World-Class Technology! slider image
Empowering Businesses with World-Class Technology!
</div>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Us</h2>
      <div class="fakeimg" style="height:100px;"><img src="https://media.istockphoto.com/vectors/question-mark-icon-flat-vector-illustration-design-vector-id1162198273?k=6&m=1162198273&s=612x612&w=0&h=3V-VGVRpaD77MFXao1_ZjoTXI8E2KjOJLYOlbv1DDIs=" width="10%"></div></div>
      <p>We Grootan build experiences and solutions that help businesses in converting their ideas into reality with our technological expSunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg"><p>Build experiences and solutions that help businesses in converting their ideas into reality with our technological expSunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p></div>
    </div>
  </div>
</div>

<div class="footer">
  <h2>© 2021 Grootan Technologies. All Rights Reserved.

This site is best viewed in all resolution with latest version of Chrome, Firefox, Safari and Microsoft Edge</h2>
</div>

</body>
</html>