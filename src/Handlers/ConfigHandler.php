<?php

namespace UniSharp\LaravelFilemanager\Handlers;
use Illuminate\Support\Str;

class ConfigHandler
{
    public function userField()
    {
        // I don't know LfmConfigHandler.php not working after modified following documentation, so I edit here
        // superadmin can access to user directory, make sure chmod 777 -R files
        // user directory using name with slug, easy superadmin to browse files
        $name = auth()->user()->name;
        $name_slug = Str::slug($name, '_');
        $role = auth()->user()->role;

        if($role == "superadmin"){
          return 'superadmin';
        }else{
          return 'superadmin/'.$name_slug;
        }
    }
}
