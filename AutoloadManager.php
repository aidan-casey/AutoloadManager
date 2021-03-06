<?php

/**
 * Contains AutoloadManager class and anything related to it.
 * @author Aidan Casey <aidan@caseyhouse.net>
 */

/**
 * Manages autoloading of classes from multiple locations.
 * @author Aidan Casey <aidan@caseyhouse.net>
 */
class AutoloadManager {

	/** 
	 * @var Array An array of paths to be checked.
	 */
	private $paths = array();

	/**
	 * Registers a path with the Autoload Manager.
	 *
	 * @param String $path Directory to load from.
	 * @param String $prefix Path prefix.
	 * @param String $suffix Path suffix.
	 * @author Aidan Casey <aidan@caseyhouse.net>
	 */
	public function registerPath ( string $path, string $prefix = '', string $suffix = '' ) {

		// Get the last character in the path
		$path_lastChar = substr( $path, -1 );

		// If we don't end with a forward or back slash, add it.
		if ( $path_lastChar !== '/' && $path_lastChar !== '\\' ) {
			$path .= '/';
		}

		// Create a path template
		$path .= $prefix . '{class}' . $suffix . '.php';

		// Add the path to our paths array
		array_push( $this->paths, $path );

	}

	/**
	 * Runs the autoloader.
	 * @author Aidan Casey <aidan@caseyhouse.net>
	 */
	public function run () {

		// Create a new autoloader
		spl_autoload_register(function( $class ) {

			// No sense loading a class twice!
			if ( class_exists($class) ) {
				return true;
			}
			
			// Foreach path found in our array
			foreach ( $this->paths as $path ) {

				// Parse the path
				$file = $this->parsePath($class, $path);

				// Check if the file exists
				if ( file_exists($file) ) {
				
					// Load it in
					require $file;
				
				}

			}

		});

	}

	/**
	 * Replace the class placeholder with the actual class called.
	 *
	 * @param String $class Class called.
	 * @param String $path Path being used.
	 * @return String $path The new, parsed path.
	 *
	 * @author Aidan Casey <aidan@caseyhouse.net>
	 */
	private function parsePath ( string $class, string $path ) {
		return preg_replace('/\{class\}/', $class, $path);
	}

}

?>