<?php
session_start();
// Generate CSRF token if it doesn't exist
if (empty($_SESSION['_token'])) {
    $_SESSION['_token'] = bin2hex(random_bytes(32));
}
$token = $_SESSION['_token'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Primary Meta Tags -->
    <?php
    // Dynamic meta tags for better SEO
    $page_title = "Healthcare & Pharma Logistics | Eastern Cargo Carriers India";
    $page_description = "Eastern Cargo Carriers (I) Private Limited - India's premier healthcare AND Pharma logistics company with 45+ years of experience. Specialized in healthcare logistics, dangerous goods (DG) shipments, pharmaceutical logistics, express logistics, and project logistics. Expert temperature-controlled shipping, hazardous cargo handling, and medical supply chain solutions across India.";
    $page_keywords = "healthcare logistics, healthcare logistics India, pharmaceutical logistics India, dangerous goods shipping, DG shipments India, hazardous cargo logistics, express logistics India, project logistics India, medical supply chain India, temperature controlled logistics India, healthcare freight forwarding India, pharmaceutical shipping India, medical logistics India, dangerous goods transport, hazardous materials shipping, express cargo services, project cargo logistics, healthcare logistics Mumbai, healthcare logistics Delhi, healthcare logistics Bangalore, healthcare logistics Chennai, healthcare logistics Kolkata, healthcare logistics Hyderabad, healthcare logistics Ahmedabad, Eastern Cargo Carriers, medical supply chain solutions, pharmaceutical cold chain India, IATA DG compliance, IMO dangerous goods, pharma logistics, temperature controlled shipping, cold chain logistics, medical device logistics, vaccine logistics, clinical trial logistics, biotech logistics, chemical logistics, lithium battery shipping, radioactive materials transport, time critical logistics, urgent cargo services, heavy lift logistics, oversized cargo, break bulk logistics, FCL LCL services, air charter services, ocean freight services, customs clearance, warehousing distribution, Eastern Cargo Carriers India";
    $current_year = date('Y');
    $last_modified = date('Y-m-d');
    ?>
    <title id="meta-title"><?php echo $page_title; ?></title>
    <meta id="meta-desc" name="description" content="<?php echo $page_description; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="img/logo.png">
    <meta name="keywords" content="<?php echo $page_keywords; ?>">
    <meta name="author" content="Eastern Cargo Carriers (I) Pvt.Ltd">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="generator" content="Eastern Cargo Carriers">
    <meta name="revisit-after" content="7 days">
    <meta name="distribution" content="global">
    <meta name="rating" content="general">
    <meta name="copyright" content="Copyright <?php echo $current_year; ?> Eastern Cargo Carriers (I) Pvt.Ltd. All rights reserved.">
    <meta name="last-modified" content="<?php echo $last_modified; ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easterncargo.co.in/">
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $page_description; ?>">
    <meta property="og:image" content="https://easterncargo.co.in/images/logo.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Eastern Cargo Carriers - Healthcare Logistics Solutions">
    <meta property="og:site_name" content="Eastern Cargo Carriers (I) Private Limited">
    <meta property="og:locale" content="en_IN">
    <meta property="og:updated_time" content="<?php echo $last_modified; ?>">
    
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://easterncargo.co.in/">
    <meta name="twitter:title" content="<?php echo $page_title; ?>">
    <meta name="twitter:description" content="<?php echo $page_description; ?>">
    <meta name="twitter:image" content="https://easterncargo.co.in/images/logo.png">
    <meta name="twitter:image:alt" content="Eastern Cargo Carriers - Healthcare Logistics Solutions">
    <meta name="twitter:site" content="@easterncargo">
    <meta name="twitter:creator" content="@easterncargo">
    
    <!-- Additional SEO Meta Tags -->
    <meta name="geo.region" content="IN-MH">
    <meta name="geo.placename" content="Mumbai">
    <meta name="geo.position" content="19.106312;72.858026">
    <meta name="ICBM" content="19.106312, 72.858026">
    
    <!-- Enhanced SEO Meta Tags -->
    <meta name="subject" content="Healthcare, DG, Pharma, Express & Project Logistics Services in India">
    <meta name="classification" content="Healthcare Logistics, Dangerous Goods Shipping, Pharmaceutical Supply Chain, Express Logistics, Project Logistics">
    <meta name="category" content="Logistics and Transportation Services">
    <meta name="coverage" content="India">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="7 days">
    <meta name="googlebot" content="index, follow">
    <meta name="bingbot" content="index, follow">
    <meta name="theme-color" content="#fda403">
    <meta name="msapplication-TileColor" content="#fda403">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="format-detection" content="telephone=yes">
    <meta name="mobile-web-app-capable" content="yes">
    
    <!-- Local Business Schema -->
    <meta name="business:contact_data:street_address" content="25-27 Adarsh Industrial Estate, Sahar Road, Andheri (E)">
    <meta name="business:contact_data:locality" content="Mumbai">
    <meta name="business:contact_data:region" content="Maharashtra">
    <meta name="business:contact_data:postal_code" content="400099">
    <meta name="business:contact_data:country_name" content="India">
    <meta name="business:contact_data:phone_number" content="+91-22-67539999">
    <meta name="business:contact_data:email" content="info@easterncargo.co.in">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://easterncargo.co.in/">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    
    <!-- Preconnect for Performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Eastern Cargo Carriers (I) Private Limited",
        "alternateName": "Eastern Cargo",
        "url": "https://easterncargo.co.in",
        "logo": "https://easterncargo.co.in/images/logo.png",
        "description": "<?php echo $page_description; ?>",
        "foundingDate": "1979",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "25-27 Adarsh Industrial Estate, Sahar Road, Andheri (E)",
            "addressLocality": "Mumbai",
            "addressRegion": "Maharashtra",
            "postalCode": "400099",
            "addressCountry": "IN"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+91-22-67539999",
            "contactType": "customer service",
            "email": "info@easterncargo.co.in",
            "availableLanguage": "English"
        },
        "sameAs": [
            "https://www.facebook.com/easterncargo",
            "https://x.com/easterncargo",
            "https://www.linkedin.com/company/eastern-cargo-carriers-i-pvt-ltd"
        ],
        "serviceArea": {
            "@type": "Country",
            "name": "India"
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Mumbai"
            },
            {
                "@type": "City",
                "name": "Delhi"
            },
            {
                "@type": "City",
                "name": "Bangalore"
            },
            {
                "@type": "City",
                "name": "Chennai"
            },
            {
                "@type": "City",
                "name": "Kolkata"
            },
            {
                "@type": "City",
                "name": "Hyderabad"
            },
            {
                "@type": "City",
                "name": "Ahmedabad"
            }
        ],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Comprehensive Logistics Services in India",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Healthcare Logistics",
                        "description": "Comprehensive healthcare logistics and medical supply chain solutions in India"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Dangerous Goods (DG) Shipments",
                        "description": "Expert dangerous goods shipping and hazardous cargo logistics with IATA & IMO compliance"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Pharmaceutical Logistics",
                        "description": "Specialized pharmaceutical logistics and temperature-controlled shipping for life sciences"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Express Logistics",
                        "description": "Time-critical express logistics and urgent cargo services across India"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Project Logistics",
                        "description": "Heavy lift logistics, oversized cargo, and complex project cargo solutions"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Temperature-Controlled Shipping",
                        "description": "Specialized temperature-controlled shipping for healthcare and pharmaceutical products"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Air Freight Services",
                        "description": "International air freight services for all cargo types including healthcare and dangerous goods"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Ocean Freight Services",
                        "description": "Comprehensive ocean freight services including FCL, LCL, and break bulk cargo"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Customs Clearance",
                        "description": "Expert customs clearance and documentation services for all cargo types"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Warehousing & Distribution",
                        "description": "GDP-compliant warehousing and distribution services for pharmaceutical and healthcare products"
                    }
                }
            ]
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.8",
            "reviewCount": "150",
            "bestRating": "5",
            "worstRating": "1"
        }
    }
    </script>

    <script>
        function setPageMeta(title, desc){
   document.title = title;
   document.getElementById('meta-title').textContent = title;
   document.getElementById('meta-desc').setAttribute('content', desc);
}
// call on tab-switch or scroll
    </script>

