<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FacturaScripts\Plugins\Organizacional\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

/**
 * Description of EditConvocatoria
 *
 * @author Roddy
 */
class EditConvocatoria extends EditController {

    //put your code here
    public function getModelClassName() {
        return 'Convocatoria';
    }

    public function getPageData() {
        $pagedata = parent::getPageData();
        $pagedata['menu'] = 'Organizacional';
        $pagedata['title'] = 'Crear convocatoria';
        $pagedata['icon'] = 'fas fa-tasks';

        return $pagedata;
    }

}
