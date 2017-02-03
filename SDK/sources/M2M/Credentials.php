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
 *  @desc Credential class
 *  @name  M2M_Credentials
 *  @package M2M API
 */

class M2M_Credentials {

	/**
	 * @var _login
	 * 
	 */
	protected $_login;
	  
	/**
	 * @var _password
	 * 
	 */
	protected $_password;	
	
	/**
	 * 
	 * @param login $login, password $password
	 * @return credential object
	 */
	 public function __construct($login="", $password="") {
	    $this->_login = $login;
		$this->_password = $password;			
	  }


}

