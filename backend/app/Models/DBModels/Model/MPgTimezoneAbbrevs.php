<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgTimezoneAbbrevs
 * Representation for db table pg_timezone_abbrevs.

 * @property  string           abbrev     [1] type:text       
 * @property  string(interval) utc_offset [2] type:interval   
 * @property  boolean          is_dst     [3] type:bool       
 * @package App\Models\DBModels\Model
 */
class MPgTimezoneAbbrevs extends DBClass {


	const  FJ_ABBREV     = 'abbrev';
	const  FJ_IS_DST     = 'isDst';
	const  FJ_UTC_OFFSET = 'utcOffset';
	const  FT_ABBREV     = 'pg_timezone_abbrevs.abbrev';
	const  FT_IS_DST     = 'pg_timezone_abbrevs.is_dst';
	const  FT_UTC_OFFSET = 'pg_timezone_abbrevs.utc_offset';
	const  F_ABBREV      = 'abbrev';
	const  F_IS_DST      = 'is_dst';
	const  F_UTC_OFFSET  = 'utc_offset';

    protected $table = 'pg_timezone_abbrevs';

	public static array $jsonable = [
		MPgTimezoneAbbrevs::FJ_ABBREV     =>[ MPgTimezoneAbbrevs::F_ABBREV     ,null,'string',           ],
		MPgTimezoneAbbrevs::FJ_UTC_OFFSET =>[ MPgTimezoneAbbrevs::F_UTC_OFFSET ,null,'string(interval)', ],
		MPgTimezoneAbbrevs::FJ_IS_DST     =>[ MPgTimezoneAbbrevs::F_IS_DST     ,null,'boolean',          ],
	];

		protected $visible = [
			self::F_ABBREV,
			self::F_UTC_OFFSET,
			self::F_IS_DST,
		]; 

		protected $fillable = [
		];





}

