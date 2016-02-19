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
    if($type != null){
        return \App\Entities\User::find(auth()->user()->id)->notifications()->where('type',$type)->get();
    }

    return \App\Entities\User::find(auth()->user()->id)->notifications;
}