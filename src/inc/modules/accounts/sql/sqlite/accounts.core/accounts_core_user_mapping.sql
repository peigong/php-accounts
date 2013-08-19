/*- 账户映射关系表 -*/
DROP TABLE IF EXISTS "main"."accounts_core_user_mapping";
CREATE TABLE accounts_core_user_mapping ( 
    mapping_id         INTEGER          PRIMARY KEY AUTOINCREMENT
                                        NOT NULL
                                        UNIQUE,
    account_id         INTEGER          NOT NULL,
    mapping_account_id NVARCHAR( 255 )  NOT NULL,
    mapping_type       NVARCHAR( 255 )  NOT NULL,
    update_time        INTEGER          NOT NULL,
    create_time        INTEGER          NOT NULL 
);

INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (1, 1, 1, 'cookie', 1373783132, 1373783132);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (2, 1, '127.0.0.1', 'ip', 1373783132, 1373783132);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (3, 1, '10.0.41.100', 'ip', 1373783132, 1373783132);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (4, 1, '10.0.28.107', 'ip', 1374415491, 1374415491);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (5, 2, 2, 'cookie', 1374415520, 1374415520);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (6, 2, '10.0.28.100', 'ip', 1374415520, 1374415520);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (7, 3, 3, 'cookie', 1374489287, 1374489287);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (8, 3, '10.0.41.103', 'ip', 1374489287, 1374489287);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (9, 4, 4, 'cookie', 1374489613, 1374489613);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (10, 4, '10.0.41.105', 'ip', 1374489613, 1374489613);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (11, 5, 5, 'cookie', 1374493147, 1374493147);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (12, 5, '10.0.41.102', 'ip', 1374493147, 1374493147);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (13, 6, 6, 'cookie', 1374867306, 1374867306);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (14, 6, '10.0.180.123', 'ip', 1374867306, 1374867306);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (15, 7, 7, 'cookie', 1374872649, 1374872649);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (16, 7, '10.0.38.121', 'ip', 1374872650, 1374872650);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (17, 8, 8, 'cookie', 1374874535, 1374874535);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (18, 8, '10.0.37.103', 'ip', 1374874535, 1374874535);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (19, 9, 9, 'cookie', 1374944542, 1374944542);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (20, 9, '10.0.38.138', 'ip', 1374944542, 1374944542);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (21, 1, '10.0.28.118', 'ip', 1375009776, 1375009776);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (22, 10, 10, 'cookie', 1375092308, 1375092308);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (23, 10, '10.0.35.131', 'ip', 1375092308, 1375092308);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (24, 11, 11, 'cookie', 1375093682, 1375093682);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (25, 11, '10.0.36.100', 'ip', 1375093682, 1375093682);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (26, 12, 12, 'cookie', 1375099341, 1375099341);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (27, 12, '10.0.36.117', 'ip', 1375099341, 1375099341);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (28, 13, 13, 'cookie', 1375185018, 1375185018);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (29, 13, '10.0.2.19', 'ip', 1375185018, 1375185018);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (30, 14, 14, 'cookie', 1375185079, 1375185079);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (31, 14, '10.0.180.110', 'ip', 1375185079, 1375185079);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (32, 15, 15, 'cookie', 1375185397, 1375185397);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (33, 15, '10.0.180.106', 'ip', 1375185397, 1375185397);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (34, 16, 16, 'cookie', 1375185967, 1375185967);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (35, 16, '10.0.34.101', 'ip', 1375185967, 1375185967);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (36, 17, 17, 'cookie', 1375187000, 1375187000);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (37, 17, '10.0.96.103', 'ip', 1375187000, 1375187000);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (38, 18, 18, 'cookie', 1375187026, 1375187026);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (39, 18, '10.0.71.109', 'ip', 1375187026, 1375187026);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (40, 19, 19, 'cookie', 1375209816, 1375209816);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (41, 19, '10.0.101.102', 'ip', 1375209816, 1375209816);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (42, 20, 20, 'cookie', 1375285282, 1375285282);
INSERT INTO [accounts_core_user_mapping] ([mapping_id], [account_id], [mapping_account_id], [mapping_type], [update_time], [create_time]) VALUES (43, 20, '10.0.36.116', 'ip', 1375285282, 1375285282);
