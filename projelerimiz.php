<?php
require_once 'includes/header.php';

// Proje kategorileri ve resimleri
$projeler = [
    'İstanbul Projeleri' => [
        'ist1.jpg', 'ist2.jpg', 'ist3.jpg', 'ist4.jpg', 'ist5.jpg', 'ist6.jpg', 'ist7.jpg', 'ist8.jpg', 'ist9.jpg', 'ist10.jpg',
        'ist11.jpg', 'ist12.jpg', 'ist13.jpg', 'ist14.jpg', 'ist15.jpg', 'ist16.jpg', 'ist17.jpg', 'ist18.jpg', 'ist19.jpg', 'ist20.jpg',
        'ist21.jpg', 'ist22.jpg', 'ist23.jpg', 'ist24.jpg', 'ist25.jpg', 'ist26.jpg', 'ist27.jpg', 'ist28.jpg', 'ist29.jpg'
    ],
    'Zırhlı Araç Projeleri' => [
        'zirh1.jpg', 'zirh2.jpg', 'zirh3.jpg', 'zirh4.jpg', 'zirh5.jpg', 'zirh6.jpg', 'zirh7.jpg', 'zirh8.jpg', 'zirh9.jpg', 'zirh10.jpg', 'zirh11.jpg', 'zirh12.jpg'
    ],
    'Bariyer Projeleri' => [
        'bariyer1.jpg', 'bariyer2.jpg', 'bariyer3.jpg', 'bariyer4.jpg', 'bariyer5.jpg', 'bariyer6.jpg', 'bariyer7.jpg'
    ],
    'Zaho Projeleri' => [
        'zaho1.jpg', 'zaho2.jpg', 'zaho3.jpg', 'zaho4.jpg', 'zaho5.jpg', 'zaho-1.jpg'
    ],
    'Karabük Projeleri' => [
        'kara1.jpg', 'kara2.jpg', 'kara3.jpg', 'kara4.jpg', 'kara5.jpg'
    ],
    'Sinop Projeleri' => [
        'sin1.jpg', 'sin2.jpg', 'sin3.jpg', 'sin4.jpg', 'sin5.jpg'
    ],
    'AFAD Projeleri' => [
        'af1.jpg', 'af2.jpg', 'af3.jpg', 'afad-1.jpg'
    ],
    'Balıkesir Projeleri' => [
        'bal1.jpg', 'bal2.jpg', 'bal3.jpg'
    ],
    'İmalat Projeleri' => [
        'im1.jpg', 'im2.jpg', 'im3.jpg', 'im4.jpg', 'im5.jpg', 'imm1.jpg', 'imm2.jpg', 'imm3.jpg', 'imm4.jpg', 'imm5.jpg'
    ],
    'Umman Projeleri' => [
        'um1.jpg', 'um2.jpg', 'um3.jpg', 'um4.jpg'
    ],
    'Diğer Projeler' => [
        '1-1.jpg', '2-1.jpg', '3-1.jpg', '4-1.jpg', '5-1.jpg', '6-1.jpg', '7-1.jpg', 'toki-1.jpg'
    ]
];
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1>AREL ÇELİK PROJELERİ</h1>
        <div class="breadcrumb">
            <a href="index.php" title="Arel Çelik Anasayfa">Anasayfa</a> / <span>Projelerimiz</span>
        </div>
    </div>
</section>

<!-- Projects Intro -->
<section class="projects-intro-section">
    <div class="container">
        <p class="intro-text"><strong>Sakarya Arel Çelik</strong> olarak Türkiye genelinde tamamladığımız projeler. <strong>Arel Çelik</strong> kalitesi ve güvencesiyle gerçekleştirilen çelik yapı, zırhlı araç, bariyer ve AFAD projeleri.</p>
    </div>
</section>

<!-- Projects Filter -->
<section class="projects-filter-section">
    <div class="container">
        <div class="filter-buttons">
            <button class="filter-btn active" data-filter="all">Tümü</button>
            <?php foreach(array_keys($projeler) as $kategori): ?>
            <button class="filter-btn" data-filter="<?php echo strtolower(str_replace([' ', 'ı', 'ö', 'ü', 'ş', 'ğ', 'ç', 'İ'], ['-', 'i', 'o', 'u', 's', 'g', 'c', 'i'], $kategori)); ?>"><?php echo $kategori; ?></button>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Projects Gallery -->
<section class="projects-page-section">
    <div class="container">
        <div class="projects-gallery" id="projectsGallery">
            <?php 
            $index = 0;
            foreach($projeler as $kategori => $resimler): 
                $filterClass = strtolower(str_replace([' ', 'ı', 'ö', 'ü', 'ş', 'ğ', 'ç', 'İ'], ['-', 'i', 'o', 'u', 's', 'g', 'c', 'i'], $kategori));
                foreach($resimler as $resim):
                    $index++;
            ?>
            <div class="project-item" data-category="<?php echo $filterClass; ?>">
                <div class="project-image">
                    <img src="assets/images/projeler/<?php echo $resim; ?>" alt="<?php echo $kategori; ?>" loading="lazy">
                    <div class="project-overlay">
                        <div class="project-info">
                            <h3><?php echo $kategori; ?></h3>
                            <a href="assets/images/projeler/<?php echo $resim; ?>" class="project-zoom" data-lightbox="projects">
                                <i class="fas fa-search-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                endforeach;
            endforeach; 
            ?>
        </div>
    </div>
</section>

