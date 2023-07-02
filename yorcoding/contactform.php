<!-- <!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
<meta charset="UTF-8" />
<title>レスポンシブメールフォームのサンプル</title>
<meta name="robots" content="noindex,nofollow" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" /> -->



<head>
	<!-- 既存サイトに組み込む場合に不要なCSSここから -->
	<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/reset.css" /> -->
	<style>
		/* body {
	color: #454545;
	font-family: sans-serif;
	background: #f0f0f0;
} */
	</style>
	<!-- 既存サイトに組み込む場合に不要なCSSここまで -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/mailform.css" />
	<!-- ご希望の日時選択ライブラリここから -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/jquery.datetimepicker.css" />
	<!-- ご希望の日時選択ライブラリここまで -->
</head>
<!-- <body> -->

<form action="php/mailform.php" method="post" id="mail_form">
	<dl>
		<dt>
			<i></i>
			名前<span>必須</span>
		</dt>

		<dd class="required">
			<input type="text" name="name_1" value="" />
		</dd>
	</dl>

	<dl>
		<dt><i></i>メールアドレス<span>必須</span></dt>
		<dd class="required"><input type="email" name="mail_address" value="" /></dd>
	</dl>

	<dl>
		<dt><i></i>お問い合わせの内容<span>必須</span></dt>
		<dd class="required"><textarea type="textarea" name="contents" cols="40" rows="5"></textarea></dd>
	</dl>

	<dl class="box">
		<label for="privacyCheck">プライバシーポリシーに同意します</label>
		<input type="checkbox" id="privacyCheck" required>
	</dl>

	<p id="form_submit"><input type="button" id="form_submit_button" value="送信する" /></p>

</form>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/mailform-js.php"></script>
<!-- 
</body> -->

</html>