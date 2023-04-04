<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgSettings
 * Representation for db table pg_settings.

 * @property  string        name            [1]  type:text    
 * @property  string        setting         [2]  type:text    
 * @property  string        unit            [3]  type:text    
 * @property  string        category        [4]  type:text    
 * @property  string        short_desc      [5]  type:text    
 * @property  string        extra_desc      [6]  type:text    
 * @property  string        context         [7]  type:text    
 * @property  string        vartype         [8]  type:text    
 * @property  string        source          [9]  type:text    
 * @property  string        min_val         [10] type:text    
 * @property  string        max_val         [11] type:text    
 * @property  string(_text) enumvals        [12] type:_text   
 * @property  string        boot_val        [13] type:text    
 * @property  string        reset_val       [14] type:text    
 * @property  string        sourcefile      [15] type:text    
 * @property  int           sourceline      [16] type:int4    
 * @property  boolean       pending_restart [17] type:bool    
 * @package App\Models\DBModels\Model
 */
class MPgSettings extends DBClass {


	const  FJ_BOOT_VAL        = 'bootVal';
	const  FJ_CATEGORY        = 'category';
	const  FJ_CONTEXT         = 'context';
	const  FJ_ENUMVALS        = 'enumvals';
	const  FJ_EXTRA_DESC      = 'extraDesc';
	const  FJ_MAX_VAL         = 'maxVal';
	const  FJ_MIN_VAL         = 'minVal';
	const  FJ_NAME            = 'name';
	const  FJ_PENDING_RESTART = 'pendingRestart';
	const  FJ_RESET_VAL       = 'resetVal';
	const  FJ_SETTING         = 'setting';
	const  FJ_SHORT_DESC      = 'shortDesc';
	const  FJ_SOURCE          = 'source';
	const  FJ_SOURCEFILE      = 'sourcefile';
	const  FJ_SOURCELINE      = 'sourceline';
	const  FJ_UNIT            = 'unit';
	const  FJ_VARTYPE         = 'vartype';
	const  FT_BOOT_VAL        = 'pg_settings.boot_val';
	const  FT_CATEGORY        = 'pg_settings.category';
	const  FT_CONTEXT         = 'pg_settings.context';
	const  FT_ENUMVALS        = 'pg_settings.enumvals';
	const  FT_EXTRA_DESC      = 'pg_settings.extra_desc';
	const  FT_MAX_VAL         = 'pg_settings.max_val';
	const  FT_MIN_VAL         = 'pg_settings.min_val';
	const  FT_NAME            = 'pg_settings.name';
	const  FT_PENDING_RESTART = 'pg_settings.pending_restart';
	const  FT_RESET_VAL       = 'pg_settings.reset_val';
	const  FT_SETTING         = 'pg_settings.setting';
	const  FT_SHORT_DESC      = 'pg_settings.short_desc';
	const  FT_SOURCE          = 'pg_settings.source';
	const  FT_SOURCEFILE      = 'pg_settings.sourcefile';
	const  FT_SOURCELINE      = 'pg_settings.sourceline';
	const  FT_UNIT            = 'pg_settings.unit';
	const  FT_VARTYPE         = 'pg_settings.vartype';
	const  F_BOOT_VAL         = 'boot_val';
	const  F_CATEGORY         = 'category';
	const  F_CONTEXT          = 'context';
	const  F_ENUMVALS         = 'enumvals';
	const  F_EXTRA_DESC       = 'extra_desc';
	const  F_MAX_VAL          = 'max_val';
	const  F_MIN_VAL          = 'min_val';
	const  F_NAME             = 'name';
	const  F_PENDING_RESTART  = 'pending_restart';
	const  F_RESET_VAL        = 'reset_val';
	const  F_SETTING          = 'setting';
	const  F_SHORT_DESC       = 'short_desc';
	const  F_SOURCE           = 'source';
	const  F_SOURCEFILE       = 'sourcefile';
	const  F_SOURCELINE       = 'sourceline';
	const  F_UNIT             = 'unit';
	const  F_VARTYPE          = 'vartype';

    protected $table = 'pg_settings';

	public static array $jsonable = [
		MPgSettings::FJ_NAME            =>[ MPgSettings::F_NAME            ,null,'string',        ],
		MPgSettings::FJ_SETTING         =>[ MPgSettings::F_SETTING         ,null,'string',        ],
		MPgSettings::FJ_UNIT            =>[ MPgSettings::F_UNIT            ,null,'string',        ],
		MPgSettings::FJ_CATEGORY        =>[ MPgSettings::F_CATEGORY        ,null,'string',        ],
		MPgSettings::FJ_SHORT_DESC      =>[ MPgSettings::F_SHORT_DESC      ,null,'string',        ],
		MPgSettings::FJ_EXTRA_DESC      =>[ MPgSettings::F_EXTRA_DESC      ,null,'string',        ],
		MPgSettings::FJ_CONTEXT         =>[ MPgSettings::F_CONTEXT         ,null,'string',        ],
		MPgSettings::FJ_VARTYPE         =>[ MPgSettings::F_VARTYPE         ,null,'string',        ],
		MPgSettings::FJ_SOURCE          =>[ MPgSettings::F_SOURCE          ,null,'string',        ],
		MPgSettings::FJ_MIN_VAL         =>[ MPgSettings::F_MIN_VAL         ,null,'string',        ],
		MPgSettings::FJ_MAX_VAL         =>[ MPgSettings::F_MAX_VAL         ,null,'string',        ],
		MPgSettings::FJ_ENUMVALS        =>[ MPgSettings::F_ENUMVALS        ,null,'string(_text)', ],
		MPgSettings::FJ_BOOT_VAL        =>[ MPgSettings::F_BOOT_VAL        ,null,'string',        ],
		MPgSettings::FJ_RESET_VAL       =>[ MPgSettings::F_RESET_VAL       ,null,'string',        ],
		MPgSettings::FJ_SOURCEFILE      =>[ MPgSettings::F_SOURCEFILE      ,null,'string',        ],
		MPgSettings::FJ_SOURCELINE      =>[ MPgSettings::F_SOURCELINE      ,null,'number',        ],
		MPgSettings::FJ_PENDING_RESTART =>[ MPgSettings::F_PENDING_RESTART ,null,'boolean',       ],
	];

		protected $visible = [
			self::F_NAME,
			self::F_SETTING,
			self::F_UNIT,
			self::F_CATEGORY,
			self::F_SHORT_DESC,
			self::F_EXTRA_DESC,
			self::F_CONTEXT,
			self::F_VARTYPE,
			self::F_SOURCE,
			self::F_MIN_VAL,
			self::F_MAX_VAL,
			self::F_ENUMVALS,
			self::F_BOOT_VAL,
			self::F_RESET_VAL,
			self::F_SOURCEFILE,
			self::F_SOURCELINE,
			self::F_PENDING_RESTART,
		]; 

		protected $fillable = [
		];





}

