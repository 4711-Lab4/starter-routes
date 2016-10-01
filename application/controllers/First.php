<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class First extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		$this->data['pagebody'] = 'justone';
            
        $record = $this->quotes->get(1);
        $this->data = array_merge($this->data, $record);
            
        $this->render();
	}

	public function zzz() {
            $this->data['pagebody'] = 'justone';
            
            $record = $this->quotes->get(1);
            $this->data = array_merge($this->data, $record);
            
            $this->render();
        }

	/**
	 * Parameter $id is the index of the quote to be retrieved
	 * from the quotes array. 
	 */
	public function gimme($id)
	{
	    $this->data['pagebody'] = 'justone';
        
        $record = $this->quotes->get($id);
        $this->data = array_merge($this->data, $record);
        
        $this->render();
	}

}
