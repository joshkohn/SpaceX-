<?php
/**
 * SatelliteSituationCenterService class file
 * 
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */

/**
 * getAllSpaseObservatories class
 */
require_once 'getAllSpaseObservatories.php';
/**
 * getAllSpaseObservatoriesResponse class
 */
require_once 'getAllSpaseObservatoriesResponse.php';
/**
 * spaseObservatoryDescription class
 */
require_once 'spaseObservatoryDescription.php';
/**
 * satelliteDescription class
 */
require_once 'satelliteDescription.php';
/**
 * SSCExternalException class
 */
require_once 'SSCExternalException.php';
/**
 * getGraphs class
 */
require_once 'getGraphs.php';
/**
 * graphRequest class
 */
require_once 'graphRequest.php';
/**
 * request class
 */
require_once 'request.php';
/**
 * mapProjectionGraphOptions class
 */
require_once 'mapProjectionGraphOptions.php';
/**
 * graphOptions class
 */
require_once 'graphOptions.php';
/**
 * graphFormatOptions class
 */
require_once 'graphFormatOptions.php';
/**
 * graphLabelOptions class
 */
require_once 'graphLabelOptions.php';
/**
 * mapLimits class
 */
require_once 'mapLimits.php';
/**
 * orbitGraphOptions class
 */
require_once 'orbitGraphOptions.php';
/**
 * graphScale class
 */
require_once 'graphScale.php';
/**
 * timeSeriesGraphOptions class
 */
require_once 'timeSeriesGraphOptions.php';
/**
 * bFieldTraceOptions class
 */
require_once 'bFieldTraceOptions.php';
/**
 * coordinateOptions class
 */
require_once 'coordinateOptions.php';
/**
 * distanceFromOptions class
 */
require_once 'distanceFromOptions.php';
/**
 * valueOptions class
 */
require_once 'valueOptions.php';
/**
 * bFieldModelOptions class
 */
require_once 'bFieldModelOptions.php';
/**
 * bFieldModelParameters class
 */
require_once 'bFieldModelParameters.php';
/**
 * satelliteSpecification class
 */
require_once 'satelliteSpecification.php';
/**
 * getGraphsResponse class
 */
require_once 'getGraphsResponse.php';
/**
 * fileResult class
 */
require_once 'fileResult.php';
/**
 * result class
 */
require_once 'result.php';
/**
 * SSCResourceLimitExceededException class
 */
require_once 'SSCResourceLimitExceededException.php';
/**
 * getAllGroundStations class
 */
require_once 'getAllGroundStations.php';
/**
 * getAllGroundStationsResponse class
 */
require_once 'getAllGroundStationsResponse.php';
/**
 * groundStationDescription class
 */
require_once 'groundStationDescription.php';
/**
 * getAcknowledgements class
 */
require_once 'getAcknowledgements.php';
/**
 * getAcknowledgementsResponse class
 */
require_once 'getAcknowledgementsResponse.php';
/**
 * getPrivacyAndImportantNotices class
 */
require_once 'getPrivacyAndImportantNotices.php';
/**
 * getPrivacyAndImportantNoticesResponse class
 */
require_once 'getPrivacyAndImportantNoticesResponse.php';
/**
 * getDataFiles class
 */
require_once 'getDataFiles.php';
/**
 * dataFileRequest class
 */
require_once 'dataFileRequest.php';
/**
 * dataRequest class
 */
require_once 'dataRequest.php';
/**
 * formatOptions class
 */
require_once 'formatOptions.php';
/**
 * locationFilterOptions class
 */
require_once 'locationFilterOptions.php';
/**
 * locationFilter class
 */
require_once 'locationFilter.php';
/**
 * outputOptions class
 */
require_once 'outputOptions.php';
/**
 * filteredCoordinateOptions class
 */
require_once 'filteredCoordinateOptions.php';
/**
 * regionOptions class
 */
require_once 'regionOptions.php';
/**
 * regionFilterOptions class
 */
require_once 'regionFilterOptions.php';
/**
 * mappedRegionFilterOptions class
 */
require_once 'mappedRegionFilterOptions.php';
/**
 * hemisphereOptions class
 */
require_once 'hemisphereOptions.php';
/**
 * spaceRegionsFilterOptions class
 */
require_once 'spaceRegionsFilterOptions.php';
/**
 * getDataFilesResponse class
 */
require_once 'getDataFilesResponse.php';
/**
 * getAllSatellites class
 */
require_once 'getAllSatellites.php';
/**
 * getAllSatellitesResponse class
 */