</head>
<body>
    <!-- Top Contact Bar -->
    <div class="top-bar" role="banner" aria-label="Contact Information">
        <div class="container">
            <div class="top-bar-left">
                <div class="contact-info">
                    <a href="mailto:info@easterncargo.co.in"><span><i class="fas fa-envelope"></i>info@easterncargo.co.in</a></span>
                    <a href="mailto:lseth@easterncargo.co.in"><span><i class="fas fa-envelope"></i>lseth@easterncargo.co.in</a></span>
                    <a href="tel:+91-22-67539999"><span><i class="fas fa-phone"></i>+91-22-67539999</a></span>
                </div>
            </div>
            <div class="top-bar-right">
                <div class="language-selector" tabindex="0" role="button" aria-haspopup="true">
                    <span><i class="fas fa-flag"></i> EN <i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="social-links">
                    <a href="https://www.facebook.com/easterncargo"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://x.com/easterncargo"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/company/eastern-cargo-carriers-i-pvt-ltd"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="header">
        <nav class="navbar">
            <div class="nav-container">
                <a href="#home" class="nav-logo-link">
                <div class="nav-logo">
                    <div class="logo-icon">
                        <img src="images/logo.png" alt="Eastern Cargo Logo" class="logo-image">
                    </div>
                    <div class="logo-text">
                        <div class="company-name">
                            <span class="company-main">EASTERN CARGO</span><br>
                            <span class="company-sub">CARRIERS (I) PVT.LTD</span>
                        </div>
                    </div>
                </div></a>
                
                <!-- Desktop Menu -->
                <ul class="nav-menu desktop-menu">
                    <li class="nav-item">
                        <a href="#about" class="nav-link" data-translate="ABOUT US">ABOUT US</a>
                    </li>                        
                    <li class="nav-item dropdown" >
                        <a href="#" class="nav-link" data-translate="OUR SERVICES">OUR SERVICES <i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="air-freight-services.html" data-translate="Air Freight">Air Freight</a></li>
                            <li><a href="ocean-freight-services.html" data-translate="Ocean Freight">Ocean Freight</a></li>
                            <li><a href="customs-clearance-services.html" data-translate="Customs Brokerage">Customs Brokerage</a></li>
                            <li><a href="warehouse-distribution-services.html" data-translate="Warehouse & Distribution">Warehouse & Distribution</a></li>
                            <li><a href="air-charter-services.html" data-translate="Air Charter">Air Charter</a></li>
                            <li><a href="pet-transport-services.html" data-translate="Your Pet Pal">Your Pet Pal</a></li>
                            <li><a href="unaccompanied-baggage-shipping.html" data-translate="Unaccompanied Baggage Shipping">Unaccompanied Baggage Shipping</a></li>
                            <!--<li><a href="human_remains.html" data-translate="Human Remains">Human Remains</a></li>-->
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                       <a href="#" class="nav-link" data-translate="SPECIALIZED SERVICES">SPECIALIZED SERVICES<i class="fas fa-chevron-down"></i></a>
                       <ul class="dropdown-menu">
                        <li><a href="express-logistics-services.html" data-translate="Express Logistics">Express Logistics</a></li>
                        <li><a href="healthcare-logistics.html" data-translate="Healthcare Logistics">Healthcare Logistics</a></li>
                        <li><a href="dgr-shipments.html" data-translate="DG Shipments">DG Shipments</a></li>
                        <li><a href="project-logistics.html" data-translate="Project Logistics">Project Logistics</a></li>
                       </ul>
                    </li>

                    <li class="nav-item dropdown" >
                        <a href="#" class="nav-link" data-translate="MORE">MORE <i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="teams.html" data-translate="Our Team">Our Team</a></li>
                            <li><a href="#testimonial-section" data-translate="Customer Reviews">Customer Reviews</a></li>
                            <li><a href="#calculator" data-translate="Calculator">Calculator</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#footer" class="nav-link" data-translate="CONTACT US">CONTACT US</a>
                    </li>
                </ul>
                
                <div class="nav-contact">
                    <div class="contact-bubble">
                        <i class="fas fa-comments"></i>
                    </div>
                    <div class="contact-text">
                        <span data-translate="Have any Questions?">Have any Questions?</span>
                        <a href="mailto:info@easterncargo.co.in">info@easterncargo.co.in</a>
                    </div>
                </div>
                
                <!-- Mobile Menu Toggle -->
                <div class="mobile-menu-toggle">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                </div>
            </div>
            
            <!-- Mobile Menu Overlay -->
            <div class="mobile-menu-overlay">
                <div class="mobile-menu-content">
                    <div class="mobile-menu-header">
                        <!--<div class="mobile-logo">
                            <img src="images/logo.png" alt="Eastern Cargo Logo">
                            <span>EASTERN CARGO</span>
                        </div>
                        <button class="mobile-menu-close">
                            <i class="fas fa-times"></i>
                        </button>-->
                    </div>
                    
                    <ul class="mobile-menu">
                        <li class="mobile-menu-item">
                            <a href="#home" class="mobile-menu-link" data-translate="HOME">HOME</a>
                        </li>

                        <li class="mobile-menu-item">
                            <a href="#about" class="mobile-menu-link" data-translate="ABOUT US">ABOUT US</a>
                        </li>
                        
                        <li class="mobile-menu-item has-submenu">
                            <a href="#" class="mobile-menu-link mobile-submenu-toggle" data-translate="OUR SERVICES">OUR SERVICES <i class="fas fa-chevron-down"></i>
                            </a>
                            <ul class="mobile-submenu">
                                <li><a href="air-freight-services.html" data-translate="Air Freight">Air Freight</a></li>
                                <li><a href="ocean-freight-services.html" data-translate="Ocean Freight">Ocean Freight</a></li>
                                <li><a href="customs-clearance-services.html" data-translate="Customs Brokerage">Customs Brokerage</a></li>
                                <li><a href="warehouse-distribution-services.html" data-translate="Warehouse & Distribution">Warehouse & Distribution</a></li>
                                <li><a href="air-charter-services.html" data-translate="Air Charter">Air Charter</a></li>
                                <li><a href="pet-transport-services.html" data-translate="Your Pet Pal">Your Pet Pal</a></li>
                                <li><a href="unaccompanied-baggage-shipping.html" data-translate="Unaccompanied Baggage Shipping">Unaccompanied Baggage Shipping</a></li>
                                <!--<li><a href="human_remains.html" data-translate="Human Remains">Human Remains</a></li>-->
                            </ul>
                        </li>
                        
                        <li class="mobile-menu-item has-submenu">
                            <a href="#" class="mobile-menu-link mobile-submenu-toggle" data-translate="SPECIALIZED SERVICES">
                                SPECIALIZED SERVICES <i class="fas fa-chevron-down"></i>
                            </a>
                            <ul class="mobile-submenu">
                                <li><a href="express-logistics-services.html" data-translate="Express Logistics">Express Logistics</a></li>
                                <li><a href="healthcare-logistics.html" data-translate="Healthcare Logistics">Healthcare Logistics</a></li>
                                <li><a href="dgr-shipments.html" data-translate="DG Shipments">DG Shipments</a></li>
                                <li><a href="project-logistics.html" data-translate="Project Logistics">Project Logistics</a></li>
                            </ul>
                        </li>
                        
                        <li class="mobile-menu-item has-submenu">
                            <a href="#" class="mobile-menu-link mobile-submenu-toggle" data-translate="MORE">
                                MORE <i class="fas fa-chevron-down"></i>
                            </a>
                            <ul class="mobile-submenu">
                                <li><a href="teams.html" data-translate="Our Team">Our Team</a></li>
                                <li><a href="#testimonial-section" data-translate="Customer Reviews">Customer Reviews</a></li>
                                <li><a href="#calculator" data-translate="Calculator">Calculator</a></li>
                            </ul>
                        </li>
                        
                        <li class="mobile-menu-item">
                            <a href="#footer" class="mobile-menu-link" data-translate="CONTACT US">CONTACT US</a>
                        </li>
                    </ul>
                    
                    <div class="mobile-menu-footer">
                        <div class="mobile-contact">
                            <p data-translate="Have any Questions?">Have any Questions?</p>
                            <a href="mailto:info@easterncargo.co.in">info@easterncargo.co.in</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
