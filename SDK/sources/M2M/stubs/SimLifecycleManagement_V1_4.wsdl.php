<?php

// PHP classes corresponding to the data types in defined in WSDL

if(!class_exists("submitUpdateSimStatusRequest")){
class submitUpdateSimStatusRequest {

    /**
     * @var (object)LineIdentifierCollection
     */
    public $lineIdentifiers;

    /**
     * @var string
     *     NOTE: requestedStatus should follow the following restrictions
     *     You can have one of the following value
     *     ACTIVATED
     *     ACTIVATED_FOR_TEST
     *     SLEEPING
     *     SUSPENDED
     */
    public $requestedStatus;

    /**
     * @var string
     *     NOTE: testMode should follow the following restrictions
     *     You can have one of the following value
     *     INTERNATIONAL
     *     EUROPE
     *     METROPOLE
     *     AU_COMPTEUR
     */
    public $testMode;

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

if(!class_exists("submitUpdateSimStatusRequestResponse")){
class submitUpdateSimStatusRequestResponse {

    /**
     * @var int
     */
    public $ticketNumber;

    /**
     * @var (object)LineIdentifierCollection
     */
    public $unknownLineIdentifiers;

}}

if(!class_exists("getUpdateSimStatusResult")){
class getUpdateSimStatusResult {

    /**
     * @var int
     */
    public $ticketNumber;

}}

if(!class_exists("getUpdateSimStatusResultResponse")){
class getUpdateSimStatusResultResponse {

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
     * @var string
     *     NOTE: requestedStatus should follow the following restrictions
     *     You can have one of the following value
     *     ACTIVATED
     *     ACTIVATED_FOR_TEST
     *     SLEEPING
     *     SUSPENDED
     */
    public $requestedStatus;

    /**
     * @var string
     *     NOTE: testMode should follow the following restrictions
     *     You can have one of the following value
     *     INTERNATIONAL
     *     EUROPE
     *     METROPOLE
     *     AU_COMPTEUR
     */
    public $testMode;

    /**
     * @var array[0, unbounded] of (object)StatusUpdate
     */
    public $statusUpdate;

    /**
     * @var (object)LineIdentifierCollection
     */
    public $unknownLineIdentifiers;

}}

if(!class_exists("StatusUpdate")){
class StatusUpdate {

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
     * @var dateTime
     */
    public $plannedModeExitDate;

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

// define the class map
/*
$class_map = array(
    "submitUpdateSimStatusRequest" => "submitUpdateSimStatusRequest",
    "LineIdentifierCollection" => "LineIdentifierCollection",
    "Msisdn" => "Msisdn",
    "submitUpdateSimStatusRequestResponse" => "submitUpdateSimStatusRequestResponse",
    "getUpdateSimStatusResult" => "getUpdateSimStatusResult",
    "getUpdateSimStatusResultResponse" => "getUpdateSimStatusResultResponse",
    "StatusUpdate" => "StatusUpdate",
    "LineIdentifier" => "LineIdentifier");

try {

    // create client in WSDL mode
    $client = new WSClient(array ("wsdl" =>"SimLifecycleManagement_V1_4.wsdl",
        "classmap" => $class_map));

    // get proxy object reference form client 
    $proxy = $client->getProxy();

    // create input object and set values
    $input = new submitUpdateSimStatusRequest();
    //TODO: fill in the class fields of $input to match your business logic

    // call the operation
    $response = $proxy->submitUpdateSimStatusRequest($input);
    //TODO: Implement business logic to consume $response, which is of type submitUpdateSimStatusRequestResponse

    $input = new getUpdateSimStatusResult();
    //TODO: fill in the class fields of $input to match your business logic

    // call the operation
    $response = $proxy->getUpdateSimStatusResult($input);
    //TODO: Implement business logic to consume $response, which is of type getUpdateSimStatusResultResponse

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
