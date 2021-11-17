<?php
defined('MOODLE_INTERNAL') || die;

$ADMIN->add('reports', new admin_externalpage('reportscompletion', get_string('reportscompletion', 'local_test_plugin'), new moodle_url('/local/test_plugin/index.php'), 'local/test_plugin:index'));