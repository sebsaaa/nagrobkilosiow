<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">

</head>
<body>
  <div class="navbar">
    <div class="logo">
        <img src="resources/text.png" class="logo">
    </div>
    <div class="links">
        <a href="index.html" class="nav_button">Strona Główna</a>
        <a href="index.html#o_nas" class="nav_button">O nas</a>
        <a href="index.html#offer" class="nav_button">Oferta</a>
         <a href="index.html#opinie" class="nav_button">Opinie</a>
        <div class="dropdown" onmouseenter="showMenu(this)" onmouseleave="hideMenu(this)">
          <a href="galeria.php" class="nav_button">Galeria</a>
          <div class="dropdown_bridge"></div>
          <div class="dropdown_menu">
            <a href="galeria.php#pojedyncze">Nagrobki Pojedyncze</a>
            <a href="galeria.php#podwojne">Nagrobki Podwójne</a>
            <a href="galeria.php#skalkowe">Nagrobki Skałkowe</a>
            <a href="galeria.php#urnowe">Nagrobki Urnowe</a>
            <a href="galeria.php#dzieciece">Nagrobki Dziecięce</a>
            <a href="galeria.php#galanteria">Galanteria Nagrobkowa</a>
          </div>
        </div>
        <a href="#contact" class="nav_button">Kontakt</a>
        <div class="navbar_tel">
          <img src="resources/icons/tel_gold.png"class="icon">+48 504 780 395
        </div>
    </div>
    <div class="nav_menu" onclick="toggleNavMenu()"> <img src="resources/icons/menu-icon.png" ></div>
    <div class="nav_menu_body"> 
      <a href="index.html" class="mnav_button">Strona Główna<div class="mline"></div></a>
        <a href="index.html#o_nas" class="mnav_button">O nas<div class="mline"></div></a>
         <a href="index.html#opinie" class="mnav_button">Opinie<div class="mline"></div></a>
        <div class="mdropdown" onclick="mshowMenu(this)">
          <a class="mnav_button">Galeria <!--<span class="span"> ＜ </span>!--><div class="mline"></div></a>
          <div class="mdropdown_menu">
            <a href="galeria.php#pojedyncze">Nagrobki Pojedyncze</a>
            <a href="galeria.php#podwojne">Nagrobki Podwójne</a>
            <a href="galeria.php#skalkowe">Nagrobki Skałkowe</a>
            <a href="galeria.php#urnowe">Nagrobki Urnowe</a>
            <a href="galeria.php#dzieciece">Nagrobki Dziecięce</a>
            <a href="galeria.php#galanteria">Galanteria Nagrobkowa</a>
          </div>
        </div>
        
        <a href="#contact" class="mnav_button">Kontakt<div class="mline"></div></a>
    </div>
