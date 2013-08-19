/*- 用户首选项类型数据表 -*/
DROP TABLE IF EXISTS "main"."accounts_dict_user_preference_types";
CREATE TABLE accounts_dict_user_preference_types ( 
    type_id     INTEGER          PRIMARY KEY AUTOINCREMENT
                                 NOT NULL
                                 UNIQUE,
    type_code   NVARCHAR( 255 )  NOT NULL
                                 NOT NULL,
    type_name   NVARCHAR( 255 ),
    update_time INTEGER          NOT NULL,
    create_time INTEGER          NOT NULL 
);
