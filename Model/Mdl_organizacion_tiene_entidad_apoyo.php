<?php

/**
 * Mdl_organizacion_tiene_entidad_apoyo
 *
 * @author Abel Vizarreta Palomino <abelviza@gmail.com>
 */
class Mdl_organizacion_tiene_entidad_apoyo {


    private $organizacion_ruc;
    private $entidad_apoyo_id_entidad_apoyo;

    public function __construct($row = FALSE) {
       
    }

    /*
    * Getters
    */

    /**
     *
     * @return char
     */
    public function get_organizacion_ruc() {
        return $this->organizacion_ruc;
    }

    /**
     *
     * @return int
     */
    public function get_entidad_apoyo_id_entidad_apoyo() {
        return $this->entidad_apoyo_id_entidad_apoyo;
    }

    /*
    * Setters
    */

    /**
     *
     * @param char $organizacion_ruc
     * @return Mdl_organizacion_tiene_entidad_apoyo
     */
    public function set_organizacion_ruc($organizacion_ruc) {
        $this->organizacion_ruc = $organizacion_ruc;
        return $this;
    }

    /**
     *
     * @param int $entidad_apoyo_id_entidad_apoyo
     * @return Mdl_organizacion_tiene_entidad_apoyo
     */
    public function set_entidad_apoyo_id_entidad_apoyo($entidad_apoyo_id_entidad_apoyo) {
        $this->entidad_apoyo_id_entidad_apoyo = $entidad_apoyo_id_entidad_apoyo;
        return $this;
    }

}
