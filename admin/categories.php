<?php
    session_start();
    $pageTitle = 'Manage Categories';
     // If Session Exist Include [init.php] To Allow Navbar And If I Enter To Dashboard Without Login Or Without Start The Session It Will Direct Me To Login Page
    if(isset($_SESSION['userName'])){
        include 'init.php';

        $do = isset($_GET['do'])?$_GET['do']:'Manage';

        if($do == 'Manage'){
            echo '<h1 class="m-5 text-right">إدارة الأقسام</h1>';

            // Set Order Methods [$sort]
            $stmt = $conn->prepare("SELECT * FROM categories");
            $stmt->execute();
            $cats = $stmt->fetchAll();


            ?>


    <div class="container admin-stats2">
        <div class="row flex-row-reverse">
                        <?php

                                    if(count($cats) == 0){ 
                                        echo "<div class='alert alert-danger w-100 text-right'>عفوا لايوجد أقسام حاليا</div>";
                                    }
                                    else{
                                        foreach($cats as $cat){
                                            echo "<div class='col-4 d-flex flex-column my-2'>";

                                            echo '<div class="p-2 pb-3 bg-dark rounded">';
    
                                            echo '<div>';
                                            echo '<h4 class="d-block my-2 font-weight-bold text-right text-white">'.$cat['Name'].'</h4>';
    
                                            //echo '<span class=" my-2 d-block">Ordering : ' . $cat['Ordering'].'</span>';
                                            echo '<div class="cat-features mt-3">';
    
                                            echo '</div>';
    
                                            echo '</div>';
    
                                            echo '<div class="cat-controls mt-4 d-flex flex-row-reverse">';
                                            echo '<a href="categories.php?do=Edit&catid='.$cat['ID']. '" class="p-1 mr-2 btn btn-primary p-1 text-white">تعديل <i class="far fa-edit fa-sm"></i></a>';
                                            echo '<a href="categories.php?do=Delete&catid='.$cat['ID']. '" class="p-1 mr-2 btn btn-danger p-1 text-white">حذف <i class="far fa-trash-alt fa-sm"></i></a>';
                                            echo '</div>';
                                            echo '</div>';
                                            echo "</div>";
                                        }
                                    }
                                    
                                ?>
    
        </div>
        <a href="?do=Add" class="btn text-primary my-2 d-block text-right">إضافة قسم جديد <i class="fa fa-plus fa-sm"></i></a>
    </div>


<?php
        }
        else if($do == 'Add'){

            ?>
<h2 class="m-5 text-right">إضافة قسم جديد</h2>
<div class="container">
    <form class="edit-form" action="?do=insert" method="POST">
        <div class="form-group my-3">
            <label class="mt-1 p-0 text-right d-block">إسم القسم</label>
            <input type="text" name="Name" class="form-control text-right" required='required' autocomplete='off'>
        </div>

        <button class="btn btn-primary mt-3 float-right"><i class="fa fa-plus mr-1"></i>إضافة القسم </button>
    </form>
</div>
<?php
        }
        else if($do == 'insert'){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                echo '<h1 class="text-center mt-4">Add New Category</h1>';

                $Name = $_POST['Name'];

                // For Check Duplication Of Categories Before Insert
                $check = checkItems('Name', 'categories' , $Name);

                if($check > 0){
                    // Redirect To Admin Home Page After 5 Seconds
                    redirectHome('Category Name Already Exist' , 5);
                    exit();
                }else{
                    // Insert Data
                    $stmt = $conn->prepare("
                        INSERT INTO categories (Name)
                        VALUES(?)
                    ");
                    // Excute Query
                    $stmt->execute(Array($Name));
                    header("Location: categories.php");
                    //echo '<div class="alert alert-success w-75 mx-auto mt-3 shadow">Member Added Successfully</div>';
                }

        }
        }
        else if($do == 'Edit'){

            // Check For Cat_Id That Want To Update The Data
            $catId = isset($_GET['catid']) && is_numeric($_GET['catid'])?intval($_GET['catid']):0;

            // Select Data Depending On UserId
            $stmt = $conn->prepare("
                SELECT *
                FROM categories
                WHERE ID=?
                "
            );
            // Excute Query
            $stmt->execute(Array($catId));
            // Fetch Data
            $data = $stmt->fetch(); // Fetch Row Data As Array

            // Check If Row Exist
            if($stmt->rowCount() > 0){

            ?>
            <!-- If Row Exist Show The Form Of Update The Data -->
            <h1 class="text-right mr-5 mt-5 mb-2">تعديل القسم</h1>
            <div class="container">
                <form class="edit-form text-right mt-5" action="?do=Update" method="POST" style="direction: rtl">
                    <input type="hidden" name='catid' value="<?php echo $_GET['catid']; ?>">
                    <div class="form-group my-3">
                        <label class="mt-1 p-0 text-muted font-weight-bold">إسم القسم</label>
                        <input type="text" name="catName" class="form-control" autocomplete="off" value="<?php echo $data['Name'];?>">
                    </div>

                    <button class="btn btn-primary mt-3 px-4"><i class="far fa-save ml-2 fa-lg"></i>حفظ</button>
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
                $id = $_POST['catid'];
                $Name = $_POST['catName'];


                // Update Data Depending On UserId
                $stmt = $conn->prepare("
                    UPDATE categories
                    SET Name=?
                    WHERE ID=?
                    LIMIT 1"
                );
                // Excute Query
                $stmt->execute(Array($Name,$id));

                // Print Number Of Updated Records
                //echo '<div class="alert alert-success w-75 mx-auto text-center">' . $stmt->rowCount() . ' Record Updated' . '</div>';

                header("Location: categories.php");
            }else{
                redirectHome('You Can\'t Access This Page Directly',5);
            }
        }

        else if($do == 'Delete'){
            // Check For category id That Want To Update The Data
            $catId = isset($_GET['catid']) && is_numeric($_GET['catid'])?intval($_GET['catid']):0;

            // Check If Category Id Is Exist In DB Or Not
            $check = checkItems('ID','categories',$catId);

            if($check > 0){
                // Select Data Depending On UserId
                $stmt = $conn->prepare("
                    DELETE
                    FROM categories
                    WHERE ID=?
                    LIMIT 1"
                );


                // Excute Query
                $stmt->execute(Array($catId));



                //echo '<div class="alert alert-success w-75 mx-auto mt-4">Category Deleted Successfully</div>';
                header("Location: categories.php");    
            
            }else{
                    redirectHome('Category Not Founded' , 10);
                }
            }

        //include $tmp . 'footer.php';

    }else{
        header('Location: index.php');
        exit();
    }
