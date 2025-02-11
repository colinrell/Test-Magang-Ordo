<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WEB PT ORDO</title>

    <!--ICON WEB-->
    <link rel="icon" href="{{ asset('images/logo2.png') }}">
    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/scss/global.scss', 'resources/scss/nav.scss', 'resources/scss/head.scss', 'resources/scss/about.scss', 'resources/scss/company.scss', 'resources/scss/event-sum.scss', 'resources/scss/sponsor.scss', 'resources/scss/support.scss', 'resources/js/app.js'])

</head>

<body>
    <!--navbar start-->
    <nav id="navbar-container">
        <div class="navbar-logo" id="logo-container">
            <img src="{{ asset('images/logo.png') }}" alt="logo" width="165px" height="50px">
        </div>
        <div class="navbar-links" id="navbar-menu">
            <a href="about" class="nav-link">About Green Haven</a>
            <a href="details" class="nav-link">Event Details</a>
            <a href="sponsors" class="nav-link">Our Sponsors</a>
            <a href="leaderboard" class="nav-link">Leaderboard</a>
        </div>
        <div class="navbar-extra" id="extra-container">
            <button id="plant-button">Plant a Mangrove</button>
        </div>
    </nav>
    

    <!--navbar start-->

    <!--header start-->
    <header id="header-container">
        <div class="left-column-section" id="left-column">
            <div class="project-info">
                <button class="green-haven-btn">Green Haven Project - Mangrove</button>
                <h1 class="main-heading">Green Horizons Await, Join Us in Planting 10,000 Mangroves!</h1>
                <div class="card-container">
                    <div class="info-card">
                        <div class="logo-container">
                            <img src="{{ asset('images/logo2.png') }}" alt="logo" width="40px">
                        </div>
                        <div class="mangrove-info">
                            <h1 class="current-count">5,690<span class="count-info">/ 10,000 Pohon</span></h1>
                        </div>
                        <div class="action-btn">
                            <button class="support-btn">Support Our Mission</button>
                            <img src="{{ asset('images/panah-kanan.png') }}" alt="arrow" width="18px" class="panah-icon">
                        </div>
                    </div>
                    <div class="progress-bar">
                        <div class="progress"></div>
                    </div>
                </div>
            </div>
            <div class="mangrove-img-section">
                <img src="{{ asset('images/mangrove.png') }}" alt="mangrove" width="720px" class="mangrove-img">
            </div>
        </div>
    
        <div class="right-column-section" id="right-column">
            <div class="leaderboard-info">
                <h1 class="leaderboard-title">Leaderboard</h1>
                <p class="most-donation">Most Donation</p>
                <p class="most-recent">Most Recent</p>
                <br><br>
                <div class="donation-entry">
                    <div class="rank">
                        <p>01</p>
                    </div>
                    <div class="donor-icon">
                        <img src="{{ asset('images/img-sumbang.png') }}" alt="photo" width="60px">
                    </div>
                    <div class="donor-details">
                        <p class="donor-name">Mangrove Maven</p>
                        <p class="donor">Budi Hartanto</p>
                    </div>
                    <div class="donation-info">
                        <div class="donation-logo">
                            <img src="{{ asset('images/logo2.png') }}" alt="logo">
                        </div>
                        <div class="donation-amount">
                            <h1>350 <span class="tree-small">Pohon</span></h1>
                        </div>
                    </div>
                </div>
    
                <div class="donation-entry">
                    <div class="rank">
                        <p>02</p>
                    </div>
                    <div class="donor-icon">
                        <img src="{{ asset('images/img-sumbang.png') }}" alt="photo" width="60px">
                    </div>
                    <div class="donor-details">
                        <p class="donor-name">Mangrove Maven</p>
                        <p class="donor">Dewi Sartika</p>
                    </div>
                    <div class="donation-info">
                        <div class="donation-logo">
                            <img src="{{ asset('images/logo2.png') }}" alt="logo">
                        </div>
                        <div class="donation-amount">
                            <h1>330 <span class="tree-small">Pohon</span></h1>
                        </div>
                    </div>
                </div>
    
                <div class="donation-entry">
                    <div class="rank">
                        <p>03</p>
                    </div>
                    <div class="donor-icon">
                        <img src="{{ asset('images/img-sumbang.png') }}" alt="photo" width="60px">
                    </div>
                    <div class="donor-details">
                        <p class="donor-name">Mangrove Maven</p>
                        <p class="donor">Eko Wahyudi</p>
                    </div>
                    <div class="donation-info">
                        <div class="donation-logo">
                            <img src="{{ asset('images/logo2.png') }}" alt="logo">
                        </div>
                        <div class="donation-amount">
                            <h1>200 <span class="tree-small">Pohon</span></h1>
                        </div>
                    </div>
                </div>
    
                <div class="donation-entry">
                    <div class="rank rank-4">
                        <p>04</p>
                    </div>
                    <div class="donor-icon">
                        <img src="{{ asset('images/logo7.png') }}" alt="photo" width="60px">
                    </div>
                    <div class="donor-details">
                        <p class="donor-name">Guardian of the Grove</p>
                        <p class="donor">Rina Kartika</p>
                    </div>
                    <div class="donation-info">
                        <div class="donation-logo">
                            <img src="{{ asset('images/logo2.png') }}" alt="logo">
                        </div>
                        <div class="donation-amount">
                            <h1>190 <span class="tree-small">Pohon</span></h1>
                        </div>
                    </div>
                </div>
    
                <div class="donation-entry">
                    <div class="rank rank-5">
                        <p>05</p>
                    </div>
                    <div class="donor-icon">
                        <img src="{{ asset('images/logo7.png') }}" alt="photo" width="60px">
                    </div>
                    <div class="donor-details">
                        <p class="donor-name">Guardian of the Grove</p>
                        <p class="donor">Agus Prasetyo</p>
                    </div>
                    <div class="donation-info">
                        <div class="donation-logo">
                            <img src="{{ asset('images/logo2.png') }}" alt="logo">
                        </div>
                        <div class="donation-amount">
                            <h1>140 <span class="tree-small">Pohon</span></h1>
                        </div>
                    </div>
                </div>
    
                <div class="donation-entry">
                    <div class="rank rank-6">
                        <p>06</p>
                    </div>
                    <div class="donor-icon">
                        <img src="{{ asset('images/logo6.png') }}" alt="photo" width="60px">
                    </div>
                    <div class="donor-details">
                        <p class="donor-name">Mangrove Master</p>
                        <p class="donor">Irfan Setiawan</p>
                    </div>
                    <div class="donation-info">
                        <div class="donation-logo">
                            <img src="{{ asset('images/logo2.png') }}" alt="logo">
                        </div>
                        <div class="donation-amount">
                            <h1>80 <span class="tree-small">Pohon</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!--header end-->

    <!--perusahaan start-->
    <div class="corporate-logos">
        <img src="{{ asset('images/jala.png') }}" alt="jala" class="logo-img">
        <img src="{{ asset('images/efishery.png') }}" alt="efishery" class="logo-img">
        <img src="{{ asset('images/azarine.png') }}" alt="azarine" class="logo-img">
        <img src="{{ asset('images/kompas.png') }}" alt="kompas" class="logo-img">
        <img src="{{ asset('images/tribun.png') }}" alt="tribunnews" class="logo-img">
        <img src="{{ asset('images/jawapos.png') }}" alt="jawapos" class="logo-img">
    </div>
    
    <br>
    <br>
    <!--perusahaan end-->

    <!--about start-->
    <div class="green-haven-details">
        <div class="logos-section">
            <img src="{{ asset('images/jci.png') }}" alt="jci" width="120px">
            <img src="{{ asset('images/ghp.png') }}" alt="ghp" width="120px">
        </div>
        <div class="heading-title">
            About Green Haven Project
        </div>
        <div class="description-section">
            <p class="description-text">The Green Haven Project - Mangrove aims to restore coastal ecosystems and raise
                awareness by planting mangroves and educating participants about the importance of these areas. This
                six-hour event will involve JCI members, local farmers, and students, focusing on combating beach
                erosion and promoting ESG values.</p>
        </div>
    
        <div class="comparison-section">
            <div class="before-image">
                <div class="image-text">
                    <img src="{{ asset('images/before.png') }}" alt="before-img" width="500px">
                    <br>
                    <p>Before mangroves were planted</p>
                </div>
            </div>
            <div class="after-image">
                <div class="image-text">
                    <img src="{{ asset('images/after.png') }}" alt="after-img" width="500px">
                    <br>
                    <p>After mangroves were planted</p>
                </div>
            </div>
            <div class="change-indicator">
                <img src="{{ asset('images/arrow.png') }}" alt="arrow">
                <p class="change-text">TRANSFORMATION</p>
            </div>
        </div>
    </div>
    
    <!--about end-->

    <!--summary start-->
    <div class="event-summary-container">

        <div class="event-info">
            <div class="event-header">
                Event Summary
            </div>
            <div class="event-description">
                <p>We give you a brief overview of the event to give you a glimpse of what we're doing</p>
                <p>in the Green Haven Project, download the detailed PDF to see how you can get involved</p>
            </div>
            <br>
            <br>
        </div>
        <div class="event-card">
            <div class="left-section">
                <div class="schedule">
                    <h1 class="event-date">26/04/2024</h1>
                    <h1 class="event-time">08:00 - 11:00 WIB</h1>
                </div>
                <p class="event-details">Join the impactful journey of planting mangroves,
                    where you'll learn, collaborate with locals, earn recognition,
                    and share your story through media coverage</p>
                <br>
                <div class="event-btn">
                    <img src="{{ asset('icon1.png') }}" alt="icon-btn">
                    <p class="button-text">View Event Details</p>
                </div>
            </div>
            <div class="right-section">
                <div class="image-box">
                    <img src="{{ asset('images/img-event.png') }}" alt="img-event">
