<?php
$pageTitle = "Makine Parkuru - Arel Çelik | Lazer Kesim, Abkant, Plazma Kesim Makineleri";
$pageDesc = "Arel Çelik makine parkuru: Lazer kesim, plazma kesim, abkant büküm, çelik hasır, trapez hattı. Sakarya'da modern çelik işleme tesisi.";
$pageKeywords = "arel çelik makine parkuru, lazer kesim makinesi sakarya, abkant büküm, plazma kesim, çelik hasır makinesi";
$current_page = "makine-parkuru.php";
require_once 'includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1>MAKİNE PARKURU</h1>
        <div class="breadcrumb">
            <a href="index.php" title="Arel Çelik Anasayfa">Anasayfa</a> / <span>Makine Parkuru</span>
        </div>
    </div>
</section>

<!-- Machine Categories -->
<section class="machines-section">
    <div class="container">
        <div class="section-intro">
            <h2>Üretim Tesislerimiz</h2>
            <p>Modern makine parkurumuz ile çelik sektöründe en kaliteli ürünleri üretiyoruz.</p>
        </div>
        
        <!-- Category Tabs -->
        <div class="machine-tabs">
            <button class="machine-tab active" onclick="showMachineCategory('all')">Tümü</button>
            <button class="machine-tab" onclick="showMachineCategory('delik')">Delik Delme</button>
            <button class="machine-tab" onclick="showMachineCategory('kesim')">Kesim & Büküm</button>
            <button class="machine-tab" onclick="showMachineCategory('plazma')">Plazma Kesim</button>
            <button class="machine-tab" onclick="showMachineCategory('lazer')">Lazer Kesim</button>
            <button class="machine-tab" onclick="showMachineCategory('hasir')">Çelik Hasır</button>
            <button class="machine-tab" onclick="showMachineCategory('trapez')">Trapez Hattı</button>
        </div>
        
        <!-- Machines Grid -->
        <div class="machines-grid">
            
            <!-- Delik Delme -->
            <div class="machine-card machine-item" data-category="delik">
                <div class="machine-image">
                    <img src="assets/images/makineler/delik-delme.jpg" alt="Talaşlı Delik Delme Freze Makinası - Arel Çelik Sakarya">
                </div>
                <div class="machine-content">
                    <span class="machine-badge red">DELİK DELME</span>
                    <h3>Talaşlı Delik Delme Freze Makinası</h3>
                    <p>3ADM 22KW 140NM 12MM</p>
                </div>
            </div>
            
            <!-- Profil Delme -->
            <div class="machine-card machine-item" data-category="delik">
                <div class="machine-image">
                    <img src="assets/images/makineler/profil-delme.jpg" alt="CNC Profil Delme Hattı - Arel Çelik Sakarya">
                </div>
                <div class="machine-content">
                    <span class="machine-badge orange">PROFİL DELME HATTI</span>
                    <h3>CNC Profil Delme Hattı</h3>
                    <p>Otomatik profil işleme sistemi</p>
                </div>
            </div>
            
            <!-- Kesim Büküm -->
            <div class="machine-card machine-item" data-category="kesim">
                <div class="machine-image">
                    <img src="assets/images/makineler/kesim-bukum.jpg" alt="Abkant Büküm Makinesi - Arel Çelik Sakarya">
                </div>
                <div class="machine-content">
                    <span class="machine-badge green">KESİM BÜKÜM</span>
                    <h3>Abkant Büküm Makinesi</h3>
                    <p>CNC kontrollü hassas büküm</p>
                </div>
            </div>
            
            <!-- Plazma Kesim -->
            <div class="machine-card machine-item" data-category="plazma">
                <div class="machine-image">
                    <img src="assets/images/makineler/plazma-kesim.jpg" alt="CNC Plazma Kesim Makinesi - Arel Çelik Sakarya">
                </div>
                <div class="machine-content">
                    <span class="machine-badge purple">PLAZMA KESİM</span>
                    <h3>CNC Plazma Kesim Makinesi</h3>
                    <p>Yüksek hassasiyetli plazma kesim</p>
                </div>
            </div>
            
            <!-- Lazer Kesim -->
            <div class="machine-card machine-item" data-category="lazer">
                <div class="machine-image">
                    <img src="assets/images/makineler/lazer-kesim.jpg" alt="Fiber Lazer Kesim Makinesi - Arel Çelik Sakarya">
                </div>
                <div class="machine-content">
                    <span class="machine-badge red">LAZER KESİM</span>
                    <h3>Fiber Lazer Kesim Makinesi</h3>
                    <p>Yüksek güçlü fiber lazer teknolojisi</p>
                </div>
            </div>
            
            <!-- Çelik Hasır -->
            <div class="machine-card machine-item" data-category="hasir">
                <div class="machine-image">
                    <img src="assets/images/makineler/celik-hasir.jpg" alt="Çelik Hasır Üretim Hattı - Arel Çelik Sakarya">
                </div>
                <div class="machine-content">
                    <span class="machine-badge blue">ÇELİK HASIR</span>
                    <h3>Çelik Hasır Üretim Hattı</h3>
                    <p>Otomatik çelik hasır kaynak sistemi</p>
                </div>
            </div>
            
            <!-- Trapez Hattı -->
            <div class="machine-card machine-item" data-category="trapez">
                <div class="machine-image">
                    <img src="assets/images/makineler/trapez-hatti.jpg" alt="Trapez Sac Üretim Hattı - Arel Çelik Sakarya">
                </div>
                <div class="machine-content">
                    <span class="machine-badge teal">TRAPEZ HATTI</span>
                    <h3>Trapez Sac Üretim Hattı</h3>
                    <p>Çatı ve cephe kaplama sacı üretimi</p>
                </div>
            </div>
            
            <!-- Çelik Sac Rolform -->
            <div class="machine-card machine-item" data-category="trapez">
                <div class="machine-image">
                    <img src="assets/images/makineler/rolform-hatti.jpg" alt="Çelik Sac Rolform Hattı - Arel Çelik Sakarya">
                </div>
                <div class="machine-content">
                    <span class="machine-badge dark">ROLFORM HATTI</span>
                    <h3>Çelik Sac Rolform Hattı</h3>
                    <p>Profil şekillendirme sistemi</p>
                </div>
            </div>
            
            <!-- Yapma Kriş Robotu -->
            <div class="machine-card machine-item" data-category="kesim">
                <div class="machine-image">
                    <img src="assets/images/makineler/yapma-kris.jpg" alt="Yapma Kriş Robotu - Arel Çelik Sakarya">
                </div>
                <div class="machine-content">
                    <span class="machine-badge carrot">YAPMA KRİŞ</span>
                    <h3>Yapma Kriş Robotu</h3>
                    <p>Otomatik yapma kriş üretim sistemi</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Modern Üretim Tesislerimizi Ziyaret Edin</h2>
            <p>Sakarya'daki üretim tesislerimizi yerinde görmek için randevu alın.</p>
            <div class="cta-buttons">
                <a href="iletisim.php" class="btn-primary">İletişime Geç</a>
                <a href="tel:02647771566" class="btn-outline"><i class="fas fa-phone"></i> 0264 777 15 66</a>
            </div>
        </div>
    </div>
</section>

<script>
function showMachineCategory(category) {
    const items = document.querySelectorAll('.machine-item');
    const tabs = document.querySelectorAll('.machine-tab');
    
    tabs.forEach(tab => tab.classList.remove('active'));
    event.target.classList.add('active');
    
    items.forEach(item => {
        if (category === 'all' || item.dataset.category === category) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}
</script>

<?php require_once 'includes/footer.php'; ?>
