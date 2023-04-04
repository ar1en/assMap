<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatGssapi
 * Representation for db table pg_stat_gssapi.

 * @property  int     pid               [1] type:int4   
 * @property  boolean gss_authenticated [2] type:bool   
 * @property  string  principal         [3] type:text   
 * @property  boolean encrypted         [4] type:bool   
 * @package App\Models\DBModels\Model
 */
class MPgStatGssapi extends DBClass {


	const  FJ_ENCRYPTED         = 'encrypted';
	const  FJ_GSS_AUTHENTICATED = 'gssAuthenticated';
	const  FJ_PID               = 'pid';
	const  FJ_PRINCIPAL         = 'principal';
	const  FT_ENCRYPTED         = 'pg_stat_gssapi.encrypted';
	const  FT_GSS_AUTHENTICATED = 'pg_stat_gssapi.gss_authenticated';
	const  FT_PID               = 'pg_stat_gssapi.pid';
	const  FT_PRINCIPAL         = 'pg_stat_gssapi.principal';
	const  F_ENCRYPTED          = 'encrypted';
	const  F_GSS_AUTHENTICATED  = 'gss_authenticated';
	const  F_PID                = 'pid';
	const  F_PRINCIPAL          = 'principal';

    protected $table = 'pg_stat_gssapi';

	public static array $jsonable = [
		MPgStatGssapi::FJ_PID               =>[ MPgStatGssapi::F_PID               ,null,'number',  ],
		MPgStatGssapi::FJ_GSS_AUTHENTICATED =>[ MPgStatGssapi::F_GSS_AUTHENTICATED ,null,'boolean', ],
		MPgStatGssapi::FJ_PRINCIPAL         =>[ MPgStatGssapi::F_PRINCIPAL         ,null,'string',  ],
		MPgStatGssapi::FJ_ENCRYPTED         =>[ MPgStatGssapi::F_ENCRYPTED         ,null,'boolean', ],
	];

		protected $visible = [
			self::F_PID,
			self::F_GSS_AUTHENTICATED,
			self::F_PRINCIPAL,
			self::F_ENCRYPTED,
		]; 

		protected $fillable = [
		];





}

