<?php

if (!empty($_POST)) {
    if (validate_credentials($_POST['user'], $_POST['pass'], $pdo)) {
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['active'] = true;
        header('Location: index.php?page=home');
    };
}
?>

<main>
    <div class="form column-wrapper">
        <form action="index.php?page=login" method="POST" autocomplete="off">
            <label for="user" class="required">Username</label>
            <input type="text" name="user" placeholder="Username" id="user" required>
            <label for="pass" class="required">Password</label>
            <input type="password" name="pass" placeholder="Password" id="pass" required>
            <button>Login</button>
            <p class="form-footer">Don't have an account? <a href="index.php?page=register">Sign up</a></p>
        </form>
    </div>
</main>