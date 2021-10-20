<?php

/**
 * Mdl_sexo
 *
 * @author Abel Vizarreta Palomino <abelviza@gmail.com>
 */
class Mdl_sexo {


    private $id_sexo;
    private $dsc_sexo;

    public function __construct($row = FALSE) {
        
    }

    /*
    * Getters
    */

    /**
     *
     * @return int
     */
    public function get_id_sexo() {
        return $this->id_sexo;
    }

    /**
     *
     * @return string
     */
    public function get_dsc_sexo() {
        return $this->dsc_sexo;
    }

    /*
    * Setters
    */

    /**
     *
     * @param int $id_sexo
     * @return Mdl_sexo
     */
    public function set_id_sexo($id_sexo) {
        $this->id_sexo = $id_sexo;
        return $this;
    }

    /**
     *
     * @param string $dsc_sexo
     * @return Mdl_sexo
     */
    public function set_dsc_sexo($dsc_sexo) {
        $this->dsc_sexo = $dsc_sexo;
        return $this;
    }

}
