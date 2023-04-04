<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatWalReceiver
 * Representation for db table pg_stat_wal_receiver.

 * @property  int                 pid                   [1]  type:int4          
 * @property  string              status                [2]  type:text          
 * @property  string(pg_lsn)      receive_start_lsn     [3]  type:pg_lsn        
 * @property  int                 receive_start_tli     [4]  type:int4          
 * @property  string(pg_lsn)      written_lsn           [5]  type:pg_lsn        
 * @property  string(pg_lsn)      flushed_lsn           [6]  type:pg_lsn        
 * @property  int                 received_tli          [7]  type:int4          
 * @property  string(timestamptz) last_msg_send_time    [8]  type:timestamptz   
 * @property  string(timestamptz) last_msg_receipt_time [9]  type:timestamptz   
 * @property  string(pg_lsn)      latest_end_lsn        [10] type:pg_lsn        
 * @property  string(timestamptz) latest_end_time       [11] type:timestamptz   
 * @property  string              slot_name             [12] type:text          
 * @property  string              sender_host           [13] type:text          
 * @property  int                 sender_port           [14] type:int4          
 * @property  string              conninfo              [15] type:text          
 * @package App\Models\DBModels\Model
 */
class MPgStatWalReceiver extends DBClass {


	const  FJ_CONNINFO              = 'conninfo';
	const  FJ_FLUSHED_LSN           = 'flushedLsn';
	const  FJ_LAST_MSG_RECEIPT_TIME = 'lastMsgReceiptTime';
	const  FJ_LAST_MSG_SEND_TIME    = 'lastMsgSendTime';
	const  FJ_LATEST_END_LSN        = 'latestEndLsn';
	const  FJ_LATEST_END_TIME       = 'latestEndTime';
	const  FJ_PID                   = 'pid';
	const  FJ_RECEIVED_TLI          = 'receivedTli';
	const  FJ_RECEIVE_START_LSN     = 'receiveStartLsn';
	const  FJ_RECEIVE_START_TLI     = 'receiveStartTli';
	const  FJ_SENDER_HOST           = 'senderHost';
	const  FJ_SENDER_PORT           = 'senderPort';
	const  FJ_SLOT_NAME             = 'slotName';
	const  FJ_STATUS                = 'status';
	const  FJ_WRITTEN_LSN           = 'writtenLsn';
	const  FT_CONNINFO              = 'pg_stat_wal_receiver.conninfo';
	const  FT_FLUSHED_LSN           = 'pg_stat_wal_receiver.flushed_lsn';
	const  FT_LAST_MSG_RECEIPT_TIME = 'pg_stat_wal_receiver.last_msg_receipt_time';
	const  FT_LAST_MSG_SEND_TIME    = 'pg_stat_wal_receiver.last_msg_send_time';
	const  FT_LATEST_END_LSN        = 'pg_stat_wal_receiver.latest_end_lsn';
	const  FT_LATEST_END_TIME       = 'pg_stat_wal_receiver.latest_end_time';
	const  FT_PID                   = 'pg_stat_wal_receiver.pid';
	const  FT_RECEIVED_TLI          = 'pg_stat_wal_receiver.received_tli';
	const  FT_RECEIVE_START_LSN     = 'pg_stat_wal_receiver.receive_start_lsn';
	const  FT_RECEIVE_START_TLI     = 'pg_stat_wal_receiver.receive_start_tli';
	const  FT_SENDER_HOST           = 'pg_stat_wal_receiver.sender_host';
	const  FT_SENDER_PORT           = 'pg_stat_wal_receiver.sender_port';
	const  FT_SLOT_NAME             = 'pg_stat_wal_receiver.slot_name';
	const  FT_STATUS                = 'pg_stat_wal_receiver.status';
	const  FT_WRITTEN_LSN           = 'pg_stat_wal_receiver.written_lsn';
	const  F_CONNINFO               = 'conninfo';
	const  F_FLUSHED_LSN            = 'flushed_lsn';
	const  F_LAST_MSG_RECEIPT_TIME  = 'last_msg_receipt_time';
	const  F_LAST_MSG_SEND_TIME     = 'last_msg_send_time';
	const  F_LATEST_END_LSN         = 'latest_end_lsn';
	const  F_LATEST_END_TIME        = 'latest_end_time';
	const  F_PID                    = 'pid';
	const  F_RECEIVED_TLI           = 'received_tli';
	const  F_RECEIVE_START_LSN      = 'receive_start_lsn';
	const  F_RECEIVE_START_TLI      = 'receive_start_tli';
	const  F_SENDER_HOST            = 'sender_host';
	const  F_SENDER_PORT            = 'sender_port';
	const  F_SLOT_NAME              = 'slot_name';
	const  F_STATUS                 = 'status';
	const  F_WRITTEN_LSN            = 'written_lsn';

