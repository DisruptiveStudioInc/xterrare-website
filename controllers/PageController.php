<?php
namespace Controllers;

use Includes\Localization;

class PageController extends BaseController {

  private function setup($lang, $pageName) {
    $this->setLang($lang);
    Localization::setCurrentRoute($pageName);
  }

  public function home($lang) {
    $this->setup($lang, 'home');
    $data = $this->loadPageData('home_data.php');
    $data['floatBtn'] = 'default';
    $this->view('home', $data);
  }

  public function founder($lang) {
    $this->setup($lang, 'founder');
    $data = $this->loadPageData('founder_data.php');
    $data['floatBtn'] = 'founder';
    $this->view('founder', $data);
  }

  public function notFound() {
    http_response_code(404);
    include __DIR__ . '/../pages/404.inc.php';
  }

  private function loadPageData( $path ) {
    $dataPath = __DIR__ . "/../includes/pagesData/$path";
    if (file_exists($dataPath)) {
      // Import all globals (including language variables) into local scope
      foreach ($GLOBALS as $key => $value) {
        if (is_string($key) && !in_array($key, ['GLOBALS', '_GET', '_POST', '_COOKIE', '_FILES', '_SERVER', '_REQUEST', '_ENV', '_SESSION'])) {
          $$key = $value;
        }
      }
      include $dataPath;
    }

    $allVars = get_defined_vars();
    unset($allVars['path'], $allVars['dataPath'], $allVars['key'], $allVars['value']);
    return $allVars;
  }
}
