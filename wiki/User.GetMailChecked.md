#User.GetMailChecked

ȷ��������֤�ӿ�-������֤�û������Ƿ��ѱ���֤

##�ӿڵ�������˵��

�ӿ�URL��http://dev.wuanlife.com:800/checkApiParams.php?service=User.GetMailChecked

����ʽ��POST

����˵����

|����|����|�Ƿ����|˵��|
|:--|:--|:--|:--|
|user_id|����|����|�û�id|

##����˵��
|����|����|˵��|
|:--|:--|:--|
|userID|����|�û�ID|
|mailChecked|�ַ���|�Ƿ���֤���䣬0Ϊδ��֤���䣬1Ϊ����֤����|


##ʾ��

ȷ��id=1�û��Ƿ��Ѿ���֤���䣨�ǣ�

http://dev.wuanlife.com:800/?service=User.GetMailChecked&user_id=1

JSON:
{
    "ret": 200,
    "data": {
        "userID": "1",
        "mailChecked": "1"
    },
    "msg": ""
}

