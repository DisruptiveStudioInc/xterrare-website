<!-- ============================================== -->
<!-- HERO -->
<!-- ============================================== -->

<section class="hero-pin d-flex fd-col jc-center ai-center overlay o-40">
  <div class="anchor" id="home"></div>

  <div class="dh of-h rel">
    <div class="video-placeholder h-full">
      <img class="background visible" src="/images/body/letters/2.webp" alt="Placeholder" />
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
        <img src="/images/body/about/<?= $item['image'] ?>" alt="" class="background visible">
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
          <p class="content <?= $k === 0 ? 'active' : '' ?>" data-text="<?= $step['text'] ?>"
            style="<?= isset($step['style']) ? $step['style'] : '' ?>">
            <?= $step['text'] ?>
          </p>
        <?php endforeach; ?>
      </div>
		</div>
	</div>
</section>

<!-- ============================================== -->
<!-- TWO -->
<!-- ============================================== -->

<section class="rel c-pri">

	<div class="h-100 vertical-slides rel of-h small-h-0 letters" style="--total-items:4">
    <div class="section-arrows">
      <button class="arrow up"></button>
      <button class="arrow down"></button>
    </div>
    <?php foreach($verticalSlides as $k => $slide): ?>
		<div class="letter-wrap" style="--item-index:<?= $k; ?>">
      <img class="letter-bg img_0<?= $slide['id']; ?>" src="/images/body/letters/<?= $slide['id']; ?>.webp" alt="<?= $slide['title']; ?>" loading="lazy">
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
          <img src='/images/body/evolvers/<?= $item['id'] ?>.webp' alt='<?= $item['name'] ?>' loading="lazy">
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
            <img src="/images/body/truth/<?= $item['id']; ?>.webp" alt="<?= $item['title']; ?>" class="" loading="lazy"/>
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
						<img src="/images/body/the_spirit/circle/<?= $item['id']?>.webp" class="img_reference" alt="<?= $item['name']?>" loading="lazy"/>
						<img src="/images/body/the_spirit/<?= $item['id']?>.webp" class="product" alt="<?= $item['name']?>" loading="lazy"/>
					</div>
				</span>
        <?php endforeach; ?>
			</div>

			<img src="/images/body/the_spirit/benefits.webp" class="mw-500 m-center med-d-block d-none" alt="all products" loading="lazy"/>

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

<script src="/js/slider.js"></script>
<script src="/js/home.js"></script>
