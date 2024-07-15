<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>  
    <link rel="icon" type="image/x-icon" href="./Images/tab_icon.png">

    <!-- bootstrap link -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- bootstrap link -->
    <!-- css link -->
    <link rel="stylesheet" href="./style.css">
    <script src="script.js"></script>
    <!-- css link -->
    <!-- fa fa icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- fa fa icon -->
</head>
<body>

<?php include('header.php');?>
  <!-- header -->
   
    <!-- Slider Section -->
    <section id="slider" class="carousel slide bannersec" data-bs-ride="carousel">
      <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="./Assets/index-banner.png" class="d-block img-fluid"  alt="Slide 1">
              <div class="carousel-caption text-start">
                  <h1 class="display-4">Discover Accurate Diagnostics<br> with Precision and Care!</h1>
                  <p class="lead">At VScans & Labs, we're dedicated to providing precision<br> diagnostics and compassionate care to promote your well-being.<br> Our state-of-the-art facilities and expert medical <br>professionals ensure accurate results and a holistic approach <br>to health assessment.</p>
                  <a href="tel:+917888030303" class="btn btn-primary"><i class="fa fa-phone"></i> +91-78880 30303</a>
                  <a href="#" class="btn btn-secondary">Contact Us</a>
              </div>
          </div>
          <div class="carousel-item">
              <img src="./Assets/index-banner.png" class="d-block w-100 img-fluid" alt="Slide 2">
              <div class="carousel-caption text-start">
                  <h1 class="display-4">Comprehensive Care for You and Your Family</h1>
                  <p class="lead">We offer a wide range of diagnostic services to meet the needs of our diverse community.</p>
                  <a href="tel:+917888030303" class="btn btn-primary"><i class="fa fa-phone"></i> +91-78880 30303</a>
                  <a href="#" class="btn btn-secondary">Contact Us</a>
              </div>
          </div>
          <div class="carousel-item">
              <img src="./Assets/index-banner.png" class="d-block w-100 img-fluid" alt="Slide 3">
              <div class="carousel-caption text-start">
                  <h1 class="display-4">State-of-the-Art Diagnostic Facilities</h1>
                  <p class="lead">Our advanced technology ensures accurate and timely results for all your diagnostic needs.</p>
                  <a href="tel:+917888030303" class="btn btn-primary"><i class="fa fa-phone"></i> +91-78880 30303</a>
                  <a href="#" class="btn btn-secondary">Contact Us</a>
              </div>
          </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
      </button>
  </section>
   <!-- header -->
    <!-- section 2 start-->
    <div class="container-fluid p-5 text-white text-center padding-top-bottom-color-sec">
        <h1>Explore our Services</h1>
        <p>Discover our range of health check packages, designed to cater to your specific needs. From basic <br>diagnostics to premium wellness evaluations, we offer comprehensive insights that empower you <br>to take charge of your health.</p> 
      </div>
      <section class="sec-row">
      <div class="container">
         <div id="exploreservices" class="row margin-top-minus-50"></div>
      </div>
  </section>
    <!-- section 2 -->
    <!-- section3  -->
    <div class="container padding-top-bottom-sec">
      <div class="row">
         <div class="section-3">
            <h1 class="text-center">OUR DOCTORS</h1>
            <p class="text-center">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut<br> labore et dolore magna aliquyam erat, sed</p>
         </div>
      </div>
      <div id="doctor_data" class="row"></div>
   </div>
    <!-- section3  -->

    <!-- section 4  -->
    <section>
      <div class="container">
        <div class="row">

          <div class="col-lg-12 col-xs-12 client-testimonials-section-content">
           <h4 class="text-center">CLIENT TESTIMONIALS</h4> 
           <h1 class="text-center mt-3">What our clients say</h1>
           <p class="text-center mt-3"> quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV <br>quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs.</p>
        </div>
      </div>
      <div id="testimonal_datas" class="row mt-5"></div>
        </div>
      </div>
    </section>
    <!-- section 4 -->



    <!-- footer -->
    <?php include('footer.php');?>
    <!-- footer -->
