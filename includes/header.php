<?php #include("info.php"); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $Lang; ?>" xml:lang="<?php echo $Lang; ?>" style="scroll-behavior: smooth;">

<head>

  <!-- X -->
  <meta name="twitter:card"        content="summary">
  <meta name="twitter:site"        content="<?php echo $Host_Site; ?>">
  <meta name="twitter:title"       content="<?php echo $Company_Name; ?>">
  <meta name="twitter:description" content="<?php echo $Description_Site; ?>">
  <meta name="twitter:creator"     content="<?php echo $Company_Name; ?>">
  <meta name="twitter:image"       content="<?php echo $Host_Site; ?>/images/facebook/facebook.jpg">

  <!-- FACEBOOK -->
  <meta property="og:site_name"    content="<?php echo $Company_Name; ?>" />
  <meta property="og:url"          content="<?php echo $Host_Site; ?>" />
  <meta property="og:title"        content="<?php echo $Company_Name; ?>" />
  <meta property="og:type"         content="website" />
  <meta property="og:description"  content="<?php echo $Description_Site; ?>" />
  <meta property="og:image"        content="<?php echo $Host_Site; ?>/images/facebook/facebook.jpg" />
  <meta property="og:image:width"  content="1200" />
  <meta property="og:image:height" content="675" />

  <!-- METAS-->
  <meta name="viewport"            content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Content-Type"  content="text/html; charset=UTF-8" />
  <meta name="description"         content="<?php echo $Description_Site; ?>" />
  <meta name="keywords"            content="<?php echo $Keywords_Site; ?>" />
  <meta name="autor"               content="<?php echo $Company_Name; ?>" />

  <title><?php echo $Company_Name; ?></title>

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <!-- STYLES-->
  <link rel="stylesheet" type="text/css" href="/css/min/reset.min.css" />
  <link rel="stylesheet" type="text/css" href="/css/min/main.min.css" />
  <link rel="stylesheet" type="text/css" href="/css/min/root.min.css" />

  <link rel="stylesheet" type="text/css" href="/css/body/style.min.css" />
  <link rel="stylesheet" type="text/css" href="/css/body/navigation.min.css" />
  <link rel="stylesheet" type="text/css" href="/css/body/slick.min.css" />

  <!-- FAVICON -->
  <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/images/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="/images/favicon/manifest.json">
  <meta name="msapplication-config" content="/images/favicon/browserconfig.xml" />
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/images/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <link rel="shortcut icon" href="/images/favicon/favicon.ico" />

  <link rel="preconnect" href="https://player.vimeo.com" />
  <link rel="preconnect" href="https://vod-adaptive-ak.vimeocdn.com" />
  <link rel="preconnect" href="https://f.vimeocdn.com" />

  <!-- jQuery y Slick -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</head>
