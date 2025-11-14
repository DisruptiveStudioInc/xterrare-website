<?php foreach ($homeProducts as $item):?>
	<div id='Modal<?=$item['id']?>' class='modal' data-bg="img_product_<?= $item['link']; ?>">
    <div class='modal-content rel t-c'>
      <span class='v-white c-pri icon icon-close' onclick="closeModal('Modal<?=$item['id']?>')"></span>
      <h2 class='h2 tc-pri t-c med-t-l'><?=$item['title']?></h2>
      <p class="h5 med-t-l"><?= $item['text']?></p>
    </div>
	</div>
<?php endforeach; ?>

<section class="products of-h">

	<div class="overlay"></div>

	<div class="anchor" id="status"></div>
	<div class="h-100 med-h-0 med-fd-col-rev content-scroll jc-center ai-center rel wrap_products">
    <div class="section-arrows">
        <button class="arrow up"></button>
        <button class="arrow down"></button>
    </div>

    <?php foreach($homeProducts as $item): ?>
      <div data-bg="img_product_<?= $item['link']; ?>" class="box_product rel flex ai-center jc-center fd-col img-<?= $item['number'] ?>" style="z-index:<?= count($homeProducts); ?>">
        <div class="rel t-c">
          <img src="./images/body/products/<?= $item['image']; ?>" class="product m-center cursor-pointer" alt="<?= $item['link']; ?>" onclick="openModal('Modal<?= $item['id']; ?>')"/>
          <div class="abs product-plus-wrap d-flex fd-col ai-center g-20 pointer-e-none">
            <button type="button" class="v-white c-pri icon br-50 icon-more pointer-e-none"></button>
            <!-- <a href="?p=product&id=<?= $item['link']; ?>" class="btn c-ter br-50 pointer-e-auto"><?= $Btn_view; ?></a> -->
          </div>
        </div>
      </div>
    <?php endforeach; ?>

    <?php foreach($homeProducts as $k => $item): ?>
      <img id="img_product_<?= $item['link']; ?>" class="background product-bg anim-scale med-d-none img_product_<?= $item['id']; ?>" src="./images/body/subpage/<?= $item['background']; ?>" alt="<?= $item['link']; ?> background" style="z-index:<?= $k ?>">
    <?php endforeach; ?>

	</div>
</section>

<script>
  const productCards = document.querySelectorAll('.box_product');
  const productBackgrounds = document.querySelectorAll('.product-bg:not(#img_product_<?= $homeProducts[0]['link'] ?>)');
  if (productCards.length > 0 && productBackgrounds.length > 0) {
    const handleChangeBg = (bgId) => {
      productBackgrounds.forEach(bg => bg.style.opacity = '0');
      const activeBg = document.getElementById(bgId);
      if (activeBg) {
        activeBg.style.opacity = '1';
      }
    }
    const handleDefaultBg = () => {
      productBackgrounds.forEach(bg => {
        bg.style.opacity = '0';
      });
    }

    productCards.forEach(card => {
      card.addEventListener('mouseenter', () => handleChangeBg(card.dataset.bg));
      card.addEventListener('mouseleave', () => {
        // Solo restaurar el fondo si no hay ningún modal abierto
        const openModals = document.querySelectorAll('.modal.open');
        if (openModals.length === 0) {
          handleDefaultBg();
        }
      });
    });

    // Función para abrir el modal
    function openModal(modalId) {
      var modal = document.getElementById(modalId);
      if (modal) {
        modal.classList.add('open'); // Muestra el modal
        document.body.classList.add('no-scroll'); // Bloquea el scroll
        handleChangeBg(modal.dataset.bg); // Cambia el fondo al abrir el modal
      }
    }

    // Función para cerrar el modal
    function closeModal(modalId) {
      var modal = document.getElementById(modalId);
      if (modal) {
        modal.classList.remove('open'); // Oculta el modal
        checkModalsOpen(); // Verifica si hay otros modales abiertos
        handleDefaultBg(); // Restaura el fondo predeterminado al cerrar el modal
      }
    }

    // Función para verificar si hay modales abiertos y desbloquear el scroll
    function checkModalsOpen() {
        var openModals = document.querySelectorAll('.modal.open');
        if (openModals.length === 0) {
            document.body.classList.remove('no-scroll'); // Reactiva el scroll
        }
    }

    // Función para cerrar el modal si se hace clic fuera de él
    window.onclick = function(event) {
        var modals = document.querySelectorAll('.modal');
        modals.forEach(function(modal) {
            if (event.target === modal) {
                closeModal(modal.id);
            }
        });
    };
  }
</script>
