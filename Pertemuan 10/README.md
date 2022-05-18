MySQL Data Types
CHAR
String (0 - 255)
VARCHAR
String (0 - 255)
TINYTEXT
String (0 - 255)
TEXT
String (0 - 65535)
BLOB
String (0 - 65535)
MEDIUMTEXT
String (0 - 16777215)
MEDIUMBLOB
String (0 - 16777215)
LONGTEXT
String (0 - 429496­7295)
LONGBLOB
String (0 - 429496­7295)
TINYINT x
Integer (-128 to 127)
SMALLINT x
Integer (-32768 to 32767)
MEDIUMINT x
Integer (-8388608 to 8388607)
INT x
Integer (-2147­483648 to 214748­3647)
BIGINT x
Integer (-9223­372­036­854­775808 to 922337­203­685­477­5807)
FLOAT
Decimal (precise to 23 digits)
DOUBLE
Decimal (24 to 53 digits)
DECIMAL
"­DOU­BLE­" stored as string
DATE
YYYY-MM-DD
DATETIME
YYYY-MM-DD HH:MM:SS
TIMESTAMP
YYYYMM­DDH­HMMSS
TIME
HH:MM:SS
ENUM
One of preset options
SET
Selection of preset options
Integers (marked x) that are "­UNS­IGN­ED" have the same range of values but start from 0 (i.e., an UNSIGNED TINYINT can have any value from 0 to 255).
MySQL Type Conversion
BINARY 'string'
CAST (expression AS datatype)
CONVERT (expression, datatype)
MySQL Grouping Functions
AVG
MAX
BIT_AND
STD
BIT_OR
STDDEV
COUNT
SUM
GROUP_­CONCAT
VARIANCE
MIN
