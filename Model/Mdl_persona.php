<?php

/**
 * Mdl_persona
 *
 * @author Abel Vizarreta Palomino <abelviza@gmail.com>
 */
class Mdl_persona {


    private $organizacion_ruc;
    private $dni;
    private $nombre;
    private $relacion;
    private $sexo_id_sexo;
    private $fec_nac;
    private $celular;

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
     * @return char
     */
    public function get_dni() {
        return $this->dni;
    }

    /**
     *
     * @return string
     */
    public function get_nombre() {
        return $this->nombre;
    }

    /**
     *
     * @return string
     */
    public function get_relacion() {
        return $this->relacion;
    }

    /**
     *
     * @return int
     */
    public function get_sexo_id_sexo() {
        return $this->sexo_id_sexo;
    }

    /**
     *
     * @return datetime
     */
    public function get_fec_nac() {
        return $this->fec_nac;
    }

    /**
     *
     * @return char
     */
    public function get_celular() {
        return $this->celular;
    }

    /*
    * Setters
    */

    /**
     *
     * @param char $organizacion_ruc
     * @return Mdl_persona
     */
    public function set_organizacion_ruc($organizacion_ruc) {
        $this->organizacion_ruc = $organizacion_ruc;
        return $this;
    }

    /**
     *
     * @param char $dni
     * @return Mdl_persona
     */
    public function set_dni($dni) {
        $this->dni = $dni;
        return $this;
    }

    /**
     *
     * @param string $nombre
     * @return Mdl_persona
     */
    public function set_nombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     *
     * @param string $relacion
     * @return Mdl_persona
     */
    public function set_relacion($relacion) {
        $this->relacion = $relacion;
        return $this;
    }

    /**
     *
     * @param int $sexo_id_sexo
     * @return Mdl_persona
     */
    public function set_sexo_id_sexo($sexo_id_sexo) {
        $this->sexo_id_sexo = $sexo_id_sexo;
        return $this;
    }

    /**
     *
     * @param datetime $fec_nac
     * @return Mdl_persona
     */
    public function set_fec_nac($fec_nac) {
        $this->fec_nac = $fec_nac;
        return $this;
    }

    /**
     *
     * @param char $celular
     * @return Mdl_persona
     */
    public function set_celular($celular) {
        $this->celular = $celular;
        return $this;
    }

}
