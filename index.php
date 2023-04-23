<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
</head>

<body>


    <section class="header hidden">
        <a href="home.php" class="logo">Travels</a>

        <nav class="navbar">
            <a href="index.php" class="nav-link"
                style="color: var(--main-color); border: solid 4px var(--main-color); border-radius: 1rem; padding: 10px;">Home</a>
            <a href=" about.php" class="nav-link">About</a>
            <a href="package.php" class="nav-link">Package</a>
            <a href="book.php" class="nav-link">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>


    <section class="home">
        <div class="home-slider swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide"
                    style="background: url(assets/images/home-slide-1.jpg) no-repeat;">
                    <div class="content">
                        <span>Explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">Discover</a>
                    </div>
                </div>
                <div class="swiper-slide slide"
                    style="background: url(assets/images/home-slide-2.jpg) no-repeat;">
                    <div class="content">
                        <span>Explore, discover, travel</span>
                        <h3>discover the new places</h3>
                        <a href="package.php" class="btn">Discover</a>
                    </div>
                </div>
                <div class="swiper-slide slide"
                    style="background: url(assets/images/home-slide-3.jpg) no-repeat;">
                    <div class="content">
                        <span>Explore, discover, travel</span>
                        <h3>Make Your tour worthwhile</h3>
                        <a href="package.php" class="btn">Discover</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>
    </section>

    <!-- Services -->

    <section class="services hidden">
        <h1 class="heading-title"> Our Services </h1>
        <div class="box-container">
            <div class="box hidden">
                <img src="assets/images/icon-1.png" alt="">
                <h3>Adventure</h3>
            </div>

            <div class="box hidden">
                <img src="assets/images/icon-2.png" alt="">
                <h3>Tour Guide</h3>
            </div>

            <div class="box hidden">
                <img src="assets/images/icon-3.png" alt="">
                <h3>Trekking</h3>
            </div>

            <div class="box hidden">
                <img src="assets/images/icon-4.png" alt="">
                <h3>Camp Fire</h3>
            </div>

            <div class="box hidden">
                <img src="assets/images/icon-5.png" alt="">
                <h3>Off Road</h3>
            </div>

            <div class="box hidden">
                <img src="assets/images/icon-6.png" alt="">
                <h3>Camping</h3>
            </div>

        </div>
    </section>

    <!-- Home About -->

    <section class="home-about">
        <div class="image">
            <img src="assets/images/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>About Us</h3>
            <p>
                We are a group of people who like to travel and explore the
                world so we have created a platform where we can give others the
                pleasure of the amazing places in the world.
            </p>
            <a href="about.php" class="btn">Read More</a>

        </div>


    </section>

    <!-- Home Package -->

    <section class="home-packages">
        <h1 class="heading-title">Our Packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="assets/images/img-1.jpg" alt="" width="600">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Feel the thrill and joy of adventure while enjoying the
                        worlds beauty.</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="assets/images/img-2.jpg" alt="" width="600">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Feel the thrill and joy of adventure while enjoying the
                        worlds beauty.</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="assets/images/img-3.jpg" alt="" width="600">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Feel the thrill and joy of adventure while enjoying the
                        worlds beauty.</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
        </div>
        <div class="load-more">
            <a href="package.php" class="btn">
                Load More
            </a>
        </div>
    </section>

    <section class="home-offer">
        <div class="content">
            <h3>Upto 50% off</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse
                illum eveniet doloribus, obcaecati omnis ipsa? Exercitationem
                vero hic iusto nam. Lorem ipsum dolor, sit amet consectetur
                adipisicing elit. A, architecto?</p>
            <a href="book.php" class="btn">Book Now</a>
        </div>
    </section>

    <!-- Footer -->
    <?php include('components/footer.php') ?>

    <script>
    const NextBtn = document.querySelector('.swiper-button-next');
    setInterval(() => {
        NextBtn.click();
    }, 4000);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js">
    </script>
    <script src="js/index.js"></script>
</body>

</html>