</body>
</html>
<!-- hhh = "128_Slice_Low_Dose_CTScan" -->
<script>
   const columnData = [
     {
       imgSrc: "./Images/1png.png",
       title: "1.5T - 48CH SIEMENS MRI SCAN",
       description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at est id leo",
       link:"Specialities/01_1.5T_48CH_SIEMENS_MRISCAN.php",
     },
     {
       imgSrc: "./Images/2png.png",
       title: "128 Slice Low Dose CT Scan",
       description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at est id leo",
       link: "Specialities/02_128_Slice_Low_Dose_CTScan.php",
     },
     {
       imgSrc: "./Images/3png.png",
       title: "5 BEAS CORONARY ANGIOGRAM",
       description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at est id leo",
       link: "Specialities/03_5_BEAS_Coronary_Angiogram.php",
     },
     {
       imgSrc: "./Images/1png.png",
       title: "4D Ultrasound Scan",
       description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at est id leo",
       link: "Specialities/04_4D_ultrasound_Scan.php",
     },
     {
       imgSrc: "./Images/2png.png",
       title: "Ultrasound Elastography",
       description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at est id leo",
       link: "Specialities/05_Ultrasound_Elastography.php",
     },
     {
       imgSrc: "./Images/3png.png",
       title: "Color Doppler",
       description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at est id leo",
       link: "Specialities/06_Color_Doppler.php",
     },
     {
       imgSrc: "./Images/1png.png",
       title: "Pregnancy Scan",
       description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at est id leo",
       link: "Specialities/07_Pregnancy_Scan.php",
     },
     {
       imgSrc: "./Images/2png.png",
       title: "Digital Mammogram",
       description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at est id leo",
       link: "Specialities/08_Digital_mamogram.php",
     },
     {
       imgSrc: "./Images/3png.png",
       title: "DIGITAL X-RAY",
       description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at est id leo",
       link: "Specialities/09_digital_xray.php",
     },
     // Add more objects for additional columns if needed
   ];

   

   // Reference to the container element
   const exploreservices = document.getElementById("exploreservices");

   // Loop through the array and generate HTML for each column
   columnData.forEach(data => {
     const columnHTML = `
       <div class="col-lg-4 col-sm-4 col-xs-12 card-1-boxshadow">
         <div class="hp-sp_sec_inner">
           <img src="${data.imgSrc}" class="img-fluid">
           <div class="hp-sp_sec_content">
             <h5 class="text-left">${data.title}</h5>
             <p class="text-left">${data.description}</p>
             <a href="${data.link}" target="_blank" class="">Read More<i class="fa fa-arrow-right p-2" aria-hidden="true"></i></a>
           </div>
         </div>
       </div>
     `;

     // Append the generated HTML to the container
     exploreservices.innerHTML += columnHTML;
   });
 </script>


<script>
   // Array of data for each column
   const doctordata = [
     {
       imgSrc: "./Images/doctorpng1.png",
       doctorname: "Doris Jordan",
       doctordescription: "Design Expert",
     },
     {
       imgSrc: "./Images/doctorpng2.png",
       doctorname: "Johnny Ramirez",
       doctordescription: "Design Expert",
     },
     {
       imgSrc: "./Images/doctorpng3.png",
       doctorname: "Diana Wagner",
       doctordescription: "Design Expert",
     },
     {
       imgSrc: "./Images/doctorpng1.png",
       doctorname: "Harry Garrett",
       doctordescription: "Design Expert",
     },
    
    
   ];

   

   // Reference to the container element
   const doctor_data = document.getElementById("doctor_data");

   // Loop through the array and generate HTML for each column
   doctordata.forEach(data => {
     const columnHTML = `
     <div class="col-lg-3 col-sm-4 col-xs-12">
     <div class="doctor-card">
  <img src="${data.imgSrc}" alt="Doctor Name" class="doctor-image">
  <div class="doctor-info">
    <h3 class="doctor-name">${data.doctorname}</h3>
    <p class="doctor-role">${data.doctordescription}</p>
  </div>
</div>
</div>

     `;

     // Append the generated HTML to the container
     doctor_data.innerHTML += columnHTML;
   });
 </script>


<script>
  // Array of data for each column
  const testimonaldatas = [
    {
      imgSrc: "data:image/png;base64,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",
      patient_name: "Eugene Freeman",
      patient_name_1 : "Tincidunt",
      patient_description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at est id leo luctus gravida a in ipsum.",
    },
    {
      imgSrc: "data:image/png;base64,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",
      patient_name: "Johnny Ramirez",
      patient_name_1 : "Tincidunt",
      patient_description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at est id leo luctus gravida a in ipsum.",
    },
    {
      imgSrc: "data:image/png;base64,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",
      patient_name: "Diana Wagner",
      patient_name_1 : "Tincidunt",
      patient_description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at est id leo luctus gravida a in ipsum.",
    },
 
   
   
  ];

  

  // Reference to the container element
  const testimonal_datas = document.getElementById("testimonal_datas");

  // Loop through the array and generate HTML for each column
  testimonaldatas.forEach(data => {
    const columnHTML = `
    <div class="col-lg-4 col-sm-4 col-xs-12 my-3">
            <div class="client-testimonal-card">
              <div class="card-img-content">
                <img src="${data.imgSrc}" alt="">
                <div class="">
                  <p class="testimonal_person_name">${data.patient_name}</p>
                  <p class="">${data.patient_name_1}</p>
                </div>
                <span><i class="fa fa-quote-left" aria-hidden="true"></i></span>
              </div>
              <p class="card-des">${data.patient_description}</p>

            </div>
        </div>

    `;

    // Append the generated HTML to the container
    testimonal_datas.innerHTML += columnHTML;
  });
</script>