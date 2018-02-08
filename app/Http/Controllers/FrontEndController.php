<?php

namespace App\Http\Controllers;

use App\Album;
use App\Event;
use App\Mail\ContactForm;
use App\Page;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class FrontEndController extends Controller
{
	public function home()
	{
		$page = Page::where('slug', 'about-the-project')->firstOrFail();
		return view('frontend.home')
			->with('page', $page);
    }

	public function project()
	{
		$page = Page::where('slug', 'about-the-project')->firstOrFail();
		return view('frontend.single')
			->with('page', $page);
    }

	public function structure()
	{
		$page = Page::where('slug', 'structure')->firstOrFail();
		return view('frontend.single')
			->with('page', $page);
	}

	public function funding()
	{
		$page = Page::where('slug', 'funding')->firstOrFail();
		return view('frontend.single')
			->with('page', $page);
	}

	public function resources()
	{
		$page = Page::where('slug', 'resources')->firstOrFail();
		return view('frontend.single')
			->with('page', $page);
	}

	public function whoweare()
	{
		$users = User::all();
		return view('frontend.information.whoweare')
			->with('users', $users);
    }

	public function events()
	{
		$events = Event::latest()->paginate(setting('site.pagination'));
		return view('frontend.events')
			->with('events', $events);
	}

	public function event($slug)
	{
		$event = Event::where('slug', $slug)->firstOrFail();
		return view('frontend.event')
			->with('event', $event);
	}

	public function blog()
	{
		$posts = Post::latest()->paginate(setting('site.pagination'));
		return view('frontend.blog')
			->with('posts', $posts);
	}

	public function post($slug)
	{
		$post = Post::where('slug', $slug)->firstOrFail();
		return view('frontend.post')
			->with('post', $post);
	}

	public function gallery()
	{
		$albums = Album::latest()->paginate(setting('site.pagination'));
		return view('frontend.gallery')
			->with('albums', $albums);
	}

	public function album($slug)
	{
		$album = Album::where('slug', $slug)->firstOrFail();
		$pictures = $album->images;
		$videos = $album->videos;
		return view('frontend.album')
			->with('album', $album)
			->with('pictures', $pictures)
			->with('videos', $videos);
	}

	public function contact()
	{
		$page = Page::where('slug', 'contact')->firstOrFail();
		return view('frontend.contact')
			->with('page', $page);
	}

	public function postContact(Request $request)
	{
		$request->validate([
			'name' => 'string|required',
			'email' => 'email|required',
			'message' => 'required'
		]);

		$data = array(
			'email' => $request->email,
			'name' => $request->name,
			'body_message' => $request->message
		);

		Mail::to(setting('site.email'))
			->send(new ContactForm($data));

		Session::flash('success', 'Your message has been successfully sent.');

		return redirect()->route('contact');
	}
}
