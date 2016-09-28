<?php

namespace App\Http\Middleware;

use Closure;
use Menu;
use View;

class MenuMiddleware {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        Menu::make('live_primary', function($menu) {
            $menu->add('Home', '/');
            $menu->add('Sewing Machines', getLang() . '/sewing-machines/qnique');
            $menu->add('Machine Frames', getLang() . '/machine-frames');
            $menu->add('Hand Quilting', getLang() . '/hand-quilting');
            $menu->add('Automated', getLang() . '/automation/qct');
            $menu->add('truecut', getLang() . '/');
            $menu->add('Community', getLang() . '/community');
            $shop = $menu->add('Shop', getLang() . '/shop', ['class' => 'sf-menu']);
            $shop->add('Cart', getLang() . '/shop/cart');
            $shop->add('Checkout', getLang() . '/shop/checkout');
            $menu->add('Blog', getLang() . '/articles');
            $menu->add('Contact', getLang() . '/contact');
        });

        Menu::make('disclosures', function($menu) {
            $menu->add('Terms Conditions', getLang() . '/page/tos');
            $menu->add('Privacy Policy', getLang() . '/page/pp');
            $menu->add('Returns', getLang() . '/page/returns');
            //$menu->add('Support', getLang() . '/page/support');
            $menu->add('Copyright', getLang() . '/page/copyright');
            $menu->add('Shipping Policy', getLang() . '/page/shipping-policy');
            // $menu->add('Search', getLang() . '/');
            // $menu->add('Sitemap', getLang() . '/sitemap');
            // $menu->add('Blog', getLang() . '/community/blog');
        });


        Menu::make('pagedisclusures', function($menu) {
            $menu->add('Copyright', getLang() . '/page/copyright');
            $menu->add('Privacy Policy', getLang() . '/page/pp');
            $menu->add('Returns', getLang() . '/page/returns');
            $menu->add('Shipping Policy', getLang() . '/page/shipping-policy');
            //$menu->add('Support', getLang() . '/page/support');
            $menu->add('Terms Conditions', getLang() . '/page/tos');
        });

        Menu::make('account', function($menu) {

            $menu->add('My Account', getLang() . '/my-account')->icon('user');
            $menu->add('Purchase History', getLang() . '/my-account');
            // $menu->add('Shipping Details', getLang() . '/my-account');
            // $menu->add('Refunds', getLang() . '/my-account');
            // $menu->add('Support', getLang() . '/my-account');
        });

        Menu::make('contact', function($menu) {

            $menu->add('My Account', getLang() . '/my-account')->icon('user');
            $menu->add('Support', getLang() . '/');
            // $menu->add('Shipping Details', getLang() . '/my-account');
            // $menu->add('Refunds', getLang() . '/my-account');
            // $menu->add('Support', getLang() . '/my-account');
        });

        Menu::make('category', function($menu) {

            $menu->add('TrueCut', getLang() . '/category/truecut');
            $menu->add('Hand Quilting', getLang() . '/category/hand-quilting');
            $menu->add('Machine Quilting', getLang() . '/category/machine-quilting');
            $menu->add('Qnique', getLang() . '/category/qnique');
            //$menu->add('Accessories', getLang() . '/category/accessories');
        });

        Menu::make('shop', function($menu) {
//            $menu->add('Shop', getLang() . '/shop')->icon('cart');
//            $menu->add('Cart', getLang() . '/shop/cart');
//            $menu->add('Checkout', getLang() . '/shop/cart/checkout');
//            $menu->add('TrueCut', getLang() . '/shop/truecut');
//            $menu->add('Hand Quilting', getLang() . '/shop/hand-quilting');
//            $menu->add('Machine Quilting', getLang() . '/shop/machine-quilting');
//            $menu->add('Qnique', getLang() . '/shop/qnique');
//            $menu->add('Accessories', getLang() . '/shop/accessories');
        });

        Menu::make('truecut', function($menu) {
            //$menu->add('TrueCut', getLang() . '/truecut');
            $menu->add('TrueCut 360', getLang() . '/truecut/truecut360');
            $menu->add('Comfort Cutter', getLang() . '/truecut/comfort-cutter/');
            $menu->add('TrueSharp', getLang() . '/truecut/truesharp');
            $menu->add('Rulers', getLang() . '/truecut/rulers');
            $menu->add('Cutting Table', getLang() . '/truecut/cutting-table');
            $menu->add('Cutting Mats', getLang() . '/truecut/cutting-mats');
            $menu->add('Linear Sharpener', getLang() . '/truecut/linear-sharpener');
            $menu->add('Accessories', getLang() . '/truecut/rotary-cutting-accessories');
        });

        // $menu->add('WHAT WE DO', getLang() . "/");
        // $menu->add('ABOUT US', getLang() . "/");
        // $menu->add('MANUFACTURING', getLang() . "/");
        // $menu->add('INVESTORS', getLang() . "/");
        // $menu->add('NEWS', getLang() . "/");
        // $menu->add('CAREERS', getLang() . "/");
        // $menu->add('CONTACT', getLang() . "/");

