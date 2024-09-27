<?php $page = 'property-details'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Urbanwal Realty</title>
    <?php include 'include/head-links.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



    <style>
        .header {
            position: inherit;
        }

        .headerBtn {
            border: 1px solid var(--primary-color);
            color: var(--primary-color);
        }

        .headerBtn:after {
            border-color: var(--primary-color);
        }

        .headerBtn:hover {
            background: var(--primary-color);
            color: #fff;
        }

        .rightMenu ul li a {
            color: #444;
        }
    </style>
    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper {
            width: 100%;
            height: 300px;
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-slide {
            background-size: cover;
            background-position: center;
        }

        .mySwiper2 {
            height: 400px;
            width: 100%;
        }

        .thumb-swiper {
            height: 100px;
            box-sizing: border-box;
            padding: 10px 0;
        }

        .thumb-swiper .swiper-slide {
            width: 25%;
            height: 100%;
            opacity: 0.7;
        }

        .thumb-swiper .swiper-slide-thumb-active {
            opacity: 1;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body onload="createCaptcha();">

    <div class="wrapper">
        <?php include 'include/header.php'; ?>
        <div class="overflow-hidden">

            <div class="row m-0 p-0 ">
                <div class="col-lg-6 p-0">
                    <div class="property-images">
                        <div class="item-images  ">
                            <img class="" src="images/1.jpg" alt="">

                        </div>
                        <div class="item-images">
                            <img src="images/1.jpg" alt="">

                        </div>
                        <div class="item-images">
                            <img src="images/1.jpg" alt="">

                        </div>

                    </div>
                </div>

                <div class="col-lg-6 p-5 m-0 " style="background-color: #f1f1f1;">
                    <h4 class="heading">Property Details</h4>
                    <!-- <div class="d-flex align-items-center gap-2 mt-4">
                        <i class="fa-solid fa-location-dot text_primary"></i> <strong>Borivali,Mumbai</strong>

                    </div>
                    <div class="short-discription mt-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, commodi! Lorem ipsum, dolor
                        sit amet consectetur adipisicing elit.

                    </div> -->
                    <div class="propertyInfo bg-transparent">
                        <div class="itmeInfo area">
                            <p class="small text-uppercase">Carpet Area</p>
                            <p>250 sqft</p>
                        </div>
                        <div class="itmeInfo bedroom">
                            <p class="small text-uppercase">Bedroom</p>
                            <p>2</p>
                        </div>
                        <div class="itmeInfo bathroom">
                            <p class="small text-uppercase">Bathroom</p>
                            <p>2</p>
                        </div>
                        <div class="itmeInfo">
                            <p class="small text-uppercase">Furnishing</p>
                            <p>Unfurnished</p>
                        </div>
                        <div class="itmeInfo lift">
                            <p class="small text-uppercase">Lift</p>
                            <p>Yes</p>
                        </div>
                        <div class="itmeInfo parking">
                            <p class="small text-uppercase">Parking</p>
                            <p>Yes</p>
                        </div>

                    </div>
                    <hr>
                    <div class=" ">
                        <ul class="short-details-grid ">
                            <li>
                                <div>
                                    <h6>
                                        Super Built-Up Area
                                    </h6>
                                    <p class="mt-2">800 sqft</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h6>
                                        Floor
                                    </h6>
                                    <p class="mt-2">2(Out of 4 Floors)</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h6>
                                        Transaction type
                                    </h6>
                                    <p class="mt-2">Resale</p>
                                </div>
                            </li>
                            <!-- 2 -->
                            <li>
                                <div>
                                    <h6>
                                        Status
                                    </h6>
                                    <p class="mt-2">Ready To Move</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h6>
                                        Facing
                                    </h6>
                                    <p class="mt-2">East</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h6>
                                        Furnished Status
                                    </h6>
                                    <p class="mt-2">Furnished</p>
                                </div>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
        <section class="">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="p-5 bg-white rounded-5 shadow">
                            <h4>
                                About this property
                            </h4>
                            <p class="mt-2">
                                Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam
                                id ornare. Morbi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus
                                dolor. Vivamus adipiscing eros quis orci fringilla, sed pretium lectus viverra.
                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Donec nec velit non odio aliquam suscipit. Sed non neque faucibus, condimentum
                                lectus at, accumsan enim.

                            </p>
                            <p class="mt-2">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque.
                                Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae
                                lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis
                                fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum
                                facilisis massa, a consequat purus viverra.
                            </p>
                        </div>
                        <div class="p-5 bg-white rounded-5 shadow mt-4">
                            <h4>
                                Property Amenities
                            </h4>
                            <div class="amenities">
                                <div class="">
                                    <ul>
                                        <li><a href="#"> <span class="icons_amenities"><i
                                                        class="fa-solid fa-dumbbell"></i></span> Gym</a></li>
                                        <li><a href="#"> <span class="icons_amenities"><i
                                                        class="fa-solid fa-wifi"></i></span> Wi-Fi</a></li>
                                        <li><a href="#"> <span class="icons_amenities"><i
                                                        class="fa-solid fa-square-parking"></i></span>
                                                Parking</a></li>
                                        <li><a href="#"> <span class="icons_amenities" class=""><svg
                                                        style="width: 20px; height:100%;" stroke="currentColor"
                                                        fill="none" stroke-width="2" viewBox="0 0 24 24"
                                                        stroke-linecap="round" stroke-linejoin="round" height="1em"
                                                        width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8 16a3 3 0 0 1 -3 3"></path>
                                                        <path d="M16 16a3 3 0 0 0 3 3"></path>
                                                        <path d="M12 16v4"></path>
                                                        <path
                                                            d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M7 13v-3a1 1 0 0 1 1 -1h8a1 1 0 0 1 1 1v3"></path>
                                                    </svg></span> Air Conditioned</a></li>
                                        <li><a href="#"> <span class="icons_amenities"><i
                                                        class="fa-solid fa-person-swimming"></i></span>
                                                Pool</a></li>
                                        <li><a href="#"></i> <span class="icons_amenities">
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                        viewBox="0 0 24 24" height="100%" width="20px"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M18.618 7.462 6.403 2.085a1.007 1.007 0 0 0-.77-.016 1.002 1.002 0 0 0-.552.537l-3 7a1 1 0 0 0 .525 1.313L9.563 13.9 8.323 17H4v-3H2v8h2v-3h4.323c.823 0 1.552-.494 1.856-1.258l1.222-3.054 3.419 1.465a1 1 0 0 0 1.311-.518l3-6.857a1 1 0 0 0-.513-1.316zm1.312 8.91-1.858-.742 1.998-5 1.858.741z">
                                                        </path>
                                                    </svg>
                                                </span> Security</a></li>
                                        <li><a href="#"> <span class="icons_amenities"><svg stroke="currentColor"
                                                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                                        height="100%" width="20px" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                                        <path
                                                            d="M9.17 16.83a4.008 4.008 0 0 0 5.66 0 4.008 4.008 0 0 0 0-5.66l-5.66 5.66zM18 2.01 6 2c-1.11 0-2 .89-2 2v16c0 1.11.89 2 2 2h12c1.11 0 2-.89 2-2V4c0-1.11-.89-1.99-2-1.99zM10 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM7 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm5 16c-3.31 0-6-2.69-6-6s2.69-6 6-6 6 2.69 6 6-2.69 6-6 6z">
                                                        </path>
                                                    </svg></span> Laundry Room</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="property-video mt-4    overflow-hidden">
                            <video class="myVideo rounded-5 " loop="" muted="" playsinline="" autoplay="true"
                                poster="images/project-home.webp">
                                <source src="images/2.mp4" type="video/mp4">
                            </video>
                        </div> -->
                        <div class="p-5  rounded-5 shadow mt-4 bg-white">
                            <h4>
                                Property Gallery
                            </h4>
                            <div class="mt-4">
                                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                    class="swiper mySwiper2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="https://renstate.kwst.net/site/light/images/all/10.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="https://renstate.kwst.net/site/light/images/all/11.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="https://renstate.kwst.net/site/light/images/all/12.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="https://renstate.kwst.net/site/light/images/all/13.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="https://renstate.kwst.net/site/light/images/all/14.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="https://renstate.kwst.net/site/light/images/all/15.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="https://renstate.kwst.net/site/light/images/all/16.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="https://renstate.kwst.net/site/light/images/all/17.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="https://renstate.kwst.net/site/light/images/all/18.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="https://renstate.kwst.net/site/light/images/all/19.jpg" />
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                                <div thumbsSlider="" class="swiper mySwiper thumb-swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="https://renstate.kwst.net/site/light/images/all/10.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="https://renstate.kwst.net/site/light/images/all/11.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="https://renstate.kwst.net/site/light/images/all/12.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="https://renstate.kwst.net/site/light/images/all/13.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="https://renstate.kwst.net/site/light/images/all/14.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="https://renstate.kwst.net/site/light/images/all/15.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="https://renstate.kwst.net/site/light/images/all/16.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="https://renstate.kwst.net/site/light/images/all/17.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="https://renstate.kwst.net/site/light/images/all/18.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="https://renstate.kwst.net/site/light/images/all/19.jpg" />
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>




                        <!-- <div class="propet-location p-5  rounded-5 shadow overflow-hidden mt-4 bg-white ">
                            <h4> Property Location </h4>
                            <div class="mt-4">
                                <iframe class="w-100 "
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448193.951046296!2d76.76356261822156!3d28.644287349748502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1723292793512!5m2!1sen!2sin"
                                    height="350" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>

                        </div> -->

                    </div>
                    <div class="col-lg-4">
                        <div class="bannerRightForm shadow position-sticky" style="top: 120px;">
                            <form id="bannerForm" method="post" action="email.php">
                                <h3 class=" newFromHeading fontWeight700 fontHeading text-center mb-4 ">Book a visit
                                </h3>
                                <div class="formItem">
                                    <div class="form-floating mb-2">
                                        <input type="hidden" name="hidden">
                                        <input type="text" required="" class="form-control" id="name" name="name"
                                            placeholder="name">
                                        <label for="name">Name</label>
                                    </div>
                                </div>
                                <div class="formItem">
                                    <div class="form-floating mb-2">
                                        <input type="email" required="" class="form-control" id="email" name="email"
                                            placeholder="email">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="formItem">
                                    <div class="form-floating mb-2">
                                        <input type="tel" required="" class="form-control" id="phone" name="phone"
                                            placeholder="phone">
                                        <label for="phone">Phone</label>
                                    </div>
                                </div>
                                <div class="formItem">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here"
                                            id="floatingTextarea2" style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Message</label>
                                    </div>
                                </div>


                                <div class="formItem mt-4">
                                    <button class="btnHeader" name="submit" type="submit" id="contactus-submit"
                                        data-submit="...Sending"><i id="icon" class=""></i> Send Now</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>

            </div>

        </section>




        <?php include 'include/footer.php'; ?>
    </div>
    <?php include 'include/footer-links.php'; ?>
    <script>

        var swiper = new Swiper(".mySwiper", {
            loop: true,
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            loop: true,
            spaceBetween: 0,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
    </script>

</body>

</html>