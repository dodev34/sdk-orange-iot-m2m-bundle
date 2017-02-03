<?php

// PHP classes corresponding to the data types in defined in WSDL

if(!class_exists("getIncidentDiagnostics")){
class getIncidentDiagnostics {

    /**
     * @var (object)LineIdentifier
     */
    public $lineIdentifier;

    /**
     * @var boolean
     */
    public $showExtendedFeatures;

}}

if(!class_exists("LineIdentifier")){
class LineIdentifier {

    // You may set only one from the following set
    // ---------------Start Choice----------------

    /**
     * @var string
     */
    public $subscriptionNumber;

    /**
     * @var string
     */
    public $simSerialNumber;

    /**
     * @var string
     */
    public $deviceImei;

    /**
     * @var string
     */
    public $deviceSerialNumber;

    /**
     * @var string
     */
    public $deviceUniqueId;

    /**
     * @var string
     */
    public $machineSerialNumber;

    /**
     * @var (object)Msisdn
     */
    public $msisdnVoice;

    /**
     * @var (object)Msisdn
     */
    public $msisdnData;

    /**
     * @var (object)Msisdn
     */
    public $msisdnFax;
    // ----------------End Choice---------------


}}

if(!class_exists("Msisdn")){
class Msisdn {

    /**
     * @var string
     */
    public $cc;

    /**
     * @var string
     */
    public $sn;

}}

if(!class_exists("getIncidentDiagnosticsResponse")){
class getIncidentDiagnosticsResponse {

    /**
     * @var string
     *     NOTE: incidentDiagnosticsStatus should follow the following restrictions
     *     You can have one of the following value
     *     OK
     *     NO_GEOLOCATION_AVAILABLE
     *     ERROR_NO_NETWORK_STATUS_AVAILABLE
     *     LIMITED_2G_CONNECTIVITY_ON_ZONE
     *     LIMITED_3G_CONNECTIVITY_ON_ZONE
     *     LIMITED_3G_2100_CONNECTIVITY_ON_ZONE
     *     LIMITED_3G_900_CONNECTIVITY_ON_ZONE
     *     LIMITED_CONNECTIVITY_ON_ZONE
     *     CURRENT_2G_CONNECTIVITY_PERTURBATED_ON_ZONE
     *     CURRENT_3G_CONNECTIVITY_PERTURBATED_ON_ZONE
     *     CURRENT_3G_2100_CONNECTIVITY_PERTURBATED_ON_ZONE
     *     CURRENT_3G_900_CONNECTIVITY_PERTURBATED_ON_ZONE
     *     CURRENT_CONNECTIVITY_PERTURBATED_ON_ZONE
     *     LIMITED_HPLUS_CONNECTIVITY_ON_ZONE
     *     LIMITED_4G_CONNECTIVITY_ON_ZONE
     *     CURRENT_HPLUS_CONNECTIVITY_PERTURBATED_ON_ZONE
     *     CURRENT_4G_CONNECTIVITY_PERTURBATED_ON_ZONE
     */
    public $incidentDiagnosticsStatus;

    /**
     * @var (object)GeolocationOutV2
     */
    public $geolocationInformation;

    /**
     * @var (object)NetworkStatusOut
     */
    public $networkStatusResponse;

}}

if(!class_exists("GeolocationOutV2")){
class GeolocationOutV2 {

    /**
     * @var string
     */
    public $geolocationErrorCode;

    /**
     * @var string
     */
    public $geolocationErrorMessage;

    /**
     * @var dateTime
     */
    public $geolocationDate;

    /**
     * @var (object)GeolocationData
     */
    public $geolocationData;

}}

if(!class_exists("GeolocationData")){
class GeolocationData {

    /**
     * @var (object)GeolocationDataFormat
     */
    public $geolocationDataFormat;

    /**
     * @var (object)Coordinates
     */
    public $coordinates;

    /**
     * @var int
     */
    public $radius;

}}

if(!class_exists("GeolocationDataFormat")){
class GeolocationDataFormat {

    /**
     * @var string
     *     NOTE: geodeticDatum should follow the following restrictions
     *     You can have one of the following value
     *     WGS-84
     */
    public $geodeticDatum;

    /**
     * @var string
     *     NOTE: coordinateSystem should follow the following restrictions
     *     You can have one of the following value
     *     LL
     */
    public $coordinateSystem;

    /**
     * @var string
     *     NOTE: positionFormat should follow the following restrictions
     *     You can have one of the following value
     *     DMS0
     */
    public $positionFormat;

}}

