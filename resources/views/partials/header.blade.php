<div>
    <!-- quote carousel -->
    <div id="quoteCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <p class="quote text-center">
                    $35 REAL Crew Sweatshirt Shop now Details
                </p>
            </div>
            <div class="carousel-item">
                <p class="quote text-center">Up to 60% off our collection Details</p>
            </div>
            <div class="carousel-item">
                <p class="quote text-center">30-40% off jeans Shop now Details</p>
            </div>
        </div>
        <a class="carousel-control-prev" href="#quoteCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#quoteCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="brand-section">
        <a href="{{ route('index') }}" class="navbar-logo">
            <img class="brand" src="{{ asset('images/olivetree.png') }}" alt="Logo" />
        </a>
    </div>
    <nav class="navbar">
        <div class="containerHeader">
            <div class="navbar-menu">
                <a href="{{ route('index') }}" class="navbar-item">Home</a>
                <a href="{{ route('men') }}" class="navbar-item">Men</a> <!-- No route specified -->
                <a href="{{ route('women') }}" class="navbar-item">Women</a> <!-- No route specified -->
                <a href="{{ route('accessories') }}" class="navbar-item">Accessories</a> <!-- No route specified -->
                <a href="{{ route('toys') }}" class="navbar-item">Toys and Collectables</a> <!-- No route specified -->
            </div>
        </div>
    </nav>
</div>
<style>
    .navbar {
        background-color: #fff;
        padding: 30px 0;
        border-bottom: 1px solid #93a04a;
        display: flex;
        justify-content: center;
    }

    .containerHeader {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar-logo img {
        padding-top: 0;
        margin-right: 60px;
    }

    .navbar-menu {
        display: flex;
        align-items: center;
    }

    .navbar-item {
        padding-top: 100px;
        padding: 30px;
        font-weight: bold;
        text-decoration: none;
        transition: color 0.3s;
        font-size: x-large;
        align-items: center;
        font-size: 15px;
    }

    .navbar-item:hover .login:hover {
        color: rgb(95, 139, 115);
    }

    .navbar-item.active-link {
        color: #000000;
    }

    .welcome-message {
        margin-right: 15px;
        font-weight: bold;
        color: #333;
    }

    .quote {
        color: black;
    }

    .carousel {
        background-color: #93a04a;
    }

    .brand-section {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #fff;
    }

    .brand-section .navbar-logo img {
        margin-top: 30px;
        height: 150px;
    }
</style>