<!-- Hero -->
<section class="c-pri">
  <div class="d-flex med-fd-col h-dvh">
    <div class="w-50 med-w-100 d-flex fd-col jc-center p-50 pt-80 med-pt-100 pb-20 med-pb-50 med-t-c">
      <h1 class="h1-special tc-sec mt-0 mb-20 small-mb-10"><?= $packsHero1 ?></h1>
      <p class="h5 tc-0 m-0"><?= $packsHero2 ?></p>
      <p class="h4 fw-600 tc-0 mb-0"><?= $packsHero3 ?></p>
    </div>
    <div class="slider-wrap w-50 med-w-100 c-sec flex-grow of-h rel">
      <div class="slider" id="slider-map">
        <?php foreach($packSlider as $slide): ?>
        <div class="slide"><img src="<?= $slide['image']; ?>" alt="<?= $slide['alt']; ?>"></div>
        <?php endforeach; ?>
      </div>
      <div class="slider-controls jc-center">
        <button onclick="prevSlide()">
          <svg width="40" height="40" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" style="rotate:180deg">
            <path d="M 28.044922 12.800781 C 27.699564 12.788113 27.351128 12.924688 27.103516 13.203125 C 26.663216 13.698425 26.707925 14.456184 27.203125 14.896484 L 44.195312 30 L 27.203125 45.103516 C 26.707825 45.543816 26.663416 46.301475 27.103516 46.796875 C 27.543816 47.292175 28.301575 47.336784 28.796875 46.896484 L 46.796875 30.896484 C 47.052975 30.668784 47.201172 30.3427 47.201172 30 C 47.201072 29.7002 47.088172 29.412959 46.888672 29.193359 L 46.796875 29.103516 L 28.796875 13.103516 C 28.580225 12.911016 28.313534 12.810634 28.044922 12.800781 z M 22.023438 16.800781 C 21.677604 16.794292 21.33245 16.935925 21.089844 17.21875 C 20.658644 17.72175 20.71595 18.478856 21.21875 18.910156 L 35.21875 30.910156 C 35.72185 31.341456 36.480809 31.28425 36.912109 30.78125 C 37.343209 30.27805 37.28425 29.519091 36.78125 29.087891 L 22.78125 17.087891 C 22.561144 16.899328 22.292419 16.805828 22.023438 16.800781 z M 18 22.798828 C 17.654101 22.799378 17.311144 22.948778 17.074219 23.236328 C 16.653219 23.748028 16.726681 24.504581 17.238281 24.925781 L 19.667969 26.925781 C 20.179569 27.346681 20.934269 27.273119 21.355469 26.761719 C 21.776369 26.250019 21.704959 25.493466 21.193359 25.072266 L 18.763672 23.072266 C 18.539847 22.888166 18.269033 22.798401 18 22.798828 z M 23.464844 27.298828 C 23.119211 27.299402 22.777941 27.448891 22.541016 27.736328 C 22.119816 28.248028 22.191525 29.004481 22.703125 29.425781 L 23.400391 30 L 22.703125 30.572266 C 22.191525 30.993466 22.119916 31.750019 22.541016 32.261719 C 22.962216 32.773119 23.716916 32.846581 24.228516 32.425781 L 26.050781 30.925781 C 26.327481 30.697781 26.488281 30.3585 26.488281 30 C 26.488181 29.6415 26.327581 29.300166 26.050781 29.072266 L 24.228516 27.572266 C 24.004734 27.388209 23.733669 27.298382 23.464844 27.298828 z M 32.476562 31.800781 C 32.207573 31.805821 31.938812 31.899284 31.71875 32.087891 L 21.21875 41.087891 C 20.71585 41.519091 20.658844 42.27805 21.089844 42.78125 C 21.521244 43.28425 22.27815 43.341456 22.78125 42.910156 L 33.28125 33.910156 C 33.78415 33.478856 33.843309 32.72175 33.412109 32.21875 C 33.169503 31.935925 32.822406 31.794302 32.476562 31.800781 z M 20.429688 32.800781 C 20.160857 32.800364 19.891794 32.888297 19.667969 33.072266 L 17.238281 35.072266 C 16.726681 35.493466 16.653319 36.250019 17.074219 36.761719 C 17.495419 37.273319 18.251972 37.346781 18.763672 36.925781 L 21.193359 34.925781 C 21.704759 34.504481 21.776669 33.747928 21.355469 33.236328 C 21.1186 32.948834 20.775327 32.801318 20.429688 32.800781 z" fill="currentcolor"/>
          </svg>
        </button>
        <button onclick="nextSlide()">
          <svg width="40" height="40" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M 28.044922 12.800781 C 27.699564 12.788113 27.351128 12.924688 27.103516 13.203125 C 26.663216 13.698425 26.707925 14.456184 27.203125 14.896484 L 44.195312 30 L 27.203125 45.103516 C 26.707825 45.543816 26.663416 46.301475 27.103516 46.796875 C 27.543816 47.292175 28.301575 47.336784 28.796875 46.896484 L 46.796875 30.896484 C 47.052975 30.668784 47.201172 30.3427 47.201172 30 C 47.201072 29.7002 47.088172 29.412959 46.888672 29.193359 L 46.796875 29.103516 L 28.796875 13.103516 C 28.580225 12.911016 28.313534 12.810634 28.044922 12.800781 z M 22.023438 16.800781 C 21.677604 16.794292 21.33245 16.935925 21.089844 17.21875 C 20.658644 17.72175 20.71595 18.478856 21.21875 18.910156 L 35.21875 30.910156 C 35.72185 31.341456 36.480809 31.28425 36.912109 30.78125 C 37.343209 30.27805 37.28425 29.519091 36.78125 29.087891 L 22.78125 17.087891 C 22.561144 16.899328 22.292419 16.805828 22.023438 16.800781 z M 18 22.798828 C 17.654101 22.799378 17.311144 22.948778 17.074219 23.236328 C 16.653219 23.748028 16.726681 24.504581 17.238281 24.925781 L 19.667969 26.925781 C 20.179569 27.346681 20.934269 27.273119 21.355469 26.761719 C 21.776369 26.250019 21.704959 25.493466 21.193359 25.072266 L 18.763672 23.072266 C 18.539847 22.888166 18.269033 22.798401 18 22.798828 z M 23.464844 27.298828 C 23.119211 27.299402 22.777941 27.448891 22.541016 27.736328 C 22.119816 28.248028 22.191525 29.004481 22.703125 29.425781 L 23.400391 30 L 22.703125 30.572266 C 22.191525 30.993466 22.119916 31.750019 22.541016 32.261719 C 22.962216 32.773119 23.716916 32.846581 24.228516 32.425781 L 26.050781 30.925781 C 26.327481 30.697781 26.488281 30.3585 26.488281 30 C 26.488181 29.6415 26.327581 29.300166 26.050781 29.072266 L 24.228516 27.572266 C 24.004734 27.388209 23.733669 27.298382 23.464844 27.298828 z M 32.476562 31.800781 C 32.207573 31.805821 31.938812 31.899284 31.71875 32.087891 L 21.21875 41.087891 C 20.71585 41.519091 20.658844 42.27805 21.089844 42.78125 C 21.521244 43.28425 22.27815 43.341456 22.78125 42.910156 L 33.28125 33.910156 C 33.78415 33.478856 33.843309 32.72175 33.412109 32.21875 C 33.169503 31.935925 32.822406 31.794302 32.476562 31.800781 z M 20.429688 32.800781 C 20.160857 32.800364 19.891794 32.888297 19.667969 33.072266 L 17.238281 35.072266 C 16.726681 35.493466 16.653319 36.250019 17.074219 36.761719 C 17.495419 37.273319 18.251972 37.346781 18.763672 36.925781 L 21.193359 34.925781 C 21.704759 34.504481 21.776669 33.747928 21.355469 33.236328 C 21.1186 32.948834 20.775327 32.801318 20.429688 32.800781 z" fill="currentcolor"/>
          </svg>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Path -->
