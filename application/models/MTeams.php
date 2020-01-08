<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class MTeams extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function getAllData()
    {
        $this->db->select('*');
        $this->db->from('teams');
        $this->db->where('teams.isActive', 1);
        $query = $this->db->get();
        return $query->result();
    }

    function checkTeamName($name)
    {
        $this->db->select('*');
        $this->db->from('teams');
        $this->db->where('team_name', $name);
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    function getTeamById($idTeam)
    {
        $this->db->select('*');
        $this->db->from('teams');
        $this->db->where('isActive', 1);
        $this->db->where('idTeam', $idTeam);
        $query = $this->db->get();
        return $query->result();
    }

}