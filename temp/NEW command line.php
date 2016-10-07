<?php

composer update --with-dependencies

sudo find / -name php.ini;

sudo subl /etc/php/7.0/fpm/php.ini
sudo subl /etc/php/7.0/cli/php.ini

subl /var/www/vhosts/gracecompany/stage.grace/php.ini

/var/www/vhosts/gracecompany/stage.grace/resources/views/frontend/layout
/var/www/vhosts/gracecompany/stage.grace/resources/views/frontend/
/var/www/vhosts/gracecompany/stage.grace/app/Http/routes.php


/var/www/vhosts/gracecompany/stage.grace/bootstrap/cache/services.json

/var/www/vhosts/gracecompany/stage.grace/


subl /etc/php/7.0/fpm/php.ini

php5-fpm

10.0.2.2

/home/vagrant/grace/fully.grace/bootstrap/cache/services.json

647682108




settings "color_scheme": "Packages/User/colors/Bittersweet.tmTheme",
php "color_scheme": "Packages/User/colors/ArtSchool.tmTheme",
css "color_scheme": "Packages/User/phillipscustom/mghDreamweaver.tmTheme",



"color_scheme": "Packages/User/colors/Chameleon.tmTheme",
"color_scheme": "Packages/Inspired GitHub Color Scheme/InspiredGitHub.tmTheme",
"color_scheme": "Packages/User/colors/CandyLand (1).tmTheme",
"color_scheme": "Packages/User/colors/Bittersweet.tmTheme",
"color_scheme": "Packages/User/colors/3024_Day.tmTheme",
"color_scheme": "Packages/User/colors/mihdan (SL).tmTheme",
"color_scheme": "Packages/User/colors/ArtSchool.tmTheme",




