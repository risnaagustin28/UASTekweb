<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus_model extends CI_Model {
    function select()
    {
        $this -> load -> library('aboutus');
		 $this -> load -> model('CityModel','','TRUE'); 
		 $data['aboutus'] = $this -> AboutusModel -> getAboutus();
		 $this -> load -> view("city",$data); 
    }  

}