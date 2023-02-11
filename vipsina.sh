#!/bin/bash
curl -s -m 5 --retry 5 -H 'Host: mail.sina.com.cn' -H 'User-Agent: Mozilla/5.0 (X11; CrOS x86_64 14794.0.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5045.0 Safari/537.36' -H 'Accept: application/json, text/plain, */*' -H 'Accept-Language: zh-CN,zh;q=0.8,zh-TW;q=0.7,zh-HK;q=0.5,en-US;q=0.3,en;q=0.2' -H 'Accept-Encoding: gzip, deflate' -H 'Content-Type: application/x-www-form-urlencoded' -H 'Origin: https://mail.sina.com.cn' -H 'Dnt: 1' -H 'Referer: https://mail.sina.com.cn/register/reg_vipmail.php'  --data-binary "mail=$1%40vip.sina.cn&code=undefined" 'https://mail.sina.com.cn/register/chkmail.php?ajaxID=' -o $1_vip_sina
cat $1_vip_sina | gunzip | sed -e 's/{//g' -e 's/,/ /g' -e 's/"//g' | awk '{for(i=1;i<=NF;i++){print $i}}' | grep '^result' | sed -e 's/result//g' -e "s/^/# vipsina $1 /g" -e 's/false/已注册/g' -e 's/true/未注册/g'
# rm -f $1_vip_sina