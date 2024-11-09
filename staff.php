<?php include 'menu.php'; ?>
<!-- Page Title -->
<div class="page-title" data-aos="fade">

<div class="container-fluid">
<div class="row">
<div class="col-12 p-0">
    <section class="inner-banner-section">
        <div class="container">
            <h1 class="banner-title">Staff</h1>
        </div>
    </section>
</div>
</div>
</div>
<nav class="breadcrumbs">
<div class="container">
  <ol>
    <li><a href="index.php">Home</a></li>
    <li class="vision">Staff</li> 
  </ol>
</div>
</nav>
</div><!-- End Page Title -->


<div class="container justify-content-center faculty-list" data-aos="fade-up">

    
<?php 
$staff = [
    ["name" => "Dr. R. Ravichandran", "designation" => "Librarian", "image" => $website1."/Facultyimg/staff/Dr. R. Ravichandran.webp"],
    ["name" => "Er. D.V. Suryanarayana", "designation" => "Computer Programmer", "image" => $website1."/Facultyimg/staff/Er. D.V. Suryanarayana.webp"],
    ["name" => "Dr. S. Rajasekar", "designation" => "Research Assistant & Warden", "image" => $website1."/Facultyimg/staff/Dr. S. Rajasekar.webp"],
    ["name" => "Shri.M.Ramesh", "designation" => "Sr. Administrative Officer", "image" => $website1."/Facultyimg/staff/Shri. M. Ramesh.webp"],
    ["name" => "Smt. Tamilmani D", "designation" => "Technical Officer", "image" => $website1."/Facultyimg/staff/Smt. D. Tamilmani.webp"],
    ["name" => "Shri L.P. Elbin", "designation" => "Editor (ETV)", "image" => $website1."/Facultyimg/staff/Shri L.P. Elbin.webp"],
    ["name" => "Shri P. Subramanian", "designation" => "Computer Technician", "image" => $website1."/Facultyimg/staff/Shri P. Subramanian.webp"],
    ["name" => "Shri M. Venkatesh Kumar", "designation" => "Engineering Assistant", "image" => $website1."/Facultyimg/staff/Shri M. Venkatesh Kumar.webp"],
    
    ["name" => "Shri K. Gunasekaran", "designation" => "Jr. Engineer - Electrical", "image" => $website1."/Facultyimg/staff/Shri K. Gunasekaran.webp"],
    ["name" => "Smt. M.P. Vijayalakshmi", "designation" => "Section Officer Gr.II", "image" => $website1."/Facultyimg/staff/Smt. M.P. Vijayalakshmi.webp"],
    
    ["name" => "Smt. S. Indumathi", "designation" => "Section Officer Gr.II", "image" => $website1."/Facultyimg/staff/Smt. S. Indumathi.webp"],
    ["name" => "Smt. K. Satyapriya", "designation" => "Section Officer Gr.II", "image" => $website1."/Facultyimg/staff/Smt. K. Satyapriya.webp"],
    ["name" => "Shri D. Arun", "designation" => "Section Officer Gr.II", "image" => $website1."/Facultyimg/staff/Shri D. Arun.webp"],
    
    ["name" => "Shri S. Palani", "designation" => "Assistant Section Officer", "image" => $website1."/Facultyimg/staff/Shri S. Palani.webp"],
    ["name" => "Shri N. KrishnaKumarr", "designation" => "Assistant Section Officer", "image" => $website1."/Facultyimg/staff/Shri N. KrishnaKumarr.webp"],
    ["name" => "Smt. G. Prathibha", "designation" => "Assistant Section Officer", "image" => $website1."/Facultyimg/staff/Smt. G. Prathibha.webp"],
    ["name" => "Shri Gokulnath S", "designation" => "Jr. Engineer (Civil)", "image" => $website1."/Facultyimg/staff/Shri Gokulnath.webp"],
    ["name" => "Shri S. Navaneethakrishnan", "designation" => "Technical Assistant Gr.I (Cameraman)", "image" => $website1."/Facultyimg/staff/Shri. S. Navaneethakrishnan.webp"],
    ["name" => "Shri K. Ganesh Kumar", "designation" => "Assistant Section Officer (Librarian)", "image" => $website1."/Facultyimg/staff/Shri K. Ganesh Kumar.webp"],
    ["name" => "Shri Sayan Biswas", "designation" => "Assistant Section Officer (Sr. Auditor)", "image" => $website1."/Facultyimg/staff/Shri Sayan Biswas.webp"],
    ["name" => "Smt. B.R. Parvathy", "designation" => "Technician Gr.I", "image" => $website1."/Facultyimg/staff/Smt. B.R. Parvathy.webp"],
    ["name" => "Shri S. Parthasarathy", "designation" => "Technician Gr.I (Driver)", "image" => $website1."/Facultyimg/staff/Shri S. Parthasarathy.webp"],
    ["name" => "Shri B. Velmurugan", "designation" => "Technician Gr.I", "image" => $website1."/Facultyimg/staff/Shri B. Velmurugan.webp"],
    ["name" => "Shri K. Vasudevan", "designation" => "Technician Gr.I", "image" => $website1."/Facultyimg/staff/Shri K. Vasudevan.webp"],
    ["name" => "Smt. T.V. Leetha", "designation" => "Senior Secretariat Assistant", "image" => $website1."/Facultyimg/staff/Smt. T.V. Leetha.webp"],
    ["name" => "Smt. R. Vidhya", "designation" => "Senior Secretariat Assistant", "image" => $website1."/Facultyimg/staff/Smt. R. Vidhya.webp"],
    ["name" => "Smt. Rajeswari Singh", "designation" => "Senior Secretariat Assistant", "image" => $website1."/Facultyimg/staff/Smt. Rajeswari Singh.webp"],
    ["name" => "Dr. J. Ramesh Kumar", "designation" => "Senior Secretariat Assistant", "image" => $website1."/Facultyimg/staff/Shri M. Ramesh.webp"],
    ["name" => "Shri Santhosh Krishna", "designation" => "Senior Secretariat Assistant", "image" => $website1."/Facultyimg/staff/Shri K. Santhosh Krishna.webp"],
    ["name" => "Shri S. Buvanesh Kumar", "designation" => "Senior Secretariat Assistant", "image" => $website1."/Facultyimg/staff/Shri S. Buvanesh Kumar.webp"],
    ["name" => "Ms. M. Renuga", "designation" => "Senior Secretariat Assistant (Jr. Auditor)", "image" => $website1."/Facultyimg/staff/Ms. M. Renuga.webp"],
    ["name" => "Shri B. Velayutham", "designation" => "Sr. Technician", "image" => $website1."/Facultyimg/staff/Shri B. Velayutham.webp"],
    ["name" => "Shri S. Nagappan", "designation" => "Technician Gr.II (Driver)", "image" => $website1."/Facultyimg/staff/Shri S. Nagappan.webp"],
    ["name" => "Shri R. Sankar", "designation" => "Junior Secretariat Assistant", "image" => ""],
    ["name" => "Shri P. Bharath", "designation" => "Junior Secretariat Assistant", "image" => $website1."/Facultyimg/staff/Shri P. Bharath.webp"],
    ["name" => "Shri A. Salman Hussain", "designation" => "Junior Secretariat Assistant", "image" => $website1."/Facultyimg/staff/Shri A. Salman Hussain.webp"],
    ["name" => "Shri U. Prashaanth", "designation" => "Junior Secretariat Assistant", "image" => $website1."/Facultyimg/staff/Shri U. Prashaanth.webp"],
    ["name" => "Shri V. Dorairaj", "designation" => "Junior Secretariat Assistant", "image" => $website1."/Facultyimg/staff/Shri V. Dorairaj.webp"],
    ["name" => "Ms. P. Sowmiya", "designation" => "Junior Secretariat Assistant", "image" => $website1."/Facultyimg/staff/Ms. P. Sowmiya.webp"],
    ["name" => "Shri P. Vimal Saravanan", "designation" => "Junior Secretariat Assistant", "image" => $website1."/Facultyimg/staff/Shri P. Vimal Saravanan.webp"],
    
    ["name" => "Shri P. Sahadevan", "designation" => "Technician Gr.III", "image" => $website1."/Facultyimg/staff/Shri P. Sahadevan.webp"],
    ["name" => "Mr. N. Shankar", "designation" => "Technician Gr.III (RAC)", "image" => $website1."/Facultyimg/staff/Mr. N. Shankar.webp"],
    ["name" => "Shri M. Kasi Vara Prasad", "designation" => "Technician Gr.III (Electrical)", "image" => $website1."/Facultyimg/staff/Shri M. Kasi Vara Prasad.webp"],
    ["name" => "Shri K. Shakthivel", "designation" => "Technician Gr.III (Civil & Plumbing)", "image" => $website1."/Facultyimg/staff/Shri K. Shakthivel.webp"],
    ["name" => "Shri Sushant Kumar Sahoo", "designation" => "Technician Gr.III (RAC)", "image" => $website1."/Facultyimg/staff/Shri Sushant Kumar Sahoo.webp"],
    ["name" => "Shri Sudhanraj C", "designation" => "Technician Gr.III (Electrical)", "image" => $website1."/Facultyimg/staff/Shri Sudhanraj C.webp"],
    ["name" => "Shri I. Ravindran", "designation" => "Multi Tasking Staff", "image" => $website1."/Facultyimg/staff/Shri I. Ravindran.webp"],
    ["name" => "Shri T. Sakthivelayutham", "designation" => "Multi Tasking Staff", "image" => $website1."/Facultyimg/staff/Shri T. Sakthivelayutham.webp"],
    ["name" => "Shri S. Malarvasan", "designation" => "Multi Tasking Staff", "image" => $website1."/Facultyimg/staff/Shri S. Malarvasan.webp"],
    
    ["name" => "Shri A. Loganathan", "designation" => "Multi Tasking Staff", "image" => $website1."/Facultyimg/staff/Shri A. Loganathan.webp"],
    ["name" => "Shri M. Selvakumar", "designation" => "Multi Tasking Staff", "image" => $website1."/Facultyimg/staff/Shri M. Selvakumar.webp"],
    ["name" => "Karthiga T", "designation" => "Multitasking Staff", "image" => $website1."/Facultyimg/staff/Ms. T. Karthiga.webp"],
    ["name" => "Aravind Guru Raj G R", "designation" => "Multitasking Staff", "image" => $website1."/Facultyimg/staff/Shri G.R. Aravind Guru Raj.webp"],
    ["name" => "Sathish D", "designation" => "Multitasking Staff", "image" => ""],
    ["name" => "Sankar Rajesh K", "designation" => "Multitasking Staff", "image" => ""],
    ["name" => "Akshara S", "designation" => "Multitasking Staff", "image" => $website1."/Facultyimg/staff/Ms. S. Kavipriya.webp"],
    ["name" => "Hari Krishnan S", "designation" => "Multitasking Staff", "image" => $website1."/Facultyimg/staff/Shri S. Hari Krishnan.webp"],
    ["name" => "Kavipriya S", "designation" => "Multitasking Staff", "image" => $website1."/Facultyimg/staff/Ms. S. Kavipriya.webp"],
    ["name" => "Aunnestraj M.R.", "designation" => "Multitasking Staff", "image" => ""],
    ["name" => "Raghul R", "designation" => "Multitasking Staff", "image" => $website1."/Facultyimg/staff/Shri R. Raghul.webp"],
    ["name" => "Greeshma Suresh", "designation" => "Multitasking Staff", "image" => ""],
    ["name" => "Pothys M", "designation" => "Multitasking Staff", "image" => ""],
    ["name" => "Gnaneswaran M", "designation" => "Multitasking Staff", "image" => ""],
    ["name" => "Sakun Kumar", "designation" => "Multitasking Staff", "image" => $website1."/Facultyimg/staff/Shri Sakun Kumar.webp"],
    ["name" => "Eby Jose", "designation" => "Multitasking Staff", "image" => $website1."/Facultyimg/staff/Shri Eby Jose.webp"],
    ["name" => "Shaik Basheer Ahmed", "designation" => "Multitasking Staff", "image" => $website1."/Facultyimg/staff/Shri Shaik Basheer Ahmed.webp"],
    ["name" => "Jothibaskar R", "designation" => "Multitasking Staff", "image" => $website1."/Facultyimg/staff/Shri R. Jothibaskar.webp"],
    ["name" => "Rajeshwaran R", "designation" => "Multitasking Staff", "image" => $website1."/Facultyimg/staff/Shri R. Rajeshwaran.webp"],
    ["name" => "Jeldi Vinay Kumar", "designation" => "Multitasking Staff", "image" => $website1."/Facultyimg/staff/Shri Jeldi Vinay Kumar.webp"],
    ["name" => "Kajal", "designation" => "Multitasking Staff", "image" => $website1."/Facultyimg/staff/Ms. Kajal.webp"],
    ["name" => "Neethu Ravi", "designation" => "Multitasking Staff", "image" => $website1."/Facultyimg/staff/Ms. Neethu Ravi.webp"],
    ["name" => "Tinkoo", "designation" => "Multitasking Staff", "image" => $website1."/Facultyimg/staff/Shri Tinkoo.webp"],
    ["name" => "V. Mutharasan", "designation" => "Multitasking Staff", "image" => ""],
    ["name" => "Tanuj Kumar Chakraborty", "designation" => "Multitasking Staff", "image" => ""],
    ["name" => "Shri Girase Rahul Ranjit", "designation" => "Multitasking Staff", "image" => ""],
    ["name" => "Shri Prem Singh", "designation" => "Multitasking Staff", "image" => ""],
    ["name" => "Shri R. Sabarinathan", "designation" => "Multitasking Staff", "image" => $website1."/Facultyimg/staff/Shri R. Sabarinathan.webp"],
    ["name" => "Shri Parihar Sushant Anil", "designation" => "Multitasking Staff", "image" => $website1."/Facultyimg/staff/Shri Parihar Sushant Anil.webp"],
    ["name" => "Shri Pandiarajan", "designation" => "Multitasking Staff", "image" => $website1."/Facultyimg/staff/Shri B. Pandiarajan.webp"],
    ["name" => "Ms Sreeja", "designation" => "Multitasking Staff", "image" => $website1."/Facultyimg/staff/Ms. G. Sreeja.webp"],
    ["name" => "Shri Abhijith", "designation" => "Multitasking Staff", "image" => ""],
    ["name" => "Shri Midhun", "designation" => "Multitasking Staff", "image" => $website1."/Facultyimg/staff/Shri Midhun G.R.webp"],
    ["name" => "Shri Ankith Kumar", "designation" => "Multitasking Staff", "image" => $website1."/Facultyimg/staff/Shri Ankit Kuamar.webp"],
];


