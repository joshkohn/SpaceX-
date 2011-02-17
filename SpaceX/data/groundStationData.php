<?php 
/**
 * The following classes were generated from the WSDL using wsdl2php
 * (http://sourceforge.net/projects/wsdl2php/).
 */
require_once 'SatelliteSituationCenterService.php';
	
    $endpoint = "http://sscweb.gsfc.nasa.gov/WS/ssc/2/SatelliteSituationCenterService?WSDL";
                                       // SSC Web service endpoint URL
    $soapOptions = 
        array("trace" => 1, 
            "user_agent" => "WsExample.php PHP-SOAP/" . phpversion());
                                       // Web service options
	function getGroundJSON(){
		global $endpoint, $soapOptions;
		
		$ssc = new SatelliteSituationCenterService($endpoint, $soapOptions);
                                       // the SSC Web service
		$result = $ssc->getAllGroundStations(new getAllGroundStations());

		$json = "{\"stations\":[";
		foreach ($result->return as $station) {
			$json=$json."{\"id\": \"".$station->id."\", \"name\": \"".$station->name."\", \"longitude\": \"".$station->longitude."\", \"latitude\": \"".$station->latitude."\"},";
        #$json=$json."<br/>";
		}
		$json=substr($json, 0, -1)."]}";
		return $json;
	}	
	header("Content-type: application/json");
	echo getGroundJSON();
?>
