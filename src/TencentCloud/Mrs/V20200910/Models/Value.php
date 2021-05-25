<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 值
 *
 * @method string getGrade() 获取“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGrade(string $Grade) 设置“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPercent() 获取“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPercent(array $Percent) 设置“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPositive() 获取阳性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPositive(string $Positive) 设置阳性
注意：此字段可能返回 null，表示取不到有效值。
 */
class Value extends AbstractModel
{
    /**
     * @var string “”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Grade;

    /**
     * @var array “”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Percent;

    /**
     * @var string 阳性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Positive;

    /**
     * @param string $Grade “”
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Percent “”
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Positive 阳性
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Grade",$param) and $param["Grade"] !== null) {
            $this->Grade = $param["Grade"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("Positive",$param) and $param["Positive"] !== null) {
            $this->Positive = $param["Positive"];
        }
    }
}
