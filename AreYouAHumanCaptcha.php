<?php
/**
 * AreYouAHuman ConfirmEdit Extension
 * http://areyouahuman.com
 *
 * Copyright (C) 2013 Nic Jansma <nic@nicj.net>
 * http://nicj.net/
 *
 * @author Nic Jansma <nic@nicj.net>
 *
 * @file
 * @ingroup Extensions
 *
 * @section LICENSE
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

require_once dirname( __FILE__ ) . '/ConfirmEdit.php';
$wgCaptchaClass = 'AreYouAHumanCaptcha';

$wgExtensionMessagesFiles['AreYouAHumanCaptcha'] = dirname( __FILE__ ) . '/AreYouAHumanCaptcha.i18n.php';
$wgAutoloadClasses['AreYouAHumanCaptcha'] = dirname( __FILE__ ) . '/AreYouAHumanCaptcha.class.php';

// Extension credits that show up on Special:Version
$wgExtensionCredits['specialpage'][] = array(
    'name' => 'ConfirmEdit:AreYouAHuman',
    'author' => 'Nic Jansma, Strix, et al.',
    'url' => 'https://github.com/nicjansma/mediawiki-ConfirmEdit-AreYouAHuman',
    'description' => 'ConfirmEdit AreYouAHuman integration',
    'version' => 'v1.1.0',
    'type' => 'antispam'
);
