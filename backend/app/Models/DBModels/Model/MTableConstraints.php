<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MTableConstraints
 * Representation for db table table_constraints.

 * @property  string(name) constraint_catalog [1]  type:name         
 * @property  string(name) constraint_schema  [2]  type:name         
 * @property  string(name) constraint_name    [3]  type:name         
 * @property  string(name) table_catalog      [4]  type:name         
 * @property  string(name) table_schema       [5]  type:name         
 * @property  string(name) table_name         [6]  type:name         
 * @property  string       constraint_type    [7]  type:varchar      
 * @property  string       is_deferrable      [8]  type:varchar(3)   
 * @property  string       initially_deferred [9]  type:varchar(3)   
 * @property  string       enforced           [10] type:varchar(3)   
 * @property  string       nulls_distinct     [11] type:varchar(3)   
 * @package App\Models\DBModels\Model
 */
class MTableConstraints extends DBClass {


	const  FJ_CONSTRAINT_CATALOG = 'constraintCatalog';
	const  FJ_CONSTRAINT_NAME    = 'constraintName';
	const  FJ_CONSTRAINT_SCHEMA  = 'constraintSchema';
	const  FJ_CONSTRAINT_TYPE    = 'constraintType';
	const  FJ_ENFORCED           = 'enforced';
	const  FJ_INITIALLY_DEFERRED = 'initiallyDeferred';
	const  FJ_IS_DEFERRABLE      = 'isDeferrable';
	const  FJ_NULLS_DISTINCT     = 'nullsDistinct';
	const  FJ_TABLE_CATALOG      = 'tableCatalog';
	const  FJ_TABLE_NAME         = 'tableName';
	const  FJ_TABLE_SCHEMA       = 'tableSchema';
	const  FT_CONSTRAINT_CATALOG = 'table_constraints.constraint_catalog';
	const  FT_CONSTRAINT_NAME    = 'table_constraints.constraint_name';
	const  FT_CONSTRAINT_SCHEMA  = 'table_constraints.constraint_schema';
	const  FT_CONSTRAINT_TYPE    = 'table_constraints.constraint_type';
	const  FT_ENFORCED           = 'table_constraints.enforced';
	const  FT_INITIALLY_DEFERRED = 'table_constraints.initially_deferred';
	const  FT_IS_DEFERRABLE      = 'table_constraints.is_deferrable';
	const  FT_NULLS_DISTINCT     = 'table_constraints.nulls_distinct';
	const  FT_TABLE_CATALOG      = 'table_constraints.table_catalog';
	const  FT_TABLE_NAME         = 'table_constraints.table_name';
	const  FT_TABLE_SCHEMA       = 'table_constraints.table_schema';
	const  F_CONSTRAINT_CATALOG  = 'constraint_catalog';
	const  F_CONSTRAINT_NAME     = 'constraint_name';
	const  F_CONSTRAINT_SCHEMA   = 'constraint_schema';
	const  F_CONSTRAINT_TYPE     = 'constraint_type';
	const  F_ENFORCED            = 'enforced';
	const  F_INITIALLY_DEFERRED  = 'initially_deferred';
	const  F_IS_DEFERRABLE       = 'is_deferrable';
	const  F_NULLS_DISTINCT      = 'nulls_distinct';
	const  F_TABLE_CATALOG       = 'table_catalog';
	const  F_TABLE_NAME          = 'table_name';
	const  F_TABLE_SCHEMA        = 'table_schema';

    protected $table = 'table_constraints';

	public static array $jsonable = [
		MTableConstraints::FJ_CONSTRAINT_CATALOG =>[ MTableConstraints::F_CONSTRAINT_CATALOG ,null,'string(name)', ],
		MTableConstraints::FJ_CONSTRAINT_SCHEMA  =>[ MTableConstraints::F_CONSTRAINT_SCHEMA  ,null,'string(name)', ],
		MTableConstraints::FJ_CONSTRAINT_NAME    =>[ MTableConstraints::F_CONSTRAINT_NAME    ,null,'string(name)', ],
		MTableConstraints::FJ_TABLE_CATALOG      =>[ MTableConstraints::F_TABLE_CATALOG      ,null,'string(name)', ],
		MTableConstraints::FJ_TABLE_SCHEMA       =>[ MTableConstraints::F_TABLE_SCHEMA       ,null,'string(name)', ],
		MTableConstraints::FJ_TABLE_NAME         =>[ MTableConstraints::F_TABLE_NAME         ,null,'string(name)', ],
		MTableConstraints::FJ_CONSTRAINT_TYPE    =>[ MTableConstraints::F_CONSTRAINT_TYPE    ,null,'string',       ],
		MTableConstraints::FJ_IS_DEFERRABLE      =>[ MTableConstraints::F_IS_DEFERRABLE      ,null,'string',       ],
		MTableConstraints::FJ_INITIALLY_DEFERRED =>[ MTableConstraints::F_INITIALLY_DEFERRED ,null,'string',       ],
		MTableConstraints::FJ_ENFORCED           =>[ MTableConstraints::F_ENFORCED           ,null,'string',       ],
		MTableConstraints::FJ_NULLS_DISTINCT     =>[ MTableConstraints::F_NULLS_DISTINCT     ,null,'string',       ],
	];

		protected $visible = [
			self::F_CONSTRAINT_CATALOG,
			self::F_CONSTRAINT_SCHEMA,
			self::F_CONSTRAINT_NAME,
			self::F_TABLE_CATALOG,
			self::F_TABLE_SCHEMA,
			self::F_TABLE_NAME,
			self::F_CONSTRAINT_TYPE,
			self::F_IS_DEFERRABLE,
			self::F_INITIALLY_DEFERRED,
			self::F_ENFORCED,
			self::F_NULLS_DISTINCT,
		]; 

		protected $fillable = [
		];





}

