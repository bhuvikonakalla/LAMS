<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert PDF</title>
    <style>
      
      div{
        border: 2px solid black;
        width: 500px;
        padding: 30px;
      }
      label{
        font-size: 25px;
        font-weight: bold;
      }
      #pdf{
        font-size: 20px;
        font-weight: bold;
      }
      #upload{
        font-size: 20px;
        font-weight: bold;
      }
    </style>
  </head>
  <body style="background-color:skyblue" ><br><br><br>
    <center>
    <div class="">
      <form class="" action="treinsert.php" method="post" enctype="multipart/form-data"><br>
        <label for="">CHOOSE YOUR PDF FILE</label><br><br>
        <input id="pdf" type="file" name="pdf" value="" required><br><br>
        <input id="upload" type="submit" name="submit" value="Upload">
        <?php
        include 'db.php';

        if (isset($_POST['submit'])) {
          $pdf=$_FILES['pdf']['name'];
          $pdf_type=$_FILES['pdf']['type'];
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
          $pdf_store="trepdf/".$pdf;

          move_uploaded_file($pdf_tem_loc,$pdf_store);

          $sql="INSERT INTO pdf_file values('$pdf')";
          $query=mysqli_query($conn,$sql);
          header("Location: trelink.html");



        }



         ?>

      </form>
  

    </div>
      </center>
  </body>
</html>
