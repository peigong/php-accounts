/*- 账户系统角色和许可的关联数据表 -*/
DROP TABLE IF EXISTS "main"."accounts_core_role_permissions";
CREATE TABLE accounts_core_role_permissions ( 
    role_permission_id INTEGER PRIMARY KEY AUTOINCREMENT
                               NOT NULL
                               UNIQUE,
    role_id            INTEGER NOT NULL,
    permission_id      INTEGER NOT NULL,
    update_time        INTEGER NOT NULL,
    create_time        INTEGER NOT NULL 
);
