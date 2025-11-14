<section class="c-0">
	<div class="section-arrows">
    <button class="arrow up"></button>
    <button class="arrow down"></button>
	</div>

  <div class="slogan-wrap mw-1280 t-c h-100 med-h-0 jc-center fd-col small-pb-50 med-pb-80">
    <div class="slogan rel w-full">
      <?php foreach ($sec04 as $item): ?>
        <div class="slogan-content abs w-full d-flex fd-col jc-center">
          <h2 class="h1 m-0"><?= $item['title'] ?></h2>
          <p class="h3 m-0"><?= $item['text'] ?></p>
        </div>
      <?php endforeach; ?>
    </div>
    <p class="h1"><?= $Slogan_text; ?></p>
</div>
</section>
