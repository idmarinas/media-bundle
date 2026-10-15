<?php
/*
 * Copyright 2026-2026 (C) IDMarinas - All Rights Reserved
 *
 * Last modified by "IDMarinas" on 15/10/2026, 18:51
 *
 * @project media-bundle
 * @see https://github.com/idmarinas/media-bundle
 *
 * @file security.php
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
	$container->extension('security', [
		'firewalls'      => [
			'main' => [],
		],
		'role_hierarchy' => [
			'ROLE_ADMIN'       => 'ROLE_USER',
			'ROLE_SUPER_ADMIN' => ['ROLE_ADMIN', 'ROLE_ALLOWED_TO_SWITCH'],
		],
	]);
};
