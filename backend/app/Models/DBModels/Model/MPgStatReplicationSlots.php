<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatReplicationSlots
 * Representation for db table pg_stat_replication_slots.

 * @property  string              slot_name    [1]  type:text          
 * @property  int                 spill_txns   [2]  type:int8          
 * @property  int                 spill_count  [3]  type:int8          
 * @property  int                 spill_bytes  [4]  type:int8          
 * @property  int                 stream_txns  [5]  type:int8          
 * @property  int                 stream_count [6]  type:int8          
 * @property  int                 stream_bytes [7]  type:int8          
 * @property  int                 total_txns   [8]  type:int8          
 * @property  int                 total_bytes  [9]  type:int8          
 * @property  string(timestamptz) stats_reset  [10] type:timestamptz   
 * @package App\Models\DBModels\Model
 */
class MPgStatReplicationSlots extends DBClass {


	const  FJ_SLOT_NAME    = 'slotName';
	const  FJ_SPILL_BYTES  = 'spillBytes';
	const  FJ_SPILL_COUNT  = 'spillCount';
	const  FJ_SPILL_TXNS   = 'spillTxns';
	const  FJ_STATS_RESET  = 'statsReset';
	const  FJ_STREAM_BYTES = 'streamBytes';
	const  FJ_STREAM_COUNT = 'streamCount';
	const  FJ_STREAM_TXNS  = 'streamTxns';
	const  FJ_TOTAL_BYTES  = 'totalBytes';
	const  FJ_TOTAL_TXNS   = 'totalTxns';
	const  FT_SLOT_NAME    = 'pg_stat_replication_slots.slot_name';
	const  FT_SPILL_BYTES  = 'pg_stat_replication_slots.spill_bytes';
	const  FT_SPILL_COUNT  = 'pg_stat_replication_slots.spill_count';
	const  FT_SPILL_TXNS   = 'pg_stat_replication_slots.spill_txns';
	const  FT_STATS_RESET  = 'pg_stat_replication_slots.stats_reset';
	const  FT_STREAM_BYTES = 'pg_stat_replication_slots.stream_bytes';
	const  FT_STREAM_COUNT = 'pg_stat_replication_slots.stream_count';
	const  FT_STREAM_TXNS  = 'pg_stat_replication_slots.stream_txns';
	const  FT_TOTAL_BYTES  = 'pg_stat_replication_slots.total_bytes';
	const  FT_TOTAL_TXNS   = 'pg_stat_replication_slots.total_txns';
	const  F_SLOT_NAME     = 'slot_name';
	const  F_SPILL_BYTES   = 'spill_bytes';
	const  F_SPILL_COUNT   = 'spill_count';
	const  F_SPILL_TXNS    = 'spill_txns';
	const  F_STATS_RESET   = 'stats_reset';
	const  F_STREAM_BYTES  = 'stream_bytes';
	const  F_STREAM_COUNT  = 'stream_count';
	const  F_STREAM_TXNS   = 'stream_txns';
	const  F_TOTAL_BYTES   = 'total_bytes';
	const  F_TOTAL_TXNS    = 'total_txns';

    protected $table = 'pg_stat_replication_slots';

	public static array $jsonable = [
		MPgStatReplicationSlots::FJ_SLOT_NAME    =>[ MPgStatReplicationSlots::F_SLOT_NAME    ,null,'string',              ],
		MPgStatReplicationSlots::FJ_SPILL_TXNS   =>[ MPgStatReplicationSlots::F_SPILL_TXNS   ,null,'number',              ],
		MPgStatReplicationSlots::FJ_SPILL_COUNT  =>[ MPgStatReplicationSlots::F_SPILL_COUNT  ,null,'number',              ],
		MPgStatReplicationSlots::FJ_SPILL_BYTES  =>[ MPgStatReplicationSlots::F_SPILL_BYTES  ,null,'number',              ],
		MPgStatReplicationSlots::FJ_STREAM_TXNS  =>[ MPgStatReplicationSlots::F_STREAM_TXNS  ,null,'number',              ],
		MPgStatReplicationSlots::FJ_STREAM_COUNT =>[ MPgStatReplicationSlots::F_STREAM_COUNT ,null,'number',              ],
		MPgStatReplicationSlots::FJ_STREAM_BYTES =>[ MPgStatReplicationSlots::F_STREAM_BYTES ,null,'number',              ],
		MPgStatReplicationSlots::FJ_TOTAL_TXNS   =>[ MPgStatReplicationSlots::F_TOTAL_TXNS   ,null,'number',              ],
		MPgStatReplicationSlots::FJ_TOTAL_BYTES  =>[ MPgStatReplicationSlots::F_TOTAL_BYTES  ,null,'number',              ],
		MPgStatReplicationSlots::FJ_STATS_RESET  =>[ MPgStatReplicationSlots::F_STATS_RESET  ,null,'string(timestamptz)', ],
	];

		protected $visible = [
			self::F_SLOT_NAME,
			self::F_SPILL_TXNS,
			self::F_SPILL_COUNT,
			self::F_SPILL_BYTES,
			self::F_STREAM_TXNS,
			self::F_STREAM_COUNT,
			self::F_STREAM_BYTES,
			self::F_TOTAL_TXNS,
			self::F_TOTAL_BYTES,
			self::F_STATS_RESET,
		]; 

		protected $fillable = [
		];





}

