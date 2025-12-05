<?php
require_once 'includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1>AREL ÇELİK AĞIRLIK HESAPLAMA</h1>
        <div class="breadcrumb">
            <a href="index.php" title="Arel Çelik Anasayfa">Anasayfa</a> / <span>Ağırlık Hesaplama</span>
        </div>
    </div>
</section>

<!-- Calculator Section -->
<section class="calculator-section">
    <div class="container">
        <div class="calculator-intro">
            <p><strong>Sakarya Arel Çelik</strong> online ağırlık hesaplama robotu ile çelik ürünlerinizin ağırlığını kolayca hesaplayın. <strong>Arel Çelik</strong> kalitesiyle ürün türünü seçin, ölçüleri girin ve anında sonuç alın.</p>
        </div>

        <div class="calculator-wrapper">
            <div class="calculator-sidebar">
                <h3><i class="fas fa-list"></i> Ürün Seçin</h3>
                <ul class="product-list">
                    <li class="active" data-product="kutu-profil">
                        <i class="fas fa-cube"></i>
                        <span>Kutu Profil</span>
                    </li>
                    <li data-product="yuvarlak-boru">
                        <i class="fas fa-circle"></i>
                        <span>Yuvarlak Boru</span>
                    </li>
                    <li data-product="kosebent">
                        <i class="fas fa-angle-right"></i>
                        <span>Köşebent</span>
                    </li>
                    <li data-product="lama">
                        <i class="fas fa-minus"></i>
                        <span>Lama / Düz Demir</span>
                    </li>
                    <li data-product="sac">
                        <i class="fas fa-square"></i>
                        <span>Sac / Levha</span>
                    </li>
                    <li data-product="yuvarlak-demir">
                        <i class="fas fa-circle"></i>
                        <span>Yuvarlak Demir (Mil)</span>
                    </li>
                    <li data-product="kare-demir">
                        <i class="fas fa-square"></i>
                        <span>Kare Demir</span>
                    </li>
                    <li data-product="hea-heb">
                        <i class="fas fa-h-square"></i>
                        <span>HEA / HEB / IPE</span>
                    </li>
                    <li data-product="unp">
                        <i class="fas fa-bars"></i>
                        <span>UNP / NPU</span>
                    </li>
                </ul>
            </div>

            <div class="calculator-main">
                <!-- Kutu Profil Form -->
                <div class="calc-form active" id="kutu-profil">
                    <h3><i class="fas fa-cube"></i> Kutu Profil Ağırlık Hesaplama</h3>
                    <div class="form-visual">
                        <div class="visual-box kutu-visual">
                            <div class="dimension dim-a">A</div>
                            <div class="dimension dim-b">B</div>
                            <div class="dimension dim-t">t</div>
                        </div>
                    </div>
                    <div class="form-grid">
                        <div class="form-group">
                            <label>Genişlik (A) <small>mm</small></label>
                            <input type="number" id="kutu-a" placeholder="örn: 40" step="0.1">
                        </div>
                        <div class="form-group">
                            <label>Yükseklik (B) <small>mm</small></label>
                            <input type="number" id="kutu-b" placeholder="örn: 40" step="0.1">
                        </div>
                        <div class="form-group">
                            <label>Et Kalınlığı (t) <small>mm</small></label>
                            <input type="number" id="kutu-t" placeholder="örn: 2" step="0.1">
                        </div>
                        <div class="form-group">
                            <label>Uzunluk <small>mm</small></label>
                            <input type="number" id="kutu-l" placeholder="örn: 6000" step="1">
                        </div>
                        <div class="form-group">
                            <label>Adet</label>
                            <input type="number" id="kutu-adet" placeholder="1" value="1" min="1">
                        </div>
                    </div>
                    <button class="btn-calculate" onclick="hesaplaKutuProfil()">
                        <i class="fas fa-calculator"></i> Hesapla
                    </button>
                </div>

                <!-- Yuvarlak Boru Form -->
                <div class="calc-form" id="yuvarlak-boru">
                    <h3><i class="fas fa-circle"></i> Yuvarlak Boru Ağırlık Hesaplama</h3>
                    <div class="form-visual">
                        <div class="visual-box boru-visual">
                            <div class="dimension dim-d">D</div>
                            <div class="dimension dim-t">t</div>
                        </div>
                    </div>
                    <div class="form-grid">
                        <div class="form-group">
                            <label>Dış Çap (D) <small>mm</small></label>
                            <input type="number" id="boru-d" placeholder="örn: 48.3" step="0.1">
                        </div>
                        <div class="form-group">
                            <label>Et Kalınlığı (t) <small>mm</small></label>
                            <input type="number" id="boru-t" placeholder="örn: 3" step="0.1">
                        </div>
                        <div class="form-group">
                            <label>Uzunluk <small>mm</small></label>
                            <input type="number" id="boru-l" placeholder="örn: 6000" step="1">
                        </div>
                        <div class="form-group">
                            <label>Adet</label>
                            <input type="number" id="boru-adet" placeholder="1" value="1" min="1">
                        </div>
                    </div>
                    <button class="btn-calculate" onclick="hesaplaBoru()">
                        <i class="fas fa-calculator"></i> Hesapla
                    </button>
                </div>

                <!-- Köşebent Form -->
                <div class="calc-form" id="kosebent">
                    <h3><i class="fas fa-angle-right"></i> Köşebent Ağırlık Hesaplama</h3>
                    <div class="form-visual">
                        <div class="visual-box kosebent-visual">
                            <div class="dimension dim-a">A</div>
                            <div class="dimension dim-b">B</div>
                            <div class="dimension dim-t">t</div>
                        </div>
                    </div>
                    <div class="form-grid">
                        <div class="form-group">
                            <label>Kol 1 (A) <small>mm</small></label>
                            <input type="number" id="kosebent-a" placeholder="örn: 50" step="0.1">
                        </div>
                        <div class="form-group">
                            <label>Kol 2 (B) <small>mm</small></label>
                            <input type="number" id="kosebent-b" placeholder="örn: 50" step="0.1">
                        </div>
                        <div class="form-group">
                            <label>Et Kalınlığı (t) <small>mm</small></label>
                            <input type="number" id="kosebent-t" placeholder="örn: 5" step="0.1">
                        </div>
                        <div class="form-group">
                            <label>Uzunluk <small>mm</small></label>
                            <input type="number" id="kosebent-l" placeholder="örn: 6000" step="1">
                        </div>
                        <div class="form-group">
                            <label>Adet</label>
                            <input type="number" id="kosebent-adet" placeholder="1" value="1" min="1">
                        </div>
                    </div>
                    <button class="btn-calculate" onclick="hesaplaKosebent()">
                        <i class="fas fa-calculator"></i> Hesapla
                    </button>
                </div>

                <!-- Lama Form -->
                <div class="calc-form" id="lama">
                    <h3><i class="fas fa-minus"></i> Lama / Düz Demir Ağırlık Hesaplama</h3>
                    <div class="form-visual">
                        <div class="visual-box lama-visual">
                            <div class="dimension dim-a">A</div>
                            <div class="dimension dim-t">t</div>
                        </div>
                    </div>
                    <div class="form-grid">
                        <div class="form-group">
                            <label>Genişlik (A) <small>mm</small></label>
                            <input type="number" id="lama-a" placeholder="örn: 50" step="0.1">
                        </div>
                        <div class="form-group">
                            <label>Kalınlık (t) <small>mm</small></label>
                            <input type="number" id="lama-t" placeholder="örn: 5" step="0.1">
                        </div>
                        <div class="form-group">
                            <label>Uzunluk <small>mm</small></label>
                            <input type="number" id="lama-l" placeholder="örn: 6000" step="1">
                        </div>
                        <div class="form-group">
                            <label>Adet</label>
                            <input type="number" id="lama-adet" placeholder="1" value="1" min="1">
                        </div>
                    </div>
                    <button class="btn-calculate" onclick="hesaplaLama()">
                        <i class="fas fa-calculator"></i> Hesapla
                    </button>
                </div>

                <!-- Sac Form -->
                <div class="calc-form" id="sac">
                    <h3><i class="fas fa-square"></i> Sac / Levha Ağırlık Hesaplama</h3>
                    <div class="form-visual">
                        <div class="visual-box sac-visual">
                            <div class="dimension dim-a">En</div>
                            <div class="dimension dim-b">Boy</div>
                            <div class="dimension dim-t">t</div>
                        </div>
                    </div>
                    <div class="form-grid">
                        <div class="form-group">
                            <label>En <small>mm</small></label>
                            <input type="number" id="sac-en" placeholder="örn: 1500" step="1">
                        </div>
                        <div class="form-group">
                            <label>Boy <small>mm</small></label>
                            <input type="number" id="sac-boy" placeholder="örn: 3000" step="1">
                        </div>
                        <div class="form-group">
                            <label>Kalınlık (t) <small>mm</small></label>
                            <input type="number" id="sac-t" placeholder="örn: 3" step="0.1">
                        </div>
                        <div class="form-group">
                            <label>Adet</label>
                            <input type="number" id="sac-adet" placeholder="1" value="1" min="1">
                        </div>
                    </div>
                    <button class="btn-calculate" onclick="hesaplaSac()">
                        <i class="fas fa-calculator"></i> Hesapla
                    </button>
                </div>

                <!-- Yuvarlak Demir Form -->
                <div class="calc-form" id="yuvarlak-demir">
                    <h3><i class="fas fa-circle"></i> Yuvarlak Demir (Mil) Ağırlık Hesaplama</h3>
                    <div class="form-visual">
                        <div class="visual-box mil-visual">
                            <div class="dimension dim-d">D</div>
                        </div>
                    </div>
                    <div class="form-grid">
                        <div class="form-group">
                            <label>Çap (D) <small>mm</small></label>
                            <input type="number" id="mil-d" placeholder="örn: 20" step="0.1">
                        </div>
                        <div class="form-group">
                            <label>Uzunluk <small>mm</small></label>
                            <input type="number" id="mil-l" placeholder="örn: 6000" step="1">
                        </div>
                        <div class="form-group">
                            <label>Adet</label>
                            <input type="number" id="mil-adet" placeholder="1" value="1" min="1">
                        </div>
                    </div>
                    <button class="btn-calculate" onclick="hesaplaMil()">
                        <i class="fas fa-calculator"></i> Hesapla
                    </button>
                </div>

                <!-- Kare Demir Form -->
                <div class="calc-form" id="kare-demir">
                    <h3><i class="fas fa-square"></i> Kare Demir Ağırlık Hesaplama</h3>
                    <div class="form-visual">
                        <div class="visual-box kare-visual">
                            <div class="dimension dim-a">A</div>
                        </div>
                    </div>
                    <div class="form-grid">
                        <div class="form-group">
                            <label>Kenar (A) <small>mm</small></label>
                            <input type="number" id="kare-a" placeholder="örn: 20" step="0.1">
                        </div>
                        <div class="form-group">
                            <label>Uzunluk <small>mm</small></label>
                            <input type="number" id="kare-l" placeholder="örn: 6000" step="1">
                        </div>
                        <div class="form-group">
                            <label>Adet</label>
                            <input type="number" id="kare-adet" placeholder="1" value="1" min="1">
                        </div>
                    </div>
                    <button class="btn-calculate" onclick="hesaplaKare()">
                        <i class="fas fa-calculator"></i> Hesapla
                    </button>
                </div>

                <!-- HEA/HEB/IPE Form -->
                <div class="calc-form" id="hea-heb">
                    <h3><i class="fas fa-h-square"></i> HEA / HEB / IPE Ağırlık Hesaplama</h3>
                    <div class="form-grid">
                        <div class="form-group full-width">
                            <label>Profil Tipi</label>
                            <select id="h-profil-tipi">
                                <optgroup label="HEA Profiller">
                                    <option value="12.0">HEA 100 (16.7 kg/m)</option>
                                    <option value="19.9">HEA 120 (19.9 kg/m)</option>
                                    <option value="24.0">HEA 140 (24.7 kg/m)</option>
                                    <option value="30.4">HEA 160 (30.4 kg/m)</option>
                                    <option value="35.5">HEA 180 (35.5 kg/m)</option>
                                    <option value="42.3">HEA 200 (42.3 kg/m)</option>
                                    <option value="62.0">HEA 240 (60.3 kg/m)</option>
                                    <option value="88.3">HEA 300 (88.3 kg/m)</option>
                                </optgroup>
                                <optgroup label="HEB Profiller">
                                    <option value="20.4">HEB 100 (20.4 kg/m)</option>
                                    <option value="26.7">HEB 120 (26.7 kg/m)</option>
                                    <option value="33.7">HEB 140 (33.7 kg/m)</option>
                                    <option value="42.6">HEB 160 (42.6 kg/m)</option>
                                    <option value="51.2">HEB 180 (51.2 kg/m)</option>
                                    <option value="61.3">HEB 200 (61.3 kg/m)</option>
                                    <option value="83.2">HEB 240 (83.2 kg/m)</option>
                                    <option value="117.0">HEB 300 (117 kg/m)</option>
                                </optgroup>
                                <optgroup label="IPE Profiller">
                                    <option value="8.1">IPE 100 (8.1 kg/m)</option>
                                    <option value="10.4">IPE 120 (10.4 kg/m)</option>
                                    <option value="12.9">IPE 140 (12.9 kg/m)</option>
                                    <option value="15.8">IPE 160 (15.8 kg/m)</option>
                                    <option value="18.8">IPE 180 (18.8 kg/m)</option>
                                    <option value="22.4">IPE 200 (22.4 kg/m)</option>
                                    <option value="30.7">IPE 240 (30.7 kg/m)</option>
                                    <option value="42.2">IPE 300 (42.2 kg/m)</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Uzunluk <small>mm</small></label>
                            <input type="number" id="h-l" placeholder="örn: 6000" step="1">
                        </div>
                        <div class="form-group">
                            <label>Adet</label>
                            <input type="number" id="h-adet" placeholder="1" value="1" min="1">
                        </div>
                    </div>
                    <button class="btn-calculate" onclick="hesaplaHProfil()">
                        <i class="fas fa-calculator"></i> Hesapla
                    </button>
                </div>

                <!-- UNP/NPU Form -->
                <div class="calc-form" id="unp">
                    <h3><i class="fas fa-bars"></i> UNP / NPU Ağırlık Hesaplama</h3>
                    <div class="form-grid">
                        <div class="form-group full-width">
                            <label>Profil Tipi</label>
                            <select id="u-profil-tipi">
                                <optgroup label="UNP Profiller">
                                    <option value="8.5">UNP 80 (8.5 kg/m)</option>
                                    <option value="10.6">UNP 100 (10.6 kg/m)</option>
                                    <option value="13.4">UNP 120 (13.4 kg/m)</option>
                                    <option value="16.0">UNP 140 (16.0 kg/m)</option>
                                    <option value="18.8">UNP 160 (18.8 kg/m)</option>
                                    <option value="22.0">UNP 180 (22.0 kg/m)</option>
                                    <option value="25.3">UNP 200 (25.3 kg/m)</option>
                                    <option value="33.2">UNP 240 (33.2 kg/m)</option>
                                    <option value="46.2">UNP 300 (46.2 kg/m)</option>
                                </optgroup>
                                <optgroup label="NPU Profiller">
                                    <option value="8.6">NPU 80 (8.6 kg/m)</option>
                                    <option value="10.6">NPU 100 (10.6 kg/m)</option>
                                    <option value="13.4">NPU 120 (13.4 kg/m)</option>
                                    <option value="16.0">NPU 140 (16.0 kg/m)</option>
                                    <option value="18.8">NPU 160 (18.8 kg/m)</option>
                                    <option value="22.0">NPU 180 (22.0 kg/m)</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Uzunluk <small>mm</small></label>
                            <input type="number" id="u-l" placeholder="örn: 6000" step="1">
                        </div>
                        <div class="form-group">
                            <label>Adet</label>
                            <input type="number" id="u-adet" placeholder="1" value="1" min="1">
                        </div>
                    </div>
                    <button class="btn-calculate" onclick="hesaplaUProfil()">
                        <i class="fas fa-calculator"></i> Hesapla
                    </button>
                </div>

                <!-- Result Box -->
                <div class="result-box" id="result-box">
                    <div class="result-header">
                        <i class="fas fa-weight-hanging"></i>
                        <h4>Hesaplama Sonucu</h4>
                    </div>
                    <div class="result-content">
                        <div class="result-item">
                            <span class="result-label">Birim Ağırlık:</span>
                            <span class="result-value" id="birim-agirlik">-</span>
                        </div>
                        <div class="result-item">
                            <span class="result-label">Toplam Uzunluk:</span>
                            <span class="result-value" id="toplam-uzunluk">-</span>
                        </div>
                        <div class="result-item main-result">
                            <span class="result-label">Toplam Ağırlık:</span>
                            <span class="result-value" id="toplam-agirlik">-</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formula Info -->
        <div class="formula-info">
            <h3><i class="fas fa-info-circle"></i> Hesaplama Formülleri</h3>
            <div class="formula-grid">
                <div class="formula-item">
                    <h4>Kutu Profil</h4>
                    <p>Ağırlık = [(A × B) - ((A - 2t) × (B - 2t))] × L × 7.85 / 1000000</p>
                </div>
                <div class="formula-item">
                    <h4>Yuvarlak Boru</h4>
                    <p>Ağırlık = [(D² - (D - 2t)²) × π / 4] × L × 7.85 / 1000000</p>
                </div>
                <div class="formula-item">
                    <h4>Sac / Levha</h4>
                    <p>Ağırlık = En × Boy × Kalınlık × 7.85 / 1000000</p>
                </div>
                <div class="formula-item">
                    <h4>Yuvarlak Demir</h4>
                    <p>Ağırlık = (D² × π / 4) × L × 7.85 / 1000000</p>
                </div>
            </div>
            <p class="formula-note"><strong>Not:</strong> Çelik yoğunluğu 7.85 g/cm³ olarak alınmıştır. Hesaplamalar teorik değerlerdir, gerçek ağırlıklar toleranslar nedeniyle farklılık gösterebilir.</p>
        </div>
    </div>
