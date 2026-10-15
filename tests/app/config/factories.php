<?php
/*
 * Copyright 2026-2026 (C) IDMarinas - All Rights Reserved
 *
 * Last modified by "IDMarinas" on 15/10/2026, 18:51
 *
 * @project media-bundle
 * @see https://github.com/idmarinas/media-bundle
 *
 * @file factories.php
 * @date 15/10/2026
 * @time 18:51
 *
 * @author Iván Diaz Marinas (IDMarinas)
 * @license BSD 3-Clause License
 *
 * @since 1.0.0
 */

use Idm\Bundle\MediaBundle\IdmMediaBundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $container, ContainerBuilder $builder): void {
	$namespace = (new ReflectionClass(IdmMediaBundle::class))->getNamespaceName();

	// @formatter:off
	$container->services()
		->load($namespace.'\\Tests\\Factory\\', $builder->getParameter('kernel.project_dir'). '/tests/Factory')
		->public()
		->autowire()
		->autoconfigure()
	;
};
