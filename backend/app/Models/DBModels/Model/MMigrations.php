<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MMigrations
 * Representation for db table migrations.

 * @property  int    id        [1] type:int4         !NULL PRIMARY 
 * @property  string migration [2] type:varchar(255) !NULL         
 * @property  int    batch     [3] type:int4         !NULL         
 * @package App\Models\DBModels\Model
 */
class MMigrations extends DBClass {


	const  FJ_BATCH     = 'batch';
	const  FJ_ID        = 'id';
	const  FJ_MIGRATION = 'migration';
	const  FT_BATCH     = 'migrations.batch';
	const  FT_ID        = 'migrations.id';
	const  FT_MIGRATION = 'migrations.migration';
	const  F_BATCH      = 'batch';
	const  F_ID         = 'id';
	const  F_MIGRATION  = 'migration';

    protected $table = 'migrations';

	public static array $jsonable = [
		MMigrations::FJ_ID        =>[ MMigrations::F_ID        ,null,'number', ],
		MMigrations::FJ_MIGRATION =>[ MMigrations::F_MIGRATION ,null,'string', ],
		MMigrations::FJ_BATCH     =>[ MMigrations::F_BATCH     ,null,'number', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_MIGRATION,
			self::F_BATCH,
		]; 

		protected $fillable = [
			 self::F_MIGRATION,
			 self::F_BATCH,
		];





}

