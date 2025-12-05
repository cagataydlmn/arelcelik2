<?php
require_once 'includes/header.php';

// Form gönderildi mi kontrol et
$message = '';
$messageType = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $subject = htmlspecialchars($_POST['subject'] ?? '');
    $messageText = htmlspecialchars($_POST['message'] ?? '');
    
    if ($name && $email && $messageText) {
        // Burada mail gönderme işlemi yapılabilir
        // mail($to, $subject, $message, $headers);
        
        $message = 'Mesajınız başarıyla gönderildi. En kısa sürede size dönüş yapacağız.';
        $messageType = 'success';
    } else {
        $message = 'Lütfen tüm zorunlu alanları doldurun.';
        $messageType = 'error';
    }
}
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1>AREL ÇELİK İLETİŞİM</h1>
        <div class="breadcrumb">
            <a href="index.php" title="Arel Çelik Anasayfa">Anasayfa</a> / <span>İletişim</span>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Info -->
            <div class="contact-info-box">
                <h2>Sakarya Arel Çelik'e Ulaşın</h2>
                <p><strong>Arel Çelik</strong> çelik ihtiyaçlarınız için bizimle iletişime geçin. <strong>Sakarya Arel Çelik</strong> ekibi size en kısa sürede dönüş yapacaktır.</p>
                
                <div class="contact-cards">
                    <!-- Merkez Adres -->
                    <div class="contact-card">
                        <div class="contact-card-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="contact-card-content">
                            <h4>Merkez Adres - Arel Çelik</h4>
                            <p>Tuzla Mah. Ziraai Aletler Sanayi Sitesi 1259 Nolu Sok. No:1 Adapazarı/SAKARYA</p>
                            <div class="contact-details">
                                <span><i class="fas fa-phone"></i> 0264 777 15 66</span>
                                <span><i class="fas fa-fax"></i> Faks: 0264 777 15 67</span>
                            </div>
                            
                            <a href="https://www.google.com/maps?um=1&ie=UTF-8&fb=1&gl=tr&sa=X&geocode=KcOw0MlF9p1AMTzyH25htp44&daddr=Tuzla+Mahallesi+Zirai+Aletler+Sanayi+Sitesi+1259+Nolu+Sokak+No:1,+54100+Adapazar%C4%B1/Sakarya" target="_blank" class="direction-link"><i class="fas fa-directions"></i> Yol Tarifi Al</a>
                        </div>
                    </div>
                    
                    <!-- Fabrika Adres -->
                    <div class="contact-card">
                        <div class="contact-card-icon">
                            <i class="fas fa-industry"></i>
                        </div>
                        <div class="contact-card-content">
                            <h4>Fabrika Adres - Ada Arel Yapı</h4>
                            <p>Pirahmetler Mah. D-100 Yan Yol Cad. No:57 Erenler/SAKARYA</p>
                            <div class="contact-details">
                                <span><i class="fas fa-phone"></i> 0264 353 43 10</span>
                                <span><i class="fas fa-fax"></i> Faks: 0264 353 43 11</span>
                            </div>
                            <a href="https://www.google.com/maps/dir//Pirahmetler+Mh.+D-100+Yan+Yol+Cd.+No:57+Erenler+%2F+SAKARYA/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x14ccb495f2f7272d:0x19254bff668c72d8" target="_blank" class="direction-link"><i class="fas fa-directions"></i> Yol Tarifi Al</a>
                        </div>
                    </div>
                    
                    <!-- İletişim Bilgileri -->
                    <div class="contact-card">
                        <div class="contact-card-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-card-content">
                            <h4>E-posta & Web</h4>
                            <div class="contact-details">
                                <span><i class="fas fa-envelope"></i> info@arelcelik.com.tr</span>
                                <span><i class="fas fa-globe"></i> www.arelcelik.com.tr</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Social Links -->
               
            </div>
            
            <!-- Contact Form -->
            <div class="contact-form-box">
                <h2>Mesaj Gönderin</h2>
                
                <?php if ($message): ?>
                <div class="alert alert-<?php echo $messageType; ?>">
                    <?php echo $message; ?>
                </div>
                <?php endif; ?>
                
                <form method="POST" action="" class="contact-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Ad Soyad *</label>
                            <input type="text" id="name" name="name" required placeholder="Adınız Soyadınız">
                        </div>
                        <div class="form-group">
                            <label for="email">E-posta *</label>
                            <input type="email" id="email" name="email" required placeholder="ornek@email.com">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Telefon</label>
                            <input type="tel" id="phone" name="phone" placeholder="0 (5XX) XXX XX XX">
                        </div>
                        <div class="form-group">
                            <label for="subject">Konu</label>
                            <select id="subject" name="subject">
                                <option value="">Seçiniz</option>
                                <option value="genel">Genel Bilgi</option>
                                <option value="teklif">Fiyat Teklifi</option>
                                <option value="siparis">Sipariş</option>
                                <option value="teknik">Teknik Destek</option>
                                <option value="diger">Diğer</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Mesajınız *</label>
                        <textarea id="message" name="message" rows="6" required placeholder="Mesajınızı buraya yazın..."></textarea>
                    </div>
                    <button type="submit" class="btn-primary">
                        <i class="fas fa-paper-plane"></i> Gönder
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section">
    <div class="container">
        <h2 class="section-title">KONUMLARIMIZ</h2>
        <div class="maps-grid">
            <!-- Merkez Harita -->
            <div class="map-box">
                <h3><i class="fas fa-building"></i> Merkez - Arel Çelik</h3>
                <div class="map-wrapper">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34164.003098439!2d30.39919516423461!3d40.81259054702515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409df645c9d0b0c3%3A0x389eb6616e1ff23c!2sArel%20%C3%87elik!5e0!3m2!1str!2str!4v1764890832728!5m2!1str!2str" 
                        width="100%" 
                        height="300" 
                        style="border:0; border-radius: 10px;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <p class="map-address"><i class="fas fa-map-marker-alt"></i> Tuzla Mah. Ziraai Aletler Sanayi Sitesi 1259 Nolu Sok. No:1 Adapazarı/SAKARYA</p>
            </div>
            
            <!-- Fabrika Harita -->
            <div class="map-box">
                <h3><i class="fas fa-industry"></i> Fabrika - Ada Arel Yapı</h3>
                <div class="map-wrapper">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.5!2d30.3650!3d40.7569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ccb495f2f7272d%3A0x19254bff668c72d8!2sPirahmetler%20Mah.%2C%20D-100%20Yan%20Yol%20Cd.%20No%3A57%2C%20Erenler%2FSakarya!5e0!3m2!1str!2str!4v1701792000000" 
                        width="100%" 
                        height="300" 
                        style="border:0; border-radius: 10px;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <p class="map-address"><i class="fas fa-map-marker-alt"></i> Pirahmetler Mah. D-100 Yan Yol Cad. No:57 Erenler/SAKARYA</p>
            </div>
        </div>
    </div>
