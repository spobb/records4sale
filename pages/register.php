<main>
    <div class="form wrapper">
        <form action="index.php?action=register" method="POST">
            <label for="user" class="required">Username</label>
            <input type="text" name="username" placeholder="Username" id="user" required>
            <label for="pass" class="required">Password</label>
            <input type="password" name="password" placeholder="Password" id="pass" required>
            <button>Sign up</button>
            <p class="form-footer">Already have an account?<a href="index.php?page=login">Sign in</a></p>
        </form>
    </div>
</main>