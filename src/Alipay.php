<?php
namespace Payment;

use Payment\alipayapi\AopClient;
use Payment\alipayapi\request\AlipayTradeWapPayRequest;

/**
 * 微信支付
 *
 * @author ideal-f
 */
class Alipay
{
     /**
     * H5支付
     * @param array 请求参数
     * @return string
     */
    public function paybyh5($param)
    {
        $aop = new AopClient();

        $aop->gatewayUrl = 'https://openapi.alipaydev.com/gateway.do';
        $aop->appId = '2016101600697508';
        $aop->rsaPrivateKey = 'MIIEpgIBAAKCAQEAvHx75XZUK2YEhlN4eAQpWiVRtGae7jBpjdmqoqvCmrOQAfBIoDIHk5Rp4TDgZKPDGJjMp+yPwS0XT3q10NF5gv72g076HxEKt5x0VBHo1AKrWHipYr5G0SpAVt33AXz3bQ7e7DOkIn9IUw8d303I87iqJ+Ek/8PYPpFWPUgxsEyYKWmceJDV6vkFRVekLUJEbLqMmILP/Rhx7fvY3BgES/JTx4Azqe+9FqzJ36EH7SRbIq2jogStmbg4vKAh/nK9Lk6WoMh/bqB+AJuWKp7eZf+Nehs2Zaa6UEkob+hG1QwFn36+/Yz3yVOzHMdMVC1v1nTrVLk0mzZ1SQWKgrx2oQIDAQABAoIBAQCiCoshTEc0QDJnoN8SntFGNIs3gnnj4C7+ykCONQfKo9CMOhzVy+0DjTYxaSmgm8EgJkzbmN5FfxRpOd+RNGU4nyUi4gTaLHaAP7sqg3McwWa5WpKU12xeaeqCQ7UUzHCSi5ROkF7tYWu2LGrMDT1TelCelEqQr7f6okv3x1cgbl7a9c0XMPaTu0x5XHIDYq8PbkIRka1o6DD98Sg6bFqfI4tsbEH4q6ViFszH/J2ZEcUduaPNT12ejPToyOz0xOT1QkZzvF+AT3CtR0hvXEJvROUQwEa61jOEtCmm5RxgZTy6Mk0v80qoV/chXH2DqkC5x3op/QJBFcDtJSKVi1dZAoGBAOWGFSEgyOfuz/WmbQ52XW3Pvvf1hQDWaA2+Sph+iIJ+B6TD59Bf6+sXzGUmgykjoOfQFgan2HB7v9kJXAiR0waHEzhyz3D+dSHRHj2zN4TJs/Gb+MBA9E54dGd5Fh9XSjt8NQ6CGgtr+/2ovIiUPMrJ41OujgsjUCyV9dYPutpnAoGBANI6jL3NpyJoJWOHyz7QEmHUvvFkY8h4Ibq3LNa3vaqEngnOVfB0//eODAuQPpYuO0cfvroyp48fLRw3/NZhEMCcv6K+YFjHW7pF05hSA+F3/D0D9Y3bNlvoqY0EGBW1ow0RngqCcaqehf48rKuO+ndk4PYtoOfia+neaGPAGpG3AoGBAJIjzVBKj6EdbUv7q3SJ6PMCU5WNviHKYnZdsyFlb4WmuTcvhWonqQ8HGB1PaDPJe6od0+ho9maoZH7Mdsz+DF8boiFO+MX5PptJive+JJtn0isEJF5E/Uj5aSR49Jz/90Po0d9q9ypOlyPrTB+qQwrbgOLHQanV0jaRRPYHDfIBAoGBAM53Sjoue3LDLdUuTGIIH8WNF2oj2gvMT/P8akEGe3O4gy3GQ4jAn5MVIqdIpu7/wJ/9gWeE0CMzzy3jnqE8+yLvzxWaOy11vZSXd1QlWEJbgJK8DLGhFSX2vm4ME0te9B+lqb1QlymmPpqOJFbpOPuBS576+QhDyxAIqiUtSerJAoGBAKVRV+vsQezxWdvJyAdFcbr6c97yrRtAvfonLBcrUtlrkPPuXMBXJXKSSfU2mqVk1mrH6MUd/aco0cAe7cndPgdQolZ1pQRn43XAURVjWMDC45A9kCxOa/qstI8HND22YMfZY7w1vJXgpNat6X0wj1VCjnyJwWdhVfQMwWZu6MgP';
        $aop->alipayrsaPublicKey = 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAjqbNGmsvcOusOH6GA3f9WZsxTfAwFmoCUNZjOeK/W25BEvDp0PxngboiM61iNSJavmjiVeN+jE1q6HrPUoPgFG40IdCFJ2ywry3Pz5qdAbrA1ryfBUHR8LIohpTPw0Io+NJxJpF0RfZEdZYMB0I4N0VgjuCPqW3Bp6dKlI+aKY4/8BmIcZUKpxMfmpTyVY3CnY1XFbD969anmQYErWYQen25JL5mV5KkQN5AzeH+mO1IYUOWUYwaD/iCE9JNMC248z2PV5Qbpi/2EkOy4VQqpLcyTOuPEFef52u+rKl9tXEbQ/tLDR3/mA6VuGXY7x6Ms8pG32eOhU9lo60o1fqOhwIDAQAB';
        $aop->apiVersion = '1.0';
        $aop->signType = 'RSA2';
        $aop->postCharset='utf-8';
        $aop->format='json';

        $request = new AlipayTradeWapPayRequest();
        $request->setBizContent("{" .
            "    \"body\":\"".$param['body']."\"," .
            "    \"subject\":\"".$param['subject']."\"," .
            "    \"out_trade_no\":\"".$param['out_trade_no']."\"," .
            "    \"timeout_express\":\"90m\"," .
            "    \"total_amount\":".$param['total_amount']."," .
            "    \"quit_url\":".$param['quit_url']."," .
            "    \"product_code\":\"QUICK_WAP_WAY\"" .
            "  }");
        $request->setNotifyUrl($param['notify_url']);
        $result = $aop->pageExecute( $request);
        echo $result;
    }

}



