<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatDatabase
 * Representation for db table pg_stat_database.

 * @property  string(oid)         datid                    [1]  type:oid           
 * @property  string(name)        datname                  [2]  type:name          
 * @property  int                 numbackends              [3]  type:int4          
 * @property  int                 xact_commit              [4]  type:int8          
 * @property  int                 xact_rollback            [5]  type:int8          
 * @property  int                 blks_read                [6]  type:int8          
 * @property  int                 blks_hit                 [7]  type:int8          
 * @property  int                 tup_returned             [8]  type:int8          
 * @property  int                 tup_fetched              [9]  type:int8          
 * @property  int                 tup_inserted             [10] type:int8          
 * @property  int                 tup_updated              [11] type:int8          
 * @property  int                 tup_deleted              [12] type:int8          
 * @property  int                 conflicts                [13] type:int8          
 * @property  int                 temp_files               [14] type:int8          
 * @property  int                 temp_bytes               [15] type:int8          
 * @property  int                 deadlocks                [16] type:int8          
 * @property  int                 checksum_failures        [17] type:int8          
 * @property  string(timestamptz) checksum_last_failure    [18] type:timestamptz   
 * @property  string(float8)      blk_read_time            [19] type:float8        
 * @property  string(float8)      blk_write_time           [20] type:float8        
 * @property  string(float8)      session_time             [21] type:float8        
 * @property  string(float8)      active_time              [22] type:float8        
 * @property  string(float8)      idle_in_transaction_time [23] type:float8        
 * @property  int                 sessions                 [24] type:int8          
 * @property  int                 sessions_abandoned       [25] type:int8          
 * @property  int                 sessions_fatal           [26] type:int8          
 * @property  int                 sessions_killed          [27] type:int8          
 * @property  string(timestamptz) stats_reset              [28] type:timestamptz   
 * @package App\Models\DBModels\Model
 */
class MPgStatDatabase extends DBClass {


