<!-- Video -->
<section class="c-pri">
  <div class="section-arrows">
    <button class="arrow down"></button>
	</div>
  <div class="mw-1440 min-h-dhv ai-center jc-center g-60 med-g-30 med-fd-col med-pt-80">
    <div class="w-40 med-w-100 med-t-c">
      <h1 class="h2 tc-sec m-0"><?= $founderHero_title01 ?></h1>
      <h2 class="h4 tc-acc fw-400 m-0"><?= $founderHero_title02 ?></h2>
      <p class="mt-40 mb-40 med-mt-20 med-mb-0 tc-0"><?= $founderHero_text ?></p>
      <a href="<?= \Includes\Localization::url('packages') ?>" target="_blank" class="btn c-sec br-30 med-d-none"><?= $founderHero_btn ?></a>
    </div>
    <div class="w-60 med-w-100 t-c">
      <div class="rel" style="padding-bottom:56.25%">
        <iframe
          src="https://player.vimeo.com/video/<?= $founder_vid; ?>?autopause=0&byline=0&fun=0&portrait=0&title=0"
          frameborder="0"
          allow="autoplay; fullscreen; picture-in-picture"
          title="Fundadores Xterrare"
          width="100%"
          height="100%"
          class="abs br-10 of-h"
          style="top:0;left:0"
        >
        </iframe>
      </div>
      <small class="d-block mt-10 med-mb-20 tc-acc"><?= $founderHero_note ?></small>
      <a href="#" target="_blank" class="btn c-sec br-30 d-none med-d-block m-center" style="width:fit-content"><?= $founderHero_btn ?></a>
    </div>
  </div>
</section>

<!-- Opportunity -->
<section class="c-light">
  <div class="section-arrows">
    <button class="arrow up"></button>
    <button class="arrow down"></button>
	</div>

  <div class="rel d-flex fw-wrap">
    <div class="w-50 med-w-100 min-h-dhv med-min-h-60dvh sticky med-rel" style="top:0">
      <img src="/images/body/founders/opportunity.webp" alt="" class="background visible">
    </div>
    <div class="w-50 med-w-100 p-60 small-p-20 small-pt-40 small-pb-40 fd-col jc-center">
      <h2 class="h3 mt-0 mb-30 small-mb-10"><?= $founderOportunity_title ?></h2>
      <p class="mb-0"><?= $founderOportunity_text1 ?></p>
      <p class="mb-0"><?= $founderOportunity_text2 ?></p>
      <p class="mb-0"><?= $founderOportunity_text3 ?></p>
      <p class="mb-0"><?= $founderOportunity_text4 ?></p>
      <p class="mb-0"><?= $founderOportunity_text5 ?></p>
    </div>
  </div>
</section>

<!-- Value -->
<section class="">

	<div class="section-arrows">
    <button class="arrow up"></button>
    <button class="arrow down"></button>
	</div>

	<div class="mw-1440 t-c h-100 med-h-0 fd-col jc-center ai-center med-pt-50 med-pb-50">
		<h2 class="h1-special short m-0"><?= $founderValue_title1 ?></h2>
		<h3 class="h2 short mt-0 mb-20 small-mb-20"><?= $founderValue_title2 ?></h3>
    <p class="mt-0 mb-40 small-mb-30"><?= $founderValue_text ?></p>
    <ul class="p-0 d-flex fw-wrap jc-center g-30 med-g-20">
      <?php foreach($founderValues as $item): ?>
        <li class="box box_founder rel d-flex fd-col jc-center ai-center g-10 p-30 med-p-20 br-20 w-100 c-light">
          <h3 class="box-title h4 m-0"><?= $item['title']; ?></h3>
          <p class="h5 m-0 t-balance"><?= $item['price']; ?></p>
          <p class="m-0 t-balance"><?= $item['text']; ?></p>
        </li>
      <?php endforeach; ?>
    </ul>
	</div>
</section>

