/*
SQLiteDbUtil SQL Export
-- Generated On Mon, 2 Sep 2013 03:21:45 UTC
-- Email:peigong@foxmail.com
-- blog:http://www.peigong.tk
*/

DROP TABLE IF EXISTS accounts_core_permissions;
CREATE TABLE accounts_core_permissions ( 
    permission_id          INTEGER          PRIMARY KEY AUTOINCREMENT
                                            NOT NULL
                                            UNIQUE,
    permission_code        NVARCHAR( 20 ),
    permission_name        NVARCHAR( 255 ),
    permission_description NVARCHAR( 255 ),
    category_id            INTEGER          NOT NULL,
    update_time            INTEGER          NOT NULL,
    create_time            INTEGER          NOT NULL 
);

