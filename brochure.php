<?php include 'menu.php'; ?>
<!-- Page Title -->
<div class="page-title" data-aos="fade">

<div class="container-fluid">
<div class="row">
<div class="col-12 p-0"> <section class="inner-banner-section">
        <div class="container">
            <h1 class="banner-title">Institute Brochure</h1>
        </div>
    </section>
</div>
</div>
</div>
<nav class="breadcrumbs">
<div class="container">
  <ol>
    <li><a href="index.php">Home</a></li>
    <li class="vision">Information Corner</li> 
    <li class="vision">Brochure</li> 
  </ol>
</div>
</nav>
</div><!-- End Page Title -->

<style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
   
    .card-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
       max-width:1100px;
      margin:auto;
    }
   
    .card {
      flex-basis: calc(30.33% - 20px);
      margin: 10px;
      background-color: #f5f5f5;
      border: 1px solid #ddd;
      border-radius: 5px;
      overflow: hidden;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
     
    }
   
    .card:hover {
      transform: translateY(-5px);
    }
   
    .card-header img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }
   
    .card-body {
      padding: 15px;
      text-align: center;
    }
   
    .card-footer {
      text-align: center;
      background-color: rgb(10, 188, 241);
      margin-bottom: 0px;
      padding: 10px;
     
      
    }

    .card-footer a {
      display: inline-block;
      padding: 10px 20px;
      background-color: rgb(10, 188, 241);
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
    }

   
    @media (max-width: 768px) {
      .card {
        flex-basis: calc(100% - 20px);
      }
    }
  </style>
<div class="container justify-content-center" data-aos="fade-up">

<div class="card-container">
   
    <div class="card">
      <div class="card-header">
       <a href="assets/img/brochure/Institute_brochure.pdf" target="_blank"> <img src="assets/img/brochure_img/nitttr.jpg" alt="Card Image"></a>
      </div>
      <div class="card-body">
       <a href="assets/img/brochure/Institute_brochure.pdf" target="_blank"> <h2>Train at NITTTR Chennai</h2></a>
        <p></p>
      </div>
      <div class="card-footer">
        <a href="assets/img/brochure/Institute_brochure.pdf" download>Download Brochure</a>
      </div>
    </div>
 
    <div class="card">
      <div class="card-header">
       <a href="assets/img/brochure/insbrochure1.pdf" target="_blank"> <img src="assets/img/brochure_img/facility.jpg" alt="Card Image"></a>
      </div>
      <div class="card-body">
       <a href="assets/img/brochure/insbrochure1.pdf" target="_blank"> <h2>Facility at NITTTR Chennai</h2></a>
        <p></p>
      </div>
      <div class="card-footer">
        <a href="brochure/insbrochure1.pdf" download>Download Brochure</a>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
<a href="assets/img/brochure/NITTTR_Prospectus.pdf" target="_blank"><img src="assets/img/brochure_img/prospectus.jpg" alt="Card Image"></a>
      </div>
      <div class="card-body">
       <a href="assets/img/brochure/NITTTR_Prospectus.pdf" target="_blank"> <h2>NITTTR <br> Prospectus</h2></a>
      </div>
      <div class="card-footer">
        <a href="assets/img/brochure/NITTTR_Prospectus.pdf" download>Download Brochure</a>
      </div>
    </div>

    <div class="card">
        <div class="card-header">
        <a href="assets/img/brochure/skill.pdf" target="_blank"><img src="assets/img/brochure_img/skill.jpg" alt="Card Image"></a>
        </div>
        <div class="card-body">
         <a href="assets/img/brochure/skill.pdf" target="_blank"> <h2>Skill Development Activities</h2></a>
          <p></p>
        </div>
        <div class="card-footer">
            <a href="assets/img/brochure/skill.pdf" download>Download Brochure</a>
        </div>
      </div>
   
    <!-- Add more cards here -->
   
  </div>
  <br>

<!-- 
  <h1 style="text-align: center; opacity: 0.7;">Programme Brochure</h1>
  <div class="card-container">
   
    <div class="card">
      <div class="card-header">
       <a href="./files/latestt.pdf" target="_blank"> <img src="assets/img/brochure_img/infra.webp" alt="Card Image"></a>
      </div>
      <div class="card-body">
        <a href="./files/latestt.pdf" target="_blank">  <h2>M.E. Infrastructure Engineering and Management</h2></a>
        <p></p>
      </div>
      <div class="card-footer">
        <a href="./files/latestt.pdf" download>Download Brochure</a>
      </div>
    </div>
 
    <div class="card">
      <div class="card-header">
        <a href="./files/ME_Brochure_VLSI.pdf" target="_blank">  <img src="assets/img/brochure_img/vlsi.jpg" alt="Card Image"></a>
      </div>
      <div class="card-body">
        <a href="./files/ME_Brochure_VLSI.pdf" target="_blank">  <h2>M.E. VLSI Design <br>and Embedded Systems</h2></a>
        <p></p>
      </div>
      <div class="card-footer">
        <a href="./files/ME_Brochure_VLSI.pdf" download>Download Brochure</a>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <a href="https://www.nitttrc.ac.in/computer_science.php#top" target="_blank">  <img src="assets/img/brochure_img/com.jpg" alt="Card Image"></a>
      </div>
      <div class="card-body">
       <a href="https://www.nitttrc.ac.in/computer_science.php#top" target="_blank"> <h2>M.E. Computer Science & Engineering</h2></a>
      </div>
      <div class="card-footer">
        <a href="https://www.nitttrc.ac.in/computer_science.php#top">Download Brochure</a>
      </div>
    </div>

    <div class="card">
        <div class="card-header">
         <a href="./files/ME_Energy_Engg.pdf" target="_blank"> <img src="assets/img/brochure_img/industry.jpg" alt="Card Image"></a>
        </div>
        <div class="card-body">
         <a href="./files/ME_Energy_Engg.pdf" target="_blank"> <h2>M.E. Industrial Safety Engineering</h2></a>
          <p></p>
        </div>
        <div class="card-footer">
            <a href="./files/ME_Energy_Engg.pdf" download>Download Brochure</a>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
          <a href="./files/MEMultimedia.pdf" target="_blank"><img src="assets/img/brochure_img/multimedia.jpg" alt="Card Image"></a>
        </div>
        <div class="card-body">
          <a href="./files/MEMultimedia.pdf" target="_blank"><h2>M.E. Multimedia Technology</h2></a>
          <p></p>
        </div>
        <div class="card-footer">
            <a href="./files/MEMultimedia.pdf" download>Download Brochure</a>
        </div>
    </div> -->
 
   
    <!-- Add more cards here -->
   
  </div>
  <br><br><br><br>
</div>






<?php include 'footer.php'; ?>