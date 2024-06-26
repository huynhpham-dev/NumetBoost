<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content= "IE=edge">
    <meta name="description" content="Portfolio de Huynh PHAM -Developpeur Web">
    <title>Huynh PHAM - Developpeur backend </title>
    <link rel="shortcut icon" href="./image/favicon_io/android-chrome-192x192.png" type="image:x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/global.css">
    <script src="./js/global.js" async></script>

    </head>

    <body>

   <!-- Contenue du site- 1. Section Header -->
   <header class=" header ">
    <div class="container d-flex">
        <div class="logo">
            Huynh PHAM
        </div>
        <nav class="navbar">
            <ul class="menu list-unstyled" list >
                <li> <a href="#hero"> Accueil </a> </li>
                <li> <a href="#about"> A propos </a> </li>
                <li> <a href="#services"> Services </a> </li>
                <li> <a href="#skills"> Compétances </a> </li>
                <li> <a href="#portfolio"> Portfolio </a> </li>
                <li> <a href="https://huynhpham-dev.github.io/CV/"> Mon CV Github </a> </li>
                <li> <a href="#contact"> Contact </a> </li>
                           
            </ul>
        </nav>
       
        <div class="right">
         <!-- Social networks listes -->
            <ul class="socials list-unstyled">
                <li><a href="https://www.facebook.com/huynh52xd/?locale=fr_FR"><svg class="icon facebook"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg> </a></li>
                <li><a href="https://www.linkedin.com/in/xuan-huynh-pham-53b97a136/"><svg class="icon linkedin"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a></li>
                <li><a href="https://scholar.google.com/citations?user=lZQ6bkUAAAAJ&hl=fr"><svg class="icon google scholar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M390.9 298.5c0 0 0 .1 .1 .1c9.2 19.4 14.4 41.1 14.4 64C405.3 445.1 338.5 512 256 512s-149.3-66.9-149.3-149.3c0-22.9 5.2-44.6 14.4-64h0c1.7-3.6 3.6-7.2 5.6-10.7c4.4-7.6 9.4-14.7 15-21.3c27.4-32.6 68.5-53.3 114.4-53.3c33.6 0 64.6 11.1 89.6 29.9c9.1 6.9 17.4 14.7 24.8 23.5c5.6 6.6 10.6 13.8 15 21.3c2 3.4 3.8 7 5.5 10.5zm26.4-18.8c-30.1-58.4-91-98.4-161.3-98.4s-131.2 40-161.3 98.4L0 202.7 256 0 512 202.7l-94.7 77.1z"/></svg></a></li>
            </ul>
            <button class="burger"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/></svg>
            </button>
        </div>
    </div>
   </header>
<script>
    function menuMobile(){
    const btn = document.querySelector('.burger');

    const header = document.querySelector('.header');
    const links = document.querySelectorAll('.navbar a');

    btn.addEventListener('click', () => {

    header.classList.toggle('show-nav');
    });

    links.forEach(link => {
        link.addEventListener('click', () => {
        header.classList.remove('show-nav');
    });
    })

}
menuMobile();
</script>
 
    <section id="hero" class="hero"> 
     <!-- Contenue du site- 2. Section Hero -->
        <div class="container">
            <div class="grid">
                <div class="hero__item left">
                    <span>Appenti-Developpeur Web</span>
                    <h1 class="title"> Hello, je suis Huynh PHAM de Strasbourg</h1>
                    <p> Formation Num & Boost | Plate-forme numérique REGION GRAND EST <br> CCI Campus Strasbourg </p>
                </div> 
        
                <div class="hero__item right">
                    <div class="hero__avatar">
                        <img src="./image/Avatar.png" alt="Avatar Huynh PHAM -Developpeur Web freelance">
                     </div>
                </div> 
            </div>
        </div>
    </section>
  
<section id="about" class="about"> 
    <!-- Contenue du site- 3. Section About -->
    <div class="container">
        <div class="grid">
            <div class="grid__item">
                <img src="./image/Person.png" alt="Huynh PHAM -Developpeur Web freelance">
            </div> 
            <div class="grid__item">
               <h2 class="section-title">A propos</h2>
               <h3>Qui suis-je </h3>
               <p> Diplômé d'un <em>Doctorat</em> <br> en génie chimique/procédés, <br> je me tourne ensuite vers le développement informatique <br> et les thématiques liées au backend Web où DevOps. <br> Je suis à la recherche d'un contrat alternance <br> pour ma reconversion professionelle </p>
               
            </div> 
        </div>
    </div>
