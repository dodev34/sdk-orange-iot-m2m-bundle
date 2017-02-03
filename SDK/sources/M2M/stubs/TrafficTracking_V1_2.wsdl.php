<?php

// PHP classes corresponding to the data types in defined in WSDL

if(!class_exists("submitTrafficTrackingRequest")){
class submitTrafficTrackingRequest {

    /**
     * @var (object)LineIdentifierCollection
     */
    public $lineIdentifiers;

    /**
     * @var dateTime
     */
    public $periodStartDateTime;

    /**
     * @var dateTime
     */
    public $periodEndDateTime;

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

if(!class_exists("submitTrafficTrackingRequestResponse")){
class submitTrafficTrackingRequestResponse {

    /**
     * @var int
     */
    public $ticketNumber;

    /**
     * @var (object)LineIdentifierCollection
     */
    public $unknownLineIdentifiers;

}}

if(!class_exists("getTrafficTracking")){
class getTrafficTracking {

    /**
     * @var int
     */
    public $ticketNumber;

    /**
     * @var boolean
     */
    public $showAllOriginSum;

}}

if(!class_exists("getTrafficTrackingResponse")){
class getTrafficTrackingResponse {

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
     * @var int
     */
    public $totalCdrNumber;

    /**
     * @var dateTime
     */
    public $firstCdrDateTime;

    /**
     * @var dateTime
     */
    public $lastCdrDateTime;

    /**
     * @var array[0, unbounded] of (object)CustomerIdentifier
     */
    public $customerIdentifier;

    /**
     * @var array[0, unbounded] of (object)Line
     */
    public $line;

    /**
     * @var (object)LineIdentifierCollection
     */
    public $unknownLineIdentifiers;

}}

if(!class_exists("CustomerIdentifier")){
class CustomerIdentifier {

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $identifier;

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
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var (object)LineTrafficTracking
     */
    public $lineTrafficTracking;

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

if(!class_exists("LineTrafficTracking")){
class LineTrafficTracking {

    /**
     * @var dateTime
     */
    public $periodStartDateTime;

    /**
     * @var dateTime
     */
    public $periodEndDateTime;

    /**
     * @var dateTime
     */
    public $firstCdrDateTime;

    /**
     * @var dateTime
     */
    public $lastCdrDateTime;

    /**
     * @var int
     */
    public $cdrNumber;

    /**
     * @var array[0, unbounded] of (object)Volume
     */
    public $volume;

}}

if(!class_exists("Volume")){
class Volume {

    /**
     * @var string
     *     NOTE: bearer should follow the following restrictions
     *     You can have one of the following value
     *     FIXED_SERVICE_COMPLEMENT
     *     VOICE
     *     WIFI
     *     VALUE_BASED_COMMUNICATION
     *     SMS
     *     MMS
     *     MULTIMEDIA_PURCHASE
     *     CONSUMPTION_TRACKING
     *     GPRS_EDGE
     *     UMTS_3G
     *     FAX
     *     UNKNOWN
     *     NA
     */
    public $bearer;

    /**
     * @var string
     *     NOTE: roaming should follow the following restrictions
     *     You can have one of the following value
     *     LOCAL
     *     ROAMING
     *     ALL_ORIGIN
     *     UNKNOWN
     */
    public $roaming;

    /**
     * @var string
     *     NOTE: type should follow the following restrictions
     *     You can have one of the following value
     *     VOLUME_IN_KBYTES
     *     DURATION_IN_SECONDS
     *     NUMBER
     */
    public $type;

    /**
     * @var double
     */
    public $value;

}}

// define the class map
/*
$class_map = array(
    "submitTrafficTrackingRequest" => "submitTrafficTrackingRequest",
    "LineIdentifierCollection" => "LineIdentifierCollection",
    "Msisdn" => "Msisdn",
    "submitTrafficTrackingRequestResponse" => "submitTrafficTrackingRequestResponse",
    "getTrafficTracking" => "getTrafficTracking",
    "getTrafficTrackingResponse" => "getTrafficTrackingResponse",
    "CustomerIdentifier" => "CustomerIdentifier",
    "Line" => "Line",
    "LineIdentifier" => "LineIdentifier",
    "LineTrafficTracking" => "LineTrafficTracking",
    "Volume" => "Volume");

try {

    // create client in WSDL mode
    $client = new WSClient(array ("wsdl" =>"TrafficTracking_V1_2.wsdl",
        "classmap" => $class_map));

    // get proxy object reference form client 
    $proxy = $client->getProxy();

    // create input object and set values
    $input = new submitTrafficTrackingRequest();
    //TODO: fill in the class fields of $input to match your business logic

    // call the operation
    $response = $proxy->submitTrafficTrackingRequest($input);
    //TODO: Implement business logic to consume $response, which is of type submitTrafficTrackingRequestResponse

    $input = new getTrafficTracking();
    //TODO: fill in the class fields of $input to match your business logic

    // call the operation
    $response = $proxy->getTrafficTracking($input);
    //TODO: Implement business logic to consume $response, which is of type getTrafficTrackingResponse

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
