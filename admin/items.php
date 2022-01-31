<?php
    session_start();
    $pageTitle = 'Manage Items';

    // If Session Exist Include [init.php] To Allow Navbar And If I Enter To Dashboard Without Login Or Without Start The Session It Will Direct Me To Login Page
    if(isset($_SESSION['userName'])){
        include 'init.php';

        $do = isset($_GET['do'])?$_GET['do']:'Manage';

        if($do == 'Manage'){

            // For Check For Approved Item
            $query = '';
            // Check If I Request Data Of Pending Members
            if(isset($_GET['pending']) && $_GET['pending']== 'pend'){
                $query = 'AND Approved = 0';
            }

            // Inner Join For Merge Table Columns
            $stmt = $conn->prepare("
            SELECT items.*,categories.Name as category_Name
            FROM items
            INNER JOIN categories ON categories.ID = items.Cat_Id
            ");
            $stmt->execute();
            $items = $stmt->fetchAll();

        ?>

<div class="container">
<h1 class="text-right mt-5 mr-0">إدارة المنتجات</h1>
    <?php
        if($items){ ?>
<div class="table-responsive mt-4">
        <table class="table members-table shadow-sm" style="direction:rtl">
            <thead class="thead-dark">
                <tr>
                    <th>الرقم</th>
                    <th>الإسم</th>
                    <th>الوصف</th>
                    <th>السعر</th>
                    <th>تاريخ الإضافة</th>
                    <th>القسم</th>
                    <th>النوع</th>
                    <th>التحكم</th>
                </tr>
            </thead>
            <tbody>
                <?php
                        foreach($items as $item){
                            echo '<tr>';
                                echo '<td>'. $item['item_Id'] .'</td>';
                                echo '<td>'. $item['Name'] .'</td>';

                                // If Item Description Length Greater Than 47 Characters Shrink It To 47 Character And Print It
                                // Else Put Item Description
                                if(strlen($item['Description']) > 30 ){
                                    echo '<td>'. substr($item['Description'] , 0 , 30)."...".'</td>';
                                }else{
                                    echo '<td>'. $item['Description'] .'</td>';
                                }

                                echo '<td>'. $item['Price'] .'</td>';
                                echo '<td>'. $item['Adding_Date'] .'</td>';
                                echo '<td>'. $item['category_Name'] .'</td>';
                                
                                
                                if($item['type'] == '0'){
                                    echo '<td>---</td>';
                                }
                                if($item['type'] == '1'){
                                    echo '<td>Small</td>';
                                }
                                if($item['type'] == '2'){
                                    echo '<td>Medium</td>';
                                }
                                if($item['type'] == '3'){
                                    echo '<td>Large</td>';
                                }

                            echo "<td>".
                                "<a href='items.php?do=Edit&item_Id=" .$item['item_Id'].
                                "'class='btn btn-primary ml-1'><i class='far fa-edit fa-sm'></i></a>".
                                "<a href='items.php?do=Delete&item_Id=" .$item['item_Id'].
                                "'class='btn btn-danger text-white'>
                                <i class='far fa-trash-alt fa-sm'></i></a>
                                ";
                            echo    '</td>';
                            echo '</tr>';
                        }
                        ?>

            </tbody>
        </table>
  


    <?php  }
    
    else{
        echo "<div class='alert alert-danger w-100 mx-auto my-4 shadow'>لايوجد منتجات لعرضها</div>";

    }
    ?>
        <a href="items.php?do=Add" class="btn btn-primary mt-4 mb-4 float-right">
            إضافة منتج جديد
            <i class="fa fa-plus ml-1"></i>
        </a>
        </div>
</div>
<?php }

        else if($do == 'Add'){
            ?>
    <h2 class="text-right m-5">إضافة منتج جديد</h2>
    <div class="container">
        <form class="edit-form text-right" action="?do=insert" method="POST" enctype="multipart/form-data" style="direction: rtl">
            <div class="form-group my-3">
                <label class="mt-1 p-0">إسم المنتج</label>
                <input type="text" name="Name" class="form-control" required='required' autocomplete='off'>
            </div>
            <div class="form-group my-3">
                <label class="mt-1 p-0">وصف المنتج</label>
                <input type="text" name="Description" class="form-control" required='required'>
            </div>
            <div class="form-group my-3">
                <label class="mt-1 p-0">سعر المنتج</label>
                <input type="text" name="Price" class="form-control" required='required'>
            </div>
            <div class="form-group my-3">
                <div class="row">
                    <div class="col-6">
                        <label class="mt-1 p-0">نوع المنتج</label>
                        <select name="Type" class="form-control " required='required'>
                            <option value="0">---</option>
                            <option value="1">صغير</option>
                            <option value="2">متوسط</option>
                            <option value="3">كبير</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label class="mt-1 p-0">القسم</label>
                        <select name="category" class="form-control " required='required'>
                            <option value="0">---</option>
                            <?php
                                // Get Categories Name
                                $stmt = $conn->prepare("SELECT * FROM categories");
                                $stmt->execute();
                                $cats = $stmt->fetchAll();
                                foreach($cats as $cat){
                                    echo "<option value=" .$cat['ID'].">".$cat['Name']."</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group my-3">
                <label class="mt-1 p-0">الصورة</label>
                <input type="file" name="img" style="height: auto" class="form-control" required='required'>
            </div>
            <button class="btn btn-primary mt-3 px-4"><i class="fa fa-plus ml-1"></i>إضافة</button>
        </form>
    </div>
    <?php
        }

        else if($do == 'insert'){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                echo '<h1 class="text-center mt-4">Add New Item</h1>';

                $Name = $_POST['Name'];
                $Desc = $_POST['Description'];
                $Price = $_POST['Price'];
                $Type = $_POST['Type'];
                $Cat = $_POST['category'];

                $iImage = rand(0,100000000000000) .'_'. $_FILES['img']['name'];

                move_uploaded_file($_FILES['img']['tmp_name'], "./image/".$iImage);
                $check = checkItems('Name', 'items' , $Name);


                // Validate Inserted User Data
                // Array For Store Errors And Display It
                $formErrors = Array();
                if(empty($Name)){
                    $formErrors[] = "Item Name Can't Be Empty";
                }
                if(empty($Desc)){
                    $formErrors[] = "Item Description Can't Be Empty";
                }
                if(empty($Price)){
                    $formErrors[] = "Item Price Can't Be Empty";
                }
                if(empty($Type)){
                    $formErrors[] = "Item Type Can't Be Empty";
                }
                if(empty($Cat)){
                    $formErrors[] = "Item Category Can't Be Empty";
                }


                // If There Aren't Errors Update The DB
                if(count($formErrors) > 0){
                    // Display All Errors For User
                    foreach($formErrors as $error){
                        echo "<div class='alert alert-danger w-75 mx-auto my-3 shadow'>".  $error ."</div>";
                    }
                }else{
                    // Update Data Depending On UserId
                    $stmt = $conn->prepare("
                        INSERT INTO items (Name,Description,Price,Adding_Date,Cat_Id,Image,type)
                        VALUES(? , ? , ? , now() ,? , ? , ?)
                    ");

                    // Excute Query
                    $stmt->execute(Array($Name,$Desc,$Price,$Cat,"admin/image/" . $iImage,$Type));

                    header('Location: items.php');
                }

        }else{
            redirectHome('You Can\'t Access This Page Directly',10);
        }

        header('Location: items.php');
        }
        else if($do == 'Edit'){

            // Check For Cat_Id That Want To Update The Data
            $itemId = isset($_GET['item_Id']) && is_numeric($_GET['item_Id'])?intval($_GET['item_Id']):0;

            // Select Data Depending On UserId
            $stmt = $conn->prepare("
                SELECT *
                FROM items
                WHERE item_Id=?
                "
            );
            // Excute Query
            $stmt->execute(Array($itemId));
            // Fetch Data
            $data = $stmt->fetch(); // Fetch Row Data As Array

            // Check If Row Exist
            if($stmt->rowCount() > 0){

            ?>
            <!-- If Row Exist Show The Form Of Update The Data -->
            <h1 class="text-right m-5">تعديل المنتج</h1>
            <div class="container">
                <form class="edit-form text-right" style="direction: rtl" action="?do=Update" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name='itemId' value="<?php echo $_GET['item_Id']; ?>">
                    <div class="form-group my-3">
                        <label class="mt-1 p-0 text-muted font-weight-bold">إسم المنتج</label>
                        <input type="text" name="itemName" class="form-control" autocomplete="off" value="<?php echo $data['Name'];?>">
                    </div>
                    <div class="form-group my-3">
                        <label class="mt-1 p-0 text-muted font-weight-bold">وصف المنتج</label>
                        <input type="text" name="itemDesc" class="form-control" autocomplete="new-password" value="<?php echo $data['Description'];?>">
                    </div>
                    <div class="form-group my-3">
                        <label class="mt-1 p-0 text-muted font-weight-bold">سعر المنتج</label>
                        <input type="text" name="itemPrice" class="form-control" value="<?php echo $data['Price'];?>">
                    </div>
                    <div class="form-group my-3">
                        <div class="row">
                            <div class="col-6">
                                <label class="mt-1 p-0 text-muted font-weight-bold">نوع المنتج</label>
                                <select name="Type" class="form-control " required='required'>
                                    <option value="0" <?php if($data['type'] == 0) echo 'selected';?>>---</option>
                                    <option value="1" <?php if($data['type'] == 1) echo 'selected';?>>صغير</option>
                                    <option value="2" <?php if($data['type'] == 2) echo 'selected';?>>متوسط</option>
                                    <option value="3" <?php if($data['type'] == 3) echo 'selected';?>>كبير</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="mt-1 p-0 text-muted font-weight-bold">القسم</label>
                                <select name="category" class="form-control " required='required'>
                                    <option value="0">---</option>
                                    <?php
                                        // Get Categories Name
                                        $stmt = $conn->prepare("SELECT * FROM categories");
                                        $stmt->execute();
                                        $cats = $stmt->fetchAll();
                                        foreach($cats as $cat){
                                            echo "<option value='" .$cat['ID']."'";
                                            if($data['Cat_Id'] == $cat['ID']) echo 'selected';
                                            echo ">" . $cat['Name'] ."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="form-group my-3">
                                    <label class="mt-1 p-0 text-muted font-weight-bold">الصورة</label>
                                    <input type="file" name="img" style="height: auto" class="form-control">
                                    <input type="hidden" name="img_not_found" value=<?php echo $data['Image']; ?> >
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3 px-4"><i class="far fa-save fa-lg ml-2"></i>حفظ</button>
                </form>
            </div>
            <?php }


                        else{

                             redirectHome('Page Not Founded',5);
            ?>

            <?php }
        }
        else if($do == 'Update'){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                echo '<h1 class="text-center my-4">Update Category</h1>';
                $id = $_POST['itemId'];
                $Name = $_POST['itemName'];
                $Desc = $_POST['itemDesc'];
                $Price = $_POST['itemPrice'];
                $Type = $_POST['Type'];
                $category = $_POST['category'];
                $iImage = '';

// Validate Updated Item Data
                // Array For Store Errors And Display It
                $formErrors = Array();
                if(empty($Name)){
                    // Append Message To Array
                    $formErrors[] = "Item Name Can't Be Empty";
                }
                if(empty($Desc)){
                    // Append Message To Array
                    $formErrors[] = "Item Description Can't Be Empty";
                }
                if(empty($Price)){
                    // Append Message To Array
                    $formErrors[] = "Item Price Can't Be Empty";
                }
                if(empty($Type)){
                    // Append Message To Array
                    $formErrors[] = "Item Type Can't Be Empty";
                }
                if(empty($category)){
                    // Append Message To Array
                    $formErrors[] = "Item Category Can't Be Empty";
                }


                // If There Aren't Errors Update The DB
                if(count($formErrors) > 0){
                    // Display All Errors For User
                    foreach($formErrors as $error){
                        echo "<div class='alert alert-danger w-75 mx-auto my-3 shadow'>".  $error ."</div>";
                    }
                }


                if($_FILES['img']['name']){
                    $iImage = rand(0,100000000000000) .'_'. $_FILES['img']['name'];

                    move_uploaded_file($_FILES['img']['tmp_name'], "./image/".$iImage);
                    
                    // Update Data Depending On UserId
                    $stmt = $conn->prepare("
                        UPDATE items
                        SET Name=?,
                            Description=?,
                            Price=?,
                            Image=?,
                            Cat_Id=?,
                            type=?

                        WHERE item_Id=?
                        "
                    );
                    // Excute Query
                    $stmt->execute(Array($Name,$Desc,$Price,"admin/image/" . $iImage,$category,$Type,$id));
                    
                    /* For Delete Old Image */
                        // Delete Item Image From Folder When Deleted From DB
                        unlink("./" . str_replace('admin' , '' , $_POST['img_not_found']));
                    
                    /* For Delete Old Image */


                    header('Location: items.php');
                }
                else{
                    $img = $_POST['img_not_found'];

                            // Update Data Depending On UserId
                            $stmt = $conn->prepare("
                                UPDATE items
                                SET Name=?,
                                    Description=?,
                                    Price=?,
                                    Cat_Id=?,
                                    type=?
        
                                WHERE item_Id=?
                                "
                            );
                        // Excute Query
                        $stmt->execute(Array($Name,$Desc,$Price,$category,$Type,$id));
                        header('Location: items.php');
                }
            }
        }

        else if($do == 'Delete'){
            echo '<h1 class="text-center mt-4">Delete Item</h1>';
            // Check For category id That Want To Update The Data
            $itemId = isset($_GET['item_Id']) && is_numeric($_GET['item_Id'])?intval($_GET['item_Id']):0;

            // Check If Item Id Is Exist In DB Or Not
            $check = checkItems('item_Id','items',$itemId);

            if($check > 0){

                $stmtDelImg = $conn->prepare("
                    SELECT Image
                    FROM items
                    WHERE item_Id=?
                    LIMIT 1"
                );


                // Excute Query
                $stmtDelImg->execute(Array($itemId));

              
                $items = $stmtDelImg->fetchAll();
                
                // Delete Item Image From Folder When Deleted From DB
                unlink("./" . str_replace('admin' , '' , $items[0]['Image']));
              
                // Select Data Depending On Item Id
                $stmt = $conn->prepare("
                    DELETE
                    FROM items
                    WHERE item_Id=?
                    LIMIT 1"
                );


                // Excute Query
                $stmt->execute(Array($itemId));

                header('Location: items.php');
                }else{
                    redirectHome('Item Not Founded' , 10);
                }
            }
        //include $tmp . 'footer.php';

    }else{
        header('Location: index.php');
        exit();
    }
