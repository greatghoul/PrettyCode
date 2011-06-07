PrettyCode是一款[Wordpress][wp]的语法着色插件，基于 [google-code-prettify][gcp]，可以方便的插入 Code Block 和 Inline Code ，使用 google-code-prettify 进行代码着色。它具有以下特性：  

  * 基于 google-code-prettify 的代码高亮，无需指定语言类型，小巧方便。
  * 支持点击 tinymce 工具栏按钮弹出层来插入代码片断，免去非IE内核浏览器在 tinymce 的 visual 模式中粘贴代码失丢失缩进格式的问题
  * 支持点击 tinymce 工具栏按钮 选中单词或短句增加 Inline Code 的高亮效果，以蓝色等宽字体显示。
  * 支持对粘贴的HTML转义字符自动转义。
  * 编辑文章时，对加入的代码块增加边框效果，与其它文本区分。
  * 自动在页面中加入google-code-prettify的脚本和样式，并在文档加载完成后触发着色，无需手动编辑主题文件。

了解更多： <http://www.g2w.me/2011/06/intro-wordpress-plugin-prettycode/>  

**更新**

2011-05-30

  * 在tinymce中加入两个按钮，插入code block和inline code，code block使用弹出对话框的形式
  * 自定义tinymce样式，为加入的code block和inline code设置单独的样式，易于区分
  * 使用新的tinymce工具图标

2011-01-28

  * google code prettify语法着色
  * 加入tinymce代码块按钮

**开发计划**

  * 对特定语言着色

  [wp]: http://wordpress.org/
  [gcp]: http://code.google.com/p/google-code-prettify/
