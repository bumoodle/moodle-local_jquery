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
 * Quiz Synchronization local plugin. 
 * Adds support for synchronization using the Partner question type, or similar.
 *
 * @package   local_quizsync
 * @copyright 2012 Binghamton University
 * @author    Kyle J. Temkin <ktemkin@binghamton.edu>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 
defined('MOODLE_INTERNAL') || die();
 
$plugin->version   = 2012072800;
$plugin->requires  = 2011070100; //requires Moodle 2.1+
$plugin->component = 'local_jquery';
$plugin->maturity  = MATURITY_BETA;
$plugin->release   = '2.1+';

