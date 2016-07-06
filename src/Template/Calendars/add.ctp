<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Calendars'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="calendars form large-9 medium-8 columns content">
    <?= $this->Form->create($calendar) ?>
    <fieldset>
        <legend><?= __('Add Calendar') ?></legend>
        <?php
            echo $this->Form->input('day');
            echo $this->Form->input('capacity');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