</section>

<style>
/* Calculator Page Specific Styles */
.calculator-section {
    padding: 60px 0;
    background: var(--light-bg);
}

.calculator-intro {
    text-align: center;
    margin-bottom: 40px;
}

.calculator-intro p {
    font-size: 18px;
    color: var(--text-light);
}

.calculator-wrapper {
    display: flex;
    gap: 30px;
    background: var(--white);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: var(--shadow);
}

/* Sidebar */
.calculator-sidebar {
    width: 280px;
    background: var(--secondary-color);
    padding: 30px;
    flex-shrink: 0;
}

.calculator-sidebar h3 {
    color: var(--white);
    font-size: 18px;
    margin-bottom: 25px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.calculator-sidebar h3 i {
    color: var(--primary-color);
}

.product-list {
    list-style: none;
}

.product-list li {
    padding: 15px 20px;
    color: rgba(255, 255, 255, 0.7);
    cursor: pointer;
    border-radius: 10px;
    margin-bottom: 5px;
    display: flex;
    align-items: center;
    gap: 12px;
    transition: var(--transition);
}

.product-list li:hover {
    background: rgba(255, 255, 255, 0.1);
    color: var(--white);
}

.product-list li.active {
    background: var(--primary-color);
    color: var(--white);
}

.product-list li i {
    width: 20px;
    text-align: center;
}

/* Main Calculator Area */
.calculator-main {
    flex: 1;
    padding: 40px;
}

.calc-form {
    display: none;
}

.calc-form.active {
    display: block;
}

.calc-form h3 {
    font-size: 24px;
    color: var(--secondary-color);
    margin-bottom: 30px;
    display: flex;
    align-items: center;
    gap: 12px;
}

.calc-form h3 i {
    color: var(--primary-color);
}

/* Form Visual */
.form-visual {
    margin-bottom: 30px;
    display: flex;
    justify-content: center;
}

.visual-box {
    width: 200px;
    height: 150px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}

.kutu-visual {
    border: 20px solid var(--secondary-color);
    background: var(--light-bg);
}

.boru-visual {
    width: 150px;
    height: 150px;
    border: 20px solid var(--secondary-color);
    border-radius: 50%;
    background: var(--light-bg);
}

.kosebent-visual {
    width: 100px;
    height: 100px;
    border-left: 20px solid var(--secondary-color);
    border-bottom: 20px solid var(--secondary-color);
    background: transparent;
}

.lama-visual {
    width: 200px;
    height: 30px;
    background: var(--secondary-color);
}

.sac-visual {
    width: 200px;
    height: 120px;
    background: var(--secondary-color);
    opacity: 0.8;
}

.mil-visual {
    width: 150px;
    height: 150px;
    background: var(--secondary-color);
    border-radius: 50%;
}

.kare-visual {
    width: 100px;
    height: 100px;
    background: var(--secondary-color);
}

.dimension {
    position: absolute;
    background: var(--primary-color);
    color: white;
    padding: 3px 8px;
    border-radius: 4px;
    font-size: 12px;
    font-weight: 600;
}

.dim-a { top: -25px; left: 50%; transform: translateX(-50%); }
.dim-b { right: -30px; top: 50%; transform: translateY(-50%); }
.dim-t { bottom: -25px; left: 50%; transform: translateX(-50%); }
.dim-d { top: 50%; left: 50%; transform: translate(-50%, -50%); }

/* Form Grid */
.form-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-bottom: 30px;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group.full-width {
    grid-column: span 3;
}

.form-group label {
    font-size: 14px;
    font-weight: 600;
    color: var(--secondary-color);
    margin-bottom: 8px;
}

.form-group label small {
    color: var(--text-light);
    font-weight: 400;
}

.form-group input,
.form-group select {
    padding: 15px;
    border: 2px solid #e0e0e0;
    border-radius: 10px;
    font-size: 16px;
    transition: var(--transition);
}

.form-group input:focus,
.form-group select:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(230, 57, 70, 0.1);
}

