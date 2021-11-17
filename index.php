<?php
require('../../config.php');
PAGE->set_url(new moodle_url('/local/test_plugin/index.php'));
PAGE->set_context(context_system::instance());
PAGE->set_title('Select a user');
PAGE->set_heading('Select a user to show it report completion status');

echo '
    <ul>
        <li></li>
    </ul>
';