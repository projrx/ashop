<html>
  <head>

    <?php include('include/head.php') ?>


    <title>
      Contact Details
    </title>

    <?php $link = $_GET['page_name'] ?>
    <?php $page = $_GET['page_name'] ?>



    <?php
      if(isset($_POST['saveinfo'])){
        $msg="Unsuccessful" ;

    

        $post=$_POST['editor1'];

  



        $sql = "UPDATE contact SET `post` = '$post' WHERE `id` =1";

     


        mysqli_query($con, $sql) ;
        ($msg=mysqli_error($con));
        if(empty($msg))  $msg="Saved";


      }
?>





<?php
  if(isset($_POST['submit'])){
    $msg="Unsuccessful" ;




    $sitename = $_POST['sitename'];  

    $sitephone = $_POST['sitephone'];  
    $sitemail = $_POST['sitemail'];  
    $siteaddress = $_POST['siteaddress'];  
    $gmaps = $_POST['gmaps'];  
    $fpost = $_POST['fpost'];

    $facebook = $_POST['facebook'];  
    $twitter = $_POST['twitter'];  
    $insta = $_POST['insta'];  
    $youtube = $_POST['youtube'];


    if (!empty($_FILES['image1']['name'])) {
        
      // Get image name
      $image = $_FILES['image1']['name'];
      $image = md5(uniqid())  . "1.png";
      
      // image file directory
      $target = "../images/".basename($image);

          $data=mysqli_query($con,"UPDATE contact SET `logo`='$image' where `id`=1")or die( mysqli_error($con) );

      if (move_uploaded_file($_FILES['image1']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
      }else{
        $msg = "Failed to upload image";
      }


    }


    $sql = "UPDATE contact SET `sitename` = '$sitename',`phone` = '$sitephone',`email` = '$sitemail',`address` = '$siteaddress',`gmaps` = '$gmaps',`fpost` = '$fpost',`facebook` = '$facebook',`twitter` = '$twitter',`insta` = '$insta',`youtube` = '$youtube' WHERE `id` =1";

 


    mysqli_query($con, $sql) ;
    ($msg=mysqli_error($con));
    if(empty($msg))  $msg="Saved";




  }

  ?>

  </head>
  <body  onload="showtoast()"  class="page-header-fixed bg-1 layout-boxed">
    <div class="modal-shiftfix">



    <?php include('include/header.php') ?>
     


    <?php

    $rows =mysqli_query($con,"SELECT * FROM contact where id=1 " ) or die(mysqli_error($con));
    

    while($row=mysqli_fetch_array($rows)){

      $pagepost = $row['post'];
      $pagecover = $row['cover'];

    }

    ?>





        <form method="post" action="" enctype="multipart/form-data">
     

<br>
<br>
        
        

          <div class="row">


            <div class="col-md-12">

          
       <textarea name="editor1"><?php echo $pagepost ?></textarea>
                     
          </div>
        </div>
        <br><br>

        <center>
                    <button type="submit" name="saveinfo" class="btn btn-primary" value=""> <i class="fa fa-save"></i> Save</button>

                  </center>

    <br><br>
    <br><br>

    <hr>
    <center><h2>Site Details</center>
  

    <?php

    $rows =mysqli_query($con,"SELECT * FROM contact " ) or die(mysqli_error($con));
    

    while($row=mysqli_fetch_array($rows)){

      $sitename = $row['sitename'];  
      $sitelogo = $row['logo'];  
      $sitephone = $row['phone'];  
      $sitemail = $row['email'];  
      $siteaddress = $row['address'];  
      $gmaps = $row['gmaps'];  
      $fpost = $row['fpost'];  
      $facebook = $row['facebook'];  
      $twitter = $row['twitter'];  
      $insta = $row['insta'];  
      $youtube = $row['youtube'];  

    }

    ?>

    <div class="row">
      <div class="col-md-3">

      </div>

      <div class="col-md-6">

        <table>
          <thead>
            
          </thead>
          <tbody>

            <form action="" method="post" enctype="multipart/form-data">

            <tr>
              <td> Site Name: </td>
              <td> <input type="text" name="sitename" class="form-control" value="<?php echo $sitename ?>"> </td>
            </tr>
            <tr>
              <td> Site Phone: </td>
              <td> <input type="text" name="sitephone" class="form-control" value="<?php echo $sitephone ?>"> </td>
            </tr>
            <tr>
              <td> Site Email: </td>
              <td> <input type="text" name="sitemail" class="form-control" value="<?php echo $sitemail ?>"> </td>
            </tr>

            <tr>
              <td> Site Address: </td>
              <td> <textarea name="siteaddress" class="form-control"><?php echo $siteaddress ?> </textarea> </td>
            </tr>

            <tr>
              <td>Map Code: </td>
              <td> <textarea name="gmaps" class="form-control"><?php echo $gmaps ?> </textarea> </td>
            </tr>
            <tr>
              <td>Footer Text: </td>
              <td> <textarea name="fpost" class="form-control"><?php echo $fpost ?> </textarea> </td>
            </tr>
            <tr>
              <td> Facebook: </td>
              <td> <input type="text" name="facebook" class="form-control" value="<?php echo $facebook ?>"> </td>
            </tr>
            <tr>
              <td> Twitter: </td>
              <td> <input type="text" name="twitter" class="form-control" value="<?php echo $twitter ?>"> </td>
            </tr>
            <tr>
              <td> Instagram: </td>
              <td> <input type="text" name="insta" class="form-control" value="<?php echo $insta ?>"> </td>
            </tr>
            <tr>
              <td> Youtube: </td>
              <td> <input type="text" name="youtube" class="form-control" value="<?php echo $youtube ?>"> </td>
            </tr>





          </form>
          </tbody>
        </table>

        <br><br>
        Logo:

        <center>
            <img src="../images/<?php echo $sitelogo ; ?>" class="">

            <input type="file" style="width: 400px;" name="image1" class="form-control">

<br>
<br>
            <input type="submit" name="submit" class="btn">
        </center>

     </div>


    </div>



    <div class="space">
    </div>



    </div>

    <?php include('include/footer.php') ?>

  </body>
</html>