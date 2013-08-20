/*- 广告位数据表 -*/
DROP TABLE IF EXISTS accounts_user_preferences;
CREATE TABLE accounts_user_preferences ( 
    user_preference_id   INTEGER          PRIMARY KEY AUTOINCREMENT
                                          NOT NULL
                                          UNIQUE,
    user_id              INTEGER          NOT NULL,
    preference_key       NVARCHAR( 255 )  NOT NULL
                                          NOT NULL,
    preference_value     NVARCHAR( 255 ),
    user_preference_type NVARCHAR( 255 )  NOT NULL
                                          NOT NULL,
    update_time          INTEGER          NOT NULL,
    create_time          INTEGER          NOT NULL 
);