</section>

  
<section id="services" class="services">
 <!-- Contenue du site- 4. Section Services -->
    <div class="container">
        <div class="section-header">
        <h2 class="section-title">Mes services</h2>
        <p> dans le futur </p>
        </div>

        <div class="grid">
            <div class="services__item left">
                <div class="service">
                    <div class="service__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M297.2 248.9C311.6 228.3 320 203.2 320 176c0-70.7-57.3-128-128-128S64 105.3 64 176c0 27.2 8.4 52.3 22.8 72.9c3.7 5.3 8.1 11.3 12.8 17.7l0 0c12.9 17.7 28.3 38.9 39.8 59.8c10.4 19 15.7 38.8 18.3 57.5H109c-2.2-12-5.9-23.7-11.8-34.5c-9.9-18-22.2-34.9-34.5-51.8l0 0 0 0c-5.2-7.1-10.4-14.2-15.4-21.4C27.6 247.9 16 213.3 16 176C16 78.8 94.8 0 192 0s176 78.8 176 176c0 37.3-11.6 71.9-31.4 100.3c-5 7.2-10.2 14.3-15.4 21.4l0 0 0 0c-12.3 16.8-24.6 33.7-34.5 51.8c-5.9 10.8-9.6 22.5-11.8 34.5H226.4c2.6-18.7 7.9-38.6 18.3-57.5c11.5-20.9 26.9-42.1 39.8-59.8l0 0 0 0 0 0c4.7-6.4 9-12.4 12.7-17.7zM192 128c-26.5 0-48 21.5-48 48c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-44.2 35.8-80 80-80c8.8 0 16 7.2 16 16s-7.2 16-16 16zm0 384c-44.2 0-80-35.8-80-80V416H272v16c0 44.2-35.8 80-80 80z"/></svg>
                    </div>
                    <div class="service__content">
                        <h3> Gestion de projets Web </h3>
                        <p> à venir </p>
                    </div>
    
                </div>
                <div class="service">
                    <div class="service__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z"/></svg>
                    </div>
                    <div class="service__content">
                        <h3> Intégration Web </h3>
                        <p> à venir </p>
                    </div>
            
                </div> <div class="service">
                    <div class="service__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M78.6 5C69.1-2.4 55.6-1.5 47 7L7 47c-8.5 8.5-9.4 22-2.1 31.6l80 104c4.5 5.9 11.6 9.4 19 9.4h54.1l109 109c-14.7 29-10 65.4 14.3 89.6l112 112c12.5 12.5 32.8 12.5 45.3 0l64-64c12.5-12.5 12.5-32.8 0-45.3l-112-112c-24.2-24.2-60.6-29-89.6-14.3l-109-109V104c0-7.5-3.5-14.5-9.4-19L78.6 5zM19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L233.7 374.3c-7.8-20.9-9-43.6-3.6-65.1l-61.7-61.7L19.9 396.1zM512 144c0-10.5-1.1-20.7-3.2-30.5c-2.4-11.2-16.1-14.1-24.2-6l-63.9 63.9c-3 3-7.1 4.7-11.3 4.7H352c-8.8 0-16-7.2-16-16V102.6c0-4.2 1.7-8.3 4.7-11.3l63.9-63.9c8.1-8.1 5.2-21.8-6-24.2C388.7 1.1 378.5 0 368 0C288.5 0 224 64.5 224 144l0 .8 85.3 85.3c36-9.1 75.8 .5 104 28.7L429 274.5c49-23 83-72.8 83-130.5zM56 432a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/></svg>

                    </div>
                    <div class="service__content">
                        <h3> Développements spécifiques </h3>
                        <p> à venir </p>
                    </div>
            
                </div> <div class="service">
                    <div class="service__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>

                    </div>
                    <div class="service__content">
                        <h3> Référencement naturel </h3>
                        <p> à venir </p>
                    </div>
            
                </div>
            </div>
            <div class="services__item right">
                <div class="service">
                    <div class="service__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"/></svg>
                    </div>
                    <div class="service__content">
                        <h3> Conception graphique et Web designe </h3>
                        <p> à venir </p>
                    </div>
    
                </div>
                <div class="service">
                    <div class="service__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M105.1 202.6c7.7-21.8 20.2-42.3 37.8-59.8c62.5-62.5 163.8-62.5 226.3 0L386.3 160H352c-17.7 0-32 14.3-32 32s14.3 32 32 32H463.5c0 0 0 0 0 0h.4c17.7 0 32-14.3 32-32V80c0-17.7-14.3-32-32-32s-32 14.3-32 32v35.2L414.4 97.6c-87.5-87.5-229.3-87.5-316.8 0C73.2 122 55.6 150.7 44.8 181.4c-5.9 16.7 2.9 34.9 19.5 40.8s34.9-2.9 40.8-19.5zM39 289.3c-5 1.5-9.8 4.2-13.7 8.2c-4 4-6.7 8.8-8.1 14c-.3 1.2-.6 2.5-.8 3.8c-.3 1.7-.4 3.4-.4 5.1V432c0 17.7 14.3 32 32 32s32-14.3 32-32V396.9l17.6 17.5 0 0c87.5 87.4 229.3 87.4 316.7 0c24.4-24.4 42.1-53.1 52.9-83.7c5.9-16.7-2.9-34.9-19.5-40.8s-34.9 2.9-40.8 19.5c-7.7 21.8-20.2 42.3-37.8 59.8c-62.5 62.5-163.8 62.5-226.3 0l-.1-.1L125.6 352H160c17.7 0 32-14.3 32-32s-14.3-32-32-32H48.4c-1.6 0-3.2 .1-4.8 .3s-3.1 .5-4.6 1z"/></svg>

                    </div>
                    <div class="service__content">
                        <h3> Dynamisme des pages </h3>
                        <p> à venir </p>
                    </div>
            
                </div> <div class="service">
                    <div class="service__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 0a128 128 0 1 1 0 256A128 128 0 1 1 224 0zM178.3 304h91.4c11.8 0 23.4 1.2 34.5 3.3c-2.1 18.5 7.4 35.6 21.8 44.8c-16.6 10.6-26.7 31.6-20 53.3c4 12.9 9.4 25.5 16.4 37.6s15.2 23.1 24.4 33c15.7 16.9 39.6 18.4 57.2 8.7v.9c0 9.2 2.7 18.5 7.9 26.3H29.7C13.3 512 0 498.7 0 482.3C0 383.8 79.8 304 178.3 304zM436 218.2c0-7 4.5-13.3 11.3-14.8c10.5-2.4 21.5-3.7 32.7-3.7s22.2 1.3 32.7 3.7c6.8 1.5 11.3 7.8 11.3 14.8v17.7c0 7.8 4.8 14.8 11.6 18.7c6.8 3.9 15.1 4.5 21.8 .6l13.8-7.9c6.1-3.5 13.7-2.7 18.5 2.4c7.6 8.1 14.3 17.2 20.1 27.2s10.3 20.4 13.5 31c2.1 6.7-1.1 13.7-7.2 17.2l-14.4 8.3c-6.5 3.7-10 10.9-10 18.4s3.5 14.7 10 18.4l14.4 8.3c6.1 3.5 9.2 10.5 7.2 17.2c-3.3 10.6-7.8 21-13.5 31s-12.5 19.1-20.1 27.2c-4.8 5.1-12.5 5.9-18.5 2.4l-13.8-7.9c-6.7-3.9-15.1-3.3-21.8 .6c-6.8 3.9-11.6 10.9-11.6 18.7v17.7c0 7-4.5 13.3-11.3 14.8c-10.5 2.4-21.5 3.7-32.7 3.7s-22.2-1.3-32.7-3.7c-6.8-1.5-11.3-7.8-11.3-14.8V467.8c0-7.9-4.9-14.9-11.7-18.9c-6.8-3.9-15.2-4.5-22-.6l-13.5 7.8c-6.1 3.5-13.7 2.7-18.5-2.4c-7.6-8.1-14.3-17.2-20.1-27.2s-10.3-20.4-13.5-31c-2.1-6.7 1.1-13.7 7.2-17.2l14-8.1c6.5-3.8 10.1-11.1 10.1-18.6s-3.5-14.8-10.1-18.6l-14-8.1c-6.1-3.5-9.2-10.5-7.2-17.2c3.3-10.6 7.7-21 13.5-31s12.5-19.1 20.1-27.2c4.8-5.1 12.4-5.9 18.5-2.4l13.6 7.8c6.8 3.9 15.2 3.3 22-.6c6.9-3.9 11.7-11 11.7-18.9V218.2zm92.1 133.5a48.1 48.1 0 1 0 -96.1 0 48.1 48.1 0 1 0 96.1 0z"/></svg>

                    </div>
                    <div class="service__content">
                        <h3> Interface d'administration </h3>
                        <p> à venir </p>
                    </div>
            
                </div> <div class="service">
                    <div class="service__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z"/></svg>

                    </div>
                    <div class="service__content">
                        <h3> Responsive design </h3>
                        <p> à venir </p>
                    </div>
            
                </div>
    
            </div>
        </div>
    </div>
