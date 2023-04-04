<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatUserFunctions
 * Representation for db table pg_stat_user_functions.

 * @property  string(oid)    funcid     [1] type:oid      
 * @property  string(name)   schemaname [2] type:name     
 * @property  string(name)   funcname   [3] type:name     
 * @property  int            calls      [4] type:int8     
 * @property  string(float8) total_time [5] type:float8   
 * @property  string(float8) self_time  [6] type:float8   
 * @package App\Models\DBModels\Model
 */
class MPgStatUserFunctions extends DBClass {


	const  FJ_CALLS      = 'calls';
	const  FJ_FUNCID     = 'funcid';
	const  FJ_FUNCNAME   = 'funcname';
	const  FJ_SCHEMANAME = 'schemaname';
	const  FJ_SELF_TIME  = 'selfTime';
	const  FJ_TOTAL_TIME = 'totalTime';
	const  FT_CALLS      = 'pg_stat_user_functions.calls';
	const  FT_FUNCID     = 'pg_stat_user_functions.funcid';
	const  FT_FUNCNAME   = 'pg_stat_user_functions.funcname';
	const  FT_SCHEMANAME = 'pg_stat_user_functions.schemaname';
	const  FT_SELF_TIME  = 'pg_stat_user_functions.self_time';
	const  FT_TOTAL_TIME = 'pg_stat_user_functions.total_time';
	const  F_CALLS       = 'calls';
	const  F_FUNCID      = 'funcid';
	const  F_FUNCNAME    = 'funcname';
	const  F_SCHEMANAME  = 'schemaname';
	const  F_SELF_TIME   = 'self_time';
	const  F_TOTAL_TIME  = 'total_time';

    protected $table = 'pg_stat_user_functions';

	public static array $jsonable = [
		MPgStatUserFunctions::FJ_FUNCID     =>[ MPgStatUserFunctions::F_FUNCID     ,null,'string(oid)',    ],
		MPgStatUserFunctions::FJ_SCHEMANAME =>[ MPgStatUserFunctions::F_SCHEMANAME ,null,'string(name)',   ],
		MPgStatUserFunctions::FJ_FUNCNAME   =>[ MPgStatUserFunctions::F_FUNCNAME   ,null,'string(name)',   ],
		MPgStatUserFunctions::FJ_CALLS      =>[ MPgStatUserFunctions::F_CALLS      ,null,'number',         ],
		MPgStatUserFunctions::FJ_TOTAL_TIME =>[ MPgStatUserFunctions::F_TOTAL_TIME ,null,'string(float8)', ],
		MPgStatUserFunctions::FJ_SELF_TIME  =>[ MPgStatUserFunctions::F_SELF_TIME  ,null,'string(float8)', ],
	];

		protected $visible = [
			self::F_FUNCID,
			self::F_SCHEMANAME,
			self::F_FUNCNAME,
			self::F_CALLS,
			self::F_TOTAL_TIME,
			self::F_SELF_TIME,
		]; 

		protected $fillable = [
		];





}

