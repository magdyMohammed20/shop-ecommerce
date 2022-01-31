<?php
    // Homepage
    session_start();
    $pageTitle = 'Home Page';
    include 'init.php';
?>

<!DOCTYPE html >
<html dir="rtl" lang="ar">
<head typeof="og:website">

<!-- Simple Page Needs
================================================== -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>الياسمين</title>
    <meta name="description" content="هذا الموقع لبيع اشجار الزينه اكمل ..................."/>
    
    <meta name="keywords" contaent="أشجار الزينة والظل, الاشجار والنباتات البرية,
     الخضروات والفواكه,
      الزهور, مستلزمات زراعية, أداة ري بالتنقيط, اصيص, بذور اكاسيا,بذور 
     التابوبيا الوردية 
     البيضاء, شجرة التيكوما ستانس, البختري, اللوبيا العدسية"/>
     <meta property="fb:app_id" content="">
     <meta property="og:type" content="website">
     <meta property="og:title" content="الياسمين">     
     <meta property="og:url" content="https://www.treed.cloud/ar/الياسمين">
     <meta property="og:image" content="https://www.treed.cloud/image/cache/catalog/0logo/IMG-20181215-WA0041-600x315h.jpg">
     <meta property="og:image:width" content="600">
     <meta property="og:image:height" content="315">
     <meta property="og:description" content="الياسمين : نسعي لنشر ثقافة انبات وزراعة البذور بكافة انواعها
وطرق انباتها
وكذلك معلومات قيمة عن الاشجار القابلة للزراعة بمناطقنا المختلفة
لذلك نسعى جاهدين لتوفير كافة انواع البذور البرية وبذور نباتات الظل وكذلك بذور الخضروات والفواكه وبذور الزهور بكافة انواعها">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="الياسمين ">
<meta name="twitter:image" content="https://treed.cloud/image/cache/catalog/0logo/IMG-20181215-WA0041-200x200h.jpg">
<meta name="twitter:image:width" content="200">
<meta name="twitter:image:height" content="200">
<meta name="twitter:description" content="الياسمين : نسعي لنشر ثقافة انبات وزراعة البذور بكافة انواعها
وطرق انباتها
وكذلك معلومات قيمة عن الاشجار القابلة للزراعة بمناطقنا المختلفة
لذلك نسعى جاهدين لتوفير كافة انواع البذور
 البرية وبذور نباتات الظل وكذلك بذور الخضروات والفواكه وبذور الزهور بكافة انواعها">

<!-- Favicon
================================================== -->  
<link rel="shortcut icon" href="greenmainpage/mpics5/favicon/icons8-palm-tree-96.png" type="image/x-icon">
<!--<link rel="shortcut icon" href="pics5/favicon/icons8-willow-100.png" type="image/x-icon">-->

<!-- CSS
================================================== -->
    <link rel="stylesheet" href="greenmainpage/mcss5/bootstrap.css" />
    <link rel="stylesheet" href="greenmainpage/mcss5/normalize.css" />
    <link rel="stylesheet" href="greenmainpage/mcss5/owl.carousel.min.css"/>
    <link rel="stylesheet" href="greenmainpage/mcss5/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="greenmainpage/mcss5/iconbarvertical.css"/>
    <link rel="stylesheet" href="greenmainpage/mcss5/scrollbutton.css"/>
    <link rel="stylesheet" href="greenmainpage/mcss5/head.css"/>
    <link rel="stylesheet" href="greenmainpage/mcss5/filterelement.css"/>
    <link rel="stylesheet" href="greenmainpage/mcss5/main.css"/>


<!-- Google Web fonts
================================================== --> 
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">

