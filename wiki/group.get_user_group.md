# group.get_user_group

��ȡ�û���������Ľӿ�

## �ӿڵ�������˵��

�ӿ�URL��http://dev.wuanlife.com:800/group/get_user_group

����ʽ��GET

����˵����

|��������       | ���� | �Ƿ����  |  Ĭ��ֵ  |  ��Χ   |                ˵��|
|:--|:--|:--|:--|:--|:--|
|user_id|����|����|-|-| �û�id|
|pn|����|��ѡ|1|-|��ǰҳ��|

## ����˵��

|�����ֶ�                 |����    |    ˵��|
|:--|:--|:--|
|groups.g_name   |           string     | ��������|
|groups.group_id          |      int  |       ����id|
|groups.g_image   |        string    |  ����ͼƬ|
|groups.g_introduction  |  string   |   �������|
|groups.num          |      int      |   ��Ա����|
|page_count        |        int   |      ��ҳ��|
|current_page    |          int   |      ��ǰҳ|
|num|����|��������|
|user_name|�ַ���|�û��ǳ�|
|msg|�ַ���|��ʾ��Ϣ|

## ʾ��

��ʾ�û�IDΪ1���������

http://dev.wuanlife.com:800/group/get_user_group?user_id=1

    JSON
    {
	"ret": 200,
	"data": {
		"groups": [
			{
				"g_name": "����2��",
				"group_id": "2",
				"g_image": "http:\/\/image.suxiazai.com\/img\/pic\/960\/359\/11680961633.jpg",
				"g_introduction": "",
				"num": "23"
			},
			{
				"g_name": "626",
				"group_id": "387",
				"g_image": "http:\/\/7xlx4u.com1.z0.glb.clouddn.com\/o_1b3ce8n241cbn16sktvfbah1h117.jpg?imageView2\/1\/w\/100\/h\/100",
				"g_introduction": "",
				"num": "3"
			}
		],
		"page_count": 1,
		"current_page": 1,
		"num": 2,
		"user_name": "xiaochao_php"
	},
	"msg": "��ȡ�����б�ɹ�"
    }
