<?php return array(
    'root' => array(
        'name' => '__root__',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => null,
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => false,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => null,
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wordpress/mcp-adapter' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'wordpress/php-mcp-schema' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'wp-media/apply-filters-typed' => array(
            'pretty_version' => 'v1.2',
            'version' => '1.2.0.0',
            'reference' => 'd8f5bca83e85196d1f01d92283b63ef6f886ac4d',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wp-media/apply-filters-typed',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wp-media/mcp-oauth' => array(
            'pretty_version' => 'v1.0.3',
            'version' => '1.0.3.0',
            'reference' => 'c19fc9ec1e084f678f0eb2cf049f3f752712ceac',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wp-media/mcp-oauth',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
