<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatProgressVacuum
 * Representation for db table pg_stat_progress_vacuum.

 * @property  int          pid                [1]  type:int4   
 * @property  string(oid)  datid              [2]  type:oid    
 * @property  string(name) datname            [3]  type:name   
 * @property  string(oid)  relid              [4]  type:oid    
 * @property  string       phase              [5]  type:text   
 * @property  int          heap_blks_total    [6]  type:int8   
 * @property  int          heap_blks_scanned  [7]  type:int8   
 * @property  int          heap_blks_vacuumed [8]  type:int8   
 * @property  int          index_vacuum_count [9]  type:int8   
 * @property  int          max_dead_tuples    [10] type:int8   
 * @property  int          num_dead_tuples    [11] type:int8   
 * @package App\Models\DBModels\Model
 */
class MPgStatProgressVacuum extends DBClass {


	const  FJ_DATID              = 'datid';
	const  FJ_DATNAME            = 'datname';
	const  FJ_HEAP_BLKS_SCANNED  = 'heapBlksScanned';
	const  FJ_HEAP_BLKS_TOTAL    = 'heapBlksTotal';
	const  FJ_HEAP_BLKS_VACUUMED = 'heapBlksVacuumed';
	const  FJ_INDEX_VACUUM_COUNT = 'indexVacuumCount';
	const  FJ_MAX_DEAD_TUPLES    = 'maxDeadTuples';
	const  FJ_NUM_DEAD_TUPLES    = 'numDeadTuples';
	const  FJ_PHASE              = 'phase';
	const  FJ_PID                = 'pid';
	const  FJ_RELID              = 'relid';
	const  FT_DATID              = 'pg_stat_progress_vacuum.datid';
	const  FT_DATNAME            = 'pg_stat_progress_vacuum.datname';
	const  FT_HEAP_BLKS_SCANNED  = 'pg_stat_progress_vacuum.heap_blks_scanned';
	const  FT_HEAP_BLKS_TOTAL    = 'pg_stat_progress_vacuum.heap_blks_total';
	const  FT_HEAP_BLKS_VACUUMED = 'pg_stat_progress_vacuum.heap_blks_vacuumed';
	const  FT_INDEX_VACUUM_COUNT = 'pg_stat_progress_vacuum.index_vacuum_count';
	const  FT_MAX_DEAD_TUPLES    = 'pg_stat_progress_vacuum.max_dead_tuples';
	const  FT_NUM_DEAD_TUPLES    = 'pg_stat_progress_vacuum.num_dead_tuples';
	const  FT_PHASE              = 'pg_stat_progress_vacuum.phase';
	const  FT_PID                = 'pg_stat_progress_vacuum.pid';
	const  FT_RELID              = 'pg_stat_progress_vacuum.relid';
	const  F_DATID               = 'datid';
	const  F_DATNAME             = 'datname';
	const  F_HEAP_BLKS_SCANNED   = 'heap_blks_scanned';
	const  F_HEAP_BLKS_TOTAL     = 'heap_blks_total';
	const  F_HEAP_BLKS_VACUUMED  = 'heap_blks_vacuumed';
	const  F_INDEX_VACUUM_COUNT  = 'index_vacuum_count';
	const  F_MAX_DEAD_TUPLES     = 'max_dead_tuples';
	const  F_NUM_DEAD_TUPLES     = 'num_dead_tuples';
	const  F_PHASE               = 'phase';
	const  F_PID                 = 'pid';
	const  F_RELID               = 'relid';

    protected $table = 'pg_stat_progress_vacuum';

	public static array $jsonable = [
		MPgStatProgressVacuum::FJ_PID                =>[ MPgStatProgressVacuum::F_PID                ,null,'number',       ],
		MPgStatProgressVacuum::FJ_DATID              =>[ MPgStatProgressVacuum::F_DATID              ,null,'string(oid)',  ],
		MPgStatProgressVacuum::FJ_DATNAME            =>[ MPgStatProgressVacuum::F_DATNAME            ,null,'string(name)', ],
		MPgStatProgressVacuum::FJ_RELID              =>[ MPgStatProgressVacuum::F_RELID              ,null,'string(oid)',  ],
		MPgStatProgressVacuum::FJ_PHASE              =>[ MPgStatProgressVacuum::F_PHASE              ,null,'string',       ],
		MPgStatProgressVacuum::FJ_HEAP_BLKS_TOTAL    =>[ MPgStatProgressVacuum::F_HEAP_BLKS_TOTAL    ,null,'number',       ],
		MPgStatProgressVacuum::FJ_HEAP_BLKS_SCANNED  =>[ MPgStatProgressVacuum::F_HEAP_BLKS_SCANNED  ,null,'number',       ],
		MPgStatProgressVacuum::FJ_HEAP_BLKS_VACUUMED =>[ MPgStatProgressVacuum::F_HEAP_BLKS_VACUUMED ,null,'number',       ],
		MPgStatProgressVacuum::FJ_INDEX_VACUUM_COUNT =>[ MPgStatProgressVacuum::F_INDEX_VACUUM_COUNT ,null,'number',       ],
		MPgStatProgressVacuum::FJ_MAX_DEAD_TUPLES    =>[ MPgStatProgressVacuum::F_MAX_DEAD_TUPLES    ,null,'number',       ],
		MPgStatProgressVacuum::FJ_NUM_DEAD_TUPLES    =>[ MPgStatProgressVacuum::F_NUM_DEAD_TUPLES    ,null,'number',       ],
	];

		protected $visible = [
			self::F_PID,
			self::F_DATID,
			self::F_DATNAME,
			self::F_RELID,
			self::F_PHASE,
			self::F_HEAP_BLKS_TOTAL,
			self::F_HEAP_BLKS_SCANNED,
			self::F_HEAP_BLKS_VACUUMED,
			self::F_INDEX_VACUUM_COUNT,
			self::F_MAX_DEAD_TUPLES,
			self::F_NUM_DEAD_TUPLES,
		]; 

		protected $fillable = [
		];





}

