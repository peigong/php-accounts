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
