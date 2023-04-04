<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MRoleColumnGrants
 * Representation for db table role_column_grants.

 * @property  string(name) grantor        [1] type:name         
 * @property  string(name) grantee        [2] type:name         
 * @property  string(name) table_catalog  [3] type:name         
 * @property  string(name) table_schema   [4] type:name         
 * @property  string(name) table_name     [5] type:name         
 * @property  string(name) column_name    [6] type:name         
 * @property  string       privilege_type [7] type:varchar      
 * @property  string       is_grantable   [8] type:varchar(3)   
 * @package App\Models\DBModels\Model
 */
class MRoleColumnGrants extends DBClass {


	const  FJ_COLUMN_NAME    = 'columnName';
	const  FJ_GRANTEE        = 'grantee';
	const  FJ_GRANTOR        = 'grantor';
	const  FJ_IS_GRANTABLE   = 'isGrantable';
	const  FJ_PRIVILEGE_TYPE = 'privilegeType';
	const  FJ_TABLE_CATALOG  = 'tableCatalog';
	const  FJ_TABLE_NAME     = 'tableName';
	const  FJ_TABLE_SCHEMA   = 'tableSchema';
	const  FT_COLUMN_NAME    = 'role_column_grants.column_name';
	const  FT_GRANTEE        = 'role_column_grants.grantee';
	const  FT_GRANTOR        = 'role_column_grants.grantor';
	const  FT_IS_GRANTABLE   = 'role_column_grants.is_grantable';
	const  FT_PRIVILEGE_TYPE = 'role_column_grants.privilege_type';
	const  FT_TABLE_CATALOG  = 'role_column_grants.table_catalog';
	const  FT_TABLE_NAME     = 'role_column_grants.table_name';
	const  FT_TABLE_SCHEMA   = 'role_column_grants.table_schema';
	const  F_COLUMN_NAME     = 'column_name';
	const  F_GRANTEE         = 'grantee';
	const  F_GRANTOR         = 'grantor';
	const  F_IS_GRANTABLE    = 'is_grantable';
	const  F_PRIVILEGE_TYPE  = 'privilege_type';
	const  F_TABLE_CATALOG   = 'table_catalog';
	const  F_TABLE_NAME      = 'table_name';
	const  F_TABLE_SCHEMA    = 'table_schema';

    protected $table = 'role_column_grants';

	public static array $jsonable = [
		MRoleColumnGrants::FJ_GRANTOR        =>[ MRoleColumnGrants::F_GRANTOR        ,null,'string(name)', ],
		MRoleColumnGrants::FJ_GRANTEE        =>[ MRoleColumnGrants::F_GRANTEE        ,null,'string(name)', ],
		MRoleColumnGrants::FJ_TABLE_CATALOG  =>[ MRoleColumnGrants::F_TABLE_CATALOG  ,null,'string(name)', ],
		MRoleColumnGrants::FJ_TABLE_SCHEMA   =>[ MRoleColumnGrants::F_TABLE_SCHEMA   ,null,'string(name)', ],
		MRoleColumnGrants::FJ_TABLE_NAME     =>[ MRoleColumnGrants::F_TABLE_NAME     ,null,'string(name)', ],
		MRoleColumnGrants::FJ_COLUMN_NAME    =>[ MRoleColumnGrants::F_COLUMN_NAME    ,null,'string(name)', ],
		MRoleColumnGrants::FJ_PRIVILEGE_TYPE =>[ MRoleColumnGrants::F_PRIVILEGE_TYPE ,null,'string',       ],
		MRoleColumnGrants::FJ_IS_GRANTABLE   =>[ MRoleColumnGrants::F_IS_GRANTABLE   ,null,'string',       ],
	];

		protected $visible = [
			self::F_GRANTOR,
			self::F_GRANTEE,
			self::F_TABLE_CATALOG,
			self::F_TABLE_SCHEMA,
			self::F_TABLE_NAME,
			self::F_COLUMN_NAME,
			self::F_PRIVILEGE_TYPE,
			self::F_IS_GRANTABLE,
		]; 

		protected $fillable = [
		];





}

