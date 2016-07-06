<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Calendar'), ['action' => 'edit', $calendar->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Calendar'), ['action' => 'delete', $calendar->id], ['confirm' => __('Are you sure you want to delete # {0}?', $calendar->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Calendars'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Calendar'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="calendars view large-9 medium-8 columns content">
    <h3><?= h($calendar->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($calendar->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Capacity') ?></th>
            <td><?= $this->Number->format($calendar->capacity) ?></td>
        </tr>
        <tr>
            <th><?= __('Day') ?></th>
            <td><?= h($calendar->day) ?></td>
        </tr>
    </table>
</div>