<<<<<<< HEAD
                    <div class="arrow-buttons">
                        <p class="left-arrow">
                            <img src="{{ asset('images/panah-kiri.png') }}" alt="arrow-kiri">
                        </p>
                        <p class="right-arrow"><img src="{{ asset('images/panah-kanan.png') }}" alt="arrow-right"
=======
                    <div class="arrow">
                        <p class="arrow-left">
                            <img src="{{ asset('images/arrow-left.png') }}" alt="arrow-left">
                        </p>
                        <p class="arrow-right"><img src="{{ asset('images/arrow-right.png') }}" alt="arrow-right"
>>>>>>> 895eeba868910fd22542eb40ef599558fe2d3edf
                                width="27px"></p>
                    </div>
                </div>
            </div>
        </div>
    
        <br>
        <br>
    
        <div class="step-by-step-guide">
    
            <div class="step-item">
                <div class="progress-line"></div>
                <p class="step-number">01</p>
                <p class="step-description">Introducing the beauty <br> of mangroves on a journey to the planting site.</p>
            </div>
            <div class="step-item">
                <div class="progress-line gray"></div>
                <p class="step-number">02</p>
                <p class="step-description">Working together with <br>local farmers while <br> planting each mangrove</p>
            </div>
            <div class="step-item">
                <div class="progress-line gray"></div>
                <p class="step-number">03</p>
                <p class="step-description">Exploring the wonders of mangrove ecotourism, an educational adventure.</p>
            </div>
            <div class="step-item">
                <div class="progress-line gray"></div>
                <p class="step-number">04</p>
                <p class="step-description">Receive a plaque & badge, a mark of honor for every tree you plant.</p>
            </div>
            <div class="step-item">
                <div class="progress-line gray"></div>
                <p class="step-number">05</p>
                <p class="step-description">Coverage & documentation by news media, share your story of change!</p>
            </div>
        </div>
    </div>
    
    <!--summary end-->

    <!--sponsors start-->
    <div class="sponsorship-container">
        <div class="sponsorship-header">
            Sponsorship Packages
        </div>
        <div class="sponsorship-description">
            <p>Our sponsorship package offers branding, promotional opportunities, and visibility at our event, ideal for enhancing company presence and community engagement.</p>
        </div>
        <br>
        <br>
        <div class="individual-sponsorship">
            <p>Personal Sponsorship Package</p>
        </div>
        <br>
