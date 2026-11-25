<?php
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Settings;
use App\Models\PageMenuLink;
use App\Models\Destination;
use App\Models\StaticPageSeoManage;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

if (! function_exists('uploadImage')) {            // for image upload
    function uploadImage($filename, $folder) {
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'pdf'];
        $allowedMimes = [
            'image/jpeg',
            'image/png',
            'image/gif',
            'image/webp',
            'application/pdf',
        ];

        $ext = strtolower($filename->getClientOriginalExtension());
        $mime = $filename->getMimeType();

        if (!in_array($ext, $allowedExtensions, true) || !in_array($mime, $allowedMimes, true)) {
            throw new \InvalidArgumentException('Unsupported or disallowed file type uploaded.');
        }

        // Prevent path traversal in target folder
        $safeFolder = trim(str_replace(['..', '\\'], ['', '/'], $folder), '/');
        $baseName = pathinfo($filename->getClientOriginalName(), PATHINFO_FILENAME);
        $safeBase = preg_replace('/[^a-zA-Z0-9_-]/', '_', $baseName);
        $safeBase = substr($safeBase ?: 'file', 0, 80);

        $filenameWithExtention = date('Y-m-d-hisu') . '_' . Str::random(8) . '_' . $safeBase . '.' . $ext;
        $filename->move(public_path($safeFolder), $filenameWithExtention);
        return $safeFolder . '/' . $filenameWithExtention;
    }
}

   if (! function_exists('international')) {            // for international packages
        function international() {
                return Destination::where('type',2)->where('is_active',1)->get();
        }
       }

        if (! function_exists('national')) {            // for national packages
        function national() {
                return Destination::where('type',1)->where('is_active',1)->get();
        }
        }

       

   if (! function_exists('Settings')) {            // for image upload
        function Settings() {
                return Settings::find(1);
        }
       }


       if (! function_exists('StaticPageSeo')) {            // for image upload
        function StaticPageSeo() {
                return StaticPageSeoManage::find(1);
        }
       }


//        if (! function_exists('Dynamic_menu')) {            // for dymaic  menu's
//         function Dynamic_menu() {
//                 $pagemenulink=PageMenuLink::with(['menu','page'])->orderBy('order_by', 'ASC')->get();

//                         // Create an empty array to store the manipulated data
//                         $manipulatedData = [];

//                         // Loop through the original data to reformat it
//                         foreach ($pagemenulink as $item) {
//                         $menuId = $item['menu_id'];
//                         $menuName = $item['menu']['menu'];

//                         // Create an associative array to represent the menu item
//                         $menuItem = [
//                                 'page_name' => $item['page']['page_name'],
//                                 'slug' => $item['page']['slug'],
//                         ];

//                         // Check if the menu ID already exists in the manipulated data
//                         if (array_key_exists($menuId, $manipulatedData)) {
//                                 // If it exists, push the menu item to the existing menu ID
//                                 $manipulatedData[$menuId]['page'][] = $menuItem;
//                         } else {
//                                 // If it doesn't exist, create a new entry for the menu ID
//                                 $manipulatedData[$menuId] = [
//                                 'menu_id' => $menuId,
//                                 'menuName' => $menuName,
//                                 'page' => [$menuItem],
//                                 ];
//                         }
//                         }

//                         foreach ($manipulatedData as &$item) {
//                             $item['page_count'] = count($item['page']);
//                         }

//                         $manipulatedData = collect($manipulatedData)->map(function ($item) {
//                             $item['page_count'] = count($item['page']);
//                             return $item;
//                         })->toArray();


//                         // Reformat the data into a numerical indexed array
//                         return $manipulatedData = array_values($manipulatedData);
                
//         }
//        }




//        if (! function_exists('Dynamic_custom_menu')) {            // for Dynamic_custom_menu for footer
//         function Dynamic_custom_menu() {
//                 $pagemenulink=PageMenuLink::with(['menu','page'])->whereHas('page', function ($query) {
//                         $query->whereIn('page_type',['4','2']);
//                     })->get();

//                         // Create an empty array to store the manipulated data
//                         $manipulatedData = [];

//                         // Loop through the original data to reformat it
//                         foreach ($pagemenulink as $item) {
//                         $menuId = $item['menu_id'];
//                         $menuName = $item['menu']['menu'];

//                         // Create an associative array to represent the menu item
//                         $menuItem = [
//                                 'page_name' => $item['page']['page_name'],
//                                 'slug' => $item['page']['slug'],
//                         ];

//                         // Check if the menu ID already exists in the manipulated data
//                         if (array_key_exists($menuId, $manipulatedData)) {
//                                 // If it exists, push the menu item to the existing menu ID
//                                 $manipulatedData[$menuId]['page'][] = $menuItem;
//                         } else {
//                                 // If it doesn't exist, create a new entry for the menu ID
//                                 $manipulatedData[$menuId] = [
//                                 'menu_id' => $menuId,
//                                 'menuName' => $menuName,
//                                 'page' => [$menuItem],
//                                 ];
//                         }
//                         }

//                         foreach ($manipulatedData as &$item) {
//                             $item['page_count'] = count($item['page']);
//                         }

//                         $manipulatedData = collect($manipulatedData)->map(function ($item) {
//                             $item['page_count'] = count($item['page']);
//                             return $item;
//                         })->toArray();


//                         // Reformat the data into a numerical indexed array
//                 return $manipulatedData = array_values($manipulatedData);
//                         // dd($manipulatedData);
                
//         }
//        }


if (! function_exists('roleRoute')) {            // for image upload
        function roleRoute() {
                if (Auth::user()->isAdmin()) {
                        return 'admin';
                } elseif (Auth::user()->isUser()) {
                        return 'user';
                } 
                elseif (Auth::user()->isEventManager()) {
                        return 'event-manager';
                }
                elseif (Auth::user()->isSeoManager()) {
                        return 'seo-manager';
                }
        }
       }


