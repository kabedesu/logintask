<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    //タスク数のカウント取得関数
    public function counts($user) {
        $count_tasks = $user->tasks()->count();
        
        return[
            'count_tasks' => $count_tasks,
        ];
    }
}
