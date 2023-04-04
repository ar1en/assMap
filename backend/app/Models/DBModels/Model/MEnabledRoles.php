<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MEnabledRoles
 * Representation for db table enabled_roles.

 * @property  string(name) role_name [1] type:name   
 * @package App\Models\DBModels\Model
 */
class MEnabledRoles extends DBClass {


	const  FJ_ROLE_NAME = 'roleName';
	const  FT_ROLE_NAME = 'enabled_roles.role_name';
	const  F_ROLE_NAME  = 'role_name';

    protected $table = 'enabled_roles';

	public static array $jsonable = [
		MEnabledRoles::FJ_ROLE_NAME =>[ MEnabledRoles::F_ROLE_NAME ,null,'string(name)', ],
	];

		protected $visible = [
			self::F_ROLE_NAME,
		]; 

		protected $fillable = [
		];





}

