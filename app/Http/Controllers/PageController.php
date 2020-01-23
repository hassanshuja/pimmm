<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Client;
use App\Galleries;
use App\Pages;
use App\Press;
use Illuminate\Support\Facades\Hash;

use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Menu;
use App\Branch;
use mysql_xdevapi\Session;

class PageController extends Controller
{
    //

    public function mega(Request $request)
    {
        $branches = Branch::where('menu_id', $request->input('mega'))->get();
        return $branches;


    }

    public function create()
    {
        if (!isset($_SESSION['id']))
            return view('auth.login');
        $megas = Menu::where('type', 2)->get();
        $normals = Menu::where('type', 1)->get();

        return view('pages.create', compact('megas', 'normals'));
    }

    public function home()
    {
        $menus = Menu::all();
        $pages = Pages::where('menu_id', null)->where('branch_id', null)->where('home', 0)->get();
        $homes = Pages::where('menu_id', null)->where('branch_id', null)->where('home', 1)->get();


        return view('front.home', compact('pages', 'menus', 'homes'));
    }

    public function about_us()
    {
        $menus = Menu::all();
        $pages = Pages::where('menu_id', null)->where('branch_id', null)->where('home', 0)->get();
        $clients = Client::all();
        $presses = Press::all();


        return view('front.about', compact('pages', 'menus', 'clients', 'presses'));
    }

    public function about_us_ar()
    {
        $menus = Menu::all();
        $pages = Pages::where('menu_id', null)->where('branch_id', null)->where('home', 0)->get();
        $clients = Client::all();
        $presses = Press::all();


        return view('front.about_ar', compact('pages', 'menus', 'clients', 'presses'));
    }

    public function contact_us()
    {
        $menus = Menu::all();
        $pages = Pages::where('menu_id', null)->where('branch_id', null)->where('home', 0)->get();
        $clients = Client::all();
        $presses = Press::all();


        return view('front.contact', compact('pages', 'menus', 'clients', 'presses'));
    }

    public function contact_us_ar()
    {
        $menus = Menu::all();
        $pages = Pages::where('menu_id', null)->where('branch_id', null)->where('home', 0)->get();
        $clients = Client::all();
        $presses = Press::all();


        return view('front.contact_ar', compact('pages', 'menus', 'clients', 'presses'));
    }

    public function home_ar()
    {
        $menus = Menu::all();
        $pages = Pages::where('menu_id', null)->where('branch_id', null)->where('home', 0)->get();
        $homes = Pages::where('menu_id', null)->where('branch_id', null)->where('home', 1)->get();

        return view('front.home_ar', compact('pages', 'menus', 'homes'));
    }

    public function index()
    {

        if (!isset($_SESSION['id']))
            return view('auth.login');

        $customers = Pages::all();


        return view('pages.index', compact('customers'));
    }

    public function store(Request $request)
    {

        if (!isset($_SESSION['id']))
            return view('auth.login');
        request()->validate([

            'name' => 'required|unique:pages',
            'name_arabic' => 'required|unique:pages'

        ]);
        $customer = new Pages();
        $customer->name = $request->input('name');
        $customer->name_arabic = $request->input('name_arabic');
        $customer->title = $request->input('title');
        $customer->title_arabic = $request->input('title_arabic');
        if ($request->input('type') == 1) {
            $customer->menu_id = $request->input('normal');

        }
        if ($request->input('type') == 2) {
            $customer->branch_id = $request->input('branch');
            $customer->menu_id = $request->input('mega');


        }

        if ($request->file('background') != null) {
            $date = Carbon::now()->micro;

            //$file=$request->file('photo');

            $ext = explode('.', $request->file('background')->hashName());


            $request->file('background')->storeAs(
                'public/attachment', $date . '.' . $ext[1]
            );
            $customer->background = $date . '.' . $ext[1];


        }

        if ($request->file('image_one') != null) {
            $date = Carbon::now()->micro;

            //$file=$request->file('photo');

            $ext = explode('.', $request->file('image_one')->hashName());


            $request->file('image_one')->storeAs(
                'public/attachment', $date . '.' . $ext[1]
            );
            $customer->image_one = $date . '.' . $ext[1];


        }
        if ($request->file('image_two') != null) {
            $date = Carbon::now()->micro;

            //$file=$request->file('photo');

            $ext = explode('.', $request->file('image_two')->hashName());


            $request->file('image_two')->storeAs(
                'public/attachment', $date . '.' . $ext[1]
            );
            $customer->image_two = $date . '.' . $ext[1];


        }
        if ($request->file('image_three') != null) {
            $date = Carbon::now()->micro;

            //$file=$request->file('photo');

            $ext = explode('.', $request->file('image_three')->hashName());


            $request->file('image_three')->storeAs(
                'public/attachment', $date . '.' . $ext[1]
            );
            $customer->image_three = $date . '.' . $ext[1];


        }

        $customer->save();
        return redirect()
            ->route("page.index")
            ->with("success", "page created successfully ");

    }

