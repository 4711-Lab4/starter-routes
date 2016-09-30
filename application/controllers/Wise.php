<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BingoController
 *
 * @author Pika
 */
class Wise extends Application {
    
    function __construct()
    {
	parent::__construct();
    }
    
    /*
     * Isaac Asimov quote page
     */
    public function bingo() {
        
        $this->data['pagebody'] = 'justone';
            
        $record = $this->quotes->get(6);
        $this->data = array_merge($this->data, $record);
            
        $this->render();
    }

    
}
