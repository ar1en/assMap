<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgIndexes
 * Representation for db table pg_indexes.

 * @property  string(name) schemaname [1] type:name   
 * @property  string(name) tablename  [2] type:name   
 * @property  string(name) indexname  [3] type:name   
 * @property  string(name) tablespace [4] type:name   
 * @property  string       indexdef   [5] type:text   
 * @package App\Models\DBModels\Model
 */
class MPgIndexes extends DBClass {


	const  FJ_INDEXDEF   = 'indexdef';
	const  FJ_INDEXNAME  = 'indexname';
	const  FJ_SCHEMANAME = 'schemaname';
	const  FJ_TABLENAME  = 'tablename';
	const  FJ_TABLESPACE = 'tablespace';
	const  FT_INDEXDEF   = 'pg_indexes.indexdef';
	const  FT_INDEXNAME  = 'pg_indexes.indexname';
	const  FT_SCHEMANAME = 'pg_indexes.schemaname';
	const  FT_TABLENAME  = 'pg_indexes.tablename';
	const  FT_TABLESPACE = 'pg_indexes.tablespace';
	const  F_INDEXDEF    = 'indexdef';
	const  F_INDEXNAME   = 'indexname';
	const  F_SCHEMANAME  = 'schemaname';
	const  F_TABLENAME   = 'tablename';
	const  F_TABLESPACE  = 'tablespace';

    protected $table = 'pg_indexes';

	public static array $jsonable = [
		MPgIndexes::FJ_SCHEMANAME =>[ MPgIndexes::F_SCHEMANAME ,null,'string(name)', ],
		MPgIndexes::FJ_TABLENAME  =>[ MPgIndexes::F_TABLENAME  ,null,'string(name)', ],
		MPgIndexes::FJ_INDEXNAME  =>[ MPgIndexes::F_INDEXNAME  ,null,'string(name)', ],
		MPgIndexes::FJ_TABLESPACE =>[ MPgIndexes::F_TABLESPACE ,null,'string(name)', ],
		MPgIndexes::FJ_INDEXDEF   =>[ MPgIndexes::F_INDEXDEF   ,null,'string',       ],
	];

		protected $visible = [
			self::F_SCHEMANAME,
			self::F_TABLENAME,
			self::F_INDEXNAME,
			self::F_TABLESPACE,
			self::F_INDEXDEF,
		]; 

		protected $fillable = [
		];





}

