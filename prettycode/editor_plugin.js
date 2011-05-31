(function() {
	tinymce.create('tinymce.plugins.prettycode', {
		init : function(ed, url) {
            ed.addCommand('mceBlockPrettyCode', function() {
                ed.windowManager.open({
                    file : url + '/codebox.html',
                    width : 600 + parseInt(ed.getLang('blockPrettyCode.delta_width', 0)),
                    height : 400 + parseInt(ed.getLang('blockPrettyCode.delta_height', 0)), 
                    inline : 1
                }, {
                    plugin_url : url
                });
            });

            ed.addButton('blockPrettyCode', { 
                title : 'Insert Pretty Code Block', 
                image: url+'/code-block.png',
                cmd : 'mceBlockPrettyCode'
            });

            
			ed.addButton('inlinePrettyCode', {
				title : 'Highlight Code Inline',
				image : url+'/code-inline.png',
				onclick : function() {
                    var code = tinyMCE.getInstanceById('content').selection.getContent();
					var codeInline = '<code>' + code + '</code>';
					window.tinyMCE.execInstanceCommand('content', 'mceInsertContent', false, codeInline);
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
