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

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return static function (ContainerConfigurator $container): void {
	if ('dev' === $container->env()) {
		$container->extension('web_profiler', [
			'toolbar' => true,
		]);

		$container->extension('framework', [
			'profiler' => [
				'collect_serializer_data' => true,
			],
		]);
	}

	if ('test' === $container->env()) {
		$container->extension('web_profiler', [
			'toolbar' => false,
		]);
		$container->extension('framework', [
			'profiler' => [
				'collect'                 => false,
				'collect_serializer_data' => true,
			],
		]);
	}
};
