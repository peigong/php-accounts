/*
SQLiteDbUtil SQL Export
-- Generated On Mon, 2 Sep 2013 08:17:26 UTC
-- Email:peigong@foxmail.com
-- blog:http://www.peigong.tk
*/

DROP TABLE IF EXISTS accounts_core_users;
CREATE TABLE accounts_core_users ( 
    user_id        INTEGER          PRIMARY KEY AUTOINCREMENT
                                    NOT NULL
                                    UNIQUE,
    user_name      NVARCHAR( 255 ),
    user_password  NVARCHAR( 255 ),
    last_logintime INTEGER          NOT NULL,
    update_time    INTEGER          NOT NULL,
    create_time    INTEGER          NOT NULL 
);

INSERT INTO accounts_core_users (user_id,user_name,user_password,last_logintime,update_time,create_time) VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1377956204', '1377956204', '1377956204');
