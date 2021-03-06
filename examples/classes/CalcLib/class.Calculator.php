<?php

/**
 * Contains the Calculator class and anything related to it.
 * @author Aidan Casey <aidan@caseyhouse.net>
 */

/**
 * Sets up various calculation tools.
 * @author Aidan Casey <aidan@caseyhouse.net>
 */
class Calculator {
	
	/**
	 * Adds two numbers together.
	 *
	 * @param Integer $number1 First number to be added.
	 * @param Integer $number2 Second number to be added.
	 * @author Aidan Casey <aidan@caseyhouse.net>
	 */
	public function add ( $number1, $number2 ) {
		return $number1 + $number2;
	}

	/**
	 * Subtracts second number from first number.
	 *
	 * @param Integer $number1 Number to be subtracted from.
	 * @param Integer $number2 Number to subtract.
	 * @author Aidan Casey <aidan@caseyhouse.net>
	 */
	public function subtract ( $number1, $number2 ) {
		return $number1 - $number2;
	}

	/**
	 * Multiplies first number by second number.
	 *
	 * @param Integer $number1 First number to multiply.
	 * @param Integer $number2 Number to multiply by.
	 * @author Aidan Casey <aidan@caseyhouse.net>
	 */
	public function multiply ( $number1, $number2 ) {
		return $number1 * $number2;
	}
	
	/**
	 * Divides first number by second number.
	 *
	 * @param Integer $number1 Number to be divided.
	 * @param Integer $number2 Number to be diveded by.
	 * @author Aidan Casey <aidan@caseyhouse.net>
	 */
	public function divide ( $number1, $number2 ) {
		return $number1 / $number2;
	}
	
	/**
	 * Check the current equation.
	 * @function check
	 * @param integer $number1
	 * @param string $method
	 * @param integer $number2
	 * @author Aidan Casey <aidan@caseyhouse.net>
	 */
	public function check ( $number1, $method, $number2 ) {
		
		switch ( $method ) {
			
			// If we're adding two numbers, send it off to be added
			case '+':
				return $this->add( $number1, $number2 );
				break;
			
			// If we're subtracting two numbers, send it off to be subtracted
			case '-':
				return $this->subtract( $number1, $number2 );
				break;
				
			// If we're multiplying two numbers, send it off to be multiplied
			case '*':
				return $this->multiply( $number1, $number2 );
				break;
			
			// If we're dividing two numbers, send it off to be divided
			case '/':
				return $this->divide( $number1, $number2 );
				break;
				
		}
		
	}
	
	
}