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

    /**
     * @var boolean
     */
    public $notificationByMail;

    /**
     * @var (object)BusinessRules
     */
    public $businessRules;

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

    /**
     * @var (object)TrafficLazyMachineCriteria
     */
    public $trafficLazyMachineCriteria;

    /**
     * @var (object)TrafficSilentMachineCriteria
     */
    public $trafficSilentMachineCriteria;

    /**
     * @var (object)TrafficCrazyMachineCriteria
     */
    public $trafficCrazyMachineCriteria;

    /**
     * @var (object)SubscriptionStatusChangeCriteria
     */
    public $subscriptionStatusChangeCriteria;

    /**
     * @var (object)SubscriptionOptionChangeCriteria
     */
    public $subscriptionOptionChangeCriteria;
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

    /**
     * @var (object)AllOrigin
     */
    public $allOrigin;
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
     * @var long
     *     NOTE: value should follow the following restrictions
     *     Your value should be 
     *     Greater than or equal to 0
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

if(!class_exists("AllOrigin")){
class AllOrigin {

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

    /**
     * @var (object)AllOrigin
     */
    public $allOrigin;
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

if(!class_exists("TrafficLazyMachineCriteria")){
class TrafficLazyMachineCriteria {

    /**
     * @var long
     *     NOTE: value should follow the following restrictions
     *     Your value should be 
     *     Greater than or equal to 0
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

    /**
     * @var string
     *     NOTE: callOrigin should follow the following restrictions
     *     You can have one of the following value
     *     ROAMING
     *     UNKNOWN
     *     LOCAL
     *     ALL_ORIGIN
     */
    public $callOrigin;

    /**
     * @var int
     */
    public $period;

}}

if(!class_exists("TrafficSilentMachineCriteria")){
class TrafficSilentMachineCriteria {

    /**
     * @var int
     */
    public $period;

}}

if(!class_exists("TrafficCrazyMachineCriteria")){
class TrafficCrazyMachineCriteria {

    /**
     * @var long
     *     NOTE: value should follow the following restrictions
     *     Your value should be 
     *     Greater than or equal to 0
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

    /**
     * @var string
     *     NOTE: callOrigin should follow the following restrictions
     *     You can have one of the following value
     *     ROAMING
     *     UNKNOWN
     *     LOCAL
     *     ALL_ORIGIN
     */
    public $callOrigin;

    /**
     * @var int
     */
    public $period;

}}

if(!class_exists("SubscriptionStatusChangeCriteria")){
class SubscriptionStatusChangeCriteria {

    /**
     * @var (object)WatchedM2MSubscriptionStatuses
     */
    public $watchedM2MSubscriptionStatuses;

}}

if(!class_exists("WatchedM2MSubscriptionStatuses")){
class WatchedM2MSubscriptionStatuses {

    /**
     * @var array[1, unbounded] of string
     */
    public $status;

}}

if(!class_exists("SubscriptionOptionChangeCriteria")){
class SubscriptionOptionChangeCriteria {

    /**
     * @var (object)WatchedSubscriptionOptions
     */
    public $watchedSubscriptionOptions;

    /**
     * @var (object)OptionChangeTypes
     */
    public $optionChangeTypes;

}}

if(!class_exists("WatchedSubscriptionOptions")){
class WatchedSubscriptionOptions {

    /**
     * @var array[1, unbounded] of string
     */
    public $option;

}}

if(!class_exists("OptionChangeTypes")){
class OptionChangeTypes {

    /**
     * @var array[1, unbounded] of string
     */
    public $optionChangeType;

}}

if(!class_exists("BusinessRules")){
class BusinessRules {

    /**
     * @var (object)SlmBusinessRule
     */
    public $slmBusinessRule;

}}

if(!class_exists("SlmBusinessRule")){
class SlmBusinessRule {

    /**
     * @var string
     */
    public $requestedStatus;

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

    /**
     * @var boolean
     */
    public $notificationByMail;

    /**
     * @var (object)BusinessRules
     */
    public $businessRules;

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


    /**
     * @var boolean
     */
    public $showAllOriginTrafficTriggers;

    /**
     * @var boolean
     */
    public $showMachineTriggers;

    /**
     * @var boolean
     */
    public $showExtendedTriggers;

    /**
     * @var boolean
     */
    public $showSubscriptionStatusChangeTriggers;

    /**
     * @var boolean
     */
    public $showSubscriptionOptionChangeTriggers;

    /**
     * @var boolean
     */
    public $showBusinessRules;

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
     *     TRAFFIC_LAZY_MACHINE
     *     TRAFFIC_SILENT_MACHINE
     *     TRAFFIC_CRAZY_MACHINE
     *     M2M_SUBSCRIPTION_STATUS_TRIGGER
     *     M2M_SUBSCRIPTION_OPTION_TRIGGER
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

    /**
     * @var boolean
     */
    public $notificationByMail;

    /**
     * @var (object)BusinessRules
     */
    public $businessRules;

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

    /**
     * @var boolean
     */
    public $showAlarmStatus;

    /**
     * @var boolean
     */
    public $showAllOriginTrafficAlarms;

    /**
     * @var boolean
     */
    public $showMachineAlarms;

    /**
     * @var boolean
     */
    public $showExtendedAlarms;

    /**
     * @var boolean
     */
    public $showSubscriptionStatusChangeAlarms;

    /**
     * @var boolean
     */
    public $showSubscriptionOptionChangeAlarms;

    /**
     * @var boolean
     */
    public $showBusinessRules;

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
     */
    public $alarmStatus;

    /**
     * @var string
     */
    public $alarmStatusComment;

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

    /**
     * @var string
     */
    public $mailNotificationAddress;

    /**
     * @var dateTime
     */
    public $mailNotificationDate;

    /**
     * @var int
     */
    public $mailNotificationResultCode;

    /**
     * @var string
     */
    public $mailNotificationResultMessage;

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


    /**
     * @var (object)TriggeredBusinessRules
     */
    public $businessRules;

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
     *     TRAFFIC_LAZY_MACHINE
     *     TRAFFIC_SILENT_MACHINE
     *     TRAFFIC_CRAZY_MACHINE
     *     M2M_SUBSCRIPTION_STATUS_TRIGGER
     *     M2M_SUBSCRIPTION_OPTION_TRIGGER
     */
    public $triggerType;

    /**
     * @var (object)AlarmTriggerCriteria
     */
    public $triggerCriteria;

    /**
     * @var boolean
     */
    public $notificationByMailRequired;

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

    /**
     * @var (object)AlarmTrafficLazyMachineCriteria
     */
    public $trafficLazyMachineCriteria;

    /**
     * @var (object)AlarmTrafficSilentMachineCriteria
     */
    public $trafficSilentMachineCriteria;

    /**
     * @var (object)AlarmTrafficCrazyMachineCriteria
     */
    public $trafficCrazyMachineCriteria;

    /**
     * @var (object)AlarmSubscriptionStatusChangeCriteria
     */
    public $subscriptionStatusChangeCriteria;

    /**
     * @var (object)AlarmSubscriptionOptionChangeCriteria
     */
    public $subscriptionOptionChangeCriteria;
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
     * @var string
     *     NOTE: callOrigin should follow the following restrictions
     *     You can have one of the following value
     *     ROAMING
     *     UNKNOWN
     *     LOCAL
     *     ALL_ORIGIN
     */
    public $callOrigin;

    /**
     * @var long
     *     NOTE: thresholdValue should follow the following restrictions
     *     Your value should be 
     *     Greater than or equal to 0
     */
    public $thresholdValue;

    /**
     * @var long
     *     NOTE: triggeringValue should follow the following restrictions
     *     Your value should be 
     *     Greater than or equal to 0
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
     * @var string
     *     NOTE: callOrigin should follow the following restrictions
     *     You can have one of the following value
     *     ROAMING
     *     UNKNOWN
     *     LOCAL
     *     ALL_ORIGIN
     */
    public $callOrigin;

    /**
     * @var long
     *     NOTE: thresholdValue should follow the following restrictions
     *     Your value should be 
     *     Greater than or equal to 0
     */
    public $thresholdValue;

    /**
     * @var long
     *     NOTE: triggeringValue should follow the following restrictions
     *     Your value should be 
     *     Greater than or equal to 0
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

if(!class_exists("AlarmTrafficLazyMachineCriteria")){
class AlarmTrafficLazyMachineCriteria {

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
     * @var string
     *     NOTE: callOrigin should follow the following restrictions
     *     You can have one of the following value
     *     ROAMING
     *     UNKNOWN
     *     LOCAL
     *     ALL_ORIGIN
     */
    public $callOrigin;

    /**
     * @var long
     *     NOTE: thresholdValue should follow the following restrictions
     *     Your value should be 
     *     Greater than or equal to 0
     */
    public $thresholdValue;

    /**
     * @var long
     *     NOTE: triggeringValue should follow the following restrictions
     *     Your value should be 
     *     Greater than or equal to 0
     */
    public $triggeringValue;

    /**
     * @var int
     */
    public $period;

}}

if(!class_exists("AlarmTrafficSilentMachineCriteria")){
class AlarmTrafficSilentMachineCriteria {

    /**
     * @var int
     */
    public $period;

}}

if(!class_exists("AlarmTrafficCrazyMachineCriteria")){
class AlarmTrafficCrazyMachineCriteria {

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
     * @var string
     *     NOTE: callOrigin should follow the following restrictions
     *     You can have one of the following value
     *     ROAMING
     *     UNKNOWN
     *     LOCAL
     *     ALL_ORIGIN
     */
    public $callOrigin;

    /**
     * @var long
     *     NOTE: thresholdValue should follow the following restrictions
     *     Your value should be 
     *     Greater than or equal to 0
     */
    public $thresholdValue;

    /**
     * @var long
     *     NOTE: triggeringValue should follow the following restrictions
     *     Your value should be 
     *     Greater than or equal to 0
     */
    public $triggeringValue;

    /**
     * @var int
     */
    public $period;

}}

if(!class_exists("AlarmSubscriptionStatusChangeCriteria")){
class AlarmSubscriptionStatusChangeCriteria {

    /**
     * @var string
     */
    public $detectedTargetStatus;

    /**
     * @var dateTime
     */
    public $updateStatusDate;

}}

if(!class_exists("AlarmSubscriptionOptionChangeCriteria")){
class AlarmSubscriptionOptionChangeCriteria {

    /**
     * @var string
     */
    public $option;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $optionChangeType;

    /**
     * @var dateTime
     */
    public $updateOptionDate;

}}

if(!class_exists("TriggeredBusinessRules")){
class TriggeredBusinessRules {

    /**
     * @var (object)TriggeredSlmBusinessRule
     */
    public $triggeredSlmBusinessRule;

}}

if(!class_exists("TriggeredSlmBusinessRule")){
class TriggeredSlmBusinessRule {

    /**
     * @var string
     */
    public $requestedStatus;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

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

    /**
     * @var boolean
     */
    public $showAlarmStatus;

    /**
     * @var boolean
     */
    public $showAllOriginTrafficAlarms;

    /**
     * @var boolean
     */
    public $showMachineAlarms;

    /**
     * @var boolean
     */
    public $showExtendedAlarms;

    /**
     * @var boolean
     */
    public $showSubscriptionStatusChangeAlarms;

    /**
     * @var boolean
     */
    public $showSubscriptionOptionChangeAlarms;

    /**
     * @var boolean
     */
    public $showBusinessRules;

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
     *     TRAFFIC_LAZY_MACHINE
     *     TRAFFIC_SILENT_MACHINE
     *     TRAFFIC_CRAZY_MACHINE
     *     M2M_SUBSCRIPTION_STATUS_TRIGGER
     *     M2M_SUBSCRIPTION_OPTION_TRIGGER
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

if(!class_exists("manageAlarms")){
class manageAlarms {

    /**
     * @var (object)AlarmInformations
     */
    public $alarmInformations;

}}

if(!class_exists("AlarmInformations")){
class AlarmInformations {

    /**
     * @var array[1, unbounded] of (object)AlarmInformation
     */
    public $alarmInformation;

}}

if(!class_exists("AlarmInformation")){
class AlarmInformation {

    /**
     * @var int
     */
    public $alarmIdentifier;

    /**
     * @var string
     */
    public $alarmStatus;

    /**
     * @var string
     *     NOTE: alarmStatusComment should follow the following restrictions
     *     Your length of the value should be 
     *     Less than 150
     */
    public $alarmStatusComment;

}}

if(!class_exists("manageAlarmsResponse")){
class manageAlarmsResponse {

    /**
     * @var (object)AlarmIdentifiers
     */
    public $alarmIdentifiers;

    /**
     * @var (object)UnknownAlarmIdentifiers
     */
    public $unknownAlarmIdentifiers;

    /**
     * @var (object)AlarmIdentifiers
     */
    public $alarmIdentifiersWithUnknownStatus;

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
    "AllOrigin" => "AllOrigin",
    "TrafficUnitaryThresholdCriteria" => "TrafficUnitaryThresholdCriteria",
    "TrafficBearerCriteria" => "TrafficBearerCriteria",
    "AllowedBearers" => "AllowedBearers",
    "UpdateImeiCriteria" => "UpdateImeiCriteria",
    "TrafficLazyMachineCriteria" => "TrafficLazyMachineCriteria",
    "TrafficSilentMachineCriteria" => "TrafficSilentMachineCriteria",
    "TrafficCrazyMachineCriteria" => "TrafficCrazyMachineCriteria",
    "SubscriptionStatusChangeCriteria" => "SubscriptionStatusChangeCriteria",
    "WatchedM2MSubscriptionStatuses" => "WatchedM2MSubscriptionStatuses",
    "SubscriptionOptionChangeCriteria" => "SubscriptionOptionChangeCriteria",
    "WatchedSubscriptionOptions" => "WatchedSubscriptionOptions",
    "OptionChangeTypes" => "OptionChangeTypes",
    "BusinessRules" => "BusinessRules",
    "SlmBusinessRule" => "SlmBusinessRule",
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
    "AlarmTrafficLazyMachineCriteria" => "AlarmTrafficLazyMachineCriteria",
    "AlarmTrafficSilentMachineCriteria" => "AlarmTrafficSilentMachineCriteria",
    "AlarmTrafficCrazyMachineCriteria" => "AlarmTrafficCrazyMachineCriteria",
    "AlarmSubscriptionStatusChangeCriteria" => "AlarmSubscriptionStatusChangeCriteria",
    "AlarmSubscriptionOptionChangeCriteria" => "AlarmSubscriptionOptionChangeCriteria",
    "TriggeredBusinessRules" => "TriggeredBusinessRules",
    "TriggeredSlmBusinessRule" => "TriggeredSlmBusinessRule",
    "UnknownAlarmIdentifiers" => "UnknownAlarmIdentifiers",
    "searchAlarms" => "searchAlarms",
    "SearchAlarmsByTargets" => "SearchAlarmsByTargets",
    "SearchAlarmsByTriggers" => "SearchAlarmsByTriggers",
    "searchAlarmsResponse" => "searchAlarmsResponse",
    "manageAlarms" => "manageAlarms",
    "AlarmInformations" => "AlarmInformations",
    "AlarmInformation" => "AlarmInformation",
    "manageAlarmsResponse" => "manageAlarmsResponse");

try {

    // create client in WSDL mode
    $client = new WSClient(array ("wsdl" =>"customerAlarm_V2_15.wsdl",
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

    $input = new manageAlarms();
    //TODO: fill in the class fields of $input to match your business logic

    // call the operation
    $response = $proxy->manageAlarms($input);
    //TODO: Implement business logic to consume $response, which is of type manageAlarmsResponse

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
