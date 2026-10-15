<?php
/*
 * Copyright 2026-2026 (C) IDMarinas - All Rights Reserved
 *
 * Last modified by "IDMarinas" on 15/10/2026, 18:51
 *
 * @project media-bundle
 * @see https://github.com/idmarinas/media-bundle
 *
 * @file BundleRoutingTest.php
 * @date 15/10/2026
 * @time 18:51
 *
 * @author Iván Diaz Marinas (IDMarinas)
 * @license BSD 3-Clause License
 *
 * @since 1.0.0
 */

namespace Idm\Bundle\MediaBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Routing\RouterInterface;

class BundleRoutingTest extends KernelTestCase
{
	use CreateKernelCaseTrait;

	public function testAddRoutingFile(): void
	{
		$kernel = self::bootKernel();

		$container = $kernel->getContainer();
		$container = $container->get('test.service_container');
		/**
		 * @var RouterInterface $router
		 */
		$router = $container->get(RouterInterface::class);
		$routeCollection = $router->getRouteCollection();
		$routes = $routeCollection->all();

		$this->assertCount(1, $routes);
		$this->assertNotNull($routeCollection->get('app_home'));
	}
}
