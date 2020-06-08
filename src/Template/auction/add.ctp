<h2>商品を出品する</h2>
<?= $this->Form->create($biditem) ?>
<fieldset>
    <legend>※商品名と終了日時を入力:</legend>
    <?php
        echo $this->Form->hidden('user_id', ['value' => $authuser['id']]);
        echo '<p><strong>出品者: ' . $authuser['username'] . '</strong></p>';
        echo $this->Form->control('name', ['label' => '商品名']);
        echo $this->Form->hidden('finished', ['value' => 0]);
        echo $this->Form->control('endtime', [
            'type' => 'datetime',
            'label' => '期限',
            'required' => true,
            'monthNames' => false,
            // 'minYear' => date('Y'),
            // 'maxYear' => date('Y')+1,
          ]);
    ?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>