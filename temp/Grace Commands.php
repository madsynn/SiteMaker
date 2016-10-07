<?php
phpartisanmake:migration:schemacreate_tasks_table--schema='name:string';phpartisancrud:genaddress--fields='nickname:string:nullable,address_type:string:nullable,address:string:nullable,street:string:nullable,street_additional:string:nullable,city:string:nullable,state:string:nullable,country:string:nullable,postal:string:nullable,latitude:string:nullable,longitude:string:nullable,user_id:integer:unsigned'phpartisancrud:genprofile--fields='uuid:uuid,username:string,display_name:string,gender:enum,dob:date,dob_month:string,dob_day:string,dob_year:text,bio:text,phone_type:enum,phone:string,address_id:string,user_api_key:string,user_api_secret:string,user_activation_key:string,slug:string,activation_code_id:string,activation_code:string,confirmation_code:string,position:string,company:string,website:string,skypeid:string,supervisor:string,employment_status:enum,employment_title:string,employment_role:string,published:boolean,activated:boolean,remember:boolean,confirmed:boolean,is_employee:boolean,is_fake:boolean,published_on:timestamp,activated_on:timestamp,pic:string';phpartisanmake:migration:schemacreate_addresses_table--schema='nickname:string:nullable,address_type:string:nullable,address:string:nullable,street:string:nullable,street_additional:string:nullable,city:string:nullable,state:string:nullable,country:string:nullable,postal:string:nullable,latitude:string:nullable,longitude:string:nullable,user_id:integer:foreign';phpartisanphillips:create-crudProfile--fieldsFile='/database/inputfields/profile.json'--skipMigration;$flight=newFlight;$flight->name=$request->name;$flight->save();Youhavetopassoption--fieldsFile=absolute_file_path_or_path_from_base_directorywithcommand.e.g.phpartisanphillips:create-crudProfile--fieldsFile='/database/inputfields/profile.json'--skipMigration;phpartisanphillips:create-crudProfile--fieldsFile="fields.json



$faker->boolean($chanceOfGettingTrue = 50),




Table Structure > profile view > profile edit view > registration page > user permission system?


             $profile = new Profile([
                    'display_name' => $user['first_name'] . $user['last_name'],
            ]);
$user = App\User::all();


$user = new App\Models\User;
$user->email = 'pmasen2013@gamil.com';
$user->name = 'phillip';
$user->password = bcrypt('admin');
$profile = new App\Models\Profile;
$profile->user_id = $user->id;
$profile->first_name = 'phillip';
$profile->last_name = 'madsen';
$profile->website = 'www.test.com';
$profile->company = 'testing house';
$profile->pic = '';
$profile->gender = 'male';
$profile->dob = '1976-09-13';
$profile->about_me = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut nim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
$profile->twittername = 'BigTester';
$profile->linkedinurl = $faker->url;
$profile->googleplusurl = 'http://plus.google.com';
$profile->facebookurl = 'http://www.facebook.com';
$profile->phone = '8015555555';
$profile->activated = true;
$profile->profile_activated_on = Carbon\Carbon::now();
$profile->user_api_key = $faker->uuid;
$profile->user_api_secret = str_random(64);
$profile->user_activation_key = str_random(128);
$profile->activation_code = str_random(15);
$profile->confirmation_code = str_random(4);
$profile->activated_on = Carbon\Carbon::now();
$profile->last_login = $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now');
$profile->published_on = Carbon\Carbon::now();
$profile->published = $faker->boolean($chanceOfGettingTrue = 50);
$profile->activated = $faker->boolean($chanceOfGettingTrue = 50);
$profile->remember = $faker->boolean($chanceOfGettingTrue = 50);
$profile->is_fake = $faker->boolean($chanceOfGettingTrue = 100);
$profile->slug = $faker->slug;
$profile->created_at = Carbon\Carbon::now();
$profile->updated_at = Carbon\Carbon::now();

$user->save();
$profile = $user->profile()->save($profile);
$user = App\User::all()->toArray();


$profile = App\Profile::all();
$profile = App\Profile::all()->toArray();

$user = App\User::all();
$user = App\User::all()->toArray();


$profile->save();










$user = new App\Models\User;
$user->email = 'pmasen2013@gamil.com';
$user->username = 'admin';
$user->name = 'phillipmadsen';
$user->password = bcrypt('admin');
$user->profile_id = new  App\Models\Profile('id' => $user->id);



$user->id =
$user->username =
$user->email =
$user->password =
$user->name =
$user->slug =
$user->ip =
$user->user_role =
$user->published =
$user->activated =
$user->remember =
$user->is_fake =
$user->confirmed =
$user->is_employee =
$user->activated_at =
$user->published_on =
$user->last_login =
$user->address_id =
$user->article_id =
$user->billing_id =
$user->profile_id =
$user->software_id =
$user->shipping_id =
$user->task_id =
$user->deleted_at =
$user->created_at =
$user->updated_at =
$user->employee_hr_id =
$user->question_id =
$user->page_id =
$user->group_id =
$user->avatar =
$user->permissions =
$user->prefered_language =







App\Models\User::all()->toArray();

$profile = new App\Profile;

$address = new App\Address;

$user->username = 'username';
$user->email = 'yo@gmail.com';
$user->password = Hash::make('admin');
$profile->display_name = 'display name';
$profile->first_name = 'phillip';
$profile->last_name = 'madsen';
$profile->user_api_key = 'asdfasdfsdfd';
$profile->user_api_secret = 'werrtertertert';
$profile->user_activation_key = '654654684';
$profile->activation_code = '11111111pp';
$profile->confirmation_code = '9751245';
$profile->published = true;
$profile->activated = true;
$profile->remember = false;
$profile->is_fake = true;
$profile->name = 'normal norman';
$profile->slug = 'slug-norman';





