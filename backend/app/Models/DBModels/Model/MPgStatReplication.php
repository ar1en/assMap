<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatReplication
 * Representation for db table pg_stat_replication.

 * @property  int                 pid              [1]  type:int4          
 * @property  string(oid)         usesysid         [2]  type:oid           
 * @property  string(name)        usename          [3]  type:name          
 * @property  string              application_name [4]  type:text          
 * @property  string(inet)        client_addr      [5]  type:inet          
 * @property  string              client_hostname  [6]  type:text          
 * @property  int                 client_port      [7]  type:int4          
 * @property  string(timestamptz) backend_start    [8]  type:timestamptz   
 * @property  string(xid)         backend_xmin     [9]  type:xid           
 * @property  string              state            [10] type:text          
 * @property  string(pg_lsn)      sent_lsn         [11] type:pg_lsn        
 * @property  string(pg_lsn)      write_lsn        [12] type:pg_lsn        
 * @property  string(pg_lsn)      flush_lsn        [13] type:pg_lsn        
 * @property  string(pg_lsn)      replay_lsn       [14] type:pg_lsn        
 * @property  string(interval)    write_lag        [15] type:interval      
 * @property  string(interval)    flush_lag        [16] type:interval      
 * @property  string(interval)    replay_lag       [17] type:interval      
 * @property  int                 sync_priority    [18] type:int4          
 * @property  string              sync_state       [19] type:text          
 * @property  string(timestamptz) reply_time       [20] type:timestamptz   
 * @package App\Models\DBModels\Model
 */
class MPgStatReplication extends DBClass {


	const  FJ_APPLICATION_NAME = 'applicationName';
	const  FJ_BACKEND_START    = 'backendStart';
	const  FJ_BACKEND_XMIN     = 'backendXmin';
	const  FJ_CLIENT_ADDR      = 'clientAddr';
	const  FJ_CLIENT_HOSTNAME  = 'clientHostname';
	const  FJ_CLIENT_PORT      = 'clientPort';
	const  FJ_FLUSH_LAG        = 'flushLag';
	const  FJ_FLUSH_LSN        = 'flushLsn';
	const  FJ_PID              = 'pid';
	const  FJ_REPLAY_LAG       = 'replayLag';
	const  FJ_REPLAY_LSN       = 'replayLsn';
	const  FJ_REPLY_TIME       = 'replyTime';
	const  FJ_SENT_LSN         = 'sentLsn';
	const  FJ_STATE            = 'state';
	const  FJ_SYNC_PRIORITY    = 'syncPriority';
	const  FJ_SYNC_STATE       = 'syncState';
	const  FJ_USENAME          = 'usename';
	const  FJ_USESYSID         = 'usesysid';
	const  FJ_WRITE_LAG        = 'writeLag';
	const  FJ_WRITE_LSN        = 'writeLsn';
	const  FT_APPLICATION_NAME = 'pg_stat_replication.application_name';
	const  FT_BACKEND_START    = 'pg_stat_replication.backend_start';
	const  FT_BACKEND_XMIN     = 'pg_stat_replication.backend_xmin';
	const  FT_CLIENT_ADDR      = 'pg_stat_replication.client_addr';
	const  FT_CLIENT_HOSTNAME  = 'pg_stat_replication.client_hostname';
	const  FT_CLIENT_PORT      = 'pg_stat_replication.client_port';
	const  FT_FLUSH_LAG        = 'pg_stat_replication.flush_lag';
	const  FT_FLUSH_LSN        = 'pg_stat_replication.flush_lsn';
	const  FT_PID              = 'pg_stat_replication.pid';
	const  FT_REPLAY_LAG       = 'pg_stat_replication.replay_lag';
	const  FT_REPLAY_LSN       = 'pg_stat_replication.replay_lsn';
	const  FT_REPLY_TIME       = 'pg_stat_replication.reply_time';
	const  FT_SENT_LSN         = 'pg_stat_replication.sent_lsn';
	const  FT_STATE            = 'pg_stat_replication.state';
	const  FT_SYNC_PRIORITY    = 'pg_stat_replication.sync_priority';
	const  FT_SYNC_STATE       = 'pg_stat_replication.sync_state';
	const  FT_USENAME          = 'pg_stat_replication.usename';
	const  FT_USESYSID         = 'pg_stat_replication.usesysid';
	const  FT_WRITE_LAG        = 'pg_stat_replication.write_lag';
	const  FT_WRITE_LSN        = 'pg_stat_replication.write_lsn';
	const  F_APPLICATION_NAME  = 'application_name';
	const  F_BACKEND_START     = 'backend_start';
	const  F_BACKEND_XMIN      = 'backend_xmin';
	const  F_CLIENT_ADDR       = 'client_addr';
	const  F_CLIENT_HOSTNAME   = 'client_hostname';
	const  F_CLIENT_PORT       = 'client_port';
	const  F_FLUSH_LAG         = 'flush_lag';
	const  F_FLUSH_LSN         = 'flush_lsn';
	const  F_PID               = 'pid';
	const  F_REPLAY_LAG        = 'replay_lag';
	const  F_REPLAY_LSN        = 'replay_lsn';
	const  F_REPLY_TIME        = 'reply_time';
	const  F_SENT_LSN          = 'sent_lsn';
	const  F_STATE             = 'state';
	const  F_SYNC_PRIORITY     = 'sync_priority';
	const  F_SYNC_STATE        = 'sync_state';
	const  F_USENAME           = 'usename';
	const  F_USESYSID          = 'usesysid';
	const  F_WRITE_LAG         = 'write_lag';
	const  F_WRITE_LSN         = 'write_lsn';

