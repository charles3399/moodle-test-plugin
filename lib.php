<?php
function local_test_plugin_extend_settings_navigation($settingsnav, $context) {
    global $CFG, $PAGE;

    //Only add this settings item on non-site course pages.
    if (!$PAGE->course or $PAGE->course->id == 1) {
        return;
    }

    //Only let users with the appropriate capability see this settings item.
    if (!has_capability('moodle/backup:backupcourse', context_course::instance($PAGE->course->id))) {
        return;
    }

    if ($settingnode = $settingsnav->find('reportscompletion', navigation_node::TYPE_COURSE)) {
        $strfoo = get_string('reportscompletion', 'local_test_plugin');
        $url = new moodle_url('/local/test_plugin/index.php', array('id' => $PAGE->course->id));
        $foonode = navigation_node::create(
            $strfoo,
            $url,
            navigation_node::NODETYPE_LEAF,
            'test_plugin',
            'test_plugin',
            new pix_icon('t/addcontact', $strfoo)
        );
        if ($PAGE->url->compare($url, URL_MATCH_BASE)) {
            $foonode->make_active();
        }
        $settingnode->add_node($foonode);
    }
}