/**
 * 证书类型AopCertClient功能方法使用测试
 * 1、execute 调用示例
 * 2、sdkExecute 调用示例
 * 3、pageExecute 调用示例
 */


//1、execute 使用
// $aop = new AopClient ();

// $aop->gatewayUrl = 'https://openapi.alipaydev.com/gateway.do';
// $aop->appId = '2016101600697508';
// $aop->rsaPrivateKey = 'MIIEpgIBAAKCAQEAvHx75XZUK2YEhlN4eAQpWiVRtGae7jBpjdmqoqvCmrOQAfBIoDIHk5Rp4TDgZKPDGJjMp+yPwS0XT3q10NF5gv72g076HxEKt5x0VBHo1AKrWHipYr5G0SpAVt33AXz3bQ7e7DOkIn9IUw8d303I87iqJ+Ek/8PYPpFWPUgxsEyYKWmceJDV6vkFRVekLUJEbLqMmILP/Rhx7fvY3BgES/JTx4Azqe+9FqzJ36EH7SRbIq2jogStmbg4vKAh/nK9Lk6WoMh/bqB+AJuWKp7eZf+Nehs2Zaa6UEkob+hG1QwFn36+/Yz3yVOzHMdMVC1v1nTrVLk0mzZ1SQWKgrx2oQIDAQABAoIBAQCiCoshTEc0QDJnoN8SntFGNIs3gnnj4C7+ykCONQfKo9CMOhzVy+0DjTYxaSmgm8EgJkzbmN5FfxRpOd+RNGU4nyUi4gTaLHaAP7sqg3McwWa5WpKU12xeaeqCQ7UUzHCSi5ROkF7tYWu2LGrMDT1TelCelEqQr7f6okv3x1cgbl7a9c0XMPaTu0x5XHIDYq8PbkIRka1o6DD98Sg6bFqfI4tsbEH4q6ViFszH/J2ZEcUduaPNT12ejPToyOz0xOT1QkZzvF+AT3CtR0hvXEJvROUQwEa61jOEtCmm5RxgZTy6Mk0v80qoV/chXH2DqkC5x3op/QJBFcDtJSKVi1dZAoGBAOWGFSEgyOfuz/WmbQ52XW3Pvvf1hQDWaA2+Sph+iIJ+B6TD59Bf6+sXzGUmgykjoOfQFgan2HB7v9kJXAiR0waHEzhyz3D+dSHRHj2zN4TJs/Gb+MBA9E54dGd5Fh9XSjt8NQ6CGgtr+/2ovIiUPMrJ41OujgsjUCyV9dYPutpnAoGBANI6jL3NpyJoJWOHyz7QEmHUvvFkY8h4Ibq3LNa3vaqEngnOVfB0//eODAuQPpYuO0cfvroyp48fLRw3/NZhEMCcv6K+YFjHW7pF05hSA+F3/D0D9Y3bNlvoqY0EGBW1ow0RngqCcaqehf48rKuO+ndk4PYtoOfia+neaGPAGpG3AoGBAJIjzVBKj6EdbUv7q3SJ6PMCU5WNviHKYnZdsyFlb4WmuTcvhWonqQ8HGB1PaDPJe6od0+ho9maoZH7Mdsz+DF8boiFO+MX5PptJive+JJtn0isEJF5E/Uj5aSR49Jz/90Po0d9q9ypOlyPrTB+qQwrbgOLHQanV0jaRRPYHDfIBAoGBAM53Sjoue3LDLdUuTGIIH8WNF2oj2gvMT/P8akEGe3O4gy3GQ4jAn5MVIqdIpu7/wJ/9gWeE0CMzzy3jnqE8+yLvzxWaOy11vZSXd1QlWEJbgJK8DLGhFSX2vm4ME0te9B+lqb1QlymmPpqOJFbpOPuBS576+QhDyxAIqiUtSerJAoGBAKVRV+vsQezxWdvJyAdFcbr6c97yrRtAvfonLBcrUtlrkPPuXMBXJXKSSfU2mqVk1mrH6MUd/aco0cAe7cndPgdQolZ1pQRn43XAURVjWMDC45A9kCxOa/qstI8HND22YMfZY7w1vJXgpNat6X0wj1VCjnyJwWdhVfQMwWZu6MgP';
// $aop->alipayrsaPublicKey = 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAjqbNGmsvcOusOH6GA3f9WZsxTfAwFmoCUNZjOeK/W25BEvDp0PxngboiM61iNSJavmjiVeN+jE1q6HrPUoPgFG40IdCFJ2ywry3Pz5qdAbrA1ryfBUHR8LIohpTPw0Io+NJxJpF0RfZEdZYMB0I4N0VgjuCPqW3Bp6dKlI+aKY4/8BmIcZUKpxMfmpTyVY3CnY1XFbD969anmQYErWYQen25JL5mV5KkQN5AzeH+mO1IYUOWUYwaD/iCE9JNMC248z2PV5Qbpi/2EkOy4VQqpLcyTOuPEFef52u+rKl9tXEbQ/tLDR3/mA6VuGXY7x6Ms8pG32eOhU9lo60o1fqOhwIDAQAB';
// $aop->apiVersion = '1.0';
// $aop->signType = 'RSA2';
// $aop->postCharset='utf-8';
// $aop->format='json';

