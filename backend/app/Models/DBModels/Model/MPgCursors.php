<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgCursors
 * Representation for db table pg_cursors.

 * @property  string              name          [1] type:text          
 * @property  string              statement     [2] type:text          
 * @property  boolean             is_holdable   [3] type:bool          
 * @property  boolean             is_binary     [4] type:bool          
 * @property  boolean             is_scrollable [5] type:bool          
 * @property  string(timestamptz) creation_time [6] type:timestamptz   
 * @package App\Models\DBModels\Model
 */
class MPgCursors extends DBClass {


	const  FJ_CREATION_TIME = 'creationTime';
	const  FJ_IS_BINARY     = 'isBinary';
	const  FJ_IS_HOLDABLE   = 'isHoldable';
	const  FJ_IS_SCROLLABLE = 'isScrollable';
	const  FJ_NAME          = 'name';
	const  FJ_STATEMENT     = 'statement';
	const  FT_CREATION_TIME = 'pg_cursors.creation_time';
	const  FT_IS_BINARY     = 'pg_cursors.is_binary';
	const  FT_IS_HOLDABLE   = 'pg_cursors.is_holdable';
	const  FT_IS_SCROLLABLE = 'pg_cursors.is_scrollable';
	const  FT_NAME          = 'pg_cursors.name';
	const  FT_STATEMENT     = 'pg_cursors.statement';
	const  F_CREATION_TIME  = 'creation_time';
	const  F_IS_BINARY      = 'is_binary';
	const  F_IS_HOLDABLE    = 'is_holdable';
	const  F_IS_SCROLLABLE  = 'is_scrollable';
	const  F_NAME           = 'name';
	const  F_STATEMENT      = 'statement';

    protected $table = 'pg_cursors';

	public static array $jsonable = [
		MPgCursors::FJ_NAME          =>[ MPgCursors::F_NAME          ,null,'string',              ],
		MPgCursors::FJ_STATEMENT     =>[ MPgCursors::F_STATEMENT     ,null,'string',              ],
		MPgCursors::FJ_IS_HOLDABLE   =>[ MPgCursors::F_IS_HOLDABLE   ,null,'boolean',             ],
		MPgCursors::FJ_IS_BINARY     =>[ MPgCursors::F_IS_BINARY     ,null,'boolean',             ],
		MPgCursors::FJ_IS_SCROLLABLE =>[ MPgCursors::F_IS_SCROLLABLE ,null,'boolean',             ],
		MPgCursors::FJ_CREATION_TIME =>[ MPgCursors::F_CREATION_TIME ,null,'string(timestamptz)', ],
	];

		protected $visible = [
			self::F_NAME,
			self::F_STATEMENT,
			self::F_IS_HOLDABLE,
			self::F_IS_BINARY,
			self::F_IS_SCROLLABLE,
			self::F_CREATION_TIME,
		]; 

		protected $fillable = [
		];





}

