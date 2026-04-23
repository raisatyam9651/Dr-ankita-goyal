import os
import re

root_dir = r"c:\Users\gcv\OneDrive\Desktop\Ankita Goyal\Dr-ankita-goyal"
blog_dir = os.path.join(root_dir, "blog")

replacements = {
    "what-is-laparoscopic-surgery": "images/laparoscopy_meaning.png",
    "how-laparoscopic-surgery-is-performed": "images/laparoscopy_procedure.png",
    "is-laparoscopic-surgery-safe": "images/laparoscopy_safe.png",
    "laparoscopy-vs-open-surgery": "images/laparoscopy_vs_open.png",
    "recovery-after-laparoscopic-surgery": "images/laparoscopy_recovery.png",
    "laparoscopic-surgery-cost-in-india": "images/laparoscopy_cost.png",
    "what-to-expect-laparoscopic-surgery": "images/laparoscopy_expectations.png",
    "diet-after-laparoscopic-surgery": "images/laparoscopy_diet.png",
    "dos-and-donts-after-laparoscopy": "images/laparoscopy_dos_donts.png",
    "gas-pain-bloating-after-laparoscopy": "images/laparoscopy_gas_pain.png",
    "wound-care-bathing-sleeping-driving-laparoscopy": "images/laparoscopy_wound_care.png",
    "pregnancy-travel-daily-activities-laparoscopy": "images/laparoscopy_active_life.png",
    "laparoscopic-surgery-insurance-coverage": "images/laparoscopy_insurance.png",
    "is-laparoscopic-surgery-worth-it": "images/laparoscopy_worth_it.png",
    "robotic-vs-laparoscopic-surgery": "images/laparoscopy_robotic.png",
    "complete-guide-to-laparoscopic-surgery": "images/laparoscopy_guide.png"
}

# 1. Update individual blog posts
for slug, new_image in replacements.items():
    filepath = os.path.join(blog_dir, slug + ".php")
    if os.path.exists(filepath):
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()
        
        # Replace $post_image line
        content = re.sub(
            r"\$post_image(\s*)=(\s*)['\"].*?['\"];",
            f"$post_image\\1=\\2'{new_image}';",
            content
        )
        
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(content)

# 2. Update blog.php
blog_index = os.path.join(root_dir, "blog.php")
with open(blog_index, 'r', encoding='utf-8') as f:
    content = f.read()

# For each entry in blog.php we need to match the slug and update the image right above it.
# The structure in blog.php is:
#     [
#         'image'    => 'images/treatment-1.png',
#         'category' => '...',
#         ...
#         'slug'     => 'blog/SLUG',
#     ],

def replace_image_in_array(block_text, slug, img_path):
    # Regex to find an array block containing this exact slug
    pattern = r"(?s)(\[\s*'image'\s*=>\s*')[^']+('.*?'slug'\s*=>\s*'blog/" + re.escape(slug) + r"')"
    # We replace the image path in that group
    return re.sub(pattern, rf"\g<1>{img_path}\g<2>", block_text)

for slug, new_image in replacements.items():
    content = replace_image_in_array(content, slug, new_image)

with open(blog_index, 'w', encoding='utf-8') as f:
    f.write(content)

print("Updates complete.")
