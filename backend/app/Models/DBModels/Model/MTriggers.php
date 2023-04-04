<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MTriggers
 * Representation for db table triggers.

 * @property  string(name)        trigger_catalog            [1]  type:name          
 * @property  string(name)        trigger_schema             [2]  type:name          
 * @property  string(name)        trigger_name               [3]  type:name          
 * @property  string              event_manipulation         [4]  type:varchar       
 * @property  string(name)        event_object_catalog       [5]  type:name          
 * @property  string(name)        event_object_schema        [6]  type:name          
 * @property  string(name)        event_object_table         [7]  type:name          
 * @property  int                 action_order               [8]  type:int4          
 * @property  string              action_condition           [9]  type:varchar       
 * @property  string              action_statement           [10] type:varchar       
 * @property  string              action_orientation         [11] type:varchar       
 * @property  string              action_timing              [12] type:varchar       
 * @property  string(name)        action_reference_old_table [13] type:name          
 * @property  string(name)        action_reference_new_table [14] type:name          
 * @property  string(name)        action_reference_old_row   [15] type:name          
 * @property  string(name)        action_reference_new_row   [16] type:name          
 * @property  string(timestamptz) created                    [17] type:timestamptz   
 * @package App\Models\DBModels\Model
 */
class MTriggers extends DBClass {


	const  FJ_ACTION_CONDITION           = 'actionCondition';
	const  FJ_ACTION_ORDER               = 'actionOrder';
	const  FJ_ACTION_ORIENTATION         = 'actionOrientation';
	const  FJ_ACTION_REFERENCE_NEW_ROW   = 'actionReferenceNewRow';
	const  FJ_ACTION_REFERENCE_NEW_TABLE = 'actionReferenceNewTable';
	const  FJ_ACTION_REFERENCE_OLD_ROW   = 'actionReferenceOldRow';
	const  FJ_ACTION_REFERENCE_OLD_TABLE = 'actionReferenceOldTable';
	const  FJ_ACTION_STATEMENT           = 'actionStatement';
	const  FJ_ACTION_TIMING              = 'actionTiming';
	const  FJ_CREATED                    = 'created';
	const  FJ_EVENT_MANIPULATION         = 'eventManipulation';
	const  FJ_EVENT_OBJECT_CATALOG       = 'eventObjectCatalog';
	const  FJ_EVENT_OBJECT_SCHEMA        = 'eventObjectSchema';
	const  FJ_EVENT_OBJECT_TABLE         = 'eventObjectTable';
	const  FJ_TRIGGER_CATALOG            = 'triggerCatalog';
	const  FJ_TRIGGER_NAME               = 'triggerName';
	const  FJ_TRIGGER_SCHEMA             = 'triggerSchema';
	const  FT_ACTION_CONDITION           = 'triggers.action_condition';
	const  FT_ACTION_ORDER               = 'triggers.action_order';
	const  FT_ACTION_ORIENTATION         = 'triggers.action_orientation';
	const  FT_ACTION_REFERENCE_NEW_ROW   = 'triggers.action_reference_new_row';
	const  FT_ACTION_REFERENCE_NEW_TABLE = 'triggers.action_reference_new_table';
	const  FT_ACTION_REFERENCE_OLD_ROW   = 'triggers.action_reference_old_row';
	const  FT_ACTION_REFERENCE_OLD_TABLE = 'triggers.action_reference_old_table';
	const  FT_ACTION_STATEMENT           = 'triggers.action_statement';
	const  FT_ACTION_TIMING              = 'triggers.action_timing';
	const  FT_CREATED                    = 'triggers.created';
	const  FT_EVENT_MANIPULATION         = 'triggers.event_manipulation';
	const  FT_EVENT_OBJECT_CATALOG       = 'triggers.event_object_catalog';
	const  FT_EVENT_OBJECT_SCHEMA        = 'triggers.event_object_schema';
	const  FT_EVENT_OBJECT_TABLE         = 'triggers.event_object_table';
	const  FT_TRIGGER_CATALOG            = 'triggers.trigger_catalog';
	const  FT_TRIGGER_NAME               = 'triggers.trigger_name';
	const  FT_TRIGGER_SCHEMA             = 'triggers.trigger_schema';
	const  F_ACTION_CONDITION            = 'action_condition';
	const  F_ACTION_ORDER                = 'action_order';
	const  F_ACTION_ORIENTATION          = 'action_orientation';
	const  F_ACTION_REFERENCE_NEW_ROW    = 'action_reference_new_row';
	const  F_ACTION_REFERENCE_NEW_TABLE  = 'action_reference_new_table';
	const  F_ACTION_REFERENCE_OLD_ROW    = 'action_reference_old_row';
	const  F_ACTION_REFERENCE_OLD_TABLE  = 'action_reference_old_table';
	const  F_ACTION_STATEMENT            = 'action_statement';
	const  F_ACTION_TIMING               = 'action_timing';
	const  F_CREATED                     = 'created';
	const  F_EVENT_MANIPULATION          = 'event_manipulation';
	const  F_EVENT_OBJECT_CATALOG        = 'event_object_catalog';
	const  F_EVENT_OBJECT_SCHEMA         = 'event_object_schema';
	const  F_EVENT_OBJECT_TABLE          = 'event_object_table';
	const  F_TRIGGER_CATALOG             = 'trigger_catalog';
	const  F_TRIGGER_NAME                = 'trigger_name';
	const  F_TRIGGER_SCHEMA              = 'trigger_schema';

