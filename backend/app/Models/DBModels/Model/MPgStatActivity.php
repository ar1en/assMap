<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatActivity
 * Representation for db table pg_stat_activity.

 * @property  string(oid)         datid            [1]  type:oid           
 * @property  string(name)        datname          [2]  type:name          
 * @property  int                 pid              [3]  type:int4          
 * @property  int                 leader_pid       [4]  type:int4          
 * @property  string(oid)         usesysid         [5]  type:oid           
 * @property  string(name)        usename          [6]  type:name          
 * @property  string              application_name [7]  type:text          
 * @property  string(inet)        client_addr      [8]  type:inet          
 * @property  string              client_hostname  [9]  type:text          
 * @property  int                 client_port      [10] type:int4          
 * @property  string(timestamptz) backend_start    [11] type:timestamptz   
 * @property  string(timestamptz) xact_start       [12] type:timestamptz   
 * @property  string(timestamptz) query_start      [13] type:timestamptz   
 * @property  string(timestamptz) state_change     [14] type:timestamptz   
 * @property  string              wait_event_type  [15] type:text          
 * @property  string              wait_event       [16] type:text          
 * @property  string              state            [17] type:text          
 * @property  string(xid)         backend_xid      [18] type:xid           
 * @property  string(xid)         backend_xmin     [19] type:xid           
 * @property  int                 query_id         [20] type:int8          
 * @property  string              query            [21] type:text          
 * @property  string              backend_type     [22] type:text          
 * @package App\Models\DBModels\Model
 */
class MPgStatActivity extends DBClass {


	const  FJ_APPLICATION_NAME = 'applicationName';
	const  FJ_BACKEND_START    = 'backendStart';
	const  FJ_BACKEND_TYPE     = 'backendType';
	const  FJ_BACKEND_XID      = 'backendXid';
	const  FJ_BACKEND_XMIN     = 'backendXmin';
	const  FJ_CLIENT_ADDR      = 'clientAddr';
	const  FJ_CLIENT_HOSTNAME  = 'clientHostname';
	const  FJ_CLIENT_PORT      = 'clientPort';
	const  FJ_DATID            = 'datid';
	const  FJ_DATNAME          = 'datname';
	const  FJ_LEADER_PID       = 'leaderPid';
	const  FJ_PID              = 'pid';
	const  FJ_QUERY            = 'query';
	const  FJ_QUERY_ID         = 'queryId';
	const  FJ_QUERY_START      = 'queryStart';
	const  FJ_STATE            = 'state';
	const  FJ_STATE_CHANGE     = 'stateChange';
	const  FJ_USENAME          = 'usename';
	const  FJ_USESYSID         = 'usesysid';
	const  FJ_WAIT_EVENT       = 'waitEvent';
	const  FJ_WAIT_EVENT_TYPE  = 'waitEventType';
	const  FJ_XACT_START       = 'xactStart';
	const  FT_APPLICATION_NAME = 'pg_stat_activity.application_name';
	const  FT_BACKEND_START    = 'pg_stat_activity.backend_start';
	const  FT_BACKEND_TYPE     = 'pg_stat_activity.backend_type';
	const  FT_BACKEND_XID      = 'pg_stat_activity.backend_xid';
	const  FT_BACKEND_XMIN     = 'pg_stat_activity.backend_xmin';
	const  FT_CLIENT_ADDR      = 'pg_stat_activity.client_addr';
	const  FT_CLIENT_HOSTNAME  = 'pg_stat_activity.client_hostname';
	const  FT_CLIENT_PORT      = 'pg_stat_activity.client_port';
	const  FT_DATID            = 'pg_stat_activity.datid';
	const  FT_DATNAME          = 'pg_stat_activity.datname';
	const  FT_LEADER_PID       = 'pg_stat_activity.leader_pid';
	const  FT_PID              = 'pg_stat_activity.pid';
	const  FT_QUERY            = 'pg_stat_activity.query';
	const  FT_QUERY_ID         = 'pg_stat_activity.query_id';
	const  FT_QUERY_START      = 'pg_stat_activity.query_start';
	const  FT_STATE            = 'pg_stat_activity.state';
	const  FT_STATE_CHANGE     = 'pg_stat_activity.state_change';
	const  FT_USENAME          = 'pg_stat_activity.usename';
	const  FT_USESYSID         = 'pg_stat_activity.usesysid';
	const  FT_WAIT_EVENT       = 'pg_stat_activity.wait_event';
	const  FT_WAIT_EVENT_TYPE  = 'pg_stat_activity.wait_event_type';
	const  FT_XACT_START       = 'pg_stat_activity.xact_start';
	const  F_APPLICATION_NAME  = 'application_name';
	const  F_BACKEND_START     = 'backend_start';
	const  F_BACKEND_TYPE      = 'backend_type';
	const  F_BACKEND_XID       = 'backend_xid';
	const  F_BACKEND_XMIN      = 'backend_xmin';
	const  F_CLIENT_ADDR       = 'client_addr';
	const  F_CLIENT_HOSTNAME   = 'client_hostname';
	const  F_CLIENT_PORT       = 'client_port';
	const  F_DATID             = 'datid';
	const  F_DATNAME           = 'datname';
	const  F_LEADER_PID        = 'leader_pid';
	const  F_PID               = 'pid';
	const  F_QUERY             = 'query';
	const  F_QUERY_ID          = 'query_id';
	const  F_QUERY_START       = 'query_start';
	const  F_STATE             = 'state';
	const  F_STATE_CHANGE      = 'state_change';
	const  F_USENAME           = 'usename';
	const  F_USESYSID          = 'usesysid';
	const  F_WAIT_EVENT        = 'wait_event';
	const  F_WAIT_EVENT_TYPE   = 'wait_event_type';
	const  F_XACT_START        = 'xact_start';

