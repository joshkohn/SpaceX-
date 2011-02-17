<html>
 <head>
	<title> Satellite Ground Stations</title>
	
	<?php
		$map= parse_ini_file('map_icon.ini');
	?>	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>

	<script type="text/javascript">
		
		var country_codes = new Array();
		<?php
			foreach ($map as $key => $value ){
				echo "country_codes[\"".$key."\"]=\"".$value."\";\n";
			}
		?>
		function ajaxLoadData(location){
			var ajaxRequest;  // The variable that makes Ajax possible!
			var result="";
			try{// Opera 8.0+, Firefox, Safari
				ajaxRequest = new XMLHttpRequest();
			} catch (e){// Internet Explorer Browsers
				try{
					ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
				} catch (e) {
					try{
						ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
						} catch (e){
						// Something went wrong
						return false;
					}
				}
			}
				// Create a function that will receive data sent from the server
			ajaxRequest.onreadystatechange = function(){
				if(ajaxRequest.readyState == 4){
					result= ajaxRequest.responseText;
				}
			}
			ajaxRequest.open("GET", location, true);
			ajaxRequest.send(null); 
			return result;
		}

		var parse = new Object;
		var sat_json="";
		var reverse="http://maps.googleapis.com/maps/api/geocode/json?latlng=";
		var query="";
		var location_json="";
		var temp="";
		var map_query="http://maps.google.com/maps/api/staticmap?size=512x512&maptype=roadmap"
		$(document).ready(function(){
			sat_json=ajaxLoadData("data/groundStationData.php");
			parse=jQuery.parseJSON(sat_json);

			//for(i=0; i< parse["stations"].length; i=i+1){
				//query = reverse+parse["stations"][i]["latitude"]+","+parse["stations"][i]["longitude"]+"&sensor=false";
				query="http://maps.googleapis.com/maps/api/geocode/json?latlng=82.5,-62.5&sensor=false";
				temp=jQuery.get(query);
				//location_json=jQuery.parseJSON(temp);
				//country=location_json["results"]["types"]["country"]["formatted_address"].toUpperCase();
				//code=country_codes[country].toLowerCase();
				//map_query=map_query+"&markers=icon:/icons/png/"+code+".png|"+parse["stations"][i]["latitude"]+","+parse["stations"][i]["longitude"];
			//}
			//map_query=map_query+"&sensor=false";
			//$("#map").attr('src',map_query);
		}
		);

	</script>

</head>

<body>
<p> Title </p>
<img id="map"></img>
</body>
</html>
