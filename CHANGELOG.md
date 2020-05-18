# 版本变更记录
## ZanBlog Plus 1.0相比ZanBlog 2.1.0的变更重构记录
### 依赖版本更新
+ bootstrap更新到`v3.4.1`
+ fontawesome更新到`v5.13.0`

### 小工具
+ 适配WordPress各自带小工具及WP-PostViews小工具样式
+ 小工具标题支持fontawesome图标
+ 原`最新评论组件（ZanBlog）`小工具改为继承自带`近期评论`小工具，这样方便更换主题时的设置，使用自带`近期评论`即可获得与之前相同的效果
+ 暂时删除原`前台登录组件（ZanBlog）`小工具，待重构
+ 各页面侧边栏整合为一个，小工具可在各自的设置面板选择在哪些页面上显示
+ 小工具的隐藏改用`jQuery`实现，以修复原CSS实现元素高度上的问题
+ 删除原`广告组件（ZanBlog）`小工具，因为可用自带`图像`小工具代替
+ 删除原`自定义组件（ZanBlog）`小工具，因为可用自带`自定义HTML`小工具代替
+ 删除原`最热文章组件（ZanBlog）`小工具，因为可用插件`WP-PostViews`的小工具代替
+ 删除原`最新文章组件（ZanBlog）`小工具，因为可用自带`近期文章`小工具代替
+ 删除原`链接组件（ZanBlog）`小工具，因为可用自带`文本`小工具通过项目符号列表`<ul>`代替
+ 删除原`随机文章组件（ZanBlog）`小工具，可用自带`近期文章`小工具通过在标题中加入`i$random-posts$`标记来代替
+ 删除原`搜索框组件（ZanBlog）`小工具，因为可用自带`搜索`小工具代替
+ 删除原`集合组件（ZanBlog）`小工具，其中内容可用自带`分类目录`、`标签云`以及`文本`小工具代替

### 导航栏
+ 使用hook代替原来继承的`Zan_Nav_Menu`类
+ 导航栏固定逻辑修改，不固定的导航栏在向下滑动时自动隐藏
+ 删除`iCheck`，为一个按钮引一个js文件有些不值
+ 小型设备自动隐藏导航栏

### 文章元数据
+ 评论位置由`阅读更多`按钮改到和其他元数据相同的位置
+ 添加编辑按钮
+ 日期格式使用后台自定义格式
+ 小型设备与大型设备统一样式
+ 文章面板底部添加彩色`标签`

### 评论
+ 添加面板白色背景，否则评论框在有背景图片的情况下容易看不清字
+ 使用WordPress自带评论框移动功能
+ 暂时删除异步评论，待重构
+ 修复评论表格宽度溢出，修复输入框样式

### 自定义
+ 删除原`主题选项`菜单。页脚自定义以及评论异步设置后续版本在自定义中添加，`首页公告`及`广告`可用小工具实现。`keywords`及`description`现在对SEO用处已经不大了，因此不会包含在主题中
+ 增加自定义背景颜色及图像功能
+ 增加自定义网站Logo功能
+ 增加自定义文章末尾版权声明功能
+ 增加自定义禁用文本转义以及禁用文章内容响应式图像功能

### 其他
+ 文章存档页面暂时删除待重构
+ 删除bootstrap短代码，最新的区块编辑器可以很容易通过`区块->高级->额外的CSS类`添加相应的类
+ 删除`留言板`模板，留言板可以用一个开放评论的页面代替，没必要单独一个页面模板
+ 删除原图片懒加载相关代码（其实ZanBlog 2.1.0并未实现懒加载），改为适配插件`Smush`的图片懒加载
+ 支持title-tag、响应式图像、区块样式、RSS链接、pingback等
+ 适配至IE9
+ 适配WordPress管理栏`admin_bar`
+ 国际化翻译支持
+ 文章内分页支持
+ 多处样式细节修改
+ 大幅精简代码，尽量使用WordPress自带的函数及hook
+ 修复若干bug，包括密码保护文章的摘要显示、`attr`中标题过滤等等
+ 规范代码，如使用HTML5标签、无障碍阅读等等
