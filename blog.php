<?php
$page_title = 'Health Blog | Dr. Ankita Bansal Goyal';
$base_url   = './';
require_once 'header.php';

$blogs = [
    [
        'image'    => 'images/treatment-1.png',
        'category' => 'PCOS / PCOD',
        'date'     => 'April 10, 2025',
        'title'    => 'Understanding PCOS: Symptoms, Causes & Treatment Options',
        'excerpt'  => 'Polycystic Ovary Syndrome affects millions of women worldwide. Learn how to identify early signs and explore effective treatment paths.',
        'slug'     => 'blog/understanding-pcos-symptoms-causes-treatment',
    ],
    [
        'image'    => 'images/treatment-2.png',
        'category' => 'Laparoscopy',
        'date'     => 'April 5, 2025',
        'title'    => 'Laparoscopy vs Open Surgery: Key Differences Explained',
        'excerpt'  => 'Wondering which surgical approach is right for you? Discover why minimally invasive laparoscopy leads to faster recovery and fewer complications.',
        'slug'     => 'blog/laparoscopy-vs-open-surgery',
    ],
    [
        'image'    => 'images/treatment-3.png',
        'category' => 'Fibroids',
        'date'     => 'March 28, 2025',
        'title'    => '7 Warning Signs You May Have Uterine Fibroids',
        'excerpt'  => 'Heavy periods, pelvic pressure, and frequent urination can all be signs of fibroids. Here is what every woman should know.',
        'slug'     => 'blog/7-signs-of-uterine-fibroids',
    ],
    [
        'image'    => 'images/pregnancy-hero.png',
        'category' => 'Pregnancy',
        'date'     => 'March 20, 2025',
        'title'    => 'High-Risk Pregnancy: What You Should Know Before Delivery',
        'excerpt'  => 'Conditions like diabetes, hypertension, and twins can elevate pregnancy risk. Expert monitoring makes all the difference.',
        'slug'     => 'blog/high-risk-pregnancy-guide',
    ],
    [
        'image'    => 'images/treatment-5.png',
        'category' => 'Ovarian Health',
        'date'     => 'March 14, 2025',
        'title'    => 'Ovarian Cysts: When Is It Time to See a Doctor?',
        'excerpt'  => 'Most ovarian cysts resolve on their own, but certain types require medical attention. Know the symptoms that should not be ignored.',
        'slug'     => 'blog/ovarian-cysts-when-to-see-doctor',
    ],
    [
        'image'    => 'images/treatment-6.png',
        'category' => 'Surgery',
        'date'     => 'March 7, 2025',
        'title'    => '5 Key Benefits of Minimally Invasive Gynecological Surgery',
        'excerpt'  => 'Smaller incisions, shorter hospital stays, and quicker return to daily life — find out why minimally invasive surgery is now the gold standard.',
        'slug'     => 'blog/benefits-of-minimally-invasive-surgery',
    ],
    [
        'image'    => 'images/treatment-4.png',
        'category' => 'Endometriosis',
        'date'     => 'February 25, 2025',
        'title'    => 'Endometriosis: Early Detection and Long-Term Management',
        'excerpt'  => 'Endometriosis is often misdiagnosed for years. Understanding its stages and treatment options empowers patients to seek timely care.',
        'slug'     => 'blog/endometriosis-early-detection',
    ],
    [
        'image'    => 'images/services-hero.png',
        'category' => "Women's Wellness",
        'date'     => 'February 15, 2025',
        'title'    => 'How to Prepare for Your First Gynaecology Appointment',
        'excerpt'  => 'First visits can feel overwhelming. Here is a simple guide on what to expect, what questions to ask, and how to prepare.',
        'slug'     => 'blog/prepare-for-gynecology-appointment',
    ],
    [
        'image'    => 'images/pcos-hero.png',
        'category' => 'Reproductive Health',
        'date'     => 'February 5, 2025',
        'title'    => "Women's Reproductive Health After 35: What Changes?",
        'excerpt'  => 'Fertility, hormone levels, and cycle patterns all shift after 35. Learn how to stay proactive about your reproductive health at every stage.',
        'slug'     => 'blog/reproductive-health-after-35',
    ],
];

$per_page    = 9;
$total       = count($blogs);
$total_pages = (int) ceil($total / $per_page);
$current     = max(1, min($total_pages, (int) ($_GET['page'] ?? 1)));
$offset      = ($current - 1) * $per_page;
$page_blogs  = array_slice($blogs, $offset, $per_page);
?>

