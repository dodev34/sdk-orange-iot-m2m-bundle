<?php

// PHP classes corresponding to the data types in defined in WSDL

if(!class_exists("submitSessionHistoryRequest")){
class submitSessionHistoryRequest {

    /**
     * @var (object)LineIdentifier
     */
    public $lineIdentifier;

    /**
     * @var dateTime
     */
    public $periodStartDateTime;

    /**
     * @var dateTime
     */
    public $periodEndDateTime;

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

if(!class_exists("submitSessionHistoryRequestResponse")){
class submitSessionHistoryRequestResponse {

    /**
     * @var int
     */
    public $ticketNumber;

}}

if(!class_exists("getSessionHistory")){
class getSessionHistory {

    /**
     * @var int
     */
    public $ticketNumber;

}}

if(!class_exists("getSessionHistoryResponse")){
class getSessionHistoryResponse {

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
     * @var (object)Line
     */
    public $line;

    /**
     * @var (object)Sessions2
     */
    public $sessions;

}}

if(!class_exists("Line")){
class Line {

    /**
     * @var array[0, unbounded] of (object)CustomerIdentifier
     */
    public $customerIdentifier;

    /**
     * @var (object)Subscription
     */
    public $subscription;

    /**
     * @var (object)Sim
     */
    public $sim;

    /**
     * @var (object)Device
     */
    public $device;

    /**
     * @var string
     */
    public $machineIdentifier;

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

if(!class_exists("Subscription")){
class Subscription {

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var (object)SubscriptionDescription
     */
    public $description;

    /**
     * @var dateTime
     */
    public $creationDate;

    /**
     * @var dateTime
     */
    public $connectionDate;

    /**
     * @var (object)Msisdn
     */
    public $msisdnData;

    /**
     * @var (object)Msisdn
     */
    public $msisdnVoice;

    /**
     * @var (object)Msisdn
     */
    public $msisdnFax;

}}

if(!class_exists("SubscriptionDescription")){
class SubscriptionDescription {

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $user;

    /**
     * @var string
     */
    public $userRef;

    /**
     * @var array[0, unbounded] of string
     */
    public $service;

    /**
     * @var array[0, unbounded] of (object)CustomInformation
     */
    public $customInformation;

}}

if(!class_exists("CustomInformation")){
class CustomInformation {

    /**
     * @var string
     */
    public $customLabel;

    /**
     * @var string
     */
    public $customValue;

}}

if(!class_exists("Sim")){
class Sim {

    /**
     * @var string
     *     NOTE: status should follow the following restrictions
     *     You can have one of the following value
     *     PRE_ACTIVATED
     *     ACTIVATED_FOR_TEST
     *     ACTIVATED
     *     SLEEPING
     *     SUSPENDED
     *     CANCELLED
     */
    public $status;

    /**
     * @var dateTime
     */
    public $lastStatusRefreshDate;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $imei;

}}

if(!class_exists("Device")){
class Device {

    /**
     * @var string
     */
    public $uniqueIdentifier;

    /**
     * @var string
     */
    public $serialNumber;

}}

if(!class_exists("Sessions2")){
class Sessions2 {

    /**
     * @var dateTime
     */
    public $periodStartDateTime;

    /**
     * @var dateTime
     */
    public $periodEndDateTime;

    /**
     * @var string
     */
    public $totalNumberOfResults;

    /**
     * @var dateTime
     */
    public $firstSessionDateTime;

    /**
     * @var dateTime
     */
    public $lastSessionDateTime;

    /**
     * @var int
     */
    public $numberOfRemainingResults;

    /**
     * @var array[0, unbounded] of (object)Session2
     */
    public $session;

}}

if(!class_exists("Session2")){
class Session2 {

    /**
     * @var string
     *     NOTE: communicationWay should follow the following restrictions
     *     You can have one of the following value
     *     MOBILE_ORIGINATED
     *     MOBILE_TERMINATED
     */
    public $communicationWay;

    /**
     * @var dateTime
     */
    public $emissionDate;

    /**
     * @var string
     */
    public $imei;

    /**
     * @var string
     *     NOTE: bearerType should follow the following restrictions
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
    public $bearerType;

    /**
     * @var string
     */
    public $originatedCountry;

    /**
     * @var int
     */
    public $originatedCountryMcc;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var int
     */
    public $durationInSeconds;

    /**
     * @var long
     */
    public $volumeInInBytes;

    /**
     * @var long
     */
    public $volumeOutInBytes;

    /**
     * @var string
     */
    public $apn;

    /**
     * @var string
     */
    public $pdpAddress;

    /**
     * @var string
     *     NOTE: pdpContextType should follow the following restrictions
     *     You can have one of the following value
     *     IPV4
     *     IPV6
     *     PPP
     *     UNKNOWN
     *     NA
     */
    public $pdpContextType;

    /**
     * @var string
     */
    public $msisdnEmission;

    /**
     * @var boolean
     */
    public $currentMsisdnFlag;

    /**
     * @var dateTime
     */
    public $currentMsisdnFlagCheckDate;

    /**
     * @var string
     */
    public $ggsnAddress;

    /**
     * @var string
     */
    public $sgsnAddress;

    /**
     * @var string
     */
    public $sgsnAddress2;

    /**
     * @var int
     */
    public $lac;

    /**
     * @var int
     */
    public $cellId;

    /**
     * @var boolean
     */
    public $efficiencyIndicator;

    /**
     * @var string
     *     NOTE: whiteZonePrefix should follow the following restrictions
     *     You can have one of the following value
     *     NATIONAL
     *     INTERNATIONAL
     *     UNKNOWN
     *     MOBILE_STATION_ROAMING_NUMBER
     *     NA
     */
    public $whiteZonePrefix;

}}

// define the class map
/*
$class_map = array(
    "submitSessionHistoryRequest" => "submitSessionHistoryRequest",
    "LineIdentifier" => "LineIdentifier",
    "Msisdn" => "Msisdn",
    "submitSessionHistoryRequestResponse" => "submitSessionHistoryRequestResponse",
    "getSessionHistory" => "getSessionHistory",
    "getSessionHistoryResponse" => "getSessionHistoryResponse",
    "Line" => "Line",
    "CustomerIdentifier" => "CustomerIdentifier",
    "Subscription" => "Subscription",
    "SubscriptionDescription" => "SubscriptionDescription",
    "CustomInformation" => "CustomInformation",
    "Sim" => "Sim",
    "Device" => "Device",
    "Sessions2" => "Sessions2",
    "Session2" => "Session2");

try {

    // create client in WSDL mode
    $client = new WSClient(array ("wsdl" =>"SessionHistory_V2_1.wsdl",
        "classmap" => $class_map));

    // get proxy object reference form client 
    $proxy = $client->getProxy();

    // create input object and set values
    $input = new submitSessionHistoryRequest();
    //TODO: fill in the class fields of $input to match your business logic

    // call the operation
    $response = $proxy->submitSessionHistoryRequest($input);
    //TODO: Implement business logic to consume $response, which is of type submitSessionHistoryRequestResponse

    $input = new getSessionHistory();
    //TODO: fill in the class fields of $input to match your business logic

    // call the operation
    $response = $proxy->getSessionHistory($input);
    //TODO: Implement business logic to consume $response, which is of type getSessionHistoryResponse

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
