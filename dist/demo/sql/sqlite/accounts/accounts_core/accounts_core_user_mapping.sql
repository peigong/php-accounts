/*
SQLiteDbUtil SQL Export
-- Generated On Mon, 2 Sep 2013 08:17:26 UTC
-- Email:peigong@foxmail.com
-- blog:http://www.peigong.tk
*/

DROP TABLE IF EXISTS accounts_core_user_mapping;
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

INSERT INTO accounts_core_user_mapping (mapping_id,account_id,mapping_account_id,mapping_type,update_time,create_time) VALUES ('1', '1', '1', 'cookie', '1377844151', '1377844151');
INSERT INTO accounts_core_user_mapping (mapping_id,account_id,mapping_account_id,mapping_type,update_time,create_time) VALUES ('2', '1', '127.0.0.1', 'ip', '1377844151', '1377844151');
INSERT INTO accounts_core_user_mapping (mapping_id,account_id,mapping_account_id,mapping_type,update_time,create_time) VALUES ('3', '1', '1', 'cookie', '1378092041', '1378092041');
INSERT INTO accounts_core_user_mapping (mapping_id,account_id,mapping_account_id,mapping_type,update_time,create_time) VALUES ('4', '1', '127.0.0.1', 'ip', '1378092041', '1378092041');
INSERT INTO accounts_core_user_mapping (mapping_id,account_id,mapping_account_id,mapping_type,update_time,create_time) VALUES ('5', '1', '1', 'cookie', '1378092042', '1378092042');
INSERT INTO accounts_core_user_mapping (mapping_id,account_id,mapping_account_id,mapping_type,update_time,create_time) VALUES ('6', '1', '127.0.0.1', 'ip', '1378092042', '1378092042');
INSERT INTO accounts_core_user_mapping (mapping_id,account_id,mapping_account_id,mapping_type,update_time,create_time) VALUES ('7', '1', '1', 'cookie', '1378092049', '1378092049');
INSERT INTO accounts_core_user_mapping (mapping_id,account_id,mapping_account_id,mapping_type,update_time,create_time) VALUES ('8', '1', '127.0.0.1', 'ip', '1378092049', '1378092049');
INSERT INTO accounts_core_user_mapping (mapping_id,account_id,mapping_account_id,mapping_type,update_time,create_time) VALUES ('9', '1', '1', 'cookie', '1378092050', '1378092050');
INSERT INTO accounts_core_user_mapping (mapping_id,account_id,mapping_account_id,mapping_type,update_time,create_time) VALUES ('10', '1', '127.0.0.1', 'ip', '1378092050', '1378092050');
INSERT INTO accounts_core_user_mapping (mapping_id,account_id,mapping_account_id,mapping_type,update_time,create_time) VALUES ('11', '1', '1', 'cookie', '1378092088', '1378092088');
INSERT INTO accounts_core_user_mapping (mapping_id,account_id,mapping_account_id,mapping_type,update_time,create_time) VALUES ('12', '1', '127.0.0.1', 'ip', '1378092088', '1378092088');
INSERT INTO accounts_core_user_mapping (mapping_id,account_id,mapping_account_id,mapping_type,update_time,create_time) VALUES ('13', '1', '1', 'cookie', '1378092092', '1378092092');
INSERT INTO accounts_core_user_mapping (mapping_id,account_id,mapping_account_id,mapping_type,update_time,create_time) VALUES ('14', '1', '127.0.0.1', 'ip', '1378092092', '1378092092');
INSERT INTO accounts_core_user_mapping (mapping_id,account_id,mapping_account_id,mapping_type,update_time,create_time) VALUES ('15', '1', '1', 'cookie', '1378092092', '1378092092');
INSERT INTO accounts_core_user_mapping (mapping_id,account_id,mapping_account_id,mapping_type,update_time,create_time) VALUES ('16', '1', '127.0.0.1', 'ip', '1378092092', '1378092092');
