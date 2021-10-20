<?php

/**
 * Mdl_entidad_apoyo
 *
 * @author Abel Vizarreta Palomino <abelviza@gmail.com>
 */
class Mdl_entidad_apoyo {


    private $id_entidad_apoyo;
    private $dsc_entidad_apoyo;

    public function __construct($row = FALSE) {
       
    }

    /*
    * Getters
    */

    /**
     *
     * @return int
     */
    public function get_id_entidad_apoyo() {
        return $this->id_entidad_apoyo;
    }

    /**
     *
     * @return string
     */
    public function get_dsc_entidad_apoyo() {
        return $this->dsc_entidad_apoyo;
    }

    /*
    * Setters
    */

    /**
     *
     * @param int $id_entidad_apoyo
     * @return Mdl_entidad_apoyo
     */
    public function set_id_entidad_apoyo($id_entidad_apoyo) {
        $this->id_entidad_apoyo = $id_entidad_apoyo;
        return $this;
    }

    /**
     *
     * @param string $dsc_entidad_apoyo
     * @return Mdl_entidad_apoyo
     */
    public function set_dsc_entidad_apoyo($dsc_entidad_apoyo) {
        $this->dsc_entidad_apoyo = $dsc_entidad_apoyo;
        return $this;
    }

}