	const  FJ_ACTIVE_TIME              = 'activeTime';
	const  FJ_BLKS_HIT                 = 'blksHit';
	const  FJ_BLKS_READ                = 'blksRead';
	const  FJ_BLK_READ_TIME            = 'blkReadTime';
	const  FJ_BLK_WRITE_TIME           = 'blkWriteTime';
	const  FJ_CHECKSUM_FAILURES        = 'checksumFailures';
	const  FJ_CHECKSUM_LAST_FAILURE    = 'checksumLastFailure';
	const  FJ_CONFLICTS                = 'conflicts';
	const  FJ_DATID                    = 'datid';
	const  FJ_DATNAME                  = 'datname';
	const  FJ_DEADLOCKS                = 'deadlocks';
	const  FJ_IDLE_IN_TRANSACTION_TIME = 'idleInTransactionTime';
	const  FJ_NUMBACKENDS              = 'numbackends';
	const  FJ_SESSIONS                 = 'sessions';
	const  FJ_SESSIONS_ABANDONED       = 'sessionsAbandoned';
	const  FJ_SESSIONS_FATAL           = 'sessionsFatal';
	const  FJ_SESSIONS_KILLED          = 'sessionsKilled';
	const  FJ_SESSION_TIME             = 'sessionTime';
	const  FJ_STATS_RESET              = 'statsReset';
	const  FJ_TEMP_BYTES               = 'tempBytes';
	const  FJ_TEMP_FILES               = 'tempFiles';
	const  FJ_TUP_DELETED              = 'tupDeleted';
	const  FJ_TUP_FETCHED              = 'tupFetched';
	const  FJ_TUP_INSERTED             = 'tupInserted';
	const  FJ_TUP_RETURNED             = 'tupReturned';
	const  FJ_TUP_UPDATED              = 'tupUpdated';
	const  FJ_XACT_COMMIT              = 'xactCommit';
	const  FJ_XACT_ROLLBACK            = 'xactRollback';
	const  FT_ACTIVE_TIME              = 'pg_stat_database.active_time';
	const  FT_BLKS_HIT                 = 'pg_stat_database.blks_hit';
	const  FT_BLKS_READ                = 'pg_stat_database.blks_read';
	const  FT_BLK_READ_TIME            = 'pg_stat_database.blk_read_time';
	const  FT_BLK_WRITE_TIME           = 'pg_stat_database.blk_write_time';
	const  FT_CHECKSUM_FAILURES        = 'pg_stat_database.checksum_failures';
	const  FT_CHECKSUM_LAST_FAILURE    = 'pg_stat_database.checksum_last_failure';
	const  FT_CONFLICTS                = 'pg_stat_database.conflicts';
	const  FT_DATID                    = 'pg_stat_database.datid';
	const  FT_DATNAME                  = 'pg_stat_database.datname';
	const  FT_DEADLOCKS                = 'pg_stat_database.deadlocks';
	const  FT_IDLE_IN_TRANSACTION_TIME = 'pg_stat_database.idle_in_transaction_time';
	const  FT_NUMBACKENDS              = 'pg_stat_database.numbackends';
	const  FT_SESSIONS                 = 'pg_stat_database.sessions';
	const  FT_SESSIONS_ABANDONED       = 'pg_stat_database.sessions_abandoned';
	const  FT_SESSIONS_FATAL           = 'pg_stat_database.sessions_fatal';
	const  FT_SESSIONS_KILLED          = 'pg_stat_database.sessions_killed';
	const  FT_SESSION_TIME             = 'pg_stat_database.session_time';
	const  FT_STATS_RESET              = 'pg_stat_database.stats_reset';
	const  FT_TEMP_BYTES               = 'pg_stat_database.temp_bytes';
	const  FT_TEMP_FILES               = 'pg_stat_database.temp_files';
	const  FT_TUP_DELETED              = 'pg_stat_database.tup_deleted';
	const  FT_TUP_FETCHED              = 'pg_stat_database.tup_fetched';
	const  FT_TUP_INSERTED             = 'pg_stat_database.tup_inserted';
	const  FT_TUP_RETURNED             = 'pg_stat_database.tup_returned';
	const  FT_TUP_UPDATED              = 'pg_stat_database.tup_updated';
	const  FT_XACT_COMMIT              = 'pg_stat_database.xact_commit';
	const  FT_XACT_ROLLBACK            = 'pg_stat_database.xact_rollback';
	const  F_ACTIVE_TIME               = 'active_time';
	const  F_BLKS_HIT                  = 'blks_hit';
	const  F_BLKS_READ                 = 'blks_read';
	const  F_BLK_READ_TIME             = 'blk_read_time';
	const  F_BLK_WRITE_TIME            = 'blk_write_time';
	const  F_CHECKSUM_FAILURES         = 'checksum_failures';
	const  F_CHECKSUM_LAST_FAILURE     = 'checksum_last_failure';
	const  F_CONFLICTS                 = 'conflicts';
	const  F_DATID                     = 'datid';
	const  F_DATNAME                   = 'datname';
	const  F_DEADLOCKS                 = 'deadlocks';
	const  F_IDLE_IN_TRANSACTION_TIME  = 'idle_in_transaction_time';
	const  F_NUMBACKENDS               = 'numbackends';
	const  F_SESSIONS                  = 'sessions';
	const  F_SESSIONS_ABANDONED        = 'sessions_abandoned';
	const  F_SESSIONS_FATAL            = 'sessions_fatal';
	const  F_SESSIONS_KILLED           = 'sessions_killed';
	const  F_SESSION_TIME              = 'session_time';
	const  F_STATS_RESET               = 'stats_reset';
	const  F_TEMP_BYTES                = 'temp_bytes';
	const  F_TEMP_FILES                = 'temp_files';
	const  F_TUP_DELETED               = 'tup_deleted';
	const  F_TUP_FETCHED               = 'tup_fetched';
	const  F_TUP_INSERTED              = 'tup_inserted';
	const  F_TUP_RETURNED              = 'tup_returned';
	const  F_TUP_UPDATED               = 'tup_updated';
	const  F_XACT_COMMIT               = 'xact_commit';
	const  F_XACT_ROLLBACK             = 'xact_rollback';

    protected $table = 'pg_stat_database';

