<?php

// PHP classes corresponding to the data types in defined in WSDL

if(!class_exists("submitSimSup")){
class submitSimSup {

    /**
     * @var (object)LineIdentifierCollection
     */
    public $lineIdentifiers;

}}

if(!class_exists("LineIdentifierCollection")){
class LineIdentifierCollection {

    // You may set only one from the following set
    // ---------------Start Choice----------------

    /**
     * @var array[1, unbounded] of string
     */
    public $subscriptionNumber;

    /**
     * @var array[1, unbounded] of string
     */
    public $simSerialNumber;

    /**
     * @var array[1, unbounded] of string
     */
    public $deviceImei;

    /**
     * @var array[1, unbounded] of string
     */
    public $deviceSerialNumber;

    /**
     * @var array[1, unbounded] of string
     */
    public $deviceUniqueId;

    /**
     * @var array[1, unbounded] of string
     */
    public $machineSerialNumber;

    /**
     * @var array[1, unbounded] of (object)Msisdn
     */
    public $msisdnVoice;

    /**
     * @var array[1, unbounded] of (object)Msisdn
     */
    public $msisdnData;

    /**
     * @var array[1, unbounded] of (object)Msisdn
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

if(!class_exists("submitSimSupResponse")){
class submitSimSupResponse {

    /**
     * @var int
     */
    public $ticketNumber;

    /**
     * @var (object)LineIdentifierCollection
     */
    public $unknownLineIdentifiers;

    /**
     * @var array[0, unbounded] of (object)ValidationError
     */
    public $validationError;

}}

if(!class_exists("ValidationError")){
class ValidationError {

    /**
     * @var (object)LineIdentifierCollection
     */
    public $lineIdentifiers;

    /**
     * @var (object)Error
     */
    public $error;

}}

if(!class_exists("Error")){
class Error {

    /**
     * @var string
     */
    public $code;

    // The "value" represents the element 'error' value..

    /**
     * @var string
     */
    public $value;

}}

if(!class_exists("submitSimSupLoc")){
class submitSimSupLoc {

    /**
     * @var (object)LineIdentifierCollection
     */
    public $lineIdentifiers;

}}

if(!class_exists("submitSimSupLocResponse")){
class submitSimSupLocResponse {

    /**
     * @var int
     */
    public $ticketNumber;

    /**
     * @var (object)LineIdentifierCollection
     */
    public $unknownLineIdentifiers;

    /**
     * @var array[0, unbounded] of (object)ValidationError
     */
    public $validationError;

}}

if(!class_exists("getSimReport")){
class getSimReport {

    /**
     * @var int
     */
    public $ticketNumber;

}}

if(!class_exists("getSimReportResponse")){
class getSimReportResponse {

    /**
     * @var string
     *     NOTE: globalProcessingStatus should follow the following restrictions
     *     You can have one of the following value
     *     WAITING
     *     WORK_IN_PROGRESS
     *     TERMINATED
     *     ERROR
     */
    public $globalProcessingStatus;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var (object)LineIdentifierCollection
     */
    public $unknownLineIdentifiers;

    /**
     * @var array[0, unbounded] of (object)Line
     */
    public $line;

}}

