<?php

global $rpL;

$rpL["pay-free.tmp.request"] = <<< HTML
## 请先填写下列问卷(100-300字为宜)
* 年龄, 职业
* 从何处得知RP主机
* 是否会编程，如果会的话掌握哪些技术
* 你将会用RP主机干什么
* 为什么选择了试用而不是直接购买

HTML;

$rpL["pay-free.success"] = <<< HTML

<script type="text/javascript">
    alert("发送成功，请耐心等待回复，不要重复发送...");
    window.location.href = "/";
</script>

HTML;
