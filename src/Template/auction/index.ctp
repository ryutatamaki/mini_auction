<h2>ミニオークション！</h2>
<h3>※出品されている商品</h3>
<table cellpadding="0" cellspacing="0">
<thead>
    <tr>
        <th class="main" scope="col"><?= $this->Paginator->sort('name') ?></th>
        <th class="col"><?= $this->Paginator->sort('finished') ?></th>
        <th class="col"><?= $this->Paginator->sort('endtime') ?></th>
        <th class="col" scope="auctions"><?= __('Actions') ?></th>
    </tr>
</thead>
<tbody>
    <?php foreach ($auction as $biditem): ?>
        <tr>
            <td><?= h($biditem->name) ?></td>
            <td><?= h($biditem->finished ? 'Finished' : '') ?></td>
            <td><?= h($biditem->endtime) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'View', $bidtime->id]) ?>
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>
</table>