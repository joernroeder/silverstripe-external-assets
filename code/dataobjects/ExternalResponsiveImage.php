<?php

class ExternalResponsiveImage extends ResponsiveImage {

	private static $has_many = array(
		'Images' => 'ExternalResponsiveImageObject'
	);

}