?>
<div class="container-fluid">
    <div class="row">
        <?php foreach ($staff as $member): ?>
            <div class="col-md-3 mb-4"> 
                <div class="card">
                    <?php if (!empty($member['image'])): ?>
                        <img src="<?php echo $member['image']; ?>" class="img-fluid card-img-top" alt="<?php echo $member['name']; ?>">
                    <?php else: ?>
                        <img src="path/to/default/image.jpg" class="img-fluid card-img-top" alt="Default Image">
                    <?php endif; ?>
                    <div class="card-body text-center">
                        <div class="bg-custom p-2" style="background:#2487CE"><?php echo $member['name']; ?></div>
                        <p class="card-text" ><?php echo $member['designation']; ?></p>  
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>



</div>

</div>



<style>
        .card-img-top {
    width: 200px;        /* Set the width of the image */
    height: 220px;      /* Set the height of the image */
    object-fit: cover;  /* Ensures the image covers the entire area without distortion */
    margin: 0 auto;     /* Centers the image horizontally */
    margin-top: 20px;
}

.card {
    display: flex;       /* Use flexbox to center the content */
    justify-content: center;  /* Center content horizontally */
}

.card-body {
    text-align: center;  /* Center the text in the card body */
}
        .bg-custom {
            background-color: #2C4A87;
            color: white;
        }
        </style>




<?php include 'footer.php'; ?>