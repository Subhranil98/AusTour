<html>
<head>
<!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> -->
<title>SignUp Page</title>
<link rel="stylesheet" href="layout.css">
<link rel="stylesheet" href="bs.css">
<!-- <link rel="stylesheet" href="login_page.css"> -->
<link rel="icon" type="image/jpg" href="logo.jpg">
<style>

html, body {
    width: 100%;
    height: 100%;
    font-family: "Helvetica Neue", Helvetica, sans-serif;
    
    background-image: url(sydney.jpg);
    background-size: 129% 129%;

}

.button1 
{   

    clear: both;
    position: relative;
    top: 20px;
    left: 20px;
    display: inline-block;
    float: left;
    margin-right: 40px;
    margin-top: 10px;
    margin-left: 50px;
    width: 80px;
    height: 30px;
    font-size: 14px;
    font-weight: bold;
    color: #fff;
    /*background-color: #acd6ef;*/ /*IE fallback*/
    background-color: orange;
    border-radius: 30px;
    border: 1px solid #66add6;1

}

.button2
{   

    clear: both;
    position: relative;
    left: 140px;
    top: -20px;
    display: inline-block;
    float: left;
    margin-right: 40px;
    margin-top: 10px;
    margin-left: 50px;
    width: 80px;
    height: 30px;
    font-size: 14px;
    font-weight: bold;
    color: #fff;
    /*background-color: #acd6ef;*/ /*IE fallback*/
    background-color: orange;
    border-radius: 30px;
    border: 1px solid #66add6;

}

#fade
{   
    clear: both;
    /*float: right;*/
    display: inline-block;
    background-color: #485b66;
    opacity: 0.3;
}

#container {
    position: fixed;
    width: 340px;
    height: 532px;
    top: 50%;
    left: 50%;
    margin-top: -230px;
    margin-left: -170px;
    background: #fff;
    border-radius: 50px;
    border: 1px solid #cccccc;
 

}
form {
    margin: 0 auto;	
    margin-top: 20px;
}
label {
    color: #555;
    display: inline-block;
    margin-left: 18px;
    padding-top: 10px;
    font-size: 14px;
    clear: both;
    float: left;
}

input {
    font-family: "Helvetica Neue", Helvetica, sans-serif;
    font-size: 12px;
}
input[type=text],
input[type=password], input[type=email], input[type=age], input[type=number] {
    color: #777;
    padding-left: 10px;
    margin: 10px;
    margin-top: 12px;
    margin-left: 18px;
    width: 290px;
    height: 35px;
    border: 1px solid #c7d0d2;
    border-radius: 2px;
    
    }

#lower {
    background: #c3d6e0;
    width: 100%;
    height: 69px;
    margin-top: 20px;
    border-top: 1px solid #ccc;
    border-bottom-right-radius: 45px;
    border-bottom-left-radius: 45px;
}


input[type=submit] {
    float: right;
    margin-right: 80px;
    margin-top: 20px;
    width: 180px;
    height: 30px;
    font-size: 14px;
    font-weight: bold;
    color: #fff;
    /*background-color: #acd6ef;*/ /*IE fallback*/
    background-color: orange;
    border-radius: 30px;
    border: 1px solid #66add6;
    /*box-shadow: 0 1px 2px rgba(0, 0, 0, .3), inset 0 1px 0 rgba(255, 255, 255, .5);*/
    
}
input[type=submit]:hover {
	background-color: #acd6ef;
 
}

</style>

