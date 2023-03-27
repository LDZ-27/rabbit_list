# rabbit_list
![mmexport1679735326978](https://user-images.githubusercontent.com/43908812/227708265-8259a756-90b9-4b8b-92b8-777054266f19.jpg)

by 某不愿透露姓名的画师小姐姐

# 它能做什么？
主要用于社交ID追踪，它是一个为国内的安全人员定制的信息收集工具，可以通过枚举，找回，反查等等获取信息，建立一张关系网，辅助分析可能的目标隐藏的信息。

# 缺陷
（1）它UI丑（2）它没办法对10^4以上的节点的量级的数据进行处理，因为它运行在浏览器上。（3）它代码安全性不高，别部署在公网服务器上（4）它代码很垃圾，想想你每天6点起床，晚上不早睡还写代码，你会写得很好吗

# 简介
针对中国开发者，黑客的最佳开源情报工具。

# 名单新版本介绍
目前是图形化版本的第一个演示版本，原shell写的部分会单独存放在 main 分支 里面，一些没办法集成在图形化版本的功能，我会单独写个项目的。
# 它能做啥？
1,对国内开发者常去的网站社交ID检索，爬取信息
2,获取IP，email，phone等信息，获取学校，地理位置信息
3,枚举画像邮箱和手机号，比如adobe最近爆的接口，国内外开发者平台，国内安全厂商，论坛，学习平台，常用平台（相当于白嫖空号检测）
4,数据清洗，各种别的数据获取模块，POI查询，找回信息等等
5,更多请自己探索

新版本使用php7.4开发，泄漏数据库使用clickhouse，前端使用了vis.js等等。安全性方面：不要部署在公网，我只是个大学生，我知道自己php水平不高，大学根本不教php，所以它只是能用的状态，并非是很安全的。

# 部署 

我这里直接用phpstudy部署了，ngnix或者apache都是可以的。

# 配置

因为目前它还只是半成品，主要是数据来源方面，大部分是爬虫和部分接口，一些数据需要使用api，其中一些数据少量爬取网站的接口，比如站长之家，后续我买些付费api再写，目前可能需要手动写cookie值。fofa，微步，github等可能需要免费或者付费api，除此之外的数据都是不需要api的。

# 思想
名单的核心思想是，通过找回密码，爬虫，枚举，一些jsonp接口返回数据等等，构建一张关系网，即虽然没有A --> B 的直接联系，但如果间接手机B平台的信息能和A平台存在关联，后续就可以对这些存在关联的节点进一步分析。
大部分数据仍然是无效的，公开的，它比spiderfoot这样的工具好的地方就在于，名单是可以手动测试的，这也是它的缺点，因为它不能完全傻瓜式收集信息。
# 法律问题
我尽量从公开来源去收集这些信息，凡是有保护的数据我都没有去破解或者怎样的，所有代码都是开源没有混淆的，你甚至能看出我是个新手。但如果其中一些数据侵犯的您的宝贵资产或者隐私，我愿意从中删除这部分代码。
名单所使用的技术都是老的，换句话说，不用看黑灰产，github上有的是枚举手机号注册，或者爬虫，信息收集工具。我虽然php菜，但是要实现黑灰产用的那些技术是完全没有问题的，我却没有那么做，因为这个工具初衷是协助打击黑客犯罪，以及开源情报，红蓝对抗溯源等合法目的。
大部分我编写的爬虫，都是针对我了解的国内黑客开发者常去的网站的，那些涉及舆论更多，但是基本和安全人员没关系的网站，我并没有刻意去写收集其用户信息的代码，当然如果有关部门需要，我可以尽量写一些定制模块，包括整理清洗数据等等。

# 使用
# 使用教程

https://x.threatbook.com/v5/article?threatInfoID=43718

# 开发

目前还是我一个人在写，如果有大佬愿意为这份拙劣的代码贡献一份力量，主要是写数据来源模块啦，我很感激你，但是这个项目是完全开源，而且不盈利的，我从中没有获得任何利益，仅仅提供给大家免费使用

# 支持

最大的支持是提供数据来源和思路。虽然很厚颜无耻，如果赞助我一点api或者够买api的钱，也会对这个项目很有帮助的，目前的api大都是免费的，因为我真没钱买付费api，学生党。

# 定制开发

如果你是一些特殊的单位部门，签定合同的前提下，我可以根据你们的要求定制修改，部署新的工具，这个工具我是上学期间利用晚上和周末的空闲时间写的，所以很垃圾。但我与执法监管单位有过多次密切合作，在开源情报方面发表了许多文章，虽然年龄不大，目前还在读无聊的大学，但我也参与过执法某部门某大数据溯源系统的开发和运维，我了解执法人员在网络调查时的痛点，可以弥补一些执法部门无法对国内外社交媒体平台帐号直接关联到人或别的传统调查媒介的不足，有数据收集和清洗的能力，可以帮助构建国内外数据泄漏检索的开源情报工具，但前提是你们有相关资质，而且必须写明具体要求。我也具备web安全，社工钓鱼的能力，这个工具开源就意味着我已经开始开发新的针对黑客的钓鱼工具了。如果你们有相关需求，暑假期间我可以想办法设计一个更完善更高效的，更具备针对性的工具。