// $request = new AlipayTradeQueryRequest ();
// $request->setBizContent("{" .
//     "\"out_trade_no\":\"20150320010101001\"," .
//     "\"trade_no\":\"2014112611001004680 073956707\"," .
//     "\"org_pid\":\"2088101117952222\"," .
//     "      \"query_options\":[" .
//     "        \"TRADE_SETTE_INFO\"" .
//     "      ]" .
//     "  }");
// $result = $aop->execute ( $request);
// var_dump($result);



// //2、sdkExecute 测试
// $aop = new AopClient ();

// $aop->gatewayUrl = 'https://openapi.alipaydev.com/gateway.do';
// $aop->appId = '2016101600697508';
// $aop->rsaPrivateKey = 'MIIEpgIBAAKCAQEAvHx75XZUK2YEhlN4eAQpWiVRtGae7jBpjdmqoqvCmrOQAfBIoDIHk5Rp4TDgZKPDGJjMp+yPwS0XT3q10NF5gv72g076HxEKt5x0VBHo1AKrWHipYr5G0SpAVt33AXz3bQ7e7DOkIn9IUw8d303I87iqJ+Ek/8PYPpFWPUgxsEyYKWmceJDV6vkFRVekLUJEbLqMmILP/Rhx7fvY3BgES/JTx4Azqe+9FqzJ36EH7SRbIq2jogStmbg4vKAh/nK9Lk6WoMh/bqB+AJuWKp7eZf+Nehs2Zaa6UEkob+hG1QwFn36+/Yz3yVOzHMdMVC1v1nTrVLk0mzZ1SQWKgrx2oQIDAQABAoIBAQCiCoshTEc0QDJnoN8SntFGNIs3gnnj4C7+ykCONQfKo9CMOhzVy+0DjTYxaSmgm8EgJkzbmN5FfxRpOd+RNGU4nyUi4gTaLHaAP7sqg3McwWa5WpKU12xeaeqCQ7UUzHCSi5ROkF7tYWu2LGrMDT1TelCelEqQr7f6okv3x1cgbl7a9c0XMPaTu0x5XHIDYq8PbkIRka1o6DD98Sg6bFqfI4tsbEH4q6ViFszH/J2ZEcUduaPNT12ejPToyOz0xOT1QkZzvF+AT3CtR0hvXEJvROUQwEa61jOEtCmm5RxgZTy6Mk0v80qoV/chXH2DqkC5x3op/QJBFcDtJSKVi1dZAoGBAOWGFSEgyOfuz/WmbQ52XW3Pvvf1hQDWaA2+Sph+iIJ+B6TD59Bf6+sXzGUmgykjoOfQFgan2HB7v9kJXAiR0waHEzhyz3D+dSHRHj2zN4TJs/Gb+MBA9E54dGd5Fh9XSjt8NQ6CGgtr+/2ovIiUPMrJ41OujgsjUCyV9dYPutpnAoGBANI6jL3NpyJoJWOHyz7QEmHUvvFkY8h4Ibq3LNa3vaqEngnOVfB0//eODAuQPpYuO0cfvroyp48fLRw3/NZhEMCcv6K+YFjHW7pF05hSA+F3/D0D9Y3bNlvoqY0EGBW1ow0RngqCcaqehf48rKuO+ndk4PYtoOfia+neaGPAGpG3AoGBAJIjzVBKj6EdbUv7q3SJ6PMCU5WNviHKYnZdsyFlb4WmuTcvhWonqQ8HGB1PaDPJe6od0+ho9maoZH7Mdsz+DF8boiFO+MX5PptJive+JJtn0isEJF5E/Uj5aSR49Jz/90Po0d9q9ypOlyPrTB+qQwrbgOLHQanV0jaRRPYHDfIBAoGBAM53Sjoue3LDLdUuTGIIH8WNF2oj2gvMT/P8akEGe3O4gy3GQ4jAn5MVIqdIpu7/wJ/9gWeE0CMzzy3jnqE8+yLvzxWaOy11vZSXd1QlWEJbgJK8DLGhFSX2vm4ME0te9B+lqb1QlymmPpqOJFbpOPuBS576+QhDyxAIqiUtSerJAoGBAKVRV+vsQezxWdvJyAdFcbr6c97yrRtAvfonLBcrUtlrkPPuXMBXJXKSSfU2mqVk1mrH6MUd/aco0cAe7cndPgdQolZ1pQRn43XAURVjWMDC45A9kCxOa/qstI8HND22YMfZY7w1vJXgpNat6X0wj1VCjnyJwWdhVfQMwWZu6MgP';
// $aop->alipayrsaPublicKey = 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAjqbNGmsvcOusOH6GA3f9WZsxTfAwFmoCUNZjOeK/W25BEvDp0PxngboiM61iNSJavmjiVeN+jE1q6HrPUoPgFG40IdCFJ2ywry3Pz5qdAbrA1ryfBUHR8LIohpTPw0Io+NJxJpF0RfZEdZYMB0I4N0VgjuCPqW3Bp6dKlI+aKY4/8BmIcZUKpxMfmpTyVY3CnY1XFbD969anmQYErWYQen25JL5mV5KkQN5AzeH+mO1IYUOWUYwaD/iCE9JNMC248z2PV5Qbpi/2EkOy4VQqpLcyTOuPEFef52u+rKl9tXEbQ/tLDR3/mA6VuGXY7x6Ms8pG32eOhU9lo60o1fqOhwIDAQAB';
// $aop->apiVersion = '1.0';
// $aop->signType = 'RSA2';
// $aop->postCharset='utf-8';
// $aop->format='json';

