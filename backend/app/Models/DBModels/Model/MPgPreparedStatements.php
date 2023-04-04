<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgPreparedStatements
 * Representation for db table pg_prepared_statements.

 * @property  string              name            [1] type:text          
 * @property  string              statement       [2] type:text          
 * @property  string(timestamptz) prepare_time    [3] type:timestamptz   
 * @property  string(_regtype)    parameter_types [4] type:_regtype      
 * @property  boolean             from_sql        [5] type:bool          
 * @property  int                 generic_plans   [6] type:int8          
 * @property  int                 custom_plans    [7] type:int8          
 * @package App\Models\DBModels\Model
 */
class MPgPreparedStatements extends DBClass {


	const  FJ_CUSTOM_PLANS    = 'customPlans';
	const  FJ_FROM_SQL        = 'fromSql';
	const  FJ_GENERIC_PLANS   = 'genericPlans';
	const  FJ_NAME            = 'name';
	const  FJ_PARAMETER_TYPES = 'parameterTypes';
	const  FJ_PREPARE_TIME    = 'prepareTime';
	const  FJ_STATEMENT       = 'statement';
	const  FT_CUSTOM_PLANS    = 'pg_prepared_statements.custom_plans';
	const  FT_FROM_SQL        = 'pg_prepared_statements.from_sql';
	const  FT_GENERIC_PLANS   = 'pg_prepared_statements.generic_plans';
	const  FT_NAME            = 'pg_prepared_statements.name';
	const  FT_PARAMETER_TYPES = 'pg_prepared_statements.parameter_types';
	const  FT_PREPARE_TIME    = 'pg_prepared_statements.prepare_time';
	const  FT_STATEMENT       = 'pg_prepared_statements.statement';
	const  F_CUSTOM_PLANS     = 'custom_plans';
	const  F_FROM_SQL         = 'from_sql';
	const  F_GENERIC_PLANS    = 'generic_plans';
	const  F_NAME             = 'name';
	const  F_PARAMETER_TYPES  = 'parameter_types';
	const  F_PREPARE_TIME     = 'prepare_time';
	const  F_STATEMENT        = 'statement';

    protected $table = 'pg_prepared_statements';

	public static array $jsonable = [
		MPgPreparedStatements::FJ_NAME            =>[ MPgPreparedStatements::F_NAME            ,null,'string',              ],
		MPgPreparedStatements::FJ_STATEMENT       =>[ MPgPreparedStatements::F_STATEMENT       ,null,'string',              ],
		MPgPreparedStatements::FJ_PREPARE_TIME    =>[ MPgPreparedStatements::F_PREPARE_TIME    ,null,'string(timestamptz)', ],
		MPgPreparedStatements::FJ_PARAMETER_TYPES =>[ MPgPreparedStatements::F_PARAMETER_TYPES ,null,'string(_regtype)',    ],
		MPgPreparedStatements::FJ_FROM_SQL        =>[ MPgPreparedStatements::F_FROM_SQL        ,null,'boolean',             ],
		MPgPreparedStatements::FJ_GENERIC_PLANS   =>[ MPgPreparedStatements::F_GENERIC_PLANS   ,null,'number',              ],
		MPgPreparedStatements::FJ_CUSTOM_PLANS    =>[ MPgPreparedStatements::F_CUSTOM_PLANS    ,null,'number',              ],
	];

		protected $visible = [
			self::F_NAME,
			self::F_STATEMENT,
			self::F_PREPARE_TIME,
			self::F_PARAMETER_TYPES,
			self::F_FROM_SQL,
			self::F_GENERIC_PLANS,
			self::F_CUSTOM_PLANS,
		]; 

		protected $fillable = [
		];





}

