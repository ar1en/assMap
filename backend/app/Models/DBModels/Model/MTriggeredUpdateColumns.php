<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MTriggeredUpdateColumns
 * Representation for db table triggered_update_columns.

 * @property  string(name) trigger_catalog      [1] type:name   
 * @property  string(name) trigger_schema       [2] type:name   
 * @property  string(name) trigger_name         [3] type:name   
 * @property  string(name) event_object_catalog [4] type:name   
 * @property  string(name) event_object_schema  [5] type:name   
 * @property  string(name) event_object_table   [6] type:name   
 * @property  string(name) event_object_column  [7] type:name   
 * @package App\Models\DBModels\Model
 */
class MTriggeredUpdateColumns extends DBClass {


	const  FJ_EVENT_OBJECT_CATALOG = 'eventObjectCatalog';
	const  FJ_EVENT_OBJECT_COLUMN  = 'eventObjectColumn';
	const  FJ_EVENT_OBJECT_SCHEMA  = 'eventObjectSchema';
	const  FJ_EVENT_OBJECT_TABLE   = 'eventObjectTable';
	const  FJ_TRIGGER_CATALOG      = 'triggerCatalog';
	const  FJ_TRIGGER_NAME         = 'triggerName';
	const  FJ_TRIGGER_SCHEMA       = 'triggerSchema';
	const  FT_EVENT_OBJECT_CATALOG = 'triggered_update_columns.event_object_catalog';
	const  FT_EVENT_OBJECT_COLUMN  = 'triggered_update_columns.event_object_column';
	const  FT_EVENT_OBJECT_SCHEMA  = 'triggered_update_columns.event_object_schema';
	const  FT_EVENT_OBJECT_TABLE   = 'triggered_update_columns.event_object_table';
	const  FT_TRIGGER_CATALOG      = 'triggered_update_columns.trigger_catalog';
	const  FT_TRIGGER_NAME         = 'triggered_update_columns.trigger_name';
	const  FT_TRIGGER_SCHEMA       = 'triggered_update_columns.trigger_schema';
	const  F_EVENT_OBJECT_CATALOG  = 'event_object_catalog';
	const  F_EVENT_OBJECT_COLUMN   = 'event_object_column';
	const  F_EVENT_OBJECT_SCHEMA   = 'event_object_schema';
	const  F_EVENT_OBJECT_TABLE    = 'event_object_table';
	const  F_TRIGGER_CATALOG       = 'trigger_catalog';
	const  F_TRIGGER_NAME          = 'trigger_name';
	const  F_TRIGGER_SCHEMA        = 'trigger_schema';

    protected $table = 'triggered_update_columns';

	public static array $jsonable = [
		MTriggeredUpdateColumns::FJ_TRIGGER_CATALOG      =>[ MTriggeredUpdateColumns::F_TRIGGER_CATALOG      ,null,'string(name)', ],
		MTriggeredUpdateColumns::FJ_TRIGGER_SCHEMA       =>[ MTriggeredUpdateColumns::F_TRIGGER_SCHEMA       ,null,'string(name)', ],
		MTriggeredUpdateColumns::FJ_TRIGGER_NAME         =>[ MTriggeredUpdateColumns::F_TRIGGER_NAME         ,null,'string(name)', ],
		MTriggeredUpdateColumns::FJ_EVENT_OBJECT_CATALOG =>[ MTriggeredUpdateColumns::F_EVENT_OBJECT_CATALOG ,null,'string(name)', ],
		MTriggeredUpdateColumns::FJ_EVENT_OBJECT_SCHEMA  =>[ MTriggeredUpdateColumns::F_EVENT_OBJECT_SCHEMA  ,null,'string(name)', ],
		MTriggeredUpdateColumns::FJ_EVENT_OBJECT_TABLE   =>[ MTriggeredUpdateColumns::F_EVENT_OBJECT_TABLE   ,null,'string(name)', ],
		MTriggeredUpdateColumns::FJ_EVENT_OBJECT_COLUMN  =>[ MTriggeredUpdateColumns::F_EVENT_OBJECT_COLUMN  ,null,'string(name)', ],
	];

		protected $visible = [
			self::F_TRIGGER_CATALOG,
			self::F_TRIGGER_SCHEMA,
			self::F_TRIGGER_NAME,
			self::F_EVENT_OBJECT_CATALOG,
			self::F_EVENT_OBJECT_SCHEMA,
			self::F_EVENT_OBJECT_TABLE,
			self::F_EVENT_OBJECT_COLUMN,
		]; 

		protected $fillable = [
		];





}

