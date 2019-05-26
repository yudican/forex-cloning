<?php
use Jenssegers\Blade\Blade;

if (!function_exists('view')) {
    function view($view,$data = [])
    {
        $path = APPPATH.'views';
        $blade = new Blade($path,$path.'/cache');

        echo $blade->make($view,$data);
    }
}
if (!function_exists('if_empty')) {
    function if_empty($data)
    {
        if (empty($data)) {
            $output = 'N/A';
        }else{
            $output = $data;
        }

        return $output;
    }
}
if (!function_exists('select_value')) {
    function select_value($data,$value)
    {
        if($data == $value){
            $output = 'selected';
        }else{
            $output = '';
        }

        return $output;
    }
}
if (!function_exists('rating')) {
    function rating($rating)
    {
        if($rating == 'N/A'){
            $output = '0';
        }else{
            $output = $rating/20;
        }

        return $output;
    }
}
if (!function_exists('getLink')) {
    function getLink($link)
    {
        if($link == 'N/A'){
            $output = '#';
        }else{
            $output = $link;
        }

        return $output;
    }
}
if ( ! function_exists('getFoto')){
    function getFoto($foto){
        if (empty($foto)) {
            $resultFoto = '<img width="70px" height="40px" src="'.base_url('uploads/default.png').'" alt="default.png">';
        }else{
            $resultFoto = '<img width="70px" height="40px" src="'.base_url('uploads/'.$foto).'" alt="'.$foto.'">';
        }
        return $resultFoto;
    }
}