	public static array $jsonable = [
		MPgStatDatabase::FJ_DATID                    =>[ MPgStatDatabase::F_DATID                    ,null,'string(oid)',         ],
		MPgStatDatabase::FJ_DATNAME                  =>[ MPgStatDatabase::F_DATNAME                  ,null,'string(name)',        ],
		MPgStatDatabase::FJ_NUMBACKENDS              =>[ MPgStatDatabase::F_NUMBACKENDS              ,null,'number',              ],
		MPgStatDatabase::FJ_XACT_COMMIT              =>[ MPgStatDatabase::F_XACT_COMMIT              ,null,'number',              ],
		MPgStatDatabase::FJ_XACT_ROLLBACK            =>[ MPgStatDatabase::F_XACT_ROLLBACK            ,null,'number',              ],
		MPgStatDatabase::FJ_BLKS_READ                =>[ MPgStatDatabase::F_BLKS_READ                ,null,'number',              ],
		MPgStatDatabase::FJ_BLKS_HIT                 =>[ MPgStatDatabase::F_BLKS_HIT                 ,null,'number',              ],
		MPgStatDatabase::FJ_TUP_RETURNED             =>[ MPgStatDatabase::F_TUP_RETURNED             ,null,'number',              ],
		MPgStatDatabase::FJ_TUP_FETCHED              =>[ MPgStatDatabase::F_TUP_FETCHED              ,null,'number',              ],
		MPgStatDatabase::FJ_TUP_INSERTED             =>[ MPgStatDatabase::F_TUP_INSERTED             ,null,'number',              ],
		MPgStatDatabase::FJ_TUP_UPDATED              =>[ MPgStatDatabase::F_TUP_UPDATED              ,null,'number',              ],
		MPgStatDatabase::FJ_TUP_DELETED              =>[ MPgStatDatabase::F_TUP_DELETED              ,null,'number',              ],
		MPgStatDatabase::FJ_CONFLICTS                =>[ MPgStatDatabase::F_CONFLICTS                ,null,'number',              ],
		MPgStatDatabase::FJ_TEMP_FILES               =>[ MPgStatDatabase::F_TEMP_FILES               ,null,'number',              ],
		MPgStatDatabase::FJ_TEMP_BYTES               =>[ MPgStatDatabase::F_TEMP_BYTES               ,null,'number',              ],
		MPgStatDatabase::FJ_DEADLOCKS                =>[ MPgStatDatabase::F_DEADLOCKS                ,null,'number',              ],
		MPgStatDatabase::FJ_CHECKSUM_FAILURES        =>[ MPgStatDatabase::F_CHECKSUM_FAILURES        ,null,'number',              ],
		MPgStatDatabase::FJ_CHECKSUM_LAST_FAILURE    =>[ MPgStatDatabase::F_CHECKSUM_LAST_FAILURE    ,null,'string(timestamptz)', ],
		MPgStatDatabase::FJ_BLK_READ_TIME            =>[ MPgStatDatabase::F_BLK_READ_TIME            ,null,'string(float8)',      ],
		MPgStatDatabase::FJ_BLK_WRITE_TIME           =>[ MPgStatDatabase::F_BLK_WRITE_TIME           ,null,'string(float8)',      ],
		MPgStatDatabase::FJ_SESSION_TIME             =>[ MPgStatDatabase::F_SESSION_TIME             ,null,'string(float8)',      ],
		MPgStatDatabase::FJ_ACTIVE_TIME              =>[ MPgStatDatabase::F_ACTIVE_TIME              ,null,'string(float8)',      ],
		MPgStatDatabase::FJ_IDLE_IN_TRANSACTION_TIME =>[ MPgStatDatabase::F_IDLE_IN_TRANSACTION_TIME ,null,'string(float8)',      ],
		MPgStatDatabase::FJ_SESSIONS                 =>[ MPgStatDatabase::F_SESSIONS                 ,null,'number',              ],
		MPgStatDatabase::FJ_SESSIONS_ABANDONED       =>[ MPgStatDatabase::F_SESSIONS_ABANDONED       ,null,'number',              ],
		MPgStatDatabase::FJ_SESSIONS_FATAL           =>[ MPgStatDatabase::F_SESSIONS_FATAL           ,null,'number',              ],
		MPgStatDatabase::FJ_SESSIONS_KILLED          =>[ MPgStatDatabase::F_SESSIONS_KILLED          ,null,'number',              ],
		MPgStatDatabase::FJ_STATS_RESET              =>[ MPgStatDatabase::F_STATS_RESET              ,null,'string(timestamptz)', ],
	];

		protected $visible = [
			self::F_DATID,
			self::F_DATNAME,
			self::F_NUMBACKENDS,
			self::F_XACT_COMMIT,
			self::F_XACT_ROLLBACK,
			self::F_BLKS_READ,
			self::F_BLKS_HIT,
			self::F_TUP_RETURNED,
			self::F_TUP_FETCHED,
			self::F_TUP_INSERTED,
			self::F_TUP_UPDATED,
			self::F_TUP_DELETED,
			self::F_CONFLICTS,
			self::F_TEMP_FILES,
			self::F_TEMP_BYTES,
			self::F_DEADLOCKS,
			self::F_CHECKSUM_FAILURES,
			self::F_CHECKSUM_LAST_FAILURE,
			self::F_BLK_READ_TIME,
			self::F_BLK_WRITE_TIME,
			self::F_SESSION_TIME,
			self::F_ACTIVE_TIME,
			self::F_IDLE_IN_TRANSACTION_TIME,
			self::F_SESSIONS,
			self::F_SESSIONS_ABANDONED,
			self::F_SESSIONS_FATAL,
			self::F_SESSIONS_KILLED,
			self::F_STATS_RESET,
		]; 

		protected $fillable = [
		];





}

