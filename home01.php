<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Fetch user data from the database
$user_id = $_SESSION['user_id'];
$result = mysqli_query($conn, "SELECT username FROM users WHERE id='$user_id'");
$user = mysqli_fetch_assoc($result);
$username = $user['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farmers.in</title>
  <link rel="stylesheet" href="home.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <div class="header-content">
        <div class="logo">
            <i class="fas fa-leaf logo-icon"></i>
            <span>Farmers.in</span>
        </div>
        <nav>
            <ul>
                <li><a href="#"><i class="fas fa-home nav-icon"></i> Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-btn">
                        <i class="fas fa-lightbulb nav-icon"></i> Services
                        <i class="fas fa-chevron-down arrow"></i> 
                    </a>
                    <div class="dropdown-content">
                        <a href="home.php" class="btn btn-info m-2">Blog</a>
                        <a href="#">Service 2</a>
                        <a href="#">Service 3</a>
                    </div>
                </li>
                <li><a href="#pro"><i class="fas fa-seedling nav-icon"></i> Products</a></li>
                <li><a href="#"><i class="fas fa-info-circle nav-icon"></i> About</a></li>
                <li><a href="#"><i class="fas fa-envelope nav-icon"></i> Contact</a></li>
                <!-- <button class="lang-toggle" onclick="toggleLanguage()">हिंदी</button> -->
            </ul>
        </nav>
        <button class="cta">
            <i class="fas fa-user-plus"></i><a href="http://127.0.0.1:5500/login.html">Get Started</a>
        </button>
    </div>
</header>

  <section class="we-care">
    <video autoplay muted loop playsinline class="background-video">
      <source src="agri1.mp4" type="video/mp4">
    </video>
    <h1>Cultivating<br>Tomorrow</h1>
    <p>Sustainable Farming Solutions for Modern Agriculture</p>
  </section>

  <h1 class="guidance">Crop Portfolio</h1>

  <div class="crop-guidance">
    <div class="crops">
      <div class="crop">
        <img src="https://cdn.agdaily.com/wp-content/uploads/2016/09/wheat.jpg" alt="Wheat">
        <div class="crop-name"><a href="https://en.wikipedia.org/wiki/Wheat">Wheat</a></div>
      </div>
      <div class="crop">
        <img src="https://media.istockphoto.com/id/622925154/photo/ripe-rice-in-the-field-of-farmland.jpg?s=170667a&w=0&k=20&c=EKziMyKjbd_MX5hBLdOaF7n-laF39wmoor-giK6rHg4=" alt="Rice">
        <div class="crop-name"><a href="https://en.wikipedia.org/wiki/Rice">Rice</a></div>
      </div>
      <div class="crop">
        <img src="https://www.aces.edu/wp-content/uploads/2018/08/shutterstock_-Zeljko-Radojko_field-corn.jpg" alt="Corn">
        <div class="crop-name"><a href="https://en.wikipedia.org/wiki/Maize">Corn</a></div>
      </div>
      <div class="crop">
        <img src="https://levitycropscience.com/wp-content/uploads/2021/05/Spring-Barley-2.jpg" alt="Barley">
        <div class="crop-name"><a href="https://en.wikipedia.org/wiki/Barley">Barley</a></div>
      </div>
      <div class="crop">
        <img src="https://media.npr.org/assets/img/2015/12/21/millet_enl-2eaf52b1cfd8315bebbd3dab5ae2ab259e6cce58-s1200.jpg" alt="Millet">
        <div class="crop-name"><a href="https://en.wikipedia.org/wiki/Millet">Millet</a></div>
      </div>
      <div class="crop">
        <img src="https://www.northstargenetics.ca/wp-content/uploads/2018/12/gs-post-1600x1100.jpg" alt="Soybean">
        <div class="crop-name"><a href="https://en.wikipedia.org/wiki/Soybean">Soybean</a></div>
      </div>
      <div class="crop">
        <img src="https://media.sciencephoto.com/image/c0508107/800wm/C0508107-Cotton_crop.jpg" alt="Cotton">
        <div class="crop-name"><a href="https://en.wikipedia.org/wiki/Cotton">Cotton</a></div>
      </div>
      <div class="crop">
        <img src="https://a-z-animals.com/media/2022/07/shutterstock_767632852.jpg" alt="Sugarcane">
        <div class="crop-name"><a href="https://en.wikipedia.org/wiki/Sugarcane">Sugarcane</a></div>
      </div>
      <div class="crop">
        <img src="https://image.freepik.com/free-photo/ripe-coffee-crop-tree-coffee-plantation-farm_3236-531.jpg" alt="Coffee">
        <div class="crop-name"><a href="https://en.wikipedia.org/wiki/Coffee">Coffee</a></div>
      </div>
      <div class="crop">
        <img src="https://thumbs.dreamstime.com/b/flowering-oilseed-rape-crop-field-flowering-oilseed-rape-crop-field-blooming-canola-flowers-rapeseed-agricultural-field-265386591.jpg" alt="Oil Seeds">
        <div class="crop-name"><a href="https://en.wikipedia.org/wiki/Mustard">Oil Seeds</a></div>
      </div>
      <div class="crop">
        <img src="https://thumbs.dreamstime.com/z/jute-plant-field-jute-cultivation-assam-india-jute-plant-field-jute-cultivation-assam-india-green-154952314.jpg" alt="Jute">
        <div class="crop-name"><a href="https://en.wikipedia.org/wiki/Jute">Jute</a></div>
      </div>
      <div class="crop">
        <img src="https://thumbs.dreamstime.com/z/potato-crop-against-backdrop-garden-green-147805126.jpg" alt="Potato">
        <div class="crop-name"><a href="https://en.wikipedia.org/wiki/Potato">Potato</a></div>
      </div>
    </div>
  </div>

  <h1 class="guidance">Products</h1>
  <div class="product-section">

    <div class="tabs">
      <button class="tab-btn active" onclick="showTab('crops')">Crops</button>
      <button class="tab-btn" onclick="showTab('tools')">Tools & Machines</button>
    </div>
    
    <div class="product-section">
     
      <div id="crops" class="slider-container">
        <div class="product-slider">
          <div class="product-card"><img src="https://cdn.agdaily.com/wp-content/uploads/2016/09/wheat.jpg"><div class="product-name">Wheat</div><div class="price">₹25/kg</div><button class="add-btn">Add</button></div>
          <div class="product-card"><img src="https://media.istockphoto.com/id/622925154/photo/ripe-rice-in-the-field-of-farmland.jpg"><div class="product-name">Rice</div><div class="price">₹30/kg</div><button class="add-btn">Add</button></div>
          <div class="product-card"><img src="https://www.aces.edu/wp-content/uploads/2018/08/shutterstock_-Zeljko-Radojko_field-corn.jpg"><div class="product-name">Corn</div><div class="price">₹22/kg</div><button class="add-btn">Add</button></div>
          <div class="product-card"><img src="https://levitycropscience.com/wp-content/uploads/2021/05/Spring-Barley-2.jpg"><div class="product-name">Barley</div><div class="price">₹18/kg</div><button class="add-btn">Add</button></div>
          <div class="product-card"><img src="https://media.npr.org/assets/img/2015/12/21/millet_enl-2eaf52b1cfd8315bebbd3dab5ae2ab259e6cce58-s1200.jpg"><div class="product-name">Millet</div><div class="price">₹20/kg</div><button class="add-btn">Add</button></div>
          <div class="product-card"><img src="https://thumbs.dreamstime.com/z/potato-crop-against-backdrop-garden-green-147805126.jpg"><div class="product-name">Potato</div><div class="price">₹15/kg</div><button class="add-btn">Add</button></div>
          <div class="product-card"><img src="https://cdn.agdaily.com/wp-content/uploads/2016/09/wheat.jpg"><div class="product-name">Wheat</div><div class="price">₹25/kg</div><button class="add-btn">Add</button></div>
          <div class="product-card"><img src="https://media.istockphoto.com/id/622925154/photo/ripe-rice-in-the-field-of-farmland.jpg"><div class="product-name">Rice</div><div class="price">₹30/kg</div><button class="add-btn">Add</button></div>
          <div class="product-card"><img src="https://www.aces.edu/wp-content/uploads/2018/08/shutterstock_-Zeljko-Radojko_field-corn.jpg"><div class="product-name">Corn</div><div class="price">₹22/kg</div><button class="add-btn">Add</button></div>
          <div class="product-card"><img src="https://levitycropscience.com/wp-content/uploads/2021/05/Spring-Barley-2.jpg"><div class="product-name">Barley</div><div class="price">₹18/kg</div><button class="add-btn">Add</button></div>
          <div class="product-card"><img src="https://media.npr.org/assets/img/2015/12/21/millet_enl-2eaf52b1cfd8315bebbd3dab5ae2ab259e6cce58-s1200.jpg"><div class="product-name">Millet</div><div class="price">₹20/kg</div><button class="add-btn">Add</button></div>
          <div class="product-card"><img src="https://thumbs.dreamstime.com/z/potato-crop-against-backdrop-garden-green-147805126.jpg"><div class="product-name">Potato</div><div class="price">₹15/kg</div><button class="add-btn">Add</button></div>
          
        </div>
      </div>
    
      
      <div id="tools" class="slider-container hidden">
        <div class="product-slider">
          <div class="product-card"><img src="https://5.imimg.com/data5/SELLER/Default/2023/10/351208194/GL/MC/AY/10928070/mini-tractor-500x500.jpg"><div class="product-name">Mini Tractor</div><div class="price">₹1,50,000</div><button class="add-btn">Add</button></div>
          <div class="product-card"><img src="https://www.kisanstore.com/media/catalog/product/cache/cd308ff1de3a305f1d17f5f6cd8b8273/h/a/hand_hoe.jpg"><div class="product-name">Hand Hoe</div><div class="price">₹500</div><button class="add-btn">Add</button></div>
          <div class="product-card"><img src="https://cdn.moglix.com/p/McK5rXmeYslQ8-xxlarge.jpg"><div class="product-name">Power Tiller</div><div class="price">₹65,000</div><button class="add-btn">Add</button></div>
          <div class="product-card"><img src="https://rukminim2.flixcart.com/image/850/1000/kjabs7k0-0/tool-set/v/4/f/green-hand-tools-kit-12-pieces-home-garden-tools-kit-for-original-imafyurh9z9ufrsj.jpeg"><div class="product-name">Garden Kit</div><div class="price">₹1,200</div><button class="add-btn">Add</button></div>
          <div class="product-card"><img src="https://5.imimg.com/data5/SELLER/Default/2021/8/VU/BY/NO/135019412/solar-sprayer-500x500.jpg"><div class="product-name">Solar Sprayer</div><div class="price">₹3,200</div><button class="add-btn">Add</button></div>
          <div class="product-card"><img src="https://www.tractorjunction.com/assets/images/machines-category/plough.png"><div class="product-name">Plough</div><div class="price">₹5,500</div><button class="add-btn">Add</button></div>
          
    
          
          <div class="product-card"><img src="https://5.imimg.com/data5/SELLER/Default/2023/10/351208194/GL/MC/AY/10928070/mini-tractor-500x500.jpg"><div class="product-name">Mini Tractor</div><div class="price">₹1,50,000</div><button class="add-btn">Add</button></div>
          <div class="product-card"><img src="https://www.kisanstore.com/media/catalog/product/cache/cd308ff1de3a305f1d17f5f6cd8b8273/h/a/hand_hoe.jpg"><div class="product-name">Hand Hoe</div><div class="price">₹500</div><button class="add-btn">Add</button></div>
          <div class="product-card"><img src="https://cdn.moglix.com/p/McK5rXmeYslQ8-xxlarge.jpg"><div class="product-name">Power Tiller</div><div class="price">₹65,000</div><button class="add-btn">Add</button></div>
          <div class="product-card"><img src="https://rukminim2.flixcart.com/image/850/1000/kjabs7k0-0/tool-set/v/4/f/green-hand-tools-kit-12-pieces-home-garden-tools-kit-for-original-imafyurh9z9ufrsj.jpeg"><div class="product-name">Garden Kit</div><div class="price">₹1,200</div><button class="add-btn">Add</button></div>
          <div class="product-card"><img src="https://5.imimg.com/data5/SELLER/Default/2021/8/VU/BY/NO/135019412/solar-sprayer-500x500.jpg"><div class="product-name">Solar Sprayer</div><div class="price">₹3,200</div><button class="add-btn">Add</button></div>
          <div class="product-card"><img src="https://www.tractorjunction.com/assets/images/machines-category/plough.png"><div class="product-name">Plough</div><div class="price">₹5,500</div><button class="add-btn">Add</button></div>
          
        </div>
      </div>
    </div>

  </div>










  <div class="services-section">
    <h2>Our Services</h2>
    <div class="services-container">
      <div class="service-card" data-service="Crop Advisory">Crop Advisory</div>
      <div class="service-card" data-service="Weather Forecast"><a href="https://weathercheck.42web.io/?i=1">Weather Forecast</a></div>
      <div class="service-card" data-service="Pest Control"><a href="http://127.0.0.1:5500/pest_control.html">Pest Control</a></div>
      <div class="service-card" data-service="Irrigation Management">Irrigation Management</div>
      <div class="service-card" data-service="Machinery Rental">Machinery Rental</div>
      <div class="service-card" data-service="Market Prices">Market Prices</div>
      <div class="service-card" data-service="Soil Health"><a href="soil_health.html">Soil healthS</a></div>
      <div class="service-card" data-service="Community Forum"><a href="community_forum.html">Community form</a></div>
    </div>
  </div>

  <div class="service-preview" id="servicePreview">
    <h3 id="previewTitle">Title</h3>
    <p id="previewDescription">More info about the service will appear here.</p>
  </div>

  
  

  

  <script>

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = 1;
          entry.target.style.transform = 'translateY(0)';
        }
      });
    }, { threshold: 0.1 });

    document.querySelectorAll('.crop').forEach((crop) => {
      observer.observe(crop);
    });

    // Add hover class on mobile
    function handleTouch(event) {
      event.currentTarget.classList.toggle('hover');
    }
    
    document.querySelectorAll('.crop').forEach(crop => {
      crop.addEventListener('touchstart', handleTouch, false);
    });



    function showTab(tabId) {
    document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
    document.querySelector(`.tab-btn[onclick="showTab('${tabId}')"]`).classList.add('active');

    document.querySelectorAll('.slider-container').forEach(section => section.classList.add('hidden'));
    document.getElementById(tabId).classList.remove('hidden');
    }


   
   
   
   
  const serviceCards = document.querySelectorAll('.service-card');
