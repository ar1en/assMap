<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgTables
 * Representation for db table pg_tables.

 * @property  string(name) schemaname  [1] type:name   
 * @property  string(name) tablename   [2] type:name   
 * @property  string(name) tableowner  [3] type:name   
 * @property  string(name) tablespace  [4] type:name   
 * @property  boolean      hasindexes  [5] type:bool   
 * @property  boolean      hasrules    [6] type:bool   
 * @property  boolean      hastriggers [7] type:bool   
 * @property  boolean      rowsecurity [8] type:bool   
 * @package App\Models\DBModels\Model
 */
class MPgTables extends DBClass {


	const  FJ_HASINDEXES  = 'hasindexes';
	const  FJ_HASRULES    = 'hasrules';
	const  FJ_HASTRIGGERS = 'hastriggers';
	const  FJ_ROWSECURITY = 'rowsecurity';
	const  FJ_SCHEMANAME  = 'schemaname';
	const  FJ_TABLENAME   = 'tablename';
	const  FJ_TABLEOWNER  = 'tableowner';
	const  FJ_TABLESPACE  = 'tablespace';
	const  FT_HASINDEXES  = 'pg_tables.hasindexes';
	const  FT_HASRULES    = 'pg_tables.hasrules';
	const  FT_HASTRIGGERS = 'pg_tables.hastriggers';
	const  FT_ROWSECURITY = 'pg_tables.rowsecurity';
	const  FT_SCHEMANAME  = 'pg_tables.schemaname';
	const  FT_TABLENAME   = 'pg_tables.tablename';
	const  FT_TABLEOWNER  = 'pg_tables.tableowner';
	const  FT_TABLESPACE  = 'pg_tables.tablespace';
	const  F_HASINDEXES   = 'hasindexes';
	const  F_HASRULES     = 'hasrules';
	const  F_HASTRIGGERS  = 'hastriggers';
	const  F_ROWSECURITY  = 'rowsecurity';
	const  F_SCHEMANAME   = 'schemaname';
	const  F_TABLENAME    = 'tablename';
	const  F_TABLEOWNER   = 'tableowner';
	const  F_TABLESPACE   = 'tablespace';

    protected $table = 'pg_tables';

	public static array $jsonable = [
		MPgTables::FJ_SCHEMANAME  =>[ MPgTables::F_SCHEMANAME  ,null,'string(name)', ],
		MPgTables::FJ_TABLENAME   =>[ MPgTables::F_TABLENAME   ,null,'string(name)', ],
		MPgTables::FJ_TABLEOWNER  =>[ MPgTables::F_TABLEOWNER  ,null,'string(name)', ],
		MPgTables::FJ_TABLESPACE  =>[ MPgTables::F_TABLESPACE  ,null,'string(name)', ],
		MPgTables::FJ_HASINDEXES  =>[ MPgTables::F_HASINDEXES  ,null,'boolean',      ],
		MPgTables::FJ_HASRULES    =>[ MPgTables::F_HASRULES    ,null,'boolean',      ],
		MPgTables::FJ_HASTRIGGERS =>[ MPgTables::F_HASTRIGGERS ,null,'boolean',      ],
		MPgTables::FJ_ROWSECURITY =>[ MPgTables::F_ROWSECURITY ,null,'boolean',      ],
	];

		protected $visible = [
			self::F_SCHEMANAME,
			self::F_TABLENAME,
			self::F_TABLEOWNER,
			self::F_TABLESPACE,
			self::F_HASINDEXES,
			self::F_HASRULES,
			self::F_HASTRIGGERS,
			self::F_ROWSECURITY,
		]; 

		protected $fillable = [
		];





}

