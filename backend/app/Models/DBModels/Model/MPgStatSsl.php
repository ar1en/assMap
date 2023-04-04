<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatSsl
 * Representation for db table pg_stat_ssl.

 * @property  int             pid           [1] type:int4      
 * @property  boolean         ssl           [2] type:bool      
 * @property  string          version       [3] type:text      
 * @property  string          cipher        [4] type:text      
 * @property  int             bits          [5] type:int4      
 * @property  string          client_dn     [6] type:text      
 * @property  string(numeric) client_serial [7] type:numeric   
 * @property  string          issuer_dn     [8] type:text      
 * @package App\Models\DBModels\Model
 */
class MPgStatSsl extends DBClass {


	const  FJ_BITS          = 'bits';
	const  FJ_CIPHER        = 'cipher';
	const  FJ_CLIENT_DN     = 'clientDn';
	const  FJ_CLIENT_SERIAL = 'clientSerial';
	const  FJ_ISSUER_DN     = 'issuerDn';
	const  FJ_PID           = 'pid';
	const  FJ_SSL           = 'ssl';
	const  FJ_VERSION       = 'version';
	const  FT_BITS          = 'pg_stat_ssl.bits';
	const  FT_CIPHER        = 'pg_stat_ssl.cipher';
	const  FT_CLIENT_DN     = 'pg_stat_ssl.client_dn';
	const  FT_CLIENT_SERIAL = 'pg_stat_ssl.client_serial';
	const  FT_ISSUER_DN     = 'pg_stat_ssl.issuer_dn';
	const  FT_PID           = 'pg_stat_ssl.pid';
	const  FT_SSL           = 'pg_stat_ssl.ssl';
	const  FT_VERSION       = 'pg_stat_ssl.version';
	const  F_BITS           = 'bits';
	const  F_CIPHER         = 'cipher';
	const  F_CLIENT_DN      = 'client_dn';
	const  F_CLIENT_SERIAL  = 'client_serial';
	const  F_ISSUER_DN      = 'issuer_dn';
	const  F_PID            = 'pid';
	const  F_SSL            = 'ssl';
	const  F_VERSION        = 'version';

    protected $table = 'pg_stat_ssl';

	public static array $jsonable = [
		MPgStatSsl::FJ_PID           =>[ MPgStatSsl::F_PID           ,null,'number',          ],
		MPgStatSsl::FJ_SSL           =>[ MPgStatSsl::F_SSL           ,null,'boolean',         ],
		MPgStatSsl::FJ_VERSION       =>[ MPgStatSsl::F_VERSION       ,null,'string',          ],
		MPgStatSsl::FJ_CIPHER        =>[ MPgStatSsl::F_CIPHER        ,null,'string',          ],
		MPgStatSsl::FJ_BITS          =>[ MPgStatSsl::F_BITS          ,null,'number',          ],
		MPgStatSsl::FJ_CLIENT_DN     =>[ MPgStatSsl::F_CLIENT_DN     ,null,'string',          ],
		MPgStatSsl::FJ_CLIENT_SERIAL =>[ MPgStatSsl::F_CLIENT_SERIAL ,null,'string(numeric)', ],
		MPgStatSsl::FJ_ISSUER_DN     =>[ MPgStatSsl::F_ISSUER_DN     ,null,'string',          ],
	];

		protected $visible = [
			self::F_PID,
			self::F_SSL,
			self::F_VERSION,
			self::F_CIPHER,
			self::F_BITS,
			self::F_CLIENT_DN,
			self::F_CLIENT_SERIAL,
			self::F_ISSUER_DN,
		]; 

		protected $fillable = [
		];





}

