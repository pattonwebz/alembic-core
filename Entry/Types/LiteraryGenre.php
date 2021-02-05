<?php

namespace Benlumia007\Alembic\Entry\Types;

use Benlumia007\Alembic\Controllers\LiteraryTaxonomy as LiteraryGenreController;
use Benlumia007\Alembic\Controllers\Collection as CollectionController;
use Benlumia007\Alembic\Routing\Routes;
use Benlumia007\Alembic\App;

class LiteraryGenre extends Type {

	public function name() {

		return 'literary_genre';
	}

	public function path() {

		return '_literary-genres';
	}

	public function routes() {

		$this->router->get( 'writing/genres/{name}', LiteraryGenreController::class );

		$this->router->get( 'writing/genres', CollectionController::class );
	}

	public function uri( $path = '' ) {

		$uri = App::resolve( 'uri/relative' ) . '/writing/genres';

		return $path ? "{$uri}/{$path}" : $uri;
	}




}
