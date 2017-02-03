<?php
/*
 *
 * Copyright 2009 France Telecom SA Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at http://www.apache.org/licenses/LICENSE-2.0
 * Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and limitations under the License.
 */

/**
 * 
 * @author ygmi8516
 * @desc Workaround for phpunit file locking problem with zend logger
 *
 */
class M2M_FileStream extends Zend_Log_Writer_Stream {
  
  /**
   * 
   * @var unknown_type
   */
  private $_sFilePath;
  
  /**
   * 
   * @var unknown_type
   */
  private $_sMode;
  
  
  /**
   * 
   * @param $sFilePath
   * @return unknown_type
   */
  public function __construct($sFilePath, $sMode = 'a') {
    
    $this->_sFilePath = $sFilePath;
    $this->_sMode = $sMode;
    parent::__construct ( $sFilePath, $sMode );
  }
  
  /**
   * Write a message to the log.
   *
   * @param  array  $event  event data
   * @return void
   */
  protected function _write($event) {
    
    try {
      parent::_write ( $event );
    } catch ( Zend_Log_Exception $e ) {
      
      $line = "Using " . __METHOD__ . " as workaround for zendlogger and phpunit  " . $this->_formatter->format ( $event );
      if ( file_put_contents ( $this->_sFilePath, $line, FILE_APPEND ) === false ) {
        $msg = "\"$this->_sFilePath\" cannot be opened with mode \"$this->_sMode\"";
        throw new Zend_Log_Exception ( __METHOD__ . " : " . $msg );
      }
    }
  }
}
