<?php
// プール
namespace pool {
	require_once get_template_directory() . "/func/class/component/pool.php";
}

// 給食調理場
namespace kitchen {
	require_once get_template_directory() . "/func/class/component/kitchen.php";
}

// 保健室
namespace dispensary {
	require_once get_template_directory() . "/func/class/component/dispensary.php";
}

// 衛生検査
namespace blackboard {
	require_once get_template_directory() . "/func/class/component/blackboard.php";
}

// 照度10月
namespace lighting_summer {
	require_once get_template_directory() . "/func/class/component/lighting_summer.php";
}

// 照度2月
namespace lighting_winter {
	require_once get_template_directory() . "/func/class/component/lighting_winter.php";
}

// 騒音（夏季）
namespace noise_summer {
	require_once get_template_directory() . "/func/class/component/noise_summer.php";
}

// 騒音（冬季）
namespace noise_winter {
	require_once get_template_directory() . "/func/class/component/noise_winter.php";
}

// 空気（夏季）
namespace air_summer {
	require_once get_template_directory() . "/func/class/component/air_summer.php";
}

// 空気（冬季）
namespace air_winter {
	require_once get_template_directory() . "/func/class/component/air_winter.php";
}