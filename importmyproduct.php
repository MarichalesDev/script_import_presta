
<?php  
header("Content-Type: text/html;charset=utf-8");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('_PS_ADMIN_DIR_', getcwd());
include(_PS_ADMIN_DIR_.'/../config/config.inc.php');
include(_PS_ADMIN_DIR_.'/functions.php');
include_once '../controllers/admin/AdminImportController.php';

function loadProductsPost() {
  $_POST = array (
    'controller' => 'AdminImport',
    'forceIDs' => '1',
    'skip' => '1',
    'csv' => 'products_import.csv',
    'entity' => '1',
    'truncate' => '1',
    'separator' => ';',
    'multiple_value_separator' => ',',
    'iso_lang' => 'es',
    'convert' => '',
    'import' => 'Importar datos csv',
    'type_value' => array(
      0 => 'id',
      1 => 'active',
      2 => 'name',
      3 => 'category',
      4 => 'price_tex',
      5 => 'no',
      6 => 'wholesale_price',
      7 => 'on_sale',
      8 => 'reduction_price',
      9 => 'reduction_percent',
      10 => 'reduction_from',
      11 => 'reduction_to',
      12 => 'reference',
      13 => 'supplier_reference',
      14 => 'supplier',
      15 => 'manufacturer',
      16 => 'ean13',
      17 => 'upc',
      18 => 'ecotax',
      19 => 'width',
      20 => 'height',
      21 => 'depth',
      22 => 'weight',
      23 => 'no',
      24 => 'no',
      25 => 'quantity',
      26 => 'minimal_quantity',
      27 => 'no',
      28 => 'no',
      29 => 'visibility',
      30 => 'additional_shipping_cost',
      31 => 'no',
      32 => 'no',
      33 => 'summary',
      34 => 'description',
      35 => 'tags',
      36 => 'meta_title',
      37 => 'meta_keywords',
      38 => 'meta_description',
      39 => 'url_rewritten',
      40 => 'text_when_in_stock',
			41 => 'text_when_backorder_allowed',
      42 => 'no',
      43 => 'no',
      44 => 'no',
      45 => 'show_price',
			46 => 'image',
    ),
  );
}
loadProductsPost();
$import = New AdminImportController();
$import->productImport();


if($import->productImport()){
  echo "execute";
}

?>