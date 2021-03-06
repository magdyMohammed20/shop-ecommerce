<?php
    include '../init.php';
      //echo $_GET['pagename'];
    //echo $_GET['pageid'];

    $stmt = $conn->prepare("SELECT * FROM items WHERE Cat_Id = ?");
    $stmt->execute(array($_GET['pageid']));
    $items = $stmt->fetchAll();

?>

<!DOCTYPE html >
<html dir="rtl" lang="ar">
<head typeof="og:website">

<!-- Simple Page Needs
================================================== -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>أشجار الزينة الداخلية</title>    
    <meta name="description" content="أشجار الزينة والظل كاتلبا بولونيا توليب خزامى افريقية تيكوما سدر شجرة الأثل الأمريكي 
    الكين الخروع الجاكرندا التبلدي الباوباب 
    اكاسيا السنط  المورينجا اللوكينا الدفلة ">
    <meta name="keywords" content="أشجار الزينة والظل، بذور نباتات برية ، بذور أشجار زينة ، بذرة">
     <meta property="fb:app_id" content="">
     <meta property="og:type" content="website">
     <meta property="og:title" content="أشجار الزينة الداخلية">
     <meta property="og:url" content="https://www.bthrah.com/ar/أشجار-الزينة-والظل">
     <meta property="og:image" content="https://www.bthrah.com/image/cache/catalog/001/B002-600x315w.jpg">
     <meta property="og:image:width" content="600">
     <meta property="og:image:height" content="315">
     <meta property="og:description" content="الياسمين : نسعي لنشر ثقافة انبات وزراعة البذور بكافة انواعها
وطرق انباتها
وكذلك معلومات قيمة عن الاشجار القابلة للزراعة بمناطقنا المختلفة
لذلك نسعى جاهدين لتوفير كافة انواع البذور البرية وبذور نباتات الظل وكذلك بذور الخضروات والفواكه وبذور الزهور بكافة انواعها">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="أشجار الزينة الداخلية">
<meta name="twitter:image" content="https://www.bthrah.com/image/cache/catalog/001/B002-200x200w.jpg"><meta name="twitter:image:width" content="200">
<meta name="twitter:image:height" content="200">
<meta name="twitter:description" content="الياسمين : نسعي لنشر ثقافة انبات وزراعة البذور بكافة انواعها
وطرق انباتها
وكذلك معلومات قيمة عن الاشجار القابلة للزراعة بمناطقنا المختلفة
لذلك نسعى جاهدين لتوفير كافة انواع البذور
 البرية وبذور نباتات الظل وكذلك بذور الخضروات والفواكه وبذور الزهور بكافة انواعها">

<!-- Favicon
================================================== -->  
<link rel="shortcut icon" href="tpics5/favicon/icons8-palm-tree-96.png" type="image/x-icon">
<!--<link rel="shortcut icon" href="pics5/favicon/icons8-willow-100.png" type="image/x-icon">-->

<!-- CSS
================================================== -->
    <link rel="stylesheet" href="pcss5/bootstrap.css" />
    <link rel="stylesheet" href="pcss5/normalize.css" />
    <link rel="stylesheet" href="pcss5/owl.theme.default.css"/> 
    <link rel="stylesheet" href="pcss5/owl.carousel.css"/>
    <link rel="stylesheet" href="pcss5/iconbarvertical.css"/>
    <link rel="stylesheet" href="pcss5/scrollbutton.css"/>
    <link rel="stylesheet" href="pcss5/head.css"/>
    <link rel="stylesheet" href="pcss5/tfilterelement.css"/>
    <link rel="stylesheet" href="pcss5/tmain5.css"/>

<!-- Google Web fonts
================================================== --> 
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">

<!-- Font Icons
================================================== -->
<link rel="stylesheet" href="pcss5/font-awesome.min.css"/>
<link rel="stylesheet" href="icon-fonts/medical/flaticon.css" />

