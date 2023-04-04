<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MCharacterSets
 * Representation for db table character_sets.

 * @property  string(name) character_set_catalog   [1] type:name   
 * @property  string(name) character_set_schema    [2] type:name   
 * @property  string(name) character_set_name      [3] type:name   
 * @property  string(name) character_repertoire    [4] type:name   
 * @property  string(name) form_of_use             [5] type:name   
 * @property  string(name) default_collate_catalog [6] type:name   
 * @property  string(name) default_collate_schema  [7] type:name   
 * @property  string(name) default_collate_name    [8] type:name   
 * @package App\Models\DBModels\Model
 */
class MCharacterSets extends DBClass {


	const  FJ_CHARACTER_REPERTOIRE    = 'characterRepertoire';
	const  FJ_CHARACTER_SET_CATALOG   = 'characterSetCatalog';
	const  FJ_CHARACTER_SET_NAME      = 'characterSetName';
	const  FJ_CHARACTER_SET_SCHEMA    = 'characterSetSchema';
	const  FJ_DEFAULT_COLLATE_CATALOG = 'defaultCollateCatalog';
	const  FJ_DEFAULT_COLLATE_NAME    = 'defaultCollateName';
	const  FJ_DEFAULT_COLLATE_SCHEMA  = 'defaultCollateSchema';
	const  FJ_FORM_OF_USE             = 'formOfUse';
	const  FT_CHARACTER_REPERTOIRE    = 'character_sets.character_repertoire';
	const  FT_CHARACTER_SET_CATALOG   = 'character_sets.character_set_catalog';
	const  FT_CHARACTER_SET_NAME      = 'character_sets.character_set_name';
	const  FT_CHARACTER_SET_SCHEMA    = 'character_sets.character_set_schema';
	const  FT_DEFAULT_COLLATE_CATALOG = 'character_sets.default_collate_catalog';
	const  FT_DEFAULT_COLLATE_NAME    = 'character_sets.default_collate_name';
	const  FT_DEFAULT_COLLATE_SCHEMA  = 'character_sets.default_collate_schema';
	const  FT_FORM_OF_USE             = 'character_sets.form_of_use';
	const  F_CHARACTER_REPERTOIRE     = 'character_repertoire';
	const  F_CHARACTER_SET_CATALOG    = 'character_set_catalog';
	const  F_CHARACTER_SET_NAME       = 'character_set_name';
	const  F_CHARACTER_SET_SCHEMA     = 'character_set_schema';
	const  F_DEFAULT_COLLATE_CATALOG  = 'default_collate_catalog';
	const  F_DEFAULT_COLLATE_NAME     = 'default_collate_name';
	const  F_DEFAULT_COLLATE_SCHEMA   = 'default_collate_schema';
	const  F_FORM_OF_USE              = 'form_of_use';

    protected $table = 'character_sets';

	public static array $jsonable = [
		MCharacterSets::FJ_CHARACTER_SET_CATALOG   =>[ MCharacterSets::F_CHARACTER_SET_CATALOG   ,null,'string(name)', ],
		MCharacterSets::FJ_CHARACTER_SET_SCHEMA    =>[ MCharacterSets::F_CHARACTER_SET_SCHEMA    ,null,'string(name)', ],
		MCharacterSets::FJ_CHARACTER_SET_NAME      =>[ MCharacterSets::F_CHARACTER_SET_NAME      ,null,'string(name)', ],
		MCharacterSets::FJ_CHARACTER_REPERTOIRE    =>[ MCharacterSets::F_CHARACTER_REPERTOIRE    ,null,'string(name)', ],
		MCharacterSets::FJ_FORM_OF_USE             =>[ MCharacterSets::F_FORM_OF_USE             ,null,'string(name)', ],
		MCharacterSets::FJ_DEFAULT_COLLATE_CATALOG =>[ MCharacterSets::F_DEFAULT_COLLATE_CATALOG ,null,'string(name)', ],
		MCharacterSets::FJ_DEFAULT_COLLATE_SCHEMA  =>[ MCharacterSets::F_DEFAULT_COLLATE_SCHEMA  ,null,'string(name)', ],
		MCharacterSets::FJ_DEFAULT_COLLATE_NAME    =>[ MCharacterSets::F_DEFAULT_COLLATE_NAME    ,null,'string(name)', ],
	];

		protected $visible = [
			self::F_CHARACTER_SET_CATALOG,
			self::F_CHARACTER_SET_SCHEMA,
			self::F_CHARACTER_SET_NAME,
			self::F_CHARACTER_REPERTOIRE,
			self::F_FORM_OF_USE,
			self::F_DEFAULT_COLLATE_CATALOG,
			self::F_DEFAULT_COLLATE_SCHEMA,
			self::F_DEFAULT_COLLATE_NAME,
		]; 

		protected $fillable = [
		];





}

