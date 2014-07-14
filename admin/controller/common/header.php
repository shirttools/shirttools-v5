<?php 
class ControllerCommonHeader extends Controller {
	protected function index() {
		$this->data['title'] = $this->document->getTitle(); 

		if (isset($this->request->server['HTTPS']) && (($this->request->server['HTTPS'] == 'on') || ($this->request->server['HTTPS'] == '1'))) {
			$this->data['base'] = HTTPS_SERVER;
		} else {
			$this->data['base'] = HTTP_SERVER;
		}

		/* Shirttools.com */
		require('version.php');
		$this->data['version'] = $version;
		/* Shirttools.com */

		$this->data['description'] = $this->document->getDescription();
		$this->data['keywords'] = $this->document->getKeywords();
		$this->data['links'] = $this->document->getLinks();	
		$this->data['styles'] = $this->document->getStyles();
		$this->data['scripts'] = $this->document->getScripts();
		$this->data['lang'] = $this->language->get('code');
		$this->data['direction'] = $this->language->get('direction');

		$this->language->load('common/header');

		$this->data['heading_title'] = $this->language->get('heading_title');

		$this->data['text_affiliate'] = $this->language->get('text_affiliate');
		$this->data['text_attribute'] = $this->language->get('text_attribute');
		$this->data['text_attribute_group'] = $this->language->get('text_attribute_group');
		$this->data['text_backup'] = $this->language->get('text_backup');
		$this->data['text_banner'] = $this->language->get('text_banner');
		$this->data['text_catalog'] = $this->language->get('text_catalog');
		$this->data['text_category'] = $this->language->get('text_category');
		$this->data['text_confirm'] = $this->language->get('text_confirm');
		$this->data['text_country'] = $this->language->get('text_country');
		$this->data['text_coupon'] = $this->language->get('text_coupon');
		$this->data['text_currency'] = $this->language->get('text_currency');			
		$this->data['text_customer'] = $this->language->get('text_customer');
		$this->data['text_customer_group'] = $this->language->get('text_customer_group');
		$this->data['text_customer_field'] = $this->language->get('text_customer_field');
		$this->data['text_customer_ban_ip'] = $this->language->get('text_customer_ban_ip');
		$this->data['text_custom_field'] = $this->language->get('text_custom_field');
		$this->data['text_sale'] = $this->language->get('text_sale');
		$this->data['text_design'] = $this->language->get('text_design');
		$this->data['text_documentation'] = $this->language->get('text_documentation');
		$this->data['text_download'] = $this->language->get('text_download');
		$this->data['text_error_log'] = $this->language->get('text_error_log');
		$this->data['text_extension'] = $this->language->get('text_extension');
		$this->data['text_feed'] = $this->language->get('text_feed');
		$this->data['text_filter'] = $this->language->get('text_filter');
		$this->data['text_front'] = $this->language->get('text_front');
		$this->data['text_geo_zone'] = $this->language->get('text_geo_zone');
		$this->data['text_dashboard'] = $this->language->get('text_dashboard');
		$this->data['text_help'] = $this->language->get('text_help');
		$this->data['text_information'] = $this->language->get('text_information');
		$this->data['text_language'] = $this->language->get('text_language');
		$this->data['text_layout'] = $this->language->get('text_layout');
		$this->data['text_localisation'] = $this->language->get('text_localisation');
		$this->data['text_logout'] = $this->language->get('text_logout');
		$this->data['text_contact'] = $this->language->get('text_contact');
		$this->data['text_manager'] = $this->language->get('text_manager');
		$this->data['text_manufacturer'] = $this->language->get('text_manufacturer');
		$this->data['text_module'] = $this->language->get('text_module');
		$this->data['text_option'] = $this->language->get('text_option');
		$this->data['text_order'] = $this->language->get('text_order');
		$this->data['text_order_status'] = $this->language->get('text_order_status');
		$this->data['text_opencart'] = $this->language->get('text_opencart');
		$this->data['text_payment'] = $this->language->get('text_payment');
		$this->data['text_product'] = $this->language->get('text_product'); 
		$this->data['text_profile'] = $this->language->get('text_profile');
		$this->data['text_reports'] = $this->language->get('text_reports');
		$this->data['text_report_sale_order'] = $this->language->get('text_report_sale_order');
		$this->data['text_report_sale_tax'] = $this->language->get('text_report_sale_tax');
		$this->data['text_report_sale_shipping'] = $this->language->get('text_report_sale_shipping');
		$this->data['text_report_sale_return'] = $this->language->get('text_report_sale_return');
		$this->data['text_report_sale_coupon'] = $this->language->get('text_report_sale_coupon');
		$this->data['text_report_product_viewed'] = $this->language->get('text_report_product_viewed');
		$this->data['text_report_product_purchased'] = $this->language->get('text_report_product_purchased');
		$this->data['text_report_customer_online'] = $this->language->get('text_report_customer_online');
		$this->data['text_report_customer_order'] = $this->language->get('text_report_customer_order');
		$this->data['text_report_customer_reward'] = $this->language->get('text_report_customer_reward');
		$this->data['text_report_customer_credit'] = $this->language->get('text_report_customer_credit');
		$this->data['text_report_affiliate_commission'] = $this->language->get('text_report_affiliate_commission');
		$this->data['text_report_sale_return'] = $this->language->get('text_report_sale_return');
		$this->data['text_report_product_viewed'] = $this->language->get('text_report_product_viewed');
		$this->data['text_report_customer_order'] = $this->language->get('text_report_customer_order');
		$this->data['text_review'] = $this->language->get('text_review');
		$this->data['text_return'] = $this->language->get('text_return');
		$this->data['text_return_action'] = $this->language->get('text_return_action');
		$this->data['text_return_reason'] = $this->language->get('text_return_reason');
		$this->data['text_return_status'] = $this->language->get('text_return_status');
		$this->data['text_support'] = $this->language->get('text_support');
		$this->data['text_shipping'] = $this->language->get('text_shipping');
		$this->data['text_setting'] = $this->language->get('text_setting');
		$this->data['text_stock_status'] = $this->language->get('text_stock_status');
		$this->data['text_system'] = $this->language->get('text_system');
		$this->data['text_tax'] = $this->language->get('text_tax');
		$this->data['text_tax_class'] = $this->language->get('text_tax_class');
		$this->data['text_tax_rate'] = $this->language->get('text_tax_rate');
		$this->data['text_total'] = $this->language->get('text_total');
		$this->data['text_user'] = $this->language->get('text_user');
		$this->data['text_user_group'] = $this->language->get('text_user_group');
		$this->data['text_users'] = $this->language->get('text_users');
		$this->data['text_voucher'] = $this->language->get('text_voucher');
		$this->data['text_voucher_theme'] = $this->language->get('text_voucher_theme');
		$this->data['text_weight_class'] = $this->language->get('text_weight_class');
		$this->data['text_length_class'] = $this->language->get('text_length_class');
		$this->data['text_zone'] = $this->language->get('text_zone');
		$this->data['text_openbay_extension'] = $this->language->get('text_openbay_extension');
		$this->data['text_openbay_dashboard'] = $this->language->get('text_openbay_dashboard');
		$this->data['text_openbay_orders'] = $this->language->get('text_openbay_orders');
		$this->data['text_openbay_items'] = $this->language->get('text_openbay_items');
		$this->data['text_openbay_ebay'] = $this->language->get('text_openbay_ebay');
		$this->data['text_openbay_amazon'] = $this->language->get('text_openbay_amazon');
		$this->data['text_openbay_amazonus'] = $this->language->get('text_openbay_amazonus');
		$this->data['text_openbay_settings'] = $this->language->get('text_openbay_settings');
		$this->data['text_openbay_links'] = $this->language->get('text_openbay_links');
		$this->data['text_openbay_report_price'] = $this->language->get('text_openbay_report_price');
		$this->data['text_openbay_order_import'] = $this->language->get('text_openbay_order_import');

		$this->data['text_paypal_express'] = $this->language->get('text_paypal_manage');
		$this->data['text_paypal_express_search'] = $this->language->get('text_paypal_search');
		$this->data['text_recurring_profile'] = $this->language->get('text_recurring_profile');

		/* Shirttools.com */
 		$this->language->load('shirttools/header');
 		$this->data['text_shirttools'] = $this->language->get('text_shirttools');		
 		$this->data['text_clip_art_category'] = $this->language->get('text_clip_art_category');
 		$this->data['text_clip_art'] = $this->language->get('text_clip_art');
 		$this->data['text_fonts'] = $this->language->get('text_fonts');
 		$this->data['text_google_fonts'] = $this->language->get('text_google_fonts');
 		$this->data['text_designable_product'] = $this->language->get('text_designable_product');		
 		$this->data['text_shirttools_products'] = $this->language->get('text_shirttools_products');		
 		$this->data['text_shirttools_setting'] = $this->language->get('text_shirttools_setting');		
 		$this->data['text_menu_language'] = $this->language->get('text_menu_language');
 		$this->data['text_shirttools_colors'] = $this->language->get('text_shirttools_colors');
 		/* Shirttools.com */

		if (!$this->user->isLogged() || !isset($this->request->get['token']) || !isset($this->session->data['token']) || ($this->request->get['token'] != $this->session->data['token'])) {
			$this->data['logged'] = '';

			$this->data['home'] = $this->url->link('common/login', '', 'SSL');
		} else {
			$this->data['logged'] = sprintf($this->language->get('text_logged'), $this->user->getUserName());
			$this->data['pp_express_status'] = $this->config->get('pp_express_status');

			$this->data['home'] = $this->url->link('common/home', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['affiliate'] = $this->url->link('sale/affiliate', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['attribute'] = $this->url->link('catalog/attribute', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['attribute_group'] = $this->url->link('catalog/attribute_group', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['backup'] = $this->url->link('tool/backup', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['banner'] = $this->url->link('design/banner', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['category'] = $this->url->link('catalog/category', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['country'] = $this->url->link('localisation/country', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['coupon'] = $this->url->link('sale/coupon', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['currency'] = $this->url->link('localisation/currency', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['customer'] = $this->url->link('sale/customer', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['customer_fields'] = $this->url->link('sale/customer_field', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['customer_group'] = $this->url->link('sale/customer_group', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['customer_ban_ip'] = $this->url->link('sale/customer_ban_ip', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['custom_field'] = $this->url->link('design/custom_field', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['download'] = $this->url->link('catalog/download', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['error_log'] = $this->url->link('tool/error_log', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['feed'] = $this->url->link('extension/feed', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['filter'] = $this->url->link('catalog/filter', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['geo_zone'] = $this->url->link('localisation/geo_zone', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['information'] = $this->url->link('catalog/information', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['language'] = $this->url->link('localisation/language', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['layout'] = $this->url->link('design/layout', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['logout'] = $this->url->link('common/logout', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['contact'] = $this->url->link('sale/contact', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['manager'] = $this->url->link('extension/manager', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['manufacturer'] = $this->url->link('catalog/manufacturer', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['module'] = $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['option'] = $this->url->link('catalog/option', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['order'] = $this->url->link('sale/order', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['order_status'] = $this->url->link('localisation/order_status', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['payment'] = $this->url->link('extension/payment', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['product'] = $this->url->link('catalog/product', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['profile'] = $this->url->link('catalog/profile', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['report_sale_order'] = $this->url->link('report/sale_order', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['report_sale_tax'] = $this->url->link('report/sale_tax', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['report_sale_shipping'] = $this->url->link('report/sale_shipping', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['report_sale_return'] = $this->url->link('report/sale_return', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['report_sale_coupon'] = $this->url->link('report/sale_coupon', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['report_product_viewed'] = $this->url->link('report/product_viewed', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['report_product_purchased'] = $this->url->link('report/product_purchased', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['report_customer_online'] = $this->url->link('report/customer_online', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['report_customer_order'] = $this->url->link('report/customer_order', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['report_customer_reward'] = $this->url->link('report/customer_reward', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['report_customer_credit'] = $this->url->link('report/customer_credit', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['report_affiliate_commission'] = $this->url->link('report/affiliate_commission', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['review'] = $this->url->link('catalog/review', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['return'] = $this->url->link('sale/return', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['return_action'] = $this->url->link('localisation/return_action', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['return_reason'] = $this->url->link('localisation/return_reason', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['return_status'] = $this->url->link('localisation/return_status', 'token=' . $this->session->data['token'], 'SSL');			
			$this->data['shipping'] = $this->url->link('extension/shipping', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['setting'] = $this->url->link('setting/store', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['store'] = HTTP_CATALOG;
			$this->data['stock_status'] = $this->url->link('localisation/stock_status', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['tax_class'] = $this->url->link('localisation/tax_class', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['tax_rate'] = $this->url->link('localisation/tax_rate', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['total'] = $this->url->link('extension/total', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['user'] = $this->url->link('user/user', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['user_group'] = $this->url->link('user/user_permission', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['voucher'] = $this->url->link('sale/voucher', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['voucher_theme'] = $this->url->link('sale/voucher_theme', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['weight_class'] = $this->url->link('localisation/weight_class', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['length_class'] = $this->url->link('localisation/length_class', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['zone'] = $this->url->link('localisation/zone', 'token=' . $this->session->data['token'], 'SSL');

			$this->data['openbay_show_menu'] = $this->config->get('openbaymanager_show_menu');

			$this->data['openbay_link_extension'] = $this->url->link('extension/openbay', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['openbay_link_orders'] = $this->url->link('extension/openbay/orderList', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['openbay_link_items'] = $this->url->link('extension/openbay/itemList', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['openbay_link_ebay'] = $this->url->link('openbay/openbay', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['openbay_link_ebay_settings'] = $this->url->link('openbay/openbay/settings', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['openbay_link_ebay_links'] = $this->url->link('openbay/openbay/viewItemLinks', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['openbay_link_ebay_orderimport'] = $this->url->link('openbay/openbay/viewOrderImport', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['openbay_link_amazon'] = $this->url->link('openbay/amazon', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['openbay_link_amazon_settings'] = $this->url->link('openbay/amazon/settings', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['openbay_link_amazon_links'] = $this->url->link('openbay/amazon/itemLinks', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['openbay_link_amazonus'] = $this->url->link('openbay/amazonus', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['openbay_link_amazonus_settings'] = $this->url->link('openbay/amazonus/settings', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['openbay_link_amazonus_links'] = $this->url->link('openbay/amazonus/itemLinks', 'token=' . $this->session->data['token'], 'SSL');

			/* Shirttools.com */
  			$this->data['clip_art_category'] = $this->url->link('shirttools/clipart_category', 'token=' . $this->session->data['token'], 'SSL');
  			$this->data['clip_art'] = $this->url->link('shirttools/clipart', 'token=' . $this->session->data['token'], 'SSL');
   			$this->data['fonts'] = $this->url->link('shirttools/fonts', 'token=' . $this->session->data['token'], 'SSL');
  			$this->data['google_fonts'] = $this->url->link('shirttools/google_fonts', 'token=' . $this->session->data['token'], 'SSL');
  			$this->data['designable_product'] = $this->url->link('shirttools/designable', 'token=' . $this->session->data['token'], 'SSL');
  			$this->data['shirttools_products'] = $this->url->link('shirttools/products', 'token=' . $this->session->data['token'], 'SSL');
  			$this->data['shirttools_setting'] = $this->url->link('shirttools/setting', 'token=' . $this->session->data['token'], 'SSL');
  			$this->data['link_language'] = $this->url->link('LanguageEditor/LanguageEditor', 'token=' . $this->session->data['token'], 'SSL');

  			$option_query = $this->db->query("SELECT option_id FROM " . DB_PREFIX . "option_description where `name` = 'ST-Color'");
  			$this->data['shirttools_colors'] = $this->url->link('catalog/option/update', 'token=' . $this->session->data['token'] . '&option_id=' .$option_query->row['option_id'] , 'SSL');
  			/* Shirttools.com */

			$this->data['openbay_markets'] = array(
				'ebay' => $this->config->get('openbay_status'),
				'amazon' => $this->config->get('amazon_status'),
				'amazonus' => $this->config->get('amazonus_status'),
			);

			$this->data['paypal_express'] = $this->url->link('payment/pp_express', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['paypal_express_search'] = $this->url->link('payment/pp_express/search', 'token=' . $this->session->data['token'], 'SSL');
			$this->data['recurring_profile'] = $this->url->link('sale/recurring', 'token=' . $this->session->data['token'], 'SSL');

			$this->data['stores'] = array();

			$this->load->model('setting/store');

			$results = $this->model_setting_store->getStores();

			foreach ($results as $result) {
				$this->data['stores'][] = array(
					'name' => $result['name'],
					'href' => $result['url']
				);
			}			
		}

		$this->template = 'common/header.tpl';

		$this->render();
	}
}
?>