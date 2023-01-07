<?php 
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['name'])){

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style_home-student.css">
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
                <h3>Hello, <?php echo $_SESSION['name'];?> 👋👋</h3>
            </div>
            <nav>
                <ul class="navlist">
                    <li class="menu"><a href="#">Home</a></li>
                    <li class="menu"><a href="./changePassword-student.php">Change Password</a></li>
                    <li> <a href="logout.php" class="logout">LOGOUT</a></li>

                </ul>  
            </nav>

            <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="#">Home</a>
              <a href="./changePassword-student.php">Change Password</a>
              <a href="logout.php">LOGOUT</a></li>
            </div>
        </header>
    </section>
</body>
</html>

<?php 
}else{

    header("Location: index.php");
    exit();
}
?>