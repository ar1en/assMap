<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgConfig
 * Representation for db table pg_config.

 * @property  string name    [1] type:text   
 * @property  string setting [2] type:text   
 * @package App\Models\DBModels\Model
 */
class MPgConfig extends DBClass {


	const  FJ_NAME    = 'name';
	const  FJ_SETTING = 'setting';
	const  FT_NAME    = 'pg_config.name';
	const  FT_SETTING = 'pg_config.setting';
	const  F_NAME     = 'name';
	const  F_SETTING  = 'setting';

    protected $table = 'pg_config';

	public static array $jsonable = [
		MPgConfig::FJ_NAME    =>[ MPgConfig::F_NAME    ,null,'string', ],
		MPgConfig::FJ_SETTING =>[ MPgConfig::F_SETTING ,null,'string', ],
	];

		protected $visible = [
			self::F_NAME,
			self::F_SETTING,
		]; 

		protected $fillable = [
		];





}

