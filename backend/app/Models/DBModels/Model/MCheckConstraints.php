<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MCheckConstraints
 * Representation for db table check_constraints.

 * @property  string(name) constraint_catalog [1] type:name      
 * @property  string(name) constraint_schema  [2] type:name      
 * @property  string(name) constraint_name    [3] type:name      
 * @property  string       check_clause       [4] type:varchar   
 * @package App\Models\DBModels\Model
 */
class MCheckConstraints extends DBClass {


	const  FJ_CHECK_CLAUSE       = 'checkClause';
	const  FJ_CONSTRAINT_CATALOG = 'constraintCatalog';
	const  FJ_CONSTRAINT_NAME    = 'constraintName';
	const  FJ_CONSTRAINT_SCHEMA  = 'constraintSchema';
	const  FT_CHECK_CLAUSE       = 'check_constraints.check_clause';
	const  FT_CONSTRAINT_CATALOG = 'check_constraints.constraint_catalog';
	const  FT_CONSTRAINT_NAME    = 'check_constraints.constraint_name';
	const  FT_CONSTRAINT_SCHEMA  = 'check_constraints.constraint_schema';
	const  F_CHECK_CLAUSE        = 'check_clause';
	const  F_CONSTRAINT_CATALOG  = 'constraint_catalog';
	const  F_CONSTRAINT_NAME     = 'constraint_name';
	const  F_CONSTRAINT_SCHEMA   = 'constraint_schema';

    protected $table = 'check_constraints';

	public static array $jsonable = [
		MCheckConstraints::FJ_CONSTRAINT_CATALOG =>[ MCheckConstraints::F_CONSTRAINT_CATALOG ,null,'string(name)', ],
		MCheckConstraints::FJ_CONSTRAINT_SCHEMA  =>[ MCheckConstraints::F_CONSTRAINT_SCHEMA  ,null,'string(name)', ],
		MCheckConstraints::FJ_CONSTRAINT_NAME    =>[ MCheckConstraints::F_CONSTRAINT_NAME    ,null,'string(name)', ],
		MCheckConstraints::FJ_CHECK_CLAUSE       =>[ MCheckConstraints::F_CHECK_CLAUSE       ,null,'string',       ],
	];

		protected $visible = [
			self::F_CONSTRAINT_CATALOG,
			self::F_CONSTRAINT_SCHEMA,
			self::F_CONSTRAINT_NAME,
			self::F_CHECK_CLAUSE,
		]; 

		protected $fillable = [
		];





}

