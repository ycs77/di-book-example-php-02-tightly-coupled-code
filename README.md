# 依賴注入：原理、實作與設計模式 - 範例 Mary's ECommerce (PHP)

> 天瓏網路書店連結：https://www.tenlong.com.tw/products/9789864344987?list_name=i-b-zh_tw

[返回目錄](https://github.com/ycs77/di-book-example-php) | [原版 C# 程式碼](https://github.com/DependencyInjection-2nd-edition/codesamples)

此 PHP 範例使用 Laravel 框架。PHP 需要 >=7.4。

## 安裝

執行以下指令：

```bash
composer install
cp .env.example .env
vim .env # 編輯 .env 檔，設定資料庫
php artisan key:generate
php artisan migrate --seed
```

## 執行範例

```bash
php artisan serve
```

開啟 http://localhost:8000
