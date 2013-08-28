/*- 账户系统角色数据表 -*/
DROP TABLE IF EXISTS "main"."accounts_core_roles";
CREATE TABLE accounts_core_roles ( 
    role_id          INTEGER          PRIMARY KEY AUTOINCREMENT
                                      NOT NULL
                                      UNIQUE,
    role_code        NVARCHAR( 20 ),
    role_name        NVARCHAR( 255 ),
    role_description NVARCHAR( 255 ),
    category_id      INTEGER          NOT NULL,
    update_time      INTEGER          NOT NULL,
    create_time      INTEGER          NOT NULL 
);
