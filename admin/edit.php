
<?php
session_start();
include 'checklogin.php';
$conn=new mysqli("localhost","root","","app");
if($conn){
    $id_user=$_SESSION['Id'];
    $id_p=$_GET['IDP'];
    $used="SELECT * FROM product WHERE id='$id_p' ";
    $rest=$conn->query($used);
    if($rest->num_rows > 0){
        while($row=mysqli_fetch_array($rest)){
            $name=$row['nam'];
            $tname=$row['typroduct'];
            $buy=$row['buy'];
            $sell=$row['sell'];
            $time=$row['tim_in'];
            $quar=$row['quar'];
            $numb=$row['numb'];

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



  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
             
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Edite product</h5>
                    <p class="text-center small">Enter New datail on product</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate action="update.php?Id=<?php echo $id_p ?>&namep=<?php echo $name ?>&tname=<?php echo $tname ?>&buyp=<?php echo $buy ?>&sellp=<?php echo $id_p ?>&Quar=<?php echo $quar ?>&codep=<?php echo $numb ?>&tim=<?php echo $time ?>" method="post">
                    <div class="col-12">
                      <label for="yourName" class="form-label">Name</label>
                      <input type="text" name="name" class="form-control" id="yourName" value="<?php echo $name ?>" required >
                      <div class="invalid-feedback">Please, enter  name!</div>
                    </div>

                   
                    <div class="col-12">
                      <label for="yourName" class="form-label">Type product</label>
                      <input type="text" name="typr" class="form-control" id="yourName" required value="<?php echo $tname ?>" >
                      <div class="invalid-feedback">Please, enter type product!</div>
                    </div>

                    
                    <div class="col-12">
                      <label for="yourName" class="form-label">Buy amount</label>
                      <input type="text" name="buy" class="form-control" id="yourName" required value="<?php echo $buy ?>">
                      <div class="invalid-feedback">Please, enter Buy amount!</div>
                    </div>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Sell amount</label>
                      <input type="text" name="sell" class="form-control" id="yourName" required  value="<?php echo $sell ?>" >
                      <div class="invalid-feedback">Please, enter Sell amount!</div>
                    </div>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Quarlity</label>
                      <input type="text" name="quar" class="form-control" id="yourName" required value="<?php echo $quar ?>">
                      <div class="invalid-feedback">Please, enter Quarlity</div>
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">Number code</label>
                      <input type="text" name="code" class="form-control" id="yourName" required value="<?php echo $numb ?>">
                      <div class="invalid-feedback">Please, enter Number code</div>
                    </div>


                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="sub">Update product</button>
                    </div>
                   
                  </form>

                </div>
              </div>

              <div class="credits">

                Designed by Gitego</a>
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