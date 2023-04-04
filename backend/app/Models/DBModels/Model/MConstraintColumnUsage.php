<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MConstraintColumnUsage
 * Representation for db table constraint_column_usage.

 * @property  string(name) table_catalog      [1] type:name   
 * @property  string(name) table_schema       [2] type:name   
 * @property  string(name) table_name         [3] type:name   
 * @property  string(name) column_name        [4] type:name   
 * @property  string(name) constraint_catalog [5] type:name   
 * @property  string(name) constraint_schema  [6] type:name   
 * @property  string(name) constraint_name    [7] type:name   
 * @package App\Models\DBModels\Model
 */
class MConstraintColumnUsage extends DBClass {


	const  FJ_COLUMN_NAME        = 'columnName';
	const  FJ_CONSTRAINT_CATALOG = 'constraintCatalog';
	const  FJ_CONSTRAINT_NAME    = 'constraintName';
	const  FJ_CONSTRAINT_SCHEMA  = 'constraintSchema';
	const  FJ_TABLE_CATALOG      = 'tableCatalog';
	const  FJ_TABLE_NAME         = 'tableName';
	const  FJ_TABLE_SCHEMA       = 'tableSchema';
	const  FT_COLUMN_NAME        = 'constraint_column_usage.column_name';
	const  FT_CONSTRAINT_CATALOG = 'constraint_column_usage.constraint_catalog';
	const  FT_CONSTRAINT_NAME    = 'constraint_column_usage.constraint_name';
	const  FT_CONSTRAINT_SCHEMA  = 'constraint_column_usage.constraint_schema';
	const  FT_TABLE_CATALOG      = 'constraint_column_usage.table_catalog';
	const  FT_TABLE_NAME         = 'constraint_column_usage.table_name';
	const  FT_TABLE_SCHEMA       = 'constraint_column_usage.table_schema';
	const  F_COLUMN_NAME         = 'column_name';
	const  F_CONSTRAINT_CATALOG  = 'constraint_catalog';
	const  F_CONSTRAINT_NAME     = 'constraint_name';
	const  F_CONSTRAINT_SCHEMA   = 'constraint_schema';
	const  F_TABLE_CATALOG       = 'table_catalog';
	const  F_TABLE_NAME          = 'table_name';
	const  F_TABLE_SCHEMA        = 'table_schema';

    protected $table = 'constraint_column_usage';

	public static array $jsonable = [
		MConstraintColumnUsage::FJ_TABLE_CATALOG      =>[ MConstraintColumnUsage::F_TABLE_CATALOG      ,null,'string(name)', ],
		MConstraintColumnUsage::FJ_TABLE_SCHEMA       =>[ MConstraintColumnUsage::F_TABLE_SCHEMA       ,null,'string(name)', ],
		MConstraintColumnUsage::FJ_TABLE_NAME         =>[ MConstraintColumnUsage::F_TABLE_NAME         ,null,'string(name)', ],
		MConstraintColumnUsage::FJ_COLUMN_NAME        =>[ MConstraintColumnUsage::F_COLUMN_NAME        ,null,'string(name)', ],
		MConstraintColumnUsage::FJ_CONSTRAINT_CATALOG =>[ MConstraintColumnUsage::F_CONSTRAINT_CATALOG ,null,'string(name)', ],
		MConstraintColumnUsage::FJ_CONSTRAINT_SCHEMA  =>[ MConstraintColumnUsage::F_CONSTRAINT_SCHEMA  ,null,'string(name)', ],
		MConstraintColumnUsage::FJ_CONSTRAINT_NAME    =>[ MConstraintColumnUsage::F_CONSTRAINT_NAME    ,null,'string(name)', ],
	];

		protected $visible = [
			self::F_TABLE_CATALOG,
			self::F_TABLE_SCHEMA,
			self::F_TABLE_NAME,
			self::F_COLUMN_NAME,
			self::F_CONSTRAINT_CATALOG,
			self::F_CONSTRAINT_SCHEMA,
			self::F_CONSTRAINT_NAME,
		]; 

		protected $fillable = [
		];





}

