<?php
include('database.inc.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Website</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        * {
            padding: 0px;
            margin: 0px;
        }
        
        .main {
            width: 100vw;
            /* height: 100vh; */
            display: flex;
            align-items: top;
            justify-content: center;
            /* flex-direction: column; */
        }
        
        .main .inner-div {
            width: 80%;
            height: 100%;
            /* padding: 0px 20px; */
            background: rgba(0, 0, 0, 0.5);
        }
        
        .main .inner-div .col-1 {
            padding: 5px;
            /* height: 50px; */
            background: #fff;
            align-items: center;
            padding: 20px 20px;
            font-weight: 600;
            font-size: 20px;
            text-transform: uppercase;
        }
        
        .main .inner-div header {
            background: chocolate;
            padding: 20px;
        }
        
        .main .inner-div header ul {
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: left;
        }
        
        .main .inner-div header ul li {
            padding: 3px 7px;
        }
        
        .main .inner-div header ul li:hover {
            border-bottom: 2px solid white;
            font-size: 22px;
        }
        
        .main .inner-div header ul li a {
            text-decoration: none;
            color: white;
            /* font-weight: 700; */
            letter-spacing: 1px;
            font-size: 20px;
        }
        /* -------------------col-3-------------------- */
        
        .col-3 {
            margin: 5% 30px;
        }
        
        .col-3 .container form #form {
            width: 100%;
            position: relative;
            /* height: 100%; */
            background: yellow;
            margin: 5px;
            padding: 3px;
        }
        
        .col-3 .container form #form label {
            color: red;
            font-size: 20px;
            margin: 20px 0px;
        }
        
        .col-3 .container form #form input,
        textarea {
            margin: 5px;
            padding: 5px;
            width: 80%;
            background: none;
            padding: 5px;
            /* text-transform: capitalize; */
            /* font-weight: 700; */
            letter-spacing: 1px;
            font-size: 15px;
            border: none;
            border-bottom: 1px solid rgba(0, 0, 0, 1);
        }
        
        .button {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .button input[type=submit] {
            padding: 7px;
            margin: 20px 10px;
            width: 70%;
            align-items: center;
            text-align: center;
            font-size: 20px;
            border-radius: 20px;
            border: none;
            cursor: pointer;
        }
		textarea{
			text-align:left;
		}
    </style>
</head>

<body>
    <div class="main">
        <div class="inner-div">
            <div class="col-1">
                <div class="left-div">
                    Meterial
                </div>

            </div>
            <header>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </header>
            <div class="col-3">
                <div class="container">
                    <form  method="post">
                        <div class="input-name" id="form">
                            <label for="">Enter your name : </label><br>
                            <input type="text" placeholder="Your name" id="name" name="name" required>
                        </div>
                        <div class="input-email" id="form">
                            <label for=""> Enter your email : </label><br>
                            <input type="text" placeholder="your email" id="email" name="email" required>
                        </div>
                        <div class="input-mobile" id="form">
                            <label for=""> Enter your mobile No : </label><br>
                            <input type="text" placeholder="your mobile" id="mobile" name="mobile" required>
                        </div>
                        <div class="text-area" id="form">
                            <label for="">Enter your message : </label></br>
                            <textarea name="message" id="" cols="30" rows="10" id="message"name="message" required>

                            </textarea>
                        </div>
                        <div class="button">
                            <input type="submit" value="Send me" name="save">
							</span></span>
                            
                        </div>
						<?php
							if(isset($_POST['save'])){
								$name=mysqli_real_escape_string($con,$_POST['name']);
								$email=mysqli_real_escape_string($con,$_POST['email']);
								$mobile=mysqli_real_escape_string($con,$_POST['mobile']);
								$message=mysqli_real_escape_string($con,$_POST['message']);
								$res=mysqli_query($con,"insert into contact_us(name,email,mobile,message) values('$name','$email','$mobile','$message')");
								if(mysqli_affected_rows($con)===1){
									echo '<div id="alert" style="margin-left:410px;color:white;display:inline;">
														Thankyou For Sending Us Your Details!!!
													</div>';
								}
							
							}
						?>
						
                    </form>

                </div>
            </div>
        </div>

    </div>

</body>

</html>