<<<<<<< HEAD
        <div class="sponsorship-table-container-1">
            <table class="sponsorship-table-1">
                <tr>
                    <th class="membership-tier">Membership Tier</th>
=======
        <div class="table1">
            <table class="table-sponsor">

                <tr>
                    <th class="membership">Membership Tier</th>
>>>>>>> 895eeba868910fd22542eb40ef599558fe2d3edf
                    <th>Min. Seeds</th>
                    <th>Min. Buy</th>
                    <th>Benefits</th>
                    <th>Donors</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td class="tier-details">
                        <img src="{{ asset('images/logo3.png') }}" alt="icon" width="27px">
                        <p class="tier-name">Seedling Scout</p>
                    </td>
                    <td>5 Seeds</td>
                    <td>IDR 75K</td>
                    <td>Badge</td>
                    <td>4,900 Donors</td>
                    <td>
<<<<<<< HEAD
                        <button class="action-btn">Support Our Mission <img src="{{ asset('images/arrow-right.png') }}" alt=""></button>
=======
                        5 Seeds
                    </td>
                    <td>
                        IDR 75K
                    </td>
                    <td>
                        Badge
                    </td>
                    <td>
                        4,900 Donors
                    </td>
                    <td>
                        <button class="btn-action">Support Our Mission <img
                                src="{{ asset('images/arrow-right.png') }}" alt=""></button>
