<?php

namespace Matleyx\C4GETR\Config;

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->group('', ['namespace' => 'Matleyx\C4GETR\Controllers'], static function ($routes) {
	//Cmms Spare Parts Routes
	$routes->get('miniera_die_manag','MinieraDieManagController::index');
	// $routes->get('cmms_spare_parts/add','CmmsSparePartsController::add');
	// $routes->post('cmms_spare_parts/save','CmmsSparePartsController::save');
	// $routes->get('cmms_spare_parts/edit/(:any)','CmmsSparePartsController::edit/$1');
	// $routes->post('cmms_spare_parts/update','CmmsSparePartsController::update');
	// $routes->get('cmms_spare_parts/delete/(:any)','CmmsSparePartsController::delete/$1');
	//Report Routes
	//$routes->get('cmms_report/tdjb_by_asst/(:any)','Cmms_report::tdjb_by_asst/$1');
	// $routes->get('cmms_report/tdjb_by_asst/(:any)','CmmsReportController::tdjb_by_asst/$1');
	// $routes->get('cmms_report/tdjb_by_sect/(:any)','CmmsReportController::tdjb_by_sect/$1');
	// $routes->get('cmms_report/tdjb_by_sect_scad/(:any)','CmmsReportController::tdjb_by_sect_scad/$1');
	// $routes->get('cmms_report/lav_con_mar','CmmsReportController::lav_con_mar');
    
});
