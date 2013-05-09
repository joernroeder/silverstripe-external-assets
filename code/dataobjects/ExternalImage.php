<?php

class ExternalImage extends Image {

	private static $extensions = array(
		'ExternalAssetsExtension',
		'ExternalFormattedImageExtension'
	);

	// maps externalAssetsExtension
	public function Link() {
		return $this->ExternalLink();
	}

	// maps externalFormattedImageExtension
	public function getFormattedImage($format) {
		return call_user_func_array(array($this, "getFormattedExternalImage"), func_get_args());
	}

}


class ExternalImage_Cached extends Image_Cached {
	
	private static $extensions = array(
		'ExternalAssetsExtension'
	);

	// maps externalAssetsExtension
	public function Link() {
		return $this->ExternalLink();
	}

}