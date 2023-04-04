<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MViewRoutineUsage
 * Representation for db table view_routine_usage.

 * @property  string(name) table_catalog    [1] type:name   
 * @property  string(name) table_schema     [2] type:name   
 * @property  string(name) table_name       [3] type:name   
 * @property  string(name) specific_catalog [4] type:name   
 * @property  string(name) specific_schema  [5] type:name   
 * @property  string(name) specific_name    [6] type:name   
 * @package App\Models\DBModels\Model
 */
class MViewRoutineUsage extends DBClass {


	const  FJ_SPECIFIC_CATALOG = 'specificCatalog';
	const  FJ_SPECIFIC_NAME    = 'specificName';
	const  FJ_SPECIFIC_SCHEMA  = 'specificSchema';
	const  FJ_TABLE_CATALOG    = 'tableCatalog';
	const  FJ_TABLE_NAME       = 'tableName';
	const  FJ_TABLE_SCHEMA     = 'tableSchema';
	const  FT_SPECIFIC_CATALOG = 'view_routine_usage.specific_catalog';
	const  FT_SPECIFIC_NAME    = 'view_routine_usage.specific_name';
	const  FT_SPECIFIC_SCHEMA  = 'view_routine_usage.specific_schema';
	const  FT_TABLE_CATALOG    = 'view_routine_usage.table_catalog';
	const  FT_TABLE_NAME       = 'view_routine_usage.table_name';
	const  FT_TABLE_SCHEMA     = 'view_routine_usage.table_schema';
	const  F_SPECIFIC_CATALOG  = 'specific_catalog';
	const  F_SPECIFIC_NAME     = 'specific_name';
	const  F_SPECIFIC_SCHEMA   = 'specific_schema';
	const  F_TABLE_CATALOG     = 'table_catalog';
	const  F_TABLE_NAME        = 'table_name';
	const  F_TABLE_SCHEMA      = 'table_schema';

    protected $table = 'view_routine_usage';

	public static array $jsonable = [
		MViewRoutineUsage::FJ_TABLE_CATALOG    =>[ MViewRoutineUsage::F_TABLE_CATALOG    ,null,'string(name)', ],
		MViewRoutineUsage::FJ_TABLE_SCHEMA     =>[ MViewRoutineUsage::F_TABLE_SCHEMA     ,null,'string(name)', ],
		MViewRoutineUsage::FJ_TABLE_NAME       =>[ MViewRoutineUsage::F_TABLE_NAME       ,null,'string(name)', ],
		MViewRoutineUsage::FJ_SPECIFIC_CATALOG =>[ MViewRoutineUsage::F_SPECIFIC_CATALOG ,null,'string(name)', ],
		MViewRoutineUsage::FJ_SPECIFIC_SCHEMA  =>[ MViewRoutineUsage::F_SPECIFIC_SCHEMA  ,null,'string(name)', ],
		MViewRoutineUsage::FJ_SPECIFIC_NAME    =>[ MViewRoutineUsage::F_SPECIFIC_NAME    ,null,'string(name)', ],
	];

		protected $visible = [
			self::F_TABLE_CATALOG,
			self::F_TABLE_SCHEMA,
			self::F_TABLE_NAME,
			self::F_SPECIFIC_CATALOG,
			self::F_SPECIFIC_SCHEMA,
			self::F_SPECIFIC_NAME,
		]; 

		protected $fillable = [
		];





}

