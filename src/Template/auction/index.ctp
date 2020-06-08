<h2>ミニオークション！</h2>
<h3>※出品されている商品</h3>
<table cellpadding="0" cellspacing="0">
<thead>
    <tr>
        <th class="main" scope="col"><?= $this->Paginator->sort('name') ?></th>
        <th class="col"><?= $this->Paginator->sort('finished',['label' => '終了']) ?></th>
        <th class="col"><?= $this->Paginator->sort('endtime',['label' => '期限']) ?></th>
        <th class="col" scope="auctions"><?= __('Actions') ?></th>
    </tr>
</thead>
<tbody>
    <?php foreach ($auction as $biditem): ?>
        <tr>
            <td><?= h($biditem->name) ?></td>
            <td><?= h($biditem->finished ? '終了' : '') ?></td>
            <td><?= h($biditem->endtime->year . '-' . (strlen($biditem->endtime->month) == 1 ? 0 . $biditem->endtime->month : $biditem->endtime->month) . '-' . (strlen($biditem->endtime->day) == 1 ? 0 . $biditem->endtime->day : $biditem->endtime->day) . ' ' . (strlen($biditem->endtime->hour) == 1 ? 0 . $biditem->endtime->hour : $biditem->endtime->hour) . ':' . (strlen($biditem->endtime->minute) == 1 ? 0 . $biditem->endtime->minute : $biditem->endtime->minute)) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('詳細'), ['action' => 'View', $biditem->id]) ?>
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>
</table>