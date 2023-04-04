<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgViews
 * Representation for db table pg_views.

 * @property  string(name) schemaname [1] type:name   
 * @property  string(name) viewname   [2] type:name   
 * @property  string(name) viewowner  [3] type:name   
 * @property  string       definition [4] type:text   
 * @package App\Models\DBModels\Model
 */
class MPgViews extends DBClass {


	const  FJ_DEFINITION = 'definition';
	const  FJ_SCHEMANAME = 'schemaname';
	const  FJ_VIEWNAME   = 'viewname';
	const  FJ_VIEWOWNER  = 'viewowner';
	const  FT_DEFINITION = 'pg_views.definition';
	const  FT_SCHEMANAME = 'pg_views.schemaname';
	const  FT_VIEWNAME   = 'pg_views.viewname';
	const  FT_VIEWOWNER  = 'pg_views.viewowner';
	const  F_DEFINITION  = 'definition';
	const  F_SCHEMANAME  = 'schemaname';
	const  F_VIEWNAME    = 'viewname';
	const  F_VIEWOWNER   = 'viewowner';

    protected $table = 'pg_views';

	public static array $jsonable = [
		MPgViews::FJ_SCHEMANAME =>[ MPgViews::F_SCHEMANAME ,null,'string(name)', ],
		MPgViews::FJ_VIEWNAME   =>[ MPgViews::F_VIEWNAME   ,null,'string(name)', ],
		MPgViews::FJ_VIEWOWNER  =>[ MPgViews::F_VIEWOWNER  ,null,'string(name)', ],
		MPgViews::FJ_DEFINITION =>[ MPgViews::F_DEFINITION ,null,'string',       ],
	];

		protected $visible = [
			self::F_SCHEMANAME,
			self::F_VIEWNAME,
			self::F_VIEWOWNER,
			self::F_DEFINITION,
		]; 

		protected $fillable = [
		];





}

