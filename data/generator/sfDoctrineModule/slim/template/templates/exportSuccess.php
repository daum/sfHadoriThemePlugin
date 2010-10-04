[?php use_helper('Date') ?]
<div>
<?php if (sfConfig::get('app_admin_include_flashes')): ?>
  [?php include_partial('global/flashes') ?]  
<?php endif ?>
  
  <h1><?php echo $this->renderText($this->get('export_title')) ?></h1>

  <div>
    [?php include_partial('<?php echo $this->getModuleName() ?>/export_form', array('helper' => $helper)) ?]
  </div>
  
  <div class='help'>The table below represents the data that will be exported.  Use the filters to refine your export</div>

  <div>
    [?php include_partial('<?php echo $this->getModuleName() ?>/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper, 'checkboxes' => false)) ?]
    <ul class="actions">
<?php foreach ($this->configuration->getValue('export.actions') as $name => $params): ?>
      <?php echo $this->linkTo($name, $params) ?>
  
<?php endforeach; ?>    
    </ul>
  </div> 

<?php if ($this->configuration->hasExportFilterForm()): ?>
  <div class="filters[?php echo $helper->activeFilters() ? ' active':'' ?]">
    [?php include_partial('<?php echo $this->getModuleName() ?>/filters', array('form' => $filters, 'helper' => $helper)) ?]
  </div>
<?php endif; ?>
</div>
