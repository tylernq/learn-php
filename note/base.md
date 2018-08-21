## PHP 基本语法
### PHP 标记
解析一个文件时，PHP 会寻找 起始和结束标记,PHP解析器会解析二者之间的代码。起始标签和结束标签之外的部分都会被忽略。  

如果文件内容是纯 PHP 代码，最好在文件末尾删除 PHP 结束标记。这可以避免在 PHP 结束标记之后万一意外加入了空格或者换行符，会导致 PHP 开始输出这些空白，而脚本中此时并无输出的意图。 

支持一下四种标记  

1：  

    <?php
    ?>
2：

    <?
    ?>
3：  

    <script language="php">
    </script>
4  

    <%
    %>
    <%=
    %>

示例1，最常用也是建议使用的php标记。  

示例2为短标记，允许使用，但是不鼓励使用，只有通过激活 php.ini 配置文件中的 short_open_tag配置指令，或者是在编译PHP时，使用了配置选项 --enable-short-tags时，才可以使用短标记。  

示例3，总是可用。  

示例4，ASP风格标记，仅在通过php.ini 配置文件中的指令 asp_tags 打开后才可以使用。短标记和ASP风格标记，可移植性较差。不推荐使用。

Note:  
1. 在以下情况应避免使用短标记：开发需要再次发布的程序或者库，或者在用户不能控制的服务器上开发。因为目标服务器可能不支持短标记。为了代码的移植及发行，确保不要使用短标记。
2. 在 PHP 5.2 和之前的版本中，解释器不允许一个文件的全部内容就是一个开始标记 <?php。自 PHP 5.3 起则允许此种文件，但要开始标记后有一个或更多白空格符。  
3. 自 PHP 5.4 起，短格式的 echo 标记 <?= 总会被识别并且合法，而不管 short_open_tag 的设置是什么。
### HTML分离

凡是在一对开始和结束标记之外的内容都会被 PHP 解析器忽略，这使得 PHP 文件可以具备混合内容。 可以使 PHP 嵌入到 HTML 文档中去，如下例所示。  
```php
<p>This is going to be ignored by PHP and displayed by the browser.</p>
<?php echo 'While this is going to be parsed.'; ?>
<p>This will also be ignored by PHP and displayed by the browser.</p>a
```
当PHP解释器碰到了?> 结束标记，就简单地将后面的内容原样输出。   
#### 使用条件的高级分离术
```php
<?php if ($expression == true): ?>
  This will show if the expression is true.
<?php else: ?>
  Otherwise this will show.
<?php endif; ?>
```
PHP解释器将跳过条件语句未达成的段落，即使该段落位于 PHP 的开始和结束标记之外。会根据条件来忽略或执行显示输出段落。

### 指令分隔符
同 C 或 Perl 一样，PHP 需要在每个语句后用分号结束指令。一段 PHP 代码中的结束标记隐含表示了一个分号；在一个 PHP 代码段中的最后一行可以不用分号结束。如果后面还有新行，则代码段的结束标记包含了行结束。
```php
<?php
    echo "This is a test";
?>

<?php echo "This is a test" ?>

<?php echo 'We omitted the last closing tag';
```
### 注释
PHP 支持C，C++ 和 Unix Shell 风格（Perl 风格）的注释。  
```php
<?php
    echo "This is a test"; // This is a one-line c++ style comment
    /* This is a multi line comment
       yet another line of comment */
    echo "This is yet another test";
    echo 'One Final Test'; # This is a one-line shell-style comment
?>
```
单行注释：  
    // 这是一行C++风格的注释
    # 这是一行 shell 风格的注释

多行注释：  
    /* 这是 一个 多行 
    注释。*/

