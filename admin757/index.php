<html>
<head>

  <?php include('include/head.php') ?>


  <title>
    Dashboard
  </title>

  <?php $link = $_GET['page_name'] ?>


  <?php



  for ($i=0; $i < 100 ; $i++) { 

    if(isset($_POST['savecat'.$i])){
      $msg="Unsuccessful" ;

      $id=$_POST['savecat'.$i];
      $name=$_POST['name'.$i];
      $vid=$_POST['vid'.$i];
      $ordr=$_POST['ordr'.$i];



      $sql = "UPDATE slider SET `name` = '$name',`vid` = '$vid',`ordr` = '$ordr' WHERE `id` =$id";

      mysqli_query($con, $sql) ;
      ($msg=mysqli_error($con));
      if(empty($msg))  $msg="Updated";



    }

  }



  for ($i=0; $i < 100 ; $i++) { 

    if(isset($_POST['delcat'.$i])){
      $msg="Unsuccessful" ;

      $id=$_POST['delcat'.$i];
  
      $sql = "DELETE FROM slider WHERE id=$id ";

      mysqli_query($con, $sql) ;
      ($msg=mysqli_error($con));

      if(empty($msg))  $msg="Slide Deleted";



    }

  }




  if(isset($_POST['addcat'])){

      $msg="Unsuccessful" ;
      
       $name=$_POST['newname'];
       $vid=$_POST['newvid'];
       $ordr=$_POST['newordr'];


  

  $data=mysqli_query($con,"INSERT INTO slider (name,vid,ordr)VALUES ('$name','$vid','$ordr')")or die( mysqli_error($con) );

    $msg="Slide Added" ;

      
  }




  ?>







  <style type="text/css">
    
    #catimg{
      min-height: 600px;

    }

    #catimg1{
      width:  200px;
    }  
    #ccatimg{
      height: 70px;
      width:  200px;
    }

    #ccatimg1{
      width:  250px;
    }

  </style>


</head>
<body onload="showtoast()" class="page-header-fixed bg-1 layout-boxed">
  <div class="modal-shiftfix">


    <?php include('include/header.php') ?>






    <div class="container-fluid main-content">
      <div class="row">
        <!-- Basic Table -->
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10">
          <div class="widget-container fluid-height clearfix">
            <div class="heading" style="text-transform: capitalize;">
              <i class="fa fa-picture-o"></i> Slider
            </div>
            <div class="widget-content padded clearfix">
              <table class="table table-bordered">
                <thead>
                  <th>
                   Title (Optional)
                 </th>

                 <th>
                  YT Video ID
                </th>
                <th style="max-width: 60px;">
                  Order
                </th>
              


                <th class="hidden-xs">
                  Save
                </th>


              </thead>
              <tbody>

                <?php

                $rows =mysqli_query($con,"SELECT * FROM slider  ORDER BY ordr" ) or die(mysqli_error($con));
                $n=0;

                while($row=mysqli_fetch_array($rows)){

                  $name = $row['name']; 
                  $vid = $row['vid']; 
                  $ordr = $row['ordr']; 
                  $id = $row['id']; 


                  ?>
                  <form method="post" action="" enctype="multipart/form-data">

                    <tr>
                      <td>
                        <input type="text" class="form-control" name="name<?php echo $n ?>" value="<?php echo $name ?>">
                      </td>

                      <td>
                        <input type="text" class="form-control" name="vid<?php echo $n ?>" value="<?php echo $vid ?>">
                      </td>

                      <td  style="max-width: 60px;">
                        <input type="text" class="form-control" name="ordr<?php echo $n ?>" value="<?php echo $ordr ?>">
                      </td>
                     



                      <td>

                        <div class="btn-group">

                          <button type="submit" name="savecat<?php echo $n ?>" class="btn btn-success-outline" value="<?php echo $id ?>"> <i class="fa fa-save"></i></button>

                          <button type="submit" name="delcat<?php echo $n ?>" class="btn btn-danger-outline" value="<?php echo $id ?>"> <i class="fa fa-trash-o"></i></button>
                        </div>
                      </td>
                    </tr>

                  </form>

                  <?php $n++; } ?>

                  <form method="post" action="" enctype="multipart/form-data">

                    <tr>
                      <td>
                        <input type="text" class="form-control" name="newname" value="">
                      </td>

                      <td>
                        <input type="text" class="form-control" name="newvid" value="">

                      </td>

                      <td  style="max-width: 60px;">
                        <input type="text" class="form-control" name="newordr" value="">
                      </td>

                  



                      <td>

                        <div class="btn-group">

                          <button type="submit" name="addcat" class="btn btn btn-outline"> <i class="fa fa-plus"></i></button>
                        </div>
                      </td>
                    </tr>

                  </form>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

<hr>











  <?php include('include/footer.php') ?>

</body>
</html>