// $request = new AlipayOpenOperationOpenbizmockBizQueryRequest ();
// $request->setBizContent("{\"status\":\"1001\",\"shop_id\":\"2001\"}");
// $result = $aop->sdkExecute($request);
// echo $result;


//3、pageExecute 测试
// $aop = new AopClient ();

// $aop->gatewayUrl = 'https://openapi.alipaydev.com/gateway.do';
// $aop->appId = '2016101600697508';
// $aop->rsaPrivateKey = 'MIIEpgIBAAKCAQEAvHx75XZUK2YEhlN4eAQpWiVRtGae7jBpjdmqoqvCmrOQAfBIoDIHk5Rp4TDgZKPDGJjMp+yPwS0XT3q10NF5gv72g076HxEKt5x0VBHo1AKrWHipYr5G0SpAVt33AXz3bQ7e7DOkIn9IUw8d303I87iqJ+Ek/8PYPpFWPUgxsEyYKWmceJDV6vkFRVekLUJEbLqMmILP/Rhx7fvY3BgES/JTx4Azqe+9FqzJ36EH7SRbIq2jogStmbg4vKAh/nK9Lk6WoMh/bqB+AJuWKp7eZf+Nehs2Zaa6UEkob+hG1QwFn36+/Yz3yVOzHMdMVC1v1nTrVLk0mzZ1SQWKgrx2oQIDAQABAoIBAQCiCoshTEc0QDJnoN8SntFGNIs3gnnj4C7+ykCONQfKo9CMOhzVy+0DjTYxaSmgm8EgJkzbmN5FfxRpOd+RNGU4nyUi4gTaLHaAP7sqg3McwWa5WpKU12xeaeqCQ7UUzHCSi5ROkF7tYWu2LGrMDT1TelCelEqQr7f6okv3x1cgbl7a9c0XMPaTu0x5XHIDYq8PbkIRka1o6DD98Sg6bFqfI4tsbEH4q6ViFszH/J2ZEcUduaPNT12ejPToyOz0xOT1QkZzvF+AT3CtR0hvXEJvROUQwEa61jOEtCmm5RxgZTy6Mk0v80qoV/chXH2DqkC5x3op/QJBFcDtJSKVi1dZAoGBAOWGFSEgyOfuz/WmbQ52XW3Pvvf1hQDWaA2+Sph+iIJ+B6TD59Bf6+sXzGUmgykjoOfQFgan2HB7v9kJXAiR0waHEzhyz3D+dSHRHj2zN4TJs/Gb+MBA9E54dGd5Fh9XSjt8NQ6CGgtr+/2ovIiUPMrJ41OujgsjUCyV9dYPutpnAoGBANI6jL3NpyJoJWOHyz7QEmHUvvFkY8h4Ibq3LNa3vaqEngnOVfB0//eODAuQPpYuO0cfvroyp48fLRw3/NZhEMCcv6K+YFjHW7pF05hSA+F3/D0D9Y3bNlvoqY0EGBW1ow0RngqCcaqehf48rKuO+ndk4PYtoOfia+neaGPAGpG3AoGBAJIjzVBKj6EdbUv7q3SJ6PMCU5WNviHKYnZdsyFlb4WmuTcvhWonqQ8HGB1PaDPJe6od0+ho9maoZH7Mdsz+DF8boiFO+MX5PptJive+JJtn0isEJF5E/Uj5aSR49Jz/90Po0d9q9ypOlyPrTB+qQwrbgOLHQanV0jaRRPYHDfIBAoGBAM53Sjoue3LDLdUuTGIIH8WNF2oj2gvMT/P8akEGe3O4gy3GQ4jAn5MVIqdIpu7/wJ/9gWeE0CMzzy3jnqE8+yLvzxWaOy11vZSXd1QlWEJbgJK8DLGhFSX2vm4ME0te9B+lqb1QlymmPpqOJFbpOPuBS576+QhDyxAIqiUtSerJAoGBAKVRV+vsQezxWdvJyAdFcbr6c97yrRtAvfonLBcrUtlrkPPuXMBXJXKSSfU2mqVk1mrH6MUd/aco0cAe7cndPgdQolZ1pQRn43XAURVjWMDC45A9kCxOa/qstI8HND22YMfZY7w1vJXgpNat6X0wj1VCjnyJwWdhVfQMwWZu6MgP';
// $aop->alipayrsaPublicKey = 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAjqbNGmsvcOusOH6GA3f9WZsxTfAwFmoCUNZjOeK/W25BEvDp0PxngboiM61iNSJavmjiVeN+jE1q6HrPUoPgFG40IdCFJ2ywry3Pz5qdAbrA1ryfBUHR8LIohpTPw0Io+NJxJpF0RfZEdZYMB0I4N0VgjuCPqW3Bp6dKlI+aKY4/8BmIcZUKpxMfmpTyVY3CnY1XFbD969anmQYErWYQen25JL5mV5KkQN5AzeH+mO1IYUOWUYwaD/iCE9JNMC248z2PV5Qbpi/2EkOy4VQqpLcyTOuPEFef52u+rKl9tXEbQ/tLDR3/mA6VuGXY7x6Ms8pG32eOhU9lo60o1fqOhwIDAQAB';
// $aop->apiVersion = '1.0';
// $aop->signType = 'RSA2';
// $aop->postCharset='utf-8';
// $aop->format='json';

// $request = new AlipayTradeWapPayRequest ();
// $request->setBizContent("{" .
//     "    \"body\":\"对一笔交易的具体描述信息。如果是多种商品，请将商品描述字符串累加传给body。\"," .
//     "    \"subject\":\"测试\"," .
//     "    \"out_trade_no\":\"70501111111S001111119\"," .
//     "    \"timeout_express\":\"90m\"," .
//     "    \"total_amount\":9.00," .
//     "    \"product_code\":\"QUICK_WAP_WAY\"" .
//     "  }");
// $result = $aop->pageExecute( $request);
// echo $result;


