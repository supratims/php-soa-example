<?php
/*
	Concrete implementation of a User repos/db service
*/
class UserDBService extends AbstractDBService {
	
	public function getEntity(){
		return 'user';
	}

	public function getId(){
		return 'user_id';
	}

}