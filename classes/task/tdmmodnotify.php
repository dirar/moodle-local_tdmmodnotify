<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * TDM: Module modification notification.
 *
 * @package   local_tdmmodnotify
 * @author    Luke Carrier <luke@tdm.co>, Dirar Abu Kteish
 * @copyright (c) 2014 The Development Manager Ltd
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace local_tdmmodnotify\task;


defined('MOODLE_INTERNAL') || die();

/**
 * Class advnotifications - extends core to leverage the Tasks API.
 *
 * @copyright  2016 onwards LearningWorks Ltd {@link https://learningworks.co.nz/}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class tdmmodnotify extends \core\task\scheduled_task {
	
	public function get_name() {
        // Shown in admin screens.
        return get_string('pluginname', 'local_tdmmodnotify');
    }
	public function execute() {
		global $CFG;
		mtrace("Checking courses modification!");
        require_once($CFG->dirroot . '/local/tdmmodnotify/lib.php');
		$success = run_task();
		mtrace("TDM Mail send:" . $success);
		
	}
}

