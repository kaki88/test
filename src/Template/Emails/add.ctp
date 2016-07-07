<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">-->
    <!--<ul class="side-nav">-->
        <!--<li class="heading"><?= __('Actions') ?></li>-->
        <!--<li><?= $this->Html->link(__('List Emails'), ['action' => 'index']) ?></li>-->
    <!--</ul>-->
<!--</nav>-->
<div class="emails form large-9 medium-8 columns content">
    <?= $this->Form->create($email) ?>
    <fieldset>
        <legend><?= __('Nous contacter') ?></legend>
        <?php
            echo $this->Form->input('firstname', ['label'=>'Prenom']);
            echo $this->Form->input('lastname', ['label'=>'Nom']);
            echo $this->Form->input('email');
            echo $this->Form->input('text', ['label'=>'Message']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Envoyer')) ?>
    <?= $this->Form->end() ?>
</div>
