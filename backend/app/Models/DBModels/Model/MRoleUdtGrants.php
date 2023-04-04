<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MRoleUdtGrants
 * Representation for db table role_udt_grants.

 * @property  string(name) grantor        [1] type:name         
 * @property  string(name) grantee        [2] type:name         
 * @property  string(name) udt_catalog    [3] type:name         
 * @property  string(name) udt_schema     [4] type:name         
 * @property  string(name) udt_name       [5] type:name         
 * @property  string       privilege_type [6] type:varchar      
 * @property  string       is_grantable   [7] type:varchar(3)   
 * @package App\Models\DBModels\Model
 */
class MRoleUdtGrants extends DBClass {


	const  FJ_GRANTEE        = 'grantee';
	const  FJ_GRANTOR        = 'grantor';
	const  FJ_IS_GRANTABLE   = 'isGrantable';
	const  FJ_PRIVILEGE_TYPE = 'privilegeType';
	const  FJ_UDT_CATALOG    = 'udtCatalog';
	const  FJ_UDT_NAME       = 'udtName';
	const  FJ_UDT_SCHEMA     = 'udtSchema';
	const  FT_GRANTEE        = 'role_udt_grants.grantee';
	const  FT_GRANTOR        = 'role_udt_grants.grantor';
	const  FT_IS_GRANTABLE   = 'role_udt_grants.is_grantable';
	const  FT_PRIVILEGE_TYPE = 'role_udt_grants.privilege_type';
	const  FT_UDT_CATALOG    = 'role_udt_grants.udt_catalog';
	const  FT_UDT_NAME       = 'role_udt_grants.udt_name';
	const  FT_UDT_SCHEMA     = 'role_udt_grants.udt_schema';
	const  F_GRANTEE         = 'grantee';
	const  F_GRANTOR         = 'grantor';
	const  F_IS_GRANTABLE    = 'is_grantable';
	const  F_PRIVILEGE_TYPE  = 'privilege_type';
	const  F_UDT_CATALOG     = 'udt_catalog';
	const  F_UDT_NAME        = 'udt_name';
	const  F_UDT_SCHEMA      = 'udt_schema';

    protected $table = 'role_udt_grants';

	public static array $jsonable = [
		MRoleUdtGrants::FJ_GRANTOR        =>[ MRoleUdtGrants::F_GRANTOR        ,null,'string(name)', ],
		MRoleUdtGrants::FJ_GRANTEE        =>[ MRoleUdtGrants::F_GRANTEE        ,null,'string(name)', ],
		MRoleUdtGrants::FJ_UDT_CATALOG    =>[ MRoleUdtGrants::F_UDT_CATALOG    ,null,'string(name)', ],
		MRoleUdtGrants::FJ_UDT_SCHEMA     =>[ MRoleUdtGrants::F_UDT_SCHEMA     ,null,'string(name)', ],
		MRoleUdtGrants::FJ_UDT_NAME       =>[ MRoleUdtGrants::F_UDT_NAME       ,null,'string(name)', ],
		MRoleUdtGrants::FJ_PRIVILEGE_TYPE =>[ MRoleUdtGrants::F_PRIVILEGE_TYPE ,null,'string',       ],
		MRoleUdtGrants::FJ_IS_GRANTABLE   =>[ MRoleUdtGrants::F_IS_GRANTABLE   ,null,'string',       ],
	];

		protected $visible = [
			self::F_GRANTOR,
			self::F_GRANTEE,
			self::F_UDT_CATALOG,
			self::F_UDT_SCHEMA,
			self::F_UDT_NAME,
			self::F_PRIVILEGE_TYPE,
			self::F_IS_GRANTABLE,
		]; 

		protected $fillable = [
		];





}