<section>
  <div class="min-h-dhv p-20 d-flex fd-col ai-center jc-center t-c">
    <h2 class="h1-special mt-0"><?= $packsPathTitle ?></h2>
    <h3 class="h4 fw-700 m-0"><?= $packsPathSubtitle ?></h3>
    <ul class="mw-1080 p-0 d-flex fd-row small-fd-col g-20 jc-center mt-50 med-mt-30">
      <?php foreach ($packPaths as $path) : ?>
        <li>
          <a class="<?= $path['color'] ?> d-block p-40 med-p-20 br-20" href="<?= $path['link'] ?>">
            <p class="h5 tc-0 mt-0"><?= $packsPathOption ?></p>
            <h4 class="h3 tc-0 mt-0"><?= $path['title'] ?></h4>
            <p class="tc-0 mt-0"><?= $path['text'] ?></p>
            <svg width="24" height="24" viewBox="0 0 50 50">
              <polyline stroke="#fff" fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4px" points="12.4 20.3 24.4 32.7 37.1 20.3"/>
            </svg>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

<!-- Diamond -->
<section class="c-sec all-tc-0" id="diamond">
  <div class="min-h-dhv d-flex fd-row med-fd-col">
    <div class="w-50 med-w-100 med-min-h-60dvh rel">
      <img src="/images/body/founders/diamond.webp" alt="" class="background visible">
    </div>
    <div class="d-flex ai-center w-50 med-w-100 p-50 med-p-30 med-pt-50 med-pb-50 small-p-20 small-pt-50 small-pb-50">
      <div class="packinfo-wrap d-flex fd-col jc-center m-center">
        <h2 class="h1-special mt-0"><?= $packsDiamond_name ?></h2>
        <p class="h4 fw-400"><?= $packsDiamond_text1 ?></p>
        <div class="c-pri br-10 p-20 t-c mt-20 mb-60 med-mb-30">
          <p class="h4 fw-700 m-0"><?= $packsDiamond_investment ?></p>
          <p class="h5 fw-400 m-0"><?= $packsDiamond_text2 ?></p>
        </div>
        <ul class="d-flex fd-col g-20 mb-40 med-mb-20">
          <?php foreach($packDiamondItems as $item): ?>
            <li>
              <div class="d-flex ai-start fw-row g-10">
                <svg class="c-pri br-50" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.55006 15.15L18.0251 6.675C18.2251 6.475 18.4584 6.375 18.7251 6.375C18.9917 6.375 19.2251 6.475 19.4251 6.675C19.6251 6.875 19.7251 7.11267 19.7251 7.388C19.7251 7.66333 19.6251 7.90067 19.4251 8.1L10.2501 17.3C10.0501 17.5 9.81673 17.6 9.55006 17.6C9.28339 17.6 9.05006 17.5 8.85006 17.3L4.55006 13C4.35006 12.8 4.25406 12.5627 4.26206 12.288C4.27006 12.0133 4.37439 11.7757 4.57506 11.575C4.77572 11.3743 5.01339 11.2743 5.28806 11.275C5.56272 11.2757 5.80006 11.3757 6.00006 11.575L9.55006 15.15Z" fill="white"/>
                </svg>
                <p class="fw-700 m-0"><?= $item['title'] ?></p>
              </div>
              <p class="mb-0"><?= $item['text'] ?></p>
            </li>
          <?php endforeach; ?>
        </ul>
        <div class="w-100 t-l med-t-c">
          <a href="<?= $founder_register ?>" target="_blank" class="btn c-pri br-50">
            <?= $Btn_packages ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Platinum -->
