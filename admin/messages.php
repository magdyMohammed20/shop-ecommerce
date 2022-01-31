<?php
    session_start();
    $pageTitle = 'Manage Messages';
     // If Session Exist Include [init.php] To Allow Navbar And If I Enter To Dashboard Without Login Or Without Start The Session It Will Direct Me To Login Page
    if(isset($_SESSION['userName'])){
        include 'init.php';
            $do = isset($_GET['do'])?$_GET['do']:'Manage';

            if($do== "Manage"){
                $stmt = $conn->prepare("SELECT * FROM contact");
                $stmt->execute();
                $members_data = $stmt->fetchAll();

                

        ?>
<h1 class="m-5 text-right">إدارة الرسائل</h1>

<?php
    if($members_data == []){
        echo '<div class="alert alert-danger w-75 mx-auto mt-4 text-right">عفوا لايوجد رسائل</div>';
        return;
    }
?>
<div class="container">
    <div class="table-responsive mt-4">
        <table class="table members-table shadow-sm" style="direction: rtl">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">الرقم</th>
                    <th scope="col">الراسل</th>
                    <th scope="col">الإيميل</th>
                    <th scope="col">الرسالة</th>
                    <th scope="col">التاريخ</th>
                    <th scope="col">التحكم</th>
                </tr>
            </thead>
            <tbody>
                <?php
                        foreach($members_data as $member){

                            echo '<tr>';
                                echo '<td>'. $member['id'] .'</td>';
                                echo '<td>'. $member['name'] .'</td>';
                                echo '<td>'. $member['email'] .'</td>';
                                echo '<td style="width: 300px;word-break: break-all;">'. $member['message'] .'</td>';

                            echo '<td>'. $member['date'] .'</td>';
                            
                            echo "<td>".

                                "<a href='?do=Delete&id=" .$member['id'].
                                "'class='btn btn-danger text-white'>
                                <i class='far fa-trash-alt'></i></a>
                                ";
                            echo    '</td>';
                            
                            echo '</tr>';
                        }
                        ?>

            </tbody>
        </table>
    </div>
</div>
<?php

    }
    if($do == 'Delete'){
        // Check For category id That Want To Update The Data
        $id = isset($_GET['id']) && is_numeric($_GET['id'])?intval($_GET['id']):0;
            // Select Data Depending On UserId
            $stmt = $conn->prepare("
                DELETE
                FROM contact
                WHERE id=?
                LIMIT 1"
            );

            // Excute Query
            $stmt->execute(Array($id));

            //echo '<div class="alert alert-success w-75 mx-auto mt-4">Category Deleted Successfully</div>';
            header("Location: messages.php");    
            
        }
    }

    else{
        header('Location: index.php');
        exit();
    }

