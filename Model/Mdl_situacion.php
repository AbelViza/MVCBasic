<?php

/**
 * Mdl_situacion
 *
 * @author Abel Vizarreta Palomino <abelviza@gmail.com>
 */
class Mdl_situacion {


    private $id_situacion;
    private $dsc_situacion;

    public function __construct($row = FALSE) {
        
    }

    /*
    * Getters
    */

    /**
     *
     * @return int
     */
    public function get_id_situacion() {
        return $this->id_situacion;
    }

    /**
     *
     * @return string
     */
    public function get_dsc_situacion() {
        return $this->dsc_situacion;
    }

    /*
    * Setters
    */

    /**
     *
     * @param int $id_situacion
     * @return Mdl_situacion
     */
    public function set_id_situacion($id_situacion) {
        $this->id_situacion = $id_situacion;
        return $this;
    }

    /**
     *
     * @param string $dsc_situacion
     * @return Mdl_situacion
     */
    public function set_dsc_situacion($dsc_situacion) {
        $this->dsc_situacion = $dsc_situacion;
        return $this;
    }

}
