<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home_Model
 *
 * @author elefher
 */
class Home_Model {
    
    private $inputs = array(
        'text' => array
            (
            'type' => 'text',
            'class' => 'class',
            'value' => 'value',
            'name' => 'name'
        ),
        'textarea' => array(
            'type' => 'textarea',
            'class' => 'areaclass',
            'value' => 'areavalue',
            'name' => 'areaname'
        ),
        'checkbox'=>array(
            'type' => 'checkbox',
            'class' => 'checkclass',
            'value' => 'checkvalue',
            'name' => 'vheckname'
        )
    );
    
    public function main(){        
        return $this->inputs['text'];
    }
}

?>