</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                    
              <div class="navbar-header">
                  
                <a class="navbar-brand" href="#"><img src="images/logo.jpg" width="30px" style="display:inline;margin-top: -5px;margin-right: 10px;">Traveler's Bliss</a>
              </div>
              <ul class="nav navbar-nav">
                <li class="active"><a href="Tourism.html">Home</a></li>
                <li><a href="search_flights.php">Flights</a></li>
                <li><a href="hotel package3.html">Hotels</a></li>
                <li><a href="package 3.html">Packages</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="signup_page.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login_page.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="contact.html"><span class="glyphicon glyphicon-envelope"></span> Contact Us</a></li>
              </ul>
            </div>
          </nav>
    <script type="text/javascript">
        function openLoginPage()
        {

            window.open("login_page.php","_self");
        }

        function openSignUpPage()
        {

            window.open("signup_page.php","_self");
        }        


    </script>
    
    <div id="container">

        <button class="button1" id="fade" onclick="openLoginPage()">Login</button>
        <button class="button2" onclick="openSignUpPage()">Sign Up</button>
        <br>
        <br>
        <br>
    	<!-- <?php echo $_SERVER['PHP_SELF'];?> -->
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <label for="name">Email:</label>
            <input type="email" id="name" name="name" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>


            <label for="username">Name:</label>
            <input type="text" id="username" name="username" required>

            <label for="contact">Contact</label>
            <input type="number" id="contact" name="contact" required>


            <!-- <label for="contact">Contact:</label> -->
            <!-- <input type="text" id="contact" name="contact" required> -->
    
            <!-- <label for="email">Email:</label> -->
            <!-- <input type="email" id="email" name="email" required> -->

            <!-- <label for="age">Age:</label> -->
            <!-- <input type="age" id="age" name="age" required> -->

            



            <div id="lower">
               <input type="submit" value="Submit" required>
            </div>

        </form>
    </div>

    <?php
    	if($_SERVER["REQUEST_METHOD"] == "POST")
    	{	
            $a=0;
            $servername = "localhost";
            $username = "root";
            $pass = "";

            $conn = mysqli_connect($servername, $username, $pass);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
                }
            // Create database
            $sql = "CREATE DATABASE IF NOT EXISTS ozt";
            if(mysqli_query($conn,$sql))
            {
                // echo "Table created successfully";
            }
            else
            {
                // echo "epic fail 1";
            }

    		$email=$_POST['name'];
    		$user_name=$_POST['username'];
    		$password=$_POST['password'];
    		$contact=$_POST['contact'];
    		// $age=$_POST['age'];
    		// $email=$_POST['email'];
    		// $contact=$_POST['contact'];

            

            $dbname="ozt";


            $servername = "localhost";
            $username = "root";
            $pass = "";
            // $dbname = "oshin";
            // // Create connection
            
            $conn = mysqli_connect($servername, $username, $pass, $dbname);
            // // Check connection
            // if(mysqli_query($conn,$sql))
            // {
            //     echo "Database created successfully";
            // }

            // else
            // {
            //     echo "Connection failed: " . mysqli_connect_error();
            // }

            $sql1 = "CREATE TABLE IF NOT EXISTS user_details 
            (email VARCHAR(30) PRIMARY KEY , password VARCHAR(20), username VARCHAR(30), contact INT(10))";  

            if(mysqli_query($conn,$sql1))
            {
                // echo "Table created successfully";
            }
            else
            {
                // echo "epic fail 1";
            }

            $sql2 = "INSERT INTO user_details (email, password, username, contact)
                    VALUES ('$email', '$password', '$user_name', $contact)";          
            
            // mysqli_query($conn,$sql2);

            if(mysqli_query($conn,$sql2))
            {	
            	$a=1;
                // echo "Coitus done successfully";

            }
            else
            {	
                // echo "epic fail 2 ".mysqli_error($conn);
            }

            // if (!$conn) {
            //     die("Connection failed: " . mysqli_connect_error());
            // }
            // $query = mysqli_query($conn,"
            // select * FROM demologin WHERE password = '$pass' AND username = '$user' ");
            // $rows = mysqli_num_rows($query);
            // if($rows == 1)
            // {
            //     header("Location: welcome.php"); //redirecting to other page
            // }
            // else
            // {
            //     $error = "username and password is invalid";
            // }
            // mysqli_close($conn); //closing connection
                  
            
    	}
    	// echo "<b>".$name;
    	// echo "<b>".$age;
    ?>

    <script type="text/javascript">
    	var user_name="<?php echo $user_name; ?>"; 
        var contact_info="<?php echo $contact; ?>"; 
        var email="<?php echo $email; ?>"; 
    	// var age="<?php  $age; ?>";
    	// var email="<?php  $email; ?>";
    	// var contact="<?php  $contact; ?>";
        // var password="<?php  $password; ?>";

    	// window.print("hello"+a);
    	// var e1=document.createElement('h1');
    	// document.body.appendChild(e1);
    	// e1.textContent=a;
    	// localStorage.clear();
    	localStorage.setItem("name",user_name);
        localStorage.setItem("contact",contact_info);
        localStorage.setItem("email",email);
    	// localStorage.setItem("age",age);
    	// localStorage.setItem("email",email);
    	// localStorage.setItem("contact",contact);
        // localStorage.setItem("password",password);
		// var e1=document.createElement('h5');
    	// document.body.appendChild(e1);
    	// e1.textContent=localStorage.getItem("name");

    	var a="<?php echo $a; ?>";
    	// alert(a);
    	function openWebsite()
		{	
			if(parseInt(a))
			{	
				// var e1=document.createElement('h1');
    			// document.body.appendChild(e1);
    			// e1.textContent=localStorage.getItem("age");
				window.open("Tourism.html","_self");
			}
			else
			{
				alert("Email id is already taken. Please try again");				
			}
		}
    	openWebsite();

     

    </script>



</body>
</html>