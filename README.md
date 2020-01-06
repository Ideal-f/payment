# payment

**payment 整合支付宝和微信支付包**

#### 环境依赖

兼容 php7.2以上

#### 安装

composer

#### 基本功能

###### 支付宝

支付类文件 ： alipay

| 支付类型  | 支付方法  |
| ------------ | ------------ |
| H5支付  | paybyh5()  |
| APP支付 |  paybyapp() |
| PC网站扫码支付  | paybyqrweb()  |
| PC网站跳转支付  | paybyjumweb()  |
| 退款  | paybyrefund()  |
| 转账到支付宝账户  | paybytransfer()  |
| 支查询订单  | paybyquery()  |
| 订单关闭  | paybyclose()  |

###### 微信

支付类文件 ： wxpay

| 支付类型  | 支付方法  |
| ------------ | ------------ |
| 小程序支付  | paybyxcx  |
| 浏览器H5支付  | paybyh5  |
| 公众号H5支付  | paybywxh5  |
| APP支付 |  paybyapp |
| PC网站扫码支付  | paybyqrweb  |
| 退款  | paybyrefund  |
| 查询订单  | paybyquery  |

#### 使用示例

    <?php
        require_once '../vendor/autoload.php';

        use Payment\Alipay;

        $res = new Alipay();
        echo $res->paybyh5([]);