<section id="home" class="hero" role="banner" aria-label="Hero Section">
    <div class="hero-slider">
        <div class="slide active">
         <picture>
            <source srcset="images/banner-5.webp" type="image/webp">
                  <img src="images/banner-5.jpg"
                   alt="Global air freight logistics with cargo plane"
                   class="hero-bg"
                   loading="lazy">
        </picture>
          <div class="hero-content">
              <div class="hero-left">
                  <div class="hero-text">
                       <h3><p class="hero-subtitle" data-translate="Worldwide Logistics">Worldwide Logistics</p></h3>
                         <h1 data-translate="International Air Freight"><span class="highlight">International</span> Air Freight</h1>
                     <div class="hero-buttons">
                          <a href="#footer" class="btn btn-primary" data-translate="Contact Us">Contact Us</a>
                     </div>
                  </div>
              </div>
           </div>
        </div>
        
        <div class="slide">
         <picture>
            <source srcset="images/banner-1.webp" type="image/webp">
                  <img src="images/banner-1.jpg"
                   alt="Multimodal transport network with ship, truck, and plane"
                   class="hero-bg"
                   loading="lazy">
        </picture>
          <div class="hero-content">
              <div class="hero-left">
                  <div class="hero-text">
                        <h3><p class="hero-subtitle" data-translate="Reliable & Efficient">Reliable & Efficient</p></h3>
                        <h1 data-translate="Multimodal Transport Network">Multimodal <span class="highlight">Transport</span> Network</h1>
                        <div class="hero-buttons">
                            <a href="#services" class="btn btn-primary" data-translate="Our Services">Our Services</a>
                        </div>
                  </div>
              </div>
           </div>
        </div>

        <div class="slide">
         <picture>
            <source srcset="images/banner-2.webp" type="image/webp">
                  <img src="images/banner-2.jpg"
                   alt="Ocean freight solutions featuring a large container ship"
                   class="hero-bg"
                   loading="lazy">
        </picture>
          <div class="hero-content">
              <div class="hero-left">
                  <div class="hero-text">
                        <h3><p class="hero-subtitle" data-translate="Global Trade Solutions">Global Trade Solutions</p></h3>
                        <h1 data-translate="Ocean Freight Solutions">Ocean Freight <span class="highlight">Solutions</span></h1>
                        <div class="hero-buttons">
                            <a href="#career-contact" class="btn btn-primary" data-translate="Get a Quote">Get a Quote</a>
                        </div>
                  </div>
              </div>
           </div>
        </div>
    </div>

<!-- ===== Shared Quote Form (Fixed) ===== -->
<div class="hero-right fixed-form">
  <div class="quote-form-overlay">
    <h3 data-translate="Get your free quote today">Get your free quote today</h3>

    <!-- **NEW** fully-working quote form with CAPTCHA -->
    <form id="quoteForm" class="quote-form" method="POST">
        <input type="hidden" name="form_type" value="quote">
        <input type="hidden" name="_token" value="<?php echo $token; ?>">
      <div class="form-group">
        <input type="text" id="name" name="name" placeholder="Name" required>
        <small id="error-name" class="error-msg"></small>
      </div>
      <div class="form-group">
        <input type="email" id="email" name="email" placeholder="Email" required>
        <small id="error-email" class="error-msg"></small>
      </div>
      <div class="form-group">
        <input type="tel" id="phone" name="phone" placeholder="Phone" required>
        <small id="error-phone" class="error-msg"></small>
      </div>
      <div class="form-group">
        <select id="transport" name="transport" required>
          <option value="">Service Type</option>
          <option value="air-freight">Air Freight</option>
          <option value="sea-freight">Sea Freight</option>
          <option value="land-transport">Land Transport</option>
          <option value="warehousing">Warehousing</option>
          <option value="pharma-logistics">Pharma Logistics</option>
          <option value="dgr-shipments">DGR Shipments</option>
          <option value="project-logistics">Project Logistics</option>
        </select>
        <small id="error-service" class="error-msg"></small>
      </div>
      <div class="form-group">
        <textarea id="message" name="message" placeholder="Your Message" rows="3"></textarea>
      </div>

      <!-- CAPTCHA -->
      <div class="form-group captcha-group">
        <div class="captcha-container">
          <span id="captcha1" class="captcha-display"></span>
          <button type="button" id="refresh-captcha1" class="refresh-captcha" aria-label="Refresh CAPTCHA">
            <i class="fas fa-sync-alt"></i>
          </button>
        </div>
        <input type="text" id="captcha-input1" name="captcha" placeholder="Enter CAPTCHA" required>
        <small id="captcha-error1" class="error" style="display: none;">❌ Wrong CAPTCHA</small>
        <small id="captcha-success1" class="success" style="display: none;">✅ CAPTCHA verified</small>
      </div>

      <button type="submit" class="btn btn-quote">Request A Quote</button>
    </form>
  </div>
</div>


