<?php
    session_start();
    $pageTitle = 'Manage Members';
     // If Session Exist Include [init.php] To Allow Navbar And If I Enter To Dashboard Without Login Or Without Start The Session It Will Direct Me To Login Page
    if(isset($_SESSION['userName'])){
        include 'init.php';
        // For Modify Query To Fetch The Pending Members
        $query = '';
        // Check The Query
        $do = isset($_GET['do'])?$_GET['do']:'Manage';
        if($do == 'Manage'){

            $stmt = $conn->prepare("SELECT * FROM users WHERE group_Id != 1 $query");
            $stmt->execute();
            $members_data = $stmt->();

        ?>
<h1 class="text-center mt-3">Manage Members</h1>
<div class="container">
    <div class="table-responsive mt-4">
        <table class="table members-table shadow-sm">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">user name</th>
                    <th scope="col">email</th>
                    <th scope="col">full name</th>
                    <th scope="col">Registered Date</th>
                    <th scope="col">Control</th>
                </tr>
            </thead>
            <tbody>
                <?php
                        foreach($members_data as $member){

                            // If User Has Image Display It Else Display Default Image
                            if($member['image'] == NULL){
                                $img = 'default.png';
                            }else{
                                $img = $member['image'];
                            }
                            echo '<tr>';
                                echo '<td>'. $member['user_Id'] .'</td>';
                                echo '<td>'. '<img class="rounded-pill" src="layout/images/'.$img.'" style="width: 50px; height: 50px">' .'</td>';
                                echo '<td>'. $member['user_Name'] .'</td>';
                                echo '<td>'. $member['user_Email'] .'</td>';
                                echo '<td>'. $member['user_fullName'] .'</td>';

                            echo '<td>'. $member['reg_date'] .'</td>';
                            echo "<td class='text-left'>".
                                "<a href='?do=Edit&user_Id=" .$member['user_Id'].
                                "'class='btn btn-primary mr-1'>Edit <i class='far fa-edit'></i></a>".
                                "<a href='?do=Delete&user_Id=" .$member['user_Id'].
                                "'class='btn btn-danger text-white'>Delete
                                <i class='far fa-trash-alt'></i></a>
                                ";

                            if($member['reg_status'] == 0){
                                echo '<a class="btn btn-warning text-white" href="members.php?do=activate&user_Id='.$member["user_Id"].'"'.'>Activate <i class="fas fa-check"></i></a>';
                            }
                            echo    '</td>';
                            echo '</tr>';
                        }
                        ?>

            </tbody>
        </table>
    </div>
</div>
<?php }
        else if($do == 'Add'){?>
<h2 class="text-center my-3">Add Member</h2>
<div class="container">
    <form class="edit-form" action="?do=insert" method="POST" enctype="multipart/form-data">
        <div class="form-group my-3">
            <label class="mt-1 p-0">userName</label>
            <input type="text" name="userName" class="form-control" required='required' autocomplete='off'>
        </div>
        <div class="form-group my-3">
            <label class="mt-1 p-0">password</label>
            <input type="password" name="password" class="form-control" required='required' autocomplete='new-pass'>
        </div>
        <div class="form-group my-3">
            <label class="mt-1 p-0">email</label>
            <input type="email" name="email" class="form-control" required='required'>
        </div>
        <div class="form-group my-3">
            <label class="mt-1 p-0">fullName</label>
            <input type="text" name="fullName" class="form-control" required='required'>
        </div>
        <div class="form-group my-3">
            <label class="mt-1 p-0">Upload User Image</label>
            <input type="file" name="avatar" class="form-control">
        </div>
        <button class="btn btn-primary mt-3">Add New Member</button>
    </form>
</div>
<?php
}
        else if($do == 'insert'){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                echo '<h1 class="text-center mt-4">Add New Member</h1>';
                // Validate Inserted User Data
                // Array For Store Errors And Display It
                $formErrors = Array();

                // User Image
                $avaName = $_FILES['avatar']['name'];
                $avaSize = $_FILES['avatar']['size'];
                $avaTmpName = $_FILES['avatar']['tmp_name'];
                $avaType = $_FILES['avatar']['type'];

                // List Of Allowed Image Extensions
                $avaExtensions = array('jpeg','jpg','gif','png');

                // Get User Image Extension
                // Convert Name Of Image To Array For Get The Extension
                $avatarExtension = explode('.',$avaName);
                // Get The Image Extension And Convert It To Small Characters
                $avaExten = strtolower(end($avatarExtension));


                $userName = $_POST['userName'];
                $email = $_POST['email'];
                $fullName = $_POST['fullName'];
                // Use $pass This For Check Empty
                $pass = trim($_POST['password']);
                // Use $hashedPass For Insert To DB
                $hashedPass = sha1($pass);

                // For Check Duplication Of User name Before Insert
                checkAny('user_Name', 'users' , $userName);

                if(empty($userName)){
                    // Append Message To Array
                    $formErrors[] = "User Name Can't Be Empty";
                }

                if(empty($email)){
                    // Append Message To Array
                    $formErrors[] = "User Email Can't Be Empty";
                }

                if(empty($fullName)){
                    // Append Message To Array
                    $formErrors[] = "User Full Name Can't Be Empty";
                }

                if(empty($pass)){
                    // Append Message To Array
                    $formErrors[] = "User Password Can't Be Empty";
                }


                if(!empty($avaName) && !in_array($avaExten , $avaExtensions)){
                    // If User Upload Image With Unpopular Extension
                    $formErrors[] = "This Type Of Image Not Allowed Please Upload Image With <strong>png , jpg , jpeg , gif</strong> Extension";
                }

                if(empty($avaName)){
                    // If User Not Upload Image
                    $formErrors[] = "You Must Upload User Image";
                }


                if($avaSize > 4194304){
                    // If User Upload Image With Size Greater Than 4 MB
                  $formErrors[] = "You Must Image With Less Size";

                }

                // If There Aren't Errors Update The DB
                if(count($formErrors) > 0){

                    // Display All Errors For User
                    foreach($formErrors as $error){
                        echo "<div class='alert alert-danger w-75 mx-auto my-3 shadow'>".  $error ."</div>";
                    }
                }else{
                    // Prevent Duplication Name Of Uploaded Images
                    $ava = rand(0,1000000) .'_'. $avaName;
                    // Move The Uploaded Image To My Folders
                    move_uploaded_file($avaTmpName,"layout\images\\".$ava);

                    // Update Data Depending On UserId
                    $stmt = $conn->prepare("
                        INSERT INTO users (user_Name,user_Password,user_Email,user_fullName,reg_status,reg_date,image)
                        VALUES(? , ? , ? , ? , 1 ,now(),?)
                    ");
                    // Excute Query
                    $stmt->execute(Array($userName,$hashedPass,$email,$fullName,$ava));

                    echo '<div class="alert alert-success w-75 mx-auto mt-3 shadow">Member Added Successfully</div>';
                }

        }else{
            redirectHome('You Can\'t Access This Page Directly',10);
        }
    }
        else if($do == 'Edit'){
            // Check For User_Id That Want To Update The Data
            $userId = isset($_GET['user_Id']) && is_numeric($_GET['user_Id'])?intval($_GET['user_Id']):0;

            // Select Data Depending On UserId
            $stmt = $conn->prepare("
                SELECT *
                FROM users
                WHERE user_Id=?
                LIMIT 1"
            );
            // Excute Query
            $stmt->execute(Array($userId));
            // Fetch Data
            $data = $stmt->fetch(); // Fetch Row Data As Array

            // Check If Row Exist
            if($stmt->rowCount() > 0){

            ?>
<!-- If Row Exist Show The Form Of Update The Data -->
<h2 class="text-center my-3">Edit Members</h2>
<div class="container">
    <form class="edit-form" action="?do=Update" method="POST">
        <input type="hidden" name='userId' value="<?php echo $userId?>">
        <div class="form-group my-3">
            <label class="mt-1 p-0">userName</label>
            <input type="text" name="userName" class="form-control" autocomplete="off" value="<?php echo $data['user_Name']; ?>">
        </div>
        <div class="form-group my-3">
            <label class="mt-1 p-0">password</label>
            <input type="hidden" name="oldPass" value="<?php echo $data['user_Password'];?>">
            <input type="password" name="password" class="form-control" autocomplete="new-password" value="">
        </div>
        <div class="form-group my-3">
            <label class="mt-1 p-0">email</label>
            <input type="text" name="email" class="form-control" value="<?php echo $data['user_Email'];?>">
        </div>
        <div class="form-group my-3">
            <label class="mt-1 p-0">fullName</label>
            <input type="text" name="fullName" class="form-control" value="<?php echo $data['user_fullName'];?>">
        </div>
        <button class="btn btn-primary col-3 mt-3">Save</button>
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
                echo '<h1 class="text-center">Update Member</h1>';
                $id = $_POST['userId'];
                $userName = $_POST['userName'];
                $email = $_POST['email'];
                $fullName = $_POST['fullName'];

                // Check For User name Duplication Before Update The Data
                checkAny('user_Name', 'users' , $userName);

                // Check If Password Is Setted I Will Update Password In DB
                // Else I Will Updated Other Data With Old Password
                $newPassword = empty($_POST['password']) ? $_POST['oldPass'] : sha1($_POST['password']);

                // Validate Updated User Data
                // Array For Store Errors And Display It
                $formErrors = Array();
                if(empty($userName)){
                    // Append Message To Array
                    $formErrors[] = "User Name Can't Be Empty";
                }
                if(empty($email)){
                    // Append Message To Array
                    $formErrors[] = "User Email Can't Be Empty";
                }
                if(empty($fullName)){
                    // Append Message To Array
                    $formErrors[] = "User Full Name Can't Be Empty";
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
                        UPDATE users
                        SET user_Name=?,user_Password=?,user_Email=?,user_fullName=?
                        WHERE user_Id=?
                        LIMIT 1"
                    );
                    // Excute Query
                    $stmt->execute(Array($userName,$newPassword,$email,$fullName,$id));

                    // Print Number Of Updated Records
                    echo '<h1 class="alert alert-success w-75 mx-auto text-center">' . $stmt->rowCount() . ' Record Updated' . '</h1>';
                }

            }else{
                redirectHome('You Can\'t Access This Page Directly',5);
            }
        }

        else if($do == 'Delete'){
            // Check For User_Id That Want To Update The Data
            $userId = isset($_GET['user_Id']) && is_numeric($_GET['user_Id'])?intval($_GET['user_Id']):0;

            // Select Data Depending On UserId
            $stmt = $conn->prepare("
                DELETE
                FROM users
                WHERE user_Id=?
                LIMIT 1"
            );
            // Excute Query
            $stmt->execute(Array($userId));

            if($stmt->rowCount() > 0){
                echo '<div class="alert alert-success w-75 mx-auto mt-4">Member Deleted Successfully</div>';
            }else{
                redirectHome('Member Not Founded' , 10);
            }
        }
        else if($do == 'activate'){
            // Check For User_Id That Want To Update The Data
            $userId = isset($_GET['user_Id']) && is_numeric($_GET['user_Id'])?intval($_GET['user_Id']):0;

            // Check If User Id Is Exist In DB Or Not
            $check = checkActivated('user_Id','users',$userId);

            // If User Id Exist Then Update User reg_status To Be A Member
            if($check == true){
                // Select Data Depending On UserId
                $stmt = $conn->prepare("
                    UPDATE users
                    SET reg_status = 1
                    WHERE user_Id=?
                    LIMIT 1"
                );
                // Excute Query
                $stmt->execute(Array($userId));

                echo '<div class="alert alert-success w-75 mx-auto mt-4">Record Updated Successfully And User Be A Member</div>';
            }
            // If User Id Not Exist Then Show Error Message
            else{
                echo '<div class="alert alert-danger w-75 mx-auto mt-4">Failed To Update User As A Member</div>';
            }
        }
        //include $tmp . 'footer.php';

    }else{
        header('Location: index.php');
        exit();
    }
