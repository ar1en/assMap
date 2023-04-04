<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MApplicableRoles
 * Representation for db table applicable_roles.

 * @property  string(name) grantee      [1] type:name         
 * @property  string(name) role_name    [2] type:name         
 * @property  string       is_grantable [3] type:varchar(3)   
 * @package App\Models\DBModels\Model
 */
class MApplicableRoles extends DBClass {


	const  FJ_GRANTEE      = 'grantee';
	const  FJ_IS_GRANTABLE = 'isGrantable';
	const  FJ_ROLE_NAME    = 'roleName';
	const  FT_GRANTEE      = 'applicable_roles.grantee';
	const  FT_IS_GRANTABLE = 'applicable_roles.is_grantable';
	const  FT_ROLE_NAME    = 'applicable_roles.role_name';
	const  F_GRANTEE       = 'grantee';
	const  F_IS_GRANTABLE  = 'is_grantable';
	const  F_ROLE_NAME     = 'role_name';

    protected $table = 'applicable_roles';

	public static array $jsonable = [
		MApplicableRoles::FJ_GRANTEE      =>[ MApplicableRoles::F_GRANTEE      ,null,'string(name)', ],
		MApplicableRoles::FJ_ROLE_NAME    =>[ MApplicableRoles::F_ROLE_NAME    ,null,'string(name)', ],
		MApplicableRoles::FJ_IS_GRANTABLE =>[ MApplicableRoles::F_IS_GRANTABLE ,null,'string',       ],
	];

		protected $visible = [
			self::F_GRANTEE,
			self::F_ROLE_NAME,
			self::F_IS_GRANTABLE,
		]; 

		protected $fillable = [
		];





}

