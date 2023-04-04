<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatDatabaseConflicts
 * Representation for db table pg_stat_database_conflicts.

 * @property  string(oid)  datid            [1] type:oid    
 * @property  string(name) datname          [2] type:name   
 * @property  int          confl_tablespace [3] type:int8   
 * @property  int          confl_lock       [4] type:int8   
 * @property  int          confl_snapshot   [5] type:int8   
 * @property  int          confl_bufferpin  [6] type:int8   
 * @property  int          confl_deadlock   [7] type:int8   
 * @package App\Models\DBModels\Model
 */
class MPgStatDatabaseConflicts extends DBClass {


	const  FJ_CONFL_BUFFERPIN  = 'conflBufferpin';
	const  FJ_CONFL_DEADLOCK   = 'conflDeadlock';
	const  FJ_CONFL_LOCK       = 'conflLock';
	const  FJ_CONFL_SNAPSHOT   = 'conflSnapshot';
	const  FJ_CONFL_TABLESPACE = 'conflTablespace';
	const  FJ_DATID            = 'datid';
	const  FJ_DATNAME          = 'datname';
	const  FT_CONFL_BUFFERPIN  = 'pg_stat_database_conflicts.confl_bufferpin';
	const  FT_CONFL_DEADLOCK   = 'pg_stat_database_conflicts.confl_deadlock';
	const  FT_CONFL_LOCK       = 'pg_stat_database_conflicts.confl_lock';
	const  FT_CONFL_SNAPSHOT   = 'pg_stat_database_conflicts.confl_snapshot';
	const  FT_CONFL_TABLESPACE = 'pg_stat_database_conflicts.confl_tablespace';
	const  FT_DATID            = 'pg_stat_database_conflicts.datid';
	const  FT_DATNAME          = 'pg_stat_database_conflicts.datname';
	const  F_CONFL_BUFFERPIN   = 'confl_bufferpin';
	const  F_CONFL_DEADLOCK    = 'confl_deadlock';
	const  F_CONFL_LOCK        = 'confl_lock';
	const  F_CONFL_SNAPSHOT    = 'confl_snapshot';
	const  F_CONFL_TABLESPACE  = 'confl_tablespace';
	const  F_DATID             = 'datid';
	const  F_DATNAME           = 'datname';

    protected $table = 'pg_stat_database_conflicts';

	public static array $jsonable = [
		MPgStatDatabaseConflicts::FJ_DATID            =>[ MPgStatDatabaseConflicts::F_DATID            ,null,'string(oid)',  ],
		MPgStatDatabaseConflicts::FJ_DATNAME          =>[ MPgStatDatabaseConflicts::F_DATNAME          ,null,'string(name)', ],
		MPgStatDatabaseConflicts::FJ_CONFL_TABLESPACE =>[ MPgStatDatabaseConflicts::F_CONFL_TABLESPACE ,null,'number',       ],
		MPgStatDatabaseConflicts::FJ_CONFL_LOCK       =>[ MPgStatDatabaseConflicts::F_CONFL_LOCK       ,null,'number',       ],
		MPgStatDatabaseConflicts::FJ_CONFL_SNAPSHOT   =>[ MPgStatDatabaseConflicts::F_CONFL_SNAPSHOT   ,null,'number',       ],
		MPgStatDatabaseConflicts::FJ_CONFL_BUFFERPIN  =>[ MPgStatDatabaseConflicts::F_CONFL_BUFFERPIN  ,null,'number',       ],
		MPgStatDatabaseConflicts::FJ_CONFL_DEADLOCK   =>[ MPgStatDatabaseConflicts::F_CONFL_DEADLOCK   ,null,'number',       ],
	];

		protected $visible = [
			self::F_DATID,
			self::F_DATNAME,
			self::F_CONFL_TABLESPACE,
			self::F_CONFL_LOCK,
			self::F_CONFL_SNAPSHOT,
			self::F_CONFL_BUFFERPIN,
			self::F_CONFL_DEADLOCK,
		]; 

		protected $fillable = [
		];





}

