<?php
/*
 * Zeyu Su
 * CSE 451
 * Open weather API wrapper package
 * 05/05/2022
 * To use, please provide an apikey to initialize the object
 * */
namespace Suz15\WeatherPackage;
use GuzzleHttp\Client;
use Suz15\WeatherPackage\Location;
use Suz15\WeatherPackage\WeatherDay;

class OpenWeatherClient {
	private $APIKEY;
	function __construct($APIKEY) {
		$this->APIKEY = $APIKEY;
	}
	function getCurrentWeather($location){
		if (!$location instanceof Location)
			die("Must be a Location Object");
		$client = new \GuzzleHttp\Client(['base_uri'=>'https://api.openweathermap.org/data/2.5/weather']);
		$response = $client->request('get','?q='.$location->getCity().','.$location->getState().','.$location->getCountry().'&units=imperial&appid='.$this->APIKEY);
		$body = (string)$response->getBody();
		$jbody = json_decode($body,true);
		$weather = new WeatherDay(date("Y-m-d"),"Fahrenheit",$jbody['main']['temp'],$jbody['main']['feels_like'],$jbody['main']['pressure'],$jbody['main']['humidity']);
		return $weather;
	}
}

