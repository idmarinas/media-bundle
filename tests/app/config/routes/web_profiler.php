<?php
/*
 * Copyright 2026-2026 (C) IDMarinas - All Rights Reserved
 *
 * Last modified by "IDMarinas" on 15/10/2026, 18:51
 *
 * @project media-bundle
 * @see https://github.com/idmarinas/media-bundle
 *
 * @file web_profiler.php
 * @date 15/10/2026
 * @time 18:51
 *
 * @author Iván Diaz Marinas (IDMarinas)
 * @license BSD 3-Clause License
 *
 * @since 1.0.0
 */

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes): void {
	// @formatter:off
	$routes->import('@WebProfilerBundle/Resources/config/routing/wdt.xml')->prefix('/_wdt');
	$routes->import('@WebProfilerBundle/Resources/config/routing/profiler.xml')->prefix('/_profiler');


	// @formatter:on
};
