<?php
#   Copyright 2015 Khaos Farbauti Ibn Oblivion
#
#   Licensed under the Apache License, Version 2.0 (the "License");
#   you may not use this file except in compliance with the License.
#   You may obtain a copy of the License at
#
#       http://www.apache.org/licenses/LICENSE-2.0
#
#   Unless required by applicable law or agreed to in writing, software
#   distributed under the License is distributed on an "AS IS" BASIS,
#   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
#   See the License for the specific language governing permissions and
#   limitations under the License.

if (!defined('DC_RC_PATH')) { return; }

$core->addBehavior('initWidgets',array('partager2Behaviors','initWidgets'));

class partager2Behaviors
{
        public static function initWidgets($widgets)
        {
                $widgets->create('partager2',__('Partager 2.0'),array('tplpartager2','partager2Widget'),null,__('List of links to Social Bookmarking websites'));

                $widgets->partager2->setting('title',__('Title:'),__('Share'));

		$widgets->partager2->setting('additious',__('Additious'),0,'check');
		$widgets->partager2->setting('blinkbits',__('Blinkbits'),0,'check');
		$widgets->partager2->setting('blinklist',__('Blinklist'),0,'check');
		$widgets->partager2->setting('blogmarks',__('Blogmarks'),0,'check');
		$widgets->partager2->setting('blogmemes',__('BlogMemes'),0,'check');
		$widgets->partager2->setting('blogonet',__('Blogonet'),0,'check');
		$widgets->partager2->setting('bluegger',__('Bluegger'),1,'check');
		$widgets->partager2->setting('co_mments',__('Co.mments'),0,'check');
		$widgets->partager2->setting('connotea',__('Connotea'),0,'check');
		$widgets->partager2->setting('del_icio_us',__('Del.icio.us'),1,'check');
		$widgets->partager2->setting('de_lirio_us',__('De.lirio.us'),0,'check');
		$widgets->partager2->setting('digg',__('Digg'),1,'check');
		$widgets->partager2->setting('facebook',__('Facebook'),1,'check');
		$widgets->partager2->setting('fark',__('Fark'),0,'check');
		$widgets->partager2->setting('feedmelinks',__('Feedmelinks'),0,'check');
		$widgets->partager2->setting('furl',__('Furl'),1,'check');
		$widgets->partager2->setting('fuzz',__('Fuzz'),1,'check');
		$widgets->partager2->setting('linkagogo',__('Linkagogo'),0,'check');
		$widgets->partager2->setting('ma_gnolia',__('Ma.gnolia'),0,'check');
		$widgets->partager2->setting('newsvine',__('Newsvine'),0,'check');
		$widgets->partager2->setting('netvouz',__('Netvouz'),0,'check');
		$widgets->partager2->setting('nuouz',__('Nuouz'),0,'check');
		$widgets->partager2->setting('pioche',__('Pioche'),0,'check');
		$widgets->partager2->setting('rawsugar',__('Rawsugar'),0,'check');
		$widgets->partager2->setting('reddit',__('Reddit'),0,'check');
		$widgets->partager2->setting('scoopeo',__('Scoopeo'),1,'check');
		$widgets->partager2->setting('scuttle',__('Scuttle'),0,'check');
		$widgets->partager2->setting('shadows',__('Shadows'),0,'check');
		$widgets->partager2->setting('simpy',__('Simpy'),0,'check');
		$widgets->partager2->setting('smarking',__('Smarking'),0,'check');
		$widgets->partager2->setting('spurl',__('Spurl'),0,'check');
		$widgets->partager2->setting('stumbleupon',__('Stumble Upon'),1,'check');
		$widgets->partager2->setting('tailrank',__('Tailrank'),0,'check');
		$widgets->partager2->setting('twitter',__('Twitter'),0,'check');
		$widgets->partager2->setting('viadeo',__('Viadeo'),0,'check');
		$widgets->partager2->setting('wikio_fr',__('Wikio (FR)'),1,'check');
		$widgets->partager2->setting('wikio_it',__('Wikio (IT)'),0,'check');
		$widgets->partager2->setting('wikio_de',__('Wikio (DE)'),0,'check');
		$widgets->partager2->setting('wikio_es',__('Wikio (ES)'),0,'check');
		$widgets->partager2->setting('wikio_us',__('Wikio (US)'),0,'check');
		$widgets->partager2->setting('wikio_uk',__('Wikio (UK)'),0,'check');
		$widgets->partager2->setting('wists',__('Wists'),0,'check');
		$widgets->partager2->setting('yahoo',__('Yahoo MyWeb'),1,'check');

		$widgets->partager2->setting('fichier',__('Sprite file (optional):'),'');
		$widgets->partager2->setting('css',__('CSS (optional):'),'');
		$widgets->partager2->setting('start',__('Pixel start (optional):'),'');
		$widgets->partager2->setting('step',__('Pixel size (optional):'),'');

		$widgets->partager2->setting('content_only',__('Content only'),0,'check');
		$widgets->partager2->setting('class',__('CSS class:'),'');
		$widgets->partager2->setting('offline',__('Offline'),0,'check');
        }
}
?>
