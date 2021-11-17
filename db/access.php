<?php
defined('MOODLE_INTERNAL') || die();

if (!has_capability('local/test_plugin:index', $context)) {
    return;
}