.btn-calculate {
    background: var(--primary-color);
    color: var(--white);
    padding: 18px 50px;
    border: none;
    border-radius: 50px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: var(--transition);
    display: flex;
    align-items: center;
    gap: 10px;
}

.btn-calculate:hover {
    background: #c62836;
    transform: translateY(-2px);
    box-shadow: 0 10px 30px rgba(230, 57, 70, 0.3);
}

/* Result Box */
.result-box {
    margin-top: 40px;
    background: var(--light-bg);
    border-radius: 15px;
    overflow: hidden;
    display: none;
}

.result-box.show {
    display: block;
    animation: slideDown 0.3s ease;
}

@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.result-header {
    background: var(--secondary-color);
    color: var(--white);
    padding: 20px 30px;
    display: flex;
    align-items: center;
    gap: 12px;
}

.result-header i {
    font-size: 24px;
    color: var(--primary-color);
}

.result-content {
    padding: 30px;
}

.result-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 0;
    border-bottom: 1px solid #e0e0e0;
}

.result-item:last-child {
    border-bottom: none;
}

.result-item.main-result {
    background: var(--primary-color);
    margin: 15px -30px -30px;
    padding: 25px 30px;
}

.result-item.main-result .result-label,
.result-item.main-result .result-value {
    color: var(--white);
}

