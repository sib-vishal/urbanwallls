<?php $page = 'home'; ?>
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



</head>

<body onload="createCaptcha();">
    <div class="wrapper">
        <?php include 'include/header.php'; ?>

        <section class="bgGrey py-4 px-md-4">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-7 ">
                        <div class="main_carosel_box position-relative">

                            <div class="swiper new_projects_carousel ">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="slide-box"><img
                                                src="https://assets.weforum.org/article/image/v2gQQH6Qq5EAJSemo1Yqie27aYBOHE4pSwA6jSkFHKg.jpg"
                                                alt=""></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slide-box"><img
                                                src="https://assets.weforum.org/article/image/v2gQQH6Qq5EAJSemo1Yqie27aYBOHE4pSwA6jSkFHKg.jpg"
                                                alt=""></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slide-box"><img
                                                src="https://assets.weforum.org/article/image/v2gQQH6Qq5EAJSemo1Yqie27aYBOHE4pSwA6jSkFHKg.jpg"
                                                alt=""></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slide-box"><img
                                                src="https://assets.weforum.org/article/image/v2gQQH6Qq5EAJSemo1Yqie27aYBOHE4pSwA6jSkFHKg.jpg"
                                                alt=""></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slide-box"><img
                                                src="https://assets.weforum.org/article/image/v2gQQH6Qq5EAJSemo1Yqie27aYBOHE4pSwA6jSkFHKg.jpg"
                                                alt=""></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slide-box"><img
                                                src="https://assets.weforum.org/article/image/v2gQQH6Qq5EAJSemo1Yqie27aYBOHE4pSwA6jSkFHKg.jpg"
                                                alt=""></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slide-box"><img
                                                src="https://assets.weforum.org/article/image/v2gQQH6Qq5EAJSemo1Yqie27aYBOHE4pSwA6jSkFHKg.jpg"
                                                alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="  position-absolute newtag  z-2  bg-white text_primary rounded">
                                New Project
                            </div>
                            <div class="swiper_btns">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div class="bottom-bar  position-absolute w-100 bottom-0 ">

                                <div class="download_btn  d-flex justify-content-between">
                                    <span class="px-3 py-2 bg-white text_primary rounded">
                                        <i class="fa-regular fa-image me-1"></i> 11 Photos
                                    </span>
                                    <a href="#" class="text_primary px-3 py-2 bg-white rounded">
                                        <i class="fa-solid fa-file-arrow-down me-1"></i> Download Brochure
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-4 mt-lg-0 ps-4 property_new_info">
                        <h4 class="sub_heading">
                            The Prestige City Hyderabad
                        </h4>
                        <p class="mt-3 text_primary project_location">
                            <i class="fa-solid fa-location-dot me-2 "></i> Nanakramguda, Hyderabad
                        </p>
                        <p class="project_price">
                            ₹ 10,500 Per Sq. Ft Onwards
                        </p>

                        <div class="new-project-info bg-white p-3 mt-4">
                            <div class="d-flex gap-2   align-items-center  ">
                                <div class="icon_box ">
                                    <img src="images/icons/skyline.png" alt="">
                                </div>
                                <div>
                                    <h5>
                                        Project Size
                                    </h5>
                                    <p class="mt-1">
                                        1001 units | 8.8Acres
                                    </p>
                                </div>
                            </div>
                            <hr class="border-black">
                            <div class="d-flex align-items-center gap-2 mt-3  ">
                                <div class="icon_box ">

                                    <img src="images/icons/plan (1).png" alt="">
                                </div>
                                <div>
                                    <h5>
                                        Configurations
                                    </h5>
                                    <p class="mt-1">
                                        2, 3, 4 BHK
                                        Flat
                                        1179 - 3400 Sq. Ft. (Saleable)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="new_project_inquiry_btn mt-4 d-flex gap-2">
                            <a class=" d-inline-block b" href="#"><i class="fa-brands fa-whatsapp me-2"></i>
                                What'sApp</a>
                            <button class="" data-bs-toggle="modal" data-bs-target="#formEnquire"> Get a Call
                                Back</button>

                        </div>
                        <p class="mt-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, praesentium eveniet
                            facilis deleni
                        </p>



                    </div>
                </div>
                <section>
                    <div class="containerFull position-relative">
                        <div class="row">
                            <div class="bg-white py-3  info-tabs_main ">

                                <ul class="bg-white info-tabs nav nav-tabs  d-flex overflow-auto flex-nowrap text-nowrap"
                                    id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="tabs_link active" id="overview-tab" href="#overview" role="tab"
                                            aria-controls="overview" aria-selected="true">Overview</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="tabs_link" id="regulatory-tab" href="#regulatory" role="tab"
                                            aria-controls="regulatory" aria-selected="false">Regulatory
                                            Information</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="tabs_link" id="floor-plans-tab" href="#floor-plans" role="tab"
                                            aria-controls="floor-plans" aria-selected="false">Floor Plans</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="tabs_link" id="price-list-tab" href="#price-list" role="tab"
                                            aria-controls="price-list" aria-selected="false">Price List</a>
                                    </li>
                                    <!--<li class="nav-item" role="presentation">-->
                                    <!--    <a class="tabs_link" id="data-intelligence-tab" href="#data-intelligence"-->
                                    <!--        role="tab" aria-controls="data-intelligence" aria-selected="false">Data-->
                                    <!--        Intelligence</a>-->
                                    <!--</li>-->
                                    <li class="nav-item" role="presentation">
                                        <a class="tabs_link" id="brochure-tab" href="#brochure" role="tab"
                                            aria-controls="brochure" aria-selected="false">Brochure</a>
                                    </li>
                                    <!--<li class="nav-item" role="presentation">-->
                                    <!--    <a class="tabs_link" id="video-tab" href="#video" role="tab"-->
                                    <!--        aria-controls="video" aria-selected="false">Video</a>-->
                                    <!--</li>-->
                                    <li class="nav-item" role="presentation">
                                        <a class="tabs_link" id="amenities-tab" href="#amenities" role="tab"
                                            aria-controls="amenities" aria-selected="false">Amenities</a>
                                    </li>
                                    <!--<li class="nav-item" role="presentation">-->
                                    <!--    <a class="tabs_link" id="specifications-tab" href="#specifications" role="tab"-->
                                    <!--        aria-controls="specifications" aria-selected="false">Specifications</a>-->
                                    <!--</li>-->
                                    <!--<li class="nav-item" role="presentation">-->
                                    <!--    <a class="tabs_link" id="commute-time-tab" href="#commute-time" role="tab"-->
                                    <!--        aria-controls="commute-time" aria-selected="false">Commute Time</a>-->
                                    <!--</li>-->
                                    <!--<li class="nav-item" role="presentation">-->
                                    <!--    <a class="tabs_link" id="location-tab" href="#location" role="tab"-->
                                    <!--        aria-controls="location" aria-selected="false">Location &-->
                                    <!--        Landmarks</a>-->
                                    <!--</li>-->
                                    <!--<li class="nav-item" role="presentation">-->
                                    <!--    <a class="tabs_link" id="rating-tab" href="#rating" role="tab"-->
                                    <!--        aria-controls="rating" aria-selected="false">Rating &-->
                                    <!--        Reviews</a>-->
                                    <!--</li>-->

                                </ul>
                            </div>
                            <!--Data Intelligence , Video, Specifications , Commute Time, Location and Landmarks, Rating-->
                            <div class="col-lg-12 info-tabs-content">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-panel   " id="overview" aria-labelledby="overview-tab">
                                        <h4 class="heading_underline">
                                            Overview
                                        </h4>
                                        <p class="mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil
                                            tempore eveniet ipsam consectetur deserunt in fugiat facilis totam nesciunt
                                            dignissimos, accusantium placeat. Dignissimos nostrum quia facilis
                                            necessitatibus vel mollitia fuga voluptatum modi perspiciatis ipsum tempora
                                            reiciendis temporibus sint saepe, quasi aperiam commodi error nam iusto
                                            alias illum recusandae quis earum? Placeat nam, laboriosam magni quo
                                            commodi, accusamus aliquam maxime nemo incidunt libero alias similique
                                            soluta, doloribus tenetur dolorum natus. Cumque provident consectetur quam,
                                            repudiandae commodi omnis numquam quibusdam in odit assumenda cum delectus
                                            et explicabo blanditiis, praesentium nisi perferendis sunt molestiae illum
                                            tempora quia corrupti suscipit nemo. Saepe, sint recusandae.</p>
                                    </div>
                                    <div class="tab-panel" id="regulatory" aria-labelledby="regulatory-tab">
                                        <h4 class="heading_underline">
                                            Regulatory Information
                                        </h4>
                                        <div class="px-4 py-3 border  mt-4">
                                            P02400000878
                                            <br />
                                            Sas I Tower

                                        </div>
                                        <p class="mt-3"> Urban Wallls RERA Reg. REA02400000010</p>
                                    </div>
                                    <div class="tab-panel" id="floor-plans" aria-labelledby="floor-plans-tab">
                                        <h4 class="heading_underline">
                                            Floor Plans & Layout
                                        </h4>
                                        <div class="border mt-4 px-3 py-4   rounded florplangrid">
                                            <a rel="floor-plan" href="images/asbl-landmark-apartment-3-bhk-1645sqft-20244912094959.jpg"
                                                data-fancybox="floor-plan">
                                                <img class="w-100" src="images/asbl-landmark-apartment-3-bhk-1645sqft-20244912094959.jpg"
                                                    alt="/">
                                            </a>
                                            <a rel="floor-plan" href="images/asbl-landmark-apartment-3-bhk-1645sqft-20244912094959.jpg"
                                                data-fancybox="floor-plan">
                                                <img class="w-100" src="images/asbl-landmark-apartment-3-bhk-1645sqft-20244912094959.jpg"
                                                    alt="/">
                                            </a>
                                            <a rel="floor-plan" href="images/asbl-landmark-apartment-3-bhk-1645sqft-20244912094959.jpg"
                                                data-fancybox="floor-plan">
                                                <img class="w-100" src="images/asbl-landmark-apartment-3-bhk-1645sqft-20244912094959.jpg"
                                                    alt="/">
                                            </a>
                                            <a rel="floor-plan" href="images/asbl-landmark-apartment-3-bhk-1645sqft-20244912094959.jpg"
                                                data-fancybox="floor-plan">
                                                <img class="w-100" src="images/asbl-landmark-apartment-3-bhk-1645sqft-20244912094959.jpg"
                                                    alt="/">
                                            </a>
                                            <!-- <h5>
                                                1000 Sq. Ft. Retail Shop
                                            </h5>

                                            <p class="mt-3">Content for Floor Plans...</p>
                                            <button class="btnTheme2 w-100 mt-4 ">
                                                Get a Call Back
                                            </button> -->

                                        </div>
                                    </div>
                                    <div class="tab-panel" id="price-list" aria-labelledby="price-list-tab">
                                        <h4 class="heading_underline">
                                            Price List
                                        </h4>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Unit Type</th>
                                                    <th>Area</th>
                                                    <th>Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Retail Shop</td>
                                                    <td>1000 Sq. Ft.</td>
                                                    <td>₹ 1.05 Cr</td>
                                                </tr>
                                                <tr>
                                                    <td>(Saleable Area)</td>
                                                    <td>1000 Sq. Ft.</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--<div class="tab-panel" id="data-intelligence"-->
                                    <!--    aria-labelledby="data-intelligence-tab">-->
                                    <!--    <h4 class="heading_underline">-->
                                    <!--        Price Insights-->
                                    <!--    </h4>-->
                                    <!--    <table>-->
                                    <!--        <thead>-->
                                    <!--            <tr>-->
                                    <!--                <th>Date</th>-->
                                    <!--                <th>Floor/Unit</th>-->
                                    <!--                <th>Tower/Wing</th>-->
                                    <!--                <th>Area</th>-->
                                    <!--                <th>Value</th>-->
                                    <!--                <th>Rate/Sq. Ft.</th>-->
                                    <!--                <th>Transaction Type</th>-->
                                    <!--            </tr>-->
                                    <!--        </thead>-->
                                    <!--        <tbody>-->
                                    <!--            <tr>-->
                                    <!--                <td>2024-08-31</td>-->
                                    <!--                <td>Floor 19, Unit 19079</td>-->
                                    <!--                <td>-</td>-->
                                    <!--                <td>1121 Sq. Ft.</td>-->
                                    <!--                <td>₹ 66 L</td>-->
                                    <!--                <td>₹ 5,887</td>-->
                                    <!--                <td>Sale</td>-->
                                    <!--            </tr>-->
                                    <!--            <tr>-->
                                    <!--                <td>2024-08-31</td>-->
                                    <!--                <td>Unit 20018A</td>-->
                                    <!--                <td>A1</td>-->
                                    <!--                <td>500 Sq. Ft.</td>-->
                                    <!--                <td>₹ 33 L</td>-->
                                    <!--                <td>₹ 6,600</td>-->
                                    <!--                <td>Sale</td>-->
                                    <!--            </tr>-->
                                    <!--            <tr>-->
                                    <!--                <td>2024-08-31</td>-->
                                    <!--                <td>Floor 25, Unit 25034</td>-->
                                    <!--                <td>-</td>-->
                                    <!--                <td>300 Sq. Ft.</td>-->
                                    <!--                <td>₹ 19.8 L</td>-->
                                    <!--                <td>₹ 6,600</td>-->
                                    <!--                <td>Sale</td>-->
                                    <!--            </tr>-->
                                    <!--            <tr>-->
                                    <!--                <td>2024-08-31</td>-->
                                    <!--                <td>Floor 12, Unit 12035</td>-->
                                    <!--                <td>A1</td>-->
                                    <!--                <td>1000 Sq. Ft.</td>-->
                                    <!--                <td>₹ 47.5 L</td>-->
                                    <!--                <td>₹ 4,750</td>-->
                                    <!--                <td>Sale</td>-->
                                    <!--            </tr>-->
                                    <!--            <tr>-->
                                    <!--                <td>2024-08-21</td>-->
                                    <!--                <td>Unit 23160A</td>-->
                                    <!--                <td>A1</td>-->
                                    <!--                <td>500 Sq. Ft.</td>-->
                                    <!--                <td>₹ 33 L</td>-->
                                    <!--                <td>₹ 6,600</td>-->
                                    <!--                <td>Sale</td>-->
                                    <!--            </tr>-->
                                    <!--            <tr>-->
                                    <!--                <td>2024-08-21</td>-->
                                    <!--                <td>Unit 23042</td>-->
                                    <!--                <td>A1</td>-->
                                    <!--                <td>300 Sq. Ft.</td>-->
                                    <!--                <td>₹ 19.8 L</td>-->
                                    <!--                <td>₹ 6,600</td>-->
                                    <!--                <td>Sale</td>-->
                                    <!--            </tr>-->
                                    <!--            <tr>-->
                                    <!--                <td>2024-08-21</td>-->
                                    <!--                <td>Unit 23051</td>-->
                                    <!--                <td>A1</td>-->
                                    <!--                <td>500 Sq. Ft.</td>-->
                                    <!--                <td>₹ 25.52 L</td>-->
                                    <!--                <td>₹ 5,104</td>-->
                                    <!--                <td>Sale</td>-->
                                    <!--            </tr>-->
                                    <!--            <tr>-->
                                    <!--                <td>2024-08-21</td>-->
                                    <!--                <td>Unit 23161A</td>-->
                                    <!--                <td>A1</td>-->
                                    <!--                <td>500 Sq. Ft.</td>-->
                                    <!--                <td>₹ 33 L</td>-->
                                    <!--                <td>₹ 6,600</td>-->
                                    <!--                <td>Sale</td>-->
                                    <!--            </tr>-->
                                    <!--            <tr>-->
                                    <!--                <td>2024-08-21</td>-->
                                    <!--                <td>Unit 25146</td>-->
                                    <!--                <td>-</td>-->
                                    <!--                <td>600 Sq. Ft.</td>-->
                                    <!--                <td>₹ 39.6 L</td>-->
                                    <!--                <td>₹ 6,600</td>-->
                                    <!--                <td>Sale</td>-->
                                    <!--            </tr>-->
                                    <!--            <tr>-->
                                    <!--                <td>2024-07-31</td>-->
                                    <!--                <td>Unit 25041</td>-->
                                    <!--                <td>A1</td>-->
                                    <!--                <td>300 Sq. Ft.</td>-->
                                    <!--                <td>₹ 19.8 L</td>-->
                                    <!--                <td>₹ 6,600</td>-->
                                    <!--                <td>Sale</td>-->
                                    <!--            </tr>-->
                                    <!--            <tr>-->
                                    <!--                <td>2024-07-31</td>-->
                                    <!--                <td>Unit 25045</td>-->
                                    <!--                <td>A1</td>-->
                                    <!--                <td>300 Sq. Ft.</td>-->
                                    <!--                <td>₹ 19.8 L</td>-->
                                    <!--                <td>₹ 6,600</td>-->
                                    <!--                <td>Sale</td>-->
                                    <!--            </tr>-->
                                    <!--            <tr>-->
                                    <!--                <td>2024-07-26</td>-->
                                    <!--                <td>Unit 4002</td>-->
                                    <!--                <td>A1</td>-->
                                    <!--                <td>1121 Sq. Ft.</td>-->
                                    <!--                <td>₹ 25 L</td>-->
                                    <!--                <td>₹ 2,230</td>-->
                                    <!--                <td>Sale</td>-->
                                    <!--            </tr>-->
                                    <!--        </tbody>-->
                                    <!--    </table>-->
                                    <!--</div>-->
                                    <div class="tab-panel" id="brochure" aria-labelledby="brochure-tab">
                                        <h4 class="heading_underline">
                                            Brochure
                                        </h4>
                                        <embed class="mt-4" src="images/dummy-pdf_2.pdf" width="100%" height="400"
                                            type="application/pdf">
                                    </div>
                                    <!--<div class="tab-panel" id="video" aria-labelledby="video-tab">-->
                                    <!--    <h4 class="heading_underline">-->
                                    <!--        Video-->
                                    <!--    </h4>-->
                                    <!--    <video class="autoplayVideo mt-4 w-100" controls="false">-->
                                    <!--        <source-->
                                    <!--            src="https://img.squareyards.com/rcheck/projectvideos/sas-itower-114357.mp4"-->
                                    <!--            type="video/mp4">-->
                                    <!--    </video>-->
                                    <!--</div>-->
                                    <div class="tab-panel" id="amenities" aria-labelledby="amenities-tab">
                                        <h4 class="heading_underline">
                                            Amenities
                                        </h4>
                                        <div class="overflow-auto">
                                        <table class="mt-4 bordered-table amenities">
                                            <thead>
                                                <tr>
                                                    <th>Key Amenities</th>
                                                    <th>Key Features</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Multi-level Car Parking</td>
                                                    <td>Grade A+ Office Spaces</td>
                                                </tr>
                                                <tr>
                                                    <td>Lavish Retail Mall</td>
                                                    <td>Premium 5-star Hotel</td>
                                                </tr>
                                                <tr>
                                                    <td>Co-working Spaces</td>
                                                    <td>Modern Town Hall</td>
                                                </tr>
                                                <tr>
                                                    <td>Wellness Centre</td>
                                                    <td>Strategic Location (Nanakramguda)</td>
                                                </tr>
                                                <tr>
                                                    <td>Office Spaces (10.3 acres)</td>
                                                    <td>High-level Security (24/7 CCTV surveillance)</td>
                                                </tr>
                                                <tr>
                                                    <td>Premium Lounge Areas</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>9 Screen Multiplex</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Meeting Zones</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Open Green Space</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Dining Options</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Spa and Health Centre</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Sky Garden</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Premium Retail Zone</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Ambient Terrace Bar</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>24/7 High-end Security</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        </div>

                                        <!--  -->
                                        <div class="overflow-auto">

                                            <table class="bordered-table aminities_table ">
                                                <thead>
                                                    <tr>
                                                        <th>Category</th>
                                                        <th>Amenities</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Sports</td>
                                                        <td>
                                                            <span><i class="fas fa-dumbbell"></i> Gymnasium</span>&nbsp;
                                                            <span><i class="fas fa-swimming-pool"></i> Swimming
                                                                Pool</span>&nbsp;
                                                            <span><i class="fas fa-square"></i> Squash Court</span>&nbsp;
                                                            <span><i class="fas fa-yoga"></i> Yoga Areas</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Convenience</td>
                                                        <td>
                                                            <span><i class="fas fa-plug"></i> Power Backup</span>&nbsp;
                                                            <span><i class="fas fa-utensils"></i> Restaurant</span>&nbsp;
                                                            <span><i class="fas fa-tint"></i> 24/7 Water Supply</span>&nbsp;
                                                            <span><i class="fas fa-arrow-up"></i> Lift</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Safety</td>
                                                        <td>
                                                            <span><i class="fas fa-shield-alt"></i> 24 x 7
                                                                Security</span>&nbsp;
                                                            <span><i class="fas fa-video"></i> CCTV / Video
                                                                Surveillance</span>&nbsp;
                                                            <span><i class="fas fa-fire-extinguisher"></i> Fire Fighting
                                                                Systems</span>&nbsp;
                                                            <span><i class="fas fa-exclamation-triangle"></i> Smoke/Heat
                                                                Sensors</span>&nbsp;
                                                            <span><i class="fas fa-phone-volume"></i> Intercom
                                                                Facility</span>&nbsp;
                                                            <span><i class="fas fa-ambulance"></i> Emergency Rescue /
                                                                Alarms</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Leisure</td>
                                                        <td>
                                                            <span><i class="fas fa-coffee"></i> Cafe / Coffee
                                                                Bar</span>&nbsp;
                                                            <span><i class="fas fa-theater-masks"></i>
                                                                Amphitheater</span>&nbsp;
                                                            <span><i class="fas fa-gamepad"></i> Indoor Games</span>&nbsp;
                                                            <span><i class="fas fa-chalkboard-teacher"></i> Conference
                                                                Room</span>&nbsp;
                                                            <span><i class="fas fa-hot-tub"></i> Jacuzzi</span>&nbsp;
                                                            <span><i class="fas fa-film"></i> Multiplex</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Environment</td>
                                                        <td>
                                                            <span><i class="fas fa-tree"></i> Normal Park / Central
                                                                Green</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--<div class="tab-panel" id="specifications" aria-labelledby="specifications-tab">-->
                                    <!--    <h4 class="heading_underline">-->
                                    <!--        Specifications-->
                                    <!--    </h4>-->

                                    <!--    <p class="mt-4">-->
                                    <!--        Structure-->
                                    <!--    </p>-->
                                    <!--</div>-->
                                    <!--<div class="tab-panel" id="commute-time" aria-labelledby="commute-time-tab">-->
                                    <!--    <p>Content for Commute Time...</p>-->
                                    <!--</div>-->
                                    <!--<div class="tab-panel" id="location" aria-labelledby="location-tab">-->

                                    <!--    <h4 class="heading_underline">-->
                                    <!--        Location-->
                                    <!--    </h4>-->
                                    <!--    <iframe class="mt-4"-->
                                    <!--        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d111994.33950524937!2d77.20468480000001!3d28.694937600000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfce26ec085ef%3A0x441e32f4fa5002fb!2sRed%20Fort!5e0!3m2!1sen!2sin!4v1727437134011!5m2!1sen!2sin"-->
                                    <!--        width="100%" height="400" style="border:0;" allowfullscreen=""-->
                                    <!--        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
                                    <!--</div>-->
                                    <!--<div class="tab-panel" id="rating" aria-labelledby="rating-tab">-->
                                    <!--    <h4 class="heading_underline">-->
                                    <!--        Rating & Reviews-->
                                    <!--    </h4>-->
                                    <!--    <div class="ratingFlexBox ">-->
                                    <!--        <div class="ratingFlex">-->

                                    <!--            <div class="ratingBox">-->

                                    <!--                <div class="ratingValue">-->
                                    <!--                    5.0-->
                                    <!--                </div>-->
                                    <!--                <div class="rating">-->

                                    <!--                   <i class="fa-solid fa-star text_primary"></i>-->


                                    <!--                   <i class="fa-solid fa-star text_primary"></i>-->


                                    <!--                   <i class="fa-solid fa-star text_primary"></i>-->


                                    <!--                   <i class="fa-solid fa-star text_primary"></i>-->


                                    <!--                   <i class="fa-solid fa-star text_primary"></i>-->
                                    <!--                </div>-->
                                    <!--                <strong class="strong">-->
                                    <!--                    1 Rating-->
                                    <!--                </strong>-->
                                    <!--            </div>-->
                                    <!--        </div>-->

                                    <!--        <div class="ratingFlex">-->
                                    <!--            <ul class="progressRating">-->
                                    <!--                <li>-->
                                    <!--                    <span class="ratingNumber">5 Star</span>-->
                                    <!--                    <span class="bar"><span style="width:100%"></span>-->
                                    <!--                    </span>-->
                                    <!--                    <span class="outOff">-->
                                    <!--                        1-->
                                    <!--                    </span>-->
                                    <!--                </li>-->
                                    <!--                <li>-->
                                    <!--                    <span class="ratingNumber">4 Star</span>-->
                                    <!--                    <span class="bar"><span style="width:0%"></span>-->
                                    <!--                    </span>-->
                                    <!--                    <span class="outOff">-->
                                    <!--                        0-->
                                    <!--                    </span>-->
                                    <!--                </li>-->
                                    <!--                <li>-->
                                    <!--                    <span class="ratingNumber">3 Star</span>-->
                                    <!--                    <span class="bar"><span style="width:0%"></span>-->
                                    <!--                    </span>-->
                                    <!--                    <span class="outOff">-->
                                    <!--                        0-->
                                    <!--                    </span>-->
                                    <!--                </li>-->
                                    <!--                <li>-->
                                    <!--                    <span class="ratingNumber">2 Star</span>-->
                                    <!--                    <span class="bar"><span style="width:0%"></span>-->
                                    <!--                    </span>-->
                                    <!--                    <span class="outOff">-->
                                    <!--                        0-->
                                    <!--                    </span>-->
                                    <!--                </li>-->
                                    <!--                <li>-->
                                    <!--                    <span class="ratingNumber">1 Star</span>-->
                                    <!--                    <span class="bar"><span style="width:0%"></span>-->
                                    <!--                    </span>-->
                                    <!--                    <span class="outOff">-->
                                    <!--                        0-->
                                    <!--                    </span>-->
                                    <!--                </li>-->
                                    <!--            </ul>-->
                                    <!--        </div>-->

                                    <!--    </div>-->

                                    <!--</div>-->

                                </div>
                            </div>
                            <!-- <div class="col-lg-4">
                                <div class="bg-white p-5 mt-4 position-sticky " style="top:190px">
                                    <h4 class="mb-4">Get a Quote</h4>
                                    <form method="post" action="email.php">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="formItem mb-0">
                                                    <div class="form-floating">
                                                        <input type="hidden" name="hidden">
                                                        <input type="text" required="" class="form-control" id="name"
                                                            name="name" placeholder="name">
                                                        <label for="name">Name</label>
                                                    </div>
                                                </div>
                                                <div class="formItem mt-3 mb-0">
                                                    <div class="form-floating">
                                                        <input type="tel" required="" class="form-control" id="phone"
                                                            name="phone" placeholder="phone">
                                                        <label for="phone">Phone</label>
                                                    </div>
                                                </div>
                                                <div class="formItem mt-3">
                                                    <div class="form-floating mb-2">
                                                        <input type="email" required="" class="form-control" id="email"
                                                            name="email" placeholder="email">
                                                        <label for="email">Email</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="formItem mt-3">
                                            <button id="cpatchaSubmitBtn2" type="submit" name="submit"
                                                class="btnColor rounded border-0 w-100">Send
                                                Request</button>
                                        </div>
                                    </form>
                                </div>


                            </div> -->
                        </div>

                    </div>
                </section>

            </div>
        </section>
        <?php include 'include/footer.php'; ?>
    </div>
    <?php include 'include/footer-links.php'; ?>
    <script>
        var swiper = new Swiper(".new_projects_carousel", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

</body>

</html>