<?php
defined('TYPO3_MODE') or die();

//  since TYPO3 8
// @see https://docs.typo3.org/typo3cms/extensions/core/8-dev/Changelog/8.0/Feature-69863-UseNewStandaloneFluidAsComposerDependency.html#viewhelper-namespaces-can-be-extended-also-from-php
$GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['b'][] = 'OliverThiele\OtBootstrap3\ViewHelpers';

if (TYPO3_MODE === 'BE') {

    // Call hook for manipulation of frontend user object
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem'][$_EXTKEY] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) .
        'Classes/Backend/View/OtBootstrap3TtContentDrawItem.php:OtBootstrap3TtContentDrawItem';

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:ot_bootstrap3/Configuration/UserTS/UserTSconfigFile.t3s">'
        1.

    );

}
