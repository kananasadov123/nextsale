<?php

class Documentation extends MainController
{
    //get view documentation
    public function documentationView()
    {
        $this->load->view('documentation_view');
    }
}