</section>

 
<section id="skills" class="skills">
    <!-- Contenue du site- 5. Section Skills -->

    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Mes compétances</h2>
            <p> Petit text </p>
        </div>

        <div class="grid">
            <div class="grid__item">
                <h3>Domaines de compétances </h3>
                <ul class="list-unstyled">
                    <li>
                        <h4> Développement Web</h4>
                        <p> Débutant avec des connaisances de bases de HTML, CSS, JavaScript, <br> Git/Github PHP and mySQL</p>
                    </li>
                    <li>
                        <h4> Génie Chimique et procédés</h4>
                        <p> Expert, ingénieur de recherche avec 6 ans d'expérience</p>
                    </li>
                    <li>
                        <h4> Sciences des materials et catalyse</h4>
                        <p> Ingénieur sénior avec 4 ans d'expérience</p>
                    </li>
                    <li>
                        <h4> Génie Civil </h4>
                        <p> Ingénieur Design 2D et Conception</p>
                    </li>
                  
                </ul>
            </div>
            <div class="grid__item">
                <h3> Compétances en développement </h3>
                <div class=" progressbar">
                    <div class="bar" style="width:75%"> HTML</div>
                </div>
                <div class=" progressbar">
                    <div class="bar" style="width:50%"> CSS</div>
                </div>
                <div class=" progressbar">
                    <div class="bar"style="width:20%"> JavaScript </div>
                </div>
                <div class=" progressbar">
                    <div class="bar" style="width:25%"> PHP </div>
                </div>
                <div class=" progressbar">
                    <div class="bar" style="width:15%"> MySQL</div>
                </div>
                <div class=" progressbar">
                    <div class="bar" style="width:35%"> Git/Github</div>
                </div>
        

                <h3> Compétances en conception graphique </h3>
           
                <div class=" progressbar">
                    <div class="bar" style="width:10%"> Figma </div>
                </div>
                <div class=" progressbar">
                    <div class="bar" style="width:75%"> SketchUp</div>
                </div>

                <div class=" progressbar">
                    <div class="bar" style="width:85%"> AutoCAD</div>
                </div>
                <div class=" progressbar">
                    <div class="bar" style="width:95%"> Powerpoint</div>
                </div>
                      
            </div>

                   
        </div>
    </div>
