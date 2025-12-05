<?php
$pageTitle = "İnsan Kaynakları - Arel Çelik | Kariyer Fırsatları Sakarya";
$pageDesc = "Arel Çelik'te kariyer fırsatları. Sakarya'da çelik sektöründe iş imkanları. Dinamik ve yenilikçi ekibimize katılın.";
$pageKeywords = "arel çelik kariyer, sakarya iş ilanları, çelik sektörü iş fırsatları, arel çelik iş başvurusu";
$current_page = "insan-kaynaklari.php";
require_once 'includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1>İNSAN KAYNAKLARI</h1>
        <div class="breadcrumb">
            <a href="index.php" title="Arel Çelik Anasayfa">Anasayfa</a> / <span>İnsan Kaynakları</span>
        </div>
    </div>
</section>

<!-- Career Section -->
<section class="career-section">
    <div class="container">
        <div class="career-grid">
            <!-- Content -->
            <div class="career-content">
                <h2>Arel Çelik'te Kariyer</h2>
                <p>Arel Çelik olarak, en değerli kaynağımızın çalışanlarımız olduğuna inanıyoruz. Başarılarımızın temelinde, yetenekli, motive ve profesyonel çalışanlarımız yer almaktadır.</p>
                <p>Siz de dinamik ve yenilikçi bir çalışma ortamında kariyer yapmak istiyorsanız, Arel Çelik ailesine katılın!</p>
                
                <div class="career-features">
                    <div class="career-feature">
                        <div class="career-feature-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <span>Eğitim İmkanları</span>
                    </div>
                    <div class="career-feature">
                        <div class="career-feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <span>Kariyer Gelişimi</span>
                    </div>
                    <div class="career-feature">
                        <div class="career-feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <span>Takım Ruhu</span>
                    </div>
                    <div class="career-feature">
                        <div class="career-feature-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <span>Sosyal Haklar</span>
                    </div>
                </div>
            </div>
            
            <!-- Image -->
            <div class="career-image">
                <img src="assets/images/insan-kaynaklari.jpg" alt="Arel Çelik İnsan Kaynakları - Kariyer Fırsatları Sakarya">
            </div>
        </div>
    </div>
</section>

<!-- Application Form -->
<section class="application-section">
    <div class="container">
        <div class="application-form-wrapper">
            <div class="section-intro">
                <h2>İş Başvurusu</h2>
                <p>Kariyer fırsatları için aşağıdaki formu doldurun</p>
            </div>
            
            <form class="application-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Adınız Soyadınız *</label>
                        <input type="text" id="name" name="name" required placeholder="Adınız Soyadınız">
                    </div>
                    <div class="form-group">
                        <label for="email">E-posta Adresiniz *</label>
                        <input type="email" id="email" name="email" required placeholder="ornek@email.com">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="phone">Telefon Numaranız *</label>
                    <input type="tel" id="phone" name="phone" required placeholder="0555 555 55 55">
                </div>
                
                <div class="form-group">
                    <label for="position">Başvurmak İstediğiniz Pozisyon</label>
                    <select id="position" name="position">
                        <option value="">Pozisyon Seçin</option>
                        <option value="uretim">Üretim Personeli</option>
                        <option value="kaynak">Kaynakçı</option>
                        <option value="operator">Makine Operatörü</option>
                        <option value="muhendis">Mühendis</option>
                        <option value="satis">Satış Temsilcisi</option>
                        <option value="diger">Diğer</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="about">Kendinizi Bir Cümle ile Anlatın *</label>
                    <textarea id="about" name="about" required maxlength="180" placeholder="Kısaca kendinizden bahsedin..."></textarea>
                    <small>0 / 180</small>
                </div>
                
                <div class="form-group">
                    <label>CV Yükle</label>
                    <div class="file-upload" onclick="document.getElementById('cv').click()">
                        <i class="fas fa-cloud-upload-alt"></i>
                        <p>CV dosyanızı buraya sürükleyin veya seçin</p>
                        <small>Max. 20 MB (PDF, DOC, DOCX)</small>
                        <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx">
                    </div>
                </div>
                
                <button type="submit" class="submit-btn">
                    <i class="fas fa-paper-plane"></i> Başvuruyu Gönder
                </button>
            </form>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
