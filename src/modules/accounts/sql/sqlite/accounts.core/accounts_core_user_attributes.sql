/*- 账户系统用户与扩展属性的关联关系数据表 -*/
DROP TABLE IF EXISTS accounts_core_user_attributes;
CREATE TABLE accounts_core_user_attributes ( 
    model_attribute_id INTEGER         PRIMARY KEY
                                       NOT NULL
                                       UNIQUE,
    model_code         NVARCHAR( 20 )  NOT NULL,
    model_id           INTEGER         NOT NULL,
    attribute_id       INTEGER         NOT NULL,
    str_vlaue          NVARCHAR( 20 )  NOT NULL,
    update_time        INTEGER         NOT NULL,
    create_time        INTEGER         NOT NULL 
);

INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (1, 'user', 1, 201, 100154, 1373855204, 1373806929);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (2, 'user', 1, 202, '张玉', 1373855204, 1373806929);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (3, 'user', 1, 203, 'zhangyupan@izptec.com', 1373855204, 1373806929);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (4, 'user', 2, 201, 120712, 1374415626, 1374415573);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (5, 'user', 2, 202, '', 1374415626, 1374415573);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (6, 'user', 2, 203, 'lushanlin@izptec.com', 1374415626, 1374415573);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (7, 'user', 3, 201, 120961, 1374489448, 1374489448);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (8, 'user', 3, 202, '邢瑞廷', 1374489448, 1374489448);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (9, 'user', 3, 203, 'xingruiting@izptec.com', 1374489448, 1374489448);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (10, 'user', 4, 201, 121000, 1374489719, 1374489719);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (11, 'user', 4, 202, '杨小伟', 1374489719, 1374489719);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (12, 'user', 4, 203, 'yangxiaowei@izptec.com', 1374489719, 1374489719);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (13, 'user', 5, 201, 120958, 1374493242, 1374493242);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (14, 'user', 5, 202, '崔瀚文', 1374493242, 1374493242);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (15, 'user', 5, 203, 'cuihanwen@izptec.com', 1374493242, 1374493242);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (16, 'user', 7, 201, 120793, 1375198270, 1374872771);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (17, 'user', 7, 202, '陆遥', 1375198270, 1374872771);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (18, 'user', 7, 203, 'luyao@izptec.com', 1375198270, 1374872771);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (19, 'user', 8, 201, 131209, 1374874709, 1374874581);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (20, 'user', 8, 202, '王月', 1374874709, 1374874581);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (21, 'user', 8, 203, 'wangyue@izp.com', 1374874709, 1374874581);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (22, 'user', 10, 201, 131365, 1375094755, 1375094755);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (23, 'user', 10, 202, '刘慧勇', 1375094755, 1375094755);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (24, 'user', 10, 203, 'liuhuiyong@izptec.com', 1375094755, 1375094755);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (25, 'user', 15, 201, '', 1375185566, 1375185566);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (26, 'user', 15, 202, '茹意', 1375185566, 1375185566);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (27, 'user', 15, 203, '', 1375185566, 1375185566);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (28, 'user', 19, 201, 75, 1375209878, 1375209878);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (29, 'user', 19, 202, 'wangmingming', 1375209878, 1375209878);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (30, 'user', 19, 203, '', 1375209878, 1375209878);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (31, 'user', 20, 201, 120769, 1375285359, 1375285337);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (32, 'user', 20, 202, '沈鑫', 1375285359, 1375285337);
INSERT INTO [accounts_core_user_attributes] ([model_attribute_id], [model_code], [model_id], [attribute_id], [str_vlaue], [update_time], [create_time]) VALUES (33, 'user', 20, 203, 'shenjinyang@izptec.com', 1375285359, 1375285337);
