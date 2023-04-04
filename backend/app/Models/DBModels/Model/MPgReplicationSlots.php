<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgReplicationSlots
 * Representation for db table pg_replication_slots.

 * @property  string(name)   slot_name           [1]  type:name     
 * @property  string(name)   plugin              [2]  type:name     
 * @property  string         slot_type           [3]  type:text     
 * @property  string(oid)    datoid              [4]  type:oid      
 * @property  string(name)   database            [5]  type:name     
 * @property  boolean        temporary           [6]  type:bool     
 * @property  boolean        active              [7]  type:bool     
 * @property  int            active_pid          [8]  type:int4     
 * @property  string(xid)    xmin                [9]  type:xid      
 * @property  string(xid)    catalog_xmin        [10] type:xid      
 * @property  string(pg_lsn) restart_lsn         [11] type:pg_lsn   
 * @property  string(pg_lsn) confirmed_flush_lsn [12] type:pg_lsn   
 * @property  string         wal_status          [13] type:text     
 * @property  int            safe_wal_size       [14] type:int8     
 * @property  boolean        two_phase           [15] type:bool     
 * @package App\Models\DBModels\Model
 */
class MPgReplicationSlots extends DBClass {


	const  FJ_ACTIVE              = 'active';
	const  FJ_ACTIVE_PID          = 'activePid';
	const  FJ_CATALOG_XMIN        = 'catalogXmin';
	const  FJ_CONFIRMED_FLUSH_LSN = 'confirmedFlushLsn';
	const  FJ_DATABASE            = 'database';
	const  FJ_DATOID              = 'datoid';
	const  FJ_PLUGIN              = 'plugin';
	const  FJ_RESTART_LSN         = 'restartLsn';
	const  FJ_SAFE_WAL_SIZE       = 'safeWalSize';
	const  FJ_SLOT_NAME           = 'slotName';
	const  FJ_SLOT_TYPE           = 'slotType';
	const  FJ_TEMPORARY           = 'temporary';
	const  FJ_TWO_PHASE           = 'twoPhase';
	const  FJ_WAL_STATUS          = 'walStatus';
	const  FJ_XMIN                = 'xmin';
	const  FT_ACTIVE              = 'pg_replication_slots.active';
	const  FT_ACTIVE_PID          = 'pg_replication_slots.active_pid';
	const  FT_CATALOG_XMIN        = 'pg_replication_slots.catalog_xmin';
	const  FT_CONFIRMED_FLUSH_LSN = 'pg_replication_slots.confirmed_flush_lsn';
	const  FT_DATABASE            = 'pg_replication_slots.database';
	const  FT_DATOID              = 'pg_replication_slots.datoid';
	const  FT_PLUGIN              = 'pg_replication_slots.plugin';
	const  FT_RESTART_LSN         = 'pg_replication_slots.restart_lsn';
	const  FT_SAFE_WAL_SIZE       = 'pg_replication_slots.safe_wal_size';
	const  FT_SLOT_NAME           = 'pg_replication_slots.slot_name';
	const  FT_SLOT_TYPE           = 'pg_replication_slots.slot_type';
	const  FT_TEMPORARY           = 'pg_replication_slots.temporary';
	const  FT_TWO_PHASE           = 'pg_replication_slots.two_phase';
	const  FT_WAL_STATUS          = 'pg_replication_slots.wal_status';
	const  FT_XMIN                = 'pg_replication_slots.xmin';
	const  F_ACTIVE               = 'active';
	const  F_ACTIVE_PID           = 'active_pid';
	const  F_CATALOG_XMIN         = 'catalog_xmin';
	const  F_CONFIRMED_FLUSH_LSN  = 'confirmed_flush_lsn';
	const  F_DATABASE             = 'database';
	const  F_DATOID               = 'datoid';
	const  F_PLUGIN               = 'plugin';
	const  F_RESTART_LSN          = 'restart_lsn';
	const  F_SAFE_WAL_SIZE        = 'safe_wal_size';
	const  F_SLOT_NAME            = 'slot_name';
	const  F_SLOT_TYPE            = 'slot_type';
	const  F_TEMPORARY            = 'temporary';
	const  F_TWO_PHASE            = 'two_phase';
	const  F_WAL_STATUS           = 'wal_status';
	const  F_XMIN                 = 'xmin';

    protected $table = 'pg_replication_slots';

	public static array $jsonable = [
		MPgReplicationSlots::FJ_SLOT_NAME           =>[ MPgReplicationSlots::F_SLOT_NAME           ,null,'string(name)',   ],
		MPgReplicationSlots::FJ_PLUGIN              =>[ MPgReplicationSlots::F_PLUGIN              ,null,'string(name)',   ],
		MPgReplicationSlots::FJ_SLOT_TYPE           =>[ MPgReplicationSlots::F_SLOT_TYPE           ,null,'string',         ],
		MPgReplicationSlots::FJ_DATOID              =>[ MPgReplicationSlots::F_DATOID              ,null,'string(oid)',    ],
		MPgReplicationSlots::FJ_DATABASE            =>[ MPgReplicationSlots::F_DATABASE            ,null,'string(name)',   ],
		MPgReplicationSlots::FJ_TEMPORARY           =>[ MPgReplicationSlots::F_TEMPORARY           ,null,'boolean',        ],
		MPgReplicationSlots::FJ_ACTIVE              =>[ MPgReplicationSlots::F_ACTIVE              ,null,'boolean',        ],
		MPgReplicationSlots::FJ_ACTIVE_PID          =>[ MPgReplicationSlots::F_ACTIVE_PID          ,null,'number',         ],
		MPgReplicationSlots::FJ_XMIN                =>[ MPgReplicationSlots::F_XMIN                ,null,'string(xid)',    ],
		MPgReplicationSlots::FJ_CATALOG_XMIN        =>[ MPgReplicationSlots::F_CATALOG_XMIN        ,null,'string(xid)',    ],
		MPgReplicationSlots::FJ_RESTART_LSN         =>[ MPgReplicationSlots::F_RESTART_LSN         ,null,'string(pg_lsn)', ],
		MPgReplicationSlots::FJ_CONFIRMED_FLUSH_LSN =>[ MPgReplicationSlots::F_CONFIRMED_FLUSH_LSN ,null,'string(pg_lsn)', ],
		MPgReplicationSlots::FJ_WAL_STATUS          =>[ MPgReplicationSlots::F_WAL_STATUS          ,null,'string',         ],
		MPgReplicationSlots::FJ_SAFE_WAL_SIZE       =>[ MPgReplicationSlots::F_SAFE_WAL_SIZE       ,null,'number',         ],
		MPgReplicationSlots::FJ_TWO_PHASE           =>[ MPgReplicationSlots::F_TWO_PHASE           ,null,'boolean',        ],
	];

		protected $visible = [
			self::F_SLOT_NAME,
			self::F_PLUGIN,
			self::F_SLOT_TYPE,
			self::F_DATOID,
			self::F_DATABASE,
			self::F_TEMPORARY,
			self::F_ACTIVE,
			self::F_ACTIVE_PID,
			self::F_XMIN,
			self::F_CATALOG_XMIN,
			self::F_RESTART_LSN,
			self::F_CONFIRMED_FLUSH_LSN,
			self::F_WAL_STATUS,
			self::F_SAFE_WAL_SIZE,
			self::F_TWO_PHASE,
		]; 

		protected $fillable = [
		];





}