>>>>>>> 895eeba868910fd22542eb40ef599558fe2d3edf
                    </td>
                </tr>
                <tr>
                    <td class="tier-details">
                        <img src="{{ asset('images/logo4.png') }}" alt="icon" width="27px">
                        <p class="tier-name">Sapling Savior</p>
                    </td>
                    <td>10 Seeds</td>
                    <td>IDR 150K</td>
                    <td>Badge + Pin</td>
                    <td>4,300 Donors</td>
                    <td>
<<<<<<< HEAD
                        <button class="action-btn">Support Our Mission <img src="{{ asset('images/arrow-right.png') }}" alt=""></button>
=======
                        10 Seeds
                    </td>
                    <td>
                        IDR 150K
                    </td>
                    <td>
                        Badge + Pin
                    </td>
                    <td>
                        4,300 Donors
                    </td>
                    <td>
                        <button class="btn-action">Support Our Mission <img
                                src="{{ asset('images/arrow-right.png') }}" alt=""></button>
>>>>>>> 895eeba868910fd22542eb40ef599558fe2d3edf
                    </td>
                </tr>
                <tr>
                    <td class="tier-details">
                        <img src="{{ asset('images/logo5.png') }}" alt="icon" width="27px">
                        <p class="tier-name">Tree Titan</p>
                    </td>
                    <td>20 Seeds</td>
                    <td>IDR 300K</td>
                    <td>Badge + Pin</td>
                    <td>15,000 Donors</td>
                    <td>
<<<<<<< HEAD
                        <button class="action-btn">Support Our Mission <img src="{{ asset('images/arrow-right.png') }}" alt=""></button>
=======
                        20 Seeds
                    </td>
                    <td>
                        IDR 300K
                    </td>
                    <td>
                        Badge + Pin
                    </td>
                    <td>
                        15,000 Donors
                    </td>
                    <td>
                        <button class="btn-action">Support Our Mission <img
                                src="{{ asset('images/arrow-right.png') }}" alt=""></button>
>>>>>>> 895eeba868910fd22542eb40ef599558fe2d3edf
                    </td>
                </tr>
                <tr>
                    <td class="tier-details">
                        <img src="{{ asset('images/logo6.png') }}" alt="icon" width="27px">
                        <p class="tier-name">Mangrove Master</p>
                    </td>
                    <td>50 Seeds</td>
                    <td>IDR 750K</td>
                    <td>Badge + Pin + Bag</td>
                    <td>5,000 Donors</td>
                    <td>
<<<<<<< HEAD
                        <button class="action-btn">Support Our Mission <img src="{{ asset('images/arrow-right.png') }}" alt=""></button>
=======
                        50 Seeds
                    </td>
                    <td>
                        IDR 750K
                    </td>
                    <td>
                        Badge + Pin + Bag
                    </td>
                    <td>
                        5,000 Donors
                    </td>
                    <td>
                        <button class="btn-action">Support Our Mission <img
                                src="{{ asset('images/arrow-right.png') }}" alt=""></button>
