/*- 账户系统用户和角色的关联数据表 -*/
DROP TABLE IF EXISTS "main"."accounts_core_user_roles";
CREATE TABLE accounts_core_user_roles ( 
    user_role_id INTEGER PRIMARY KEY AUTOINCREMENT
                         NOT NULL
                         UNIQUE,
    user_id      INTEGER NOT NULL,
    role_id      INTEGER NOT NULL,
    update_time  INTEGER NOT NULL,
    create_time  INTEGER NOT NULL 
);
