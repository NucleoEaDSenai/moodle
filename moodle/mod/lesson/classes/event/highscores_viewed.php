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
 * The mod_lesson highscores viewed.
 *
 * @package    mod_lesson
 * @deprecated since Moodle 3.0
 * @copyright  2013 Mark Nelson <markn@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later.
 */

namespace mod_lesson\event;

defined('MOODLE_INTERNAL') || die();

/**
 * The mod_lesson highscores viewed class.
 *
 * @package    mod_lesson
 * @since      Moodle 2.7
 * @copyright  2013 Mark Nelson <markn@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later.
 */
class highscores_viewed extends \core\event\base {

    /**
     * Set basic properties for the event.
     */
    protected function init() {
        // phpcs:ignore moodle.Files.LineLength.TooLong
        debugging('mod_lesson\event\highscores_viewed has been deprecated. Since the functionality no longer resides in the lesson module.',
            DEBUG_DEVELOPER);

        $this->data['objecttable'] = 'lesson';
        $this->data['crud'] = 'r';
        $this->data['edulevel'] = self::LEVEL_PARTICIPATING;
    }

    /**
     * Returns localised general event name.
     *
     * @return string
     */
    public static function get_name() {
        return get_string('eventhighscoresviewed', 'mod_lesson');
    }

    /**
     * Get URL related to the action.
     *
     * @return \moodle_url
     */
    public function get_url() {
        return new \moodle_url('/mod/lesson/highscores.php', array('id' => $this->contextinstanceid));
    }

    /**
     * Returns non-localised event description with id's for admin use only.
     *
     * @return string
     */
    public function get_description() {
        return "The user with id '$this->userid' viewed the highscores for the lesson activity with course module " .
            "id '$this->contextinstanceid'.";
    }

    /**
     * Replace add_to_log() statement.
     *
     * @return array of parameters to be passed to legacy add_to_log() function.
     */
    protected function get_legacy_logdata() {
        $lesson = $this->get_record_snapshot('lesson', $this->objectid);

        return array($this->courseid, 'lesson', 'view highscores', 'highscores.php?id=' . $this->contextinstanceid,
            $lesson->name, $this->contextinstanceid);
    }

    public static function get_objectid_mapping() {
        // The 'highscore' functionality was removed from core.
        return false;
    }

    public static function get_other_mapping() {
        // The 'highscore' functionality was removed from core.
        return false;
    }
}
