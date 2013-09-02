/*
SQLiteDbUtil SQL Export
-- Generated On Mon, 2 Sep 2013 08:17:26 UTC
-- Email:peigong@foxmail.com
-- blog:http://www.peigong.tk
*/

DROP TABLE IF EXISTS accounts_core_user_roles;
CREATE TABLE accounts_core_user_roles ( 
    user_role_id INTEGER PRIMARY KEY AUTOINCREMENT
                         NOT NULL
                         UNIQUE,
    user_id      INTEGER NOT NULL,
    role_id      INTEGER NOT NULL,
    update_time  INTEGER NOT NULL,
    create_time  INTEGER NOT NULL 
);

