<?php
require_once('../../../config.php');
require_once($CFG->libdir.'/adminlib.php');
require_once('locallib.php');
require_once('creategroups_form.php');

require_login();
require_capability('moodle/site:config', get_context_instance(CONTEXT_SYSTEM));

// Imprime o cabeçalho
admin_externalpage_setup('tooltutores');
echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('grupos_tutoria', 'tool_tutores'));

$currenttab = 'index';
include_once('tabs.php');

// Conteúdo
$table = new html_table();
$table->head = array(get_string('grupos_tutoria', 'tool_tutores'), get_string('member_count', 'tool_tutores'), get_string('edit'));
$table->tablealign = 'center';
#$table->width = '90%';
$table->data = array();

$controls = get_action_icon('groups.php', 'edit', get_string('edit'), get_string('edit')) . get_action_icon('#', 'delete', get_string('delete'), get_string('delete'));

// Dummy data
$table->data[] = array('Grupo 1', '50', $controls);
$table->data[] = array('Grupo 2', '40', $controls);
$table->data[] = array('Grupo 3', '45', $controls);
$table->data[] = array('Grupo 4', '48', $controls);
$table->data[] = array('Grupo 5', '20', $controls);

echo html_writer::table($table);



// Imprime o restante da página
echo $OUTPUT->footer();
?>