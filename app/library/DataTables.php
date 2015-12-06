<?php namespace App\library {
    use Eloquent; 
    class DataTables extends Eloquent{
    	
        private $action_add;
        private $action_edit;
        private $action_delete;
        private $actions;

        public function __construct()
        {
             $this->action_add=true;
            $this->action_edit=true;
            $this->action_delete=true;
            $this->actions = (object)array();
        }
        public function tabla($datos,$router) {

            $title= array_except($datos->columns, ['0']);

            return view("widgets.table")
            ->with('titulos', $title)
            ->with('datos', $datos->get())
            ->with('primary_key', $datos->columns[0])
            ->with('action_add', $this->action_add)
            ->with('action_edit', $this->action_edit)
            ->with('action_delete', $this->action_delete)
            ->with('actions', $this->actions)
            ->with('router', $router);
        }

        public function unset_add(){
            $this->action_add=false;
            return $this;
        }

        public function unset_edit(){
            $this->action_edit=false;
            return $this;
        }

        public function unset_delete(){
            $this->action_delete=false;
            return $this;
        }

        public function add_action($title,$url){
            $this->actions->{$title}=(object)array();
            $this->actions->{$title}->titulo=$title;
            $this->actions->{$title}->url=$url;
            return $this;
        }

    }

}


?>