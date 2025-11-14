<!-- ============================================== -->
<!-- HERO -->
<!-- ============================================== -->

<section class="hero-pin d-flex fd-col jc-center ai-center overlay o-40">
  <div class="anchor" id="home"></div>

  <div class="dh of-h rel">
    <div class="video-placeholder h-full">
      <img class="background visible" src="./images/body/letters/2.webp" alt="Placeholder" />
    </div>

    <div class="video-iframe-wrapper">
      <iframe
        src="https://player.vimeo.com/video/<?= $Video_vimeo; ?>?background=1&autoplay=1&muted=1&loop=1"
        frameborder="0"
        allow="autoplay; fullscreen; picture-in-picture"
        title="Darevita video agosto 2025_1">
      </iframe>
    </div>
  </div>

  <div class="text-hero t-c hero-text">
    <h1 class="h1-hero t-balance"><?= $Hero_01; ?></h1>
    <p class="h4 w-50 med-w-80 small-w-100 m-center"><?= $Hero_02; ?></p>
  </div>

  <div class="section-arrows">
    <button class="arrow down"></button>
	</div>

</section>

<!-- ============================================== -->
<!-- ABOUT -->
<!-- ============================================== -->

<section id="exterrare">
  <div class="section-arrows">
    <button class="arrow up"></button>
    <button class="arrow down"></button>
  </div>

  <div class="about-container min-h-dhv d-flex med-fd-col">
    <?php foreach($aboutSec as $item): ?>
      <article class="about-article d-flex fd-col jc-center ai-center g-20 p-40 rel">
        <img src="./images/body/about/<?= $item['image'] ?>" alt="" class="background visible">
        <h2 class="about-title h2 t-c z-index-2"><?= $item['title']; ?></h2>
        <div class="wrap-scroll-h z-index-2">
          <div class="of-h">
            <?php if (isset($item['text'])): ?>
              <p class="h5 about-text t-balance t-c tc-0"><?= $item['text']; ?></p>
            <?php elseif (isset($item['list'])): ?>
              <ul class="about-text menu-list icon-check v-white">
                <?php foreach($item['list'] as $listItem): ?>
                  <li class="h5 tc-0"><?= $listItem; ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<!-- ============================================== -->
<!-- ONE -->
<!-- ============================================== -->

<section>

	<div class="section-arrows">
	    <button class="arrow up"></button>
	    <button class="arrow down"></button>
	</div>

	<div class="mw-1440 jc-center ai-center min-h-dhv">
		<div class="t-c">
			<h2 class="h1-special mb-50 med-mb-0"><?= $Journey_title; ?></h2>
      <div class="tabs t-c">
        <nav class="tab-header">
          <?php foreach($sec01 as $k => $step): ?>
            <div class="tab <?= $k === 0 ? 'active' : '' ?> t-pretty"><span>0<?= $k+1 ?></span><?= $step['title'] ?></div>
          <?php endforeach; ?>
          <div class="active-indicator med-d-none"></div>
        </nav>
      </div>
      <div class="tab-content">
        <?php foreach($sec01 as $k => $step): ?>
          <p class="content <?= $k === 0 ? 'active' : '' ?>" data-text="<?= $step['text'] ?>"><?= $step['text'] ?></p>
        <?php endforeach; ?>
      </div>
		</div>
	</div>
</section>

<!-- ============================================== -->
<!-- TWO -->
<!-- ============================================== -->

<section class="rel c-b-dark">

	<div class="h-100 vertical-slides rel of-h small-h-0 letters" style="--total-items:4">
    <div class="section-arrows">
      <button class="arrow up"></button>
      <button class="arrow down"></button>
    </div>
    <?php foreach($verticalSlides as $k => $slide): ?>
		<div class="letter-wrap" style="--item-index:<?= $k; ?>">
      <img class="letter-bg img_0<?= $slide['id']; ?>" src="./images/body/letters/<?= $slide['id']; ?>.webp" alt="<?= $slide['title']; ?>">
      <div class="letter-content word_0<?= $slide['id']; ?> abs w-100 p-40 med-p-10-20 med-pt-50 med-pb-50 t-c">
        <h3 class="letter-title t-balance tc-0"><?= $slide['title']; ?></h3>
        <p class="h4 letter-text t-balance h3 tc-0"><?= $slide['text']; ?></p>
      </div>
		</div>
    <?php endforeach; ?>
	</div>
</section>

<!-- ============================================== -->
<!-- THREE -->
<!-- ============================================== -->

