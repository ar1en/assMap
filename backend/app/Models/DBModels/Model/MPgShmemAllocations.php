<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgShmemAllocations
 * Representation for db table pg_shmem_allocations.

 * @property  string name           [1] type:text   
 * @property  int    off            [2] type:int8   
 * @property  int    size           [3] type:int8   
 * @property  int    allocated_size [4] type:int8   
 * @package App\Models\DBModels\Model
 */
class MPgShmemAllocations extends DBClass {


	const  FJ_ALLOCATED_SIZE = 'allocatedSize';
	const  FJ_NAME           = 'name';
	const  FJ_OFF            = 'off';
	const  FJ_SIZE           = 'size';
	const  FT_ALLOCATED_SIZE = 'pg_shmem_allocations.allocated_size';
	const  FT_NAME           = 'pg_shmem_allocations.name';
	const  FT_OFF            = 'pg_shmem_allocations.off';
	const  FT_SIZE           = 'pg_shmem_allocations.size';
	const  F_ALLOCATED_SIZE  = 'allocated_size';
	const  F_NAME            = 'name';
	const  F_OFF             = 'off';
	const  F_SIZE            = 'size';

    protected $table = 'pg_shmem_allocations';

	public static array $jsonable = [
		MPgShmemAllocations::FJ_NAME           =>[ MPgShmemAllocations::F_NAME           ,null,'string', ],
		MPgShmemAllocations::FJ_OFF            =>[ MPgShmemAllocations::F_OFF            ,null,'number', ],
		MPgShmemAllocations::FJ_SIZE           =>[ MPgShmemAllocations::F_SIZE           ,null,'number', ],
		MPgShmemAllocations::FJ_ALLOCATED_SIZE =>[ MPgShmemAllocations::F_ALLOCATED_SIZE ,null,'number', ],
	];

		protected $visible = [
			self::F_NAME,
			self::F_OFF,
			self::F_SIZE,
			self::F_ALLOCATED_SIZE,
		]; 

		protected $fillable = [
		];





}

