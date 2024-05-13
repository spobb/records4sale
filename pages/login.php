<main>
    <div class="wrapper">
        <form action="index.php?action=identify" method="POST">
            <label for="username" class="required">Username</label>
            <input type="text" name="username" placeholder="Username" required>
            <label for="password" class="required">Password</label>
            <input type="password" name="password" placeholder="Password" required>
            <button >Login</button>
            <p>Don't have an account?<a href="index.php?page=register">Sign up</a></p>
        </form>
    </div>
</main>