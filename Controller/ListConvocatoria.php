<?php

namespace FacturaScripts\Plugins\Organizacional\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListConvocatoria extends ListController {

    public function getPageData() {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'Organizacional';
        $pageData['title'] = 'convocatorias';
        $pageData['icon'] = 'fas fa-file';

        return $pageData;
    }

    protected function createViews() {
        $this->addView('ListConvocatoria', 'Convocatoria');
        $this->addSearchFields('ListConvocatoria', ['temaconvocatoria']);
        $this->addOrderBy('ListConvocatoria', ['temaconvocatoria'], 'temaconvocatoria');
    }

}
