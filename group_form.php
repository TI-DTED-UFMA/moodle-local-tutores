<?php

defined('MOODLE_INTERNAL') || die;

require_once $CFG->libdir . '/formslib.php';

class group_form extends moodleform {

    function definition() {
        $cursos_ufsc = get_cursos_ativos_list();
        $curso_ativo = get_curso_ufsc_id();
        $action = required_param('action', PARAM_ALPHANUMEXT);

        $curso = $cursos_ufsc[$curso_ativo];
        $mform = $this->_form;

        $mform->addElement('header', 'grupos_tutoria', get_string('grupos_tutoria', 'tool_tutores'));
        $mform->addElement('text', 'nome', get_string('nome_grupo', 'tool_tutores'), array('size' => 80));

        $submit_text = $action == 'add' ? get_string('add') : null;

        $this->add_action_buttons(true, $submit_text);
    }
}