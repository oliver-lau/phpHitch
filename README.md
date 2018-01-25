###测试环境 
Ubuntu 16.04 + Nginx + PHP 7.1.12 + MySQL5.7 理论上所有LAMP LNMP 都完全兼容

本地开启服务器php -S 127.0.0.1:8081

### 用户数据库（SQL代码）
用户数据库（user）
```
-- auto-generated definition
CREATE TABLE user
(
  id       INT AUTO_INCREMENT
    PRIMARY KEY,
  username TEXT NOT NULL,
  password TEXT NOT NULL,
  CONSTRAINT username
  UNIQUE (username)
)
  ENGINE = InnoDB;


```
### 活动数据库（activity）你可以自行添加column，添加的column会自动出现在返回的结果之中
```
-- auto-generated definition
CREATE TABLE activity
(
  id       INT AUTO_INCREMENT
    PRIMARY KEY,
  name     TEXT NOT NULL,
  location TEXT NOT NULL
)
  ENGINE = InnoDB;
  
```

### 使用方法
```
POST login.php 登陆
form-data
username password

POST register.php 注册
form-data
username password

GET list.php 活动列表
```

###所有数据都是JSON格式返回。