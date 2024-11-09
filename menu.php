<?php $website="https://www.nitttrc.ac.in/nitttr/"; 
$website1="https://www.nitttrc.ac.in/"; 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">



    <title>NITTTR Chennai</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/nitttrc.png" rel="icon">


    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/datatable/datatable.css" rel="stylesheet">
    <link href="assets/vendor/datatable/responsive-datatable.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/apexcharts.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />




    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/custom-style.css" rel="stylesheet">



    <!-- =======================================================
  * Template Name: NITTTR website
  * Updated: APr 17 2024 with Bootstrap v5.3.3
  * Author: Tamilmani D
  * Designation: Technical Officer
  ======================================================== -->
</head>


<style>
.swiper-slide img {
    width: 250;
    height: 250;
    object-fit: cover;
    /* Ensures the image fits well within the slide */
}

.carousel-img-wrapper {
    position: relative;
    width: 100%;
    height: 600px;
    overflow: hidden;
}

.foreground-image {
    position: relative;
    z-index: 2;
    width: auto;
    height: 100%;
    max-height: 100%;
    display: block;
    margin: 0 auto;
}

.background-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    filter: blur(15px) opacity(0.3);
    /* Blur and opacity effect */
    z-index: 1;
}

/* Ensure there's no margin or padding on the <ul> and <li> */
.navbar ul {
    padding: 0;
    margin: 0;
    /* display: flex; */
    /* Ensures the items are aligned in a row */
    justify-content: center;
    /* Centers the content horizontally */
}

.navbar ul li {
    margin: 0;
    /* Removes any margin around the list items */
    padding: 0;
    /* Removes any padding inside the list items */
}

.navbar ul li a {
    padding: 15px 10px;
    /* Adjust this for inner spacing of the link (reduce values to decrease spacing) */
    margin: 0 0px;
    /* Adjust this value to control the gap between links */
    display: inline-block;
}

/* Ensure that the mobile nav toggle also follows the spacing rules */
.mobile-nav-toggle {
    margin-left: 10px;
}


.nav-link>a {
    color: #29315A;
    /* Set the color of the nav links */
}

.nav-link:hover {
    color: #4C5378;
    /* Optional: Change color on hover for better UX */
}




.dropdown-menu li a {
    padding: 15px 10px;
    /* Adjust this for inner spacing of the link (reduce values to decrease spacing) */
    margin: 0 0px;
    /* Adjust this value to control the gap between links */
    display: inline-block;
    font-size: 14px;
    font-weight: bold;
}


/* Dropdown item hover effect */
.dropdown-menu .dropdown-item:hover {
    color: #2487CE;
    /* font-weight: bold; */

}

.marquee-container {
    /* background: linear-gradient(to right, rgba(36, 135, 206, 0.3), rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.3), rgba(36, 135, 206, 0.3)); Sea blue to white and back with opacity */
    overflow: hidden;
    /* Hide overflowing content */
    height: 30px;

}

.marquee-content {
    display: flex;
    align-items: center;
    /* Center content vertically */
    animation: marquee 40s linear infinite;
    /* Scroll animation */
    white-space: nowrap;
    /* Prevent text from wrapping */
    font-size: 14px;
    font-weight: bold;
    margin-top: -5px;
}

.speaker-icon {
    margin-right: 10px;
    /* Space between icon and text */
    color: #1E90FF;
    /* Color of the speaker icon */
}

@keyframes marquee {
    0% {
        transform: translateX(100%);
    }

    100% {
        transform: translateX(-100%);
    }
}

p {
    font-size: 18px;
    line-height: 35px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 500;
    color: black;

    margin-top: 10px;
    margin-bottom: 10px;
}





.imgslide1 img {
    max-width: 200px;
    /*Ensures responsive scaling*/
    height: 150px;
    /* Set a fixed height */
    object-fit: contain;
    /* Maintains aspect ratio */
}




.number {
    background-color: #2487CE;
    width: 150px;
    height: 80px;

}

.number a {
    color: white;
}


