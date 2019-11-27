<?php
function vitex_fw_ext_backups_demos($demos) {
    $demos_array = array(
		'vitex' => array(
			'title' => esc_html__('Vitex', 'vitex'),
			'screenshot' => 'http://beplusthemes.com/install/demo/vitex/vitex/screenshot.jpg',
			'preview_link' => 'http://vitex.beplusthemes.com/',
		),
		
    );

    $download_url = 'http://beplusthemes.com/install/demo/vitex/';

    foreach ($demos_array as $id => $data) {
        $demo = new FW_Ext_Backups_Demo($id, 'piecemeal', array(
            'url' => $download_url,
            'file_id' => $id,
        ));
        $demo->set_title($data['title']);
        $demo->set_screenshot($data['screenshot']);
        $demo->set_preview_link($data['preview_link']);

        $demos[ $demo->get_id() ] = $demo;

        unset($demo);
    }

    return $demos;
}
add_filter('fw:ext:backups-demo:demos', 'vitex_fw_ext_backups_demos');
