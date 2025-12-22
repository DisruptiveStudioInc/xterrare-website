<?php

$membership = array(
  'id' => 'basic',
  'icon' => 'basic_icon',
  'subtitle' => $Products_title_01,
  'text1' => $Products_text_inner_01,
  'text2' => $Products_text_inner_02,
  'price' => $Products_price_01,
  'ingredients' => $Ingredients_01,
  'ingredients_textCl' => 'tc-100',
  'ingredients_image' => 'basic_ingredients',
  'ingredients_list' => [
    $Ingredients_01_01, $Ingredients_01_02, $Ingredients_01_03, $Ingredients_01_04, $Ingredients_01_05, $Ingredients_01_06
  ],
  'benefits_sub' => $Benefits_sub_01,
  'benefits_list' => [
    $Benefits_01_tit_01, $Benefits_01_01, $Benefits_01_02, $Benefits_01_03, $Benefits_01_04
  ],
  'benefits_titles' => [
    $Benefits_01_tit_01, $Benefits_01_tit_02, $Benefits_01_tit_03, $Benefits_01_tit_04
  ],
  'started_title' => $Satarted_title_01,
  'started_sub' => $Satarted_sub_01,
  'started_list' => [
    [
      'title' => $Satarted_01_title,
      'text' => $Satarted_01_text
    ],
    [
      'title' => $Satarted_02_title,
      'text' => $Satarted_02_text
    ],
    [
      'title' => $Satarted_03_title,
      'text' => $Satarted_03_text
    ],
  ],
  'started_foot' => $Satarted_foot,
  'subpage' => $Satarted_subpage_01
);

$productContent = [
  'membership' => $membership
];

$productNavigaton = array(
  'membership' => [
    'link' => $link_01,
    'title' => $Products_title_01,
    'slogan' => $Products_01
  ]
);
