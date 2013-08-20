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

INSERT INTO [accounts_core_role_permissions] ([role_permission_id], [role_id], [permission_id], [update_time], [create_time]) VALUES (1, 1, 1, 1374050914, 1374050914);
INSERT INTO [accounts_core_role_permissions] ([role_permission_id], [role_id], [permission_id], [update_time], [create_time]) VALUES (2, 1, 2, 1374051096, 1374051096);
INSERT INTO [accounts_core_role_permissions] ([role_permission_id], [role_id], [permission_id], [update_time], [create_time]) VALUES (3, 1, 7, 1374051108, 1374051108);
INSERT INTO [accounts_core_role_permissions] ([role_permission_id], [role_id], [permission_id], [update_time], [create_time]) VALUES (4, 2, 4, 1374051120, 1374051120);
INSERT INTO [accounts_core_role_permissions] ([role_permission_id], [role_id], [permission_id], [update_time], [create_time]) VALUES (5, 3, 3, 1374051130, 1374051130);
INSERT INTO [accounts_core_role_permissions] ([role_permission_id], [role_id], [permission_id], [update_time], [create_time]) VALUES (6, 4, 5, 1374051186, 1374051186);
INSERT INTO [accounts_core_role_permissions] ([role_permission_id], [role_id], [permission_id], [update_time], [create_time]) VALUES (7, 4, 6, 1374051206, 1374051206);
INSERT INTO [accounts_core_role_permissions] ([role_permission_id], [role_id], [permission_id], [update_time], [create_time]) VALUES (8, 5, 6, 1374051215, 1374051215);
INSERT INTO [accounts_core_role_permissions] ([role_permission_id], [role_id], [permission_id], [update_time], [create_time]) VALUES (9, 6, 6, 1374051221, 1374051221);
INSERT INTO [accounts_core_role_permissions] ([role_permission_id], [role_id], [permission_id], [update_time], [create_time]) VALUES (10, 2, 1, 1374115386, 1374115386);
INSERT INTO [accounts_core_role_permissions] ([role_permission_id], [role_id], [permission_id], [update_time], [create_time]) VALUES (11, 3, 1, 1374115389, 1374115389);
INSERT INTO [accounts_core_role_permissions] ([role_permission_id], [role_id], [permission_id], [update_time], [create_time]) VALUES (12, 4, 1, 1374115392, 1374115392);
INSERT INTO [accounts_core_role_permissions] ([role_permission_id], [role_id], [permission_id], [update_time], [create_time]) VALUES (13, 5, 1, 1374115396, 1374115396);
