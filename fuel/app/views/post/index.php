<h2>ブログ <span class='muted'>一覧</span></h2>
<br>
<?php if ($posts): ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>タイトル</th>
            <th>内容</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($posts as $item): ?>
            <tr>

                <td><?php echo $item->title; ?></td>
                <td><?php echo $item->body; ?></td>
                <td>
                    <div class="btn-toolbar">
                        <div class="btn-group">
                            <?php echo Html::anchor('post/view/' . $item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>
                        </div>
                    </div>

                </td>
            </tr>
        <?php endforeach; ?>    </tbody>
    </table>

<?php else: ?>
    <p>No Posts.</p>

<?php endif; ?><p>

</p>
