<?php

// PHP classes corresponding to the data types in defined in WSDL

if(!class_exists("createTrigger")){
class createTrigger {

    /**
     * @var (object)Scope
     */
    public $scope;

    /**
     * @var (object)TriggerCriteria
     */
    public $triggerCriteria;

    /**
     * @var boolean
     */
    public $notification;

    /**
     * @var string
     *     NOTE: level should follow the following restrictions
     *     You can have one of the following value
     *     HIGH
     *     MEDIUM
     *     LOW
     */
    public $level;

    /**
     * @var int
     *     NOTE: groupId should follow the following restrictions
     *     Your value should be 
     *     Greater than or equal to 0
     */
    public $groupId;

    /**
     * @var string
     *     NOTE: comment should follow the following restrictions
     *     Your length of the value should be 
     *     Less than 128
     */
    public $comment;

}}

if(!class_exists("Scope")){
class Scope {

    // You may set only one from the following set
    // ---------------Start Choice----------------

    /**
     * @var (object)LineIdentifier
     */
    public $lineIdentifier;

    /**
     * @var string
     *     NOTE: customerEnvironnementNumber should follow the following restrictions
     *     Your length of the value should be 
     *     Less than 30
     */
    public $customerEnvironnementNumber;
    // ----------------End Choice---------------


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

if(!class_exists("TriggerCriteria")){
class TriggerCriteria {

    // You may set only one from the following set
    // ---------------Start Choice----------------

    /**
     * @var (object)TrafficTimeStampCriteria
     */
    public $trafficTimeStampCriteria;

    /**
     * @var (object)TrafficLocationCriteria
     */
    public $trafficLocationCriteria;

    /**
     * @var (object)TrafficGlobalThresholdCriteria
     */
    public $trafficGlobalThresholdCriteria;

    /**
     * @var (object)TrafficUnitaryThresholdCriteria
     */
    public $trafficUnitaryThresholdCriteria;

    /**
     * @var (object)TrafficBearerCriteria
     */
    public $trafficBearerCriteria;

    /**
     * @var (object)UpdateImeiCriteria
     */
    public $updateImeiCriteria;
    // ----------------End Choice---------------


}}

if(!class_exists("TrafficTimeStampCriteria")){
class TrafficTimeStampCriteria {

    /**
     * @var (object)AllowedPeriods
     */
    public $allowedPeriods;

}}

if(!class_exists("TwoPeriods")){
class TwoPeriods {

    /**
     * @var array[1, 2] of (object)Period
     */
    public $period;

}}

if(!class_exists("Period")){
class Period {

    /**
     * @var int
     */
    public $begin;

    /**
     * @var int
     */
    public $end;

}}

if(!class_exists("AllowedPeriods")){
class AllowedPeriods extends TwoPeriods {

    /**
     * @var string
     *     NOTE: scale should follow the following restrictions
     *     You can have one of the following value
     *     HOUR_PER_DAY
     *     DAY_PER_MONTH
     */
    public $scale;

}}

if(!class_exists("TrafficLocationCriteria")){
class TrafficLocationCriteria {

    /**
     * @var (object)AllowedCountriesAndOperators
     */
    public $allowedCountriesAndOperators;

}}

if(!class_exists("AllowedCountriesAndOperators")){
class AllowedCountriesAndOperators {

    /**
     * @var array[1, unbounded] of (object)Country
     */
    public $country;

}}

if(!class_exists("Country")){
class Country {

    /**
     * @var int
     *     NOTE: countryCode should follow the following restrictions
     *     Your value should be 
     *     Greater than or equal to 0
     *     Less than or equal to 32767
     */
    public $countryCode;

    /**
     * @var (object)Operators
     */
    public $operators;

}}

if(!class_exists("Operators")){
class Operators {

    /**
     * @var array[1, unbounded] of string
     *     NOTE: operatorCode should follow the following restrictions
     *     Your length of the value should be 
     *     Less than 5
     */
    public $operatorCode;

}}

if(!class_exists("TrafficGlobalThresholdCriteria")){
class TrafficGlobalThresholdCriteria {

    // You may set only one from the following set
    // ---------------Start Choice----------------

    /**
     * @var (object)Roaming
     */
    public $roaming;

    /**
     * @var (object)Local
     */
    public $local;
    // ----------------End Choice---------------


}}

if(!class_exists("Roaming")){
class Roaming {

    /**
     * @var (object)TrafficRestriction
     */
    public $trafficRestriction;

}}

if(!class_exists("TrafficRestriction")){
class TrafficRestriction {

    /**
     * @var int
     */
    public $value;

    /**
     * @var string
     *     NOTE: bearer should follow the following restrictions
     *     You can have one of the following value
     *     FAX
     *     FIXED_SERVICE_COMPLEMENT
     *     GPRS_EDGE
     *     MMS
     *     MULTIMEDIA_PURCHASE
     *     SMS
     *     UMTS
     *     UNKNOWN
     *     VALUE_BASED_COMMUNICATION
     *     VOICE
     *     WIFI
     */
    public $bearer;

}}

if(!class_exists("Local")){
class Local {

    /**
     * @var (object)TrafficRestriction
     */
    public $trafficRestriction;

}}

if(!class_exists("TrafficUnitaryThresholdCriteria")){
class TrafficUnitaryThresholdCriteria {

    // You may set only one from the following set
    // ---------------Start Choice----------------

    /**
     * @var (object)Roaming
     */
    public $roaming;

    /**
     * @var (object)Local
     */
    public $local;
    // ----------------End Choice---------------


}}

if(!class_exists("TrafficBearerCriteria")){
class TrafficBearerCriteria {

    /**
     * @var (object)AllowedBearers
     */
    public $allowedBearers;

}}

if(!class_exists("AllowedBearers")){
class AllowedBearers {

    /**
     * @var array[1, unbounded] of string
     *     NOTE: bearer should follow the following restrictions
     *     You can have one of the following value
     *     FAX
     *     FIXED_SERVICE_COMPLEMENT
     *     GPRS_EDGE
     *     MMS
     *     MULTIMEDIA_PURCHASE
     *     SMS
     *     UMTS
     *     UNKNOWN
     *     VALUE_BASED_COMMUNICATION
     *     VOICE
     *     WIFI
     */
    public $bearer;

}}

if(!class_exists("UpdateImeiCriteria")){
class UpdateImeiCriteria {

}}

if(!class_exists("createTriggerResponse")){
class createTriggerResponse {

    /**
     * @var int
     */
    public $triggerIdentifier;

}}

if(!class_exists("deleteTrigger")){
class deleteTrigger {

    /**
     * @var int
     */
    public $triggerIdentifier;

}}

if(!class_exists("deleteTriggerResponse")){
class deleteTriggerResponse {

    /**
     * @var int
     */
    public $deletedTriggerIdentifier;

}}

if(!class_exists("updateTrigger")){
class updateTrigger {

    /**
     * @var int
     */
    public $triggerIdentifier;

    /**
     * @var (object)TriggerCriteria
     */
    public $triggerCriteria;

    /**
     * @var boolean
     */
    public $notification;

    /**
     * @var string
     *     NOTE: level should follow the following restrictions
     *     You can have one of the following value
     *     HIGH
     *     MEDIUM
     *     LOW
     */
    public $level;

    /**
     * @var int
     *     NOTE: groupId should follow the following restrictions
     *     Your value should be 
     *     Greater than or equal to 0
     */
    public $groupId;

    /**
     * @var string
     *     NOTE: comment should follow the following restrictions
     *     Your length of the value should be 
     *     Less than 128
     */
    public $comment;

    /**
     * @var string
     *     NOTE: status should follow the following restrictions
     *     You can have one of the following value
     *     ENABLE
     *     DISABLE
     *     ALARM_SENT
     */
    public $status;

}}

if(!class_exists("updateTriggerResponse")){
class updateTriggerResponse {

    /**
     * @var int
     */
    public $updatedTriggerIdentifier;

}}

if(!class_exists("listTriggers")){
class listTriggers {

    // You may set only one from the following set
    // ---------------Start Choice----------------

    /**
     * @var (object)TriggerIdentifiers
     */
    public $triggerIdentifiers;

    /**
     * @var (object)LineIdentifierCollection
     */
    public $lineIdentifiers;

    /**
     * @var string
     *     NOTE: customerEnvironmentNumber should follow the following restrictions
     *     Your length of the value should be 
     *     Less than 30
     */
    public $customerEnvironmentNumber;
    // ----------------End Choice---------------


}}

if(!class_exists("TriggerIdentifiers")){
class TriggerIdentifiers {

    /**
     * @var array[1, unbounded] of int
     */
    public $triggerIdentifier;

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

if(!class_exists("listTriggersResponse")){
class listTriggersResponse {

    /**
     * @var (object)Triggers
     */
    public $triggers;

    /**
     * @var (object)UnknownTriggers
     */
    public $unknownTriggers;

    /**
     * @var (object)LineIdentifierCollection
     */
    public $unknownLineIdentifiers;

}}

if(!class_exists("Triggers")){
class Triggers {

    /**
     * @var array[1, unbounded] of (object)Trigger
     */
    public $trigger;

}}

if(!class_exists("Trigger")){
class Trigger {

    /**
     * @var (object)TriggerScope
     */
    public $scope;

    /**
     * @var int
     */
    public $triggerIdentifier;

    /**
     * @var string
     *     NOTE: triggerType should follow the following restrictions
     *     You can have one of the following value
     *     TRAFFIC_TIMESTAMP
     *     TRAFFIC_LOCATION
     *     TRAFFIC_BEARER
     *     TRAFFIC_UNITARY_THRESHOLD
     *     TRAFFIC_GLOBAL_THRESHOLD
     *     UPDATE_IMEI
     */
    public $triggerType;

    /**
     * @var (object)TriggerCriteria
     */
    public $triggerCriteria;

    /**
     * @var boolean
     */
    public $notification;

    /**
     * @var string
     *     NOTE: level should follow the following restrictions
     *     You can have one of the following value
     *     HIGH
     *     MEDIUM
     *     LOW
     */
    public $level;

    /**
     * @var int
     *     NOTE: groupId should follow the following restrictions
     *     Your value should be 
     *     Greater than or equal to 0
     */
    public $groupId;

    /**
     * @var string
     *     NOTE: comment should follow the following restrictions
     *     Your length of the value should be 
     *     Less than 128
     */
    public $comment;

    /**
     * @var string
     *     NOTE: status should follow the following restrictions
     *     You can have one of the following value
     *     ENABLE
     *     DISABLE
     *     ALARM_SENT
     */
    public $status;

}}

if(!class_exists("TriggerScope")){
class TriggerScope {

    // You may set only one from the following set
    // ---------------Start Choice----------------

    /**
     * @var string
     */
    public $subscriptionNumber;

    /**
     * @var string
     *     NOTE: customerEnvironmentNumber should follow the following restrictions
     *     Your length of the value should be 
     *     Less than 30
     */
    public $customerEnvironmentNumber;
    // ----------------End Choice---------------


}}

if(!class_exists("UnknownTriggers")){
class UnknownTriggers {

    /**
     * @var array[1, unbounded] of int
     */
    public $triggerIdentifier;

}}

if(!class_exists("getAlarms")){
class getAlarms {

    /**
     * @var (object)AlarmIdentifiers
     */
    public $alarmIdentifiers;

}}

if(!class_exists("AlarmIdentifiers")){
class AlarmIdentifiers {

    /**
     * @var array[1, unbounded] of int
     */
    public $alarmIdentifier;

}}

if(!class_exists("getAlarmsResponse")){
class getAlarmsResponse {

    /**
     * @var (object)Alarms
     */
    public $alarms;

    /**
     * @var (object)UnknownAlarmIdentifiers
     */
    public $unknownAlarmIdentifiers;

}}

if(!class_exists("Alarms")){
class Alarms {

    /**
     * @var array[1, unbounded] of (object)Alarm
     */
    public $alarm;

}}

if(!class_exists("Alarm")){
class Alarm {

    /**
     * @var int
     */
    public $alarmIdentifier;

    /**
     * @var dateTime
     */
    public $creationDate;

    /**
     * @var string
     *     NOTE: level should follow the following restrictions
     *     You can have one of the following value
     *     HIGH
     *     MEDIUM
     *     LOW
     */
    public $level;

    /**
     * @var string
     *     NOTE: customerEnvironmentNumber should follow the following restrictions
     *     Your length of the value should be 
     *     Less than 30
     */
    public $customerEnvironmentNumber;

    /**
     * @var string
     */
    public $subscriptionNumber;

    /**
     * @var dateTime
     */
    public $notificationDate;

    /**
     * @var int
     */
    public $notificationResultCode;

    /**
     * @var string
     */
    public $notifiedURL;

    /**
     * @var string
     */
    public $notificationMessage;

    // You may set only one from the following set
    // ---------------Start Choice----------------

    /**
     * @var (object)NbAlarmExceeded
     */
    public $nbAlarmExceeded;

    /**
     * @var (object)TriggeredAlarm
     */
    public $triggeredAlarm;
    // ----------------End Choice---------------


}}

if(!class_exists("NbAlarmExceeded")){
class NbAlarmExceeded {

    /**
     * @var int
     */
    public $quota;

    /**
     * @var int
     */
    public $triggerIdentifier;

}}

if(!class_exists("TriggeredAlarm")){
class TriggeredAlarm {

    /**
     * @var int
     */
    public $triggerIdentifier;

    /**
     * @var boolean
     */
    public $notificationRequired;

    /**
     * @var string
     *     NOTE: triggerComment should follow the following restrictions
     *     Your length of the value should be 
     *     Less than 128
     */
    public $triggerComment;

    /**
     * @var int
     *     NOTE: triggerGroupId should follow the following restrictions
     *     Your value should be 
     *     Greater than or equal to 0
     */
    public $triggerGroupId;

    /**
     * @var string
     *     NOTE: triggerType should follow the following restrictions
     *     You can have one of the following value
     *     TRAFFIC_TIMESTAMP
     *     TRAFFIC_LOCATION
     *     TRAFFIC_BEARER
     *     TRAFFIC_UNITARY_THRESHOLD
     *     TRAFFIC_GLOBAL_THRESHOLD
     *     UPDATE_IMEI
     */
    public $triggerType;

    /**
     * @var (object)AlarmTriggerCriteria
     */
    public $triggerCriteria;

}}

if(!class_exists("AlarmTriggerCriteria")){
class AlarmTriggerCriteria {

    // You may set only one from the following set
    // ---------------Start Choice----------------

    /**
     * @var (object)AlarmTrafficTimeStampCriteria
     */
    public $trafficTimeStampCriteria;

    /**
     * @var (object)AlarmTrafficLocationCriteria
     */
    public $trafficLocationCriteria;

    /**
     * @var (object)AlarmTrafficUnitaryThresholdCriteria
     */
    public $trafficUnitaryThresholdCriteria;

    /**
     * @var (object)AlarmTrafficGlobalThresholdCriteria
     */
    public $trafficGlobalThresholdCriteria;

    /**
     * @var (object)AlarmTrafficBearerCriteria
     */
    public $trafficBearerCriteria;

    /**
     * @var (object)AlarmUpdateImeiCriteria
     */
    public $updateImeiCriteria;
    // ----------------End Choice---------------


}}

if(!class_exists("AlarmTrafficTimeStampCriteria")){
class AlarmTrafficTimeStampCriteria {

    /**
     * @var dateTime
     */
    public $firstEventDate;

    /**
     * @var dateTime
     */
    public $lastEventDate;

    /**
     * @var int
     */
    public $eventCount;

    /**
     * @var (object)AllowedPeriods
     */
    public $allowedPeriods;

}}

if(!class_exists("AlarmTrafficLocationCriteria")){
class AlarmTrafficLocationCriteria {

    /**
     * @var dateTime
     */
    public $firstEventDate;

    /**
     * @var dateTime
     */
    public $lastEventDate;

    /**
     * @var int
     */
    public $eventCount;

    /**
     * @var (object)AllowedCountriesAndOperators
     */
    public $allowedCountriesAndOperators;

    /**
     * @var (object)ForbiddenCountriesAndOperators
     */
    public $forbiddenCountriesAndOperators;

}}

if(!class_exists("ForbiddenCountriesAndOperators")){
class ForbiddenCountriesAndOperators {

    /**
     * @var array[1, unbounded] of (object)Country
     */
    public $country;

}}

if(!class_exists("AlarmTrafficUnitaryThresholdCriteria")){
class AlarmTrafficUnitaryThresholdCriteria {

    /**
     * @var string
     *     NOTE: bearerType should follow the following restrictions
     *     You can have one of the following value
     *     FAX
     *     FIXED_SERVICE_COMPLEMENT
     *     GPRS_EDGE
     *     MMS
     *     MULTIMEDIA_PURCHASE
     *     SMS
     *     UMTS
     *     UNKNOWN
     *     VALUE_BASED_COMMUNICATION
     *     VOICE
     *     WIFI
     */
    public $bearerType;

    /**
     * @var boolean
     */
    public $roaming;

    /**
     * @var int
     */
    public $thresholdValue;

    /**
     * @var int
     */
    public $triggeringValue;

}}

if(!class_exists("AlarmTrafficGlobalThresholdCriteria")){
class AlarmTrafficGlobalThresholdCriteria {

    /**
     * @var string
     *     NOTE: bearerType should follow the following restrictions
     *     You can have one of the following value
     *     FAX
     *     FIXED_SERVICE_COMPLEMENT
     *     GPRS_EDGE
     *     MMS
     *     MULTIMEDIA_PURCHASE
     *     SMS
     *     UMTS
     *     UNKNOWN
     *     VALUE_BASED_COMMUNICATION
     *     VOICE
     *     WIFI
     */
    public $bearerType;

    /**
     * @var boolean
     */
    public $roaming;

    /**
     * @var int
     */
    public $thresholdValue;

    /**
     * @var int
     */
    public $triggeringValue;

}}

if(!class_exists("AlarmTrafficBearerCriteria")){
class AlarmTrafficBearerCriteria {

    /**
     * @var dateTime
     */
    public $firstEventDate;

    /**
     * @var dateTime
     */
    public $lastEventDate;

    /**
     * @var int
     */
    public $eventCount;

    /**
     * @var (object)ForbiddenBearerTypes
     */
    public $forbiddenBearerTypes;

    /**
     * @var (object)AllowedBearerTypes
     */
    public $allowedBearerTypes;

}}

if(!class_exists("ForbiddenBearerTypes")){
class ForbiddenBearerTypes {

    /**
     * @var array[1, unbounded] of string
     *     NOTE: bearerType should follow the following restrictions
     *     You can have one of the following value
     *     FAX
     *     FIXED_SERVICE_COMPLEMENT
     *     GPRS_EDGE
     *     MMS
     *     MULTIMEDIA_PURCHASE
     *     SMS
     *     UMTS
     *     UNKNOWN
     *     VALUE_BASED_COMMUNICATION
     *     VOICE
     *     WIFI
     */
    public $bearerType;

}}

if(!class_exists("AllowedBearerTypes")){
class AllowedBearerTypes {

    /**
     * @var array[1, unbounded] of string
     *     NOTE: bearerType should follow the following restrictions
     *     You can have one of the following value
     *     FAX
     *     FIXED_SERVICE_COMPLEMENT
     *     GPRS_EDGE
     *     MMS
     *     MULTIMEDIA_PURCHASE
     *     SMS
     *     UMTS
     *     UNKNOWN
     *     VALUE_BASED_COMMUNICATION
     *     VOICE
     *     WIFI
     */
    public $bearerType;

}}

if(!class_exists("AlarmUpdateImeiCriteria")){
class AlarmUpdateImeiCriteria {

    /**
     * @var string
     */
    public $oldImei;

    /**
     * @var dateTime
     */
    public $lastOldImeiDate;

    /**
     * @var string
     */
    public $newImei;

    /**
     * @var dateTime
     */
    public $firstNewImeiDate;

}}

if(!class_exists("UnknownAlarmIdentifiers")){
class UnknownAlarmIdentifiers {

    /**
     * @var array[1, unbounded] of int
     */
    public $alarmIdentifier;

}}

if(!class_exists("searchAlarms")){
class searchAlarms {

    // You may set only one from the following set
    // ---------------Start Choice----------------

    /**
     * @var (object)SearchAlarmsByTargets
     */
    public $searchByTargets;

    /**
     * @var (object)SearchAlarmsByTriggers
     */
    public $searchByTriggers;
    // ----------------End Choice---------------


    /**
     * @var dateTime
     */
    public $beginDate;

    /**
     * @var dateTime
     */
    public $endDate;

    /**
     * @var int
     *     NOTE: rangeStart should follow the following restrictions
     *     Your value should be 
     *     Greater than or equal to 0
     */
    public $rangeStart;

    /**
     * @var int
     *     NOTE: rangeSize should follow the following restrictions
     *     Your value should be 
     *     Greater than or equal to 1
     */
    public $rangeSize;

}}

if(!class_exists("SearchAlarmsByTargets")){
class SearchAlarmsByTargets {

    // You may set only one from the following set
    // ---------------Start Choice----------------

    /**
     * @var (object)LineIdentifierCollection
     */
    public $lineIdentifiers;

    /**
     * @var string
     *     NOTE: customerEnvironmentNumber should follow the following restrictions
     *     Your length of the value should be 
     *     Less than 30
     */
    public $customerEnvironmentNumber;
    // ----------------End Choice---------------


    /**
     * @var int
     *     NOTE: groupId should follow the following restrictions
     *     Your value should be 
     *     Greater than or equal to 0
     */
    public $groupId;

    /**
     * @var string
     *     NOTE: triggerType should follow the following restrictions
     *     You can have one of the following value
     *     TRAFFIC_TIMESTAMP
     *     TRAFFIC_LOCATION
     *     TRAFFIC_BEARER
     *     TRAFFIC_UNITARY_THRESHOLD
     *     TRAFFIC_GLOBAL_THRESHOLD
     *     UPDATE_IMEI
     */
    public $triggerType;

    /**
     * @var string
     *     NOTE: level should follow the following restrictions
     *     You can have one of the following value
     *     HIGH
     *     MEDIUM
     *     LOW
     */
    public $level;

}}

if(!class_exists("SearchAlarmsByTriggers")){
class SearchAlarmsByTriggers {

    /**
     * @var (object)TriggerIdentifiers
     */
    public $triggerIdentifiers;

}}

if(!class_exists("searchAlarmsResponse")){
class searchAlarmsResponse {

    /**
     * @var (object)Alarms
     */
    public $alarms;

    /**
     * @var (object)LineIdentifierCollection
     */
    public $unknownLineIdentifiers;

    /**
     * @var (object)TriggerIdentifiers
     */
    public $unknownTriggerIdentifiers;

    /**
     * @var boolean
     */
    public $resultsNumberExceeded;

    /**
     * @var int
     */
    public $totalResultsNumber;

}}

// define the class map
/*
$class_map = array(
    "createTrigger" => "createTrigger",
    "Scope" => "Scope",
    "LineIdentifier" => "LineIdentifier",
    "Msisdn" => "Msisdn",
    "TriggerCriteria" => "TriggerCriteria",
    "TrafficTimeStampCriteria" => "TrafficTimeStampCriteria",
    "TwoPeriods" => "TwoPeriods",
    "Period" => "Period",
    "AllowedPeriods" => "AllowedPeriods",
    "TrafficLocationCriteria" => "TrafficLocationCriteria",
    "AllowedCountriesAndOperators" => "AllowedCountriesAndOperators",
    "Country" => "Country",
    "Operators" => "Operators",
    "TrafficGlobalThresholdCriteria" => "TrafficGlobalThresholdCriteria",
    "Roaming" => "Roaming",
    "TrafficRestriction" => "TrafficRestriction",
    "Local" => "Local",
    "TrafficUnitaryThresholdCriteria" => "TrafficUnitaryThresholdCriteria",
    "TrafficBearerCriteria" => "TrafficBearerCriteria",
    "AllowedBearers" => "AllowedBearers",
    "UpdateImeiCriteria" => "UpdateImeiCriteria",
    "createTriggerResponse" => "createTriggerResponse",
    "deleteTrigger" => "deleteTrigger",
    "deleteTriggerResponse" => "deleteTriggerResponse",
    "updateTrigger" => "updateTrigger",
    "updateTriggerResponse" => "updateTriggerResponse",
    "listTriggers" => "listTriggers",
    "TriggerIdentifiers" => "TriggerIdentifiers",
    "LineIdentifierCollection" => "LineIdentifierCollection",
    "listTriggersResponse" => "listTriggersResponse",
    "Triggers" => "Triggers",
    "Trigger" => "Trigger",
    "TriggerScope" => "TriggerScope",
    "UnknownTriggers" => "UnknownTriggers",
    "getAlarms" => "getAlarms",
    "AlarmIdentifiers" => "AlarmIdentifiers",
    "getAlarmsResponse" => "getAlarmsResponse",
    "Alarms" => "Alarms",
    "Alarm" => "Alarm",
    "NbAlarmExceeded" => "NbAlarmExceeded",
    "TriggeredAlarm" => "TriggeredAlarm",
    "AlarmTriggerCriteria" => "AlarmTriggerCriteria",
    "AlarmTrafficTimeStampCriteria" => "AlarmTrafficTimeStampCriteria",
    "AlarmTrafficLocationCriteria" => "AlarmTrafficLocationCriteria",
    "ForbiddenCountriesAndOperators" => "ForbiddenCountriesAndOperators",
    "AlarmTrafficUnitaryThresholdCriteria" => "AlarmTrafficUnitaryThresholdCriteria",
    "AlarmTrafficGlobalThresholdCriteria" => "AlarmTrafficGlobalThresholdCriteria",
    "AlarmTrafficBearerCriteria" => "AlarmTrafficBearerCriteria",
    "ForbiddenBearerTypes" => "ForbiddenBearerTypes",
    "AllowedBearerTypes" => "AllowedBearerTypes",
    "AlarmUpdateImeiCriteria" => "AlarmUpdateImeiCriteria",
    "UnknownAlarmIdentifiers" => "UnknownAlarmIdentifiers",
    "searchAlarms" => "searchAlarms",
    "SearchAlarmsByTargets" => "SearchAlarmsByTargets",
    "SearchAlarmsByTriggers" => "SearchAlarmsByTriggers",
    "searchAlarmsResponse" => "searchAlarmsResponse");

try {

    // create client in WSDL mode
    $client = new WSClient(array ("wsdl" =>"ServiceCustomerAlarm_V1_1.wsdl",
        "classmap" => $class_map));

    // get proxy object reference form client 
    $proxy = $client->getProxy();

    // create input object and set values
    $input = new createTrigger();
    //TODO: fill in the class fields of $input to match your business logic

    // call the operation
    $response = $proxy->createTrigger($input);
    //TODO: Implement business logic to consume $response, which is of type createTriggerResponse

    $input = new deleteTrigger();
    //TODO: fill in the class fields of $input to match your business logic

    // call the operation
    $response = $proxy->deleteTrigger($input);
    //TODO: Implement business logic to consume $response, which is of type deleteTriggerResponse

    $input = new updateTrigger();
    //TODO: fill in the class fields of $input to match your business logic

    // call the operation
    $response = $proxy->updateTrigger($input);
    //TODO: Implement business logic to consume $response, which is of type updateTriggerResponse

    $input = new listTriggers();
    //TODO: fill in the class fields of $input to match your business logic

    // call the operation
    $response = $proxy->listTriggers($input);
    //TODO: Implement business logic to consume $response, which is of type listTriggersResponse

    $input = new getAlarms();
    //TODO: fill in the class fields of $input to match your business logic

    // call the operation
    $response = $proxy->getAlarms($input);
    //TODO: Implement business logic to consume $response, which is of type getAlarmsResponse

    $input = new searchAlarms();
    //TODO: fill in the class fields of $input to match your business logic

    // call the operation
    $response = $proxy->searchAlarms($input);
    //TODO: Implement business logic to consume $response, which is of type searchAlarmsResponse

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
