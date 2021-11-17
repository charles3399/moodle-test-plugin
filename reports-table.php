<?php
require('../../config.php');
PAGE->set_url(new moodle_url('/local/test_plugin/reports-table.php'));
PAGE->set_context(context_system::instance());
PAGE->set_title('Reports Completion');
PAGE->set_heading('Course completion status report');

echo '
    <table>
        <tr>
            <th>Course name</th>
            <th>Completion status</th>
            <th>Time completed</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    ';