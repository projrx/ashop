<html>
<head>

  <?php include('include/head.php') ?>


  <title>
    Jewelry Product Details
  </title>

  <?php if(!empty( $_GET['page_name'])) $link = $_GET['page_name'] ?>
  <?php if(!empty( $_GET['dservice_name'])) $page = $_GET['dservice_name'] ?>
  <?php if(empty( $_GET['page_name'])) $link = 'Null' ?>

<?php


  for ($i=0; $i < 2 ; $i++) { 

    if(isset($_POST['upcat'.$i])){
      $msg="Unsuccessful" ;

    
    $id=$_POST['upcat'.$i];

    $name=$_POST['name'.$i];
    $slug1=$_POST['slug'.$i];
    $metak=$_POST['metak'.$i];
    $metad=$_POST['metad'.$i];
    $price=$_POST['price'.$i];
    $desp=$_POST['desp'.$i];
    $code=$_POST['code'.$i];

    $ordr=$_POST['ordr'.$i];

     $slug=strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $slug1));

     if(isset($_POST['feat'.$i]) ){
       $feat=1;
     }else{
       $feat=0;
     } 



     if (!empty($_FILES['image1']['name'])) {
         
       // Get image name
       $image = $_FILES['image1']['name'];
       $image = md5(uniqid())  . "1.png";
       
       // image file directory
       $target = "../images/products/".basename($image);

           $data=mysqli_query($con,"UPDATE makeup SET `img`='$image' where `id`=$id")or die( mysqli_error($con) );

       if (move_uploaded_file($_FILES['image1']['tmp_name'], $target)) {
         $msg = "Image uploaded successfully";
       }else{
         $msg = "Failed to upload image";
       }


     }



     $sql = "UPDATE makeup SET `name` = '$name',`slug` = '$slug',`code` = '$code',`price` = '$price',`desp` = '$desp',`metak` = '$metak',`metad` = '$metad',`ordr` = '$ordr',`feat` = '$feat' WHERE `id` =$id";

     mysqli_query($con, $sql) ;
     ($msg=mysqli_error($con));
     if(empty($msg))  $msg="Product Updated"; 

     header("location:dmakeups-$slug");


    }

  }




?>





<style type="text/css">
  
  #catimg{
    height: 100px;
    width:  200px;
  }

  #catimg1{
    width:  200px;
  }  
  #ccatimg{
    height: 120px;
    width:  250px;
  }

  #ccatimg1{

  }

</style>

</head>
<body onload="showtoast()"  class="page-header-fixed bg-1 layout-boxed">
  <div class="modal-shiftfix">



    <?php include('include/header.php') ?>

<?php if (!empty($page)) {


  ?>

    <div class="container-fluid main-content">
      <div class="row">
        <!-- Basic Table -->
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10">
          <div class="widget-container fluid-height clearfix">
            <div class="heading" style="text-transform: capitalize;">
              <i class="fa fa-lightbulb-o"></i> <?php echo $page ?> Makeup Product Details
              <span style="float: right;    text-decoration: underline;"><?php

                $rows =mysqli_query($con,"SELECT pslug FROM makeup where slug='$page'  ORDER BY ordr" ) or die(mysqli_error($con));
                $n=0;

                while($row=mysqli_fetch_array($rows)){

                  $pslug = $row['pslug']; 
                }


                  ?>
              <a href="makeups-<?php echo $pslug ?>"> <i class="fa fa-reply"></i>Back to Category </a>
            </span>
            </div>
            <div class="widget-content padded clearfix">
               <form method="post" action="" enctype="multipart/form-data">

              <table class="table table-bordered">
                <thead>
                 <th>
                    Name 
                  </th>

                  <th>
                    Slug 
                  </th>

                  <th>
                   Meta Keywords
                 </th>
                 <th>
                   Meta Descp
                 </th>
                 <th style="max-width: 60px;">
                   Order
                 </th>
                 <th style="max-width: 60px;">
                   Feature
                 </th>




              </thead>
              <tbody>

             

             <?php

             $rows =mysqli_query($con,"SELECT * FROM makeup where slug='$page'  ORDER BY ordr" ) or die(mysqli_error($con));
             $n=0;

             while($row=mysqli_fetch_array($rows)){

               $slug = $row['slug']; 
               $name = $row['name']; 
               $metak = $row['metak']; 
               $metad = $row['metad']; 
               $img = $row['img']; 
               $price = $row['price']; 
               $ordr = $row['ordr']; 
               $id = $row['id']; 
               $feat = $row['feat']; 
               $desp = $row['desp']; 
               $code = $row['code']; 


               ?>

                 <tr>
                   <td>
                     <input type="text" class="form-control" name="name<?php echo $n ?>" value="<?php echo $name ?>">
                   </td>

                   <td>
                     <input type="text" class="form-control" name="slug<?php echo $n ?>" value="<?php echo $slug ?>">
                   </td>
                   <td>
                     <input type="text" class="form-control" name="metak<?php echo $n ?>" value="<?php echo $metak ?>">
                   </td>
                   <td>
                     <input type="text" class="form-control" name="metad<?php echo $n ?>" value="<?php echo $metad ?>">
                   </td>


                   <td  style="max-width: 60px;">
                     <input type="text" class="form-control" name="ordr<?php echo $n ?>" value="<?php echo $ordr ?>">
                   </td>
                   <td  style="max-width: 60px;">
                     <center>
                     <input type="checkbox" style="display: inline-block;" class="" name="feat<?php echo $n ?>" <?php if($feat==1) echo 'checked' ?> >
                   </center>
                   </td>





                  <?php } ?>


                </tbody>
              </table>
              <center>
                <div class="row">
                  <div class="col-md-1">
                  </div>
                  <div class="col-md-7">
              <textarea class="form-control" name="code<?php echo $n ?>"><?php echo $code; ?></textarea>
            </div>
                  <div class="col-md-3">
                    <input type="number" name="price<?php echo $n ?>" class="form-control" value="<?php echo $price ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                  </div>
                  <div class="col-md-4">
                  <img src="../images/products/<?php echo $img ?>" style="max-width: 200px;">
                  <input type="file" name="image1" class="form-control">
                </div>
                  <div class="col-md-7">
              <textarea name="desp<?php echo $n ?>" id="editor1"><?php echo $desp; ?></textarea>
                  </div>
                </div>
              <br>
              <br><br>


                 <button type="submit" name="upcat<?php echo $n ?>" class="btn btn-primary-outline" value="<?php echo $id ?>"> <i class="fa fa-save"></i> Save</button>

              </center>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  <?php } ?>



<div class="space"></div>



  </div>
</div>

<?php include('include/footer.php') ?>

</body>
</html>