<section class="parallax-wrap">

	<div class="section-arrows">
	    <button class="arrow up"></button>
	    <button class="arrow down"></button>
	</div>

	<div class="mw-1440 t-c h-100 med-h-0 fd-col jc-center ai-center parallax">
		<h2 class="h1-special short mt-0 mb-40 small-mb-20"><?= $Vision_text; ?></h2>
    <ul class="mw-1080 p-0 d-flex fw-wrap jc-center g-40 med-g-20">
      <?php foreach($sec03 as $k => $item): ?>
        <li class="box rel d-flex fd-col jc-center ai-center g-10 p-30 med-p-20 br-20 w-100 c-light box_<?= $item['id']; ?>">
          <h3 class="box-title h3 m-0"><?= $item['title']; ?></h3>
          <p class="h5 m-0 t-balance"><?= $item['text']; ?></p>
        </li>
      <?php endforeach; ?>
    </ul>
	</div>
</section>

<!-- ============================================== -->
<!-- FOUR -->
<!-- ============================================== -->

<section class="c-light">
	<div class="section-arrows">
    <button class="arrow up"></button>
    <button class="arrow down"></button>
	</div>

  <div class="mw-1280 t-c h-100 med-h-0 jc-center fd-col">
		<h2 class="h1-special t-balance"><?= $Slogan_title; ?></h2>
		<p class="h3">“<?= $Slogan_text; ?>”</p>
		<a href="<?= $Login; ?>" class="btn big c-sec br-50 mt-40 small-mt-20"><?= $Btn_live; ?></a>
	</div>
</section>

<!-- ============================================== -->
<!-- FIVE -->
<!-- ============================================== -->

<?php include("includes/productSecFx.php"); ?>

<!-- ============================================== -->
<!-- SIX -->
<!-- ============================================== -->

<section class="deg">
	<div class="wrap-people min-h-dhv d-flex fd-col jc-center ai-center">
		<div class="mw-1440 p-30 mb-40">
			<h2 class="h1-special t-c tc-pri"><?= $Testimonials_title; ?></h2>
		</div>

    <ul class="people" style="--total-items:<?= count($testimonials) ?>;">
      <?php foreach ($testimonials as $k => $item): ?>
        <li class='item item<?= $item['id'] ?>' style='--item-index:<?= $k +1 ?>'>
          <img src='./images/body/evolvers/<?= $item['id'] ?>.webp' alt='<?= $item['name'] ?>'>
          <h3 class="h5 tc-pri"><?= $item['name'] ?></h3>
          <p><?= $item['text'] ?></p>
        </li>
      <?php endforeach; ?>
    </ul>

	</div>
</section>

<!-- ============================================== -->
<!-- SEVEN -->
<!-- ============================================== -->

<section class="c-pri">

	<div class="section-arrows">
	    <button class="arrow up"></button>
	    <button class="arrow down"></button>
	</div>

	<div class="rel">
		<ul class="textos">
      <?php foreach($sec07 as $item): ?>
        <li class="">
          <h2 class="h1 tc-sec"><?= $item['title']; ?></h2>
          <span>
            <img src="./images/body/truth/<?= $item['id']; ?>.webp" alt="<?= $item['title']; ?>" class="" loading="lazy"/>
            <p class="h4 t-pretty"><?= $item['text']; ?></p>
          </span>
        </li>
      <?php endforeach; ?>
		</ul>
	</div>
</section>

<!-- ============================================== -->
<!-- EIGHT -->
<!-- ============================================== -->

<section class="c-light">

	<div class="section-arrows">
	    <button class="arrow up"></button>
	    <button class="arrow down"></button>
	</div>

		<div class="mw-1280 jc-center min-h-dhv med-h-0 g-40 ai-center med-fd-col">

			<div class="img_spirit med-d-none">
        <?php foreach($sec08 as $item): ?>
				<span class="img_product">
					<div class="product_wrapper">
						<img src="./images/body/the_spirit/circle/<?= $item['id']?>.webp" class="img_reference" alt="<?= $item['name']?>" loading="lazy"/>
						<img src="./images/body/the_spirit/<?= $item['id']?>.webp" class="product" alt="<?= $item['name']?>" loading="lazy"/>
					</div>
				</span>
        <?php endforeach; ?>
			</div>

			<img src="./images/body/the_spirit/benefits.webp" class="mw-500 m-center med-d-block d-none" alt="all products" loading="lazy"/>

			<!-- Textos -->
			<div class="text_spirit">
				<h2 class="h2  med-t-c"><?php echo $Spirit_title; ?></h2>
        <?php foreach($sec08 as $item): ?>
          <div class="text_<?= $item['id']?>">
            <p class="h5 fw-300 tc-pri d-flex ai-center g-10">
              <svg width="24" height="24" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.7 37.7L41 15.4C41.8 14.6 41.8 13.4 41 12.6C40.2 11.8 39 11.8 38.2 12.6L18.7 32.1L11.4 24.8C10.6 24 9.4 24 8.6 24.8C7.8 25.6 7.8 26.8 8.6 27.6L18.7 37.7Z" fill="currentcolor"/>
              </svg>
              <?= $item['text']?>
            </p>
          </div>
        <?php endforeach; ?>
			</div>


	</div>
