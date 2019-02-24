<?php
/** @var modX $modx */
/** @var array $sources */

$settings = array();

$tmp = array(
    'redirect' => array(
        'xtype' => 'combo-boolean',
        'value' => false,
        'area' => 'changedomain_main',
    ),
    'placeholders' => array(
        'xtype' => 'textfield',
        'value' => 'chd',
        'area' => 'changedomain_main',
    ),
    'save_log' => array(
        'xtype' => 'combo-boolean',
        'value' => false,
        'area' => 'changedomain_main',
    )
);

foreach ($tmp as $k => $v) {
    /** @var modSystemSetting $setting */
    $setting = $modx->newObject('modSystemSetting');
    $setting->fromArray(array_merge(
        array(
            'key' => 'changedomain_' . $k,
            'namespace' => PKG_NAME_LOWER,
        ), $v
    ), '', true, true);

    $settings[] = $setting;
}
unset($tmp);

return $settings;
