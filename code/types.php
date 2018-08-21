<?php
$a_bool = TRUE;   // 布尔值 Boolean
$a_str = "foo";   // 字符串 string
$a_str2 = "foo";  // 字符串 string
$an_int = 12;     // 整形 integer 

echo var_dump($a_bool);   // 打印变量的相关信息 // boolean true
echo var_dump($an_int);   // int 12

echo gettype($a_bool);  // boolean
echo gettype($a_str);   // 

// 检验某个变量或表达式，是否为某一类型，使用 is_type 函数

// 如果 an_int 为整形，则加上 4
if (is_int($an_int)){
    $an_int += 4;
}
echo $an_int;  // 16

// 如果 $a_bool 是 字符串，则打印出来
// 没有任何打印输出
if (is_string($a_bool)){
    echo "String: $a_bool";
}



// Booblean 布尔类型
// 指定布尔值, 不区分大小写,下列的等价.
$foo = True;
$foo = TRUE;
$foo = FALSE;
$foo = false;

// 运算符所返回的 boolean 值结果 会被传递控制流程

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

/*
当转换为 boolean 时，以下值被认为是 FALSE：


布尔值 FALSE 本身
整型值 0（零）
浮点型值 0.0（零）
空字符串，以及字符串 "0"
不包括任何元素的数组
特殊类型 NULL（包括尚未赋值的变量）
从空标记生成的 SimpleXML 对象


所以的其他值都被认为是 TRUE，包括任何资源和 NAN，任何非零值。
  
*/

var_dump((bool) "");        // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)

// 整形 Integer
?>


