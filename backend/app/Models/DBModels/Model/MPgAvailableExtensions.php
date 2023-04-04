<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgAvailableExtensions
 * Representation for db table pg_available_extensions.

 * @property  string(name) name              [1] type:name   
 * @property  string       default_version   [2] type:text   
 * @property  string       installed_version [3] type:text   
 * @property  string       comment           [4] type:text   
 * @package App\Models\DBModels\Model
 */
class MPgAvailableExtensions extends DBClass {


	const  FJ_COMMENT           = 'comment';
	const  FJ_DEFAULT_VERSION   = 'defaultVersion';
	const  FJ_INSTALLED_VERSION = 'installedVersion';
	const  FJ_NAME              = 'name';
	const  FT_COMMENT           = 'pg_available_extensions.comment';
	const  FT_DEFAULT_VERSION   = 'pg_available_extensions.default_version';
	const  FT_INSTALLED_VERSION = 'pg_available_extensions.installed_version';
	const  FT_NAME              = 'pg_available_extensions.name';
	const  F_COMMENT            = 'comment';
	const  F_DEFAULT_VERSION    = 'default_version';
	const  F_INSTALLED_VERSION  = 'installed_version';
	const  F_NAME               = 'name';

    protected $table = 'pg_available_extensions';

	public static array $jsonable = [
		MPgAvailableExtensions::FJ_NAME              =>[ MPgAvailableExtensions::F_NAME              ,null,'string(name)', ],
		MPgAvailableExtensions::FJ_DEFAULT_VERSION   =>[ MPgAvailableExtensions::F_DEFAULT_VERSION   ,null,'string',       ],
		MPgAvailableExtensions::FJ_INSTALLED_VERSION =>[ MPgAvailableExtensions::F_INSTALLED_VERSION ,null,'string',       ],
		MPgAvailableExtensions::FJ_COMMENT           =>[ MPgAvailableExtensions::F_COMMENT           ,null,'string',       ],
	];

		protected $visible = [
			self::F_NAME,
			self::F_DEFAULT_VERSION,
			self::F_INSTALLED_VERSION,
			self::F_COMMENT,
		]; 

		protected $fillable = [
		];





}

