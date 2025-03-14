<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Setting;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLdMulti;
use Artesaos\SEOTools\Facades\SEOTools;

class WebsiteController extends Controller
{
    private array $baseSeoData;
    private $homePageSeoData;

    public function __construct()
    {
        $this->homePageSeoData = Setting::all()->toArray();
        $appName = '';
        $description = '';
        $keywords = '';
        $home_page_title = '';
        foreach ($this->homePageSeoData as $setting) {
            if ($setting['key'] == 'app_name') {
                $appName = $setting['value'];
            } elseif ($setting['key'] == 'description') {
                $description = $setting['value'];
            } elseif ($setting['key'] == 'title') {
                $home_page_title = $setting['value'];
            } elseif ($setting['key'] == '$keywords') {
                $keywords = $setting['value'];
            }
        }

        $this->baseSeoData = [
            'title' => $appName . ' | ' . $home_page_title,
            'description' => $description,
            'keywords' => $keywords,
            'image' => asset('assets/images/logo.png'),
            'type' => 'website',
            'site' => env('APP_URL'),
            'app_name' => $appName,
            'robots' => 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1'
        ];
    }

    public function home(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $articles = Article::where('status', 1)->limit(3)->with('categories')->get();

        $this->seo($this->baseSeoData);
        return view('pages.home.index', compact('articles'));
    }

    public function articleDetails($slug): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $article = Article::where('status', 1)->where('slug', $slug)->with('categories')->with('tags')->first();

        $tags = [];
        foreach ($article['tags'] as $tag) {
            $tags[] = $tag['name'];
        }

        $this->baseSeoData['title'] = $article['title'] . ' | ' . $this->baseSeoData['app_name'];
        $this->baseSeoData['description'] = $article['meta_description'];
        $this->baseSeoData['image'] = env('BE_URL') . $article['image'];
        $this->baseSeoData['keywords'] = implode(',', $tags);
        $this->seo($this->baseSeoData);

        return view('pages.articleDetails.index', compact('article'));
    }


    public function sendMail(Request $request): JsonResponse
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'nullable',
            'message' => 'required',
        ]);

        Mail::send('email.contact', ['data' => $data], function ($message) use ($data) {
            $message->from($data['email'], $data['name']);
            $message->to('tanvirrezaanik@gmail.com')->subject($data['subject']);
        });

        return response()->json(['message' => 'Email sent successfully']);
    }

    private function seo($data)
    {
        SEOMeta::setTitle($data['title'], false);
        SEOMeta::setDescription($data['description']);
//        SEOMeta::addMeta('name', $value = null, $name = 'name');
        SEOMeta::setKeywords($data['keywords']);
        SEOMeta::setRobots($data['robots']);
        SEOMeta::setCanonical(url()->full());

//        OpenGraph::addProperty('keywords', '$value'); // value can be string or array
        OpenGraph::setTitle($data['title']); // define title
        OpenGraph::setDescription($data['description']);  // define description

        if ($data['image']) {
            OpenGraph::addImage($data['image']); // add image url
        } else {
            OpenGraph::addImage($this->homePageSeoData['home_page_image_url']); // add image url
        }

        OpenGraph::setUrl(url()->current()); // define url
        OpenGraph::setSiteName($data['app_name']); //define site_name

        TwitterCard::setType('summary'); // type of twitter card tag
        TwitterCard::setTitle($data['title']); // title of twitter card tag
        TwitterCard::setDescription($data['description']); // description of twitter card tag

        if ($data['image']) {
            TwitterCard::setImage($data['image']); // add image url
        } else {
            TwitterCard::setImage($this->homePageSeoData['home_page_image_url']); // add image url
        }

        TwitterCard::setSite($data['site']); // site of twitter card tag
        TwitterCard::setUrl(url()->current()); // url of twitter card tag

        if (isset($data['read_time'])) {
            TwitterCard::addValue('label1', 'Est. reading time'); // value can be string or array
            TwitterCard::addValue('data1', $data['read_time']); // value can be string or array
        }

//        JsonLd::addValue($key, $value); // value can be string or array
        JsonLd::setType($data['type']); // type of twitter card tag
        JsonLd::setTitle($data['title']); // title of twitter card tag
        JsonLd::setDescription($data['description']); // description of twitter card tag

        if ($data['image']) {
            JsonLd::setImage($data['image']); // add image url
        } else {
            JsonLd::setImage($this->homePageSeoData['home_page_image_url']); // add image url
        }

//        JsonLd::setSite('@meraner-morgen'); // site of twitter card tag
        JsonLd::setUrl(url()->current()); // url of twitter card tag
    }

}