<!-- Project Stats Section -->
<section class="project-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-icon">
                    <i class="fas fa-project-diagram"></i>
                </div>
                <div class="stat-number" data-count="150">0</div>
                <div class="stat-label">Tamamlanan Proje</div>
            </div>
            <div class="stat-item">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-number" data-count="200">0</div>
                <div class="stat-label">Mutlu Müşteri</div>
            </div>
            <div class="stat-item">
                <div class="stat-icon">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <div class="stat-number" data-count="20">0</div>
                <div class="stat-label">Yıllık Deneyim</div>
            </div>
            <div class="stat-item">
                <div class="stat-icon">
                    <i class="fas fa-award"></i>
                </div>
                <div class="stat-number" data-count="50">0</div>
                <div class="stat-label">İş Ortağı</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Projeniz İçin Bize Ulaşın</h2>
            <p>Çelik yapı projeleriniz için profesyonel çözümler sunuyoruz.</p>
            <div class="cta-buttons">
                <a href="iletisim.php" class="btn-primary">Teklif Al</a>
                <a href="tel:02647771566" class="btn-outline"><i class="fas fa-phone"></i> 0264 777 15 66</a>
            </div>
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div class="lightbox-modal" id="lightboxModal">
    <span class="lightbox-close">&times;</span>
    <img class="lightbox-image" id="lightboxImage">
    <div class="lightbox-caption" id="lightboxCaption"></div>
    <div class="lightbox-nav">
        <button class="lightbox-prev"><i class="fas fa-chevron-left"></i></button>
        <button class="lightbox-next"><i class="fas fa-chevron-right"></i></button>
    </div>
    <div class="lightbox-counter" id="lightboxCounter"></div>
</div>

<script>
// Filter functionality
const filterButtons = document.querySelectorAll('.filter-btn');
const projectItems = document.querySelectorAll('.project-item');

filterButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        filterButtons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        
        const filter = btn.dataset.filter;
        
        projectItems.forEach(item => {
            if (filter === 'all' || item.dataset.category === filter) {
                item.style.display = 'block';
                item.style.animation = 'fadeIn 0.5s ease';
            } else {
                item.style.display = 'none';
            }
        });
    });
});

// Lightbox functionality
const lightboxModal = document.getElementById('lightboxModal');
const lightboxImage = document.getElementById('lightboxImage');
const lightboxCaption = document.getElementById('lightboxCaption');
const lightboxCounter = document.getElementById('lightboxCounter');
const lightboxClose = document.querySelector('.lightbox-close');
const lightboxPrev = document.querySelector('.lightbox-prev');
const lightboxNext = document.querySelector('.lightbox-next');

let currentImageIndex = 0;
let visibleImages = [];

function updateVisibleImages() {
    visibleImages = Array.from(document.querySelectorAll('.project-item:not([style*="display: none"]) .project-zoom'));
}

function showImage(index) {
    if (visibleImages.length === 0) return;
    currentImageIndex = index;
    const imgSrc = visibleImages[index].getAttribute('href');
    const caption = visibleImages[index].closest('.project-item').querySelector('h3').textContent;
    lightboxImage.src = imgSrc;
    lightboxCaption.textContent = caption;
    lightboxCounter.textContent = `${index + 1} / ${visibleImages.length}`;
}

function openLightbox(index) {
    updateVisibleImages();
    showImage(index);
    lightboxModal.classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    lightboxModal.classList.remove('active');
    document.body.style.overflow = '';
}

document.addEventListener('click', (e) => {
    if (e.target.closest('.project-zoom')) {
        e.preventDefault();
        updateVisibleImages();
        const clickedZoom = e.target.closest('.project-zoom');
        const index = visibleImages.indexOf(clickedZoom);
        openLightbox(index);
    }
});

lightboxClose.addEventListener('click', closeLightbox);
lightboxModal.addEventListener('click', (e) => {
    if (e.target === lightboxModal) closeLightbox();
});

lightboxPrev.addEventListener('click', () => {
    currentImageIndex = (currentImageIndex - 1 + visibleImages.length) % visibleImages.length;
    showImage(currentImageIndex);
});

lightboxNext.addEventListener('click', () => {
    currentImageIndex = (currentImageIndex + 1) % visibleImages.length;
    showImage(currentImageIndex);
});

document.addEventListener('keydown', (e) => {
    if (!lightboxModal.classList.contains('active')) return;
    if (e.key === 'Escape') closeLightbox();
    if (e.key === 'ArrowLeft') lightboxPrev.click();
    if (e.key === 'ArrowRight') lightboxNext.click();
});

// Counter animation
const statNumbers = document.querySelectorAll('.stat-number');
const observerOptions = { threshold: 0.5 };

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const target = entry.target;
            const count = parseInt(target.getAttribute('data-count'));
            animateCount(target, count);
            observer.unobserve(target);
        }
    });
}, observerOptions);

statNumbers.forEach(num => observer.observe(num));

function animateCount(element, target) {
    let current = 0;
    const increment = target / 50;
    const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
            element.textContent = target + '+';
            clearInterval(timer);
        } else {
            element.textContent = Math.floor(current);
        }
    }, 30);
}
</script>

<style>
@keyframes fadeIn {
    from { opacity: 0; transform: scale(0.9); }
    to { opacity: 1; transform: scale(1); }
}

.lightbox-caption {
    position: absolute;
    bottom: 80px;
    left: 50%;
    transform: translateX(-50%);
    color: #fff;
    font-size: 18px;
    text-align: center;
    padding: 10px 20px;
    background: rgba(0,0,0,0.5);
    border-radius: 5px;
}

.lightbox-counter {
    position: absolute;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    color: #fff;
    font-size: 16px;
    background: rgba(0,0,0,0.5);
    padding: 8px 15px;
    border-radius: 20px;
}
</style>

<?php
require_once 'includes/footer.php';
?>
