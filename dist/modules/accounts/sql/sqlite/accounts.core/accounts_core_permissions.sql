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

INSERT INTO [accounts_core_permissions] ([permission_id], [permission_code], [permission_name], [permission_description], [category_id], [update_time], [create_time]) VALUES (1, 'workbench_enter', '进入工作区的权限', '能够通过工作台链接进入系统工作区。', 0, 1374027917, 1374027917);
INSERT INTO [accounts_core_permissions] ([permission_id], [permission_code], [permission_name], [permission_description], [category_id], [update_time], [create_time]) VALUES (2, 'model_design', '设计模型和模型表单的权限', '能够进行模型设计区，设计系统的模型和模型表单。', 0, 1374028075, 1374028075);
INSERT INTO [accounts_core_permissions] ([permission_id], [permission_code], [permission_name], [permission_description], [category_id], [update_time], [create_time]) VALUES (3, 'slot_manage', '管理广告位的权限', '可以管理广告调度系统的广告位配置数据。', 0, 1374028149, 1374028149);
INSERT INTO [accounts_core_permissions] ([permission_id], [permission_code], [permission_name], [permission_description], [category_id], [update_time], [create_time]) VALUES (4, 'user_manage', '系统账户的管理权限', '可以管理系统中的账户，以及账户所拥有的角色和IP映射关系。', 0, 1374028222, 1374028222);
INSERT INTO [accounts_core_permissions] ([permission_id], [permission_code], [permission_name], [permission_description], [category_id], [update_time], [create_time]) VALUES (5, 'svn_report_read', '查询SOS团队SVN报告的权限', '可以查阅SOS团队的SVN报告', 0, 1374028353, 1374028353);
INSERT INTO [accounts_core_permissions] ([permission_id], [permission_code], [permission_name], [permission_description], [category_id], [update_time], [create_time]) VALUES (6, 'download', '下载统一DEMO中对外公开的下载资源的权限', '可以下载对外有限公开的下载资源', 0, 1374310145, 1374028425);
INSERT INTO [accounts_core_permissions] ([permission_id], [permission_code], [permission_name], [permission_description], [category_id], [update_time], [create_time]) VALUES (7, 'rbac_define', '角色、许可的定义权限', '可以定义角色、许可及角色和许可的关系。', 0, 1374040123, 1374040123);
