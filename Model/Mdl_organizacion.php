<?php
require_once __DIR__ . '/../Core/MysqlPDO.php';
/**
 * Mdl_organizacion
 *
 * @author Abel Vizarreta Palomino <abelviza@gmail.com>
 */
class Mdl_organizacion extends MysqlPDO{

    private $ruc;
    private $nombre;
    private $direccion;
    private $distrito;
    private $nro_partida_electronica;
    private $correo;
    private $nro_socios;
    private $situacion_id_situacion;
    private $situacion_doc_id_situacion_doc;

    public function __construct($row = FALSE) {
        parent::__construct();
    }

    public function selecionar(){
        return parent::seleccion('SELECT * FROM organizacion');
    }
    
    /*
     * Getters
     */

    /**
     *
     * @return char
     */
    public function get_ruc() {
        return $this->ruc;
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
    public function get_direccion() {
        return $this->direccion;
    }

    /**
     *
     * @return string
     */
    public function get_distrito() {
        return $this->distrito;
    }

    /**
     *
     * @return string
     */
    public function get_nro_partida_electronica() {
        return $this->nro_partida_electronica;
    }

    /**
     *
     * @return string
     */
    public function get_correo() {
        return $this->correo;
    }

    /**
     *
     * @return int
     */
    public function get_nro_socios() {
        return $this->nro_socios;
    }

    /**
     *
     * @return int
     */
    public function get_situacion_id_situacion() {
        return $this->situacion_id_situacion;
    }

    /**
     *
     * @return int
     */
    public function get_situacion_doc_id_situacion_doc() {
        return $this->situacion_doc_id_situacion_doc;
    }

    /*
     * Setters
     */

    /**
     *
     * @param char $ruc
     * @return Mdl_organizacion
     */
    public function set_ruc($ruc) {
        $this->ruc = $ruc;
        return $this;
    }

    /**
     *
     * @param string $nombre
     * @return Mdl_organizacion
     */
    public function set_nombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     *
     * @param string $direccion
     * @return Mdl_organizacion
     */
    public function set_direccion($direccion) {
        $this->direccion = $direccion;
        return $this;
    }

    /**
     *
     * @param string $distrito
     * @return Mdl_organizacion
     */
    public function set_distrito($distrito) {
        $this->distrito = $distrito;
        return $this;
    }

    /**
     *
     * @param string $nro_partida_electronica
     * @return Mdl_organizacion
     */
    public function set_nro_partida_electronica($nro_partida_electronica) {
        $this->nro_partida_electronica = $nro_partida_electronica;
        return $this;
    }

    /**
     *
     * @param string $correo
     * @return Mdl_organizacion
     */
    public function set_correo($correo) {
        $this->correo = $correo;
        return $this;
    }

    /**
     *
     * @param int $nro_socios
     * @return Mdl_organizacion
     */
    public function set_nro_socios($nro_socios) {
        $this->nro_socios = $nro_socios;
        return $this;
    }

    /**
     *
     * @param int $situacion_id_situacion
     * @return Mdl_organizacion
     */
    public function set_situacion_id_situacion($situacion_id_situacion) {
        $this->situacion_id_situacion = $situacion_id_situacion;
        return $this;
    }

    /**
     *
     * @param int $situacion_doc_id_situacion_doc
     * @return Mdl_organizacion
     */
    public function set_situacion_doc_id_situacion_doc($situacion_doc_id_situacion_doc) {
        $this->situacion_doc_id_situacion_doc = $situacion_doc_id_situacion_doc;
        return $this;
    }

}
