<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MSchemata
 * Representation for db table schemata.

 * @property  string(name) catalog_name                  [1] type:name      
 * @property  string(name) schema_name                   [2] type:name      
 * @property  string(name) schema_owner                  [3] type:name      
 * @property  string(name) default_character_set_catalog [4] type:name      
 * @property  string(name) default_character_set_schema  [5] type:name      
 * @property  string(name) default_character_set_name    [6] type:name      
 * @property  string       sql_path                      [7] type:varchar   
 * @package App\Models\DBModels\Model
 */
class MSchemata extends DBClass {


	const  FJ_CATALOG_NAME                  = 'catalogName';
	const  FJ_DEFAULT_CHARACTER_SET_CATALOG = 'defaultCharacterSetCatalog';
	const  FJ_DEFAULT_CHARACTER_SET_NAME    = 'defaultCharacterSetName';
	const  FJ_DEFAULT_CHARACTER_SET_SCHEMA  = 'defaultCharacterSetSchema';
	const  FJ_SCHEMA_NAME                   = 'schemaName';
	const  FJ_SCHEMA_OWNER                  = 'schemaOwner';
	const  FJ_SQL_PATH                      = 'sqlPath';
	const  FT_CATALOG_NAME                  = 'schemata.catalog_name';
	const  FT_DEFAULT_CHARACTER_SET_CATALOG = 'schemata.default_character_set_catalog';
	const  FT_DEFAULT_CHARACTER_SET_NAME    = 'schemata.default_character_set_name';
	const  FT_DEFAULT_CHARACTER_SET_SCHEMA  = 'schemata.default_character_set_schema';
	const  FT_SCHEMA_NAME                   = 'schemata.schema_name';
	const  FT_SCHEMA_OWNER                  = 'schemata.schema_owner';
	const  FT_SQL_PATH                      = 'schemata.sql_path';
	const  F_CATALOG_NAME                   = 'catalog_name';
	const  F_DEFAULT_CHARACTER_SET_CATALOG  = 'default_character_set_catalog';
	const  F_DEFAULT_CHARACTER_SET_NAME     = 'default_character_set_name';
	const  F_DEFAULT_CHARACTER_SET_SCHEMA   = 'default_character_set_schema';
	const  F_SCHEMA_NAME                    = 'schema_name';
	const  F_SCHEMA_OWNER                   = 'schema_owner';
	const  F_SQL_PATH                       = 'sql_path';

    protected $table = 'schemata';

	public static array $jsonable = [
		MSchemata::FJ_CATALOG_NAME                  =>[ MSchemata::F_CATALOG_NAME                  ,null,'string(name)', ],
		MSchemata::FJ_SCHEMA_NAME                   =>[ MSchemata::F_SCHEMA_NAME                   ,null,'string(name)', ],
		MSchemata::FJ_SCHEMA_OWNER                  =>[ MSchemata::F_SCHEMA_OWNER                  ,null,'string(name)', ],
		MSchemata::FJ_DEFAULT_CHARACTER_SET_CATALOG =>[ MSchemata::F_DEFAULT_CHARACTER_SET_CATALOG ,null,'string(name)', ],
		MSchemata::FJ_DEFAULT_CHARACTER_SET_SCHEMA  =>[ MSchemata::F_DEFAULT_CHARACTER_SET_SCHEMA  ,null,'string(name)', ],
		MSchemata::FJ_DEFAULT_CHARACTER_SET_NAME    =>[ MSchemata::F_DEFAULT_CHARACTER_SET_NAME    ,null,'string(name)', ],
		MSchemata::FJ_SQL_PATH                      =>[ MSchemata::F_SQL_PATH                      ,null,'string',       ],
	];

		protected $visible = [
			self::F_CATALOG_NAME,
			self::F_SCHEMA_NAME,
			self::F_SCHEMA_OWNER,
			self::F_DEFAULT_CHARACTER_SET_CATALOG,
			self::F_DEFAULT_CHARACTER_SET_SCHEMA,
			self::F_DEFAULT_CHARACTER_SET_NAME,
			self::F_SQL_PATH,
		]; 

		protected $fillable = [
		];





}

