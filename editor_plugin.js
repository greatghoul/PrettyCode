(function() {
	tinymce.create('tinymce.plugins.prettycode', {
		init : function(ed, url) {
			ed.addButton('prettycode', {
				title : 'Highlight Code',
				image : url+'/prettycode.png',
				onclick : function() {
					var tagtext  = '<pre class="prettyprint">';
					var inst = tinyMCE.getInstanceById('content');
					var html = inst.selection.getContent();
					
					window.tinyMCE.execInstanceCommand('content', 'mceInsertContent', false, tagtext + html + '</pre>');
				}
			});
		},
		createControl : function(n, cm) {
			return null;
		},
		getInfo : function() {
			return {
				longname : "Pretty Code",
				author : 'greatghoul',
				authorurl : 'http://www.g2w.me/',
				infourl : 'http://www.g2w.me/tag/prettycode/',
				version : "1.0"
			};
		}
	});
	tinymce.PluginManager.add('prettycode', tinymce.plugins.prettycode);
})();
