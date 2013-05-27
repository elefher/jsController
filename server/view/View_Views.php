<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of View_Views
 *
 * @author elefher
 */
class View_Views {
    /**
     * Holds variables assigned to template
     */
    private $createPage = array();
    private $createForm = array();
    private $counterForm = 0;
    private $form;

    /**
     * Holds render status of view.
     */
    private $render = FALSE;

    /*public function __construct($template) {
        parent::__construct($template);
    }*/
    /**
     * Accept a template to load
     */
    public function __construct($template) {
        //compose file name
        $file = 'server/view/' . strtolower($template) . '.php';

        if (file_exists($file)) {
            $this->render = $file;
        };
    }

    /**
     * Receives assignments from controller and stores in local data array
     * 
     * @param $variable
     * @param $value
     */
    public function create_template($variable, $value) {
        $this->createPage[$variable] = $value;
    }

    /**
     * Render the output directly to the page, or optionally, return the
     * generated output to caller.
     * 
     * @param $direct_output Set to any non-TRUE value to have the 
     * output returned rather than displayed directly.
     */
    public function render($direct_output = TRUE) {
        // Turn output buffering on, capturing all output
        if ($direct_output !== TRUE) {
            ob_start();
        }
        //echo ob_get_contents();
        // Parse data variables into local variables
        //$createPage = $this->createPage;
        //$createForm = $this->createForm;

        // Get template
        include($this->render);

        // Get the contents of the buffer and return it
        if ($direct_output !== TRUE) {
            return ob_get_clean();
        }
    }

    public function __destruct() {
        
    }

    public function create_form($dataForm) {
        foreach ($dataForm as $key => $value) {
            $this->createForm[$this->counterForm][$key] = $value;
        }
        $this->counterForm++;
    }
    
    public function create_html_form(){
        if (is_array($this->createForm) && !is_null($this->createForm)) {
            $this->form .= '<form>';
            foreach ($this->createForm as $key => $value) {
                $this->form .= '<div class="dis-input">';
                $this->form .= '<input type="' . $value['type'] .'" name="' . $value['name'] . '" value="' . $value['value'] .'" class="' . $value .'" />';
                $this->form .= '</div>';
            }
            $this->form .= '</form>';
        }
    }
}

?>
