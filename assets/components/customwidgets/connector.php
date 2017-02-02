<?php
if (file_exists(dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php')) {
    /** @noinspection PhpIncludeInspection */
    require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
}
else {
    require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/config.core.php';
}
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var customWidgets $customWidgets */
$customWidgets = $modx->getService('customwidgets', 'customWidgets', $modx->getOption('customwidgets_core_path', null,
        $modx->getOption('core_path') . 'components/customwidgets/') . 'model/customwidgets/'
);
$modx->lexicon->load('customwidgets:default');

// handle request
$corePath = $modx->getOption('customwidgets_core_path', null, $modx->getOption('core_path') . 'components/customwidgets/');
$path = $modx->getOption('processorsPath', $customWidgets->config, $corePath . 'processors/');
$modx->getRequest();

/** @var modConnectorRequest $request */
$request = $modx->request;
$request->handleRequest(array(
    'processors_path' => $path,
    'location' => '',
));