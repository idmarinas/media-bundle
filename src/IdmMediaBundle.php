<?php
/*
 * Copyright 2026-2026 (C) IDMarinas - All Rights Reserved
 *
 * Last modified by "IDMarinas" on 15/10/2026, 18:50
 *
 * @project media-bundle
 * @see https://github.com/idmarinas/media-bundle
 *
 * @file IdmMediaBundle.php
 * @date 15/10/2026
 * @time 18:50
 *
 * @author Iván Diaz Marinas (IDMarinas)
 * @license BSD 3-Clause License
 *
 * @since 1.0.0
 */

namespace Idm\Bundle\MediaBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

final class IdmMediaBundle extends AbstractBundle
{
	public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
	{
		$container->import(dirname(__DIR__).'/config/services.php');
	}
}
