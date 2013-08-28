/*- 账户系统许可数据表 -*/
DROP TABLE IF EXISTS "main"."accounts_core_permissions";
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
