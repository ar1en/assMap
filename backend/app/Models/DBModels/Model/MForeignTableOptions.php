<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MForeignTableOptions
 * Representation for db table foreign_table_options.

 * @property  string(name) foreign_table_catalog [1] type:name      
 * @property  string(name) foreign_table_schema  [2] type:name      
 * @property  string(name) foreign_table_name    [3] type:name      
 * @property  string(name) option_name           [4] type:name      
 * @property  string       option_value          [5] type:varchar   
 * @package App\Models\DBModels\Model
 */
class MForeignTableOptions extends DBClass {


	const  FJ_FOREIGN_TABLE_CATALOG = 'foreignTableCatalog';
	const  FJ_FOREIGN_TABLE_NAME    = 'foreignTableName';
	const  FJ_FOREIGN_TABLE_SCHEMA  = 'foreignTableSchema';
	const  FJ_OPTION_NAME           = 'optionName';
	const  FJ_OPTION_VALUE          = 'optionValue';
	const  FT_FOREIGN_TABLE_CATALOG = 'foreign_table_options.foreign_table_catalog';
	const  FT_FOREIGN_TABLE_NAME    = 'foreign_table_options.foreign_table_name';
	const  FT_FOREIGN_TABLE_SCHEMA  = 'foreign_table_options.foreign_table_schema';
	const  FT_OPTION_NAME           = 'foreign_table_options.option_name';
	const  FT_OPTION_VALUE          = 'foreign_table_options.option_value';
	const  F_FOREIGN_TABLE_CATALOG  = 'foreign_table_catalog';
	const  F_FOREIGN_TABLE_NAME     = 'foreign_table_name';
	const  F_FOREIGN_TABLE_SCHEMA   = 'foreign_table_schema';
	const  F_OPTION_NAME            = 'option_name';
	const  F_OPTION_VALUE           = 'option_value';

    protected $table = 'foreign_table_options';

	public static array $jsonable = [
		MForeignTableOptions::FJ_FOREIGN_TABLE_CATALOG =>[ MForeignTableOptions::F_FOREIGN_TABLE_CATALOG ,null,'string(name)', ],
		MForeignTableOptions::FJ_FOREIGN_TABLE_SCHEMA  =>[ MForeignTableOptions::F_FOREIGN_TABLE_SCHEMA  ,null,'string(name)', ],
		MForeignTableOptions::FJ_FOREIGN_TABLE_NAME    =>[ MForeignTableOptions::F_FOREIGN_TABLE_NAME    ,null,'string(name)', ],
		MForeignTableOptions::FJ_OPTION_NAME           =>[ MForeignTableOptions::F_OPTION_NAME           ,null,'string(name)', ],
		MForeignTableOptions::FJ_OPTION_VALUE          =>[ MForeignTableOptions::F_OPTION_VALUE          ,null,'string',       ],
	];

		protected $visible = [
			self::F_FOREIGN_TABLE_CATALOG,
			self::F_FOREIGN_TABLE_SCHEMA,
			self::F_FOREIGN_TABLE_NAME,
			self::F_OPTION_NAME,
			self::F_OPTION_VALUE,
		]; 

		protected $fillable = [
		];





}