<style>
.blog-hero{background:linear-gradient(135deg,#0A2F5C 0%,#0F3460 50%,#1A1A4E 100%);padding:130px 20px 70px;text-align:center;color:#fff}
.blog-hero-tag{display:inline-block;background:rgba(0,180,216,.2);color:#90E0EF;border:1px solid rgba(72,202,228,.35);padding:6px 18px;border-radius:50px;font-size:.8rem;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;margin-bottom:20px}
.blog-hero h1{font-family:'Tenor Sans',sans-serif;font-size:3rem;font-weight:700;margin-bottom:16px;line-height:1.2}
.blog-hero p{font-size:1.15rem;color:#90E0EF;max-width:600px;margin:0 auto}
.blog-section{padding:70px 20px 80px;background:#f8fbff}
.blog-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:32px;margin-bottom:56px}
.blog-card{background:#fff;border-radius:14px;overflow:hidden;box-shadow:0 4px 20px rgba(10,47,92,.08);display:flex;flex-direction:column;transition:transform .3s ease,box-shadow .3s ease}
.blog-card:hover{transform:translateY(-6px);box-shadow:0 12px 36px rgba(10,47,92,.14)}
.blog-card-img-wrap{position:relative;display:block;overflow:hidden;height:210px;text-decoration:none}
.blog-card-img-wrap img{width:100%;height:100%;object-fit:cover;transition:transform .4s ease}
.blog-card:hover .blog-card-img-wrap img{transform:scale(1.05)}
.blog-category{position:absolute;top:14px;left:14px;background:#0A2F5C;color:#fff;font-size:.72rem;font-weight:700;letter-spacing:.8px;text-transform:uppercase;padding:5px 12px;border-radius:50px}
.blog-card-body{padding:22px 24px 26px;display:flex;flex-direction:column;flex:1}
.blog-date{font-size:.82rem;color:#00B4D8;font-weight:600;margin-bottom:10px;display:flex;align-items:center;gap:6px}
.blog-title{font-family:'Tenor Sans',sans-serif;font-size:1.1rem;font-weight:700;line-height:1.45;margin-bottom:12px;flex:1}
.blog-title a{color:#0A2F5C;text-decoration:none;transition:color .2s}
.blog-title a:hover{color:#00B4D8}
.blog-excerpt{font-size:.9rem;color:#64748B;line-height:1.7;margin-bottom:18px}
.blog-read-more{display:inline-flex;align-items:center;gap:7px;font-size:.88rem;font-weight:700;color:#00B4D8;text-decoration:none;text-transform:uppercase;letter-spacing:.5px;margin-top:auto;transition:gap .2s,color .2s}
.blog-read-more:hover{gap:12px;color:#0A2F5C}
.blog-pagination{display:flex;justify-content:center;align-items:center;gap:10px;padding-top:10px}
.page-btn{display:inline-flex;align-items:center;justify-content:center;width:42px;height:42px;border-radius:8px;background:#fff;border:1.5px solid #dde3ed;color:#0A2F5C;font-weight:700;font-size:.95rem;text-decoration:none;transition:all .25s}
.page-btn:hover,.page-btn.active{background:#0A2F5C;border-color:#0A2F5C;color:#fff}
@media(max-width:991px){.blog-grid{grid-template-columns:repeat(2,1fr)}.blog-hero h1{font-size:2.2rem}}
@media(max-width:600px){.blog-grid{grid-template-columns:1fr}.blog-hero h1{font-size:1.8rem}}
</style>

<!-- Hero -->
<div class="blog-hero">
    <div class="container">
        <span class="blog-hero-tag">Expert Insights</span>
        <h1>Women's Health Blog</h1>
        <p>Evidence-based articles on gynaecology, surgery, and wellness by Dr. Ankita Bansal Goyal</p>
    </div>
</div>

<!-- Grid -->
<section class="blog-section">
    <div class="container">
        <div class="blog-grid">
            <?php foreach ($page_blogs as $blog): ?>
            <article class="blog-card">
                <a href="/<?php echo $blog['slug']; ?>.php" class="blog-card-img-wrap">
                    <img src="<?php echo $blog['image']; ?>" alt="<?php echo htmlspecialchars($blog['title']); ?>" loading="lazy">
                    <span class="blog-category"><?php echo $blog['category']; ?></span>
                </a>
                <div class="blog-card-body">
                    <p class="blog-date"><i class="far fa-calendar-alt"></i> <?php echo $blog['date']; ?></p>
                    <h2 class="blog-title">
                        <a href="/<?php echo $blog['slug']; ?>.php"><?php echo $blog['title']; ?></a>
                    </h2>
                    <p class="blog-excerpt"><?php echo $blog['excerpt']; ?></p>
                    <a href="/<?php echo $blog['slug']; ?>.php" class="blog-read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <?php if ($total_pages > 1): ?>
        <nav class="blog-pagination">
            <?php if ($current > 1): ?>
                <a href="?page=<?php echo $current - 1; ?>" class="page-btn"><i class="fas fa-chevron-left"></i></a>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <a href="?page=<?php echo $i; ?>" class="page-btn <?php echo $i === $current ? 'active' : ''; ?>"><?php echo $i; ?></a>
            <?php endfor; ?>
            <?php if ($current < $total_pages): ?>
                <a href="?page=<?php echo $current + 1; ?>" class="page-btn"><i class="fas fa-chevron-right"></i></a>
            <?php endif; ?>
        </nav>
        <?php endif; ?>
    </div>
</section>

<?php require_once 'footer.php'; ?>