$profile->website = 'www.test.com';
$profile->company = 'testing house';
$profile->gender = 'male';
$profile->bio = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut nim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
$profile->twitterid = 'BigTester';
$profile->googleplusurl = 'http://plus.google.com';
$profile->facebookurl = 'http://www.facebook.com'
$profile->phone = '8015555555'
$profile->activated = true;
$profile->published = true;
$profile->slug = 'username-profile';







$user->save();
App\User::all()->toArray();






        factory(App\User::class, 10)->create();
        factory(App\Profile::class, 10)->create();

$user->profile()->where('published', 1)->get();

















php artisan migrate:reset --pretend


   id: 1,
   website: null,
   company: null,
   profile_activated: 0,
   profile_activated_on: "0000-00-0000:00:00',
   profile_published: 0,
   uuid: null,
   username: null,
   first_name: 'phillip',
   last_name: 'madsen',
   display_name: null,
   pic: null,
   about_me: null,
   gender: null,
   dob: null,
   dob_month: null,
   dob_day: null,
   dob_year: null,
   phone_type: null,
   phone: null,
   published: 0,
   activated: 0,
   remember: 0,
   confirmed: 0,
   user_api_key: 0,
   user_api_secret: 0,
   user_activation_key: 0,
   activation_code_id: null,
   activation_code: null,
   confirmation_code: null,
   activated_on: null,
   last_login: null,
   published_on: null,
   deleted_at: null,
   is_employee: 0,
   position: null,
   supervisor: null,
   employment_status: null,
   employment_title: null,
   employment_role: null,
   skypeid: null,
   twittername: null,
   linkedinurl: null,
   googleplusurl: null,
   facebookurl: null,
   githubid: null,
   location: null,
   from: null,
   to: null,
   note: null,
   is_fake: 0,
   slug: null,
   user_id: 1,
   created_at: '2016-01-0415:46:58',
   updated_at: '2016-01-0415:46:58",










uuid
username
display_name
bio
published
activated
remember
confirmed
is_employee
is_fake
slug
address_id
user_api_key
user_api_secret
user_activation_key
activation_code_id
activation_code
confirmation_code
confirmation
confirmed
gender
dob
dob_month
dob_day
dob_year
phone_type
phone
InnoDB
username

public function scopeGetById($query, $id)
    {
        return $query->where('user_id', Auth::user()->id)->where('id', $id);
    }

 $builder->setModel($this)->with($this->with);

        if ($user = \Illuminate\Support\Facades\Auth::user()) {
            $builder->where('user_id', '=', $user->id);
        }
factory('App\Models\User')->create();

 {"field':'user_id:integer:unsigned:foreign:references,id:on,users:onDelete,cascade', 'type':'select', 'validations': ''},

{'field' : 'phone_type:string', 'type':'select:Home,Mobile,Work,Other[{'field':'user_id:integer:unsigned:foreign:references,id:on,users:onDelete,cascade','type':'select','validations':''},{'field':'first_name:string:nullable','type':'text','validations':''},{'field':'last_name:string:nullable','type':'text','validations':''},{'field':'display_name:string:nullable','type':'text','validations':''},{'field':'position:string','type':'text','validations':''},{'field':'supervisor:string','type':'text','validations':''},{'field':'employment_title:string','type':'text','validations':''},{'field':'employment_role:string','type':'text','validations':''},{'field':'employment_status:string','type':'select:Active Full-Time,ActivePart-time,OnContract,OnLeave,Terminated','validations':''},{'field':'phone:string:nullable','type':'text','validations':''},{'field':'phone_type:string','type':'select:Home,Mobile,Work,Other','validations':''},{'field':'website:string:nullable','type':'text','validations':''},{'field':'company:string:nullable','type':'text','validations':''},{'field':'pic:string','type':'file','validations':''},{'field':'gender:string','type':'select:Male,Female','validations':''},{'field':'date_of_birth:timestamp','type':'date','validations':''},{'field':'dob_month:string','type':'select:01,02,03,04,05,06,07,08,09,10,11,12','validations':''},{'field':'dob_day:string','type':'select:01,02,03,04,05,06,07,08,09,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30','validations':''},{'field':'dob_year:string:default,1980','type':'text','validations':''},{'field':'about_me:text','type':'textarea','validations':''},{'field':'skypeid:string:nullable','type':'text','validations':''},{'field':'twittername:string','type':'text','validations':''},{'field':'linkedinurl:string','type':'text','validations':''},{'field':'googleplusurl:string','type':'text','validations':''},{'field':'facebookurl:string','type':'text','validations':''},{'field':'user_api_key:string','type':'text','validations':''},{'field':'user_api_secret:string','type':'text','validations':''},{'field':'user_activation_key:string','type':'text','validations':''},{'field':'activation_code_id:string','type':'text','validations':''},{'field':'activation_code:string','type':'text','validations':''},{'field':'confirmation_code:string','type':'text','validations':''},{'field':'confirmed:boolean','type':'checkbox','validations':''},{'field':'activated:boolean','type':'checkbox','validations':''},{'field':'activated:boolean:default,0','type':'checkbox','validations':''},{'field':'profile_activated_on:timestamp','type':'date','validations':''},{'field':'published:boolean:default,0','type':'checkbox','validations':''},{'field':'activation_code:string,255:nullable','type':'text','validations':''},{'field':'last_login:timestamp','type':'date','validations':''},{'field':'slug:string:nullable','type':'text','validations':''},{'field':'activated_on:timestamp','type':'date','validations':''},{'field':'published_on:timestamp','type':'date','validations':''},{'field':'last_login:timestamp','type':'date','validations':''},{'field':'note:text','type':'textarea','validations':''},]