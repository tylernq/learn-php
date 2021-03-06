## 数据类型
PHP支持9种原始数据类型。  
四种 标量类型：  
* boolean (布尔型)
* integer （整形）
* float（浮点型，也称作 double)
* string（字符串）

三种复合类型：  

* array（数组）
* object（对象）
* callable（可调用）

两种特殊类型：  

* resource（资源）
* NULL（无类型）

确保代码易读性的一些伪类型：
* mixed（混合类型）
* number（数字类型）
* callback（回调类型，又称为 callable）
* array|object（数组 | 对象类型）
* void （无类型）

伪变量： 

$...（伪变量 ）

变量的类型通常不是由程序员设定的，确切地说，是由PHP根据该变量使用的上下文在运行时确当的。

### 一些函数
1. 查看某个表达式的值和类型:  
```php 
$a_bool = TRUE;   // 布尔值 Boolean
$a_str = "foo";   // 字符串 string
$a_str2 = "foo";  // 字符串 string
$an_int = 12;     // 整形 integer 

echo var_dump($a_bool);   // 打印变量的相关信息 // boolean true
echo var_dump($an_int);   // int 12
```

2. 查看某个变量的类型：  
```php 
echo gettype($a_bool);  // boolean
echo gettype($a_str);   // string
```

3. 检验某个类型：
```php 
// 如果 an_int 为整形，则加上 4
if (is_int($an_int)){
    $an_int += 4;
}
echo $an_int  // 16

// 如果 $a_bool 是 字符串，则打印出来
// 没有任何打印输出
if (is_string($a_bool)){
    echo "String: $a_bool";
}
```
详见 /code/types.php

### Booblean 布尔类型
boolean 表达了真值，可以为 TRUE 或 FALSE. 要指定一个布尔值,使用常量 TRUE 或 FALSE, 两个都不区分大小写.
``` php
<?php
$foo = True; // 设置 $foo 为 TRUE
$foo = TRUE;
$foo = FALSE;
$foo = false;
?>
```
通常运算符所返回的 boolean 值结果会被传递给控制流程。 
```php 
// == 双等号是一个操作符,检测两个变量是否相等,并返回一个布尔值

$action = "tests";
$show_separatora = TRUE;
if ($action == "show_version"){
    echo "The version is 1.23";
}

// 这样做是不必要的.

if ($show_separatora == TRUE){
    echo "<hr> \n";
}

// 有更简单的方式
if ($show_separatora) {
    echo "<hr> \n";
}
```
### 转换为 布尔值
需要明确将一个值转换为 Boolean，用 （bool） 或者 （Boolean）来强制转换。  
大多数情况下不需要强制转换，当运算符，函数，或是流程控制结构需要一个 boolean 参数时，该值会被自动转换。 

当转换为 Boolean 时，以下的值会被认为时 False：  
* 