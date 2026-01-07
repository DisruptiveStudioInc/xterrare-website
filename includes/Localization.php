<?php

namespace Includes;

class Localization {
  public static $lang = 'es';
  public static $currentRoute = 'home';
  public static $currentParams = [];
  public static $langLoaded = false;

  // Unified Route Definition
  public static $routes = [
    'home' => [
      'languages' => [
        'es' => '/',
        'en' => '/en'
      ],
      'handler' => 'PageController@home'
    ],
    'founder' => [
      'languages' => [
        'es' => '/fundadores',
        'en' => '/en/founders'
      ],
      'handler' => 'PageController@founder'
    ],
    'packages' => [
      'languages' => [
        'es' => '/paquetes',
        'en' => '/en/packages'
      ],
      'handler' => 'PageController@packages'
    ],
    'product' => [
      'languages' => [
        'es' => '/producto/{id}',
        'en' => '/en/product/{id}'
      ],
      'handler' => 'ProductController@show'
    ]
  ];

  public static $slugMap = [
    'product' => [
      'bronze' => ['es' => 'bronce', 'en' => 'bronze'],
      'silver' => ['es' => 'plata', 'en' => 'silver'],
      'gold' => ['es' => 'oro', 'en' => 'gold'],
      'diamond' => ['es' => 'diamante', 'en' => 'diamond']
    ]
  ];

  public static function detectLangFromUri($uri) {
    $configPath = __DIR__ . '/../config.php';
    $availableLangs = ['es', 'en']; // Fallback

    if (file_exists($configPath)) {
      $config = require $configPath;
      if (isset($config['available_langs'])) {
        $availableLangs = array_keys($config['available_langs']);
      }
    }

    foreach ($availableLangs as $lang) {
      if ($lang === 'es') continue;
      if (preg_match('#^/' . preg_quote($lang) . '(/|$)#', $uri)) {
        return $lang;
      }
    }

    // Default
    return 'es';
  }

  public static function setLang($lang) {
    self::$lang = $lang;
  }

  public static function getLang() {
    return self::$lang;
  }

  /**
   * Load language file and make variables available globally
   * This should be called after setLang() and after info.php has defined $Company_Name, $Company_Fullname
   */
  public static function loadLanguage() {
    if (self::$langLoaded) {
      return; // Already loaded
    }

    $langMap = [
      'es' => 'esp.php',
      'en' => 'eng.php'
    ];

    $langFile = $langMap[self::$lang] ?? 'esp.php';
    $langPath = __DIR__ . '/languages/' . $langFile;

    if (file_exists($langPath)) {
      // Import $Company_Name and $Company_Fullname from global scope for use in language files
      $Company_Name = $GLOBALS['Company_Name'] ?? 'XTERRARE';
      $Company_Fullname = $GLOBALS['Company_Fullname'] ?? 'XTERRARE GLOBAL';
      $Investments = $GLOBALS['Investments'] ?? [];
      $FounderPacks = $GLOBALS['FounderPacks'] ?? [];

      // Include the language file - variables will be defined in local scope
      include $langPath;

      // Get all variables defined in the language file and make them global
      $definedVars = get_defined_vars();
      unset($definedVars['langMap'], $definedVars['langFile'], $definedVars['langPath']);

      foreach ($definedVars as $key => $value) {
        $GLOBALS[$key] = $value;
      }

      self::$langLoaded = true;

      // Initialize language-dependent variables from info.php
      if (function_exists('initLanguageVars')) {
        initLanguageVars();
      }
    }
  }

  public static function setCurrentRoute($key, $params = []) {
    self::$currentRoute = $key;
    self::$currentParams = $params;
  }

  public static function getCurrentUrl($lang) {
    $params = self::$currentParams;
    foreach ($params as $k => $v) {
      $params[$k] = self::translateParam(self::$currentRoute, $v, $lang);
    }
    return self::url(self::$currentRoute, $params, $lang);
  }

  public static function translateParam($routeKey, $value, $targetLang) {
    if (isset(self::$slugMap[$routeKey])) {
      if (isset(self::$slugMap[$routeKey][$value][$targetLang])) {
        return self::$slugMap[$routeKey][$value][$targetLang];
      }
    }
    return $value;
  }

  // Reverse translation: Slug -> Canonical
  public static function getCanonicalParam($routeKey, $slug, $sourceLang) {
    if (isset(self::$slugMap[$routeKey])) {
      foreach (self::$slugMap[$routeKey] as $canonical => $translations) {
        if (isset($translations[$sourceLang]) && $translations[$sourceLang] === $slug) {
          return $canonical;
        }
      }
    }
    return null;
  }

  public static function url($routeKey, $params = [], $lang = null) {
    $l = $lang ?? self::$lang;

    $path = self::$routes[$routeKey]['languages'][$l] ?? '/';

    if (!empty($params)) {
      foreach ($params as $param) {
        // Replace {id} or similar placeholders if they exist
        if (strpos($path, '{') !== false) {
          $path = preg_replace('/\{[^}]+\}/', $param, $path, 1);
        } else {
          // Fallback to append
          $path = rtrim($path, '/') . '/' . $param;
        }
      }
    }

    return $path;
  }
}
