<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatProgressCreateIndex
 * Representation for db table pg_stat_progress_create_index.

 * @property  int          pid                [1]  type:int4   
 * @property  string(oid)  datid              [2]  type:oid    
 * @property  string(name) datname            [3]  type:name   
 * @property  string(oid)  relid              [4]  type:oid    
 * @property  string(oid)  index_relid        [5]  type:oid    
 * @property  string       command            [6]  type:text   
 * @property  string       phase              [7]  type:text   
 * @property  int          lockers_total      [8]  type:int8   
 * @property  int          lockers_done       [9]  type:int8   
 * @property  int          current_locker_pid [10] type:int8   
 * @property  int          blocks_total       [11] type:int8   
 * @property  int          blocks_done        [12] type:int8   
 * @property  int          tuples_total       [13] type:int8   
 * @property  int          tuples_done        [14] type:int8   
 * @property  int          partitions_total   [15] type:int8   
 * @property  int          partitions_done    [16] type:int8   
 * @package App\Models\DBModels\Model
 */
class MPgStatProgressCreateIndex extends DBClass {


	const  FJ_BLOCKS_DONE        = 'blocksDone';
	const  FJ_BLOCKS_TOTAL       = 'blocksTotal';
	const  FJ_COMMAND            = 'command';
	const  FJ_CURRENT_LOCKER_PID = 'currentLockerPid';
	const  FJ_DATID              = 'datid';
	const  FJ_DATNAME            = 'datname';
	const  FJ_INDEX_RELID        = 'indexRelid';
	const  FJ_LOCKERS_DONE       = 'lockersDone';
	const  FJ_LOCKERS_TOTAL      = 'lockersTotal';
	const  FJ_PARTITIONS_DONE    = 'partitionsDone';
	const  FJ_PARTITIONS_TOTAL   = 'partitionsTotal';
	const  FJ_PHASE              = 'phase';
	const  FJ_PID                = 'pid';
	const  FJ_RELID              = 'relid';
	const  FJ_TUPLES_DONE        = 'tuplesDone';
	const  FJ_TUPLES_TOTAL       = 'tuplesTotal';
	const  FT_BLOCKS_DONE        = 'pg_stat_progress_create_index.blocks_done';
	const  FT_BLOCKS_TOTAL       = 'pg_stat_progress_create_index.blocks_total';
	const  FT_COMMAND            = 'pg_stat_progress_create_index.command';
	const  FT_CURRENT_LOCKER_PID = 'pg_stat_progress_create_index.current_locker_pid';
	const  FT_DATID              = 'pg_stat_progress_create_index.datid';
	const  FT_DATNAME            = 'pg_stat_progress_create_index.datname';
	const  FT_INDEX_RELID        = 'pg_stat_progress_create_index.index_relid';
	const  FT_LOCKERS_DONE       = 'pg_stat_progress_create_index.lockers_done';
	const  FT_LOCKERS_TOTAL      = 'pg_stat_progress_create_index.lockers_total';
	const  FT_PARTITIONS_DONE    = 'pg_stat_progress_create_index.partitions_done';
	const  FT_PARTITIONS_TOTAL   = 'pg_stat_progress_create_index.partitions_total';
	const  FT_PHASE              = 'pg_stat_progress_create_index.phase';
	const  FT_PID                = 'pg_stat_progress_create_index.pid';
	const  FT_RELID              = 'pg_stat_progress_create_index.relid';
	const  FT_TUPLES_DONE        = 'pg_stat_progress_create_index.tuples_done';
	const  FT_TUPLES_TOTAL       = 'pg_stat_progress_create_index.tuples_total';
	const  F_BLOCKS_DONE         = 'blocks_done';
	const  F_BLOCKS_TOTAL        = 'blocks_total';
	const  F_COMMAND             = 'command';
	const  F_CURRENT_LOCKER_PID  = 'current_locker_pid';
	const  F_DATID               = 'datid';
	const  F_DATNAME             = 'datname';
	const  F_INDEX_RELID         = 'index_relid';
	const  F_LOCKERS_DONE        = 'lockers_done';
	const  F_LOCKERS_TOTAL       = 'lockers_total';
	const  F_PARTITIONS_DONE     = 'partitions_done';
	const  F_PARTITIONS_TOTAL    = 'partitions_total';
	const  F_PHASE               = 'phase';
	const  F_PID                 = 'pid';
	const  F_RELID               = 'relid';
	const  F_TUPLES_DONE         = 'tuples_done';
	const  F_TUPLES_TOTAL        = 'tuples_total';

