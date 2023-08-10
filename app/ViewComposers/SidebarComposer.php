<?php
namespace App\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use App\Models\departments;
use App\Models\position;

class SidebarComposer
{
    public function compose(View $view)
    {
        // ดึงข้อมูลที่คุณต้องการส่งไปยัง sidebar จากโมเดลหรืออื่น ๆ
        if(auth()->check()){
        $user = Auth::user();
        
            $usersData = DB::table('users')->leftJoin('position','users.role_id', '=','position.role_id') 
            ->select('users.*', 'position.*')
            ->where('users.user_id', '=', $user->user_id)
            ->get(); 
            // แทนที่ด้วยโค้ดการดึงข้อมูลของคุณ
            $datauser = array();

                foreach ($usersData as $userData) {
                    $datauser['level'] = $userData->level;
                    $datauser['department_id'] = $userData->department_id;
                    $datauser['role_id'] = $userData->role_id;
                    $datauser['img'] = $userData->avater;
                }
        
            $where ='';
                
            if($datauser['level'] == 1){
                $where  = " (departments.department_id = 0 OR departments.department_id =  ".$datauser['department_id'].")  AND status_user = 1 ";

            }

        
            $Data = DB::table('users')
            ->leftJoin('position','users.role_id', '=','position.role_id') 
            ->leftJoin('departments','departments.department_id', '=','users.department_id') 
            ->selectRaw('MAX(level) as maxlevel, MIN(level) as minlevel')
            ->whereRaw($where)
            ->get(); 

            foreach ($Data as $userData) {
                    $datauser['maxlevel'] = $userData->maxlevel;
                    $datauser['minlevel'] = $userData->minlevel;
                }

        
            print_r($datauser);
            $view->with(compact('datauser','user')); 
        }
        }
 
    }
