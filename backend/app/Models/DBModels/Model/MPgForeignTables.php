<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgForeignTables
 * Representation for db table _pg_foreign_tables.

 * @property  string(name)  foreign_table_catalog    [1] type:name    
 * @property  string(name)  foreign_table_schema     [2] type:name    
 * @property  string(name)  foreign_table_name       [3] type:name    
 * @property  string(_text) ftoptions                [4] type:_text   
 * @property  string(name)  foreign_server_catalog   [5] type:name    
 * @property  string(name)  foreign_server_name      [6] type:name    
 * @property  string(name)  authorization_identifier [7] type:name    
 * @package App\Models\DBModels\Model
 */
class MPgForeignTables extends DBClass {


	const  FJ_AUTHORIZATION_IDENTIFIER = 'authorizationIdentifier';
	const  FJ_FOREIGN_SERVER_CATALOG   = 'foreignServerCatalog';
	const  FJ_FOREIGN_SERVER_NAME      = 'foreignServerName';
	const  FJ_FOREIGN_TABLE_CATALOG    = 'foreignTableCatalog';
	const  FJ_FOREIGN_TABLE_NAME       = 'foreignTableName';
	const  FJ_FOREIGN_TABLE_SCHEMA     = 'foreignTableSchema';
	const  FJ_FTOPTIONS                = 'ftoptions';
	const  FT_AUTHORIZATION_IDENTIFIER = '_pg_foreign_tables.authorization_identifier';
	const  FT_FOREIGN_SERVER_CATALOG   = '_pg_foreign_tables.foreign_server_catalog';
	const  FT_FOREIGN_SERVER_NAME      = '_pg_foreign_tables.foreign_server_name';
	const  FT_FOREIGN_TABLE_CATALOG    = '_pg_foreign_tables.foreign_table_catalog';
	const  FT_FOREIGN_TABLE_NAME       = '_pg_foreign_tables.foreign_table_name';
	const  FT_FOREIGN_TABLE_SCHEMA     = '_pg_foreign_tables.foreign_table_schema';
	const  FT_FTOPTIONS                = '_pg_foreign_tables.ftoptions';
	const  F_AUTHORIZATION_IDENTIFIER  = 'authorization_identifier';
	const  F_FOREIGN_SERVER_CATALOG    = 'foreign_server_catalog';
	const  F_FOREIGN_SERVER_NAME       = 'foreign_server_name';
	const  F_FOREIGN_TABLE_CATALOG     = 'foreign_table_catalog';
	const  F_FOREIGN_TABLE_NAME        = 'foreign_table_name';
	const  F_FOREIGN_TABLE_SCHEMA      = 'foreign_table_schema';
	const  F_FTOPTIONS                 = 'ftoptions';

    protected $table = '_pg_foreign_tables';

	public static array $jsonable = [
		MPgForeignTables::FJ_FOREIGN_TABLE_CATALOG    =>[ MPgForeignTables::F_FOREIGN_TABLE_CATALOG    ,null,'string(name)',  ],
		MPgForeignTables::FJ_FOREIGN_TABLE_SCHEMA     =>[ MPgForeignTables::F_FOREIGN_TABLE_SCHEMA     ,null,'string(name)',  ],
		MPgForeignTables::FJ_FOREIGN_TABLE_NAME       =>[ MPgForeignTables::F_FOREIGN_TABLE_NAME       ,null,'string(name)',  ],
		MPgForeignTables::FJ_FTOPTIONS                =>[ MPgForeignTables::F_FTOPTIONS                ,null,'string(_text)', ],
		MPgForeignTables::FJ_FOREIGN_SERVER_CATALOG   =>[ MPgForeignTables::F_FOREIGN_SERVER_CATALOG   ,null,'string(name)',  ],
		MPgForeignTables::FJ_FOREIGN_SERVER_NAME      =>[ MPgForeignTables::F_FOREIGN_SERVER_NAME      ,null,'string(name)',  ],
		MPgForeignTables::FJ_AUTHORIZATION_IDENTIFIER =>[ MPgForeignTables::F_AUTHORIZATION_IDENTIFIER ,null,'string(name)',  ],
	];

		protected $visible = [
			self::F_FOREIGN_TABLE_CATALOG,
			self::F_FOREIGN_TABLE_SCHEMA,
			self::F_FOREIGN_TABLE_NAME,
			self::F_FTOPTIONS,
			self::F_FOREIGN_SERVER_CATALOG,
			self::F_FOREIGN_SERVER_NAME,
			self::F_AUTHORIZATION_IDENTIFIER,
		]; 

		protected $fillable = [
		];





}

