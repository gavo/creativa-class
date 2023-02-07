<?php

defined('MOODLE_INTERNAL') || die();

function get_enlace_image($image, $enlace) {
    $web = "https://creativaclass.com/libros";
    return '<div class="bisa_block_img">
				<a href="' . $web . $enlace . '" target="_blank"
				onclick="window.open(\'' . $web . $enlace . '\', \'\', \'toolbar=no,location=no,menubar=no,copyhistory=no,status=no,directories=no,scrollbars=yes,resizable=yes\'); return false;">
				<img src="/blocks/bisa/img/' . $image . '"></a></div>';
}

function get_contenido_bisa($id_curso) {
    $salida = '<div style=\'justify-content:center;text-align:center;\'>';
    if (strpos($id_curso, "1ropri") || strpos($id_curso, "2dopri")) {
        $salida .= '<br><h6>Programa de Educación Financiera</h6>';
        $salida .= '<div>' . get_enlace_image('mi-maletin-financiero-1-y-2-primaria.jpg', '/bisa/pdf/maletin1/index.html', '150') . '</div>';
        $salida .= '<h6>Programa de Educación Ambiental</h6>';
        $salida .= '<div>' . get_enlace_image('edu-amb-01.jpg', '/bisa/material/Amarilla/amarilla/root/MODULO1.html', '65') . get_enlace_image('edu-amb-02.jpg', '/bisa/material/Amarilla/amarilla/root/MODULO2.html', '65') . get_enlace_image('edu-amb-03.jpg', '/bisa/material/Amarilla/amarilla/root/MODULO3.html', '65') . '</div>';
        return $salida;
    } else if (strpos($id_curso, "3ropri") || strpos($id_curso, "4topri")) {
        $salida .= '<br><h6>Programa de Educación Financiera</h6>';
        $salida .= '<div>' . get_enlace_image('mi-maletin-financiero-2-primaria.jpg', '/bisa/pdf/maletin2/index.html', '150') . '</div>';
        $salida .= '<h6>Programa de Educación Ambiental</h6>';
        $salida .= '<div>' . get_enlace_image('edu-amb-04.jpg', '/bisa/material/Verde/verde/root/MODULO4.html', '65') . get_enlace_image('edu-amb-05.jpg', '/bisa/material/Verde/verde/root/MODULO5.html', '65') . get_enlace_image('edu-amb-06.jpg', '/bisa/material/Verde/verde/root/MODULO6.html', '65') . '</div>';
        return $salida;
    } else if (strpos($id_curso, "5topri") || strpos($id_curso, "6topri")) {
        $salida .= '<br><h6>Programa de Educación Financiera</h6>';
        $salida .= '<div>' . get_enlace_image('mi-maletin-financiero-3-primaria.jpg', '/bisa/pdf/maletin3/index.html', '150') . '</div>';
        $salida .= '<h6>Programa de Educación Ambiental</h6>';
        $salida .= '<div>' . get_enlace_image('edu-amb-07.jpg', '/bisa/material/Celeste/celeste/root/MODULO7.html', '65') . get_enlace_image('edu-amb-08.jpg', '/bisa/material/Celeste/celeste/root/MODULO8.html', '65') . get_enlace_image('edu-amb-09.jpg', '/bisa/material/Celeste/celeste/root/MODULO9.html', '65') . get_enlace_image('edu-amb-10.jpg', '/bisa/material/Celeste/celeste/root/MODULO10.html', '65') . '</div>';
        return $salida;
    } else if (strpos($id_curso, "1rosec") || strpos($id_curso, "2dosec")) {
        $salida .= '<div>' . get_enlace_image('mi-maletin-financiero-1-secundaria.jpg', '/bisa/pdf/financiera1/index.html', '200') . '</div>';
        return $salida;
    } else if (strpos($id_curso, "3rosec") || strpos($id_curso, "4tosec")) {
        $salida .= '<div>' . get_enlace_image('mi-maletin-financiero-2-secundaria.jpg', '/bisa/pdf/financiera2/index.html', '200') . '</div>';
        return $salida;
    } else if (strpos($id_curso, "5tosec") || strpos($id_curso, "6tosec")) {
        $salida .= '<div>' . get_enlace_image('mi-maletin-financiero-3-secundaria.jpg', '/bisa/pdf/financiera3/index.html', '200') . '</div>';
        return $salida;
    } else {
        $salida = '';
        return $salida;
    }
}

?>