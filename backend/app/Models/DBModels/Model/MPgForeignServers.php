<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgForeignServers
 * Representation for db table _pg_foreign_servers.

 * @property  string(oid)   oid                          [1] type:oid       
 * @property  string(_text) srvoptions                   [2] type:_text     
 * @property  string(name)  foreign_server_catalog       [3] type:name      
 * @property  string(name)  foreign_server_name          [4] type:name      
 * @property  string(name)  foreign_data_wrapper_catalog [5] type:name      
 * @property  string(name)  foreign_data_wrapper_name    [6] type:name      
 * @property  string        foreign_server_type          [7] type:varchar   
 * @property  string        foreign_server_version       [8] type:varchar   
 * @property  string(name)  authorization_identifier     [9] type:name      
 * @package App\Models\DBModels\Model
 */
class MPgForeignServers extends DBClass {


	const  FJ_AUTHORIZATION_IDENTIFIER     = 'authorizationIdentifier';
	const  FJ_FOREIGN_DATA_WRAPPER_CATALOG = 'foreignDataWrapperCatalog';
	const  FJ_FOREIGN_DATA_WRAPPER_NAME    = 'foreignDataWrapperName';
	const  FJ_FOREIGN_SERVER_CATALOG       = 'foreignServerCatalog';
	const  FJ_FOREIGN_SERVER_NAME          = 'foreignServerName';
	const  FJ_FOREIGN_SERVER_TYPE          = 'foreignServerType';
	const  FJ_FOREIGN_SERVER_VERSION       = 'foreignServerVersion';
	const  FJ_OID                          = 'oid';
	const  FJ_SRVOPTIONS                   = 'srvoptions';
	const  FT_AUTHORIZATION_IDENTIFIER     = '_pg_foreign_servers.authorization_identifier';
	const  FT_FOREIGN_DATA_WRAPPER_CATALOG = '_pg_foreign_servers.foreign_data_wrapper_catalog';
	const  FT_FOREIGN_DATA_WRAPPER_NAME    = '_pg_foreign_servers.foreign_data_wrapper_name';
	const  FT_FOREIGN_SERVER_CATALOG       = '_pg_foreign_servers.foreign_server_catalog';
	const  FT_FOREIGN_SERVER_NAME          = '_pg_foreign_servers.foreign_server_name';
	const  FT_FOREIGN_SERVER_TYPE          = '_pg_foreign_servers.foreign_server_type';
	const  FT_FOREIGN_SERVER_VERSION       = '_pg_foreign_servers.foreign_server_version';
	const  FT_OID                          = '_pg_foreign_servers.oid';
	const  FT_SRVOPTIONS                   = '_pg_foreign_servers.srvoptions';
	const  F_AUTHORIZATION_IDENTIFIER      = 'authorization_identifier';
	const  F_FOREIGN_DATA_WRAPPER_CATALOG  = 'foreign_data_wrapper_catalog';
	const  F_FOREIGN_DATA_WRAPPER_NAME     = 'foreign_data_wrapper_name';
	const  F_FOREIGN_SERVER_CATALOG        = 'foreign_server_catalog';
	const  F_FOREIGN_SERVER_NAME           = 'foreign_server_name';
	const  F_FOREIGN_SERVER_TYPE           = 'foreign_server_type';
	const  F_FOREIGN_SERVER_VERSION        = 'foreign_server_version';
	const  F_OID                           = 'oid';
	const  F_SRVOPTIONS                    = 'srvoptions';

    protected $table = '_pg_foreign_servers';

	public static array $jsonable = [
		MPgForeignServers::FJ_OID                          =>[ MPgForeignServers::F_OID                          ,null,'string(oid)',   ],
		MPgForeignServers::FJ_SRVOPTIONS                   =>[ MPgForeignServers::F_SRVOPTIONS                   ,null,'string(_text)', ],
		MPgForeignServers::FJ_FOREIGN_SERVER_CATALOG       =>[ MPgForeignServers::F_FOREIGN_SERVER_CATALOG       ,null,'string(name)',  ],
		MPgForeignServers::FJ_FOREIGN_SERVER_NAME          =>[ MPgForeignServers::F_FOREIGN_SERVER_NAME          ,null,'string(name)',  ],
		MPgForeignServers::FJ_FOREIGN_DATA_WRAPPER_CATALOG =>[ MPgForeignServers::F_FOREIGN_DATA_WRAPPER_CATALOG ,null,'string(name)',  ],
		MPgForeignServers::FJ_FOREIGN_DATA_WRAPPER_NAME    =>[ MPgForeignServers::F_FOREIGN_DATA_WRAPPER_NAME    ,null,'string(name)',  ],
		MPgForeignServers::FJ_FOREIGN_SERVER_TYPE          =>[ MPgForeignServers::F_FOREIGN_SERVER_TYPE          ,null,'string',        ],
		MPgForeignServers::FJ_FOREIGN_SERVER_VERSION       =>[ MPgForeignServers::F_FOREIGN_SERVER_VERSION       ,null,'string',        ],
		MPgForeignServers::FJ_AUTHORIZATION_IDENTIFIER     =>[ MPgForeignServers::F_AUTHORIZATION_IDENTIFIER     ,null,'string(name)',  ],
	];

		protected $visible = [
			self::F_OID,
			self::F_SRVOPTIONS,
			self::F_FOREIGN_SERVER_CATALOG,
			self::F_FOREIGN_SERVER_NAME,
			self::F_FOREIGN_DATA_WRAPPER_CATALOG,
			self::F_FOREIGN_DATA_WRAPPER_NAME,
			self::F_FOREIGN_SERVER_TYPE,
			self::F_FOREIGN_SERVER_VERSION,
			self::F_AUTHORIZATION_IDENTIFIER,
		]; 

		protected $fillable = [
		];





}

