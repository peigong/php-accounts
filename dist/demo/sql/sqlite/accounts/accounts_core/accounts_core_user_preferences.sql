/*
SQLiteDbUtil SQL Export
-- Generated On Mon, 2 Sep 2013 08:17:26 UTC
-- Email:peigong@foxmail.com
-- blog:http://www.peigong.tk
*/

DROP TABLE IF EXISTS accounts_core_user_preferences;
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