<section class="c-pri" id="platinum">
  <div class="min-h-dhv d-flex fd-row med-fd-col-rev">
    <div class="d-flex ai-center w-50 med-w-100 p-50 med-p-30 med-pt-50 med-pb-50 small-p-20 small-pt-50 small-pb-50">
      <div class="packinfo-wrap d-flex fd-col jc-center m-center">
        <h2 class="h1-special tc-sec mt-0"><?= $packsPlatinum_name ?></h2>
        <p class="h4 tc-0 fw-400"><?= $packsPlatinum_text1 ?></p>
        <div class="c-acc tc-pri br-10 p-20 t-c mt-20 mb-60 med-mb-30">
          <p class="h4 fw-700 m-0"><?= $packsPlatinum_investment ?></p>
          <p class="h5 fw-400 m-0"><?= $packsPlatinum_text2 ?></p>
        </div>
        <ul class="d-flex fd-col g-20 mb-40 med-mb-20">
          <?php foreach($packPlatinumItems as $item): ?>
            <li>
              <div class="d-flex ai-start fw-row g-10">
                <svg class="c-sec br-50" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.55006 15.15L18.0251 6.675C18.2251 6.475 18.4584 6.375 18.7251 6.375C18.9917 6.375 19.2251 6.475 19.4251 6.675C19.6251 6.875 19.7251 7.11267 19.7251 7.388C19.7251 7.66333 19.6251 7.90067 19.4251 8.1L10.2501 17.3C10.0501 17.5 9.81673 17.6 9.55006 17.6C9.28339 17.6 9.05006 17.5 8.85006 17.3L4.55006 13C4.35006 12.8 4.25406 12.5627 4.26206 12.288C4.27006 12.0133 4.37439 11.7757 4.57506 11.575C4.77572 11.3743 5.01339 11.2743 5.28806 11.275C5.56272 11.2757 5.80006 11.3757 6.00006 11.575L9.55006 15.15Z" fill="white"/>
                </svg>
                <p class="fw-700 tc-0 m-0"><?= $item['title'] ?></p>
              </div>
              <p class="tc-0 mb-0"><?= $item['text'] ?></p>
            </li>
          <?php endforeach; ?>
        </ul>
        <div class="w-100 t-l med-t-c">
          <a href="<?= $founder_register ?>" target="_blank" class="btn c-sec br-50">
            <?= $Btn_packages ?>
          </a>
        </div>
      </div>
    </div>
    <div class="w-50 med-w-100 med-min-h-60dvh rel">
      <img src="/images/body/founders/platinum.webp" alt="" class="background visible">
    </div>
  </div>
