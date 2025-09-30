<?php
session_start(); // Khởi tạo session
define("PAGE_TITLE", "Registration Form");
include "layout.php";
template_header(); 
?>

<div class="card p-4 shadow-sm">
    <h2>Registration Form</h2>
    <form action="process_registration_form.php" method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">Username:</label>
            <input type="text" name="username" id="username" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" name="password" id="password" class="form-control" required>
            <div class="form-text">
                Password phải có ít nhất 6 ký tự, 1 chữ hoa, và 1 ký tự đặc biệt (#, @, ~, ^, *)
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>

<?php
// Hiển thị danh sách user đã đăng ký (nếu có)
if (isset($_SESSION['registered_users']) && count($_SESSION['registered_users']) > 0) {
    echo '<div class="card p-4 shadow-sm mt-4">';
    echo '<h3>Danh sách đăng ký thành công</h3>';
    echo '<table class="table table-striped">';
    echo '<thead><tr><th>#</th><th>Username</th><th>Password ASCII</th><th>Password Base64</th></tr></thead>';
    echo '<tbody>';
    $i = 1;
    foreach ($_SESSION['registered_users'] as $user) {
        echo '<tr>';
        echo '<td>'.$i++.'</td>';
        echo '<td>'.$user['username'].'</td>';
        echo '<td>'.$user['ascii'].'</td>';
        echo '<td>'.$user['base64'].'</td>';
        echo '</tr>';
    }
    echo '</tbody></table></div>';
}

template_footer();
?>