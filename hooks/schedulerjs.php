<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Disable Scheduler Js Hooks - Load All Events
 *
 * PHP version 5
 * LICENSE: This source file is subject to LGPL license 
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/copyleft/lesser.html
 * @author	   Ushahidi Team <team@ushahidi.com> 
 * @package	   Ushahidi - http://source.ushahididev.com
 * @copyright  Ushahidi - http://www.ushahidi.com
 * @license	   http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License (LGPL) 
 */

class schedulerjs {
	
	/**
	 * Register events
	 */
	public function __construct()
	{
		// Hook into routing
		Event::add('ushahidi_filter.footer_block', array($this, '_footer_block'));
	}
	
	public function _footer_block() {
		$themes = new Themes();
		Event::$data = str_replace($themes->scheduler_js(),'',Event::$data);
	}
	
}

new schedulerjs;
