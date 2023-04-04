<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MFailedJobs
 * Representation for db table failed_jobs.

 * @property  int       id         [1] type:int8         !NULL PRIMARY 
 * @property  string    uuid       [2] type:varchar(255) !NULL         UNIQUE
 * @property  string    connection [3] type:text         !NULL         
 * @property  string    queue      [4] type:text         !NULL         
 * @property  string    payload    [5] type:text         !NULL         
 * @property  string    exception  [6] type:text         !NULL         
 * @property  \DateTime failed_at  [7] type:timestamp    !NULL         
 * @package App\Models\DBModels\Model
 */
class MFailedJobs extends DBClass {


	const  FJ_CONNECTION = 'connection';
	const  FJ_EXCEPTION  = 'exception';
	const  FJ_FAILED_AT  = 'failedAt';
	const  FJ_ID         = 'id';
	const  FJ_PAYLOAD    = 'payload';
	const  FJ_QUEUE      = 'queue';
	const  FJ_UUID       = 'uuid';
	const  FT_CONNECTION = 'failed_jobs.connection';
	const  FT_EXCEPTION  = 'failed_jobs.exception';
	const  FT_FAILED_AT  = 'failed_jobs.failed_at';
	const  FT_ID         = 'failed_jobs.id';
	const  FT_PAYLOAD    = 'failed_jobs.payload';
	const  FT_QUEUE      = 'failed_jobs.queue';
	const  FT_UUID       = 'failed_jobs.uuid';
	const  F_CONNECTION  = 'connection';
	const  F_EXCEPTION   = 'exception';
	const  F_FAILED_AT   = 'failed_at';
	const  F_ID          = 'id';
	const  F_PAYLOAD     = 'payload';
	const  F_QUEUE       = 'queue';
	const  F_UUID        = 'uuid';

    protected $table = 'failed_jobs';

	public static array $jsonable = [
		MFailedJobs::FJ_ID         =>[ MFailedJobs::F_ID         ,null,'number',           ],
		MFailedJobs::FJ_UUID       =>[ MFailedJobs::F_UUID       ,null,'string',           ],
		MFailedJobs::FJ_CONNECTION =>[ MFailedJobs::F_CONNECTION ,null,'string',           ],
		MFailedJobs::FJ_QUEUE      =>[ MFailedJobs::F_QUEUE      ,null,'string',           ],
		MFailedJobs::FJ_PAYLOAD    =>[ MFailedJobs::F_PAYLOAD    ,null,'string',           ],
		MFailedJobs::FJ_EXCEPTION  =>[ MFailedJobs::F_EXCEPTION  ,null,'string',           ],
		MFailedJobs::FJ_FAILED_AT  =>[ MFailedJobs::F_FAILED_AT  ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_UUID,
			self::F_CONNECTION,
			self::F_QUEUE,
			self::F_PAYLOAD,
			self::F_EXCEPTION,
			self::F_FAILED_AT,
		]; 

		protected $fillable = [
			 self::F_UUID,
			 self::F_CONNECTION,
			 self::F_QUEUE,
			 self::F_PAYLOAD,
			 self::F_EXCEPTION,
			 self::F_FAILED_AT,
		];





}