    protected $table = 'pg_stat_progress_create_index';

	public static array $jsonable = [
		MPgStatProgressCreateIndex::FJ_PID                =>[ MPgStatProgressCreateIndex::F_PID                ,null,'number',       ],
		MPgStatProgressCreateIndex::FJ_DATID              =>[ MPgStatProgressCreateIndex::F_DATID              ,null,'string(oid)',  ],
		MPgStatProgressCreateIndex::FJ_DATNAME            =>[ MPgStatProgressCreateIndex::F_DATNAME            ,null,'string(name)', ],
		MPgStatProgressCreateIndex::FJ_RELID              =>[ MPgStatProgressCreateIndex::F_RELID              ,null,'string(oid)',  ],
		MPgStatProgressCreateIndex::FJ_INDEX_RELID        =>[ MPgStatProgressCreateIndex::F_INDEX_RELID        ,null,'string(oid)',  ],
		MPgStatProgressCreateIndex::FJ_COMMAND            =>[ MPgStatProgressCreateIndex::F_COMMAND            ,null,'string',       ],
		MPgStatProgressCreateIndex::FJ_PHASE              =>[ MPgStatProgressCreateIndex::F_PHASE              ,null,'string',       ],
		MPgStatProgressCreateIndex::FJ_LOCKERS_TOTAL      =>[ MPgStatProgressCreateIndex::F_LOCKERS_TOTAL      ,null,'number',       ],
		MPgStatProgressCreateIndex::FJ_LOCKERS_DONE       =>[ MPgStatProgressCreateIndex::F_LOCKERS_DONE       ,null,'number',       ],
		MPgStatProgressCreateIndex::FJ_CURRENT_LOCKER_PID =>[ MPgStatProgressCreateIndex::F_CURRENT_LOCKER_PID ,null,'number',       ],
		MPgStatProgressCreateIndex::FJ_BLOCKS_TOTAL       =>[ MPgStatProgressCreateIndex::F_BLOCKS_TOTAL       ,null,'number',       ],
		MPgStatProgressCreateIndex::FJ_BLOCKS_DONE        =>[ MPgStatProgressCreateIndex::F_BLOCKS_DONE        ,null,'number',       ],
		MPgStatProgressCreateIndex::FJ_TUPLES_TOTAL       =>[ MPgStatProgressCreateIndex::F_TUPLES_TOTAL       ,null,'number',       ],
		MPgStatProgressCreateIndex::FJ_TUPLES_DONE        =>[ MPgStatProgressCreateIndex::F_TUPLES_DONE        ,null,'number',       ],
		MPgStatProgressCreateIndex::FJ_PARTITIONS_TOTAL   =>[ MPgStatProgressCreateIndex::F_PARTITIONS_TOTAL   ,null,'number',       ],
		MPgStatProgressCreateIndex::FJ_PARTITIONS_DONE    =>[ MPgStatProgressCreateIndex::F_PARTITIONS_DONE    ,null,'number',       ],
	];

		protected $visible = [
			self::F_PID,
			self::F_DATID,
			self::F_DATNAME,
			self::F_RELID,
			self::F_INDEX_RELID,
			self::F_COMMAND,
			self::F_PHASE,
			self::F_LOCKERS_TOTAL,
			self::F_LOCKERS_DONE,
			self::F_CURRENT_LOCKER_PID,
			self::F_BLOCKS_TOTAL,
			self::F_BLOCKS_DONE,
			self::F_TUPLES_TOTAL,
			self::F_TUPLES_DONE,
			self::F_PARTITIONS_TOTAL,
			self::F_PARTITIONS_DONE,
		]; 

		protected $fillable = [
		];





}

