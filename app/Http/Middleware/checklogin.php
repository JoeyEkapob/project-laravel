<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checklogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            // ผู้ใช้ล็อกอินอยู่แล้ว กลับไปยังหน้าที่ต้องการ
            return $next($request);
        } else {
            // ผู้ใช้ยังไม่ได้ล็อกอิน ให้กลับไปที่หน้าล็อกอิน
            return redirect()->route('home')->with('error', 'กรุณาล็อกอินก่อนใช้งาน');
        }
       
    }
}
