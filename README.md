## 顧客管理システム
公開用URL：~~http://ec2-13-230-12-224.ap-northeast-1.compute.amazonaws.com/login~~<br>
<br>
2023/02/01 AWSのインスタンス終了しました。<br>
ちなみにひと月34円で運用できましたがずっと公開しておくとお金がかかるため終了しました。<br>
アクセスが無いタイミングでサーバーを休止状態にすることで節約する方法もあるそうなので、<br>
よかったら勉強してみてください。<br>
<br>
AWSを使用したLaravelのデプロイ方法は下記のサイトを参考にしました。<br>
参考URL：https://brainlog.jp/server/aws/post-3246/<br>

・データ分析はまだ実装していません。<br>
・Seederを使用してダミーの顧客情報を1000件登録したため<br>
　名前とフリガナが一致していません。<br>

## 環境構築
`composer install`<br>
`npm install` && `npm run dev`<br>
.env.example を .envにコピー<br>
.envのDB関連、sanctum, sessionなどの情報を編集<br>
`php artisan key:generate`<br>

## 開発中の簡易サーバー
### サーバー側<br>
`php artisan serve`<br>
### フロント側 (vite)<br>
`npm run dev`<br>

## ページスクリーンショット
![スクリーンショット2022-12-30（16 39 28）（小）](https://user-images.githubusercontent.com/95268598/210046345-53d833d6-4d45-4f0b-a0ad-a51bd5e33759.jpeg)
![スクリーンショット2022-12-30（16 33 47）（小）](https://user-images.githubusercontent.com/95268598/210045887-7ce6f04b-6780-4e66-9db8-6974f3ce930f.jpeg)
![スクリーンショット2022-12-30（16 28 23）（小）](https://user-images.githubusercontent.com/95268598/210045685-70b06d11-d836-4467-9e94-f87e07331d14.jpeg)
![スクリーンショット2022-12-30（16 45 31）（小）](https://user-images.githubusercontent.com/95268598/210046834-c473b3a4-84b5-49ad-8c65-30128102020b.jpeg)

## 外部リンク
YouTube 発表用紹介動画<br><br>
[![](https://img.youtube.com/vi/Q2AjwtY5IEY/0.jpg)](https://www.youtube.com/watch?v=Q2AjwtY5IEY)

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
