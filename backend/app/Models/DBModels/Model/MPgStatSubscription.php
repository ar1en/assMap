<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatSubscription
 * Representation for db table pg_stat_subscription.

 * @property  string(oid)         subid                 [1] type:oid           
 * @property  string(name)        subname               [2] type:name          
 * @property  int                 pid                   [3] type:int4          
 * @property  string(oid)         relid                 [4] type:oid           
 * @property  string(pg_lsn)      received_lsn          [5] type:pg_lsn        
 * @property  string(timestamptz) last_msg_send_time    [6] type:timestamptz   
 * @property  string(timestamptz) last_msg_receipt_time [7] type:timestamptz   
 * @property  string(pg_lsn)      latest_end_lsn        [8] type:pg_lsn        
 * @property  string(timestamptz) latest_end_time       [9] type:timestamptz   
 * @package App\Models\DBModels\Model
 */
class MPgStatSubscription extends DBClass {


	const  FJ_LAST_MSG_RECEIPT_TIME = 'lastMsgReceiptTime';
	const  FJ_LAST_MSG_SEND_TIME    = 'lastMsgSendTime';
	const  FJ_LATEST_END_LSN        = 'latestEndLsn';
	const  FJ_LATEST_END_TIME       = 'latestEndTime';
	const  FJ_PID                   = 'pid';
	const  FJ_RECEIVED_LSN          = 'receivedLsn';
	const  FJ_RELID                 = 'relid';
	const  FJ_SUBID                 = 'subid';
	const  FJ_SUBNAME               = 'subname';
	const  FT_LAST_MSG_RECEIPT_TIME = 'pg_stat_subscription.last_msg_receipt_time';
	const  FT_LAST_MSG_SEND_TIME    = 'pg_stat_subscription.last_msg_send_time';
	const  FT_LATEST_END_LSN        = 'pg_stat_subscription.latest_end_lsn';
	const  FT_LATEST_END_TIME       = 'pg_stat_subscription.latest_end_time';
	const  FT_PID                   = 'pg_stat_subscription.pid';
	const  FT_RECEIVED_LSN          = 'pg_stat_subscription.received_lsn';
	const  FT_RELID                 = 'pg_stat_subscription.relid';
	const  FT_SUBID                 = 'pg_stat_subscription.subid';
	const  FT_SUBNAME               = 'pg_stat_subscription.subname';
	const  F_LAST_MSG_RECEIPT_TIME  = 'last_msg_receipt_time';
	const  F_LAST_MSG_SEND_TIME     = 'last_msg_send_time';
	const  F_LATEST_END_LSN         = 'latest_end_lsn';
	const  F_LATEST_END_TIME        = 'latest_end_time';
	const  F_PID                    = 'pid';
	const  F_RECEIVED_LSN           = 'received_lsn';
	const  F_RELID                  = 'relid';
	const  F_SUBID                  = 'subid';
	const  F_SUBNAME                = 'subname';

    protected $table = 'pg_stat_subscription';

	public static array $jsonable = [
		MPgStatSubscription::FJ_SUBID                 =>[ MPgStatSubscription::F_SUBID                 ,null,'string(oid)',         ],
		MPgStatSubscription::FJ_SUBNAME               =>[ MPgStatSubscription::F_SUBNAME               ,null,'string(name)',        ],
		MPgStatSubscription::FJ_PID                   =>[ MPgStatSubscription::F_PID                   ,null,'number',              ],
		MPgStatSubscription::FJ_RELID                 =>[ MPgStatSubscription::F_RELID                 ,null,'string(oid)',         ],
		MPgStatSubscription::FJ_RECEIVED_LSN          =>[ MPgStatSubscription::F_RECEIVED_LSN          ,null,'string(pg_lsn)',      ],
		MPgStatSubscription::FJ_LAST_MSG_SEND_TIME    =>[ MPgStatSubscription::F_LAST_MSG_SEND_TIME    ,null,'string(timestamptz)', ],
		MPgStatSubscription::FJ_LAST_MSG_RECEIPT_TIME =>[ MPgStatSubscription::F_LAST_MSG_RECEIPT_TIME ,null,'string(timestamptz)', ],
		MPgStatSubscription::FJ_LATEST_END_LSN        =>[ MPgStatSubscription::F_LATEST_END_LSN        ,null,'string(pg_lsn)',      ],
		MPgStatSubscription::FJ_LATEST_END_TIME       =>[ MPgStatSubscription::F_LATEST_END_TIME       ,null,'string(timestamptz)', ],
	];

		protected $visible = [
			self::F_SUBID,
			self::F_SUBNAME,
			self::F_PID,
			self::F_RELID,
			self::F_RECEIVED_LSN,
			self::F_LAST_MSG_SEND_TIME,
			self::F_LAST_MSG_RECEIPT_TIME,
			self::F_LATEST_END_LSN,
			self::F_LATEST_END_TIME,
		]; 

		protected $fillable = [
		];





}