"
(?<=img src\")(.*?)(?=\")

(?<={)(.*?)(?=})
(?<=stylesheet\" href=\")(.*?)(?=\")

(?<=script src=\")(.*?)(?=\")


"example": = (?<=\")(.*?)(?=\":")
{example} = (?<={)(.*?)(?=})
'example' = (?<=')(.*?)(?=')

<li>(.|\n)*?<\/li>
('.*?')

header("Access-Control-Allow-Origin: *");

rm -rf /usr/local/bin/subl
rm -rf /bin/subl

HOME
WHAT WE DO
ABOUT US
MANUFACTURING
INVESTORS
NEWS
CAREERS
CONTACT


QNIQUE QUILTER
HAND QUILTING
MACHINE QUILTING
AUTOMATED QUILTING
QUILTING ACCESSORY














Route::get('/ajax/pagination', array('before' =>'auth' , 'uses'=>'CampaignsController@showPostspag'));

function getPosts(page) {
console.log(page);
	$.ajax({
	url : '/ajax/pagination?page=' + page,
	dataType: 'json',
		})
		.done(function (data) {
		$('.posts').html(data);
		location.hash = page;
	})
}
















"doctrine/dbal": "Required to rename columns and drop SQLite columns (~2.4).",
"fzaninotto/faker": "Required to use the eloquent factory builder (~1.4).",
"illuminate/console": "Required to use the database commands (5.1.*).",
"illuminate/events": "Required to use the observers with Eloquent (5.1.*).",
"illuminate/filesystem": "Required to use the migrations (5.1.*).",
"illuminate/pagination": "Required to paginate the result set (5.1.*)."



$user->profile()->save(new App\Profile());


Sentinel::register(['email' => 'test@example.com', 'password' => 'foobar', 'profile_id' => $this->user->id]);


$user = new Sentinel::register(['email'    => 'joe.doe@example.com', 'password' => 'password', 'profile_id' => $user->id, ]);


@foreach($articles as $article)
<div class="spost clearfix">
    <div class="entry-c">
            <div class="pull-left recent-post-image">
            @if($article->path && $article->file_name)
                <a href="{!! URL::route('dashboard.article.show', array('slug'=>$article->slug)) !!}" itemprop="url">
                    <img itemprop="image" src="{!! url($article->path . 'thumb_' . $article->file_name) !!}" alt="{!! $article->title !!} image">
                </a>
            @else
                <a href="{!! URL::route('dashboard.article.show', array('slug'=>$article->slug)) !!}" itemprop="url">
                    <img itemprop="image" src="{!! url('assets/images/blog_s.png') !!}" alt="{!! $article->title !!} image">
                </a>
            @endif
            </div>
        <div class="entry-title">
            <h4><a href="{!! URL::route('dashboard.article.show', array('slug'=>$article->slug)) !!}" itemprop="url">
                <span itemprop="name">{!! $article->title !!}</span>
                </a>
            </h4>
        </div>
        <ul class="entry-meta">
            <li><small class="muted">{!! $article->created_at !!}</small></li>
        </ul>
    </div>
</div>
@endforeach


@foreach($articles as $article)
    <div class="spost clearfix">
        <div class="entry-c">
                <div class="pull-left recent-post-image ">
                @if($article->path && $article->file_name)
                    <a class="nobg" href="{!! URL::route('dashboard.article.show', array('slug'=>$article->slug)) !!}" itemprop="url">
                        <img itemprop="image" src="{!! url($article->path . 'thumb_' . $article->file_name) !!}" alt="{!! $article->title !!} image">
                    </a>
                @else
                    <a class="nobg" href="{!! URL::route('dashboard.article.show', array('slug'=>$article->slug)) !!}" itemprop="url">
                        <img itemprop="image" src="{!! url('assets/images/blog_s.png') !!}" alt="{!! $article->title !!} image">
                    </a>
                @endif
                </div>
            <div class="entry-title">
                <h4><a href="{!! URL::route('dashboard.article.show', array('slug'=>$article->slug)) !!}" itemprop="url">
                    <span itemprop="name">{!! $article->title !!}</span>
                    </a>
                </h4>
            </div>
            <ul class="entry-meta">
                <li><small class="muted">{!! $article->created_at !!}</small></li>
            </ul>
        </div>
    </div>
@endforeach

composer require raven/raven ext-xdebug dflydev/markdown doctrine/dbal guzzlehttp/guzzle php-console/php-console phpunit/php-invoker
-----------------------------------------------------------------
Then create a private/public key pair with ssh-keygen:

 $ ssh-keygen -t dsa
This will place the private key in ~/.ssh/id_dsa and the public key in ~/.ssh/id_dsa.pub.

Guard the private key (set appropriate permissions) as if the private key were your password. In effect, it is.

Now, append the contents of ~/.ssh/id_dsa.pub to the end of ~/.ssh/authorized_keys on the remote machine.

For example:
 $ cat .ssh/id_dsa.pub | ssh host 'cat >> ~/.ssh/authorized_keys'
(On Linux systems, you can use ssh-copy-id instead; the technique above is more portable.)

Do not copy your private key over.

Now, when you connect to that account, it won't require a password.
--------------------------------------------------

xdebug.remote_enable=1
xdebug.remote_handler=dbgp
xdebug.remote_host=127.0.0.1
xdebug.remote_port=9000
xdebug.remote_log="/var/log/xdebug/xdebug.log"

1
down vote
If you want to merge lines into one line that will also remove the starting, and ending space from the line, the following regex should work:

Find What: ^\s*(.+)\s*\n
Replace With: \1


sudo find / -name .bash_profile;


/root/.bashrc
/etc/skel/.bashrc
/home/ec2-user/.bashrc
/home/phillip/.bashrc
/home/rack/.bashrc



section-one.blade.php
section-two.blade.php
section-three.blade.php
section-four.blade.php
section-five.blade.php


sudo wget -O /bin/subl https://raw.github.com/aurora/rmate/master/rmate;
sudo chmod +x /bin/subl



/root/.bashrc
/etc/skel/.bashrc
/home/ec2-user/.bash
/home/phillip/.bashr
/home/rack/.bashrc



rm -rf /root/rmate
rm -rf /usr/bin/rmate
sudo find / -name subl;
sudo find / -name rmate;
rm -rf /bin/subl
rm -rf /usr/bin/subl
rm -rf /var/www/vhosts/larave
rm -rf /var/www/vhosts/subl

subl ~/.bash_aliases
subl ~/.bash_profile
subl ~/.bashrc

------------------------------------------------------------
Bash snippet: Remove text from filenames
------------------------------------------------------------
Today I had a directory full of mp3 files for a Flash game that each had the text “woman01” in them.  Since I wanted to just keep the rest of the filename, I put together this Bash one-liner:

for f in *; do mv $f ${f/woman01/}; done
------------------------------------------------------------
Bash Snippet: Move list of files from stdin
------------------------------------------------------------
Tonight I had a list of filenames copied on my local computer and wanted to move them in an ssh session. Here’s how I did it:

cat | while read line; do mv "$line" destination_directory; done

one
two
three
four
five

After hitting enter, you can paste in a list and each line will be used in the mv command. cat, by itself, reads from stdin, and this is piped to the while read. Send Ctrl+D (End of File) to exit out of cat.  Super handy, and it only took me like a freaking hour to figure out!



------------------------------------------------------------





------------------------------------------------------------
------------------------------------------------------------

------------------------------------------------------------


------------------------------------------------------------
Splitting Admin and Front End
------------------------------------------------------------
$ php artisan make:controller Admin\\UserController
You need to use two back-slashes to escape them.

In terms of routes, if you’re using resource controllers, then they’ll look like this:

// Front-end routes
$router->resource('user', 'UserController');

// Admin routes
$router->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function($router)
{
    $router->resource('user', 'UserController');
});
You could also split your admin routes into a separate file, and require that file in your app/routes.php file, for organisation.



There’s nothing wrong with having two controllers for the same resource if they are used in two totally different contexts, such as a public website and an administration panel.

I take this approach with most Laravel applications I build, storing admin-related controllers in an Admin sub-directory, like this:


app/
  Http/
    Controllers/
      Admin/
        UserController.php
      UserController.php


However, both controllers may use the same repository for accessing user records.

------------------------------------------------------------


---------------------working subl setup ---------------------------------------
http://stackoverflow.com/questions/15958056/how-to-use-sublime-over-ssh/18538531

As a follow up to @ubik's answer, here are the three simple (one-time) steps to get the 'subl' command working on your remote server:

[Local] Install the rsub package in Sublime Text using the Sublime Package Manager
[Local] Execute the following Bash command (this will set up an SSH tunnel, which is rsub's secret sauce):

printf "Host *\n    RemoteForward 52698 127.0.0.1:52698" >> ~/.ssh/config
[Server] Execute the following Bash command on your remote server (this will install the 'subl' shell command):

sudo wget -O /bin/subl https://raw.github.com/aurora/rmate/master/rmate;
sudo chmod +x /bin/subl

And voila! You're now using Sublime Text over SSH.

You can open an example file in Sublime Text from the server with something like subl ~/test.txt


/usr/local/bin/subl




Route::get('/r', function () {
function philsroutes()
{
    $routeCollection = Route::getRoutes();
    echo "<table style='width:100%'>";
    echo "<tr>";
    echo "<td width='10%'><h4>HTTP Method</h4></td>";
    echo "<td width='10%'><h4>Route</h4></td>";
    echo "<td width='80%'><h4>Corresponding Action</h4></td>";
    echo "</tr>";
    foreach ($routeCollection as $value) {
        echo "<tr>";
        echo "<td>" . $value->getMethods()[0] . "</td>";
        echo "<td><a href='" . $value->getPath() . "' target='_blank'>" . $value->getPath() . "</a> </td>";
        echo "<td>" . $value->getActionName() . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
return philsroutes();
});





Route::resource('profiles', 'ProfileController');
Route::get('profiles/{id}/delete', ['as' => 'profiles.delete', 'uses' => 'ProfileController@destroy']);

Route::post('profiles/new', function(){
    $user = User::create([
        'username'=>Input::get('username'),
        'name'=>Input::get('name')
    ]);
    $profile = new Profile([
        'first_name' => Input::get('first_name'),
        'last_name' => Input::get('last_name')
    ]);
    $user->profile()->save();
});

$profile = new Profile(['first_name' => 'first_name', 'last_name' => 'last_name']);
$user->profile()->save();


$user->profile()->save(new App\Profile());






php artisan mitul.generator:scaffold_api Product --fieldsFile='/database/fields/product.json'




$user->profile()->save(new App\Models\Profile());


Sentinel::register(['email' => 'test@example.com', 'password' => 'foobar', 'profile_id' => '']);


$user = new Sentinel::register(['email'    => 'joe.doe@example.com', 'password' => 'password', 'profile_id' => $user->id, ]);


$user->save();


$user = new App\Models\User;
$user->email = 'madsynn@gamil.com';
$user->first_name = 'phillip';
$user->last_name = 'madsen';
$user->password = bcrypt('admin');




$profile = new App\Models\Profile;
$profile->user_id = $user->id;
$profile->display_name = 'phillip madsen';

$profile->website = 'www.test.com';
$profile->company = 'testing house';
$profile->pic = '';
$profile->gender = 'male';
$profile->dob = '1976-09-13';
$profile->about_me = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut nim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
$profile->note = 'Lorem ipsum dolor sit amet eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat est laborum.';

$profile->twitter_username = 'BigTester';
$profile->linked_in_url = $faker->url;
$profile->google_plus_url = 'http://plus.google.com';
$profile->facebook_url = 'http://www.facebook.com';
$profile->phone = '8015555555';
$profile->phone_type = 'Home';
$profile->activated = true;
$profile->profile_activated_on = Carbon\Carbon::now();
$profile->user_api_key = $faker->uuid;
$profile->user_api_secret = str_random(64);
$profile->user_activation_key = str_random(128);
$profile->activation_code = str_random(15);
$profile->confirmation_code = str_random(4);
$profile->activated_on = Carbon\Carbon::now();

$profile->published_on = Carbon\Carbon::now();
$profile->published = $faker->boolean($chanceOfGettingTrue = 50);
$profile->activated = $faker->boolean($chanceOfGettingTrue = 50);
$profile->remember = $faker->boolean($chanceOfGettingTrue = 50);
$profile->is_fake = $faker->boolean($chanceOfGettingTrue = 100);
$profile->slug = $faker->slug;
$profile->created_at = Carbon\Carbon::now();
$profile->updated_at = Carbon\Carbon::now();


$user->profile_id = $profile->user_id;

$user->save();
$profile = $user->profile()->save($profile);

$user = App\Models\User::all()->toArray();
$userProfile = App\Models\Profile::all()->toArray();












/etc/php5/cli/php.ini




<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
  {{-- <body class="prettyprint lang-html"> --}}
    <body onload="prettyPrint()">
------------------------------------------------------------
 public/
    |-- themes/
        |-- bootstrap/
            |-- theme.json   <--- theme manifest file
            |-- assets/
                |-- css/
                    |-- bootstrap.css
                |-- img/
                |-- js/
                    |-- bootstrap.js
                    |-- jquery.js
            |-- views/
                |-- layout.blade.php     <--- this is our view layout
                |-- auth/
                    |-- login.blade.php  <--- this is our login view



      "post-update-cmd": [
                        "php artisan optimize",
                        "php artisan ide-helper:generate --sublime",
                        "php artisan ide-helper:generate --helpers"
                        ],



SETUP RSUB RMATE SUBL
As a follow up to @ubik's answer, here are the three simple (one-time) steps to get the 'subl' command working on your remote server:
[Local] Install the rsub package in Sublime Text using the Sublime Package Manager
[Local] Execute the following Bash command (this will set up an SSH tunnel, which is rsub's secret sauce):

printf "Host *\n RemoteForward 52698 127.0.0.1:52698" >> ~/.ssh/config

[Server] Execute the following Bash command on your remote server (this will install the 'subl' shell command):


sudo wget -O /usr/local/bin/subl https://raw.github.com/aurora/rmate/master/rmate;
sudo chmod +x /usr/local/bin/subl


/var/www/vhosts/gracecompany/stage.grace/resources/views/frontend/layout


 /var/www/vhosts/gracecompany/stage.grace/resources/views/frontend/
/var/www/vhosts/gracecompany/stage.grace/app/Http/

You can install rmate via gem:

gem install rmate
Updating to latest version can be done using:

gem update rmate
Standalone

Installing into ~/bin can be done using these two lines:

curl -Lo ~/bin/rmate https://raw.githubusercontent.com/textmate/rmate/master/bin/rmate
chmod a+x ~/bin/rmate

If ~/bin is not already in your PATH then you may want to add something like this to your shell startup file (e.g. ~/.profile):

export PATH="$PATH:$HOME/bin"




sudo wget -O /usr/local/bin/subl https://raw.githubusercontent.com/textmate/rmate/master/bin/rmate;
sudo chmod +x /usr/local/bin/subl

rm -rf /usr/local/bin/subl
rm -rf /bin/rmate
rm -rf /bin/subl





















"fzaninotto/faker": "~1.4",
"mockery/mockery": "0.9.*",
"phpunit/phpunit": "~4.0",
"phpspec/phpspec": "~2.1",
"squizlabs/php_codesniffer": "1.4.*@stable",
"phpmd/phpmd": "2.2.*"
alias rdb="php artisan migrate:reset"

%APPDATA%/Sublime Text 3/Packages/

%PACKAGESDIR%/CodeFormatter/codeformatter/lib/phpbeautifier

"codeformatter_php_options":
{
"syntaxes": "php", // Syntax names which must process PHP formatter
"php_path": "", // Path for PHP executable, e.g. "/usr/lib/php" or "C:/Program Files/PHP/php.exe". If empty, uses command "php" from system environments
"format_on_save": false, // Format on save
"psr1": false, // Activate PSR1 style
"psr1_naming": false, // Activate PSR1 style - Section 3 and 4.3 - Class and method names case
"psr2": true, // Activate PSR2 style
"indent_with_space": 4, // Use spaces instead of tabs for indentation
"enable_auto_align": true, // Enable auto align of = and =>
"visibility_order": true, // Fixes visibiliy order for method in classes - PSR-2 4.2
"smart_linebreak_after_curly": true, // Convert multistatement blocks into multiline blocks

// Enable specific transformations. Example: ["ConvertOpenTagWithEcho", "PrettyPrintDocBlocks"]
// You can list all available transformations from command palette: CodeFormatter: Show PHP Transformations
"passes": ["ConvertOpenTagWithEcho", "PrettyPrintDocBlocks"],

// Disable specific transformations
"exclude": []
}

"codeformatter_js_options":
{
"syntaxes": "javascript,json", // Syntax names which must process JS formatter
"format_on_save": false, // Format on save
"indent_size": 4, // indentation size
"indent_char": " ", // Indent character
"indent_with_tabs": false, // Indent with one tab (overrides indent_size and indent_char options)
"eol": "\n", // EOL symbol
"preserve_newlines": false, // whether existing line breaks should be preserved,
"max_preserve_newlines": 10, // maximum number of line breaks to be preserved in one chunk
"space_in_paren": false, // Add padding spaces within paren, ie. f( a, b )
"space_in_empty_paren": false, // Add padding spaces within paren if parent empty, ie. f(  )
"e4x": false, // Pass E4X xml literals through untouched
"jslint_happy": false, // if true, then jslint-stricter mode is enforced. Example function () vs function()
"brace_style": "collapse", // "collapse" | "expand" | "end-expand". put braces on the same line as control statements (default), or put braces on own line (Allman / ANSI style), or just put end braces on own line.
"keep_array_indentation": false, // keep array identation.
"keep_function_indentation": false, // keep function identation.
"eval_code": false, // eval code
"unescape_strings": false, // Decode printable characters encoded in xNN notation
"wrap_line_length": 0, // Wrap lines at next opportunity after N characters
"break_chained_methods": false, // Break chained method calls across subsequent lines
"end_with_newline": false, // Add new line at end of file
"comma_first": false // Add comma first
}


You could try to replace all (regular expression) " *\n\{" with " {", and all " *\}\n *else" with "} else" as a very low-tech option. Also depending on programming language, you could just use an editor like Visual Studio (free variants exist) or Eclipse once, reformat the whole code base, then do one "cleanup commit".


C:\Users\sandbox\AppData\Roaming\npm\css-beautify -> C:\Users\sandbox\AppData\Roaming\npm\node_modules\js-beautify\js\bin\css-beautify.js
C:\Users\sandbox\AppData\Roaming\npm\html-beautify -> C:\Users\sandbox\AppData\Roaming\npm\node_modules\js-beautify\js\bin\html-beautify.j
C:\Users\sandbox\AppData\Roaming\npm\js-beautify -> C:\Users\sandbox\AppData\Roaming\npm\node_modules\js-beautify\js\bin\js-beautify.js


8553623117
8013120742

9am

5097 south 900 east

073-00-4008

{"field" : "link:string", "type":"text", "validations": ""},
{"field" : "ext-link-1:string", "type":"text", "validations": ""},
{"field" : "ext-link-2:string", "type":"text", "validations": ""},

{"field" : "header-banner:string", "type":"file", "validations": ""},
{"field" : "image-left:string", "type":"file", "validations": ""},
{"field" : "image-right:string", "type":"file", "validations": ""},
{"field" : "image-content-footer:string", "type":"file", "validations": ""},

--login -i
"C:\Program Files (x86)\Git\bin\sh.exe" --login -i

MOVE C:\Users\phillip\Dropbox "G:\[affordable]"
MOVE C:\Users\phillip\phillip.rar "G:\[affordable]"
MOVE C:\Users\phillip\Dropbox "G:\[affordable]"

$script_path="$HOME\Documents\Scripts"; if (!(test-path $script_path)) {New-Item -ItemType directory $script_path} if (!(test-path $profile)) { new-item -path $profile -itemtype file -force }". $script_path\sudo.ps1" | Out-File $profile -append; "function sudo(){if (`$args.Length -eq 1){start-process `$args[0] -verb `"runAs`"} if (`$args.Length -gt 1){start-process `$args[0] -ArgumentList `$args[1..`$args.Length] -verb `"runAs`"}}" | Out-File $script_path\sudo.ps1; powershell

/c/Users/phillip/Dropbox  /g/[affordable]

/D C:\Users\phillip\Dropbox
G:\
MOVE C:\Users\phillip\Dropbox "G:\[affordable]"

/c/Users/phillip


public function up()
{
   Schema::create('categories', function (Blueprint $table) {
       $table->increments('id');
       $table->string('category_name')->unique();
       $table->timestamps();
   });

   Schema::create('subcategories', function (Blueprint $table) {
       $table->increments('id');
       $table->string('subcategory_name')->unique();
       $table->integer('category_id')->unsigned();
       $table->timestamps();
   });
}

public function down()
{
   Schema::drop('categories');
   Schema::drop('subcategories');
}


protected $fillable => ['first_name', 'last_name', 'email', 'password'];

@extends('layouts.master')

@section('title')

   <title>Create a Widget</title>

@endsection

@section('content')

   <div class="container first-line">

       {!! Breadcrumbs::withLinks(['Home' => '/', 'Widgets' => '/widget', 'Create']) !!}

   <h2>Create a New Widget</h2>

   <hr/>

   @include('errors.list')

       {!! Form::open(array('url' => '/widget', 'class' => 'form')) !!}

   <!-- widget_name Form Input -->

   <div class="form-group">

        {!! Form::label('widget_name', 'Widget Name') !!}
        {!! Form::text('widget_name', null, ['class' => 'form-control']) !!}

   </div>

   <div class="form-group">

        {!! Form::submit('Create Widget', ['class'=>'btn btn-primary']) !!}

   </div>

         {!! Form::close() !!}

   </div>

@endsection







{"font_face": "M+ 2m bold", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0},
{"font_face": "M+ 2m bold", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0},
{"font_face": "M+ 2m regular", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0},
{"font_face": "M+ 2m medium", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0},
{"font_face": "M+ 2m thin", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0},
{"font_face": "M+ 2m light", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0},
{"font_face" : "Comic Neue Light", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0},
{"font_face" : "Comic Neue Regular", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0},
{"font_face" : "Comic Neue Bold", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0},
{"font_face" : "Comic Neue Light Oblique", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0},
{"font_face" : "Comic Neue Regular Oblique", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0},
{"font_face" : "Comic Neue Bold Oblique", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0},
{"font_face" : "Comic Neue Angular Light", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0},
{"font_face" : "Comic Neue Angular Regular", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0},
{"font_face" : "Comic Neue Angular Bold", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0},
{"font_face" : "Comic Neue Angular Light Oblique", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0},
{"font_face" : "Comic Neue Angular Regular Oblique", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0},
{"font_face" : "Comic Neue Angular Bold Oblique", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0},
{"font_face": "crillee", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0},
{"font_face": "Amaranth", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0},
{"font_face": "crillee", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0},
{"font_face": "Consolas", "font_size": 9, "line_padding_bottom": 1, "line_padding_top": 0 },
{"font_face": "Courier", "font_size": 12 },
{"font_face": "Menlo", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0 },
{"font_face": "Andale Mono", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0 },
{"font_face": "Consolas", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0 },
{"font_face": "Courier", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0 },
{"font_face": "Courier New", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0 },
{"font_face": "Envy Code R", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0 },
{"font_face": "Inconsolata", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0 },
{"font_face": "Lucida Console", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0 },
{"font_face": "Comic Neue Angular Bold Oblique", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0 },
{"font_face": "Comic Neue Angular Bold" , "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0 },
{"font_face": "Comic Neue", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0 },
{"font_face": "Source Code Pro SemiBold", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0 },
{"font_face": "Droid Sans Mono", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0 },
{"font_face": "ProFontX", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0 },
{"font_face": "Source Code Pro", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0 },
{"font_face": "Ubuntu Mono", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0 },
{"font_face": "Dejavu Sans Condensed Bold" , "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0 },
{"font_face": "Dejavu Sans Condensed", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0 },
{"font_face": "Dejavu Sans", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0 },
{"font_face": "M+ 2m bold", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0 },
{"font_face": "M+ 2m regular", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0 },
{"font_face":"Source Code Pro", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0 },
{"font_face": "Ubuntu Mono", "font_size": 10, "line_padding_bottom": 1, "line_padding_top": 0 }