<?php
/*
 * Copyright 2026-2026 (C) IDMarinas - All Rights Reserved
 *
 * Last modified by "IDMarinas" on 15/10/2026, 18:51
 *
 * @project media-bundle
 * @see https://github.com/idmarinas/media-bundle
 *
 * @file routes.php
 * @date 15/10/2026
 * @time 18:51
 *
 * @author Iván Diaz Marinas (IDMarinas)
 * @license BSD 3-Clause License
 *
 * @since 1.0.0
 */

use Symfony\Bundle\FrameworkBundle\Controller\TemplateController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes): void {
	//$routes->import('routes/web_profiler.php');
	//$routes->import('security.route_loader.logout', 'service')->methods(['GET']);

	$routes
		->add('app_home', '/')
		->methods(['GET'])
		->controller(TemplateController::class)
		->defaults(['template' => '@IdmTemplate/home.html.twig'])
	;
};
