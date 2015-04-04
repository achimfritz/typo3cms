<?php

defined('TYPO3_MODE') || exit('Access denied.');

/**
 * Include additional configurations by TYPO3_CONTEXT server variable
 *
 * Of example:
 * - TYPO3_CONTEXT: Production/Staging
 * - Possible configuration files:
 *   1. typo3conf/AdditionalConfiguration/ProductionContext.php
 *   2. typo3conf/AdditionalConfiguration/Production/StagingContext.php (higher prio)
 *
 * Default TYPO3_CONTEXT values:
 * - Development
 * - Development/LM
 * - Development/DEVLOC
 * - Production/Staging
 * - Production
 *
 */

// @see TYPO3\Flow\Configuration\ConfigurationManager->__construct
$orderedListOfContextNames = array();
$currentContext = \TYPO3\CMS\Core\Utility\GeneralUtility::getApplicationContext();
do {
	$orderedListOfContextNames[] = (string)$currentContext;
} while (($currentContext = $currentContext->getParent()));
$orderedListOfContextNames = array_reverse($orderedListOfContextNames);
// @see TYPO3\Flow\Configuration\ConfigurationManager->loadConfiguration
foreach ($orderedListOfContextNames as $contextName) {
	$contextConfigFilePath = PATH_typo3conf . 'AdditionalConfiguration/' . $contextName . 'Context.php';
	if (file_exists($contextConfigFilePath)) {
		require($contextConfigFilePath);
	}
}
