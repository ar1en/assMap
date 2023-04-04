<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MRoutineColumnUsage
 * Representation for db table routine_column_usage.

 * @property  string(name) specific_catalog [1]  type:name   
 * @property  string(name) specific_schema  [2]  type:name   
 * @property  string(name) specific_name    [3]  type:name   
 * @property  string(name) routine_catalog  [4]  type:name   
 * @property  string(name) routine_schema   [5]  type:name   
 * @property  string(name) routine_name     [6]  type:name   
 * @property  string(name) table_catalog    [7]  type:name   
 * @property  string(name) table_schema     [8]  type:name   
 * @property  string(name) table_name       [9]  type:name   
 * @property  string(name) column_name      [10] type:name   
 * @package App\Models\DBModels\Model
 */
class MRoutineColumnUsage extends DBClass {


	const  FJ_COLUMN_NAME      = 'columnName';
	const  FJ_ROUTINE_CATALOG  = 'routineCatalog';
	const  FJ_ROUTINE_NAME     = 'routineName';
	const  FJ_ROUTINE_SCHEMA   = 'routineSchema';
	const  FJ_SPECIFIC_CATALOG = 'specificCatalog';
	const  FJ_SPECIFIC_NAME    = 'specificName';
	const  FJ_SPECIFIC_SCHEMA  = 'specificSchema';
	const  FJ_TABLE_CATALOG    = 'tableCatalog';
	const  FJ_TABLE_NAME       = 'tableName';
	const  FJ_TABLE_SCHEMA     = 'tableSchema';
	const  FT_COLUMN_NAME      = 'routine_column_usage.column_name';
	const  FT_ROUTINE_CATALOG  = 'routine_column_usage.routine_catalog';
	const  FT_ROUTINE_NAME     = 'routine_column_usage.routine_name';
	const  FT_ROUTINE_SCHEMA   = 'routine_column_usage.routine_schema';
	const  FT_SPECIFIC_CATALOG = 'routine_column_usage.specific_catalog';
	const  FT_SPECIFIC_NAME    = 'routine_column_usage.specific_name';
	const  FT_SPECIFIC_SCHEMA  = 'routine_column_usage.specific_schema';
	const  FT_TABLE_CATALOG    = 'routine_column_usage.table_catalog';
	const  FT_TABLE_NAME       = 'routine_column_usage.table_name';
	const  FT_TABLE_SCHEMA     = 'routine_column_usage.table_schema';
	const  F_COLUMN_NAME       = 'column_name';
	const  F_ROUTINE_CATALOG   = 'routine_catalog';
	const  F_ROUTINE_NAME      = 'routine_name';
	const  F_ROUTINE_SCHEMA    = 'routine_schema';
	const  F_SPECIFIC_CATALOG  = 'specific_catalog';
	const  F_SPECIFIC_NAME     = 'specific_name';
	const  F_SPECIFIC_SCHEMA   = 'specific_schema';
	const  F_TABLE_CATALOG     = 'table_catalog';
	const  F_TABLE_NAME        = 'table_name';
	const  F_TABLE_SCHEMA      = 'table_schema';

    protected $table = 'routine_column_usage';

	public static array $jsonable = [
		MRoutineColumnUsage::FJ_SPECIFIC_CATALOG =>[ MRoutineColumnUsage::F_SPECIFIC_CATALOG ,null,'string(name)', ],
		MRoutineColumnUsage::FJ_SPECIFIC_SCHEMA  =>[ MRoutineColumnUsage::F_SPECIFIC_SCHEMA  ,null,'string(name)', ],
		MRoutineColumnUsage::FJ_SPECIFIC_NAME    =>[ MRoutineColumnUsage::F_SPECIFIC_NAME    ,null,'string(name)', ],
		MRoutineColumnUsage::FJ_ROUTINE_CATALOG  =>[ MRoutineColumnUsage::F_ROUTINE_CATALOG  ,null,'string(name)', ],
		MRoutineColumnUsage::FJ_ROUTINE_SCHEMA   =>[ MRoutineColumnUsage::F_ROUTINE_SCHEMA   ,null,'string(name)', ],
		MRoutineColumnUsage::FJ_ROUTINE_NAME     =>[ MRoutineColumnUsage::F_ROUTINE_NAME     ,null,'string(name)', ],
		MRoutineColumnUsage::FJ_TABLE_CATALOG    =>[ MRoutineColumnUsage::F_TABLE_CATALOG    ,null,'string(name)', ],
		MRoutineColumnUsage::FJ_TABLE_SCHEMA     =>[ MRoutineColumnUsage::F_TABLE_SCHEMA     ,null,'string(name)', ],
		MRoutineColumnUsage::FJ_TABLE_NAME       =>[ MRoutineColumnUsage::F_TABLE_NAME       ,null,'string(name)', ],
		MRoutineColumnUsage::FJ_COLUMN_NAME      =>[ MRoutineColumnUsage::F_COLUMN_NAME      ,null,'string(name)', ],
	];

		protected $visible = [
			self::F_SPECIFIC_CATALOG,
			self::F_SPECIFIC_SCHEMA,
			self::F_SPECIFIC_NAME,
			self::F_ROUTINE_CATALOG,
			self::F_ROUTINE_SCHEMA,
			self::F_ROUTINE_NAME,
			self::F_TABLE_CATALOG,
			self::F_TABLE_SCHEMA,
			self::F_TABLE_NAME,
			self::F_COLUMN_NAME,
		]; 

		protected $fillable = [
		];





}