</section>

<!-- ============================================== -->
<!-- NINE -->
<!-- ============================================== -->

<section class="c-sec">

	<div class="section-arrows">
	    <button class="arrow up"></button>
      <button class="arrow down"></button>
	</div>

	<div class="mw-1440 t-c big">
		<h1 class="h1-special short  m-center tc-0 m-0"><?= $Traits_title; ?></h1>
    <?php if($user_replica): ?>
		  <a href="<?= $Register; ?>" target="_blank" class="btn big c-ter br-50 mt-40 small-mt-20"><?= $Btn_part; ?></a>
    <?php endif; ?>
	</div>
</section>

<script src="./js/slider.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {

/* ============================================== */
/* VIDEO HERO */
/* ============================================== */

document.addEventListener("DOMContentLoaded", function () {
    const iframe = document.querySelector('.video-iframe-wrapper iframe');
    const player = new Vimeo.Player(iframe);
    const placeholder = document.querySelector('.video-placeholder');

    // Cuando el video empieza a reproducirse, ocultamos el placeholder
    player.on('play', function () {
        placeholder.style.transition = "opacity 0.8s ease";
        placeholder.style.opacity = "0";
        setTimeout(() => placeholder.style.display = "none", 800);
    });
});

/* ============================================== */
/* TABS */
/* ============================================== */

const tabs = document.querySelectorAll('.tab');
const contents = document.querySelectorAll('.content');
const indicator = document.querySelector('.active-indicator');

function typeWriterEffect(element, text, speed = 30) {
  element.textContent = '';
  let i = 0;
  function type() {
    if (i < text.length) {
      element.textContent += text.charAt(i);
      i++;
      setTimeout(type, speed);
    }
  }
  type();
}

tabs.forEach((tab, index) => {
  tab.addEventListener('click', () => {
    tabs.forEach(t => t.classList.remove('active'));
    contents.forEach(c => c.classList.remove('active'));

    tab.classList.add('active');
    const content = contents[index];
    content.classList.add('active');

    const text = content.getAttribute('data-text') || '';
    typeWriterEffect(content, text);

    indicator.style.transform = `translateX(${tab.offsetLeft}px)`;
    indicator.style.width = `${tab.offsetWidth}px`;
  });
});

