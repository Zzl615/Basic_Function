/**
 * 递归重组节点信息多维数组
 * @param  [array] $node    [要处理的节点数组:二维数组]
 * @param  [int]   $pid     [父级ID]
 * @param  [array] $pidArr  [父节点数组]
 * @return [array]          [树状结构的节点体系:多维数组]
 */
$tree = array();
$pidArr = array_unique(array_column($arr,'pid'));

function node_merge_gai($node,$pid=0,$pidArr){
    $arr = array();
    foreach ($node as $v) {
        if ($v['pid'] == $pid) {
            if(in_array($v['id'],$pidArr)){
                $v['child']=node_merge($node,$v['id'],$pidArr);
            }
            $arr[]=$v;
        }
    }
    return $arr;
}
