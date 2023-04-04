<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgBackendMemoryContexts
 * Representation for db table pg_backend_memory_contexts.

 * @property  string name          [1] type:text   
 * @property  string ident         [2] type:text   
 * @property  string parent        [3] type:text   
 * @property  int    level         [4] type:int4   
 * @property  int    total_bytes   [5] type:int8   
 * @property  int    total_nblocks [6] type:int8   
 * @property  int    free_bytes    [7] type:int8   
 * @property  int    free_chunks   [8] type:int8   
 * @property  int    used_bytes    [9] type:int8   
 * @package App\Models\DBModels\Model
 */
class MPgBackendMemoryContexts extends DBClass {


	const  FJ_FREE_BYTES    = 'freeBytes';
	const  FJ_FREE_CHUNKS   = 'freeChunks';
	const  FJ_IDENT         = 'ident';
	const  FJ_LEVEL         = 'level';
	const  FJ_NAME          = 'name';
	const  FJ_PARENT        = 'parent';
	const  FJ_TOTAL_BYTES   = 'totalBytes';
	const  FJ_TOTAL_NBLOCKS = 'totalNblocks';
	const  FJ_USED_BYTES    = 'usedBytes';
	const  FT_FREE_BYTES    = 'pg_backend_memory_contexts.free_bytes';
	const  FT_FREE_CHUNKS   = 'pg_backend_memory_contexts.free_chunks';
	const  FT_IDENT         = 'pg_backend_memory_contexts.ident';
	const  FT_LEVEL         = 'pg_backend_memory_contexts.level';
	const  FT_NAME          = 'pg_backend_memory_contexts.name';
	const  FT_PARENT        = 'pg_backend_memory_contexts.parent';
	const  FT_TOTAL_BYTES   = 'pg_backend_memory_contexts.total_bytes';
	const  FT_TOTAL_NBLOCKS = 'pg_backend_memory_contexts.total_nblocks';
	const  FT_USED_BYTES    = 'pg_backend_memory_contexts.used_bytes';
	const  F_FREE_BYTES     = 'free_bytes';
	const  F_FREE_CHUNKS    = 'free_chunks';
	const  F_IDENT          = 'ident';
	const  F_LEVEL          = 'level';
	const  F_NAME           = 'name';
	const  F_PARENT         = 'parent';
	const  F_TOTAL_BYTES    = 'total_bytes';
	const  F_TOTAL_NBLOCKS  = 'total_nblocks';
	const  F_USED_BYTES     = 'used_bytes';

    protected $table = 'pg_backend_memory_contexts';

	public static array $jsonable = [
		MPgBackendMemoryContexts::FJ_NAME          =>[ MPgBackendMemoryContexts::F_NAME          ,null,'string', ],
		MPgBackendMemoryContexts::FJ_IDENT         =>[ MPgBackendMemoryContexts::F_IDENT         ,null,'string', ],
		MPgBackendMemoryContexts::FJ_PARENT        =>[ MPgBackendMemoryContexts::F_PARENT        ,null,'string', ],
		MPgBackendMemoryContexts::FJ_LEVEL         =>[ MPgBackendMemoryContexts::F_LEVEL         ,null,'number', ],
		MPgBackendMemoryContexts::FJ_TOTAL_BYTES   =>[ MPgBackendMemoryContexts::F_TOTAL_BYTES   ,null,'number', ],
		MPgBackendMemoryContexts::FJ_TOTAL_NBLOCKS =>[ MPgBackendMemoryContexts::F_TOTAL_NBLOCKS ,null,'number', ],
		MPgBackendMemoryContexts::FJ_FREE_BYTES    =>[ MPgBackendMemoryContexts::F_FREE_BYTES    ,null,'number', ],
		MPgBackendMemoryContexts::FJ_FREE_CHUNKS   =>[ MPgBackendMemoryContexts::F_FREE_CHUNKS   ,null,'number', ],
		MPgBackendMemoryContexts::FJ_USED_BYTES    =>[ MPgBackendMemoryContexts::F_USED_BYTES    ,null,'number', ],
	];

		protected $visible = [
			self::F_NAME,
			self::F_IDENT,
			self::F_PARENT,
			self::F_LEVEL,
			self::F_TOTAL_BYTES,
			self::F_TOTAL_NBLOCKS,
			self::F_FREE_BYTES,
			self::F_FREE_CHUNKS,
			self::F_USED_BYTES,
		]; 

		protected $fillable = [
		];





}

