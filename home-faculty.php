<?php 
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['fname'])){

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style_home-faculty.css">
    
    <link rel="stylesheet" type="text/css" href="./css/responsivecss.css">
    <title>Home - SVEC LAMS</title>
    <script>
        function openNav() {
              document.getElementById("mySidenav").style.width = "250px";
            }
            
            function closeNav() {
              document.getElementById("mySidenav").style.width = "0";
            }
    </script>
</head>
<body>
    <section>
         <header class="head-container">
            <span style="font-size:50px;cursor:pointer" onclick="openNav()" class="menubutton">&#9776;</span>
            <div class="titleSection">
                <h1 class="headTitle">SVEC LAMS</h1>
                <h3>Hello, <?php echo $_SESSION['fname'];?> 👋👋</h3>
            </div>
            <nav>
                <ul class="navlist">
                    <li class="menu"><a href="#">Home</a></li>
                    <li class="menu"><a href="./changePassword-faculty.php">Change Password</a></li>
                    <li> <a href="logout.php" class="logout">LOGOUT</a></li>

                </ul>  
            </nav>
            <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="#">Home</a>
              <a href="./changePassword-faculty.php">Change Password</a>
              <a href="logout.php">LOGOUT</a></li>
            </div>
        </header>
    </section> 

        <?php 
            include "db.php";

            $course = $_SESSION['course'];
            $result = mysqli_query($conn, $sql);
            

        ?>

   
    <section class="studentPassword">
        <h3>To change the password of your students login - <a href="./changeStudent_password.php">Click here</a></h3>
    </section>
    
</body>
</html>

<?php 
}else{

    header("Location: index.php");
    exit();
}
?>  