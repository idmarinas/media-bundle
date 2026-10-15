<?php

use Idm\Bundle\MediaBundle\IdmMediaBundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $container, ContainerBuilder $builder): void {
	$namespace = (new ReflectionClass(IdmMediaBundle::class))->getNamespaceName();

	// @formatter:off
	$container->services()
		->load($namespace.'\\Tests\\DataFixtures\\', $builder->getParameter('kernel.project_dir') . '/tests/DataFixtures')
		->public()
		->autowire()
		->autoconfigure()
	;
};
