
<?php include 'include/connect.php'; ?>

<?php session_start(); ?>
<?php if(!empty($_SESSION['userid']))  $userid=$_SESSION['userid']   ?>
<?php if(!empty($_SESSION['uname']))  $uname=$_SESSION['uname']   ?>
<?php if(!empty($_SESSION['username']))  $username=$_SESSION['username']   ?>

    <?php
      if(isset($_GET['addcart'])){
        $msg="Unsuccessful" ;



        $slug=$_GET['addcart'];
        $type=$_GET['type'];
        $status='cart';
        if(!empty($_GET['qty'])) $qty=$_GET['qty']; else  $qty='1';


        $rows =mysqli_query($con,"SELECT id,qty FROM orders where proslug='$slug' AND type='$type' AND status='$status' AND actid='$userid'" ) or die(mysqli_error($con));
        $n=0;

        while($row=mysqli_fetch_array($rows)){

          $eid = $row['id']; 
          $eqty = $row['qty']; 

          $qty=$eqty+1;


          $sql = "UPDATE orders SET `qty` = '$qty' WHERE `id` =$eid";
          mysqli_query($con, $sql) ;


      }

      if(empty($eid)){
    
    $data=mysqli_query($con,"INSERT INTO orders (actid,type,proslug,status,qty)VALUES ('$userid','$type','$slug','$status','$qty')")or die( mysqli_error($con) );

    }
        ($msg=mysqli_error($con));
        if(empty($msg))  $msg="Added To Cart";
      

}


?>




    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- Customize styles -->
    <link href="style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/pe-icon-7-stroke.css">

    <link rel="shortcut icon" href="assets/ico/favicon.ico">


    <!-- LOAD JQUERY LIBRARY -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>

    <style type="text/css">
      

      #toast-container {
        display: block;
        position: fixed;
        z-index: 10000;
      }

      @media only screen and (max-width: 600px) {
        #toast-container {
          min-width: 100%;
          bottom: 0%;
        }
      }

      @media only screen and (min-width: 601px) and (max-width: 992px) {
        #toast-container {
          left: 5%;
          bottom: 7%;
          max-width: 90%;
        }
      }

      @media only screen and (min-width: 993px) {
        #toast-container {
          top: 10%;
          right: 7%;
          max-width: 86%;
        }
      }

      .toast {
        border-radius: 2px;
        top: 0;
        width: auto;
        clear: both;
        margin-top: 10px;
        position: relative;
        max-width: 100%;
        height: auto;
        min-height: 48px;
        line-height: 1.5em;
        word-break: break-all;
        background-color: #e46128;
        padding: 10px 25px;
        font-size: 2rem;
        font-weight: 300;
        color: #fff;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-align-items: center;
            -ms-flex-align: center;
                align-items: center;
        -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
                justify-content: space-between;
      }

      .toast .btn, .toast .btn-large, .toast .btn-flat {
        margin: 0;
        margin-left: 3rem;
      }

      .toast.rounded {
        border-radius: 24px;
      }

      @media only screen and (max-width: 600px) {
        .toast {
          width: 100%;
          border-radius: 0;
        }
      }

      @media only screen and (min-width: 601px) and (max-width: 992px) {
        .toast {
          float: left;
        }
      }

      @media only screen and (min-width: 993px) {
        .toast {
          float: right;
        }
      }

    </style>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.js'></script>
    <script>
      $(document).ready(function () {
    Materialize.toast('<?php if(!empty($msg)) echo $msg ?>', 4000);
    });

    </script>