window.addEventListener('load', () => {
  const activeTab = document.querySelector('.tab.active');
  const activeContent = document.querySelector('.content.active');

  indicator.style.transform = `translateX(${activeTab.offsetLeft}px)`;
  indicator.style.width = `${activeTab.offsetWidth}px`;

  const text = activeContent.getAttribute('data-text') || '';
  typeWriterEffect(activeContent, text);
});

    /* ==============================================
       SCROLL-MAGIC SOLO DESKTOP
    ============================================== */
    if(window.innerWidth >= 1080){

        function loadScript(src){
            return new Promise((resolve, reject) => {
                const script = document.createElement('script');
                script.src = src;
                script.onload = resolve;
                script.onerror = reject;
                document.head.appendChild(script);
            });
        }

        // Cargar librerías
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
            var animationInOutQuart = Expo.easeInOutQuart;
            var animationIn = Expo.easeIn;

            // ========== GALLERY
            var textoTimeline = new TimelineMax();
            textoTimeline
                .fromTo('.word_01', animationSpeed, {opacity:1, scale:1}, {opacity:0, scale:4, ease:animationLinear, immediateRender:false})
                .fromTo('.word_02', animationSpeed, {opacity:0, scale:1}, {opacity:1, scale:1, ease:animationLinear, immediateRender:false})
                .to('.word_02', animationSpeed, {opacity:0, scale:4, ease:animationLinear})
                .fromTo('.word_03', animationSpeed, {opacity:0, scale:1}, {opacity:1, scale:1, ease:animationLinear, immediateRender:false})
                .to('.word_03', animationSpeed, {opacity:0, scale:4, ease:animationLinear})
                .fromTo('.word_04', animationSpeed, {opacity:0, scale:1}, {opacity:1, scale:1, ease:animationLinear, immediateRender:false})
                .to('.word_04', animationSpeed, {opacity:0, scale:4, ease:animationLinear})
                .fromTo('.word_05', animationSpeed, {opacity:0, scale:1}, {opacity:1, scale:1, ease:animationLinear, immediateRender:false});

            var imgTimeline = new TimelineMax();
            imgTimeline
                .fromTo('.img_01', animationSpeed, {opacity: 1}, {opacity: 0, ease: animationLinear, immediateRender: false}, animationSpeed * 0.25)
                .fromTo('.img_02', animationSpeed, {opacity: 1}, {opacity: 0, ease: animationLinear, immediateRender: false}, animationSpeed * 2.25)
                .fromTo('.img_03', animationSpeed, {opacity: 1}, {opacity: 0, ease: animationLinear, immediateRender: false}, animationSpeed * 4)
                .fromTo('.img_04', animationSpeed, {opacity: 1}, {opacity: 0, ease: animationLinear, immediateRender: false}, animationSpeed * 5.75)
                .fromTo('.img_05', animationSpeed, {opacity: 1}, {opacity: 1, ease: animationLinear, immediateRender: false}, animationSpeed * 7);

            var master = new TimelineMax();
            master.add(textoTimeline, 0);
            master.add(imgTimeline, 0);

            new ScrollMagic.Scene({
                triggerElement: '.vertical-slides',
                duration: '300%',
                triggerHook: 0
            })
            .setPin('.vertical-slides')
            .setTween(master)
            //.addIndicators()
            .addTo(controller);

            // ========== HERO
            var heroTimeline = new TimelineMax();
            heroTimeline.fromTo('.hero-text', animationSpeed, {opacity:0}, {opacity:1}, "+=0.5");

            new ScrollMagic.Scene({
                triggerElement: '.hero-pin',
                duration: '100%',
                triggerHook: 0
            })
            .setPin('.hero-pin')
            .setTween(heroTimeline)
            //.addIndicators()
            .addTo(controller);

            // ========== PARALLAX
            var parallaxTimeline = new TimelineMax();
            parallaxTimeline
                .from('.parallax .box_1',
                  animationSpeed,
                  { scale: 1.2, x:"-100", y:"-10", opacity:0, ease:animationIn })
                .from('.parallax .box_2',
                  animationSpeed,
                  { scale: 1.2, x:"100", y:"-10", opacity:0, ease:animationIn },0)
                .from('.parallax .box_3',
                  animationSpeed,
                  { scale: 1.2, x:"-100", y:"30", opacity:0, ease:animationIn },0)
                .from('.parallax .box_4',
                  animationSpeed,
                  { scale: 1.2, x:"100", y:"30", opacity:0, ease:animationIn },0);

            new ScrollMagic.Scene({
                triggerElement: '.parallax',
                duration: "50%",
                triggerHook: 0.65
            })
            //.setPin('.parallax')
            .setTween(parallaxTimeline)
            //.addIndicators()
            .addTo(controller);

            // ========== LICENSES
            var licensesTimeline = new TimelineMax();
            licensesTimeline
              .from('.licence-title', animationSpeed, {scale:2, y:200})
              .staggerFrom('.licence-text', animationSpeed, {y: 40, opacity:0}, 0.2)
              .staggerFrom('.licence-box', animationSpeed, {x: 80, opacity:0}, 0.2);

            new ScrollMagic.Scene({
              triggerElement: '.licence-wrap',
              duration: "200%",
              triggerHook: 0
            })
            .setPin('.licence-wrap')
            .setTween(licensesTimeline)
            .addTo(controller);

            // ========== CONTENT SCROLL (jQuery solo si existe)
            if(window.jQuery) {
                $('.products').each(function(){
                    var totalProducts = document.querySelectorAll('.box_product').length;
                    if(totalProducts <= 1) return;
                    var productsElement = this.querySelector('.wrap_products');
                    if(productsElement){
                        new ScrollMagic.Scene({
                            triggerElement: this,
                            triggerHook: 0.2,
                            duration: "80%"
                        })
                        .setClassToggle(productsElement, 'fade-in')
                        //.addIndicators()
                        .addTo(controller);
                    }
                });
            }

            // ========== EVOLVERS
            var EVO = new TimelineMax();
            EVO.fromTo('.evolvers_wrap .evolvers', animationSpeed, {x:"8%"}, {x:"-48%", ease:animationInOutQuart},0);

            new ScrollMagic.Scene({
          triggerElement: '.evolvers_wrap',
          duration:'200%',
          triggerHook: 0
      })
      .setPin('.evolvers_wrap')
      .setTween(EVO)
      //.addIndicators()
      .addTo(controller);


        }).catch(err => console.error("Error cargando scripts ScrollMagic/GSAP:", err));
    }

    /* ==============================================
       MOUSE HOVER
    ============================================== */
    const texts = document.querySelectorAll('.text_spirit div');
    const products = document.querySelectorAll('.img_product');

    if(texts.length && products.length){
        texts.forEach((text, index)=>{
            text.addEventListener('mouseenter', ()=>{
                products.forEach((product, i)=>{
                    const circle = product.querySelector('.img_reference');
                    if(i===index){
                        product.style.opacity='1';
                        if(circle) circle.style.animation='circleSlideFade 0.6s 0.2s forwards';
                        product.classList.add('show');
                    } else {
                        product.style.opacity='0';
                        if(circle) circle.style.animation='none';
                        product.classList.remove('show');
                    }
                });
            });
        });
    }

    /* ==============================================
       PARALLAX TEXTO SOLO EN DESKTOP
    ============================================== */
    document.querySelectorAll('ul.textos li').forEach(item=>{
        const span = item.querySelector('span');
        const img = span ? span.querySelector('img') : null;
        if(!img) return;

        if(window.innerWidth > 1080){
            item.addEventListener('mousemove', e=>{
                const rect = item.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const moveX = (rect.width/2 - x)/20;
                const moveY = (rect.height/2 - y)/20;
                img.style.transform = `translate(${moveX}px, ${moveY}px)`;
            });
            item.addEventListener('mouseleave', ()=>{
                img.style.transform='translate(0px,0px)';
            });
        } else {
            img.style.transform='none';
        }
    });

    /* ==============================================
      STICKY BANNER EXPANSION SOLO EN DESKTOP
    ============================================== */
    const expansionBoxes = document.querySelectorAll('.expansion-boxes')
    const expansionBanners = document.querySelectorAll('.expansion-banner')

    if(expansionBoxes.length > 0 && expansionBanners.length > 0){
      const optionsObserver = {
        rootMargin: `-80% 0px -15% 0px`
      }
      const handleBannerImages = (entries, observer) => {
        entries.forEach(entry => {
          const targetImg = document.getElementById(`exp-banner-${entry.target.dataset.image}`)
          if(entry.isIntersecting){
            expansionBanners.forEach(banner => banner.classList.remove('active'))
            targetImg.classList.add('active')
          }
        })
      }
      const bannerObserver = new IntersectionObserver(handleBannerImages, optionsObserver)

      function handleInitObserver(){
        if(window.innerWidth > 768){
          expansionBoxes.forEach(box => bannerObserver.observe(box))
        } else {
          bannerObserver.disconnect()
        }
      }
      handleInitObserver();
      window.addEventListener('resize', handleInitObserver)
    }

    class CrossfadeSlider {
      constructor(selector, options = {}) {
        this.elements = document.querySelectorAll(selector);
        this.transitionDuration = options.transitionDuration || 1000; // ms
        this.displayDuration = options.displayDuration || 3000; // ms
        this.currentIndex = 0;

        if (this.elements.length === 0) {
          console.warn('No elements found with selector:', selector);
          return;
        }

        this.init();
      }

      init() {
        // Hide all elements initially
        this.elements.forEach((el, index) => {
          el.style.transition = `opacity ${this.transitionDuration}ms ease-in-out`;
          el.style.opacity = index === 0 ? '1' : '0';
          el.style.position = 'absolute';
        });

        this.start();
      }

      start() {
        // Wait display time minus half transition for crossfade overlap
        const cycleTime = this.displayDuration - (this.transitionDuration / 2);

        setInterval(() => {
          const currentEl = this.elements[this.currentIndex];
          const nextIndex = (this.currentIndex + 1) % this.elements.length;
          const nextEl = this.elements[nextIndex];

          // Start fading out current
          currentEl.style.opacity = '0';

          // Start fading in next (creates crossfade overlap)
          nextEl.style.opacity = '1';

          this.currentIndex = nextIndex;
        }, cycleTime);
      }
    }

    // const slider = new CrossfadeSlider('.slogan-content', {
    //   transitionDuration: 800,
    //   displayDuration: 7000
    // });
});
</script>



