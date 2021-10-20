<?php

/**
 * Mdl_situacion_doc
 *
 * @author Abel Vizarreta Palomino <abelviza@gmail.com>
 */
class Mdl_situacion_doc {


    private $id_situacion_doc;
    private $dsc_situacion_doc;

    public function __construct($row = FALSE) {
        
    }

    /*
    * Getters
    */

    /**
     *
     * @return int
     */
    public function get_id_situacion_doc() {
        return $this->id_situacion_doc;
    }

    /**
     *
     * @return string
     */
    public function get_dsc_situacion_doc() {
        return $this->dsc_situacion_doc;
    }

    /*
    * Setters
    */

    /**
     *
     * @param int $id_situacion_doc
     * @return Mdl_situacion_doc
     */
    public function set_id_situacion_doc($id_situacion_doc) {
        $this->id_situacion_doc = $id_situacion_doc;
        return $this;
    }

    /**
     *
     * @param string $dsc_situacion_doc
     * @return Mdl_situacion_doc
     */
    public function set_dsc_situacion_doc($dsc_situacion_doc) {
        $this->dsc_situacion_doc = $dsc_situacion_doc;
        return $this;
    }

}
