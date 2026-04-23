<?php
/**
 * Shared blog post layout.
 * Requires these variables set before include:
 *   $post_title, $post_category, $post_date, $post_read_time,
 *   $post_image, $post_content, $post_tags[],
 *   $post_prev ['title','slug'], $post_next ['title','slug'],
 *   $related_posts [['image','category','title','slug'], ...]
 */
$page_title = $post_title . ' | Dr. Ankita Bansal Goyal';
$base_url   = '../';
require_once '../header.php';
?>
<style>
.post-hero{background:linear-gradient(135deg,#0A2F5C 0%,#0F3460 55%,#1A1A4E 100%);padding:130px 20px 64px;text-align:center;color:#fff}
.post-breadcrumb{display:flex;justify-content:center;align-items:center;gap:8px;font-size:.82rem;color:#90E0EF;margin-bottom:20px;flex-wrap:wrap}
.post-breadcrumb a{color:#90E0EF;text-decoration:none}.post-breadcrumb a:hover{color:#fff}
.post-breadcrumb i{font-size:.6rem}
.post-hero-cat{display:inline-block;background:rgba(0,180,216,.2);color:#90E0EF;border:1px solid rgba(72,202,228,.35);padding:5px 16px;border-radius:50px;font-size:.75rem;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;margin-bottom:18px}
.post-hero h1{font-family:'Tenor Sans',sans-serif;font-size:2.7rem;line-height:1.25;max-width:860px;margin:0 auto 22px;font-weight:700}
.post-hero-meta{display:flex;justify-content:center;align-items:center;gap:24px;flex-wrap:wrap;color:#90E0EF;font-size:.88rem}
.post-hero-meta span{display:flex;align-items:center;gap:6px}
.post-container{display:grid;grid-template-columns:1fr 320px;gap:50px;max-width:1200px;margin:60px auto;padding:0 24px 80px;align-items:start}
.post-feature-img{width:100%;max-height:460px;object-fit:cover;border-radius:16px;margin-bottom:42px;box-shadow:0 10px 40px rgba(10,47,92,.13)}
.post-body h2{font-family:'Tenor Sans',sans-serif;color:#0A2F5C;font-size:1.8rem;margin:40px 0 16px;padding-bottom:10px;border-bottom:2px solid #EBF3FD}
.post-body h3{font-family:'Tenor Sans',sans-serif;color:#0A2F5C;font-size:1.35rem;margin:32px 0 12px;padding-left:14px;border-left:4px solid #00B4D8}
.post-body p{font-size:1.05rem;line-height:1.9;color:#374151;margin-bottom:20px}
.post-body ul,.post-body ol{margin:0 0 20px 22px}
.post-body ul li,.post-body ol li{font-size:1.05rem;line-height:1.85;color:#374151;margin-bottom:10px}
.post-body strong{color:#0A2F5C}
.post-callout{background:linear-gradient(135deg,#EBF3FD,#f0f9ff);border-left:5px solid #00B4D8;border-radius:0 12px 12px 0;padding:24px 28px;margin:32px 0}
.post-callout p{margin:0;font-size:1.05rem;color:#0A2F5C;font-style:italic}
.post-doctor-cta{display:flex;align-items:center;gap:32px;background:linear-gradient(135deg,#0A2F5C,#0F3460);border-radius:16px;padding:40px;color:#fff;margin:50px 0;text-align:left;box-shadow:0 12px 35px rgba(10,47,92,.15)}
.doctor-cta-img{flex-shrink:0}
.doctor-cta-img img{width:140px;height:140px;border-radius:50%;object-fit:cover;border:4px solid rgba(255,255,255,.2);box-shadow:0 8px 24px rgba(0,0,0,.2)}
.doctor-cta-content{display:flex;flex-direction:column;align-items:flex-start}
.doctor-cta-content h4{font-family:'Tenor Sans',sans-serif;font-size:1.6rem;margin:0 0 6px 0;color:#fff;border:none;padding:0}
.doctor-creds{color:#00B4D8;font-size:.95rem;font-weight:700;letter-spacing:.5px;margin-bottom:14px;display:flex;align-items:center;gap:6px}
.doctor-cta-content p{font-size:1.05rem;color:#EBF3FD;line-height:1.65;margin:0 0 22px 0}
.btn-author-consult{display:inline-flex;align-items:center;gap:8px;background:#ee7c31;color:#fff;padding:12px 30px;border-radius:50px;font-weight:700;font-size:.95rem;text-decoration:none;transition:transform .25s,box-shadow .25s;box-shadow:0 4px 15px rgba(238,124,49,.3)}
.btn-author-consult:hover{transform:translateY(-2px);box-shadow:0 6px 20px rgba(238,124,49,.4);color:#fff}
@media(max-width:768px){.post-doctor-cta{flex-direction:column;text-align:center;padding:34px 24px;gap:20px}.doctor-cta-content{align-items:center}}
.post-tags{display:flex;flex-wrap:wrap;gap:10px;margin:40px 0 0}
.post-tag{background:#EBF3FD;color:#0A2F5C;padding:6px 16px;border-radius:50px;font-size:.82rem;font-weight:600;text-decoration:none;transition:background .2s}
.post-tag:hover{background:#00B4D8;color:#fff}
.post-nav{display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-top:50px;padding-top:36px;border-top:1px solid #e5eaf3}
.post-nav a{display:flex;align-items:center;gap:12px;color:#0A2F5C;text-decoration:none;font-weight:600;font-size:.9rem;padding:18px 20px;border:1.5px solid #dde3ed;border-radius:12px;transition:all .25s;line-height:1.4}
.post-nav a:hover{background:#0A2F5C;color:#fff;border-color:#0A2F5C}
.post-nav a:hover i,.post-nav a:hover .nav-label{color:#90E0EF}
.post-nav a i{color:#00B4D8;flex-shrink:0}
.nav-label{font-size:.75rem;color:#64748B;display:block;margin-bottom:4px;text-transform:uppercase;letter-spacing:.5px}
.post-nav .nav-next{text-align:right;justify-content:flex-end}
.post-sidebar{position:sticky;top:100px}
.sidebar-widget{background:#fff;border-radius:14px;padding:28px;box-shadow:0 4px 20px rgba(10,47,92,.07);border:1px solid #eef2f8;margin-bottom:28px}
.sidebar-widget h4{font-family:'Tenor Sans',sans-serif;color:#0A2F5C;font-size:1.1rem;margin-bottom:18px;padding-bottom:12px;border-bottom:2px solid #EBF3FD}
.sidebar-toc{list-style:none;padding:0;margin:0}
.sidebar-toc li{margin-bottom:10px}
.sidebar-toc a{color:#374151;text-decoration:none;font-size:.92rem;display:flex;align-items:flex-start;gap:8px;transition:color .2s}
.sidebar-toc a i{color:#00B4D8;margin-top:3px;flex-shrink:0}
.sidebar-toc a:hover{color:#0A2F5C;font-weight:600}
.sidebar-cta{background:linear-gradient(135deg,#0A2F5C,#0F3460);border-radius:14px;padding:28px;text-align:center;color:#fff;margin-bottom:28px}
.sidebar-cta h4{color:#fff;font-size:1.1rem;margin-bottom:10px}
.sidebar-cta p{color:#90E0EF;font-size:.88rem;margin-bottom:18px}
.sidebar-cta a{display:block;background:#00B4D8;color:#fff;padding:12px 20px;border-radius:50px;font-weight:700;font-size:.88rem;text-decoration:none;transition:background .25s}
.sidebar-cta a:hover{background:#0090b0}
.related-post{display:flex;gap:14px;margin-bottom:16px;padding-bottom:16px;border-bottom:1px solid #eef2f8;text-decoration:none}
.related-post:last-child{margin-bottom:0;padding-bottom:0;border-bottom:none}
.related-post img{width:70px;height:60px;object-fit:cover;border-radius:8px;flex-shrink:0}
.related-post-text span{display:block;font-size:.8rem;color:#00B4D8;font-weight:600;margin-bottom:4px}
.related-post-text p{font-size:.88rem;color:#0A2F5C;font-weight:600;line-height:1.4;margin:0;transition:color .2s}
.related-post:hover .related-post-text p{color:#00B4D8}
@media(max-width:1024px){.post-container{grid-template-columns:1fr}.post-sidebar{position:static}.post-hero h1{font-size:2.1rem}}
@media(max-width:600px){.post-hero h1{font-size:1.7rem}.post-nav{grid-template-columns:1fr}}
</style>

<div class="post-hero">
  <div class="container">
    <div class="post-breadcrumb">
      <a href="../">Home</a><i class="fas fa-chevron-right"></i>
      <a href="../blog.php">Blog</a><i class="fas fa-chevron-right"></i>
      <span><?php echo htmlspecialchars($post_category); ?></span>
    </div>
    <span class="post-hero-cat"><?php echo htmlspecialchars($post_category); ?></span>
    <h1><?php echo htmlspecialchars($post_title); ?></h1>
    <div class="post-hero-meta">
      <span><i class="far fa-calendar-alt"></i> <?php echo $post_date; ?></span>
      <span><i class="far fa-clock"></i> <?php echo $post_read_time; ?></span>
      <span><i class="fas fa-user-md"></i> Dr. Ankita Bansal Goyal</span>
    </div>
  </div>
</div>

<div class="post-container">
  <article class="post-main">
    <img src="../<?php echo $post_image; ?>" alt="<?php echo htmlspecialchars($post_title); ?>" class="post-feature-img">
    <div class="post-body"><?php echo $post_content; ?></div>

    <div class="post-doctor-cta">
      <div class="doctor-cta-img">
        <img src="../images/dr-ankita-improved.png" alt="Dr. Ankita Bansal Goyal">
      </div>
      <div class="doctor-cta-content">
        <h4>Meet Dr. Ankita Bansal Goyal</h4>
        <div class="doctor-creds"><i class="fas fa-certificate"></i> M.D, FMAS (PGIMER Chandigarh)</div>
        <p>A highly skilled Laparoscopic &amp; Gynecological Surgeon based at Sankalp Hospital, Ambikapur. Specializing in advanced 3D Minimal Access Surgery, Dr. Ankita brings premier expertise in safely treating complex precise reproductive health conditions including fibroids, PCOS, and ovarian cysts.</p>
        <a href="../contact-us.php" class="btn-author-consult">Book a Consultation <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>

    <div class="post-tags">
      <?php foreach ($post_tags as $tag): ?>
        <a href="../blog" class="post-tag"># <?php echo htmlspecialchars($tag); ?></a>
      <?php endforeach; ?>
    </div>

    <nav class="post-nav">
      <?php if (!empty($post_prev)): ?>
      <a href="<?php echo $post_prev['slug']; ?>.php">
        <i class="fas fa-arrow-left"></i>
        <div><span class="nav-label">Previous</span><?php echo htmlspecialchars($post_prev['title']); ?></div>
      </a>
      <?php else: ?>
      <a href="../blog"><i class="fas fa-th-large"></i><div><span class="nav-label">Back to</span>All Posts</div></a>
      <?php endif; ?>
      <?php if (!empty($post_next)): ?>
      <a href="<?php echo $post_next['slug']; ?>.php" class="nav-next">
        <div><span class="nav-label">Next</span><?php echo htmlspecialchars($post_next['title']); ?></div>
        <i class="fas fa-arrow-right"></i>
      </a>
      <?php endif; ?>
    </nav>
  </article>

  <aside class="post-sidebar">
    <?php if (!empty($toc)): ?>
    <div class="sidebar-widget">
      <h4><i class="fas fa-list" style="color:#00B4D8;margin-right:8px;"></i>In This Article</h4>
      <ul class="sidebar-toc">
        <?php foreach ($toc as $item): ?>
          <li><a href="#<?php echo $item['id']; ?>"><i class="fas fa-angle-right"></i><?php echo htmlspecialchars($item['label']); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <?php endif; ?>

    <div class="sidebar-cta">
      <h4>Get Expert Advice</h4>
      <p>Speak directly with Dr. Ankita about your symptoms and treatment options.</p>
      <a href="../contact-us.php">Book Appointment <i class="fas fa-calendar-alt"></i></a>
    </div>

    <?php if (!empty($related_posts)): ?>
    <div class="sidebar-widget">
      <h4><i class="fas fa-newspaper" style="color:#00B4D8;margin-right:8px;"></i>Related Articles</h4>
      <?php foreach ($related_posts as $r): ?>
      <a href="<?php echo $r['slug']; ?>.php" class="related-post">
        <img src="../<?php echo $r['image']; ?>" alt="<?php echo htmlspecialchars($r['title']); ?>">
        <div class="related-post-text">
          <span><?php echo htmlspecialchars($r['category']); ?></span>
          <p><?php echo htmlspecialchars($r['title']); ?></p>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </aside>
</div>

<?php require_once '../footer.php'; ?>
