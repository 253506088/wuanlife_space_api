-- 2016/05/29
-- post.text + 5000
ALTER TABLE  `post_detail` CHANGE  `text`  `text` VARCHAR( 5000 ) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT  '����';
-- 2016/05/30
-- add g_image and g_introduction in group_base
ALTER TABLE group_base ADD g_image VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_bin  NULL COMMENT  'ͼƬ';
ALTER TABLE group_base ADD g_introduction varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT '�����';
-- ��group_detail�������
ALTER TABLE group_detail ADD PRIMARY KEY (group_base_id,user_base_id);
-- ����post_base��
CREATE TABLE IF NOT EXISTS `post_image` (
  `id` int(11) NOT NULL COMMENT '����id',
  `p_image` varchar(255) DEFAULT NULL COMMENT '����ͼƬ',
  `delete` int(11) NOT NULL DEFAULT '0' COMMENT 'ɾ��'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='�ظ�����ͼƬ';