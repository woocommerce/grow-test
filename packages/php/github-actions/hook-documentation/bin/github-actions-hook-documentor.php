#!/usr/bin/env php
<?php

use Automattic\WooCommerce\Grow\GitHubActions\HookDocumentation\Documentor;

$autoloadPath = dirname( __DIR__ ) . '/vendor/autoload.php';
if ( ! file_exists( $autoloadPath ) ) {
	echo "Please run 'composer install'!\n";
	exit( 1 );
}

require_once $autoloadPath;

// Set the base path for files to work with.
$base_path = getcwd();

$source_dirs = getenv( 'SOURCE_DIRECTORIES' ) ?? 'src/';

// Source directories need the full path prepended.
$source_dirs = array_map(
	function( $path ) use ( $base_path ) {
		$path = trim( $path );
		$path = ltrim( $path, '/' );

		return "{$base_path}/{$path}";
	},
	explode( ',', $source_dirs )
);

$args = [
	'github_path' => '',
	'source_dirs' => $source_dirs,
];

try {
	printf(
		'hook-docs=%s',
		( new Documentor( $args ) )->generate_hooks_docs()
	);
} catch ( RuntimeException $e ) {
	echo $e->getMessage();
	exit( 2 );
}
