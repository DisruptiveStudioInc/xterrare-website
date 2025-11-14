<?php

//-------------------------------------------//
// OBTENER PÁGINA ACTUAL Y PARÁMETROS
//-------------------------------------------//

$Actual_Page = !empty($_GET['p']) ? $_GET['p'] : '';
$Actual_Page_Lan = $Actual_Page ? '&p=' . $Actual_Page : '';
$Client_Page_Id = (empty($_GET['id'])) ? '' : '&id=' . $_GET['id'];
$Hide = ($Actual_Page === 'home' || $Actual_Page === '') ? '' : 'none';

//-------------------------//
// CLIENT
//-------------------------//

$Company_Name  = "XTERRARE";
$Company_Fullname = "$Company_Name GLOBAL";

//-------------------------//
// INVESTMENTS
//-------------------------//

$Investments = array(
  'bronze' => [
    'area' => 140,
    'amount' => 250
  ],
  'silver' => [
    'area' => 180,
    'amount' => 550
  ],
  'gold' => [
    'area' => 200,
    'amount' => 1500
  ],
  'diamond' => [
    'area' => 50,
    'area2' => 60,
    'amount' => 3000
  ]
);

//-------------------------//
// LANGUAGES
//-------------------------//

include("idiomas/idiomas.php");
$idioma = $_SESSION["language"];

//-------------------------//
// META
//-------------------------//

$Description_Site  = $Description;
$Keywords_Site     = $Keywords;

//-------------------------//
// GENERAL
//-------------------------//

$Host_Site      = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"];
$Footer_Rights  = $Company_Name."© ".date("Y").". All rights reserved";

//-------------------------//
// LINKS
//-------------------------//

$link_01 = "membership";

// $Register = "https://my.xterrare.com/register/$user_replica";
// $Login    = "https://my.xterrare.com/login";
$Register = "#";
$Login    = "#";

// ---------------------------
// Armar bloque HTML dinámico
// ---------------------------

$ref = isset($user_replica) ? "?ref=$user_replica" : '';

//-------------------------//
// VIDEO VIMEO
//-------------------------//

$Video_vimeo = "1136718039";

//-------------------------//
// MENU
//-------------------------//

$Menu = array(
  array('#home','active',$Menu_01),
  array('#exterrare','',$Menu_02),
  array('#status','',$Menu_03),
  // array('?p=product&id=membership','',$Products_title_01)
  // array('','', $Menu_05)
);

//-------------------------//
// CONDITIONS
//-------------------------//

$idiomas = [
  'eng' => 'Eng',
  'esp' => 'Esp'
];

$Condicion_lan = isset($idiomas[$idioma]) ? $idiomas[$idioma] : 'Desconocido';

//-------------------------//
// CONTACT
//-------------------------//

$Email = "info@xterrare.com";
// $Schedule = "Mon-Fri: 9 am– 6 pm<br>Saturday: 9 am – 2pm<br>Sunday: Closed";
// $Phone = "(888) 456 7890";
// $Address = "Blvd. Kukulcan 1,<br>Puerto Juarez,<br>Zona Hotelera,<br>77500 Cancún, Q.R. México";

//-------------------------//
// LOOPS
//-------------------------//

$aboutSec = array(
  [
    'image' => 'mision.webp',
    'title' => $Mission_title,
    'text' => $Mission_text
  ],
  [
    'image' => 'vision.webp',
    'title' => $Vission_title,
    'text' => $Vission_text
  ],
  [
    'image' => 'valores.webp',
    'title' => $Values_title,
    'list' => [
      $Values_1,
      $Values_2,
      $Values_3,
      $Values_4,
      $Values_5
    ]
  ]
);

$sec01 = array(
  [
    'title' => $Journey_button_1,
    'text' => $Journey_text_1
  ],
  [
    'title' => $Journey_button_2,
    'text' => $Journey_text_2
  ],
  [
    'title' => $Journey_button_3,
    'text' => $Journey_text_3
  ],
  [
    'title' => $Journey_button_4,
    'text' => $Journey_text_4
  ]
);