const preview = document.getElementById('servicePreview');
const previewTitle = document.getElementById('previewTitle');
const previewDescription = document.getElementById('previewDescription');

const serviceInfo = {
  'Crop Advisory': 'Get expert advice on what crops to grow and how to manage them.',
  'Weather Forecast': 'Stay updated with real-time weather forecasts for your region.',
  'Pest Control': 'Learn about best practices and tools to control pests effectively.',
  'Irrigation Management': 'Optimize your water usage with smart irrigation techniques.',
  'Machinery Rental': 'Find and rent the right machinery for your agricultural needs.',
  'Market Prices': 'Track daily market prices of crops and plan your sales accordingly.',
  'Soil Health': 'Analyze and improve your soil’s fertility and health.',
  'Community Forum': 'Connect with fellow farmers and share knowledge.',
};

let hoverTimer;

serviceCards.forEach(card => {
  card.addEventListener('mouseenter', (e) => {
    const service = e.target.dataset.service;

    hoverTimer = setTimeout(() => {
      previewTitle.textContent = service;
      previewDescription.textContent = serviceInfo[service];

      const rect = e.target.getBoundingClientRect();
      preview.style.top = `${rect.bottom + window.scrollY + 10}px`;
      preview.style.left = `${rect.left + window.scrollX}px`;
      preview.classList.add('visible');
    }, 500); // 3 seconds delay
  });

  card.addEventListener('mouseleave', () => {
    clearTimeout(hoverTimer);
    preview.classList.remove('visible');
  });
});


const dropdownBtn = document.querySelector('.dropdown-btn');
    const dropdown = document.querySelector('.dropdown');
    
    dropdownBtn.addEventListener('click', () => {
        dropdown.classList.toggle('open');
    });






    
  </script>
</body>
</html>