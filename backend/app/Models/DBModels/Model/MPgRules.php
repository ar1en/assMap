<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgRules
 * Representation for db table pg_rules.

 * @property  string(name) schemaname [1] type:name   
 * @property  string(name) tablename  [2] type:name   
 * @property  string(name) rulename   [3] type:name   
 * @property  string       definition [4] type:text   
 * @package App\Models\DBModels\Model
 */
class MPgRules extends DBClass {


	const  FJ_DEFINITION = 'definition';
	const  FJ_RULENAME   = 'rulename';
	const  FJ_SCHEMANAME = 'schemaname';
	const  FJ_TABLENAME  = 'tablename';
	const  FT_DEFINITION = 'pg_rules.definition';
	const  FT_RULENAME   = 'pg_rules.rulename';
	const  FT_SCHEMANAME = 'pg_rules.schemaname';
	const  FT_TABLENAME  = 'pg_rules.tablename';
	const  F_DEFINITION  = 'definition';
	const  F_RULENAME    = 'rulename';
	const  F_SCHEMANAME  = 'schemaname';
	const  F_TABLENAME   = 'tablename';

    protected $table = 'pg_rules';

	public static array $jsonable = [
		MPgRules::FJ_SCHEMANAME =>[ MPgRules::F_SCHEMANAME ,null,'string(name)', ],
		MPgRules::FJ_TABLENAME  =>[ MPgRules::F_TABLENAME  ,null,'string(name)', ],
		MPgRules::FJ_RULENAME   =>[ MPgRules::F_RULENAME   ,null,'string(name)', ],
		MPgRules::FJ_DEFINITION =>[ MPgRules::F_DEFINITION ,null,'string',       ],
	];

		protected $visible = [
			self::F_SCHEMANAME,
			self::F_TABLENAME,
			self::F_RULENAME,
			self::F_DEFINITION,
		]; 

		protected $fillable = [
		];





}

