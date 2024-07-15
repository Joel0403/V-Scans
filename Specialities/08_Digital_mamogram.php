<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digitial Mamogram</title>
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
            <h1 class="blue-color fs-3 mt-3">Introducing Low Radiation Digital Mammogram: Advanced Breast Imaging for Early Detection
            </h1>
        </div>
        <div class="col-lg-12">
            <p class="ptag-grey-color">
              Welcome to our advanced breast imaging service featuring Low Radiation Digital Mammography. Our state-of-the-art technology prioritizes patient safety and comfort while providing exceptional image quality for the early detection and diagnosis of breast cancer.
              </p>
        </div>
        <div class="col-lg-12">
            <h1 class="blue-color fs-3">When and Why Low Radiation Digital Mammograms are Recommended</h1>
        </div>
        <div class="col-lg-12">
            <p class="ptag-grey-color mt-2 mb-2">
              Low Radiation Digital Mammograms are recommended for various reasons:
            <ul>
              <li class="ptag-grey-color mt-2 mb-2">
                <b>Breast Cancer Screening:</b> Mammography is the gold standard for breast cancer screening, allowing healthcare providers to detect breast abnormalities such as tumors, calcifications, and masses at an early stage when treatment is most effective.
              </li>
              <li class="ptag-grey-color mt-2 mb-2">
                <b>Early Detection of Breast Abnormalities:</b> Digital mammography offers superior image quality and sensitivity, enabling the early detection of breast abnormalities that may not be palpable during physical examination, increasing the likelihood of successful treatment outcomes.
              </li>
              <li class="ptag-grey-color mt-2 mb-2">
                <b>Monitoring Breast Health:</b> For women with a personal or family history of breast cancer or other risk factors, regular mammograms are essential for monitoring breast health and detecting any changes or abnormalities that may indicate the presence of cancerous or precancerous lesions.
              </li>
              <li class="ptag-grey-color mt-2">
                <b>Evaluation of Breast Symptoms:</b> Mammography is used to evaluate breast symptoms such as lumps, pain, nipple discharge, or changes in breast size or shape, helping healthcare providers determine the underlying cause and formulate appropriate treatment plans.
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
        Benefits of Low Radiation Digital Mammography<span class="icon">+</span>
      </button>
      <div class="accordion-content">
          <p>Opting for a Low Radiation Digital Mammogram offers several advantages:
            <br><b>High Image Resolution: </b>Digital mammography produces high-resolution images that allow for detailed visualization of breast tissue, facilitating the detection of small abnormalities and improving diagnostic accuracy. <br> 
            <b>Comfortable and Efficient:</b> Our digital mammography system is designed for patient comfort and efficiency, with shorter examination times and reduced discomfort compared to traditional film-based mammography.<br> 
            <b>Early Detection and Intervention:</b> By detecting breast abnormalities at an early stage, low radiation digital mammograms enable prompt intervention and treatment, potentially reducing the morbidity and mortality associated with breast cancer.<br> 
          </p>
      </div>
  </div>
  <div class="accordion-item mt-3 mb-2">
      <button class="accordion-header">
        Procedure of a Low Radiation Digital Mammogram <span class="icon">+</span>
      </button>
      <div class="accordion-content">
          <p>
            During the mammogram, the breast is compressed between two plates while low-dose X-ray images are captured. The entire procedure takes only a few minutes per breast and is performed by our experienced technologists in a comfortable and private setting.
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
                At V Scans & Labs , we are committed to providing the highest standard of care to our patients. Our dedicated team of radiologists, technologists, and support staff utilizes state-of-the-art digital mammography technology and follows strict quality assurance protocols to ensure accurate and reliable imaging results.
                </p>
          </div>
            </div>

            
          <div class="row padding-top-bottom-sec-20">
            <div class="col-lg-12">
                <h1 class="blue-color fs-3">Experience Advanced Breast Imaging with Us</h1>
            </div>
            <div class="col-lg-12">
              <p class="ptag-grey-color">
                Discover the benefits of low radiation digital mammography at V Scans & Labs. Contact us today to schedule your appointment and experience the expertise and compassion of our team as we prioritize your breast health and well-being.
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