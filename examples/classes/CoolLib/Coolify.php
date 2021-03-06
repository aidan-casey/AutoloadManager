<?php

/**
 * Contains the Coolify class and anything related to it.
 * @author Aidan Casey <aidan@caseyhouse.net>
 */

namespace CoolLib;

/**
 * Makes things cool.
 * @author Aidan Casey <aidan@caseyhouse.net>
 */
class Coolify {

	/**
	 * Replace any occurende of 'B-)' with the cool emoji unicode.
	 * 
	 * @param String $text Text to be parsed.
	 * @author Aidan Casey <aidan@caseyhouse.net>
	 */
	public function parse ( $text ) {
		return preg_replace('/B-\)/', htmlspecialchars_decode('&#x1F60E;'), $text);
	}

}