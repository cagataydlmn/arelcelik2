<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
    // Sayfa bazlı SEO ayarları
    $current_page = basename($_SERVER['PHP_SELF']);
    
    // Eğer sayfa kendi SEO değişkenlerini tanımlamışsa onları kullan
    if (!isset($pageTitle)) {
        switch($current_page) {
            case 'index.php':
                $page_title = "Arel Çelik | Sakarya Çelik Yapı, Çelik Hasır, Trapez Sac, Lazer Kesim Hizmetleri";
                $page_description = "Arel Çelik Sakarya - 20 yıllık deneyim ile çelik yapı, çelik hasır, trapez sac, sandviç panel, lazer kesim, abkant büküm ve kaynaklı imalat hizmetleri. Sakarya'nın güvenilir çelik tedarikçisi Arel Çelik.";
                $page_keywords = "Arel Çelik, Sakarya Arel Çelik, çelik yapı Sakarya, çelik hasır, trapez sac, sandviç panel, lazer kesim Sakarya, abkant büküm, kaynaklı imalat, çelik profil, kutu profil, Sakarya çelik, Ada Arel Yapı";
                break;
            case 'kurumsal.php':
                $page_title = "Kurumsal | Arel Çelik Sakarya - Hakkımızda, Vizyonumuz, Misyonumuz";
                $page_description = "Arel Çelik Sakarya hakkında bilgi edinin. 2015'ten bu yana Sakarya'da çelik sektöründe hizmet veren Arel Çelik, Ada Arel Yapı A.Ş. çatısı altında kaliteli ürün ve hizmet sunmaktadır.";
                $page_keywords = "Arel Çelik hakkında, Sakarya Arel Çelik, Arel Çelik kurumsal, Ada Arel Yapı, çelik firma Sakarya, Arel Çelik vizyon, Arel Çelik misyon";
                break;
            case 'urunlerimiz.php':
                $page_title = "Ürünlerimiz | Arel Çelik Sakarya - Çelik Profil, Kutu Profil, Sac Çeşitleri";
                $page_description = "Arel Çelik Sakarya ürün kataloğu. Kutu profil, dikdörtgen profil, yuvarlak boru, NPI-NPU profil, HEA-HEB-IPE profil, köşebent, lama, galvanizli sac, trapez sac, sandviç panel ve daha fazlası.";
                $page_keywords = "Arel Çelik ürünler, Sakarya çelik ürünleri, kutu profil, dikdörtgen profil, çelik boru, NPI profil, NPU profil, HEA profil, HEB profil, IPE profil, köşebent, lama, galvanizli sac, trapez sac, sandviç panel, Sakarya Arel Çelik";
                break;
            case 'hizmetlerimiz.php':
                $page_title = "Hizmetlerimiz | Arel Çelik Sakarya - Lazer Kesim, Abkant Büküm, Kaynaklı İmalat";
                $page_description = "Arel Çelik Sakarya hizmetleri. Lazer kesim, abkant büküm, kaynaklı imalat, giyotin kesim, çizim ve imalat hizmetleri. Sakarya'da profesyonel çelik işleme hizmetleri için Arel Çelik.";
                $page_keywords = "Arel Çelik hizmetler, lazer kesim Sakarya, abkant büküm Sakarya, kaynaklı imalat, giyotin kesim, çelik işleme Sakarya, sac işleme, Sakarya Arel Çelik hizmet";
                break;
            case 'projelerimiz.php':
                $page_title = "Projelerimiz | Arel Çelik Sakarya - Tamamlanan Çelik Yapı Projeleri";
                $page_description = "Arel Çelik Sakarya tamamlanan projeler. İstanbul, Zaho, Karabük, Sinop, Balıkesir ve daha birçok şehirde gerçekleştirdiğimiz çelik yapı projeleri. Zırhlı araç, bariyer ve AFAD projeleri.";
                $page_keywords = "Arel Çelik projeler, Sakarya çelik projeler, çelik yapı projeleri, zırhlı araç imalatı, bariyer projeleri, AFAD projeleri, Arel Çelik referanslar";
                break;
            case 'iletisim.php':
                $page_title = "İletişim | Arel Çelik Sakarya - Adres, Telefon, E-posta";
                $page_description = "Arel Çelik Sakarya iletişim bilgileri. Merkez: Tuzla Mah. Zirai Aletler Sanayi Sitesi, Adapazarı. Fabrika: Pirahmetler Mah. Erenler. Tel: 0264 777 15 66. Çelik ihtiyaçlarınız için bize ulaşın.";
                $page_keywords = "Arel Çelik iletişim, Arel Çelik telefon, Arel Çelik adres, Sakarya Arel Çelik, Adapazarı çelik, Arel Çelik Erenler, çelik firma Sakarya iletişim";
                break;
            case 'agirlik-hesaplama.php':
                $page_title = "Ağırlık Hesaplama | Arel Çelik Sakarya - Çelik Profil Ağırlık Hesaplayıcı";
                $page_description = "Arel Çelik online ağırlık hesaplama robotu. Kutu profil, yuvarlak boru, NPI, NPU, HEA, HEB, IPE, köşebent, lama, sac ağırlığı hesaplama. Sakarya Arel Çelik ağırlık hesaplayıcı.";
                $page_keywords = "çelik ağırlık hesaplama, profil ağırlık hesaplama, kutu profil ağırlık, boru ağırlık hesaplama, sac ağırlık hesaplama, Arel Çelik hesaplama, Sakarya çelik ağırlık";
                break;
            default:
                $page_title = "Arel Çelik | Sakarya Çelik Yapı, Çelik Hasır, Trapez Sac, Lazer Kesim Hizmetleri";
                $page_description = "Arel Çelik Sakarya - 20 yıllık deneyim ile çelik yapı, çelik hasır, trapez sac, sandviç panel, lazer kesim, abkant büküm ve kaynaklı imalat hizmetleri.";
                $page_keywords = "Arel Çelik, Sakarya Arel Çelik, çelik yapı, çelik hasır, trapez sac, lazer kesim";
        }
    } else {
        // Sayfa kendi değişkenlerini tanımlamış
        $page_title = $pageTitle;
        $page_description = $pageDesc ?? "Arel Çelik Sakarya - Çelik yapı, çelik hasır, trapez sac ve lazer kesim hizmetleri.";
        $page_keywords = $pageKeywords ?? "Arel Çelik, Sakarya, çelik yapı";
    }
    ?>
    
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="<?php echo $page_keywords; ?>">
    
    <!-- SEO Meta Etiketleri -->
    <meta name="author" content="Arel Çelik Sakarya">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="googlebot" content="index, follow">
    <meta name="bingbot" content="index, follow">
    <meta name="language" content="Turkish">
    <meta name="geo.region" content="TR-54">
    <meta name="geo.placename" content="Sakarya, Türkiye">
    <meta name="geo.position" content="40.7569;30.3781">
    <meta name="ICBM" content="40.7569, 30.3781">
    <link rel="canonical" href="https://arelcelik.com.tr/<?php echo $current_page; ?>">
    
    <!-- Favicon - Google Search ve tüm cihazlar için -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon.png">
    <link rel="shortcut icon" href="assets/images/favicon/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicon/favicon.png">
    <link rel="icon" type="image/png" sizes="512x512" href="assets/images/favicon/favicon.png">
    <meta name="msapplication-TileImage" content="assets/images/favicon/favicon.png">
    <meta name="msapplication-TileColor" content="#e63946">
    <meta name="theme-color" content="#e63946">
    <link rel="manifest" href="site.webmanifest">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Arel Çelik Sakarya">
    <meta property="og:locale" content="tr_TR">
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $page_description; ?>">
    <meta property="og:image" content="https://arelcelik.com.tr/assets/images/logo.png">
    <meta property="og:url" content="https://arelcelik.com.tr/<?php echo $current_page; ?>">
    
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $page_title; ?>">
    <meta name="twitter:description" content="<?php echo $page_description; ?>">
    <meta name="twitter:image" content="https://arelcelik.com.tr/assets/images/logo.png">
    
    <!-- JSON-LD Yapısal Veri - Google için -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Arel Çelik",
        "alternateName": ["Sakarya Arel Çelik", "Ada Arel Yapı", "Arel Çelik Yapı"],
        "description": "Sakarya'da çelik yapı, çelik hasır, trapez sac, sandviç panel, lazer kesim, abkant büküm ve kaynaklı imalat hizmetleri sunan Arel Çelik.",
        "url": "https://arelcelik.com.tr",
        "logo": "https://arelcelik.com.tr/assets/images/logo.png",
        "image": "https://arelcelik.com.tr/assets/images/logo.png",
        "telephone": "+90-264-777-15-66",
        "faxNumber": "+90-264-777-15-67",
        "email": "info@arelcelik.com.tr",
        "foundingDate": "2015",
        "priceRange": "$$",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Tuzla Mah. Ziraai Aletler Sanayi Sitesi 1259 Nolu Sok. No:1",
            "addressLocality": "Adapazarı",
            "addressRegion": "Sakarya",
            "postalCode": "54000",
            "addressCountry": "TR"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 40.7569,
            "longitude": 30.3781
        },
        "openingHoursSpecification": [
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                "opens": "08:00",
                "closes": "18:00"
            },
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": "Saturday",
                "opens": "08:00",
                "closes": "14:00"
            }
        ],
        "sameAs": [
            "https://www.facebook.com/arelcelik",
            "https://www.instagram.com/arelcelik"
        ],
        "areaServed": {
            "@type": "GeoCircle",
            "geoMidpoint": {
                "@type": "GeoCoordinates",
                "latitude": 40.7569,
                "longitude": 30.3781
            },
            "geoRadius": "500000"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Arel Çelik Ürün ve Hizmetleri",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Lazer Kesim",
                        "description": "Profesyonel lazer kesim hizmetleri"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Abkant Büküm",
                        "description": "CNC kontrollü abkant büküm hizmetleri"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Kaynaklı İmalat",
                        "description": "MIG/MAG/TIG kaynak hizmetleri"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Product",
                        "name": "Çelik Profil",
                        "description": "Kutu profil, dikdörtgen profil, çelik borular"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Product",
                        "name": "Trapez Sac",
                        "description": "Çatı ve cephe kaplama sacları"
                    }
                }
            ]
        }
    }
    </script>
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-content">
                <div class="top-bar-left">
                    <span><i class="fas fa-phone"></i> 0264 777 15 66</span>
                    <span><i class="fas fa-envelope"></i> info@arelcelik.com.tr</span>
                </div>
                <div class="top-bar-right">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="main-header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <a href="index.php">
                        <img src="assets/images/logo.png" alt="Arel Çelik Logo" class="logo-img">
                    </a>
                </div>
                <nav class="main-nav">
                    <ul class="nav-menu">
                        <li><a href="index.php" class="nav-link">Anasayfa</a></li>
                        <li class="has-dropdown">
                            <a href="kurumsal.php" class="nav-link">Kurumsal <i class="fas fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="kurumsal.php">Hakkımızda</a></li>
                                <li><a href="sertifikalarimiz.php">Sertifikalarımız</a></li>
                                <li><a href="makine-parkuru.php">Makine Parkuru</a></li>
                                <li><a href="insan-kaynaklari.php">İnsan Kaynakları</a></li>
                                <li><a href="gizlilik-politikasi.php">Gizlilik Politikası</a></li>
                                <li><a href="kvkk-politikasi.php">KVKK Politikası</a></li>
                            </ul>
                        </li>
                        <li><a href="urunlerimiz.php" class="nav-link">Ürünlerimiz</a></li>
                        <li><a href="projelerimiz.php" class="nav-link">Projelerimiz</a></li>
                        <li><a href="hizmetlerimiz.php" class="nav-link">Hizmetlerimiz</a></li>
                        <li><a href="agirlik-hesaplama.php" class="nav-link">Ağırlık Hesaplama</a></li>
                        <li><a href="iletisim.php" class="nav-link">İletişim</a></li>
                    </ul>
                </nav>
                <button class="mobile-menu-btn" onclick="toggleMobileMenu()">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu-header">
            <a href="index.php">
                <img src="assets/images/logo.png" alt="Arel Çelik Logo" class="mobile-logo-img">
            </a>
            <button class="mobile-menu-close" onclick="toggleMobileMenu()">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <ul>
            <li><a href="index.php">Anasayfa</a></li>
            <li class="mobile-has-dropdown">
                <a href="#" onclick="toggleMobileDropdown(event)">Kurumsal <i class="fas fa-chevron-down"></i></a>
                <ul class="mobile-dropdown">
                    <li><a href="kurumsal.php">Hakkımızda</a></li>
                    <li><a href="sertifikalarimiz.php">Sertifikalarımız</a></li>
                    <li><a href="makine-parkuru.php">Makine Parkuru</a></li>
                    <li><a href="insan-kaynaklari.php">İnsan Kaynakları</a></li>
                    <li><a href="gizlilik-politikasi.php">Gizlilik Politikası</a></li>
                    <li><a href="kvkk-politikasi.php">KVKK Politikası</a></li>
                </ul>
            </li>
            <li><a href="urunlerimiz.php">Ürünlerimiz</a></li>
            <li><a href="projelerimiz.php">Projelerimiz</a></li>
            <li><a href="hizmetlerimiz.php">Hizmetlerimiz</a></li>
            <li><a href="agirlik-hesaplama.php">Ağırlık Hesaplama</a></li>
            <li><a href="iletisim.php">İletişim</a></li>
        </ul>
    </div>

    <main>
