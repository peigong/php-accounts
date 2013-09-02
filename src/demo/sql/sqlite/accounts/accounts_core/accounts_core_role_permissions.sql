/*
SQLiteDbUtil SQL Export
-- Generated On Mon, 2 Sep 2013 03:21:45 UTC
-- Email:peigong@foxmail.com
-- blog:http://www.peigong.tk
*/

DROP TABLE IF EXISTS accounts_core_role_permissions;
CREATE TABLE accounts_core_role_permissions ( 
    role_permission_id INTEGER PRIMARY KEY AUTOINCREMENT
                               NOT NULL
                               UNIQUE,
    role_id            INTEGER NOT NULL,
    permission_id      INTEGER NOT NULL,
    update_time        INTEGER NOT NULL,
    create_time        INTEGER NOT NULL 
);

