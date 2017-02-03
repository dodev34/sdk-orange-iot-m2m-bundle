<?php
/*
 * Copyright 2009 France Telecom SA Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at http://www.apache.org/licenses/LICENSE-2.0 Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.
 */

/**
 * Utility contains usefull functionnalities
 * 
 * @name M2M_Utility
 * @package M2M API
 */
class M2M_Utility {
	
	/**
	 * getBeautifiedOutput
	 * 
	 * @param
	 *        	$oOutput
	 * @param
	 *        	$sMethodName
	 * @param
	 *        	$sAnchorName
	 */
	public static function getBeautifiedOutput($oOutput, $sMethodName, $sAnchorName = "") {
		if ($sAnchorName === "") {
			$sAnchorName = $sMethodName;
		}
		$sOutput = utf8_decode ( print_r ( $oOutput, true ) );
		$sHr = "<hr>";
		$sAnchor = "<a name=\"$sAnchorName\"></a>";
		return "$sHr$sAnchor<font color=\"blue\"><h4>Response of $sMethodName method:</font> <pre>$sOutput</pre></h4>";
	}
	
	/**
	 * getBeautifiedException
	 * 
	 * @param Exception $oException        	
	 */
	public static function getBeautifiedException(Exception $oException) {
		return "<font color=\"red\">An exception occured: " . utf8_decode ( $oException->getMessage () ) . " Debug: <pre>" . print_r ( $oException, true ) . "</pre></font>";
	}
	
	
	/**
	 * Used in the ICCD to SSN conversion
	 * 
	 * @param
	 *        	sNumber
	 * @return
	 *
	 */
	public static function calculateLuhnChecksum($sNumber) {
		$oLogger = Zend_Registry::get ( 'log' );
  
  	if (is_null($sNumber))
		return - 1;
		
		$oLogger->debug ( "sNumber=" . $sNumber  . "\n");

		// Calculate the Checksum number based on the Luhn Algorithm
		$sum = 0;
		$checkSum = 0;
		$length = strlen ( $sNumber );
		$oLogger->debug ( "sNumber $length=" . $length . "\n");
		
		// we double every 2 digit, starting with the last digit on the right
		// if the result is higher than 9, we replace it by n%10+1
		$alternate = TRUE;
		for($i = $length - 1; $i >= 0; $i --) {
			$n = $sNumber [$i];
			
			if ($alternate) {
				$n *= 2;
				if ($n > 9) {
					$n = ($n % 10) + 1;
				}
			}
			
			// we sum the resulting digits
			$sum += $n;
			$alternate = ! $alternate;
		}
		
		// The check digit (x) is obtained by computing the sum of digits then computing 9 times that value modulo 10.
		$checkSum = (9 * $sum) % 10;
		$oLogger->debug ( "checkSum digit=" . $checkSum  . "\n");
		
		return $checkSum;
	}
	
	/**
	 * This function transforms a SIM Serial Number into a ICCID (Integrated Circuit Card Identifier)
	 * 
	 * @param
	 *        	ssn : the SIM serial number
	 * @param
	 *        	iccidPrefix : constant number stored in the ini file
	 * @return : ICCID corresponding to the SSN number
	 */
	public static function serialNumberToICCID($ssn, $iccidPrefix) {
		if (is_null ( $ssn ))
			return "";
		
		$oLogger = Zend_Registry::get ( 'log' );
		
		$oLogger->debug ( "iccid prefix=" . $iccidPrefix . "\n");
		$oLogger->debug ( "ssn=" + $ssn );
		
		// Keep the first 12 digits from the serial number
		// add the ICCID prefix
		$iccidNumber = $iccidPrefix . substr ( $ssn, 0, strlen ( $ssn ) - 1 );
		
		$oLogger->debug ( "iccidNumber without checksum=" . $iccidNumber . "\n");
		
		// Calculate the Checksum number based on the Luhn Algorithm
		$checkSum = M2M_Utility::calculateLuhnChecksum ( $iccidNumber );
		
		// Concatenate the ICCID prefix+SSN first 12 digits+Luhn Checksum+0
		$iccid = $iccidNumber . $checkSum . "0";
		
		$oLogger->debug ( "iccidNumber including checksum and last digit=" . $iccid  . "\n");
		
		return ($iccid);
	}
	
	/**
	 * This function transforms a ICCID (Integrated Circuit Card Identifier) into a SIM Serial Number
	 * 
	 * @param
	 *        	ssn : the ICCID
	 * @return : SSN number corresponding to the ICCID
	 * @return : SSN number corresponding to the ICCID
	 */
	public static function ICCIDToserialNumber($iccid) {
		$oLogger = Zend_Registry::get ( 'log' );
		
		if (is_null ( $iccid ))
			return "";
		
		if (strlen ( $iccid ) < 7) {
			$oLogger->debug ( "ERROR : ICCID has less than 7 characters" );
			return "";
		}
		
		$oLogger->debug ( "iccid=" + $iccid );
		
		// Remove the first 6 digits and the last 2 digits from the iccid
		$ssn = substr ( $iccid, 6, strlen ( $iccid ) - 8 );
		
		$oLogger->debug ( "ssn without checksum=" . $ssn  . "\n");
		
		// Calculate the Checksum number based on the Luhn Algorithm
		$checkSum = M2M_Utility::calculateLuhnChecksum ( $ssn );
		
		// Concatenate the ICCID prefix+SSN first 12 digits+Luhn Checksum+0
		$ssn .= $checkSum;
		
		$oLogger->debug ( "ssn including checksum=" . $ssn  . "\n");
		
		return ($ssn);
	}
	
	/**
      * For 3G sim cards for instance, you might need the ICCID for which digits are swapped 2 by 2
      * example : 
      * calculated iccid=89330116680073700130
      * if you run swappICCID("89330116680073700130"), you will get :
      * SWAPPED iccid=98331061860037071003
      * @param swapped iccid
      * @return
	 */
        public static function swapICCID($iccid)
        {
			$oLogger = Zend_Registry::get ( 'log' );		
            if (is_null($iccid)){
				$oLogger->debug( "ICCID is null" );
                return "";
		}
            $oLogger->debug("iccid=" . $iccid);

            //odd number, swap not performed
            if ((strlen ($iccid) % 2) == 1)
                return $iccid;

            $buf="";
            for ($i = 0; $i < (strlen ($iccid) / 2); $i++)
            {

                $buf = $iccid[2 * $i];
                $iccid[2 * $i] = $iccid[2 * $i + 1];
                $iccid[2 * $i + 1] = $buf;
            }

            $oLogger->debug("SWAPPED iccid=" . $iccid);

            return $iccid;
        }

}