    protected $table = 'triggers';

	public static array $jsonable = [
		MTriggers::FJ_TRIGGER_CATALOG            =>[ MTriggers::F_TRIGGER_CATALOG            ,null,'string(name)',        ],
		MTriggers::FJ_TRIGGER_SCHEMA             =>[ MTriggers::F_TRIGGER_SCHEMA             ,null,'string(name)',        ],
		MTriggers::FJ_TRIGGER_NAME               =>[ MTriggers::F_TRIGGER_NAME               ,null,'string(name)',        ],
		MTriggers::FJ_EVENT_MANIPULATION         =>[ MTriggers::F_EVENT_MANIPULATION         ,null,'string',              ],
		MTriggers::FJ_EVENT_OBJECT_CATALOG       =>[ MTriggers::F_EVENT_OBJECT_CATALOG       ,null,'string(name)',        ],
		MTriggers::FJ_EVENT_OBJECT_SCHEMA        =>[ MTriggers::F_EVENT_OBJECT_SCHEMA        ,null,'string(name)',        ],
		MTriggers::FJ_EVENT_OBJECT_TABLE         =>[ MTriggers::F_EVENT_OBJECT_TABLE         ,null,'string(name)',        ],
		MTriggers::FJ_ACTION_ORDER               =>[ MTriggers::F_ACTION_ORDER               ,null,'number',              ],
		MTriggers::FJ_ACTION_CONDITION           =>[ MTriggers::F_ACTION_CONDITION           ,null,'string',              ],
		MTriggers::FJ_ACTION_STATEMENT           =>[ MTriggers::F_ACTION_STATEMENT           ,null,'string',              ],
		MTriggers::FJ_ACTION_ORIENTATION         =>[ MTriggers::F_ACTION_ORIENTATION         ,null,'string',              ],
		MTriggers::FJ_ACTION_TIMING              =>[ MTriggers::F_ACTION_TIMING              ,null,'string',              ],
		MTriggers::FJ_ACTION_REFERENCE_OLD_TABLE =>[ MTriggers::F_ACTION_REFERENCE_OLD_TABLE ,null,'string(name)',        ],
		MTriggers::FJ_ACTION_REFERENCE_NEW_TABLE =>[ MTriggers::F_ACTION_REFERENCE_NEW_TABLE ,null,'string(name)',        ],
		MTriggers::FJ_ACTION_REFERENCE_OLD_ROW   =>[ MTriggers::F_ACTION_REFERENCE_OLD_ROW   ,null,'string(name)',        ],
		MTriggers::FJ_ACTION_REFERENCE_NEW_ROW   =>[ MTriggers::F_ACTION_REFERENCE_NEW_ROW   ,null,'string(name)',        ],
		MTriggers::FJ_CREATED                    =>[ MTriggers::F_CREATED                    ,null,'string(timestamptz)', ],
	];

		protected $visible = [
			self::F_TRIGGER_CATALOG,
			self::F_TRIGGER_SCHEMA,
			self::F_TRIGGER_NAME,
			self::F_EVENT_MANIPULATION,
			self::F_EVENT_OBJECT_CATALOG,
			self::F_EVENT_OBJECT_SCHEMA,
			self::F_EVENT_OBJECT_TABLE,
			self::F_ACTION_ORDER,
			self::F_ACTION_CONDITION,
			self::F_ACTION_STATEMENT,
			self::F_ACTION_ORIENTATION,
			self::F_ACTION_TIMING,
			self::F_ACTION_REFERENCE_OLD_TABLE,
			self::F_ACTION_REFERENCE_NEW_TABLE,
			self::F_ACTION_REFERENCE_OLD_ROW,
			self::F_ACTION_REFERENCE_NEW_ROW,
			self::F_CREATED,
		]; 

		protected $fillable = [
		];





}

