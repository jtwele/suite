<?php
// created: 2015-05-26 00:40:24
$dictionary["AOS_Products_Quotes"]["fields"]["contacts_aos_products_quotes_2"] = array (
  'name' => 'contacts_aos_products_quotes_2',
  'type' => 'link',
  'relationship' => 'contacts_aos_products_quotes_2',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_AOS_PRODUCTS_QUOTES_2_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_aos_products_quotes_2contacts_ida',
);
$dictionary["AOS_Products_Quotes"]["fields"]["contacts_aos_products_quotes_2_name"] = array (
  'name' => 'contacts_aos_products_quotes_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_AOS_PRODUCTS_QUOTES_2_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_aos_products_quotes_2contacts_ida',
  'link' => 'contacts_aos_products_quotes_2',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["AOS_Products_Quotes"]["fields"]["contacts_aos_products_quotes_2contacts_ida"] = array (
  'name' => 'contacts_aos_products_quotes_2contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_aos_products_quotes_2',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_AOS_PRODUCTS_QUOTES_2_FROM_AOS_PRODUCTS_QUOTES_TITLE',
);
