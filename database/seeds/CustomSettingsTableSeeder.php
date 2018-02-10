<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Setting;

class CustomSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$setting = $this->findSetting('social.facebook');
		if (!$setting->exists) {
			$setting->fill([
				'display_name' => 'Facebook',
				'value'        => '',
				'details'      => '',
				'type'         => 'text',
				'order'        => 1,
				'group'        => 'Social',
			])->save();
		}

		$setting = $this->findSetting('social.twitter');
		if (!$setting->exists) {
			$setting->fill([
				'display_name' => 'Twitter',
				'value'        => '',
				'details'      => '',
				'type'         => 'text',
				'order'        => 2,
				'group'        => 'Social',
			])->save();
		}

		$setting = $this->findSetting('social.instagram');
		if (!$setting->exists) {
			$setting->fill([
				'display_name' => 'Instagram',
				'value'        => '',
				'details'      => '',
				'type'         => 'text',
				'order'        => 3,
				'group'        => 'Social',
			])->save();
		}

		$setting = $this->findSetting('site.keywords');
		if (!$setting->exists) {
			$setting->fill([
				'display_name' => 'Site meta keywords',
				'value'        => '',
				'details'      => '',
				'type'         => 'text',
				'order'        => 5,
				'group'        => 'Site',
			])->save();
		}

		$setting = $this->findSetting('site.pagination');
		if (!$setting->exists) {
			$setting->fill([
				'display_name' => 'Pagination (number)',
				'value'        => '5',
				'details'      => '',
				'type'         => 'text',
				'order'        => 6,
				'group'        => 'Site',
			])->save();
		}

		$setting = $this->findSetting('site.email');
		if (!$setting->exists) {
			$setting->fill([
				'display_name' => 'Contact email',
				'value'        => '',
				'details'      => '',
				'type'         => 'text',
				'order'        => 6,
				'group'        => 'Site',
			])->save();
		}

		$setting = $this->findSetting('home.background');
		if (!$setting->exists) {
			$setting->fill([
				'display_name' => 'Background picture',
				'value'        => '',
				'details'      => '',
				'type'         => 'image',
				'order'        => 1,
				'group'        => 'Home',
			])->save();
		}

		$setting = $this->findSetting('home.motto');
		if (!$setting->exists) {
			$setting->fill([
				'display_name' => 'Motto',
				'value'        => 'Dance is the hidden language of the soul',
				'details'      => '',
				'type'         => 'text',
				'order'        => 2,
				'group'        => 'Home',
			])->save();
		}

		$setting = $this->findSetting('home.button1text');
		if (!$setting->exists) {
			$setting->fill([
				'display_name' => 'Button 1 text',
				'value'        => 'What\'s happening',
				'details'      => '',
				'type'         => 'text',
				'order'        => 3,
				'group'        => 'Home',
			])->save();
		}

		$setting = $this->findSetting('home.button1link');
		if (!$setting->exists) {
			$setting->fill([
				'display_name' => 'Button 1 link',
				'value'        => '',
				'details'      => '',
				'type'         => 'text',
				'order'        => 4,
				'group'        => 'Home',
			])->save();
		}

		$setting = $this->findSetting('home.button2text');
		if (!$setting->exists) {
			$setting->fill([
				'display_name' => 'Button 2 text',
				'value'        => 'More info',
				'details'      => '',
				'type'         => 'text',
				'order'        => 5,
				'group'        => 'Home',
			])->save();
		}

		$setting = $this->findSetting('home.button2link');
		if (!$setting->exists) {
			$setting->fill([
				'display_name' => 'Button 2 link',
				'value'        => '',
				'details'      => '',
				'type'         => 'text',
				'order'        => 6,
				'group'        => 'Home',
			])->save();
		}

		$setting = $this->findSetting('home.button3text');
		if (!$setting->exists) {
			$setting->fill([
				'display_name' => 'Button 3 text',
				'value'        => 'Contact us',
				'details'      => '',
				'type'         => 'text',
				'order'        => 7,
				'group'        => 'Home',
			])->save();
		}

		$setting = $this->findSetting('home.button3link');
		if (!$setting->exists) {
			$setting->fill([
				'display_name' => 'Button 3 link',
				'value'        => '',
				'details'      => '',
				'type'         => 'text',
				'order'        => 8,
				'group'        => 'Home',
			])->save();
		}
    }

	/**
	 * [setting description].
	 *
	 * @param [type] $key [description]
	 *
	 * @return [type] [description]
	 */
	protected function findSetting($key)
	{
		return Setting::firstOrNew(['key' => $key]);
	}
}
