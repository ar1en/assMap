<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgGroup
 * Representation for db table pg_group.

 * @property  string(name) groname  [1] type:name   
 * @property  string(oid)  grosysid [2] type:oid    
 * @property  string(_oid) grolist  [3] type:_oid   
 * @package App\Models\DBModels\Model
 */
class MPgGroup extends DBClass {


	const  FJ_GROLIST  = 'grolist';
	const  FJ_GRONAME  = 'groname';
	const  FJ_GROSYSID = 'grosysid';
	const  FT_GROLIST  = 'pg_group.grolist';
	const  FT_GRONAME  = 'pg_group.groname';
	const  FT_GROSYSID = 'pg_group.grosysid';
	const  F_GROLIST   = 'grolist';
	const  F_GRONAME   = 'groname';
	const  F_GROSYSID  = 'grosysid';

    protected $table = 'pg_group';

	public static array $jsonable = [
		MPgGroup::FJ_GRONAME  =>[ MPgGroup::F_GRONAME  ,null,'string(name)', ],
		MPgGroup::FJ_GROSYSID =>[ MPgGroup::F_GROSYSID ,null,'string(oid)',  ],
		MPgGroup::FJ_GROLIST  =>[ MPgGroup::F_GROLIST  ,null,'string(_oid)', ],
	];

		protected $visible = [
			self::F_GRONAME,
			self::F_GROSYSID,
			self::F_GROLIST,
		]; 

		protected $fillable = [
		];





}

