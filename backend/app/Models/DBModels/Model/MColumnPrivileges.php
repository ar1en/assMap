<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MColumnPrivileges
 * Representation for db table column_privileges.

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
class MColumnPrivileges extends DBClass {


	const  FJ_COLUMN_NAME    = 'columnName';
	const  FJ_GRANTEE        = 'grantee';
	const  FJ_GRANTOR        = 'grantor';
	const  FJ_IS_GRANTABLE   = 'isGrantable';
	const  FJ_PRIVILEGE_TYPE = 'privilegeType';
	const  FJ_TABLE_CATALOG  = 'tableCatalog';
	const  FJ_TABLE_NAME     = 'tableName';
	const  FJ_TABLE_SCHEMA   = 'tableSchema';
	const  FT_COLUMN_NAME    = 'column_privileges.column_name';
	const  FT_GRANTEE        = 'column_privileges.grantee';
	const  FT_GRANTOR        = 'column_privileges.grantor';
	const  FT_IS_GRANTABLE   = 'column_privileges.is_grantable';
	const  FT_PRIVILEGE_TYPE = 'column_privileges.privilege_type';
	const  FT_TABLE_CATALOG  = 'column_privileges.table_catalog';
	const  FT_TABLE_NAME     = 'column_privileges.table_name';
	const  FT_TABLE_SCHEMA   = 'column_privileges.table_schema';
	const  F_COLUMN_NAME     = 'column_name';
	const  F_GRANTEE         = 'grantee';
	const  F_GRANTOR         = 'grantor';
	const  F_IS_GRANTABLE    = 'is_grantable';
	const  F_PRIVILEGE_TYPE  = 'privilege_type';
	const  F_TABLE_CATALOG   = 'table_catalog';
	const  F_TABLE_NAME      = 'table_name';
	const  F_TABLE_SCHEMA    = 'table_schema';

    protected $table = 'column_privileges';

	public static array $jsonable = [
		MColumnPrivileges::FJ_GRANTOR        =>[ MColumnPrivileges::F_GRANTOR        ,null,'string(name)', ],
		MColumnPrivileges::FJ_GRANTEE        =>[ MColumnPrivileges::F_GRANTEE        ,null,'string(name)', ],
		MColumnPrivileges::FJ_TABLE_CATALOG  =>[ MColumnPrivileges::F_TABLE_CATALOG  ,null,'string(name)', ],
		MColumnPrivileges::FJ_TABLE_SCHEMA   =>[ MColumnPrivileges::F_TABLE_SCHEMA   ,null,'string(name)', ],
		MColumnPrivileges::FJ_TABLE_NAME     =>[ MColumnPrivileges::F_TABLE_NAME     ,null,'string(name)', ],
		MColumnPrivileges::FJ_COLUMN_NAME    =>[ MColumnPrivileges::F_COLUMN_NAME    ,null,'string(name)', ],
		MColumnPrivileges::FJ_PRIVILEGE_TYPE =>[ MColumnPrivileges::F_PRIVILEGE_TYPE ,null,'string',       ],
		MColumnPrivileges::FJ_IS_GRANTABLE   =>[ MColumnPrivileges::F_IS_GRANTABLE   ,null,'string',       ],
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

