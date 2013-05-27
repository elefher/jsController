<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home_Controller
 *
 * @author elefher
 */
include 'server/model/Home_Model.php';
include 'server/view/View_Views.php';

class Home_Controller {
    public function main_page(){
        $model=new Home_Model();
        $out=$model->main();
        
        $header = new View_Views('header_template');
        $footer = new View_Views('footer_template');
        $body = new View_Views('body_template');
        
        $body->create_template('header', $header->render(FALSE));
        $body->create_template('footer', $footer->render(FALSE));
        //$signup->create_form($form, $footer->render_form(FALSE));
        //$ft = new Forms_Views;
        $body->create_form($out);
        $body->create_html_form();
        $body->render();
        //echo $out;
    }
}

?>
