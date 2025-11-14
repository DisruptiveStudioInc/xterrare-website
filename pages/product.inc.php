<?php require('./controllers/productController.php'); ?>

<!-- ============================================== -->
<!-- ONE -->
<!-- ============================================== -->

<section>
  <div class="block-box-bg overlay o-30">
    <div class="mw-1440 jc-center ai-center dh-100 small-fd-col-rev g-80 med-g-0 small-g-20 p-30">

      <div class="info w-60 med-w-50 small-w-100 small-t-c">
        <h1 class="h1-special tc-0"><?= $productContent[$id]['subtitle']; ?></h1>
        <p class="h3 tc-0 t-balance"><?= $productContent[$id]['text1']; ?></p>
        <p class="tc-0 mb-20 t-balance small-d-none"><?= $productContent[$id]['text2']; ?></p>
        <p class="h2 fw-700 tc-acc"><?= $productContent[$id]['price']; ?></p>

        <div class="btns g-10 small-jc-center">
          <?php if($user_replica): ?>
            <div class="wrap-get subpage">
              <a href="<?= $Register; ?>" target="_blank" class="btn-get"><?= $Btn_buy; ?></a>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <img class="w-40 med-w-50 small-w-80 small-mt-40" src="./images/body/products/<?= $productContent[$id]['icon']; ?>.webp" alt="<?= $productContent[$id]['id']; ?> Product" />
    </div>
    <img class="full-img-abs" src="./images/body/subpage/bg_<?= $productContent[$id]['id']; ?>.webp" alt="<?= $productContent[$id]['id']; ?> background" />
  </div>
</section>

<!-- ============================================== -->
<!-- ONE -->
<!-- ============================================== -->

<section class="c-sub <?= $productContent[$id]['id']; ?>">
  <div class="h-100 of-h rel small-h-0 p-20 d-flex fd-col ai-center jc-center">

    <h2 class="abs-text h1 t-c uppercase mb-40 small-mb-20 <?= $productContent[$id]['ingredients_textCl']; ?>"><?= $productContent[$id]['ingredients']; ?></h2>
    <div class="rel w-100">
      <img class="img-middle br-20 small-d-none" src="./images/body/products/<?= $productContent[$id]['ingredients_image']; ?>.webp" alt="<?= $productContent[$id]['id']; ?> Product" />

      <div class="ingredients_wrap">
        <ul class="ingredients m-center">
          <?php foreach ($productContent[$id]['ingredients_list'] as $k => $ingredient): ?>
            <li>
              <div class="ingredient-pill" style="--pill-delay: <?= 100 * $k; ?>ms;">
                <span class="v-custom icon icon-<?= $k+1; ?> c-<?= $productContent[$id]['id']; ?> br-50 <?= $productContent[$id]['id']; ?>"></span>
                <?= $ingredient; ?>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

  </div>
</section>

<!-- ============================================== -->
<!-- TWO -->
<!-- ============================================== -->

<section>
  <div class="img_med of-h">
    <div class="h-100 rel all-tc-0 overlay o-60 custom">
      <div class="center">
        <h2 class="h1 uppercase"><?= $Benefits; ?></h2>
        <p><?= $productContent[$id]['benefits_sub']; ?></p>
        <p><?= $Benefits_Text ; ?></p>
      </div>

      <ul class="benefits-list med-d-none">
        <?php
        $titles = $productContent[$id]['benefits_titles'] ?? [];
        $benefits = $productContent[$id]['benefits_list']  ?? [];

        foreach ($titles as $index => $title) {
          // Cada título tiene su correspondiente descripción en $benefits
          $desc = $benefits[$index + 1] ?? ''; // +1 porque en $Benefits_list_map, el primer elemento es el título
          ?>
          <li class="benefits b-<?= $index + 1; ?>">
            <span class="v-custom icon icon-<?= 7 + $index; ?> <?= $productContent[$id]['id']; ?> i-big"></span>
            <h4 class="uppercase t-pretty"><?= $title; ?></h4>
            <p class="t-balance"><?= $desc; ?></p>
          </li>
        <?php } ?>
      </ul>

      <img class="full-img" src="./images/body/subpage/bg_middle_<?= $productContent[$id]['id']; ?>.webp" alt="<?= $productContent[$id]['id']; ?>">

    </div>
  </div>
</section>

<!-- ============================================== -->
<!-- THREE -->
<!-- ============================================== -->

