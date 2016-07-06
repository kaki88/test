<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Email'), ['action' => 'edit', $email->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Email'), ['action' => 'delete', $email->id], ['confirm' => __('Are you sure you want to delete # {0}?', $email->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Emails'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Email'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="emails view large-9 medium-8 columns content">
    <h3><?= h($email->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Firstname') ?></th>
            <td><?= h($email->firstname) ?></td>
        </tr>
        <tr>
            <th><?= __('Lastname') ?></th>
            <td><?= h($email->lastname) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($email->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($email->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $email->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Text') ?></h4>
        <?= $this->Text->autoParagraph(h($email->text)); ?>
    </div>
</div>