.custom-section {

    height: 300px;
    padding: 10px;
    margin: 20px auto;
    text-align: center;
    display: none;
    /* Initially hide all sections */
}

/* Active section visible */
.custom-section.active {
    display: block;
}
</style>



<body>

    <!-- ======= Top Bar ======= -->
    <section class="top-header-section p-0" id="scrollHeader">
        <div id="topbar" class="d-flex align-items-center">
            <div class="container d-sm-flex justify-content-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-house  d-flex justify-content-center "></i><a class="nav-link" style="color: white;"
                        href="index.php">Home</a>&nbsp;|&emsp;
                    <a class="nav-link" href="rti.php" style="color: white;">RTI</a></i>&nbsp;|&nbsp;

                    <a class="nav-link" style="color: white;" href="tender.php">Tender</a>&nbsp;|&nbsp;
                    <i class="bi bi-envelope d-flex justify-content-center"></i><a class="nav-link"
                        style="color: white;" href="contact.php">Contact</a>



                    <!-- <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@example.com">directoroffice@nitttr.ac.in</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>(+91-44) 2254 5406/ 2254 5442</span></i> -->
                </div>
                <div class="d-flex align-items-center">
                    <ul class="d-flex m-0">
                        <li></li>
                        <li>
                            <div class="btn-group font-contrler wow fadeInDown">
                                <a href="" class="decrease-me">-</a>
                                <a href="" class="reset-me">A</a>
                                <a href="" class="increase-me">+</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- ======= Header ======= -->
        <div class="logo-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <a href="<?php echo $website; ?>" class="brand-logo-img"><img class="img-fluid"
                                src="assets/img/new-logo.png" alt="logo"></a>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center justify-content-center justify-content-md-center">
                            <div class="col-auto add-logo-img">
                                <img src="assets/img/logo_2.png" class="img-fluid" alt="logo" />
                            </div>
                            <div class="col-auto add-logo-img">
                                <img src="assets/img/MoE-Logo.png" class="img-fluid" alt="logo" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header id="header">


            <div class="container">
                <div class="d-flex align-items-center">
                <nav class="navbar navbar-expand-lg navbar-light w-100">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav mb-2 mb-lg-0 me-auto">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#institute" id="instituteDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Institute
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="instituteDropdown">
                                    <li><a class="dropdown-item" href="about.php">About Us</a></li>
                                    <li><a class="dropdown-item" href="vision.php">Vision & Mission</a></li>
                                    <li><a class="dropdown-item"
                                            href="https://www.nitttrc.ac.in/MoA/MoA.html">Memorandum of
                                            Association</a></li>
                                    <li><a class="dropdown-item" href="director.php">Director Message</a></li>

                                    <li class="dropdown">
                                        <a href="#"><span>Governing Bodies</span> <i
                                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                                        <ul>
                                            <li><a class="dropdown-item" href="bog.php">Board of Governers</a></li>
                                            <li><a class="dropdown-item" href="finance.php">Finance Committee</a></li>
                                            <li><a class="dropdown-item" href="acadcouncil.php">Academic Council</a>
                                            </li>
                                            <li><a class="dropdown-item" href="senate.php">Senate</a></li>
                                        </ul>
                                    </li>



                                    <li><a class="dropdown-item" href="bogminutes.php">Minutes of BOG Meeting</a></li>
                                    <li><a class="dropdown-item" href="annualreport.php">Annual Reports</a></li>
                                    <li><a class="dropdown-item" href="prevchairmen.php">Previous Chairmen and
                                            Directors</a>
                                    </li>
                                </ul>
                            </li>



                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#administration"
                                    id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Administration</a>
                                <ul class="dropdown-menu" aria-labelledby="administrationDropdown">
                                    <li><a class="dropdown-item" href="dean.php">Dean</a></li>




                                    <li class="dropdown"><a href="#"><span>Committees & Incharge</span> <i
                                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                                        <ul>
                                            <li><a class='dropdown-item' href='diroffice.php'>DIRECTORS OFFICE</a></li>
                                            <li><a class='dropdown-item' href='admin.php'>Office of Admin & Accounts</a>
                                            </li>
                                            <li><a class='dropdown-item' href='cvo.php'>Chief Vigilance Officer</a></li>
                                            <li><a class='dropdown-item' href='nopg.php'>Nodal Officer - Public
                                                    Grievance</a></li>
                                            <li><a class='dropdown-item' href='ombudsperson.php'>Ombudsperson</a></li>
                                            <li><a class='dropdown-item' href='guesthouse.php'>Guest House & Hotel</a>
                                            </li>
                                            <li><a class='dropdown-item' href='estate.php'>Estate Officer</a></li>
                                            <li><a class='dropdown-item' href='grievance.php'>Grievance Redressal
                                                    Committee
                                                    - Internal</a></li>
                                        </ul>
                                    </li>


                                    <li><a class="dropdown-item" href="estoffice.php">Estate Office</a></li>
                                    <!-- <li><a class="dropdown-item" href="stores.php">Stores and Purchase</a></li> -->

                                    <!-- <li><a class="dropdown-item" href="admin_accounts.php">Staff of Admin & Accounts</a></li> -->
                                    <li><a class="dropdown-item" href="policies.php">Policies & Rules</a></li>
                                    <li><a class="dropdown-item" href="apr.php">Annual Property Returns</a></li>
                                    <li><a class="dropdown-item"
                                            href="http://localhost:5173/rti/2024/Pan,Tan,GSTINdetails.pdf">Accounts
                                            Details</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#academics" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Academics</a>
                                <ul class="dropdown-menu" aria-labelledby="academicsDropdown">
                                    <li class="dropdown"><a href="#"><span>Departments</span> <i
                                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                                        <ul>
                                            <li><a class='dropdown-item' href='civil.php'>Department Of Civil
                                                    Engineering
                                                </a>
                                            </li>
                                            <li><a class='dropdown-item' href='computer.php'>Department Of Computer
                                                    Science And Engineering</a>
                                            </li>
                                            <li><a class='dropdown-item' href='mediatech'>Department Of Educational
                                                    Media And Technology</a>
                                            </li>
                                            <li><a class='dropdown-item' href='eee.php'>Department Of Electrical And
                                                    Electronics Engineering</a>
                                            </li>
                                            <li><a class='dropdown-item' href='electronics.php'>Department Of
                                                    Electronics And Communication Engineering</a>
                                            </li>
                                            <li><a class='dropdown-item' href='mech.php'>Department Of Mechanical
                                                    Engineering</a>
                                            </li>
                                            <li><a class='dropdown-item' href='education.php'>Department Of
                                                    Education</a>
                                            </li>
                                            <li><a class='dropdown-item' href='curriculum.php'>Department Of Curriculum
                                                    Development</a>
                                            </li>
                                            <li><a class='dropdown-item' href='centre_rural.php'>Department Of Rural And
                                                    Entrepreneurship Development</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#overview">Overview</a></li>
                                    <li><a class="dropdown-item"
                                            href="https://www.nitttrc.ac.in/uploads/EOA%20Report%202024-2025.pdf">AICTE-EOA
                                            Report</a></li>

                                    <li class="dropdown"><a href="#"><span>Centres</span> <i
                                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                                        <ul>
                                            <li><a class='dropdown-item' href='acad.php'>Academic Studies & Research</a>
                                            </li>
                                            <li><a class='dropdown-item' href='international.php'>International
                                                    Affairs</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li><a class="dropdown-item" href="faculty.php">Faculty </a></li>
                                    <li><a class="dropdown-item" href="staff.php">Staff </a></li>
                                    <li><a class="dropdown-item" href="https://nitttrc.ac.in/fdp_pgm1.php#top"
                                            target="_blank">Professional Development Program</a></li>
                                    <li><a class="dropdown-item" href="https://nitttrc.ac.in/fdp_pgm1.php#top"
                                            target="_blank">International Training Program</a></li>
                                    <li><a class="dropdown-item" href="#national-coordinators">National Coordinators</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#oer">Digital Repository</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#admissions" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Admissions</a>
                                <ul class="dropdown-menu" aria-labelledby="admissionsDropdown">
                                    <li><a class="dropdown-item"
                                            href="https://www.nitttrc.ac.in/admission/index.php">Admission Portal</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="https://www.nitttrc.ac.in/admissions/PG%20PROGRAMME.pdf">PG
                                            Regulations</a></li>
                                    <li><a class="dropdown-item"
                                            href="https://www.nitttrc.ac.in/admissions/PHD%20PROGRAMME.pdf">PhD
                                            Regulations</a></li>
                                    <li><a class="dropdown-item" href="pgcourse.php">Courses Offered</a></li>

                                </ul>
                            </li>
                            <!-- <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#facilities" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Facilities</a>
                        </li> -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#study" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Study @ NITTTR</a>
                                <ul class="dropdown-menu" aria-labelledby="studyDropdown">
                                    <li><a class="dropdown-item" href="#salient-features">Salient Features</a></li>
                                    <li><a class="dropdown-item" href="#pg-programme">PG Programme</a></li>
                                    <li><a class="dropdown-item" href="#pg-diploma">PG Diploma</a></li>
                                    <li><a class="dropdown-item" href="#pg-certificate">PG Certificate</a></li>
                                    <!-- <li><a class="dropdown-item" href="#integrated-teacher-education">Integrated Teacher Education Program</a></li> -->
                                    <li><a class="dropdown-item" href="#research">Research</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#information" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">Information Corner</a>
                                <ul class="dropdown-menu" aria-labelledby="informationDropdown">
                                    <li><a class="dropdown-item"
                                            href="https://www.onlinesbi.sbi/sbicollect/icollecthome.htm?corpID=3755167">Fee
                                            Payment</a></li>
                                    <li class="dropdown">
                                        <a href="#"><span>Recruitment</span>
                                            <i class="bi bi-chevron-down toggle-dropdown"></i>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="recruitmentsDropdown">
                                            <li><a class="dropdown-item" href="rec_fac.php">Faculty</a></li>
                                            <li><a class="dropdown-item" href="rec_staff.php">Staff</a></li>
                                            <li><a class="dropdown-item" href="rec_project.php">Projects</a></li>
                                            <li><a class="dropdown-item" href="rec_contract.php">Contract</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="https://www.nitttrc.ac.in/uploads/NITTTRc-AICTE.pdf">Mandatory
                                            Disclosure</a></li>
                                    <li><a class="dropdown-item"
                                            href="https://www.nitttrc.ac.in/uploads/Equal_opportunity_policy_NISER.pdf">Equal
                                            Opportunity Policy</a></li>
                                    <li><a class="dropdown-item" href="newsletter.php">News Letters</a></li>
                                    <li><a class="dropdown-item"
                                            href="https://www.nitttrc.ac.in/cirlogin.php">Circular</a>
                                    </li>
                                    <li><a class="dropdown-item" href="biscorner.php">Bis Corner</a></li>
                                    <li><a class="dropdown-item" href="#rti-act">RTI ACT</a></li>
                                    <li><a class="dropdown-item" href="brochure.php">Brochure</a></li>
                                    <li><a class="dropdown-item" href="https://email.gov.in/">Webmail</a></li>
                                    <li><a class="dropdown-item"
                                            href="https://www.nitttrc.ac.in/JTVE/index.html">JTVE</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact us</a>
                        </li> -->

                        </ul>
                    </div>
                </nav>
                <!-- .navbar -->
                <form class="navbar-form d-flex align-items-start" role="search" id="srch" action="" method="post"
                    onsubmit="return checkKeyword();" autocomplete="off">
                    <div class="input-box">
                        <input type="text" placeholder="Search..." />
                        <span class="search">
                            <i class="search-icon fa-solid fa-magnifying-glass"></i>
                        </span>
                        <i class="close-icon fa-solid fa-xmark"></i>
                    </div>
                </form>
</div>
            </div>



        </header><!-- End Header -->
    </section>