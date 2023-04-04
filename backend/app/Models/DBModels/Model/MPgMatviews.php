<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgMatviews
 * Representation for db table pg_matviews.

 * @property  string(name) schemaname   [1] type:name   
 * @property  string(name) matviewname  [2] type:name   
 * @property  string(name) matviewowner [3] type:name   
 * @property  string(name) tablespace   [4] type:name   
 * @property  boolean      hasindexes   [5] type:bool   
 * @property  boolean      ispopulated  [6] type:bool   
 * @property  string       definition   [7] type:text   
 * @package App\Models\DBModels\Model
 */
class MPgMatviews extends DBClass {


	const  FJ_DEFINITION   = 'definition';
	const  FJ_HASINDEXES   = 'hasindexes';
	const  FJ_ISPOPULATED  = 'ispopulated';
	const  FJ_MATVIEWNAME  = 'matviewname';
	const  FJ_MATVIEWOWNER = 'matviewowner';
	const  FJ_SCHEMANAME   = 'schemaname';
	const  FJ_TABLESPACE   = 'tablespace';
	const  FT_DEFINITION   = 'pg_matviews.definition';
	const  FT_HASINDEXES   = 'pg_matviews.hasindexes';
	const  FT_ISPOPULATED  = 'pg_matviews.ispopulated';
	const  FT_MATVIEWNAME  = 'pg_matviews.matviewname';
	const  FT_MATVIEWOWNER = 'pg_matviews.matviewowner';
	const  FT_SCHEMANAME   = 'pg_matviews.schemaname';
	const  FT_TABLESPACE   = 'pg_matviews.tablespace';
	const  F_DEFINITION    = 'definition';
	const  F_HASINDEXES    = 'hasindexes';
	const  F_ISPOPULATED   = 'ispopulated';
	const  F_MATVIEWNAME   = 'matviewname';
	const  F_MATVIEWOWNER  = 'matviewowner';
	const  F_SCHEMANAME    = 'schemaname';
	const  F_TABLESPACE    = 'tablespace';

    protected $table = 'pg_matviews';

	public static array $jsonable = [
		MPgMatviews::FJ_SCHEMANAME   =>[ MPgMatviews::F_SCHEMANAME   ,null,'string(name)', ],
		MPgMatviews::FJ_MATVIEWNAME  =>[ MPgMatviews::F_MATVIEWNAME  ,null,'string(name)', ],
		MPgMatviews::FJ_MATVIEWOWNER =>[ MPgMatviews::F_MATVIEWOWNER ,null,'string(name)', ],
		MPgMatviews::FJ_TABLESPACE   =>[ MPgMatviews::F_TABLESPACE   ,null,'string(name)', ],
		MPgMatviews::FJ_HASINDEXES   =>[ MPgMatviews::F_HASINDEXES   ,null,'boolean',      ],
		MPgMatviews::FJ_ISPOPULATED  =>[ MPgMatviews::F_ISPOPULATED  ,null,'boolean',      ],
		MPgMatviews::FJ_DEFINITION   =>[ MPgMatviews::F_DEFINITION   ,null,'string',       ],
	];

		protected $visible = [
			self::F_SCHEMANAME,
			self::F_MATVIEWNAME,
			self::F_MATVIEWOWNER,
			self::F_TABLESPACE,
			self::F_HASINDEXES,
			self::F_ISPOPULATED,
			self::F_DEFINITION,
		]; 

		protected $fillable = [
		];





}

