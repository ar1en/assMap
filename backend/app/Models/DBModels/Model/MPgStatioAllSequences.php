<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgStatioAllSequences
 * Representation for db table pg_statio_all_sequences.

 * @property  string(oid)  relid      [1] type:oid    
 * @property  string(name) schemaname [2] type:name   
 * @property  string(name) relname    [3] type:name   
 * @property  int          blks_read  [4] type:int8   
 * @property  int          blks_hit   [5] type:int8   
 * @package App\Models\DBModels\Model
 */
class MPgStatioAllSequences extends DBClass {


	const  FJ_BLKS_HIT   = 'blksHit';
	const  FJ_BLKS_READ  = 'blksRead';
	const  FJ_RELID      = 'relid';
	const  FJ_RELNAME    = 'relname';
	const  FJ_SCHEMANAME = 'schemaname';
	const  FT_BLKS_HIT   = 'pg_statio_all_sequences.blks_hit';
	const  FT_BLKS_READ  = 'pg_statio_all_sequences.blks_read';
	const  FT_RELID      = 'pg_statio_all_sequences.relid';
	const  FT_RELNAME    = 'pg_statio_all_sequences.relname';
	const  FT_SCHEMANAME = 'pg_statio_all_sequences.schemaname';
	const  F_BLKS_HIT    = 'blks_hit';
	const  F_BLKS_READ   = 'blks_read';
	const  F_RELID       = 'relid';
	const  F_RELNAME     = 'relname';
	const  F_SCHEMANAME  = 'schemaname';

    protected $table = 'pg_statio_all_sequences';

	public static array $jsonable = [
		MPgStatioAllSequences::FJ_RELID      =>[ MPgStatioAllSequences::F_RELID      ,null,'string(oid)',  ],
		MPgStatioAllSequences::FJ_SCHEMANAME =>[ MPgStatioAllSequences::F_SCHEMANAME ,null,'string(name)', ],
		MPgStatioAllSequences::FJ_RELNAME    =>[ MPgStatioAllSequences::F_RELNAME    ,null,'string(name)', ],
		MPgStatioAllSequences::FJ_BLKS_READ  =>[ MPgStatioAllSequences::F_BLKS_READ  ,null,'number',       ],
		MPgStatioAllSequences::FJ_BLKS_HIT   =>[ MPgStatioAllSequences::F_BLKS_HIT   ,null,'number',       ],
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