    public function storeArticle(Request $request)
    {

        if (!isset($_SESSION['id']))
            return view('auth.login');

        $customer = new Articles();
        $customer->description = $request->input('description');
        $customer->description_arabic = $request->input('description_arabic');
        $customer->title = $request->input('title');
        $customer->title_arabic = $request->input('title_arabic');
        $customer->page_id = $request->input('page');

        if ($request->file('background') != null) {
            $date = Carbon::now()->micro;

            //$file=$request->file('photo');

            $ext = explode('.', $request->file('background')->hashName());


            $request->file('background')->storeAs(
                'public/attachment', $date . '.' . $ext[1]
            );
            $customer->image = $date . '.' . $ext[1];


        }


        $customer->save();
        $page = Pages::find($request->input('page'));

        if ($page->home == 0)

            return redirect()
                ->route("page.index")
                ->with("success", "article created successfully ");
        else
            return redirect()
                ->route("homepage.index")
                ->with("success", "article created successfully ");

    }

    public function storeGallery(Request $request)
    {
        if (!isset($_SESSION['id']))
            return view('auth.login');
        if (count($request->file('images')) > 0) {
            foreach ($request->file('images') as $image) {

                if ($image != null) {
                    $gallery = new Galleries();

                    $date = Carbon::now()->micro;

                    //$file=$request->file('photo');

                    $ext = explode('.', $image->hashName());


                    $image->storeAs(
                        'public/attachment', $date . '.' . $ext[1]
                    );
                    $gallery->image = $date . '.' . $ext[1];

                    $gallery->article_id = $request->input('article');

                    $gallery->save();

                }

            }
        }
        $article = Articles::find($request->input('article'));
        return redirect('viewArticles/' . $article->page_id)
            ->with("success", "images added to gallery  successfully");


    }


    public function destroy($id)
    {

        if (!isset($_SESSION['id']))
            return view('auth.login');
        $page = Pages::find($id);
        $page->delete();

        return redirect()
            ->route("page.index")
            ->with("success", "page deleted successfully");
    }

    public function destroyArticle($id)
    {

        if (!isset($_SESSION['id']))
            return view('auth.login');
        $page = Articles::find($id);
        $parent = $page->page_id;
        $page->delete();

        return redirect('viewArticles/' . $parent)
            ->with("success", "article deleted successfully");
    }


    public function edit($id)

    {


        if (!isset($_SESSION['id']))
            return view('auth.login');
        $megas = Menu::where('type', 2)->get();
        $normals = Menu::where('type', 1)->get();
        $branches = Branch::all();

        $customer = Pages::find($id);

        return view('pages.edit', compact('customer', 'megas', 'normals', 'branches'));


    }

    public function show($id)

    {

        $page = Pages::find($id);
        $menus = Menu::all();
        $pages = Pages::where('menu_id', null)->where('branch_id', null)->where('home', 0)->get();

        return view('front.page', compact('pages', 'page', 'menus'));


    }

    public function showarticle($id)

    {


        $article = Articles::find($id);
        $menus = Menu::all();
        $pages = Pages::where('menu_id', null)->where('branch_id', null)->where('home', 0)->get();


        return view('front.gallery', compact('pages', 'article', 'menus'));


    }

    public function showarticle_ar($id)

    {

        $article = Articles::find($id);
        $menus = Menu::all();
        $pages = Pages::where('menu_id', null)->where('branch_id', null)->where('home', 0)->get();


        return view('front.gallery_ar', compact('pages', 'article', 'menus'));


    }

    public function show_ar($id)

    {

        $page = Pages::find($id);
        $menus = Menu::all();
        $pages = Pages::where('menu_id', null)->where('branch_id', null)->where('home', 0)->get();

        return view('front.page_ar', compact('pages', 'page', 'menus'));


    }

    public function editArticles($id)

    {
        if (!isset($_SESSION['id']))
            return view('auth.login');
        $customer = Articles::find($id);

        return view('articles.edit', compact('customer'));


    }

    public function createArticle($id)

    {
        if (!isset($_SESSION['id']))
            return view('auth.login');


        return view('articles.create', compact('id'));


    }

    public function createGallery($id)

    {
        if (!isset($_SESSION['id']))
            return view('auth.login');

        return view('gallery.create', compact('id'));


    }

    public function viewArticles($id)


    {

        if (!isset($_SESSION['id']))
            return view('auth.login');
        $page = Pages::find($id);


        return view('articles.index', compact('page'));


    }

