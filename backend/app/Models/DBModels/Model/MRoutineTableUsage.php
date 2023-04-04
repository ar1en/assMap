<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MRoutineTableUsage
 * Representation for db table routine_table_usage.

 * @property  string(name) specific_catalog [1] type:name   
 * @property  string(name) specific_schema  [2] type:name   
 * @property  string(name) specific_name    [3] type:name   
 * @property  string(name) routine_catalog  [4] type:name   
 * @property  string(name) routine_schema   [5] type:name   
 * @property  string(name) routine_name     [6] type:name   
 * @property  string(name) table_catalog    [7] type:name   
 * @property  string(name) table_schema     [8] type:name   
 * @property  string(name) table_name       [9] type:name   
 * @package App\Models\DBModels\Model
 */
class MRoutineTableUsage extends DBClass {


	const  FJ_ROUTINE_CATALOG  = 'routineCatalog';
	const  FJ_ROUTINE_NAME     = 'routineName';
	const  FJ_ROUTINE_SCHEMA   = 'routineSchema';
	const  FJ_SPECIFIC_CATALOG = 'specificCatalog';
	const  FJ_SPECIFIC_NAME    = 'specificName';
	const  FJ_SPECIFIC_SCHEMA  = 'specificSchema';
	const  FJ_TABLE_CATALOG    = 'tableCatalog';
	const  FJ_TABLE_NAME       = 'tableName';
	const  FJ_TABLE_SCHEMA     = 'tableSchema';
	const  FT_ROUTINE_CATALOG  = 'routine_table_usage.routine_catalog';
	const  FT_ROUTINE_NAME     = 'routine_table_usage.routine_name';
	const  FT_ROUTINE_SCHEMA   = 'routine_table_usage.routine_schema';
	const  FT_SPECIFIC_CATALOG = 'routine_table_usage.specific_catalog';
	const  FT_SPECIFIC_NAME    = 'routine_table_usage.specific_name';
	const  FT_SPECIFIC_SCHEMA  = 'routine_table_usage.specific_schema';
	const  FT_TABLE_CATALOG    = 'routine_table_usage.table_catalog';
	const  FT_TABLE_NAME       = 'routine_table_usage.table_name';
	const  FT_TABLE_SCHEMA     = 'routine_table_usage.table_schema';
	const  F_ROUTINE_CATALOG   = 'routine_catalog';
	const  F_ROUTINE_NAME      = 'routine_name';
	const  F_ROUTINE_SCHEMA    = 'routine_schema';
	const  F_SPECIFIC_CATALOG  = 'specific_catalog';
	const  F_SPECIFIC_NAME     = 'specific_name';
	const  F_SPECIFIC_SCHEMA   = 'specific_schema';
	const  F_TABLE_CATALOG     = 'table_catalog';
	const  F_TABLE_NAME        = 'table_name';
	const  F_TABLE_SCHEMA      = 'table_schema';

    protected $table = 'routine_table_usage';

	public static array $jsonable = [
		MRoutineTableUsage::FJ_SPECIFIC_CATALOG =>[ MRoutineTableUsage::F_SPECIFIC_CATALOG ,null,'string(name)', ],
		MRoutineTableUsage::FJ_SPECIFIC_SCHEMA  =>[ MRoutineTableUsage::F_SPECIFIC_SCHEMA  ,null,'string(name)', ],
		MRoutineTableUsage::FJ_SPECIFIC_NAME    =>[ MRoutineTableUsage::F_SPECIFIC_NAME    ,null,'string(name)', ],
		MRoutineTableUsage::FJ_ROUTINE_CATALOG  =>[ MRoutineTableUsage::F_ROUTINE_CATALOG  ,null,'string(name)', ],
		MRoutineTableUsage::FJ_ROUTINE_SCHEMA   =>[ MRoutineTableUsage::F_ROUTINE_SCHEMA   ,null,'string(name)', ],
		MRoutineTableUsage::FJ_ROUTINE_NAME     =>[ MRoutineTableUsage::F_ROUTINE_NAME     ,null,'string(name)', ],
		MRoutineTableUsage::FJ_TABLE_CATALOG    =>[ MRoutineTableUsage::F_TABLE_CATALOG    ,null,'string(name)', ],
		MRoutineTableUsage::FJ_TABLE_SCHEMA     =>[ MRoutineTableUsage::F_TABLE_SCHEMA     ,null,'string(name)', ],
		MRoutineTableUsage::FJ_TABLE_NAME       =>[ MRoutineTableUsage::F_TABLE_NAME       ,null,'string(name)', ],
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
		]; 

		protected $fillable = [
		];





}

