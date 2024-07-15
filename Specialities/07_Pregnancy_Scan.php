<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregancy Scan</title>
    <link rel="icon" type="image/x-icon" href="./Images/tab_icon.png">

    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <!-- bootstrap link -->
    <!-- css link -->
    <link rel="stylesheet" href="../style.css">
    <script src="script.js"></script>
    <!-- css link -->
</head>
<body>

<?php include('header2.php');?>
    <div class="banner">
    
    </div>
<!-- Banner -->

<!-- section 1 -->
<div class="container padding-top-bottom-sec">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="blue-color fs-3 mt-3">Welcome to Pregnancy Scan: Comprehensive Imaging for Expectant Parent
            </h1>
        </div>
        <div class="col-lg-12">
            <p class="ptag-grey-color">
                Congratulations on your pregnancy journey! At <b>V Scans & Labs</b>, we offer specialized pregnancy scans to provide you with valuable insights into your baby's growth and development, ensuring a healthy and happy pregnancy experience.
              </p>
        </div>
        <div class="col-lg-12">
            <h1 class="blue-color fs-3">When and Why Pregnancy Scans are Recommended</h1>
        </div>
        <div class="col-lg-12">
            <p class="ptag-grey-color mt-2 mb-2">
                Pregnancy scans are recommended at various stages of pregnancy for several reasons:
            <ul>
              <li class="ptag-grey-color mt-2 mb-2">
                <b>Confirmation of Pregnancy:</b> In the early stages of pregnancy, a pregnancy scan confirms the presence of a gestational sac, fetal pole, and heartbeat, providing reassurance and confirmation of a viable pregnancy.
              </li>
              <li class="ptag-grey-color mt-2 mb-2">
                <b>Dating and Gestational Age Assessment:</b> Pregnancy scans accurately determine the gestational age of the fetus, helping healthcare providers establish an estimated due date and monitor fetal growth and development throughout the pregnancy.
              </li>
              <li class="ptag-grey-color mt-2 mb-2">
                <b>Anatomical Assessment:</b> Anomaly scans, usually performed around 20 weeks of gestation, assess the baby's anatomy, including the brain, heart, spine, limbs, and organs, to detect any structural abnormalities or congenital anomalies.
              </li>
              <li class="ptag-grey-color mt-2">
                <b>Fetal Well-being Monitoring:</b> Regular pregnancy scans monitor fetal growth, movement, and well-being, ensuring that the baby is developing appropriately and detecting any potential concerns that may require further evaluation or intervention.
              </li>
            </ul>   
            </p>
        </div>
    </div>
</div>
<!-- section 1 -->


<!-- Faq -->
<div class="container">
<div class="accordion-container">
  <div class="accordion-item mb-2">
      <button class="accordion-header">
        Benefits of Undergoing a Pregnancy Scan<span class="icon">+</span>
      </button>
      <div class="accordion-content">
          <p>Opting for a pregnancy scan offers several advantages:
            <br><b>Reassurance and Peace of Mind:</b> Pregnancy scans provide expectant parents with reassurance and peace of mind by visualizing the baby's development and confirming the well-being of the pregnancy.<br> 
            <b>Bonding Experience:</b> Pregnancy scans offer a unique opportunity for expectant parents to bond with their baby, providing an intimate glimpse into the miracle of life and fostering a deeper connection even before birth.<br> 
            <b>Early Detection of Abnormalities:</b> Anomaly scans detect structural abnormalities or congenital anomalies early on, allowing healthcare providers to initiate appropriate diagnostic testing, counseling, and interventions as needed.<br> 
            <b>Personalized Care and Support:</b> At [Your Clinic/Hospital Name], our compassionate team of obstetricians, sonographers, and support staff provides personalized care and support to expectant parents throughout their pregnancy journey, ensuring a positive and reassuring ultrasound experience.
          </p>
      </div>
  </div>
  <div class="accordion-item mt-3 mb-2">
      <button class="accordion-header">
        Procedure of a Pregnancy Scan <span class="icon">+</span>
      </button>
      <div class="accordion-content">
          <p>
            During the pregnancy scan, a specially trained sonographer applies ultrasound gel to the mother's abdomen and uses a transducer to capture images of the baby in the womb. The sonographer will assess various parameters, including fetal size, anatomy, position, and movements, providing expectant parents with a comprehensive overview of their baby's development.
          </p>
      </div>
  </div>
</div>
</div>
<!-- Faq -->

<!-- section 3 -->
<div class="container padding-top-bottom-sec mt-4">
          <div class="row padding-top-bottom-sec-20">
            <div class="col-lg-12">
                <h1 class="blue-color fs-3">Commitment to Excellence and Patient Care</h1>
            </div>
            <div class="col-lg-12">
              <p class="ptag-grey-color">
                At V Scans & Labs , we are committed to providing the highest standard of care to our patients. Our experienced team of obstetricians, sonographers, and support staff utilizes state-of-the-art ultrasound technology and follows rigorous quality assurance protocols to ensure accurate and reliable imaging results.
                </p>
          </div>
            </div>

            
          <div class="row padding-top-bottom-sec-20">
            <div class="col-lg-12">
                <h1 class="blue-color fs-3">Experience the Joy of Pregnancy Scans with Us</h1>
            </div>
            <div class="col-lg-12">
              <p class="ptag-grey-color">
                Discover the joy of pregnancy scans at V Scans & Labs. Contact us today to schedule your appointment and experience the expertise and compassion of our team as we accompany you on this remarkable journey of pregnancy and parenthood.
              </p>
          </div>
            </div>

</div>
<!-- section 3 -->


<!-- section 4 -->
<?php include('footer.php');?>
<!-- section 4 -->

</body>
  <script>
 document.querySelectorAll('.accordion-header').forEach(button => {
    button.addEventListener('click', () => {
        const accordionContent = button.nextElementSibling;

        button.classList.toggle('active');

        if (button.classList.contains('active')) {
            accordionContent.style.maxHeight = accordionContent.scrollHeight + 'px';
        } else {
            accordionContent.style.maxHeight = 0;
        }

        // Close other open accordion items
        document.querySelectorAll('.accordion-header').forEach(otherButton => {
            if (otherButton !== button) {
                otherButton.classList.remove('active');
                otherButton.nextElementSibling.style.maxHeight = 0;
            }
        });
    });
});

    </script>
</html>