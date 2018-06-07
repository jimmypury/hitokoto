<?php
define('IN_HITOKOTO', TRUE);
header('Content-Type: text/html; charset=UTF-8');
//开启跨域Ajax支持
header('Access-Control-Allow-Origin:*');
//初始化资源文件
$array = file('./content.php');
//参数传递
$encode = $_GET['encode'];
$id = $_GET['id'];
//一言开始行数（0为验证行）
$id_min = 1;
//一言结束行数
$id_max = 3388;
//随机 - 判断数字
if (!$id == NULL && is_numeric($id))
{
    //判断大小
    if ($id >= $id_min && $id <= $id_max)
    {
        $number = $id;
    }
    else
    {
        $number = rand($id_min,$id_max);
    }
}
else
{
    $number = rand($id_min,$id_max);
}
$string = $array[$number];
//判断输出类型
if ($encode == 'javascript' || $encode == 'js')
{
    echo 'function jimmyhitokoto(){document.write("',trim($string),'");}';
}
else
{
    echo trim($string);
}
