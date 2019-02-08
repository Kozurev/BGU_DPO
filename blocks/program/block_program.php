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
 * Course list block.
 *
 * @package    block_course_list
 * @copyright  1999 onwards Martin Dougiamas (http://dougiamas.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_program extends block_list
{

    function init()
    {
        $this->title = get_string( 'pluginname', 'block_program' );
    }



    function get_content()
    {
        global $CFG, $USER, $DB, $OUTPUT;

        if ( $this->content !== null )
        {
            return $this->content;
        }


        $this->content = new stdClass;
        $this->content->items = ['<h2>Привет, это блок программ</h2>'];
        $this->content->icons = [];
        $this->content->footer = '';


        return $this->content;
    }


    /**
     * Locations where block can be displayed.
     *
     * @return array
     */
    public function applicable_formats()
    {
        return ['my' => true];
    }


}