if(!class_exists("Line")){
class Line {

    /**
     * @var (object)LineIdentifier
     */
    public $inputLineIdentifier;

    /**
     * @var string
     *     NOTE: processingStatus should follow the following restrictions
     *     You can have one of the following value
     *     WAITING
     *     WORK_IN_PROGRESS
     *     WAITING_FOR_EXT_SYSTEM_PROCESSING
     *     TERMINATED
     *     ERROR
     */
    public $processingStatus;

    /**
     * @var string
     */
    public $progressMessage;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var dateTime
     */
    public $errorDate;

    /**
     * @var dateTime
     */
    public $updateDate;

    /**
     * @var (object)Supervision
     */
    public $supervision;

    /**
     * @var (object)Geolocation
     */
    public $geolocation;

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

if(!class_exists("Supervision")){
class Supervision {

    /**
     * @var boolean
     */
    public $connectivity;

    /**
     * @var array[0, unbounded] of (object)SignalQuality
     */
    public $signalQuality;

    /**
     * @var (object)Identity
     */
    public $identity;

    /**
     * @var (object)LastKnownIdentity
     */
    public $lastKnownIdentity;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var dateTime
     */
    public $sessionTime;

}}

if(!class_exists("SignalQuality")){
class SignalQuality {

    /**
     * @var string
     */
    public $bearerType;

    /**
     * @var string
     */
    public $errorSignalStrength;

    /**
     * @var (object)SignalStrength
     */
    public $signalStrength;

}}

if(!class_exists("SignalStrength")){
class SignalStrength {

    /**
     * @var int
     */
    public $value;

    /**
     * @var string
     */
    public $unit;

}}

if(!class_exists("Identity")){
class Identity {

    /**
     * @var string
     */
    public $imei;

    /**
     * @var string
     */
    public $tac;

}}

if(!class_exists("LastKnownIdentity")){
class LastKnownIdentity {

    /**
     * @var string
     */
    public $imei;

    /**
     * @var dateTime
     */
    public $timeStamp;

}}

if(!class_exists("Geolocation")){
class Geolocation {

    /**
     * @var boolean
     */
    public $roaming;

    /**
     * @var (object)CellId
     */
    public $cellId;

    /**
     * @var (object)GeographicPosition
     */
    public $geographicPosition;

    /**
     * @var (object)GeographicPosition
     */
    public $lastKnownGeographicPosition;

}}

if(!class_exists("CellId")){
class CellId {

    /**
     * @var int
     */
    public $mcc;

    /**
     * @var int
     */
    public $mnc;

    /**
     * @var int
     */
    public $lac;

    /**
     * @var int
     */
    public $cellId;

    /**
     * @var int
     */
    public $extendedCellId;

}}

if(!class_exists("GeographicPosition")){
class GeographicPosition {

    /**
     * @var float
     */
    public $latitude;

    /**
     * @var float
     */
    public $longitude;

    /**
     * @var dateTime
     */
    public $timeStamp;

    /**
     * @var (object)Accuracy
     */
    public $accuracy;

}}

if(!class_exists("Accuracy")){
class Accuracy {

    /**
     * @var int
     */
    public $value;

    /**
     * @var string
     */
    public $unit;

}}

if(!class_exists("getStatistics")){
class getStatistics {

    /**
     * @var array[1, unbounded] of (object)Period
     */
    public $period;

    /**
     * @var (object)LineIdentifierCollection
     */
    public $lineIdentifiers;

}}

if(!class_exists("Period")){
class Period {

    /**
     * @var date
     */
    public $startDate;

    /**
     * @var date
     */
    public $endDate;

}}

if(!class_exists("getStatisticsResponse")){
class getStatisticsResponse {

    /**
     * @var (object)LineIdentifierCollection
     */
    public $unknownLineIdentifiers;

    /**
     * @var array[0, unbounded] of (object)ValidationError
     */
    public $lineValidationError;

    /**
     * @var array[0, unbounded] of (object)PeriodValidationError
     */
    public $periodValidationError;

    /**
     * @var array[0, unbounded] of (object)PeriodReport
     */
    public $periodReport;

}}

if(!class_exists("PeriodValidationError")){
class PeriodValidationError {

    /**
     * @var (object)PeriodCollection
     */
    public $periods;

    /**
     * @var (object)Error
     */
    public $error;

}}

if(!class_exists("PeriodCollection")){
class PeriodCollection {

    // You may set only one from the following set
    // ---------------Start Choice----------------

    /**
     * @var array[1, unbounded] of (object)Period
     */
    public $period;
    // ----------------End Choice---------------


}}

if(!class_exists("PeriodReport")){
class PeriodReport {

    /**
     * @var date
     */
    public $startDate;

    /**
     * @var date
     */
    public $endDate;

    // You may set only one from the following set
    // ---------------Start Choice----------------

    /**
     * @var string
     */
    public $cenIdentifier;

    /**
     * @var (object)LineIdentifier
     */
    public $lineIdentifier;
    // ----------------End Choice---------------


    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var array[0, unbounded] of (object)Statistics
     */
    public $statistics;

}}

if(!class_exists("Statistics")){
class Statistics {

    /**
     * @var string
     */
    public $tariffCode;

    /**
     * @var int
     */
    public $nbSmsMo;

    /**
     * @var int
     */
    public $nbSmsMt;

    /**
     * @var int
     */
    public $nbNotification;

    /**
     * @var int
     */
    public $nbRequestsOk;

    /**
     * @var int
     */
    public $nbRequestsKo;

    /**
     * @var int
     */
    public $nbReportsOk;

    /**
     * @var int
     */
    public $nbReportsKo;

    /**
     * @var int
     */
    public $nbTimeout;

}}

// define the class map
/*
$class_map = array(
    "submitSimSup" => "submitSimSup",
    "LineIdentifierCollection" => "LineIdentifierCollection",
    "Msisdn" => "Msisdn",
    "submitSimSupResponse" => "submitSimSupResponse",
    "ValidationError" => "ValidationError",
    "Error" => "Error",
    "submitSimSupLoc" => "submitSimSupLoc",
    "submitSimSupLocResponse" => "submitSimSupLocResponse",
    "getSimReport" => "getSimReport",
    "getSimReportResponse" => "getSimReportResponse",
    "Line" => "Line",
    "LineIdentifier" => "LineIdentifier",
    "Supervision" => "Supervision",
    "SignalQuality" => "SignalQuality",
    "SignalStrength" => "SignalStrength",
    "Identity" => "Identity",
    "LastKnownIdentity" => "LastKnownIdentity",
    "Geolocation" => "Geolocation",
    "CellId" => "CellId",
    "GeographicPosition" => "GeographicPosition",
    "Accuracy" => "Accuracy",
    "getStatistics" => "getStatistics",
    "Period" => "Period",
    "getStatisticsResponse" => "getStatisticsResponse",
    "PeriodValidationError" => "PeriodValidationError",
    "PeriodCollection" => "PeriodCollection",
    "PeriodReport" => "PeriodReport",
    "Statistics" => "Statistics");

try {

    // create client in WSDL mode
    $client = new WSClient(array ("wsdl" =>"deviceInfoV1_2.wsdl",
        "classmap" => $class_map));

    // get proxy object reference form client 
    $proxy = $client->getProxy();

    // create input object and set values
    $input = new submitSimSup();
    //TODO: fill in the class fields of $input to match your business logic

    // call the operation
    $response = $proxy->submitSimSup($input);
    //TODO: Implement business logic to consume $response, which is of type submitSimSupResponse

    $input = new submitSimSupLoc();
    //TODO: fill in the class fields of $input to match your business logic

    // call the operation
    $response = $proxy->submitSimSupLoc($input);
    //TODO: Implement business logic to consume $response, which is of type submitSimSupLocResponse

    $input = new getSimReport();
    //TODO: fill in the class fields of $input to match your business logic

    // call the operation
    $response = $proxy->getSimReport($input);
    //TODO: Implement business logic to consume $response, which is of type getSimReportResponse

    $input = new getStatistics();
    //TODO: fill in the class fields of $input to match your business logic

    // call the operation
    $response = $proxy->getStatistics($input);
    //TODO: Implement business logic to consume $response, which is of type getStatisticsResponse

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