>>>>>>> 895eeba868910fd22542eb40ef599558fe2d3edf
                    </td>
                </tr>
                <tr>
                    <td class="tier-details">
                        <img src="{{ asset('images/logo7.png') }}" alt="icon" width="27px">
                        <p class="tier-name">Guardian of the Grove</p>
                    </td>
                    <td>100 Seeds</td>
                    <td>IDR 1,500K</td>
                    <td>Badge + Pin + Bag</td>
                    <td>300 Donors</td>
                    <td>
<<<<<<< HEAD
                        <button class="action-btn">Support Our Mission <img src="{{ asset('images/arrow-right.png') }}" alt=""></button>
                    </td>
                </tr>
                <tr>
                    <td class="tier-details">
                        <img src="{{ asset('images/logo8.png') }}" alt="icon" width="27px">
                        <p class="tier-name">Mangrove Maven</p>
                    </td>
                    <td>200 Seeds</td>
                    <td>IDR 3,000K</td>
                    <td>Badge + Pin + Bag</td>
                    <td>10 Donors</td>
                    <td>
                        <button class="action-btn">Support Our Mission <img src="{{ asset('images/arrow-right.png') }}" alt=""></button>
                    </td>
                </tr>
            </table>
        </div>
        <br>
        <br>
        <div class="divider"></div>
        <br>
        <br>
        <div class="corporate-sponsorship">
            <div class="corporate-sponsorship-title">
                <p>Corporate Sponsorship Package</p>
            </div>
        </div>
        <br>
        <div class="sponsorship-table-container-2">
            <table class="sponsorship-table-2">
                <tr>
                    <th>Benefits</th>
                    <th>Eco Trailblazers</th>
                    <th>Green Innovators</th>
                    <th>Eco Vanguard</th>
                </tr>
                <tr>
                    <td class="benefit-column">
                        <p class="benefit-text">Price</p>
                    </td>
                    <td>15 Million IDR</td>
                    <td>30 Million IDR</td>
                    <td>45 Million IDR</td>
                </tr>
                <tr>
                    <td class="benefit-column">
                        <p class="benefit-text">CO2 Sequestration</p>
                    </td>
                    <td>22.5 ton/year</td>
                    <td>45 ton/year</td>
                    <td>67.5 ton/year</td>
                </tr>
                <tr>
                    <td class="benefit-column">
                        <p class="benefit-text">Number of Trees</p>
                    </td>
                    <td>1000 Trees</td>
                    <td>2000 Trees</td>
                    <td>3000 Trees</td>
                </tr>
                <tr>
                    <td>
                        <p class="benefit-text">Logo on JCI Banner</p>
                    </td>
                    <td><img src="{{ asset('images/circle.png') }}" alt="centang"></td>
                    <td><div class="circle"><img src="{{ asset('images/circle.png') }}" alt="centang"></div></td>
                    <td><img src="{{ asset('images/circle.png') }}" alt="centang"></td>
                </tr>
                <tr>
                    <td>
                        <p class="benefit-text">Logo on Communal Stainless Plate</p>
                    </td>
                    <td><img src="{{ asset('images/circle.png') }}" alt="centang"></td>
                    <td><div class="circle"><img src="{{ asset('images/circle.png') }}" alt="centang"></div></td>
                    <td><img src="{{ asset('images/circle.png') }}" alt="centang"></td>
                </tr>
                <tr>
                    <td>
                        <p class="benefit-text">Considered as Main Sponsor</p>
                    </td>
                    <td><img src="{{ asset('images/circle.png') }}" alt="centang"></td>
                    <td><div class="circle"><img src="{{ asset('images/circle.png') }}" alt="centang"></div></td>
                    <td><img src="{{ asset('images/circle.png') }}" alt="centang"></td>
                </tr>
                <tr>
                    <td>
                        <p class="benefit-text">Dedicated Stainless Plate</p>
                    </td>
                    <td></td>
                    <td><div class="circle"><img src="{{ asset('images/circle.png') }}" alt="centang"></div></td>
                    <td><img src="{{ asset('images/circle.png') }}" alt="centang"></td>
                </tr>
                <tr>
                    <td>
                        <p class="benefit-text">Report Update on Planted Trees</p>
                    </td>
                    <td></td>
                    <td><div class="circle"><img src="{{ asset('images/circle.png') }}" alt="centang"></div></td>
                    <td><img src="{{ asset('images/circle.png') }}" alt="centang"></td>
                </tr>
                <tr>
                    <td>
                        <p class="benefit-text">Logo on Event Clothings</p>
                    </td>
                    <td></td>
                    <td></td>
                    <td><img src="{{ asset('images/circle.png') }}" alt="centang"></td>
                </tr>
                <tr class="donation-row">
                    <td>
                        <p class="benefit-text">Make a Donation</p>
                    </td>
                    <td><button class="donation-btn">Support Our Mission ></button></td>
                    <td><button class="donation-btn">Support Our Mission ></button></td>
                    <td><button class="donation-btn">Support Our Mission ></button></td>
                </tr>
            </table>
        </div>
        <br>
        <br>
        <br>
    </div>
    
    
