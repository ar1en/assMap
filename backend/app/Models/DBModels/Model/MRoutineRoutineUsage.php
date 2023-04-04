<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MRoutineRoutineUsage
 * Representation for db table routine_routine_usage.

 * @property  string(name) specific_catalog [1] type:name   
 * @property  string(name) specific_schema  [2] type:name   
 * @property  string(name) specific_name    [3] type:name   
 * @property  string(name) routine_catalog  [4] type:name   
 * @property  string(name) routine_schema   [5] type:name   
 * @property  string(name) routine_name     [6] type:name   
 * @package App\Models\DBModels\Model
 */
class MRoutineRoutineUsage extends DBClass {


	const  FJ_ROUTINE_CATALOG  = 'routineCatalog';
	const  FJ_ROUTINE_NAME     = 'routineName';
	const  FJ_ROUTINE_SCHEMA   = 'routineSchema';
	const  FJ_SPECIFIC_CATALOG = 'specificCatalog';
	const  FJ_SPECIFIC_NAME    = 'specificName';
	const  FJ_SPECIFIC_SCHEMA  = 'specificSchema';
	const  FT_ROUTINE_CATALOG  = 'routine_routine_usage.routine_catalog';
	const  FT_ROUTINE_NAME     = 'routine_routine_usage.routine_name';
	const  FT_ROUTINE_SCHEMA   = 'routine_routine_usage.routine_schema';
	const  FT_SPECIFIC_CATALOG = 'routine_routine_usage.specific_catalog';
	const  FT_SPECIFIC_NAME    = 'routine_routine_usage.specific_name';
	const  FT_SPECIFIC_SCHEMA  = 'routine_routine_usage.specific_schema';
	const  F_ROUTINE_CATALOG   = 'routine_catalog';
	const  F_ROUTINE_NAME      = 'routine_name';
	const  F_ROUTINE_SCHEMA    = 'routine_schema';
	const  F_SPECIFIC_CATALOG  = 'specific_catalog';
	const  F_SPECIFIC_NAME     = 'specific_name';
	const  F_SPECIFIC_SCHEMA   = 'specific_schema';

    protected $table = 'routine_routine_usage';

	public static array $jsonable = [
		MRoutineRoutineUsage::FJ_SPECIFIC_CATALOG =>[ MRoutineRoutineUsage::F_SPECIFIC_CATALOG ,null,'string(name)', ],
		MRoutineRoutineUsage::FJ_SPECIFIC_SCHEMA  =>[ MRoutineRoutineUsage::F_SPECIFIC_SCHEMA  ,null,'string(name)', ],
		MRoutineRoutineUsage::FJ_SPECIFIC_NAME    =>[ MRoutineRoutineUsage::F_SPECIFIC_NAME    ,null,'string(name)', ],
		MRoutineRoutineUsage::FJ_ROUTINE_CATALOG  =>[ MRoutineRoutineUsage::F_ROUTINE_CATALOG  ,null,'string(name)', ],
		MRoutineRoutineUsage::FJ_ROUTINE_SCHEMA   =>[ MRoutineRoutineUsage::F_ROUTINE_SCHEMA   ,null,'string(name)', ],
		MRoutineRoutineUsage::FJ_ROUTINE_NAME     =>[ MRoutineRoutineUsage::F_ROUTINE_NAME     ,null,'string(name)', ],
	];

		protected $visible = [
			self::F_SPECIFIC_CATALOG,
			self::F_SPECIFIC_SCHEMA,
			self::F_SPECIFIC_NAME,
			self::F_ROUTINE_CATALOG,
			self::F_ROUTINE_SCHEMA,
			self::F_ROUTINE_NAME,
		]; 

		protected $fillable = [
		];





}

