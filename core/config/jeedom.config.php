<?php

/* This file is part of Jeedom.
*
* Jeedom is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* Jeedom is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
*/

global $JEEDOM_INTERNAL_CONFIG;
$JEEDOM_INTERNAL_CONFIG = array(
	'eqLogic' => array(
		'category' => array(
			'heating' => array('name' => __('Chauffage',__FILE__), 'icon' => 'fas fa-fire'),
			'security' => array('name' => __('Sécurité',__FILE__), 'icon' => 'fas fa-lock'),
			'energy' => array('name' => __('Energie',__FILE__), 'icon' => 'fas fa-bolt'),
			'light' => array('name' => __('Lumière',__FILE__), 'icon' => 'far fa-lightbulb'),
			'opening' => array('name' => __('Ouvrant',__FILE__), 'icon' => 'fas fa-door-open'),
			'automatism' => array('name' => __('Automatisme',__FILE__), 'icon' => 'fas fa-magic'),
			'multimedia' => array('name' => __('Multimédia',__FILE__), 'icon' => 'fas fa-sliders-h'),
			'default' => array('name' => __('Autre',__FILE__), 'icon' => 'far fa-circle'),
		),
		'style' => array(
			'noactive' => '-webkit-filter: grayscale(100%);-moz-filter: grayscale(100);-o-filter: grayscale(100%);-ms-filter: grayscale(100%);filter: grayscale(100%); opacity: 0.35;',
		),
		'displayType' => array(
			'dashboard' => array('name' => 'Dashboard'),
			'mobile' => array('name' => 'Mobile'),
		),
	),
	'interact' => array(
		'test' => array(
			'>' => array('superieur', '>', 'plus de', 'depasse'),
			'<' => array('inferieur', '<', 'moins de', 'descends en dessous'),
			'=' => array('egale', '=', 'vaut'),
			'!=' => array('different'),
		),
	),
	'plugin' => array(
		'category' => array(
			'security' => array('name' => __('Sécurité',__FILE__), 'icon' => 'fas fa-lock'),
			'automation protocol' => array('name' => __('Protocole domotique',__FILE__), 'icon' => 'fas fa-rss'),
			'home automation protocol' => array('name' => __('Passerelle domotique',__FILE__), 'icon' => 'fas fa-asterisk'),
			'programming' => array('name' => __('Programmation',__FILE__), 'icon' => 'fas fa-code'),
			'organization' => array('name' => __('Organisation',__FILE__), 'icon' => 'far fa-calendar-alt', 'alias' => array('travel', 'finance')),
			'weather' => array('name' => __('Météo',__FILE__), 'icon' => 'far fa-sun'),
			'communication' => array('name' => __('Communication',__FILE__), 'icon' => 'fas fa-comment'),
			'devicecommunication' => array('name' => __('Objets connectés',__FILE__), 'icon' => 'fas fa-language'),
			'multimedia' => array('name' => __('Multimédia',__FILE__), 'icon' => 'fas fa-sliders-h'),
			'wellness' => array('name' => __('Confort',__FILE__), 'icon' => 'far fa-user'),
			'monitoring' => array('name' => __('Monitoring',__FILE__), 'icon' => 'fas fa-tachometer-alt'),
			'health' => array('name' => __('Santé',__FILE__), 'icon' => 'icon loisir-runner5'),
			'nature' => array('name' => __('Nature',__FILE__), 'icon' => 'icon nature-leaf32'),
			'automatisation' => array('name' => __('Automatisme',__FILE__), 'icon' => 'fas fa-magic'),
			'energy' => array('name' => __('Energie',__FILE__), 'icon' => 'fas fa-bolt'),
			'other' => array('name' => __('Autre',__FILE__), 'icon' => 'fas fa-bars'),
		),
	),
	'alerts' => array(
		'timeout' => array('name' => __('Timeout',__FILE__), 'icon' => 'far fa-clock', 'level' => 6, 'check' => false, 'color' => '#FF0000'),
		'batterywarning' => array('name' => __('Batterie en Warning',__FILE__), 'icon' => 'fas fa-battery-quarter', 'level' => 2, 'check' => false, 'color' => '#FFAB00'),
		'batterydanger' => array('name' => __('Batterie en Danger',__FILE__), 'icon' => 'fas fa-battery-empty', 'level' => 3, 'check' => false, 'color' => '#FF0000'),
		'warning' => array('name' => __('Warning',__FILE__), 'icon' => 'fas fa-bell', 'level' => 4, 'check' => true, 'color' => '#FFAB00'),
		'danger' => array('name' => __('Danger',__FILE__), 'icon' => 'fas fa-exclamation', 'level' => 5, 'check' => true, 'color' => '#FF0000'),
	),
	'cmd' => array(
		'widgets' => array(
			'action' => array(
				'other'=>array(
					'light' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon_yellow icon jeedom-lumiere-on\'></i>','#_icon_off_#' => '<i class=\'icon jeedom-lumiere-off\'></i>')),
					'circle' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'fas fa-circle\'></i>','#_icon_off_#' => '<i class=\'far fa-circle\'></i>')),
					'fan' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon jeedom-ventilo\'></i>','#_icon_off_#' => '<i class=\'fas fa-times\'></i>')),
					'garage' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon_green icon jeedom-garage-ferme\'></i>','#_icon_off_#' => '<i class=\'icon_red icon jeedom-garage-ouvert\'></i>')),
					'lock' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon_green icon jeedom-lock-ferme\'></i>','#_icon_off_#' => '<i class=\'icon_orange icon jeedom-lock-ouvert\'></i>')),
					'prise' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon jeedom-prise\'></i>','#_icon_off_#' => '<i class=\'fas fa-times\'></i>')),
					'sprinkle' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon_blue icon nature-watering1\'></i>','#_icon_off_#' => '<i class=\'fas fa-times\'></i>')),
					'timeLight' => array('template' => 'tmplicon','replace' => array('#_time_widget_#' => '1','#_icon_on_#' => '<i class=\'icon_yellow icon jeedom-lumiere-on\'></i>','#_icon_off_#' => '<i class=\'icon jeedom-lumiere-off\'></i>')),
					'timeCircle' => array('template' => 'tmplicon','replace' => array('#_time_widget_#' => '1','#_icon_on_#' => '<i class=\'fas fa-circle\'></i>','#_icon_off_#' => '<i class=\'fas fa-circle-thin\'></i>')),
					'timeFan' => array('template' => 'tmplicon','replace' => array('#_time_widget_#' => '1','#_icon_on_#' => '<i class=\'icon jeedom-ventilo\'></i>','#_icon_off_#' => '<i class=\'fas fa-times\'></i>')),
					'timeGarage' => array('template' => 'tmplicon','replace' => array('#_time_widget_#' => '1','#_icon_on_#' => '<i class=\'icon_green icon jeedom-garage-ferme\'></i>','#_icon_off_#' => '<i class=\'icon_red icon jeedom-garage-ouvert\'></i>')),
					'timeLock' => array('template' => 'tmplicon','replace' => array('#_time_widget_#' => '1','#_icon_on_#' => '<i class=\'icon jeedom-lock-ferme\'></i>','#_icon_off_#' => '<i class=\'icon jeedom-lock-ouvert\'></i>')),
					'timePrise' => array('template' => 'tmplicon','replace' => array('#_time_widget_#' => '1','#_icon_on_#' => '<i class=\'icon jeedom-prise\'></i>','#_icon_off_#' => '<i class=\'fas fa-times\'></i>')),
					'timeSprinkle' => array('template' => 'tmplicon','replace' => array('#_time_widget_#' => '1','#_icon_on_#' => '<i class=\'icon_blue icon nature-watering1\'></i>','#_icon_off_#' => '<i class=\'fas fa-times\'></i>')
				),
			),
			'slider'=>array(
				'light' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon_yellow icon jeedom-lumiere-on\'></i>','#_icon_off_#' => '<i class=\'icon jeedom-lumiere-off\'></i>')),
				'timeLight' => array('template' => 'tmplicon','replace' => array('#_time_widget_#' => '1','#_icon_on_#' => '<i class=\'icon_yellow icon jeedom-lumiere-on\'></i>','#_icon_off_#' => '<i class=\'icon jeedom-lumiere-off\'></i>')),
			)
		),
		'info' => array(
			'binary'=>array(
				'default' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon_green fas fa-check\'></i>','#_icon_off_#' => '<i class=\'icon_red fas fa-times\'></i>')),
				'line' => array('template' => 'tmpliconline','replace' => array('#_icon_on_#' => '<i class=\'icon_green fas fa-check\'></i>','#_icon_off_#' => '<i class=\'icon_red fas fa-times\'></i>')),
				'alert' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon_green fas fa-check\'></i>','#_icon_off_#' => '<i class=\'icon_red icon jeedom-alerte2\'></i>')),
				'door' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon_green icon jeedom-porte-ferme\'></i>','#_icon_off_#' => '<i class=\'icon_red icon jeedom-porte-ouverte\'></i>')),
				'heat' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon_red icon jeedom-feu\'></i>','#_icon_off_#' => '<i class=\'fas fa-times\'></i>')),
				'light' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon_yellow icon jeedom-lumiere-on\'></i>','#_icon_off_#' => '<i class=\'icon jeedom-lumiere-off\'></i>')),
				'lock' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon jeedom-lock-ferme\'></i>','#_icon_off_#' => '<i class=\'icon_red icon jeedom-lock-ouvert\'></i>')),
				'presence' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon_green fas fa-check\'></i>','#_icon_off_#' => '<i class=\'icon_red icon jeedom-mouvement\'></i>')),
				'prise' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon jeedom-prise\'></i>','#_icon_off_#' => '<i class=\'fas fa-times\'></i>')),
				'window' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon_green icon jeedom-fenetre-ferme\'></i>','#_icon_off_#' => '<i class=\'icon_red icon jeedom-fenetre-ouverte\'></i>')),
				'flood' => array('template' => 'tmplicon','replace' => array('#_icon_on_#' => '<i class=\'icon_green fas fa-tint-slash\'></i>','#_icon_off_#' => '<i class=\'icon_blue fas fa-tint\'></i>')),
				'timeDoor' => array('template' => 'tmplicon','replace' => array('#_time_widget_#' => '1','#_icon_on_#' => '<i class=\'icon_green icon jeedom-porte-ferme\'></i>','#_icon_off_#' => '<i class=\'icon_red icon jeedom-porte-ouverte\'></i>')),
				'timePresence' => array('template' => 'tmplicon','replace' => array('#_time_widget_#' => '1','#_icon_on_#' => '<i class=\'icon_green fas fa-check\'></i>','#_icon_off_#' => '<i class=\'icon_red icon jeedom-mouvement\'></i>')),
				'timeWindow' => array('template' => 'tmplicon','replace' => array('#_time_widget_#' => '1','#_icon_on_#' => '<i class=\'icon_green icon jeedom-fenetre-ferme\'></i>','#_icon_off_#' => '<i class=\'icon_red icon jeedom-fenetre-ouverte\'></i>')),
				'timeAlert' => array('template' => 'tmplicon','replace' => array('#_time_widget_#' => '1','#_icon_on_#' => '<i class=\'icon_green fas fa-check\'></i>','#_icon_off_#' => '<i class=\'icon_red icon jeedom-alerte2\'></i>')),
			),
			'numeric'=>array(
				'heatPiloteWire' => array('template' => 'tmplmultistate',
				'test' => array(
					array('operation' => '#value# == 3','state_light' => '<i class=\'icon jeedom-pilote-eco\'></i>'),
					array('operation' => '#value# == 2','state_light' => '<i class=\'icon jeedom-pilote-off\'></i>'),
					array('operation' => '#value# == 1','state_light' => '<i class=\'icon jeedom-pilote-hg\'></i>'),
					array('operation' => '#value# == 0','state_light' => '<i class=\'icon jeedom-pilote-conf\'></i>')
				)),
				'timeHeatPiloteWire' => array('template' => 'tmplmultistate',
				'replace' => array('#_time_widget_#' => '1'),
				'test' => array(
					array('operation' => '#value# == 3','state_light' => '<i class=\'icon jeedom-pilote-eco\'></i>'),
					array('operation' => '#value# == 2','state_light' => '<i class=\'icon jeedom-pilote-off\'></i>'),
					array('operation' => '#value# == 1','state_light' => '<i class=\'icon jeedom-pilote-hg\'></i>'),
					array('operation' => '#value# == 0','state_light' => '<i class=\'icon jeedom-pilote-conf\'></i>')
				)),
				'heatPiloteWireQubino' => array('template' => 'tmplmultistate',
				'test' => array(
					array('operation' => '#value# >= 51 && #value# <= 99','state_light' => '<i class=\'icon jeedom-pilote-conf\'></i>'),
					array('operation' => '#value# >= 41 && #value# <= 50','state_light' => '<i class=\'icon jeedom-pilote-conf\'></i><sup style=\'font-size: 0.3em; margin-left: 1px\'>-1</sup>'),
					array('operation' => '#value# >= 31 && #value# <= 40','state_light' => '<i class=\'icon jeedom-pilote-conf\'></i><sup style=\'font-size: 0.3em; margin-left: 1px\'>-2</sup>'),
					array('operation' => '#value# >= 21 && #value# <= 30','state_light' => '<i class=\'icon jeedom-pilote-eco\'></i>'),
					array('operation' => '#value# >= 11 && #value# <= 20','state_light' => '<i class=\'icon jeedom-pilote-hg\'></i>'),
					array('operation' => '#value# >= 0 && #value# <= 10','state_light' => '<i class=\'icon jeedom-pilote-off\'></i>'),
				)),
				'timeHeatPiloteWireQubino' => array('template' => 'tmplmultistate',
				'replace' => array('#_time_widget_#' => '1'),
				'test' => array(
					array('operation' => '#value# >= 51 && #value# <= 99','state_light' => '<i class=\'icon jeedom-pilote-conf\'></i>'),
					array('operation' => '#value# >= 41 && #value# <= 50','state_light' => '<i class=\'icon jeedom-pilote-conf\'></i><sup style=\'font-size: 0.3em; margin-left: 1px\'>-1</sup>'),
					array('operation' => '#value# >= 31 && #value# <= 40','state_light' => '<i class=\'icon jeedom-pilote-conf\'></i><sup style=\'font-size: 0.3em; margin-left: 1px\'>-2</sup>'),
					array('operation' => '#value# >= 21 && #value# <= 30','state_light' => '<i class=\'icon jeedom-pilote-eco\'></i>'),
					array('operation' => '#value# >= 11 && #value# <= 20','state_light' => '<i class=\'icon jeedom-pilote-hg\'></i>'),
					array('operation' => '#value# >= 0 && #value# <= 10','state_light' => '<i class=\'icon jeedom-pilote-off\'></i>'),
				))
			)
		)
	),
	'generic_type' => array(
		'LIGHT_TOGGLE' => array('name' => __('Lumière Toggle',__FILE__), 'family' => __('Lumière',__FILE__), 'type' => 'Action'),
		'LIGHT_STATE' => array('name' => __('Lumière Etat',__FILE__), 'family' => __('Lumière',__FILE__), 'type' => 'Info'),
		'LIGHT_ON' => array('name' => __('Lumière Bouton On',__FILE__), 'family' => __('Lumière',__FILE__), 'type' => 'Action'),
		'LIGHT_OFF' => array('name' => __('Lumière Bouton Off',__FILE__), 'family' => __('Lumière',__FILE__), 'type' => 'Action'),
		'LIGHT_SLIDER' => array('name' => __('Lumière Slider',__FILE__), 'family' => __('Lumière',__FILE__), 'type' => 'Action'),
		'LIGHT_BRIGHTNESS' => array('name' => __('Lumière Luminosité',__FILE__), 'family' => __('Lumière',__FILE__), 'type' => 'Info', 'noapp' => true),
		'LIGHT_COLOR' => array('name' => __('Lumière Couleur',__FILE__), 'family' => __('Lumière',__FILE__), 'type' => 'Info'),
		'LIGHT_SET_COLOR' => array('name' => __('Lumière Couleur',__FILE__), 'family' => __('Lumière',__FILE__), 'type' => 'Action'),
		'LIGHT_MODE' => array('name' => __('Lumière Mode',__FILE__), 'family' => __('Lumière',__FILE__), 'type' => 'Action'),
		'LIGHT_STATE_BOOL' => array('name' => __('Lumière Etat (Binaire)',__FILE__), 'family' => __('Lumière',__FILE__), 'type' => 'Info', 'noapp' => true),
		'LIGHT_COLOR_TEMP' => array('name' => __('Lumière Température Couleur',__FILE__), 'family' => __('Lumière',__FILE__), 'type' => 'Info', 'noapp' => true),
		'LIGHT_SET_COLOR_TEMP' => array('name' => __('Lumière Température Couleur',__FILE__), 'family' => __('Lumière',__FILE__), 'type' => 'Action', 'noapp' => true),
		'ENERGY_STATE' => array('name' => __('Prise Etat',__FILE__), 'family' => __('Prise',__FILE__), 'type' => 'Info'),
		'ENERGY_ON' => array('name' => __('Prise Bouton On',__FILE__), 'family' => __('Prise',__FILE__), 'type' => 'Action'),
		'ENERGY_OFF' => array('name' => __('Prise Bouton Off',__FILE__), 'family' => __('Prise',__FILE__), 'type' => 'Action'),
		'ENERGY_SLIDER' => array('name' => __('Prise Slider',__FILE__), 'family' => __('Prise',__FILE__), 'type' => 'Action'),
		'FLAP_STATE' => array('name' => __('Volet Etat',__FILE__), 'family' => __('Volet',__FILE__), 'type' => 'Info'),
		'FLAP_UP' => array('name' => __('Volet Bouton Monter',__FILE__), 'family' => __('Volet',__FILE__), 'type' => 'Action'),
		'FLAP_DOWN' => array('name' => __('Volet Bouton Descendre',__FILE__), 'family' => __('Volet',__FILE__), 'type' => 'Action'),
		'FLAP_STOP' => array('name' => __('Volet Bouton Stop',__FILE__), 'family' => __('Volet',__FILE__), 'type' => 'Action'),
		'FLAP_SLIDER' => array('name' => __('Volet Bouton Slider',__FILE__), 'family' => __('Volet',__FILE__), 'type' => 'Action'),
		'FLAP_BSO_STATE' => array('name' => __('Volet BSO Etat',__FILE__), 'family' => __('Volet',__FILE__), 'type' => 'Info'),
		'FLAP_BSO_UP' => array('name' => __('Volet BSO Bouton Monter',__FILE__), 'family' => __('Volet',__FILE__), 'type' => 'Action'),
		'FLAP_BSO_DOWN' => array('name' => __('Volet BSO Bouton Descendre',__FILE__), 'family' => __('Volet',__FILE__), 'type' => 'Action'),
		'HEATING_ON' => array('name' => __('Chauffage fil pilote Bouton ON',__FILE__), 'family' => __('Chauffage',__FILE__), 'type' => 'Action'),
		'HEATING_OFF' => array('name' => __('Chauffage fil pilote Bouton OFF',__FILE__), 'family' => __('Chauffage',__FILE__), 'type' => 'Action'),
		'HEATING_STATE' => array('name' => __('Chauffage fil pilote Etat',__FILE__), 'family' => __('Chauffage',__FILE__), 'type' => 'Info'),
		'HEATING_OTHER' => array('name' => __('Chauffage fil pilote Bouton',__FILE__), 'family' => __('Chauffage',__FILE__), 'type' => 'Action'),
		'LOCK_STATE' => array('name' => __('Serrure Etat',__FILE__), 'family' => __('Ouvrant',__FILE__), 'type' => 'Info'),
		'LOCK_OPEN' => array('name' => __('Serrure Bouton Ouvrir',__FILE__), 'family' => __('Ouvrant',__FILE__), 'type' => 'Action'),
		'LOCK_CLOSE' => array('name' => __('Serrure Bouton Fermer',__FILE__), 'family' => __('Ouvrant',__FILE__), 'type' => 'Action'),
		'SIREN_STATE' => array('name' => __('Sirène Etat',__FILE__), 'family' => __('Sécurité',__FILE__), 'type' => 'Info'),
		'SIREN_OFF' => array('name' => __('Sirène Bouton Off',__FILE__), 'family' => __('Sécurité',__FILE__), 'type' => 'Action'),
		'SIREN_ON' => array('name' => __('Sirène Bouton On',__FILE__), 'family' => __('Sécurité',__FILE__), 'type' => 'Action'),
		'THERMOSTAT_STATE' => array('name' => __('Thermostat Etat (BINAIRE) (pour Plugin Thermostat uniquement)',__FILE__), 'family' => __('Thermostat',__FILE__), 'type' => 'Info'),
		'THERMOSTAT_TEMPERATURE' => array('name' => __('Thermostat Température ambiante',__FILE__), 'family' => __('Thermostat',__FILE__), 'type' => 'Info'),
		'THERMOSTAT_SET_SETPOINT' => array('name' => __('Thermostat consigne ',__FILE__), 'family' => __('Thermostat',__FILE__), 'type' => 'Action'),
		'THERMOSTAT_SETPOINT' => array('name' => __('Thermostat consigne',__FILE__), 'family' => __('Thermostat',__FILE__), 'type' => 'Info'),
		'THERMOSTAT_SET_MODE' => array('name' => __('Thermostat Mode (pour Plugin Thermostat uniquement)',__FILE__), 'family' => __('Thermostat',__FILE__), 'type' => 'Action'),
		'THERMOSTAT_MODE' => array('name' => __('Thermostat Mode (pour Plugin Thermostat uniquement)',__FILE__), 'family' => __('Thermostat',__FILE__), 'type' => 'Info'),
		'THERMOSTAT_SET_LOCK' => array('name' => __('Thermostat Verrouillage (pour Plugin Thermostat uniquement)',__FILE__), 'family' => __('Thermostat',__FILE__), 'type' => 'Action'),
		'THERMOSTAT_SET_UNLOCK' => array('name' => __('Thermostat Déverrouillage (pour Plugin Thermostat uniquement)',__FILE__), 'family' => __('Thermostat',__FILE__), 'type' => 'Action'),
		'THERMOSTAT_LOCK' => array('name' => __('Thermostat Verrouillage (pour Plugin Thermostat uniquement)',__FILE__), 'family' => __('Thermostat',__FILE__), 'type' => 'Info'),
		'THERMOSTAT_TEMPERATURE_OUTDOOR' => array('name' => __('Thermostat Température Exterieur (pour Plugin Thermostat uniquement)',__FILE__), 'family' => __('Thermostat',__FILE__), 'type' => 'Info'),
		'THERMOSTAT_STATE_NAME' => array('name' => __('Thermostat Etat (HUMAIN) (pour Plugin Thermostat uniquement)',__FILE__), 'family' => __('Thermostat',__FILE__), 'type' => 'Info'),
		'CAMERA_UP' => array('name' => __('Mouvement caméra vers le haut',__FILE__), 'family' => __('Caméra',__FILE__), 'type' => 'Action'),
		'CAMERA_DOWN' => array('name' => __('Mouvement caméra vers le bas',__FILE__), 'family' => __('Caméra',__FILE__), 'type' => 'Action'),
		'CAMERA_LEFT' => array('name' => __('Mouvement caméra vers le gauche',__FILE__), 'family' => __('Caméra',__FILE__), 'type' => 'Action'),
		'CAMERA_RIGHT' => array('name' => __('Mouvement caméra vers le droite',__FILE__), 'family' => __('Caméra',__FILE__), 'type' => 'Action'),
		'CAMERA_ZOOM' => array('name' => __('Zoom caméra vers l\'avant',__FILE__), 'family' => __('Caméra',__FILE__), 'type' => 'Action'),
		'CAMERA_DEZOOM' => array('name' => __('Zoom caméra vers l\'arrière',__FILE__), 'family' => __('Caméra',__FILE__), 'type' => 'Action'),
		'CAMERA_STOP' => array('name' => __('Stop caméra',__FILE__), 'family' => __('Caméra',__FILE__), 'type' => 'Action'),
		'CAMERA_PRESET' => array('name' => __('Preset caméra',__FILE__), 'family' => __('Caméra',__FILE__), 'type' => 'Action'),
		'CAMERA_URL' => array('name' => __('URL caméra',__FILE__), 'family' => __('Caméra',__FILE__), 'type' => 'Info'),
		'CAMERA_RECORD_STATE' => array('name' => __('État enregistrement caméra',__FILE__), 'family' => __('Caméra',__FILE__), 'type' => 'Info'),
		'CAMERA_RECORD' => array('name' => __('Enregistrement caméra',__FILE__), 'family' => __('Caméra',__FILE__), 'type' => 'Action'),
		'CAMERA_TAKE' => array('name' => __('Snapshot caméra',__FILE__), 'family' => __('Caméra',__FILE__), 'type' => 'Action'),
		'MODE_STATE' => array('name' => __('Mode',__FILE__), 'family' => __('Mode',__FILE__), 'type' => 'Info'),
		'MODE_SET_STATE' => array('name' => __('Mode',__FILE__), 'family' => __('Mode',__FILE__), 'type' => 'Action'),
		'ALARM_STATE' => array('name' => __('Alarme état',__FILE__), 'family' => __('Sécurité',__FILE__), 'type' => 'Info', 'noapp' => true),
		'ALARM_MODE' => array('name' => __('Alarme mode',__FILE__), 'family' => __('Sécurité',__FILE__), 'type' => 'Info', 'noapp' => true),
		'ALARM_ENABLE_STATE' => array('name' => __('Alarme état activée',__FILE__), 'family' => __('Sécurité',__FILE__), 'type' => 'Info', 'noapp' => true),
		'ALARM_ARMED' => array('name' => __('Alarme armée',__FILE__), 'family' => __('Sécurité',__FILE__), 'type' => 'Action', 'noapp' => true),
		'ALARM_RELEASED' => array('name' => __('Alarme libérée',__FILE__), 'family' => __('Sécurité',__FILE__), 'type' => 'Action', 'noapp' => true),
		'ALARM_SET_MODE' => array('name' => __('Alarme Mode',__FILE__), 'family' => __('Sécurité',__FILE__), 'type' => 'Action', 'noapp' => true),
		'WEATHER_TEMPERATURE' => array('name' => __('Météo Température',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WEATHER_HUMIDITY' => array('name' => __('Météo Humidité',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WEATHER_PRESSURE' => array('name' => __('Météo Pression',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WEATHER_WIND_SPEED' => array('name' => __('Météo vitesse du vent',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WEATHER_WIND_DIRECTION' => array('name' => __('Météo direction du vent',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WEATHER_SUNSET' => array('name' => __('Météo lever de soleil',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WEATHER_SUNRISE' => array('name' => __('Météo coucher de soleil',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WEATHER_TEMPERATURE_MIN' => array('name' => __('Météo Température min',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WEATHER_TEMPERATURE_MAX' => array('name' => __('Météo Température max',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WEATHER_CONDITION' => array('name' => __('Météo condition',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WEATHER_CONDITION_ID' => array('name' => __('Météo condition (id)',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WEATHER_TEMPERATURE_MIN_1' => array('name' => __('Météo Température min j+1',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WEATHER_TEMPERATURE_MAX_1' => array('name' => __('Météo Température max j+1',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WEATHER_CONDITION_1' => array('name' => __('Météo condition j+1',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WEATHER_CONDITION_ID_1' => array('name' => __('Météo condition (id) j+1',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WEATHER_TEMPERATURE_MIN_2' => array('name' => __('Météo Température min j+2',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WEATHER_TEMPERATURE_MAX_2' => array('name' => __('Météo condition j+1 max j+2',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WEATHER_CONDITION_2' => array('name' => __('Météo condition j+2',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WEATHER_CONDITION_ID_2' => array('name' => __('Météo condition (id) j+2',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WEATHER_TEMPERATURE_MIN_3' => array('name' => __('Météo Température min j+3',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WEATHER_TEMPERATURE_MAX_3' => array('name' => __('Météo Température max j+3',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WEATHER_CONDITION_3' => array('name' => __('Météo condition j+3',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WEATHER_CONDITION_ID_3' => array('name' => __('Météo condition (id) j+3',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WEATHER_TEMPERATURE_MIN_4' => array('name' => __('Météo Température min j+4',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WEATHER_TEMPERATURE_MAX_4' => array('name' => __('Météo Température max j+4',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WEATHER_CONDITION_4' => array('name' => __('Météo condition j+4',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WEATHER_CONDITION_ID_4' => array('name' => __('Météo condition (id) j+4',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'GB_OPEN' => array('name' => __('Portail ou garage bouton d\'ouverture',__FILE__), 'family' => __('Ouvrant',__FILE__), 'type' => 'Action'),
		'GB_CLOSE' => array('name' => __('Portail ou garage bouton de fermeture',__FILE__), 'family' => __('Ouvrant',__FILE__), 'type' => 'Action'),
		'GB_TOGGLE' => array('name' => __('Portail ou garage bouton toggle',__FILE__), 'family' => __('Ouvrant',__FILE__), 'type' => 'Action'),
		'BARRIER_STATE' => array('name' => __('Portail état ouvrant',__FILE__), 'family' => __('Ouvrant',__FILE__), 'type' => 'Info'),
		'GARAGE_STATE' => array('name' => __('Garage état ouvrant',__FILE__), 'family' => __('Ouvrant',__FILE__), 'type' => 'Info'),
		'POWER' => array('name' => __('Puissance Electrique',__FILE__), 'family' => __('Electricité',__FILE__), 'type' => 'Info'),
		'CONSUMPTION' => array('name' => __('Consommation Electrique',__FILE__), 'family' => __('Electricité',__FILE__), 'type' => 'Info', 'noapp' => true),
		'TEMPERATURE' => array('name' => __('Température',__FILE__), 'family' => __('Environnement',__FILE__), 'type' => 'Info'),
		'AIR_QUALITY' => array('name' => __('Qualité de l\'air',__FILE__), 'family' => __('Environnement',__FILE__), 'type' => 'Info'),
		'DEPTH' => array('name' => __('Profondeur',__FILE__), 'family' => __('Generic',__FILE__), 'type' => 'Info'),
		'BRIGHTNESS' => array('name' => __('Luminosité',__FILE__), 'family' => __('Environnement',__FILE__), 'type' => 'Info'),
		'PRESENCE' => array('name' => __('Présence',__FILE__), 'family' => __('Environnement',__FILE__), 'type' => 'Info'),
		'BATTERY' => array('name' => __('Batterie',__FILE__), 'family' => __('Batterie',__FILE__), 'type' => 'Info', 'noapp' => true),
		'BATTERY_CHARGING' => array('name' => __('Batterie en charge',__FILE__), 'family' => __('Batterie',__FILE__), 'type' => 'Info', 'noapp' => true),
		'SMOKE' => array('name' => __('Détection de fumée',__FILE__), 'family' => __('Environnement',__FILE__), 'type' => 'Info'),
		'FLOOD' => array('name' => __('Inondation',__FILE__), 'family' => __('Sécurité',__FILE__), 'type' => 'Info'),
		'HUMIDITY' => array('name' => __('Humidité',__FILE__), 'family' => __('Environnement',__FILE__), 'type' => 'Info'),
		'THERMOSTAT_HUMIDITY' => array('name' => __('Thermostat humidité ambiante',__FILE__), 'family' => __('Thermostat',__FILE__), 'type' => 'Info', 'noapp' => true),
		'HUMIDITY_SET_SETPOINT' => array('name' => __('Humidité consigne ',__FILE__), 'family' => __('Thermostat',__FILE__), 'type' => 'Action', 'noapp' => true),
		'HUMIDITY_SETPOINT' => array('name' => __('Humidité consigne',__FILE__), 'family' => __('Thermostat',__FILE__), 'type' => 'Info', 'noapp' => true),
		'UV' => array('name' => __('UV',__FILE__), 'family' => __('Environnement',__FILE__), 'type' => 'Info', 'noapp' => true),
		'OPENING' => array('name' => __('Porte',__FILE__), 'family' => __('Ouvrant',__FILE__), 'type' => 'Info'),
		'OPENING_WINDOW' => array('name' => __('Fenêtre',__FILE__), 'family' => __('Ouvrant',__FILE__), 'type' => 'Info'),
		'SABOTAGE' => array('name' => __('Sabotage',__FILE__), 'family' => __('Sécurité',__FILE__), 'type' => 'Info'),
		'CO2' => array('name' => __('CO2 (ppm)',__FILE__), 'family' => __('Environnement',__FILE__), 'type' => 'Info', 'noapp' => true),
		'CO' => array('name' => __('CO (ppm)',__FILE__), 'family' => __('Environnement',__FILE__), 'type' => 'Info', 'noapp' => true),
		'VOLTAGE' => array('name' => __('Tension',__FILE__), 'family' => __('Electricité',__FILE__), 'type' => 'Info', 'noapp' => true),
		'NOISE' => array('name' => __('Son (dB)',__FILE__), 'family' => __('Environnement',__FILE__), 'type' => 'Info', 'noapp' => true),
		'PRESSURE' => array('name' => __('Pression',__FILE__), 'family' => __('Environnement',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WATER_LEAK' => array('name' => __('Fuite d\'eau',__FILE__), 'family' => __('Environnement',__FILE__), 'type' => 'Info', 'noapp' => true),
		'FILTER_CLEAN_STATE' => array('name' => __('Etat du filtre',__FILE__), 'family' => __('Environnement',__FILE__), 'type' => 'Info', 'noapp' => true),
		'RAIN_CURRENT' => array('name' => __('Pluie (mm/h)',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'RAIN_TOTAL' => array('name' => __('Pluie (accumulation)',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WIND_SPEED' => array('name' => __('Vent (vitesse)',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'WIND_DIRECTION' => array('name' => __('Vent (direction)',__FILE__), 'family' => __('Météo',__FILE__), 'type' => 'Info', 'noapp' => true),
		'SHOCK' => array('name' => __('Choc',__FILE__), 'family' => __('Sécurité',__FILE__), 'type' => 'Info'),
		'DISTANCE' => array('name' => __('Distance',__FILE__), 'family' => __('Generic',__FILE__), 'type' => 'Info'),
		'BUTTON' => array('name' => __('Bouton',__FILE__), 'family' => __('Generic',__FILE__), 'type' => 'Info'),
		'VOLUME' => array('name' => __('Volume',__FILE__), 'family' => __('Multimédia',__FILE__), 'type' => 'Info'),
		'SET_VOLUME' => array('name' => __('Volume',__FILE__), 'family' => __('Multimédia',__FILE__), 'type' => 'Action'),
		'CHANNEL' => array('name' => __('Chaine',__FILE__), 'family' => __('Multimédia',__FILE__), 'type' => 'Info'),
		'SET_CHANNEL' => array('name' => __('Chaine',__FILE__), 'family' => __('Multimédia',__FILE__), 'type' => 'Action'),
		'MEDIA_PAUSE' => array('name' => __('Pause',__FILE__), 'family' => __('Multimédia',__FILE__), 'type' => 'Action'),
		'MEDIA_RESUME' => array('name' => __('Lecture',__FILE__), 'family' => __('Multimédia',__FILE__), 'type' => 'Action'),
		'MEDIA_STOP' => array('name' => __('Stop',__FILE__), 'family' => __('Multimédia',__FILE__), 'type' => 'Action'),
		'MEDIA_NEXT' => array('name' => __('Suivant',__FILE__), 'family' => __('Multimédia',__FILE__), 'type' => 'Action'),
		'MEDIA_PREVIOUS' => array('name' => __('Précedent',__FILE__), 'family' => __('Multimédia',__FILE__), 'type' => 'Action'),
		'GENERIC_INFO' => array('name' => __(' Générique',__FILE__), 'family' => __('Generic',__FILE__), 'type' => 'Info'),
		'GENERIC_ACTION' => array('name' => __(' Générique',__FILE__), 'family' => __('Generic',__FILE__), 'type' => 'Action'),
		'FAN_SPEED' => array('name' => __('Vitesse ventilateur',__FILE__), 'family' => __('Ventilateur',__FILE__), 'type' => 'Action', 'noapp' => true),
		'FAN_SPEED_STATE' => array('name' => __('Vitesse ventilateur',__FILE__), 'family' => __('Ventilateur',__FILE__), 'type' => 'Info', 'noapp' => true),
		'REBOOT' => array('name' => __('Redémarrage',__FILE__), 'family' => __('Electricité',__FILE__), 'type' => 'Action', 'noapp' => true),
		'ROTATION' => array('name' => __('Rotation',__FILE__), 'family' => __('Ventilateur',__FILE__), 'type' => 'Action', 'noapp' => true),
		'ROTATION_STATE' => array('name' => __('Rotation',__FILE__), 'family' => __('Ventilateur',__FILE__), 'type' => 'Info', 'noapp' => true),
		'DOCK' => array('name' => __('Sur sa base',__FILE__), 'family' => __('Robot',__FILE__), 'type' => 'Action', 'noapp' => true),
		'DOCK_STATE' => array('name' => __('Sur sa base',__FILE__), 'family' => __('Robot',__FILE__), 'type' => 'Info', 'noapp' => true),
		'DONT' => array('name' => __('Ne pas tenir compte de cette commande',__FILE__), 'family' => __('Generic',__FILE__), 'type' => 'All'),
	),
	'type' => array(
		'info' => array(
			'name' => __('Info',__FILE__),
			'subtype' => array(
				'numeric' => array(
					'name' => __('Numérique',__FILE__),
					'configuration' => array(
						'minValue' => array('visible' => true),
						'maxValue' => array('visible' => true),
						'listValue' => array('visible' => false)
					),
					'unite' => array('visible' => true),
					'isHistorized' => array('visible' => true, 'timelineOnly' => false, 'canBeSmooth' => true),
					'display' => array(
						'invertBinary' => array('visible' => true, 'parentVisible' => true),
						'icon' => array('visible' => true, 'parentVisible' => true),
					),
				),
				'binary' => array(
					'name' => __('Binaire',__FILE__),
					'configuration' => array(
						'minValue' => array('visible' => false),
						'maxValue' => array('visible' => false),
						'listValue' => array('visible' => false)
					),
					'unite' => array('visible' => false),
					'isHistorized' => array('visible' => true, 'timelineOnly' => false, 'canBeSmooth' => false),
					'display' => array(
						'invertBinary' => array('visible' => true, 'parentVisible' => true),
						'icon' => array('visible' => true, 'parentVisible' => true),
					),
				),
				'string' => array(
					'name' => __('Autre',__FILE__),
					'configuration' => array(
						'minValue' => array('visible' => false),
						'maxValue' => array('visible' => false),
						'listValue' => array('visible' => false)
					),
					'unite' => array('visible' => true),
					'isHistorized' => array('visible' => true, 'timelineOnly' => true, 'canBeSmooth' => false),
					'display' => array(
						'invertBinary' => array('visible' => false),
						'icon' => array('visible' => true, 'parentVisible' => true),
					),
				),
			),
		),
		'action' => array(
			'name' => __('Action',__FILE__),
			'subtype' => array(
				'other' => array(
					'name' => __('Défaut',__FILE__),
					'configuration' => array(
						'minValue' => array('visible' => false),
						'maxValue' => array('visible' => false),
						'listValue' => array('visible' => false)
					),
					'unite' => array('visible' => false),
					'isHistorized' => array('visible' => false),
					'display' => array(
						'invertBinary' => array('visible' => false),
						'icon' => array('visible' => true, 'parentVisible' => true),
					),
				),
				'slider' => array(
					'name' => __('Curseur',__FILE__),
					'configuration' => array(
						'minValue' => array('visible' => true),
						'maxValue' => array('visible' => true),
						'listValue' => array('visible' => false)
					),
					'unite' => array('visible' => false),
					'isHistorized' => array('visible' => false),
					'display' => array(
						'invertBinary' => array('visible' => false),
						'icon' => array('visible' => true, 'parentVisible' => true),
					),
				),
				'message' => array(
					'name' => __('Message',__FILE__),
					'configuration' => array(
						'minValue' => array('visible' => false),
						'maxValue' => array('visible' => false),
						'listValue' => array('visible' => false)
					),
					'unite' => array('visible' => false),
					'isHistorized' => array('visible' => false),
					'display' => array(
						'invertBinary' => array('visible' => false),
						'icon' => array('visible' => true, 'parentVisible' => true),
					),
				),
				'color' => array(
					'name' => __('Couleur',__FILE__),
					'configuration' => array(
						'minValue' => array('visible' => false),
						'maxValue' => array('visible' => false),
						'listValue' => array('visible' => false)
					),
					'unite' => array('visible' => false),
					'isHistorized' => array('visible' => false),
					'display' => array(
						'invertBinary' => array('visible' => false),
						'icon' => array('visible' => true, 'parentVisible' => true),
					),
				),
				'select' => array(
					'name' => __('Liste',__FILE__),
					'configuration' => array(
						'minValue' => array('visible' => false),
						'maxValue' => array('visible' => false),
						'listValue' => array('visible' => true)
					),
					'unite' => array('visible' => false),
					'isHistorized' => array('visible' => false),
					'display' => array(
						'invertBinary' => array('visible' => false),
						'icon' => array('visible' => true, 'parentVisible' => true),
					),
				),
			),
		),
	),
),
);
