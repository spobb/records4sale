<?php
$response = '';
$users = ['user' => 'pass'];

if (!empty($_POST['user']) && !empty($_POST['pass'])) {
    $user = $_POST['user'];
    if (array_key_exists($user, $users)) {
        if ($users[$_POST['user']] == $_POST['pass']) {
            $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time();
            $_SESSION['user'] = $_POST['user'];
            $response = 'You have entered the correct password';
        } else {
            $response = 'You have entered the wrong password';
        }
    } else {
        $response = 'This user does not exist';
    }
}
?>

<main>
    <div class="form column-wrapper">
        <h2><?= $response ?></h2>
        <form action="index.php?page=login" method="POST" autocomplete="off">
            <label for="user" class="required">Username</label>
            <input type="text" name="user" placeholder="Username" id="user" required>
            <label for="pass" class="required">Password</label>
            <input type="password" name="pass" placeholder="Password" id="pass" required>
            <button>Login</button>
            <p class="form-footer">Don't have an account?<a href="index.php?page=register">Sign up</a></p>
        </form>
    </div>
</main>