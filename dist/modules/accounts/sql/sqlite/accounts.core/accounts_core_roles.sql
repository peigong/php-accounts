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

INSERT INTO [accounts_core_roles] ([role_id], [role_code], [role_name], [role_description], [category_id], [update_time], [create_time]) VALUES (1, 'administrator', '系统管理员', '管理系统级别的基础信息', 0, 1374027395, 1374027395);
INSERT INTO [accounts_core_roles] ([role_id], [role_code], [role_name], [role_description], [category_id], [update_time], [create_time]) VALUES (2, 'acc_manager', '账户系统管理员', '管理系统中的用户、角色等信息。', 0, 1374027549, 1374027549);
INSERT INTO [accounts_core_roles] ([role_id], [role_code], [role_name], [role_description], [category_id], [update_time], [create_time]) VALUES (3, 'ade_manager', '广告调度系统管理员', '管理广告调度系统中的广告位等信息', 0, 1374027591, 1374027591);
INSERT INTO [accounts_core_roles] ([role_id], [role_code], [role_name], [role_description], [category_id], [update_time], [create_time]) VALUES (4, 'developer', '开发者', '参与广告前端系统的开发工作', 0, 1374027687, 1374027687);
INSERT INTO [accounts_core_roles] ([role_id], [role_code], [role_name], [role_description], [category_id], [update_time], [create_time]) VALUES (5, 'tester', '测试者', '测试广告前端系统的人。', 0, 1374027767, 1374027767);
INSERT INTO [accounts_core_roles] ([role_id], [role_code], [role_name], [role_description], [category_id], [update_time], [create_time]) VALUES (6, 'stakeholder', '干系人', '关切广告前端系统的人', 0, 1374027826, 1374027826);
