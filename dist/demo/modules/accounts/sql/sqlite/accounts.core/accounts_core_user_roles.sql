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

INSERT INTO [accounts_core_user_roles] ([user_role_id], [user_id], [role_id], [update_time], [create_time]) VALUES (1, 1, 1, 1374114638, 1374114638);
INSERT INTO [accounts_core_user_roles] ([user_role_id], [user_id], [role_id], [update_time], [create_time]) VALUES (2, 1, 2, 1374114879, 1374114879);
INSERT INTO [accounts_core_user_roles] ([user_role_id], [user_id], [role_id], [update_time], [create_time]) VALUES (3, 1, 3, 1374114887, 1374114887);
INSERT INTO [accounts_core_user_roles] ([user_role_id], [user_id], [role_id], [update_time], [create_time]) VALUES (4, 1, 4, 1374114890, 1374114890);
INSERT INTO [accounts_core_user_roles] ([user_role_id], [user_id], [role_id], [update_time], [create_time]) VALUES (5, 2, 6, 1374415643, 1374415643);
INSERT INTO [accounts_core_user_roles] ([user_role_id], [user_id], [role_id], [update_time], [create_time]) VALUES (6, 3, 4, 1374489463, 1374489463);
INSERT INTO [accounts_core_user_roles] ([user_role_id], [user_id], [role_id], [update_time], [create_time]) VALUES (7, 3, 2, 1374489499, 1374489499);
INSERT INTO [accounts_core_user_roles] ([user_role_id], [user_id], [role_id], [update_time], [create_time]) VALUES (8, 3, 3, 1374489502, 1374489502);
INSERT INTO [accounts_core_user_roles] ([user_role_id], [user_id], [role_id], [update_time], [create_time]) VALUES (9, 4, 4, 1374489759, 1374489759);
INSERT INTO [accounts_core_user_roles] ([user_role_id], [user_id], [role_id], [update_time], [create_time]) VALUES (10, 5, 4, 1374493253, 1374493253);
INSERT INTO [accounts_core_user_roles] ([user_role_id], [user_id], [role_id], [update_time], [create_time]) VALUES (11, 7, 4, 1374872837, 1374872837);
INSERT INTO [accounts_core_user_roles] ([user_role_id], [user_id], [role_id], [update_time], [create_time]) VALUES (12, 8, 4, 1375010740, 1375010740);
INSERT INTO [accounts_core_user_roles] ([user_role_id], [user_id], [role_id], [update_time], [create_time]) VALUES (13, 15, 4, 1375185665, 1375185665);
INSERT INTO [accounts_core_user_roles] ([user_role_id], [user_id], [role_id], [update_time], [create_time]) VALUES (14, 10, 4, 1375186301, 1375186301);
INSERT INTO [accounts_core_user_roles] ([user_role_id], [user_id], [role_id], [update_time], [create_time]) VALUES (15, 19, 4, 1375209928, 1375209928);
INSERT INTO [accounts_core_user_roles] ([user_role_id], [user_id], [role_id], [update_time], [create_time]) VALUES (17, 20, 4, 1375291650, 1375291650);
