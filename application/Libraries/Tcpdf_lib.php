<?php

namespace App\Libraries;

class Tcpdf_lib
{
    public function __construct()
    {
        require_once APPPATH . 'ThirdParty/tcpdf/tcpdf.php';
    }
}
