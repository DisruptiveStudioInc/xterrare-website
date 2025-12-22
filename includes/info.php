<?php

// use Includes\Localization;

// Access the global user_replica variable

use Includes\Localization;

$user_replica = $GLOBALS['user_replica'] ?? null;

$Actual_Page = !empty($_GET['p']) ? $_GET['p'] : '';
$Actual_Page_Lan = $Actual_Page ? '&p=' . $Actual_Page : '';
$Client_Page_Id = (empty($_GET['id'])) ? '' : '&id=' . $_GET['id'];
$Hide = ($Actual_Page === 'home' || $Actual_Page === '') ? '' : 'none';

//-------------------------//
// CLIENT
//-------------------------//

$Company_Name  = "XTERRARE";
$Company_Fullname = "$Company_Name GLOBAL";

// Make these available globally for language files
$GLOBALS['Company_Name'] = $Company_Name;
$GLOBALS['Company_Fullname'] = $Company_Fullname;

//-------------------------//
// FUNCTIONS
//-------------------------//

if (!function_exists('formatCurrency')) {
  function formatCurrency($number) {
    return number_format($number, 0, '.', ',');
  }
}

/**
 * Initialize language-dependent variables
 * Call this after language has been loaded via Localization::loadLanguage()
 */
if (!function_exists('initLanguageVars')) {
  function initLanguageVars() {
    // Get language variables from globals
    $Description = $GLOBALS['Description'] ?? '';
    $Keywords = $GLOBALS['Keywords'] ?? '';
    $Menu_01 = $GLOBALS['Menu_01'] ?? '';
    $Menu_02 = $GLOBALS['Menu_02'] ?? '';
    $Menu_03 = $GLOBALS['Menu_03'] ?? '';
    $Company_Name = $GLOBALS['Company_Name'] ?? 'XTERRARE';

    // Set META variables
    $GLOBALS['Description_Site'] = $Description;
    $GLOBALS['Keywords_Site'] = $Keywords;

    // Set MENU
    $GLOBALS['Menu'] = array(
      array('#home','active',$Menu_01),
      array('#exterrare','',$Menu_02),
      array('#status','',$Menu_03),
    );

    // Set Footer Rights
    $GLOBALS['Footer_Rights'] = $Company_Name."© ".date("Y").". All rights reserved";
  }
}

//-------------------------//
// INVESTMENTS
//-------------------------//

$Investments = array(
  'bronze' => [
    'area' => 160,
    'amount' => 250
  ],
  'silver' => [
    'area' => 200,
    'amount' => 550
  ],
  'gold' => [
    'area' => 220,
    'amount' => 1500
  ],
  'diamond' => [
    'area' => 50,
    'area2' => 60,
    'amount' => 3000
  ]
);

//-------------------------//
// GENERAL
//-------------------------//

$Host_Site      = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"];

// Make these available globally
$GLOBALS['Host_Site'] = $Host_Site;
$GLOBALS['Investments'] = $Investments;

//-------------------------//
// LINKS
//-------------------------//

$link_01 = "membership";

// $Register = "https://my.xterrare.com/register/$user_replica";
// $Login    = "https://my.xterrare.com/login";
$Register = "#";
$Login    = "#";

$ref = isset($user_replica) ? "?ref=$user_replica" : '';

// Make these available globally
$GLOBALS['Register'] = $Register;
$GLOBALS['Login'] = $Login;
$GLOBALS['ref'] = $ref;

//-------------------------//
// CONDITIONS
//-------------------------//

$idiomas = [
  'eng' => 'Eng',
  'esp' => 'Esp'
];

$GLOBALS['idiomas'] = $idiomas;

//-------------------------//
// CONTACT
//-------------------------//

$Email = "info@xterrare.com";
$GLOBALS['Email'] = $Email;
