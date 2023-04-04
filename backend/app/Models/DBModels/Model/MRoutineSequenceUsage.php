<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MRoutineSequenceUsage
 * Representation for db table routine_sequence_usage.

 * @property  string(name) specific_catalog [1] type:name   
 * @property  string(name) specific_schema  [2] type:name   
 * @property  string(name) specific_name    [3] type:name   
 * @property  string(name) routine_catalog  [4] type:name   
 * @property  string(name) routine_schema   [5] type:name   
 * @property  string(name) routine_name     [6] type:name   
 * @property  string(name) sequence_catalog [7] type:name   
 * @property  string(name) sequence_schema  [8] type:name   
 * @property  string(name) sequence_name    [9] type:name   
 * @package App\Models\DBModels\Model
 */
class MRoutineSequenceUsage extends DBClass {


	const  FJ_ROUTINE_CATALOG  = 'routineCatalog';
	const  FJ_ROUTINE_NAME     = 'routineName';
	const  FJ_ROUTINE_SCHEMA   = 'routineSchema';
	const  FJ_SEQUENCE_CATALOG = 'sequenceCatalog';
	const  FJ_SEQUENCE_NAME    = 'sequenceName';
	const  FJ_SEQUENCE_SCHEMA  = 'sequenceSchema';
	const  FJ_SPECIFIC_CATALOG = 'specificCatalog';
	const  FJ_SPECIFIC_NAME    = 'specificName';
	const  FJ_SPECIFIC_SCHEMA  = 'specificSchema';
	const  FT_ROUTINE_CATALOG  = 'routine_sequence_usage.routine_catalog';
	const  FT_ROUTINE_NAME     = 'routine_sequence_usage.routine_name';
	const  FT_ROUTINE_SCHEMA   = 'routine_sequence_usage.routine_schema';
	const  FT_SEQUENCE_CATALOG = 'routine_sequence_usage.sequence_catalog';
	const  FT_SEQUENCE_NAME    = 'routine_sequence_usage.sequence_name';
	const  FT_SEQUENCE_SCHEMA  = 'routine_sequence_usage.sequence_schema';
	const  FT_SPECIFIC_CATALOG = 'routine_sequence_usage.specific_catalog';
	const  FT_SPECIFIC_NAME    = 'routine_sequence_usage.specific_name';
	const  FT_SPECIFIC_SCHEMA  = 'routine_sequence_usage.specific_schema';
	const  F_ROUTINE_CATALOG   = 'routine_catalog';
	const  F_ROUTINE_NAME      = 'routine_name';
	const  F_ROUTINE_SCHEMA    = 'routine_schema';
	const  F_SEQUENCE_CATALOG  = 'sequence_catalog';
	const  F_SEQUENCE_NAME     = 'sequence_name';
	const  F_SEQUENCE_SCHEMA   = 'sequence_schema';
	const  F_SPECIFIC_CATALOG  = 'specific_catalog';
	const  F_SPECIFIC_NAME     = 'specific_name';
	const  F_SPECIFIC_SCHEMA   = 'specific_schema';

    protected $table = 'routine_sequence_usage';

	public static array $jsonable = [
		MRoutineSequenceUsage::FJ_SPECIFIC_CATALOG =>[ MRoutineSequenceUsage::F_SPECIFIC_CATALOG ,null,'string(name)', ],
		MRoutineSequenceUsage::FJ_SPECIFIC_SCHEMA  =>[ MRoutineSequenceUsage::F_SPECIFIC_SCHEMA  ,null,'string(name)', ],
		MRoutineSequenceUsage::FJ_SPECIFIC_NAME    =>[ MRoutineSequenceUsage::F_SPECIFIC_NAME    ,null,'string(name)', ],
		MRoutineSequenceUsage::FJ_ROUTINE_CATALOG  =>[ MRoutineSequenceUsage::F_ROUTINE_CATALOG  ,null,'string(name)', ],
		MRoutineSequenceUsage::FJ_ROUTINE_SCHEMA   =>[ MRoutineSequenceUsage::F_ROUTINE_SCHEMA   ,null,'string(name)', ],
		MRoutineSequenceUsage::FJ_ROUTINE_NAME     =>[ MRoutineSequenceUsage::F_ROUTINE_NAME     ,null,'string(name)', ],
		MRoutineSequenceUsage::FJ_SEQUENCE_CATALOG =>[ MRoutineSequenceUsage::F_SEQUENCE_CATALOG ,null,'string(name)', ],
		MRoutineSequenceUsage::FJ_SEQUENCE_SCHEMA  =>[ MRoutineSequenceUsage::F_SEQUENCE_SCHEMA  ,null,'string(name)', ],
		MRoutineSequenceUsage::FJ_SEQUENCE_NAME    =>[ MRoutineSequenceUsage::F_SEQUENCE_NAME    ,null,'string(name)', ],
	];

		protected $visible = [
			self::F_SPECIFIC_CATALOG,
			self::F_SPECIFIC_SCHEMA,
			self::F_SPECIFIC_NAME,
			self::F_ROUTINE_CATALOG,
			self::F_ROUTINE_SCHEMA,
			self::F_ROUTINE_NAME,
			self::F_SEQUENCE_CATALOG,
			self::F_SEQUENCE_SCHEMA,
			self::F_SEQUENCE_NAME,
		]; 

		protected $fillable = [
		];





}

