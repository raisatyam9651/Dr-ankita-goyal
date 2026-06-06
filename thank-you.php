<?php
/**
 * Thank You Page - Dr. Ankita Laparoscopy Website
 */

$page_title = 'Thank You | Dr. Ankita Bansal Goyal';
$base_url = './';

require_once 'header.php';
?>

<!-- Thank You Hero Section -->
<section class="thankyou-hero">
    <div class="container">
        <div class="thankyou-content">
            <div class="thankyou-icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <h1>Thank You for Reaching Out!</h1>
            <p class="thankyou-subtitle">Your appointment request has been received successfully.</p>

            <div class="thankyou-message">
                <p>Dr. Ankita and our team at Sankalp Hospital will review your details and get back to you within <strong>24 hours</strong> to confirm your appointment.</p>
            </div>

            <div class="thankyou-card">
                <h3><i class="fas fa-info-circle"></i> What Happens Next?</h3>
                <ul class="next-steps">
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <div>
                            <strong>We will call you</strong>
                            <span>Our team will contact you to confirm your preferred date and time</span>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-calendar-check"></i>
                        <div>
                            <strong>Appointment confirmation</strong>
                            <span>You will receive a confirmation with all the details</span>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-file-medical"></i>
                        <div>
                            <strong>Prepare for your visit</strong>
                            <span>Bring any previous medical reports for a more comprehensive consultation</span>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="emergency-box">
                <i class="fas fa-exclamation-triangle"></i>
                <div>
                    <strong>Need urgent care?</strong>
                    <p>If you have a medical emergency, please call Sankalp Hospital directly or visit the emergency department.</p>
                </div>
            </div>

            <div class="thankyou-actions">
                <a href="index.php" class="btn btn-primary">
                    <i class="fas fa-home"></i> Back to Home
                </a>
                <a href="https://wa.me/919691212570" class="btn btn-outline" target="_blank" rel="noopener">
                    <i class="fab fa-whatsapp"></i> Chat with Us
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Info Strip -->
<section class="contact-strip">
    <div class="container">
        <div class="strip-grid">
            <div class="strip-item">
                <i class="fas fa-phone"></i>
                <div>
                    <strong>Call Us</strong>
                    <span>+91 96912 12570</span>
                </div>
            </div>
            <div class="strip-item">
                <i class="fas fa-map-marker-alt"></i>
                <div>
                    <strong>Location</strong>
                    <span>Sankalp Hospital, Ambikapur</span>
                </div>
            </div>
            <div class="strip-item">
                <i class="fas fa-clock"></i>
                <div>
                    <strong>Working Hours</strong>
                    <span>Mon - Sat: 9:00 AM - 5:00 PM</span>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Thank You Page Styles */
