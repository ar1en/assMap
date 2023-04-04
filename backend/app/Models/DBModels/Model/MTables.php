<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MTables
 * Representation for db table tables.

 * @property  string(name) table_catalog                [1]  type:name         
 * @property  string(name) table_schema                 [2]  type:name         
 * @property  string(name) table_name                   [3]  type:name         
 * @property  string       table_type                   [4]  type:varchar      
 * @property  string(name) self_referencing_column_name [5]  type:name         
 * @property  string       reference_generation         [6]  type:varchar      
 * @property  string(name) user_defined_type_catalog    [7]  type:name         
 * @property  string(name) user_defined_type_schema     [8]  type:name         
 * @property  string(name) user_defined_type_name       [9]  type:name         
 * @property  string       is_insertable_into           [10] type:varchar(3)   
 * @property  string       is_typed                     [11] type:varchar(3)   
 * @property  string       commit_action                [12] type:varchar      
 * @package App\Models\DBModels\Model
 */
class MTables extends DBClass {


	const  FJ_COMMIT_ACTION                = 'commitAction';
	const  FJ_IS_INSERTABLE_INTO           = 'isInsertableInto';
	const  FJ_IS_TYPED                     = 'isTyped';
	const  FJ_REFERENCE_GENERATION         = 'referenceGeneration';
	const  FJ_SELF_REFERENCING_COLUMN_NAME = 'selfReferencingColumnName';
	const  FJ_TABLE_CATALOG                = 'tableCatalog';
	const  FJ_TABLE_NAME                   = 'tableName';
	const  FJ_TABLE_SCHEMA                 = 'tableSchema';
	const  FJ_TABLE_TYPE                   = 'tableType';
	const  FJ_USER_DEFINED_TYPE_CATALOG    = 'userDefinedTypeCatalog';
	const  FJ_USER_DEFINED_TYPE_NAME       = 'userDefinedTypeName';
	const  FJ_USER_DEFINED_TYPE_SCHEMA     = 'userDefinedTypeSchema';
	const  FT_COMMIT_ACTION                = 'tables.commit_action';
	const  FT_IS_INSERTABLE_INTO           = 'tables.is_insertable_into';
	const  FT_IS_TYPED                     = 'tables.is_typed';
	const  FT_REFERENCE_GENERATION         = 'tables.reference_generation';
	const  FT_SELF_REFERENCING_COLUMN_NAME = 'tables.self_referencing_column_name';
	const  FT_TABLE_CATALOG                = 'tables.table_catalog';
	const  FT_TABLE_NAME                   = 'tables.table_name';
	const  FT_TABLE_SCHEMA                 = 'tables.table_schema';
	const  FT_TABLE_TYPE                   = 'tables.table_type';
	const  FT_USER_DEFINED_TYPE_CATALOG    = 'tables.user_defined_type_catalog';
	const  FT_USER_DEFINED_TYPE_NAME       = 'tables.user_defined_type_name';
	const  FT_USER_DEFINED_TYPE_SCHEMA     = 'tables.user_defined_type_schema';
	const  F_COMMIT_ACTION                 = 'commit_action';
	const  F_IS_INSERTABLE_INTO            = 'is_insertable_into';
	const  F_IS_TYPED                      = 'is_typed';
	const  F_REFERENCE_GENERATION          = 'reference_generation';
	const  F_SELF_REFERENCING_COLUMN_NAME  = 'self_referencing_column_name';
	const  F_TABLE_CATALOG                 = 'table_catalog';
	const  F_TABLE_NAME                    = 'table_name';
	const  F_TABLE_SCHEMA                  = 'table_schema';
	const  F_TABLE_TYPE                    = 'table_type';
	const  F_USER_DEFINED_TYPE_CATALOG     = 'user_defined_type_catalog';
	const  F_USER_DEFINED_TYPE_NAME        = 'user_defined_type_name';
	const  F_USER_DEFINED_TYPE_SCHEMA      = 'user_defined_type_schema';

    protected $table = 'tables';

	public static array $jsonable = [
		MTables::FJ_TABLE_CATALOG                =>[ MTables::F_TABLE_CATALOG                ,null,'string(name)', ],
		MTables::FJ_TABLE_SCHEMA                 =>[ MTables::F_TABLE_SCHEMA                 ,null,'string(name)', ],
		MTables::FJ_TABLE_NAME                   =>[ MTables::F_TABLE_NAME                   ,null,'string(name)', ],
		MTables::FJ_TABLE_TYPE                   =>[ MTables::F_TABLE_TYPE                   ,null,'string',       ],
		MTables::FJ_SELF_REFERENCING_COLUMN_NAME =>[ MTables::F_SELF_REFERENCING_COLUMN_NAME ,null,'string(name)', ],
		MTables::FJ_REFERENCE_GENERATION         =>[ MTables::F_REFERENCE_GENERATION         ,null,'string',       ],
		MTables::FJ_USER_DEFINED_TYPE_CATALOG    =>[ MTables::F_USER_DEFINED_TYPE_CATALOG    ,null,'string(name)', ],
		MTables::FJ_USER_DEFINED_TYPE_SCHEMA     =>[ MTables::F_USER_DEFINED_TYPE_SCHEMA     ,null,'string(name)', ],
		MTables::FJ_USER_DEFINED_TYPE_NAME       =>[ MTables::F_USER_DEFINED_TYPE_NAME       ,null,'string(name)', ],
		MTables::FJ_IS_INSERTABLE_INTO           =>[ MTables::F_IS_INSERTABLE_INTO           ,null,'string',       ],
		MTables::FJ_IS_TYPED                     =>[ MTables::F_IS_TYPED                     ,null,'string',       ],
		MTables::FJ_COMMIT_ACTION                =>[ MTables::F_COMMIT_ACTION                ,null,'string',       ],
	];

		protected $visible = [
			self::F_TABLE_CATALOG,
			self::F_TABLE_SCHEMA,
			self::F_TABLE_NAME,
			self::F_TABLE_TYPE,
			self::F_SELF_REFERENCING_COLUMN_NAME,
			self::F_REFERENCE_GENERATION,
			self::F_USER_DEFINED_TYPE_CATALOG,
			self::F_USER_DEFINED_TYPE_SCHEMA,
			self::F_USER_DEFINED_TYPE_NAME,
			self::F_IS_INSERTABLE_INTO,
			self::F_IS_TYPED,
			self::F_COMMIT_ACTION,
		]; 

		protected $fillable = [
		];





}

