# rabbit_list
![mmexport1679735326978](https://user-images.githubusercontent.com/43908812/227708265-8259a756-90b9-4b8b-92b8-777054266f19.jpg)

by 某不愿透露姓名的画师小姐姐
# 它能做什么？
主要用于社交ID追踪，它是一个为国内的安全人员定制的信息收集工具，可以通过枚举，找回，反查等等获取信息，建立一张关系网，辅助分析可能的目标隐藏的信息。

针对中国开发者，黑客的最佳开源情报脚本工具集，持续更新，分为4大模块：用户名，手机号，邮箱，ip和域名。目前仅公开了最基本功能和部分用户名开源情报工具，电话号码开源情报模块，弥补别的工具的不足，这个是一个测试版本，正式版本大概4月左右就确定下来。完成后，后续更新就是添加一些冷门的溯源模块。
# 名单新版本介绍
# 4月1号上传相关代码，作为图形化版本的第一个演示版本，原shell写的部分会单独存放在 main 分支 里面，一些没办法集成在图形化版本的功能，我会单独写个项目的。

新版本使用php7.4开发，泄漏数据库使用clickhouse，前端使用了vis.js等等。安全性方面：不要部署在公网，我只是个大学生，我知道自己php水平不高，大学根本不教php，所以它只是能用的状态，并非是很安全的。
# 部署 
我这里直接用phpstudy部署了，ngnix或者apache都是可以的。
# 配置
因为目前它还只是半成品，主要是数据来源方面，大部分是爬虫和部分接口，一些数据需要使用api，其中一些数据少量爬取网站的接口，比如站长之家，后续我买些付费api再写，目前可能需要手动写cookie值。fofa，微步，github等可能需要免费或者付费api，除此之外的数据都是不需要api的。
# 示例
3.20开发调试中的截图
![image](https://user-images.githubusercontent.com/43908812/226260714-21ebbef9-11d3-46c8-901b-ff2576a16904.png)
#
名单的核心思想是，通过找回密码，爬虫，枚举，一些jsonp接口返回数据等等，构建一张关系网，即虽然没有A --> B 的直接联系，但如果间接手机B平台的信息能和A平台存在关联，后续就可以对这些存在关联的节点进一步分析。
大部分数据仍然是无效的，公开的，它比spiderfoot这样的工具好的地方就在于，名单是可以手动测试的，这也是它的缺点，因为它不能完全傻瓜式收集信息。
# 法律问题
我尽量从公开来源去收集这些信息，凡是有保护的数据我都没有去破解或者怎样的，所有代码都是开源没有混淆的，你甚至能看出我是个新手。但如果其中一些数据侵犯的您的宝贵资产或者隐私，我愿意从中删除这部分代码。
名单所使用的技术都是老的，换句话说，不用看黑灰产，github上有的是枚举手机号注册，或者爬虫，信息收集工具。我虽然php菜，但是要实现黑灰产用的那些技术是完全没有问题的，我却没有那么做，因为这个工具初衷是协助打击黑客犯罪，以及开源情报，红蓝对抗溯源等合法目的。
大部分我编写的爬虫，都是针对我了解的国内黑客开发者常去的网站的，那些涉及舆论更多，但是基本和安全人员没关系的网站，我并没有刻意去写收集其用户信息的代码，当然如果有关部门需要，我可以尽量写一些定制模块，包括整理清洗数据等等。
# 使用
数据有两个来源，存在clickhouse的数据（需要你自己收集），如果没有也是可以正常使用其它功能的。第二是各个模块收集的信息
点击对应节点
![image](https://user-images.githubusercontent.com/43908812/226262125-42370b34-eb59-4c09-9fe7-932285739418.png)
左上脚会显示数据的值
![image](https://user-images.githubusercontent.com/43908812/226262273-12992ea4-629e-4f37-a32f-c04180eaafaa.png)
右上角显示数据类型，如果不是你想检索的类型，可以点下拉菜单切换。
不同类型的数据可以有很多模块（模块都还在积极增加中）
![image](https://user-images.githubusercontent.com/43908812/226262464-f5881c1f-42b1-47f0-872c-5e9ac8c268b2.png)
模块可以选择，对选中节点使用，对选中节点关联的对应数据类型节点使用，以及对所有符合的数据类型使用（自动）
如果数据量大，出现了无响应，请点击等待，因为数据在后端爬取和处理的，才会导致数据量大的时候超时，我开源的模块都是可以使用的，如果不能使用基本都是网络问题
# 数据清洗
![image](https://user-images.githubusercontent.com/43908812/226262857-60476fac-c4e7-44fb-ba7e-8513a90d8ec4.png)
可以选择以下的清洗方案，比如删除孤立节点，就可以选择删除边数小于1的。比如删除关联节点，把选中节点直接关联的节点都删除掉，非关联节点则是只保留当前选中节点直接关联部分。
# 开发
目前还是我一个人在写，如果有大佬愿意为这份拙劣的代码贡献一份力量，主要是写数据来源模块啦，我很感激你，但是这个项目是完全开源，而且不盈利的，我从中没有获得任何利益，仅仅提供给大家免费使用
