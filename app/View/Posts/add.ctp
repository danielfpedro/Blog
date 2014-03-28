
<?php echo $this->element('Admin/breadcrumb',
		array('dados'=>array(
			array('label'=>'Alunos', 'link'=> 'aqui'),
			array('label'=>'Adicionar Aluno', 'link'=> 'aqui'),
			)
		)
	);?>

<div class="posts form">
<?php
		echo $this->Form->create('Post',
			array('inputDefaults'=>
				array(
					'div'=> array('class'=> 'form-group')
					)
				)
			);
	?>
	<fieldset>
		<legend><?php echo __('Adicionar  Post'); ?></legend>
	<?php
		echo $this->Form->input('title', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('text', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('user_id', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('category_id', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('page_id', array('empty'=> 'Selecione:','class'=> 'form-control'));
	?>
	</fieldset>
	<div class="form-group">
		<label for="tags">Tags</label>
		<input type="text" name="tags" id="tags" class="form-control">	
	</div>
	
<button type="submit" class="btn btn-success">Salvar</button>
&nbsp;<?php echo $this->Html->link('Cancelar', array('controller'=> '', 'action'=> ''), array('class'=> 'btn btn-danger btn-sm')); ?>
<?php echo $this->Form->end(); ?>
</div>