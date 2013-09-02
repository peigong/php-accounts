/*
SQLiteDbUtil SQL Export
-- Generated On Mon, 2 Sep 2013 03:21:45 UTC
-- Email:peigong@foxmail.com
-- blog:http://www.peigong.tk
*/

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
INSERT INTO accounts_core_user_attributes (model_attribute_id,model_code,model_id,attribute_id,str_vlaue,update_time,create_time) VALUES ('1', 'user', '1', '188', '000001', '1378092088', '1378092088');
INSERT INTO accounts_core_user_attributes (model_attribute_id,model_code,model_id,attribute_id,str_vlaue,update_time,create_time) VALUES ('2', 'user', '1', '189', '周培公', '1378092088', '1378092088');
INSERT INTO accounts_core_user_attributes (model_attribute_id,model_code,model_id,attribute_id,str_vlaue,update_time,create_time) VALUES ('3', 'user', '1', '190', 'peigong@foxmail.com', '1378092088', '1378092088');
