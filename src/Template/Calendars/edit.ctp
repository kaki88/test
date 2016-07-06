<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $calendar->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $calendar->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Calendars'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="calendars form large-9 medium-8 columns content">
    <?= $this->Form->create($calendar) ?>
    <fieldset>
        <legend><?= __('Edit Calendar') ?></legend>
        <?php
            echo $this->Form->input('day');
            echo $this->Form->input('capacity');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