<!-- CSS (inline for quick use; move to stylesheet if preferred) -->
<style>
.error, .success { display: none; font-size: 0.85rem; }
.error   { color: #dc3545; }
.success { color: #28a745; }

.captcha-container {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  margin-bottom: 8px;
}
.captcha-display {
  font-family: monospace;
  font-weight: bold;
  background: #f5f5f5;
  padding: 4px 8px;
  border-radius: 3px;
}
.refresh-captcha {
  background: #007bff;
  color: #fff;
  border: none;
  padding: 6px 10px;
  border-radius: 3px;
  cursor: pointer;
}
.refresh-captcha:hover { background: #0056b3; }
</style>

    <!-- Animated elements -->
    <img src="images/planean.png" alt="Flying Plane" class="flying-plane">
    <div class="slider-dots"></div>
</section>

    <!-- Lazy-load helper (native or lazysizes fallback) -->
 <script>
  if ('loading' in HTMLImageElement.prototype) {
    document.querySelectorAll('img[loading="lazy"]').forEach(img => img.src = img.dataset.src);
  }  else {
      const script = document.createElement('script');
      script.src = 'https://cdn.jsdelivr.net/npm/lazysizes@5/lazysizes.min.js';
      document.body.appendChild(script);
    }
 </script>

    <!-- New Why Choose Us Section with Tabular Layout -->
    <section class="why-choose-us">
        <div class="container">
            <div class="why-choose-header">
                <div class="why-choose-label" data-translate="WHY CHOOSE US" style="color: #1a5f7a;">WHY CHOOSE US</div>
                <h2 data-translate="Delivering Comprehensive Global Logistics Solutions" style="color: #1a5f7a;">Delivering Comprehensive Global Logistics Solutions.</h2>
            </div>
            
            <div class="why-choose-content">
                  <!-- Why Choose Us - Visual Section -->
                  <div class="why-choose-visual">
                        <div class="ship-image">
                          <img src="images/project-logistics.jpg" alt="Cargo aircraft loading cargo pallets" class="main-ship-img" loading="lazy">
                        </div>
                 </div>
                
                <div class="why-choose-text">
                    <div class="tab-navigation">
                        <button class="tab-btn active" data-tab="what-we-do" data-translate="WHAT WE DO">WHAT WE DO</button>
                        <button class="tab-btn" data-tab="our-award" data-translate="OUR AWARD">OUR AWARD</button>
                        <button class="tab-btn" data-tab="company-history" data-translate="COMPANY HISTORY">COMPANY HISTORY</button>
                    </div>
                    
                    <div class="tab-content">
                        <div class="tab-panel" id="company-history">
                            <p data-translate="Eastern Cargo is an independent, privately owned Indian company with over 45 years of experience providing end-to-end import and export services—covering air, sea, and land transport, along with expert customs clearance. We deliver solutions across multiple verticals such as projects, chemicals, pharma, garments, engineering goods, liquid cargo, hazardous cargo, temperature-controlled logistics, and e-commerce, all supported by a strong Pan India reach.">Eastern Cargo is an independent, privately owned Indian company with over 45 years of experience providing end-to-end import and export services—covering air, sea, and land transport, along with expert customs clearance. We deliver solutions across multiple verticals such as projects, chemicals, pharma, garments, engineering goods, liquid cargo, hazardous cargo, temperature-controlled logistics, and e-commerce, all supported by a strong Pan India reach.</p>
                            
                            <div class="features-grid">
                                <div class="features-column">
                                    <div class="feature-item">
                                        <i class="fas fa-star"></i>
                                        <span data-translate="Warehouse Facility">Warehouse Facility</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-star"></i>
                                        <span data-translate="Air Freight Facility">Air Freight Facility</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-star"></i>
                                        <span data-translate="Cost Effective Pricing">Cost Effective Pricing</span>
                                    </div>
                                </div>
                                <div class="features-column">
                                    <div class="feature-item">
                                        <i class="fas fa-star"></i>
                                        <span data-translate="Timely Delivery">Timely Delivery</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-star"></i>
                                        <span data-translate="Container delivery">Container delivery</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-star"></i>
                                        <span data-translate="Best Team Member">Best Team Member</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="learn-more-section">
                                <a href="#timeline-wrapper" class="btn btn-primary" data-translate="Learn More">Learn More</a>
                            </div>
                        </div>
                        
                        <div class="tab-panel active" id="what-we-do">
                            <p data-translate="Our company specializes in delivering tailored air and ocean transportation solutions to meet the unique needs of each client. Whether it's international freight forwarding or time-sensitive cargo, we ensure reliable, efficient, and cost-effective services across global supply chains. We deliver solutions across multiple verticals such as projects, chemicals, pharma, garments, engineering goods, liquid cargo, hazardous cargo, temperature-controlled logistics, and e-commerce, all supported by a strong Pan India reach."> Our company specializes in delivering tailored air and ocean transportation solutions to meet the unique needs of each client. Whether it's international freight forwarding or time-sensitive cargo, we ensure reliable, efficient, and cost-effective services across global supply chains. We deliver solutions across multiple verticals such as projects, chemicals, pharma, garments, engineering goods, liquid cargo, hazardous cargo, temperature-controlled logistics, and e-commerce, all supported by a strong Pan India reach.</p>
                            
                            <div class="features-grid">
                                <div class="features-column">
                                    <div class="feature-item">
                                        <i class="fas fa-star"></i>
                                        <span data-translate="Global Network">Global Network</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-star"></i>
                                        <span data-translate="Real-time Tracking">Real-time Tracking</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-star"></i>
                                        <span data-translate="Customs Expertise">Customs Expertise</span>
                                    </div>
                                </div>
                                <div class="features-column">
                                    <div class="feature-item">
                                        <i class="fas fa-star"></i>
                                        <span data-translate="24/7 Support">24/7 Support</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-star"></i>
                                        <span data-translate="Multi-modal Transport">Multi-modal Transport</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-star"></i>
                                        <span data-translate="Risk Management">Risk Management</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="learn-more-section">
                                <a href="#services" class="btn btn-primary" data-translate="Learn More">Learn More</a>
                            </div>
                        </div>
                        
                        <div class="tab-panel" id="our-award">
                            <p data-translate="Eastern Cargo has received numerous prestigious industry awards for excellence in freight forwarding and logistics. Our consistent performance and dedication to quality have earned recognition from leading airlines, global shippers, and trusted logistics agents—solidifying our reputation as a reliable partner in international cargo solutions.">Eastern Cargo has received numerous prestigious industry awards for excellence in freight forwarding and logistics. Our consistent performance and dedication to quality have earned recognition from leading airlines, global shippers, and trusted logistics agents—solidifying our reputation as a reliable partner in international cargo solutions.</p>
                            
                            <div class="features-grid">
                                <div class="features-column">
                                    <div class="feature-item">
                                        <i class="fas fa-star"></i>
                                        <span data-translate="ISO Certified">ISO Certified</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-star"></i>
                                        <span data-translate="Industry Awards">Industry Awards</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-star"></i>
                                        <span data-translate="Quality Standards">Quality Standards</span>
                                    </div>
                                </div>
                                <div class="features-column">
                                    <div class="feature-item">
                                        <i class="fas fa-star"></i>
                                        <span data-translate="Customer Recognition">Customer Recognition</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-star"></i>
                                        <span data-translate="AEO certified">AEO certified</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-star"></i>
                                        <span data-translate="Excellence Certificates">Excellence Certificates</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="learn-more-section">
                                <a href="#memberships" class="btn btn-primary" data-translate="Learn More">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Animated Plane -->
            <div class="animated-plane-new">
                <div class="plane-container">
                    <img src="images/planean.png" alt="Animated Plane" class="plane-image">
                </div>
            </div>
            <!-- Animated truck -->
            <img src="images/truckan.png" alt="Truck" class="moving-truck">
        </div>
    </section>


    <!-- Memberships Section -->
    <section id="memberships" class="memberships">
        <div class="container">
            <h2 data-translate="Memberships & Certifications" style="color: #1a5f7a;">Memberships & Certifications</h2>
            <p class="section-subtitle" data-translate="Proud members of leading global logistics organizations">Proud members of leading global logistics organizations</p>
        </div>
        <div class="scroller-container">
            <div class="membership-scroller">
                <div class="membership-card">
                    <img src="images/iso.png" alt="ISO 9001:2015 Logo">
                    <h3>ISO 9001:2015</h3>
                </div>
                <div class="membership-card">
                    <img src="images/aeo.png" alt="AEO Logo">
                    <h3>AEO Certified</h3>
                </div>
                <div class="membership-card">
                    <img src="images/wca.png" alt="WCA Logo">
                    <h3>WCA Member</h3>
                </div>
                <div class="membership-card">
                    <img src="images/iata.png" alt="IATA Logo">
                    <h3>IATA Agent</h3>
                </div>
                <div class="membership-card">
                    <img src="images/fiata.png" alt="FIATA Logo">
                    <h3>FIATA Member</h3>
                </div>
                <div class="membership-card">
                    <img src="images/acaai.png" alt="ACAAI Logo">
                    <h3>ACAAI Member</h3>
                </div>
                <div class="membership-card">
                    <img src="images/miffa.png" alt="MIFFA Logo">
                    <h3>MIFFA Member</h3>
                </div>
                <div class="membership-card">
                     <img src="images/maccia.png" alt="MACCIA Logo">
                     <h3>MACCIA Member</h3>
                </div>

            <!-- Duplicate cards for seamless scroll -->
            <div class="membership-card">
                <img src="images/iso.png" alt="ISO 9001:2015 Logo">
                <h3>ISO 9001:2015</h3>
            </div>
            <div class="membership-card">
                <img src="images/aeo.png" alt="AEO Logo">
                <h3>AEO Certified</h3>
            </div>
            <div class="membership-card">
                <img src="images/wca.png" alt="WCA Logo">
                <h3>WCA Member</h3>
            </div>
            <div class="membership-card">
                <img src="images/iata.png" alt="IATA Logo">
                <h3>IATA Agent</h3>
            </div>
            <div class="membership-card">
                <img src="images/fiata.png" alt="FIATA Logo">
                <h3>FIATA Member</h3>
            </div>
            <div class="membership-card">
                <img src="images/acaai.png" alt="ACAAI Logo">
                <h3>ACAAI Member</h3>
            </div>
            <div class="membership-card">
                <img src="images/miffa.png" alt="MIFFA Logo">
                <h3>MIFFA Member</h3>
            </div>
            <div class="membership-card">
                     <img src="images/maccia.png" alt="MACCIA Logo">
                     <h3>MACCIA Member</h3>
            </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about" role="region" aria-label="About Eastern Cargo Carriers">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2 data-translate="About EASTERN CARGO CARRIERS (I) PVT.LTD" style="color: #1a5f7a;">About EASTERN CARGO CARRIERS (I) PVT.LTD</h2>
                    <h3 data-translate="Our Legacy & Commitment">Our Legacy & Commitment</h3>
                    <p data-translate="As a proudly independent and privately-owned Indian company, Eastern Cargo Carriers (I) Pvt. Ltd. brings over 45 years of dedicated experience to the logistics industry. We specialize in providing comprehensive, 'End to End' service for our clients, covering all aspects of imports and exports across air, sea, and land transport, complete with seamless customs clearance.">As a proudly independent and privately-owned Indian company, Eastern Cargo Carriers (I) Pvt. Ltd. brings over 45 years of dedicated experience to the logistics industry. We specialize in providing comprehensive, "End to End" service for our clients, covering all aspects of imports and exports across air, sea, and land transport, complete with seamless customs clearance.</p>
                    <p data-translate="Our global presence is bolstered by our official registration as a Multimodal Transport Operator (MTO) with the DG Shipping, Government of India. This allows us to offer specialized expertise across a wide range of verticals, including Project Cargo, Chemicals, Pharmaceuticals, Garments, Engineering Goods, Liquid Cargo, Hazardous (Haz) Cargo, Temperature-Controlled shipments, and E-Commerce logistics.">Our global presence is bolstered by our official registration as a Multimodal Transport Operator (MTO) with the DG Shipping, Government of India. This allows us to offer specialized expertise across a wide range of verticals, including Project Cargo, Chemicals, Pharmaceuticals, Garments, Engineering Goods, Liquid Cargo, Hazardous (Haz) Cargo, Temperature-Controlled shipments, and E-Commerce logistics.</p>
                    <p data-translate="We are committed to the highest standards of quality, demonstrated by our ISO 9001 certification, AEO certification for streamlined customs clearance, and our GDP-compliant warehouse. As registered members of IATA and FIATA, we adhere to global best practices.">We are committed to the highest standards of quality, demonstrated by our ISO 9001 certification, AEO certification for streamlined customs clearance, and our GDP-compliant warehouse. As registered members of IATA and FIATA, we adhere to global best practices.</p>
                    <p data-translate="With a robust Pan-India presence, we provide flexible and powerful solutions, from handling temperature-controlled, hazardous, and liquid cargo to arranging full or partial air and sea charters. Our ocean freight capabilities cover everything from FCL and LCL containers to break bulk, RORO, heavy lifts, special equipment, and other abnormal cargo.">With a robust Pan-India presence, we provide flexible and powerful solutions, from handling temperature-controlled, hazardous, and liquid cargo to arranging full or partial air and sea charters. Our ocean freight capabilities cover everything from FCL and LCL containers to break bulk, RORO, heavy lifts, special equipment, and other abnormal cargo.</p>
                </div>
            </div>
        </div></section>
        
        <!-- Timeline Section -->
        <section id="timeline-wrapper" class="timeline-wrapper">
        <!--<div class="timeline-wrapper">-->
            <div class="container">
                <h2 class="timeline-main-title" data-translate="Ecc\'s Group Key Milestones in Aviation and Logistics" style="color: #1a5f7a;">Ecc's Group Key Milestones in Aviation and Logistics</h2>
            </div>
            <div class="timeline-container">
                <div class="timeline">
                    <div class="timeline-line"></div>
                    
                    <!-- 1979 - Below line -->
                    <div class="timeline-item below">
                        <div class="timeline-content">
                            <div class="timeline-dot"></div>
                            <h4>1979</h4>
                            <h5 data-translate="Custom House Agent" style="color: #1a5f7a;">Custom House Agent</h5>
                            <p data-translate="Established as a CHA">Established as a CHA</p>
                            <div class="timeline-details">
                                <h6>Custom House Agent (CHA)</h6>
                                <p>Eastern Cargo Carriers began its journey as a Custom House Agent, providing essential customs clearance services for import and export operations. This marked the foundation of our logistics expertise.</p>
                                <ul>
                                    <li>Customs clearance services</li>
                                    <li>Documentation handling</li>
                                    <li>Import/Export facilitation</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 1984 - Above line -->
                    <div class="timeline-item below">
                        <div class="timeline-content">
                            <div class="timeline-dot"></div>
                            <h4>1984</h4>
                            <h5 data-translate="IATA Agent" style="color: #1a5f7a;">IATA Agent</h5>
                            <p data-translate="Leveraging accreditation">Leveraging accreditation</p>
                            <div class="timeline-details">
                                <h6>IATA Accreditation</h6>
                                <p>Achieved International Air Transport Association (IATA) accreditation, enabling us to provide comprehensive air freight services with global reach and industry-standard practices.</p>
                                <ul>
                                    <li>Global air freight network</li>
                                    <li>IATA standard compliance</li>
                                    <li>International cargo operations</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 1989 - Below line -->
                    <div class="timeline-item below">
                        <div class="timeline-content">
                            <div class="timeline-dot"></div>
                            <h4>1989</h4>
                            <h5 data-translate="Charter Operation" style="color: #1a5f7a;">Charter Operation</h5>
                            <p data-translate="Initiated first charter">Initiated first charter</p>
                            <div class="timeline-details">
                                <h6>Charter Operations Launch</h6>
                                <p>Launched our charter operations division, providing dedicated aircraft solutions for urgent and specialized cargo requirements. This expanded our service portfolio significantly.</p>
                                <ul>
                                    <li>Dedicated aircraft charters</li>
                                    <li>Urgent cargo solutions</li>
                                    <li>Specialized transport services</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 1994-99 - Above line -->
                    <div class="timeline-item below">
                        <div class="timeline-content">
                            <div class="timeline-dot"></div>
                            <h4>1994-99</h4>
                            <h5 data-translate="Network Expansion" style="color: #1a5f7a;">Network Expansion</h5>
                            <p data-translate="Achieved Pan-India presence">Achieved Pan-India presence</p>
                            <div class="timeline-details">
                                <h6>Pan-India Network Expansion</h6>
                                <p>Successfully expanded our operations across India, establishing a comprehensive network of offices and service centers to provide nationwide logistics solutions.</p>
                                <ul>
                                    <li>Nationwide presence</li>
                                    <li>Multiple office locations</li>
                                    <li>Comprehensive service network</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 2005-11 - Below line -->
                    <div class="timeline-item below">
                        <div class="timeline-content">
                            <div class="timeline-dot"></div>
                            <h4>2005-11</h4>
                            <h5 data-translate="GSAs & Consolidation" style="color: #1a5f7a;">GSAs & Consolidation</h5>
                            <p data-translate="Key GSA partnerships">Key GSA partnerships</p>
                            <div class="timeline-details">
                                <h6>GSA Partnerships & Consolidation</h6>
                                <p>Formed strategic General Sales Agent (GSA) partnerships with major international airlines and shipping lines, consolidating our position as a leading logistics provider.</p>
                                <ul>
                                    <li>Strategic airline partnerships</li>
                                    <li>Global shipping alliances</li>
                                    <li>Enhanced service capabilities</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 2015-16 - Above line -->
                    <div class="timeline-item below">
                        <div class="timeline-content">
                            <div class="timeline-dot"></div>
                            <h4>2015-16</h4>
                            <h5 data-translate="Pharma Expertise" style="color: #1a5f7a;">Pharma Expertise</h5>
                            <p data-translate="Specialized services">Specialized services</p>
                            <div class="timeline-details">
                                <h6>Pharmaceutical Logistics Expertise</h6>
                                <p>Developed specialized expertise in pharmaceutical logistics, including temperature-controlled transportation and GDP-compliant warehousing for life sciences products.</p>
                                <ul>
                                    <li>Temperature-controlled solutions</li>
                                    <li>GDP-compliant warehousing</li>
                                    <li>Pharma-specific expertise</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 2017-18 - Below line -->
                    <div class="timeline-item below">
                        <div class="timeline-content">
                            <div class="timeline-dot"></div>
                            <h4>2017-18</h4>
                            <h5 data-translate="Temp Warehouse" style="color: #1a5f7a;">Temp Warehouse</h5>
                            <p data-translate="Pharma packaging">Pharma packaging</p>
                            <div class="timeline-details">
                                <h6>Temperature-Controlled Warehouse</h6>
                                <p>Established dedicated temperature- controlled warehousing facilities for pharmaceutical products, ensuring proper storage and handling of sensitive cargo.</p>
                                <ul>
                                    <li>Temperature-controlled storage</li>
                                    <li>Pharma packaging services</li>
                                    <li>Quality assurance protocols</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 2019-20 - Above line -->
                    <div class="timeline-item below">
                        <div class="timeline-content">
                            <div class="timeline-dot"></div>
                            <h4>2019-20</h4>
                            <h5 data-translate="Critical Response" style="color: #1a5f7a;">Critical Response</h5>
                            <p data-translate="Imported life-saving drugs">Imported life-saving drugs</p>
                            <div class="timeline-details">
                                <h6>Critical Response Operations</h6>
                                <p>Successfully handled critical response operations during the pandemic, importing life-saving drugs and medical supplies with unprecedented speed and efficiency.</p>
                                <ul>
                                    <li>Emergency medical supplies</li>
                                    <li>Rapid response logistics</li>
                                    <li>Life-saving drug transport</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 2020-21 - Below line -->
                    <div class="timeline-item below">
                        <div class="timeline-content">
                            <div class="timeline-dot"></div>
                            <h4>2020-21</h4>
                            <h5 data-translate="Governor's Award" style="color: #1a5f7a;">Governor's Award</h5>
                            <p data-translate="For Pharma Exports">For Pharma Exports</p>
                            <div class="timeline-details">
                                <h6>Governor's Award Recognition</h6>
                                <p>Received the prestigious Governor's Award for excellence in pharmaceutical exports, recognizing our outstanding contribution to the healthcare logistics sector.</p>
                                <ul>
                                    <li>Excellence in pharma exports</li>
                                    <li>Industry recognition</li>
                                    <li>Healthcare logistics leadership</li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <!-- Duplicate items for seamless loop -->
                    <!-- 1979 - Below line -->
                    <div class="timeline-item below timeline-duplicate">
                        <div class="timeline-content">
                            <div class="timeline-dot"></div>
                            <h4>1979</h4>
                            <h5 data-translate="Custom House Agent" style="color: #1a5f7a;">Custom House Agent</h5>
                            <p data-translate="Established as a CHA">Established as a CHA</p>
                            <div class="timeline-details">
                                <h6>Custom House Agent (CHA)</h6>
                                <p>Eastern Cargo Carriers began its journey as a Custom House Agent, providing essential customs clearance services for import and export operations. This marked the foundation of our logistics expertise.</p>
                                <ul>
                                    <li>Customs clearance services</li>
                                    <li>Documentation handling</li>
                                    <li>Import/Export facilitation</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 1984 - Above line -->
                    <div class="timeline-item below timeline-duplicate">
                        <div class="timeline-content">
                            <div class="timeline-dot"></div>
                            <h4>1984</h4>
                            <h5 data-translate="IATA Agent" style="color: #1a5f7a;">IATA Agent</h5>
                            <p data-translate="Leveraging accreditation">Leveraging accreditation</p>
                            <div class="timeline-details">
                                <h6>IATA Accreditation</h6>
                                <p>Achieved International Air Transport Association (IATA) accreditation, enabling us to provide comprehensive air freight services with global reach and industry-standard practices.</p>
                                <ul>
                                    <li>Global air freight network</li>
                                    <li>IATA standard compliance</li>
                                    <li>International cargo operations</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 1989 - Below line -->
                    <div class="timeline-item below timeline-duplicate">
                        <div class="timeline-content">
                            <div class="timeline-dot"></div>
                            <h4>1989</h4>
                            <h5 data-translate="Charter Operation" style="color: #1a5f7a;">Charter Operation</h5>
                            <p data-translate="Initiated first charter">Initiated first charter</p>
                            <div class="timeline-details">
                                <h6>Charter Operations Launch</h6>
                                <p>Launched our charter operations division, providing dedicated aircraft solutions for urgent and specialized cargo requirements. This expanded our service portfolio significantly.</p>
                                <ul>
                                    <li>Dedicated aircraft charters</li>
                                    <li>Urgent cargo solutions</li>
                                    <li>Specialized transport services</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 1994-99 - Above line -->
                    <div class="timeline-item below timeline-duplicate">
                        <div class="timeline-content">
                            <div class="timeline-dot"></div>
                            <h4>1994-99</h4>
                            <h5 data-translate="Network Expansion" style="color: #1a5f7a;">Network Expansion</h5>
                            <p data-translate="Achieved Pan-India presence">Achieved Pan-India presence</p>
                            <div class="timeline-details">
                                <h6>Pan-India Network Expansion</h6>
                                <p>Successfully expanded our operations across India, establishing a comprehensive network of offices and service centers to provide nationwide logistics solutions.</p>
                                <ul>
                                    <li>Nationwide presence</li>
                                    <li>Multiple office locations</li>
                                    <li>Comprehensive service network</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 2005-11 - Below line -->
                    <div class="timeline-item below timeline-duplicate">
                        <div class="timeline-content">
                            <div class="timeline-dot"></div>
                            <h4>2005-11</h4>
                            <h5 data-translate="GSAs & Consolidation" style="color: #1a5f7a;">GSAs & Consolidation</h5>
                            <p data-translate="Key GSA partnerships">Key GSA partnerships</p>
                            <div class="timeline-details">
                                <h6>GSA Partnerships & Consolidation</h6>
                                <p>Formed strategic General Sales Agent (GSA) partnerships with major international airlines and shipping lines, consolidating our position as a leading logistics provider.</p>
                                <ul>
                                    <li>Strategic airline partnerships</li>
                                    <li>Global shipping alliances</li>
                                    <li>Enhanced service capabilities</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 2015-16 - Above line -->
                    <div class="timeline-item below timeline-duplicate">
                        <div class="timeline-content">
                            <div class="timeline-dot"></div>
                            <h4>2015-16</h4>
                            <h5 data-translate="Pharma Expertise" style="color: #1a5f7a;">Pharma Expertise</h5>
                            <p data-translate="Specialized services">Specialized services</p>
                            <div class="timeline-details">
                                <h6>Pharmaceutical Logistics Expertise</h6>
                                <p>Developed specialized expertise in pharmaceutical logistics, including temperature-controlled transportation and GDP-compliant warehousing for life sciences products.</p>
                                <ul>
                                    <li>Temperature-controlled solutions</li>
                                    <li>GDP-compliant warehousing</li>
                                    <li>Pharma-specific expertise</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 2017-18 - Below line -->
                    <div class="timeline-item below timeline-duplicate">
                        <div class="timeline-content">
                            <div class="timeline-dot"></div>
                            <h4>2017-18</h4>
                            <h5 data-translate="Temp Warehouse" style="color: #1a5f7a;">Temp Warehouse</h5>
                            <p data-translate="Pharma packaging">Pharma packaging</p>
                            <div class="timeline-details">
                                <h6>Temperature-Controlled Warehouse</h6>
                                <p>Established dedicated temperature- controlled warehousing facilities for pharmaceutical products, ensuring proper storage and handling of sensitive cargo.</p>
                                <ul>
                                    <li>Temperature-controlled storage</li>
                                    <li>Pharma packaging services</li>
                                    <li>Quality assurance protocols</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 2019-20 - Above line -->
                    <div class="timeline-item below timeline-duplicate">
                        <div class="timeline-content">
                            <div class="timeline-dot"></div>
                            <h4>2019-20</h4>
                            <h5 data-translate="Critical Response" style="color: #1a5f7a;">Critical Response</h5>
                            <p data-translate="Imported life-saving drugs">Imported life-saving drugs</p>
                            <div class="timeline-details">
                                <h6>Critical Response Operations</h6>
                                <p>Successfully handled critical response operations during the pandemic, importing life-saving drugs and medical supplies with unprecedented speed and efficiency.</p>
                                <ul>
                                    <li>Emergency medical supplies</li>
                                    <li>Rapid response logistics</li>
                                    <li>Life-saving drug transport</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 2020-21 - Below line -->
                    <div class="timeline-item below timeline-duplicate">
                        <div class="timeline-content">
                            <div class="timeline-dot"></div>
                            <h4>2020-21</h4>
                            <h5 data-translate="Governor's Award" style="color: #1a5f7a;">Governor's Award</h5>
                            <p data-translate="For Pharma Exports">For Pharma Exports</p>
                            <div class="timeline-details">
                                <h6>Governor's Award Recognition</h6>
                                <p>Received the prestigious Governor's Award for excellence in pharmaceutical exports, recognizing our outstanding contribution to the healthcare logistics sector.</p>
                                <ul>
                                    <li>Excellence in pharma exports</li>
                                    <li>Industry recognition</li>
                                    <li>Healthcare logistics leadership</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-header">
                <h2 data-translate="Our Services" style="color: #1a5f7a;">Our Services</h2>
                <h3 data-translate="Wide variety of logistics services">Wide variety of logistics services</h3>
                <p data-translate="Our logistics company offers a diverse range of services tailored to meet the unique needs of each client. From warehousing and distribution to transportation management and supply.">Our logistics company offers a diverse range of services tailored to meet the unique needs of each client. From warehousing and distribution to transportation management and supply.</p>
            </div>
            <div class="services-grid">

                <!-- Air Freight Services -->
                <a href="air-freight-services.html" class="service-link">
                  <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-plane"></i>
                    </div>
                    <h4 data-translate="Air Freight (Export & Import)" style="color: #1a5f7a;">Air Freight (Export & Import)</h4>
                    <p data-translate="With over 40+ years in the market, we have a strong reach with a wide range of airline carriers to offer aggressive pricing and tailor-made solutions." style="text-align: left;">With over 40+ years in the market, we have a strong reach with a wide range of airline carriers to offer aggressive pricing and tailor-made solutions.</p>
                  </div></a>

                <!-- Ocean Frieght Services -->
                <a href="ocean-freight-services.html" class="service-link">
                  <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-ship"></i>
                    </div>
                    <h4 data-translate="Ocean Freight (Import & Export)" style="color: #1a5f7a;">Ocean Freight (Import & Export)</h4>
                    <p data-translate="Comprehensive ocean freight services for all your import and export needs, ensuring reliable and timely delivery across the globe." style="text-align: left;">Comprehensive ocean freight services for all your import and export needs, ensuring reliable and timely delivery across the globe.</p>
                  </div></a>

                <!-- Customs-Clearance Services -->
                <a href="customs-clearance-services.html" class="service-link">
                  <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h4 data-translate="Customs Brokerage" style="color: #1a5f7a;">Customs Brokerage</h4>
                    <p data-translate="We offer a range of value-added customs services to move your shipments through customs quickly and efficiently." style="text-align: left;">We offer a range of value-added customs services to move your shipments through customs quickly and efficiently.</p>
                  </div></a>

                <!-- Warehouse & Distribution Services -->
                <a href="warehouse-distribution-services.html" class="service-link">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-warehouse"></i>
                    </div>
                    <h4 data-translate="Warehouse & Distribution" style="color: #1a5f7a;">Warehouse & Distribution</h4>
                    <p data-translate="To ensure your supply chain runs smoothly, we offer dedicated and shared warehousing and distribution services." style="text-align: left;">To ensure your supply chain runs smoothly, we offer dedicated and shared warehousing and distribution services.</p>
                </div></a>

                <!-- Air Charter Services -->
                <a href="air-charter-services.html" class="service-link">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-plane-departure"></i>
                    </div>
                    <h4 data-translate="Air Charter" style="color: #1a5f7a;">Air Charter</h4>
                    <p data-translate="Since 1989, we have provided urgent and comprehensive Air Cargo Chartering services, handling requests with thorough training." style="text-align: left;">Since 1989, we have provided urgent and comprehensive Air Cargo Chartering services, handling requests with thorough training.</p>
                </div></a>

                <!-- Your Pet Pal Services -->
                <a href="pet-transport-services.html" class="service-link">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <h4 data-translate="Your Pet Pal" style="color: #1a5f7a;">Your Pet Pal</h4>
                    <p data-translate="From cats and dogs to horses, we have the knowledge to handle and transport your pets gently and with care to their destination." style="text-align: left;">From cats and dogs to horses, we have the knowledge to handle and transport your pets gently and with care to their destination.</p>
                </div></a>

                <!--Express Logistics Services -->
                <a href="express-logistics-services.html" class="service-link">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h4 data-translate="Express Logistics" style="color: #1a5f7a;">Express Logistics</h4>
                    <p data-translate="Our international express cargo services ensure rapid and reliable delivery for your urgent global shipments." style="text-align: left;">Our international express cargo services ensure rapid and reliable delivery for your urgent global shipments.</p>
                </div></a>
                
                <!--Unaccompanied Baggage Shipping Services -->
                <a href="unaccompanied-baggage-shipping.html" class="service-link">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-suitcase"></i>
                    </div>
                    <h4 data-translate="Unaccompanied Baggage Shipping" style="color: #1a5f7a;">Unaccompanied Baggage Shipping</h4>
                    <p data-translate="Personal Baggage Shipping takes the stress out of your move by handling excess items with expert care. We manage professional packing, customs clearance." style="text-align: left;">Personal Baggage Shipping takes the stress out of your move by handling excess items with expert care. We manage professional packing, customs clearance.</p>
                </div></a>

                <!--Human Remains Services -->
                <!--<a href="human_remains.html" class="service-link">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-person"></i>
                    </div>
                    <h4 data-translate="Human Remains" style="color: #1a5f7a;">Human Remains</h4>
                    <p data-translate="" style="text-align: left;"></p>
                </div></a>-->
            </div>
        </div>
    </section>

<!-- Customer Reviews Section -->
<section id="testimonial-section" class="testimonial-section">
    <h2 data-translate="What our clients say" style="color: #1a5f7a;">What our clients say</h2>
    <p>Trusted experiences shared by our customers.</p>

    <div class="testimonial-grid">

      <!-- Testimonial 1 -->
      <div class="testimonial-card">
        <div class="testimonial-content">
          <h3 style="color: #1a5f7a;">Superfast Delivery</h3>
              <div class="stars">★★★★<span class="half">★</span></div>
          <p>
            Eastern Cargo Carriers provided an excellent service for my shipment. 
            From pickup to delivery, everything was seamless and on time. 
            I truly appreciate their professionalism and customer support.
          </p>
        </div>
        <div class="quote">”</div>
      </div>

      <!-- Testimonial 2 -->
      <div class="testimonial-card">
        <div class="testimonial-content">
          <h3 style="color: #1a5f7a;">Excellent Services</h3>
              <div class="stars">★★★★<span class="half">★</span></div>
          <p>
            Very professional company with reliable services and no delays. 
            Every shipment is handled smoothly and on time, giving me complete peace of mind. 
            Truly one of the best choices for dependable cargo solutions.
          </p>
        </div>
        <div class="quote">”</div>
      </div>

      <!-- Testimonial 3 -->
      <div class="testimonial-card">
        <div class="testimonial-content">
          <h3 style="color: #1a5f7a;">Reliable Partner</h3>
              <div class="stars">★★★★<span class="half">★</span></div>
          <p>
            Eastern Cargo Carriers has become our trusted partner of choice. 
            Their punctuality, professionalism, and reliability ensure 
            every delivery is handled with care and always on time.
          </p>
        </div>
        <div class="quote">”</div>
      </div>

      <!-- Testimonial 4 -->
      <div class="testimonial-card">
        <div class="testimonial-content">
          <h3 style="color: #1a5f7a;">Affordable & Safe</h3>
              <div class="stars">★★★★<span class="half">★</span></div>
          <p>
            Eastern Cargo Carriers offers the most economical and safest way 
            to send shipments from the UAE. Their punctuality, professionalism, 
            and reliability make the whole process smooth and stress-free.
          </p>
        </div>
        <div class="quote">”</div>
      </div>

      <!-- Testimonial 5 -->
      <div class="testimonial-card">
        <div class="testimonial-content">
          <h3 style="color: #1a5f7a;">Outstanding Support</h3>
              <div class="stars">★★★★<span class="half">★</span></div>
          <p>
            Eastern Cargo Carriers impressed me with their professional support team. 
            They provided timely updates, handled every query with care, and ensured 
            my shipment arrived punctually and without issues.
          </p>
        </div>
        <div class="quote">”</div>
      </div>

      <!-- Testimonial 6 -->
      <div class="testimonial-card">
        <div class="testimonial-content">
          <h3 style="color: #1a5f7a;">Trusted for Years</h3>
              <div class="stars">★★★★<span class="half">★</span></div>
          <p>
            We’ve relied on Eastern Cargo Carriers for years, and their consistency in punctuality, professionalism, 
            and reliable service has made them our first choice for every shipment.
          </p>
        </div>
        <div class="quote">”</div>
      </div>

    </div>
  </section>

      <!-- Calculator Section -->
    <section id="calculator" class="calculator">
        <div class="container">
            <div class="calculator-container">
                <div class="calculator-header">
                    <div class="calculator-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M21.93,10.28,12.6,3.41a1,1,0,0,0-1.2,0L2.07,10.28A1,1,0,0,0,2,11.72V20a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V11.72A1,1,0,0,0,21.93,10.28ZM14,19H10V16h4Zm6,0H16V15a1,1,0,0,0-1-1H9a1,1,0,0,0-1,1v4H4V12.28l8-6.14,8,6.14Z"/>
                        </svg>
                    </div>
                    <h2 data-translate="Smart Cargo Calculator" style="color: #1a5f7a;">Smart Cargo Calculator</h2>
                </div>
                <div class="measurement-unit">
                    <button class="unit-toggle-btn" data-unit="CM" data-translate="Centimeters (CM)">Centimeters (CM)</button>
                    <button class="unit-toggle-btn active" data-unit="IN" data-translate="Inches (IN)">Inches (IN)</button>
                </div>
                <div class="packages-header">
                    <h3 data-translate="Package Dimensions" style="color: #1a5f7a;">Package Dimensions</h3>
                    <button id="add-package-btn" class="btn-add" data-translate="+ Add Package">+ Add Package</button>
                </div>
                <div id="package-list"></div>
                <div class="calculator-actions">
                    <button id="reset-btn" class="btn-reset" data-translate="Reset">Reset</button>
                    <button id="calculate-btn" class="btn-calculate" data-translate="Calculate">Calculate</button>
                </div>
                <div id="result-display"></div>
            </div>
        </div>
    </section>


<!-- Career + Contact Section -->
<section id="career-contact" class="career-contact">
    <div class="container career-contact-container">
        <!-- Career Form (Left) -->
        <div class="career-form">
            <h3 data-translate="Join Our Team">Join Our Team</h3>
            <p data-translate="Build your career with Eastern Cargo Carriers – explore exciting opportunities today.">Build your career with Eastern Cargo Carriers – explore exciting opportunities today.</p>

            <form id="careerForm" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="form_type" value="career">
                <input type="hidden" name="_token" value="<?php echo $token; ?>">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Name" required>
                    <small id="error-name" class="error-msg"></small>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" required>
                    <small id="error-email" class="error-msg"></small>
                </div>
                <div class="form-group">
                    <label for="resume" data-translate="Upload Resume">Upload Resume</label>
                    <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
                </div>
                <div class="form-group">
                    <textarea name="message" placeholder="Your Message (Optional)" rows="4"></textarea>
                </div>

                <!-- CAPTCHA -->
                <div class="form-group captcha-group">
                    <div class="captcha-container">
                        <span id="captcha2" class="captcha-display"></span>
                        <button type="button" id="refresh-captcha2" class="refresh-captcha" aria-label="Refresh CAPTCHA">
                            <i class="fas fa-sync-alt"></i>
                        </button>
                    </div>
                    <input type="text" id="captcha-input2" name="captcha" placeholder="Enter CAPTCHA" required>
                    <small id="captcha-error2" class="error" style="display: none;">❌ Wrong CAPTCHA</small>
                    <small id="captcha-success2" class="success" style="display: none;">✅ CAPTCHA verified</small>
                </div>

                <button type="submit" class="btn-primary">Submit Application</button>
            </form>
        </div>

        <!-- Contact Form (Right) -->
        <div class="contact-form">
            <h3 data-translate="Get your free quote today">Get your free quote today</h3>
            <p data-translate="Request your free logistics quote today and experience hassle-free shipping.">Request your free logistics quote today and experience hassle-free shipping.</p>

            <form id="contactForm" method="POST">
                <input type="hidden" name="form_type" value="contact">
                <input type="hidden" name="_token" value="<?php echo $token; ?>">
                <div class="form-group">
                    <input type="text" id="name" name="name" placeholder="Name" required>
                     <small id="error-name" class="error-msg"></small>
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="email" placeholder="Email" required>
                    <small id="error-email" class="error-msg"></small>
                </div>
                <div class="form-group">
                    <input type="tel" id="phone" name="phone" placeholder="Phone" required>
                    <small id="error-phone" class="error-msg"></small>
                </div>
                <div class="form-group">
                    <select id="service" name="service" required>
                        <option value="">Select Service</option>
                        <option value="air-freight">Air Freight</option>
                        <option value="sea-freight">Sea Freight</option>
                        <option value="land-transport">Land Transport</option>
                        <option value="warehousing">Warehousing</option>
                        <option value="pharma-logistics">Pharma Logistics</option>
                        <option value="dgr-shipments">DGR Shipments</option>
                        <option value="project-logistics">Project Logistics</option>
                    </select>
                    <small id="error-service" class="error-msg"></small>
                </div>
                <div class="form-group">
                    <textarea id="contactMessage" name="message" placeholder="Your Message" rows="4"></textarea>
                </div>

                <!-- CAPTCHA -->
                <div class="form-group captcha-group">
                    <div class="captcha-container">
                        <span id="captcha3" class="captcha-display"></span>
                        <button type="button" id="refresh-captcha3" class="refresh-captcha" aria-label="Refresh CAPTCHA">
                            <i class="fas fa-sync-alt"></i>
                        </button>
                    </div>
                    <input type="text" id="captcha-input3" name="captcha" placeholder="Enter CAPTCHA" required>
                    <small id="captcha-error3" class="error" style="display: none;">❌ Wrong CAPTCHA</small>
                    <small id="captcha-success3" class="success" style="display: none;">✅ CAPTCHA verified</small>
                </div>

                <button type="submit" class="btn btn-primary">Request A Quote</button>
            </form>
        </div>
    </div>
</section>


<!-- CSS (inline for quick use, or move to stylesheet) -->
<style>
/* CAPTCHA & Form Styling */
#career-contact form {
    max-width: 100%;
    display: flex;
    flex-direction: column;
    gap: 0.8rem;
}
#career-contact input,
#career-contact select,
#career-contact textarea {
    padding: 0.6rem 0.8rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1rem;
}
#career-contact textarea { resize: vertical; min-height: 80px; }

.captcha-group { margin-top: 0.5rem; display: flex; flex-direction: column; gap: 0.3rem; }
.captcha-container {
    display: inline-flex;
    align-items: center;
    gap: 8px;
}
.captcha-display {
    font-family: monospace;
    font-weight: bold;
    background: #f5f5f5;
    padding: 4px 8px;
    border-radius: 3px;
}
.error, .success { display: none; font-size: 0.85rem; }
.error   { color: #dc3545; }
.success { color: #28a745; }

.refresh-captcha {
    background: #007bff;
    color: #fff;
    border: none;
    padding: 6px 10px;
    border-radius: 3px;
    cursor: pointer;
}
.refresh-captcha:hover { background: #0056b3; }
</style>

    <!-- Footer -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Eastern Cargo Carriers (I) Pvt.Ltd. </h3>


                      <div class="contact-info">
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                              <a href="tel:+91-22-67539999">+91-22-67539999</a>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                               <a href="mailto:info@easterncargo.co.in">info@easterncargo.co.in</a><br>
                               <a href="mailto:lseth@easterncargo.co.in">lseth@easterncargo.co.in</a></div>
                        </div>

                         <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                              <span><a href="https://www.google.com/maps/place/EASTERN+CARGO+CARRIERS+(I)+PVT.LTD/@19.1063814,72.8580718,21z/data=!4m6!3m5!1s0x3be7c8443fffffff:0xed6596139eab52fa!8m2!3d19.1063333!4d72.8580194!16s%2Fg%2F1tf68j6_?entry=ttu&g_ep=EgoyMDI1MDgxOS4wIKXMDSoASAFQAw%3D%3D">
                                Unit #25/26/27, Adarsh Industrial Estate,
                                Sahar Road, Chakala, Andheri (East),
                                Mumbai – 400 099</a></span>
                        </div>
                      </div>

                </div>
                <div class="footer-section">
                    <h3 data-translate="Quick Links">Quick Links</h3>
                    <ul>
                        <li><a href="index.php#about" data-translate="About Us">About Us</a></li>
                        <li><a href="index.php#career-contact" data-translate="Careers">Careers</a></li>
                        <li><a href="teams.html" data-translate="Our Team">Our Team</a></li>
                        <li><a href="index.php#services" data-translate="Our Services">Our Services</a></li>
                        <li><a href="index.php#testimonial-section" data-translate="Client Reviews">Client Reviews</a></li>
                        <li><a href="useful-links.html" data-translate="Certificates & Policies">Certificates & Policies</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3 data-translate="Specialized Services">Specialized Services</h3>
                    <ul>
                        <li><a href="express-logistics-services.html" data-translate="Express Logistics">Express Logistics</a></li>
                        <li><a href="healthcare-logistics.html" data-translate="Healthcare Logistics">Healthcare Logistics</a></li>
                        <li><a href="dgr-shipments.html" data-translate="DG Shipments">DG Shipments</a></li>
                        <li><a href="project-logistics.html" data-translate="Project Logistics">Project Logistics</a></li>
                    </ul>
                </div>

                    <!-- ✅ New Map Section -->
                         <div class="footer-section">
                           <h3 data-translate="Find Us">Find Us</h3>
                            <div class="map-container1">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235.62691720178867!2d72.85800062453691!3d19.10631017311058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8443fffffff%3A0xed6596139eab52fa!2sEASTERN%20CARGO%20CARRIERS%20(I)%20PVT.LTD!5e0!3m2!1sen!2sin!4v1756098172807!5m2!1sen!2sin" 
                                   width="600" 
                                   height="450" 
                                   style="border:0;" 
                                   allowfullscreen="" 
                                   loading="lazy" 
                                   referrerpolicy="no-referrer-when-downgrade">
                              </iframe>
                            </div>
                         </div>               
            </div>

                <div class="social-links">
                    <span data-translate="Follow us :">Follow us :</span>
                    <a href="https://www.facebook.com/easterncargo"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://x.com/easterncargo"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/company/eastern-cargo-carriers-i-pvt-ltd"><i class="fab fa-linkedin-in"></i></a>
                </div>

            <div class="footer-bottom">
                <p>&copy; Copyright 2025. All Rights Reserved by Eastern Cargo Carriers (I) Pvt.Ltd</p>
            </div>
        </div>
    </footer>

    <!-- Language Selector Modal -->
    <div id="languageModal" class="language-modal">
        <div class="language-modal-content">
            <div class="language-modal-header">
                <h3>Select Language</h3>
                <span class="close-modal">&times;</span>
            </div>
            <div class="language-options">
                <div class="language-option" data-lang="en">
                    <img src="https://flagcdn.com/w20/gb.png" alt="English">
                    <span>English</span>
                </div>
                <div class="language-option" data-lang="es">
                    <img src="https://flagcdn.com/w20/es.png" alt="Spanish">
                    <span>Español</span>
                </div>
                <div class="language-option" data-lang="fr">
                    <img src="https://flagcdn.com/w20/fr.png" alt="French">
                    <span>Français</span>
                </div>
                <div class="language-option" data-lang="de">
                    <img src="https://flagcdn.com/w20/de.png" alt="German">
                    <span>Deutsch</span>
                </div>
                <div class="language-option" data-lang="zh">
                    <img src="https://flagcdn.com/w20/cn.png" alt="Chinese">
                    <span>中文</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Include jQuery -->
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="captcha.js"></script>
    <script src="script.js"></script>


</body>
</html>