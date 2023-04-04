<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MColumnOptions
 * Representation for db table column_options.

 * @property  string(name) table_catalog [1] type:name      
 * @property  string(name) table_schema  [2] type:name      
 * @property  string(name) table_name    [3] type:name      
 * @property  string(name) column_name   [4] type:name      
 * @property  string(name) option_name   [5] type:name      
 * @property  string       option_value  [6] type:varchar   
 * @package App\Models\DBModels\Model
 */
class MColumnOptions extends DBClass {


	const  FJ_COLUMN_NAME   = 'columnName';
	const  FJ_OPTION_NAME   = 'optionName';
	const  FJ_OPTION_VALUE  = 'optionValue';
	const  FJ_TABLE_CATALOG = 'tableCatalog';
	const  FJ_TABLE_NAME    = 'tableName';
	const  FJ_TABLE_SCHEMA  = 'tableSchema';
	const  FT_COLUMN_NAME   = 'column_options.column_name';
	const  FT_OPTION_NAME   = 'column_options.option_name';
	const  FT_OPTION_VALUE  = 'column_options.option_value';
	const  FT_TABLE_CATALOG = 'column_options.table_catalog';
	const  FT_TABLE_NAME    = 'column_options.table_name';
	const  FT_TABLE_SCHEMA  = 'column_options.table_schema';
	const  F_COLUMN_NAME    = 'column_name';
	const  F_OPTION_NAME    = 'option_name';
	const  F_OPTION_VALUE   = 'option_value';
	const  F_TABLE_CATALOG  = 'table_catalog';
	const  F_TABLE_NAME     = 'table_name';
	const  F_TABLE_SCHEMA   = 'table_schema';

    protected $table = 'column_options';

	public static array $jsonable = [
		MColumnOptions::FJ_TABLE_CATALOG =>[ MColumnOptions::F_TABLE_CATALOG ,null,'string(name)', ],
		MColumnOptions::FJ_TABLE_SCHEMA  =>[ MColumnOptions::F_TABLE_SCHEMA  ,null,'string(name)', ],
		MColumnOptions::FJ_TABLE_NAME    =>[ MColumnOptions::F_TABLE_NAME    ,null,'string(name)', ],
		MColumnOptions::FJ_COLUMN_NAME   =>[ MColumnOptions::F_COLUMN_NAME   ,null,'string(name)', ],
		MColumnOptions::FJ_OPTION_NAME   =>[ MColumnOptions::F_OPTION_NAME   ,null,'string(name)', ],
		MColumnOptions::FJ_OPTION_VALUE  =>[ MColumnOptions::F_OPTION_VALUE  ,null,'string',       ],
	];

		protected $visible = [
			self::F_TABLE_CATALOG,
			self::F_TABLE_SCHEMA,
			self::F_TABLE_NAME,
			self::F_COLUMN_NAME,
			self::F_OPTION_NAME,
			self::F_OPTION_VALUE,
		]; 

		protected $fillable = [
		];





}

