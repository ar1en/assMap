<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MRoleUsageGrants
 * Representation for db table role_usage_grants.

 * @property  string(name) grantor        [1] type:name         
 * @property  string(name) grantee        [2] type:name         
 * @property  string(name) object_catalog [3] type:name         
 * @property  string(name) object_schema  [4] type:name         
 * @property  string(name) object_name    [5] type:name         
 * @property  string       object_type    [6] type:varchar      
 * @property  string       privilege_type [7] type:varchar      
 * @property  string       is_grantable   [8] type:varchar(3)   
 * @package App\Models\DBModels\Model
 */
class MRoleUsageGrants extends DBClass {


	const  FJ_GRANTEE        = 'grantee';
	const  FJ_GRANTOR        = 'grantor';
	const  FJ_IS_GRANTABLE   = 'isGrantable';
	const  FJ_OBJECT_CATALOG = 'objectCatalog';
	const  FJ_OBJECT_NAME    = 'objectName';
	const  FJ_OBJECT_SCHEMA  = 'objectSchema';
	const  FJ_OBJECT_TYPE    = 'objectType';
	const  FJ_PRIVILEGE_TYPE = 'privilegeType';
	const  FT_GRANTEE        = 'role_usage_grants.grantee';
	const  FT_GRANTOR        = 'role_usage_grants.grantor';
	const  FT_IS_GRANTABLE   = 'role_usage_grants.is_grantable';
	const  FT_OBJECT_CATALOG = 'role_usage_grants.object_catalog';
	const  FT_OBJECT_NAME    = 'role_usage_grants.object_name';
	const  FT_OBJECT_SCHEMA  = 'role_usage_grants.object_schema';
	const  FT_OBJECT_TYPE    = 'role_usage_grants.object_type';
	const  FT_PRIVILEGE_TYPE = 'role_usage_grants.privilege_type';
	const  F_GRANTEE         = 'grantee';
	const  F_GRANTOR         = 'grantor';
	const  F_IS_GRANTABLE    = 'is_grantable';
	const  F_OBJECT_CATALOG  = 'object_catalog';
	const  F_OBJECT_NAME     = 'object_name';
	const  F_OBJECT_SCHEMA   = 'object_schema';
	const  F_OBJECT_TYPE     = 'object_type';
	const  F_PRIVILEGE_TYPE  = 'privilege_type';

    protected $table = 'role_usage_grants';

	public static array $jsonable = [
		MRoleUsageGrants::FJ_GRANTOR        =>[ MRoleUsageGrants::F_GRANTOR        ,null,'string(name)', ],
		MRoleUsageGrants::FJ_GRANTEE        =>[ MRoleUsageGrants::F_GRANTEE        ,null,'string(name)', ],
		MRoleUsageGrants::FJ_OBJECT_CATALOG =>[ MRoleUsageGrants::F_OBJECT_CATALOG ,null,'string(name)', ],
		MRoleUsageGrants::FJ_OBJECT_SCHEMA  =>[ MRoleUsageGrants::F_OBJECT_SCHEMA  ,null,'string(name)', ],
		MRoleUsageGrants::FJ_OBJECT_NAME    =>[ MRoleUsageGrants::F_OBJECT_NAME    ,null,'string(name)', ],
		MRoleUsageGrants::FJ_OBJECT_TYPE    =>[ MRoleUsageGrants::F_OBJECT_TYPE    ,null,'string',       ],
		MRoleUsageGrants::FJ_PRIVILEGE_TYPE =>[ MRoleUsageGrants::F_PRIVILEGE_TYPE ,null,'string',       ],
		MRoleUsageGrants::FJ_IS_GRANTABLE   =>[ MRoleUsageGrants::F_IS_GRANTABLE   ,null,'string',       ],
	];

		protected $visible = [
			self::F_GRANTOR,
			self::F_GRANTEE,
			self::F_OBJECT_CATALOG,
			self::F_OBJECT_SCHEMA,
			self::F_OBJECT_NAME,
			self::F_OBJECT_TYPE,
			self::F_PRIVILEGE_TYPE,
			self::F_IS_GRANTABLE,
		]; 

		protected $fillable = [
		];





}

