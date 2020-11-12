<?php

class Readme extends MainController
{
    //get view documentation
    public function readMeView()
    {
        $this->load->view('read_me_view');
    }
}