</section>

<!-- Working Hours -->
<section class="working-hours-section">
    <div class="container">
        <div class="hours-grid">
            <div class="hours-card">
                <i class="fas fa-clock"></i>
                <h3>Çalışma Saatleri</h3>
                <ul>
                    <li><span>Pazartesi - Cuma</span> <strong>08:00 - 18:00</strong></li>
                    <li><span>Cumartesi</span> <strong>08:00 - 14:00</strong></li>
                    <li><span>Pazar</span> <strong>Kapalı</strong></li>
                </ul>
            </div>
            <div class="hours-card highlight">
                <i class="fas fa-headset"></i>
                <h3>7/24 Destek</h3>
                <p>Acil durumlar için WhatsApp hattımızdan bize ulaşabilirsiniz.</p>
                <a href="https://wa.me/902647771566" class="btn-whatsapp">
                    <i class="fab fa-whatsapp"></i> WhatsApp ile Yazın
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* Contact Page Specific Styles */
.contact-section {
    padding: 80px 0;
}

.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
}

/* Contact Info Box */
.contact-info-box h2,
.contact-form-box h2 {
    font-size: 28px;
    color: var(--secondary-color);
    margin-bottom: 15px;
}

.contact-info-box > p {
    color: var(--text-light);
    margin-bottom: 30px;
    line-height: 1.7;
}

