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
