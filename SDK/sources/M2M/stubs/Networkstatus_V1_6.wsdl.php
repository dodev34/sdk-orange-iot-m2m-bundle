<?php

// PHP classes corresponding to the data types in defined in WSDL

if(!class_exists("getNetworkStatus")){
class getNetworkStatus {

    /**
     * @var (object)Coordinates
     */
    public $coordinates;

    /**
     * @var boolean
     */
    public $showExtendedFeatures;

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

if(!class_exists("getNetworkStatusResponse")){
class getNetworkStatusResponse {

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

    /**
     * @var array[0, unbounded] of (object)ForecastCoverage
     */
    public $forecastCoverage;

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

if(!class_exists("ForecastCoverage")){
class ForecastCoverage {

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
     * @var string
     */
    public $coverage;

}}

// define the class map
/*
$class_map = array(
    "getNetworkStatus" => "getNetworkStatus",
    "Coordinates" => "Coordinates",
    "getNetworkStatusResponse" => "getNetworkStatusResponse",
    "AreaCoverage" => "AreaCoverage",
    "BreakdownReport" => "BreakdownReport",
    "ForecastCoverage" => "ForecastCoverage");

try {

    // create client in WSDL mode
    $client = new WSClient(array ("wsdl" =>"Networkstatus_V1_6.wsdl",
        "classmap" => $class_map));

    // get proxy object reference form client 
    $proxy = $client->getProxy();

    // create input object and set values
    $input = new getNetworkStatus();
    //TODO: fill in the class fields of $input to match your business logic

    // call the operation
    $response = $proxy->getNetworkStatus($input);
    //TODO: Implement business logic to consume $response, which is of type getNetworkStatusResponse

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