<!-- Benefits -->
<section class="c-light">

	<div class="section-arrows">
    <button class="arrow up"></button>
    <button class="arrow down"></button>
	</div>

  <div class="mw-1280 jc-center min-h-dhv med-h-0 g-60 med-g-40 fd-row-rev med-fd-col pt-80 pb-80 small-pt-50 small-pb-50">

    <div class="w-40 rel med-d-none">
      <img src="/images/body/founders/founder-benefits.webp" class="sticky br-20" style="top:120px" alt="name" loading="lazy"/>
    </div>

    <img src="/images/body/founders/unnamed_movil.webp" class="mw-500 br-20 m-center med-d-block d-none" alt="all products" loading="lazy"/>

    <!-- Textos -->
    <div class="w-60 med-w-100">
      <h2 class="h2 med-t-c mb-40 med-mb-20"><?= $founderBenefits_title ?></h2>
      <p><?= $founderBenefits_text ?></p>
      <?php foreach($founderBenefits as $item): ?>
        <article class="pt-10 pb-10">
          <h3 class="h5 mt-0"><?= $item['id'] ?>. <?= $item['title'] ?></h3>
          <ul>
            <?php foreach($item['list'] as $li): ?>
              <li class="tc-pri d-flex ai-start g-10">
                <svg width="20" height="20" style="flex-shrink:0" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M18.7 37.7L41 15.4C41.8 14.6 41.8 13.4 41 12.6C40.2 11.8 39 11.8 38.2 12.6L18.7 32.1L11.4 24.8C10.6 24 9.4 24 8.6 24.8C7.8 25.6 7.8 26.8 8.6 27.6L18.7 37.7Z" fill="currentcolor"/>
                </svg>
                <?= $li?>
              </li>
            <?php endforeach; ?>
          </ul>
        </article>
      <?php endforeach; ?>
    </div>

	</div>
</section>

<!-- Legacy -->
<section class="">

	<div class="section-arrows">
    <button class="arrow up"></button>
    <button class="arrow down"></button>
	</div>

	<div class="mw-1440 t-c h-100 med-h-0 fd-col jc-center ai-center med-pt-50 med-pb-50">
		<h2 class="h1-special short mt-0 mb-40 small-mb-20"><?= $founderLegacy_title ?></h2>
		<h3 class="h2 short mt-0 mb-10"><?= $founderLegacy_subtitle1 ?></h3>
    <p class="mt-0 mb-40 small-mb-30"><?= $founderLegacy_text1 ?></p>
    <div class="p-0 d-flex fw-wrap jc-center g-30 med-g-20">
      <?php foreach($founderLegacy as $item): ?>
        <article class="box rel d-flex fd-col jc-center ai-center g-10 p-30 med-p-20 br-20 w-100 c-light">
          <h3 class="box-title h4 m-0"><?= $item['title']; ?></h3>
          <ul class="t-l w-100">
            <?php foreach($item['list'] as $li): ?>
              <li class=" d-flex ai-start g-10">
                <svg width="20" height="20" style="flex-shrink:0" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M18.7 37.7L41 15.4C41.8 14.6 41.8 13.4 41 12.6C40.2 11.8 39 11.8 38.2 12.6L18.7 32.1L11.4 24.8C10.6 24 9.4 24 8.6 24.8C7.8 25.6 7.8 26.8 8.6 27.6L18.7 37.7Z" fill="currentcolor"/>
                </svg>
                <?= $li ?>
              </li>
            <?php endforeach; ?>
          </ul>
        </article>
      <?php endforeach; ?>
    </div>
	</div>
</section>

