<?php
namespace Suz15\WeatherPackage;

class Location {
        private $city;
        private $state;
        private $country;

        function __construct($city, $state, $country) {
                $this->city = $city;
                $this->state = $state;
		$this->country = $country;
	}

	function getCity() {
		return $this->city;
	}

	function getState() {
		return $this->state;
	}

	function getCountry() {
		return $this->country;
	}

        function __toString() {
                return $this->city . " " . $this->state ." " . $this->country;
        }
}
