<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MForeignTables
 * Representation for db table foreign_tables.

 * @property  string(name) foreign_table_catalog  [1] type:name   
 * @property  string(name) foreign_table_schema   [2] type:name   
 * @property  string(name) foreign_table_name     [3] type:name   
 * @property  string(name) foreign_server_catalog [4] type:name   
 * @property  string(name) foreign_server_name    [5] type:name   
 * @package App\Models\DBModels\Model
 */
class MForeignTables extends DBClass {


	const  FJ_FOREIGN_SERVER_CATALOG = 'foreignServerCatalog';
	const  FJ_FOREIGN_SERVER_NAME    = 'foreignServerName';
	const  FJ_FOREIGN_TABLE_CATALOG  = 'foreignTableCatalog';
	const  FJ_FOREIGN_TABLE_NAME     = 'foreignTableName';
	const  FJ_FOREIGN_TABLE_SCHEMA   = 'foreignTableSchema';
	const  FT_FOREIGN_SERVER_CATALOG = 'foreign_tables.foreign_server_catalog';
	const  FT_FOREIGN_SERVER_NAME    = 'foreign_tables.foreign_server_name';
	const  FT_FOREIGN_TABLE_CATALOG  = 'foreign_tables.foreign_table_catalog';
	const  FT_FOREIGN_TABLE_NAME     = 'foreign_tables.foreign_table_name';
	const  FT_FOREIGN_TABLE_SCHEMA   = 'foreign_tables.foreign_table_schema';
	const  F_FOREIGN_SERVER_CATALOG  = 'foreign_server_catalog';
	const  F_FOREIGN_SERVER_NAME     = 'foreign_server_name';
	const  F_FOREIGN_TABLE_CATALOG   = 'foreign_table_catalog';
	const  F_FOREIGN_TABLE_NAME      = 'foreign_table_name';
	const  F_FOREIGN_TABLE_SCHEMA    = 'foreign_table_schema';

    protected $table = 'foreign_tables';

	public static array $jsonable = [
		MForeignTables::FJ_FOREIGN_TABLE_CATALOG  =>[ MForeignTables::F_FOREIGN_TABLE_CATALOG  ,null,'string(name)', ],
		MForeignTables::FJ_FOREIGN_TABLE_SCHEMA   =>[ MForeignTables::F_FOREIGN_TABLE_SCHEMA   ,null,'string(name)', ],
		MForeignTables::FJ_FOREIGN_TABLE_NAME     =>[ MForeignTables::F_FOREIGN_TABLE_NAME     ,null,'string(name)', ],
		MForeignTables::FJ_FOREIGN_SERVER_CATALOG =>[ MForeignTables::F_FOREIGN_SERVER_CATALOG ,null,'string(name)', ],
		MForeignTables::FJ_FOREIGN_SERVER_NAME    =>[ MForeignTables::F_FOREIGN_SERVER_NAME    ,null,'string(name)', ],
	];

		protected $visible = [
			self::F_FOREIGN_TABLE_CATALOG,
			self::F_FOREIGN_TABLE_SCHEMA,
			self::F_FOREIGN_TABLE_NAME,
			self::F_FOREIGN_SERVER_CATALOG,
			self::F_FOREIGN_SERVER_NAME,
		]; 

		protected $fillable = [
		];





}

