

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SVEC LAMS</title>
    <link rel="stylesheet" type="text/css" href="./css/style_index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style type="text/css">
        

        body{
            padding: 0;
            margin: 0;
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShI2EvpwM3iKmnOwAdfomIn6v72iSyjhT96w&usqp=CAU");
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        header{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        h1{
            color: white;
            text-transform: uppercase;
            font-weight: 500;
            text-align: center;
            padding: 0px;
        }
        .loginhead{
            padding: 20px;
        }
        .box form{
            width: 450px;
            padding: 40px;
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #02101A;
            text-align: center;
            box-shadow: 10px 10px 12px 10px;
        }
        .box form input[type = "text"], .box form input[type ="password"]{
            border: 0;
            background: none;
            display: block;
            margin: 30px auto;
            text-align: center;
            border: 2px solid #A1C0D7;
            padding: 14px 10px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
        }
        .box form input[type = "text"]:focus, .box form input[type ="password"]:focus{
            width: 300px;
            border-color: #AAD8B9;
        }
        .box form input[type = "submit"]{
            border: 0;
            background: none;
            display: block;
            margin: 30px auto;
            text-align: center;
            border: 2px solid #AAD8B9;
            padding: 14px 40px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;

        }
        .box form input[type = "submit"]:hover{
            background: linear-gradient(#15F65F,#66B1CC);
        }
        .error{
            background: #F2DEDE;
            color: #A94442;
            padding: 10px;
            border-radius: 5px;
            margin: 20px auto; 
        }
        .error span, .success span{
              margin-left: 15px;
              color: black;
              font-weight: bold;
              float: right;
              font-size: 22px;
              line-height: 20px;
              cursor: pointer;
              transition: 0.3s;
        }
        .error p, .success p{
            margin-bottom: 0;
        }
        .success{
            background: #D2F6B9;
            color: #49851F;
            padding: 10px;
            border-radius: 5px;
            margin: 20px auto; 
        }
    
        #custom_button{
            background: none;
            border-radius: 25px;
            border:2px solid #AAD8B9; 

        }
        #custom_button:hover{
            background: linear-gradient(#15F65F,#66B1CC);
            border:2px solid #AAD8B9; 
        }
        .modal-body{
            height: auto;
        }
        .techsupport{
            font-size: 15px;
            padding-top: 5px;
        }
        @media screen and (max-width: 992px){
            .loginhead{
                color: gold;
                padding :20px;
                size: 80px;
            }
        }
    </style>
</head>

<body>
    <section>
        <header>
            <h1 class="loginhead" style="color:gold"><b>SVEC LAMS</b></h1>
        </header>
    </section>  
    <!--Login-->
    <section class="box">
        <form  action="login.php" method="post">
            <h1 style="">Login</h1>
            <?php if(isset($_GET['error'])){?>
                <div class="error">
                    <span onclick="this.parentElement.style.display='none';">&times;</span>
                    <p ><?php echo $_GET['error'] ;?></p>
                </div>
            <?php }?>
            <?php if(isset($_GET['success'])){?>
                <div class="success">
                    <span onclick="this.parentElement.style.display='none';">&times;</span>
                    <p><?php echo $_GET['success'] ;?></p>
                </div>
            <?php }?>
            <input type="text" placeholder="Username" name="username">
            <input type="password" placeholder="Password" name="password">
            <input type="submit" value="Login">
            <h6>Don't have account ?</h6>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentRegistration" data-whatever="@mdo">Student Registration</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#facultyRegistration" data-whatever="@mdo">Faculty Registration</button><br><br>
            <button type="submit" class="btn btn-primary"><a href="Branches1.html" style="color:white">Guest User</a></button>
        </form>
        
    </section>
    <!-- Student registration-->
    <section class="popup">
     <div class="modal fade" id="studentRegistration" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop = "static" data-keyboard="false">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Student Registration from</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form action="register_student.php" method="post">
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Name</label>
                <input type="text" class="form-control" id="recipient-name" name="name" required>
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">Roll Number</label>
                <p class="info">Your Roll Number will be the username while login</p>
                <input type="text" class="form-control" id="recipient-rollnumber" name="rollnumber" required>
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">Phone Number</label>
                <input type="tel" class="form-control" id="recipient-phonenumber" name="phonenumber" required pattern="[6-9]{1}[0-9]{9}">
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">E-mail</label>
                <input type="email" class="form-control" id="recipient-email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">Password</label>
                <input type="password" class="form-control" id="recipient-password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                <p class="info">*Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters</p>
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">Confirm Password</label>
                <input type="text" class="form-control" id="recipient-cpassword" name="cpassword" required>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
</div>
</div>
</section>


<!--Faculty registration -->

<section class="popup">
 <div class="modal fade" id="facultyRegistration" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop = "static" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Faculty Registration from</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <form action="register_faculty.php" method="post">
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" id="recipient-Fname" name="fname" required>
        </div>
        <div class="form-group">
            <label for="message-text" class="col-form-label">Biometric ID</label>
            <p class="info">Your Biometric id will be the username while login</p>
            <input type="text" class="form-control" id="recipient-Fid" name="f_id" required>
        </div>
        <div class="form-group">
            <lable for="message-text" class="col-form-label">Course your handling</lable>
            <select class="form-control" name="course">
                <option value="selectCourse">Select course</option>
                <option value="java">Java</option>
                <option value="Python">Python</option>
                <option value="CO">Computer Organisation</option>
                <option value="flat">FLAT</option>
            </select>
        </div>
        <div class="form-group">
            <label for="message-text" class="col-form-label">Phone Number</label>
            <p>Must be a vaild Indian phone number</p>
            <input type="tel" class="form-control" id="recipient-fphonenumber" name="fphonenumber" required pattern="[6-9]{1}[0-9]{9}">
        </div>
        <div class="form-group">
            <label for="message-text" class="col-form-label">E-mail</label>
            <input type="email" class="form-control" id="recipient-femail" name="femail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
        </div>
        <div class="form-group">
            <label for="message-text" class="col-form-label">Password</label>
            <input type="password" class="form-control" id="recipient-Fpassword" name="fpassword" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
            <p class="info">*Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters</p>
        </div>
        <div class="form-group">
            <label for="message-text" class="col-form-label">Confirm Password</label>
            <input type="text" class="form-control" id="recipient-cfpassword" name="fcpassword" required>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>
</div>
</div>
</section>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>