    public function update(Request $request, $id)

    {
        if (!isset($_SESSION['id']))
            return view('auth.login');
        $customer = Pages::find($id);

        if ($customer->name != $request->input('name')) {
            request()->validate([

                'name' => 'required|unique:pages'
            ]);
        }
        if ($customer->name_arabic != $request->input('name_arabic')) {
            request()->validate([

                'name_arabic' => 'required|unique:pages'
            ]);
        }

        $customer->name = $request->input('name');
        $customer->name_arabic = $request->input('name_arabic');
        $customer->title = $request->input('title');
        $customer->title_arabic = $request->input('title_arabic');
        if ($request->input('type') == 1) {
            $customer->menu_id = $request->input('normal');
            $customer->branch_id = null;

        }
        if ($request->input('type') == 2) {
            $customer->branch_id = $request->input('branch');
            $customer->menu_id = $request->input('mega');


        }
        if ($request->input('type') == 3) {
            $customer->branch_id = null;
            $customer->menu_id = null;


        }

        if ($request->file('backgrounds') != null) {
            $date = Carbon::now()->micro;

            //$file=$request->file('photo');

            $ext = explode('.', $request->file('backgrounds')->hashName());


            $request->file('backgrounds')->storeAs(
                'public/attachment', $date . '.' . $ext[1]
            );
            $customer->background = $date . '.' . $ext[1];


        }

        if ($request->file('image_one') != null) {
            $date = Carbon::now()->micro;

            //$file=$request->file('photo');

            $ext = explode('.', $request->file('image_one')->hashName());


            $request->file('image_one')->storeAs(
                'public/attachment', $date . '.' . $ext[1]
            );
            $customer->image_one = $date . '.' . $ext[1];


        }
        if ($request->file('image_two') != null) {
            $date = Carbon::now()->micro;

            //$file=$request->file('photo');

            $ext = explode('.', $request->file('image_two')->hashName());


            $request->file('image_two')->storeAs(
                'public/attachment', $date . '.' . $ext[1]
            );
            $customer->image_two = $date . '.' . $ext[1];


        }
        if ($request->file('image_three') != null) {
            $date = Carbon::now()->micro;

            //$file=$request->file('photo');

            $ext = explode('.', $request->file('image_three')->hashName());


            $request->file('image_three')->storeAs(
                'public/attachment', $date . '.' . $ext[1]
            );
            $customer->image_three = $date . '.' . $ext[1];


        }

        $customer->save();
        return redirect()
            ->route("page.index")
            ->with("success", "page updated successfully");


    }

    public function updateArticle(Request $request, $id)

    {
        if (!isset($_SESSION['id']))
            return view('auth.login');
        $customer = Articles::find($id);


        $customer->description = $request->input('description');
        $customer->description_arabic = $request->input('description_arabic');
        $customer->title = $request->input('title');
        $customer->title_arabic = $request->input('title_arabic');

        if ($request->file('backgrounds') != null) {
            $date = Carbon::now()->micro;

            //$file=$request->file('photo');

            $ext = explode('.', $request->file('backgrounds')->hashName());


            $request->file('backgrounds')->storeAs(
                'public/attachment', $date . '.' . $ext[1]
            );
            $customer->image = $date . '.' . $ext[1];


        }

        $customer->save();
        return redirect('viewArticles/' . $customer->page_id)
            ->with("success", "article updated successfully");


    }


    public function logout(Request $request)

    {
        session_destroy();

        return redirect('login');


    }

    public function login(Request $request)

    {
        $user = User::where('email', $request->input('email'))->first();
        if ($user && Hash::check($request->input('password'), $user->password)) {
            $_SESSION['id'] = $user->id;
            $_SESSION['usertype'] = $user->usertype;

            return redirect('admin');

        } else

            return redirect('login');


    }

    public function admin()
    {
        if (!isset($_SESSION['id']))
            return view('auth.login');
        else
            return view('home');


    }

    public function profile(Request $request)

    {
        if (!isset($_SESSION['id']))
            return view('auth.login');
        if ($request->isMethod('post')) {
            $user = User::find($_SESSION['id']);
            if ($_SESSION['email'] != $request->input('email')) {
                request()->validate([

                    'email' => 'required|unique:users'
                ]);
            }


            $user->name = $request->input('first_name');
            $user->email = $request->input('email');

            if ($request->input('password')) {
                $user->password = $request->input('password');
            }

            $user->save();
            $_SESSION['name'] = $user->name;
            $_SESSION['email'] = $user->email;
            return redirect()
                ->route("profile")
                ->with("success", "profile info updated successfully");
        }
        return view('profile');


    }
}
