<?php

defined('BASEPATH') OR exit('No direct script access allowed');

function GenerateFileName($fileName = 'default.jpg') {
    $exp = explode('.', $fileName);
    $name = substr($fileName, 0, -(strlen($exp[count($exp) - 1]) + 1));
    $extension = $exp[count($exp) - 1];
    $fileName =  date('d_m_Y_H_i_s') .'.' . $exp[count($exp) - 1];
    return $fileName;
}
