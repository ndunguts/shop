<?php
session_start();
include 'checklogin.php';
$conn=new mysqli("localhost","root","","app");
if($conn){
    $id_user=$_SESSION['Id'];
    $used="SELECT * FROM manger WHERE id='$id_user' ";
    $rest=$conn->query($used);
    if($rest->num_rows > 0){
        while($row=mysqli_fetch_array($rest)){
            $fname=$row['fname'];
            $lname=$row['lname'];
            $contact=$row['contact'];
            $email=$row['email_man'];
            $state=$row['stat'];
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<script type="text/javascript">
        window.history.forward();
    </script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tables / Data - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">SHOP</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

  

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

      
       
       
          

     

        
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $fname. ' ' . $lname ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $fname. ' ' . $lname ?></h6>
              <span><?php echo $state ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="admin.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

<li class="nav-item">
  <a class="nav-link collapsed" href="index.html">
    <i class="bi bi-grid"></i>
    <span>Dashboard</span>
  </a>
</li><!-- End Dashboard Nav -->


<li class="nav-item">
  <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
    <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
  </a>
  <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
    <li>
      <a href="forms-elements.html">
        <i class="bi bi-circle"></i><span>Form Elements</span>
      </a>
    </li>
    <li>
      <a href="forms-layouts.html">
        <i class="bi bi-circle"></i><span>Form Layouts</span>
      </a>
    </li>
    <li>
      <a href="forms-editors.html">
        <i class="bi bi-circle"></i><span>Form Editors</span>
      </a>
    </li>
    <li>
      <a href="forms-validation.html">
        <i class="bi bi-circle"></i><span>Form Validation</span>
      </a>
    </li>
  </ul>
</li><!-- End Forms Nav -->  
   



<li class="nav-item">
  <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
    <i class="bi bi-layout-text-window-reverse"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i>
  </a>
  <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
    <li>
      <a href="add1.php">
        <i class="bi bi-circle"></i><span>Add new product</span>
      </a>
    </li>
    <li>
      <a href="sell1.php">
        <i class="bi bi-circle"></i><span>sell product</span>
      </a>
    </li>
  </ul>
</li><!-- End Tables Nav -->

<li class="nav-item">
  <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
    <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
  </a>
  <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
    <li>
      <a href="list_product.php">
        <i class="bi bi-circle"></i><span>Stock Live</span>
      </a>
    </li>
    <li>
      <a href="list_sell.php">
        <i class="bi bi-circle"></i><span>product sold</span>
      </a>
    </li>
    <li>
      <a href="change.php">
        <i class="bi bi-circle"></i><span>Change market</span>
      </a>
    </li>
  </ul>
      </li><!-- End Charts Nav -->

      

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link " href="admin.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

     
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="regist.php">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->
      
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data stocke</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Chart</li>
          <li class="breadcrumb-item active">Stock Live</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">STOK</h5>
              <p>management of Stock </p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      <b>ID</b>
                    </th>
                    <th><b>N</b>ame</th>
                    <th>type product</th>
                    <th>Number code</th>
                    
                    
                    <th data-type="date" data-format="YYYY/DD/MM">Time _in</th>

                    <th data-type="date" data-format="YYYY/DD/MM">UPdated time</th>
                    <th>detail</th>
                    
                    
                 
                  </tr>
                </thead>
                <tbody>
                <?php
                  if($conn){
                    $sele="SELECT * FROM changeddd ";
                    $rest1=$conn->query($sele);
                      while($row2=mysqli_fetch_array($rest1)){
                        $Id=$row2['id'];
                        $id=$row2['idp'];
                        $name=$row2['nam'];
                        $typr=$row2['typr'];
                        $buy=$row2['buy'];
                        $sell=$row2['sell'];
                        $time=$row2['tim'];
                        $time_u=$row2['tim_u'];
                        $qua=$row2['quar'];
                        $code=$row2['Codep'];
                       
                      ?>
                        
                         <tr>
                         <td><?php echo $id ?></td>
                         <td><?php echo $name ?></td>
                         <td><?php echo $typr ?></td>
                          
                          
                          <td><?php echo $code ?></td>
                          <td><?php echo $time ?></td>
                          <td><?php echo $time_u ?></td>
                          <td><a href="views_datail.php?id=<?php echo $Id ?>">Views</a></td>
                        
                          </tr>
                  
             
                         
                         <?php
                      }
                    }
                   
                ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>SHOP</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      
      Designed by Gitego
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>