<body id="page-content">

  <?php if($user_replica ||
    (isset($floatBtn) && $floatBtn === 'founder') ||
    (isset($floatBtn) && $floatBtn === 'packages')):
    $floatLink = $Register;
    if(isset($floatBtn)){
      switch ($floatBtn) {
        case 'founder':
          $floatLink = \Includes\Localization::url('packages');
          break;
        case 'packages':
          $floatLink = $founder_register;
          break;
        default:
          $floatLink = $Register;
          break;
      }
    }
  ?>
    <div class="wrap-get w-100 t-c">
      <a href="<?= $floatLink; ?>" target="_blank" class="btn-get">
        <?= (isset($floatBtn) && ($floatBtn === 'packages' || $floatBtn === 'founder')) ? $Btn_founder : $Btn_started; ?>
      </a>
    </div>
  <?php endif; ?>

  <!-- ============================================== -->
  <!-- PRELOADER -->
  <!-- ============================================== -->

  <div id="preloader">
    <div id="progress">
      <span id="data">0%</span>
    </div>
  </div>

  <!-- ============================================== -->
  <!-- NAVIGATION -->
  <!-- ============================================== -->

  <header>
    <nav class="nav">
      <div class="navigation">

        <div class="jc-center ai-center g-20">
          <div class="logo">
            <a href="<?= \Includes\Localization::url('home') ?>"><img src="/images/logo/logo.svg" alt="<?= $Company_Fullname; ?>"></a>
          </div>
          <div class="rel">
            <div class="btn-lan <?= \Includes\Localization::getLang(); ?>"><?= \Includes\Localization::getLang() === 'es' ? 'Esp' : 'Eng'; ?></div>
            <div class="lan">
              <?php
                $config = require __DIR__ . '/../config.php';
                $availableLangs = $config['available_langs'] ?? ['es' => 'Esp', 'en' => 'Eng'];
                $currentLang = \Includes\Localization::getLang();
                foreach ($availableLangs as $langCode => $langName) {
                    $activeClass = ($currentLang === $langCode) ? 'selected' : '';
                    $langUrl = \Includes\Localization::getCurrentUrl($langCode);
                    echo "<a class='$langCode $activeClass' href='$langUrl'>" . $langName . "</a>";
                }
              ?>
            </div>
          </div>
        </div>

        <div class="menu">
          <ul>
            <?php
              $id = $_GET['id'] ?? '';
              $counter = 0;

              foreach ($Menu as $item) {
                $counter++;

                // Submenú con sub-sub (Menu 4) desactivado
                if ($counter == 6) {
                  echo "<li class='rel'>";
                  echo "<a href='#' class='btn-sub'>{$item[2]}</a>";

                  echo "<ul class='sub'>";
                  foreach ($Sub as $item_sub) {
                    $hasSubSub = isset($item_sub[1]) && is_array($item_sub[1]);

                    echo "<li>";
                    echo "<a href='#'>{$item_sub[0]}</a>";

                    if ($hasSubSub) {
                      echo "<ul class='sub-sub'>";
                      foreach ($item_sub[1] as $subsub) {
                        echo "<li>
                                <span class='img'><img src='/images/body/products/{$subsub[0]}.webp' alt='{$subsub[2]}'></span>
                                <a href='?p=product&id={$subsub[0]}'>{$subsub[1]}<span>{$subsub[2]}</span></a>
                              </li>";
                      }
                      echo "</ul>";
                    }
                    echo "</li>";
                  }
                  echo "</ul>";
                  echo "</li>";

                // Submenú simple (Menu 5)
                } elseif ($counter == 5) {
                  echo "<li class='rel'>";
                  echo "<a href='#' class='btn-sub'>{$item[2]}</a>";

                  echo "<ul class='sub no-chevron'>";
                  foreach ($Sub_reg as $item_sub) {
                    echo "<li><a href='{$item_sub[0]}' target='_blank'>{$item_sub[1]}</a></li>";
                  }
                  echo "</ul>";
                  echo "</li>";

                // Items normales
                } else {
                  echo "<li class='normal'><a href='{$item[0]}' class='{$item[1]}'>{$item[2]}</a></li>";
                }
              }
            ?>
            <div class="d-none med-d-block mt-20">
              <div class="mb-10">
                <a href="<?= (isset($floatBtn) && $floatBtn !== 'default') ? $founder_buy : $Login; ?>" target="_blank" class="btn c-ter br-30 small-w-100"><?= $Menu_log; ?></a>
              </div>
              <?php if($user_replica || (isset($floatBtn) && $floatBtn !== 'default')): ?>
                <div>
                  <a href="<?= (isset($floatBtn) && $floatBtn !== 'default') ? $founder_register : $Register ?>" target="_blank" class="btn c-sec br-30 small-w-100"><?= $Menu_reg; ?></a>
                </div>
              <?php endif; ?>
            </div>
          </ul>
        </div>

        <div class="jc-center ai-center">
          <div class="btns m-0 g-10 med-d-none">
            <a href='<?= (isset($floatBtn) && $floatBtn !== 'default') ? $founder_buy : $Login; ?>' target="_blank" class="btn c-ter br-30"><?= $Menu_log; ?></a>
            <?php if($user_replica || (isset($floatBtn) && $floatBtn !== 'default')): ?>
              <a href='<?= (isset($floatBtn) && $floatBtn !== 'default') ? $founder_register : $Register; ?>' target="_blank" class="btn c-sec br-30"><?= $Menu_reg; ?></a>
            <?php endif; ?>
          </div>
          <div class="hamburguer">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>

      </div>
    </nav>
  </header>

  <!-- ============================================== -->
  <!-- PAGE CONTENT -->
  <!-- ============================================== -->

  <main>