<!-- Steps -->
<section class="c-pri">

	<div class="section-arrows">
	  <button class="arrow up"></button>
    <button class="arrow down"></button>
	</div>

	<div class="mw-1280 min-h-dhv med-min-h-auto d-flex fd-col ai-center jc-center small-pt-60 small-pb-60">
		<h2 class="h1 t-c tc-sec m-center mb-40 small-mb-20"><?= $founderSteps_title; ?></h2>
    <p class="h5 t-c tc-0"><?= $founderSteps_text ?></p>
    <div class="t-c">
      <ul class="t-l mb-40 small-mb-20">
        <?php foreach($steps_list as $item): ?>
          <li class=" d-flex ai-start g-10 tc-0">
            <svg width="20" height="20" style="flex-shrink:0" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18.7 37.7L41 15.4C41.8 14.6 41.8 13.4 41 12.6C40.2 11.8 39 11.8 38.2 12.6L18.7 32.1L11.4 24.8C10.6 24 9.4 24 8.6 24.8C7.8 25.6 7.8 26.8 8.6 27.6L18.7 37.7Z" fill="currentcolor"/>
            </svg>
            <?= $item ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="roadmap d-flex ai-center fd-col g-40 small-g-20 pt-60 small-pt-40">
      <?php foreach($steps as $item): ?>
        <article class="roadmap-step p-30 small-p-20 br-20 small-br-10 w-60 small-w-100 z-index-1">
          <h2 class="h3 roadmap-text"><?= $item['title'] ?></h2>
          <?php if(isset($item['text'])): ?>
            <p class="h5 t-pretty roadmap-text"><?= $item['text'] ?></p>
          <?php endif; ?>
          <?php
          if(isset($item['texts'])):
            foreach($item['texts'] as $t):
          ?>
            <p class="h5 t-pretty roadmap-text"><?= $t ?></p>
          <?php endforeach;endif; ?>
          <?php if(isset($item['list'])): ?>
            <ul>
              <?php foreach($item['list'] as $li): ?>
                <li class="h5 d-flex ai-start g-10">
                  <svg width="24" height="24" style="flex-shrink:0" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.7 37.7L41 15.4C41.8 14.6 41.8 13.4 41 12.6C40.2 11.8 39 11.8 38.2 12.6L18.7 32.1L11.4 24.8C10.6 24 9.4 24 8.6 24.8C7.8 25.6 7.8 26.8 8.6 27.6L18.7 37.7Z" fill="currentcolor"/>
                  </svg>
                  <?= $li ?>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </article>
      <?php endforeach; ?>
    </div>
	</div>
</section>

<!-- Banner1 -->
<section class="c-light">
	<div class="section-arrows">
    <button class="arrow up"></button>
    <button class="arrow down"></button>
	</div>

  <div class="mw-1280 t-c h-100 med-h-0 jc-center fd-col">
		<h2 class="h1 t-balance m-0"><?= $founderFuture_title1 ?></h2>
		<h3 class="h1 t-balance mt-0"><?= $founderFuture_title2 ?></h3>
		<p class="h4"><?= $founderFuture_text1 ?></p>
		<p class="h4 mt-0"><?= $founderFuture_text2 ?></p>
		<a href="<?= \Includes\Localization::url('packages') ?>" class="btn big c-sec br-50 mt-40 small-mt-20"><?= $Btn_live; ?></a>
	</div>
</section>

<!-- FAQ -->
<section class="">

	<div class="section-arrows">
    <button class="arrow up"></button>
    <button class="arrow down"></button>
	</div>

	<div class="mw-1440 fd-col jc-center ai-center med-pt-50 med-pb-50">
		<h2 class="h1-special short t-c mt-0 mb-80 med-mb-40 small-mb-20"><?= $founderFaq_title ?></h2>
    <div class="dropdowns-wrap p-0 d-flex fw-wrap jc-center g-30 med-g-20">
      <?php foreach($faq as $k => $item): ?>
        <article class="box rel d-flex fd-col jc-center ai-center g-0 p-30 med-p-20 br-20 w-100 c-light">
          <header data-target="dropdown-faq-<?= $k ?>" class="dropdown-head d-flex ai-center jc-between g-10 w-100 cursor-pointer">
            <h3 class="box-title h5 m-0"><?= $item['question']; ?></h3>
            <span style="--Icon-wrap:36px;--Icon-size:20px" class="dropdown-icon v-dark c-acc icon icon-more br-40"></span>
          </header>
          <div id="dropdown-faq-<?= $k ?>" class="wrapper w-100" style="--drop-speed:250ms">
            <div class="of-h">
              <p class="m-0 w-100 pt-20"><?= $item['answer'] ?></p>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
	</div>
</section>

<!-- Banner2 -->
<section class="c-sec">
  <div class="section-arrows">
    <button class="arrow up"></button>
  </div>

  <div class="mw-1280 t-c d-flex fd-col ai-center jc-center pt-200 pb-200 small-pt-100 small-pb-100">
    <h2 class="h1 tc-0 m-center mb-40 small-mb-20"><?= $founderBanner ?></h2>
    <a href="<?= \Includes\Localization::url('packages') ?>" target="_blank" class="btn big c-pri br-50 m-0"><?= $founderBannerCta ?></a>
  </div>
</section>

<!-- PDs -->
<section class="c-ter">
  <div class="mw-1440 pt-40 pb-40">
    <p class="tc-0"><?= $founderPD1 ?></p>
    <p class="tc-0"><?= $founderPD2 ?></p>
    <p class="tc-0"><?= $founderPD3 ?></p>
  </div>
</section>
