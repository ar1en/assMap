<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MKeyColumnUsage
 * Representation for db table key_column_usage.

 * @property  string(name) constraint_catalog            [1] type:name   
 * @property  string(name) constraint_schema             [2] type:name   
 * @property  string(name) constraint_name               [3] type:name   
 * @property  string(name) table_catalog                 [4] type:name   
 * @property  string(name) table_schema                  [5] type:name   
 * @property  string(name) table_name                    [6] type:name   
 * @property  string(name) column_name                   [7] type:name   
 * @property  int          ordinal_position              [8] type:int4   
 * @property  int          position_in_unique_constraint [9] type:int4   
 * @package App\Models\DBModels\Model
 */
class MKeyColumnUsage extends DBClass {


	const  FJ_COLUMN_NAME                   = 'columnName';
	const  FJ_CONSTRAINT_CATALOG            = 'constraintCatalog';
	const  FJ_CONSTRAINT_NAME               = 'constraintName';
	const  FJ_CONSTRAINT_SCHEMA             = 'constraintSchema';
	const  FJ_ORDINAL_POSITION              = 'ordinalPosition';
	const  FJ_POSITION_IN_UNIQUE_CONSTRAINT = 'positionInUniqueConstraint';
	const  FJ_TABLE_CATALOG                 = 'tableCatalog';
	const  FJ_TABLE_NAME                    = 'tableName';
	const  FJ_TABLE_SCHEMA                  = 'tableSchema';
	const  FT_COLUMN_NAME                   = 'key_column_usage.column_name';
	const  FT_CONSTRAINT_CATALOG            = 'key_column_usage.constraint_catalog';
	const  FT_CONSTRAINT_NAME               = 'key_column_usage.constraint_name';
	const  FT_CONSTRAINT_SCHEMA             = 'key_column_usage.constraint_schema';
	const  FT_ORDINAL_POSITION              = 'key_column_usage.ordinal_position';
	const  FT_POSITION_IN_UNIQUE_CONSTRAINT = 'key_column_usage.position_in_unique_constraint';
	const  FT_TABLE_CATALOG                 = 'key_column_usage.table_catalog';
	const  FT_TABLE_NAME                    = 'key_column_usage.table_name';
	const  FT_TABLE_SCHEMA                  = 'key_column_usage.table_schema';
	const  F_COLUMN_NAME                    = 'column_name';
	const  F_CONSTRAINT_CATALOG             = 'constraint_catalog';
	const  F_CONSTRAINT_NAME                = 'constraint_name';
	const  F_CONSTRAINT_SCHEMA              = 'constraint_schema';
	const  F_ORDINAL_POSITION               = 'ordinal_position';
	const  F_POSITION_IN_UNIQUE_CONSTRAINT  = 'position_in_unique_constraint';
	const  F_TABLE_CATALOG                  = 'table_catalog';
	const  F_TABLE_NAME                     = 'table_name';
	const  F_TABLE_SCHEMA                   = 'table_schema';

    protected $table = 'key_column_usage';

	public static array $jsonable = [
		MKeyColumnUsage::FJ_CONSTRAINT_CATALOG            =>[ MKeyColumnUsage::F_CONSTRAINT_CATALOG            ,null,'string(name)', ],
		MKeyColumnUsage::FJ_CONSTRAINT_SCHEMA             =>[ MKeyColumnUsage::F_CONSTRAINT_SCHEMA             ,null,'string(name)', ],
		MKeyColumnUsage::FJ_CONSTRAINT_NAME               =>[ MKeyColumnUsage::F_CONSTRAINT_NAME               ,null,'string(name)', ],
		MKeyColumnUsage::FJ_TABLE_CATALOG                 =>[ MKeyColumnUsage::F_TABLE_CATALOG                 ,null,'string(name)', ],
		MKeyColumnUsage::FJ_TABLE_SCHEMA                  =>[ MKeyColumnUsage::F_TABLE_SCHEMA                  ,null,'string(name)', ],
		MKeyColumnUsage::FJ_TABLE_NAME                    =>[ MKeyColumnUsage::F_TABLE_NAME                    ,null,'string(name)', ],
		MKeyColumnUsage::FJ_COLUMN_NAME                   =>[ MKeyColumnUsage::F_COLUMN_NAME                   ,null,'string(name)', ],
		MKeyColumnUsage::FJ_ORDINAL_POSITION              =>[ MKeyColumnUsage::F_ORDINAL_POSITION              ,null,'number',       ],
		MKeyColumnUsage::FJ_POSITION_IN_UNIQUE_CONSTRAINT =>[ MKeyColumnUsage::F_POSITION_IN_UNIQUE_CONSTRAINT ,null,'number',       ],
	];

		protected $visible = [
			self::F_CONSTRAINT_CATALOG,
			self::F_CONSTRAINT_SCHEMA,
			self::F_CONSTRAINT_NAME,
			self::F_TABLE_CATALOG,
			self::F_TABLE_SCHEMA,
			self::F_TABLE_NAME,
			self::F_COLUMN_NAME,
			self::F_ORDINAL_POSITION,
			self::F_POSITION_IN_UNIQUE_CONSTRAINT,
		]; 

		protected $fillable = [
		];





}

