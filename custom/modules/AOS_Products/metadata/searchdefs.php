<?php
$module_name = 'AOS_Products';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'category' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_CATEGORY',
        'width' => '10%',
        'default' => true,
        'name' => 'category',
      ),
      'aos_product_category_name' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_AOS_PRODUCT_CATEGORYS_NAME',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'AOS_PRODUCT_CATEGORY_ID',
        'name' => 'aos_product_category_name',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'category' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_CATEGORY',
        'width' => '10%',
        'default' => true,
        'name' => 'category',
      ),
      'aos_product_category_name' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_AOS_PRODUCT_CATEGORYS_NAME',
        'id' => 'AOS_PRODUCT_CATEGORY_ID',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'aos_product_category_name',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