</section>

<!-- Table -->
<section>
  <div class="min-h-dhv mw-1440 m-center">
    <h2 class="h1-special t-c mt-0"><?= $packCompareTitle ?></h2>
    <p class="h2 t-c fw-700 mt-0 mb-50 med-mb-30"><?= $packCompareSubtitle ?></p>

    <table class="of-h br-10 mb-50 med-mb-30">
      <thead>
        <?php foreach ($packTable['head'] as $th): ?>
          <th class="fw-700"><?= $th ?></th>
        <?php endforeach; ?>
      </thead>
      <tbody>
        <?php foreach ($packTable['body'] as $row): ?>
          <tr>
            <?php foreach ($row as $k => $cell): ?>
              <td class="tc-pri" data-label="<?= $packTable['head'][$k] ?>"><?= $cell ?></td>
            <?php endforeach; ?>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <div class="w-100 t-c">
      <a href="<?= $founder_register ?>" target="_blank" class="btn big c-sec br-50">
        <?= $Btn_packages ?>
      </a>
    </div>
  </div>
</section>

<!-- Benefits -->
<section class="c-light">
  <div class="min-h-dhv mw-1440 p-20 d-flex fd-col ai-center jc-center t-c pt-60 pb-60">
    <h2 style="max-width:24ch" class="h1 mt-0 mb-50 med-mb-30 small-mb-20"><?= $packBenefitsTitle ?></h2>
    <p class="h4 fw-700 mt-0 mb-40 med-mb-20"><?= $packBenefitsText ?></p>
    <ul class="pack-benefits-grid">
      <?php foreach ($packsCommonBenefits as $k => $item): ?>
        <li class="c-0 p-30 br-20 d-flex fd-row ai-start g-20 small-p-20 small-g-10 small-fd-col">
          <span class="pack-benefit-number c-ter tc-0 br-10 d-flex ai-center jc-center fw-700 h3 m-0 flex-shrink-0">
            <?= $k + 1 ?>
          </span>
          <div>
            <h4 class="h3 t-l mt-0"><?= $item['title'] ?></h4>
            <p class="t-l m-0"><?= $item['text'] ?></p>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

