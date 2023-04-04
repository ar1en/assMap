<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MCollationCharacterSetApplicability
 * Representation for db table collation_character_set_applicability.

 * @property  string(name) collation_catalog     [1] type:name   
 * @property  string(name) collation_schema      [2] type:name   
 * @property  string(name) collation_name        [3] type:name   
 * @property  string(name) character_set_catalog [4] type:name   
 * @property  string(name) character_set_schema  [5] type:name   
 * @property  string(name) character_set_name    [6] type:name   
 * @package App\Models\DBModels\Model
 */
class MCollationCharacterSetApplicability extends DBClass {


	const  FJ_CHARACTER_SET_CATALOG = 'characterSetCatalog';
	const  FJ_CHARACTER_SET_NAME    = 'characterSetName';
	const  FJ_CHARACTER_SET_SCHEMA  = 'characterSetSchema';
	const  FJ_COLLATION_CATALOG     = 'collationCatalog';
	const  FJ_COLLATION_NAME        = 'collationName';
	const  FJ_COLLATION_SCHEMA      = 'collationSchema';
	const  FT_CHARACTER_SET_CATALOG = 'collation_character_set_applicability.character_set_catalog';
	const  FT_CHARACTER_SET_NAME    = 'collation_character_set_applicability.character_set_name';
	const  FT_CHARACTER_SET_SCHEMA  = 'collation_character_set_applicability.character_set_schema';
	const  FT_COLLATION_CATALOG     = 'collation_character_set_applicability.collation_catalog';
	const  FT_COLLATION_NAME        = 'collation_character_set_applicability.collation_name';
	const  FT_COLLATION_SCHEMA      = 'collation_character_set_applicability.collation_schema';
	const  F_CHARACTER_SET_CATALOG  = 'character_set_catalog';
	const  F_CHARACTER_SET_NAME     = 'character_set_name';
	const  F_CHARACTER_SET_SCHEMA   = 'character_set_schema';
	const  F_COLLATION_CATALOG      = 'collation_catalog';
	const  F_COLLATION_NAME         = 'collation_name';
	const  F_COLLATION_SCHEMA       = 'collation_schema';

    protected $table = 'collation_character_set_applicability';

	public static array $jsonable = [
		MCollationCharacterSetApplicability::FJ_COLLATION_CATALOG     =>[ MCollationCharacterSetApplicability::F_COLLATION_CATALOG     ,null,'string(name)', ],
		MCollationCharacterSetApplicability::FJ_COLLATION_SCHEMA      =>[ MCollationCharacterSetApplicability::F_COLLATION_SCHEMA      ,null,'string(name)', ],
		MCollationCharacterSetApplicability::FJ_COLLATION_NAME        =>[ MCollationCharacterSetApplicability::F_COLLATION_NAME        ,null,'string(name)', ],
		MCollationCharacterSetApplicability::FJ_CHARACTER_SET_CATALOG =>[ MCollationCharacterSetApplicability::F_CHARACTER_SET_CATALOG ,null,'string(name)', ],
		MCollationCharacterSetApplicability::FJ_CHARACTER_SET_SCHEMA  =>[ MCollationCharacterSetApplicability::F_CHARACTER_SET_SCHEMA  ,null,'string(name)', ],
		MCollationCharacterSetApplicability::FJ_CHARACTER_SET_NAME    =>[ MCollationCharacterSetApplicability::F_CHARACTER_SET_NAME    ,null,'string(name)', ],
	];

		protected $visible = [
			self::F_COLLATION_CATALOG,
			self::F_COLLATION_SCHEMA,
			self::F_COLLATION_NAME,
			self::F_CHARACTER_SET_CATALOG,
			self::F_CHARACTER_SET_SCHEMA,
			self::F_CHARACTER_SET_NAME,
		]; 

		protected $fillable = [
		];





}