</div>
    <div class="main">
        <p class="g_header"id="pojedyncze">
            Nagrobki Pojedyncze
        </p>
        <div class="gallery_wrapper">
            <div class="gallery_container">
              <?php
              $allowed_ext = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
              $files = scandir('zdjecia/pojedyncze');
              foreach ($files as $file) {
                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, $allowed_ext)) {
                  echo '<div class="gallery_photo_wrapper">
                  <img src="zdjecia/pojedyncze/' . $file . '" class="gallery_photo" alt="">
                </div>';
                
                }
              }
            ?>
            <div id="fullscreen" style="display: none;">
              <img id="fullscreen-img" src="" alt="Pełne zdjęcie" style="max-width: 90%; max-height: 90%; cursor: pointer;">
            </div>

                 <div class="gallery_photo_wrapper">
                    <img src="zdjecia/nag4.JPG" class="gallery_photo" alt="">
                  </div>
            </div>
            <div class="fade_bottom">
                <div class="see_more_wrapper">
                    <button class="expand_btn" onclick="toggleGallery(this)">Zobacz więcej</button>
                  </div>
            </div>
          </div>
        </div>
        <p class="g_header" id="podwojne">
            Nagrobki Podwójne
        </p>
        <div class="gallery_wrapper">
            <div class="gallery_container">
              <?php
              $allowed_ext = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
              $files = scandir('zdjecia/podwojne');
              foreach ($files as $file) {
                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, $allowed_ext)) {
                  echo '<div class="gallery_photo_wrapper">
                  <img src="zdjecia/podwojne/' . $file . '" class="gallery_photo" alt="">
                </div>';
                
                }
              }
            ?>
                 <div class="gallery_photo_wrapper">
                    <img src="zdjecia/nag4.JPG" class="gallery_photo" alt="">
                  </div>
            </div>
            <div class="fade_bottom">
                <div class="see_more_wrapper">
                    <button class="expand_btn" onclick="toggleGallery(this)">Zobacz więcej</button>
                  </div>
            </div>
          </div>
        </div>
        <p class="g_header" id="skalkowe">
            Nagrobki Skałkowe
        </p>
        <div class="gallery_wrapper">
            <div class="gallery_container">
              <?php
              $allowed_ext = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
              $files = scandir('zdjecia/skalkowe');
              foreach ($files as $file) {
                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, $allowed_ext)) {
                  echo '<div class="gallery_photo_wrapper">
                  <img src="zdjecia/skalkowe/' . $file . '" class="gallery_photo" alt="">
                </div>';
                
                }
              }
            ?>
                 <div class="gallery_photo_wrapper">
                    <img src="zdjecia/nag4.JPG" class="gallery_photo" alt="">
                  </div>
            </div>
            <div class="fade_bottom">
                <div class="see_more_wrapper">
                    <button class="expand_btn" onclick="toggleGallery(this)">Zobacz więcej</button>
                  </div>
            </div>
          </div>
        </div>
        <p class="g_header" id="urnowe">
            Nagrobki Urnowe
        </p>
        <div class="gallery_wrapper">
            <div class="gallery_container">
              <?php
              $allowed_ext = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
              $files = scandir('zdjecia/urnowe');
              foreach ($files as $file) {
                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, $allowed_ext)) {
                  echo '<div class="gallery_photo_wrapper">
                  <img src="zdjecia/urnowe/' . $file . '" class="gallery_photo" alt="">
                </div>';
                
                }
              }
            ?>
                 <div class="gallery_photo_wrapper">
                    <img src="zdjecia/nag4.JPG" class="gallery_photo" alt="">
                  </div>
            </div>
            <div class="fade_bottom">
                <div class="see_more_wrapper">
                    <button class="expand_btn" onclick="toggleGallery(this)">Zobacz więcej</button>
                  </div>
            </div>
          </div>
        </div>
        <p class="g_header" id="dzieciece">
            Nagrobki Dziecięce
        </p>
        <div class="gallery_wrapper">
            <div class="gallery_container">
              <?php
              $allowed_ext = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
              $files = scandir('zdjecia/dzieciece');
              foreach ($files as $file) {
                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, $allowed_ext)) {
                  echo '<div class="gallery_photo_wrapper">
                  <img src="zdjecia/dzieciece/' . $file . '" class="gallery_photo" alt="">
                </div>';
                
                }
              }
            ?>
                 <div class="gallery_photo_wrapper">
                    <img src="zdjecia/nag4.JPG" class="gallery_photo" alt="">
                  </div>
            </div>
            <div class="fade_bottom">
                <div class="see_more_wrapper">
                    <button class="expand_btn" onclick="toggleGallery(this)">Zobacz więcej</button>
                  </div>
            </div>
          </div>
        </div>
        <p class="g_header" id="galanteria">
            Galanteria Nagrobkowa
        </p>
        <div class="gallery_wrapper">
            <div class="gallery_container">
              <?php
              $allowed_ext = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
              $files = scandir('zdjecia/galanteria');
              foreach ($files as $file) {
                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, $allowed_ext)) {
                  echo '<div class="gallery_photo_wrapper">
                  <img src="zdjecia/galanteria/' . $file . '" class="gallery_photo" alt="">
                </div>';
                
                }
              }
            ?>
                 <div class="gallery_photo_wrapper">
                    <img src="zdjecia/nag4.JPG" class="gallery_photo" alt="">
                  </div>
            </div>
            <div class="fade_bottom">
                <div class="see_more_wrapper">
                    <button class="expand_btn" onclick="toggleGallery(this)">Zobacz więcej</button>
                  </div>
            </div>
          </div>
        </div>
        <p class="g_header" id="">
            Renowacja Napisów 
        </p>
        <div class="gallery_wrapper">
            <div class="gallery_container">
              <?php
              $allowed_ext = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'JPG', 'PNG'];
              $files = scandir('zdjecia/renowacja');
              foreach ($files as $file) {
                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, $allowed_ext)) {
                  echo '<div class="gallery_photo_wrapper">
                  <img src="zdjecia/renowacja/' . $file . '" class="gallery_photo" alt="">
                </div>';
                
                }
              }
            ?>
                 <div class="gallery_photo_wrapper">
                    <img src="zdjecia/nag4.JPG" class="gallery_photo" alt="">
                  </div>
            </div>
            <div class="fade_bottom">
                <div class="see_more_wrapper">
                    <button class="expand_btn" onclick="toggleGallery(this)">Zobacz więcej</button>
                  </div>
            </div>
          </div>
        </div>
        <p style="width:100%" class="g_header" id="">
              Inne
        </p>
        <div class="gallery_wrapper">
            <div class="gallery_container">
              <?php
              $allowed_ext = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
              $files = scandir('zdjecia/dzieciece');
              foreach ($files as $file) {
                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, $allowed_ext)) {
                  echo '<div class="gallery_photo_wrapper">
                  <img src="zdjecia/inne/' . $file . '" class="gallery_photo" alt="">
                </div>';
                
                }
              }
            ?>
                 <div class="gallery_photo_wrapper">
                    <img src="zdjecia/nag4.JPG" class="gallery_photo" alt="">
                  </div>
            </div>
            <div class="fade_bottom">
                <div class="see_more_wrapper">
                    <button class="expand_btn" onclick="toggleGallery(this)">Zobacz więcej</button>
                </div>
              </div>
            </div>
          </div>
        
        
  <div class="footer" id="contact" style="margin-top: 6.494vw;">
    <div class="contact">
      <div class="inner">
        <p class="footer_title">
          Kontakt
        </p>
        <div class="footer_block">
          <p class="footer_content">
            <img src="resources/icons/tel.png"class="icon">+48 504 780 395
          </p>
          <p class="footer_content">
            <img src="resources/icons/email.png"class="icon">nagrobkilosiow@gmail.com
          </p>
          <p class="footer_content">
            <img src="resources/icons/facebook.png"class="icon">Facebook
          </p>
          <p class="footer_content">
            <img src="resources/icons/place.png"class="icon"> Kolejowa 1a<br>49-330 Łosiów
          </p>
          <p class="footer_content">
            <img src="resources/icons/calendar.png" class="icon"> Pon-Sob<br>08:00-20:00
          </p>
        </div>
        
      </div>
    </div>
    <div class="loc">
      <div style="position: relative; width: 85%; padding-bottom: 56.25%; height: 0; overflow: hidden; ">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1261.0884386575988!2d17.55334940832311!3d50.79083051068571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471036b49d43833b%3A0x1e63dd300b11a9df!2sNagrobki%20%C5%81osi%C3%B3w%20-%20Zak%C5%82ad%20kamieniarski%23Nagrobki%23Narobek%23%23kamieniarz%23%23Brzeg%23Lewin%20Brzeski%23Opole%23Opolskie!5e0!3m2!1spl!2spl!4v1745756564767!5m2!1spl!2spl"
          style="position: absolute; bottom: 0; left: 0; width: 100%; height: 98%; border: 0; border-radius: 10px;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
      
    </div>
  </div>
  <script>
    function showMenu(dropdown) {
      const menu = dropdown.querySelector('.dropdown_menu');

      clearTimeout(menu._hideTimeout);

      menu.style.height = '22vw';
      menu.style.pointerEvents = 'auto';

      menu._showTimeout = setTimeout(() => {
        menu.classList.add('overflow-visible');
        menu._showTimeout = null;
      }, 300);
    }

    function hideMenu(dropdown) {
      const menu = dropdown.querySelector('.dropdown_menu');

      clearTimeout(menu._showTimeout);

      menu.classList.remove('overflow-visible');

      menu.style.height = '0';
      menu.style.pointerEvents = 'none';
    }
    function toggleGallery(buttonEl) {
  const wrapper = buttonEl.closest('.gallery_wrapper');
  const fade = wrapper.querySelector('.fade_bottom');
  const expanded = wrapper.classList.contains('expanded');
  const wrapper2 = fade.querySelector('.see_more_wrapper');
  const animationDuration = 700;

  const collapsedHeightVW = 32.5;
  const collapsedHeight = (window.innerWidth * collapsedHeightVW) / 100;

  if (expanded) {
    const wrapperTop = wrapper.getBoundingClientRect().top + window.scrollY;

    setTimeout(() => {
      window.scrollTo({
        top: wrapperTop - 200,
        behavior: 'smooth'
      });
    }, 0);

    wrapper.style.transition = 'none';
    wrapper.style.height = wrapper.scrollHeight + 'px';
    void wrapper.offsetHeight;

    wrapper.style.transition = `height ${animationDuration}ms ease-in-out`;
    wrapper.style.height = `${collapsedHeight}px`;

    setTimeout(() => {
      fade.style.display = 'block';
      fade.style.opacity = '1';
      fade.style.marginBottom = '0';
    }, animationDuration);

    buttonEl.textContent = 'Zobacz więcej';
    wrapper.classList.remove('expanded');

    fade.style.background = 'linear-gradient(to bottom, rgba(17, 17, 17,0),rgba(17, 17, 17,0.2), rgba(17, 17, 17,0.7), rgba(17, 17, 17,1), rgba(17, 17, 17,1))';
    fade.style.height = '13vw';
    wrapper2.style.marginTop = '4vw';
    wrapper.style.overflow = 'hidden';
    wrapper.style.marginBottom = '0';
  } else {
    const fullHeight = wrapper.scrollHeight;

    wrapper.style.transition = `height ${animationDuration}ms ease-in-out`;
    wrapper.style.height = fullHeight + 'px';

    fade.style.height = '3.25vw';
    fade.style.marginBottom = '-4.875vw';
    fade.style.transition = 'opacity 1s ease-in-out,height 1s ease-in-out,margin-bottom 1s ease-in-out';
    

    setTimeout(() => {
      wrapper.style.height = 'auto';
      fade.style.opacity = '1';
      wrapper.style.overflow = 'visible';
      wrapper.style.marginBottom = '4.875vw';
      wrapper2.style.marginTop = '0';
    }, animationDuration);

    buttonEl.textContent = 'Zwiń';
    wrapper.classList.add('expanded');
  }
}



