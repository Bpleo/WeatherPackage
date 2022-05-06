<?php
namespace Suz15\WeatherPackage;

class WeatherDay {
        private $date;
        private $unit;
        private $temperature;
        private $feelsLike;
        private $pressure;
        private $humidity;

        function __construct($date, $unit, $temperature, $feelsLike, $pressure, $humidity) {
                $this->date = $date;
                $this->unit = $unit;
                $this->temperature = $temperature;
                $this->feelsLike = $feelsLike;
                $this->pressure = $pressure;
                $this->humidity = $humidity;
        }

        function __toString() {
		return "Date: ".$this->date." Unit: ".$this->unit." Temp: ".$this->temperature." Feels Like: ".$this->feelsLike." Pressure: ".$this->pressure." Humidity: ".$this->humidity;
		}
}
