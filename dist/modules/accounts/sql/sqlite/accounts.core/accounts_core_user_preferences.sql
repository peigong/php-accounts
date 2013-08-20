/*- 用户偏好首选项的数据定义表 -*/
DROP TABLE IF EXISTS "main"."accounts_core_user_preferences";
CREATE TABLE accounts_core_user_preferences ( 
    preference_id       INTEGER          PRIMARY KEY AUTOINCREMENT
                                         NOT NULL
                                         UNIQUE,
    preference_key      NVARCHAR( 255 )  NOT NULL,
    preference_name     NVARCHAR( 255 ),
    preference_category NVARCHAR( 255 ),
    update_time         INTEGER          NOT NULL,
    create_time         INTEGER          NOT NULL 
);
