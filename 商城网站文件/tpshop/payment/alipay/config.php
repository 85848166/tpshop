<?php
 return array (
		//应用ID,您的APPID。
		'app_id' => "2019022712361026",

		//商户私钥
		'merchant_private_key' => "MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQCZHQKm4g298bplOwTN2SCF8ElQxXzlXUPTkx+VyKGFqRytmuIGhRZ2UUf/INkT184gxzPlhi02OvOSVDPO23YuqZvAlDUtjunPkCqpVlchwqTtCE2JlSkbclhrliATV6MQWnaCWpOtaSq486RwR+Zwaa4CQoQ8HeETF9/KcCSXnLaV9Y86VsHl7C03XSol4IhyVZjz/156p5tm2g/wVsQ3qmHOx6kZ/5NKImMdNO90BCFD8wAjWpQmg41nnf8GT0VVIBtR87YN5OEbGoOwhjxmfIpTdViGdE0i8MNt//zK754SVj+9ZWNW0OTgiAjYslvhJ2Cz0Ziv4RpThEBVgX1lAgMBAAECggEBAIfOXHjLDmdIjgyWAZfXm2pRi6Xx1OrYA34ZA63mK6YTLpWpSAuCZj8BrztS1lgsVO9r4NMXZOix9zL2LpGuxK90zupMSrKjDS2GcOCL7XLLY1++uo9q1vA6RsT+fmrJk5/ArVbHoi7wle1AZb0VeQaCJc5pU0LDOcymo1+6gipafLoH6zk1NhkhHDc3+Vunnk0veD7v4iW4elK2STCpf3Scm6A8A+8Fb8wM5m2MXNmXAQIBnVPJmMdylVuAByuudVdLjojgrIWEaFRLSIqAZev9gn/V3/tuHSgLVybqpu0gNqnRRu1gz9NvV1HIArYH2EB/qTpwFkiHpEjgLB57IcECgYEA1aGrEi0NLUgX33oV5RQ3S4EZ0t+KD7J1xZgdmSxuIFbAXMLv4d6cneUxJJVdPQ1ErA/SNDJ9W0EKqoHRTOENeQEsnAmSJokUuNqBR9OC+3/SyOjH/IQEJ45s+H2pXBY5oI/5LJWjDS2waqgPixzlbhkmhVF9Swhz/v3Duvjib3UCgYEAt3rCgm/7xzVJSjpZ4gm1I0o2fvC6YBHHP9rhNhjhgDFHLAo6axLhoI21BHmj/gAnKjm7ThcoQUyL0wnaejmPo4NEpoHaM7UzPTL2Cj6TInn71uk99gm7DUPU1ZCFfux+5+8Ut+AKignluqsMS8QB0dGavP7+6ToXxpYokwCkiDECgYBfm3TGM6dcBpG4kBjQZtXAUszN1QEiuUl/3u4QKRQ4INsCKLPWsBwDhhkSOE58Dj4XixUWCyqS9m7hlCupbmbrKp1eT+I6oMrHV/LXxE8wYypgg91Mo4CAe3tFUmfDMKcltolbbLSGJ1Z2xTP/nDUJqvPUYn3iYKwZCFTajpw4KQKBgQCo4SNbr/tNNqzI18CXn1vMqahTWvwRJQwCqFKW2nvk5HagAKIYn/5xKz2satIZHsbtxMm0bPgucmhYzT79NTISzOZJZEgVQ/lvoRJ6B3KiTykQfQr9BaPX59Fk6WsWklOU46hsPpk0yTtcf8gHjNgn6gfFYef7f+8WaGvcMsE+YQKBgG7TjrumXNLjP9+XZmDYDjsX8AM/FTDBsc+r6+OaDovVmo639DrjL1BC+u0L1fMKv7cuvA/yzQKWNwwUeqLYGcc+YL+6+oZVhS63vsGUIVhL3j8+9eYCFjANax5uT8a3m6zWaia8oLS+8qr5eGuVQNyt7oY5QWz4DmssBDskkMug",
		
		//异步通知地址
		'notify_url' => "http://外网可访问网关地址/alipay.trade.page.pay-PHP-UTF-8/notify_url.php",
		
		//同步跳转
		'return_url' => "http://外网可访问网关地址/alipay.trade.page.pay-PHP-UTF-8/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAmR0CpuINvfG6ZTsEzdkghfBJUMV85V1D05MflcihhakcrZriBoUWdlFH/yDZE9fOIMcz5YYtNjrzklQzztt2LqmbwJQ1LY7pz5AqqVZXIcKk7QhNiZUpG3JYa5YgE1ejEFp2glqTrWkquPOkcEfmcGmuAkKEPB3hExffynAkl5y2lfWPOlbB5ewtN10qJeCIclWY8/9eeqebZtoP8FbEN6phzsepGf+TSiJjHTTvdAQhQ/MAI1qUJoONZ53/Bk9FVSAbUfO2DeThGxqDsIY8ZnyKU3VYhnRNIvDDbf/8yu+eElY/vWVjVtDk4IgI2LJb4Sdgs9GYr+EaU4RAVYF9ZQIDAQAB",
);