<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>GFG- Store Data</title>
    <style>
    html, body{
	width:100%;
	height:100%;
	margin:0%;
	font-family:"helvetica","verdana","calibri", "san serif";
	overflow:hidden;
	padding:0%;
	border:0%;
	}
        #di{
height:5%;
background-color:#343434;
margin-bottom:2%;
color: aqua;
text-align: center;

}
#fo{
text-align:center;
height: 5%;

}
input[type="text"]{
width:20%;
height: 30px;
margin:1%;
}

    </style>
</head>
  
<body bgcolor="#e5a010>
   
        <centre><h1>Storing Form data in Database</h1></centre>
  
        <form action="insert.php" method="post">
        <div id=di>
   <p>Enter Your Details</p>

</div>
              
 <div id=fo>             
<p>
                <label for="firstName">First Name:</label>
                <input type="text" name="first_name" id="firstName">
            </p>
  
  
  
            <p>
                <label for="lastName">Last Name:</label>
                <input type="text" name="last_name" id="lastName">
            </p>
            <p>
                <label for="Gender">Gender:</label>
                <input type="text" name="gender" id="Gender">
            </p>
  
  
              
              
              
<p>
                <label for="Address">Address:</label>
                <input type="text" name="address" id="Address">
            </p>
  
  
              
              
              
<p>
                <label for="emailAddress">Email Address:</label>
                <input type="text" name="email" id="emailAddress">
            </p>
  
            <input type="submit" value="Submit">
        </form>
</div>  
</body>
  
</html>