=======
                        100 Seeds
                    </td>
                    <td>
                        IDR 1,500K
                    </td>
                    <td>
                        Badge + Pin + Bag
                    </td>
                    <td>
                        300 Donors
                    </td>
                    <td>
                        <button class="btn-action">Support Our Mission <img
                                src="{{ asset('images/arrow-right.png') }}" alt=""></button>
                    </td>
                </tr>
                <div>
                    <tr>
                        <td class="column-table">
                            <img src="{{ asset('images/logo8.png') }}" alt="icon" width="27px">
                            <p class="member">Mangrove Maven</p>
                        </td>
                        <td>
                            200 Seeds
                        </td>
                        <td>
                            IDR 3,000K
                        </td>
                        <td>
                            Badge + Pin + Bag
                        </td>
                        <td>
                            10 Donors
                        </td>
                        <td>
                            <button class="btn-action">Support Our Mission <img
                                    src="{{ asset('images/arrow-right.png') }}" alt=""></button>
                        </td>
                    </tr>
                </div>
        </div>
        </table>
    </div>
    <br>
    <br>
    <div class="garis"></div>
    <br>
    <br>

    <div class="corporate">
        <div class="corporate-sponsorship">
            <p>Corporate Sponsorship Package</p>
        </div>
    </div>
    <br>
    <div class="table2">
        <table class="table-sponsor2">
            <tr>
                <th>Benefits</th>
                <th>Eco Trailblazers</th>
                <th>Green Innovators</th>
                <th>Eco Vanguard</th>
            </tr>
            <tr>
                <td class="column-table">
                    <p class="benefits">Price</p>
                </td>
                <td>
                    15 Million IDR
                </td>
                <td>
                    30 Million IDR
                </td>
                <td>
                    45 Million IDR
                </td>
            </tr>
            <tr>
                <td class="column-table">
                    <p class="benefits">CO2 Sequestration</p>
                </td>
                <td>
                    22,5 ton/year
                </td>
                <td>
                    45 ton/year
                </td>
                <td>
                    67,5 ton/year
                </td>
            </tr>
            <tr>
                <td class="column-table">
                    <p class="benefits">Number of Tress</p>
                </td>
                <td>
                    1000 Trees
                </td>
                <td>
                    2000 Trees
                </td>
                <td>
                    3000 Trees
                </td>
            </tr>
            <tr>
                <td>
                    <p class="benefits">Logo on JCI Banner</p>
                </td>
                <td>
                    <img src="{{ asset('images/circle.png') }}" alt="centang">
                </td>
                <td>
                    <div class="circle">
                        <img src="{{ asset('images/circle.png') }}" alt="centang">
                    </div>
                </td>
                <td>
                    <img src="{{ asset('images/circle.png') }}" alt="centang">
                </td>
            </tr>
            <tr>
                <td>
                    <p class="benefits">Logo on Communal Stainless Plate</p>
                </td>
                <td>
                    <img src="{{ asset('images/circle.png') }}" alt="centang">
                </td>
                <td>
                    <div class="circle">
                        <img src="{{ asset('images/circle.png') }}" alt="centang">
                    </div>
                </td>
                <td>
                    <img src="{{ asset('images/circle.png') }}" alt="centang">
                </td>
            </tr>
            <tr>
                <td>
                    <p class="benefits">Considered as Main Sponsor</p>
                </td>
                <td>
                    <img src="{{ asset('images/circle.png') }}" alt="centang">
                </td>
                <td>
                    <div class="circle">
                        <img src="{{ asset('images/circle.png') }}" alt="centang">
                    </div>
                </td>
                <td>
                    <img src="{{ asset('images/circle.png') }}" alt="centang">
                </td>
            </tr>
            <tr>
                <td>
                    <p class="benefits">Dedicated Stainless Plate</p>
                </td>
                <td></td>
                <td>
                    <div class="circle">
                        <img src="{{ asset('images/circle.png') }}" alt="centang">
                    </div>
                </td>
                <td>
                    <img src="{{ asset('images/circle.png') }}" alt="centang">
                </td>
            </tr>
            <tr>
                <td>
                    <p class="benefits">Report Update on Planted Trees</p>
                </td>
                <td></td>
                <td>
                    <div class="circle">
                        <img src="{{ asset('images/circle.png') }}" alt="centang">
                    </div>
                </td>
                <td>
                    <img src="{{ asset('images/circle.png') }}" alt="centang">
                </td>
            </tr>
            <tr>
                <td>
                    <p class="benefits">Logo on Event Clothings</p>
                </td>
                <td>
                </td>
                <td></td>
                <td>
                    <img src="{{ asset('images/circle.png') }}" alt="centang">
                </td>
            </tr>
            <tr class="donation">
                <td>
                    <p class="benefits">Make a Donation</p>
                </td>
                <td>
                    <button class="btn-support">Support Our Mission <img src="{{ asset('images/arrow-blue.png') }}"
                            alt="arrow"></button>
                </td>
                <td><button class="btn-support">Support Our Mission <img src="{{ asset('images/arrow-blue.png') }}"
                            alt="arrow"></button></td>
                <td>
                    <button class="btn-support">Support Our Mission <img src="{{ asset('images/arrow-blue.png') }}"
                            alt="arrow"></button>
                </td>
            </tr>
        </table>
    </div>
    <br>
    <br>
    <br>
