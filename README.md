# php_practice
課題ハンズオンのリポジトリ。

## 実装した画面
以下２つの画面を作成した。<br />
`contacts#index`<br />
作成したお問合せが一覧表示される画面として実装。<br />
表示されるカラムは`department_id`,`name`,`gender`,`email`,`content`の５種類。<br />
[![Image from Gyazo](https://i.gyazo.com/a150a0eda66a794e733b790287b04453.png)](https://gyazo.com/a150a0eda66a794e733b790287b04453) <br />
`contacts#create`<br />
お問合せ作成画面として作成。<br />
[![Image from Gyazo](https://i.gyazo.com/ce93d225b94df606c7d6f9d6b0d5d7b2.png)](https://gyazo.com/ce93d225b94df606c7d6f9d6b0d5d7b2) <br />
以下バリデーションも実装しており、各フォームにはOldヘルパーを使用している。<br />
[![Image from Gyazo](https://i.gyazo.com/df391058f838d5f9812ca0367df613b2.png)](https://gyazo.com/df391058f838d5f9812ca0367df613b2) <br />

## チェック事項
以下、正しくチェックできているか自分で確認する。
- [x] Dockerで環境構築できているか？ 
- [x] 開発環境は正確か（PHP:8.x.x, Laravel: 8.x.x） 
- [x] DBの設定は正しいか？（データベース名: training, DB接続ユーザー:training-user）
- [x] departmentsテーブルを正しく作成できているか？ 
- [x] seederを利用してテストデータを挿入できているか？
- [x] 入力フォームの内容は正しいか。
- [x] 「お問い合わせ先部署」はセレクトボックスによる入力としているか。
- [x] バリデーションは適切に設定されているか？
- [x] 「問い合わせ内容作成画面」は過去に作成された問い合わせ情報を一覧できる画面となっているか。
- [x] contacts テーブルのdepartment_idに対して外部キー制約を設けているか。
- [x] バリデーションはFormRequestを利用して実装しているか。 
- [x] Repositoryパターンに準拠し、実装を行っているか。 
- [x] 各種メソッドには、型宣言、PHPDOCを付与しているか。
- [x] コーディングルールと齟齬がないか？
