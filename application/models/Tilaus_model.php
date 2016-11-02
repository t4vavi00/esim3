<?php
class Tilaus_model extends Ci_Model {

	public function getTilaus() {

		$this->db->select('etunimi,sukunimi,tuote');
		$this->db->from('asiakas');
		$this->db->join('tilaus','asiakas.id_asiakas=tilaus.id_asiakas','left');

		return $this->db->get()->result_array();
	}

	public function searchTilaus($id) {

		$this->db->select('tuote,etunimi,sukunimi');
		$this->db->from('tilaus');
		$this->db->join('asiakas','asiakas.id_asiakas=tilaus.id_asiakas','left');
		$this->db->where('asiakas.id_asiakas',$id);

		return $this->db->get()->result_array();
	}
}