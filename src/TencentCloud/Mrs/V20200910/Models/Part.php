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
 * 部位信息
 *
 * @method array getIndex() 获取原文位置
 * @method void setIndex(array $Index) 设置原文位置
 * @method NormPart getNormPart() 获取部位
 * @method void setNormPart(NormPart $NormPart) 设置部位
 * @method string getSrc() 获取原文
 * @method void setSrc(string $Src) 设置原文
 * @method string getValue() 获取值
 * @method void setValue(string $Value) 设置值
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getValueBrief() 获取值
 * @method void setValueBrief(string $ValueBrief) 设置值
 */
class Part extends AbstractModel
{
    /**
     * @var array 原文位置
     */
    public $Index;

    /**
     * @var NormPart 部位
     */
    public $NormPart;

    /**
     * @var string 原文
     */
    public $Src;

    /**
     * @var string 值
     */
    public $Value;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 值
     */
    public $ValueBrief;

    /**
     * @param array $Index 原文位置
     * @param NormPart $NormPart 部位
     * @param string $Src 原文
     * @param string $Value 值
     * @param string $Name 名称
     * @param string $ValueBrief 值
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("NormPart",$param) and $param["NormPart"] !== null) {
            $this->NormPart = new NormPart();
            $this->NormPart->deserialize($param["NormPart"]);
        }

        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ValueBrief",$param) and $param["ValueBrief"] !== null) {
            $this->ValueBrief = $param["ValueBrief"];
        }
    }
}
