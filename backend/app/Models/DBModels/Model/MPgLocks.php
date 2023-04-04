<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgLocks
 * Representation for db table pg_locks.

 * @property  string              locktype           [1]  type:text          
 * @property  string(oid)         database           [2]  type:oid           
 * @property  string(oid)         relation           [3]  type:oid           
 * @property  int                 page               [4]  type:int4          
 * @property  string(int2)        tuple              [5]  type:int2          
 * @property  string              virtualxid         [6]  type:text          
 * @property  string(xid)         transactionid      [7]  type:xid           
 * @property  string(oid)         classid            [8]  type:oid           
 * @property  string(oid)         objid              [9]  type:oid           
 * @property  string(int2)        objsubid           [10] type:int2          
 * @property  string              virtualtransaction [11] type:text          
 * @property  int                 pid                [12] type:int4          
 * @property  string              mode               [13] type:text          
 * @property  boolean             granted            [14] type:bool          
 * @property  boolean             fastpath           [15] type:bool          
 * @property  string(timestamptz) waitstart          [16] type:timestamptz   
 * @package App\Models\DBModels\Model
 */
class MPgLocks extends DBClass {


	const  FJ_CLASSID            = 'classid';
	const  FJ_DATABASE           = 'database';
	const  FJ_FASTPATH           = 'fastpath';
	const  FJ_GRANTED            = 'granted';
	const  FJ_LOCKTYPE           = 'locktype';
	const  FJ_MODE               = 'mode';
	const  FJ_OBJID              = 'objid';
	const  FJ_OBJSUBID           = 'objsubid';
	const  FJ_PAGE               = 'page';
	const  FJ_PID                = 'pid';
	const  FJ_RELATION           = 'relation';
	const  FJ_TRANSACTIONID      = 'transactionid';
	const  FJ_TUPLE              = 'tuple';
	const  FJ_VIRTUALTRANSACTION = 'virtualtransaction';
	const  FJ_VIRTUALXID         = 'virtualxid';
	const  FJ_WAITSTART          = 'waitstart';
	const  FT_CLASSID            = 'pg_locks.classid';
	const  FT_DATABASE           = 'pg_locks.database';
	const  FT_FASTPATH           = 'pg_locks.fastpath';
	const  FT_GRANTED            = 'pg_locks.granted';
	const  FT_LOCKTYPE           = 'pg_locks.locktype';
	const  FT_MODE               = 'pg_locks.mode';
	const  FT_OBJID              = 'pg_locks.objid';
	const  FT_OBJSUBID           = 'pg_locks.objsubid';
	const  FT_PAGE               = 'pg_locks.page';
	const  FT_PID                = 'pg_locks.pid';
	const  FT_RELATION           = 'pg_locks.relation';
	const  FT_TRANSACTIONID      = 'pg_locks.transactionid';
	const  FT_TUPLE              = 'pg_locks.tuple';
	const  FT_VIRTUALTRANSACTION = 'pg_locks.virtualtransaction';
	const  FT_VIRTUALXID         = 'pg_locks.virtualxid';
	const  FT_WAITSTART          = 'pg_locks.waitstart';
	const  F_CLASSID             = 'classid';
	const  F_DATABASE            = 'database';
	const  F_FASTPATH            = 'fastpath';
	const  F_GRANTED             = 'granted';
	const  F_LOCKTYPE            = 'locktype';
	const  F_MODE                = 'mode';
	const  F_OBJID               = 'objid';
	const  F_OBJSUBID            = 'objsubid';
	const  F_PAGE                = 'page';
	const  F_PID                 = 'pid';
	const  F_RELATION            = 'relation';
	const  F_TRANSACTIONID       = 'transactionid';
	const  F_TUPLE               = 'tuple';
	const  F_VIRTUALTRANSACTION  = 'virtualtransaction';
	const  F_VIRTUALXID          = 'virtualxid';
	const  F_WAITSTART           = 'waitstart';

    protected $table = 'pg_locks';

	public static array $jsonable = [
		MPgLocks::FJ_LOCKTYPE           =>[ MPgLocks::F_LOCKTYPE           ,null,'string',              ],
		MPgLocks::FJ_DATABASE           =>[ MPgLocks::F_DATABASE           ,null,'string(oid)',         ],
		MPgLocks::FJ_RELATION           =>[ MPgLocks::F_RELATION           ,null,'string(oid)',         ],
		MPgLocks::FJ_PAGE               =>[ MPgLocks::F_PAGE               ,null,'number',              ],
		MPgLocks::FJ_TUPLE              =>[ MPgLocks::F_TUPLE              ,null,'string(int2)',        ],
		MPgLocks::FJ_VIRTUALXID         =>[ MPgLocks::F_VIRTUALXID         ,null,'string',              ],
		MPgLocks::FJ_TRANSACTIONID      =>[ MPgLocks::F_TRANSACTIONID      ,null,'string(xid)',         ],
		MPgLocks::FJ_CLASSID            =>[ MPgLocks::F_CLASSID            ,null,'string(oid)',         ],
		MPgLocks::FJ_OBJID              =>[ MPgLocks::F_OBJID              ,null,'string(oid)',         ],
		MPgLocks::FJ_OBJSUBID           =>[ MPgLocks::F_OBJSUBID           ,null,'string(int2)',        ],
		MPgLocks::FJ_VIRTUALTRANSACTION =>[ MPgLocks::F_VIRTUALTRANSACTION ,null,'string',              ],
		MPgLocks::FJ_PID                =>[ MPgLocks::F_PID                ,null,'number',              ],
		MPgLocks::FJ_MODE               =>[ MPgLocks::F_MODE               ,null,'string',              ],
		MPgLocks::FJ_GRANTED            =>[ MPgLocks::F_GRANTED            ,null,'boolean',             ],
		MPgLocks::FJ_FASTPATH           =>[ MPgLocks::F_FASTPATH           ,null,'boolean',             ],
		MPgLocks::FJ_WAITSTART          =>[ MPgLocks::F_WAITSTART          ,null,'string(timestamptz)', ],
	];

		protected $visible = [
			self::F_LOCKTYPE,
			self::F_DATABASE,
			self::F_RELATION,
			self::F_PAGE,
			self::F_TUPLE,
			self::F_VIRTUALXID,
			self::F_TRANSACTIONID,
			self::F_CLASSID,
			self::F_OBJID,
			self::F_OBJSUBID,
			self::F_VIRTUALTRANSACTION,
			self::F_PID,
			self::F_MODE,
			self::F_GRANTED,
			self::F_FASTPATH,
			self::F_WAITSTART,
		]; 

		protected $fillable = [
		];





}

