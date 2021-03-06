<?php namespace ChecklistSilfa\Entities;

class Pregunta extends \Eloquent{

	protected $table = 'preguntas';
	protected $primaryKey = 'id';

	//al igual que formulario, relacion muchos  muchos, consultando una tabla intermedia
	public function formularios(){
        return $this->belongsToMany('ChecklistSilfa\Entities\FormCheck', 'preguntas_formulario', 'pregunta_id', 'formulario_id')->where('preguntas.estado','=','1');
    }

}
