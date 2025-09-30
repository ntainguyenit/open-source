<?php
session_start();
define("PAGE_TITLE", "Registration Form"); // Navbar vẫn active
include "layout.php";
template_header();
?>

<div class="card p-4 shadow-sm">
    <h2>Kết quả đăng ký</h2>

    <?php
    function check_username($username) {
        if (strpos($username, ' ') !== false) return "❌ Username không được chứa khoảng trắng!";
        return true;
    }

    function check_password($password) {
        $errors = [];
        if (strlen($password) < 6) $errors[] = "Password phải ít nhất 6 ký tự!";
        if (!preg_match('/[A-Z]/', $password)) $errors[] = "Password phải có ít nhất 1 chữ hoa!";
        if (!preg_match('/[#@~^*]/', $password)) $errors[] = "Password phải có ít nhất 1 ký tự đặc biệt (#, @, ~, ^, *)!";
        return empty($errors) ? true : implode("<br>", $errors);
    }

    function ascii_encrypt_password($password, $d = 3) {
        $encrypted = "";
        for ($i=0; $i<strlen($password); $i++) $encrypted .= chr(ord($password[$i]) + $d);
        return $encrypted;
    }

    function standard_encrypt_password($password) {
        return base64_encode($password);
    }

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $username_check = check_username($username);
    $password_check = check_password($password);

    if ($username_check !== true) echo "<div class='alert alert-danger'>$username_check</div>";
    if ($password_check !== true) echo "<div class='alert alert-danger'>$password_check</div>";

    if ($username_check === true && $password_check === true) {
        $ascii_pass = ascii_encrypt_password($password);
        $base64_pass = standard_encrypt_password($password);

        echo "<div class='alert alert-success'>✅ Đăng ký thành công!</div>";

        // Lưu vào session
        if (!isset($_SESSION['registered_users'])) $_SESSION['registered_users'] = [];
        $_SESSION['registered_users'][] = [
            'username' => $username,
            'ascii' => $ascii_pass,
            'base64' => $base64_pass
        ];
    }
    ?>

    <a href="registration_form.php" class="btn btn-primary mt-3">Quay lại Form</a>
</div>

<?php template_footer(); ?>