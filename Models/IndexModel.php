<?php

/** Autoloading The required Classes **/
class IndexModel
{
    public function getUsers()
    {
        $users = [
            ["name" => "Williams Isaac", "Phone Number" => "090982xxxxxx"],
            ["name" => "Oji Mike", "Phone Number"=> "080982xxxxxx"]
        ];
        return json_encode($users);
    }
}
