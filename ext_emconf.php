<?php

########################################################################
# Extension Manager/Repository config file for ext "clicleaner".
#
# Auto generated 06-01-2011 18:20
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Cli Cleaner',
	'description' => 'Automation tool for clearing up TYPO3 cache and indexed_search index. For use with lowlevel cleaner. http://forge.typo3.org/projects/extension-clicleaner',
	'category' => 'be',
	'shy' => 0,
	'version' => '0.0.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Arnd Messer [die medienagenten]',
	'author_email' => 'LastName@medienagenten.de',
	'author_company' => 'die medienagenten',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.0.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:7:{s:9:"ChangeLog";s:4:"e5ad";s:10:"README.txt";s:4:"97a8";s:29:"class.tx_clicleaner_cache.php";s:4:"590f";s:29:"class.tx_clicleaner_index.php";s:4:"bd46";s:12:"ext_icon.gif";s:4:"cc76";s:17:"ext_localconf.php";s:4:"e647";s:13:"locallang.xml";s:4:"7951";}',
	'suggests' => array(
	),
);

?>