<?php
/*
 * Copyright 2026-2026 (C) IDMarinas - All Rights Reserved
 *
 * Last modified by "IDMarinas" on 15/10/2026, 18:51
 *
 * @project media-bundle
 * @see https://github.com/idmarinas/media-bundle
 *
 * @file IntegrationTest.php
 * @date 15/10/2026
 * @time 18:51
 *
 * @author Iván Diaz Marinas (IDMarinas)
 * @license BSD 3-Clause License
 *
 * @since 1.0.0
 */

namespace Idm\Bundle\MediaBundle\Tests\Twig\Extension;

use App\Kernel;
use PHPUnit\Framework\Attributes\Group;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Twig\Test\IntegrationTestCase;

/**
 * Test Twig Extensions.
 *
 */
#[Group("ignore")]
final class IntegrationTest extends IntegrationTestCase
{
	public static function getFixturesDirectory(): string
	{
		return __DIR__.'/Fixtures/';
	}

	public function getExtensions(): array
	{
		return [];
	}

	protected function getContainer(): ContainerInterface
	{
		$kernel = new Kernel('test', true);
		$kernel->addExtraConfig(dirname(__DIR__, 2).'/config/idm_advertising.php');
		$kernel->boot();

		return $kernel->getContainer();
	}
}
