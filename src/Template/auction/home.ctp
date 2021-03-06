<h2><?= $authuser['username'] ?>のホーム</h2>
<h3>※落札情報</h3>
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
    <?php foreach($bidinfo as $info): ?>
        <tr>
            <td><?= h($info->id) ?></td>
            <td><?= h($info->biditem->name) ?></td>
            <td><?= h($info->biditem->created->year .'-' . (strlen($info->biditem->created->month) == 1 ? 0 . $info->biditem->created->month : $info->biditem->created->month) . '-' . (strlen($info->biditem->created->day) == 1 ? 0 . $info->biditem->created->day : $info->biditem->created->day) . ' ' . (strlen($info->biditem->created->hour) == 1 ? 0 . $info->biditem->created->hour : $info->biditem->created->hour) . ':' . (strlen($info->biditem->created->minute) == 1 ? 0 . $info->biditem->created->minute : $info->biditem->created->minute)) ?></td>
            <td class="actions"><?= $this->Html->link(__('View'), ['action' => 'msg', $info->id]) ?></td>
        </tr>
    <?php endforeach; ?>
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
<h6><?= $this->Html->link(__('出品情報に移動 >>'), ['action' => 'home2']) ?></h6>