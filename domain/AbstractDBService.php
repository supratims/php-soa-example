<?php

/*
	Implement common methods in this class to be shared by all child dbservice classes
	Ideally use entity objects instead of arrays
*/
abstract class AbstractDBService implements DBServiceInterface {

	abstract protected function getEntity();

	abstract protected function getId(); 

	public find(integer $id){
		return query("SELECT * FROM ".$this->getEntity()." WHERE ".$this->getId()."=$id");
	}

	public findAll(Array $options){
		!empty($options['limit']) && ($options['limit']=100);
		!empty($options['order']) && ($options['order']='created');
		return query("SELECT * FROM ".$this->getEntity()." LIMIT {$options['limit']} ORDER BY {$options['order']}");
	}

	public save(Array $entity){

	}

	public create(Array $entity){

	}

	public update($id, Array $entity){

	}

	public delete($id){

	}	
}