<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检验报告结构
 *
 * @method array getIndicators() 获取项目列表
 * @method void setIndicators(array $Indicators) 设置项目列表
 * @method BaseItem getSample() 获取采样标本
 * @method void setSample(BaseItem $Sample) 设置采样标本
 */
class TableIndicators extends AbstractModel
{
    /**
     * @var array 项目列表
     */
    public $Indicators;

    /**
     * @var BaseItem 采样标本
     */
    public $Sample;

    /**
     * @param array $Indicators 项目列表
     * @param BaseItem $Sample 采样标本
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Indicators",$param) and $param["Indicators"] !== null) {
            $this->Indicators = [];
            foreach ($param["Indicators"] as $key => $value){
                $obj = new IndicatorItemV2();
                $obj->deserialize($value);
                array_push($this->Indicators, $obj);
            }
        }

        if (array_key_exists("Sample",$param) and $param["Sample"] !== null) {
            $this->Sample = new BaseItem();
            $this->Sample->deserialize($param["Sample"]);
        }
    }
}