if(!class_exists("Coordinates")){
class Coordinates {

    /**
     * @var string
     */
    public $latitude;

    /**
     * @var string
     */
    public $longitude;

}}

if(!class_exists("NetworkStatusOut")){
class NetworkStatusOut {

    /**
     * @var string
     *     NOTE: status should follow the following restrictions
     *     You can have one of the following value
     *     OK
     *     REQUEST_ERROR
     *     TECHNICAL_ERROR
     */
    public $status;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var array[0, unbounded] of (object)AreaCoverage
     */
    public $areaCoverage;

    /**
     * @var array[0, unbounded] of string
     */
    public $areaCoverageDescription;

    /**
     * @var array[0, unbounded] of (object)BreakdownReport
     */
    public $breakdownReport;

    /**
     * @var array[0, unbounded] of string
     */
    public $breakdownReportDescription;

    /**
     * @var array[0, unbounded] of string
     */
    public $networkResolutionMessage;

    /**
     * @var array[0, unbounded] of int
     */
    public $areaCoverageCode;

    /**
     * @var array[0, unbounded] of int
     */
    public $breakdownReportCode;

}}

if(!class_exists("AreaCoverage")){
class AreaCoverage {

    /**
     * @var string
     *     NOTE: technology should follow the following restrictions
     *     You can have one of the following value
     *     TECH_2G
     *     TECH_3G_2100
     *     TECH_3G_900
     *     TECH_Hplus
     *     TECH_4G
     */
    public $technology;

    /**
     * @var boolean
     */
    public $coverage;

    /**
     * @var int
     */
    public $qualityCoverageCode;

    /**
     * @var string
     */
    public $qualityCoverageDescription;

}}

if(!class_exists("BreakdownReport")){
class BreakdownReport {

    /**
     * @var string
     *     NOTE: communicationType should follow the following restrictions
     *     You can have one of the following value
     *     VOICE_2G
     *     VOICE_3G
     *     VOICE_3G_900
     *     VOICE_3G_2100
     *     DATA_2G
     *     DATA_3G
     *     DATA_3G_900
     *     DATA_3G_2100
     *     DATA_Hplus
     *     DATA_VOICE_4G
     */
    public $communicationType;

    /**
     * @var string
     *     NOTE: classification should follow the following restrictions
     *     You can have one of the following value
     *     MAJOR_INCIDENT
     *     MINOR_INCIDENT
     *     NO_INCIDENT
     *     NO_INFORMATION_AVAILABLE
     *     NA
     */
    public $classification;

}}

// define the class map
/*
$class_map = array(
    "getIncidentDiagnostics" => "getIncidentDiagnostics",
    "LineIdentifier" => "LineIdentifier",
    "Msisdn" => "Msisdn",
    "getIncidentDiagnosticsResponse" => "getIncidentDiagnosticsResponse",
    "GeolocationOutV2" => "GeolocationOutV2",
    "GeolocationData" => "GeolocationData",
    "GeolocationDataFormat" => "GeolocationDataFormat",
    "Coordinates" => "Coordinates",
    "NetworkStatusOut" => "NetworkStatusOut",
    "AreaCoverage" => "AreaCoverage",
    "BreakdownReport" => "BreakdownReport");

try {

    // create client in WSDL mode
    $client = new WSClient(array ("wsdl" =>"IncidentDiagnostics_V2_3.wsdl",
        "classmap" => $class_map));

    // get proxy object reference form client 
    $proxy = $client->getProxy();

    // create input object and set values
    $input = new getIncidentDiagnostics();
    //TODO: fill in the class fields of $input to match your business logic

    // call the operation
    $response = $proxy->getIncidentDiagnostics($input);
    //TODO: Implement business logic to consume $response, which is of type getIncidentDiagnosticsResponse

} catch (Exception $e) {
    // in case of an error, process the fault
    if ($e instanceof WSFault) {
        printf("Soap Fault: %s\n", $e->Reason);
    } else {
        printf("Message = %s\n", $e->getMessage());
    }
}
 */
?>
