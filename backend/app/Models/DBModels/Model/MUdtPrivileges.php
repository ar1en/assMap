<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MUdtPrivileges
 * Representation for db table udt_privileges.

 * @property  string(name) grantor        [1] type:name         
 * @property  string(name) grantee        [2] type:name         
 * @property  string(name) udt_catalog    [3] type:name         
 * @property  string(name) udt_schema     [4] type:name         
 * @property  string(name) udt_name       [5] type:name         
 * @property  string       privilege_type [6] type:varchar      
 * @property  string       is_grantable   [7] type:varchar(3)   
 * @package App\Models\DBModels\Model
 */
class MUdtPrivileges extends DBClass {


	const  FJ_GRANTEE        = 'grantee';
	const  FJ_GRANTOR        = 'grantor';
	const  FJ_IS_GRANTABLE   = 'isGrantable';
	const  FJ_PRIVILEGE_TYPE = 'privilegeType';
	const  FJ_UDT_CATALOG    = 'udtCatalog';
	const  FJ_UDT_NAME       = 'udtName';
	const  FJ_UDT_SCHEMA     = 'udtSchema';
	const  FT_GRANTEE        = 'udt_privileges.grantee';
	const  FT_GRANTOR        = 'udt_privileges.grantor';
	const  FT_IS_GRANTABLE   = 'udt_privileges.is_grantable';
	const  FT_PRIVILEGE_TYPE = 'udt_privileges.privilege_type';
	const  FT_UDT_CATALOG    = 'udt_privileges.udt_catalog';
	const  FT_UDT_NAME       = 'udt_privileges.udt_name';
	const  FT_UDT_SCHEMA     = 'udt_privileges.udt_schema';
	const  F_GRANTEE         = 'grantee';
	const  F_GRANTOR         = 'grantor';
	const  F_IS_GRANTABLE    = 'is_grantable';
	const  F_PRIVILEGE_TYPE  = 'privilege_type';
	const  F_UDT_CATALOG     = 'udt_catalog';
	const  F_UDT_NAME        = 'udt_name';
	const  F_UDT_SCHEMA      = 'udt_schema';

    protected $table = 'udt_privileges';

	public static array $jsonable = [
		MUdtPrivileges::FJ_GRANTOR        =>[ MUdtPrivileges::F_GRANTOR        ,null,'string(name)', ],
		MUdtPrivileges::FJ_GRANTEE        =>[ MUdtPrivileges::F_GRANTEE        ,null,'string(name)', ],
		MUdtPrivileges::FJ_UDT_CATALOG    =>[ MUdtPrivileges::F_UDT_CATALOG    ,null,'string(name)', ],
		MUdtPrivileges::FJ_UDT_SCHEMA     =>[ MUdtPrivileges::F_UDT_SCHEMA     ,null,'string(name)', ],
		MUdtPrivileges::FJ_UDT_NAME       =>[ MUdtPrivileges::F_UDT_NAME       ,null,'string(name)', ],
		MUdtPrivileges::FJ_PRIVILEGE_TYPE =>[ MUdtPrivileges::F_PRIVILEGE_TYPE ,null,'string',       ],
		MUdtPrivileges::FJ_IS_GRANTABLE   =>[ MUdtPrivileges::F_IS_GRANTABLE   ,null,'string',       ],
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

