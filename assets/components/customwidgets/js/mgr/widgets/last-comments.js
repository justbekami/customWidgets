MODx.grid.LastComments = function(config) {
	config = config || {};
	
	Ext.applyIf(config,{
		url: lastComments.config.connectors_url,
		baseParams: {
			action: 'mgr/lastcomments/get'
		},
		fields: ['text', 'avatar', 'author', 'resource'],
		paging: false,
		pageSize: 10,
		columns: [
			{
				header: 'Сообщение',
				dataIndex: 'text',
				sortable: false
			},
			{
				header: '<br>',
				width: 30,
				dataIndex: 'avatar',
				sortable: false
			},
			{
				header: 'Автор',
				width: 50,
				dataIndex: 'author',
				sortable: true
			},
			{
				header: 'Источник',
				dataIndex: 'resource',
				width: 50,
				editor: {
					xtype: 'combo-boolean',
					renderer: 'boolean'
				},
				editable: false,
				sortable: true
			}
		]
	});
	
	MODx.grid.LastComments.superclass.constructor.call(this,config);
};

Ext.extend(MODx.grid.LastComments, MODx.grid.Grid);
Ext.reg('modx-grid-last-comments', MODx.grid.LastComments);
