Magento2 Controller Response Types (Page,Redirect,JSON,Forward,Raw)
## Supports

- <b>Magento 2.0.x, 2.1.x, 2.2.x, 2.3.x and 2.4.x</b>

Required to run the following commands in Magento 2 root folder:

```
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
php bin/magento cache:clean
```

### Install via zip

* [Download the latest version from GitHub](https://github.com/vrajeshpatel4u/v4u-magento2-controller-response-types-Page-Redirect-JSON-Forward-Raw)

Responses Types : 

1. Page : This returns HTML loaded from a layout handle. 

   Class : \Magento\Framework\View\Result\Page
   
   Launch the below url. 

   Url : www.example.com/controllerresponsetypes/index/resultpage
   
   Where www.example.com is your magento instance URL. 
   
 2. JSON : this returns a response in JSON format. It can be used in API or AJAX requests.

    Class : \Magento\Framework\Controller\Result\Json
    
    Launch the below url. 
    
    Url : www.example.com/controllerresponsetypes/index/resultjson
    
 3. Raw : this returns whatever you want to be returned.

    Class : \Magento\Framework\Controller\Result\Raw
    
    Launch the below url.
    
    Url : www.example.com/controllerresponsetypes/index/resultraw
   
4. Forward : this internally forwards to another controller without changing the URL.

   Class : \Magento\Framework\Controller\Result\Forward
   
   Launch the below url. 

   Url : www.example.com/controllerresponsetypes/index/resultforward
   
5. Redirect : this represents a 301 or 302 redirect. It is used when a user needs to be redirected to a different URL.

    Class : \Magento\Framework\Controller\Result\Redirect
    
    Lunch the below url. 

    Url : www.example.com/controllerresponsetypes/index/resultredirect
    