<section>
	<div class="mw-1280 min-h-dhv jc-center g-40 fd-col pt-80 pb-80 med-pt-50 med-pb-50">

		<div class="t-c">
      <h2 class="h2 uppercase"><?= $productContent[$id]['started_title']; ?></h2>
      <p class="h4"><?= $productContent[$id]['started_sub']; ?></p>
    </div>

    <div class="jc-center g-20 ai-stretch small-fd-col">
      <div class="w-100 rel">
        <div class="banner" style="position:sticky;top:80px;">
          <ul>
            <?php
              $Service = array(
                array('Designed to support your body’s natural rhythms—cognitive, physical, and hormonal—24 hours a day.','Sofía R.',$id),
                array('I can focus for hours without getting burned out. Revive works.','Leo M.',$id),
                array('In one week, my memory and mental energy improved','Andrea T.',$id)
              );

              foreach ($Service as $k => $item){
                $item_img_key = $k+1;
                echo "
                <li>
                  <img src='./images/body/banner/{$item_img_key}.webp' alt='{$item[0]}'/>
                </li>
                ";
              }
            ?>
          </ul>
        </div>
      </div>
      <!-- Textos dinámicos -->
      <div class="w-100 text_spirit <?= $productContent[$id]['id']; ?>">
        <?php foreach($productContent[$id]['started_list'] as $item): ?>
          <div>
            <h3 class="h4"><?= $item['title']; ?></h3>
            <p><?= $item['text']; ?></p>
          </div>
        <?php endforeach; ?>
        <p class="fw-700 mt-30"><?= $productContent[$id]['started_foot']; ?></p>
      </div>
    </div>

	</div>
</section>

<section class="c-<?= $productContent[$id]['id']; ?>">
  <div class="mw-1280 t-c big">
    <h2 class="h1-special uppercase med-mt-50"><?= $productContent[$id]['subpage']; ?></h2>
    <?php if(false): ?>
      <a href="<?= $Login; ?>" target="_blank" class="btn big c-acc br-50 mt-40 small-mt-20"><?= $Btn_start; ?></a>
    <?php endif; ?>
  </div>
</section>

<script>

/* ============================================== */
/* SCROLL-MAGIC */
/* ============================================== */

document.addEventListener("DOMContentLoaded", function() {

    // Solo ejecutar si ancho >= 1080px
    if (window.innerWidth >= 1080) {

        // Función para cargar scripts dinámicamente
        function loadScript(src) {
            return new Promise((resolve, reject) => {
                const script = document.createElement('script');
                script.src = src;
                script.onload = resolve;
                script.onerror = reject;
                document.head.appendChild(script);
            });
        }

        // Cargar librerías en orden
        Promise.all([
            loadScript("https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"),
            loadScript("https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/ScrollMagic.min.js")
        ])
        .then(() => Promise.all([
            loadScript("https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/plugins/animation.gsap.min.js"),
            loadScript("https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js")
        ]))
        .then(() => {

            var controller = new ScrollMagic.Controller();
            var animationSpeed = 0.75;
            var animationLinear = Power3.easeInOut;
            var animationIn = Expo.easeIn;

            $('.ingredients_wrap').each(function() {
                var ingredientsElement = this.querySelector('.ingredients');
                if (ingredientsElement) {
                    var scene = new ScrollMagic.Scene({
                        triggerElement: this,
                        triggerHook: 0.8,
                        duration: "80%"
                    })
                    .setClassToggle(ingredientsElement, 'fade-in')
                    //.addIndicators()
                    .addTo(controller);
                }
            });

            new ScrollMagic.Scene({
                triggerElement: '.img_med',
                duration: "150%",
                triggerHook: 1
            })
            .setTween(
                new TimelineMax()
                .fromTo('.img_med img', 1, { y: "-20%" }, { y: "3%" })
                )
            //.addIndicators()
            .addTo(controller);

        });

    }

});


/* ============================================== */
/* BANNER */
/* ============================================== */

document.addEventListener("DOMContentLoaded", () => {
  const slides = document.querySelectorAll(".banner li");
  let current = 0;
  let interval;

  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.classList.remove("active", "fade-out");
      if (i === index) slide.classList.add("active");
    });
  }

  function nextSlide() {
    slides[current].classList.add("fade-out"); // Fade-out texto antes de salir
    setTimeout(() => {
      current = (current + 1) % slides.length;
      showSlide(current);
    }, 600);
  }

  function startSlider() {
    interval = setInterval(nextSlide, 4000); // cada 4s
  }

  function stopSlider() {
    clearInterval(interval);
  }

  // Inicialización
  showSlide(current);
  startSlider();

  // Detener al hacer hover
  const banner = document.querySelector(".banner");
  banner.addEventListener("mouseenter", stopSlider);
  banner.addEventListener("mouseleave", startSlider);
});

/* ============================================== */
/* TILT */
/* ============================================== */

const imgContainer = document.querySelector('.c-sub .h-100');
const img = document.querySelector('.c-sub .img-middle');

imgContainer.addEventListener('mousemove', (e) => {
    const rect = imgContainer.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    const centerX = rect.width / 2;
    const centerY = rect.height / 2;

    const deltaX = (x - centerX) / centerX; // -1 a 1
    const deltaY = (y - centerY) / centerY; // -1 a 1

    // inclinación
    const rotateX = deltaY * 15;
    const rotateY = deltaX * -15;

    img.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.05)`;
});

imgContainer.addEventListener('mouseleave', () => {
    img.style.transform = 'rotateX(0deg) rotateY(0deg) scale(1)';
});


</script>



