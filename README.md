# Eastern Cargo Website

A professional and responsive logistics website for **Eastern Cargo Carriers (I) Pvt. Ltd.**  
Built using **HTML, CSS, JavaScript, and PHP**, featuring multiple service pages, animated UI effects, SEO-ready structure, and backend-integrated forms with CAPTCHA and mailer support.

---

## 🌟 Features

### Frontend
- **Responsive Design** – Works seamlessly on desktop, tablet, and mobile
- **Service Pages** – Dedicated sections for Air, Ocean, Express, Healthcare, and more
- **Modern UI/UX** – Smooth animations, hover effects, and sliders
- **Interactive Navigation** – Sticky header, smooth scroll, and mobile menu
- **SEO Optimized** – Semantic HTML, `robots.txt`, `sitemap.xml`, and optimization guide
- **Accessibility** – ARIA labels and keyboard navigation support

### Backend (PHP)
- **Contact Form Integration** – Handles user inquiries via `process.php`
- **Career Form** – Accepts job applications with backend validation
- **CAPTCHA Protection** – Prevents spam using `captcha.js` + `get_captcha.php`
- **Mailer Support** – Configurable SMTP details in `mailer_config.php`

---

## 📂 Project Structure

```

easternwebsite/
├── index.html                          # Homepage
├── \*.html                             # Service pages (Air, Ocean, Express, Healthcare, etc.)
├── index.php                           # Optional PHP entry point
├── captcha.js                          # CAPTCHA frontend script
├── get\_captcha.php                    # CAPTCHA backend
├── process.php                         # Contact form handler
├── process\_form1.php                  # Career form handler
├── mailer\_config.php                  # Mailer configuration
├── main.js / script.js                 # Core JavaScript
├── composer.json / lock                # Dependencies (if required)
├── robots.txt / sitemap.xml            # SEO essentials
├── images.zip / img.zip                # Images (extract to /images)
├── GOOGLE\_SEARCH\_CONSOLE\_GUIDE.md
├── SEO\_OPTIMIZATION\_GUIDE.md
└── README.md                           # Documentation

````

---

## ⚙️ Installation & Setup

### 1. Extract Project
```bash
unzip easternwebsite.zip
cd easternwebsite
````

### 2. Configure Mailer

Edit `mailer_config.php` with your SMTP credentials:

```php
$host = "your-mail-host";
$username = "your-email@example.com";
$password = "your-password";
$port = 587; // or 465 for SSL
```

### 3. Deploy to Server

* Upload files to your server (`htdocs` or `public_html`)
* Ensure **PHP 7.4+** is enabled

### 4. Test Forms

* Open `contact.html` and submit a test message
* CAPTCHA and email delivery should function correctly

---

## 🔑 Requirements

* Web server (Apache/Nginx)
* PHP **7.4+**
* SMTP or email server credentials
* Composer (optional, if dependencies are used)

---

## 🌍 Deployment

Upload `easternwebsite/` to your hosting provider.
For cPanel/FTP hosting, copy all files into `public_html`.
For VPS/Dedicated, configure Apache/Nginx accordingly.

---

## 🛠 Development

* **HTML5, CSS3, JavaScript (Vanilla)**
* **PHP** for forms & CAPTCHA
* **SEO Ready** with Google Console integration

---

## 📧 Contact

For website issues or enhancements, contact:
**Eastern Cargo Carriers (I) Pvt. Ltd.**
✉️ Email: [info@easterncargo.co.in](mailto:info@easterncargo.co.in)
🕒 Working Hours: 10:00 AM – 6:00 PM

---

## 📄 License

This project is for business use by **Eastern Cargo Carriers (I) Pvt. Ltd.**
Unauthorized redistribution or resale is prohibited.

---

## 🤝 Contributing

Suggestions and improvements are welcome.
Potential enhancements:

* Live chat integration
* Service booking system
* CMS backend (WordPress/Strapi/etc.)
* Advanced analytics & tracking
* Enhanced animations (GSAP, AOS)