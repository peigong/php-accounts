/*- 账户系统用户数据表 -*/
DROP TABLE IF EXISTS "main"."accounts_core_users";
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