.result-label {
    font-weight: 500;
    color: var(--text-light);
}

.result-value {
    font-size: 20px;
    font-weight: 700;
    color: var(--secondary-color);
}

.result-item.main-result .result-value {
    font-size: 28px;
}

/* Formula Info */
.formula-info {
    margin-top: 60px;
    background: var(--white);
    border-radius: 20px;
    padding: 40px;
    box-shadow: var(--shadow);
}

.formula-info h3 {
    font-size: 22px;
    color: var(--secondary-color);
    margin-bottom: 30px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.formula-info h3 i {
    color: var(--primary-color);
}

.formula-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 25px;
    margin-bottom: 25px;
}

.formula-item {
    background: var(--light-bg);
    padding: 20px;
    border-radius: 10px;
}

.formula-item h4 {
    color: var(--secondary-color);
    margin-bottom: 10px;
    font-size: 16px;
}

.formula-item p {
    color: var(--text-light);
    font-size: 13px;
    font-family: monospace;
    background: var(--white);
    padding: 10px;
    border-radius: 5px;
}

.formula-note {
    color: var(--text-light);
    font-size: 14px;
    background: #fff3cd;
    padding: 15px 20px;
    border-radius: 10px;
    border-left: 4px solid #ffc107;
}

/* Responsive */
@media (max-width: 1024px) {
    .calculator-wrapper {
        flex-direction: column;
    }
    
    .calculator-sidebar {
        width: 100%;
    }
    
    .product-list {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
    }
    
    .form-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .form-group.full-width {
        grid-column: span 2;
    }
}

