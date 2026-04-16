<?php
// Gynecological Surgery Service Page – Ambikapur
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gynecological Surgery in Ambikapur – Dr. Ankita Bansal Goyal</title>
    <meta name="description" content="Advanced gynecological surgery services in Ambikapur by Dr. Ankita Bansal Goyal, offering minimally invasive techniques for optimal outcomes.">
    <meta name="keywords" content="Gynecological surgery, Ambikapur, minimally invasive gynecology, Dr. Ankita Goyal">
    <!-- Open Graph -->
    <meta property="og:title" content="Gynecological Surgery in Ambikapur" />
    <meta property="og:description" content="State‑of‑the‑art gynecological surgeries performed with precision and care in Ambikapur." />
    <meta property="og:url" content="https://drankitalaparoscopy.in/gynecological-surgery.php" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://drankitalaparoscopy.in/assets/gynecological-surgery-hero.jpg" />
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalProcedure",
      "name": "Gynecological Surgery",
      "url": "https://drankitalaparoscopy.in/gynecological-surgery.php",
      "description": "Comprehensive gynecological surgical services in Ambikapur, including laparoscopic and robotic procedures.",
      "provider": {
        "@type": "MedicalClinic",
        "name": "Dr. Ankita Bansal Goyal Clinic",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Ambikapur",
          "addressRegion": "Chhattisgarh",
          "addressCountry": "IN"
        },
        "telephone": "+91-XXXXXXXXXX"
      }
    }
    </script>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <section class="hero" style="background-image:url('assets/gynecological-surgery-hero.jpg');">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1>Gynecological Surgery in Ambikapur</h1>
            <p>Precision‑driven, minimally invasive procedures for women’s health.</p>
            <a href="#contact" class="cta-button">Book Your Consultation</a>
        </div>
    </section>

    <section class="service-overview" id="overview">
        <h2>Our Expertise</h2>
        <p>We offer a full spectrum of gynecological surgeries – from laparoscopic myomectomy to advanced hysterectomy – using the latest technology to ensure safety and quick recovery.</p>
    </section>

    <section class="service-conditions" id="conditions">
        <h2>Conditions Treated</h2>
        <ul>
            <li>Uterine Fibroids</li>
            <li>Endometriosis</li>
            <li>Ovarian Cysts</li>
            <li>Pelvic Inflammatory Disease</li>
            <li>Infertility‑related surgeries</li>
        </ul>
    </section>

    <section class="service-process" id="process">
        <h2>Our Surgical Process</h2>
        <ol>
            <li><strong>Consultation &amp; Diagnosis:</strong> Detailed assessment and imaging.</li>
            <li><strong>Minimally Invasive Surgery:</strong> Laparoscopic or robotic techniques.</li>
            <li><strong>Recovery &amp; Follow‑up:</strong> Personalized post‑op care.</li>
        </ol>
    </section>

    <section class="faq" id="faq">
        <h2>Frequently Asked Questions</h2>
        <details>
            <summary>What is the typical recovery time?</summary>
            <p>Most patients resume normal activities within 1‑2 weeks.</p>
        </details>
        <details>
            <summary>Are these surgeries covered by insurance?</summary>
            <p>Yes, we assist with claim paperwork for most major insurers.</p>
        </details>
    </section>

    <section class="contact" id="contact">
        <h2>Schedule Your Gynecological Surgery Consultation</h2>
        <?php include 'contact-form.php'; ?>
    </section>

<?php include 'footer.php'; ?>
</body>
</html>
?>
