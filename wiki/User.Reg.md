#user.reg

ע��ӿ�-������֤��ע���û�

##�ӿڵ�������˵��

�ӿ�URL��http://localhost/wuanlife_api/index.php/user/reg/nickname/email/password

����ʽ��GET

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
|data.code         | ���� |  �����룬1��ʾ��¼�ɹ���0��ʾ��¼ʧ��|
|info         | ���� | �û���Ϣ����|
|info.user_id  | ����  | �û�ID|
|info.user_name| �ַ���| �û��ǳ�|
|info.user_email   | �ַ���| �û�����|

##ʾ��

ע���˺�(�������ӽ���ʾ��������ע�ᣡ)

http://localhost/wuanlife_api/index.php/user/reg/c1ha11c11/ch1111ac/1
    
    JSON:
    {
        "ret": 200,
        "data": {
            "code": 1,
            "info": {
                "user_id": "189",
                "user_name": "c1ha11c11",
                "user_email": "ch1111ac"
            }
        },
        "msg": "ע��ɹ������Զ���¼��"
    }