<!-- ( if browther less then "lt" iE 9-->
        <!--
        <script src="js5/html5shiv.min.js"></script>-->
        <!-- end if-->

</head>
<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top">
    <i class="fa fa-arrow-up" aria-hidden="true"></i>
  </button>
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
                        <a href="../aboutus/about.html">من نحن</a>
                    </li>
                    <li id="menu-item-3673" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3673">
                        <a href="../aboutus/contactus.html">تواصل معنا</a>
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
                    <img src="../greenmainpage/mpics5/discribtion pics/logo.png" alt="الياسمين" class="lazyloaded" data-ll-status="loaded">
                    <noscript>
                      <img src="../greenmainpage/mpics5/discribtion pics/logo.png" alt="الياسمين">
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
              <a class="nav-link" href="../index.html"><i class="fa fa-home" aria-hidden="true"></i>
                الرئيسية
              </a>
              </li>
            <li class="nav-item">
              <a class="nav-link"  href="plant.html">أشجار الزينة الداخلية</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="../tree/tree.html"> أشجار الزينة الخارجية</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="../ideas/ideas.html">أفكار وتوجيهات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="../problemandsolve/problemandsolve.html">مشاكل وحلول</a>
            </li>
            <!--
            <li class="nav-item">
              <a class="nav-link"  href="#">دراسات الجدوى  </a>
            </li>-->
            <li class="nav-item">
              <a class="nav-link"  href="../aboutus/about.html">من نحن</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="../aboutus/contactus.html">تواصل معانا</a>
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
     <!-- start vertical icon-->
  <div class="ic-bar">
    <a href="../index.html" title="الرئيسية"><i class="fa fa-home"></i></a> 
    <a href="#"><i class="fa fa-map-o" aria-hidden="true"></i></a> 
    <a href="#"><i class="fa fa-envelope"></i></a> 
    <a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a> 
  </div>
    <!-- end vertical icon-->
  </header>
 <!--wrapper-->
 <div class="container-fluid">
       <!-- start contant -->
      <div class="head text-center">
        <h2><?php echo $_GET['pagename'];?></h2>
        <div class="title-divider"></div>
        <p class="notes">
          نباتات الزينة الخارجية من أشجار أو شجيرات صغيرة يمكنك استخدامها
           لتزيين حديقة منزلك أو مداخله وأسواره أو حتى استخدامها 
           كأسوار طبيعية وتزين الحدائق العامة والخاصة وايضا المكاتب  والشركات.</p> 
        </div>
     <div class="star-product">
       <div class="col-a1 col-2">
         <div class="content">
            <h3>الفهرس</h3>
            <ul>
              <?php
                foreach($items as $item){
              ?>      

              <li>
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <a href="#" target="_blank">
                  <?php echo $item['Name'];?>
                </a>
              </li>
              
              <?php } ?>
            </ul>
        </div>
       </div>
      <div class="col-a2 col-10">
    <div class="row">
        <?php
          foreach($items as $item){
           
        ?>

        <div class="filterDiv new-product card col-3 p-0">
            <div class="img-con">
              <img src=<?php echo '../' . $item['Image'];?> class="card-img-top cimg aimg" alt="...">
            </div>
             <div class="card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <?php } ?>


        <!--
        <div class="filterDiv new-product card">
          <a class="aimg" href="#" >
            <img src="tpics5/tree pics/B002-240x280h.jpg" class="card-img-top cimg " alt="...">
          </a>       
             <div class="card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="filterDiv new-product card">
          <a class="aimg" href="#" >
            <img src="tpics5/tree pics/B002-240x280h.jpg" class="card-img-top cimg " alt="...">
          </a>         
           <div class="card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>-->
        </div>
     <!--start pagination-->
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item"><a class="page-link" href="plant.html">1</a></li>
              <li class="page-item"><a class="page-link" href="plant2.html">2</a></li>
              <li class="page-item"><a class="page-link" href="plant3.html">3</a></li>
              <li class="page-item">
                <a class="page-link" href="plant2.html" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
      </div>
    <!--end pagination-->
     </div>
         <!-- end contant --> 
   
     
  <!-- start owal carsoul-->
  <div class="container-fluid">
    <div class="owl-carousel owl-theme">
          <div ><a href="#" target="_blank">
            <button type="button" class="btn btn-owal" style="width:100%;">اكاسيا ساليجنا</button>
            <img src="../owlpics/اكاسيا ساليجنا3.jpg" title="اكاسيا ساليجنا"/> 
          </a>
        </div>
        <div ><a href="#" target="_blank">
          <button type="button" class="btn btn-owal" style="width:100%;">نخيل واشنطوني</button>
          <img src="../owlpics/نخيل واشنطوني.jpg" title="نخيل واشنطوني "/> 
        </a>
        </div>
        <div ><a href="#" target="_blank">
          <button type="button" class="btn btn-owal" style="width:100%;">زراعة الخص المائى</button>
          <img src="../owlpics/17.jpg" title=" زراعةالخص المائى"/> 
        </a>
        </div>
        <div ><a href="#" target="_blank">
          <button type="button" class="btn btn-owal" style="width:100%;">زراعة الطماطم المائى</button>
          <img src="../owlpics/35.jpg" title="زراعةالطماطم المائى "/> 
        </a>
        </div>
        <div ><a href="#" target="_blank">
          <button type="button" class="btn btn-owal" style="width:100%;">كف مريم</button>
          <img src="../owlpics/كف مريم.jpg" title=" كف مريم"/> 
        </a>
        </div>
        <div ><a href="#" target="_blank">
          <button type="button" class="btn btn-owal" style="width:100%;">البومباكس</button>
          <img src="../owlpics/البومباكس.jpg" title=" البومباكس"/> 
        </a>
      </div>
      <div ><a href="#" target="_blank">
        <button type="button" class="btn btn-owal" style="width:100%;">شجر البرتقال</button>
        <img src="../owlpics/شجر البرتقال.jpg" title=" شجر البرتقال"/> 
      </a>
      </div>
      <div ><a href="#" target="_blank">
        <button type="button" class="btn btn-owal" style="width:100%;">شجر الافوكادو</button>
        <img src="../owlpics/شجر الافوكادو.jpg" title=" شجر الافوكادو"/> 
      </a>
      </div>
      <div ><a href="#" target="_blank">
        <button type="button" class="btn btn-owal" style="width:100%;">نخيل روبليني</button>
        <img src="../owlpics/نخيل روبليني3.jpg" title=" نخيل روبليني"/> 
      </a>
      </div>
      <div ><a href="#" target="_blank">
        <button type="button" class="btn btn-owal" style="width:100%;">زراعة الخيار المائى</button>
        <img src="../owlpics/29.jpg" title=" زراعةالخيارالمائى"/> 
      </a>
      </div>
      <div ><a href="#" target="_blank">
        <button type="button" class="btn btn-owal" style="width:100%;">زراعة الفراوله المائى</button>
        <img src="../owlpics/31.jpg" title="زراعةالفراوله المائى "/> 
      </a>
    </div>
    <div ><a href="#" target="_blank">
      <button type="button" class="btn btn-owal" style="width:100%;">الثويا</button>
      <img src="../owlpics/الثويا.jpg" title=" الثويا"/> 
    </a>
    </div>
    <div ><a href="#" target="_blank">
      <button type="button" class="btn btn-owal" style="width:100%;">البابايا التايلندية</button>
      <img src="../owlpics/البابايا التايلندية8.jpg" title=" البابايا التايلندية"/> 
    </a>
    </div>
    <div ><a href="#" target="_blank">
      <button type="button" class="btn btn-owal" style="width:100%;">التيكوما</button>
      <img src="../owlpics/التيكوما 3.jpg" title=" التيكوما"/> 
    </a>
    </div>
    <div ><a href="#" target="_blank">
      <button type="button" class="btn btn-owal" style="width:100%;">شجر البكان</button>
      <img src="../owlpics/شجر البكان.jpg" title=" شجر البكان"/> 
    </a>
    </div>
    <div ><a href="#" target="_blank">
      <button type="button" class="btn btn-owal" style="width:100%;">الزنزلخت</button>
      <img src="../owlpics/الزنزلخت4.jpg" title=" الزنزلخت"/> 
    </a>
    </div>
    <div ><a href="#" target="_blank">
      <button type="button" class="btn btn-owal" style="width:100%;">شجر المانجو</button>
      <img src="../owlpics/شجر المانجو.jpg" title=" "/> 
    </a>
    </div>
    <div ><a href="#" target="_blank">
      <button type="button" class="btn btn-owal" style="width:100%;">الجاكرندا</button>
      <img src="../owlpics/شجرة الجاكرندا7.jpg" title=" الجاكرندا"/> 
    </a>
    </div>
    <div ><a href="#" target="_blank">
      <button type="button" class="btn btn-owal" style="width:100%;">هبسكس</button>
      <img src="../owlpics/شجره هبسكس2.jpg" title=" هبسكس"/> 
    </a>
    </div>
    <div ><a href="#" target="_blank">
      <button type="button" class="btn btn-owal" style="width:100%;">فيكس</button>
      <img src="../owlpics/فيكس3.jpg" title=" فيكس"/> 
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
        <li><a href="../landscape/landscape.html"> صيانه و تصميم وتنسيق الحدائق</a></li>
        <li><a href="tree.html"> توريد وزراعه نباتات الزينه</a></li>
        <li><a href="../fruits/fruits.html"> إنشاء مزارع الفاكهة والخضروات</a></li>
        <li><a href="../waterplant/waterplant.html"> الزراعة المائية</a></li>

      </ul>
    </div>
    <div class="information">
      <h4>معلومات</h4>
      <div class="title-divider"></div>

      <ul>
        <li><a href="../aboutus/about.html">من نحن</a></li>
        <li><a href="../footer pages/delevery.html">التوصيل</a></li>
        <li><a href="../footer pages/polatics.html">سياسة الخصوصية</a></li>
        <li><a href="../footer pages/rules.html">الشروط والأحكام</a></li>
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
  حقوق الطبع والنشر © 2020 ،<a href="../index.html" alt="..."> الياسمين <i class="fa fa-pagelines" aria-hidden="true"></i>
  </a>،  جميع الحقوق محفوظة
</div>
</footer>
<!-- end footer --> 
</div>
   <!-- Javascripts
================================================== -->  
  <script src="pjs5/filterelement.js"></script>
  <script src="pjs5/jquery-3.5.1.min.js"></script> 
  <script src="pjs5/popper.min.js"></script>
  <script src="pjs5/bootstrap.min.js"></script> 
  <script src="pjs5/jquery.easytabs.min.js"></script>
  <script src="pjs5/owl.carousel.min.js"></script> 
  <script src="pjs5/scrollbutton.js"></script> 
  <script src="pjs5/tfilterelement.js"></script>
  <script src="pjs5/tmainjs5.js"></script>

  <!-- for color alternatives -->
  <script src="tjs/jquery.cookie-1.4.1.min.js"></script>
  <script src="tjs/Demo.js"></script>
  <link rel="stylesheet" href="css/Demo.min.css" />

</body>
</html>