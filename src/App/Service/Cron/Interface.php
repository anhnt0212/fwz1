<?php
/**
 * anhnt0212@gmail.com Company Limited
 *
 * Object Role Modeling (ORM) is a powerful method for designing and querying
 * database models at the conceptual level, where the application is described in
 * terms easily understood by non-technical users. In practice, ORM data models
 * often capture more business rules, and are easier to validate and evolve than
 * data models in other approaches.
 *
 * anhnt0212@gmail.com is a software development company
 * specializing in Web Application, Mobile Application and Multimedia. anhnt0212@gmail.com ZFCMS's combination of experience
 * and specialization on Internet technologies extends our customers' competitive
 * advantage and helps them maximize their return on investment. We aim to realize
 * your company's goals and vision though ongoing communication and our commitment
 * to quality.
 *
 * @category 	App
 * @package 	App.Platform
 * @copyright 	Copyright (c) 2010-2014 anhnt0212@gmail.com.
 * @license 	http://xemtintucnhanh.top
 * @version 	App version 1.0.0
 * @author 	anhnt0212@gmail.com <anhnt0212@gmail.com>
 * @implement 	All anhnt0212@gmail.com members
 */
interface App_Service_Cron_Interface {
	public function __construct($args = null);
	
	/**
	 * Run the cron task
	 *
	 * @return void
	 * @throws App_Plugin_Cron_Exception to describe any errors that should be returned to the user
	 */
	public function run();

}  