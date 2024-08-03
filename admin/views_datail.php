<?php
$conn=new mysqli("localhost","root","","app");
if($conn){
    $id=$_GET['id'];
    $select="SELECT * FROM changeddd WHERE id= '$id' ";
    $rest=$conn->query($select);
    if($rest->num_rows > 0){
        while($row=mysqli_fetch_array($rest)){
            $Idrealy=$row['idp'];
            $name=$row['nam'];
            $typr=$row['typr'];
            $buy=$row['buy'];
            $sell=$row['sell'];
            $tim_in=$row['tim'];
            $quar=$row['quar'];
            $code=$row['Codep'];
            $tim_update['tim_u'];
        }
        $select2="SELECT *  FROM product WHERE id= '$Idrealy' ";
        $rest1=$conn->query($select2);
        if($rest1->num_rows > 0){
            while($row2=mysqli_fetch_array($rest1)){
                $Id=$row2['id'];
                $namep=$row2['nam'];
                $typro=$row2['typroduct'];
                $buyp=$row2['buy'];
                $sellp=$row2['sell'];
                $time_in=$row2['tim_in'];
                $quarp=$row2['quar'];
                $codep=$row2['numb'];
                $time_update=$row2['tim_u'];
                $manager=$row["who_change_product"];
            }    
            
        }

    }
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Register - NiceAdmin Bootstrap Template</title>
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


    <li class="nav-item dropdown">

      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-bell"></i>
        <span class="badge bg-primary badge-number">4</span>
      </a><!-- End Notification Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
        <li class="dropdown-header">
          You have 4 new notifications
          <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-exclamation-circle text-warning"></i>
          <div>
            <h4>Lorem Ipsum</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>30 min. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-x-circle text-danger"></i>
          <div>
            <h4>Atque rerum nesciunt</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>1 hr. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-check-circle text-success"></i>
          <div>
            <h4>Sit rerum fuga</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>2 hrs. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-info-circle text-primary"></i>
          <div>
            <h4>Dicta reprehenderit</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>4 hrs. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>
        <li class="dropdown-footer">
          <a href="#">Show all notifications</a>
        </li>

      </ul><!-- End Notification Dropdown Items -->

    </li><!-- End Notification Nav -->

    <li class="nav-item dropdown">

      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-chat-left-text"></i>
        <span class="badge bg-success badge-number">3</span>
      </a><!-- End Messages Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
        <li class="dropdown-header">
          You have 3 new messages
          <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="message-item">
          <a href="#">
            <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
            <div>
              <h4>Maria Hudson</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>4 hrs. ago</p>
            </div>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="message-item">
          <a href="#">
            <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
            <div>
              <h4>Anna Nelson</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>6 hrs. ago</p>
            </div>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="message-item">
          <a href="#">
            <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
            <div>
              <h4>David Muldon</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>8 hrs. ago</p>
            </div>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="dropdown-footer">
          <a href="#">Show all messages</a>
        </li>

      </ul><!-- End Messages Dropdown Items -->

    </li><!-- End Messages Nav -->

    <li class="nav-item dropdown pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="" alt="Profile" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2"></span>
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


  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">


              <div class="card mb-3">

                <div class="card-body ">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Views details Updated on product</h5>
                    <p class="text-center small">before Updated product</p>
                  </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">ID product</label>
                      <h4><?php echo $Idrealy ?></h4>
                      
                    </div>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Name product</label>
                      <h4><?php echo $name ?></h4>
                      
                    </div>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Buy amount</label>
                      <h4><?php echo $buy ?></h4>
                      
                    </div>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Sell amount</label>
                      <h4><?php echo $name ?></h4>
                      
                    </div>
                    <div class="col-12">
                      <label for="yourName" class="form-label">quantity</label>
                      <h4><?php echo $quar ?></h4>

                      
                    </div>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Code product</label>
                      <h4><?php echo $code ?></h4>
                      
                    </div>

                    
                      

                

                </div>
                <div class="card-body">

                  <div class="pt-4 pb-2">
                   
                    <p class="text-center small">after update</p>
                  </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">ID product</label>
                      <h4><?php echo $Id ?></h4>
                      
                    </div>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Name product</label>
                      <h4><?php echo $namep ?></h4>
                      
                    </div>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Buy amount</label>
                      <h4><?php echo $buyp ?></h4>
                      
                    </div>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Sell amount</label>
                      <h4><?php echo $sellp ?></h4>
                      
                    </div>
                    <div class="col-12">
                      <label for="yourName" class="form-label">quantity</label>
                      <h4><?php echo $quar ?></h4>

                      
                    </div>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Code product</label>
                      <h4><?php echo $codep ?></h4>
                      
                    </div>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Time updated</label>
                      <h4><?php echo $time_update ?></h4>
                      
                    </div>

                    
                      

                

                </div>
              </div>

              <div class="credits">
                
                Designed by Gitego
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

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