$verticalSlides = array(
  [
    'id' => 1,
    'title' => $Letters_title_01,
    'text' => $Letters_text_01
  ],
  [
    'id' => 2,
    'title' => $Letters_title_02,
    'text' => $Letters_text_02
  ],
  [
    'id' => 3,
    'title' => $Letters_title_03,
    'text' => $Letters_text_03
  ],
  [
    'id' => 4,
    'title' => $Letters_title_04,
    'text' => $Letters_text_04
  ],
  [
    'id' => 5,
    'title' => $Letters_title_05,
    'text' => $Letters_text_05
  ]
);

$sec03 = array(
  [
    'id' => 1,
    'title' => $Vision_title_01,
    'text' => $Vision_text_01
  ],
  [
    'id' => 2,
    'title' => $Vision_title_02,
    'text' => $Vision_text_02
  ],
  [
    'id' => 3,
    'title' => $Vision_title_03,
    'text' => $Vision_text_03
  ],
  [
    'id' => 4,
    'title' => $Vision_title_04,
    'text' => $Vision_text_04
  ]
);

$sec04 = array(
  [
    'title' => 'Title 1',
    'text' => 'Text 1'
  ],
  [
    'title' => 'Title 2',
    'text' => 'Text 2'
  ],
  [
    'title' => 'Title 3',
    'text' => 'Text 3'
  ]
);

$homeProducts = array(
  [
    'id' => 1,
    'number' => 'one',
    'image' => 'bronce.webp',
    'background' => 'servicios.webp',
    'link' => 'bronze',
    'title' => $Products_title_01,
    'text' => $Products_text_01
  ],
  [
    'id' => 2,
    'number' => 'two',
    'image' => 'plata.webp',
    'background' => 'plata.webp',
    'link' => 'silver',
    'title' => $Products_title_02,
    'text' => $Products_text_02
  ],
  [
    'id' => 3,
    'number' => 'three',
    'image' => 'oro.webp',
    'background' => 'oro.webp',
    'link' => 'gold',
    'title' => $Products_title_03,
    'text' => $Products_text_03
  ],
  [
    'id' => 4,
    'number' => 'four',
    'image' => 'diamante.webp',
    'background' => 'diamante.webp',
    'link' => 'diamond',
    'title' => $Products_title_04,
    'text' => $Products_text_04
  ]
);

$sec07 = array(
  [
    'id' => 1,
    'title' => $Truth_title_01,
    'text' => $Truth_text_01
  ],
  [
    'id' => 2,
    'title' => $Truth_title_02,
    'text' => $Truth_text_02
  ],
  [
    'id' => 3,
    'title' => $Truth_title_03,
    'text' => $Truth_text_03
  ],
  [
    'id' => 4,
    'title' => $Truth_title_04,
    'text' => $Truth_text_04
  ]
);

$sec08 = array(
  [
    'id' => 1,
    'name' => 'revive',
    'text' => $Spirit_01
  ],
  [
    'id' => 2,
    'name' => 'rejuvenate',
    'text' => $Spirit_02
  ],
  [
    'id' => 3,
    'name' => 'restore',
    'text' => $Spirit_03
  ],
  [
    'id' => 4,
    'name' => 'renew',
    'text' => $Spirit_04
  ],
  [
    'id' => 5,
    'name' => 'reconnect',
    'text' => $Spirit_05
  ]
);

$testimonials = array(
  [
    'id' => 1,
    'name' => 'Jane Smith',
    'text' => $Testimonial1
  ],
  [
    'id' => 2,
    'name' => 'Michael Brown',
    'text' => $Testimonial2
  ],
  [
    'id' => 3,
    'name' => 'Alice Johnson',
    'text' => $Testimonial3
  ],
  [
    'id' => 4,
    'name' => 'Emily Davis',
    'text' => $Testimonial4
  ],
  [
    'id' => 5,
    'name' => 'David Wilson',
    'text' => $Testimonial5
  ],
  [
    'id' => 6,
    'name' => 'John Doe',
    'text' => $Testimonial6
  ]
);

//-------------------------//
// FUNCTIONS
//-------------------------//

function formatCurrency($number) {
  return number_format($number, 0, '.', ',');
}
