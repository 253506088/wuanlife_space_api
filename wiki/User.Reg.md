#user.reg

ע��ӿ�-������֤��ע���û�

##�ӿڵ�������˵��

�ӿ�URL��http://apihost/?service=User.Reg

����ʽ��POST

����˵����

|����|����|�Ƿ����|��Χ|˵��|
|:--|:--|:--|:--|:--|
|user_name| �ַ��� |   ����   |     ��С��1    |         �û��ǳ�|
|user_email   | �ַ���|   ����  |        ��С��1  |         �û�����|
|password| �ַ��� |   ����   |      ��С��1|           �û�����|

##����˵��
|����|����|˵��|
|:--|:--|:--|
|msg        |   �ַ��� |��ʾ��Ϣ|
|code         | ���� |  �����룬1��ʾ��¼�ɹ���0��ʾ��¼ʧ��|
|info         | ���� | �û���Ϣ����|
|info.user_id  | ����  | �û�ID|
|info.user_name| �ַ���| �û��ǳ�|
|info.user_email   | �ַ���| �û�����|

##ʾ��

ע���˺�(�������ӽ���ʾ��������ע�ᣡ)

http://apihost/?service=User.Reg&Email=taotao@taotao.com&nickname=taotao&password=111111
    
    JSON:
    {
    "ret": 200,
    "data": {
        "msg": "ע��ɹ������Զ���¼��",
        "code": "1",
        "info": {
            "userID": "26",
            "nickname": "taotao",
            "Email": "taotao@taotao.com"
        }
    },
    "msg": ""
    }