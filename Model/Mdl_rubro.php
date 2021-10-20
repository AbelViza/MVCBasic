<?php

/**
 * Mdl_rubro
 *
 * @author Abel Vizarreta Palomino <abelviza@gmail.com>
 */
class Mdl_rubro {


    private $organizacion_ruc;
    private $descripcion;

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
     * @return string
     */
    public function get_descripcion() {
        return $this->descripcion;
    }

    /*
    * Setters
    */

    /**
     *
     * @param char $organizacion_ruc
     * @return Mdl_rubro
     */
    public function set_organizacion_ruc($organizacion_ruc) {
        $this->organizacion_ruc = $organizacion_ruc;
        return $this;
    }

    /**
     *
     * @param string $descripcion
     * @return Mdl_rubro
     */
    public function set_descripcion($descripcion) {
        $this->descripcion = $descripcion;
        return $this;
    }

}
