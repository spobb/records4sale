<div class="profile-hero wrapper">
    <h1>Hello, <?= $_SESSION['user']; ?></h1>
</div>
<main>

    <h1>Your reviews</h1>
    <div class="profile-reviews">
        <div class="review column-wrapper">
            <h2 class="overflow">A valediction</h2>
            <span>4.5/5</span>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde, voluptate. Eligendi debitis earum quisquam aliquid quis,
                a cupiditate ratione corporis dolorum maiores deserunt quidem quia quam voluptatibus provident neque cum...</p>
        </div>
        <div class="review column-wrapper">
            <h2 class="overflow">A valediction</h2>
            <span>4.5/5</span>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde, voluptate. Eligendi debitis earum quisquam aliquid quis,
                a cupiditate ratione corporis dolorum maiores deserunt quidem quia quam voluptatibus provident neque cum...</p>
        </div>
        <div class="review column-wrapper">
            <h2 class="overflow">A valediction</h2>
            <span>4.5/5</span>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde, voluptate. Eligendi debitis earum quisquam aliquid quis,
                a cupiditate ratione corporis dolorum maiores deserunt quidem quia quam voluptatibus provident neque cum...</p>
        </div>
        <div class="review column-wrapper">
            <h2 class="overflow">A valediction</h2>
            <span>4.5/5</span>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde, voluptate. Eligendi debitis earum quisquam aliquid quis,
                a cupiditate ratione corporis dolorum maiores deserunt quidem quia quam voluptatibus provident neque cum...</p>
        </div>
        <div class="review column-wrapper">
            <h2 class="overflow">A valediction</h2>
            <span>4.5/5</span>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde, voluptate. Eligendi debitis earum quisquam aliquid quis,
                a cupiditate ratione corporis dolorum maiores deserunt quidem quia quam voluptatibus provident neque cum...</p>
        </div>
        <span>Add a review</span>
    </div>

    <nav class="profile-nav wrapper">

        <label for="profile-contact"><input type="radio" name="nav" id="profile-contact" checked>
            Contact
        </label>

        <label for="profile-about">
            <input type="radio" name="nav" id="profile-about">
            About
        </label>

        <label for="profile-safety"><input type="radio" name="nav" id="profile-safety">
            Safety
        </label>

    </nav>
    <div class="profile-tab wrapper">
        <div class="address column-wrapper">
            <span>Phone</span>
            <span>E-mail</span>
            <span>Address</span>
        </div>
        <div class="column-wrapper">
            <span>+32 485 58 45 75</span>
            <span>gverlaeken@student.efp.be</span>
            <span>Rue de Stalle, 292B 1180 Bruxelles</span>
        </div>
    </div>
    <div class="profile-tab wrapper">
        <div class="address column-wrapper">
            <span>First name</span>
            <span>Last name</span>
        </div>
        <div class="column-wrapper">
            <span>Guillaume</span>
            <span>Verlaeken</span>
        </div>
    </div>
</main>