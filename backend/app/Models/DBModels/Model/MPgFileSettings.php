<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgFileSettings
 * Representation for db table pg_file_settings.

 * @property  string  sourcefile [1] type:text   
 * @property  int     sourceline [2] type:int4   
 * @property  int     seqno      [3] type:int4   
 * @property  string  name       [4] type:text   
 * @property  string  setting    [5] type:text   
 * @property  boolean applied    [6] type:bool   
 * @property  string  error      [7] type:text   
 * @package App\Models\DBModels\Model
 */
class MPgFileSettings extends DBClass {


	const  FJ_APPLIED    = 'applied';
	const  FJ_ERROR      = 'error';
	const  FJ_NAME       = 'name';
	const  FJ_SEQNO      = 'seqno';
	const  FJ_SETTING    = 'setting';
	const  FJ_SOURCEFILE = 'sourcefile';
	const  FJ_SOURCELINE = 'sourceline';
	const  FT_APPLIED    = 'pg_file_settings.applied';
	const  FT_ERROR      = 'pg_file_settings.error';
	const  FT_NAME       = 'pg_file_settings.name';
	const  FT_SEQNO      = 'pg_file_settings.seqno';
	const  FT_SETTING    = 'pg_file_settings.setting';
	const  FT_SOURCEFILE = 'pg_file_settings.sourcefile';
	const  FT_SOURCELINE = 'pg_file_settings.sourceline';
	const  F_APPLIED     = 'applied';
	const  F_ERROR       = 'error';
	const  F_NAME        = 'name';
	const  F_SEQNO       = 'seqno';
	const  F_SETTING     = 'setting';
	const  F_SOURCEFILE  = 'sourcefile';
	const  F_SOURCELINE  = 'sourceline';

    protected $table = 'pg_file_settings';

	public static array $jsonable = [
		MPgFileSettings::FJ_SOURCEFILE =>[ MPgFileSettings::F_SOURCEFILE ,null,'string',  ],
		MPgFileSettings::FJ_SOURCELINE =>[ MPgFileSettings::F_SOURCELINE ,null,'number',  ],
		MPgFileSettings::FJ_SEQNO      =>[ MPgFileSettings::F_SEQNO      ,null,'number',  ],
		MPgFileSettings::FJ_NAME       =>[ MPgFileSettings::F_NAME       ,null,'string',  ],
		MPgFileSettings::FJ_SETTING    =>[ MPgFileSettings::F_SETTING    ,null,'string',  ],
		MPgFileSettings::FJ_APPLIED    =>[ MPgFileSettings::F_APPLIED    ,null,'boolean', ],
		MPgFileSettings::FJ_ERROR      =>[ MPgFileSettings::F_ERROR      ,null,'string',  ],
	];

		protected $visible = [
			self::F_SOURCEFILE,
			self::F_SOURCELINE,
			self::F_SEQNO,
			self::F_NAME,
			self::F_SETTING,
			self::F_APPLIED,
			self::F_ERROR,
		]; 

		protected $fillable = [
		];





}

