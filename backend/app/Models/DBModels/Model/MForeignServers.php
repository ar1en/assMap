<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MForeignServers
 * Representation for db table foreign_servers.

 * @property  string(name) foreign_server_catalog       [1] type:name      
 * @property  string(name) foreign_server_name          [2] type:name      
 * @property  string(name) foreign_data_wrapper_catalog [3] type:name      
 * @property  string(name) foreign_data_wrapper_name    [4] type:name      
 * @property  string       foreign_server_type          [5] type:varchar   
 * @property  string       foreign_server_version       [6] type:varchar   
 * @property  string(name) authorization_identifier     [7] type:name      
 * @package App\Models\DBModels\Model
 */
class MForeignServers extends DBClass {


	const  FJ_AUTHORIZATION_IDENTIFIER     = 'authorizationIdentifier';
	const  FJ_FOREIGN_DATA_WRAPPER_CATALOG = 'foreignDataWrapperCatalog';
	const  FJ_FOREIGN_DATA_WRAPPER_NAME    = 'foreignDataWrapperName';
	const  FJ_FOREIGN_SERVER_CATALOG       = 'foreignServerCatalog';
	const  FJ_FOREIGN_SERVER_NAME          = 'foreignServerName';
	const  FJ_FOREIGN_SERVER_TYPE          = 'foreignServerType';
	const  FJ_FOREIGN_SERVER_VERSION       = 'foreignServerVersion';
	const  FT_AUTHORIZATION_IDENTIFIER     = 'foreign_servers.authorization_identifier';
	const  FT_FOREIGN_DATA_WRAPPER_CATALOG = 'foreign_servers.foreign_data_wrapper_catalog';
	const  FT_FOREIGN_DATA_WRAPPER_NAME    = 'foreign_servers.foreign_data_wrapper_name';
	const  FT_FOREIGN_SERVER_CATALOG       = 'foreign_servers.foreign_server_catalog';
	const  FT_FOREIGN_SERVER_NAME          = 'foreign_servers.foreign_server_name';
	const  FT_FOREIGN_SERVER_TYPE          = 'foreign_servers.foreign_server_type';
	const  FT_FOREIGN_SERVER_VERSION       = 'foreign_servers.foreign_server_version';
	const  F_AUTHORIZATION_IDENTIFIER      = 'authorization_identifier';
	const  F_FOREIGN_DATA_WRAPPER_CATALOG  = 'foreign_data_wrapper_catalog';
	const  F_FOREIGN_DATA_WRAPPER_NAME     = 'foreign_data_wrapper_name';
	const  F_FOREIGN_SERVER_CATALOG        = 'foreign_server_catalog';
	const  F_FOREIGN_SERVER_NAME           = 'foreign_server_name';
	const  F_FOREIGN_SERVER_TYPE           = 'foreign_server_type';
	const  F_FOREIGN_SERVER_VERSION        = 'foreign_server_version';

    protected $table = 'foreign_servers';

	public static array $jsonable = [
		MForeignServers::FJ_FOREIGN_SERVER_CATALOG       =>[ MForeignServers::F_FOREIGN_SERVER_CATALOG       ,null,'string(name)', ],
		MForeignServers::FJ_FOREIGN_SERVER_NAME          =>[ MForeignServers::F_FOREIGN_SERVER_NAME          ,null,'string(name)', ],
		MForeignServers::FJ_FOREIGN_DATA_WRAPPER_CATALOG =>[ MForeignServers::F_FOREIGN_DATA_WRAPPER_CATALOG ,null,'string(name)', ],
		MForeignServers::FJ_FOREIGN_DATA_WRAPPER_NAME    =>[ MForeignServers::F_FOREIGN_DATA_WRAPPER_NAME    ,null,'string(name)', ],
		MForeignServers::FJ_FOREIGN_SERVER_TYPE          =>[ MForeignServers::F_FOREIGN_SERVER_TYPE          ,null,'string',       ],
		MForeignServers::FJ_FOREIGN_SERVER_VERSION       =>[ MForeignServers::F_FOREIGN_SERVER_VERSION       ,null,'string',       ],
		MForeignServers::FJ_AUTHORIZATION_IDENTIFIER     =>[ MForeignServers::F_AUTHORIZATION_IDENTIFIER     ,null,'string(name)', ],
	];

		protected $visible = [
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