<!-- Font Icons
================================================== -->
<link rel="stylesheet" href="greenmainpage/mcss5/font-awesome.min.css"/>
<!-- ( if browther less then "lt" iE 9-->
        <!--
        <script src="js5/html5shiv.min.js"></script>-->
        <!-- end if-->

</head>
<body>
  <!-- start button for media when reduce size-->
  <button onclick="topFunction()" id="myBtn" title="Go to top">
    <i class="fa fa-arrow-up" aria-hidden="true"></i>
  </button>
  <!-- end button-->

         <!--start header-->
    <header>
          <!-- start penci title -->
    <div class="penci-top-bar topbar-menu topbar-fullwidth">
      <div class="container">
        <div class="penci-headline" role="navigation" itemscope="" itemtype="https://schema.org/SiteNavigationElement">
          <ul id="menu-top-bar-menu" class="penci-topbar-menu">
                    <li id="menu-item-3672" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3672">
                      <a href="index.html">الرئيسية</a>
                    </li>
                    <li id="menu-item-3672" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3672">
                        <a href="aboutus/about.html">من نحن</a>
                    </li>
                    <li id="menu-item-3673" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3673">
                        <a href="#">تواصل معنا</a>
                    </li>
                </ul>									
              <div class="penci-topbar-social">
                <div class="inner-header-social">
                          <a href="#" rel="nofollow" target="_blank"><i class="penci-faicon fa fa-facebook"></i></a>
                          <a href="#" rel="nofollow" target="_blank"><i class="penci-faicon fa fa-twitter"></i></a>
                          <a href="#" rel="nofollow" target="_blank"><i class="penci-faicon fa fa-whatsapp"></i></a>
                          <a href="#" rel="nofollow" target="_blank"><i class="penci-faicon fa fa-envelope"></i></a>
                </div>		
              </div>
        </div>
      </div>
    </div>
    <!-- end pencil title-->
        <div class="header-output inner-header penci-header-second">
          <div class="container header-in padding-tb-15px">
            <div class="position-relative">
              <div class="row">
                <div class="col-lg-3 col-md-12 logo"> 
                  <a id="logo" href="index.html" class="d-inline-block margin-tb-8px">
                    <img src="greenmainpage/mpics5/discribtion pics/logo.png" alt="الياسمين" class="lazyloaded" data-ll-status="loaded">
                    <noscript>
                      <img src="greenmainpage/mpics5/discribtion pics/logo.png" alt="الياسمين">
                    </noscript>
                  </a> 
                  <a class="mobile-toggle padding-15px background-second-color border-radius-3" href="#">
                    <i class="fa fa-bars">
                    </i>
                  </a>
                </div>
                <div class="col-lg-9 col-md-12 display-none d-lg-block position-inherit searchform">
                  <div class="searchform-wrapper">
                    <form role="search" method="get" action="https://www.nabataty.com/plants">
                      <input type="search" placeholder="بحث عن:" value="" name="s" autocomplete="off"> 
                      <button type="submit" value="بحث"><i class="penci-faicon fa fa-search"></i></button>
                    </form>
                  </div>
                      <a href="https://www.nabataty.com/store/" class="store-cart">
                    <span>سلة المشتريات </span>
                    <img src="https://www.nabataty.com/plants/wp-content/themes/soledad-child/images/cart.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      <!--
            <div class="header-output">
              <div class="container header-in padding-tb-15px">
                <div class="position-relative">
                  <div class="row">
                    <div class="col-lg-3 col-md-12"> 
                      <a id="logo" href="index.html" class="d-inline-block margin-tb-8px">
                        <img src="http://nabatcoegy.com/wp-content/uploads/2020/01/logo.png" alt="الياسمين" class="lazyloaded" data-ll-status="loaded">
                        <noscript>
                          <img src="http://nabatcoegy.com/wp-content/uploads/2020/01/logo.png" alt="الياسمين">
                        </noscript>
                      </a> 
                      <a class="mobile-toggle padding-15px background-second-color border-radius-3" href="#">
                        <i class="fa fa-bars">
                        </i>
                      </a>
                    </div>
                    <div class="col-lg-9 col-md-12 display-none d-lg-block position-inherit">
                      <div class="contact-info-out">
                        <div class="contact-info opacity-9">
                          <div class="icon-1 margin-top-5px">
                            <span class="icon_pin_alt text-second-color">
                              <i class="fa fa-map-marker fp" aria-hidden="true"></i>
                            </span>
                          </div>
                          <div class="text">
                            <span class="title-in">العنوان :</span>
                              <br>
                              <span class="font-weight-700 text-uppercase text-main-color">   القناطر الخيرية - القليوبية</span>
                              </div>
                            </div>
                            <div class="contact-info opacity-9">
                              <div class="icon-2 margin-top-5px">
                                <span class="icon_mail_alt text-second-color">
                                  <i class="fa fa-envelope-o fp" aria-hidden="true"></i>
                                </span>
                              </div>
                              <div class="text"> 
                                <span class="title-in">البريد الالكترونى:</span> 
                                <br> 
                                <span class="font-weight-700 text-main-color">ahmedelbably06@gmail.com</span>
                              </div>
                            </div>
                            <div class="contact-info opacity-9">
                              <div class="icon-3 margin-top-5px">
                                <span class="icon_phone text-second-color">
                                  <i class="fa fa-phone fp" aria-hidden="true"></i>
                                </span>
                              </div>
                              <div class="text">
                                <span class="title-in">المبيعات :</span> 
                                <br> 
                              <span class="font-weight-700 text-uppercase text-main-color"> 01002888661</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              -->
           <!-- start nav Section
          
      ================================================== --> 
    

      <nav class="navbar navbar-expand-lg navbar-light bg-light text-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i>

          </span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="index.html"><i class="fa fa-home" aria-hidden="true"></i>
                الرئيسية
              </a>
              </li>


            <?php

              // Get All Categories From DB
              $categories = getCats();

              foreach($categories as $cat){
                  echo '<li class="nav-item">';
                  echo '<a target="_blank" class="nav-link py-3" href="plant/plant.php?pageid='.$cat['ID'].'&pagename='.$cat['Name'].'">'.$cat['Name'].'</a>';
                  echo '</li>';
              }
            ?>
           
            <!--
            <li class="nav-item">
              <a class="nav-link"  href="ideas/ideas.html">أفكار وتوجيهات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="problemandsolve/problemandsolve.html">مشاكل وحلول</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link"  href="#">دراسات الجدوى  </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="aboutus/about.html">من نحن</a>
            </li>
-->

            <li class="nav-item">
              <a class="nav-link"  href="aboutus/contactus.html">تواصل معانا</a>
            </li>
            <!--<li class="nav-item ">
              <a class="nav-link "  href="https://web.whatsapp.com/" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i> 01002888661  
              </a>
            </li>-->
          </ul>
        </div>
      </nav>
      <!-- end nav Section
    ================================================== -->
  </header>
 <!--wrapper-->
 <div class="container-fluid">
  <!-- start vertical icon-->
  <div class="ic-bar">
    <a href="index.html" title="الرئيسية"><i class="fa fa-home"></i></a> 
    <a href="#"><i class="fa fa-map-o" aria-hidden="true"></i></a> 
    <a href="#"><i class="fa fa-envelope"></i></a> 
    <a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a> 
  </div>
    <!-- end vertical icon-->
    <!-- start contant -->
        <div class="sliding" >
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="greenmainpage/mpics5/slider/s0004-1200x450.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="greenmainpage/mpics5/slider/web panner1-01-1200x450h.png" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
        </div>
      <div class="parts" >
        <h3>جميع اقسام المتجر </h3>
      </div>
      <div class="card-deck">
        <?php
              foreach($categories as $cat){

                
              $stmt2 = $conn->prepare("SELECT * FROM items WHERE Cat_Id = ? LIMIT 1");
              $stmt2->execute(array($cat['ID']));
              $item1 = $stmt2->fetch();
              
              
        ?>

        <div class="card col-2 p-0">
          <a  href="<?php echo 'plant/plant.php?pageid='. $cat['ID'] . '&pagename='.$cat['Name']; ?> ">
          <?php
            if($item1){
          ?>
              <img class="card-img-top" src=<?php echo './' . $item1['Image'];?> alt="Card image cap">
          <?php }
            else{
          ?>

            <img class="card-img-top" src="./plant/ppics5/slider/s0004-1200x450.jpg" alt="Card image cap">

          <?php } ?>

        </a>
          <a href="tree/tree.html" class="btn btn-primary"><?php echo $cat['Name'];?></a>
        </div>

        <?php } ?>
        
        </div>
        <!-- start product-->
            <?php
              // Select First Category
                                            
              $stmt2 = $conn->prepare("SELECT * FROM items WHERE Cat_Id = ? LIMIT 4");
              $stmt2->execute(array($categories[0]['ID']));
              $items = $stmt2->fetchAll();
                      
            ?>
        <div class="star-product">
          <h2>المنتجات</h2>
          <h2 class='text-right mr-5'><?php echo $categories[0]['Name']; ?></h2>
          <div class="cont-2">
          
                  <?php
                  
                  foreach($items as $item){
                  
                  ?>
            <div class="filterDiv spacial-offer card">
              <a class="aimg" href="#" >
                <img src="<?php echo $item['Image']; ?>" class="card-img-top cimg" alt="...">
              </a>          
              <div class="card-body">
                <h5><?php echo $item['Name'];?></h5>
                <p class="card-text">
                  <?php
                    echo $item['Description'];
                  ?>
                </p>
                <div class='font-weight-bold h5'>
                  <span><?php echo $item['Price']; ?></span>
                </div>
                <div class='d-flex align-items-center'>
                  <span class='font-weight-bold h6'>العدد</span> : <input type='number' name='quantity' class='form-control mr-3' value="0" style="width: 70px"/>
                </div>
                <div class='mt-3 d-flex justify-content-between align-items-center'>
                    <button class='btn btn-success'> إضافة للسلة <i class="fa fa-cart-plus mr-1" aria-hidden="true"></i></button>
                    <span>النوع : <?php  
                    if($item['type'] == 0){
                      echo "صغير";
                    }

                    if($item['type'] == 1){
                      echo "متوسط";
                    }

                    if($item['type'] == 2){
                      echo "كبير";
                    }

                  ?></span>
                </div>
              </div>
              <!--
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
                  -->
            </div>
                    <?php } ?>

          </div>
        </div>



         <!-- end contant --> 

     <!-- start testmonial-->
     <div class="text-center about-us">
        <div class="container"> 
          <h1>توصيل مجاني</h1>
          <h3>للطلبات بـ ١٩٩ ريال واكثر</h3>
          <h6>يسري العرض في مدينة الرياض</h6>
        </div>
    </div>
  </div>

  <?php
              // Select Second Category
                                            
              $stmt2 = $conn->prepare("SELECT * FROM items WHERE Cat_Id = ? LIMIT 4");
              $stmt2->execute(array($categories[1]['ID']));
              $items = $stmt2->fetchAll();
                      
            ?>
        <div class="star-product">
          <h2>المنتجات</h2>
          <h2 class='text-right mr-5'><?php echo $categories[1]['Name']; ?></h2>
          <div class="cont-2">
          
                  <?php
                  
                  foreach($items as $item){
                  
                  ?>
            <div class="filterDiv spacial-offer card">
              <a class="aimg" href="#" >
                <img src="<?php echo $item['Image']; ?>" class="card-img-top cimg" alt="...">
              </a>          
              <div class="card-body">
                <h5><?php echo $item['Name'];?></h5>
                <p class="card-text">
                  <?php
                    echo $item['Description'];
                  ?>
                </p>
                <div class='font-weight-bold h5'>
                  <span><?php echo $item['Price']; ?></span>
                </div>
                <div class='d-flex align-items-center'>
                  <span class='font-weight-bold h6'>العدد</span> : <input type='number' name='quantity' class='form-control mr-3' value="0" style="width: 70px"/>
                </div>
                <div class='mt-3 d-flex justify-content-between align-items-center'>
                    <button class='btn btn-success'> إضافة للسلة <i class="fa fa-cart-plus mr-1" aria-hidden="true"></i></button>
                    <span>النوع : <?php  
                    if($item['type'] == 0){
                      echo "صغير";
                    }

                    if($item['type'] == 1){
                      echo "متوسط";
                    }

                    if($item['type'] == 2){
                      echo "كبير";
                    }

                  ?></span>
                </div>
              </div>
              <!--
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
                  -->
            </div>
                    <?php } ?>

          </div>
        </div>

        <div class="about-us">
          <div class="container"> 
            <div class='row'>
              
              <div class='w-50 text-right'>
                <img style="height: 500px" src="https://nabataty.com/store/wp-content/uploads/2021/12/3390-B-800x800.jpg"/>
              </div>
              <div class='w-50 text-right pr-5'>
                <h1 class='border-bottom border-success pb-2'>زين مكتبك الأن</h1>
                <h5>زينة المكتب طبيعة للشعور بالراحة والأمان</h5>
                <button class='btn btn-success rounded-pill px-4 py-2 mt-4 font-weight-bold'>تواصل معنا</button>
              </div>

            </div>
          </div>
        </div>
        <!-- end testmonial-->
   <!-- start owal carsoul-->
   <div class="container-fluid">
        <div class="owl-carousel owl-theme">
              <div ><a href="#" target="_blank">
                <button type="button" class="btn btn-owal" style="width:100%;">اكاسيا ساليجنا</button>
                <img src="owlpics/اكاسيا ساليجنا3.jpg" title="اكاسيا ساليجنا"/> 
              </a>
            </div>
            <div ><a href="#" target="_blank">
              <button type="button" class="btn btn-owal" style="width:100%;">نخيل واشنطوني</button>
              <img src="owlpics/نخيل واشنطوني.jpg" title="نخيل واشنطوني "/> 
            </a>
            </div>
            <div ><a href="#" target="_blank">
              <button type="button" class="btn btn-owal" style="width:100%;">زراعة الخص المائى</button>
              <img src="owlpics/17.jpg" title=" زراعةالخص المائى"/> 
            </a>
            </div>
            <div ><a href="#" target="_blank">
              <button type="button" class="btn btn-owal" style="width:100%;">زراعة الطماطم المائى</button>
              <img src="owlpics/35.jpg" title="زراعةالطماطم المائى "/> 
            </a>
            </div>
            <div ><a href="#" target="_blank">
              <button type="button" class="btn btn-owal" style="width:100%;">كف مريم</button>
              <img src="owlpics/كف مريم.jpg" title=" كف مريم"/> 
            </a>
            </div>
            <div ><a href="#" target="_blank">
              <button type="button" class="btn btn-owal" style="width:100%;">البومباكس</button>
              <img src="owlpics/البومباكس.jpg" title=" البومباكس"/> 
            </a>
          </div>
          <div ><a href="#" target="_blank">
            <button type="button" class="btn btn-owal" style="width:100%;">شجر البرتقال</button>
            <img src="owlpics/شجر البرتقال.jpg" title=" شجر البرتقال"/> 
          </a>
          </div>
          <div ><a href="#" target="_blank">
            <button type="button" class="btn btn-owal" style="width:100%;">شجر الافوكادو</button>
            <img src="owlpics/شجر الافوكادو.jpg" title=" شجر الافوكادو"/> 
          </a>
          </div>
          <div ><a href="#" target="_blank">
            <button type="button" class="btn btn-owal" style="width:100%;">نخيل روبليني</button>
            <img src="owlpics/نخيل روبليني3.jpg" title=" نخيل روبليني"/> 
          </a>
          </div>
          <div ><a href="#" target="_blank">
            <button type="button" class="btn btn-owal" style="width:100%;">زراعة الخيار المائى</button>
            <img src="owlpics/29.jpg" title=" زراعةالخيارالمائى"/> 
          </a>
          </div>
          <div ><a href="#" target="_blank">
            <button type="button" class="btn btn-owal" style="width:100%;">زراعة الفراوله المائى</button>
            <img src="owlpics/31.jpg" title="زراعةالفراوله المائى "/> 
          </a>
        </div>
        <div ><a href="#" target="_blank">
          <button type="button" class="btn btn-owal" style="width:100%;">الثويا</button>
          <img src="owlpics/الثويا.jpg" title=" الثويا"/> 
        </a>
        </div>
        <div ><a href="#" target="_blank">
          <button type="button" class="btn btn-owal" style="width:100%;">البابايا التايلندية</button>
          <img src="owlpics/البابايا التايلندية8.jpg" title=" البابايا التايلندية"/> 
        </a>
        </div>
        <div ><a href="#" target="_blank">
          <button type="button" class="btn btn-owal" style="width:100%;">التيكوما</button>
          <img src="owlpics/التيكوما 3.jpg" title=" التيكوما"/> 
        </a>
        </div>
        <div ><a href="#" target="_blank">
          <button type="button" class="btn btn-owal" style="width:100%;">شجر البكان</button>
          <img src="owlpics/شجر البكان.jpg" title=" شجر البكان"/> 
        </a>
        </div>
        <div ><a href="#" target="_blank">
          <button type="button" class="btn btn-owal" style="width:100%;">الزنزلخت</button>
          <img src="owlpics/الزنزلخت4.jpg" title=" الزنزلخت"/> 
        </a>
        </div>
        <div ><a href="#" target="_blank">
          <button type="button" class="btn btn-owal" style="width:100%;">شجر المانجو</button>
          <img src="owlpics/شجر المانجو.jpg" title=" "/> 
        </a>
        </div>
        <div ><a href="#" target="_blank">
          <button type="button" class="btn btn-owal" style="width:100%;">الجاكرندا</button>
          <img src="owlpics/شجرة الجاكرندا7.jpg" title=" الجاكرندا"/> 
        </a>
        </div>
        <div ><a href="#" target="_blank">
          <button type="button" class="btn btn-owal" style="width:100%;">هبسكس</button>
          <img src="owlpics/شجره هبسكس2.jpg" title=" هبسكس"/> 
        </a>
        </div>
        <div ><a href="#" target="_blank">
          <button type="button" class="btn btn-owal" style="width:100%;">فيكس</button>
          <img src="owlpics/فيكس3.jpg" title=" فيكس"/> 
        </a>
        </div>
        </div>
    </div>
  <!-- end owal carsoul-->

    <!-- start footer --> 
    <footer>
      <div class="icon fixed">
        <ul>
            <li><i class="fa fa-whatsapp" aria-hidden="true"></i></li>
            <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
            <li><i class="fa fa-youtube" aria-hidden="true"></i></li>
            <li><i class="fa fa-twitter-square" aria-hidden="true"></i></li>
            <li><i class="fa fa-facebook-official" aria-hidden="true"></i></li>
  
        </ul>
    </div>
    <div class="sections">
      <div class="info-style">
        <div class="information">
          <h4>خدماتنا</h4>
          <div class="title-divider"></div>
          <ul>
            <li><a href="landscape/landscape.html"> صيانه و تصميم وتنسيق الحدائق</a></li>
            <li><a href="tree/tree.html"> توريد وزراعه نباتات الزينه</a></li>
            <li><a href="fruits/fruits.html"> إنشاء مزارع الفاكهة والخضروات</a></li>
            <li><a href="waterplant/waterplant.html"> الزراعة المائية</a></li>
          </ul>
        </div>
        <div class="information">
          <h4>معلومات</h4>
          <div class="title-divider"></div>

          <ul>
            <li><a href="aboutus/about.html">من نحن</a></li>
            <li><a href="footer pages/delevery.html">التوصيل</a></li>
            <li><a href="footer pages/polatics.html">سياسة الخصوصية</a></li>
            <li><a href="footer pages/rules.html">الشروط والأحكام</a></li>
          </ul>
        </div>
      </div>
      <div class="contact-form">
        <div class="section-title">
            <h4>تواصل معنا</h>
              <div class="title-divider"></div>
        </div>
        <form class="site-form">
            <div class="con">
                <div>
                    <input type='text' class="site-input" placeholder="الإسم" title="Name">
                </div>
                <div>
                    <input type='text' class="site-input" placeholder="التليفون" title="Phone">
                </div>
                <div>
                  <input type='text' class="site-input" placeholder="الدولة" title="Country">
              </div>
                <div>
                    <input type='email' class="site-input" placeholder="الإميل" title="E-mail" required>
                </div>
            </div>
            <div>
              <textarea class="site-area" placeholder="رسالة" title="Text-area"></textarea>
          </div>
          <div class="bu">
              <button class="site-btn" type="submit">إرسال</button>
          </div>
        </form>  
    </div>
    </div>
    <div class="made-by">
      حقوق الطبع والنشر © 2020 ،<a href="index.html" alt="..."> الياسمين <i class="fa fa-pagelines" aria-hidden="true"></i>
      </a>،  جميع الحقوق محفوظة
    </div>
    </footer>
    <!-- end footer --> 
</div>
   <!-- Javascripts
================================================== -->  
  <script src="greenmainpage/mjs5/jquery-3.5.1.min.js"></script> 
  <script src="greenmainpage/mjs5/jquery.easytabs.min.js"></script>
  <script src="greenmainpage/mjs5/owl.carousel.min.js"></script> 
  <script src="greenmainpage/mjs5/popper.min.js"></script>
  <script src="greenmainpage/mjs5/bootstrap.min.js"></script> 
  <script src="greenmainpage/mjs5/scrollbutton.js"></script>
  <script src="greenmainpage/mjs5/filterelement.js"></script> 
  <script src="greenmainpage/mjs5/mainjs5.js"></script>

  <!-- for color alternatives -->
  <script src="mjs/jquery.cookie-1.4.1.min.js"></script>
  <script src="mjs/Demo.js"></script>
  <link rel="stylesheet" href="m/Demo.min.css" />

</body>
</html>