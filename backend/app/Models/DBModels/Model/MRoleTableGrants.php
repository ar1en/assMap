<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MRoleTableGrants
 * Representation for db table role_table_grants.

 * @property  string(name) grantor        [1] type:name         
 * @property  string(name) grantee        [2] type:name         
 * @property  string(name) table_catalog  [3] type:name         
 * @property  string(name) table_schema   [4] type:name         
 * @property  string(name) table_name     [5] type:name         
 * @property  string       privilege_type [6] type:varchar      
 * @property  string       is_grantable   [7] type:varchar(3)   
 * @property  string       with_hierarchy [8] type:varchar(3)   
 * @package App\Models\DBModels\Model
 */
class MRoleTableGrants extends DBClass {


	const  FJ_GRANTEE        = 'grantee';
	const  FJ_GRANTOR        = 'grantor';
	const  FJ_IS_GRANTABLE   = 'isGrantable';
	const  FJ_PRIVILEGE_TYPE = 'privilegeType';
	const  FJ_TABLE_CATALOG  = 'tableCatalog';
	const  FJ_TABLE_NAME     = 'tableName';
	const  FJ_TABLE_SCHEMA   = 'tableSchema';
	const  FJ_WITH_HIERARCHY = 'withHierarchy';
	const  FT_GRANTEE        = 'role_table_grants.grantee';
	const  FT_GRANTOR        = 'role_table_grants.grantor';
	const  FT_IS_GRANTABLE   = 'role_table_grants.is_grantable';
	const  FT_PRIVILEGE_TYPE = 'role_table_grants.privilege_type';
	const  FT_TABLE_CATALOG  = 'role_table_grants.table_catalog';
	const  FT_TABLE_NAME     = 'role_table_grants.table_name';
	const  FT_TABLE_SCHEMA   = 'role_table_grants.table_schema';
	const  FT_WITH_HIERARCHY = 'role_table_grants.with_hierarchy';
	const  F_GRANTEE         = 'grantee';
	const  F_GRANTOR         = 'grantor';
	const  F_IS_GRANTABLE    = 'is_grantable';
	const  F_PRIVILEGE_TYPE  = 'privilege_type';
	const  F_TABLE_CATALOG   = 'table_catalog';
	const  F_TABLE_NAME      = 'table_name';
	const  F_TABLE_SCHEMA    = 'table_schema';
	const  F_WITH_HIERARCHY  = 'with_hierarchy';

    protected $table = 'role_table_grants';

	public static array $jsonable = [
		MRoleTableGrants::FJ_GRANTOR        =>[ MRoleTableGrants::F_GRANTOR        ,null,'string(name)', ],
		MRoleTableGrants::FJ_GRANTEE        =>[ MRoleTableGrants::F_GRANTEE        ,null,'string(name)', ],
		MRoleTableGrants::FJ_TABLE_CATALOG  =>[ MRoleTableGrants::F_TABLE_CATALOG  ,null,'string(name)', ],
		MRoleTableGrants::FJ_TABLE_SCHEMA   =>[ MRoleTableGrants::F_TABLE_SCHEMA   ,null,'string(name)', ],
		MRoleTableGrants::FJ_TABLE_NAME     =>[ MRoleTableGrants::F_TABLE_NAME     ,null,'string(name)', ],
		MRoleTableGrants::FJ_PRIVILEGE_TYPE =>[ MRoleTableGrants::F_PRIVILEGE_TYPE ,null,'string',       ],
		MRoleTableGrants::FJ_IS_GRANTABLE   =>[ MRoleTableGrants::F_IS_GRANTABLE   ,null,'string',       ],
		MRoleTableGrants::FJ_WITH_HIERARCHY =>[ MRoleTableGrants::F_WITH_HIERARCHY ,null,'string',       ],
	];

		protected $visible = [
			self::F_GRANTOR,
			self::F_GRANTEE,
			self::F_TABLE_CATALOG,
			self::F_TABLE_SCHEMA,
			self::F_TABLE_NAME,
			self::F_PRIVILEGE_TYPE,
			self::F_IS_GRANTABLE,
			self::F_WITH_HIERARCHY,
		]; 

		protected $fillable = [
		];





}

