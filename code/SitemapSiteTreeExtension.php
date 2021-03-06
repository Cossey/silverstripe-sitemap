<?php
class SitemapSiteTreeExtension extends SiteTreeExtension {
	
	private static $db = array(
		"ShowInSitemap" => "Boolean",
	);
	
	private static $defaults = array(
		"ShowInSitemap" => true,
	);

	public function updateSettingsFields(&$fields) {
		
		$fields->addFieldToTab(
			"Root.Settings", 
			new CheckboxField('ShowInSitemap', _t("SitemapDecorator.SHOWINSITEMAP", 'Show in sitemap?')),
			'ShowInSearch'
		);
		
	}
	
	public function SiteMapChildren() {
		$children = $this->owner->AllChildren()
			->filter(array(
				'ShowInSitemap' => '1'
			));
		return $children;
	}
	
}

