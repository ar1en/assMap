<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgPreparedXacts
 * Representation for db table pg_prepared_xacts.

 * @property  string(xid)         transaction [1] type:xid           
 * @property  string              gid         [2] type:text          
 * @property  string(timestamptz) prepared    [3] type:timestamptz   
 * @property  string(name)        owner       [4] type:name          
 * @property  string(name)        database    [5] type:name          
 * @package App\Models\DBModels\Model
 */
class MPgPreparedXacts extends DBClass {


	const  FJ_DATABASE    = 'database';
	const  FJ_GID         = 'gid';
	const  FJ_OWNER       = 'owner';
	const  FJ_PREPARED    = 'prepared';
	const  FJ_TRANSACTION = 'transaction';
	const  FT_DATABASE    = 'pg_prepared_xacts.database';
	const  FT_GID         = 'pg_prepared_xacts.gid';
	const  FT_OWNER       = 'pg_prepared_xacts.owner';
	const  FT_PREPARED    = 'pg_prepared_xacts.prepared';
	const  FT_TRANSACTION = 'pg_prepared_xacts.transaction';
	const  F_DATABASE     = 'database';
	const  F_GID          = 'gid';
	const  F_OWNER        = 'owner';
	const  F_PREPARED     = 'prepared';
	const  F_TRANSACTION  = 'transaction';

    protected $table = 'pg_prepared_xacts';

	public static array $jsonable = [
		MPgPreparedXacts::FJ_TRANSACTION =>[ MPgPreparedXacts::F_TRANSACTION ,null,'string(xid)',         ],
		MPgPreparedXacts::FJ_GID         =>[ MPgPreparedXacts::F_GID         ,null,'string',              ],
		MPgPreparedXacts::FJ_PREPARED    =>[ MPgPreparedXacts::F_PREPARED    ,null,'string(timestamptz)', ],
		MPgPreparedXacts::FJ_OWNER       =>[ MPgPreparedXacts::F_OWNER       ,null,'string(name)',        ],
		MPgPreparedXacts::FJ_DATABASE    =>[ MPgPreparedXacts::F_DATABASE    ,null,'string(name)',        ],
	];

		protected $visible = [
			self::F_TRANSACTION,
			self::F_GID,
			self::F_PREPARED,
			self::F_OWNER,
			self::F_DATABASE,
		]; 

		protected $fillable = [
		];





}

