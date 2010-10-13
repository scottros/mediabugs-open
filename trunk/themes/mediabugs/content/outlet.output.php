<div class="outlet_info">
	<div class="column_3 outlet_logo">
		<? if ($img = $doc->files()->contains('file_name','img')) { ?>
				<p><? if ($doc->link) {?><a href="<?= $doc->link; ?>"><? } ?><img src="<?= $img->src(220); ?>" border="0" alt="<?= $doc->htmlspecialchars('headline'); ?>"/><? if ($doc->link) {?></a><? } ?></p>
		<? } else { ?>
			<h3><?= $doc->headline; ?></h3>
		<? } ?>
		<? if ($doc->link) {?><p><a href="<?= $doc->link; ?>"><?= $doc->link; ?></a></p><? } ?>
	</div>
	<div class="column_2 outlet_bugcounts">
			<p>
				<?= $POD->pluralize($doc->bugsByOutlet()->totalCount(),'@number bug total','@number bugs total'); ?><Br />
				<?= $POD->pluralize($doc->openBugsByOutlet()->totalCount(),'@number open now','@number open now'); ?>
			</p>
	</div>
	<div class="column_3 last outlet_corrections">
		<? 
				$policy = $POD->getContents(array('type'=>'policy','parentId'=>$doc->id),'date desc',1)->getNext();
				if ($policy->corrections_link) { ?>
					<p><a href="#" onclick="return toggleCorrections(this);">&#x25BA; View corrections policies and procedures</a></p>
				<? } else { ?>
						<p>MediaBugs has not reviewed the corrections policy of this outlet.</p> 
				<? }		?>
	</div>
	<div class="clearer"></div>
	<? if ($policy) { ?>
		<div class="policy" style="display: none;">
			
			<p class="question">Corrections link displayed on homepage? <strong><?= $policy->corrections_link; ?></strong></p>
			
			<? if ($policy->corrections_link_note) { echo $policy->corrections_link_note; } ?>
			
			<p class="question">Corrections policy linked? <strong><?= $policy->corrections_policy; ?></strong></p>
			
			<? if ($policy->corrections_policy_note) { echo $policy->corrections_policy_note; } ?>
					
			<p class="question">Explicit Instructions? <strong><?= $policy->corrections_instructions; ?></strong></p>
			
			<? if ($policy->corrections_instructions_note) { echo $policy->corrections_instructions_note; } ?>
			
			<? if ($policy->body) { ?>
			
				<p class="question">Further notes:</p>
				
				<?= $policy->body; ?>
  	<? } ?>					

		</div>
	<? } ?>
</div>