.thankyou-hero {
    min-height: 70vh;
    display: flex;
    align-items: center;
    padding: 80px 0;
    background: linear-gradient(135deg, #f8f4ff 0%, #fff 50%, #f0f7ff 100%);
}

.thankyou-content {
    max-width: 700px;
    margin: 0 auto;
    text-align: center;
}

.thankyou-icon {
    width: 100px;
    height: 100px;
    background: linear-gradient(135deg, #00a86b, #00c853);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 30px;
    animation: pulse 2s ease-in-out infinite;
}

.thankyou-icon i {
    font-size: 50px;
    color: #fff;
}

@keyframes pulse {
    0%, 100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(0, 168, 107, 0.4); }
    50% { transform: scale(1.05); box-shadow: 0 0 0 20px rgba(0, 168, 107, 0); }
}

.thankyou-hero h1 {
    font-family: 'Tenor Sans', serif;
    font-size: 2.5rem;
    color: #1a1a2e;
    margin-bottom: 15px;
}

.thankyou-subtitle {
    font-size: 1.2rem;
    color: #666;
    margin-bottom: 30px;
}

.thankyou-message {
    background: #fff;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    margin-bottom: 35px;
}

.thankyou-message p {
    font-size: 1.1rem;
    color: #444;
    line-height: 1.7;
    margin: 0;
}

.thankyou-message strong {
    color: #00a86b;
}

.thankyou-card {
    background: #fff;
    padding: 35px;
    border-radius: 16px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
    text-align: left;
}

.thankyou-card h3 {
    font-family: 'Tenor Sans', serif;
    font-size: 1.4rem;
    color: #1a1a2e;
    margin-bottom: 25px;
    text-align: center;
}

.thankyou-card h3 i {
    color: #00a86b;
    margin-right: 8px;
}

.next-steps {
    list-style: none;
    padding: 0;
    margin: 0;
}

.next-steps li {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    padding: 18px 0;
    border-bottom: 1px solid #eee;
}

.next-steps li:last-child {
    border-bottom: none;
    padding-bottom: 0;
}

.next-steps li:first-child {
    padding-top: 0;
}

.next-steps li i {
    width: 45px;
    height: 45px;
    background: linear-gradient(135deg, #e8f5e9, #f1f8e9);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #00a86b;
    font-size: 1.1rem;
    flex-shrink: 0;
}

.next-steps li div {
    flex: 1;
}

.next-steps li strong {
    display: block;
    color: #1a1a2e;
    font-size: 1rem;
    margin-bottom: 3px;
}

.next-steps li span {
    color: #666;
    font-size: 0.95rem;
}

.emergency-box {
    display: flex;
    align-items: center;
    gap: 20px;
    background: #fff3cd;
    border: 1px solid #ffc107;
    border-radius: 12px;
    padding: 20px 25px;
    margin-bottom: 35px;
    text-align: left;
}

.emergency-box i {
    font-size: 1.8rem;
    color: #ffc107;
    flex-shrink: 0;
}

.emergency-box strong {
    display: block;
    color: #856404;
    margin-bottom: 5px;
}

.emergency-box p {
    margin: 0;
    color: #856404;
    font-size: 0.95rem;
}

.thankyou-actions {
    display: flex;
    justify-content: center;
    gap: 15px;
    flex-wrap: wrap;
}

.thankyou-actions .btn {
    padding: 14px 30px;
    font-size: 1rem;
}

.thankyou-actions .btn-primary {
    background: linear-gradient(135deg, #00a86b, #00c853);
    color: #fff;
    border: none;
}

.thankyou-actions .btn-primary:hover {
    background: linear-gradient(135deg, #00995f, #00b347);
    transform: translateY(-2px);
}

.thankyou-actions .btn-outline {
    background: transparent;
    border: 2px solid #00a86b;
    color: #00a86b;
}

.thankyou-actions .btn-outline:hover {
    background: #00a86b;
    color: #fff;
}

/* Contact Strip */
.contact-strip {
    background: #1a1a2e;
    padding: 40px 0;
}

.strip-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.strip-item {
    display: flex;
    align-items: center;
    gap: 15px;
    justify-content: center;
}

.strip-item i {
    width: 50px;
    height: 50px;
    background: rgba(0, 168, 107, 0.15);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #00c853;
    font-size: 1.2rem;
}

.strip-item div {
    text-align: left;
}

.strip-item strong {
    display: block;
    color: #fff;
    font-size: 1rem;
    margin-bottom: 3px;
}

.strip-item span {
    color: rgba(255, 255, 255, 0.7);
    font-size: 0.9rem;
}

/* Responsive */
@media (max-width: 768px) {
    .thankyou-hero {
        padding: 60px 0;
    }

    .thankyou-hero h1 {
        font-size: 1.8rem;
    }

    .thankyou-subtitle {
        font-size: 1rem;
    }

    .thankyou-card {
        padding: 25px;
    }

    .strip-grid {
        grid-template-columns: 1fr;
        gap: 25px;
    }

    .strip-item {
        justify-content: flex-start;
    }

    .thankyou-actions {
        flex-direction: column;
    }

    .thankyou-actions .btn {
        width: 100%;
    }
}
</style>

<?php require_once 'footer.php'; ?>
