<?php
/**
 * Description of ProjectController
 *
 * @author morven
 */
class ProjectController extends Controller {
    public function init() {
        parent::init();
    }
    
    public function index() {
        return $this->renderWith(array('ProjectController','Page'));
        
    }
}