<?php

namespace OneTree\BrickAPI;

/**
 * Any element that can be returned or recieved by the API.
 */
interface Element
{
	/**
	 * Sets the values of the element.
	 * 
	 * @param array $values
	 * @return void
	 */
	public function SetAttributeValuesFromArray(array $values);
}