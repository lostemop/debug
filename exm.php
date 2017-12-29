<?php

ini_set('xdebug.var_display_max_depth',10);
// 构建封装对象
class XdebugCoverageAnalysisModel {
    private $_coverage_info;
    private $_status;

    function __construct() {
        $this->_coverage_info = xdebug_get_code_coverage();
        $this->_status =xdebug_code_coverage_started();
    }

    // 获取分析结果
public function getCodeCoverageResult() {
return xdebug_get_code_coverage();
}

// 开启覆盖分析
public function xdebugStartCodeCoverage() {
xdebug_start_code_coverage(  -1 );
}

// 分析是否执行
public function xdebugCodeStarted() {
           return xdebug_code_coverage_started();
      }
}

// 初始化
$apiModel = new XdebugCoverageAnalysisModel();


$apiModel->xdebugStartCodeCoverage();

// 定义一个测试函数
function coverageSample($a,$b) {
    echo '函数结果：'.($a * $b).'</br>';
}

$status = $apiModel->xdebugCodeStarted();
coverageSample(10,10);
$result = $apiModel->getCodeCoverageResult();
var_dump($result);
?>