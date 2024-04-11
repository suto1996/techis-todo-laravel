<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>会員登録</title>
<style>
  /* 全体のスタイル */
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
  }

  /* フォームのコンテナ */
  .container {
    max-width: 600px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border: 2px solid black; /* 外枠の設定 */
  }

  /* フォーム要素 */
  .form-group {
    margin-bottom: 20px;
    text-align: center; /* 入力フィールドを中央に配置 */
  }

  /* ラベル */
  label {
    display: block;
    margin-bottom: 5px;
  }

  /* 入力フィールド */
  input[type="text"],
  input[type="tel"],
  input[type="email"],
  input[type="submit"] {
    width: 50%;
    padding: 10px;
    margin: 8px auto;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    display: block; /* ブロック要素に変更 */
    margin-left: auto; /* 左右のマージンをオートにして中央に配置 */
    margin-right: auto;
  }

  /* 登録ボタン */
  input[type="submit"] {
    background-color: transparent;
    color: black;
    border: 2px solid black;
    transition: background-color 0.3s, color 0.3s;
    width: 40%; /* ボタンの幅を調整 */
  }

  /* ホバー時のスタイル */
  input[type="submit"]:hover {
    background-color: black;
    color: white;
  }

  /* タイトル */
  h2 {
    text-align: center;
  }

  /* ボタンを中央に配置するスタイル */
  .center {
    text-align: center;
  }
</style>
</head>
<body>
  <div class="container">
    <h2>会員登録</h2>
    <form action="/member" method="post" id="contact-form">
      @csrf
      <div class="form-group">
        <input type="text" id="name" name="name" placeholder="名前" required>
      </div>
      <div class="form-group">
        <input type="tel" id="phone" name="phone" placeholder="電話番号" required>
      </div>
      <div class="form-group">
        <input type="email" id="email" name="email" placeholder="メールアドレス" required>
      </div>
      <div class="center">
        <input type="submit" value="登録">
      </div>
    </form>
  </div>
</body>
</html>