require_once 'getAllSatellitesResponse.php';
/**
 * getData class
 */
require_once 'getData.php';
/**
 * getDataResponse class
 */
require_once 'getDataResponse.php';
/**
 * dataResult class
 */
require_once 'dataResult.php';
/**
 * satelliteData class
 */
require_once 'satelliteData.php';
/**
 * bTraceData class
 */
require_once 'bTraceData.php';
/**
 * coordinateData class
 */
require_once 'coordinateData.php';
/**
 * projectionCoordinateSystem class
 */
require_once 'projectionCoordinateSystem.php';
/**
 * polarMapOrientation class
 */
require_once 'polarMapOrientation.php';
/**
 * mapProjection class
 */
require_once 'mapProjection.php';
/**
 * trace class
 */
require_once 'trace.php';
/**
 * coordinateSystem class
 */
require_once 'coordinateSystem.php';
/**
 * hemisphere class
 */
require_once 'hemisphere.php';
/**
 * coordinateComponent class
 */
require_once 'coordinateComponent.php';
/**
 * externalBFieldModel class
 */
require_once 'externalBFieldModel.php';
/**
 * internalBFieldModel class
 */
require_once 'internalBFieldModel.php';
/**
 * resultStatusCode class
 */
require_once 'resultStatusCode.php';
/**
 * resultStatusSubCode class
 */
require_once 'resultStatusSubCode.php';
/**
 * dateFormat class
 */
require_once 'dateFormat.php';
/**
 * degreeFormat class
 */
require_once 'degreeFormat.php';
/**
 * distanceUnits class
 */
require_once 'distanceUnits.php';
/**
 * latLonFormat class
 */
require_once 'latLonFormat.php';
/**
 * timeFormat class
 */
require_once 'timeFormat.php';
/**
 * footpointRegion class
 */
require_once 'footpointRegion.php';
/**
 * spaceRegion class
 */
require_once 'spaceRegion.php';

/**
 * SatelliteSituationCenterService class
 * 
 *  
 * 
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class SatelliteSituationCenterService extends SoapClient {

  public function SatelliteSituationCenterService($wsdl = "SatelliteSituationCenterService.wsdl", $options = array()) {
    parent::__construct($wsdl, $options);
  }

  /**
   *  
   *
   * @param getData $parameters
   * @return getDataResponse
   */
  public function getData(getData $parameters) {
    return $this->__call('getData', array(
            new SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://ssc.spdf.gsfc.nasa.gov/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param getAllSatellites $parameters
   * @return getAllSatellitesResponse
   */
  public function getAllSatellites(getAllSatellites $parameters) {
    return $this->__call('getAllSatellites', array(
            new SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://ssc.spdf.gsfc.nasa.gov/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param getGraphs $parameters
   * @return getGraphsResponse
   */
  public function getGraphs(getGraphs $parameters) {
    return $this->__call('getGraphs', array(
            new SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://ssc.spdf.gsfc.nasa.gov/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param getPrivacyAndImportantNotices $parameters
   * @return getPrivacyAndImportantNoticesResponse
   */
  public function getPrivacyAndImportantNotices(getPrivacyAndImportantNotices $parameters) {
    return $this->__call('getPrivacyAndImportantNotices', array(
            new SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://ssc.spdf.gsfc.nasa.gov/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param getAcknowledgements $parameters
   * @return getAcknowledgementsResponse
   */
  public function getAcknowledgements(getAcknowledgements $parameters) {
    return $this->__call('getAcknowledgements', array(
            new SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://ssc.spdf.gsfc.nasa.gov/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param getAllSpaseObservatories $parameters
   * @return getAllSpaseObservatoriesResponse
   */
  public function getAllSpaseObservatories(getAllSpaseObservatories $parameters) {
    return $this->__call('getAllSpaseObservatories', array(
            new SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://ssc.spdf.gsfc.nasa.gov/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param getAllGroundStations $parameters
   * @return getAllGroundStationsResponse
   */
  public function getAllGroundStations(getAllGroundStations $parameters) {
    return $this->__call('getAllGroundStations', array(
            new SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://ssc.spdf.gsfc.nasa.gov/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param getDataFiles $parameters
   * @return getDataFilesResponse
   */
  public function getDataFiles(getDataFiles $parameters) {
    return $this->__call('getDataFiles', array(
            new SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://ssc.spdf.gsfc.nasa.gov/',
            'soapaction' => ''
           )
      );
  }

}

?>
