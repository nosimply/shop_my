<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016080200150603",

		//商户私钥
		'merchant_private_key' => "MIIEpQIBAAKCAQEA6pHDkvNMn0hZ+FiI2XJeU/wwUFgmZC1oKCTCi4aykWiBDfVqRrnbyRKd1ionAQPIcgoWZYwkyeIvgSxNc43IfPqfcyZrotl0vYVj4QZmkHTr3/uDPIhDVS51QP0MSuO1R6VZdUhfivwCIMslnZY26LWGu1fP6Eo7Bgt7qjnd8FImXvvLaD7P4g1mxXtfJYN378Js6Rnpx8DEH2lgXRre+Z//iDp0PSLXO60uifqvMjb+u9iDd+2weHT0VQ0+2tBteKS75kS85hc2iUQVlfh9bke08B1nqQfSjzYEJqXPloa0sXX3Dmkg2GBSzOJcYUuxFbBfhPVSUo0obS12rrcLWQIDAQABAoIBAQDFPQopj6F3MfxNIgz4Yv3EOwNZG7Y0eCXj030um3WdZTVXSmwxymhv+9JyWgFwDgFHOwo4Gw54H1P4lwsNRkQ2KvtWdRD+30EVd4tTlPE7OMV6El/4z09m2ejIW78xXaV5+CRvxQppsJwNfSRFDSFgrfr7nsv4tCpLW+6BZaUkRCL4yMQGpbA/fHVCbkTk1ldqZoyUOhwGBFLp1Gz26ugtjU+t44yY7bQXp20Yxx6IXlnU4CsEzIprUHopmKtANhZbL8Dj+7VwB4OhWlwzTkUtnDwctEw9txQBbu3NYTz4wXPh+weyzsB845uSbAOQyOZWyMAHLAE9uivJFgtvsRetAoGBAP/H0suHZm9MqiSppiuFP4fs+zDRhsnjS6mYdESWCKyuGwseytsKTcK0mwUSoNvhGdKdZIZgpuJt1jpxieTZtNw4gTOlHcTM5OMyE9FcrqZwvpTP3Yb0wuQ3DLHTbchzPBP0AsfEeAvcZjBYuC5ytOxso8ruy1pmnT46jScMJKRDAoGBAOrFSC+KDyX3OTaCaGcBPnDTzGQvEYhGwTh4riPZlFJDZF/tMza/rZfgsI5uRJWyUl37l9tqcUhIt43c5z/RcqZBmgP78zA3peqp+eb2TXv55EMppT40SecsileIAD0EOGtPXtH/nbxMbqRLqspVTukxr+KD7O8QWyULvU0fgEYzAoGARJKr3sjkG36wNrgMxqooiCZuiX4C5uk7BbLLqP+YP8NFmMueku7GPibxUIDYA1rr810i8CvFUfskbfK2h1YeeNPlP5VKz9Imowpv6bcxU4nybi70MxQ3k7t2ec43JoBOYQMQI8J2dKeX9eozJrC19JSDrQosFoZgLajA4vEMecUCgYEAuEOripSDmzrVTvE/3Ejfp1K1Q5Sl4B4Ynagqlby6a261o4za+4eqSmBycvgdIJlbiKRl5jM/QorAdroBTtenctJefe4MS7YBpZNPr3V2D25tOEHBjncf4i/VTSpTdZCQb7lWJODJ/vbGiHFTVYdrbiAvekwtdN2TjBoQtC2bUn0CgYEAhMWiIJwQgHvGV3WoInjpNUDKD4K2A4jvVDoJYIvX2oYYsoJvkqF16vdFh6MgLMSYX5X79MTuQL1gvBdVUCXpkMjYbjHUGe18e+Q3Y06TbXHEXAo6UjePpysC27sjAXNaF23Xc8/zJjZqo2/B+Pgg8gn6e/G4pv+Ykt4YlStKyOo=",
		
		//异步通知地址  外网可访问网关地址
		'notify_url' => "http://www.pyg.com/home/order/notify",
		
		//同步跳转  外网可访问网关地址
		'return_url' => "http://www.pyg.com/home/order/callback",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		//'gatewayUrl' => "https://openapi.alipay.com/gateway.do",
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAsougH6plsTB8XUdOtrV1kQQaZP6WxqFiNWmQcudgxifeb6Xod4BiI4PgYTWfccoRjFlBDjYyiJJu6ihiBuKsko7rrO49PEfP4Zu/5Msa/cEoZKBPivp3jUiwCDZeWsJBtCHAsoUhqE5lm9guY4eOhVytEo/dORJLI+enDpoh1KwY1SQAerKSEdBSUzsEx5UsU1fjl3AS/9RA8Xj3rIG30H5+EXRSZ0PVThJVW7KzSV/k8Tc1WvM4vXP4qySQjjX9rooRFFtvQSX8jVziDeBILi5H2KATf4POu/iPMBGEJRgDKNq98N0ps2LmmzWtAwefxYP66cVd3PXsYXI5VWZ7YwIDAQAB",
);