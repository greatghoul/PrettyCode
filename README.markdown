PrettyCode是一款[Wordpress][wp]的语法着色插件，基于 [google-code-prettify][gcp]

*Setup:*

    <link type="text/css" rel="stylesheet" href="http://www.g2w.me/wp-content/plugins/prettycode/prettify.css" />
    <script type="text/javascript" src="http://www.g2w.me/wp-content/plugins/prettycode/prettify.js"></script>
    <script type="text/javascript">
    if (window.document.all) {
        window.attachEvent('onload', prettyPrint);
    } else {
        window.addEventListener('load', prettyPrint, false);
    }
    </script>

*Usage:*

    <pre class="prettyprint"># 取得剪贴板并确保其为打开状态
    text_obj = wx.TextDataObject()
    wx.TheClipboard.Open()
    if wx.TheClipboard.IsOpened() or wx.TheClipboard.Open():
        # do something...
        wx.TheClipboard.Close()</pre> 


*Update:*

2011-05-30

  * 在tinymce中加入两个按钮，插入code block和inline code，code block使用弹出对话框的形式
  * 自定义tinymce样式，为加入的code block和inline code设置单独的样式，易于区分
  * 使用新的tinymce工具图标

2011-01-28

  * google code prettify语法着色
  * 加入tinymce代码块按钮

*TODO:*

  * 对特定语言着色

  [wp]: http://wordpress.org/
  [gcp]: http://code.google.com/p/google-code-prettify/
