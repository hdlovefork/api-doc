laravel-api-doc
======
在Laravel中使用Markdown语法轻松编写API文档


### 安装

```
composer require dean/api-doc
php artisan vendor:publish --tag=dean-apidoc
```

### 开始

`http://your-domain.com/doc`

**注：当`APP_ENV`环境变量设为`local`，`dev`时才能访问该路由**

### 配置

`storage/doc/config.json`

```json
[
  {
    "path": "shop",
    "name": "商城",
    "children": [
      {
        "path": "product",
        "name": "商品模块"
      }
    ]
  },
 ...
]
```
它将会搜索/storage/doc/shop/product目录下的所有.md后缀文件，并显示在左侧列表中。