</section>

<section id="portfolio" class="portfolio">
    <!-- Contenue du site- 6. Section Portfolio --> 
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Portfolio</h2>

        </div>

        <ul class="grid portfolio-filters list-unstyled">
            <li class="grid__item">
                <a href="#" class="active">Tous les projets</a>
            </li>
            <li class="grid__item">
                <a href="#">CV online</a>
            </li>
            <li class="grid__item">
                <a href="#">Developpement Web</a>
            </li>
    
        </ul>
        <div class="grid">
            <div class="grid__item">
                <div class="card">
                    <img src="./image/CV.png" alt="CV online" width="100%">
                    <div class="card__inner">
                        <h2 class="card__title">CV online</h2>
                        <p class="category"> HTML CSS </p>
                    </div>
                    <div class="card__overlay">
                        <a href="https://huynhpham-dev.github.io/CV/">+</a>
                    </div>
                </div>
            </div>
        
             <div class="grid__item">
                <div class="card">
                    <img src="./image/SakiNails.jpg" alt="Saki Nails & Beauty" width="100%">
                    <div class="card__inner">
                        <h2 class="card__title">Saki Nails & Beauty</h2>
                    <p class="category"> Développement Web par WordPress Theme </p>
                    </div>
                    <div class="card__overlay">
                        <a href="https://www.sktthemes.org/shop/nail-salon-wordpress-theme">+</a>
                    </div>
                </div>
            </div>
        
   
            <div class="grid__item">
                <div class="card">
                    <img src="./image/Sakishop.jpg" alt="Saki shop" width="95%">
                    <div class="card__inner">
                        <h2 class="card__title">Saki AUTHENTIC SHOP</h2>
                        <p class="category"> Développement Web par Webflow</p>
                    </div>
                    <div class="card__overlay">
                        <a href="#">+</a>
                    </div>
                 </div>
    
            </div>
    
    
            
        
        </div>
    </div>
