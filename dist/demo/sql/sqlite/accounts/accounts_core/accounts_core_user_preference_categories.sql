/*
SQLiteDbUtil SQL Export
-- Generated On Mon, 2 Sep 2013 08:17:26 UTC
-- Email:peigong@foxmail.com
-- blog:http://www.peigong.tk
*/

DROP TABLE IF EXISTS accounts_core_user_preference_categories;
CREATE TABLE accounts_core_user_preference_categories ( 
    category_id   INTEGER          PRIMARY KEY AUTOINCREMENT
                                   NOT NULL
                                   UNIQUE,
    category_code NVARCHAR( 255 )  NOT NULL
                                   NOT NULL,
    category_name NVARCHAR( 255 )  NOT NULL,
    parent_code   NVARCHAR( 255 ),
    update_time   INTEGER          NOT NULL,
    create_time   INTEGER          NOT NULL 
);

