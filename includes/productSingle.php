<section class="products of-h">

  <img class="background visible anim-scale" src="./images/body/subpage/bg_basic.webp" alt="Basic background" loading="lazy">

	<div class="anchor" id="investment"></div>
	<div class="d-flex min-h-dhv fd-col content-scroll g-40 jc-center ai-center rel wrap_products">
    <div class="section-arrows">
        <button class="arrow up"></button>
        <button class="arrow down"></button>
    </div>

    <h2 class="h1 tc-0"><?= $Products_sec_title ?></h2>
    <div class="rel t-c">
      <img src="./images/body/products/basic.webp" class="product-image m-center cursor-pointer w-50" alt="basic" onclick="toggleProductInfo()" loading="lazy"/>
      <div class="abs product-plus-wrap d-flex fd-col ai-center pointer-e-none">
        <button type="button" class="v-white c-pri icon br-50 icon-more pointer-e-none"></button>
      </div>
    </div>

    <div id="product-info" class="wrap-scroll-h p-20 pt-0 pb-0">
      <div class="of-h">
        <div class="mw-768 p-20 br-20 c-acc tc-0 t-c">
          <p class="h4 fw-700"><?= $Products_price_01 ?></p>
          <p><?= $Products_text_01 ?></p>
        </div>
      </div>
    </div>

	</div>
</section>
