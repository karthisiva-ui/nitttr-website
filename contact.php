<?php include 'menu.php'; ?>
<!-- Page Title -->
<div class="page-title" data-aos="fade">

<div class="container-fluid">
<div class="row">
<div class="col-12 p-0">
    <section class="inner-banner-section">
        <div class="container">
            <h1 class="banner-title">Contact US</h1>
        </div>
    </section>
</div>
</div>
</div>
<nav class="breadcrumbs">
<div class="container">
  <ol>
    <li><a href="index.php">Home</a></li>
    <li class="vision">Contact US</li> 
  </ol>
</div>
</nav>
</div><!-- End Page Title -->


<div class="container justify-content-center" data-aos="fade-up">

<style>
    /* Reset some default styles for consistency */

 .column1 {
            width: 33%;
            margin-bottom: 20px;
            box-sizing: border-box;
            padding: 10px;
            border: 1px solid #ddd;
            text-align:center;
        }
 

    .container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        max-width: 1400px;
        margin: 0 auto;
    }

    /* Column styles */
    .column {
        width: 20%;
        margin-bottom: 20px;
        box-sizing: border-box;
        padding: 10px;
        border: 1px solid #ddd;
        text-align:center;
font-weight:bold;
background-color: #E8E8E8; /* Light grey color for inactive buttons */
        color: black;

    }

    .column ul li{
        text-align: center;
    }

    /* Media query for smaller screens */
    @media (max-width: 768px) {
        .column {
            width: 100%;
        }
    }

    @media screen and (max-width: 768px) {
        .column {
            width: 100%;
        }
    }



.column.active {
    background-color: #002060; /* Bootstrap primary color */
    color: white !important; /* Set text color to white */
}

.column.active a.nav-link {
    color: white !important; /* Set text color of the link to white */
}
.fa{
font-size: 1.2em;
}




 .container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
  }

  .column1 {
    width: 30%;
    height: 300px;
    perspective: 1000px;
  }





  .flip-card {
    perspective: 1000px;
  }

  .flip-card-inner {
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.5s;
    transform-style: preserve-3d;
  }

  .flip-card:hover .flip-card-inner {
    transform: rotateY(180deg);
  }

  .flip-card-front,
  .flip-card-back {
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    position: absolute;
    top: 0;
    left: 0;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

  }

  .flip-card-front {
    background-color: #ffffff;
    color: black;
  }

  .flip-card-back {
    background-color: #002060;
    color: white;
    transform: rotateY(180deg);
  }

  .flip-card-back a.btn {
    background-color: #002060;
    color: white;
  }

  .flip-card-back a.btn:hover {
    background-color: white;
    color: #007bff;
  }

  .flip-card h2,
  .flip-card p {
    margin: 20px;

  }
</style>










</style>


<div class="container" style=" margin-top: 20px;">
<h2 >Contact us</h2>
<hr>
</div>
<p>&nbsp;</p>





<style>
 
  .flip-container {
    width: 100%;
    height: 100%;
    position: relative;
    transform-style: preserve-3d;
    transition: transform 0.5s;
  }

  .flip-container:hover .flipper {
    transform: rotateY(180deg);
  }

  .flipper {
    width: 100%;
    height: 100%;
    transition: 0.5s;
    transform-style: preserve-3d;
    position: relative;
  }

 

  /* Adjust styles as needed */
  .column1 i {
    font-size: 70px;
    margin: 20px auto;
    display: block;
    text-align: center;
  }

  .column1 h2 {
    text-align: center;
    margin-top: 20px;
  }

  .column1 p {
    text-align: center;
    line-height: 1.6;
    font-size: 1.6rem;
  }
.flip-card-back p {
    text-align: center;
color:white !important;
}

hr{

border: 0.5px solid #ddd;
}

</style>

<div class="container">
  <div class="column1">
    <a href="contact_new1.php" target="_blank">
      <div class="flip-container">
        <div class="flipper">
          <div class="flip-card-front">
            <i class="fa fa-map-marker"></i>

            <h2>Address</h2><hr>
<p>National Institute of Technical Teachers' Training and Research Taramani, Chennai 600113 Tamilnadu</p>

          </div>
          <div class="flip-card-back">
            <p>Click here to view the address of NITTTR Chennai and its regional centers</p>
          </div>
        </div>
      </div>
    </a>
  </div>

  <div class="column1">
    <a href="phone.php" target="_blank">
      <div class="flip-container">
        <div class="flipper">
          <div class="flip-card-front">
            <i class="fa fa-address-book"></i>
            <h2>Directory</h2><hr><p>Click here to view the Telephone directory of NITTTR Employees</p>
          </div>
          <div class="flip-card-back">
            <p>Click here to view the Telephone directory of NITTTR Employees</p>
          </div>
        </div>
      </div>
    </a>
  </div>

  <div class="column1">
    <a href="maps.php" target="_blank">
      <div class="flip-container">
        <div class="flipper">
          <div class="flip-card-front">
            <i class="fa fa-map-o"></i>
            <h2>Maps & Directions</h2><hr><p>To Reach NITTTR Chennai through various modes</p>
          </div>
          <div class="flip-card-back">
            <p>Click here to Reach NITTTR Chennai through various modes</p>
          </div>
        </div>
      </div>
    </a>
  </div>
</div>



<p>&nbsp;</p><p>&nbsp;</p>
<p>&nbsp;</p>

</div>






<?php include 'footer.php'; ?>