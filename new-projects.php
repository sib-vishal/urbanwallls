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

    <script>
        $(function () {
            var mumbaiLocation = [
                "Colaba",
                "Marine Drive",
                "Churchgate",
                "Fort",
                "Bandra",
                "Juhu",
                "Andheri",
                "Malad",
                "Powai",
                "Ghatkopar",
                "Kurla",
                "Dadar",
                "Thane",
                "Mulund",
                "Kalyan",
                "Borivali",
                "Dahisar",
                "Lower Parel",
                "Worli",
                "Versova"
            ];
            $("#location").autocomplete({
                source: mumbaiLocation
            });
        });
    </script>

</head>

<body onload="createCaptcha();">
    <div class="wrapper">
        <?php include 'include/header.php'; ?>

        <section class="bgGrey">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="sidebarProprty bg-white p-3">
                            <div class="propertyHeader p-3 ">
                                <h3 class="fontHeading text_primary sub_heading">Search Property</h3>
                            </div>
                            <div class="property-enquiry-form">
                                <div class="formInline">
                                    <div class="main_filter">
                                        <input id="residential" type="radio" name="property-type" checked>
                                        <label for="residential">
                                            Residential
                                        </label>
                                        <input id="commercial" type="radio" name="property-type">
                                        <label for="commercial">
                                            Commercial
                                        </label>
                                    </div>

                                    <div class="locationFeild ui-widget mt-2">
                                        <i class="fa-solid fa-location-dot"></i>

                                        <!-- <div class="tagLocation">
                                            Mumbai
                                        </div> -->
                                        <input id="location" type="text" name="city" placeholder="Add location...">
                                    </div>
                                    <div class="propertyType1">
                                        <p class="fontHeading my-2 small_heading">Property Type</p>
                                        <!-- <p><i class="fa-solid fa-house"></i>Property Type</p>
                                        <i class="fa fa-chevron-down"></i> -->
                                        <div class="residential_property mt-2">
                                            <input type="checkbox" id="flat" name="property-type" value="flat">
                                            <label for="flat">Flat</label>

                                            <input type="checkbox" id="House" name="property-type" value="House">
                                            <label for="House">House/Villa</label>

                                        </div>
                                        <div class="commercial_property d-none mt-2">

                                            <input type="checkbox" id="office-space" name="property-type"
                                                value="office-space">
                                            <label for="office-space">Office Space</label>

                                            <input type="checkbox" id="shop-showroom" name="property-type"
                                                value="shop-showroom">
                                            <label for="shop-showroom">Shop/Showroom</label>
                                            <input type="checkbox" id="warehouse-godown" name="property-type"
                                                value="warehouse-godown">
                                            <label for="warehouse-godown">Warehouse/Godown</label>
                                        </div>
                                        <hr class="mt-3 mb-0">

                                    </div>
                                    <div class="budgetFeild">

                                        <p class="small_heading fontHeading"><i
                                                class="fa-solid fa-indian-rupee-sign"></i> Budget </p>
                                        <!-- <i class="fa fa-chevron-down"></i> -->
                                        <div class="min-budget mt-2">
                                            <p>Min. </p>
                                            <select name="" id="">
                                                <option value="" disabled selected> select</option>
                                                <option value="5000"> ₹ 5000</option>
                                                <option value="20000"> ₹ 20000</option>
                                                <option value="50000"> ₹ 50000</option>
                                                <option value="100000"> ₹ 100000</option>
                                                <option value="500000"> ₹ 500000</option>
                                            </select>
                                        </div>
                                        <div class="max-budget">
                                            <p>Max. </p>
                                            <select name="" id="">
                                                <option value="" disabled selected> select</option>
                                                <option value="5000"> ₹ 5000</option>
                                                <option value="20000"> ₹ 20000</option>
                                                <option value="50000"> ₹ 50000</option>
                                                <option value="100000"> ₹ 100000</option>
                                                <option value="500000"> ₹ 500000</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="formBtn w-100 mt-2">
                                        <button class="btnTheme btnfull w-100"><i class="fa fa-search"></i>
                                            Search</button>
                                    </div>
                                </div>
                            </div>

                            <div class="propertyHeader p-3 border-bottom">
                                <h3 class="fontHeading text_primary small_heading">Filter</h3>
                            </div>
                            <div class="filterItem mt-lg-4 mt-3 bhkfilter ">

                                <div class="filterHeader d-flex align-items-center justify-content-between">
                                    <h5 class="title fontHeading">No. of Bedroom</h5>
                                    <button class="iconBtn"><i class="bi bi-arrow-clockwise"></i> Reset</button>
                                </div>

                                <div class="listBhk mt-4">
                                    <div class="checkBox" id="resetInput">
                                        <ul>
                                            <li>
                                                <input type="checkbox" name="" id="1rk">
                                                <label for="1rk">1 RK</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="" id="1bhk">
                                                <label for="1bhk">1 BHK</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="" id="2bhk">
                                                <label for="2bhk">2 BHK</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="" id="3bhk">
                                                <label for="3bhk">3 BHK</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="" id="4bhk">
                                                <label for="4bhk">4 BHK</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="" id="4bhk+">
                                                <label for="4bhk+">4 BHK+</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                            <!-- <div class="filterItem mt-lg-4 mt-3 mb-4">
                                <div class="filterHeader mb-4 d-flex align-items-center justify-content-between">
                                    <h5 class="title fontHeading">Price Range </h5>
                                    <div class="price-input">
                                        <div class="field position-relative">
                                            <label>₹
                                                <input type="number" disabled class="input-min" value="2500">
                                            </label>
                                            <div class="separator">-</div>
                                            <label>₹
                                                <input type="number" disabled class="input-max" value="7500">
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="slider">
                                    <div class="progress"></div>
                                </div>
                                <div class="range-input">
                                    <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                                    <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
                                </div>
                            </div> -->
                            <div class="filterItem mt-lg-4 mt-3">
                                <div class="filterHeader d-flex align-items-center justify-content-between">
                                    <h5 class="title fontHeading">Availability</h5>
                                </div>
                                <div class=" mt-3">
                                    <div class="radioList">
                                        <ul>
                                            <li>
                                                <input type="radio" name="availability" id="immediate" />
                                                <label for="immediate">Immediate</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="availability" id="15days" />
                                                <label for="15days">Within 15 Days</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="availability" id="30days" />
                                                <label for="30days">Within 30 Days</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="availability" id="after30days" />
                                                <label for="after30days">After 30 Days</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="filterItem mt-lg-4 mt-3">
                                <div class="filterHeader d-flex align-items-center justify-content-between">
                                    <h5 class="title fontHeading">Lift</h5>
                                </div>
                                <div class=" mt-3">
                                    <div class="radioList">
                                        <ul>
                                            <li>
                                                <input type="radio" name="lift" id="lift-yes" />
                                                <label for="lift-yes">Yes</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="lift" id="lift-no" />
                                                <label for="lift-no">No</label>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="filterItem mt-lg-4 mt-3">
                                <div class="filterHeader d-flex align-items-center justify-content-between">
                                    <h5 class="title fontHeading">Parking</h5>
                                </div>
                                <div class=" mt-3">
                                    <div class="radioList">
                                        <ul>
                                            <li>
                                                <input type="radio" name="parking" id="parking-yes" />
                                                <label for="parking-yes">Yes</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="parking" id="parking-no" />
                                                <label for="parking-no">No</label>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="filterItem mt-lg-4 mt-3">
                                <div class="filterHeader d-flex align-items-center justify-content-between">
                                    <h5 class="title fontHeading">Furnished</h5>
                                </div>
                                <div class=" mt-3">
                                    <div class="radioList">
                                        <ul>
                                            <li>
                                                <input type="radio" name="furnished" id="furnished-furnished" />
                                                <label for="furnished-furnished">Furnished</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="furnished" id="furnished-semifurnished" />
                                                <label for="furnished-semifurnished">Semifurnished</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="furnished" id="furnished-unfurnished " />
                                                <label for="furnished-unfurnished ">Unfurnished</label>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="filterItem mt-lg-4 mt-3">
                                <div class="filterHeader d-flex align-items-center justify-content-between">
                                    <h5 class="title fontHeading">Preferred Tenants</h5>
                                </div>
                                <div class="listBhk mt-3">
                                    <div class="checkListIcon">
                                        <ul>
                                            <li>
                                                <input type="checkbox" name="" id="family">
                                                <label for="family">Family</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="" id="company">
                                                <label for="company">Company</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="" id="male">
                                                <label for="male">Bachelor Male</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="" id="female">
                                                <label for="female">Bachelor Female</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="filterItem mt-lg-4 mt-3">
                                <div class="filterHeader d-flex align-items-center justify-content-between">
                                    <h5 class="title fontHeading">Property Type</h5>
                                </div>
                                <div class="listBhk mt-3">
                                    <div class="checkListIcon">
                                        <ul>
                                            <li>
                                                <input type="checkbox" name="" id="apartment">
                                                <label for="apartment">Apartment</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="" id="villa">
                                                <label for="villa">Independent House/Villa</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="" id="gated">
                                                <label for="gated">Gated Community Villa</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="rightProperty">

                            <div class="propertItem">
                                <div class="new_projects_list" data-url="url">
                                    <div class="row">
                                        <div class="col-lg-5 ">
                                            <div class="propertyImg2">
                                                <img class="" src="images/property/property.jpg">
                                            </div>
                                        </div>
                                        <div class="col-lg-7 ">
                                            <h4 class="sub_heading fontHeading fontWeight500 text-black">Studio
                                                Apartment for
                                                Rent in Munirka Mumbai</h4>
                                            <h5 class="mt-3 text_primary">
                                                ₹ 87.58 Lac - 2.70 Cr

                                            </h5>
                                            <div class="new-project-info">
                                                <div class="d-flex gap-2 mt-3  align-items-center  ">
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
                                            <div class="row mt-4">
                                                <a href="whatsapp" target="_blank"
                                                    class="col share-whatsapp btnTheme2 text-center me-2"><i
                                                        class="fa-brands fa-whatsapp title me-2"></i> What'sApp</a>
                                                <button class=" callback col btnColor border text-center "
                                                    data-bs-toggle="modal" data-bs-target="#formEnquire"> <i
                                                        class="fa-solid fa-phone title me-2"></i>Get a Call
                                                    Back</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="propertItem">
                                <div class="new_projects_list" data-url="url">
                                    <div class="row">
                                        <div class="col-lg-5 ">
                                            <div class="propertyImg2">
                                                <img class="" src="images/property/property.jpg">
                                            </div>
                                        </div>
                                        <div class="col-lg-7 ">
                                            <h4 class="sub_heading fontHeading fontWeight500 text-black">Studio
                                                Apartment for
                                                Rent in Munirka Mumbai</h4>
                                            <h5 class="mt-3 text_primary">
                                                ₹ 87.58 Lac - 2.70 Cr

                                            </h5>
                                            <div class="new-project-info">
                                                <div class="d-flex gap-2 mt-3  align-items-center  ">
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
                                            <div class="row mt-4">
                                                <a href="whatsapp" target="_blank"
                                                    class="col share-whatsapp btnTheme2 text-center me-2"><i
                                                        class="fa-brands fa-whatsapp title me-2"></i> What'sApp</a>
                                                <button class=" callback col btnColor border text-center "
                                                    data-bs-toggle="modal" data-bs-target="#formEnquire"> <i
                                                        class="fa-solid fa-phone title me-2"></i>Get a Call
                                                    Back</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="propertItem">
                                <div class="new_projects_list" data-url="url">
                                    <div class="row">
                                        <div class="col-lg-5 ">
                                            <div class="propertyImg2">
                                                <img class="" src="images/property/property.jpg">
                                            </div>
                                        </div>
                                        <div class="col-lg-7 ">
                                            <h4 class="sub_heading fontHeading fontWeight500 text-black">Studio
                                                Apartment for
                                                Rent in Munirka Mumbai</h4>
                                            <h5 class="mt-3 text_primary">
                                                ₹ 87.58 Lac - 2.70 Cr

                                            </h5>
                                            <div class="new-project-info">
                                                <div class="d-flex gap-2 mt-3  align-items-center  ">
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
                                            <div class="row mt-4">
                                                <a href="whatsapp" target="_blank"
                                                    class="col share-whatsapp btnTheme2 text-center me-2"><i
                                                        class="fa-brands fa-whatsapp title me-2"></i> What'sApp</a>
                                                <button class=" callback col btnColor border text-center "
                                                    data-bs-toggle="modal" data-bs-target="#formEnquire"> <i
                                                        class="fa-solid fa-phone title me-2"></i>Get a Call
                                                    Back</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'include/footer.php'; ?>
    </div>
    <?php include 'include/footer-links.php'; ?>

</body>

</html>