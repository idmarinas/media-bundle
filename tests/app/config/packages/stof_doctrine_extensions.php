<?php
/*
 * Copyright 2026-2026 (C) IDMarinas - All Rights Reserved
 *
 * Last modified by "IDMarinas" on 15/10/2026, 18:51
 *
 * @project media-bundle
 * @see https://github.com/idmarinas/media-bundle
 *
 * @file stof_doctrine_extensions.php
 * @date 15/10/2026
 * @time 18:51
 *
 * @author Iván Diaz Marinas (IDMarinas)
 * @license BSD 3-Clause License
 *
 * @since 1.0.0
 */

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return static function (ContainerConfigurator $container): void {
	$container->extension('stof_doctrine_extensions', [
		'default_locale'       => '%kernel.default_locale%',
		'translation_fallback' => true,
		'orm'                  => [
			# Activate the extensions you want
			'default' => [
				'translatable'        => false,
				'timestampable'       => false,
				'blameable'           => false,
				'sluggable'           => false,
				'tree'                => false,
				'loggable'            => false,
				'sortable'            => false,
				'softdeleteable'      => false,
				'uploadable'          => false,
				'reference_integrity' => false,
			],
		],
	]);
};