.contact-cards {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.contact-card {
    display: flex;
    gap: 20px;
    padding: 25px;
    background: var(--light-bg);
    border-radius: 15px;
    transition: var(--transition);
}

.contact-card:hover {
    box-shadow: var(--shadow);
}

.contact-card-icon {
    width: 60px;
    height: 60px;
    background: var(--primary-color);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.contact-card-icon i {
    font-size: 24px;
    color: var(--white);
}

.contact-card-content h4 {
    font-size: 16px;
    color: var(--secondary-color);
    margin-bottom: 8px;
}

.contact-card-content p {
    font-size: 14px;
    color: var(--text-light);
    margin-bottom: 10px;
    line-height: 1.6;
}

.contact-details {
    display: flex;
    flex-direction: column;
    gap: 5px;
}

.contact-details span {
    font-size: 14px;
    color: var(--text-dark);
    display: flex;
    align-items: center;
    gap: 8px;
}

.contact-details i {
    color: var(--primary-color);
    width: 16px;
}

.direction-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-top: 12px;
    padding: 8px 15px;
    background: var(--primary-color);
    color: var(--white);
    font-size: 13px;
    font-weight: 500;
    border-radius: 20px;
    transition: var(--transition);
}

.direction-link:hover {
    background: var(--secondary-color);
    transform: translateX(5px);
}

.contact-social {
    margin-top: 30px;
}

.contact-social h4 {
    font-size: 16px;
    color: var(--secondary-color);
    margin-bottom: 15px;
}

.social-links {
    display: flex;
    gap: 15px;
}

.social-link {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    font-size: 20px;
    transition: var(--transition);
}

.social-link.facebook { background: #1877f2; }
.social-link.instagram { background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888); }
.social-link.whatsapp { background: #25d366; }

.social-link:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
}

/* Contact Form Box */
.contact-form-box {
    background: var(--white);
    padding: 40px;
    border-radius: 20px;
    box-shadow: var(--shadow);
}

.alert {
    padding: 15px 20px;
    border-radius: 10px;
    margin-bottom: 25px;
    font-size: 14px;
}

.alert-success {
    background: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.alert-error {
    background: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

.contact-form .form-row {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin-bottom: 20px;
}

.contact-form .form-group {
    margin-bottom: 0;
}

.contact-form .form-group:last-of-type {
    margin-bottom: 20px;
}

.contact-form label {
    display: block;
    font-size: 14px;
    font-weight: 600;
    color: var(--secondary-color);
    margin-bottom: 8px;
}

.contact-form input,
.contact-form select,
.contact-form textarea {
    width: 100%;
    padding: 15px;
    border: 2px solid #e0e0e0;
    border-radius: 10px;
    font-size: 15px;
    font-family: inherit;
    transition: var(--transition);
}

.contact-form input:focus,
.contact-form select:focus,
.contact-form textarea:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(230, 57, 70, 0.1);
}

.contact-form textarea {
    resize: vertical;
    min-height: 150px;
}

.contact-form .btn-primary {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}

/* Map Section */
.map-section {
    padding: 80px 0;
    background: var(--light-bg);
}

.maps-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}

.map-box {
    background: var(--white);
    border-radius: 15px;
    padding: 20px;
    box-shadow: var(--shadow);
}

.map-box h3 {
    font-size: 18px;
    color: var(--secondary-color);
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.map-box h3 i {
    color: var(--primary-color);
}

.map-wrapper {
    border-radius: 10px;
    overflow: hidden;
}

.map-wrapper iframe {
    display: block;
}

.map-address {
    margin-top: 15px;
    font-size: 14px;
    color: var(--text-light);
    display: flex;
    align-items: flex-start;
    gap: 8px;
}

.map-address i {
    color: var(--primary-color);
    margin-top: 3px;
}

/* Working Hours Section */
.working-hours-section {
    padding: 80px 0;
}

.hours-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}

.hours-card {
    background: var(--light-bg);
    padding: 40px;
    border-radius: 20px;
    text-align: center;
}

.hours-card.highlight {
    background: var(--secondary-color);
    color: var(--white);
}

.hours-card i {
    font-size: 48px;
    color: var(--primary-color);
    margin-bottom: 20px;
}

.hours-card.highlight i {
    color: var(--accent-color);
}

.hours-card h3 {
    font-size: 24px;
    margin-bottom: 20px;
}

.hours-card ul {
    list-style: none;
}

.hours-card li {
    display: flex;
    justify-content: space-between;
    padding: 12px 0;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.hours-card.highlight li {
    border-bottom-color: rgba(255, 255, 255, 0.1);
}

.hours-card li:last-child {
    border-bottom: none;
}

.hours-card li span {
    color: var(--text-light);
}

.hours-card.highlight li span {
    color: rgba(255, 255, 255, 0.7);
}

.hours-card p {
    color: rgba(255, 255, 255, 0.8);
    margin-bottom: 25px;
    line-height: 1.7;
}

.btn-whatsapp {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 15px 30px;
    background: #25d366;
    color: var(--white);
    border-radius: 50px;
    font-weight: 600;
    transition: var(--transition);
}

.btn-whatsapp:hover {
    background: #128c7e;
    transform: translateY(-2px);
}

/* Responsive */
@media (max-width: 1024px) {
    .contact-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .contact-form .form-row {
        grid-template-columns: 1fr;
    }
    
    .hours-grid {
        grid-template-columns: 1fr;
    }
    
    .maps-grid {
        grid-template-columns: 1fr;
    }
    
    .contact-card {
        flex-direction: column;
        text-align: center;
    }
    
    .contact-card-icon {
        margin: 0 auto;
    }
    
    .direction-link {
        margin: 12px auto 0;
    }
}
</style>

<?php
require_once 'includes/footer.php';
?>