const photos = document.querySelectorAll('.gallery_photo');
const fullscreen = document.getElementById('fullscreen');
const fullscreenImg = document.getElementById('fullscreen-img');

photos.forEach(photo => {
  photo.style.transition = 'transform 0.2s ease';

  photo.addEventListener('mouseenter', () => {
    photo.style.transform = 'scale(1.05)';
  });

  photo.addEventListener('mouseleave', () => {
    photo.style.transform = 'scale(1)';
  });

  photo.addEventListener('click', () => {
    photo.style.transform = 'scale(0.925)';

    setTimeout(() => {
      fullscreenImg.src = photo.src;
      fullscreen.style.display = 'flex';
      photo.style.transform = 'scale(1)';
    }, 75);
  });
});

fullscreen.addEventListener('click', () => {
  fullscreen.style.display = 'none';
});
  function toggleNavMenu() {
    const menu = document.querySelector('.nav_menu_body');
    menu.classList.toggle('active');
  }



function mshowMenu(dropdown) {
      const menu = dropdown.querySelector('.mdropdown_menu');
      const span = dropdown.querySelector('.span');

      clearTimeout(menu._hideTimeout);

      menu.style.height = '65vw';
      menu.style.pointerEvents = 'auto';
      span.style.transform = 'rotate(-90deg)';


      menu._showTimeout = setTimeout(() => {
        menu.classList.add('overflow-visible');
        menu._showTimeout = null;
      }, 300);
    }

    document.addEventListener("click", function (e) {
  const menu = document.querySelector(".nav_menu_body");
  const toggle = document.querySelector(".nav_menu");
  if (!menu.contains(e.target) && !toggle.contains(e.target)) {
    menu.classList.remove("active");
  }
});


  </script>
</body>
</html>