<h2>Viewing <span class='muted'>#<?php echo $post->id; ?></span></h2>

<p>
	<strong>タイトル</strong>
	<?php echo $post->title; ?></p>
<p>
	<strong>内容</strong>
	<?php echo $post->body; ?></p>


<?php echo Html::anchor('post', '一覧に戻る'); ?>