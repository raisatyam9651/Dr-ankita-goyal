import os
import re

root_dir = r"c:\Users\gcv\OneDrive\Desktop\Ankita Goyal\Dr-ankita-goyal"
blog_index = os.path.join(root_dir, "blog.php")

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

with open(blog_index, 'r', encoding='utf-8') as f:
    lines = f.readlines()

new_lines = []
i = 0
while i < len(lines):
    line = lines[i]
    if "'image'" in line:
        # peek ahead up to 6 lines to find 'slug'
        found_slug = None
        for j in range(1, 8):
            if i + j < len(lines):
                if "'slug'" in lines[i+j]:
                    m = re.search(r"'blog/([^']+)'", lines[i+j])
                    if m:
                        found_slug = m.group(1)
                    break
        if found_slug and found_slug in replacements:
            # replace the image line
            line = re.sub(r"('image'\s*=>\s*')[^']+'", rf"\g<1>{replacements[found_slug]}'", line)
    new_lines.append(line)
    i += 1

with open(blog_index, 'w', encoding='utf-8') as f:
    f.writelines(new_lines)

print("Updated blog.php successfully")
