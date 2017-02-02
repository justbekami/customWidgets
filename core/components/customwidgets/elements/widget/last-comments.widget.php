<?php
	class modDashboardWidgetLastComments extends modDashboardWidgetInterface {
		public function render() {
			$this->controller->addJavascript($this->modx->getOption('assets_url').'components/customwidgets/js/mgr/widgets/lastcomments.js');
			$this->controller->addHtml('<script type="text/javascript">Ext.onReady(function() {
				MODx.load({
					xtype: "modx-grid-last-comments"
					,renderTo: "modx-grid-last-comments"
				});
			});</script>');

			return $this->getFileChunk($this->modx->getOption('core_path').'components/customwidgets/templates/lastcomments.tpl');
		}
	}
	return 'modDashboardWidgetLastComments';