        Menu::make('homepage', function($menu) {
            //$about = $menu->add('The Grace Company', getLang() . '/about');
            //$about->add('WHAT WE DO', getLang() . "/");
            // $about->add('ABOUT US', getLang() . "/");
            $menu->add('Community', getLang() . '/');
            $menu->add('admin', 'admin/login');
            //$menu->add('News', getLang() . '/community/news/');
            //$menu->add('FAQ\'s', getLang() . '/');
            //$menu->add('Tutorials', getLang() . '/');
            //$menu->add('Manufacturing', getLang() . "/");
            //$menu->add('Careers', getLang() . "/careers");
            //$menu->add('Investors', getLang() . "/");
            //  $menu->add('Support', getLang() . '/');

            $menu->add('Shop Now', getLang() . '/shop');
            //$shop = $menu->add('Shop Again', getLang() . '/shop', ['class' => 'button button-rounded button-border']);
        });

        Menu::make('qct', function($menu) {
            $menu->add('Quilter&#39;s Creative Touch', getLang() . '/automation/qct/qct');
            $menu->add('Feature List', getLang() . '/automation/qct/features');
            $menu->add('Compare Versions', getLang() . '/automation/qct/compare');
            $menu->add('Specs', getLang() . '/automation/qct/specs');
            //$menu->add('Tutorials', getLang() . '/automation/qct/tutorials');
            $menu->add('Support', getLang() . '/automation/qct/support');
            $menu->add('Get QCT Now', getLang() . '/automation/qct/purchase');
            //$menu->add('Get QCT Now', getLang() . '/automation/qct/purchase', ['class' => 'button button-rounded button-border']);
        });

        Menu::make('hand', function($menu) {
            $menu->add('Hand Quilting', getLang() . '/hand-quilting');
            $menu->add('Z44 Frame', getLang() . '/hand-quilting/z44-frame');
            $menu->add('Start-Right EZ3', getLang() . '/hand-quilting/start-right-ez3');
            $menu->add('Grace Hoop 2', getLang() . '/hand-quilting/grace-hoop-2');
            $menu->add('Lap Hoops', getLang() . '/hand-quilting/grace-lap-hoops');
            $menu->add('GracieBee', getLang() . '/hand-quilting/graciebee');
            $menu->add('Accessories', getLang() . '/hand-quilting/accessories');
            $menu->add('Compare Frames', getLang() . '/hand-quilting/compare-frames');
        });

        Menu::make('machine', function($menu) {
            $menu->add('Machine Quilting Frames', getLang() . '/machine-frames');
            $menu->add('GQ Frame', getLang() . '/machine-frames/gq-frame');
            $menu->add('Gracie King & Queen', getLang() . '/machine-frames/gracie-kq');
            $menu->add('SR-2 Frame', getLang() . '/machine-frames/sr-2-frame');
            $menu->add('Accessories', getLang() . '/machine-frames/accessories');
            $menu->add('Compare Frames', getLang() . '/machine-frames/compare-machine-frames');
        });

        Menu::make('industry', function($menu) {
            $menu->add('Promos', getLang() . '/community/');
            $menu->add('Contests', getLang() . '/community/');
            $menu->add('FAQ\'S', getLang() . '/community/');
            $menu->add('Forum', getLang() . '/community/');
            $menu->add('Videos', getLang() . '/community/');
            $menu->add('Tutorials', getLang() . '/community/');
        });

        Menu::make('qnique', function($menu) {

            $menu->add('Qnique', getLang() . '/sewing-machines/qnique');
//            $menu->add('Features', getLang() . '/sewing-machines/qnique/features');
            //          $menu->add('Specs', getLang() . '/sewing-machines/qnique/specs');
            $menu->add('Accessories', getLang() . '/sewing-machines/qnique/accessories');
            //   $menu->add('Comparison', getLang() . '/sewing-machines/qnique/comparison');
        });

        Menu::make('blog', function($menu) {
            // $menu->add('News', getLang() . '/news');
            $menu->add('Events', getLang() . '/events');
            $menu->add('Promos', getLang() . '/');
            $menu->add('Contests', getLang() . '/');
            $menu->add('Forum', getLang() . '/');
        });


        Menu::make('popular', function($menu) {
            $menu->add('Documentation', getLang() . '/docs');
            $menu->add('Software', getLang() . '/');
            $menu->add('FAQ\'s', getLang() . '/');
            $menu->add('Support Forums', getLang() . '/');
            $menu->add('Press & News', getLang() . '/');
            $menu->add('Blog', getLang() . '/community/blog');
            $menu->add('Quilting Community', getLang() . '/');
        });

        Menu::make('page', function($menu) {
            $menu->add('Community', getLang() . '/docs');
            $menu->add('Support Forums', getLang() . '/');
            $menu->add('Press & News', getLang() . '/');
            $menu->add('Blog', getLang() . '/community/blog');
            $menu->add('Quilting Community', getLang() . '/');
        });

        return $next($request);
    }

}
