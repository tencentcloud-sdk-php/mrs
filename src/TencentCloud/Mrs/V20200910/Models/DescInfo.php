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
 * 描述段落
 *
 * @method BaseInfo getText() 获取描述段落文本
 * @method void setText(BaseInfo $Text) 设置描述段落文本
 * @method array getInfos() 获取描述段落详情
 * @method void setInfos(array $Infos) 设置描述段落详情
 */
class DescInfo extends AbstractModel
{
    /**
     * @var BaseInfo 描述段落文本
     */
    public $Text;

    /**
     * @var array 描述段落详情
     */
    public $Infos;

    /**
     * @param BaseInfo $Text 描述段落文本
     * @param array $Infos 描述段落详情
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = new BaseInfo();
            $this->Text->deserialize($param["Text"]);
        }

        if (array_key_exists("Infos",$param) and $param["Infos"] !== null) {
            $this->Infos = [];
            foreach ($param["Infos"] as $key => $value){
                $obj = new DetailInformation();
                $obj->deserialize($value);
                array_push($this->Infos, $obj);
            }
        }
    }
}
