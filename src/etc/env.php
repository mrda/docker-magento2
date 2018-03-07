<?php
return array (
  'backend' => 
  array (
    'frontName' => 'admin_s6wttl',
  ),
  'db' => 
  array (
    'connection' => 
    array (
      'indexer' => 
      array (
        'host' => 'db',
        'dbname' => 'magento2',
        'username' => 'root',
        'password' => 'magento2',
        'active' => '1',
        'persistent' => NULL,
      ),
      'default' => 
      array (
        'host' => 'db',
        'dbname' => 'magento2',
        'username' => 'root',
        'password' => 'magento2',
        'active' => '1',
      ),
    ),
    'table_prefix' => '',
  ),
'cache' =>
array(
   'frontend' =>
   array(
      'default' =>
      array(
         'backend' => 'Cm_Cache_Backend_Redis',
         'backend_options' =>
         array(
            'server' => 'redis',
            'database' => '0',
            'port' => '6379'
            ),
    ),
    'page_cache' =>
    array(
      'backend' => 'Cm_Cache_Backend_Redis',
      'backend_options' =>
       array(
         'server' => 'redis',
         'port' => '6379',
         'database' => '1',
         'compress_data' => '0'
       )
    )
  )
),
  'crypt' =>
  array (
    'key' => 'a17d3df0f3339497546bf0f177d5e0b9',
  ),
  'session' => 
  array (
    'save' => 'files',
  ),
  'resource' => 
  array (
    'default_setup' => 
    array (
      'connection' => 'default',
    ),
  ),
  'x-frame-options' => 'SAMEORIGIN',
  'MAGE_MODE' => 'production',
  'cache_types' => 
  array (
    'config' => 1,
    'layout' => 1,
    'block_html' => 1,
    'collections' => 1,
    'reflection' => 1,
    'db_ddl' => 1,
    'eav' => 1,
    'customer_notification' => 1,
    'target_rule' => 1,
    'full_page' => 1,
    'config_integration' => 1,
    'config_integration_api' => 1,
    'translate' => 1,
    'config_webservice' => 1,
    'store_locator' => 1,
    'compiled_config' => 1,
  ),
  'install' => 
  array (
    'date' => 'Wed, 13 Dec 2017 01:18:30 +0000',
  ),
);
