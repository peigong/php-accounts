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

INSERT INTO [accounts_core_users] ([user_id], [user_name], [user_password], [last_logintime], [update_time], [create_time]) VALUES (1, 'zhangyu', '74bfa4f3a8546e5ad2f460b01a22dadc', 1373783132, 1373783132, 1373783132);
INSERT INTO [accounts_core_users] ([user_id], [user_name], [user_password], [last_logintime], [update_time], [create_time]) VALUES (2, '卢山林', '057417e3730dcdaa1e0e8313b7fc61e4', 1374415520, 1374415520, 1374415520);
INSERT INTO [accounts_core_users] ([user_id], [user_name], [user_password], [last_logintime], [update_time], [create_time]) VALUES (3, 'xingruiting', 'd964173dc44da83eeafa3aebbee9a1a0', 1374489287, 1374489287, 1374489287);
INSERT INTO [accounts_core_users] ([user_id], [user_name], [user_password], [last_logintime], [update_time], [create_time]) VALUES (4, 'yangxiaowei', '202cb962ac59075b964b07152d234b70', 1374489612, 1374489612, 1374489612);
INSERT INTO [accounts_core_users] ([user_id], [user_name], [user_password], [last_logintime], [update_time], [create_time]) VALUES (5, 'cuihanwen', '1bc468b14a0e1b6fb262574e7811683d', 1374493147, 1374493147, 1374493147);
INSERT INTO [accounts_core_users] ([user_id], [user_name], [user_password], [last_logintime], [update_time], [create_time]) VALUES (6, '', '', 1374867306, 1374867306, 1374867306);
INSERT INTO [accounts_core_users] ([user_id], [user_name], [user_password], [last_logintime], [update_time], [create_time]) VALUES (7, '陆遥', 'a906449d5769fa7361d7ecc6aa3f6d28', 1374872649, 1374872649, 1374872649);
INSERT INTO [accounts_core_users] ([user_id], [user_name], [user_password], [last_logintime], [update_time], [create_time]) VALUES (8, '王月', '', 1374874535, 1374874535, 1374874535);
INSERT INTO [accounts_core_users] ([user_id], [user_name], [user_password], [last_logintime], [update_time], [create_time]) VALUES (9, '', '', 1374944542, 1374944542, 1374944542);
INSERT INTO [accounts_core_users] ([user_id], [user_name], [user_password], [last_logintime], [update_time], [create_time]) VALUES (10, 'liuhuiyong', '408c70b2a985fa80fecec2a1f1400915', 1375092308, 1375092308, 1375092308);
INSERT INTO [accounts_core_users] ([user_id], [user_name], [user_password], [last_logintime], [update_time], [create_time]) VALUES (11, '', '', 1375093682, 1375093682, 1375093682);
INSERT INTO [accounts_core_users] ([user_id], [user_name], [user_password], [last_logintime], [update_time], [create_time]) VALUES (12, '', '', 1375099341, 1375099341, 1375099341);
INSERT INTO [accounts_core_users] ([user_id], [user_name], [user_password], [last_logintime], [update_time], [create_time]) VALUES (13, '', '', 1375185018, 1375185018, 1375185018);
INSERT INTO [accounts_core_users] ([user_id], [user_name], [user_password], [last_logintime], [update_time], [create_time]) VALUES (14, '', '', 1375185079, 1375185079, 1375185079);
INSERT INTO [accounts_core_users] ([user_id], [user_name], [user_password], [last_logintime], [update_time], [create_time]) VALUES (15, 'ruyi', '', 1375185397, 1375185397, 1375185397);
INSERT INTO [accounts_core_users] ([user_id], [user_name], [user_password], [last_logintime], [update_time], [create_time]) VALUES (16, '', '', 1375185967, 1375185967, 1375185967);
INSERT INTO [accounts_core_users] ([user_id], [user_name], [user_password], [last_logintime], [update_time], [create_time]) VALUES (17, '', '', 1375187000, 1375187000, 1375187000);
INSERT INTO [accounts_core_users] ([user_id], [user_name], [user_password], [last_logintime], [update_time], [create_time]) VALUES (18, '', '', 1375187026, 1375187026, 1375187026);
INSERT INTO [accounts_core_users] ([user_id], [user_name], [user_password], [last_logintime], [update_time], [create_time]) VALUES (19, 'wangmingming', '', 1375209816, 1375209816, 1375209816);
INSERT INTO [accounts_core_users] ([user_id], [user_name], [user_password], [last_logintime], [update_time], [create_time]) VALUES (20, '沈鑫', 'cd4b478aeed6c1bc43c0b974024fc34f', 1375285282, 1375285282, 1375285282);