<!-- Choose -->
<section class="c-pri all-tc-0 rel">
  <img src="/images/body/founders/terreno.webp" alt="" class="background" style="opacity:0.15;mix-blend-mode:overlay;">
  <div class="min-h-dhv mw-1440 p-20 d-flex fd-col ai-center jc-center pt-60 pb-60 rel">
    <h2 class="h1 t-c mt-0 mb-50 med-mb-40"><?= $packVisionTitle ?></h2>
    <div class="d-flex fd-row small-fd-col g-60 med-g-30 small-g-20">
      <?php foreach ($packChoose as $item): ?>
        <article class="package-choose p-40 med-p-20 br-20 <?= $item['color'] ?>">
          <h3 class="t-c mb-20" style="max-width:44ch">
            <span class="d-block"><?= $packVisionChoose ?></span>
            <span class="uppercase h1 choose"><?= $item['title'] ?></span>
            <?= $packVisionIf ?>
          </h3>
          <ul style="list-style:disc;padding-left:20px;">
            <?php foreach ($item['list'] as $li): ?>
              <li><?= $li ?></li>
            <?php endforeach; ?>
          </ul>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Decision -->
<section>
  <div class="min-h-dhv mw-1440 d-flex fd-row med-fd-col-rev ai-center jc-center pt-60 pb-60 g-60 med-g-40">
    <div class="w-50 med-w-100">
      <h2 class="h1 mt-0 mb-20"><?= $packDecisionTitle ?></h2>
      <p class="h4 fw-400 mt-0 mb-20"><?= $packDecisionText1 ?></p>
      <ol style="list-style:decimal;padding-left:20px" class="d-flex fd-col g-10 mb-20">
        <?php foreach ($packDecisionList1 as $item): ?>
          <li class="">
            <?= $item ?>
          </li>
        <?php endforeach; ?>
      </ol>
      <div class="c-acc-d br-10 p-20 mb-40 med-mb-30">
        <p class="h5 fw-700 mt-0"><?= $packDecisionText2 ?></p>
        <ul style="list-style:disc;padding-left:20px" class="d-flex fd-col g-10">
          <?php foreach ($packDecisionList2 as $item): ?>
            <li class="">
              <?= $item ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="w-100 med-t-c">
        <a href="<?= $founder_register ?>" target="_blank" class="btn c-sec br-50">
          <?= $Btn_packages ?>
        </a>
      </div>
    </div>
    <div class="w-50 med-w-100">
      <img src="/images/body/founders/decision.webp" alt="" class="br-20 m-center med-w-50 small-w-100">
    </div>
  </div>
</section>

<!-- Final -->
<section class="c-light">
  <div class="min-h-dhv mw-1280 d-flex ai-center jc-center">
    <article class="d-flex fd-row med-fd-col c-pri br-20 of-h">
      <div class="w-45 med-w-100 rel med-min-h-40dvh">
        <img src="/images/body/founders/final.webp" alt="" class="background visible">
      </div>
      <div class="w-55 med-w-100 p-50 small-p-20">
        <p class="h2 fw-700 tc-acc m-0"><?= $packFinalText1 ?></p>
        <p class="tc-0 mt-30 mb-0 small-mt-10"><?= $packFinalText2 ?></p>
        <p class="tc-0 mt-30 mb-0 small-mt-10"><?= $packFinalText3 ?></p>
        <p class="tc-0 mt-30 mb-0 small-mt-10"><?= $packFinalText4 ?></p>
      </div>
    </article>
  </div>
</section>

<!-- PD -->
<section class="c-ter t-c p-20">
  <p class="m-0 tc-0"><?= $packFinalPD ?></p>
</section>

<script src="/js/slider.js"></script>
