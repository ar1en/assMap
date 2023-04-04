<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgIdentFileMappings
 * Representation for db table pg_ident_file_mappings.

 * @property  int    line_number [1] type:int4   
 * @property  string map_name    [2] type:text   
 * @property  string sys_name    [3] type:text   
 * @property  string pg_username [4] type:text   
 * @property  string error       [5] type:text   
 * @package App\Models\DBModels\Model
 */
class MPgIdentFileMappings extends DBClass {


	const  FJ_ERROR       = 'error';
	const  FJ_LINE_NUMBER = 'lineNumber';
	const  FJ_MAP_NAME    = 'mapName';
	const  FJ_PG_USERNAME = 'pgUsername';
	const  FJ_SYS_NAME    = 'sysName';
	const  FT_ERROR       = 'pg_ident_file_mappings.error';
	const  FT_LINE_NUMBER = 'pg_ident_file_mappings.line_number';
	const  FT_MAP_NAME    = 'pg_ident_file_mappings.map_name';
	const  FT_PG_USERNAME = 'pg_ident_file_mappings.pg_username';
	const  FT_SYS_NAME    = 'pg_ident_file_mappings.sys_name';
	const  F_ERROR        = 'error';
	const  F_LINE_NUMBER  = 'line_number';
	const  F_MAP_NAME     = 'map_name';
	const  F_PG_USERNAME  = 'pg_username';
	const  F_SYS_NAME     = 'sys_name';

    protected $table = 'pg_ident_file_mappings';

	public static array $jsonable = [
		MPgIdentFileMappings::FJ_LINE_NUMBER =>[ MPgIdentFileMappings::F_LINE_NUMBER ,null,'number', ],
		MPgIdentFileMappings::FJ_MAP_NAME    =>[ MPgIdentFileMappings::F_MAP_NAME    ,null,'string', ],
		MPgIdentFileMappings::FJ_SYS_NAME    =>[ MPgIdentFileMappings::F_SYS_NAME    ,null,'string', ],
		MPgIdentFileMappings::FJ_PG_USERNAME =>[ MPgIdentFileMappings::F_PG_USERNAME ,null,'string', ],
		MPgIdentFileMappings::FJ_ERROR       =>[ MPgIdentFileMappings::F_ERROR       ,null,'string', ],
	];

		protected $visible = [
			self::F_LINE_NUMBER,
			self::F_MAP_NAME,
			self::F_SYS_NAME,
			self::F_PG_USERNAME,
			self::F_ERROR,
		]; 

		protected $fillable = [
		];





}