    protected $table = 'pg_stat_activity';

	public static array $jsonable = [
		MPgStatActivity::FJ_DATID            =>[ MPgStatActivity::F_DATID            ,null,'string(oid)',         ],
		MPgStatActivity::FJ_DATNAME          =>[ MPgStatActivity::F_DATNAME          ,null,'string(name)',        ],
		MPgStatActivity::FJ_PID              =>[ MPgStatActivity::F_PID              ,null,'number',              ],
		MPgStatActivity::FJ_LEADER_PID       =>[ MPgStatActivity::F_LEADER_PID       ,null,'number',              ],
		MPgStatActivity::FJ_USESYSID         =>[ MPgStatActivity::F_USESYSID         ,null,'string(oid)',         ],
		MPgStatActivity::FJ_USENAME          =>[ MPgStatActivity::F_USENAME          ,null,'string(name)',        ],
		MPgStatActivity::FJ_APPLICATION_NAME =>[ MPgStatActivity::F_APPLICATION_NAME ,null,'string',              ],
		MPgStatActivity::FJ_CLIENT_ADDR      =>[ MPgStatActivity::F_CLIENT_ADDR      ,null,'string(inet)',        ],
		MPgStatActivity::FJ_CLIENT_HOSTNAME  =>[ MPgStatActivity::F_CLIENT_HOSTNAME  ,null,'string',              ],
		MPgStatActivity::FJ_CLIENT_PORT      =>[ MPgStatActivity::F_CLIENT_PORT      ,null,'number',              ],
		MPgStatActivity::FJ_BACKEND_START    =>[ MPgStatActivity::F_BACKEND_START    ,null,'string(timestamptz)', ],
		MPgStatActivity::FJ_XACT_START       =>[ MPgStatActivity::F_XACT_START       ,null,'string(timestamptz)', ],
		MPgStatActivity::FJ_QUERY_START      =>[ MPgStatActivity::F_QUERY_START      ,null,'string(timestamptz)', ],
		MPgStatActivity::FJ_STATE_CHANGE     =>[ MPgStatActivity::F_STATE_CHANGE     ,null,'string(timestamptz)', ],
		MPgStatActivity::FJ_WAIT_EVENT_TYPE  =>[ MPgStatActivity::F_WAIT_EVENT_TYPE  ,null,'string',              ],
		MPgStatActivity::FJ_WAIT_EVENT       =>[ MPgStatActivity::F_WAIT_EVENT       ,null,'string',              ],
		MPgStatActivity::FJ_STATE            =>[ MPgStatActivity::F_STATE            ,null,'string',              ],
		MPgStatActivity::FJ_BACKEND_XID      =>[ MPgStatActivity::F_BACKEND_XID      ,null,'string(xid)',         ],
		MPgStatActivity::FJ_BACKEND_XMIN     =>[ MPgStatActivity::F_BACKEND_XMIN     ,null,'string(xid)',         ],
		MPgStatActivity::FJ_QUERY_ID         =>[ MPgStatActivity::F_QUERY_ID         ,null,'number',              ],
		MPgStatActivity::FJ_QUERY            =>[ MPgStatActivity::F_QUERY            ,null,'string',              ],
		MPgStatActivity::FJ_BACKEND_TYPE     =>[ MPgStatActivity::F_BACKEND_TYPE     ,null,'string',              ],
	];

		protected $visible = [
			self::F_DATID,
			self::F_DATNAME,
			self::F_PID,
			self::F_LEADER_PID,
			self::F_USESYSID,
			self::F_USENAME,
			self::F_APPLICATION_NAME,
			self::F_CLIENT_ADDR,
			self::F_CLIENT_HOSTNAME,
			self::F_CLIENT_PORT,
			self::F_BACKEND_START,
			self::F_XACT_START,
			self::F_QUERY_START,
			self::F_STATE_CHANGE,
			self::F_WAIT_EVENT_TYPE,
			self::F_WAIT_EVENT,
			self::F_STATE,
			self::F_BACKEND_XID,
			self::F_BACKEND_XMIN,
			self::F_QUERY_ID,
			self::F_QUERY,
			self::F_BACKEND_TYPE,
		]; 

		protected $fillable = [
		];





}

