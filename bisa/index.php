<?php

require_once('../config.php');
$PAGE->set_context(context_system::instance());
$urlparams = array('id' => -1);
$url = new moodle_url('/blocks/bisa/index.php', $urlparams);
$PAGE->set_url($url);
$PAGE->set_pagelayout('standard');
if ($PAGE != null && $SITE != null && $SITE->fullname != null) {
    $PAGE->set_title($SITE->fullname);
}
$PAGE->set_heading('Banco Bisa - Creando Futuro');
echo $OUTPUT->header();

echo '<BR><BR><BR><h2>MATERIAL COLEGIOS - EDUCACIÓN FINANCIERA</h2>';
echo '<br><h3>Primaria</h3>';
echo '<div class="bisa_img_maletin">'
 . get_enlace_image_bisa('mi-maletin-financiero-1-y-2-primaria.jpg', 'pdf/maletin1/', 'Primero y Segundo de Primaria')
 . get_enlace_image_bisa('mi-maletin-financiero-2-primaria.jpg', 'pdf/maletin2/', 'Tercero y Cuarto de Primaria')
 . get_enlace_image_bisa('mi-maletin-financiero-3-primaria.jpg', 'pdf/maletin3/', 'Quinto y Sexto de Primaria')
 . '</div>';

echo '<br><h3>Secundaria</h3>';
echo '<div class="bisa_img_maletin">'
 . get_enlace_image_bisa('mi-maletin-financiero-1-secundaria.jpg', 'pdf/financiera1/', 'Primero y Segundo de Secundaria')
 . get_enlace_image_bisa('mi-maletin-financiero-2-secundaria.jpg', 'pdf/financiera2/', 'Tercero y Cuarto de Secundaria')
 . get_enlace_image_bisa('mi-maletin-financiero-3-secundaria.jpg', 'pdf/financiera3/', 'Quinto y Sexto de Secundaria')
 . '</div>';

echo '<h2>PROGRAMA DE EDUCACIÓN AMBIENTAL</h2>';

echo '<br><br><h3>Agua y Arbol: Primero y Segundo de Primaria</h3>';

echo '<div class="bisa_img_maletin">'
 . get_enlace_image_bisa('edu-amb-01.jpg', 'material/Amarilla/amarilla/root/MODULO1.html', '')
 . get_enlace_image_bisa('edu-amb-02.jpg', 'material/Amarilla/amarilla/root/MODULO2.html', '')
 . get_enlace_image_bisa('edu-amb-03.jpg', 'material/Amarilla/amarilla/root/MODULO3.html', '')
 . '</div>';

echo '<br><br><h3>Agua y Arbol: Tercero y Cuarto de Primaria</h3>';
echo '<div class="bisa_img_maletin">'
 . get_enlace_image_bisa('edu-amb-04.jpg', 'material/Verde/verde/root/MODULO4.html', '')
 . get_enlace_image_bisa('edu-amb-05.jpg', 'material/Verde/verde/root/MODULO5.html', '')
 . get_enlace_image_bisa('edu-amb-06.jpg', 'material/Verde/verde/root/MODULO6.html', '')
 . '</div>';

echo '<br><br><h3>Agua y Arbol: Quinto y Sexto de Primaria</h3>';
echo '<div class="bisa_img_maletin">'
 . get_enlace_image_bisa('edu-amb-07.jpg', 'material/Celeste/celeste/root/MODULO7.html', '')
 . get_enlace_image_bisa('edu-amb-08.jpg', 'material/Celeste/celeste/root/MODULO8.html', '')
 . get_enlace_image_bisa('edu-amb-09.jpg', 'material/Celeste/celeste/root/MODULO9.html', '')
 . get_enlace_image_bisa('edu-amb-10.jpg', 'material/Celeste/celeste/root/MODULO10.html', '')
 . '</div>';


echo $OUTPUT->footer();

function get_enlace_image_bisa($image, $enlace, $titulo) {
    return '<div class="bisa_wrap_card"><a href="' . $enlace . '" target="_blank"
			 onclick="window.open(\'https://creativaclass.com/libros/bisa/' . $enlace . '\', \'\', \'toolbar=no,location=no,menubar=no,copyhistory=no,status=no,directories=no,scrollbars=yes,resizable=yes\');">
             <img src="/blocks/bisa/img/' . $image . '"></a>' . $titulo . '</div>';
}

?>