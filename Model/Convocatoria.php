<?php

namespace FacturaScripts\Plugins\Organizacional\Model;

use FacturaScripts\Core\Model\Base;

class Convocatoria extends Base\ModelClass {

    use Base\ModelTrait;

    public $idconvocatoria;
    public $codconvocatoria;
    public $temaconvocatoria;
    public $tipoorganizacion;
    public $tipoasamblea;
    public $tiposesion;
    public $lugar;
    public $fechasesion;
    public $fechaexpira;
    public $horasesion;
    public $quiensolicita;
    public $nombrequiensolicita;
    public $descripcion;
    public $puntos;
    public $otrodetalle;
    public $estado;
    public $create_at;

    public function clear() {
        parent::clear();
        $this->create_at = date('Y-m-d');
        $this->fechaexpira = $this->addDaysToDate($this->fechasesion, 15);
        $this->estado = false;
    }

    public static function primaryColumn(): string {
        return 'idconvocatoria';
    }

    public static function tableName(): string {
        return 'convocatorias';
    }

    function addDaysToDate($date, $nroDays) {
        //http://programacionextrema.com/2015/10/31/sumar-dias-a-una-fecha-en-php/
        //
        $newDate = strtotime($date . "+ " . $nroDays . " days");
        return date("Y-m-d", $newDate);
    }

}