    protected $table = 'pg_stat_wal_receiver';

	public static array $jsonable = [
		MPgStatWalReceiver::FJ_PID                   =>[ MPgStatWalReceiver::F_PID                   ,null,'number',              ],
		MPgStatWalReceiver::FJ_STATUS                =>[ MPgStatWalReceiver::F_STATUS                ,null,'string',              ],
		MPgStatWalReceiver::FJ_RECEIVE_START_LSN     =>[ MPgStatWalReceiver::F_RECEIVE_START_LSN     ,null,'string(pg_lsn)',      ],
		MPgStatWalReceiver::FJ_RECEIVE_START_TLI     =>[ MPgStatWalReceiver::F_RECEIVE_START_TLI     ,null,'number',              ],
		MPgStatWalReceiver::FJ_WRITTEN_LSN           =>[ MPgStatWalReceiver::F_WRITTEN_LSN           ,null,'string(pg_lsn)',      ],
		MPgStatWalReceiver::FJ_FLUSHED_LSN           =>[ MPgStatWalReceiver::F_FLUSHED_LSN           ,null,'string(pg_lsn)',      ],
		MPgStatWalReceiver::FJ_RECEIVED_TLI          =>[ MPgStatWalReceiver::F_RECEIVED_TLI          ,null,'number',              ],
		MPgStatWalReceiver::FJ_LAST_MSG_SEND_TIME    =>[ MPgStatWalReceiver::F_LAST_MSG_SEND_TIME    ,null,'string(timestamptz)', ],
		MPgStatWalReceiver::FJ_LAST_MSG_RECEIPT_TIME =>[ MPgStatWalReceiver::F_LAST_MSG_RECEIPT_TIME ,null,'string(timestamptz)', ],
		MPgStatWalReceiver::FJ_LATEST_END_LSN        =>[ MPgStatWalReceiver::F_LATEST_END_LSN        ,null,'string(pg_lsn)',      ],
		MPgStatWalReceiver::FJ_LATEST_END_TIME       =>[ MPgStatWalReceiver::F_LATEST_END_TIME       ,null,'string(timestamptz)', ],
		MPgStatWalReceiver::FJ_SLOT_NAME             =>[ MPgStatWalReceiver::F_SLOT_NAME             ,null,'string',              ],
		MPgStatWalReceiver::FJ_SENDER_HOST           =>[ MPgStatWalReceiver::F_SENDER_HOST           ,null,'string',              ],
		MPgStatWalReceiver::FJ_SENDER_PORT           =>[ MPgStatWalReceiver::F_SENDER_PORT           ,null,'number',              ],
		MPgStatWalReceiver::FJ_CONNINFO              =>[ MPgStatWalReceiver::F_CONNINFO              ,null,'string',              ],
	];

		protected $visible = [
			self::F_PID,
			self::F_STATUS,
			self::F_RECEIVE_START_LSN,
			self::F_RECEIVE_START_TLI,
			self::F_WRITTEN_LSN,
			self::F_FLUSHED_LSN,
			self::F_RECEIVED_TLI,
			self::F_LAST_MSG_SEND_TIME,
			self::F_LAST_MSG_RECEIPT_TIME,
			self::F_LATEST_END_LSN,
			self::F_LATEST_END_TIME,
			self::F_SLOT_NAME,
			self::F_SENDER_HOST,
			self::F_SENDER_PORT,
			self::F_CONNINFO,
		]; 

		protected $fillable = [
		];





}

