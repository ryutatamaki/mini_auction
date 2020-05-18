<h2><?= $authuser['username'] ?> のホーム</h2>
<h3>※出品情報</h3>
<table cellpadding="0" cellspacing="0">
<thead>
    <tr>
        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
        <th class="main" scope="col"><?= $this->Paginator->sort('name') ?></th>
        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
        <th scope="col" class="actions"><?= __('Actions') ?></th>
    </tr>
</thead>
<tbody>
    <?php foreach($biditems as $biditem): ?>
    <tr>
        <td><?= h($biditem->id) ?></td>
        <td><?= h($biditem->name) ?></td>
        <td><?= h($biditem->created) ?></td>
        <td class="actions">
            <?php if(!empty($biditem->bidinfo)): ?>
            <?= $this->Html->link(__('View'), ['action' => 'msg', $biditem->bidinfo->id]) ?>
            <?php endif; ?>
        </td>
    </tr>
    <?php endforeach;?>
</tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <li><?= $this->Paginator->first('<< ' . __('first')) ?></li>
        <li><?= $this->Paginator->prev('<' . __('previous')) ?></li>
        <li><?= $this->Paginator->numbers() ?></li>
        <li><?= $this->Paginator->next(__('next') . '>') ?></li>
        <li><?= $this->Paginator->last(__('last') . ' >>') ?></li>
    </ul>
</div>
<h6><?= $this->Html->link(__('<< 落札者情報に戻る'), ['action' => 'home']) ?></h6>