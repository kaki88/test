<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Calendar'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="calendars index large-9 medium-8 columns content">
    <h3><?= __('Calendars') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('day') ?></th>
                <th><?= $this->Paginator->sort('capacity') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($calendars as $calendar): ?>
            <tr>
                <td><?= $this->Number->format($calendar->id) ?></td>
                <td><?= h($calendar->day) ?></td>
                <td><?= $this->Number->format($calendar->capacity) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $calendar->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $calendar->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $calendar->id], ['confirm' => __('Are you sure you want to delete # {0}?', $calendar->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
