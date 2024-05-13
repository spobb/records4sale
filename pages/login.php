<main>
    <div class="wrapper">
        <form action="index.php?action=identify" method="POST">
            <label for="user" class="required">Username</label>
            <input type="text" name="username" placeholder="Username" id="user" required>
            <label for="pass" class="required">Password</label>
            <input type="password" name="password" placeholder="Password" id="pass" required>
            <button>Login</button>
            <p>Don't have an account?<a href="index.php?page=register">Sign up</a></p>
        </form>
    </div>
</main>