    protected $table = 'pg_stat_replication';

	public static array $jsonable = [
		MPgStatReplication::FJ_PID              =>[ MPgStatReplication::F_PID              ,null,'number',              ],
		MPgStatReplication::FJ_USESYSID         =>[ MPgStatReplication::F_USESYSID         ,null,'string(oid)',         ],
		MPgStatReplication::FJ_USENAME          =>[ MPgStatReplication::F_USENAME          ,null,'string(name)',        ],
		MPgStatReplication::FJ_APPLICATION_NAME =>[ MPgStatReplication::F_APPLICATION_NAME ,null,'string',              ],
		MPgStatReplication::FJ_CLIENT_ADDR      =>[ MPgStatReplication::F_CLIENT_ADDR      ,null,'string(inet)',        ],
		MPgStatReplication::FJ_CLIENT_HOSTNAME  =>[ MPgStatReplication::F_CLIENT_HOSTNAME  ,null,'string',              ],
		MPgStatReplication::FJ_CLIENT_PORT      =>[ MPgStatReplication::F_CLIENT_PORT      ,null,'number',              ],
		MPgStatReplication::FJ_BACKEND_START    =>[ MPgStatReplication::F_BACKEND_START    ,null,'string(timestamptz)', ],
		MPgStatReplication::FJ_BACKEND_XMIN     =>[ MPgStatReplication::F_BACKEND_XMIN     ,null,'string(xid)',         ],
		MPgStatReplication::FJ_STATE            =>[ MPgStatReplication::F_STATE            ,null,'string',              ],
		MPgStatReplication::FJ_SENT_LSN         =>[ MPgStatReplication::F_SENT_LSN         ,null,'string(pg_lsn)',      ],
		MPgStatReplication::FJ_WRITE_LSN        =>[ MPgStatReplication::F_WRITE_LSN        ,null,'string(pg_lsn)',      ],
		MPgStatReplication::FJ_FLUSH_LSN        =>[ MPgStatReplication::F_FLUSH_LSN        ,null,'string(pg_lsn)',      ],
		MPgStatReplication::FJ_REPLAY_LSN       =>[ MPgStatReplication::F_REPLAY_LSN       ,null,'string(pg_lsn)',      ],
		MPgStatReplication::FJ_WRITE_LAG        =>[ MPgStatReplication::F_WRITE_LAG        ,null,'string(interval)',    ],
		MPgStatReplication::FJ_FLUSH_LAG        =>[ MPgStatReplication::F_FLUSH_LAG        ,null,'string(interval)',    ],
		MPgStatReplication::FJ_REPLAY_LAG       =>[ MPgStatReplication::F_REPLAY_LAG       ,null,'string(interval)',    ],
		MPgStatReplication::FJ_SYNC_PRIORITY    =>[ MPgStatReplication::F_SYNC_PRIORITY    ,null,'number',              ],
		MPgStatReplication::FJ_SYNC_STATE       =>[ MPgStatReplication::F_SYNC_STATE       ,null,'string',              ],
		MPgStatReplication::FJ_REPLY_TIME       =>[ MPgStatReplication::F_REPLY_TIME       ,null,'string(timestamptz)', ],
	];

		protected $visible = [
			self::F_PID,
			self::F_USESYSID,
			self::F_USENAME,
			self::F_APPLICATION_NAME,
			self::F_CLIENT_ADDR,
			self::F_CLIENT_HOSTNAME,
			self::F_CLIENT_PORT,
			self::F_BACKEND_START,
			self::F_BACKEND_XMIN,
			self::F_STATE,
			self::F_SENT_LSN,
			self::F_WRITE_LSN,
			self::F_FLUSH_LSN,
			self::F_REPLAY_LSN,
			self::F_WRITE_LAG,
			self::F_FLUSH_LAG,
			self::F_REPLAY_LAG,
			self::F_SYNC_PRIORITY,
			self::F_SYNC_STATE,
			self::F_REPLY_TIME,
		]; 

		protected $fillable = [
		];





}

