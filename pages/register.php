<?php

//     $user = $_POST['user'];
//     if (!array_key_exists($user, $users)) {
//         $_SESSION['user'] = $_POST['user'];
//         $users[$_POST['user']] = $_POST['pass'];
//         $response = 'User created';
//     } else {
//         $response = 'This username is taken';
//     }

$response = '';

if (!empty($_POST)) {
    // if (!validate_credentials($_POST['user'], $_POST['pass'], $pdo)) {
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);

    $sql = 'INSERT INTO user (`email`, `password`) VALUES (?, ?)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['user'], $pass]);

    header('Location: index.php?page=home');
}
?>

<main>
    <div class="form column-wrapper">
        <h1>Create an account</h1>
        <h2><?= isset($response) ? $response : '' ?></h2>
        <form action="index.php?page=register" method="POST" autocomplete="off">
            <label for="user" class="required">Username</label>
            <input type="text" name="user" placeholder="Username" id="user" required>
            <label for="pass" class="required">Password</label>
            <input type="password" name="pass" placeholder="Password" id="pass" required>
            <button>Sign up</button>
            <p class="form-footer">Already have an account? <a href="index.php?page=login">Sign in</a></p>
        </form>
    </div>
</main>