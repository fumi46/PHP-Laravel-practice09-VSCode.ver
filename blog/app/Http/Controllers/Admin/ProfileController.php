<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{   
    public function add()
    {
        return view('admin.profile.create');
    }
    //create(初回作成)アクション
    public function crete()
    {
        return redirect('admin/profile/create');
    }
    //edit(編集)アクション
    public function edit()
    {
        return view('admin.profile.edit');
    }
    //update(更新)アクション
    public function update()
    {
        return redirect('admin/profile/edit');
    }
}
