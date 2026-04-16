<?php
// 3D Laparoscopy Surgery Service Page – Ambikapur
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>3D Laparoscopy Surgery in Ambikapur – Dr. Ankita Bansal Goyal</title>
    <meta name="description" content="Expert 3D Laparoscopy surgery in Ambikapur by Dr. Ankita Bansal Goyal. Minimally invasive, precise, fast recovery for gynecological conditions.">
    <meta name="keywords" content="3D Laparoscopy, Ambikapur, Gynecological surgery, minimally invasive surgery, Dr. Ankita Goyal">
    <!-- Open Graph -->
    <meta property="og:title" content="3D Laparoscopy Surgery in Ambikapur" />
    <meta property="og:description" content="Experience state‑of‑the‑art 3D laparoscopic surgery with faster recovery and superior outcomes." />
    <meta property="og:url" content="https://drankitalaparoscopy.in/ambikapur-3d-laparoscopy.php" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://drankitalaparoscopy.in/assets/3d-laparoscopy-hero.jpg" />
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalProcedure",
      "name": "3D Laparoscopy Surgery",
      "url": "https://drankitalaparoscopy.in/ambikapur-3d-laparoscopy.php",
      "description": "Minimally invasive 3D laparoscopic surgery for gynecological conditions performed in Ambikapur.",
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
    <section class="hero" style="background-image:url('assets/3d-laparoscopy-hero.jpg');">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1>3D Laparoscopy Surgery in Ambikapur</h1>
            <p>Precision, safety, and rapid recovery with cutting‑edge 3D technology.</p>
            <a href="#contact" class="cta-button">Book Your Consultation</a>
        </div>
    </section>

    <section class="service-overview" id="overview">
        <h2>Why Choose 3D Laparoscopy?</h2>
        <p>3D laparoscopy offers three‑dimensional vision, allowing surgeons to perform intricate procedures with unparalleled accuracy. Benefits include smaller incisions, less postoperative pain, reduced blood loss, and a quicker return to daily activities.</p>
    </section>

    <section class="service-conditions" id="conditions">
        <h2>Conditions Treated with 3D Laparoscopy</h2>
        <ul>
            <li>Uterine Fibroids</li>
            <li>Ovarian Cysts</li>
            <li>Endometriosis</li>
            <li>PCOS / PCOD</li>
            <li>Hysterectomy</li>
            <li>High‑Risk Obstetric Cases</li>
        </ul>
    </section>

    <section class="service-process" id="process">
        <h2>Our 3‑Step Procedure</h2>
        <ol>
            <li><strong>Consultation &amp; Imaging:</strong> Detailed evaluation and 3‑D imaging to plan the surgery.</li>
            <li><strong>Precision Surgery:</strong> Using a 3‑D camera and specialized instruments for minimal trauma.</li>
            <li><strong>Recovery &amp; Follow‑up:</strong> Tailored post‑op care ensuring fast healing.</li>
        </ol>
    </section>

    <section class="faq" id="faq">
        <h2>Frequently Asked Questions</h2>
        <details>
            <summary>Is 3D laparoscopy safer than traditional open surgery?</summary>
            <p>Yes – it reduces incision size, blood loss, and postoperative pain, leading to faster recovery.</p>
        </details>
        <details>
            <summary>How long is the hospital stay?</summary>
            <p>Most patients are discharged within 24‑48 hours.</p>
        </details>
        <details>
            <summary>Can I schedule a same‑day consultation?</summary>
            <p>Absolutely. Use the contact form below or call us directly.</p>
        </details>
    </section>

    <section class="contact" id="contact">
        <h2>Schedule Your 3D Laparoscopy Consultation</h2>
        <?php include 'contact-form.php'; ?>
    </section>

<?php include 'footer.php'; ?>
</body>
</html>
?>
