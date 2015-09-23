<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class country_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    /* This function create new category. */

    function create() {

        $this->db->set('country_name', $this->input->post('category_name'));
        $this->db->set('country_created', time());
        $this->db->insert('d_country');
        //add entry_id,tag_id,table_name to tag_ref table
        //STEP 4: Attach each tag to the row
        $tags = $this->input->post('service');
        // insert static data first
        $id = mysql_insert_id();

        $row_data = array(
            'country_id' => $id
        );
        // loop to fetch tag ids
        foreach ($tags as $tagid) {
            $row_data['created'] = time();
            $row_data['service_id'] = $tagid;
            //FINALLY INSERT THE ROW! ...(jeez)...
            $this->db->insert('d_country_service', $row_data);
        }
        $this->_update_page_assoc($id);
        return TRUE;
    }

    function get_service_dropdown()
    {
        $this->db->select('sv_id,sv_name');
        $result = $this->db->get("d_services");
        $return = array();
        if ($result->num_rows() > 0) {
            foreach ($result->result_array() as $row) {
                $return[$row['sv_id']] = $row['sv_name'];
            }
        }
        return $return;

    }
    // get serivce by country_id
    function get_service_dropdown_byid($id) {
        $this->db->where('country_id', $id);
        $this->db->select('sv_id,sv_name');
        $this->db->from('d_services');
        $this->db->join('d_country_service', 'd_country_service.service_id = d_services.sv_id');
        $result = $this->db->get();

        $return = array();
        if ($result->num_rows() > 0) {
            foreach ($result->result_array() as $row) {
                $return[] = $row['sv_id'];
            }
        }

        return $return;
    }

    function update($id) {

        // delete old relted services
        $this->db->where('country_id', $id);
        $this->db->delete('d_country_service');

        // update country table
        $this->db->where('country_id', $id);
        $this->db->set('country_name', $this->input->post('category_name'));
        $this->db->set('country_created', time());
        $this->db->update('d_country');

        // update related services

        $tags = $this->input->post('service');

        $row_data = array(
            'country_id' => $id
        );
        // loop to fetch tag ids
        foreach ($tags as $tagid) {
            $row_data['created'] = time();
            $row_data['service_id'] = $tagid;
            //FINALLY INSERT THE ROW! ...(jeez)...
            $this->db->insert('d_country_service', $row_data);
        }
        return TRUE;
    }


}
