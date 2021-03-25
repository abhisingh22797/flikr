<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Class : Home (HomeController)
 * Home Class to control Home Page.
 * @author : Abhishek singh

 */
class Home extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
       
        $this->load->helper('form');
        $this->load->library('email');
    }

   
	
    public function index()
    {


        
        $data['title'] = 'Flikr Search';
        $data['layout'] = 'home';
        $this->load->view('layout', $data);
    }
	
 private function make_slug($string)
  {
    $lower_case_string = strtolower($string);
    $string1 = preg_replace('/[^a-zA-Z0-9 ]/s', '', $lower_case_string);
    return strtolower(preg_replace('/\s+/', '-', $string1));
  }


public function api()
{
	$key = '9048ee93bdd47c2d147b84c30f1e8989' ;
	$tag =  $this->make_slug($this->input->post('tag'));
	
	$url = 'https://www.flickr.com/services/rest/?method=flickr.photos.search&api_key='.$key.'&tags='.$tag.'&format=json&nojsoncallback=1';
	$data = json_decode(file_get_contents($url));
	$photos = $data->photos->photo;
	
	  foreach($photos as $photo):
	     
	  echo "<div class='gallery'><div class='allery-item' id='hodm_results'>
			<a href= 'https://live.staticflickr.com/$photo->server/$photo->id"."_"."$photo->secret.jpg' target = '_blank'><img class='gallery-image' src='https://live.staticflickr.com/$photo->server/$photo->id"."_"."$photo->secret.jpg'></a>
		</div></div>";
	  
	 
	 // $ur = 'https://live.staticflickr.com/'.$photo->server.'/'.$photo->id.'_'.$photo->secret.'.jpg';
	//echo $ur;
	 endforeach;
	
}

   
}