</section>

<section id="contact" class="contact"> 
    <!-- Contenue du site- 7. Section Contact --> 
    <div class="container">
        <div class="section-header">
        <h2 class="section-title">Contact</h2>
    </div>
    <!-- PHP Contact file -->
<?php
include 'db-contact.php'; 
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = "";
$name = $email = $gender = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $namevalide="/^[a-zA-Z-' ]*$/";


  if (empty($_POST["name"])) {    
            $nameErr = "Name is required";
        } elseif (strlen($_POST["name"]) >=20) {
            $nameErr = "Name must be less than 20 characters";
        } elseif (!preg_match($namevalide, $_POST["name"])) {
            $nameErr = "Name Must only contain letters and whitespace";
        } else {
            $name = test_input($_POST["name"]);
        }
         
  if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
             $emailErr = "Invalid email format";
        } else {
             $email = test_input($_POST["email"]);
        }
    
  if (empty($_POST["website"])) { 
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
        }

  if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }


if(!empty($name) && !empty($email)) {
    // insert Data to Database only when name and email are provided correctly
    $sql = "INSERT INTO `users-data`(`Name`,`Email`,`Website`, `Comment`) VALUES ('$name','$email','$website', '$comment')";
    if ($conn->query($sql)===true) {echo "Ok"; }
    else {echo "Error {$sql}".$conn->error;}

    // Sending mail
    
    $desinataire='huynh52xd@gmail.com';
    $sujet='Test MailNum&Boost';
    $contenu="<html> <body> <p>$name</p> <br> <p>$email</p> <br> <p>$website</p> <br> <p>$comment</p> </body> </html>";
    $header= "From:.$desinataire\n";
    $header.= "Content.type:text/html; charset=UTF-8";

//         // Test 
//         // }}
//         // echo "<pre>";
//         // print_r($contenu);

        $mail=mail ($desinataire,$sujet,$contenu,$header);
    
        if ($mail){
    //  echo " <p class='success' > 'Votre message a été envoyé' </p>;
    echo "
    <script>
    if (confirm('Votre message a été envoyé. Voulez-vous télécharger mon CV ?')) {
        window.location.href = 'https://huynhpham-dev.github.io/CV/';
    } else {
        alert('Vous avez choisi de NE pas télécharger le CV. Merci pour votre visite et à la prochaine fois');
    }
    </script>




    </script> ";
    } 
    else {
    echo "failed";
    }

}



}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;


  
}



?>
<p><span class="error">* required field</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website">
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>

  <input type="submit" name="submit" value="Submit">  
</form>

</section>





<footer>
<div class="container">
    <div class="grid">
        <div class="grid__item">
            <p>Huynh PHAM</p>
        </div>
        <div class="grid__item">
            <ul class="socials list-unstyled">
                <li><a href="https://www.facebook.com/?locale=fr_FR"><svg class="icon facebook" width="18" height="18"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg> </a></li>
                <li><a href="https://www.linkedin.com/in/xuan-huynh-pham-53b97a136/"><svg class="icon linkedin" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a></li>
                <li><a href="https://scholar.google.com/citations?user=lZQ6bkUAAAAJ&hl=fr"><svg class="icon google scholar" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M390.9 298.5c0 0 0 .1 .1 .1c9.2 19.4 14.4 41.1 14.4 64C405.3 445.1 338.5 512 256 512s-149.3-66.9-149.3-149.3c0-22.9 5.2-44.6 14.4-64h0c1.7-3.6 3.6-7.2 5.6-10.7c4.4-7.6 9.4-14.7 15-21.3c27.4-32.6 68.5-53.3 114.4-53.3c33.6 0 64.6 11.1 89.6 29.9c9.1 6.9 17.4 14.7 24.8 23.5c5.6 6.6 10.6 13.8 15 21.3c2 3.4 3.8 7 5.5 10.5zm26.4-18.8c-30.1-58.4-91-98.4-161.3-98.4s-131.2 40-161.3 98.4L0 202.7 256 0 512 202.7l-94.7 77.1z"/></svg></a></li>
            </ul>
        </div>
        <div class="grid__item">
            <p>Copyright</p>
        </div>
    </div>
</div>    
</footer>
</body>
</html>
