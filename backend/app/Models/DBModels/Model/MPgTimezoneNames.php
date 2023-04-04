<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgTimezoneNames
 * Representation for db table pg_timezone_names.

 * @property  string           name       [1] type:text       
 * @property  string           abbrev     [2] type:text       
 * @property  string(interval) utc_offset [3] type:interval   
 * @property  boolean          is_dst     [4] type:bool       
 * @package App\Models\DBModels\Model
 */
class MPgTimezoneNames extends DBClass {


	const  FJ_ABBREV     = 'abbrev';
	const  FJ_IS_DST     = 'isDst';
	const  FJ_NAME       = 'name';
	const  FJ_UTC_OFFSET = 'utcOffset';
	const  FT_ABBREV     = 'pg_timezone_names.abbrev';
	const  FT_IS_DST     = 'pg_timezone_names.is_dst';
	const  FT_NAME       = 'pg_timezone_names.name';
	const  FT_UTC_OFFSET = 'pg_timezone_names.utc_offset';
	const  F_ABBREV      = 'abbrev';
	const  F_IS_DST      = 'is_dst';
	const  F_NAME        = 'name';
	const  F_UTC_OFFSET  = 'utc_offset';

    protected $table = 'pg_timezone_names';

	public static array $jsonable = [
		MPgTimezoneNames::FJ_NAME       =>[ MPgTimezoneNames::F_NAME       ,null,'string',           ],
		MPgTimezoneNames::FJ_ABBREV     =>[ MPgTimezoneNames::F_ABBREV     ,null,'string',           ],
		MPgTimezoneNames::FJ_UTC_OFFSET =>[ MPgTimezoneNames::F_UTC_OFFSET ,null,'string(interval)', ],
		MPgTimezoneNames::FJ_IS_DST     =>[ MPgTimezoneNames::F_IS_DST     ,null,'boolean',          ],
	];

		protected $visible = [
			self::F_NAME,
			self::F_ABBREV,
			self::F_UTC_OFFSET,
			self::F_IS_DST,
		]; 

		protected $fillable = [
		];





}

