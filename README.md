# rabbit_list
![mmexport1679735326978](https://user-images.githubusercontent.com/43908812/227708265-8259a756-90b9-4b8b-92b8-777054266f19.jpg)

by 某不愿透露姓名的画师小姐姐

# 它能做什么？
主要用于社交ID追踪，它是一个为国内的安全人员定制的信息收集工具，可以通过枚举，找回，反查等等获取信息，建立一张关系网，辅助分析可能的目标隐藏的信息。

# 缺陷
（1）它UI丑

（2）它没办法对10^4以上的节点的量级的数据进行处理，因为它运行在浏览器上。

（3）它代码安全性不高，别部署在公网服务器上

（4）它代码很垃圾

# 当前版本
初步覆盖国内开发者常去的一些平台的信息收集，具备了一定的对开发者的手机号和邮箱的信息收集能力
 目前：

用户名: 支持从 CSDN,Github,bilibili,Niuke,Leetcode等平台搜索用户名

主页信息: 支持从 CSDN，Github,Exploit-db,zhihu,aiqicha,gitte,niuke,leetcode等等爬取基本信息

自动找回: 支持从 godaddy,csdn,88mail找回部分信息

用户名枚举邮箱: 支持通过用户名枚举 网易，gmail等等

手机号画像: 支持从 手机号枚举学习，开发，工具，威胁情报等网站注册枚举

邮箱画像: 支持 部分黑客可能会使用的工具类网站枚举注册（积极收集接口和开发中）

信息反查: 支持 whois，备案反查等

地理位置开源情报: 支持 ip POI反查等

其它信息的收集: ......

目前依旧在积极维护，主要是增加有效的数据来源。

# 优势
（1）部署简单

（2）免费，几乎不使用任何付费api

（3）社交ID追踪黑客，针对性强。

（4）代码垃圾，所以模块开发简单，而且模块较多，比多数同类型信息收集工具收集的更多，又有许多别的图形化开源情报工具不具备的数据来源
 
# 简介
针对中国开发者，黑客的最佳开源情报工具。

# 关于更新时间
大概每周一都会更新一次，因为我只有周末和周一有空闲时间写代码，其它时间可能也会写一些小模块，一并在周一前上传。

# 名单新版本介绍
目前是图形化版本的第一个演示版本，原shell写的部分会单独存放在 main 分支 里面，一些没办法集成在图形化版本的功能，我会单独写个项目的。
# 它能做啥？
1,对国内开发者常去的网站社交ID检索，爬取信息
2,获取IP，email，phone等信息，获取学校，地理位置信息
3,枚举画像邮箱和手机号，比如adobe最近爆的接口，国内外开发者平台，国内安全厂商，论坛，学习平台，常用平台（相当于白嫖空号检测），境外国人常用社交媒体
4,数据清洗，各种别的数据获取模块，POI查询，找回信息等等
5,更多请自己探索

新版本使用php7.4开发，泄漏数据库使用clickhouse，前端使用了vis.js等等。安全性方面：不要部署在公网，我只是个大学生，我知道自己php水平不高，大学根本不教php，所以它只是能用的状态，并非是很安全的。

# 部署 

我这里直接用phpstudy部署了，ngnix或者apache都是可以的。

# 配置

因为目前它还只是半成品，主要是数据来源方面，大部分是爬虫和部分接口，一些数据需要使用api，其中一些数据少量爬取网站的接口，比如站长之家，后续我买些付费api再写，目前可能需要手动写cookie值。fofa，微步，github等可能需要免费或者付费api，除此之外的数据都是不需要api的。

# 使用教程
视频

https://www.bilibili.com/video/BV1Vo4y1H777

文章

https://x.threatbook.com/v5/article?threatInfoID=43718

# 开发

目前还是我一个人在写，如果有大佬愿意为这份拙劣的代码贡献一份力量，主要是写数据来源模块啦，我很感激你，但是这个项目是完全开源，而且不盈利的，我从中没有获得任何利益，仅仅提供给大家免费使用

下一个模块是用户名枚举的。接下来开发重点和邮箱用户名相关。

# 支持

最大的支持是提供数据来源和思路。虽然很厚颜无耻，如果赞助我一点api或者够买api的钱，也会对这个项目很有帮助的，目前的api大都是免费的，因为我真没钱买付费api，学生党。

