<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MCollations
 * Representation for db table collations.

 * @property  string(name) collation_catalog [1] type:name      
 * @property  string(name) collation_schema  [2] type:name      
 * @property  string(name) collation_name    [3] type:name      
 * @property  string       pad_attribute     [4] type:varchar   
 * @package App\Models\DBModels\Model
 */
class MCollations extends DBClass {


	const  FJ_COLLATION_CATALOG = 'collationCatalog';
	const  FJ_COLLATION_NAME    = 'collationName';
	const  FJ_COLLATION_SCHEMA  = 'collationSchema';
	const  FJ_PAD_ATTRIBUTE     = 'padAttribute';
	const  FT_COLLATION_CATALOG = 'collations.collation_catalog';
	const  FT_COLLATION_NAME    = 'collations.collation_name';
	const  FT_COLLATION_SCHEMA  = 'collations.collation_schema';
	const  FT_PAD_ATTRIBUTE     = 'collations.pad_attribute';
	const  F_COLLATION_CATALOG  = 'collation_catalog';
	const  F_COLLATION_NAME     = 'collation_name';
	const  F_COLLATION_SCHEMA   = 'collation_schema';
	const  F_PAD_ATTRIBUTE      = 'pad_attribute';

    protected $table = 'collations';

	public static array $jsonable = [
		MCollations::FJ_COLLATION_CATALOG =>[ MCollations::F_COLLATION_CATALOG ,null,'string(name)', ],
		MCollations::FJ_COLLATION_SCHEMA  =>[ MCollations::F_COLLATION_SCHEMA  ,null,'string(name)', ],
		MCollations::FJ_COLLATION_NAME    =>[ MCollations::F_COLLATION_NAME    ,null,'string(name)', ],
		MCollations::FJ_PAD_ATTRIBUTE     =>[ MCollations::F_PAD_ATTRIBUTE     ,null,'string',       ],
	];

		protected $visible = [
			self::F_COLLATION_CATALOG,
			self::F_COLLATION_SCHEMA,
			self::F_COLLATION_NAME,
			self::F_PAD_ATTRIBUTE,
		]; 

		protected $fillable = [
		];





}

