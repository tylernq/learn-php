<?php
    echo 'hello world';
?>
<!-- // 另外支持的几种PHP标记 -->

<?
    echo "这是短标记";
?>
<script language="php">
        echo 'script 标记';
</script>




<!-- 条件高级分离 -->
<?php $expression = true ?>
<?php if ($expression == true): ?>
  This will show if the expression is true.
<?php else: ?>
  Otherwise this will show.
<?php endif; ?>



<!-- 去掉结束标记，减少意外输出 -->
<?php
echo "hello world";

// more code.....

echo "Last statement";

//脚本至此结束，并无PHP结束标记，无结束标记可以避免结束标记之后的意外输出情况，输出空行或换行符。




