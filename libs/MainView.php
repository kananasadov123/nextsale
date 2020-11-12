<?php

class MainView
{
    public function view($file, $data = [])
    {
        if(isset($data) && count($data)){
            foreach($data as $key => $value){
                $$key = $value;
            }
        }
		require_once VIEW_PATH . $file . ".php";
    }

}