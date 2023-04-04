<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatioUserSequences
 * Representation for db table pg_statio_user_sequences.

 * @property  string(oid)  relid      [1] type:oid    
 * @property  string(name) schemaname [2] type:name   
 * @property  string(name) relname    [3] type:name   
 * @property  int          blks_read  [4] type:int8   
 * @property  int          blks_hit   [5] type:int8   
 * @package App\Models\DBModels\Model
 */
class MPgStatioUserSequences extends DBClass {


	const  FJ_BLKS_HIT   = 'blksHit';
	const  FJ_BLKS_READ  = 'blksRead';
	const  FJ_RELID      = 'relid';
	const  FJ_RELNAME    = 'relname';
	const  FJ_SCHEMANAME = 'schemaname';
	const  FT_BLKS_HIT   = 'pg_statio_user_sequences.blks_hit';
	const  FT_BLKS_READ  = 'pg_statio_user_sequences.blks_read';
	const  FT_RELID      = 'pg_statio_user_sequences.relid';
	const  FT_RELNAME    = 'pg_statio_user_sequences.relname';
	const  FT_SCHEMANAME = 'pg_statio_user_sequences.schemaname';
	const  F_BLKS_HIT    = 'blks_hit';
	const  F_BLKS_READ   = 'blks_read';
	const  F_RELID       = 'relid';
	const  F_RELNAME     = 'relname';
	const  F_SCHEMANAME  = 'schemaname';

    protected $table = 'pg_statio_user_sequences';

	public static array $jsonable = [
		MPgStatioUserSequences::FJ_RELID      =>[ MPgStatioUserSequences::F_RELID      ,null,'string(oid)',  ],
		MPgStatioUserSequences::FJ_SCHEMANAME =>[ MPgStatioUserSequences::F_SCHEMANAME ,null,'string(name)', ],
		MPgStatioUserSequences::FJ_RELNAME    =>[ MPgStatioUserSequences::F_RELNAME    ,null,'string(name)', ],
		MPgStatioUserSequences::FJ_BLKS_READ  =>[ MPgStatioUserSequences::F_BLKS_READ  ,null,'number',       ],
		MPgStatioUserSequences::FJ_BLKS_HIT   =>[ MPgStatioUserSequences::F_BLKS_HIT   ,null,'number',       ],
	];

		protected $visible = [
			self::F_RELID,
			self::F_SCHEMANAME,
			self::F_RELNAME,
			self::F_BLKS_READ,
			self::F_BLKS_HIT,
		]; 

		protected $fillable = [
		];





}

