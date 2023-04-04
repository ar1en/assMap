<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MCheckConstraintRoutineUsage
 * Representation for db table check_constraint_routine_usage.

 * @property  string(name) constraint_catalog [1] type:name   
 * @property  string(name) constraint_schema  [2] type:name   
 * @property  string(name) constraint_name    [3] type:name   
 * @property  string(name) specific_catalog   [4] type:name   
 * @property  string(name) specific_schema    [5] type:name   
 * @property  string(name) specific_name      [6] type:name   
 * @package App\Models\DBModels\Model
 */
class MCheckConstraintRoutineUsage extends DBClass {


	const  FJ_CONSTRAINT_CATALOG = 'constraintCatalog';
	const  FJ_CONSTRAINT_NAME    = 'constraintName';
	const  FJ_CONSTRAINT_SCHEMA  = 'constraintSchema';
	const  FJ_SPECIFIC_CATALOG   = 'specificCatalog';
	const  FJ_SPECIFIC_NAME      = 'specificName';
	const  FJ_SPECIFIC_SCHEMA    = 'specificSchema';
	const  FT_CONSTRAINT_CATALOG = 'check_constraint_routine_usage.constraint_catalog';
	const  FT_CONSTRAINT_NAME    = 'check_constraint_routine_usage.constraint_name';
	const  FT_CONSTRAINT_SCHEMA  = 'check_constraint_routine_usage.constraint_schema';
	const  FT_SPECIFIC_CATALOG   = 'check_constraint_routine_usage.specific_catalog';
	const  FT_SPECIFIC_NAME      = 'check_constraint_routine_usage.specific_name';
	const  FT_SPECIFIC_SCHEMA    = 'check_constraint_routine_usage.specific_schema';
	const  F_CONSTRAINT_CATALOG  = 'constraint_catalog';
	const  F_CONSTRAINT_NAME     = 'constraint_name';
	const  F_CONSTRAINT_SCHEMA   = 'constraint_schema';
	const  F_SPECIFIC_CATALOG    = 'specific_catalog';
	const  F_SPECIFIC_NAME       = 'specific_name';
	const  F_SPECIFIC_SCHEMA     = 'specific_schema';

    protected $table = 'check_constraint_routine_usage';

	public static array $jsonable = [
		MCheckConstraintRoutineUsage::FJ_CONSTRAINT_CATALOG =>[ MCheckConstraintRoutineUsage::F_CONSTRAINT_CATALOG ,null,'string(name)', ],
		MCheckConstraintRoutineUsage::FJ_CONSTRAINT_SCHEMA  =>[ MCheckConstraintRoutineUsage::F_CONSTRAINT_SCHEMA  ,null,'string(name)', ],
		MCheckConstraintRoutineUsage::FJ_CONSTRAINT_NAME    =>[ MCheckConstraintRoutineUsage::F_CONSTRAINT_NAME    ,null,'string(name)', ],
		MCheckConstraintRoutineUsage::FJ_SPECIFIC_CATALOG   =>[ MCheckConstraintRoutineUsage::F_SPECIFIC_CATALOG   ,null,'string(name)', ],
		MCheckConstraintRoutineUsage::FJ_SPECIFIC_SCHEMA    =>[ MCheckConstraintRoutineUsage::F_SPECIFIC_SCHEMA    ,null,'string(name)', ],
		MCheckConstraintRoutineUsage::FJ_SPECIFIC_NAME      =>[ MCheckConstraintRoutineUsage::F_SPECIFIC_NAME      ,null,'string(name)', ],
	];

		protected $visible = [
			self::F_CONSTRAINT_CATALOG,
			self::F_CONSTRAINT_SCHEMA,
			self::F_CONSTRAINT_NAME,
			self::F_SPECIFIC_CATALOG,
			self::F_SPECIFIC_SCHEMA,
			self::F_SPECIFIC_NAME,
		]; 

		protected $fillable = [
		];





}

