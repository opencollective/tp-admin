# TP-admin [![Backers on Open Collective](https://opencollective.com/tp-admin/backers/badge.svg)](#backers) [![Sponsors on Open Collective](https://opencollective.com/tp-admin/sponsors/badge.svg)](#sponsors) 

TP-admin即基于ThinkPHP5拿来即用高性能后台管理系统


## 官方文档
地址：[http://doc.tpadmin.shijinrong.cn/](http://doc.tpadmin.shijinrong.cn/)

## 在线体验

地址：[http://tpadmin.shijinrong.cn/admin/](http://tpadmin.shijinrong.cn/admin/)

账户：13330613321

密码：123456


## 线上仓库

在线地址：[https://github.com/Astonep/tp-admin](https://github.com/Astonep/tp-admin)

### 源代码下载

**git克隆**：``git clone https://github.com/Astonep/tp-admin`` 

**直接下载**：[https://github.com/Astonep/tp-admin/archive/master.zip](https://github.com/Astonep/tp-admin/archive/master.zip) 

## 本地部署

**运行环境要求**

> * PHP >= 5.4.0
> * PDO PHP Extension
> * MBstring PHP Extension
> * CURL PHP Extension
> * Composer



建议配置虚拟域名（若不清楚，请自行解决之），方便接下来开展你的开发工作。
> 按照TP5默认，入口文件位于`public/index.php`
> 入口文件位置的设计是为了让应用部署更安全，public目录为web可访问目录，其他的文件都可以放到非WEB访问目录下面。


除非
> 你是一名高级PHPer，也可以为每一个模块自定义入口文件


**部署完成后**

~~~
cd tp-admin/

composer install  // 安装依赖

http://your-domain/ 例如虚拟域名配置为www.web.com 则http://www.web.com
~~~


**详细参考**[ThinkPHP5官方手册中的部署部分](http://www.kancloud.cn/manual/thinkphp5/129745)官方手册更加完善且很清楚

## 开发规范
tp-admin框架严格遵循ThinkPHP5开发规范，详情请参照[官方手册](http://www.kancloud.cn/manual/thinkphp5/118007)

# TP-admin——拿来即用高性能后台管理系统

TP-admin即基于ThinkPHP5的admin后台管理系统

### 主要特性：


- **基础封装**：后台基础类，如权限验证、实时登录等
- **角色管理**：自定义后台各菜单各节点权限分配
- **数据验证**：表单数据自动验证、数据库防注入
- **日志记录**：自动记录网站操作写入数据库
- **账号管理**：平台后台账号统一管理，自定义分配角色
- **响应式布局**：PC、移动端均有不错的表现效果
- **异步请求**：保护好全局污染


### 支持TP-admin的用户请到 [GitHub](https://github.com/Astonep/tp-admin) 给我们一个star ^_^

### 为什么要选择TP5
因为TP5在框架中就有如下高级特性
* * * * *

- **规范**：遵循PSR-2、PSR-4规范，Composer及单元测试支持；
- **严谨**：异常严谨的错误检测和安全机制，详细的日志信息，为你的开发保驾护航；
- **灵活**：减少核心依赖，扩展更灵活、方便，支持命令行指令扩展；
- **API友好**：出色的性能和REST支持、远程调试，更好的支持API开发；
- **高效**：惰性加载，及路由、配置和自动加载的缓存机制；
- **ORM**：重构的数据库、模型及关联，MongoDb支持；

### 合理使用轮子
排名部分先后顺序
- 框架：ThinkPHP5.0.2、jQuery3.1.0
- 插件：bootstrap3.3.0、bootstrap-table1.11.0、validate.js0.10.0、pace1.0.0、metismenu2.0.2、font-awesome4.6.3
- 平台：Github
- ……

> 在此非常感谢各框架、插件、平台的支持


## 交流
- 问题只接受来自[Github上Issues](https://github.com/Astonep/tp-admin/issues)《源码附截图，并描述清楚

## Contributors

This project exists thanks to all the people who contribute. 
<a href="https://github.com/aierui/tp-admin/graphs/contributors"><img src="https://opencollective.com/tp-admin/contributors.svg?width=890&button=false" /></a>


## Backers

Thank you to all our backers! 🙏 [[Become a backer](https://opencollective.com/tp-admin#backer)]

<a href="https://opencollective.com/tp-admin#backers" target="_blank"><img src="https://opencollective.com/tp-admin/backers.svg?width=890"></a>


## Sponsors

Support this project by becoming a sponsor. Your logo will show up here with a link to your website. [[Become a sponsor](https://opencollective.com/tp-admin#sponsor)]

<a href="https://opencollective.com/tp-admin/sponsor/0/website" target="_blank"><img src="https://opencollective.com/tp-admin/sponsor/0/avatar.svg"></a>
<a href="https://opencollective.com/tp-admin/sponsor/1/website" target="_blank"><img src="https://opencollective.com/tp-admin/sponsor/1/avatar.svg"></a>
<a href="https://opencollective.com/tp-admin/sponsor/2/website" target="_blank"><img src="https://opencollective.com/tp-admin/sponsor/2/avatar.svg"></a>
<a href="https://opencollective.com/tp-admin/sponsor/3/website" target="_blank"><img src="https://opencollective.com/tp-admin/sponsor/3/avatar.svg"></a>
<a href="https://opencollective.com/tp-admin/sponsor/4/website" target="_blank"><img src="https://opencollective.com/tp-admin/sponsor/4/avatar.svg"></a>
<a href="https://opencollective.com/tp-admin/sponsor/5/website" target="_blank"><img src="https://opencollective.com/tp-admin/sponsor/5/avatar.svg"></a>
<a href="https://opencollective.com/tp-admin/sponsor/6/website" target="_blank"><img src="https://opencollective.com/tp-admin/sponsor/6/avatar.svg"></a>
<a href="https://opencollective.com/tp-admin/sponsor/7/website" target="_blank"><img src="https://opencollective.com/tp-admin/sponsor/7/avatar.svg"></a>
<a href="https://opencollective.com/tp-admin/sponsor/8/website" target="_blank"><img src="https://opencollective.com/tp-admin/sponsor/8/avatar.svg"></a>
<a href="https://opencollective.com/tp-admin/sponsor/9/website" target="_blank"><img src="https://opencollective.com/tp-admin/sponsor/9/avatar.svg"></a>


