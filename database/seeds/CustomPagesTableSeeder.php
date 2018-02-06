<?php

use App\Page;
use Illuminate\Database\Seeder;

class CustomPagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		$about = Page::firstOrNew([
			'slug' => 'about-the-project',
		]);
		if (!$about->exists) {
			$about->fill([
				'author_id' => 0,
				'title'     => 'About the project',
				'excerpt'   => 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.',
				'body'      => '<p>About the project. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>
<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>',
				'image'            => 'pages/page1.jpg',
				'meta_description' => 'About Meta Description',
				'meta_keywords'    => 'about, about2',
				'status'           => 'ACTIVE',
			])->save();
		}


		$structure = Page::firstOrNew([
			'slug' => 'structure',
		]);
		if (!$structure->exists) {
			$structure->fill([
				'author_id' => 0,
				'title'     => 'Structure',
				'excerpt'   => 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.',
				'body'      => '<p>Structure. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>
<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>',
				'image'            => 'pages/page1.jpg',
				'meta_description' => 'Structure Meta Description',
				'meta_keywords'    => 'structure, structure2',
				'status'           => 'ACTIVE',
			])->save();
		}

		$funding = Page::firstOrNew([
			'slug' => 'funding',
		]);
		if (!$funding->exists) {
			$funding->fill([
				'author_id' => 0,
				'title'     => 'Funding',
				'excerpt'   => 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.',
				'body'      => '<p>Funding. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>
<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>',
				'image'            => 'pages/page1.jpg',
				'meta_description' => 'Funding Meta Description',
				'meta_keywords'    => 'funding, funding2',
				'status'           => 'ACTIVE',
			])->save();
		}

		$resources = Page::firstOrNew([
			'slug' => 'resources',
		]);
		if (!$resources->exists) {
			$resources->fill([
				'author_id' => 0,
				'title'     => 'Resources',
				'excerpt'   => 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.',
				'body'      => '<p>Resources. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>
<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>',
				'image'            => 'pages/page1.jpg',
				'meta_description' => 'resources Meta Description',
				'meta_keywords'    => 'resources, resources2',
				'status'           => 'ACTIVE',
			])->save();
		}

		$contact = Page::firstOrNew([
			'slug' => 'contact',
		]);
		if (!$contact->exists) {
			$contact->fill([
				'author_id' => 0,
				'title'     => 'Contact',
				'excerpt'   => 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.',
				'body'      => '<p>Contact. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>
<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>',
				'image'            => 'pages/page1.jpg',
				'meta_description' => 'Contact Meta Description',
				'meta_keywords'    => 'contact, contact2',
				'status'           => 'ACTIVE',
			])->save();
		}
    }
}
