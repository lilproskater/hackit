<?php
	$data = $_POST;
	echo ($data['flag1'] == 'WhY_Th3_f!r$t_$tr!ng_!$_HELLO_WORLD)'
		  && $data['flag2'] == 'I_l0ve_hiding_inf0_in_pic$__Any_0f_them;)'
		  && $data['flag3'] == 'y0u_@re_g0ing_t0_bee_@_great_h@ck3r' ? '200' : 'Not all flag values are correct');
?>