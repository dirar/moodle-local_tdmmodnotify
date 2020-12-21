Notify enrolled learners of changes to course content
=====================================================

This simple plugin sends users daily digests of changed content within their enrolled courses.

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/LukeCarrier/moodle-local_tdmmodnotify/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/LukeCarrier/moodle-local_tdmmodnotify/?branch=master)

License
-------

    Copyright (c) The Development Manager Ltd

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.

Requirements
------------

* Moodle 2.6+, as we make use of the new observer system for consuming events.

Installation
-------------
1. Copy the zip file to your server
2. Extract the zip file and move the ````tdmmodnotify```` directory to your Moodle's ````local```` directory
3. Browse to Site Administration -> Notifications and allow the database upgrades to execute

Configuration
-------------
1. Allow plugin to send notification to students: 
    Site administration -> Users -> Permissions -> Define roles -> Students -> Edit -> under Capability -> "TDM: module modification notification"  allow "Receive course modification digest notification"
2. Allow the same for Teachers
3. Update notification preferences: Site administration -> Messaging -> Notification settings. Under Default notification preferences
	  -> Course modification digest notification Permit email and check online & offline check boxes

  
