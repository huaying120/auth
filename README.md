UniFi 微信授权上网代码
===========

##1.配置config文件

	/* 服务器配置 */
	defined('SERVER_HOST') or define('SERVER_HOST', 'http://1.1.1.1');

	/* 微信 开发者中心->服务器配置 Token值 */
	defined('WECHAT_TOKEN') or define('WECHAT_TOKEN', 'test');

	/* UniFi 配置 */
	defined('UNIFI_SERVER') or define('UNIFI_SERVER', 'https://1.1.1.1:8443');
	defined('UNIFI_USER') or define('UNIFI_USER', 'username');
	defined('UNIFI_PASSWORD') or define('UNIFI_PASSWORD', 'password');

	/* wifi有效时间 */
	defined('WIFI_EXPIRED_TIME') or define('WIFI_EXPIRED_TIME', 60);//分钟

	/* 默认跳转页面 */
	defined('DEFAULT_URL') or define('DEFAULT_URL', 'http://www.ubnt.com.cn');

	/* 配置mysql */
	defined('DB_HOST') or define('DB_HOST', 'localhost');
	defined('DB_USERNAME') or define('DB_USERNAME', 'root');
	defined('DB_PASSWORD') or define('DB_PASSWORD', 'password');
	defined('DB_DBNAME') or define('DB_DBNAME', 'unifi');
	defined('DB_PORT') or define('DB_PORT', '3306');

	defined('DB_TABLE') or define('DB_TABLE', 'weixinTest');//表名

	defined('WEIXIN_AUTH_MESSAGE') or define('WEIXIN_AUTH_MESSAGE', '我要上网');//当用户发送此内容才能获取返回

	defined('WEIXIN_ADD_WELCOME_MESSAGE') or define('WEIXIN_ADD_WELCOME_MESSAGE', '您好，欢迎关注UBNT！Ubiquiti Networks公司在全球范围内设计，制造和销售创新性的宽带无线解决方案。UBNT的产品包括具有颠覆意义的无线产品，如Bullet（TM），NanoStation（TM），以及其他结合基于内部开发、业界领先的产品设计核心技术，包括Air OS操作系统和频率自由技术（100MHz至10GHz的RF设计）。访问UBNT官方主页www.ubnt.com.cn 官方论坛bbs.ubnt.com.cn 官方商城store.ubnt.com.cn了解更多。');//关注后的欢迎内容