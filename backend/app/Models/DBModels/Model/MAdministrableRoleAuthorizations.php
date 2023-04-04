<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MAdministrableRoleAuthorizations
 * Representation for db table administrable_role_authorizations.

 * @property  string(name) grantee      [1] type:name         
 * @property  string(name) role_name    [2] type:name         
 * @property  string       is_grantable [3] type:varchar(3)   
 * @package App\Models\DBModels\Model
 */
class MAdministrableRoleAuthorizations extends DBClass {


	const  FJ_GRANTEE      = 'grantee';
	const  FJ_IS_GRANTABLE = 'isGrantable';
	const  FJ_ROLE_NAME    = 'roleName';
	const  FT_GRANTEE      = 'administrable_role_authorizations.grantee';
	const  FT_IS_GRANTABLE = 'administrable_role_authorizations.is_grantable';
	const  FT_ROLE_NAME    = 'administrable_role_authorizations.role_name';
	const  F_GRANTEE       = 'grantee';
	const  F_IS_GRANTABLE  = 'is_grantable';
	const  F_ROLE_NAME     = 'role_name';

    protected $table = 'administrable_role_authorizations';

	public static array $jsonable = [
		MAdministrableRoleAuthorizations::FJ_GRANTEE      =>[ MAdministrableRoleAuthorizations::F_GRANTEE      ,null,'string(name)', ],
		MAdministrableRoleAuthorizations::FJ_ROLE_NAME    =>[ MAdministrableRoleAuthorizations::F_ROLE_NAME    ,null,'string(name)', ],
		MAdministrableRoleAuthorizations::FJ_IS_GRANTABLE =>[ MAdministrableRoleAuthorizations::F_IS_GRANTABLE ,null,'string',       ],
	];

		protected $visible = [
			self::F_GRANTEE,
			self::F_ROLE_NAME,
			self::F_IS_GRANTABLE,
		]; 

		protected $fillable = [
		];





}

