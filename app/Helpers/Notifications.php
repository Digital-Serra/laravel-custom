<?php

//Notifications Helper


/**
 * Retrieve notifications for the given authenticated user
 *
 *
 * @param null $type The type must be null or one of: "info", "success", "error", or "warning"
 * @return mixed
 */
function notifications($type = null){
    $available_types = ["info","success","error","warning",null];

    if(!in_array($type,$available_types)){
        throw new \InvalidArgumentException("The type of notification must be be one of: \"info\", \"success\", \"error\", or \"warning\"");
    }

    if($type != null){
        return \App\Entities\User::find(auth()->user()->id)->notifications()->where('type',$type)->get();
    }

    return \App\Entities\User::find(auth()->user()->id)->notifications;
}