>>>>>>> 895eeba868910fd22542eb40ef599558fe2d3edf
    <!--sponsors end-->

    <!--support start-->
    <div class="donate-section">
        <div class="donate-title">
            Donate Today and be a <br>
            Guardian of the Green Belt.
        </div>
        <div class="donate-description">
            <p>Join us in our mission to rejuvenate and protect our shorelines
                by donating to our mangrove planting project. </p>
        </div>
        <br>
<<<<<<< HEAD
        <button class="donate-btn">Support Our Mission <img src="{{ asset('images/arrow-right.png') }}" alt=""></button>
        <div class="donation-images">
            <img src="{{ asset('images/support1.png') }}" alt="sup-img" width="240px" height="425px" class="image1">
            <img src="{{ asset('images/support2.png') }}" alt="sup-img" width="240px" height="281px" class="image2">
            <img src="{{ asset('images/support3.png') }}" alt="sup-img" width="240px" height="161px" class="image3">
            <img src="{{ asset('images/support4.png') }}" alt="sup-img" width="240px" height="281px" class="image4">
            <img src="{{ asset('images/support5.png') }}" alt="sup-img" width="240px" height="425px" class="image5">
=======
        <button class="support-btn">Support Our Mission <img src="{{ asset('images/arrow-right.png') }}"
                alt=""></button>
        <div class="image-support">
            <img src="{{ asset('images/sup1.png') }}" alt="sup-img" width="240px" height="425px" class="img1">
            <img src="{{ asset('images/sup2.png') }}" alt="sup-img" width="240px" height="281px" class="img2">
            <img src="{{ asset('images/sup3.png') }}" alt="sup-img" width="240px" height="161px" class="img3">
            <img src="{{ asset('images/sup4.png') }}" alt="sup-img" width="240px" height="281px" class="img4">
            <img src="{{ asset('images/sup5.png') }}" alt="sup-img" width="240px" height="425px" class="img5">
>>>>>>> 895eeba868910fd22542eb40ef599558fe2d3edf
        </div>
    </div>
    <br>
    <br>
    <!--yang mengerjakan : -->
    <p class="author-name">Colin Farrel</p>
    
</body>

</html>
