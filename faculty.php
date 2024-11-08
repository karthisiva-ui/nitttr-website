<?php include 'menu.php'; ?>
<style type="text/css">
    

</style>


<!-- Page Title -->
<div class="page-title" data-aos="fade">

<div class="container-fluid">
<div class="row">
<div class="col-12 p-0">
    <section class="inner-banner-section">
        <div class="container">
            <h1 class="banner-title">Faculty</h1>
        </div>
    </section>
</div>
</div>
</div>
<nav class="breadcrumbs">
<div class="container">
  <ol>
    <li><a href="index.php">Home</a></li>
    <li class="vision">Academics</li> 
    <li class="vision">Faculty</li> 
  </ol>
</div>
</nav>
</div><!-- End Page Title -->


<div class="container justify-content-center" data-aos="fade-up">

<div class="row"  data-aos="zoom-out" data-delay="100">





<?php
$facultyData = [ [ 
    "name" => "Dr. Usha Natesan",
    "designation" => "Director",
    "department" => "National Institute of Technical Teacher's Training & Research",
    "image" => "assets/img/team/dir.png",
    "email" => ["director@nitttrc.ac.in"],
    "phone" => ["044-2254 5405"],
    "vidwan" => "https://vidwan.inflibnet.ac.in/profile/140775"
],

   [ 
    "name" => "Dr. E.S.M. Suresh",
    "designation" => "Professor",
    "department" => "Civil & Environmental Engineering & Head Extension Centre Kalamessery",
    "image" => $website1."/Facultyimg/faculty/Dr. E.S.M. Suresh.webp",
    "email" => ["esmsuresh@nitttrc.ac.in"],
    "phone" => ["044-2254 5423"],
    "vidwan" => "https://vidwan.inflibnet.ac.in/profile/165448"
],
[
    "name" => "Dr. S. Renukadevi",
    "designation" => "Professor & Head",
    "department" => "Education",
    "image" => $website1."/Facultyimg/faculty/Dr. S. Renukadev.webp",
    "email" => ["bmrenuka@nitttrc.ac.in"],
    "phone" => ["044-2254 5464"],
    "vidwan" => "https://vidwan.inflibnet.ac.in/profile/168366"
],
[
    "name" => "Dr. G. Kulanthaivel",
    "designation" => "Professor",
    "department" => "Electrical, Electronics & Communication Engineering & Head, CIA",
    "image" => $website1."/Facultyimg/faculty/Dr. G. Kulanthaivel.webp",
    "email" => ["gkvel@nitttrc.ac.in"],
    "phone" => ["044-2254 5411"],
    "vidwan" => "https://vidwan.inflibnet.ac.in/profile/168363"
],
[
    "name" => "Dr. R. Santhakumar",
    "designation" => "Professor & Head",
    "department" => "Civil & Environmental Engineering",
    "image" => $website1."/Facultyimg/faculty/Dr.Santh.webp",
    "email" => ["rsk65@nitttrc.ac.in"],
    "phone" => ["044-2254 5481"],
    "vidwan" => "https://vidwan.inflibnet.ac.in/profile/168357"
],
[
    "name" => "Dr. P. Malliga",
    "designation" => "Professor & Head",
    "department" => "Computer Science & Engineering, Educational Media & Technology",
    "image" => $website1."/Facultyimg/faculty/Dr. P. Malliga.webp",
    "email" => ["malliga@nitttrc.ac.in"],
    "phone" => ["044-2254 5433"],
    "vidwan" => "https://vidwan.inflibnet.ac.in/profile/165263"
],
[
    "name" => "Dr. G.A. Rathy",
    "designation" => "Professor & Head",
    "department" => "Electrical, Electronics & Communication Engineering",
    "image" => $website1."/Facultyimg/faculty/Dr. G.A. Rathy.webp",
    "email" => ["rathy@nitttrc.ac.in"],
    "phone" => ["044-2254 5415"],
    "vidwan" => "https://vidwan.inflibnet.ac.in/profile/164537"
],
[
    "name" => "Dr. K.S. Giridharan",
    "designation" => "Professor",
    "department" => "Education & Head, Centre for Rural & Entrepreneurship Development",
    "image" => $website1."/Facultyimg/faculty/Dr. K.S. Giridharan.webp",
    "email" => ["ksgiridharan@nitttrc.ac.in"],
    "phone" => ["044-2254 5481"],
    "vidwan" => "https://vidwan.inflibnet.ac.in/profile/168360"
],
[
    "name" => "Dr. S. Somasundaram",
    "designation" => "Professor & Head",
    "department" => "Mechanical Engineering",
    "image" => $website1."/Facultyimg/faculty/Dr. S. Somasundaram.webp",
    "email" => ["somu@nitttrc.ac.in"],
    "phone" => ["044-2254 5413"],
    "vidwan" => "https://vidwan.inflibnet.ac.in/profile/164081"
],
[
    "name" => "Dr. Umasanker Sahu",
    "designation" => "Professor",
    "department" => "Electrical, Electronics and Communication Engineering",
    "image" => $website1."/Facultyimg/faculty/Dr. Umasanker Sahu.webp",
    "email" => ["usahu2000@nitttrc.ac.in"],
    "phone" => ["040-23340485"],
    "vidwan" => "https://vidwan.inflibnet.ac.in/profile/168364"
],
[
    "name" => "Dr. V. Shanmuganeethi",
    "designation" => "Associate Professor",
    "department" => "Computer Science & Engineering",
    "image" => $website1."/Facultyimg/faculty/Dr. V. Shanmuganeethi.webp",
    "email" => ["shanneethi@nitttrc.ac.in"],
    "phone" => ["044-2254 5458"],
    "vidwan" => "https://vidwan.inflibnet.ac.in/profile/168362"
],
[
    "name" => "Dr. G. Janardhanan",
    "designation" => "Professor",
    "department" => "Civil & Environmental Engineering & Head, CASR",
    "image" => $website1."/Facultyimg/jana.jpg",
    "email" => ["jana@nitttrc.ac.in"],
    "phone" => ["044-2254 5442"],
    "vidwan" => "https://vidwan.inflibnet.ac.in/profile/149866"
],
[
    "name" => "Dr. M. Senthilkumar",
    "designation" => "Professor",
    "department" => "Mechanical Engineering",
    "image" => $website1."/Facultyimg/faculty/Dr. M. Senthilkumar.webp",
    "email" => ["senthil@nitttrc.ac.in"],
    "phone" => ["044-2254 5418"],
    "vidwan" => "https://vidwan.inflibnet.ac.in/profile/163806"
],
[
    "name" => "Dr. K.S.A. Dinesh Kumar",
    "designation" => "Professor",
    "department" => "Civil & Environmental Engineering",
    "image" => $website1."/Facultyimg/Dinesh1.png",
    "email" => ["dinesh@nitttrc.ac.in"],
    "phone" => ["044-2254 5421"],
    "vidwan" => ""
],
[
    "name" => "Dr. P. Sivasankar",
    "designation" => "Professor & Head",
    "department" => "Electronics & Communication Engineering",
    "image" => $website1."/Facultyimg/faculty/Dr. P. Sivasankar.webp",
    "email" => ["sivasankar@nitttrc.ac.in"],
    "phone" => ["044-2254 5417"],
    "vidwan" => "https://vidwan.inflibnet.ac.in/profile/168365"
],
[
    "name" => "Er. V. Sivakumar",
    "designation" => "Associate Professor",
    "department" => "Mechanical Engineering",
    "image" => $website1."/Facultyimg/faculty/Er. V. Sivakumar.webp",
    "email" => ["veeyeskey@rediffmail.com"],
    "phone" => ["080-22374154"],
    "vidwan" => ""
],
[
    "name" => "Dr. M. Anil Kumar",
    "designation" => "Associate Professor",
    "department" => "Centre for Rural & Entrepreneurship Development",
    "image" => $website1."/Facultyimg/faculty/Dr. M. Anil Kumar.webp",
    "email" => ["anilkumar@nitttrc.edu.in"],
    "phone" => ["9979867474"],
    "vidwan" => "https://vidwan.inflibnet.ac.in/profile/409834"
],
[
    "name" => "Dr. R. Suja Mani Malar",
    "designation" => "Associate Professor",
    "department" => "Electrical, Electronics & Communication Engineering",
    "image" => $website1."/Facultyimg/faculty/Dr. R. Suja Mani Malar A.webp",
    "email" => ["rsmm@nitttr.edu.in"],
    "phone" => ["9443177607"],
    "vidwan" => "https://nitttrc.irins.org/profile/410236"
],
[
    "name" => "Dr. E. Balasubramanian",
    "designation" => "Associate Professor",
    "department" => "Mechanical Engineering",
    "image" => $website1."/Facultyimg/faculty/Dr. E. Balasubramanian.webp",
    "email" => ["balasubramanian@nitttrc.edu.in"],
    "phone" => ["9445801978"],
    "vidwan" => "https://vidwan.inflibnet.ac.in/profile/409836"
],
[
    "name" => "Dr. K.N. Shoba",
    "designation" => "Associate Professor",
    "department" => "Education",
    "image" => $website1."/Facultyimg/faculty/Dr. K.N. Shoba.webp",
    "email" => ["shoba_kn@nitttrc.edu.in"],
    "phone" => ["9884071114"],
    "vidwan" => ""
],
[
    "name" => "Dr. S. Saravana Perumal",
    "designation" => "Associate Professor",
    "department" => "Mechanical Engineering",
    "image" => $website1."/Facultyimg/faculty/Dr. S. Saravana Perumal.webp",
    "email" => ["Saravanaperumal@nitttrc.edu.in"],
    "phone" => ["9944461010"],
    "vidwan" => ""
],
[
    "name" => "Dr. S. Sasirekha",
    "designation" => "Associate Professor",
    "department" => "Computer Science & Engineering",
    "image" => $website1."/Facultyimg/faculty/Dr. S. Sasirekha.webp",
    "email" => ["sasirekha@nitttrc.ac.in"],
    "phone" => ["044-2254 5505"],
    "vidwan" => ""
],
[
    "name" => "Dr. T. Subha",
    "designation" => "Associate Professor",
    "department" => "Educational Media and Technology",
    "image" => $website1."/Facultyimg/faculty/Dr. T Subha.webp",
    "email" => ["subha@nitttrc.edu.in"],
    "phone" => ["9841630295"],
    "vidwan" => ""
],
[
    "name" => "Shri A.P. Felix Arokiyaraj",
    "designation" => "Assistant Professor",
    "department" => "Educational Media and Technology",
    "image" => $website1."/Facultyimg/faculty/Shri A.P. Felix Arokiyaraj.webp",
    "email" => ["felix@nitttrc.ac.in"],
    "phone" => ["044-2254 5477"],
    "vidwan" => ""
],
[
    "name" => "Dr. Vinod Kumar Adigopula",
    "designation" => "Assistant Professor",
    "department" => "Civil & Environmental Engineering",
    "image" => $website1."/Facultyimg/faculty/Dr. Vinod Kumar Adigopula.webp",
    "email" => ["vinod@nitttrc.edu.in"],
    "phone" => ["9601634385"],
    "vidwan" => ""
],

[
    "name" => "Dr. Seshu Babu Pulagara",
    "designation" => "Assistant Professor",
    "department" => "Computer Science & Engineering",
    "image" => $website1."/Facultyimg/faculty/Dr. Seshu Babu Pulagara.webp",
    "email" => ["seshubabu@nitttrc.edu.in"],
    "phone" => ["9791238339"],
    "vidwan" => ""
],
[
    "name" => "Mr. M. Sutaarson",
    "designation" => "Assistant Professor",
    "department" => "Centre for Educational Management & Applied Science",  
    "image" => $website1."/Facultyimg/faculty/Mr. M. Sutaarson.webp",
    "email" => ["sutaarson@nitttrc.edu.in"],
    "phone" => ["9941635350"],
    "vidwan" => ""
],
[
    "name" => "Dr. P. Jakulin Divya Mary",
    "designation" => "Assistant Professor",
    "department" => "Centre for Rural & Entrepreneurship Development",
    "image" => $website1."/Facultyimg/faculty/jaqulien.webp",
    "email" => ["jakulin_divya@nitttrc.edu.in"],
    "phone" => ["9841795812"],
    "vidwan" => ""
],

        
        
    ];
   

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
  foreach ($facultyData as $faculty) {
    echo "<div class='container col-md-3 mb-3'>"; 
    echo "  <div class='card shadow-sm'>"; 
    
    // Display the image
    echo "      <img src='" . htmlspecialchars($faculty['image']) . "' class='img-fluid card-img-top' alt=''>";

    // Display name, designation, and department
    echo "      <div class='card-body'>";
    echo "          <h5 class='bg-custom p-2 mb-3 rounded' style='background:#2487CE'>" . htmlspecialchars($faculty['name']) . "</h5>"; 
    echo "          <h6 class='font-weight-bold' style='color:black;'>" . htmlspecialchars($faculty['designation']) . "</h6>"; 
    // echo "          <p class='text-muted'>" . htmlspecialchars($faculty['department']) . "</p>"; 

    // Display phone numbers and email addresses
    $emails = is_array($faculty['email']) ? implode(", ", $faculty['email']) : $faculty['email']; 
    $phones = is_array($faculty['phone']) ? implode(", ", $faculty['phone']) : $faculty['phone']; 
    echo "          <div class='contact-info' style='font-size: 14px; color:black;'>"; 
    echo "              <span><i class='bi bi-telephone'></i> " . htmlspecialchars($phones) . "</span><br/>"; 
    echo "              <span><i class='bi bi-envelope'></i> " . htmlspecialchars($emails) . "</span>"; 
    
    // Add Vidwan link
    if (!empty($faculty['vidwan'])) {
        echo "              <hr class='my-2'>"; 
        echo "              <b><a href='" . htmlspecialchars($faculty['vidwan']) . "' target='_blank' class='text-primary'><i class='bi bi-file-earmark-person'></i> Vidwan Link</a></b>";
    }
    
    echo "          </div>"; 
    echo "      </div>"; 
    echo "  </div>"; 
    echo "</div>"; 
}





?>
    








</div>

</div>

<br/>
<br/>

<style>
    .card {
        transition: transform 0.3s; /* Smooth scaling transition */
        border-radius: 10px; /* Rounded corners for cards */
        overflow: hidden; /* Ensure content doesn't overflow */
    }

    .card:hover {
        transform: scale(1.05); /* Scale up on hover */
    }

    .card-img-top {
        width: 100%; /* Full width for responsive design */
        height: auto; /* Maintain aspect ratio */
        max-height: 200px; /* Limit the maximum height */
        object-fit: contain; /* Fit the entire image within the area */
        margin: 0 auto; /* Centers the image horizontally */
    }

    .bg-custom {
        background-color: #2C4A87; /* Custom background color */
        color: white; /* White text color */
        border-radius: 5px; /* Slightly rounded corners for header */
    }

    .card-body {
        text-align: center; /* Center the text in the card body */
    }

    .contact-info {
        margin-top: 15px; /* Space above contact info */
        color: #555; /* Muted text color for contact details */
    }

    .text-muted {
        color: #6c757d; /* Standard muted color */
        font-size: 15px;
        margin-bottom: -10px;
        padding: 0px    ;
    }
    

</style>







<?php include 'footer.php'; ?>