@media (max-width: 768px) {
    .product-list {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .form-grid {
        grid-template-columns: 1fr;
    }
    
    .form-group.full-width {
        grid-column: span 1;
    }
    
    .formula-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
// Çelik yoğunluğu (g/cm³)
const CELIK_YOGUNLUK = 7.85;

// Ürün seçimi
document.querySelectorAll('.product-list li').forEach(item => {
    item.addEventListener('click', function() {
        // Remove active from all
        document.querySelectorAll('.product-list li').forEach(li => li.classList.remove('active'));
        document.querySelectorAll('.calc-form').forEach(form => form.classList.remove('active'));
        
        // Add active to clicked
        this.classList.add('active');
        const productId = this.getAttribute('data-product');
        document.getElementById(productId).classList.add('active');
        
        // Hide result
        document.getElementById('result-box').classList.remove('show');
    });
});

// Sonuç gösterme fonksiyonu
function showResult(birimAgirlik, toplamUzunluk, toplamAgirlik) {
    document.getElementById('birim-agirlik').textContent = birimAgirlik.toFixed(3) + ' kg/m';
    document.getElementById('toplam-uzunluk').textContent = toplamUzunluk.toFixed(2) + ' m';
    document.getElementById('toplam-agirlik').textContent = toplamAgirlik.toFixed(2) + ' kg';
    document.getElementById('result-box').classList.add('show');
}

// Kutu Profil Hesaplama
function hesaplaKutuProfil() {
    const a = parseFloat(document.getElementById('kutu-a').value);
    const b = parseFloat(document.getElementById('kutu-b').value);
    const t = parseFloat(document.getElementById('kutu-t').value);
    const l = parseFloat(document.getElementById('kutu-l').value);
    const adet = parseInt(document.getElementById('kutu-adet').value) || 1;
    
    if (!a || !b || !t || !l) {
        alert('Lütfen tüm alanları doldurun.');
        return;
    }
    
    // Kesit alanı (mm²)
    const disAlan = a * b;
    const icAlan = (a - 2 * t) * (b - 2 * t);
    const kesitAlani = disAlan - icAlan;
    
    // Birim ağırlık (kg/m)
    const birimAgirlik = (kesitAlani * CELIK_YOGUNLUK) / 1000;
    
    // Toplam uzunluk (m)
    const toplamUzunluk = (l * adet) / 1000;
    
    // Toplam ağırlık (kg)
    const toplamAgirlik = birimAgirlik * toplamUzunluk;
    
    showResult(birimAgirlik, toplamUzunluk, toplamAgirlik);
}

// Yuvarlak Boru Hesaplama
function hesaplaBoru() {
    const d = parseFloat(document.getElementById('boru-d').value);
    const t = parseFloat(document.getElementById('boru-t').value);
    const l = parseFloat(document.getElementById('boru-l').value);
    const adet = parseInt(document.getElementById('boru-adet').value) || 1;
    
    if (!d || !t || !l) {
        alert('Lütfen tüm alanları doldurun.');
        return;
    }
    
    // Kesit alanı (mm²)
    const disAlan = Math.PI * Math.pow(d / 2, 2);
    const icAlan = Math.PI * Math.pow((d - 2 * t) / 2, 2);
    const kesitAlani = disAlan - icAlan;
    
    // Birim ağırlık (kg/m)
    const birimAgirlik = (kesitAlani * CELIK_YOGUNLUK) / 1000;
    
    // Toplam uzunluk (m)
    const toplamUzunluk = (l * adet) / 1000;
    
    // Toplam ağırlık (kg)
    const toplamAgirlik = birimAgirlik * toplamUzunluk;
    
    showResult(birimAgirlik, toplamUzunluk, toplamAgirlik);
}

// Köşebent Hesaplama
function hesaplaKosebent() {
    const a = parseFloat(document.getElementById('kosebent-a').value);
    const b = parseFloat(document.getElementById('kosebent-b').value);
    const t = parseFloat(document.getElementById('kosebent-t').value);
    const l = parseFloat(document.getElementById('kosebent-l').value);
    const adet = parseInt(document.getElementById('kosebent-adet').value) || 1;
    
    if (!a || !b || !t || !l) {
        alert('Lütfen tüm alanları doldurun.');
        return;
    }
    
    // Kesit alanı (mm²) - L profil
    const kesitAlani = (a + b - t) * t;
    
    // Birim ağırlık (kg/m)
    const birimAgirlik = (kesitAlani * CELIK_YOGUNLUK) / 1000;
    
    // Toplam uzunluk (m)
    const toplamUzunluk = (l * adet) / 1000;
    
    // Toplam ağırlık (kg)
    const toplamAgirlik = birimAgirlik * toplamUzunluk;
    
    showResult(birimAgirlik, toplamUzunluk, toplamAgirlik);
}

// Lama Hesaplama
function hesaplaLama() {
    const a = parseFloat(document.getElementById('lama-a').value);
    const t = parseFloat(document.getElementById('lama-t').value);
    const l = parseFloat(document.getElementById('lama-l').value);
    const adet = parseInt(document.getElementById('lama-adet').value) || 1;
    
    if (!a || !t || !l) {
        alert('Lütfen tüm alanları doldurun.');
        return;
    }
    
    // Kesit alanı (mm²)
    const kesitAlani = a * t;
    
    // Birim ağırlık (kg/m)
    const birimAgirlik = (kesitAlani * CELIK_YOGUNLUK) / 1000;
    
    // Toplam uzunluk (m)
    const toplamUzunluk = (l * adet) / 1000;
    
    // Toplam ağırlık (kg)
    const toplamAgirlik = birimAgirlik * toplamUzunluk;
    
    showResult(birimAgirlik, toplamUzunluk, toplamAgirlik);
}

// Sac Hesaplama
function hesaplaSac() {
    const en = parseFloat(document.getElementById('sac-en').value);
    const boy = parseFloat(document.getElementById('sac-boy').value);
    const t = parseFloat(document.getElementById('sac-t').value);
    const adet = parseInt(document.getElementById('sac-adet').value) || 1;
    
    if (!en || !boy || !t) {
        alert('Lütfen tüm alanları doldurun.');
        return;
    }
    
    // Hacim (mm³ -> cm³ -> kg)
    const hacim = en * boy * t; // mm³
    const agirlik = (hacim * CELIK_YOGUNLUK) / 1000000; // kg
    
    // m² başına ağırlık
    const birimAgirlik = (t * CELIK_YOGUNLUK) / 1000; // kg/m² per mm thickness
    const alan = (en * boy) / 1000000; // m²
    
    document.getElementById('birim-agirlik').textContent = (t * 7.85).toFixed(2) + ' kg/m²';
    document.getElementById('toplam-uzunluk').textContent = (alan * adet).toFixed(2) + ' m²';
    document.getElementById('toplam-agirlik').textContent = (agirlik * adet).toFixed(2) + ' kg';
    document.getElementById('result-box').classList.add('show');
}

// Yuvarlak Demir (Mil) Hesaplama
function hesaplaMil() {
    const d = parseFloat(document.getElementById('mil-d').value);
    const l = parseFloat(document.getElementById('mil-l').value);
    const adet = parseInt(document.getElementById('mil-adet').value) || 1;
    
    if (!d || !l) {
        alert('Lütfen tüm alanları doldurun.');
        return;
    }
    
    // Kesit alanı (mm²)
    const kesitAlani = Math.PI * Math.pow(d / 2, 2);
    
    // Birim ağırlık (kg/m)
    const birimAgirlik = (kesitAlani * CELIK_YOGUNLUK) / 1000;
    
    // Toplam uzunluk (m)
    const toplamUzunluk = (l * adet) / 1000;
    
    // Toplam ağırlık (kg)
    const toplamAgirlik = birimAgirlik * toplamUzunluk;
    
    showResult(birimAgirlik, toplamUzunluk, toplamAgirlik);
}

// Kare Demir Hesaplama
function hesaplaKare() {
    const a = parseFloat(document.getElementById('kare-a').value);
    const l = parseFloat(document.getElementById('kare-l').value);
    const adet = parseInt(document.getElementById('kare-adet').value) || 1;
    
    if (!a || !l) {
        alert('Lütfen tüm alanları doldurun.');
        return;
    }
    
    // Kesit alanı (mm²)
    const kesitAlani = a * a;
    
    // Birim ağırlık (kg/m)
    const birimAgirlik = (kesitAlani * CELIK_YOGUNLUK) / 1000;
    
    // Toplam uzunluk (m)
    const toplamUzunluk = (l * adet) / 1000;
    
    // Toplam ağırlık (kg)
    const toplamAgirlik = birimAgirlik * toplamUzunluk;
    
    showResult(birimAgirlik, toplamUzunluk, toplamAgirlik);
}

// HEA/HEB/IPE Hesaplama
function hesaplaHProfil() {
    const birimAgirlik = parseFloat(document.getElementById('h-profil-tipi').value);
    const l = parseFloat(document.getElementById('h-l').value);
    const adet = parseInt(document.getElementById('h-adet').value) || 1;
    
    if (!l) {
        alert('Lütfen uzunluk değerini girin.');
        return;
    }
    
    // Toplam uzunluk (m)
    const toplamUzunluk = (l * adet) / 1000;
    
    // Toplam ağırlık (kg)
    const toplamAgirlik = birimAgirlik * toplamUzunluk;
    
    showResult(birimAgirlik, toplamUzunluk, toplamAgirlik);
}

// UNP/NPU Hesaplama
function hesaplaUProfil() {
    const birimAgirlik = parseFloat(document.getElementById('u-profil-tipi').value);
    const l = parseFloat(document.getElementById('u-l').value);
    const adet = parseInt(document.getElementById('u-adet').value) || 1;
    
    if (!l) {
        alert('Lütfen uzunluk değerini girin.');
        return;
    }
    
    // Toplam uzunluk (m)
    const toplamUzunluk = (l * adet) / 1000;
    
    // Toplam ağırlık (kg)
    const toplamAgirlik = birimAgirlik * toplamUzunluk;
    
    showResult(birimAgirlik, toplamUzunluk, toplamAgirlik);
}
</script>

<?php
require_once 'includes/footer.php';
?>
