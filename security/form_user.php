<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; // Add new user
$_id = NULL; // Biến $_id để lưu ID người dùng


function decryptID($encryptedID) {
    $decoded = base64_decode($encryptedID);
    list($id, $randomKey, $key) = explode(':', $decoded); 
    if ($key === "secret_key_power") {
        return (int)$id; 
    }
    return null; 
}

if (isset($_GET['id'])) {
    $encryptedID = $_GET['id'];
    $_id = decryptID($encryptedID); 
    if ($_id !== null) {
        $user = $userModel->findUserById($_id); 
    }
}
$luutruloi = []; 



if (!empty($_POST['submit'])) {
    // Validate tên
    if (empty($_POST['name'])) {
        $errors[] = "Tên là không được bỏ trống.";
    } elseif (!preg_match("/^[A-Za-z0-9]{5,15}$/", $_POST['name'])) {
        $errors[] = "Tên phải dài 5-15 ký tự và chỉ chứa chữ cái và số.";
    }

    // Validate mật khẩu
    if (empty($_POST['password'])) {
        $errors[] = "Tên là không được bỏ trống.";
    } elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()]).{5,10}$/", $_POST['password'])) {
        $errors[] = "Mật khẩu phải dài 5-10 ký tự và bao gồm ít nhất một chữ thường, một chữ in hoa, một số và một ký tự đặc biệt.";
    }

    // Nếu không có lỗi, xử lý dữ liệu
    if (empty($errors)) {
        // Kiểm tra xem có ID hay không để phân biệt giữa cập nhật và thêm mới
        if (!empty($_POST['id'])) { 
            $userModel->updateUser($_POST);
            $_SESSION['message'] = "User updated successfully!";
        }
        header('location: list_users.php');
        exit;
    }
    if (!empty($_POST['submit'])) {
    if (empty($_POST['id'])) { 
      
        $userModel->insertUser($_POST);
    }
    header('location: list_users.php');
    exit;
}
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
    <?php include 'views/header.php'?>
    <div class="container">
    <?php 
        // Hiển thị thông báo thành công
        if (isset($_SESSION['message'])) {
            echo '<div class="alert alert-success" role="alert">' . $_SESSION['message'] . '</div>';
            unset($_SESSION['message']); // Xóa thông báo sau khi hiển thị
        }
        ?>
         <?php if (!empty($errors)): ?>
            <div class="alert alert-danger" role="alert">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $_id ?>"> <!-- Gán giá trị $_id -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value="<?php echo (!empty($user[0]['name']) ? $user[0]['name'] : '') ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>
</html>