<?php
    session_start();
    $pageTitle = 'Admin Dashboard';
     // If Session Exist Include [init.php] To Allow Navbar And If I Enter To Dashboard Without Login Or Without Start The Session It Will Direct Me To Login Page
    if(isset($_SESSION['userName'])){
        include 'init.php';

    // Get Latest 5 Registered Users In Array
    $latestUsers = getLatest('*','users',5,'user_Id');

    // Get Latest 5 Items In Array
    $latestItems = getLatest('*','items',5,'item_Id');


?>

<!-- Start Dashboard Content -->

<!-- Dashboard Statistics -->
<div class="container admin-stats py-4">
    <h1 class="text-right font-weight-bold mt-4">لوحة التحكم</h1>
    <div class="row mt-4">
        <div class="col-3 text-center p-3">
            <div class="p-4 rounded shadow-sm">
                <p class='mb-1'>الأقسام</p>
                <a href="categories.php" class="stretched-link text-decoration-none">
                    <span class='d-block'><?php echo getTotalRows('ID','categories'); ?></span>
                </a>
            </div>
        </div>
        <div class="col-3 text-center p-3">
            <div class="p-4 rounded shadow-sm">
                <p class='mb-1'>الزبائن</p>
                <a href="members.php" class="stretched-link">
                    <span class='d-block'><?php echo getTotalRows('user_Id','users')-1;?></span>
                </a>
            </div>
        </div>
        <div class="col-3 text-center p-3">
            <div class="p-4 rounded shadow-sm">
                <p class='mb-1'>الرسائل</p>
                <a href="messages.php" class="stretched-link text-decoration-none">
                    <span class='d-block'><?php echo getTotalRows('id','contact'); ?></span>
                </a>
            </div>
        </div>
        <div class="col-3 text-center p-3">
            <div class="p-4 rounded shadow-sm">
                <p class='mb-1'>المنتجات</p>
                <a href="items.php" class="stretched-link text-decoration-none">
                    <span class='d-block'><?php echo getTotalRows('item_Id','items'); ?></span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container admin-stats2">
    <div class="row">

    </div>
</div>
<!-- End Dashboard Content -->
<?php
        include $tmp . 'footer.php';
    }else{
        header('Location: index.php');
    }

?>
