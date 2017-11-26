<?php

/**
 * Auto-lock Topics Extension for phpBB.
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.1] (https://github.com/phpBBTraducoes)
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GNU GPL-2.0
 */

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
 * @ignore
 */
if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'ACP_FORUM_AUTO_LOCK_SETTINGS'	=> 'Configurações Auto-trancar',
	'ACP_ENABLE_AUTO_LOCK'			=> 'Ativar auto-trancar',
	'ACP_AUTO_LOCK_ANNOUNCEMENTS'	=> 'Auto-trancar anúncios',
	'ACP_AUTO_LOCK_STICKIES'		=> 'Auto-trancar fixos',
	'ACP_AUTO_LOCK_POLLS'			=> 'Auto-trancar enquetes',
	'ACP_AUTO_LOCK_POLLS_EXPLAIN'	=> 'Trancar tópicos com enquetes não votadas baseadas na idade do post em dias.',
	'ACP_AUTO_LOCK_DAYS'			=> 'Auto-trancar post por idade',
	'ACP_AUTO_LOCK_DAYS_EXPLAIN'	=> 'Número de dias desde o último post.',
	'ACP_AUTO_LOCK_FREQ'		=> 'Freqüência do Auto-trancar',
	'ACP_AUTO_LOCK_FREQ_EXPLAIN' => 'Tempo em dias entre os eventos do Auto-trancar.',

	'LOG_AUTO_LOCK_TOPIC'	=> '<strong>Tópicos auto-trancados</strong><br />» %s'
]);
