<?php if(!defined('BASEPATH')) exit('No direct script access allowed');



/**
 * This function used to get the CI instance
 */
if(!function_exists('get_instance'))
{
    function get_instance()
    {
        $CI = &get_instance();
    }
}

function getBenImgs($id)
{
    $CI = &get_instance();
     
    $res = $CI->db->get_where('tbl_benefit_img', array( 'b_id' => $id) )->result();
    
    foreach( $res as $r):
        
        echo "<img src='".base_url()."uploads/Hiring Companies/".$r->c_image."' class='img-responsive' style='width:40%; float:left;'>";
        
    endforeach;
}



?>