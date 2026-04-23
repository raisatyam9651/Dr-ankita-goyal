import os
import glob
from datetime import datetime

root_dir = r"c:\Users\gcv\OneDrive\Desktop\Ankita Goyal\Dr-ankita-goyal"
base_url = "https://drankitalaparoscopy.in/"

# Get all php files in root
root_files = glob.glob(os.path.join(root_dir, "*.php"))
# Get all php files in blog
blog_files = glob.glob(os.path.join(root_dir, "blog", "*.php"))

# Filter out includes, partials, or redirects
exclude = [
    "header.php", "footer.php", "contact-form.php", "router.php", 
    "blog/_layout.php", "blog/index.php"
]

urls = []

# Add index explicitly
urls.append(f"""  <url>
    <loc>{base_url}</loc>
    <changefreq>weekly</changefreq>
    <priority>1.0</priority>
  </url>""")

for fpath in root_files + blog_files:
    rel_path = os.path.relpath(fpath, root_dir).replace('\\', '/')
    if rel_path == "index.php": continue
    if rel_path in exclude: continue
    
    # Priority assignments
    priority = "0.7"
    if rel_path.startswith("blog/"):
        priority = "0.6"
    elif rel_path == "blog.php":
        priority = "0.9"
    elif "-in-ambikapur" in rel_path:
        priority = "0.8"
    else:
        priority = "0.9"
        
    sitemap_entry = f"""  <url>
    <loc>{base_url}{rel_path}</loc>
    <changefreq>monthly</changefreq>
    <priority>{priority}</priority>
  </url>"""
    urls.append(sitemap_entry)

sitemap_content = f"""<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
{chr(10).join(urls)}
</urlset>"""

with open(os.path.join(root_dir, "sitemap.xml"), "w", encoding="utf-8") as f:
    f.write(sitemap_content)

print(f"Sitemap generated successfully with {len(urls)} URLs.")
