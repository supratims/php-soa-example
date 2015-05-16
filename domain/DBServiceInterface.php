<?php

/*
	Defines a contract all db services must adhere to
*/
interface DBServiceInterface {

	public find(integer $id);

	public findAll(Array $options);

	public save(Array $entity);

	public create(Array $entity);

	public update($id, Array $entity);

	public delete($id);

}