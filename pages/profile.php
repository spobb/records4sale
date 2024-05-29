<div class="profile-hero wrapper">
    <h1>Hello, <?= $_SESSION['user']; ?></h1>
</div>
<main>

    <h1>Your reviews</h1>
    <div class="profile-reviews">
        <div class="review column-wrapper">
            <h2 class="overflow">A valediction</h2>
            <span>4.5/5</span>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde, voluptate. Eligendi debitis earum
                quisquam aliquid quis,
                a cupiditate ratione corporis dolorum maiores deserunt quidem quia quam voluptatibus provident neque
                cum...</p>
        </div>
        <div class="review column-wrapper">
            <h2 class="overflow">A valediction</h2>
            <span>4.5/5</span>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde, voluptate. Eligendi debitis earum
                quisquam aliquid quis,
                a cupiditate ratione corporis dolorum maiores deserunt quidem quia quam voluptatibus provident neque
                cum...</p>
        </div>
        <div class="review column-wrapper">
            <h2 class="overflow">A valediction</h2>
            <span>4.5/5</span>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde, voluptate. Eligendi debitis earum
                quisquam aliquid quis,
                a cupiditate ratione corporis dolorum maiores deserunt quidem quia quam voluptatibus provident neque
                cum...</p>
        </div>
        <div class="review column-wrapper">
            <h2 class="overflow">A valediction</h2>
            <span>4.5/5</span>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde, voluptate. Eligendi debitis earum
                quisquam aliquid quis,
                a cupiditate ratione corporis dolorum maiores deserunt quidem quia quam voluptatibus provident neque
                cum...</p>
        </div>
        <div class="review column-wrapper">
            <h2 class="overflow">A valediction</h2>
            <span>4.5/5</span>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde, voluptate. Eligendi debitis earum
                quisquam aliquid quis,
                a cupiditate ratione corporis dolorum maiores deserunt quidem quia quam voluptatibus provident neque
                cum...</p>
        </div>
        <span>Add a review</span>
    </div>

    <hr>

    <div class="tabs">
        <nav class="profile-nav wrapper">

            <button class="tab-button active" data-id="tab1">Contact</button>
            <button class="tab-button" data-id="tab2">About</button>
            <button class="tab-button" data-id="tab3">Safety</button>
            <button class="tab-button" data-id="tab4">test</button>
            <button class="tab-button" data-id="tab5">test</button>

        </nav>
        <div class="profile-tab wrapper active" id="tab1">
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
        <div class="profile-tab wrapper" id="tab2">
            <div class="address column-wrapper">
                <span>First name</span>
                <span>Last name</span>
            </div>
            <div class="column-wrapper">
                <span>Guillaume</span>
                <span>Verlaeken</span>
            </div>
        </div>
        <div class="profile-tab wrapper" id="tab3">
            <div class="address column-wrapper">
                <span>TAB 3</span>
            </div>
            <div class="column-wrapper">
                <span>3</span>
            </div>
        </div>
        <div class="profile-tab wrapper" id="tab4">
            <div class="address column-wrapper">
                <span>First name</span>
                <span>Last name</span>
            </div>
            <div class="column-wrapper">
                <span>Guillaume</span>
                <span>Verlaeken</span>
            </div>
        </div>
        <div class="profile-tab wrapper" id="tab5">
            <div class="address column-wrapper">
                <span>First name</span>
                <span>Last name</span>
            </div>
            <div class="column-wrapper">
                <span>Guillaume</span>
                <span>Verlaeken</span>
            </div>
        </div>
    </div>
</main>
<script src="/records4sale/public/js/tabs.js"></script>