<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgAvailableExtensionVersions
 * Representation for db table pg_available_extension_versions.

 * @property  string(name)  name        [1] type:name    
 * @property  string        version     [2] type:text    
 * @property  boolean       installed   [3] type:bool    
 * @property  boolean       superuser   [4] type:bool    
 * @property  boolean       trusted     [5] type:bool    
 * @property  boolean       relocatable [6] type:bool    
 * @property  string(name)  schema      [7] type:name    
 * @property  string(_name) requires    [8] type:_name   
 * @property  string        comment     [9] type:text    
 * @package App\Models\DBModels\Model
 */
class MPgAvailableExtensionVersions extends DBClass {


	const  FJ_COMMENT     = 'comment';
	const  FJ_INSTALLED   = 'installed';
	const  FJ_NAME        = 'name';
	const  FJ_RELOCATABLE = 'relocatable';
	const  FJ_REQUIRES    = 'requires';
	const  FJ_SCHEMA      = 'schema';
	const  FJ_SUPERUSER   = 'superuser';
	const  FJ_TRUSTED     = 'trusted';
	const  FJ_VERSION     = 'version';
	const  FT_COMMENT     = 'pg_available_extension_versions.comment';
	const  FT_INSTALLED   = 'pg_available_extension_versions.installed';
	const  FT_NAME        = 'pg_available_extension_versions.name';
	const  FT_RELOCATABLE = 'pg_available_extension_versions.relocatable';
	const  FT_REQUIRES    = 'pg_available_extension_versions.requires';
	const  FT_SCHEMA      = 'pg_available_extension_versions.schema';
	const  FT_SUPERUSER   = 'pg_available_extension_versions.superuser';
	const  FT_TRUSTED     = 'pg_available_extension_versions.trusted';
	const  FT_VERSION     = 'pg_available_extension_versions.version';
	const  F_COMMENT      = 'comment';
	const  F_INSTALLED    = 'installed';
	const  F_NAME         = 'name';
	const  F_RELOCATABLE  = 'relocatable';
	const  F_REQUIRES     = 'requires';
	const  F_SCHEMA       = 'schema';
	const  F_SUPERUSER    = 'superuser';
	const  F_TRUSTED      = 'trusted';
	const  F_VERSION      = 'version';

    protected $table = 'pg_available_extension_versions';

	public static array $jsonable = [
		MPgAvailableExtensionVersions::FJ_NAME        =>[ MPgAvailableExtensionVersions::F_NAME        ,null,'string(name)',  ],
		MPgAvailableExtensionVersions::FJ_VERSION     =>[ MPgAvailableExtensionVersions::F_VERSION     ,null,'string',        ],
		MPgAvailableExtensionVersions::FJ_INSTALLED   =>[ MPgAvailableExtensionVersions::F_INSTALLED   ,null,'boolean',       ],
		MPgAvailableExtensionVersions::FJ_SUPERUSER   =>[ MPgAvailableExtensionVersions::F_SUPERUSER   ,null,'boolean',       ],
		MPgAvailableExtensionVersions::FJ_TRUSTED     =>[ MPgAvailableExtensionVersions::F_TRUSTED     ,null,'boolean',       ],
		MPgAvailableExtensionVersions::FJ_RELOCATABLE =>[ MPgAvailableExtensionVersions::F_RELOCATABLE ,null,'boolean',       ],
		MPgAvailableExtensionVersions::FJ_SCHEMA      =>[ MPgAvailableExtensionVersions::F_SCHEMA      ,null,'string(name)',  ],
		MPgAvailableExtensionVersions::FJ_REQUIRES    =>[ MPgAvailableExtensionVersions::F_REQUIRES    ,null,'string(_name)', ],
		MPgAvailableExtensionVersions::FJ_COMMENT     =>[ MPgAvailableExtensionVersions::F_COMMENT     ,null,'string',        ],
	];

		protected $visible = [
			self::F_NAME,
			self::F_VERSION,
			self::F_INSTALLED,
			self::F_SUPERUSER,
			self::F_TRUSTED,
			self::F_RELOCATABLE,
			self::F_SCHEMA,
			self::F_REQUIRES,
			self::F_COMMENT,
		]; 

		protected $fillable = [
		];





}

