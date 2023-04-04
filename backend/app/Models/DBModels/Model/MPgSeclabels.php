<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgSeclabels
 * Representation for db table pg_seclabels.

 * @property  string(oid) objoid       [1] type:oid    
 * @property  string(oid) classoid     [2] type:oid    
 * @property  int         objsubid     [3] type:int4   
 * @property  string      objtype      [4] type:text   
 * @property  string(oid) objnamespace [5] type:oid    
 * @property  string      objname      [6] type:text   
 * @property  string      provider     [7] type:text   
 * @property  string      label        [8] type:text   
 * @package App\Models\DBModels\Model
 */
class MPgSeclabels extends DBClass {


	const  FJ_CLASSOID     = 'classoid';
	const  FJ_LABEL        = 'label';
	const  FJ_OBJNAME      = 'objname';
	const  FJ_OBJNAMESPACE = 'objnamespace';
	const  FJ_OBJOID       = 'objoid';
	const  FJ_OBJSUBID     = 'objsubid';
	const  FJ_OBJTYPE      = 'objtype';
	const  FJ_PROVIDER     = 'provider';
	const  FT_CLASSOID     = 'pg_seclabels.classoid';
	const  FT_LABEL        = 'pg_seclabels.label';
	const  FT_OBJNAME      = 'pg_seclabels.objname';
	const  FT_OBJNAMESPACE = 'pg_seclabels.objnamespace';
	const  FT_OBJOID       = 'pg_seclabels.objoid';
	const  FT_OBJSUBID     = 'pg_seclabels.objsubid';
	const  FT_OBJTYPE      = 'pg_seclabels.objtype';
	const  FT_PROVIDER     = 'pg_seclabels.provider';
	const  F_CLASSOID      = 'classoid';
	const  F_LABEL         = 'label';
	const  F_OBJNAME       = 'objname';
	const  F_OBJNAMESPACE  = 'objnamespace';
	const  F_OBJOID        = 'objoid';
	const  F_OBJSUBID      = 'objsubid';
	const  F_OBJTYPE       = 'objtype';
	const  F_PROVIDER      = 'provider';

    protected $table = 'pg_seclabels';

	public static array $jsonable = [
		MPgSeclabels::FJ_OBJOID       =>[ MPgSeclabels::F_OBJOID       ,null,'string(oid)', ],
		MPgSeclabels::FJ_CLASSOID     =>[ MPgSeclabels::F_CLASSOID     ,null,'string(oid)', ],
		MPgSeclabels::FJ_OBJSUBID     =>[ MPgSeclabels::F_OBJSUBID     ,null,'number',      ],
		MPgSeclabels::FJ_OBJTYPE      =>[ MPgSeclabels::F_OBJTYPE      ,null,'string',      ],
		MPgSeclabels::FJ_OBJNAMESPACE =>[ MPgSeclabels::F_OBJNAMESPACE ,null,'string(oid)', ],
		MPgSeclabels::FJ_OBJNAME      =>[ MPgSeclabels::F_OBJNAME      ,null,'string',      ],
		MPgSeclabels::FJ_PROVIDER     =>[ MPgSeclabels::F_PROVIDER     ,null,'string',      ],
		MPgSeclabels::FJ_LABEL        =>[ MPgSeclabels::F_LABEL        ,null,'string',      ],
	];

		protected $visible = [
			self::F_OBJOID,
			self::F_CLASSOID,
			self::F_OBJSUBID,
			self::F_OBJTYPE,
			self::F_OBJNAMESPACE,
			self::F_OBJNAME,
			self::F_PROVIDER,
			self::F_LABEL,
		]; 

		protected $fillable = [
		];





}

